<?php

namespace AlibabaCloud\Dts\V20170601;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method SuspendMigrationJob suspendMigrationJob($options = [])
 * @method StopMigrationJob stopMigrationJob($options = [])
 * @method StartMigrationJob startMigrationJob($options = [])
 * @method ModifyMigrationObject modifyMigrationObject($options = [])
 * @method DescribeMigrationJobStatus describeMigrationJobStatus($options = [])
 * @method DescribeMigrationJobDetail describeMigrationJobDetail($options = [])
 * @method DescirbeMigrationJobs descirbeMigrationJobs($options = [])
 * @method DeleteMigrationJob deleteMigrationJob($options = [])
 * @method CreateMigrationJob createMigrationJob($options = [])
 * @method ConfigureMigrationJob configureMigrationJob($options = [])
 */
class V20170601
{
    use ApiResolverTrait;
}

/**
 * @method string getMigrationJobId
 * @method self withMigrationJobId(string $migrationJobId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
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
 */
class StopMigrationJob extends Roa
{
    use R;
}

/**
 * @method string getMigrationJobId
 * @method self withMigrationJobId(string $migrationJobId)
 */
class StartMigrationJob extends Roa
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
 */
class ModifyMigrationObject extends Roa
{
    use R;
}

/**
 * @method string getMigrationJobId
 * @method self withMigrationJobId(string $migrationJobId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 */
class DescribeMigrationJobStatus extends Roa
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
 */
class DescribeMigrationJobDetail extends Roa
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
 */
class DescirbeMigrationJobs extends Roa
{
    use R;
}

/**
 * @method string getMigrationJobId
 * @method self withMigrationJobId(string $migrationJobId)
 */
class DeleteMigrationJob extends Roa
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
 */
class ConfigureMigrationJob extends Roa
{
    use R;
}
