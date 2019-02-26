<?php

namespace AlibabaCloud\Dds\V20151201;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method DescribeAvailableEngineVersion describeAvailableEngineVersion($options = [])
 * @method DescribeRenewalPrice describeRenewalPrice($options = [])
 * @method MigrateToOtherZone migrateToOtherZone($options = [])
 * @method ModifyInstanceAutoRenewalAttribute modifyInstanceAutoRenewalAttribute($options = [])
 * @method DescribeInstanceAutoRenewalAttribute describeInstanceAutoRenewalAttribute($options = [])
 * @method DescribeReplicationGroup describeReplicationGroup($options = [])
 * @method ModifyActiveOperationTask modifyActiveOperationTask($options = [])
 * @method DescribeActiveOperationTaskType describeActiveOperationTaskType($options = [])
 * @method DescribeActiveOperationTaskRegion describeActiveOperationTaskRegion($options = [])
 * @method DescribeActiveOperationTaskCount describeActiveOperationTaskCount($options = [])
 * @method DescribeActiveOperationTask describeActiveOperationTask($options = [])
 * @method DescribeSlowLogRecords describeSlowLogRecords($options = [])
 * @method DescribeRunningLogRecords describeRunningLogRecords($options = [])
 * @method DescribeErrorLogRecords describeErrorLogRecords($options = [])
 * @method ModifyDBInstanceSSL modifyDBInstanceSSL($options = [])
 * @method DescribeDBInstanceSSL describeDBInstanceSSL($options = [])
 * @method ModifyDBInstanceConnectionString modifyDBInstanceConnectionString($options = [])
 * @method ModifyAuditLogFilter modifyAuditLogFilter($options = [])
 * @method DescribeAuditLogFilter describeAuditLogFilter($options = [])
 * @method EvaluateFailOverSwitch evaluateFailOverSwitch($options = [])
 * @method UpgradeDBInstanceKernelVersion upgradeDBInstanceKernelVersion($options = [])
 * @method DescribeKernelReleaseNotes describeKernelReleaseNotes($options = [])
 * @method ModifyAuditPolicy modifyAuditPolicy($options = [])
 * @method DescribeAuditPolicy describeAuditPolicy($options = [])
 * @method DestroyInstance destroyInstance($options = [])
 * @method DescribeAvailableTimeRange describeAvailableTimeRange($options = [])
 * @method TransformToPrePaid transformToPrePaid($options = [])
 * @method DescribeRdsVSwitchs describeRdsVSwitchs($options = [])
 * @method DescribeRdsVpcs describeRdsVpcs($options = [])
 * @method DescribeIndexRecommendation describeIndexRecommendation($options = [])
 * @method CreateRecommendationTask createRecommendationTask($options = [])
 * @method DescribeAvaliableTimeRange describeAvaliableTimeRange($options = [])
 * @method DescribeStrategy describeStrategy($options = [])
 * @method DescribeReplicaConflictInfo describeReplicaConflictInfo($options = [])
 * @method CreateStaticVerification createStaticVerification($options = [])
 * @method ModifyReplicaRecoveryMode modifyReplicaRecoveryMode($options = [])
 * @method DescribeStaticVerificationList describeStaticVerificationList($options = [])
 * @method DescribeVerificationList describeVerificationList($options = [])
 * @method ModifyReplicaVerificationMode modifyReplicaVerificationMode($options = [])
 * @method ModifyDBInstanceMonitor modifyDBInstanceMonitor($options = [])
 * @method DescribeDBInstanceMonitor describeDBInstanceMonitor($options = [])
 * @method SwitchDBInstanceHA switchDBInstanceHA($options = [])
 * @method SwithcDBInstanceHA swithcDBInstanceHA($options = [])
 * @method ModifyReplicaRelation modifyReplicaRelation($options = [])
 * @method ModifyReplicaMode modifyReplicaMode($options = [])
 * @method ModifyGuardDomainMode modifyGuardDomainMode($options = [])
 * @method ModifyParameters modifyParameters($options = [])
 * @method DescribeParameterTemplates describeParameterTemplates($options = [])
 * @method DescribeParameters describeParameters($options = [])
 * @method DescribeParameterModificationHistory describeParameterModificationHistory($options = [])
 * @method UpgradeDBInstanceEngineVersion upgradeDBInstanceEngineVersion($options = [])
 * @method ReleasePublicNetworkAddress releasePublicNetworkAddress($options = [])
 * @method AllocatePublicNetworkAddress allocatePublicNetworkAddress($options = [])
 * @method StartArchiveSQLLog startArchiveSQLLog($options = [])
 * @method ModifyDBInstanceMaintainTime modifyDBInstanceMaintainTime($options = [])
 * @method DescribeShardingNetworkAddress describeShardingNetworkAddress($options = [])
 * @method DescribeAuditRecords describeAuditRecords($options = [])
 * @method DescribeAuditFiles describeAuditFiles($options = [])
 * @method ModifyDBInstanceNetExpireTime modifyDBInstanceNetExpireTime($options = [])
 * @method DescribeQualifications describeQualifications($options = [])
 * @method CreateDBInstanceReplica createDBInstanceReplica($options = [])
 * @method DescribeReplicas describeReplicas($options = [])
 * @method ReleaseReplica releaseReplica($options = [])
 * @method ModifyReplicaDescription modifyReplicaDescription($options = [])
 * @method DescribeReplicaUsage describeReplicaUsage($options = [])
 * @method DescribeReplicaPerformance describeReplicaPerformance($options = [])
 * @method DescribeReplicaInitializeProgress describeReplicaInitializeProgress($options = [])
 * @method ModifyNodeSpec modifyNodeSpec($options = [])
 * @method DescribeShardingAvailability describeShardingAvailability($options = [])
 * @method DeleteNode deleteNode($options = [])
 * @method CreateShardingDBInstances createShardingDBInstances($options = [])
 * @method CreateShardingDBInstance createShardingDBInstance($options = [])
 * @method CreateNode createNode($options = [])
 * @method Sample sample($options = [])
 * @method ModifyDBInstanceNetworkType modifyDBInstanceNetworkType($options = [])
 * @method RenewDBInstance renewDBInstance($options = [])
 * @method CreateBackup createBackup($options = [])
 * @method CreateAccount createAccount($options = [])
 * @method DescribeDBInstancePerformance describeDBInstancePerformance($options = [])
 * @method DescribeDBInstanceAttribute describeDBInstanceAttribute($options = [])
 * @method DescribeCommodity describeCommodity($options = [])
 * @method DescribeBackups describeBackups($options = [])
 * @method DescribeBackupPolicy describeBackupPolicy($options = [])
 * @method DescribeAccounts describeAccounts($options = [])
 * @method DeleteDBInstance deleteDBInstance($options = [])
 * @method CreateDBInstances createDBInstances($options = [])
 * @method CreateDBInstance createDBInstance($options = [])
 * @method DescribeUserInfo describeUserInfo($options = [])
 * @method DescribeSecurityIps describeSecurityIps($options = [])
 * @method DescribeReplicaSetRole describeReplicaSetRole($options = [])
 * @method DescribeRegions describeRegions($options = [])
 * @method DescribePrice describePrice($options = [])
 * @method DescribeDBInstances describeDBInstances($options = [])
 * @method RestoreDBInstance restoreDBInstance($options = [])
 * @method RestartDBInstance restartDBInstance($options = [])
 * @method ResetAccountPassword resetAccountPassword($options = [])
 * @method ModifySecurityIps modifySecurityIps($options = [])
 * @method ModifyDBInstanceSpec modifyDBInstanceSpec($options = [])
 * @method ModifyDBInstanceDescription modifyDBInstanceDescription($options = [])
 * @method ModifyBackupPolicy modifyBackupPolicy($options = [])
 * @method ModifyAccountDescription modifyAccountDescription($options = [])
 * @method LockDBInstance lockDBInstance($options = [])
 * @method UnlockDBInstance unlockDBInstance($options = [])
 */
class V20151201
{
    use ApiResolverTrait;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 */
class DescribeAvailableEngineVersion extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getBusinessInfo
 * @method self withBusinessInfo(string $businessInfo)
 * @method string getCouponNo
 * @method self withCouponNo(string $couponNo)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 */
class DescribeRenewalPrice extends Roa
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
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getEffectiveTime
 * @method self withEffectiveTime(string $effectiveTime)
 * @method string getVSwitchId
 * @method self withVSwitchId(string $vSwitchId)
 */
class MigrateToOtherZone extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getDuration
 * @method self withDuration(string $duration)
 * @method string getAutoRenew
 * @method self withAutoRenew(string $autoRenew)
 */
class ModifyInstanceAutoRenewalAttribute extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getDBInstanceType
 * @method self withDBInstanceType(string $dBInstanceType)
 * @method string getPageSize
 * @method self withPageSize(string $pageSize)
 * @method string getPageNumber
 * @method self withPageNumber(string $pageNumber)
 */
class DescribeInstanceAutoRenewalAttribute extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getReplicationGroupId
 * @method self withReplicationGroupId(string $replicationGroupId)
 * @method string getSourceInstanceId
 * @method self withSourceInstanceId(string $sourceInstanceId)
 * @method string getDestinationInstanceIds
 * @method self withDestinationInstanceIds(string $destinationInstanceIds)
 */
class DescribeReplicationGroup extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getIds
 * @method self withIds(string $ids)
 * @method string getSwitchTime
 * @method self withSwitchTime(string $switchTime)
 */
class ModifyActiveOperationTask extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method Integer getIsHistory
 * @method self withIsHistory(Integer $isHistory)
 */
class DescribeActiveOperationTaskType extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getTaskType
 * @method self withTaskType(string $taskType)
 * @method Integer getIsHistory
 * @method self withIsHistory(Integer $isHistory)
 */
class DescribeActiveOperationTaskRegion extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeActiveOperationTaskCount extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getRegion
 * @method self withRegion(string $region)
 * @method string getTaskType
 * @method self withTaskType(string $taskType)
 * @method Integer getIsHistory
 * @method self withIsHistory(Integer $isHistory)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 */
class DescribeActiveOperationTask extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getNodeId
 * @method self withNodeId(string $nodeId)
 * @method int getSQLId
 * @method self withSQLId(int $sQLId)
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
 */
class DescribeSlowLogRecords extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getNodeId
 * @method self withNodeId(string $nodeId)
 * @method int getSQLId
 * @method self withSQLId(int $sQLId)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getDBName
 * @method self withDBName(string $dBName)
 * @method string getRoleType
 * @method self withRoleType(string $roleType)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 */
class DescribeRunningLogRecords extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getNodeId
 * @method self withNodeId(string $nodeId)
 * @method int getSQLId
 * @method self withSQLId(int $sQLId)
 * @method string getRoleType
 * @method self withRoleType(string $roleType)
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
 */
class DescribeErrorLogRecords extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getSSLAction
 * @method self withSSLAction(string $sSLAction)
 */
class ModifyDBInstanceSSL extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 */
class DescribeDBInstanceSSL extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getNodeId
 * @method self withNodeId(string $nodeId)
 * @method string getCurrentConnectionString
 * @method self withCurrentConnectionString(string $currentConnectionString)
 * @method string getNewConnectionString
 * @method self withNewConnectionString(string $newConnectionString)
 */
class ModifyDBInstanceConnectionString extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getFilter
 * @method self withFilter(string $filter)
 * @method string getRoleType
 * @method self withRoleType(string $roleType)
 */
class ModifyAuditLogFilter extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getRoleType
 * @method self withRoleType(string $roleType)
 */
class DescribeAuditLogFilter extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getReplicaId
 * @method self withReplicaId(string $replicaId)
 */
class EvaluateFailOverSwitch extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 */
class UpgradeDBInstanceKernelVersion extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getKernelVersion
 * @method self withKernelVersion(string $kernelVersion)
 */
class DescribeKernelReleaseNotes extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getAuditStatus
 * @method self withAuditStatus(string $auditStatus)
 * @method Integer getStoragePeriod
 * @method self withStoragePeriod(Integer $storagePeriod)
 */
class ModifyAuditPolicy extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 */
class DescribeAuditPolicy extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 */
class DestroyInstance extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getNodeId
 * @method self withNodeId(string $nodeId)
 */
class DescribeAvailableTimeRange extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method int getPeriod
 * @method self withPeriod(int $period)
 * @method bool getAutoPay
 * @method self withAutoPay(bool $autoPay)
 * @method string getFromApp
 * @method self withFromApp(string $fromApp)
 * @method string getBusinessInfo
 * @method self withBusinessInfo(string $businessInfo)
 * @method string getAutoRenew
 * @method self withAutoRenew(string $autoRenew)
 * @method string getCouponNo
 * @method self withCouponNo(string $couponNo)
 */
class TransformToPrePaid extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 */
class DescribeRdsVSwitchs extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 */
class DescribeRdsVpcs extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getTaskId
 * @method self withTaskId(string $taskId)
 * @method string getNodeId
 * @method self withNodeId(string $nodeId)
 * @method string getDatabase
 * @method self withDatabase(string $database)
 * @method string getCollection
 * @method self withCollection(string $collection)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getOperationType
 * @method self withOperationType(string $operationType)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 */
class DescribeIndexRecommendation extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getNodeId
 * @method self withNodeId(string $nodeId)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class CreateRecommendationTask extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getNodeId
 * @method self withNodeId(string $nodeId)
 */
class DescribeAvaliableTimeRange extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getReplicaId
 * @method self withReplicaId(string $replicaId)
 */
class DescribeStrategy extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getReplicaId
 * @method self withReplicaId(string $replicaId)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeReplicaConflictInfo extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getReplicaId
 * @method self withReplicaId(string $replicaId)
 * @method string getSourceInstanceId
 * @method self withSourceInstanceId(string $sourceInstanceId)
 * @method string getDestinationInstanceId
 * @method self withDestinationInstanceId(string $destinationInstanceId)
 */
class CreateStaticVerification extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getReplicaId
 * @method self withReplicaId(string $replicaId)
 * @method string getRecoveryMode
 * @method self withRecoveryMode(string $recoveryMode)
 */
class ModifyReplicaRecoveryMode extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getReplicaId
 * @method self withReplicaId(string $replicaId)
 * @method string getSourceInstanceId
 * @method self withSourceInstanceId(string $sourceInstanceId)
 * @method string getDestinationInstanceId
 * @method self withDestinationInstanceId(string $destinationInstanceId)
 */
class DescribeStaticVerificationList extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getReplicaId
 * @method self withReplicaId(string $replicaId)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeVerificationList extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getReplicaId
 * @method self withReplicaId(string $replicaId)
 * @method string getVerificationMode
 * @method self withVerificationMode(string $verificationMode)
 */
class ModifyReplicaVerificationMode extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getGranularity
 * @method self withGranularity(string $granularity)
 */
class ModifyDBInstanceMonitor extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 */
class DescribeDBInstanceMonitor extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getNodeId
 * @method self withNodeId(string $nodeId)
 * @method Integer getSwitchType
 * @method self withSwitchType(Integer $switchType)
 * @method Integer getTargetInstanceId
 * @method self withTargetInstanceId(Integer $targetInstanceId)
 * @method Integer getSourceInstanceId
 * @method self withSourceInstanceId(Integer $sourceInstanceId)
 */
class SwitchDBInstanceHA extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getNodeId
 * @method self withNodeId(string $nodeId)
 * @method Integer getSwitchType
 * @method self withSwitchType(Integer $switchType)
 * @method Integer getTargetInstanceId
 * @method self withTargetInstanceId(Integer $targetInstanceId)
 * @method Integer getSourceInstanceId
 * @method self withSourceInstanceId(Integer $sourceInstanceId)
 */
class SwithcDBInstanceHA extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getReplicaId
 * @method self withReplicaId(string $replicaId)
 */
class ModifyReplicaRelation extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getReplicaId
 * @method self withReplicaId(string $replicaId)
 * @method string getReplicaMode
 * @method self withReplicaMode(string $replicaMode)
 * @method string getPrimaryInstanceId
 * @method self withPrimaryInstanceId(string $primaryInstanceId)
 * @method string getDomainMode
 * @method self withDomainMode(string $domainMode)
 */
class ModifyReplicaMode extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getReplicaId
 * @method self withReplicaId(string $replicaId)
 * @method string getDomainMode
 * @method self withDomainMode(string $domainMode)
 */
class ModifyGuardDomainMode extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getNodeId
 * @method self withNodeId(string $nodeId)
 * @method string getParameters
 * @method self withParameters(string $parameters)
 */
class ModifyParameters extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getEngine
 * @method self withEngine(string $engine)
 * @method string getEngineVersion
 * @method self withEngineVersion(string $engineVersion)
 */
class DescribeParameterTemplates extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getNodeId
 * @method self withNodeId(string $nodeId)
 */
class DescribeParameters extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getNodeId
 * @method self withNodeId(string $nodeId)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeParameterModificationHistory extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getEngineVersion
 * @method self withEngineVersion(string $engineVersion)
 */
class UpgradeDBInstanceEngineVersion extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getNodeId
 * @method self withNodeId(string $nodeId)
 */
class ReleasePublicNetworkAddress extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getNodeId
 * @method self withNodeId(string $nodeId)
 */
class AllocatePublicNetworkAddress extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getQueryKeywords
 * @method self withQueryKeywords(string $queryKeywords)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getDatabase
 * @method self withDatabase(string $database)
 * @method string getUser
 * @method self withUser(string $user)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class StartArchiveSQLLog extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getMaintainStartTime
 * @method self withMaintainStartTime(string $maintainStartTime)
 * @method string getMaintainEndTime
 * @method self withMaintainEndTime(string $maintainEndTime)
 */
class ModifyDBInstanceMaintainTime extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getNodeId
 * @method self withNodeId(string $nodeId)
 */
class DescribeShardingNetworkAddress extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getNodeId
 * @method self withNodeId(string $nodeId)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getDatabase
 * @method self withDatabase(string $database)
 * @method string getUser
 * @method self withUser(string $user)
 * @method string getForm
 * @method self withForm(string $form)
 * @method string getQueryKeywords
 * @method self withQueryKeywords(string $queryKeywords)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 */
class DescribeAuditRecords extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getNodeId
 * @method self withNodeId(string $nodeId)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 */
class DescribeAuditFiles extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getConnectionString
 * @method self withConnectionString(string $connectionString)
 * @method Integer getClassicExpendExpiredDays
 * @method self withClassicExpendExpiredDays(Integer $classicExpendExpiredDays)
 */
class ModifyDBInstanceNetExpireTime extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getOperation
 * @method self withOperation(string $operation)
 */
class DescribeQualifications extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 * @method string getSourceDBInstanceId
 * @method self withSourceDBInstanceId(string $sourceDBInstanceId)
 * @method string getDBInstanceDescription
 * @method self withDBInstanceDescription(string $dBInstanceDescription)
 * @method string getReplicaDescription
 * @method self withReplicaDescription(string $replicaDescription)
 * @method string getSecurityIPList
 * @method self withSecurityIPList(string $securityIPList)
 * @method string getAccountPassword
 * @method self withAccountPassword(string $accountPassword)
 * @method string getChargeType
 * @method self withChargeType(string $chargeType)
 * @method Integer getPeriod
 * @method self withPeriod(Integer $period)
 * @method string getNetworkType
 * @method self withNetworkType(string $networkType)
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 * @method string getVSwitchId
 * @method self withVSwitchId(string $vSwitchId)
 * @method bool getAutoPay
 * @method self withAutoPay(bool $autoPay)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 */
class CreateDBInstanceReplica extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getReplicaId
 * @method self withReplicaId(string $replicaId)
 * @method bool getAttachDbInstanceData
 * @method self withAttachDbInstanceData(bool $attachDbInstanceData)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 */
class DescribeReplicas extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getReplicaId
 * @method self withReplicaId(string $replicaId)
 */
class ReleaseReplica extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getReplicaId
 * @method self withReplicaId(string $replicaId)
 * @method string getReplicaDescription
 * @method self withReplicaDescription(string $replicaDescription)
 */
class ModifyReplicaDescription extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getReplicaId
 * @method self withReplicaId(string $replicaId)
 * @method string getSourceDBInstanceId
 * @method self withSourceDBInstanceId(string $sourceDBInstanceId)
 * @method string getDestinationDBInstanceId
 * @method self withDestinationDBInstanceId(string $destinationDBInstanceId)
 */
class DescribeReplicaUsage extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getReplicaId
 * @method self withReplicaId(string $replicaId)
 * @method string getSourceDBInstanceId
 * @method self withSourceDBInstanceId(string $sourceDBInstanceId)
 * @method string getDestinationDBInstanceId
 * @method self withDestinationDBInstanceId(string $destinationDBInstanceId)
 * @method string getKey
 * @method self withKey(string $key)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeReplicaPerformance extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getReplicaId
 * @method self withReplicaId(string $replicaId)
 */
class DescribeReplicaInitializeProgress extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getNodeId
 * @method self withNodeId(string $nodeId)
 * @method string getNodeClass
 * @method self withNodeClass(string $nodeClass)
 * @method Integer getNodeStorage
 * @method self withNodeStorage(Integer $nodeStorage)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getFromApp
 * @method self withFromApp(string $fromApp)
 * @method bool getAutoPay
 * @method self withAutoPay(bool $autoPay)
 * @method string getEffectiveTime
 * @method self withEffectiveTime(string $effectiveTime)
 */
class ModifyNodeSpec extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 * @method string getEngine
 * @method self withEngine(string $engine)
 * @method string getEngineVersion
 * @method self withEngineVersion(string $engineVersion)
 * @method string getEvaluateType
 * @method self withEvaluateType(string $evaluateType)
 * @method array getMongos
 * @method self withMongos(array $mongos)
 * @method array getReplicaSet
 * @method self withReplicaSet(array $replicaSet)
 * @method array getConfigServer
 * @method self withConfigServer(array $configServer)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getNodeId
 * @method self withNodeId(string $nodeId)
 * @method string getNodeClass
 * @method self withNodeClass(string $nodeClass)
 * @method Integer getNodeStorage
 * @method self withNodeStorage(Integer $nodeStorage)
 */
class DescribeShardingAvailability extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getNodeId
 * @method self withNodeId(string $nodeId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 */
class DeleteNode extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstances
 * @method self withDBInstances(string $dBInstances)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method bool getAutoPay
 * @method self withAutoPay(bool $autoPay)
 * @method string getAgentId
 * @method self withAgentId(string $agentId)
 * @method string getChargeType
 * @method self withChargeType(string $chargeType)
 * @method bool getRebuildInstance
 * @method self withRebuildInstance(bool $rebuildInstance)
 * @method string getAutoRenew
 * @method self withAutoRenew(string $autoRenew)
 * @method string getBusinessInfo
 * @method self withBusinessInfo(string $businessInfo)
 */
class CreateShardingDBInstances extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 * @method string getEngine
 * @method self withEngine(string $engine)
 * @method string getEngineVersion
 * @method self withEngineVersion(string $engineVersion)
 * @method array getMongos
 * @method self withMongos(array $mongos)
 * @method array getReplicaSet
 * @method self withReplicaSet(array $replicaSet)
 * @method array getConfigServer
 * @method self withConfigServer(array $configServer)
 * @method string getDBInstanceDescription
 * @method self withDBInstanceDescription(string $dBInstanceDescription)
 * @method string getSecurityIPList
 * @method self withSecurityIPList(string $securityIPList)
 * @method string getAccountPassword
 * @method self withAccountPassword(string $accountPassword)
 * @method string getChargeType
 * @method self withChargeType(string $chargeType)
 * @method Integer getPeriod
 * @method self withPeriod(Integer $period)
 * @method string getNetworkType
 * @method self withNetworkType(string $networkType)
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 * @method string getVSwitchId
 * @method self withVSwitchId(string $vSwitchId)
 * @method string getSrcDBInstanceId
 * @method self withSrcDBInstanceId(string $srcDBInstanceId)
 * @method string getRestoreTime
 * @method self withRestoreTime(string $restoreTime)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getStorageEngine
 * @method self withStorageEngine(string $storageEngine)
 * @method string getAutoRenew
 * @method self withAutoRenew(string $autoRenew)
 */
class CreateShardingDBInstance extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getNodeClass
 * @method self withNodeClass(string $nodeClass)
 * @method Integer getNodeStorage
 * @method self withNodeStorage(Integer $nodeStorage)
 * @method string getNodeType
 * @method self withNodeType(string $nodeType)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getFromApp
 * @method self withFromApp(string $fromApp)
 * @method bool getAutoPay
 * @method self withAutoPay(bool $autoPay)
 */
class CreateNode extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 */
class Sample extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getNetworkType
 * @method self withNetworkType(string $networkType)
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 * @method string getVSwitchId
 * @method self withVSwitchId(string $vSwitchId)
 * @method string getRetainClassic
 * @method self withRetainClassic(string $retainClassic)
 * @method Integer getClassicExpiredDays
 * @method self withClassicExpiredDays(Integer $classicExpiredDays)
 */
class ModifyDBInstanceNetworkType extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method Integer getPeriod
 * @method self withPeriod(Integer $period)
 * @method bool getAutoPay
 * @method self withAutoPay(bool $autoPay)
 * @method string getBusinessInfo
 * @method self withBusinessInfo(string $businessInfo)
 * @method string getCouponNo
 * @method self withCouponNo(string $couponNo)
 */
class RenewDBInstance extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getBackupMethod
 * @method self withBackupMethod(string $backupMethod)
 */
class CreateBackup extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getAccountName
 * @method self withAccountName(string $accountName)
 * @method string getAccountPassword
 * @method self withAccountPassword(string $accountPassword)
 * @method string getAccountDescription
 * @method self withAccountDescription(string $accountDescription)
 */
class CreateAccount extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getNodeId
 * @method self withNodeId(string $nodeId)
 * @method string getKey
 * @method self withKey(string $key)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getRoleId
 * @method self withRoleId(string $roleId)
 * @method string getReplicaSetRole
 * @method self withReplicaSetRole(string $replicaSetRole)
 */
class DescribeDBInstancePerformance extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getEngine
 * @method self withEngine(string $engine)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 */
class DescribeDBInstanceAttribute extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getCommodityCode
 * @method self withCommodityCode(string $commodityCode)
 * @method string getProductCode
 * @method self withProductCode(string $productCode)
 * @method string getChargeType
 * @method self withChargeType(string $chargeType)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getNodeId
 * @method self withNodeId(string $nodeId)
 * @method string getOrderType
 * @method self withOrderType(string $orderType)
 */
class DescribeCommodity extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getNodeId
 * @method self withNodeId(string $nodeId)
 * @method string getBackupId
 * @method self withBackupId(string $backupId)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeBackups extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 */
class DescribeBackupPolicy extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getAccountName
 * @method self withAccountName(string $accountName)
 */
class DescribeAccounts extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 */
class DeleteDBInstance extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getBusinessInfo
 * @method self withBusinessInfo(string $businessInfo)
 * @method string getCouponNo
 * @method self withCouponNo(string $couponNo)
 * @method string getDBInstances
 * @method self withDBInstances(string $dBInstances)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method bool getAutoPay
 * @method self withAutoPay(bool $autoPay)
 * @method string getAgentId
 * @method self withAgentId(string $agentId)
 * @method bool getRebuildInstance
 * @method self withRebuildInstance(bool $rebuildInstance)
 * @method string getAutoRenew
 * @method self withAutoRenew(string $autoRenew)
 */
class CreateDBInstances extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 * @method string getEngine
 * @method self withEngine(string $engine)
 * @method string getEngineVersion
 * @method self withEngineVersion(string $engineVersion)
 * @method string getDBInstanceClass
 * @method self withDBInstanceClass(string $dBInstanceClass)
 * @method Integer getDBInstanceStorage
 * @method self withDBInstanceStorage(Integer $dBInstanceStorage)
 * @method string getDBInstanceDescription
 * @method self withDBInstanceDescription(string $dBInstanceDescription)
 * @method string getSecurityIPList
 * @method self withSecurityIPList(string $securityIPList)
 * @method string getAccountPassword
 * @method self withAccountPassword(string $accountPassword)
 * @method string getChargeType
 * @method self withChargeType(string $chargeType)
 * @method Integer getPeriod
 * @method self withPeriod(Integer $period)
 * @method string getNetworkType
 * @method self withNetworkType(string $networkType)
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 * @method string getVSwitchId
 * @method self withVSwitchId(string $vSwitchId)
 * @method string getSrcDBInstanceId
 * @method self withSrcDBInstanceId(string $srcDBInstanceId)
 * @method string getBackupId
 * @method self withBackupId(string $backupId)
 * @method string getRestoreTime
 * @method self withRestoreTime(string $restoreTime)
 * @method string getBusinessInfo
 * @method self withBusinessInfo(string $businessInfo)
 * @method string getAutoRenew
 * @method self withAutoRenew(string $autoRenew)
 * @method string getCouponNo
 * @method self withCouponNo(string $couponNo)
 * @method string getStorageEngine
 * @method self withStorageEngine(string $storageEngine)
 * @method string getReplicationFactor
 * @method self withReplicationFactor(string $replicationFactor)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 */
class CreateDBInstance extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeUserInfo extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 */
class DescribeSecurityIps extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 */
class DescribeReplicaSetRole extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 */
class DescribeRegions extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getOrderType
 * @method self withOrderType(string $orderType)
 * @method string getDBInstances
 * @method self withDBInstances(string $dBInstances)
 * @method string getCommodityCode
 * @method self withCommodityCode(string $commodityCode)
 * @method string getProductCode
 * @method self withProductCode(string $productCode)
 * @method string getBusinessInfo
 * @method self withBusinessInfo(string $businessInfo)
 * @method string getCouponNo
 * @method self withCouponNo(string $couponNo)
 * @method string getOrderParamOut
 * @method self withOrderParamOut(string $orderParamOut)
 */
class DescribePrice extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getReplicationFactor
 * @method self withReplicationFactor(string $replicationFactor)
 * @method string getDBInstanceDescription
 * @method self withDBInstanceDescription(string $dBInstanceDescription)
 * @method string getExpireTime
 * @method self withExpireTime(string $expireTime)
 * @method string getDBInstanceStatus
 * @method self withDBInstanceStatus(string $dBInstanceStatus)
 * @method string getDBInstanceType
 * @method self withDBInstanceType(string $dBInstanceType)
 * @method string getDBInstanceClass
 * @method self withDBInstanceClass(string $dBInstanceClass)
 * @method string getEngine
 * @method self withEngine(string $engine)
 * @method string getEngineVersion
 * @method self withEngineVersion(string $engineVersion)
 * @method string getNetworkType
 * @method self withNetworkType(string $networkType)
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 * @method string getVSwitchId
 * @method self withVSwitchId(string $vSwitchId)
 * @method string getChargeType
 * @method self withChargeType(string $chargeType)
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 * @method string getExpired
 * @method self withExpired(string $expired)
 */
class DescribeDBInstances extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method Integer getBackupId
 * @method self withBackupId(Integer $backupId)
 */
class RestoreDBInstance extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getNodeId
 * @method self withNodeId(string $nodeId)
 */
class RestartDBInstance extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getAccountName
 * @method self withAccountName(string $accountName)
 * @method string getAccountPassword
 * @method self withAccountPassword(string $accountPassword)
 */
class ResetAccountPassword extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getSecurityIps
 * @method self withSecurityIps(string $securityIps)
 * @method string getModifyMode
 * @method self withModifyMode(string $modifyMode)
 * @method string getSecurityIpGroupName
 * @method self withSecurityIpGroupName(string $securityIpGroupName)
 * @method string getSecurityIpGroupAttribute
 * @method self withSecurityIpGroupAttribute(string $securityIpGroupAttribute)
 */
class ModifySecurityIps extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getDBInstanceClass
 * @method self withDBInstanceClass(string $dBInstanceClass)
 * @method string getDBInstanceStorage
 * @method self withDBInstanceStorage(string $dBInstanceStorage)
 * @method string getOrderType
 * @method self withOrderType(string $orderType)
 * @method bool getAutoPay
 * @method self withAutoPay(bool $autoPay)
 * @method string getFromApp
 * @method self withFromApp(string $fromApp)
 * @method string getBusinessInfo
 * @method self withBusinessInfo(string $businessInfo)
 * @method string getReplicationFactor
 * @method self withReplicationFactor(string $replicationFactor)
 * @method string getCouponNo
 * @method self withCouponNo(string $couponNo)
 * @method string getEffectiveTime
 * @method self withEffectiveTime(string $effectiveTime)
 */
class ModifyDBInstanceSpec extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getNodeId
 * @method self withNodeId(string $nodeId)
 * @method string getDBInstanceDescription
 * @method self withDBInstanceDescription(string $dBInstanceDescription)
 */
class ModifyDBInstanceDescription extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getPreferredBackupTime
 * @method self withPreferredBackupTime(string $preferredBackupTime)
 * @method string getPreferredBackupPeriod
 * @method self withPreferredBackupPeriod(string $preferredBackupPeriod)
 */
class ModifyBackupPolicy extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getAccountName
 * @method self withAccountName(string $accountName)
 * @method string getAccountDescription
 * @method self withAccountDescription(string $accountDescription)
 */
class ModifyAccountDescription extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getLockReason
 * @method self withLockReason(string $lockReason)
 */
class LockDBInstance extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 */
class UnlockDBInstance extends Roa
{
    use R;
}
