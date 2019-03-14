package v1

import (
	"context"
	"database/sql"
	
	"google.golang.org/grpc/codes"
	"google.golang.org/grpc/status"

	v1 "../../api/v1"
)

const (
	apiVersion = "v1"
)

// HotelServiceServer is implementation of v1.HotelServiceServer proto interface
type HotelServiceServer struct {
	db *sql.DB
}

// NewToDoServiceServer creates Hotel service
func NewHotelServiceServer(db *sql.DB) v1.HotelServiceServer {
	return &HotelServiceServer{db: db}
}

// checkAPI checks if the API version requested by client is supported by server
func (s *HotelServiceServer) checkAPI(api string) error {
	// API version is "" means use current version of the service
	if len(api) > 0 {
		if apiVersion != api {
			return status.Errorf(codes.Unimplemented,
				"unsupported API version: service implements API version '%s', but asked for '%s'", apiVersion, api)
		}
	}
	return nil
}

// connect returns SQL database connection from the pool
func (s *HotelServiceServer) connect(ctx context.Context) (*sql.Conn, error) {
	c, err := s.db.Conn(ctx)
	if err != nil {
		return nil, status.Error(codes.Unknown, "failed to connect to database-> "+err.Error())
	}
	return c, nil
}

// Create new Hotel
func (s *HotelServiceServer) Create(ctx context.Context, req *v1.CreateRequest) (*v1.CreateResponse, error) {
	// check if the API version requested by client is supported by server
	if err := s.checkAPI(req.Api); err != nil {
		return nil, err
	}

	// get SQL connection from pool
	c, err := s.connect(ctx)
	if err != nil {
		return nil, err
	}
	defer c.Close()

	// insert Hotel entity data
	res, err := c.ExecContext(ctx, 
	`INSERT INTO "hotel"("name", "city", "country", "phone", "description", "lat", "long") 
	VALUES (?, ?, ?, ?, ?, ?, ?)`,
	req.Hotel.Name, req.Hotel.City, req.Hotel.Country, req.Hotel.Phone, req.Hotel.Description, req.Hotel.Lat, req.Hotel.Long)
	if err != nil {
		return nil, status.Error(codes.Unknown, "failed to insert into Hotel-> "+err.Error())
	}

	// get ID of created Hotel
	id, err := res.LastInsertId()
	if err != nil {
		return nil, status.Error(codes.Unknown, "failed to retrieve id for created Hotel-> "+err.Error())
	}

	return &v1.CreateResponse{
		Api: apiVersion,
		Id:  id,
	}, nil
}



















