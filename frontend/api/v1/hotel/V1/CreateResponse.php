<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: hotel-service.proto

namespace V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>v1.CreateResponse</code>
 */
class CreateResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>string api = 1;</code>
     */
    private $api = '';
    /**
     * <code>int64 id = 2;</code>
     */
    private $id = 0;

    public function __construct() {
        \GPBMetadata\HotelService::initOnce();
        parent::__construct();
    }

    /**
     * <code>string api = 1;</code>
     */
    public function getApi()
    {
        return $this->api;
    }

    /**
     * <code>string api = 1;</code>
     */
    public function setApi($var)
    {
        GPBUtil::checkString($var, True);
        $this->api = $var;
    }

    /**
     * <code>int64 id = 2;</code>
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <code>int64 id = 2;</code>
     */
    public function setId($var)
    {
        GPBUtil::checkInt64($var);
        $this->id = $var;
    }

}

