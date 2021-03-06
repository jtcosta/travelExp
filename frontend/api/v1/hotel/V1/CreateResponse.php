<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: hotel-service.proto

namespace V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\GPBWrapperUtils;

/**
 * Generated from protobuf message <code>v1.CreateResponse</code>
 */
class CreateResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string api = 1;</code>
     */
    private $api = '';
    /**
     * Generated from protobuf field <code>int64 id = 2;</code>
     */
    private $id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $api
     *     @type int|string $id
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
     * Generated from protobuf field <code>int64 id = 2;</code>
     * @return int|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>int64 id = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt64($var);
        $this->id = $var;

        return $this;
    }

}

