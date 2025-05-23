<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/resources.proto

namespace Google\Cloud\Dataplex\V1\Asset;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Settings to manage the metadata discovery and publishing for an asset.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.Asset.DiscoverySpec</code>
 */
class DiscoverySpec extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Whether discovery is enabled.
     *
     * Generated from protobuf field <code>bool enabled = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $enabled = false;
    /**
     * Optional. The list of patterns to apply for selecting data to include
     * during discovery if only a subset of the data should considered.  For
     * Cloud Storage bucket assets, these are interpreted as glob patterns used
     * to match object names. For BigQuery dataset assets, these are interpreted
     * as patterns to match table names.
     *
     * Generated from protobuf field <code>repeated string include_patterns = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $include_patterns;
    /**
     * Optional. The list of patterns to apply for selecting data to exclude
     * during discovery.  For Cloud Storage bucket assets, these are interpreted
     * as glob patterns used to match object names. For BigQuery dataset assets,
     * these are interpreted as patterns to match table names.
     *
     * Generated from protobuf field <code>repeated string exclude_patterns = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $exclude_patterns;
    /**
     * Optional. Configuration for CSV data.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Asset.DiscoverySpec.CsvOptions csv_options = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $csv_options = null;
    /**
     * Optional. Configuration for Json data.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Asset.DiscoverySpec.JsonOptions json_options = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $json_options = null;
    protected $trigger;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $enabled
     *           Optional. Whether discovery is enabled.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $include_patterns
     *           Optional. The list of patterns to apply for selecting data to include
     *           during discovery if only a subset of the data should considered.  For
     *           Cloud Storage bucket assets, these are interpreted as glob patterns used
     *           to match object names. For BigQuery dataset assets, these are interpreted
     *           as patterns to match table names.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $exclude_patterns
     *           Optional. The list of patterns to apply for selecting data to exclude
     *           during discovery.  For Cloud Storage bucket assets, these are interpreted
     *           as glob patterns used to match object names. For BigQuery dataset assets,
     *           these are interpreted as patterns to match table names.
     *     @type \Google\Cloud\Dataplex\V1\Asset\DiscoverySpec\CsvOptions $csv_options
     *           Optional. Configuration for CSV data.
     *     @type \Google\Cloud\Dataplex\V1\Asset\DiscoverySpec\JsonOptions $json_options
     *           Optional. Configuration for Json data.
     *     @type string $schedule
     *           Optional. Cron schedule (https://en.wikipedia.org/wiki/Cron) for
     *           running discovery periodically. Successive discovery runs must be
     *           scheduled at least 60 minutes apart. The default value is to run
     *           discovery every 60 minutes.
     *           To explicitly set a timezone to the cron tab, apply a prefix in the
     *           cron tab: "CRON_TZ=${IANA_TIME_ZONE}" or TZ=${IANA_TIME_ZONE}".
     *           The ${IANA_TIME_ZONE} may only be a valid string from IANA time zone
     *           database. For example, `CRON_TZ=America/New_York 1 * * * *`, or
     *           `TZ=America/New_York 1 * * * *`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Whether discovery is enabled.
     *
     * Generated from protobuf field <code>bool enabled = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Optional. Whether discovery is enabled.
     *
     * Generated from protobuf field <code>bool enabled = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->enabled = $var;

        return $this;
    }

    /**
     * Optional. The list of patterns to apply for selecting data to include
     * during discovery if only a subset of the data should considered.  For
     * Cloud Storage bucket assets, these are interpreted as glob patterns used
     * to match object names. For BigQuery dataset assets, these are interpreted
     * as patterns to match table names.
     *
     * Generated from protobuf field <code>repeated string include_patterns = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIncludePatterns()
    {
        return $this->include_patterns;
    }

    /**
     * Optional. The list of patterns to apply for selecting data to include
     * during discovery if only a subset of the data should considered.  For
     * Cloud Storage bucket assets, these are interpreted as glob patterns used
     * to match object names. For BigQuery dataset assets, these are interpreted
     * as patterns to match table names.
     *
     * Generated from protobuf field <code>repeated string include_patterns = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. The list of patterns to apply for selecting data to exclude
     * during discovery.  For Cloud Storage bucket assets, these are interpreted
     * as glob patterns used to match object names. For BigQuery dataset assets,
     * these are interpreted as patterns to match table names.
     *
     * Generated from protobuf field <code>repeated string exclude_patterns = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExcludePatterns()
    {
        return $this->exclude_patterns;
    }

    /**
     * Optional. The list of patterns to apply for selecting data to exclude
     * during discovery.  For Cloud Storage bucket assets, these are interpreted
     * as glob patterns used to match object names. For BigQuery dataset assets,
     * these are interpreted as patterns to match table names.
     *
     * Generated from protobuf field <code>repeated string exclude_patterns = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Asset.DiscoverySpec.CsvOptions csv_options = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataplex\V1\Asset\DiscoverySpec\CsvOptions|null
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
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Asset.DiscoverySpec.CsvOptions csv_options = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataplex\V1\Asset\DiscoverySpec\CsvOptions $var
     * @return $this
     */
    public function setCsvOptions($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\Asset\DiscoverySpec\CsvOptions::class);
        $this->csv_options = $var;

        return $this;
    }

    /**
     * Optional. Configuration for Json data.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Asset.DiscoverySpec.JsonOptions json_options = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataplex\V1\Asset\DiscoverySpec\JsonOptions|null
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
     * Optional. Configuration for Json data.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Asset.DiscoverySpec.JsonOptions json_options = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataplex\V1\Asset\DiscoverySpec\JsonOptions $var
     * @return $this
     */
    public function setJsonOptions($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\Asset\DiscoverySpec\JsonOptions::class);
        $this->json_options = $var;

        return $this;
    }

    /**
     * Optional. Cron schedule (https://en.wikipedia.org/wiki/Cron) for
     * running discovery periodically. Successive discovery runs must be
     * scheduled at least 60 minutes apart. The default value is to run
     * discovery every 60 minutes.
     * To explicitly set a timezone to the cron tab, apply a prefix in the
     * cron tab: "CRON_TZ=${IANA_TIME_ZONE}" or TZ=${IANA_TIME_ZONE}".
     * The ${IANA_TIME_ZONE} may only be a valid string from IANA time zone
     * database. For example, `CRON_TZ=America/New_York 1 * * * *`, or
     * `TZ=America/New_York 1 * * * *`.
     *
     * Generated from protobuf field <code>string schedule = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getSchedule()
    {
        return $this->readOneof(10);
    }

    public function hasSchedule()
    {
        return $this->hasOneof(10);
    }

    /**
     * Optional. Cron schedule (https://en.wikipedia.org/wiki/Cron) for
     * running discovery periodically. Successive discovery runs must be
     * scheduled at least 60 minutes apart. The default value is to run
     * discovery every 60 minutes.
     * To explicitly set a timezone to the cron tab, apply a prefix in the
     * cron tab: "CRON_TZ=${IANA_TIME_ZONE}" or TZ=${IANA_TIME_ZONE}".
     * The ${IANA_TIME_ZONE} may only be a valid string from IANA time zone
     * database. For example, `CRON_TZ=America/New_York 1 * * * *`, or
     * `TZ=America/New_York 1 * * * *`.
     *
     * Generated from protobuf field <code>string schedule = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setSchedule($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getTrigger()
    {
        return $this->whichOneof("trigger");
    }

}


