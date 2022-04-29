<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/tasks.proto

namespace Google\Cloud\Dataplex\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A task represents a user-visible job.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.Task</code>
 */
class Task extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The relative resource name of the task, of the form:
     * projects/{project_number}/locations/{location_id}/lakes/{lake_id}/
     * tasks/{task_id}.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * Output only. System generated globally unique ID for the task. This ID will be
     * different if the task is deleted and re-created with the same name.
     *
     * Generated from protobuf field <code>string uid = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $uid = '';
    /**
     * Output only. The time when the task was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. The time when the task was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;
    /**
     * Optional. Description of the task.
     *
     * Generated from protobuf field <code>string description = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $description = '';
    /**
     * Optional. User friendly display name.
     *
     * Generated from protobuf field <code>string display_name = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $display_name = '';
    /**
     * Output only. Current state of the task.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.State state = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state = 0;
    /**
     * Optional. User-defined labels for the task.
     *
     * Generated from protobuf field <code>map<string, string> labels = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $labels;
    /**
     * Required. Spec related to how often and when a task should be triggered.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Task.TriggerSpec trigger_spec = 100 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $trigger_spec = null;
    /**
     * Required. Spec related to how a task is executed.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Task.ExecutionSpec execution_spec = 101 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $execution_spec = null;
    protected $config;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The relative resource name of the task, of the form:
     *           projects/{project_number}/locations/{location_id}/lakes/{lake_id}/
     *           tasks/{task_id}.
     *     @type string $uid
     *           Output only. System generated globally unique ID for the task. This ID will be
     *           different if the task is deleted and re-created with the same name.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The time when the task was created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The time when the task was last updated.
     *     @type string $description
     *           Optional. Description of the task.
     *     @type string $display_name
     *           Optional. User friendly display name.
     *     @type int $state
     *           Output only. Current state of the task.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Optional. User-defined labels for the task.
     *     @type \Google\Cloud\Dataplex\V1\Task\TriggerSpec $trigger_spec
     *           Required. Spec related to how often and when a task should be triggered.
     *     @type \Google\Cloud\Dataplex\V1\Task\ExecutionSpec $execution_spec
     *           Required. Spec related to how a task is executed.
     *     @type \Google\Cloud\Dataplex\V1\Task\SparkTaskConfig $spark
     *           Config related to running custom Spark tasks.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Tasks::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The relative resource name of the task, of the form:
     * projects/{project_number}/locations/{location_id}/lakes/{lake_id}/
     * tasks/{task_id}.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The relative resource name of the task, of the form:
     * projects/{project_number}/locations/{location_id}/lakes/{lake_id}/
     * tasks/{task_id}.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
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
     * Output only. System generated globally unique ID for the task. This ID will be
     * different if the task is deleted and re-created with the same name.
     *
     * Generated from protobuf field <code>string uid = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Output only. System generated globally unique ID for the task. This ID will be
     * different if the task is deleted and re-created with the same name.
     *
     * Generated from protobuf field <code>string uid = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The time when the task was created.
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
     * Output only. The time when the task was created.
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
     * Output only. The time when the task was last updated.
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
     * Output only. The time when the task was last updated.
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
     * Optional. Description of the task.
     *
     * Generated from protobuf field <code>string description = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Optional. Description of the task.
     *
     * Generated from protobuf field <code>string description = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Optional. User friendly display name.
     *
     * Generated from protobuf field <code>string display_name = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Optional. User friendly display name.
     *
     * Generated from protobuf field <code>string display_name = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Output only. Current state of the task.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.State state = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. Current state of the task.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.State state = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dataplex\V1\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Optional. User-defined labels for the task.
     *
     * Generated from protobuf field <code>map<string, string> labels = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Optional. User-defined labels for the task.
     *
     * Generated from protobuf field <code>map<string, string> labels = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Required. Spec related to how often and when a task should be triggered.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Task.TriggerSpec trigger_spec = 100 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dataplex\V1\Task\TriggerSpec|null
     */
    public function getTriggerSpec()
    {
        return $this->trigger_spec;
    }

    public function hasTriggerSpec()
    {
        return isset($this->trigger_spec);
    }

    public function clearTriggerSpec()
    {
        unset($this->trigger_spec);
    }

    /**
     * Required. Spec related to how often and when a task should be triggered.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Task.TriggerSpec trigger_spec = 100 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dataplex\V1\Task\TriggerSpec $var
     * @return $this
     */
    public function setTriggerSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\Task\TriggerSpec::class);
        $this->trigger_spec = $var;

        return $this;
    }

    /**
     * Required. Spec related to how a task is executed.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Task.ExecutionSpec execution_spec = 101 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dataplex\V1\Task\ExecutionSpec|null
     */
    public function getExecutionSpec()
    {
        return $this->execution_spec;
    }

    public function hasExecutionSpec()
    {
        return isset($this->execution_spec);
    }

    public function clearExecutionSpec()
    {
        unset($this->execution_spec);
    }

    /**
     * Required. Spec related to how a task is executed.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Task.ExecutionSpec execution_spec = 101 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dataplex\V1\Task\ExecutionSpec $var
     * @return $this
     */
    public function setExecutionSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\Task\ExecutionSpec::class);
        $this->execution_spec = $var;

        return $this;
    }

    /**
     * Config related to running custom Spark tasks.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Task.SparkTaskConfig spark = 300;</code>
     * @return \Google\Cloud\Dataplex\V1\Task\SparkTaskConfig|null
     */
    public function getSpark()
    {
        return $this->readOneof(300);
    }

    public function hasSpark()
    {
        return $this->hasOneof(300);
    }

    /**
     * Config related to running custom Spark tasks.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Task.SparkTaskConfig spark = 300;</code>
     * @param \Google\Cloud\Dataplex\V1\Task\SparkTaskConfig $var
     * @return $this
     */
    public function setSpark($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\Task\SparkTaskConfig::class);
        $this->writeOneof(300, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getConfig()
    {
        return $this->whichOneof("config");
    }

}

