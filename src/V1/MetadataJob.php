<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/catalog.proto

namespace Google\Cloud\Dataplex\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A metadata job resource.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.MetadataJob</code>
 */
class MetadataJob extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Identifier. The name of the resource that the configuration is
     * applied to, in the format
     * `projects/{project_number}/locations/{location_id}/metadataJobs/{metadata_job_id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.field_behavior) = IDENTIFIER];</code>
     */
    protected $name = '';
    /**
     * Output only. A system-generated, globally unique ID for the metadata job.
     * If the metadata job is deleted and then re-created with the same name, this
     * ID is different.
     *
     * Generated from protobuf field <code>string uid = 2 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.field_info) = {</code>
     */
    protected $uid = '';
    /**
     * Output only. The time when the metadata job was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. The time when the metadata job was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;
    /**
     * Optional. User-defined labels.
     *
     * Generated from protobuf field <code>map<string, string> labels = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $labels;
    /**
     * Required. Metadata job type.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.MetadataJob.Type type = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $type = 0;
    /**
     * Output only. Metadata job status.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.MetadataJob.Status status = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $status = null;
    protected $spec;
    protected $result;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. Identifier. The name of the resource that the configuration is
     *           applied to, in the format
     *           `projects/{project_number}/locations/{location_id}/metadataJobs/{metadata_job_id}`.
     *     @type string $uid
     *           Output only. A system-generated, globally unique ID for the metadata job.
     *           If the metadata job is deleted and then re-created with the same name, this
     *           ID is different.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The time when the metadata job was created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The time when the metadata job was updated.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Optional. User-defined labels.
     *     @type int $type
     *           Required. Metadata job type.
     *     @type \Google\Cloud\Dataplex\V1\MetadataJob\ImportJobSpec $import_spec
     *           Import job specification.
     *     @type \Google\Cloud\Dataplex\V1\MetadataJob\ImportJobResult $import_result
     *           Output only. Import job result.
     *     @type \Google\Cloud\Dataplex\V1\MetadataJob\Status $status
     *           Output only. Metadata job status.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Catalog::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Identifier. The name of the resource that the configuration is
     * applied to, in the format
     * `projects/{project_number}/locations/{location_id}/metadataJobs/{metadata_job_id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.field_behavior) = IDENTIFIER];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Identifier. The name of the resource that the configuration is
     * applied to, in the format
     * `projects/{project_number}/locations/{location_id}/metadataJobs/{metadata_job_id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.field_behavior) = IDENTIFIER];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Output only. A system-generated, globally unique ID for the metadata job.
     * If the metadata job is deleted and then re-created with the same name, this
     * ID is different.
     *
     * Generated from protobuf field <code>string uid = 2 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.field_info) = {</code>
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Output only. A system-generated, globally unique ID for the metadata job.
     * If the metadata job is deleted and then re-created with the same name, this
     * ID is different.
     *
     * Generated from protobuf field <code>string uid = 2 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.field_info) = {</code>
     * @param string $var
     * @return $this
     */
    public function setUid($var)
    {
        GPBUtil::checkString($var, True);
        $this->uid = $var;

        return $this;
    }

    /**
     * Output only. The time when the metadata job was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. The time when the metadata job was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. The time when the metadata job was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. The time when the metadata job was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Optional. User-defined labels.
     *
     * Generated from protobuf field <code>map<string, string> labels = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Optional. User-defined labels.
     *
     * Generated from protobuf field <code>map<string, string> labels = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * Required. Metadata job type.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.MetadataJob.Type type = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Required. Metadata job type.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.MetadataJob.Type type = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dataplex\V1\MetadataJob\Type::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Import job specification.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.MetadataJob.ImportJobSpec import_spec = 100;</code>
     * @return \Google\Cloud\Dataplex\V1\MetadataJob\ImportJobSpec|null
     */
    public function getImportSpec()
    {
        return $this->readOneof(100);
    }

    public function hasImportSpec()
    {
        return $this->hasOneof(100);
    }

    /**
     * Import job specification.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.MetadataJob.ImportJobSpec import_spec = 100;</code>
     * @param \Google\Cloud\Dataplex\V1\MetadataJob\ImportJobSpec $var
     * @return $this
     */
    public function setImportSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\MetadataJob\ImportJobSpec::class);
        $this->writeOneof(100, $var);

        return $this;
    }

    /**
     * Output only. Import job result.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.MetadataJob.ImportJobResult import_result = 200 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Dataplex\V1\MetadataJob\ImportJobResult|null
     */
    public function getImportResult()
    {
        return $this->readOneof(200);
    }

    public function hasImportResult()
    {
        return $this->hasOneof(200);
    }

    /**
     * Output only. Import job result.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.MetadataJob.ImportJobResult import_result = 200 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Dataplex\V1\MetadataJob\ImportJobResult $var
     * @return $this
     */
    public function setImportResult($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\MetadataJob\ImportJobResult::class);
        $this->writeOneof(200, $var);

        return $this;
    }

    /**
     * Output only. Metadata job status.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.MetadataJob.Status status = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Dataplex\V1\MetadataJob\Status|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    public function hasStatus()
    {
        return isset($this->status);
    }

    public function clearStatus()
    {
        unset($this->status);
    }

    /**
     * Output only. Metadata job status.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.MetadataJob.Status status = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Dataplex\V1\MetadataJob\Status $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\MetadataJob\Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getSpec()
    {
        return $this->whichOneof("spec");
    }

    /**
     * @return string
     */
    public function getResult()
    {
        return $this->whichOneof("result");
    }

}

