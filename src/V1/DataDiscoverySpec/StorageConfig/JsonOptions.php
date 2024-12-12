<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/data_discovery.proto

namespace Google\Cloud\Dataplex\V1\DataDiscoverySpec\StorageConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes JSON data format.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.DataDiscoverySpec.StorageConfig.JsonOptions</code>
 */
class JsonOptions extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The character encoding of the data. The default is UTF-8.
     *
     * Generated from protobuf field <code>string encoding = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $encoding = '';
    /**
     * Optional. Whether to disable the inference of data types for JSON data.
     * If true, all columns are registered as their primitive types
     * (strings, number, or boolean).
     *
     * Generated from protobuf field <code>bool type_inference_disabled = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $type_inference_disabled = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $encoding
     *           Optional. The character encoding of the data. The default is UTF-8.
     *     @type bool $type_inference_disabled
     *           Optional. Whether to disable the inference of data types for JSON data.
     *           If true, all columns are registered as their primitive types
     *           (strings, number, or boolean).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\DataDiscovery::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The character encoding of the data. The default is UTF-8.
     *
     * Generated from protobuf field <code>string encoding = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getEncoding()
    {
        return $this->encoding;
    }

    /**
     * Optional. The character encoding of the data. The default is UTF-8.
     *
     * Generated from protobuf field <code>string encoding = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setEncoding($var)
    {
        GPBUtil::checkString($var, True);
        $this->encoding = $var;

        return $this;
    }

    /**
     * Optional. Whether to disable the inference of data types for JSON data.
     * If true, all columns are registered as their primitive types
     * (strings, number, or boolean).
     *
     * Generated from protobuf field <code>bool type_inference_disabled = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getTypeInferenceDisabled()
    {
        return $this->type_inference_disabled;
    }

    /**
     * Optional. Whether to disable the inference of data types for JSON data.
     * If true, all columns are registered as their primitive types
     * (strings, number, or boolean).
     *
     * Generated from protobuf field <code>bool type_inference_disabled = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setTypeInferenceDisabled($var)
    {
        GPBUtil::checkBool($var);
        $this->type_inference_disabled = $var;

        return $this;
    }

}

