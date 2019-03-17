<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: hotel-service.proto

namespace V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>v1.Hotel</code>
 */
class Hotel extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int64 id = 1;</code>
     */
    private $id = 0;
    /**
     * <code>string name = 2;</code>
     */
    private $name = '';
    /**
     * <code>string city = 3;</code>
     */
    private $city = '';
    /**
     * <code>string country = 4;</code>
     */
    private $country = '';
    /**
     * <code>string phone = 5;</code>
     */
    private $phone = '';
    /**
     * <code>string description = 6;</code>
     */
    private $description = '';
    /**
     * <code>sint32 lat = 7;</code>
     */
    private $lat = 0;
    /**
     * <pre>
     * google.protobuf.Timestamp createdAt = 9;
     * google.protobuf.Timestamp updatedAt = 10;
     * </pre>
     *
     * <code>sint32 long = 8;</code>
     */
    private $long = 0;

    public function __construct() {
        \GPBMetadata\HotelService::initOnce();
        parent::__construct();
    }

    /**
     * <code>int64 id = 1;</code>
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <code>int64 id = 1;</code>
     */
    public function setId($var)
    {
        GPBUtil::checkInt64($var);
        $this->id = $var;
    }

    /**
     * <code>string name = 2;</code>
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <code>string name = 2;</code>
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;
    }

    /**
     * <code>string city = 3;</code>
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * <code>string city = 3;</code>
     */
    public function setCity($var)
    {
        GPBUtil::checkString($var, True);
        $this->city = $var;
    }

    /**
     * <code>string country = 4;</code>
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * <code>string country = 4;</code>
     */
    public function setCountry($var)
    {
        GPBUtil::checkString($var, True);
        $this->country = $var;
    }

    /**
     * <code>string phone = 5;</code>
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * <code>string phone = 5;</code>
     */
    public function setPhone($var)
    {
        GPBUtil::checkString($var, True);
        $this->phone = $var;
    }

    /**
     * <code>string description = 6;</code>
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * <code>string description = 6;</code>
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;
    }

    /**
     * <code>sint32 lat = 7;</code>
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * <code>sint32 lat = 7;</code>
     */
    public function setLat($var)
    {
        GPBUtil::checkInt32($var);
        $this->lat = $var;
    }

    /**
     * <pre>
     * google.protobuf.Timestamp createdAt = 9;
     * google.protobuf.Timestamp updatedAt = 10;
     * </pre>
     *
     * <code>sint32 long = 8;</code>
     */
    public function getLong()
    {
        return $this->long;
    }

    /**
     * <pre>
     * google.protobuf.Timestamp createdAt = 9;
     * google.protobuf.Timestamp updatedAt = 10;
     * </pre>
     *
     * <code>sint32 long = 8;</code>
     */
    public function setLong($var)
    {
        GPBUtil::checkInt32($var);
        $this->long = $var;
    }

}
