<?php

namespace AlibabaCloud\Dts\V20180801;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method string getSynchronizationJobId
 * @method self withSynchronizationJobId
 * @method string getSynchronizationDirection
 * @method self withSynchronizationDirection
 * @method string getOwnerId
 * @method self withOwnerId
 */
final class ResetSynchronizationJob extends RpcRequest
{
}

/**
 * @method string getSynchronizationJobId
 * @method self withSynchronizationJobId
 * @method string getSynchronizationDirection
 * @method self withSynchronizationDirection
 * @method string getEndpoint.Type
 * @method self withEndpoint.Type
 * @method string getEndpoint.InstanceType
 * @method self withEndpoint.InstanceType
 * @method string getEndpoint.InstanceId
 * @method self withEndpoint.InstanceId
 * @method string getEndpoint.IP
 * @method self withEndpoint.IP
 * @method string getEndpoint.Port
 * @method self withEndpoint.Port
 * @method string getOwnerId
 * @method self withOwnerId
 */
final class SwitchSynchronizationEndpoint extends RpcRequest
{
}

/**
 * @method string getTaskId
 * @method self withTaskId
 * @method string getClientToken
 * @method self withClientToken
 * @method string getOwnerId
 * @method self withOwnerId
 */
final class DescribeEndpointSwitchStatus extends RpcRequest
{
}

/**
 * @method string getMigrationJobId
 * @method self withMigrationJobId
 * @method string getMigrationObject
 * @method self withMigrationObject
 * @method string getClientToken
 * @method self withClientToken
 * @method string getOwnerId
 * @method self withOwnerId
 */
final class ModifyMigrationObject extends RpcRequest
{
}

/**
 * @method string getSynchronizationJobId
 * @method self withSynchronizationJobId
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getPageNum
 * @method self withPageNum
 * @method string getOwnerId
 * @method self withOwnerId
 */
final class DescribeInitializationStatus extends RpcRequest
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
 * @method string getCheckpoint
 * @method self withCheckpoint
 * @method string getOwnerId
 * @method self withOwnerId
 */
final class ConfigureMigrationJob extends RpcRequest
{
}

/**
 * @method string getSubscriptionInstanceId
 * @method self withSubscriptionInstanceId
 * @method string getSubscriptionInstanceName
 * @method self withSubscriptionInstanceName
 * @method string getSourceEndpoint.InstanceType
 * @method self withSourceEndpoint.InstanceType
 * @method string getSourceEndpoint.InstanceID
 * @method self withSourceEndpoint.InstanceID
 * @method Boolean getSubscriptionDataType.DDL
 * @method self withSubscriptionDataType.DDL
 * @method Boolean getSubscriptionDataType.DML
 * @method self withSubscriptionDataType.DML
 * @method string getSubscriptionObject
 * @method self withSubscriptionObject
 * @method string getSourceEndpoint.OwnerID
 * @method self withSourceEndpoint.OwnerID
 * @method string getSourceEndpoint.Role
 * @method self withSourceEndpoint.Role
 * @method string getOwnerId
 * @method self withOwnerId
 */
final class ConfigureSubscriptionInstance extends RpcRequest
{
}

/**
 * @method string getMigrationJobId
 * @method self withMigrationJobId
 * @method string getClientToken
 * @method self withClientToken
 * @method string getOwnerId
 * @method self withOwnerId
 */
final class DescribeMigrationJobStatus extends RpcRequest
{
}

/**
 * @method string getMigrationJobId
 * @method self withMigrationJobId
 * @method string getOwnerId
 * @method self withOwnerId
 */
final class StartMigrationJob extends RpcRequest
{
}

/**
 * @method string getSubscriptionInstanceId
 * @method self withSubscriptionInstanceId
 * @method string getConsumptionTimestamp
 * @method self withConsumptionTimestamp
 * @method string getOwnerId
 * @method self withOwnerId
 */
final class ModifyConsumptionTimestamp extends RpcRequest
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
 * @method string getOwnerId
 * @method self withOwnerId
 */
final class DescribeMigrationJobDetail extends RpcRequest
{
}

/**
 * @method string getRegion
 * @method self withRegion
 * @method string getPayType
 * @method self withPayType
 * @method string getPeriod
 * @method self withPeriod
 * @method Integer getUsedTime
 * @method self withUsedTime
 * @method string getClientToken
 * @method self withClientToken
 * @method string getOwnerId
 * @method self withOwnerId
 */
final class CreateSubscriptionInstance extends RpcRequest
{
}

/**
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getPageNum
 * @method self withPageNum
 * @method string getMigrationJobName
 * @method self withMigrationJobName
 * @method string getOwnerId
 * @method self withOwnerId
 */
final class DescribeMigrationJobs extends RpcRequest
{
}

/**
 * @method string getSubscriptionInstanceId
 * @method self withSubscriptionInstanceId
 * @method string getOwnerId
 * @method self withOwnerId
 */
final class StartSubscriptionInstance extends RpcRequest
{
}

/**
 * @method string getSubscriptionInstanceId
 * @method self withSubscriptionInstanceId
 * @method string getOwnerId
 * @method self withOwnerId
 */
final class DescribeSubscriptionInstanceStatus extends RpcRequest
{
}

/**
 * @method string getSubscriptionInstanceId
 * @method self withSubscriptionInstanceId
 * @method string getClientToken
 * @method self withClientToken
 * @method string getOwnerId
 * @method self withOwnerId
 */
final class DescribeSubscriptionObjectModifyStatus extends RpcRequest
{
}

/**
 * @method string getSubscriptionInstanceId
 * @method self withSubscriptionInstanceId
 * @method string getOwnerId
 * @method self withOwnerId
 */
final class DeleteSubscriptionInstance extends RpcRequest
{
}

/**
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getPageNum
 * @method self withPageNum
 * @method string getSubscriptionInstanceName
 * @method self withSubscriptionInstanceName
 * @method string getClientToken
 * @method self withClientToken
 * @method string getOwnerId
 * @method self withOwnerId
 */
final class DescribeSubscriptionInstances extends RpcRequest
{
}

/**
 * @method string getMigrationJobId
 * @method self withMigrationJobId
 * @method string getClientToken
 * @method self withClientToken
 * @method string getOwnerId
 * @method self withOwnerId
 */
final class SuspendMigrationJob extends RpcRequest
{
}

/**
 * @method string getMigrationJobId
 * @method self withMigrationJobId
 * @method string getClientToken
 * @method self withClientToken
 * @method string getOwnerId
 * @method self withOwnerId
 */
final class StopMigrationJob extends RpcRequest
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
 * @method string getOwnerId
 * @method self withOwnerId
 */
final class DeleteMigrationJob extends RpcRequest
{
}

/**
 * @method string getSubscriptionInstanceId
 * @method self withSubscriptionInstanceId
 * @method string getSubscriptionObject
 * @method self withSubscriptionObject
 * @method string getOwnerId
 * @method self withOwnerId
 */
final class ModifySubscriptionObject extends RpcRequest
{
}

/**
 * @method string getSynchronizationJobId
 * @method self withSynchronizationJobId
 * @method string getSynchronizationDirection
 * @method self withSynchronizationDirection
 * @method string getOwnerId
 * @method self withOwnerId
 */
final class StartSynchronizationJob extends RpcRequest
{
}

/**
 * @method string getSynchronizationJobName
 * @method self withSynchronizationJobName
 * @method string getSynchronizationJobId
 * @method self withSynchronizationJobId
 * @method string getSynchronizationDirection
 * @method self withSynchronizationDirection
 * @method string getSourceEndpoint.InstanceId
 * @method self withSourceEndpoint.InstanceId
 * @method string getSourceEndpoint.InstanceType
 * @method self withSourceEndpoint.InstanceType
 * @method string getSourceEndpoint.IP
 * @method self withSourceEndpoint.IP
 * @method string getSourceEndpoint.Port
 * @method self withSourceEndpoint.Port
 * @method string getSourceEndpoint.UserName
 * @method self withSourceEndpoint.UserName
 * @method string getSourceEndpoint.Password
 * @method self withSourceEndpoint.Password
 * @method string getDestinationEndpoint.InstanceId
 * @method self withDestinationEndpoint.InstanceId
 * @method string getDestinationEndpoint.InstanceType
 * @method self withDestinationEndpoint.InstanceType
 * @method string getDestinationEndpoint.IP
 * @method self withDestinationEndpoint.IP
 * @method string getDestinationEndpoint.Port
 * @method self withDestinationEndpoint.Port
 * @method string getDestinationEndpoint.UserName
 * @method self withDestinationEndpoint.UserName
 * @method string getDestinationEndpoint.Password
 * @method self withDestinationEndpoint.Password
 * @method Boolean getStructureInitialization
 * @method self withStructureInitialization
 * @method Boolean getDataInitialization
 * @method self withDataInitialization
 * @method string getSynchronizationObjects
 * @method self withSynchronizationObjects
 * @method string getSourceEndpoint.OwnerID
 * @method self withSourceEndpoint.OwnerID
 * @method string getSourceEndpoint.Role
 * @method self withSourceEndpoint.Role
 * @method Boolean getPartitionKey.ModifyTime_Year
 * @method self withPartitionKey.ModifyTime_Year
 * @method Boolean getPartitionKey.ModifyTime_Month
 * @method self withPartitionKey.ModifyTime_Month
 * @method Boolean getPartitionKey.ModifyTime_Day
 * @method self withPartitionKey.ModifyTime_Day
 * @method Boolean getPartitionKey.ModifyTime_Hour
 * @method self withPartitionKey.ModifyTime_Hour
 * @method Boolean getPartitionKey.ModifyTime_Minute
 * @method self withPartitionKey.ModifyTime_Minute
 * @method string getMigrationReserved
 * @method self withMigrationReserved
 * @method string getCheckpoint
 * @method self withCheckpoint
 * @method string getOwnerId
 * @method self withOwnerId
 */
final class ConfigureSynchronizationJob extends RpcRequest
{
}

/**
 * @method string getSynchronizationJobId
 * @method self withSynchronizationJobId
 * @method string getOwnerId
 * @method self withOwnerId
 */
final class DeleteSynchronizationJob extends RpcRequest
{
}

/**
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getPageNum
 * @method self withPageNum
 * @method string getSynchronizationJobName
 * @method self withSynchronizationJobName
 * @method string getClientToken
 * @method self withClientToken
 * @method string getOwnerId
 * @method self withOwnerId
 */
final class DescribeSynchronizationJobs extends RpcRequest
{
}

/**
 * @method string getSynchronizationJobId
 * @method self withSynchronizationJobId
 * @method string getSynchronizationDirection
 * @method self withSynchronizationDirection
 * @method string getOwnerId
 * @method self withOwnerId
 */
final class SuspendSynchronizationJob extends RpcRequest
{
}

/**
 * @method string getSynchronizationJobId
 * @method self withSynchronizationJobId
 * @method string getSynchronizationObjects
 * @method self withSynchronizationObjects
 * @method string getSynchronizationDirection
 * @method self withSynchronizationDirection
 * @method string getOwnerId
 * @method self withOwnerId
 */
final class ModifySynchronizationObject extends RpcRequest
{
}

/**
 * @method string getSynchronizationJobId
 * @method self withSynchronizationJobId
 * @method string getSynchronizationDirection
 * @method self withSynchronizationDirection
 * @method string getClientToken
 * @method self withClientToken
 * @method string getOwnerId
 * @method self withOwnerId
 */
final class DescribeSynchronizationJobStatus extends RpcRequest
{
}

/**
 * @method string getTaskId
 * @method self withTaskId
 * @method string getClientToken
 * @method self withClientToken
 * @method string getOwnerId
 * @method self withOwnerId
 */
final class DescribeSynchronizationObjectModifyStatus extends RpcRequest
{
}

/**
 * @method string getSourceRegion
 * @method self withSourceRegion
 * @method string getDestRegion
 * @method self withDestRegion
 * @method string getTopology
 * @method self withTopology
 * @method string getSynchronizationJobClass
 * @method self withSynchronizationJobClass
 * @method string getPayType
 * @method self withPayType
 * @method string getPeriod
 * @method self withPeriod
 * @method Integer getUsedTime
 * @method self withUsedTime
 * @method string getClientToken
 * @method self withClientToken
 * @method string getSourceEndpoint.InstanceType
 * @method self withSourceEndpoint.InstanceType
 * @method string getDestinationEndpoint.InstanceType
 * @method self withDestinationEndpoint.InstanceType
 * @method string getnetworkType
 * @method self withnetworkType
 * @method string getOwnerId
 * @method self withOwnerId
 */
final class CreateSynchronizationJob extends RpcRequest
{
}
