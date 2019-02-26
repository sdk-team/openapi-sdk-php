<?php

namespace AlibabaCloud\Dts\V20170601;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method string getMigrationJobId
 * @method self withMigrationJobId
 * @method string getClientToken
 * @method self withClientToken
 */
final class SuspendMigrationJob extends RpcRequest
{
}

/**
 * @method string getMigrationJobId
 * @method self withMigrationJobId
 * @method string getClientToken
 * @method self withClientToken
 */
final class StopMigrationJob extends RpcRequest
{
}

/**
 * @method string getMigrationJobId
 * @method self withMigrationJobId
 */
final class StartMigrationJob extends RpcRequest
{
}

/**
 * @method string getMigrationJobId
 * @method self withMigrationJobId
 * @method string getMigrationObject
 * @method self withMigrationObject
 * @method string getClientToken
 * @method self withClientToken
 */
final class ModifyMigrationObject extends RpcRequest
{
}

/**
 * @method string getMigrationJobId
 * @method self withMigrationJobId
 * @method string getClientToken
 * @method self withClientToken
 */
final class DescribeMigrationJobStatus extends RpcRequest
{
}

/**
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getPageNum
 * @method self withPageNum
 * @method string getMigrationJobId
 * @method self withMigrationJobId
 * @method Boolean getMigrationMode.StructureInitialization
 * @method self withMigrationMode.StructureInitialization
 * @method Boolean getMigrationMode.DataInitialization
 * @method self withMigrationMode.DataInitialization
 * @method Boolean getMigrationMode.DataSynchronization
 * @method self withMigrationMode.DataSynchronization
 * @method string getClientToken
 * @method self withClientToken
 */
final class DescribeMigrationJobDetail extends RpcRequest
{
}

/**
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getPageNum
 * @method self withPageNum
 * @method string getMigrationJobName
 * @method self withMigrationJobName
 */
final class DescirbeMigrationJobs extends RpcRequest
{
}

/**
 * @method string getMigrationJobId
 * @method self withMigrationJobId
 */
final class DeleteMigrationJob extends RpcRequest
{
}

/**
 * @method string getRegion
 * @method self withRegion
 * @method string getMigrationJobClass
 * @method self withMigrationJobClass
 * @method string getOwnerId
 * @method self withOwnerId
 * @method string getClientToken
 * @method self withClientToken
 */
final class CreateMigrationJob extends RpcRequest
{
}

/**
 * @method string getMigrationJobId
 * @method self withMigrationJobId
 * @method string getMigrationJobName
 * @method self withMigrationJobName
 * @method string getSourceEndpoint.InstanceType
 * @method self withSourceEndpoint.InstanceType
 * @method string getSourceEndpoint.InstanceID
 * @method self withSourceEndpoint.InstanceID
 * @method string getSourceEndpoint.EngineName
 * @method self withSourceEndpoint.EngineName
 * @method string getSourceEndpoint.Region
 * @method self withSourceEndpoint.Region
 * @method string getSourceEndpoint.IP
 * @method self withSourceEndpoint.IP
 * @method string getSourceEndpoint.Port
 * @method self withSourceEndpoint.Port
 * @method string getSourceEndpoint.OracleSID
 * @method self withSourceEndpoint.OracleSID
 * @method string getSourceEndpoint.DatabaseName
 * @method self withSourceEndpoint.DatabaseName
 * @method string getSourceEndpoint.UserName
 * @method self withSourceEndpoint.UserName
 * @method string getSourceEndpoint.Password
 * @method self withSourceEndpoint.Password
 * @method string getSourceEndpoint.OwnerID
 * @method self withSourceEndpoint.OwnerID
 * @method string getSourceEndpoint.Role
 * @method self withSourceEndpoint.Role
 * @method string getDestinationEndpoint.InstanceType
 * @method self withDestinationEndpoint.InstanceType
 * @method string getDestinationEndpoint.InstanceID
 * @method self withDestinationEndpoint.InstanceID
 * @method string getDestinationEndpoint.EngineName
 * @method self withDestinationEndpoint.EngineName
 * @method string getDestinationEndpoint.Region
 * @method self withDestinationEndpoint.Region
 * @method string getDestinationEndpoint.IP
 * @method self withDestinationEndpoint.IP
 * @method string getDestinationEndpoint.Port
 * @method self withDestinationEndpoint.Port
 * @method string getDestinationEndpoint.DataBaseName
 * @method self withDestinationEndpoint.DataBaseName
 * @method string getDestinationEndpoint.UserName
 * @method self withDestinationEndpoint.UserName
 * @method string getDestinationEndpoint.Password
 * @method self withDestinationEndpoint.Password
 * @method Boolean getMigrationMode.StructureIntialization
 * @method self withMigrationMode.StructureIntialization
 * @method Boolean getMigrationMode.DataIntialization
 * @method self withMigrationMode.DataIntialization
 * @method Boolean getMigrationMode.DataSynchronization
 * @method self withMigrationMode.DataSynchronization
 * @method string getMigrationObject
 * @method self withMigrationObject
 * @method string getMigrationReserved
 * @method self withMigrationReserved
 */
final class ConfigureMigrationJob extends RpcRequest
{
}
