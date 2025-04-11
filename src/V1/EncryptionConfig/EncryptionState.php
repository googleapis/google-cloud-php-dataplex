<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/cmek.proto

namespace Google\Cloud\Dataplex\V1\EncryptionConfig;

use UnexpectedValueException;

/**
 * State of encryption of the databases when EncryptionConfig is created or
 * updated.
 *
 * Protobuf type <code>google.cloud.dataplex.v1.EncryptionConfig.EncryptionState</code>
 */
class EncryptionState
{
    /**
     * State is not specified.
     *
     * Generated from protobuf enum <code>ENCRYPTION_STATE_UNSPECIFIED = 0;</code>
     */
    const ENCRYPTION_STATE_UNSPECIFIED = 0;
    /**
     * The encryption state of the database when the EncryptionConfig is created
     * or updated. If the encryption fails, it is retried indefinitely and the
     * state is shown as ENCRYPTING.
     *
     * Generated from protobuf enum <code>ENCRYPTING = 1;</code>
     */
    const ENCRYPTING = 1;
    /**
     * The encryption of data has completed successfully.
     *
     * Generated from protobuf enum <code>COMPLETED = 2;</code>
     */
    const COMPLETED = 2;
    /**
     * The encryption of data has failed.
     * The state is set to FAILED when the encryption fails due to reasons like
     * permission issues, invalid key etc.
     *
     * Generated from protobuf enum <code>FAILED = 3;</code>
     */
    const FAILED = 3;

    private static $valueToName = [
        self::ENCRYPTION_STATE_UNSPECIFIED => 'ENCRYPTION_STATE_UNSPECIFIED',
        self::ENCRYPTING => 'ENCRYPTING',
        self::COMPLETED => 'COMPLETED',
        self::FAILED => 'FAILED',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


