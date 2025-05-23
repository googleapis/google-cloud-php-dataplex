<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/datascans.proto

namespace Google\Cloud\Dataplex\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Delete dataScan request.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.DeleteDataScanRequest</code>
 */
class DeleteDataScanRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the dataScan:
     * `projects/{project}/locations/{location_id}/dataScans/{data_scan_id}`
     * where `project` refers to a *project_id* or *project_number* and
     * `location_id` refers to a GCP region.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * Optional. If set to true, any child resources of this data scan will also
     * be deleted. (Otherwise, the request will only work if the data scan has no
     * child resources.)
     *
     * Generated from protobuf field <code>bool force = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $force = false;

    /**
     * @param string $name Required. The resource name of the dataScan:
     *                     `projects/{project}/locations/{location_id}/dataScans/{data_scan_id}`
     *                     where `project` refers to a *project_id* or *project_number* and
     *                     `location_id` refers to a GCP region. Please see
     *                     {@see DataScanServiceClient::dataScanName()} for help formatting this field.
     *
     * @return \Google\Cloud\Dataplex\V1\DeleteDataScanRequest
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
     *           Required. The resource name of the dataScan:
     *           `projects/{project}/locations/{location_id}/dataScans/{data_scan_id}`
     *           where `project` refers to a *project_id* or *project_number* and
     *           `location_id` refers to a GCP region.
     *     @type bool $force
     *           Optional. If set to true, any child resources of this data scan will also
     *           be deleted. (Otherwise, the request will only work if the data scan has no
     *           child resources.)
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Datascans::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the dataScan:
     * `projects/{project}/locations/{location_id}/dataScans/{data_scan_id}`
     * where `project` refers to a *project_id* or *project_number* and
     * `location_id` refers to a GCP region.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of the dataScan:
     * `projects/{project}/locations/{location_id}/dataScans/{data_scan_id}`
     * where `project` refers to a *project_id* or *project_number* and
     * `location_id` refers to a GCP region.
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

    /**
     * Optional. If set to true, any child resources of this data scan will also
     * be deleted. (Otherwise, the request will only work if the data scan has no
     * child resources.)
     *
     * Generated from protobuf field <code>bool force = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getForce()
    {
        return $this->force;
    }

    /**
     * Optional. If set to true, any child resources of this data scan will also
     * be deleted. (Otherwise, the request will only work if the data scan has no
     * child resources.)
     *
     * Generated from protobuf field <code>bool force = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setForce($var)
    {
        GPBUtil::checkBool($var);
        $this->force = $var;

        return $this;
    }

}

