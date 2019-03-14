package main

import (
	"context"
	"flag"
	"log"
	"time"

	"google.golang.org/grpc"
	v1 "github.com/jtcosta/travelExp/pkg/api/v1"
)

const (
	// apiVersion is version of API is provided by server
	apiVersion = "v1"
)

func main() {
	// get configuration
	address := flag.String("server", "", "gRPC server in format host:port")
	flag.Parse()

	// Set up a connection to the server.
	conn, err := grpc.Dial(*address, grpc.WithInsecure())
	if err != nil {
		log.Fatalf("did not connect: %v", err)
	}
	defer conn.Close()

	c := v1.NewHotelServiceClient(conn)

	ctx, cancel := context.WithTimeout(context.Background(), 5*time.Second)
	defer cancel()


	var lat int32 = -40;
	var long int32 = 34;

	// Call Create
	req1 := v1.CreateRequest{
		Api: apiVersion,
		Hotel: &v1.Hotel{
			Name:       "teste",
			City: "porto",
			Country: "portugal",
			Phone: "+351935566326",
			Description: "teste",
			Lat: lat,
			Long: long,
		},
	}
	res1, err := c.Create(ctx, &req1)
	if err != nil {
		log.Fatalf("Create failed: %v", err)
	}
	log.Printf("Create result: <%+v>\n\n", res1)

	
}