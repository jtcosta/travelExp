<?php
// GENERATED CODE -- DO NOT EDIT!

namespace V1;

/**
 */
class HotelServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \V1\CreateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Create(\V1\CreateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/v1.HotelService/Create',
        $argument,
        ['\V1\CreateResponse', 'decode'],
        $metadata, $options);
    }

}
