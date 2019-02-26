<?php

namespace AlibabaCloud\Rds\V20130528;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method CreateChildDBInstance createChildDBInstance($options = [])
 * @method CreateBackup createBackup($options = [])
 * @method CreateAccount createAccount($options = [])
 * @method CreateDatabase createDatabase($options = [])
 * @method DeleteChildInstance deleteChildInstance($options = [])
 * @method DeleteAccount deleteAccount($options = [])
 * @method CreateImportDataUpload createImportDataUpload($options = [])
 * @method CreateGuardDBInstance createGuardDBInstance($options = [])
 * @method CreateDBInstance createDBInstance($options = [])
 * @method DeleteDBInstance deleteDBInstance($options = [])
 * @method DeleteDatabase deleteDatabase($options = [])
 * @method DescribeBackups describeBackups($options = [])
 * @method DescribeAccounts describeAccounts($options = [])
 * @method DescribeDBInstancePerformance describeDBInstancePerformance($options = [])
 * @method DescribeDBInstanceClasses describeDBInstanceClasses($options = [])
 * @method DescribeDataFiles describeDataFiles($options = [])
 * @method DescribeDatabases describeDatabases($options = [])
 * @method DescribeBinlogFiles describeBinlogFiles($options = [])
 * @method DescribeDBInstances describeDBInstances($options = [])
 * @method DescribeResourceUsage describeResourceUsage($options = [])
 * @method DescribeParameterTemplates describeParameterTemplates($options = [])
 * @method DescribeParameters describeParameters($options = [])
 * @method DescribeErrorLogs describeErrorLogs($options = [])
 * @method DescribeSecurityIps describeSecurityIps($options = [])
 * @method DescribeSQLLogRecords describeSQLLogRecords($options = [])
 * @method DescribeSlowLogs describeSlowLogs($options = [])
 * @method DescribeSlowLogRecords describeSlowLogRecords($options = [])
 * @method ImportData importData($options = [])
 * @method GrantAccountPrivilege grantAccountPrivilege($options = [])
 * @method DescribeSQLLogReports describeSQLLogReports($options = [])
 * @method RestartDBInstance restartDBInstance($options = [])
 * @method QueryShareDBInstancesService queryShareDBInstancesService($options = [])
 * @method ModifySecurityIps modifySecurityIps($options = [])
 * @method ModifyParameter modifyParameter($options = [])
 * @method ModifyDBInstanceAttribute modifyDBInstanceAttribute($options = [])
 * @method ModifyAccountAttribute modifyAccountAttribute($options = [])
 * @method SwitchDBInstanceNetType switchDBInstanceNetType($options = [])
 * @method SwitchDBInstance switchDBInstance($options = [])
 * @method RevokeAccountPrivilege revokeAccountPrivilege($options = [])
 * @method RestoreDBInstance restoreDBInstance($options = [])
 * @method MigratingDB migratingDB($options = [])
 * @method DescribeSwitchDBInstanceList describeSwitchDBInstanceList($options = [])
 */
class V20130528
{
    use ApiResolverTrait;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getBackupId
 * @method self withBackupId(string $backupId)
 * @method string getRetainInstance
 * @method self withRetainInstance(string $retainInstance)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class CreateChildDBInstance extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class CreateBackup extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getDBName
 * @method self withDBName(string $dBName)
 * @method string getAccountName
 * @method self withAccountName(string $accountName)
 * @method string getAccountPassword
 * @method self withAccountPassword(string $accountPassword)
 * @method string getAccountPrivilege
 * @method self withAccountPrivilege(string $accountPrivilege)
 * @method string getAccountDescription
 * @method self withAccountDescription(string $accountDescription)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class CreateAccount extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getDbInstanceId
 * @method self withDbInstanceId(string $dbInstanceId)
 * @method string getDBName
 * @method self withDBName(string $dBName)
 * @method string getCharacterSetName
 * @method self withCharacterSetName(string $characterSetName)
 * @method string getAccountName
 * @method self withAccountName(string $accountName)
 * @method string getAccountPrivilege
 * @method self withAccountPrivilege(string $accountPrivilege)
 * @method string getDBDescription
 * @method self withDBDescription(string $dBDescription)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class CreateDatabase extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method int getuid
 * @method self withuid(int $uid)
 * @method string getbid
 * @method self withbid(string $bid)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DeleteChildInstance extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getAccountName
 * @method self withAccountName(string $accountName)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DeleteAccount extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getDBName
 * @method self withDBName(string $dBName)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class CreateImportDataUpload extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getConnectionStringPrefix
 * @method self withConnectionStringPrefix(string $connectionStringPrefix)
 * @method string getPort
 * @method self withPort(string $port)
 * @method string getEngineVersion
 * @method self withEngineVersion(string $engineVersion)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class CreateGuardDBInstance extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getEngine
 * @method self withEngine(string $engine)
 * @method string getEngineVersion
 * @method self withEngineVersion(string $engineVersion)
 * @method string getDBInstanceClass
 * @method self withDBInstanceClass(string $dBInstanceClass)
 * @method Integer getDBInstanceStorage
 * @method self withDBInstanceStorage(Integer $dBInstanceStorage)
 * @method string getSystemDBCharset
 * @method self withSystemDBCharset(string $systemDBCharset)
 * @method string getDBInstanceNetType
 * @method self withDBInstanceNetType(string $dBInstanceNetType)
 * @method string getDBInstanceDescription
 * @method self withDBInstanceDescription(string $dBInstanceDescription)
 * @method string getSecurityIPList
 * @method self withSecurityIPList(string $securityIPList)
 * @method string getPayType
 * @method self withPayType(string $payType)
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 * @method string getInstanceNetworkType
 * @method self withInstanceNetworkType(string $instanceNetworkType)
 * @method string getConnectionMode
 * @method self withConnectionMode(string $connectionMode)
 * @method string getVPCId
 * @method self withVPCId(string $vPCId)
 * @method string getVSwitchId
 * @method self withVSwitchId(string $vSwitchId)
 * @method string getPrivateIpAddress
 * @method self withPrivateIpAddress(string $privateIpAddress)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getUsedTime
 * @method self withUsedTime(string $usedTime)
 * @method string getPeriod
 * @method self withPeriod(string $period)
 */
class CreateDBInstance extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DeleteDBInstance extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getDBName
 * @method self withDBName(string $dBName)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DeleteDatabase extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getBackupStatus
 * @method self withBackupStatus(string $backupStatus)
 * @method Integer getBackupMode
 * @method self withBackupMode(Integer $backupMode)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeBackups extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getAccountName
 * @method self withAccountName(string $accountName)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeAccounts extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getKey
 * @method self withKey(string $key)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeDBInstancePerformance extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeDBInstanceClasses extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeDataFiles extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getDBName
 * @method self withDBName(string $dBName)
 * @method string getDBStatus
 * @method self withDBStatus(string $dBStatus)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeDatabases extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeBinlogFiles extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getEngine
 * @method self withEngine(string $engine)
 * @method string getDBInstanceStatus
 * @method self withDBInstanceStatus(string $dBInstanceStatus)
 * @method string getSearchKey
 * @method self withSearchKey(string $searchKey)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getDBInstanceType
 * @method self withDBInstanceType(string $dBInstanceType)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method string getInstanceNetworkType
 * @method self withInstanceNetworkType(string $instanceNetworkType)
 * @method string getConnectionMode
 * @method self withConnectionMode(string $connectionMode)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeDBInstances extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeResourceUsage extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getEngine
 * @method self withEngine(string $engine)
 * @method string getEngineVersion
 * @method self withEngineVersion(string $engineVersion)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeParameterTemplates extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeParameters extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeErrorLogs extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeSecurityIps extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getQueryKeyword
 * @method self withQueryKeyword(string $queryKeyword)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeSQLLogRecords extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getDBName
 * @method self withDBName(string $dBName)
 * @method string getSortKey
 * @method self withSortKey(string $sortKey)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeSlowLogs extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getDBName
 * @method self withDBName(string $dBName)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeSlowLogRecords extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getFileName
 * @method self withFileName(string $fileName)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ImportData extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getAccountName
 * @method self withAccountName(string $accountName)
 * @method string getDBName
 * @method self withDBName(string $dBName)
 * @method string getAccountPrivilege
 * @method self withAccountPrivilege(string $accountPrivilege)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class GrantAccountPrivilege extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getReportType
 * @method self withReportType(string $reportType)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeSQLLogReports extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class RestartDBInstance extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class QueryShareDBInstancesService extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getSecurityIps
 * @method self withSecurityIps(string $securityIps)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ModifySecurityIps extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getParameters
 * @method self withParameters(string $parameters)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ModifyParameter extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getDBInstanceClass
 * @method self withDBInstanceClass(string $dBInstanceClass)
 * @method Integer getDBInstanceStorage
 * @method self withDBInstanceStorage(Integer $dBInstanceStorage)
 * @method string getPayType
 * @method self withPayType(string $payType)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ModifyDBInstanceAttribute extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getAccountName
 * @method self withAccountName(string $accountName)
 * @method string getAccountPassword
 * @method self withAccountPassword(string $accountPassword)
 * @method string getOldAccountPassword
 * @method self withOldAccountPassword(string $oldAccountPassword)
 * @method string getAccountPrivilege
 * @method self withAccountPrivilege(string $accountPrivilege)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ModifyAccountAttribute extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getConnectionStringPrefix
 * @method self withConnectionStringPrefix(string $connectionStringPrefix)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class SwitchDBInstanceNetType extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getForceSwitch
 * @method self withForceSwitch(string $forceSwitch)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class SwitchDBInstance extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getDBName
 * @method self withDBName(string $dBName)
 * @method string getAccountName
 * @method self withAccountName(string $accountName)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class RevokeAccountPrivilege extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getBackupId
 * @method self withBackupId(string $backupId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class RestoreDBInstance extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getTargetDBInstanceId
 * @method self withTargetDBInstanceId(string $targetDBInstanceId)
 * @method string getDBInfo
 * @method self withDBInfo(string $dBInfo)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class MigratingDB extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeSwitchDBInstanceList extends Roa
{
    use R;
}
