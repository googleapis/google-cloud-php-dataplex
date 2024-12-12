<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/catalog.proto

namespace Google\Cloud\Dataplex\V1\MetadataJob;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Job specification for a metadata import job
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.MetadataJob.ImportJobSpec</code>
 */
class ImportJobSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The URI of a Cloud Storage bucket or folder (beginning with
     * `gs://` and ending with `/`) that contains the metadata import files for
     * this job.
     * A metadata import file defines the values to set for each of the entries
     * and aspects in a metadata job. For more information about how to create a
     * metadata import file and the file requirements, see [Metadata import
     * file](https://cloud.google.com/dataplex/docs/import-metadata#metadata-import-file).
     * You can provide multiple metadata import files in the same metadata job.
     * The bucket or folder must contain at least one metadata import file, in
     * JSON Lines format (either `.json` or `.jsonl` file extension).
     * In `FULL` entry sync mode, don't save the metadata import file in a
     * folder named `SOURCE_STORAGE_URI/deletions/`.
     * **Caution**: If the metadata import file contains no data, all entries
     * and aspects that belong to the job's scope are deleted.
     *
     * Generated from protobuf field <code>string source_storage_uri = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $source_storage_uri = '';
    /**
     * Optional. The time when the process that created the metadata import
     * files began.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp source_create_time = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $source_create_time = null;
    /**
     * Required. A boundary on the scope of impact that the metadata import job
     * can have.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.MetadataJob.ImportJobSpec.ImportJobScope scope = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $scope = null;
    /**
     * Required. The sync mode for entries.
     * Only `FULL` mode is supported for entries. All entries in the job's scope
     * are modified. If an entry exists in Dataplex but isn't included in the
     * metadata import file, the entry is deleted when you run the metadata job.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.MetadataJob.ImportJobSpec.SyncMode entry_sync_mode = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $entry_sync_mode = 0;
    /**
     * Required. The sync mode for aspects.
     * Only `INCREMENTAL` mode is supported for aspects. An aspect is modified
     * only if the metadata import file includes a reference to the aspect in
     * the `update_mask` field and the `aspect_keys` field.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.MetadataJob.ImportJobSpec.SyncMode aspect_sync_mode = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $aspect_sync_mode = 0;
    /**
     * Optional. The level of logs to write to Cloud Logging for this job.
     * Debug-level logs provide highly-detailed information for
     * troubleshooting, but their increased verbosity could incur [additional
     * costs](https://cloud.google.com/stackdriver/pricing) that might not be
     * merited for all jobs.
     * If unspecified, defaults to `INFO`.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.MetadataJob.ImportJobSpec.LogLevel log_level = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $log_level = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $source_storage_uri
     *           Optional. The URI of a Cloud Storage bucket or folder (beginning with
     *           `gs://` and ending with `/`) that contains the metadata import files for
     *           this job.
     *           A metadata import file defines the values to set for each of the entries
     *           and aspects in a metadata job. For more information about how to create a
     *           metadata import file and the file requirements, see [Metadata import
     *           file](https://cloud.google.com/dataplex/docs/import-metadata#metadata-import-file).
     *           You can provide multiple metadata import files in the same metadata job.
     *           The bucket or folder must contain at least one metadata import file, in
     *           JSON Lines format (either `.json` or `.jsonl` file extension).
     *           In `FULL` entry sync mode, don't save the metadata import file in a
     *           folder named `SOURCE_STORAGE_URI/deletions/`.
     *           **Caution**: If the metadata import file contains no data, all entries
     *           and aspects that belong to the job's scope are deleted.
     *     @type \Google\Protobuf\Timestamp $source_create_time
     *           Optional. The time when the process that created the metadata import
     *           files began.
     *     @type \Google\Cloud\Dataplex\V1\MetadataJob\ImportJobSpec\ImportJobScope $scope
     *           Required. A boundary on the scope of impact that the metadata import job
     *           can have.
     *     @type int $entry_sync_mode
     *           Required. The sync mode for entries.
     *           Only `FULL` mode is supported for entries. All entries in the job's scope
     *           are modified. If an entry exists in Dataplex but isn't included in the
     *           metadata import file, the entry is deleted when you run the metadata job.
     *     @type int $aspect_sync_mode
     *           Required. The sync mode for aspects.
     *           Only `INCREMENTAL` mode is supported for aspects. An aspect is modified
     *           only if the metadata import file includes a reference to the aspect in
     *           the `update_mask` field and the `aspect_keys` field.
     *     @type int $log_level
     *           Optional. The level of logs to write to Cloud Logging for this job.
     *           Debug-level logs provide highly-detailed information for
     *           troubleshooting, but their increased verbosity could incur [additional
     *           costs](https://cloud.google.com/stackdriver/pricing) that might not be
     *           merited for all jobs.
     *           If unspecified, defaults to `INFO`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Catalog::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The URI of a Cloud Storage bucket or folder (beginning with
     * `gs://` and ending with `/`) that contains the metadata import files for
     * this job.
     * A metadata import file defines the values to set for each of the entries
     * and aspects in a metadata job. For more information about how to create a
     * metadata import file and the file requirements, see [Metadata import
     * file](https://cloud.google.com/dataplex/docs/import-metadata#metadata-import-file).
     * You can provide multiple metadata import files in the same metadata job.
     * The bucket or folder must contain at least one metadata import file, in
     * JSON Lines format (either `.json` or `.jsonl` file extension).
     * In `FULL` entry sync mode, don't save the metadata import file in a
     * folder named `SOURCE_STORAGE_URI/deletions/`.
     * **Caution**: If the metadata import file contains no data, all entries
     * and aspects that belong to the job's scope are deleted.
     *
     * Generated from protobuf field <code>string source_storage_uri = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getSourceStorageUri()
    {
        return $this->source_storage_uri;
    }

    /**
     * Optional. The URI of a Cloud Storage bucket or folder (beginning with
     * `gs://` and ending with `/`) that contains the metadata import files for
     * this job.
     * A metadata import file defines the values to set for each of the entries
     * and aspects in a metadata job. For more information about how to create a
     * metadata import file and the file requirements, see [Metadata import
     * file](https://cloud.google.com/dataplex/docs/import-metadata#metadata-import-file).
     * You can provide multiple metadata import files in the same metadata job.
     * The bucket or folder must contain at least one metadata import file, in
     * JSON Lines format (either `.json` or `.jsonl` file extension).
     * In `FULL` entry sync mode, don't save the metadata import file in a
     * folder named `SOURCE_STORAGE_URI/deletions/`.
     * **Caution**: If the metadata import file contains no data, all entries
     * and aspects that belong to the job's scope are deleted.
     *
     * Generated from protobuf field <code>string source_storage_uri = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setSourceStorageUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->source_storage_uri = $var;

        return $this;
    }

    /**
     * Optional. The time when the process that created the metadata import
     * files began.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp source_create_time = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getSourceCreateTime()
    {
        return $this->source_create_time;
    }

    public function hasSourceCreateTime()
    {
        return isset($this->source_create_time);
    }

    public function clearSourceCreateTime()
    {
        unset($this->source_create_time);
    }

    /**
     * Optional. The time when the process that created the metadata import
     * files began.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp source_create_time = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setSourceCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->source_create_time = $var;

        return $this;
    }

    /**
     * Required. A boundary on the scope of impact that the metadata import job
     * can have.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.MetadataJob.ImportJobSpec.ImportJobScope scope = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dataplex\V1\MetadataJob\ImportJobSpec\ImportJobScope|null
     */
    public function getScope()
    {
        return $this->scope;
    }

    public function hasScope()
    {
        return isset($this->scope);
    }

    public function clearScope()
    {
        unset($this->scope);
    }

    /**
     * Required. A boundary on the scope of impact that the metadata import job
     * can have.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.MetadataJob.ImportJobSpec.ImportJobScope scope = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dataplex\V1\MetadataJob\ImportJobSpec\ImportJobScope $var
     * @return $this
     */
    public function setScope($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\MetadataJob\ImportJobSpec\ImportJobScope::class);
        $this->scope = $var;

        return $this;
    }

    /**
     * Required. The sync mode for entries.
     * Only `FULL` mode is supported for entries. All entries in the job's scope
     * are modified. If an entry exists in Dataplex but isn't included in the
     * metadata import file, the entry is deleted when you run the metadata job.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.MetadataJob.ImportJobSpec.SyncMode entry_sync_mode = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getEntrySyncMode()
    {
        return $this->entry_sync_mode;
    }

    /**
     * Required. The sync mode for entries.
     * Only `FULL` mode is supported for entries. All entries in the job's scope
     * are modified. If an entry exists in Dataplex but isn't included in the
     * metadata import file, the entry is deleted when you run the metadata job.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.MetadataJob.ImportJobSpec.SyncMode entry_sync_mode = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setEntrySyncMode($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dataplex\V1\MetadataJob\ImportJobSpec\SyncMode::class);
        $this->entry_sync_mode = $var;

        return $this;
    }

    /**
     * Required. The sync mode for aspects.
     * Only `INCREMENTAL` mode is supported for aspects. An aspect is modified
     * only if the metadata import file includes a reference to the aspect in
     * the `update_mask` field and the `aspect_keys` field.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.MetadataJob.ImportJobSpec.SyncMode aspect_sync_mode = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getAspectSyncMode()
    {
        return $this->aspect_sync_mode;
    }

    /**
     * Required. The sync mode for aspects.
     * Only `INCREMENTAL` mode is supported for aspects. An aspect is modified
     * only if the metadata import file includes a reference to the aspect in
     * the `update_mask` field and the `aspect_keys` field.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.MetadataJob.ImportJobSpec.SyncMode aspect_sync_mode = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setAspectSyncMode($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dataplex\V1\MetadataJob\ImportJobSpec\SyncMode::class);
        $this->aspect_sync_mode = $var;

        return $this;
    }

    /**
     * Optional. The level of logs to write to Cloud Logging for this job.
     * Debug-level logs provide highly-detailed information for
     * troubleshooting, but their increased verbosity could incur [additional
     * costs](https://cloud.google.com/stackdriver/pricing) that might not be
     * merited for all jobs.
     * If unspecified, defaults to `INFO`.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.MetadataJob.ImportJobSpec.LogLevel log_level = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getLogLevel()
    {
        return $this->log_level;
    }

    /**
     * Optional. The level of logs to write to Cloud Logging for this job.
     * Debug-level logs provide highly-detailed information for
     * troubleshooting, but their increased verbosity could incur [additional
     * costs](https://cloud.google.com/stackdriver/pricing) that might not be
     * merited for all jobs.
     * If unspecified, defaults to `INFO`.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.MetadataJob.ImportJobSpec.LogLevel log_level = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setLogLevel($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dataplex\V1\MetadataJob\ImportJobSpec\LogLevel::class);
        $this->log_level = $var;

        return $this;
    }

}

