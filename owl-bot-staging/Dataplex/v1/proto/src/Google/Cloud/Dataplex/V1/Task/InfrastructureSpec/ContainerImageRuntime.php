<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/tasks.proto

namespace Google\Cloud\Dataplex\V1\Task\InfrastructureSpec;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Container Image Runtime Configuration used with Batch execution.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.Task.InfrastructureSpec.ContainerImageRuntime</code>
 */
class ContainerImageRuntime extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. A list of Java JARS to add to the classpath.
     * Valid input includes Cloud Storage URIs to Jar binaries.
     * For example, `gs://bucket-name/my/path/to/file.jar`.
     *
     * Generated from protobuf field <code>repeated string java_jars = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $java_jars;
    /**
     * Optional. A list of python packages to be installed.
     * Valid formats include Cloud Storage URI to a PIP installable library.
     * For example, `gs://bucket-name/my/path/to/lib.tar.gz`.
     *
     * Generated from protobuf field <code>repeated string python_packages = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $python_packages;
    /**
     * Optional. Override to common configuration of open source components installed on
     * the Dataproc cluster.
     * The properties to set on daemon config files.
     * Property keys are specified in `prefix:property` format, for example
     * `core:hadoop.tmp.dir`.
     * For more information, see [Cluster
     * properties](https://cloud.google.com/dataproc/docs/concepts/cluster-properties).
     *
     * Generated from protobuf field <code>map<string, string> properties = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $properties;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $java_jars
     *           Optional. A list of Java JARS to add to the classpath.
     *           Valid input includes Cloud Storage URIs to Jar binaries.
     *           For example, `gs://bucket-name/my/path/to/file.jar`.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $python_packages
     *           Optional. A list of python packages to be installed.
     *           Valid formats include Cloud Storage URI to a PIP installable library.
     *           For example, `gs://bucket-name/my/path/to/lib.tar.gz`.
     *     @type array|\Google\Protobuf\Internal\MapField $properties
     *           Optional. Override to common configuration of open source components installed on
     *           the Dataproc cluster.
     *           The properties to set on daemon config files.
     *           Property keys are specified in `prefix:property` format, for example
     *           `core:hadoop.tmp.dir`.
     *           For more information, see [Cluster
     *           properties](https://cloud.google.com/dataproc/docs/concepts/cluster-properties).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Tasks::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. A list of Java JARS to add to the classpath.
     * Valid input includes Cloud Storage URIs to Jar binaries.
     * For example, `gs://bucket-name/my/path/to/file.jar`.
     *
     * Generated from protobuf field <code>repeated string java_jars = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getJavaJars()
    {
        return $this->java_jars;
    }

    /**
     * Optional. A list of Java JARS to add to the classpath.
     * Valid input includes Cloud Storage URIs to Jar binaries.
     * For example, `gs://bucket-name/my/path/to/file.jar`.
     *
     * Generated from protobuf field <code>repeated string java_jars = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setJavaJars($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->java_jars = $arr;

        return $this;
    }

    /**
     * Optional. A list of python packages to be installed.
     * Valid formats include Cloud Storage URI to a PIP installable library.
     * For example, `gs://bucket-name/my/path/to/lib.tar.gz`.
     *
     * Generated from protobuf field <code>repeated string python_packages = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPythonPackages()
    {
        return $this->python_packages;
    }

    /**
     * Optional. A list of python packages to be installed.
     * Valid formats include Cloud Storage URI to a PIP installable library.
     * For example, `gs://bucket-name/my/path/to/lib.tar.gz`.
     *
     * Generated from protobuf field <code>repeated string python_packages = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPythonPackages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->python_packages = $arr;

        return $this;
    }

    /**
     * Optional. Override to common configuration of open source components installed on
     * the Dataproc cluster.
     * The properties to set on daemon config files.
     * Property keys are specified in `prefix:property` format, for example
     * `core:hadoop.tmp.dir`.
     * For more information, see [Cluster
     * properties](https://cloud.google.com/dataproc/docs/concepts/cluster-properties).
     *
     * Generated from protobuf field <code>map<string, string> properties = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getProperties()
    {
        return $this->properties;
    }

    /**
     * Optional. Override to common configuration of open source components installed on
     * the Dataproc cluster.
     * The properties to set on daemon config files.
     * Property keys are specified in `prefix:property` format, for example
     * `core:hadoop.tmp.dir`.
     * For more information, see [Cluster
     * properties](https://cloud.google.com/dataproc/docs/concepts/cluster-properties).
     *
     * Generated from protobuf field <code>map<string, string> properties = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setProperties($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->properties = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ContainerImageRuntime::class, \Google\Cloud\Dataplex\V1\Task_InfrastructureSpec_ContainerImageRuntime::class);

