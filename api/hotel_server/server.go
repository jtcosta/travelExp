package main;

import(
	"log"
	"net"
	"fmt"
	"google.golang.org/grpc"
	hotel "../proto/v1/hotel"
)

type server struct{}

func main(){
	fmt.Println("Serving");
	lis, err := net.Listen("tcp", "0.0.0.0:50051")
	if err != nil {
		log.Fatalf("failed to listen %v", err)
	}
	 
	s:= grpc.NewServer()
	hotel.RegisterHotelServiceServer(s, &server{});
	
	if err:= s.Serve(lis); err !=nil {
		log.Fatalf("Failed to serve: %v", err);
	}
}