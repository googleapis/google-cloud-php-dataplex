<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/logs.proto

namespace Google\Cloud\Dataplex\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * These messages contain information about sessions within an environment.
 * The monitored resource is 'Environment'.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.SessionEvent</code>
 */
class SessionEvent extends \Google\Protobuf\Internal\Message
{
    /**
     * The log message.
     *
     * Generated from protobuf field <code>string message = 1;</code>
     */
    protected $message = '';
    /**
     * The information about the user that created the session.
     *
     * Generated from protobuf field <code>string user_id = 2;</code>
     */
    protected $user_id = '';
    /**
     * Unique identifier for the session.
     *
     * Generated from protobuf field <code>string session_id = 3;</code>
     */
    protected $session_id = '';
    /**
     * The type of the event.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.SessionEvent.EventType type = 4;</code>
     */
    protected $type = 0;
    protected $detail;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $message
     *           The log message.
     *     @type string $user_id
     *           The information about the user that created the session.
     *     @type string $session_id
     *           Unique identifier for the session.
     *     @type int $type
     *           The type of the event.
     *     @type \Google\Cloud\Dataplex\V1\SessionEvent\QueryDetail $query
     *           The execution details of the query.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Logs::initOnce();
        parent::__construct($data);
    }

    /**
     * The log message.
     *
     * Generated from protobuf field <code>string message = 1;</code>
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * The log message.
     *
     * Generated from protobuf field <code>string message = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->message = $var;

        return $this;
    }

    /**
     * The information about the user that created the session.
     *
     * Generated from protobuf field <code>string user_id = 2;</code>
     * @return string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * The information about the user that created the session.
     *
     * Generated from protobuf field <code>string user_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setUserId($var)
    {
        GPBUtil::checkString($var, True);
        $this->user_id = $var;

        return $this;
    }

    /**
     * Unique identifier for the session.
     *
     * Generated from protobuf field <code>string session_id = 3;</code>
     * @return string
     */
    public function getSessionId()
    {
        return $this->session_id;
    }

    /**
     * Unique identifier for the session.
     *
     * Generated from protobuf field <code>string session_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSessionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->session_id = $var;

        return $this;
    }

    /**
     * The type of the event.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.SessionEvent.EventType type = 4;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of the event.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.SessionEvent.EventType type = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dataplex\V1\SessionEvent\EventType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * The execution details of the query.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.SessionEvent.QueryDetail query = 5;</code>
     * @return \Google\Cloud\Dataplex\V1\SessionEvent\QueryDetail|null
     */
    public function getQuery()
    {
        return $this->readOneof(5);
    }

    public function hasQuery()
    {
        return $this->hasOneof(5);
    }

    /**
     * The execution details of the query.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.SessionEvent.QueryDetail query = 5;</code>
     * @param \Google\Cloud\Dataplex\V1\SessionEvent\QueryDetail $var
     * @return $this
     */
    public function setQuery($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\SessionEvent\QueryDetail::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getDetail()
    {
        return $this->whichOneof("detail");
    }

}

