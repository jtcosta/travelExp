<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: hotel-service.proto

namespace V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\GPBWrapperUtils;

/**
 * Generated from protobuf message <code>v1.CreateRequest</code>
 */
class CreateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string api = 1;</code>
     */
    private $api = '';
    /**
     * Generated from protobuf field <code>.v1.Hotel hotel = 2;</code>
     */
    private $hotel = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $api
     *     @type \V1\Hotel $hotel
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\HotelService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string api = 1;</code>
     * @return string
     */
    public function getApi()
    {
        return $this->api;
    }

    /**
     * Generated from protobuf field <code>string api = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setApi($var)
    {
        GPBUtil::checkString($var, True);
        $this->api = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.v1.Hotel hotel = 2;</code>
     * @return \V1\Hotel
     */
    public function getHotel()
    {
        return $this->hotel;
    }

    /**
     * Generated from protobuf field <code>.v1.Hotel hotel = 2;</code>
     * @param \V1\Hotel $var
     * @return $this
     */
    public function setHotel($var)
    {
        GPBUtil::checkMessage($var, \V1\Hotel::class);
        $this->hotel = $var;

        return $this;
    }

}

