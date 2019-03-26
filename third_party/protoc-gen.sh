protoc \
--proto_path=api/proto/v1 \
--proto_path=$GOPATH/src \
--proto_path=$GOPATH/src/github.com \
--proto_path=$GOPATH/src/github.com/grpc-ecosystem/grpc-gateway/third_party/googleapis \
--go_out=plugins=grpc:pkg/api/v1 \
--grpc-gateway_out=logtostderr=true:. \
--swagger_out=logtostderr=true:. \
hotel-service.proto
