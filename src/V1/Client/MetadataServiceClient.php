<?php
/*
 * Copyright 2024 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * Generated by gapic-generator-php from the file
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/dataplex/v1/metadata.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\Dataplex\V1\Client;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\PagedListResponse;
use Google\ApiCore\ResourceHelperTrait;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Dataplex\V1\CreateEntityRequest;
use Google\Cloud\Dataplex\V1\CreatePartitionRequest;
use Google\Cloud\Dataplex\V1\DeleteEntityRequest;
use Google\Cloud\Dataplex\V1\DeletePartitionRequest;
use Google\Cloud\Dataplex\V1\Entity;
use Google\Cloud\Dataplex\V1\GetEntityRequest;
use Google\Cloud\Dataplex\V1\GetPartitionRequest;
use Google\Cloud\Dataplex\V1\ListEntitiesRequest;
use Google\Cloud\Dataplex\V1\ListPartitionsRequest;
use Google\Cloud\Dataplex\V1\Partition;
use Google\Cloud\Dataplex\V1\UpdateEntityRequest;
use Google\Cloud\Iam\V1\GetIamPolicyRequest;
use Google\Cloud\Iam\V1\Policy;
use Google\Cloud\Iam\V1\SetIamPolicyRequest;
use Google\Cloud\Iam\V1\TestIamPermissionsRequest;
use Google\Cloud\Iam\V1\TestIamPermissionsResponse;
use Google\Cloud\Location\GetLocationRequest;
use Google\Cloud\Location\ListLocationsRequest;
use Google\Cloud\Location\Location;
use GuzzleHttp\Promise\PromiseInterface;
use Psr\Log\LoggerInterface;

/**
 * Service Description: Metadata service manages metadata resources such as tables, filesets and
 * partitions.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * @method PromiseInterface<Entity> createEntityAsync(CreateEntityRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Partition> createPartitionAsync(CreatePartitionRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<void> deleteEntityAsync(DeleteEntityRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<void> deletePartitionAsync(DeletePartitionRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Entity> getEntityAsync(GetEntityRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Partition> getPartitionAsync(GetPartitionRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listEntitiesAsync(ListEntitiesRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listPartitionsAsync(ListPartitionsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Entity> updateEntityAsync(UpdateEntityRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Policy> getIamPolicyAsync(GetIamPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Policy> setIamPolicyAsync(SetIamPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<TestIamPermissionsResponse> testIamPermissionsAsync(TestIamPermissionsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Location> getLocationAsync(GetLocationRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listLocationsAsync(ListLocationsRequest $request, array $optionalArgs = [])
 */
final class MetadataServiceClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.dataplex.v1.MetadataService';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    private const SERVICE_ADDRESS = 'dataplex.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'dataplex.UNIVERSE_DOMAIN';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = ['https://www.googleapis.com/auth/cloud-platform'];

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/metadata_service_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/metadata_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/metadata_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/metadata_service_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Formats a string containing the fully-qualified path to represent a entity
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $lake
     * @param string $zone
     * @param string $entity
     *
     * @return string The formatted entity resource.
     */
    public static function entityName(
        string $project,
        string $location,
        string $lake,
        string $zone,
        string $entity
    ): string {
        return self::getPathTemplate('entity')->render([
            'project' => $project,
            'location' => $location,
            'lake' => $lake,
            'zone' => $zone,
            'entity' => $entity,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a partition
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $lake
     * @param string $zone
     * @param string $entity
     * @param string $partition
     *
     * @return string The formatted partition resource.
     */
    public static function partitionName(
        string $project,
        string $location,
        string $lake,
        string $zone,
        string $entity,
        string $partition
    ): string {
        return self::getPathTemplate('partition')->render([
            'project' => $project,
            'location' => $location,
            'lake' => $lake,
            'zone' => $zone,
            'entity' => $entity,
            'partition' => $partition,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a zone
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $lake
     * @param string $zone
     *
     * @return string The formatted zone resource.
     */
    public static function zoneName(string $project, string $location, string $lake, string $zone): string
    {
        return self::getPathTemplate('zone')->render([
            'project' => $project,
            'location' => $location,
            'lake' => $lake,
            'zone' => $zone,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - entity: projects/{project}/locations/{location}/lakes/{lake}/zones/{zone}/entities/{entity}
     * - partition: projects/{project}/locations/{location}/lakes/{lake}/zones/{zone}/entities/{entity}/partitions/{partition}
     * - zone: projects/{project}/locations/{location}/lakes/{lake}/zones/{zone}
     *
     * The optional $template argument can be supplied to specify a particular pattern,
     * and must match one of the templates listed above. If no $template argument is
     * provided, or if the $template argument does not match one of the templates
     * listed, then parseName will check each of the supported templates, and return
     * the first match.
     *
     * @param string  $formattedName The formatted name string
     * @param ?string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
     */
    public static function parseName(string $formattedName, ?string $template = null): array
    {
        return self::parseFormattedName($formattedName, $template);
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'dataplex.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the
     *           client. For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()} .
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either
     *           a path to a JSON file, or a PHP array containing the decoded JSON data. By
     *           default this settings points to the default client config file, which is
     *           provided in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string
     *           `rest` or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $apiEndpoint setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     *     @type callable $clientCertSource
     *           A callable which returns the client cert as a string. This can be used to
     *           provide a certificate and private key to the transport layer for mTLS.
     *     @type false|LoggerInterface $logger
     *           A PSR-3 compliant logger. If set to false, logging is disabled, ignoring the
     *           'GOOGLE_SDK_PHP_LOGGING' environment flag
     * }
     *
     * @throws ValidationException
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
    }

    /** Handles execution of the async variants for each documented method. */
    public function __call($method, $args)
    {
        if (substr($method, -5) !== 'Async') {
            trigger_error('Call to undefined method ' . __CLASS__ . "::$method()", E_USER_ERROR);
        }

        array_unshift($args, substr($method, 0, -5));
        return call_user_func_array([$this, 'startAsyncCall'], $args);
    }

    /**
     * Create a metadata entity.
     *
     * The async variant is {@see MetadataServiceClient::createEntityAsync()} .
     *
     * @example samples/V1/MetadataServiceClient/create_entity.php
     *
     * @param CreateEntityRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Entity
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createEntity(CreateEntityRequest $request, array $callOptions = []): Entity
    {
        return $this->startApiCall('CreateEntity', $request, $callOptions)->wait();
    }

    /**
     * Create a metadata partition.
     *
     * The async variant is {@see MetadataServiceClient::createPartitionAsync()} .
     *
     * @example samples/V1/MetadataServiceClient/create_partition.php
     *
     * @param CreatePartitionRequest $request     A request to house fields associated with the call.
     * @param array                  $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Partition
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createPartition(CreatePartitionRequest $request, array $callOptions = []): Partition
    {
        return $this->startApiCall('CreatePartition', $request, $callOptions)->wait();
    }

    /**
     * Delete a metadata entity.
     *
     * The async variant is {@see MetadataServiceClient::deleteEntityAsync()} .
     *
     * @example samples/V1/MetadataServiceClient/delete_entity.php
     *
     * @param DeleteEntityRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function deleteEntity(DeleteEntityRequest $request, array $callOptions = []): void
    {
        $this->startApiCall('DeleteEntity', $request, $callOptions)->wait();
    }

    /**
     * Delete a metadata partition.
     *
     * The async variant is {@see MetadataServiceClient::deletePartitionAsync()} .
     *
     * @example samples/V1/MetadataServiceClient/delete_partition.php
     *
     * @param DeletePartitionRequest $request     A request to house fields associated with the call.
     * @param array                  $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function deletePartition(DeletePartitionRequest $request, array $callOptions = []): void
    {
        $this->startApiCall('DeletePartition', $request, $callOptions)->wait();
    }

    /**
     * Get a metadata entity.
     *
     * The async variant is {@see MetadataServiceClient::getEntityAsync()} .
     *
     * @example samples/V1/MetadataServiceClient/get_entity.php
     *
     * @param GetEntityRequest $request     A request to house fields associated with the call.
     * @param array            $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Entity
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getEntity(GetEntityRequest $request, array $callOptions = []): Entity
    {
        return $this->startApiCall('GetEntity', $request, $callOptions)->wait();
    }

    /**
     * Get a metadata partition of an entity.
     *
     * The async variant is {@see MetadataServiceClient::getPartitionAsync()} .
     *
     * @example samples/V1/MetadataServiceClient/get_partition.php
     *
     * @param GetPartitionRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Partition
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getPartition(GetPartitionRequest $request, array $callOptions = []): Partition
    {
        return $this->startApiCall('GetPartition', $request, $callOptions)->wait();
    }

    /**
     * List metadata entities in a zone.
     *
     * The async variant is {@see MetadataServiceClient::listEntitiesAsync()} .
     *
     * @example samples/V1/MetadataServiceClient/list_entities.php
     *
     * @param ListEntitiesRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listEntities(ListEntitiesRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListEntities', $request, $callOptions);
    }

    /**
     * List metadata partitions of an entity.
     *
     * The async variant is {@see MetadataServiceClient::listPartitionsAsync()} .
     *
     * @example samples/V1/MetadataServiceClient/list_partitions.php
     *
     * @param ListPartitionsRequest $request     A request to house fields associated with the call.
     * @param array                 $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listPartitions(ListPartitionsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListPartitions', $request, $callOptions);
    }

    /**
     * Update a metadata entity. Only supports full resource update.
     *
     * The async variant is {@see MetadataServiceClient::updateEntityAsync()} .
     *
     * @example samples/V1/MetadataServiceClient/update_entity.php
     *
     * @param UpdateEntityRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Entity
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function updateEntity(UpdateEntityRequest $request, array $callOptions = []): Entity
    {
        return $this->startApiCall('UpdateEntity', $request, $callOptions)->wait();
    }

    /**
     * Gets the access control policy for a resource. Returns an empty policy
    if the resource exists and does not have a policy set.
     *
     * The async variant is {@see MetadataServiceClient::getIamPolicyAsync()} .
     *
     * @example samples/V1/MetadataServiceClient/get_iam_policy.php
     *
     * @param GetIamPolicyRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Policy
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getIamPolicy(GetIamPolicyRequest $request, array $callOptions = []): Policy
    {
        return $this->startApiCall('GetIamPolicy', $request, $callOptions)->wait();
    }

    /**
     * Sets the access control policy on the specified resource. Replaces
    any existing policy.

    Can return `NOT_FOUND`, `INVALID_ARGUMENT`, and `PERMISSION_DENIED`
    errors.
     *
     * The async variant is {@see MetadataServiceClient::setIamPolicyAsync()} .
     *
     * @example samples/V1/MetadataServiceClient/set_iam_policy.php
     *
     * @param SetIamPolicyRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Policy
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function setIamPolicy(SetIamPolicyRequest $request, array $callOptions = []): Policy
    {
        return $this->startApiCall('SetIamPolicy', $request, $callOptions)->wait();
    }

    /**
     * Returns permissions that a caller has on the specified resource. If the
    resource does not exist, this will return an empty set of
    permissions, not a `NOT_FOUND` error.

    Note: This operation is designed to be used for building
    permission-aware UIs and command-line tools, not for authorization
    checking. This operation may "fail open" without warning.
     *
     * The async variant is {@see MetadataServiceClient::testIamPermissionsAsync()} .
     *
     * @example samples/V1/MetadataServiceClient/test_iam_permissions.php
     *
     * @param TestIamPermissionsRequest $request     A request to house fields associated with the call.
     * @param array                     $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return TestIamPermissionsResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function testIamPermissions(
        TestIamPermissionsRequest $request,
        array $callOptions = []
    ): TestIamPermissionsResponse {
        return $this->startApiCall('TestIamPermissions', $request, $callOptions)->wait();
    }

    /**
     * Gets information about a location.
     *
     * The async variant is {@see MetadataServiceClient::getLocationAsync()} .
     *
     * @example samples/V1/MetadataServiceClient/get_location.php
     *
     * @param GetLocationRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Location
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getLocation(GetLocationRequest $request, array $callOptions = []): Location
    {
        return $this->startApiCall('GetLocation', $request, $callOptions)->wait();
    }

    /**
     * Lists information about the supported locations for this service.
     *
     * The async variant is {@see MetadataServiceClient::listLocationsAsync()} .
     *
     * @example samples/V1/MetadataServiceClient/list_locations.php
     *
     * @param ListLocationsRequest $request     A request to house fields associated with the call.
     * @param array                $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listLocations(ListLocationsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListLocations', $request, $callOptions);
    }
}
