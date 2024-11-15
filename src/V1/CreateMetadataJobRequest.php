<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/catalog.proto

namespace Google\Cloud\Dataplex\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Create metadata job request.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.CreateMetadataJobRequest</code>
 */
class CreateMetadataJobRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the parent location, in the format
     * `projects/{project_id_or_number}/locations/{location_id}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The metadata job resource.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.MetadataJob metadata_job = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $metadata_job = null;
    /**
     * Optional. The metadata job ID. If not provided, a unique ID is generated
     * with the prefix `metadata-job-`.
     *
     * Generated from protobuf field <code>string metadata_job_id = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $metadata_job_id = '';
    /**
     * Optional. The service validates the request without performing any
     * mutations. The default is false.
     *
     * Generated from protobuf field <code>bool validate_only = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $validate_only = false;

    /**
     * @param string                                $parent        Required. The resource name of the parent location, in the format
     *                                                             `projects/{project_id_or_number}/locations/{location_id}`
     *                                                             Please see {@see CatalogServiceClient::locationName()} for help formatting this field.
     * @param \Google\Cloud\Dataplex\V1\MetadataJob $metadataJob   Required. The metadata job resource.
     * @param string                                $metadataJobId Optional. The metadata job ID. If not provided, a unique ID is generated
     *                                                             with the prefix `metadata-job-`.
     *
     * @return \Google\Cloud\Dataplex\V1\CreateMetadataJobRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\Dataplex\V1\MetadataJob $metadataJob, string $metadataJobId): self
    {
        return (new self())
            ->setParent($parent)
            ->setMetadataJob($metadataJob)
            ->setMetadataJobId($metadataJobId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the parent location, in the format
     *           `projects/{project_id_or_number}/locations/{location_id}`
     *     @type \Google\Cloud\Dataplex\V1\MetadataJob $metadata_job
     *           Required. The metadata job resource.
     *     @type string $metadata_job_id
     *           Optional. The metadata job ID. If not provided, a unique ID is generated
     *           with the prefix `metadata-job-`.
     *     @type bool $validate_only
     *           Optional. The service validates the request without performing any
     *           mutations. The default is false.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Catalog::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the parent location, in the format
     * `projects/{project_id_or_number}/locations/{location_id}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the parent location, in the format
     * `projects/{project_id_or_number}/locations/{location_id}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The metadata job resource.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.MetadataJob metadata_job = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dataplex\V1\MetadataJob|null
     */
    public function getMetadataJob()
    {
        return $this->metadata_job;
    }

    public function hasMetadataJob()
    {
        return isset($this->metadata_job);
    }

    public function clearMetadataJob()
    {
        unset($this->metadata_job);
    }

    /**
     * Required. The metadata job resource.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.MetadataJob metadata_job = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dataplex\V1\MetadataJob $var
     * @return $this
     */
    public function setMetadataJob($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\MetadataJob::class);
        $this->metadata_job = $var;

        return $this;
    }

    /**
     * Optional. The metadata job ID. If not provided, a unique ID is generated
     * with the prefix `metadata-job-`.
     *
     * Generated from protobuf field <code>string metadata_job_id = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getMetadataJobId()
    {
        return $this->metadata_job_id;
    }

    /**
     * Optional. The metadata job ID. If not provided, a unique ID is generated
     * with the prefix `metadata-job-`.
     *
     * Generated from protobuf field <code>string metadata_job_id = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setMetadataJobId($var)
    {
        GPBUtil::checkString($var, True);
        $this->metadata_job_id = $var;

        return $this;
    }

    /**
     * Optional. The service validates the request without performing any
     * mutations. The default is false.
     *
     * Generated from protobuf field <code>bool validate_only = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * Optional. The service validates the request without performing any
     * mutations. The default is false.
     *
     * Generated from protobuf field <code>bool validate_only = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;

        return $this;
    }

}

