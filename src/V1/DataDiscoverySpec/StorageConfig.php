<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/data_discovery.proto

namespace Google\Cloud\Dataplex\V1\DataDiscoverySpec;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configurations related to Cloud Storage as the data source.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.DataDiscoverySpec.StorageConfig</code>
 */
class StorageConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Defines the data to include during discovery when only a subset
     * of the data should be considered. Provide a list of patterns that
     * identify the data to include. For Cloud Storage bucket assets, these
     * patterns are interpreted as glob patterns used to match object names. For
     * BigQuery dataset assets, these patterns are interpreted as patterns to
     * match table names.
     *
     * Generated from protobuf field <code>repeated string include_patterns = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $include_patterns;
    /**
     * Optional. Defines the data to exclude during discovery. Provide a list of
     * patterns that identify the data to exclude. For Cloud Storage bucket
     * assets, these patterns are interpreted as glob patterns used to match
     * object names. For BigQuery dataset assets, these patterns are interpreted
     * as patterns to match table names.
     *
     * Generated from protobuf field <code>repeated string exclude_patterns = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $exclude_patterns;
    /**
     * Optional. Configuration for CSV data.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataDiscoverySpec.StorageConfig.CsvOptions csv_options = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $csv_options = null;
    /**
     * Optional. Configuration for JSON data.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataDiscoverySpec.StorageConfig.JsonOptions json_options = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $json_options = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $include_patterns
     *           Optional. Defines the data to include during discovery when only a subset
     *           of the data should be considered. Provide a list of patterns that
     *           identify the data to include. For Cloud Storage bucket assets, these
     *           patterns are interpreted as glob patterns used to match object names. For
     *           BigQuery dataset assets, these patterns are interpreted as patterns to
     *           match table names.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $exclude_patterns
     *           Optional. Defines the data to exclude during discovery. Provide a list of
     *           patterns that identify the data to exclude. For Cloud Storage bucket
     *           assets, these patterns are interpreted as glob patterns used to match
     *           object names. For BigQuery dataset assets, these patterns are interpreted
     *           as patterns to match table names.
     *     @type \Google\Cloud\Dataplex\V1\DataDiscoverySpec\StorageConfig\CsvOptions $csv_options
     *           Optional. Configuration for CSV data.
     *     @type \Google\Cloud\Dataplex\V1\DataDiscoverySpec\StorageConfig\JsonOptions $json_options
     *           Optional. Configuration for JSON data.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\DataDiscovery::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Defines the data to include during discovery when only a subset
     * of the data should be considered. Provide a list of patterns that
     * identify the data to include. For Cloud Storage bucket assets, these
     * patterns are interpreted as glob patterns used to match object names. For
     * BigQuery dataset assets, these patterns are interpreted as patterns to
     * match table names.
     *
     * Generated from protobuf field <code>repeated string include_patterns = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIncludePatterns()
    {
        return $this->include_patterns;
    }

    /**
     * Optional. Defines the data to include during discovery when only a subset
     * of the data should be considered. Provide a list of patterns that
     * identify the data to include. For Cloud Storage bucket assets, these
     * patterns are interpreted as glob patterns used to match object names. For
     * BigQuery dataset assets, these patterns are interpreted as patterns to
     * match table names.
     *
     * Generated from protobuf field <code>repeated string include_patterns = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIncludePatterns($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->include_patterns = $arr;

        return $this;
    }

    /**
     * Optional. Defines the data to exclude during discovery. Provide a list of
     * patterns that identify the data to exclude. For Cloud Storage bucket
     * assets, these patterns are interpreted as glob patterns used to match
     * object names. For BigQuery dataset assets, these patterns are interpreted
     * as patterns to match table names.
     *
     * Generated from protobuf field <code>repeated string exclude_patterns = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExcludePatterns()
    {
        return $this->exclude_patterns;
    }

    /**
     * Optional. Defines the data to exclude during discovery. Provide a list of
     * patterns that identify the data to exclude. For Cloud Storage bucket
     * assets, these patterns are interpreted as glob patterns used to match
     * object names. For BigQuery dataset assets, these patterns are interpreted
     * as patterns to match table names.
     *
     * Generated from protobuf field <code>repeated string exclude_patterns = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExcludePatterns($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->exclude_patterns = $arr;

        return $this;
    }

    /**
     * Optional. Configuration for CSV data.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataDiscoverySpec.StorageConfig.CsvOptions csv_options = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataplex\V1\DataDiscoverySpec\StorageConfig\CsvOptions|null
     */
    public function getCsvOptions()
    {
        return $this->csv_options;
    }

    public function hasCsvOptions()
    {
        return isset($this->csv_options);
    }

    public function clearCsvOptions()
    {
        unset($this->csv_options);
    }

    /**
     * Optional. Configuration for CSV data.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataDiscoverySpec.StorageConfig.CsvOptions csv_options = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataplex\V1\DataDiscoverySpec\StorageConfig\CsvOptions $var
     * @return $this
     */
    public function setCsvOptions($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\DataDiscoverySpec\StorageConfig\CsvOptions::class);
        $this->csv_options = $var;

        return $this;
    }

    /**
     * Optional. Configuration for JSON data.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataDiscoverySpec.StorageConfig.JsonOptions json_options = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataplex\V1\DataDiscoverySpec\StorageConfig\JsonOptions|null
     */
    public function getJsonOptions()
    {
        return $this->json_options;
    }

    public function hasJsonOptions()
    {
        return isset($this->json_options);
    }

    public function clearJsonOptions()
    {
        unset($this->json_options);
    }

    /**
     * Optional. Configuration for JSON data.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataDiscoverySpec.StorageConfig.JsonOptions json_options = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataplex\V1\DataDiscoverySpec\StorageConfig\JsonOptions $var
     * @return $this
     */
    public function setJsonOptions($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\DataDiscoverySpec\StorageConfig\JsonOptions::class);
        $this->json_options = $var;

        return $this;
    }

}

