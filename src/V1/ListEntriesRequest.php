<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/catalog.proto

namespace Google\Cloud\Dataplex\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.dataplex.v1.ListEntriesRequest</code>
 */
class ListEntriesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the parent Entry Group:
     * `projects/{project}/locations/{location}/entryGroups/{entry_group}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_size = 0;
    /**
     * Optional. The pagination token returned by a previous request.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_token = '';
    /**
     * Optional. A filter on the entries to return.
     * Filters are case-sensitive.
     * The request can be filtered by the following fields:
     * entry_type, entry_source.display_name.
     * The comparison operators are =, !=, <, >, <=, >= (strings are compared
     * according to lexical order)
     * The logical operators AND, OR, NOT can be used
     * in the filter. Wildcard "*" can be used, but for entry_type the full
     * project id or number needs to be provided. Example filter expressions:
     * "entry_source.display_name=AnExampleDisplayName"
     * "entry_type=projects/example-project/locations/global/entryTypes/example-entry_type"
     * "entry_type=projects/example-project/locations/us/entryTypes/a* OR
     *  entry_type=projects/another-project/locations/&#42;"
     * "NOT entry_source.display_name=AnotherExampleDisplayName"
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $filter = '';

    /**
     * @param string $parent Required. The resource name of the parent Entry Group:
     *                       `projects/{project}/locations/{location}/entryGroups/{entry_group}`. Please see
     *                       {@see CatalogServiceClient::entryGroupName()} for help formatting this field.
     *
     * @return \Google\Cloud\Dataplex\V1\ListEntriesRequest
     *
     * @experimental
     */
    public static function build(string $parent): self
    {
        return (new self())
            ->setParent($parent);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the parent Entry Group:
     *           `projects/{project}/locations/{location}/entryGroups/{entry_group}`.
     *     @type int $page_size
     *     @type string $page_token
     *           Optional. The pagination token returned by a previous request.
     *     @type string $filter
     *           Optional. A filter on the entries to return.
     *           Filters are case-sensitive.
     *           The request can be filtered by the following fields:
     *           entry_type, entry_source.display_name.
     *           The comparison operators are =, !=, <, >, <=, >= (strings are compared
     *           according to lexical order)
     *           The logical operators AND, OR, NOT can be used
     *           in the filter. Wildcard "*" can be used, but for entry_type the full
     *           project id or number needs to be provided. Example filter expressions:
     *           "entry_source.display_name=AnExampleDisplayName"
     *           "entry_type=projects/example-project/locations/global/entryTypes/example-entry_type"
     *           "entry_type=projects/example-project/locations/us/entryTypes/a* OR
     *            entry_type=projects/another-project/locations/&#42;"
     *           "NOT entry_source.display_name=AnotherExampleDisplayName"
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Catalog::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the parent Entry Group:
     * `projects/{project}/locations/{location}/entryGroups/{entry_group}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the parent Entry Group:
     * `projects/{project}/locations/{location}/entryGroups/{entry_group}`.
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
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Optional. The pagination token returned by a previous request.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. The pagination token returned by a previous request.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * Optional. A filter on the entries to return.
     * Filters are case-sensitive.
     * The request can be filtered by the following fields:
     * entry_type, entry_source.display_name.
     * The comparison operators are =, !=, <, >, <=, >= (strings are compared
     * according to lexical order)
     * The logical operators AND, OR, NOT can be used
     * in the filter. Wildcard "*" can be used, but for entry_type the full
     * project id or number needs to be provided. Example filter expressions:
     * "entry_source.display_name=AnExampleDisplayName"
     * "entry_type=projects/example-project/locations/global/entryTypes/example-entry_type"
     * "entry_type=projects/example-project/locations/us/entryTypes/a* OR
     *  entry_type=projects/another-project/locations/&#42;"
     * "NOT entry_source.display_name=AnotherExampleDisplayName"
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Optional. A filter on the entries to return.
     * Filters are case-sensitive.
     * The request can be filtered by the following fields:
     * entry_type, entry_source.display_name.
     * The comparison operators are =, !=, <, >, <=, >= (strings are compared
     * according to lexical order)
     * The logical operators AND, OR, NOT can be used
     * in the filter. Wildcard "*" can be used, but for entry_type the full
     * project id or number needs to be provided. Example filter expressions:
     * "entry_source.display_name=AnExampleDisplayName"
     * "entry_type=projects/example-project/locations/global/entryTypes/example-entry_type"
     * "entry_type=projects/example-project/locations/us/entryTypes/a* OR
     *  entry_type=projects/another-project/locations/&#42;"
     * "NOT entry_source.display_name=AnotherExampleDisplayName"
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

}

