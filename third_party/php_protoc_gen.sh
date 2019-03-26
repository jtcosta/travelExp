#!/usr/bin/env bash

protoc \
--proto_path=api/proto/v1 \
--proto_path=$GOPATH/src \
--proto_path=$GOPATH/src/github.com \
--proto_path=$GOPATH/src/github.com/grpc-ecosystem/grpc-gateway/third_party/googleapis \
--grpc_out=frontend/api/v1/hotel \
--php_out=frontend/api/v1/hotel \
--plugin=protoc-gen-grpc=$GOPATH/bin/grpc_php_plugin \
--grpc-gateway_out=logtostderr=true:. \
--swagger_out=logtostderr=true:. \
hotel-service.proto
