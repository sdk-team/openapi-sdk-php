<?php

namespace AlibabaCloud\Rds\V20140815;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method RestoreTable restoreTable($options = [])
 * @method DescribeRdsVSwitchs describeRdsVSwitchs($options = [])
 * @method MigrateToOtherRegion migrateToOtherRegion($options = [])
 * @method DescribeRdsVpcs describeRdsVpcs($options = [])
 * @method DescribeMetaList describeMetaList($options = [])
 * @method DescribeProxyFunctionSupport describeProxyFunctionSupport($options = [])
 * @method DescribeAvailableInstanceClass describeAvailableInstanceClass($options = [])
 * @method ModifyDBInstanceChargeTypeForJuShiTa modifyDBInstanceChargeTypeForJuShiTa($options = [])
 * @method RequestServiceOfCloudDBExpert requestServiceOfCloudDBExpert($options = [])
 * @method DescribeCloudDbExpertService describeCloudDbExpertService($options = [])
 * @method CreateParameterGroup createParameterGroup($options = [])
 * @method DeleteCloudInstanceIp deleteCloudInstanceIp($options = [])
 * @method DescribeParameterGroups describeParameterGroups($options = [])
 * @method DeleteOpenSearchDBInstance deleteOpenSearchDBInstance($options = [])
 * @method CloneParameterGroup cloneParameterGroup($options = [])
 * @method AllocateCloudInstanceIp allocateCloudInstanceIp($options = [])
 * @method DescribeOpenSearchDBInstance describeOpenSearchDBInstance($options = [])
 * @method ModifyReplicaFilterMode modifyReplicaFilterMode($options = [])
 * @method DescribeServiceOfCloudDBA describeServiceOfCloudDBA($options = [])
 * @method DescribeTemplatesList describeTemplatesList($options = [])
 * @method ModifyReplicaDynamicMode modifyReplicaDynamicMode($options = [])
 * @method DescribeParameterGroup describeParameterGroup($options = [])
 * @method ModifyParameterGroup modifyParameterGroup($options = [])
 * @method ModifyDynamicMode modifyDynamicMode($options = [])
 * @method ModifyOpenSearchDBInstance modifyOpenSearchDBInstance($options = [])
 * @method ModifyDBInstanceDelayReplicationTime modifyDBInstanceDelayReplicationTime($options = [])
 * @method DeleteParameterGroup deleteParameterGroup($options = [])
 * @method ModifyReplicaRecoverMode modifyReplicaRecoverMode($options = [])
 * @method DescribeInstanceLevelList describeInstanceLevelList($options = [])
 * @method DescribeArchiveSQLLogFromKepler describeArchiveSQLLogFromKepler($options = [])
 * @method DescribeTemplatesConsumeAndScanRows describeTemplatesConsumeAndScanRows($options = [])
 * @method DescribeSyncAccountForInner describeSyncAccountForInner($options = [])
 * @method DescribeTemplatesSqlType describeTemplatesSqlType($options = [])
 * @method ModifyMySQLDBInstanceDelay modifyMySQLDBInstanceDelay($options = [])
 * @method CreateOpenSearchDBInstance createOpenSearchDBInstance($options = [])
 * @method DescribeDynamicVerificationList describeDynamicVerificationList($options = [])
 * @method CreateAdminAccount createAdminAccount($options = [])
 * @method StartSqlLogTrail startSqlLogTrail($options = [])
 * @method DescribeDBInstanceInfo describeDBInstanceInfo($options = [])
 * @method CreateFCTrigger createFCTrigger($options = [])
 * @method DeleteFCTrigger deleteFCTrigger($options = [])
 * @method ModifyFCTrigger modifyFCTrigger($options = [])
 * @method DescribeFCTrigger describeFCTrigger($options = [])
 * @method ModifyActiveOperationTask modifyActiveOperationTask($options = [])
 * @method DescribeActiveOperationTaskType describeActiveOperationTaskType($options = [])
 * @method DescribeActiveOperationTaskRegion describeActiveOperationTaskRegion($options = [])
 * @method DescribeActiveOperationTaskCount describeActiveOperationTaskCount($options = [])
 * @method DescribeActiveOperationTask describeActiveOperationTask($options = [])
 * @method ModifySQLCollectorRetention modifySQLCollectorRetention($options = [])
 * @method DescribeSqlLogDumpStatus describeSqlLogDumpStatus($options = [])
 * @method DescribeSQLCollectorVersion describeSQLCollectorVersion($options = [])
 * @method DescribeSQLCollectorRetention describeSQLCollectorRetention($options = [])
 * @method CheckSqlLogHistoryEnable checkSqlLogHistoryEnable($options = [])
 * @method DescribeSyncAccounts describeSyncAccounts($options = [])
 * @method CheckInstanceExist checkInstanceExist($options = [])
 * @method CheckInstanceExsit checkInstanceExsit($options = [])
 * @method DescribeLogBackupFiles describeLogBackupFiles($options = [])
 * @method StartSqlLogDump startSqlLogDump($options = [])
 * @method StartSqlLogDetailArchive startSqlLogDetailArchive($options = [])
 * @method QueryOssBuckets queryOssBuckets($options = [])
 * @method DescribeTemplateSqlDetail describeTemplateSqlDetail($options = [])
 * @method DescribeSqlTemplatesConsumeAndScanRows describeSqlTemplatesConsumeAndScanRows($options = [])
 * @method DescribeSqlLogTimeDistribution describeSqlLogTimeDistribution($options = [])
 * @method DescribeSqlLogTemplatesTimeDistribution describeSqlLogTemplatesTimeDistribution($options = [])
 * @method DescribeSqlLogTemplatesList describeSqlLogTemplatesList($options = [])
 * @method DescribeSQLLogRecordsList describeSQLLogRecordsList($options = [])
 * @method DescribeSqlLogDetailArchiveStatus describeSqlLogDetailArchiveStatus($options = [])
 * @method DecribeSqlLogDumpStatus decribeSqlLogDumpStatus($options = [])
 * @method DescribeSQLServerUpgradeVersions describeSQLServerUpgradeVersions($options = [])
 * @method EvaluateResource evaluateResource($options = [])
 * @method MigrateSecurityIPMode migrateSecurityIPMode($options = [])
 * @method EvaluateFailover evaluateFailover($options = [])
 * @method Failover failover($options = [])
 * @method SwitchDBInstanceVpc switchDBInstanceVpc($options = [])
 * @method DescribeCollationTimeZones describeCollationTimeZones($options = [])
 * @method DescribeInstanceKeywords describeInstanceKeywords($options = [])
 * @method ModifyCollationTimeZone modifyCollationTimeZone($options = [])
 * @method ModifyDBInstanceDelayedReplicationTime modifyDBInstanceDelayedReplicationTime($options = [])
 * @method SwitchOver switchOver($options = [])
 * @method EvaluateFailOverSwitch evaluateFailOverSwitch($options = [])
 * @method DescribeBackupDatabase describeBackupDatabase($options = [])
 * @method CopyDatabaseBetweenInstances copyDatabaseBetweenInstances($options = [])
 * @method CheckDBInstances checkDBInstances($options = [])
 * @method RecoveryDBInstance recoveryDBInstance($options = [])
 * @method DescribeAvailableResource describeAvailableResource($options = [])
 * @method DestroyDBInstance destroyDBInstance($options = [])
 * @method CreateOrderForRebuild createOrderForRebuild($options = [])
 * @method ModifyReadonlyInstanceDelayReplicationTime modifyReadonlyInstanceDelayReplicationTime($options = [])
 * @method DescribeDBInstanceProxyConfiguration describeDBInstanceProxyConfiguration($options = [])
 * @method DescribeCloudDBAService describeCloudDBAService($options = [])
 * @method CreateOnlineDatabaseTask createOnlineDatabaseTask($options = [])
 * @method DescribeCustinsKernelReleaseNotes describeCustinsKernelReleaseNotes($options = [])
 * @method UpgradeDBInstanceKernelVersion upgradeDBInstanceKernelVersion($options = [])
 * @method ModifyDBInstanceProxyConfiguration modifyDBInstanceProxyConfiguration($options = [])
 * @method DescribeDBInstanceSwitchLog describeDBInstanceSwitchLog($options = [])
 * @method DescribeStrategy describeStrategy($options = [])
 * @method DescribeReplicaConflictInfo describeReplicaConflictInfo($options = [])
 * @method CreateStaticVerification createStaticVerification($options = [])
 * @method ModifyReplicaRecoveryMode modifyReplicaRecoveryMode($options = [])
 * @method DescribeStaticVerificationList describeStaticVerificationList($options = [])
 * @method DescribeVerificationList describeVerificationList($options = [])
 * @method ModifyReplicaVerificationMode modifyReplicaVerificationMode($options = [])
 * @method DescribeSecurityGroupConfiguration describeSecurityGroupConfiguration($options = [])
 * @method ModifySecurityGroupConfiguration modifySecurityGroupConfiguration($options = [])
 * @method DescribeDampPolicyByComment describeDampPolicyByComment($options = [])
 * @method RenewDBInstance renewDBInstance($options = [])
 * @method QueryPriceForBuy queryPriceForBuy($options = [])
 * @method UpgradeDBInstanceNetwork upgradeDBInstanceNetwork($options = [])
 * @method DescribeBackupsForSecurity describeBackupsForSecurity($options = [])
 * @method ModifyDBInstanceOwner modifyDBInstanceOwner($options = [])
 * @method QueryPriceForRefund queryPriceForRefund($options = [])
 * @method DescribeLogicDBInstanceTopology describeLogicDBInstanceTopology($options = [])
 * @method DescribeDBInstanceExtendAttribute describeDBInstanceExtendAttribute($options = [])
 * @method DescribeDBInstanceECSSGRelation describeDBInstanceECSSGRelation($options = [])
 * @method ModifyDBInstanceECSSGRelation modifyDBInstanceECSSGRelation($options = [])
 * @method DescribeOssDownloadsForSQLServer describeOssDownloadsForSQLServer($options = [])
 * @method DescribeMigrateTasksForSQLServer describeMigrateTasksForSQLServer($options = [])
 * @method CreateMigrateTaskForSQLServer createMigrateTaskForSQLServer($options = [])
 * @method CreateMigrateTask createMigrateTask($options = [])
 * @method DescribeOssDownloads describeOssDownloads($options = [])
 * @method DescribeMigrateTasks describeMigrateTasks($options = [])
 * @method CopyDatabase copyDatabase($options = [])
 * @method ModifyReplicaRelation modifyReplicaRelation($options = [])
 * @method ModifyGuardDomainMode modifyGuardDomainMode($options = [])
 * @method ModifyReplicaMode modifyReplicaMode($options = [])
 * @method QueryPriceForTempUpgrade queryPriceForTempUpgrade($options = [])
 * @method CreateOrderForTempUpgrade createOrderForTempUpgrade($options = [])
 * @method ResetAccount resetAccount($options = [])
 * @method LoginDBInstancefromCloudDBA loginDBInstancefromCloudDBA($options = [])
 * @method RequestServiceOfCloudDBA requestServiceOfCloudDBA($options = [])
 * @method DescribeDBInstancesAsCsv describeDBInstancesAsCsv($options = [])
 * @method DescribeDBInstanceUser describeDBInstanceUser($options = [])
 * @method CompensateInstanceForChannel compensateInstanceForChannel($options = [])
 * @method CreateOrderForDegrade createOrderForDegrade($options = [])
 * @method DegradeDBInstanceSpec degradeDBInstanceSpec($options = [])
 * @method CloneDBInstanceForSecurity cloneDBInstanceForSecurity($options = [])
 * @method ModifyDBInstanceNetworkExpireTime modifyDBInstanceNetworkExpireTime($options = [])
 * @method DescribeBackupSetsForSecurity describeBackupSetsForSecurity($options = [])
 * @method UpgradeDBInstanceNetWorkInfo upgradeDBInstanceNetWorkInfo($options = [])
 * @method ModifyDBInstanceNetExpireTime modifyDBInstanceNetExpireTime($options = [])
 * @method AddBuDBInstanceRelation addBuDBInstanceRelation($options = [])
 * @method DescribeRegionsForChannel describeRegionsForChannel($options = [])
 * @method ModifyResourceGroup modifyResourceGroup($options = [])
 * @method ReleaseReplica releaseReplica($options = [])
 * @method ModifyReplicaDescription modifyReplicaDescription($options = [])
 * @method DescribeReplicaUsage describeReplicaUsage($options = [])
 * @method DescribeReplicas describeReplicas($options = [])
 * @method DescribeReplicaPerformance describeReplicaPerformance($options = [])
 * @method DescribeReplicaInitializeProgress describeReplicaInitializeProgress($options = [])
 * @method CreateDBInstanceReplica createDBInstanceReplica($options = [])
 * @method DescribeRenewalPrice describeRenewalPrice($options = [])
 * @method DescribePrice describePrice($options = [])
 * @method RenewInstance renewInstance($options = [])
 * @method DescribeTaskInfo describeTaskInfo($options = [])
 * @method CheckRecoveryConditions checkRecoveryConditions($options = [])
 * @method ModifyInstanceAutoRenewalAttribute modifyInstanceAutoRenewalAttribute($options = [])
 * @method DescribeInstanceAutoRenewalAttribute describeInstanceAutoRenewalAttribute($options = [])
 * @method ModifyInstanceAutoRenewAttribute modifyInstanceAutoRenewAttribute($options = [])
 * @method DescribeInstanceAutoRenewAttribute describeInstanceAutoRenewAttribute($options = [])
 * @method ReleaseReadWriteSplittingConnection releaseReadWriteSplittingConnection($options = [])
 * @method ModifyReadWriteSplittingConnection modifyReadWriteSplittingConnection($options = [])
 * @method CalculateDBInstanceWeight calculateDBInstanceWeight($options = [])
 * @method AllocateReadWriteSplittingConnection allocateReadWriteSplittingConnection($options = [])
 * @method ModifyDBInstancePayType modifyDBInstancePayType($options = [])
 * @method ModifyDampPolicy modifyDampPolicy($options = [])
 * @method DescribeDampPolicyByPolicyName describeDampPolicyByPolicyName($options = [])
 * @method DescribeDampPoliciesByCid describeDampPoliciesByCid($options = [])
 * @method DeleteDampPolicy deleteDampPolicy($options = [])
 * @method CreatePolicyWithSpecifiedPolicy createPolicyWithSpecifiedPolicy($options = [])
 * @method CreateDampPolicy createDampPolicy($options = [])
 * @method CheckResource checkResource($options = [])
 * @method DescribeCharacterSetName describeCharacterSetName($options = [])
 * @method DeleteBackup deleteBackup($options = [])
 * @method ModifySecurityIpsForChannel modifySecurityIpsForChannel($options = [])
 * @method DescribeDBInstanceNetworkDetail describeDBInstanceNetworkDetail($options = [])
 * @method DescribeDBInstanceNetwork describeDBInstanceNetwork($options = [])
 * @method DescribeSQLDiagnosisList describeSQLDiagnosisList($options = [])
 * @method DescribeSQLDiagnosis describeSQLDiagnosis($options = [])
 * @method DescribeResourceDiagnosis describeResourceDiagnosis($options = [])
 * @method DescribeDiagnosticReportList describeDiagnosticReportList($options = [])
 * @method DescribeDatabaseLockDiagnosis describeDatabaseLockDiagnosis($options = [])
 * @method CreateSQLDiagnosis createSQLDiagnosis($options = [])
 * @method CreateDiagnosticReport createDiagnosticReport($options = [])
 * @method QueryPriceMultiForDefer queryPriceMultiForDefer($options = [])
 * @method CreateOrderForClone createOrderForClone($options = [])
 * @method CloneDBInstance cloneDBInstance($options = [])
 * @method DescribeTags describeTags($options = [])
 * @method DescribeDBInstanceByTags describeDBInstanceByTags($options = [])
 * @method RevokeOperatorPermission revokeOperatorPermission($options = [])
 * @method ModifyDBInstanceTDE modifyDBInstanceTDE($options = [])
 * @method StartArchiveSQLLog startArchiveSQLLog($options = [])
 * @method ModifyDBInstanceSSL modifyDBInstanceSSL($options = [])
 * @method GrantOperatorPermission grantOperatorPermission($options = [])
 * @method DescribeOperatorPermission describeOperatorPermission($options = [])
 * @method DescribeDBInstanceTDE describeDBInstanceTDE($options = [])
 * @method DescribeDBInstanceSSL describeDBInstanceSSL($options = [])
 * @method DescribeSQLLogFiles describeSQLLogFiles($options = [])
 * @method SwitchDBInstanceChargeType switchDBInstanceChargeType($options = [])
 * @method ResetAdminAccountPassword resetAdminAccountPassword($options = [])
 * @method ModifyDBInstanceMonitor modifyDBInstanceMonitor($options = [])
 * @method ModifyCommodity modifyCommodity($options = [])
 * @method SwitchDBInstanceHA switchDBInstanceHA($options = [])
 * @method DescribeDBInstanceMonitor describeDBInstanceMonitor($options = [])
 * @method DescribeSQLCollectorPolicy describeSQLCollectorPolicy($options = [])
 * @method ModifySQLCollectorPolicy modifySQLCollectorPolicy($options = [])
 * @method SwitchGuardToMasterInstance switchGuardToMasterInstance($options = [])
 * @method ReceiveDBInstance receiveDBInstance($options = [])
 * @method ModifyDBInstanceHAConfig modifyDBInstanceHAConfig($options = [])
 * @method DescribeDBInstanceHAConfig describeDBInstanceHAConfig($options = [])
 * @method DescribeSQLReports describeSQLReports($options = [])
 * @method QueryPriceMulti queryPriceMulti($options = [])
 * @method QueryPrice queryPrice($options = [])
 * @method DescribeUserInfo describeUserInfo($options = [])
 * @method DescribeRegionAvailability describeRegionAvailability($options = [])
 * @method DescribeCommodity describeCommodity($options = [])
 * @method CreateOrderForModify createOrderForModify($options = [])
 * @method CreateOrderForDefer createOrderForDefer($options = [])
 * @method CreateOrder createOrder($options = [])
 * @method CreateMulOrderForDefer createMulOrderForDefer($options = [])
 * @method CreateMulOrderForBuy createMulOrderForBuy($options = [])
 * @method DescribeDBInstanceIPArrayList describeDBInstanceIPArrayList($options = [])
 * @method DescribeSQLLogReportList describeSQLLogReportList($options = [])
 * @method ResetAccountForPG resetAccountForPG($options = [])
 * @method AllocateInstancePrivateConnection allocateInstancePrivateConnection($options = [])
 * @method UnlockDBInstance unlockDBInstance($options = [])
 * @method LockDBInstance lockDBInstance($options = [])
 * @method CreateDatabaseForInner createDatabaseForInner($options = [])
 * @method CreateAccountForInner createAccountForInner($options = [])
 * @method UpgradeDBInstanceEngineVersion upgradeDBInstanceEngineVersion($options = [])
 * @method StopSyncing stopSyncing($options = [])
 * @method RevokeAccountPrivilege revokeAccountPrivilege($options = [])
 * @method RestoreDBInstance restoreDBInstance($options = [])
 * @method RestartDBInstance restartDBInstance($options = [])
 * @method ResetAccountPassword resetAccountPassword($options = [])
 * @method RemoveTagsFromResource removeTagsFromResource($options = [])
 * @method PurgeDBInstanceLog purgeDBInstanceLog($options = [])
 * @method PreCheckBeforeImportData preCheckBeforeImportData($options = [])
 * @method ModifySecurityIps modifySecurityIps($options = [])
 * @method ModifyPostpaidDBInstanceSpec modifyPostpaidDBInstanceSpec($options = [])
 * @method ModifyParameter modifyParameter($options = [])
 * @method ModifyDBInstanceSpec modifyDBInstanceSpec($options = [])
 * @method ModifyDBInstanceMaintainTime modifyDBInstanceMaintainTime($options = [])
 * @method ModifyDBInstanceDescription modifyDBInstanceDescription($options = [])
 * @method ModifyDBDescription modifyDBDescription($options = [])
 * @method ModifyBackupPolicy modifyBackupPolicy($options = [])
 * @method ModifyAccountDescription modifyAccountDescription($options = [])
 * @method MigrateToOtherZone migrateToOtherZone($options = [])
 * @method ImportDataFromDatabase importDataFromDatabase($options = [])
 * @method ImportDataForSQLServer importDataForSQLServer($options = [])
 * @method ImportDatabaseBetweenInstances importDatabaseBetweenInstances($options = [])
 * @method GrantAccountPrivilege grantAccountPrivilege($options = [])
 * @method ExtractBackupFromOAS extractBackupFromOAS($options = [])
 * @method DescribeVpcZoneNos describeVpcZoneNos($options = [])
 * @method DescribeTasks describeTasks($options = [])
 * @method DescribeSQLLogReports describeSQLLogReports($options = [])
 * @method DescribeSQLLogRecords describeSQLLogRecords($options = [])
 * @method DescribeSQLInjectionInfos describeSQLInjectionInfos($options = [])
 * @method DescribeSlowLogs describeSlowLogs($options = [])
 * @method DescribeSlowLogRecords describeSlowLogRecords($options = [])
 * @method DescribeResourceUsage describeResourceUsage($options = [])
 * @method DescribeRegions describeRegions($options = [])
 * @method DescribeRealtimeDiagnoses describeRealtimeDiagnoses($options = [])
 * @method DescribePreCheckResults describePreCheckResults($options = [])
 * @method DescribeParameterTemplates describeParameterTemplates($options = [])
 * @method DescribeParameters describeParameters($options = [])
 * @method DescribeOptimizeAdviceOnStorage describeOptimizeAdviceOnStorage($options = [])
 * @method DescribeOptimizeAdviceOnMissPK describeOptimizeAdviceOnMissPK($options = [])
 * @method DescribeOptimizeAdviceOnMissIndex describeOptimizeAdviceOnMissIndex($options = [])
 * @method DescribeOptimizeAdviceOnExcessIndex describeOptimizeAdviceOnExcessIndex($options = [])
 * @method DescribeOptimizeAdviceOnBigTable describeOptimizeAdviceOnBigTable($options = [])
 * @method DescribeOptimizeAdviceByDBA describeOptimizeAdviceByDBA($options = [])
 * @method DescribeOperationLogs describeOperationLogs($options = [])
 * @method DescribeModifyParameterLog describeModifyParameterLog($options = [])
 * @method DescribeImportsForSQLServer describeImportsForSQLServer($options = [])
 * @method DescribeFilesForSQLServer describeFilesForSQLServer($options = [])
 * @method DescribeErrorLogs describeErrorLogs($options = [])
 * @method DescribeDBInstancePerformance describeDBInstancePerformance($options = [])
 * @method DescribeDatabases describeDatabases($options = [])
 * @method DescribeBinlogFiles describeBinlogFiles($options = [])
 * @method DescribeBackupTasks describeBackupTasks($options = [])
 * @method DescribeBackups describeBackups($options = [])
 * @method DescribeBackupPolicy describeBackupPolicy($options = [])
 * @method DescribeAccounts describeAccounts($options = [])
 * @method DescibeImportsFromDatabase descibeImportsFromDatabase($options = [])
 * @method DeleteDBInstance deleteDBInstance($options = [])
 * @method DeleteDatabase deleteDatabase($options = [])
 * @method DeleteAccount deleteAccount($options = [])
 * @method CreateUploadPathForSQLServer createUploadPathForSQLServer($options = [])
 * @method CreateTempDBInstance createTempDBInstance($options = [])
 * @method CreatePostpaidDBInstanceForChannel createPostpaidDBInstanceForChannel($options = [])
 * @method CreatePostpaidDBInstance createPostpaidDBInstance($options = [])
 * @method CreateDBInstanceforFirstPay createDBInstanceforFirstPay($options = [])
 * @method CreateDBInstanceForChannel createDBInstanceForChannel($options = [])
 * @method CreateDatabase createDatabase($options = [])
 * @method CreateBackup createBackup($options = [])
 * @method CreateAccount createAccount($options = [])
 * @method CheckDBNameAvailable checkDBNameAvailable($options = [])
 * @method CheckAccountNameAvailable checkAccountNameAvailable($options = [])
 * @method CancelImport cancelImport($options = [])
 * @method BatchRevokeAccountPrivilege batchRevokeAccountPrivilege($options = [])
 * @method BatchGrantAccountPrivilege batchGrantAccountPrivilege($options = [])
 * @method AddTagsToResource addTagsToResource($options = [])
 * @method SwitchDBInstanceNetType switchDBInstanceNetType($options = [])
 * @method ReleaseInstancePublicConnection releaseInstancePublicConnection($options = [])
 * @method ModifyDBInstanceNetworkType modifyDBInstanceNetworkType($options = [])
 * @method ModifyDBInstanceConnectionString modifyDBInstanceConnectionString($options = [])
 * @method ModifyDBInstanceConnectionMode modifyDBInstanceConnectionMode($options = [])
 * @method DescribeDBInstanceNetInfoForChannel describeDBInstanceNetInfoForChannel($options = [])
 * @method DescribeDBInstanceNetInfo describeDBInstanceNetInfo($options = [])
 * @method CreateReadOnlyDBInstance createReadOnlyDBInstance($options = [])
 * @method CreateDBInstance createDBInstance($options = [])
 * @method AllocateInstancePublicConnection allocateInstancePublicConnection($options = [])
 * @method DescribeDBInstancesByPerformance describeDBInstancesByPerformance($options = [])
 * @method DescribeDBInstancesByExpireTime describeDBInstancesByExpireTime($options = [])
 * @method DescribeDBInstances describeDBInstances($options = [])
 * @method DescribeDBInstanceAttribute describeDBInstanceAttribute($options = [])
 * @method DescribeAbnormalDBInstances describeAbnormalDBInstances($options = [])
 * @method StartDBInstanceDiagnose startDBInstanceDiagnose($options = [])
 */
class V20140815
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
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getBackupId
 * @method self withBackupId(string $backupId)
 * @method string getRestoreTime
 * @method self withRestoreTime(string $restoreTime)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getTableMeta
 * @method self withTableMeta(string $tableMeta)
 */
class RestoreTable extends Roa
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
 * @method string getTargetRegionId
 * @method self withTargetRegionId(string $targetRegionId)
 * @method string getTargetZoneId
 * @method self withTargetZoneId(string $targetZoneId)
 * @method string getTargetVpcId
 * @method self withTargetVpcId(string $targetVpcId)
 * @method string getTargetVSwitchId
 * @method self withTargetVSwitchId(string $targetVSwitchId)
 * @method string getSwitchTime
 * @method self withSwitchTime(string $switchTime)
 * @method string getEffectiveTime
 * @method self withEffectiveTime(string $effectiveTime)
 */
class MigrateToOtherRegion extends Roa
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
 * @method string getRestoreType
 * @method self withRestoreType(string $restoreType)
 * @method string getBackupSetID
 * @method self withBackupSetID(string $backupSetID)
 * @method string getRestoreTime
 * @method self withRestoreTime(string $restoreTime)
 * @method string getGetDbName
 * @method self withGetDbName(string $getDbName)
 * @method string getPattern
 * @method self withPattern(string $pattern)
 * @method string getPageSize
 * @method self withPageSize(string $pageSize)
 * @method string getPageIndex
 * @method self withPageIndex(string $pageIndex)
 */
class DescribeMetaList extends Roa
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
class DescribeProxyFunctionSupport extends Roa
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
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 * @method string getInstanceChargeType
 * @method self withInstanceChargeType(string $instanceChargeType)
 * @method string getEngine
 * @method self withEngine(string $engine)
 * @method string getEngineVersion
 * @method self withEngineVersion(string $engineVersion)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getOrderType
 * @method self withOrderType(string $orderType)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeAvailableInstanceClass extends Roa
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
 * @method string getChargeType
 * @method self withChargeType(string $chargeType)
 * @method int getJuShiTaInstanceUid
 * @method self withJuShiTaInstanceUid(int $juShiTaInstanceUid)
 */
class ModifyDBInstanceChargeTypeForJuShiTa extends Roa
{
    use R;
}

/**
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getServiceRequestType
 * @method self withServiceRequestType(string $serviceRequestType)
 * @method string getServiceRequestParam
 * @method self withServiceRequestParam(string $serviceRequestParam)
 */
class RequestServiceOfCloudDBExpert extends Roa
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
 * @method string getServiceRequestType
 * @method self withServiceRequestType(string $serviceRequestType)
 * @method string getServiceRequestParam
 * @method self withServiceRequestParam(string $serviceRequestParam)
 */
class DescribeCloudDbExpertService extends Roa
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
 * @method string getParameterGroupName
 * @method self withParameterGroupName(string $parameterGroupName)
 * @method string getEngine
 * @method self withEngine(string $engine)
 * @method string getEngineVersion
 * @method self withEngineVersion(string $engineVersion)
 * @method string getParameters
 * @method self withParameters(string $parameters)
 * @method string getParameterGroupDesc
 * @method self withParameterGroupDesc(string $parameterGroupDesc)
 */
class CreateParameterGroup extends Roa
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
 */
class DeleteCloudInstanceIp extends Roa
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
 */
class DescribeParameterGroups extends Roa
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
 */
class DeleteOpenSearchDBInstance extends Roa
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
 * @method string getTargetRegionId
 * @method self withTargetRegionId(string $targetRegionId)
 * @method string getParameterGroupId
 * @method self withParameterGroupId(string $parameterGroupId)
 */
class CloneParameterGroup extends Roa
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
 */
class AllocateCloudInstanceIp extends Roa
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
 */
class DescribeOpenSearchDBInstance extends Roa
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
 * @method string getFillterDDL
 * @method self withFillterDDL(string $fillterDDL)
 */
class ModifyReplicaFilterMode extends Roa
{
    use R;
}

/**
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getServiceRequestType
 * @method self withServiceRequestType(string $serviceRequestType)
 * @method string getServiceRequestParam
 * @method self withServiceRequestParam(string $serviceRequestParam)
 */
class DescribeServiceOfCloudDBA extends Roa
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
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method Integer getMaxRecordsPerPage
 * @method self withMaxRecordsPerPage(Integer $maxRecordsPerPage)
 * @method Integer getPageNumbers
 * @method self withPageNumbers(Integer $pageNumbers)
 * @method Integer getMinAvgConsume
 * @method self withMinAvgConsume(Integer $minAvgConsume)
 * @method Integer getMaxAvgConsume
 * @method self withMaxAvgConsume(Integer $maxAvgConsume)
 * @method Integer getMinAvgScanRows
 * @method self withMinAvgScanRows(Integer $minAvgScanRows)
 * @method Integer getMaxAvgScanRows
 * @method self withMaxAvgScanRows(Integer $maxAvgScanRows)
 * @method string getPagingId
 * @method self withPagingId(string $pagingId)
 * @method string getSortKey
 * @method self withSortKey(string $sortKey)
 * @method string getSortMethod
 * @method self withSortMethod(string $sortMethod)
 * @method string getSqType
 * @method self withSqType(string $sqType)
 */
class DescribeTemplatesList extends Roa
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
 * @method string getDynamicMode
 * @method self withDynamicMode(string $dynamicMode)
 */
class ModifyReplicaDynamicMode extends Roa
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
 * @method string getParameterGroupId
 * @method self withParameterGroupId(string $parameterGroupId)
 */
class DescribeParameterGroup extends Roa
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
 * @method string getParameterGroupId
 * @method self withParameterGroupId(string $parameterGroupId)
 * @method string getParameterGroupName
 * @method self withParameterGroupName(string $parameterGroupName)
 * @method string getParameterGroupDesc
 * @method self withParameterGroupDesc(string $parameterGroupDesc)
 * @method string getParameters
 * @method self withParameters(string $parameters)
 */
class ModifyParameterGroup extends Roa
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
 * @method string getDynamicMode
 * @method self withDynamicMode(string $dynamicMode)
 */
class ModifyDynamicMode extends Roa
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
 * @method string getLcuQuota
 * @method self withLcuQuota(string $lcuQuota)
 * @method string getStorageQuota
 * @method self withStorageQuota(string $storageQuota)
 * @method string getSpecQuota
 * @method self withSpecQuota(string $specQuota)
 * @method string getSearchType
 * @method self withSearchType(string $searchType)
 */
class ModifyOpenSearchDBInstance extends Roa
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
 * @method string getReadSQLReplicationTime
 * @method self withReadSQLReplicationTime(string $readSQLReplicationTime)
 */
class ModifyDBInstanceDelayReplicationTime extends Roa
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
 * @method string getParameterGroupId
 * @method self withParameterGroupId(string $parameterGroupId)
 */
class DeleteParameterGroup extends Roa
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
 * @method string getRecoverMode
 * @method self withRecoverMode(string $recoverMode)
 */
class ModifyReplicaRecoverMode extends Roa
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
 */
class DescribeInstanceLevelList extends Roa
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
 * @method string getArchiveJobID
 * @method self withArchiveJobID(string $archiveJobID)
 * @method string getOssTableName
 * @method self withOssTableName(string $ossTableName)
 */
class DescribeArchiveSQLLogFromKepler extends Roa
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
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeTemplatesConsumeAndScanRows extends Roa
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
 * @method string getDBInstanceName
 * @method self withDBInstanceName(string $dBInstanceName)
 */
class DescribeSyncAccountForInner extends Roa
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
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getMinConsume
 * @method self withMinConsume(string $minConsume)
 * @method string getMaxConsume
 * @method self withMaxConsume(string $maxConsume)
 * @method string getMinScanRows
 * @method self withMinScanRows(string $minScanRows)
 * @method string getMaxScanRows
 * @method self withMaxScanRows(string $maxScanRows)
 * @method string getPagingId
 * @method self withPagingId(string $pagingId)
 * @method string getSortKey
 * @method self withSortKey(string $sortKey)
 * @method string getSortMethod
 * @method self withSortMethod(string $sortMethod)
 */
class DescribeTemplatesSqlType extends Roa
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
 * @method string getSqlDelay
 * @method self withSqlDelay(string $sqlDelay)
 */
class ModifyMySQLDBInstanceDelay extends Roa
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
 * @method string getLcuQuota
 * @method self withLcuQuota(string $lcuQuota)
 * @method string getStorageQuota
 * @method self withStorageQuota(string $storageQuota)
 * @method string getSpecQuota
 * @method self withSpecQuota(string $specQuota)
 * @method string getSearchType
 * @method self withSearchType(string $searchType)
 */
class CreateOpenSearchDBInstance extends Roa
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
class DescribeDynamicVerificationList extends Roa
{
    use R;
}

/**
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getAccountName
 * @method self withAccountName(string $accountName)
 * @method string getAccountPassword
 * @method self withAccountPassword(string $accountPassword)
 * @method string getAccountDescription
 * @method self withAccountDescription(string $accountDescription)
 * @method string getAccountType
 * @method self withAccountType(string $accountType)
 */
class CreateAdminAccount extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 */
class StartSqlLogTrail extends Roa
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
 * @method string getAddressIP
 * @method self withAddressIP(string $addressIP)
 * @method string getAddressPort
 * @method self withAddressPort(string $addressPort)
 */
class DescribeDBInstanceInfo extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getTriggerId
 * @method self withTriggerId(string $triggerId)
 * @method string getTriggerArn
 * @method self withTriggerArn(string $triggerArn)
 * @method string getFunctionArn
 * @method self withFunctionArn(string $functionArn)
 * @method string getSourceArn
 * @method self withSourceArn(string $sourceArn)
 * @method string getInvocationRoleArn
 * @method self withInvocationRoleArn(string $invocationRoleArn)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method array getSubscriptionObjects
 * @method self withSubscriptionObjects(array $subscriptionObjects)
 * @method string getEventFormat
 * @method self withEventFormat(string $eventFormat)
 * @method Integer getConcurrency
 * @method self withConcurrency(Integer $concurrency)
 * @method Integer getRetry
 * @method self withRetry(Integer $retry)
 * @method string getRegion
 * @method self withRegion(string $region)
 */
class CreateFCTrigger extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getTriggerId
 * @method self withTriggerId(string $triggerId)
 */
class DeleteFCTrigger extends Roa
{
    use R;
}

/**
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getTriggerId
 * @method self withTriggerId(string $triggerId)
 * @method string getTriggerArn
 * @method self withTriggerArn(string $triggerArn)
 * @method string getFunctionArn
 * @method self withFunctionArn(string $functionArn)
 * @method string getInvocationRoleArn
 * @method self withInvocationRoleArn(string $invocationRoleArn)
 * @method array getSubscriptionObjects
 * @method self withSubscriptionObjects(array $subscriptionObjects)
 * @method string getEventFormat
 * @method self withEventFormat(string $eventFormat)
 * @method Integer getConcurrency
 * @method self withConcurrency(Integer $concurrency)
 * @method Integer getRetry
 * @method self withRetry(Integer $retry)
 */
class ModifyFCTrigger extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getTriggerId
 * @method self withTriggerId(string $triggerId)
 */
class DescribeFCTrigger extends Roa
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
 * @method string getConfigValue
 * @method self withConfigValue(string $configValue)
 */
class ModifySQLCollectorRetention extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 */
class DescribeSqlLogDumpStatus extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 */
class DescribeSQLCollectorVersion extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 */
class DescribeSQLCollectorRetention extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 */
class CheckSqlLogHistoryEnable extends Roa
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
 */
class DescribeSyncAccounts extends Roa
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
 */
class CheckInstanceExist extends Roa
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
 */
class CheckInstanceExsit extends Roa
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
class DescribeLogBackupFiles extends Roa
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
 * @method string getConfigValue
 * @method self withConfigValue(string $configValue)
 * @method string getBucket
 * @method self withBucket(string $bucket)
 */
class StartSqlLogDump extends Roa
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
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getQueryKeyword
 * @method self withQueryKeyword(string $queryKeyword)
 * @method string getHostAddress
 * @method self withHostAddress(string $hostAddress)
 * @method string getDBName
 * @method self withDBName(string $dBName)
 * @method string getTableName
 * @method self withTableName(string $tableName)
 * @method int getMinConsume
 * @method self withMinConsume(int $minConsume)
 * @method int getMaxConsume
 * @method self withMaxConsume(int $maxConsume)
 * @method int getMinScanRows
 * @method self withMinScanRows(int $minScanRows)
 * @method int getMaxScanRows
 * @method self withMaxScanRows(int $maxScanRows)
 * @method string getState
 * @method self withState(string $state)
 * @method string getSqlType
 * @method self withSqlType(string $sqlType)
 * @method string getAccountName
 * @method self withAccountName(string $accountName)
 * @method string getThreadID
 * @method self withThreadID(string $threadID)
 * @method string getColumns
 * @method self withColumns(string $columns)
 */
class StartSqlLogDetailArchive extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 */
class QueryOssBuckets extends Roa
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
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method Integer getMaxRecordsPerPage
 * @method self withMaxRecordsPerPage(Integer $maxRecordsPerPage)
 * @method Integer getPageNumbers
 * @method self withPageNumbers(Integer $pageNumbers)
 * @method string getPagingId
 * @method self withPagingId(string $pagingId)
 * @method int getTemplateHash
 * @method self withTemplateHash(int $templateHash)
 * @method string getSortKey
 * @method self withSortKey(string $sortKey)
 * @method string getSortMethod
 * @method self withSortMethod(string $sortMethod)
 * @method string getJobId
 * @method self withJobId(string $jobId)
 */
class DescribeTemplateSqlDetail extends Roa
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
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getJobId
 * @method self withJobId(string $jobId)
 */
class DescribeSqlTemplatesConsumeAndScanRows extends Roa
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
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getTimeLevel
 * @method self withTimeLevel(string $timeLevel)
 * @method string getJobId
 * @method self withJobId(string $jobId)
 */
class DescribeSqlLogTimeDistribution extends Roa
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
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getTimeLevel
 * @method self withTimeLevel(string $timeLevel)
 * @method string getTemplateHash
 * @method self withTemplateHash(string $templateHash)
 * @method string getSortKey
 * @method self withSortKey(string $sortKey)
 * @method string getJobId
 * @method self withJobId(string $jobId)
 */
class DescribeSqlLogTemplatesTimeDistribution extends Roa
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
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method Integer getMaxRecordsPerPage
 * @method self withMaxRecordsPerPage(Integer $maxRecordsPerPage)
 * @method Integer getPageNumbers
 * @method self withPageNumbers(Integer $pageNumbers)
 * @method float getMinAvgConsume
 * @method self withMinAvgConsume(float $minAvgConsume)
 * @method float getMaxAvgConsume
 * @method self withMaxAvgConsume(float $maxAvgConsume)
 * @method float getMinAvgScanRows
 * @method self withMinAvgScanRows(float $minAvgScanRows)
 * @method float getMaxAvgScanRows
 * @method self withMaxAvgScanRows(float $maxAvgScanRows)
 * @method string getPagingId
 * @method self withPagingId(string $pagingId)
 * @method string getSortKey
 * @method self withSortKey(string $sortKey)
 * @method string getSortMethod
 * @method self withSortMethod(string $sortMethod)
 * @method string getSqlType
 * @method self withSqlType(string $sqlType)
 * @method string getJobId
 * @method self withJobId(string $jobId)
 */
class DescribeSqlLogTemplatesList extends Roa
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
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method Integer getMaxRecordsPerPage
 * @method self withMaxRecordsPerPage(Integer $maxRecordsPerPage)
 * @method Integer getPageNumbers
 * @method self withPageNumbers(Integer $pageNumbers)
 * @method string getQueryKeyword
 * @method self withQueryKeyword(string $queryKeyword)
 * @method string getHostAddress
 * @method self withHostAddress(string $hostAddress)
 * @method string getDBName
 * @method self withDBName(string $dBName)
 * @method string getTableName
 * @method self withTableName(string $tableName)
 * @method string getSortKey
 * @method self withSortKey(string $sortKey)
 * @method string getSortMethod
 * @method self withSortMethod(string $sortMethod)
 * @method int getMinConsume
 * @method self withMinConsume(int $minConsume)
 * @method int getMaxConsume
 * @method self withMaxConsume(int $maxConsume)
 * @method int getMinScanRows
 * @method self withMinScanRows(int $minScanRows)
 * @method int getMaxScanRows
 * @method self withMaxScanRows(int $maxScanRows)
 * @method string getState
 * @method self withState(string $state)
 * @method string getSqlType
 * @method self withSqlType(string $sqlType)
 * @method string getAccountName
 * @method self withAccountName(string $accountName)
 * @method string getThreadID
 * @method self withThreadID(string $threadID)
 * @method string getPagingID
 * @method self withPagingID(string $pagingID)
 * @method string getLogicalOperator
 * @method self withLogicalOperator(string $logicalOperator)
 * @method string getJobId
 * @method self withJobId(string $jobId)
 */
class DescribeSQLLogRecordsList extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 */
class DescribeSqlLogDetailArchiveStatus extends Roa
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
class DecribeSqlLogDumpStatus extends Roa
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
 * @method string getEngineVersion
 * @method self withEngineVersion(string $engineVersion)
 */
class DescribeSQLServerUpgradeVersions extends Roa
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
 * @method string getDBInstanceClass
 * @method self withDBInstanceClass(string $dBInstanceClass)
 * @method string getDBInstanceStorage
 * @method self withDBInstanceStorage(string $dBInstanceStorage)
 * @method string getShardsInfo
 * @method self withShardsInfo(string $shardsInfo)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 */
class EvaluateResource extends Roa
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
 */
class MigrateSecurityIPMode extends Roa
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
class EvaluateFailover extends Roa
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
 * @method string getPrimaryInstanceId
 * @method self withPrimaryInstanceId(string $primaryInstanceId)
 */
class Failover extends Roa
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
 * @method string getVPCId
 * @method self withVPCId(string $vPCId)
 * @method string getVSwitchId
 * @method self withVSwitchId(string $vSwitchId)
 * @method string getPrivateIpAddress
 * @method self withPrivateIpAddress(string $privateIpAddress)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class SwitchDBInstanceVpc extends Roa
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
 */
class DescribeCollationTimeZones extends Roa
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
 * @method string getKey
 * @method self withKey(string $key)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeInstanceKeywords extends Roa
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
 * @method string getCollation
 * @method self withCollation(string $collation)
 * @method string getTimezone
 * @method self withTimezone(string $timezone)
 */
class ModifyCollationTimeZone extends Roa
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
 * @method string getReadSQLReplicationTime
 * @method self withReadSQLReplicationTime(string $readSQLReplicationTime)
 */
class ModifyDBInstanceDelayedReplicationTime extends Roa
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
 * @method string getPrimaryInstanceId
 * @method self withPrimaryInstanceId(string $primaryInstanceId)
 */
class SwitchOver extends Roa
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
 */
class DescribeBackupDatabase extends Roa
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
 * @method string getPayType
 * @method self withPayType(string $payType)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getTargetDBInstanceId
 * @method self withTargetDBInstanceId(string $targetDBInstanceId)
 * @method string getDbNames
 * @method self withDbNames(string $dbNames)
 * @method string getBackupId
 * @method self withBackupId(string $backupId)
 * @method string getRestoreTime
 * @method self withRestoreTime(string $restoreTime)
 * @method string getSyncUserPrivilege
 * @method self withSyncUserPrivilege(string $syncUserPrivilege)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 */
class CopyDatabaseBetweenInstances extends Roa
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
 */
class CheckDBInstances extends Roa
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
 * @method string getDBInstanceClass
 * @method self withDBInstanceClass(string $dBInstanceClass)
 * @method Integer getDBInstanceStorage
 * @method self withDBInstanceStorage(Integer $dBInstanceStorage)
 * @method string getDBInstanceDescription
 * @method self withDBInstanceDescription(string $dBInstanceDescription)
 * @method string getPayType
 * @method self withPayType(string $payType)
 * @method string getInstanceNetworkType
 * @method self withInstanceNetworkType(string $instanceNetworkType)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getTargetDBInstanceId
 * @method self withTargetDBInstanceId(string $targetDBInstanceId)
 * @method string getDbNames
 * @method self withDbNames(string $dbNames)
 * @method string getBackupId
 * @method self withBackupId(string $backupId)
 * @method string getRestoreTime
 * @method self withRestoreTime(string $restoreTime)
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
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 */
class RecoveryDBInstance extends Roa
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
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 * @method string getInstanceChargeType
 * @method self withInstanceChargeType(string $instanceChargeType)
 * @method string getEngine
 * @method self withEngine(string $engine)
 * @method string getEngineVersion
 * @method self withEngineVersion(string $engineVersion)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getOrderType
 * @method self withOrderType(string $orderType)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeAvailableResource extends Roa
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
class DestroyDBInstance extends Roa
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
 * @method string getCommodityCode
 * @method self withCommodityCode(string $commodityCode)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 * @method string getDBInstanceClass
 * @method self withDBInstanceClass(string $dBInstanceClass)
 * @method string getPayType
 * @method self withPayType(string $payType)
 * @method string getInstanceNetworkType
 * @method self withInstanceNetworkType(string $instanceNetworkType)
 * @method string getUsedTime
 * @method self withUsedTime(string $usedTime)
 * @method string getTimeType
 * @method self withTimeType(string $timeType)
 * @method bool getAutoPay
 * @method self withAutoPay(bool $autoPay)
 * @method string getResource
 * @method self withResource(string $resource)
 * @method string getVPCId
 * @method self withVPCId(string $vPCId)
 * @method string getVSwitchId
 * @method self withVSwitchId(string $vSwitchId)
 * @method string getAutoRenew
 * @method self withAutoRenew(string $autoRenew)
 * @method string getAgentId
 * @method self withAgentId(string $agentId)
 * @method string getPromotionCode
 * @method self withPromotionCode(string $promotionCode)
 * @method string getBusinessInfo
 * @method self withBusinessInfo(string $businessInfo)
 * @method string getDBInstanceDescription
 * @method self withDBInstanceDescription(string $dBInstanceDescription)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 * @method bool getRebuildInstanceFlag
 * @method self withRebuildInstanceFlag(bool $rebuildInstanceFlag)
 */
class CreateOrderForRebuild extends Roa
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
 * @method string getReadSQLReplicationTime
 * @method self withReadSQLReplicationTime(string $readSQLReplicationTime)
 */
class ModifyReadonlyInstanceDelayReplicationTime extends Roa
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
 */
class DescribeDBInstanceProxyConfiguration extends Roa
{
    use R;
}

/**
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getServiceRequestType
 * @method self withServiceRequestType(string $serviceRequestType)
 * @method string getServiceRequestParam
 * @method self withServiceRequestParam(string $serviceRequestParam)
 */
class DescribeCloudDBAService extends Roa
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
 * @method string getDBName
 * @method self withDBName(string $dBName)
 * @method string getMigrateTaskId
 * @method self withMigrateTaskId(string $migrateTaskId)
 * @method string getCheckDBMode
 * @method self withCheckDBMode(string $checkDBMode)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class CreateOnlineDatabaseTask extends Roa
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
 */
class DescribeCustinsKernelReleaseNotes extends Roa
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
 * @method string getUpgradeTime
 * @method self withUpgradeTime(string $upgradeTime)
 * @method string getSwitchTime
 * @method self withSwitchTime(string $switchTime)
 */
class UpgradeDBInstanceKernelVersion extends Roa
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
 * @method string getProxyConfigurationKey
 * @method self withProxyConfigurationKey(string $proxyConfigurationKey)
 * @method string getProxyConfigurationValue
 * @method self withProxyConfigurationValue(string $proxyConfigurationValue)
 */
class ModifyDBInstanceProxyConfiguration extends Roa
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
class DescribeDBInstanceSwitchLog extends Roa
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
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 */
class DescribeSecurityGroupConfiguration extends Roa
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
 * @method string getSecurityGroupId
 * @method self withSecurityGroupId(string $securityGroupId)
 */
class ModifySecurityGroupConfiguration extends Roa
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
 * @method string getPolicyName
 * @method self withPolicyName(string $policyName)
 */
class DescribeDampPolicyByComment extends Roa
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
 * @method string getPeriod
 * @method self withPeriod(string $period)
 * @method string getAutoPay
 * @method self withAutoPay(string $autoPay)
 */
class RenewDBInstance extends Roa
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getCommodityCode
 * @method self withCommodityCode(string $commodityCode)
 * @method string getEngine
 * @method self withEngine(string $engine)
 * @method string getEngineVersion
 * @method self withEngineVersion(string $engineVersion)
 * @method string getDBInstanceClass
 * @method self withDBInstanceClass(string $dBInstanceClass)
 * @method Integer getDBInstanceStorage
 * @method self withDBInstanceStorage(Integer $dBInstanceStorage)
 * @method string getPayType
 * @method self withPayType(string $payType)
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 * @method string getUsedTime
 * @method self withUsedTime(string $usedTime)
 * @method string getTimeType
 * @method self withTimeType(string $timeType)
 * @method Integer getQuantity
 * @method self withQuantity(Integer $quantity)
 * @method Integer getInstanceUsedType
 * @method self withInstanceUsedType(Integer $instanceUsedType)
 * @method string getOrderType
 * @method self withOrderType(string $orderType)
 */
class QueryPriceForBuy extends Roa
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
 * @method string getConnectionString
 * @method self withConnectionString(string $connectionString)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class UpgradeDBInstanceNetwork extends Roa
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
 * @method string getTargetAliUid
 * @method self withTargetAliUid(string $targetAliUid)
 * @method string getTargetAliBid
 * @method self withTargetAliBid(string $targetAliBid)
 * @method string getBackupId
 * @method self withBackupId(string $backupId)
 * @method string getBackupLocation
 * @method self withBackupLocation(string $backupLocation)
 * @method string getBackupStatus
 * @method self withBackupStatus(string $backupStatus)
 * @method string getBackupMode
 * @method self withBackupMode(string $backupMode)
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
class DescribeBackupsForSecurity extends Roa
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
 * @method string getNewUID
 * @method self withNewUID(string $newUID)
 */
class ModifyDBInstanceOwner extends Roa
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
 * @method string getCommodityCode
 * @method self withCommodityCode(string $commodityCode)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getOrderType
 * @method self withOrderType(string $orderType)
 * @method string getCountryCode
 * @method self withCountryCode(string $countryCode)
 * @method string getCurrencyCode
 * @method self withCurrencyCode(string $currencyCode)
 * @method string getPromotionCode
 * @method self withPromotionCode(string $promotionCode)
 * @method string getBusinessInfo
 * @method self withBusinessInfo(string $businessInfo)
 */
class QueryPriceForRefund extends Roa
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
 */
class DescribeLogicDBInstanceTopology extends Roa
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
 */
class DescribeDBInstanceExtendAttribute extends Roa
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
 */
class DescribeDBInstanceECSSGRelation extends Roa
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
 * @method string getSecurityGroupId
 * @method self withSecurityGroupId(string $securityGroupId)
 */
class ModifyDBInstanceECSSGRelation extends Roa
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
 * @method string getMigrateTaskId
 * @method self withMigrateTaskId(string $migrateTaskId)
 */
class DescribeOssDownloadsForSQLServer extends Roa
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
 */
class DescribeMigrateTasksForSQLServer extends Roa
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
 * @method string getTaskType
 * @method self withTaskType(string $taskType)
 * @method string getIsOnlineDB
 * @method self withIsOnlineDB(string $isOnlineDB)
 * @method string getOSSUrls
 * @method self withOSSUrls(string $oSSUrls)
 */
class CreateMigrateTaskForSQLServer extends Roa
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
 * @method string getBackupMode
 * @method self withBackupMode(string $backupMode)
 * @method string getIsOnlineDB
 * @method self withIsOnlineDB(string $isOnlineDB)
 * @method string getCheckDBMode
 * @method self withCheckDBMode(string $checkDBMode)
 * @method string getOssObjectPositions
 * @method self withOssObjectPositions(string $ossObjectPositions)
 * @method string getOSSUrls
 * @method self withOSSUrls(string $oSSUrls)
 * @method string getMigrateTaskId
 * @method self withMigrateTaskId(string $migrateTaskId)
 */
class CreateMigrateTask extends Roa
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
 * @method string getMigrateTaskId
 * @method self withMigrateTaskId(string $migrateTaskId)
 */
class DescribeOssDownloads extends Roa
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
 */
class DescribeMigrateTasks extends Roa
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
 */
class CopyDatabase extends Roa
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
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getCommodityCode
 * @method self withCommodityCode(string $commodityCode)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getOrderType
 * @method self withOrderType(string $orderType)
 * @method string getCountryCode
 * @method self withCountryCode(string $countryCode)
 * @method string getCurrencyCode
 * @method self withCurrencyCode(string $currencyCode)
 * @method string getPromotionCode
 * @method self withPromotionCode(string $promotionCode)
 * @method string getUsedTime
 * @method self withUsedTime(string $usedTime)
 * @method string getDBInstanceClass
 * @method self withDBInstanceClass(string $dBInstanceClass)
 * @method string getBusinessInfo
 * @method self withBusinessInfo(string $businessInfo)
 */
class QueryPriceForTempUpgrade extends Roa
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
 * @method string getCommodityCode
 * @method self withCommodityCode(string $commodityCode)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getUsedTime
 * @method self withUsedTime(string $usedTime)
 * @method Integer getDBInstanceStorage
 * @method self withDBInstanceStorage(Integer $dBInstanceStorage)
 * @method string getResource
 * @method self withResource(string $resource)
 * @method bool getAutoPay
 * @method self withAutoPay(bool $autoPay)
 * @method string getDBInstanceClass
 * @method self withDBInstanceClass(string $dBInstanceClass)
 * @method string getBusinessInfo
 * @method self withBusinessInfo(string $businessInfo)
 */
class CreateOrderForTempUpgrade extends Roa
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ResetAccount extends Roa
{
    use R;
}

/**
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getServiceRequestType
 * @method self withServiceRequestType(string $serviceRequestType)
 * @method string getServiceRequestParam
 * @method self withServiceRequestParam(string $serviceRequestParam)
 */
class LoginDBInstancefromCloudDBA extends Roa
{
    use R;
}

/**
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getServiceRequestType
 * @method self withServiceRequestType(string $serviceRequestType)
 * @method string getServiceRequestParam
 * @method self withServiceRequestParam(string $serviceRequestParam)
 */
class RequestServiceOfCloudDBA extends Roa
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
 */
class DescribeDBInstancesAsCsv extends Roa
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
 * @method string getConnectionString
 * @method self withConnectionString(string $connectionString)
 */
class DescribeDBInstanceUser extends Roa
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
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 * @method string getSubDomain
 * @method self withSubDomain(string $subDomain)
 */
class CompensateInstanceForChannel extends Roa
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
 * @method string getCommodityCode
 * @method self withCommodityCode(string $commodityCode)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 * @method string getDBInstanceClass
 * @method self withDBInstanceClass(string $dBInstanceClass)
 * @method string getUsedTime
 * @method self withUsedTime(string $usedTime)
 * @method string getTimeType
 * @method self withTimeType(string $timeType)
 * @method string getPayType
 * @method self withPayType(string $payType)
 * @method string getEffectiveTime
 * @method self withEffectiveTime(string $effectiveTime)
 * @method Integer getDBInstanceStorage
 * @method self withDBInstanceStorage(Integer $dBInstanceStorage)
 * @method string getResource
 * @method self withResource(string $resource)
 * @method bool getAutoPay
 * @method self withAutoPay(bool $autoPay)
 * @method string getPromotionCode
 * @method self withPromotionCode(string $promotionCode)
 * @method string getBusinessInfo
 * @method self withBusinessInfo(string $businessInfo)
 */
class CreateOrderForDegrade extends Roa
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DegradeDBInstanceSpec extends Roa
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
 * @method string getDBInstanceClass
 * @method self withDBInstanceClass(string $dBInstanceClass)
 * @method Integer getDBInstanceStorage
 * @method self withDBInstanceStorage(Integer $dBInstanceStorage)
 * @method string getPayType
 * @method self withPayType(string $payType)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getBackupId
 * @method self withBackupId(string $backupId)
 * @method string getTargetAliUid
 * @method self withTargetAliUid(string $targetAliUid)
 * @method string getTargetAliBid
 * @method self withTargetAliBid(string $targetAliBid)
 * @method string getDBInstanceDescription
 * @method self withDBInstanceDescription(string $dBInstanceDescription)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 */
class CloneDBInstanceForSecurity extends Roa
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
 * @method string getConnectionString
 * @method self withConnectionString(string $connectionString)
 * @method Integer getClassicExpiredDays
 * @method self withClassicExpiredDays(Integer $classicExpiredDays)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ModifyDBInstanceNetworkExpireTime extends Roa
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
 * @method string getTargetAliUid
 * @method self withTargetAliUid(string $targetAliUid)
 * @method string getTargetAliBid
 * @method self withTargetAliBid(string $targetAliBid)
 * @method string getBackupId
 * @method self withBackupId(string $backupId)
 * @method string getBackupLocation
 * @method self withBackupLocation(string $backupLocation)
 * @method string getBackupStatus
 * @method self withBackupStatus(string $backupStatus)
 * @method string getBackupMode
 * @method self withBackupMode(string $backupMode)
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
class DescribeBackupSetsForSecurity extends Roa
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
 * @method string getConnectionString
 * @method self withConnectionString(string $connectionString)
 */
class UpgradeDBInstanceNetWorkInfo extends Roa
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
 * @method string getConnectionString
 * @method self withConnectionString(string $connectionString)
 * @method Integer getClassicExpiredDays
 * @method self withClassicExpiredDays(Integer $classicExpiredDays)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ModifyDBInstanceNetExpireTime extends Roa
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
 * @method string getBusinessUnit
 * @method self withBusinessUnit(string $businessUnit)
 */
class AddBuDBInstanceRelation extends Roa
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeRegionsForChannel extends Roa
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 */
class ModifyResourceGroup extends Roa
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
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getSourceDBInstanceId
 * @method self withSourceDBInstanceId(string $sourceDBInstanceId)
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
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
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
 * @method string getReplicaDescription
 * @method self withReplicaDescription(string $replicaDescription)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getUsedTime
 * @method self withUsedTime(string $usedTime)
 * @method string getPeriod
 * @method self withPeriod(string $period)
 * @method string getReplicaMode
 * @method self withReplicaMode(string $replicaMode)
 * @method string getDomainMode
 * @method self withDomainMode(string $domainMode)
 */
class CreateDBInstanceReplica extends Roa
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getCommodityCode
 * @method self withCommodityCode(string $commodityCode)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getPayType
 * @method self withPayType(string $payType)
 * @method string getDBInstanceClass
 * @method self withDBInstanceClass(string $dBInstanceClass)
 * @method string getUsedTime
 * @method self withUsedTime(string $usedTime)
 * @method string getTimeType
 * @method self withTimeType(string $timeType)
 * @method Integer getQuantity
 * @method self withQuantity(Integer $quantity)
 * @method string getOrderType
 * @method self withOrderType(string $orderType)
 * @method string getPromotionCode
 * @method self withPromotionCode(string $promotionCode)
 * @method string getBusinessInfo
 * @method self withBusinessInfo(string $businessInfo)
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
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getCommodityCode
 * @method self withCommodityCode(string $commodityCode)
 * @method string getEngine
 * @method self withEngine(string $engine)
 * @method string getEngineVersion
 * @method self withEngineVersion(string $engineVersion)
 * @method string getDBInstanceClass
 * @method self withDBInstanceClass(string $dBInstanceClass)
 * @method Integer getDBInstanceStorage
 * @method self withDBInstanceStorage(Integer $dBInstanceStorage)
 * @method string getPayType
 * @method self withPayType(string $payType)
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 * @method string getUsedTime
 * @method self withUsedTime(string $usedTime)
 * @method string getTimeType
 * @method self withTimeType(string $timeType)
 * @method Integer getQuantity
 * @method self withQuantity(Integer $quantity)
 * @method Integer getInstanceUsedType
 * @method self withInstanceUsedType(Integer $instanceUsedType)
 * @method string getOrderType
 * @method self withOrderType(string $orderType)
 */
class DescribePrice extends Roa
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
 * @method string getPeriod
 * @method self withPeriod(string $period)
 * @method string getAutoPay
 * @method self withAutoPay(string $autoPay)
 * @method string getBusinessInfo
 * @method self withBusinessInfo(string $businessInfo)
 */
class RenewInstance extends Roa
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method int getTaskId
 * @method self withTaskId(int $taskId)
 */
class DescribeTaskInfo extends Roa
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
 * @method string getBackupFile
 * @method self withBackupFile(string $backupFile)
 * @method string getRestoreTime
 * @method self withRestoreTime(string $restoreTime)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class CheckRecoveryConditions extends Roa
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
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeInstanceAutoRenewalAttribute extends Roa
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getDuration
 * @method self withDuration(string $duration)
 * @method string getAutoRenew
 * @method self withAutoRenew(string $autoRenew)
 */
class ModifyInstanceAutoRenewAttribute extends Roa
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
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeInstanceAutoRenewAttribute extends Roa
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
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 */
class ReleaseReadWriteSplittingConnection extends Roa
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
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getConnectionStringPrefix
 * @method self withConnectionStringPrefix(string $connectionStringPrefix)
 * @method string getPort
 * @method self withPort(string $port)
 * @method string getMaxDelayTime
 * @method self withMaxDelayTime(string $maxDelayTime)
 * @method string getDistributionType
 * @method self withDistributionType(string $distributionType)
 * @method string getWeight
 * @method self withWeight(string $weight)
 */
class ModifyReadWriteSplittingConnection extends Roa
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
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 */
class CalculateDBInstanceWeight extends Roa
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
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getConnectionStringPrefix
 * @method self withConnectionStringPrefix(string $connectionStringPrefix)
 * @method string getPort
 * @method self withPort(string $port)
 * @method string getMaxDelayTime
 * @method self withMaxDelayTime(string $maxDelayTime)
 * @method string getNetType
 * @method self withNetType(string $netType)
 * @method string getDistributionType
 * @method self withDistributionType(string $distributionType)
 * @method string getWeight
 * @method self withWeight(string $weight)
 */
class AllocateReadWriteSplittingConnection extends Roa
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
 * @method Integer getUsedTime
 * @method self withUsedTime(Integer $usedTime)
 * @method string getPayType
 * @method self withPayType(string $payType)
 * @method string getPeriod
 * @method self withPeriod(string $period)
 * @method string getAutoPay
 * @method self withAutoPay(string $autoPay)
 * @method string getResource
 * @method self withResource(string $resource)
 * @method string getAgentId
 * @method self withAgentId(string $agentId)
 * @method string getBusinessInfo
 * @method self withBusinessInfo(string $businessInfo)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ModifyDBInstancePayType extends Roa
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
 * @method string getPolicyName
 * @method self withPolicyName(string $policyName)
 * @method string getHandlers
 * @method self withHandlers(string $handlers)
 * @method string getSourceRules
 * @method self withSourceRules(string $sourceRules)
 * @method string getTimeRules
 * @method self withTimeRules(string $timeRules)
 * @method string getActionRules
 * @method self withActionRules(string $actionRules)
 */
class ModifyDampPolicy extends Roa
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
 * @method string getPolicyName
 * @method self withPolicyName(string $policyName)
 */
class DescribeDampPolicyByPolicyName extends Roa
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
class DescribeDampPoliciesByCid extends Roa
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
 * @method string getPolicyName
 * @method self withPolicyName(string $policyName)
 */
class DeleteDampPolicy extends Roa
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
 * @method string getPolicyId
 * @method self withPolicyId(string $policyId)
 */
class CreatePolicyWithSpecifiedPolicy extends Roa
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
 * @method string getPolicyName
 * @method self withPolicyName(string $policyName)
 * @method Integer getPriority
 * @method self withPriority(Integer $priority)
 * @method string getHandlers
 * @method self withHandlers(string $handlers)
 * @method string getSourceRules
 * @method self withSourceRules(string $sourceRules)
 * @method string getTimeRules
 * @method self withTimeRules(string $timeRules)
 * @method string getActionRules
 * @method self withActionRules(string $actionRules)
 */
class CreateDampPolicy extends Roa
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
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getEngineVersion
 * @method self withEngineVersion(string $engineVersion)
 * @method string getDBInstanceClass
 * @method self withDBInstanceClass(string $dBInstanceClass)
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 * @method string getDBInstanceUseType
 * @method self withDBInstanceUseType(string $dBInstanceUseType)
 * @method string getSpecifyCount
 * @method self withSpecifyCount(string $specifyCount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class CheckResource extends Roa
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeCharacterSetName extends Roa
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
class DeleteBackup extends Roa
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
 * @method string getSecurityIps
 * @method self withSecurityIps(string $securityIps)
 * @method string getDBInstanceIPArrayName
 * @method self withDBInstanceIPArrayName(string $dBInstanceIPArrayName)
 * @method string getDBInstanceIPArrayAttribute
 * @method self withDBInstanceIPArrayAttribute(string $dBInstanceIPArrayAttribute)
 * @method string getSecurityIPType
 * @method self withSecurityIPType(string $securityIPType)
 * @method string getWhitelistNetworkType
 * @method self withWhitelistNetworkType(string $whitelistNetworkType)
 * @method string getSecurityGroupId
 * @method self withSecurityGroupId(string $securityGroupId)
 * @method string getModifyMode
 * @method self withModifyMode(string $modifyMode)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ModifySecurityIpsForChannel extends Roa
{
    use R;
}

/**
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getStartPoint
 * @method self withStartPoint(string $startPoint)
 * @method string getEndPoint
 * @method self withEndPoint(string $endPoint)
 */
class DescribeDBInstanceNetworkDetail extends Roa
{
    use R;
}

/**
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeDBInstanceNetwork extends Roa
{
    use R;
}

/**
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 */
class DescribeSQLDiagnosisList extends Roa
{
    use R;
}

/**
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getSQLDiagId
 * @method self withSQLDiagId(string $sQLDiagId)
 */
class DescribeSQLDiagnosis extends Roa
{
    use R;
}

/**
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeResourceDiagnosis extends Roa
{
    use R;
}

/**
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 */
class DescribeDiagnosticReportList extends Roa
{
    use R;
}

/**
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeDatabaseLockDiagnosis extends Roa
{
    use R;
}

/**
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class CreateSQLDiagnosis extends Roa
{
    use R;
}

/**
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class CreateDiagnosticReport extends Roa
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
 * @method string getResource
 * @method self withResource(string $resource)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getPromotionCode
 * @method self withPromotionCode(string $promotionCode)
 * @method string getBusinessInfo
 * @method self withBusinessInfo(string $businessInfo)
 */
class QueryPriceMultiForDefer extends Roa
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
 * @method string getCommodityCode
 * @method self withCommodityCode(string $commodityCode)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getDBInstanceClass
 * @method self withDBInstanceClass(string $dBInstanceClass)
 * @method Integer getDBInstanceStorage
 * @method self withDBInstanceStorage(Integer $dBInstanceStorage)
 * @method string getDBInstanceStorageType
 * @method self withDBInstanceStorageType(string $dBInstanceStorageType)
 * @method string getPayType
 * @method self withPayType(string $payType)
 * @method string getInstanceNetworkType
 * @method self withInstanceNetworkType(string $instanceNetworkType)
 * @method string getUsedTime
 * @method self withUsedTime(string $usedTime)
 * @method string getTimeType
 * @method self withTimeType(string $timeType)
 * @method Integer getQuantity
 * @method self withQuantity(Integer $quantity)
 * @method bool getAutoPay
 * @method self withAutoPay(bool $autoPay)
 * @method Integer getInstanceUsedType
 * @method self withInstanceUsedType(Integer $instanceUsedType)
 * @method string getResource
 * @method self withResource(string $resource)
 * @method string getVPCId
 * @method self withVPCId(string $vPCId)
 * @method string getVSwitchId
 * @method self withVSwitchId(string $vSwitchId)
 * @method string getPrivateIpAddress
 * @method self withPrivateIpAddress(string $privateIpAddress)
 * @method string getCountryCode
 * @method self withCountryCode(string $countryCode)
 * @method string getCurrencyCode
 * @method self withCurrencyCode(string $currencyCode)
 * @method string getAutoRenew
 * @method self withAutoRenew(string $autoRenew)
 * @method string getAgentId
 * @method self withAgentId(string $agentId)
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 * @method string getPromotionCode
 * @method self withPromotionCode(string $promotionCode)
 * @method string getBusinessInfo
 * @method self withBusinessInfo(string $businessInfo)
 * @method string getCloneInstanceDefaultValue
 * @method self withCloneInstanceDefaultValue(string $cloneInstanceDefaultValue)
 * @method string getDBInstanceDescription
 * @method self withDBInstanceDescription(string $dBInstanceDescription)
 * @method string getDBNames
 * @method self withDBNames(string $dBNames)
 * @method string getBackupId
 * @method self withBackupId(string $backupId)
 * @method string getRestoreTime
 * @method self withRestoreTime(string $restoreTime)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 * @method string getTableMeta
 * @method self withTableMeta(string $tableMeta)
 * @method string getRestoreTable
 * @method self withRestoreTable(string $restoreTable)
 * @method string getNodeType
 * @method self withNodeType(string $nodeType)
 */
class CreateOrderForClone extends Roa
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
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 * @method string getDBInstanceClass
 * @method self withDBInstanceClass(string $dBInstanceClass)
 * @method Integer getDBInstanceStorage
 * @method self withDBInstanceStorage(Integer $dBInstanceStorage)
 * @method string getDBInstanceDescription
 * @method self withDBInstanceDescription(string $dBInstanceDescription)
 * @method string getDbNames
 * @method self withDbNames(string $dbNames)
 * @method string getPayType
 * @method self withPayType(string $payType)
 * @method string getInstanceNetworkType
 * @method self withInstanceNetworkType(string $instanceNetworkType)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getBackupId
 * @method self withBackupId(string $backupId)
 * @method string getRestoreTime
 * @method self withRestoreTime(string $restoreTime)
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
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 */
class CloneDBInstance extends Roa
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
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeTags extends Roa
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
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeDBInstanceByTags extends Roa
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
class RevokeOperatorPermission extends Roa
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
 * @method string getTDEStatus
 * @method self withTDEStatus(string $tDEStatus)
 * @method string getDBName
 * @method self withDBName(string $dBName)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ModifyDBInstanceTDE extends Roa
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class StartArchiveSQLLog extends Roa
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
 * @method string getConnectionString
 * @method self withConnectionString(string $connectionString)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ModifyDBInstanceSSL extends Roa
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
 * @method string getExpiredTime
 * @method self withExpiredTime(string $expiredTime)
 * @method string getPrivileges
 * @method self withPrivileges(string $privileges)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class GrantOperatorPermission extends Roa
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
class DescribeOperatorPermission extends Roa
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
class DescribeDBInstanceTDE extends Roa
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
class DescribeDBInstanceSSL extends Roa
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
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeSQLLogFiles extends Roa
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
class SwitchDBInstanceChargeType extends Roa
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ResetAdminAccountPassword extends Roa
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
 * @method string getPeriod
 * @method self withPeriod(string $period)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ModifyDBInstanceMonitor extends Roa
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
 */
class ModifyCommodity extends Roa
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
 * @method string getNodeId
 * @method self withNodeId(string $nodeId)
 * @method string getOperation
 * @method self withOperation(string $operation)
 * @method string getForce
 * @method self withForce(string $force)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getEffectiveTime
 * @method self withEffectiveTime(string $effectiveTime)
 */
class SwitchDBInstanceHA extends Roa
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
class DescribeDBInstanceMonitor extends Roa
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
class DescribeSQLCollectorPolicy extends Roa
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
 * @method string getSQLCollectorStatus
 * @method self withSQLCollectorStatus(string $sQLCollectorStatus)
 * @method Integer getStoragePeriod
 * @method self withStoragePeriod(Integer $storagePeriod)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ModifySQLCollectorPolicy extends Roa
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
class SwitchGuardToMasterInstance extends Roa
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
 * @method string getGuardDBInstanceId
 * @method self withGuardDBInstanceId(string $guardDBInstanceId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ReceiveDBInstance extends Roa
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
 * @method string getSyncMode
 * @method self withSyncMode(string $syncMode)
 * @method string getHAMode
 * @method self withHAMode(string $hAMode)
 * @method string getDbInstanceId
 * @method self withDbInstanceId(string $dbInstanceId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ModifyDBInstanceHAConfig extends Roa
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
class DescribeDBInstanceHAConfig extends Roa
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
class DescribeSQLReports extends Roa
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
 * @method string getParam
 * @method self withParam(string $param)
 * @method string getOrderType
 * @method self withOrderType(string $orderType)
 */
class QueryPriceMulti extends Roa
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
 * @method string getCommodityCode
 * @method self withCommodityCode(string $commodityCode)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getEngine
 * @method self withEngine(string $engine)
 * @method string getEngineVersion
 * @method self withEngineVersion(string $engineVersion)
 * @method string getDBInstanceClass
 * @method self withDBInstanceClass(string $dBInstanceClass)
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
 * @method string getUsedTime
 * @method self withUsedTime(string $usedTime)
 * @method string getTimeType
 * @method self withTimeType(string $timeType)
 * @method Integer getQuantity
 * @method self withQuantity(Integer $quantity)
 * @method bool getAutoPay
 * @method self withAutoPay(bool $autoPay)
 * @method Integer getInstanceUsedType
 * @method self withInstanceUsedType(Integer $instanceUsedType)
 * @method string getResource
 * @method self withResource(string $resource)
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
 * @method string getOrderType
 * @method self withOrderType(string $orderType)
 * @method string getCountryCode
 * @method self withCountryCode(string $countryCode)
 * @method string getCurrencyCode
 * @method self withCurrencyCode(string $currencyCode)
 * @method string getDBInstanceStorageType
 * @method self withDBInstanceStorageType(string $dBInstanceStorageType)
 * @method Integer getDBInstanceStorage
 * @method self withDBInstanceStorage(Integer $dBInstanceStorage)
 * @method string getPromotionCode
 * @method self withPromotionCode(string $promotionCode)
 * @method string getBusinessInfo
 * @method self withBusinessInfo(string $businessInfo)
 * @method string getOrderParamOut
 * @method self withOrderParamOut(string $orderParamOut)
 */
class QueryPrice extends Roa
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
 */
class DescribeUserInfo extends Roa
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
 * @method string getInstanceUsedType
 * @method self withInstanceUsedType(string $instanceUsedType)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getSpecifyCount
 * @method self withSpecifyCount(string $specifyCount)
 * @method string getHostType
 * @method self withHostType(string $hostType)
 */
class DescribeRegionAvailability extends Roa
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
 * @method string getCommodityCode
 * @method self withCommodityCode(string $commodityCode)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getOrderType
 * @method self withOrderType(string $orderType)
 */
class DescribeCommodity extends Roa
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
 * @method string getCommodityCode
 * @method self withCommodityCode(string $commodityCode)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 * @method string getDBInstanceClass
 * @method self withDBInstanceClass(string $dBInstanceClass)
 * @method string getUsedTime
 * @method self withUsedTime(string $usedTime)
 * @method string getTimeType
 * @method self withTimeType(string $timeType)
 * @method string getPayType
 * @method self withPayType(string $payType)
 * @method string getEffectiveTime
 * @method self withEffectiveTime(string $effectiveTime)
 * @method Integer getDBInstanceStorage
 * @method self withDBInstanceStorage(Integer $dBInstanceStorage)
 * @method string getResource
 * @method self withResource(string $resource)
 * @method bool getAutoPay
 * @method self withAutoPay(bool $autoPay)
 * @method string getPromotionCode
 * @method self withPromotionCode(string $promotionCode)
 * @method string getEngineVersion
 * @method self withEngineVersion(string $engineVersion)
 * @method string getBusinessInfo
 * @method self withBusinessInfo(string $businessInfo)
 * @method string getVSwitchId
 * @method self withVSwitchId(string $vSwitchId)
 */
class CreateOrderForModify extends Roa
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
 * @method string getCommodityCode
 * @method self withCommodityCode(string $commodityCode)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getUsedTime
 * @method self withUsedTime(string $usedTime)
 * @method string getTimeType
 * @method self withTimeType(string $timeType)
 * @method Integer getDBInstanceStorage
 * @method self withDBInstanceStorage(Integer $dBInstanceStorage)
 * @method string getResource
 * @method self withResource(string $resource)
 * @method bool getAutoPay
 * @method self withAutoPay(bool $autoPay)
 * @method string getPayType
 * @method self withPayType(string $payType)
 * @method bool getRenewChange
 * @method self withRenewChange(bool $renewChange)
 * @method string getDBInstanceClass
 * @method self withDBInstanceClass(string $dBInstanceClass)
 * @method string getBusinessInfo
 * @method self withBusinessInfo(string $businessInfo)
 */
class CreateOrderForDefer extends Roa
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
 * @method string getCommodityCode
 * @method self withCommodityCode(string $commodityCode)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
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
 * @method string getUsedTime
 * @method self withUsedTime(string $usedTime)
 * @method string getTimeType
 * @method self withTimeType(string $timeType)
 * @method Integer getQuantity
 * @method self withQuantity(Integer $quantity)
 * @method bool getAutoPay
 * @method self withAutoPay(bool $autoPay)
 * @method Integer getInstanceUsedType
 * @method self withInstanceUsedType(Integer $instanceUsedType)
 * @method string getResource
 * @method self withResource(string $resource)
 * @method string getConnectionMode
 * @method self withConnectionMode(string $connectionMode)
 * @method string getVPCId
 * @method self withVPCId(string $vPCId)
 * @method string getVSwitchId
 * @method self withVSwitchId(string $vSwitchId)
 * @method string getPrivateIpAddress
 * @method self withPrivateIpAddress(string $privateIpAddress)
 * @method string getCountryCode
 * @method self withCountryCode(string $countryCode)
 * @method string getCurrencyCode
 * @method self withCurrencyCode(string $currencyCode)
 * @method string getAutoRenew
 * @method self withAutoRenew(string $autoRenew)
 * @method string getAgentId
 * @method self withAgentId(string $agentId)
 * @method string getPromotionCode
 * @method self withPromotionCode(string $promotionCode)
 * @method string getBusinessInfo
 * @method self withBusinessInfo(string $businessInfo)
 * @method string getBackupId
 * @method self withBackupId(string $backupId)
 * @method string getRestoreTime
 * @method self withRestoreTime(string $restoreTime)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceStorageType
 * @method self withDBInstanceStorageType(string $dBInstanceStorageType)
 * @method string getNodeType
 * @method self withNodeType(string $nodeType)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 * @method string getCategory
 * @method self withCategory(string $category)
 * @method string getZoneIdSlave1
 * @method self withZoneIdSlave1(string $zoneIdSlave1)
 * @method string getZoneIdSlave2
 * @method self withZoneIdSlave2(string $zoneIdSlave2)
 */
class CreateOrder extends Roa
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
 * @method string getResource
 * @method self withResource(string $resource)
 * @method bool getAutoPay
 * @method self withAutoPay(bool $autoPay)
 * @method string getBusinessInfo
 * @method self withBusinessInfo(string $businessInfo)
 */
class CreateMulOrderForDefer extends Roa
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
 * @method string getAgentId
 * @method self withAgentId(string $agentId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getParam
 * @method self withParam(string $param)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class CreateMulOrderForBuy extends Roa
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
 * @method string getWhitelistNetworkType
 * @method self withWhitelistNetworkType(string $whitelistNetworkType)
 */
class DescribeDBInstanceIPArrayList extends Roa
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
class DescribeSQLLogReportList extends Roa
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ResetAccountForPG extends Roa
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
 * @method string getPort
 * @method self withPort(string $port)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class AllocateInstancePrivateConnection extends Roa
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
class UnlockDBInstance extends Roa
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
 * @method string getLockReason
 * @method self withLockReason(string $lockReason)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class LockDBInstance extends Roa
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
 * @method string getCharacterSetName
 * @method self withCharacterSetName(string $characterSetName)
 * @method string getDBDescription
 * @method self withDBDescription(string $dBDescription)
 * @method string getAccountName
 * @method self withAccountName(string $accountName)
 * @method string getAccountPrivilege
 * @method self withAccountPrivilege(string $accountPrivilege)
 * @method string getAccountPassword
 * @method self withAccountPassword(string $accountPassword)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class CreateDatabaseForInner extends Roa
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
 * @method string getDBName
 * @method self withDBName(string $dBName)
 * @method string getAccountPrivilege
 * @method self withAccountPrivilege(string $accountPrivilege)
 * @method string getAccountDescription
 * @method self withAccountDescription(string $accountDescription)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getAccountType
 * @method self withAccountType(string $accountType)
 */
class CreateAccountForInner extends Roa
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
 * @method string getEngineVersion
 * @method self withEngineVersion(string $engineVersion)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getEffectiveTime
 * @method self withEffectiveTime(string $effectiveTime)
 */
class UpgradeDBInstanceEngineVersion extends Roa
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
 * @method Integer getImportId
 * @method self withImportId(Integer $importId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class StopSyncing extends Roa
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
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getBackupId
 * @method self withBackupId(string $backupId)
 * @method string getRestoreTime
 * @method self withRestoreTime(string $restoreTime)
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
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
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
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getAccountName
 * @method self withAccountName(string $accountName)
 * @method string getAccountPassword
 * @method self withAccountPassword(string $accountPassword)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ResetAccountPassword extends Roa
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
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getTag1key
 * @method self withTag1key(string $tag1key)
 * @method string getTag2key
 * @method self withTag2key(string $tag2key)
 * @method string getTag3key
 * @method self withTag3key(string $tag3key)
 * @method string getTag4key
 * @method self withTag4key(string $tag4key)
 * @method string getTag5key
 * @method self withTag5key(string $tag5key)
 * @method string getTag1value
 * @method self withTag1value(string $tag1value)
 * @method string getTag2value
 * @method self withTag2value(string $tag2value)
 * @method string getTag3value
 * @method self withTag3value(string $tag3value)
 * @method string getTag4value
 * @method self withTag4value(string $tag4value)
 * @method string getTag5value
 * @method self withTag5value(string $tag5value)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class RemoveTagsFromResource extends Roa
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
class PurgeDBInstanceLog extends Roa
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
 * @method string getSourceDatabaseIp
 * @method self withSourceDatabaseIp(string $sourceDatabaseIp)
 * @method string getSourceDatabasePort
 * @method self withSourceDatabasePort(string $sourceDatabasePort)
 * @method string getSourceDatabaseUserName
 * @method self withSourceDatabaseUserName(string $sourceDatabaseUserName)
 * @method string getSourceDatabasePassword
 * @method self withSourceDatabasePassword(string $sourceDatabasePassword)
 * @method string getImportDataType
 * @method self withImportDataType(string $importDataType)
 * @method string getSourceDatabaseDBNames
 * @method self withSourceDatabaseDBNames(string $sourceDatabaseDBNames)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class PreCheckBeforeImportData extends Roa
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getSecurityIps
 * @method self withSecurityIps(string $securityIps)
 * @method string getDBInstanceIPArrayName
 * @method self withDBInstanceIPArrayName(string $dBInstanceIPArrayName)
 * @method string getDBInstanceIPArrayAttribute
 * @method self withDBInstanceIPArrayAttribute(string $dBInstanceIPArrayAttribute)
 * @method string getSecurityIPType
 * @method self withSecurityIPType(string $securityIPType)
 * @method string getWhitelistNetworkType
 * @method self withWhitelistNetworkType(string $whitelistNetworkType)
 * @method string getSecurityGroupId
 * @method self withSecurityGroupId(string $securityGroupId)
 * @method string getModifyMode
 * @method self withModifyMode(string $modifyMode)
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
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getDBInstanceClass
 * @method self withDBInstanceClass(string $dBInstanceClass)
 * @method Integer getDBInstanceStorage
 * @method self withDBInstanceStorage(Integer $dBInstanceStorage)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ModifyPostpaidDBInstanceSpec extends Roa
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
 * @method string getParameters
 * @method self withParameters(string $parameters)
 * @method bool getForcerestart
 * @method self withForcerestart(bool $forcerestart)
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
 * @method string getEffectiveTime
 * @method self withEffectiveTime(string $effectiveTime)
 * @method string getEngineVersion
 * @method self withEngineVersion(string $engineVersion)
 */
class ModifyDBInstanceSpec extends Roa
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
 * @method string getMaintainTime
 * @method self withMaintainTime(string $maintainTime)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ModifyDBInstanceMaintainTime extends Roa
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
 * @method string getDBInstanceDescription
 * @method self withDBInstanceDescription(string $dBInstanceDescription)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ModifyDBInstanceDescription extends Roa
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
 * @method string getDBDescription
 * @method self withDBDescription(string $dBDescription)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ModifyDBDescription extends Roa
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
 * @method string getBackupPolicyMode
 * @method self withBackupPolicyMode(string $backupPolicyMode)
 * @method string getPreferredBackupTime
 * @method self withPreferredBackupTime(string $preferredBackupTime)
 * @method string getPreferredBackupPeriod
 * @method self withPreferredBackupPeriod(string $preferredBackupPeriod)
 * @method string getBackupRetentionPeriod
 * @method self withBackupRetentionPeriod(string $backupRetentionPeriod)
 * @method string getBackupLog
 * @method self withBackupLog(string $backupLog)
 * @method string getLogBackupRetentionPeriod
 * @method self withLogBackupRetentionPeriod(string $logBackupRetentionPeriod)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getEnableBackupLog
 * @method self withEnableBackupLog(string $enableBackupLog)
 * @method string getLocalLogRetentionHours
 * @method self withLocalLogRetentionHours(string $localLogRetentionHours)
 * @method string getLocalLogRetentionSpace
 * @method self withLocalLogRetentionSpace(string $localLogRetentionSpace)
 * @method string getHighSpaceUsageProtection
 * @method self withHighSpaceUsageProtection(string $highSpaceUsageProtection)
 * @method string getDuplication
 * @method self withDuplication(string $duplication)
 * @method string getDuplicationContent
 * @method self withDuplicationContent(string $duplicationContent)
 * @method string getDuplicationLocation
 * @method self withDuplicationLocation(string $duplicationLocation)
 * @method string getLogBackupFrequency
 * @method self withLogBackupFrequency(string $logBackupFrequency)
 */
class ModifyBackupPolicy extends Roa
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
 * @method string getAccountDescription
 * @method self withAccountDescription(string $accountDescription)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ModifyAccountDescription extends Roa
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
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getSourceDatabaseIp
 * @method self withSourceDatabaseIp(string $sourceDatabaseIp)
 * @method string getSourceDatabasePort
 * @method self withSourceDatabasePort(string $sourceDatabasePort)
 * @method string getSourceDatabaseUserName
 * @method self withSourceDatabaseUserName(string $sourceDatabaseUserName)
 * @method string getSourceDatabasePassword
 * @method self withSourceDatabasePassword(string $sourceDatabasePassword)
 * @method string getImportDataType
 * @method self withImportDataType(string $importDataType)
 * @method string getIsLockTable
 * @method self withIsLockTable(string $isLockTable)
 * @method string getSourceDatabaseDBNames
 * @method self withSourceDatabaseDBNames(string $sourceDatabaseDBNames)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ImportDataFromDatabase extends Roa
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
class ImportDataForSQLServer extends Roa
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
 * @method string getSourceDBInstanceId
 * @method self withSourceDBInstanceId(string $sourceDBInstanceId)
 * @method string getDBInfo
 * @method self withDBInfo(string $dBInfo)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ImportDatabaseBetweenInstances extends Roa
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
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getBackupId
 * @method self withBackupId(string $backupId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ExtractBackupFromOAS extends Roa
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getRegion
 * @method self withRegion(string $region)
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 */
class DescribeVpcZoneNos extends Roa
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
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method string getTaskAction
 * @method self withTaskAction(string $taskAction)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeTasks extends Roa
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
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method int getSQLId
 * @method self withSQLId(int $sQLId)
 * @method string getQueryKeywords
 * @method self withQueryKeywords(string $queryKeywords)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getDatabase
 * @method self withDatabase(string $database)
 * @method string getUser
 * @method self withUser(string $user)
 * @method string getForm
 * @method self withForm(string $form)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
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
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeSQLInjectionInfos extends Roa
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
 * @method string getSQLHASH
 * @method self withSQLHASH(string $sQLHASH)
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
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
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
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeRegions extends Roa
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
class DescribeRealtimeDiagnoses extends Roa
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
 * @method string getPreCheckId
 * @method self withPreCheckId(string $preCheckId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribePreCheckResults extends Roa
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getCategory
 * @method self withCategory(string $category)
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
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
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
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeOptimizeAdviceOnStorage extends Roa
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
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeOptimizeAdviceOnMissPK extends Roa
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
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeOptimizeAdviceOnMissIndex extends Roa
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
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeOptimizeAdviceOnExcessIndex extends Roa
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
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeOptimizeAdviceOnBigTable extends Roa
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
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeOptimizeAdviceByDBA extends Roa
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
 * @method string getSearchKey
 * @method self withSearchKey(string $searchKey)
 * @method string getDBInstanceUseType
 * @method self withDBInstanceUseType(string $dBInstanceUseType)
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
class DescribeOperationLogs extends Roa
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
class DescribeModifyParameterLog extends Roa
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
 * @method Integer getImportId
 * @method self withImportId(Integer $importId)
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
class DescribeImportsForSQLServer extends Roa
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
class DescribeFilesForSQLServer extends Roa
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
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
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getDBName
 * @method self withDBName(string $dBName)
 * @method string getDBStatus
 * @method self withDBStatus(string $dBStatus)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
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
 * @method string getFlag
 * @method self withFlag(string $flag)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getBackupJobId
 * @method self withBackupJobId(string $backupJobId)
 * @method string getBackupMode
 * @method self withBackupMode(string $backupMode)
 * @method string getBackupJobStatus
 * @method self withBackupJobStatus(string $backupJobStatus)
 */
class DescribeBackupTasks extends Roa
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
 * @method string getBackupLocation
 * @method self withBackupLocation(string $backupLocation)
 * @method string getBackupStatus
 * @method self withBackupStatus(string $backupStatus)
 * @method string getBackupMode
 * @method self withBackupMode(string $backupMode)
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
 * @method string getBackupPolicyMode
 * @method self withBackupPolicyMode(string $backupPolicyMode)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeBackupPolicy extends Roa
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
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
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
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getEngine
 * @method self withEngine(string $engine)
 * @method Integer getImportId
 * @method self withImportId(Integer $importId)
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
class DescibeImportsFromDatabase extends Roa
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
class CreateUploadPathForSQLServer extends Roa
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
 * @method Integer getBackupId
 * @method self withBackupId(Integer $backupId)
 * @method string getRestoreTime
 * @method self withRestoreTime(string $restoreTime)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class CreateTempDBInstance extends Roa
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
 * @method string getDBInstanceNetType
 * @method self withDBInstanceNetType(string $dBInstanceNetType)
 * @method string getDBInstanceDescription
 * @method self withDBInstanceDescription(string $dBInstanceDescription)
 * @method string getSecurityIPList
 * @method self withSecurityIPList(string $securityIPList)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class CreatePostpaidDBInstanceForChannel extends Roa
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
 * @method string getDBInstanceNetType
 * @method self withDBInstanceNetType(string $dBInstanceNetType)
 * @method string getDBInstanceDescription
 * @method self withDBInstanceDescription(string $dBInstanceDescription)
 * @method string getSecurityIPList
 * @method self withSecurityIPList(string $securityIPList)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class CreatePostpaidDBInstance extends Roa
{
    use R;
}

/**
 * @method string getaction
 * @method self withaction(string $action)
 * @method int getuid
 * @method self withuid(int $uid)
 * @method string getbid
 * @method self withbid(string $bid)
 * @method string getuidLoginEmail
 * @method self withuidLoginEmail(string $uidLoginEmail)
 * @method string getbidLoginEmail
 * @method self withbidLoginEmail(string $bidLoginEmail)
 * @method string getEngine
 * @method self withEngine(string $engine)
 * @method string getEngineVersion
 * @method self withEngineVersion(string $engineVersion)
 * @method string getDBInstanceClass
 * @method self withDBInstanceClass(string $dBInstanceClass)
 * @method Integer getDBInstanceStorage
 * @method self withDBInstanceStorage(Integer $dBInstanceStorage)
 * @method string getDBInstanceNetType
 * @method self withDBInstanceNetType(string $dBInstanceNetType)
 * @method string getCharacterSetName
 * @method self withCharacterSetName(string $characterSetName)
 * @method string getDBInstanceRemarks
 * @method self withDBInstanceRemarks(string $dBInstanceRemarks)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class CreateDBInstanceforFirstPay extends Roa
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
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 * @method string getSystemDBCharset
 * @method self withSystemDBCharset(string $systemDBCharset)
 * @method string getEngine
 * @method self withEngine(string $engine)
 * @method string getEngineVersion
 * @method self withEngineVersion(string $engineVersion)
 * @method string getDBInstanceClass
 * @method self withDBInstanceClass(string $dBInstanceClass)
 * @method Integer getDBInstanceStorage
 * @method self withDBInstanceStorage(Integer $dBInstanceStorage)
 * @method string getDBInstanceNetType
 * @method self withDBInstanceNetType(string $dBInstanceNetType)
 * @method string getInstanceNetworkType
 * @method self withInstanceNetworkType(string $instanceNetworkType)
 * @method string getDBInstanceDescription
 * @method self withDBInstanceDescription(string $dBInstanceDescription)
 * @method string getSecurityIPList
 * @method self withSecurityIPList(string $securityIPList)
 * @method string getAccountName
 * @method self withAccountName(string $accountName)
 * @method string getAccountPassword
 * @method self withAccountPassword(string $accountPassword)
 * @method string getPayType
 * @method self withPayType(string $payType)
 * @method string getDBInstanceStorageType
 * @method self withDBInstanceStorageType(string $dBInstanceStorageType)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 */
class CreateDBInstanceForChannel extends Roa
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
 * @method string getCharacterSetName
 * @method self withCharacterSetName(string $characterSetName)
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
 * @method string getDBName
 * @method self withDBName(string $dBName)
 * @method string getBackupStrategy
 * @method self withBackupStrategy(string $backupStrategy)
 * @method string getBackupMethod
 * @method self withBackupMethod(string $backupMethod)
 * @method string getBackupType
 * @method self withBackupType(string $backupType)
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
 * @method string getAccountName
 * @method self withAccountName(string $accountName)
 * @method string getAccountPassword
 * @method self withAccountPassword(string $accountPassword)
 * @method string getAccountDescription
 * @method self withAccountDescription(string $accountDescription)
 * @method string getAccountType
 * @method self withAccountType(string $accountType)
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
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getDBName
 * @method self withDBName(string $dBName)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class CheckDBNameAvailable extends Roa
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
 * @method string getAccountName
 * @method self withAccountName(string $accountName)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class CheckAccountNameAvailable extends Roa
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
 * @method Integer getImportId
 * @method self withImportId(Integer $importId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class CancelImport extends Roa
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class BatchRevokeAccountPrivilege extends Roa
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
class BatchGrantAccountPrivilege extends Roa
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
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getTag1key
 * @method self withTag1key(string $tag1key)
 * @method string getTag2key
 * @method self withTag2key(string $tag2key)
 * @method string getTag3key
 * @method self withTag3key(string $tag3key)
 * @method string getTag4key
 * @method self withTag4key(string $tag4key)
 * @method string getTag5key
 * @method self withTag5key(string $tag5key)
 * @method string getTag1value
 * @method self withTag1value(string $tag1value)
 * @method string getTag2value
 * @method self withTag2value(string $tag2value)
 * @method string getTag3value
 * @method self withTag3value(string $tag3value)
 * @method string getTag4value
 * @method self withTag4value(string $tag4value)
 * @method string getTag5value
 * @method self withTag5value(string $tag5value)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class AddTagsToResource extends Roa
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
 * @method string getConnectionStringPrefix
 * @method self withConnectionStringPrefix(string $connectionStringPrefix)
 * @method string getPort
 * @method self withPort(string $port)
 * @method string getConnectionStringType
 * @method self withConnectionStringType(string $connectionStringType)
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
 * @method string getCurrentConnectionString
 * @method self withCurrentConnectionString(string $currentConnectionString)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ReleaseInstancePublicConnection extends Roa
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
 * @method string getRetainClassic
 * @method self withRetainClassic(string $retainClassic)
 * @method string getClassicExpiredDays
 * @method self withClassicExpiredDays(string $classicExpiredDays)
 * @method string getInstanceNetworkType
 * @method self withInstanceNetworkType(string $instanceNetworkType)
 * @method Integer getReadWriteSplittingClassicExpiredDays
 * @method self withReadWriteSplittingClassicExpiredDays(Integer $readWriteSplittingClassicExpiredDays)
 * @method string getVPCId
 * @method self withVPCId(string $vPCId)
 * @method string getVSwitchId
 * @method self withVSwitchId(string $vSwitchId)
 * @method string getPrivateIpAddress
 * @method self withPrivateIpAddress(string $privateIpAddress)
 * @method string getReadWriteSplittingPrivateIpAddress
 * @method self withReadWriteSplittingPrivateIpAddress(string $readWriteSplittingPrivateIpAddress)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ModifyDBInstanceNetworkType extends Roa
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
 * @method string getCurrentConnectionString
 * @method self withCurrentConnectionString(string $currentConnectionString)
 * @method string getConnectionStringPrefix
 * @method self withConnectionStringPrefix(string $connectionStringPrefix)
 * @method string getPort
 * @method self withPort(string $port)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ModifyDBInstanceConnectionString extends Roa
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
 * @method string getConnectionMode
 * @method self withConnectionMode(string $connectionMode)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ModifyDBInstanceConnectionMode extends Roa
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
 * @method string getFlag
 * @method self withFlag(string $flag)
 * @method string getDBInstanceNetRWSplitType
 * @method self withDBInstanceNetRWSplitType(string $dBInstanceNetRWSplitType)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeDBInstanceNetInfoForChannel extends Roa
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
 * @method string getFlag
 * @method self withFlag(string $flag)
 * @method string getDBInstanceNetRWSplitType
 * @method self withDBInstanceNetRWSplitType(string $dBInstanceNetRWSplitType)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeDBInstanceNetInfo extends Roa
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
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getDBInstanceClass
 * @method self withDBInstanceClass(string $dBInstanceClass)
 * @method Integer getDBInstanceStorage
 * @method self withDBInstanceStorage(Integer $dBInstanceStorage)
 * @method string getEngineVersion
 * @method self withEngineVersion(string $engineVersion)
 * @method string getPayType
 * @method self withPayType(string $payType)
 * @method string getDBInstanceDescription
 * @method self withDBInstanceDescription(string $dBInstanceDescription)
 * @method string getInstanceNetworkType
 * @method self withInstanceNetworkType(string $instanceNetworkType)
 * @method string getVPCId
 * @method self withVPCId(string $vPCId)
 * @method string getVSwitchId
 * @method self withVSwitchId(string $vSwitchId)
 * @method string getPrivateIpAddress
 * @method self withPrivateIpAddress(string $privateIpAddress)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 */
class CreateReadOnlyDBInstance extends Roa
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
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
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
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 * @method string getDBInstanceStorageType
 * @method self withDBInstanceStorageType(string $dBInstanceStorageType)
 * @method string getTunnelId
 * @method self withTunnelId(string $tunnelId)
 * @method string getBusinessInfo
 * @method self withBusinessInfo(string $businessInfo)
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
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getConnectionStringPrefix
 * @method self withConnectionStringPrefix(string $connectionStringPrefix)
 * @method string getPort
 * @method self withPort(string $port)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class AllocateInstancePublicConnection extends Roa
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
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method string getSortMethod
 * @method self withSortMethod(string $sortMethod)
 * @method string getSortKey
 * @method self withSortKey(string $sortKey)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getTag1key
 * @method self withTag1key(string $tag1key)
 * @method string getTag2key
 * @method self withTag2key(string $tag2key)
 * @method string getTag3key
 * @method self withTag3key(string $tag3key)
 * @method string getTag4key
 * @method self withTag4key(string $tag4key)
 * @method string getTag5key
 * @method self withTag5key(string $tag5key)
 * @method string getTag1value
 * @method self withTag1value(string $tag1value)
 * @method string getTag2value
 * @method self withTag2value(string $tag2value)
 * @method string getTag3value
 * @method self withTag3value(string $tag3value)
 * @method string getTag4value
 * @method self withTag4value(string $tag4value)
 * @method string getTag5value
 * @method self withTag5value(string $tag5value)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeDBInstancesByPerformance extends Roa
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
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method Integer getExpirePeriod
 * @method self withExpirePeriod(Integer $expirePeriod)
 * @method bool getExpired
 * @method self withExpired(bool $expired)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeDBInstancesByExpireTime extends Roa
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
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 * @method string getDBInstanceStatus
 * @method self withDBInstanceStatus(string $dBInstanceStatus)
 * @method string getExpired
 * @method self withExpired(string $expired)
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
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 * @method string getVSwitchId
 * @method self withVSwitchId(string $vSwitchId)
 * @method string getDBInstanceClass
 * @method self withDBInstanceClass(string $dBInstanceClass)
 * @method string getEngineVersion
 * @method self withEngineVersion(string $engineVersion)
 * @method string getPayType
 * @method self withPayType(string $payType)
 * @method string getConnectionMode
 * @method self withConnectionMode(string $connectionMode)
 * @method string getTag1key
 * @method self withTag1key(string $tag1key)
 * @method string getTag2key
 * @method self withTag2key(string $tag2key)
 * @method string getTag3key
 * @method self withTag3key(string $tag3key)
 * @method string getTag4key
 * @method self withTag4key(string $tag4key)
 * @method string getTag5key
 * @method self withTag5key(string $tag5key)
 * @method string getTag1value
 * @method self withTag1value(string $tag1value)
 * @method string getTag2value
 * @method self withTag2value(string $tag2value)
 * @method string getTag3value
 * @method self withTag3value(string $tag3value)
 * @method string getTag4value
 * @method self withTag4value(string $tag4value)
 * @method string getTag5value
 * @method self withTag5value(string $tag5value)
 * @method string getTags
 * @method self withTags(string $tags)
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
 * @method string getExpired
 * @method self withExpired(string $expired)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 */
class DescribeDBInstanceAttribute extends Roa
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
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getTag1key
 * @method self withTag1key(string $tag1key)
 * @method string getTag2key
 * @method self withTag2key(string $tag2key)
 * @method string getTag3key
 * @method self withTag3key(string $tag3key)
 * @method string getTag4key
 * @method self withTag4key(string $tag4key)
 * @method string getTag5key
 * @method self withTag5key(string $tag5key)
 * @method string getTag1value
 * @method self withTag1value(string $tag1value)
 * @method string getTag2value
 * @method self withTag2value(string $tag2value)
 * @method string getTag3value
 * @method self withTag3value(string $tag3value)
 * @method string getTag4value
 * @method self withTag4value(string $tag4value)
 * @method string getTag5value
 * @method self withTag5value(string $tag5value)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeAbnormalDBInstances extends Roa
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
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class StartDBInstanceDiagnose extends Roa
{
    use R;
}
