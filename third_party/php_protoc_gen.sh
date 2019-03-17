#!/usr/bin/env bash

/usr/local/bin/protoc --proto_path=api/proto/v1  --grpc_out=frontend/api/v1/hotel --php_out=frontend/api/v1/hotel --plugin=protoc-gen-grpc=%GOPATH/bin/grpc_php_plugin api/proto/v1/hotel-service.proto
