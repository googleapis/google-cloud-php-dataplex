<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/catalog.proto

namespace Google\Cloud\Dataplex\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Cancel metadata job request.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.CancelMetadataJobRequest</code>
 */
class CancelMetadataJobRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the job, in the format
     * `projects/{project_id_or_number}/locations/{location_id}/metadataJobs/{metadata_job_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. The resource name of the job, in the format
     *                     `projects/{project_id_or_number}/locations/{location_id}/metadataJobs/{metadata_job_id}`
     *                     Please see {@see CatalogServiceClient::metadataJobName()} for help formatting this field.
     *
     * @return \Google\Cloud\Dataplex\V1\CancelMetadataJobRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource name of the job, in the format
     *           `projects/{project_id_or_number}/locations/{location_id}/metadataJobs/{metadata_job_id}`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Catalog::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the job, in the format
     * `projects/{project_id_or_number}/locations/{location_id}/metadataJobs/{metadata_job_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of the job, in the format
     * `projects/{project_id_or_number}/locations/{location_id}/metadataJobs/{metadata_job_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

