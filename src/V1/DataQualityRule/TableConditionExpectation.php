<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/data_quality.proto

namespace Google\Cloud\Dataplex\V1\DataQualityRule;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Evaluates whether the provided expression is true.
 * The SQL expression needs to use [GoogleSQL
 * syntax](https://cloud.google.com/bigquery/docs/reference/standard-sql/query-syntax)
 * and should produce a scalar boolean result.
 * Example: MIN(col1) >= 0
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.DataQualityRule.TableConditionExpectation</code>
 */
class TableConditionExpectation extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The SQL expression.
     *
     * Generated from protobuf field <code>string sql_expression = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $sql_expression = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $sql_expression
     *           Optional. The SQL expression.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\DataQuality::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The SQL expression.
     *
     * Generated from protobuf field <code>string sql_expression = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getSqlExpression()
    {
        return $this->sql_expression;
    }

    /**
     * Optional. The SQL expression.
     *
     * Generated from protobuf field <code>string sql_expression = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setSqlExpression($var)
    {
        GPBUtil::checkString($var, True);
        $this->sql_expression = $var;

        return $this;
    }

}


