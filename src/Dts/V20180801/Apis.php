<?php

namespace AlibabaCloud\Dts\V20180801;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method ResetSynchronizationJob resetSynchronizationJob($options = [])
 * @method SwitchSynchronizationEndpoint switchSynchronizationEndpoint($options = [])
 * @method DescribeEndpointSwitchStatus describeEndpointSwitchStatus($options = [])
 * @method ModifyMigrationObject modifyMigrationObject($options = [])
 * @method DescribeInitializationStatus describeInitializationStatus($options = [])
 * @method ConfigureMigrationJob configureMigrationJob($options = [])
 * @method ConfigureSubscriptionInstance configureSubscriptionInstance($options = [])
 * @method DescribeMigrationJobStatus describeMigrationJobStatus($options = [])
 * @method StartMigrationJob startMigrationJob($options = [])
 * @method ModifyConsumptionTimestamp modifyConsumptionTimestamp($options = [])
 * @method DescribeMigrationJobDetail describeMigrationJobDetail($options = [])
 * @method CreateSubscriptionInstance createSubscriptionInstance($options = [])
 * @method DescribeMigrationJobs describeMigrationJobs($options = [])
 * @method StartSubscriptionInstance startSubscriptionInstance($options = [])
 * @method DescribeSubscriptionInstanceStatus describeSubscriptionInstanceStatus($options = [])
 * @method DescribeSubscriptionObjectModifyStatus describeSubscriptionObjectModifyStatus($options = [])
 * @method DeleteSubscriptionInstance deleteSubscriptionInstance($options = [])
 * @method DescribeSubscriptionInstances describeSubscriptionInstances($options = [])
 * @method SuspendMigrationJob suspendMigrationJob($options = [])
 * @method StopMigrationJob stopMigrationJob($options = [])
 * @method CreateMigrationJob createMigrationJob($options = [])
 * @method DeleteMigrationJob deleteMigrationJob($options = [])
 * @method ModifySubscriptionObject modifySubscriptionObject($options = [])
 * @method StartSynchronizationJob startSynchronizationJob($options = [])
 * @method ConfigureSynchronizationJob configureSynchronizationJob($options = [])
 * @method DeleteSynchronizationJob deleteSynchronizationJob($options = [])
 * @method DescribeSynchronizationJobs describeSynchronizationJobs($options = [])
 * @method SuspendSynchronizationJob suspendSynchronizationJob($options = [])
 * @method ModifySynchronizationObject modifySynchronizationObject($options = [])
 * @method DescribeSynchronizationJobStatus describeSynchronizationJobStatus($options = [])
 * @method DescribeSynchronizationObjectModifyStatus describeSynchronizationObjectModifyStatus($options = [])
 * @method CreateSynchronizationJob createSynchronizationJob($options = [])
 */
class V20180801
{
    use ApiResolverTrait;
}

/**
 * @method string getSynchronizationJobId
 * @method self withSynchronizationJobId(string $synchronizationJobId)
 * @method string getSynchronizationDirection
 * @method self withSynchronizationDirection(string $synchronizationDirection)
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 */
class ResetSynchronizationJob extends Roa
{
    use R;
}

/**
 * @method string getSynchronizationJobId
 * @method self withSynchronizationJobId(string $synchronizationJobId)
 * @method string getSynchronizationDirection
 * @method self withSynchronizationDirection(string $synchronizationDirection)
 * @method string getEndpointType
 * @method self withEndpointType(string $endpointType)
 * @method string getEndpointInstanceType
 * @method self withEndpointInstanceType(string $endpointInstanceType)
 * @method string getEndpointInstanceId
 * @method self withEndpointInstanceId(string $endpointInstanceId)
 * @method string getEndpointIP
 * @method self withEndpointIP(string $endpointIP)
 * @method string getEndpointPort
 * @method self withEndpointPort(string $endpointPort)
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 */
class SwitchSynchronizationEndpoint extends Roa
{
    use R;
}

/**
 * @method string getTaskId
 * @method self withTaskId(string $taskId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 */
class DescribeEndpointSwitchStatus extends Roa
{
    use R;
}

/**
 * @method string getMigrationJobId
 * @method self withMigrationJobId(string $migrationJobId)
 * @method string getMigrationObject
 * @method self withMigrationObject(string $migrationObject)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 */
class ModifyMigrationObject extends Roa
{
    use R;
}

/**
 * @method string getSynchronizationJobId
 * @method self withSynchronizationJobId(string $synchronizationJobId)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 */
class DescribeInitializationStatus extends Roa
{
    use R;
}

/**
 * @method string getMigrationJobId
 * @method self withMigrationJobId(string $migrationJobId)
 * @method string getMigrationJobName
 * @method self withMigrationJobName(string $migrationJobName)
 * @method string getSourceEndpointInstanceType
 * @method self withSourceEndpointInstanceType(string $sourceEndpointInstanceType)
 * @method string getSourceEndpointInstanceID
 * @method self withSourceEndpointInstanceID(string $sourceEndpointInstanceID)
 * @method string getSourceEndpointEngineName
 * @method self withSourceEndpointEngineName(string $sourceEndpointEngineName)
 * @method string getSourceEndpointRegion
 * @method self withSourceEndpointRegion(string $sourceEndpointRegion)
 * @method string getSourceEndpointIP
 * @method self withSourceEndpointIP(string $sourceEndpointIP)
 * @method string getSourceEndpointPort
 * @method self withSourceEndpointPort(string $sourceEndpointPort)
 * @method string getSourceEndpointOracleSID
 * @method self withSourceEndpointOracleSID(string $sourceEndpointOracleSID)
 * @method string getSourceEndpointDatabaseName
 * @method self withSourceEndpointDatabaseName(string $sourceEndpointDatabaseName)
 * @method string getSourceEndpointUserName
 * @method self withSourceEndpointUserName(string $sourceEndpointUserName)
 * @method string getSourceEndpointPassword
 * @method self withSourceEndpointPassword(string $sourceEndpointPassword)
 * @method string getSourceEndpointOwnerID
 * @method self withSourceEndpointOwnerID(string $sourceEndpointOwnerID)
 * @method string getSourceEndpointRole
 * @method self withSourceEndpointRole(string $sourceEndpointRole)
 * @method string getDestinationEndpointInstanceType
 * @method self withDestinationEndpointInstanceType(string $destinationEndpointInstanceType)
 * @method string getDestinationEndpointInstanceID
 * @method self withDestinationEndpointInstanceID(string $destinationEndpointInstanceID)
 * @method string getDestinationEndpointEngineName
 * @method self withDestinationEndpointEngineName(string $destinationEndpointEngineName)
 * @method string getDestinationEndpointRegion
 * @method self withDestinationEndpointRegion(string $destinationEndpointRegion)
 * @method string getDestinationEndpointIP
 * @method self withDestinationEndpointIP(string $destinationEndpointIP)
 * @method string getDestinationEndpointPort
 * @method self withDestinationEndpointPort(string $destinationEndpointPort)
 * @method string getDestinationEndpointDataBaseName
 * @method self withDestinationEndpointDataBaseName(string $destinationEndpointDataBaseName)
 * @method string getDestinationEndpointUserName
 * @method self withDestinationEndpointUserName(string $destinationEndpointUserName)
 * @method string getDestinationEndpointPassword
 * @method self withDestinationEndpointPassword(string $destinationEndpointPassword)
 * @method bool getMigrationModeStructureIntialization
 * @method self withMigrationModeStructureIntialization(bool $migrationModeStructureIntialization)
 * @method bool getMigrationModeDataIntialization
 * @method self withMigrationModeDataIntialization(bool $migrationModeDataIntialization)
 * @method bool getMigrationModeDataSynchronization
 * @method self withMigrationModeDataSynchronization(bool $migrationModeDataSynchronization)
 * @method string getMigrationObject
 * @method self withMigrationObject(string $migrationObject)
 * @method string getMigrationReserved
 * @method self withMigrationReserved(string $migrationReserved)
 * @method string getCheckpoint
 * @method self withCheckpoint(string $checkpoint)
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 */
class ConfigureMigrationJob extends Roa
{
    use R;
}

/**
 * @method string getSubscriptionInstanceId
 * @method self withSubscriptionInstanceId(string $subscriptionInstanceId)
 * @method string getSubscriptionInstanceName
 * @method self withSubscriptionInstanceName(string $subscriptionInstanceName)
 * @method string getSourceEndpointInstanceType
 * @method self withSourceEndpointInstanceType(string $sourceEndpointInstanceType)
 * @method string getSourceEndpointInstanceID
 * @method self withSourceEndpointInstanceID(string $sourceEndpointInstanceID)
 * @method bool getSubscriptionDataTypeDDL
 * @method self withSubscriptionDataTypeDDL(bool $subscriptionDataTypeDDL)
 * @method bool getSubscriptionDataTypeDML
 * @method self withSubscriptionDataTypeDML(bool $subscriptionDataTypeDML)
 * @method string getSubscriptionObject
 * @method self withSubscriptionObject(string $subscriptionObject)
 * @method string getSourceEndpointOwnerID
 * @method self withSourceEndpointOwnerID(string $sourceEndpointOwnerID)
 * @method string getSourceEndpointRole
 * @method self withSourceEndpointRole(string $sourceEndpointRole)
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 */
class ConfigureSubscriptionInstance extends Roa
{
    use R;
}

/**
 * @method string getMigrationJobId
 * @method self withMigrationJobId(string $migrationJobId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 */
class DescribeMigrationJobStatus extends Roa
{
    use R;
}

/**
 * @method string getMigrationJobId
 * @method self withMigrationJobId(string $migrationJobId)
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 */
class StartMigrationJob extends Roa
{
    use R;
}

/**
 * @method string getSubscriptionInstanceId
 * @method self withSubscriptionInstanceId(string $subscriptionInstanceId)
 * @method string getConsumptionTimestamp
 * @method self withConsumptionTimestamp(string $consumptionTimestamp)
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 */
class ModifyConsumptionTimestamp extends Roa
{
    use R;
}

/**
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method string getMigrationJobId
 * @method self withMigrationJobId(string $migrationJobId)
 * @method bool getMigrationModeStructureInitialization
 * @method self withMigrationModeStructureInitialization(bool $migrationModeStructureInitialization)
 * @method bool getMigrationModeDataInitialization
 * @method self withMigrationModeDataInitialization(bool $migrationModeDataInitialization)
 * @method bool getMigrationModeDataSynchronization
 * @method self withMigrationModeDataSynchronization(bool $migrationModeDataSynchronization)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 */
class DescribeMigrationJobDetail extends Roa
{
    use R;
}

/**
 * @method string getRegion
 * @method self withRegion(string $region)
 * @method string getPayType
 * @method self withPayType(string $payType)
 * @method string getPeriod
 * @method self withPeriod(string $period)
 * @method Integer getUsedTime
 * @method self withUsedTime(Integer $usedTime)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 */
class CreateSubscriptionInstance extends Roa
{
    use R;
}

/**
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method string getMigrationJobName
 * @method self withMigrationJobName(string $migrationJobName)
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 */
class DescribeMigrationJobs extends Roa
{
    use R;
}

/**
 * @method string getSubscriptionInstanceId
 * @method self withSubscriptionInstanceId(string $subscriptionInstanceId)
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 */
class StartSubscriptionInstance extends Roa
{
    use R;
}

/**
 * @method string getSubscriptionInstanceId
 * @method self withSubscriptionInstanceId(string $subscriptionInstanceId)
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 */
class DescribeSubscriptionInstanceStatus extends Roa
{
    use R;
}

/**
 * @method string getSubscriptionInstanceId
 * @method self withSubscriptionInstanceId(string $subscriptionInstanceId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 */
class DescribeSubscriptionObjectModifyStatus extends Roa
{
    use R;
}

/**
 * @method string getSubscriptionInstanceId
 * @method self withSubscriptionInstanceId(string $subscriptionInstanceId)
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 */
class DeleteSubscriptionInstance extends Roa
{
    use R;
}

/**
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method string getSubscriptionInstanceName
 * @method self withSubscriptionInstanceName(string $subscriptionInstanceName)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 */
class DescribeSubscriptionInstances extends Roa
{
    use R;
}

/**
 * @method string getMigrationJobId
 * @method self withMigrationJobId(string $migrationJobId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 */
class SuspendMigrationJob extends Roa
{
    use R;
}

/**
 * @method string getMigrationJobId
 * @method self withMigrationJobId(string $migrationJobId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 */
class StopMigrationJob extends Roa
{
    use R;
}

/**
 * @method string getRegion
 * @method self withRegion(string $region)
 * @method string getMigrationJobClass
 * @method self withMigrationJobClass(string $migrationJobClass)
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 */
class CreateMigrationJob extends Roa
{
    use R;
}

/**
 * @method string getMigrationJobId
 * @method self withMigrationJobId(string $migrationJobId)
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 */
class DeleteMigrationJob extends Roa
{
    use R;
}

/**
 * @method string getSubscriptionInstanceId
 * @method self withSubscriptionInstanceId(string $subscriptionInstanceId)
 * @method string getSubscriptionObject
 * @method self withSubscriptionObject(string $subscriptionObject)
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 */
class ModifySubscriptionObject extends Roa
{
    use R;
}

/**
 * @method string getSynchronizationJobId
 * @method self withSynchronizationJobId(string $synchronizationJobId)
 * @method string getSynchronizationDirection
 * @method self withSynchronizationDirection(string $synchronizationDirection)
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 */
class StartSynchronizationJob extends Roa
{
    use R;
}

/**
 * @method string getSynchronizationJobName
 * @method self withSynchronizationJobName(string $synchronizationJobName)
 * @method string getSynchronizationJobId
 * @method self withSynchronizationJobId(string $synchronizationJobId)
 * @method string getSynchronizationDirection
 * @method self withSynchronizationDirection(string $synchronizationDirection)
 * @method string getSourceEndpointInstanceId
 * @method self withSourceEndpointInstanceId(string $sourceEndpointInstanceId)
 * @method string getSourceEndpointInstanceType
 * @method self withSourceEndpointInstanceType(string $sourceEndpointInstanceType)
 * @method string getSourceEndpointIP
 * @method self withSourceEndpointIP(string $sourceEndpointIP)
 * @method string getSourceEndpointPort
 * @method self withSourceEndpointPort(string $sourceEndpointPort)
 * @method string getSourceEndpointUserName
 * @method self withSourceEndpointUserName(string $sourceEndpointUserName)
 * @method string getSourceEndpointPassword
 * @method self withSourceEndpointPassword(string $sourceEndpointPassword)
 * @method string getDestinationEndpointInstanceId
 * @method self withDestinationEndpointInstanceId(string $destinationEndpointInstanceId)
 * @method string getDestinationEndpointInstanceType
 * @method self withDestinationEndpointInstanceType(string $destinationEndpointInstanceType)
 * @method string getDestinationEndpointIP
 * @method self withDestinationEndpointIP(string $destinationEndpointIP)
 * @method string getDestinationEndpointPort
 * @method self withDestinationEndpointPort(string $destinationEndpointPort)
 * @method string getDestinationEndpointUserName
 * @method self withDestinationEndpointUserName(string $destinationEndpointUserName)
 * @method string getDestinationEndpointPassword
 * @method self withDestinationEndpointPassword(string $destinationEndpointPassword)
 * @method bool getStructureInitialization
 * @method self withStructureInitialization(bool $structureInitialization)
 * @method bool getDataInitialization
 * @method self withDataInitialization(bool $dataInitialization)
 * @method string getSynchronizationObjects
 * @method self withSynchronizationObjects(string $synchronizationObjects)
 * @method string getSourceEndpointOwnerID
 * @method self withSourceEndpointOwnerID(string $sourceEndpointOwnerID)
 * @method string getSourceEndpointRole
 * @method self withSourceEndpointRole(string $sourceEndpointRole)
 * @method bool getPartitionKeyModifyTimeYear
 * @method self withPartitionKeyModifyTimeYear(bool $partitionKeyModifyTimeYear)
 * @method bool getPartitionKeyModifyTimeMonth
 * @method self withPartitionKeyModifyTimeMonth(bool $partitionKeyModifyTimeMonth)
 * @method bool getPartitionKeyModifyTimeDay
 * @method self withPartitionKeyModifyTimeDay(bool $partitionKeyModifyTimeDay)
 * @method bool getPartitionKeyModifyTimeHour
 * @method self withPartitionKeyModifyTimeHour(bool $partitionKeyModifyTimeHour)
 * @method bool getPartitionKeyModifyTimeMinute
 * @method self withPartitionKeyModifyTimeMinute(bool $partitionKeyModifyTimeMinute)
 * @method string getMigrationReserved
 * @method self withMigrationReserved(string $migrationReserved)
 * @method string getCheckpoint
 * @method self withCheckpoint(string $checkpoint)
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 */
class ConfigureSynchronizationJob extends Roa
{
    use R;
}

/**
 * @method string getSynchronizationJobId
 * @method self withSynchronizationJobId(string $synchronizationJobId)
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 */
class DeleteSynchronizationJob extends Roa
{
    use R;
}

/**
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method string getSynchronizationJobName
 * @method self withSynchronizationJobName(string $synchronizationJobName)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 */
class DescribeSynchronizationJobs extends Roa
{
    use R;
}

/**
 * @method string getSynchronizationJobId
 * @method self withSynchronizationJobId(string $synchronizationJobId)
 * @method string getSynchronizationDirection
 * @method self withSynchronizationDirection(string $synchronizationDirection)
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 */
class SuspendSynchronizationJob extends Roa
{
    use R;
}

/**
 * @method string getSynchronizationJobId
 * @method self withSynchronizationJobId(string $synchronizationJobId)
 * @method string getSynchronizationObjects
 * @method self withSynchronizationObjects(string $synchronizationObjects)
 * @method string getSynchronizationDirection
 * @method self withSynchronizationDirection(string $synchronizationDirection)
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 */
class ModifySynchronizationObject extends Roa
{
    use R;
}

/**
 * @method string getSynchronizationJobId
 * @method self withSynchronizationJobId(string $synchronizationJobId)
 * @method string getSynchronizationDirection
 * @method self withSynchronizationDirection(string $synchronizationDirection)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 */
class DescribeSynchronizationJobStatus extends Roa
{
    use R;
}

/**
 * @method string getTaskId
 * @method self withTaskId(string $taskId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 */
class DescribeSynchronizationObjectModifyStatus extends Roa
{
    use R;
}

/**
 * @method string getSourceRegion
 * @method self withSourceRegion(string $sourceRegion)
 * @method string getDestRegion
 * @method self withDestRegion(string $destRegion)
 * @method string getTopology
 * @method self withTopology(string $topology)
 * @method string getSynchronizationJobClass
 * @method self withSynchronizationJobClass(string $synchronizationJobClass)
 * @method string getPayType
 * @method self withPayType(string $payType)
 * @method string getPeriod
 * @method self withPeriod(string $period)
 * @method Integer getUsedTime
 * @method self withUsedTime(Integer $usedTime)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getSourceEndpointInstanceType
 * @method self withSourceEndpointInstanceType(string $sourceEndpointInstanceType)
 * @method string getDestinationEndpointInstanceType
 * @method self withDestinationEndpointInstanceType(string $destinationEndpointInstanceType)
 * @method string getnetworkType
 * @method self withnetworkType(string $networkType)
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 */
class CreateSynchronizationJob extends Roa
{
    use R;
}
