<?php

namespace AlibabaCloud\Rds\V20140815;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

/**
 * Resolve Api based on the method name.
 *
 * @method CreateDBInstance createDBInstance(array $options = [])
 * @method StartDBInstanceDiagnose startDBInstanceDiagnose(array $options = [])
 * @method CreateReadOnlyDBInstance createReadOnlyDBInstance(array $options = [])
 * @method AllocateInstancePublicConnection allocateInstancePublicConnection(array $options = [])
 * @method DescribeDBInstanceNetInfo describeDBInstanceNetInfo(array $options = [])
 * @method DescribeAbnormalDBInstances describeAbnormalDBInstances(array $options = [])
 * @method DescribeDBInstancesByPerformance describeDBInstancesByPerformance(array $options = [])
 * @method DescribeDBInstancesByExpireTime describeDBInstancesByExpireTime(array $options = [])
 * @method CreateBackup createBackup(array $options = [])
 * @method DeleteDBInstance deleteDBInstance(array $options = [])
 * @method ModifyDBInstanceConnectionString modifyDBInstanceConnectionString(array $options = [])
 * @method DescribeDBInstanceAttribute describeDBInstanceAttribute(array $options = [])
 * @method CheckAccountNameAvailable checkAccountNameAvailable(array $options = [])
 * @method CreateAccount createAccount(array $options = [])
 * @method DescribeBackupTasks describeBackupTasks(array $options = [])
 * @method DescribeTasks describeTasks(array $options = [])
 * @method ReceiveDBInstance receiveDBInstance(array $options = [])
 * @method ModifyAccountDescription modifyAccountDescription(array $options = [])
 * @method ReleaseInstancePublicConnection releaseInstancePublicConnection(array $options = [])
 * @method SwitchDBInstanceNetType switchDBInstanceNetType(array $options = [])
 * @method DescribeDiagnosticReportList describeDiagnosticReportList(array $options = [])
 * @method DescribeSQLDiagnosisList describeSQLDiagnosisList(array $options = [])
 * @method ResetAccountForPG resetAccountForPG(array $options = [])
 * @method BatchRevokeAccountPrivilege batchRevokeAccountPrivilege(array $options = [])
 * @method ModifyDBInstancePayType modifyDBInstancePayType(array $options = [])
 * @method CreatePolicyWithSpecifiedPolicy createPolicyWithSpecifiedPolicy(array $options = [])
 * @method RestoreDBInstance restoreDBInstance(array $options = [])
 * @method DescribeDampPoliciesByCid describeDampPoliciesByCid(array $options = [])
 * @method ModifyDBInstanceSSL modifyDBInstanceSSL(array $options = [])
 * @method ModifySecurityIps modifySecurityIps(array $options = [])
 * @method ModifyResourceGroup modifyResourceGroup(array $options = [])
 * @method UpgradeDBInstanceEngineVersion upgradeDBInstanceEngineVersion(array $options = [])
 * @method DescribeSQLInjectionInfos describeSQLInjectionInfos(array $options = [])
 * @method CreateUploadPathForSQLServer createUploadPathForSQLServer(array $options = [])
 * @method DescribeModifyParameterLog describeModifyParameterLog(array $options = [])
 * @method DescribeUserInfo describeUserInfo(array $options = [])
 * @method UpgradeDBInstanceNetWorkInfo upgradeDBInstanceNetWorkInfo(array $options = [])
 * @method DeleteDatabase deleteDatabase(array $options = [])
 * @method CreateTempDBInstance createTempDBInstance(array $options = [])
 * @method ResetAccountPassword resetAccountPassword(array $options = [])
 * @method LockDBInstance lockDBInstance(array $options = [])
 * @method CreatePostpaidDBInstance createPostpaidDBInstance(array $options = [])
 * @method BatchGrantAccountPrivilege batchGrantAccountPrivilege(array $options = [])
 * @method DescribeInstanceAutoRenewalAttribute describeInstanceAutoRenewalAttribute(array $options = [])
 * @method DescribeFilesForSQLServer describeFilesForSQLServer(array $options = [])
 * @method RenewInstance renewInstance(array $options = [])
 * @method DescribeOperatorPermission describeOperatorPermission(array $options = [])
 * @method AddTagsToResource addTagsToResource(array $options = [])
 * @method DescribeRealtimeDiagnoses describeRealtimeDiagnoses(array $options = [])
 * @method ModifyDBDescription modifyDBDescription(array $options = [])
 * @method DescribeOptimizeAdviceOnMissPK describeOptimizeAdviceOnMissPK(array $options = [])
 * @method DeleteAccount deleteAccount(array $options = [])
 * @method DescribeBackupPolicy describeBackupPolicy(array $options = [])
 * @method SwitchDBInstanceChargeType switchDBInstanceChargeType(array $options = [])
 * @method ModifyDBInstanceConnectionMode modifyDBInstanceConnectionMode(array $options = [])
 * @method ReleaseReadWriteSplittingConnection releaseReadWriteSplittingConnection(array $options = [])
 * @method CancelImport cancelImport(array $options = [])
 * @method CloneDBInstanceForSecurity cloneDBInstanceForSecurity(array $options = [])
 * @method ModifyDBInstanceSpec modifyDBInstanceSpec(array $options = [])
 * @method ModifySQLCollectorPolicy modifySQLCollectorPolicy(array $options = [])
 * @method ModifyDampPolicy modifyDampPolicy(array $options = [])
 * @method DescribeOptimizeAdviceOnStorage describeOptimizeAdviceOnStorage(array $options = [])
 * @method DescribeParameters describeParameters(array $options = [])
 * @method RevokeOperatorPermission revokeOperatorPermission(array $options = [])
 * @method CheckRecoveryConditions checkRecoveryConditions(array $options = [])
 * @method CreateDBInstanceforFirstPay createDBInstanceforFirstPay(array $options = [])
 * @method GrantAccountPrivilege grantAccountPrivilege(array $options = [])
 * @method ModifyDBInstanceNetworkType modifyDBInstanceNetworkType(array $options = [])
 * @method AddBuDBInstanceRelation addBuDBInstanceRelation(array $options = [])
 * @method DescribeDatabaseLockDiagnosis describeDatabaseLockDiagnosis(array $options = [])
 * @method RestartDBInstance restartDBInstance(array $options = [])
 * @method CheckDBNameAvailable checkDBNameAvailable(array $options = [])
 * @method DescribeCommodity describeCommodity(array $options = [])
 * @method DescribeDBInstanceSSL describeDBInstanceSSL(array $options = [])
 * @method DescribeOperationLogs describeOperationLogs(array $options = [])
 * @method CreateOrderForModify createOrderForModify(array $options = [])
 * @method DescribeSQLLogFiles describeSQLLogFiles(array $options = [])
 * @method DescribeInstanceAutoRenewAttribute describeInstanceAutoRenewAttribute(array $options = [])
 * @method DescribeBinlogFiles describeBinlogFiles(array $options = [])
 * @method DescribeSlowLogRecords describeSlowLogRecords(array $options = [])
 * @method ModifyDBInstanceNetworkExpireTime modifyDBInstanceNetworkExpireTime(array $options = [])
 * @method DescribeMigrateTasks describeMigrateTasks(array $options = [])
 * @method GrantOperatorPermission grantOperatorPermission(array $options = [])
 * @method ModifyDBInstanceMaintainTime modifyDBInstanceMaintainTime(array $options = [])
 * @method DescribeOptimizeAdviceOnMissIndex describeOptimizeAdviceOnMissIndex(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DescribeRegionsForChannel describeRegionsForChannel(array $options = [])
 * @method ModifyDBInstanceNetExpireTime modifyDBInstanceNetExpireTime(array $options = [])
 * @method ExtractBackupFromOAS extractBackupFromOAS(array $options = [])
 * @method CreateDatabaseForInner createDatabaseForInner(array $options = [])
 * @method DescribeReplicaPerformance describeReplicaPerformance(array $options = [])
 * @method CreateMigrateTaskForSQLServer createMigrateTaskForSQLServer(array $options = [])
 * @method ReleaseReplica releaseReplica(array $options = [])
 * @method DescribeReplicaInitializeProgress describeReplicaInitializeProgress(array $options = [])
 * @method DescribeOptimizeAdviceOnExcessIndex describeOptimizeAdviceOnExcessIndex(array $options = [])
 * @method AllocateReadWriteSplittingConnection allocateReadWriteSplittingConnection(array $options = [])
 * @method DescribeAccounts describeAccounts(array $options = [])
 * @method ModifyInstanceAutoRenewalAttribute modifyInstanceAutoRenewalAttribute(array $options = [])
 * @method CreateDBInstanceForChannel createDBInstanceForChannel(array $options = [])
 * @method DescribeStaticVerificationList describeStaticVerificationList(array $options = [])
 * @method CalculateDBInstanceWeight calculateDBInstanceWeight(array $options = [])
 * @method ModifySecurityGroupConfiguration modifySecurityGroupConfiguration(array $options = [])
 * @method DescribeLogicDBInstanceTopology describeLogicDBInstanceTopology(array $options = [])
 * @method ModifyDBInstanceDescription modifyDBInstanceDescription(array $options = [])
 * @method DeleteBackup deleteBackup(array $options = [])
 * @method DescribeSQLReports describeSQLReports(array $options = [])
 * @method DescibeImportsFromDatabase descibeImportsFromDatabase(array $options = [])
 * @method CreateDatabase createDatabase(array $options = [])
 * @method DescribeErrorLogs describeErrorLogs(array $options = [])
 * @method QueryPriceMultiForDefer queryPriceMultiForDefer(array $options = [])
 * @method DescribeCharacterSetName describeCharacterSetName(array $options = [])
 * @method RemoveTagsFromResource removeTagsFromResource(array $options = [])
 * @method DescribeDatabases describeDatabases(array $options = [])
 * @method DescribeResourceUsage describeResourceUsage(array $options = [])
 * @method ModifyReplicaDescription modifyReplicaDescription(array $options = [])
 * @method CreateOrderForClone createOrderForClone(array $options = [])
 * @method MigrateToOtherZone migrateToOtherZone(array $options = [])
 * @method QueryPriceForBuy queryPriceForBuy(array $options = [])
 * @method DescribeVpcZoneNos describeVpcZoneNos(array $options = [])
 * @method DescribeBackupSetsForSecurity describeBackupSetsForSecurity(array $options = [])
 * @method DescribeDBInstanceHAConfig describeDBInstanceHAConfig(array $options = [])
 * @method DescribeDampPolicyByPolicyName describeDampPolicyByPolicyName(array $options = [])
 * @method DeleteDampPolicy deleteDampPolicy(array $options = [])
 * @method ModifyDBInstanceECSSGRelation modifyDBInstanceECSSGRelation(array $options = [])
 * @method QueryPriceForTempUpgrade queryPriceForTempUpgrade(array $options = [])
 * @method ImportDataFromDatabase importDataFromDatabase(array $options = [])
 * @method DescribeTaskInfo describeTaskInfo(array $options = [])
 * @method ModifyGuardDomainMode modifyGuardDomainMode(array $options = [])
 * @method CreateMigrateTask createMigrateTask(array $options = [])
 * @method DescribePreCheckResults describePreCheckResults(array $options = [])
 * @method DescribeBackups describeBackups(array $options = [])
 * @method DescribeTags describeTags(array $options = [])
 * @method ModifyDBInstanceHAConfig modifyDBInstanceHAConfig(array $options = [])
 * @method LoginDBInstancefromCloudDBA loginDBInstancefromCloudDBA(array $options = [])
 * @method ModifyReadWriteSplittingConnection modifyReadWriteSplittingConnection(array $options = [])
 * @method UpgradeDBInstanceNetwork upgradeDBInstanceNetwork(array $options = [])
 * @method DescribePrice describePrice(array $options = [])
 * @method DescribeLogBackupFiles describeLogBackupFiles(array $options = [])
 * @method DescribeSqlLogDetailArchiveStatus describeSqlLogDetailArchiveStatus(array $options = [])
 * @method ModifyReplicaMode modifyReplicaMode(array $options = [])
 * @method ModifySecurityIpsForChannel modifySecurityIpsForChannel(array $options = [])
 * @method PurgeDBInstanceLog purgeDBInstanceLog(array $options = [])
 * @method DescribeRegionAvailability describeRegionAvailability(array $options = [])
 * @method ResetAccount resetAccount(array $options = [])
 * @method DescribeDBInstancePerformance describeDBInstancePerformance(array $options = [])
 * @method CreateMulOrderForDefer createMulOrderForDefer(array $options = [])
 * @method CloneDBInstance cloneDBInstance(array $options = [])
 * @method DescribeDampPolicyByComment describeDampPolicyByComment(array $options = [])
 * @method DescribeResourceDiagnosis describeResourceDiagnosis(array $options = [])
 * @method StopSyncing stopSyncing(array $options = [])
 * @method StartArchiveSQLLog startArchiveSQLLog(array $options = [])
 * @method DescribeDBInstanceMonitor describeDBInstanceMonitor(array $options = [])
 * @method DescribeDBInstanceByTags describeDBInstanceByTags(array $options = [])
 * @method DescribeDBInstanceECSSGRelation describeDBInstanceECSSGRelation(array $options = [])
 * @method CheckResource checkResource(array $options = [])
 * @method RenewDBInstance renewDBInstance(array $options = [])
 * @method CreateOrderForDefer createOrderForDefer(array $options = [])
 * @method ModifyPostpaidDBInstanceSpec modifyPostpaidDBInstanceSpec(array $options = [])
 * @method DescribeVerificationList describeVerificationList(array $options = [])
 * @method DescribeDBInstanceIPArrayList describeDBInstanceIPArrayList(array $options = [])
 * @method DescribeOptimizeAdviceOnBigTable describeOptimizeAdviceOnBigTable(array $options = [])
 * @method CreateAccountForInner createAccountForInner(array $options = [])
 * @method CreateDampPolicy createDampPolicy(array $options = [])
 * @method ModifyCommodity modifyCommodity(array $options = [])
 * @method DescribeOptimizeAdviceByDBA describeOptimizeAdviceByDBA(array $options = [])
 * @method DescribeRenewalPrice describeRenewalPrice(array $options = [])
 * @method SwitchGuardToMasterInstance switchGuardToMasterInstance(array $options = [])
 * @method DescribeDBInstancesAsCsv describeDBInstancesAsCsv(array $options = [])
 * @method CreatePostpaidDBInstanceForChannel createPostpaidDBInstanceForChannel(array $options = [])
 * @method DescribeSQLCollectorVersion describeSQLCollectorVersion(array $options = [])
 * @method DescribeDBInstanceTDE describeDBInstanceTDE(array $options = [])
 * @method UnlockDBInstance unlockDBInstance(array $options = [])
 * @method CopyDatabase copyDatabase(array $options = [])
 * @method SwitchDBInstanceHA switchDBInstanceHA(array $options = [])
 * @method ModifyReplicaVerificationMode modifyReplicaVerificationMode(array $options = [])
 * @method DescribeTemplateSqlDetail describeTemplateSqlDetail(array $options = [])
 * @method ModifyBackupPolicy modifyBackupPolicy(array $options = [])
 * @method DescribeSQLDiagnosis describeSQLDiagnosis(array $options = [])
 * @method EvaluateFailOverSwitch evaluateFailOverSwitch(array $options = [])
 * @method DescribeCollationTimeZones describeCollationTimeZones(array $options = [])
 * @method DescribeDBInstanceProxyConfiguration describeDBInstanceProxyConfiguration(array $options = [])
 * @method ModifyDBInstanceMonitor modifyDBInstanceMonitor(array $options = [])
 * @method ModifyReplicaRecoveryMode modifyReplicaRecoveryMode(array $options = [])
 * @method ModifyDBInstanceOwner modifyDBInstanceOwner(array $options = [])
 * @method RequestServiceOfCloudDBA requestServiceOfCloudDBA(array $options = [])
 * @method QueryPrice queryPrice(array $options = [])
 * @method DescribeActiveOperationTaskType describeActiveOperationTaskType(array $options = [])
 * @method ModifyParameter modifyParameter(array $options = [])
 * @method DescribeSlowLogs describeSlowLogs(array $options = [])
 * @method DescribeSQLCollectorPolicy describeSQLCollectorPolicy(array $options = [])
 * @method CheckInstanceExsit checkInstanceExsit(array $options = [])
 * @method ImportDataForSQLServer importDataForSQLServer(array $options = [])
 * @method CreateDBInstanceReplica createDBInstanceReplica(array $options = [])
 * @method CheckDBInstances checkDBInstances(array $options = [])
 * @method ModifyDBInstanceTDE modifyDBInstanceTDE(array $options = [])
 * @method ImportDatabaseBetweenInstances importDatabaseBetweenInstances(array $options = [])
 * @method DescribeDynamicVerificationList describeDynamicVerificationList(array $options = [])
 * @method DescribeSQLLogRecordsList describeSQLLogRecordsList(array $options = [])
 * @method DescribeSqlLogTimeDistribution describeSqlLogTimeDistribution(array $options = [])
 * @method DecribeSqlLogDumpStatus decribeSqlLogDumpStatus(array $options = [])
 * @method UpgradeDBInstanceKernelVersion upgradeDBInstanceKernelVersion(array $options = [])
 * @method CopyDatabaseBetweenInstances copyDatabaseBetweenInstances(array $options = [])
 * @method ModifyMySQLDBInstanceDelay modifyMySQLDBInstanceDelay(array $options = [])
 * @method CreateOpenSearchDBInstance createOpenSearchDBInstance(array $options = [])
 * @method DescribeTemplatesSqlType describeTemplatesSqlType(array $options = [])
 * @method DescribeCustinsKernelReleaseNotes describeCustinsKernelReleaseNotes(array $options = [])
 * @method MigrateSecurityIPMode migrateSecurityIPMode(array $options = [])
 * @method StartSqlLogTrail startSqlLogTrail(array $options = [])
 * @method DescribeSqlLogDumpStatus describeSqlLogDumpStatus(array $options = [])
 * @method CreateSQLDiagnosis createSQLDiagnosis(array $options = [])
 * @method ModifyInstanceAutoRenewAttribute modifyInstanceAutoRenewAttribute(array $options = [])
 * @method CheckInstanceExist checkInstanceExist(array $options = [])
 * @method QueryOssBuckets queryOssBuckets(array $options = [])
 * @method DescribeActiveOperationTask describeActiveOperationTask(array $options = [])
 * @method DegradeDBInstanceSpec degradeDBInstanceSpec(array $options = [])
 * @method CheckSqlLogHistoryEnable checkSqlLogHistoryEnable(array $options = [])
 * @method DescribeParameterTemplates describeParameterTemplates(array $options = [])
 * @method SwitchOver switchOver(array $options = [])
 * @method CreateOnlineDatabaseTask createOnlineDatabaseTask(array $options = [])
 * @method PreCheckBeforeImportData preCheckBeforeImportData(array $options = [])
 * @method DescribeDBInstanceInfo describeDBInstanceInfo(array $options = [])
 * @method EvaluateFailover evaluateFailover(array $options = [])
 * @method DescribeActiveOperationTaskCount describeActiveOperationTaskCount(array $options = [])
 * @method AllocateCloudInstanceIp allocateCloudInstanceIp(array $options = [])
 * @method DescribeActiveOperationTaskRegion describeActiveOperationTaskRegion(array $options = [])
 * @method ResetAdminAccountPassword resetAdminAccountPassword(array $options = [])
 * @method DescribeOssDownloads describeOssDownloads(array $options = [])
 * @method DescribeSQLServerUpgradeVersions describeSQLServerUpgradeVersions(array $options = [])
 * @method DescribeStrategy describeStrategy(array $options = [])
 * @method DescribeSqlTemplatesConsumeAndScanRows describeSqlTemplatesConsumeAndScanRows(array $options = [])
 * @method DescribeCloudDBAService describeCloudDBAService(array $options = [])
 * @method ModifySQLCollectorRetention modifySQLCollectorRetention(array $options = [])
 * @method DescribeDBInstanceNetwork describeDBInstanceNetwork(array $options = [])
 * @method ModifyReadonlyInstanceDelayReplicationTime modifyReadonlyInstanceDelayReplicationTime(array $options = [])
 * @method DescribeReadDBInstanceDelay describeReadDBInstanceDelay(array $options = [])
 * @method DescribeInstanceLevelList describeInstanceLevelList(array $options = [])
 * @method DescribeReplicas describeReplicas(array $options = [])
 * @method DescribeReplicaConflictInfo describeReplicaConflictInfo(array $options = [])
 * @method CreateOrderForDegrade createOrderForDegrade(array $options = [])
 * @method DescribeDBInstanceEncryptionKey describeDBInstanceEncryptionKey(array $options = [])
 * @method DescribeSqlLogTemplatesList describeSqlLogTemplatesList(array $options = [])
 * @method StartSqlLogDump startSqlLogDump(array $options = [])
 * @method ModifyReplicaRecoverMode modifyReplicaRecoverMode(array $options = [])
 * @method ModifyActiveOperationTask modifyActiveOperationTask(array $options = [])
 * @method DeleteFCTrigger deleteFCTrigger(array $options = [])
 * @method ModifyParameterGroup modifyParameterGroup(array $options = [])
 * @method DescribeSQLLogReports describeSQLLogReports(array $options = [])
 * @method ModifyOpenSearchDBInstance modifyOpenSearchDBInstance(array $options = [])
 * @method CreateFCTrigger createFCTrigger(array $options = [])
 * @method CreateOrderForRebuild createOrderForRebuild(array $options = [])
 * @method AllocateInstancePrivateConnection allocateInstancePrivateConnection(array $options = [])
 * @method DestroyDBInstance destroyDBInstance(array $options = [])
 * @method DisableSqlLogDistribution disableSqlLogDistribution(array $options = [])
 * @method DescribeInstanceKeywords describeInstanceKeywords(array $options = [])
 * @method DescribeCloudDbExpertService describeCloudDbExpertService(array $options = [])
 * @method DescribeSyncAccounts describeSyncAccounts(array $options = [])
 * @method DescribeOssDownloadsForSQLServer describeOssDownloadsForSQLServer(array $options = [])
 * @method DescribeParameterGroups describeParameterGroups(array $options = [])
 * @method DescribeServiceOfCloudDBA describeServiceOfCloudDBA(array $options = [])
 * @method SwitchDBInstanceVpc switchDBInstanceVpc(array $options = [])
 * @method Failover failover(array $options = [])
 * @method QueryPriceForRefund queryPriceForRefund(array $options = [])
 * @method DescribeImportsForSQLServer describeImportsForSQLServer(array $options = [])
 * @method ModifyDBInstanceDelayedReplicationTime modifyDBInstanceDelayedReplicationTime(array $options = [])
 * @method DescribeDBInstanceExtendAttribute describeDBInstanceExtendAttribute(array $options = [])
 * @method DescribeBackupsForSecurity describeBackupsForSecurity(array $options = [])
 * @method DescribeTemplatesList describeTemplatesList(array $options = [])
 * @method CreateAdminAccount createAdminAccount(array $options = [])
 * @method RestoreTable restoreTable(array $options = [])
 * @method DescribeSqlLogTemplatesTimeDistribution describeSqlLogTemplatesTimeDistribution(array $options = [])
 * @method DescribeAvailableResource describeAvailableResource(array $options = [])
 * @method CheckCloudResourceAuthorized checkCloudResourceAuthorized(array $options = [])
 * @method DescribeOpenSearchDBInstance describeOpenSearchDBInstance(array $options = [])
 * @method DeleteOpenSearchDBInstance deleteOpenSearchDBInstance(array $options = [])
 * @method DescribeSecurityGroupConfiguration describeSecurityGroupConfiguration(array $options = [])
 * @method CreateDiagnosticReport createDiagnosticReport(array $options = [])
 * @method DescribeProxyFunctionSupport describeProxyFunctionSupport(array $options = [])
 * @method StartSqlLogDetailArchive startSqlLogDetailArchive(array $options = [])
 * @method DescribeReplicaUsage describeReplicaUsage(array $options = [])
 * @method DescribeMigrateTasksForSQLServer describeMigrateTasksForSQLServer(array $options = [])
 * @method CreateOrderForTempUpgrade createOrderForTempUpgrade(array $options = [])
 * @method DescribeSyncAccountForInner describeSyncAccountForInner(array $options = [])
 * @method MigrateToOtherRegion migrateToOtherRegion(array $options = [])
 * @method DescribeSQLLogRecords describeSQLLogRecords(array $options = [])
 * @method CreateStaticVerification createStaticVerification(array $options = [])
 * @method RevokeAccountPrivilege revokeAccountPrivilege(array $options = [])
 * @method CloneParameterGroup cloneParameterGroup(array $options = [])
 * @method ModifyReplicaRelation modifyReplicaRelation(array $options = [])
 * @method DescribeDBInstanceSwitchLog describeDBInstanceSwitchLog(array $options = [])
 * @method DescribeDBInstanceNetInfoForChannel describeDBInstanceNetInfoForChannel(array $options = [])
 * @method EnableSqlLogDistribution enableSqlLogDistribution(array $options = [])
 * @method AllocateInstanceVpcNetworkType allocateInstanceVpcNetworkType(array $options = [])
 * @method EvaluateResource evaluateResource(array $options = [])
 * @method RequestServiceOfCloudDBExpert requestServiceOfCloudDBExpert(array $options = [])
 * @method ModifyReplicaDynamicMode modifyReplicaDynamicMode(array $options = [])
 * @method CreateTempDBInstanceForChannel createTempDBInstanceForChannel(array $options = [])
 * @method DescribeUserEncryptionKeyList describeUserEncryptionKeyList(array $options = [])
 * @method ModifyDynamicMode modifyDynamicMode(array $options = [])
 * @method QueryPriceMulti queryPriceMulti(array $options = [])
 * @method DescribeParameterGroup describeParameterGroup(array $options = [])
 * @method DescribeDBInstanceUser describeDBInstanceUser(array $options = [])
 * @method DescribeDBInstanceNetworkDetail describeDBInstanceNetworkDetail(array $options = [])
 * @method DescribeSQLLogReportList describeSQLLogReportList(array $options = [])
 * @method DeleteCloudInstanceIp deleteCloudInstanceIp(array $options = [])
 * @method DescribeMetaList describeMetaList(array $options = [])
 * @method CreateOrder createOrder(array $options = [])
 * @method DescribeDBInstances describeDBInstances(array $options = [])
 * @method CreateMulOrderForBuy createMulOrderForBuy(array $options = [])
 * @method DescribeDBInstancesWithCloudResource describeDBInstancesWithCloudResource(array $options = [])
 * @method CreateParameterGroup createParameterGroup(array $options = [])
 * @method DescribeSqlLogInstances describeSqlLogInstances(array $options = [])
 * @method RecoveryDBInstance recoveryDBInstance(array $options = [])
 * @method DescribeRdsVpcs describeRdsVpcs(array $options = [])
 * @method DescribeRdsVSwitchs describeRdsVSwitchs(array $options = [])
 * @method ModifyDBInstanceDelayReplicationTime modifyDBInstanceDelayReplicationTime(array $options = [])
 * @method ModifyCollationTimeZone modifyCollationTimeZone(array $options = [])
 * @method DescribeArchiveSQLLogFromKepler describeArchiveSQLLogFromKepler(array $options = [])
 * @method DescribeTemplatesConsumeAndScanRows describeTemplatesConsumeAndScanRows(array $options = [])
 * @method ModifyFCTrigger modifyFCTrigger(array $options = [])
 * @method DescribeMigrateCountInfo describeMigrateCountInfo(array $options = [])
 * @method DeleteParameterGroup deleteParameterGroup(array $options = [])
 * @method DescribeFCTrigger describeFCTrigger(array $options = [])
 * @method AllocateClassicNetworkType allocateClassicNetworkType(array $options = [])
 * @method DescribeSQLCollectorRetention describeSQLCollectorRetention(array $options = [])
 * @method ModifyDBInstanceChargeTypeForJuShiTa modifyDBInstanceChargeTypeForJuShiTa(array $options = [])
 * @method ModifyReplicaFilterMode modifyReplicaFilterMode(array $options = [])
 * @method DescribeInstanceVpcMigrateInfo describeInstanceVpcMigrateInfo(array $options = [])
 * @method CompensateInstanceForChannel compensateInstanceForChannel(array $options = [])
 * @method DescribeBackupDatabase describeBackupDatabase(array $options = [])
 * @method ModifyDBInstanceProxyConfiguration modifyDBInstanceProxyConfiguration(array $options = [])
 * @method DescribeAvailableInstanceClass describeAvailableInstanceClass(array $options = [])
 */
class RdsApiResolver
{
    use ApiResolverTrait;
}

class V20140815Rpc extends Rpc
{
    /** @var string */
    public $product = 'Rds';

    /** @var string */
    public $version = '2014-08-15';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'rds';
}

/**
 * @method string getConnectionMode()
 * @method $this withConnectionMode($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceStorage()
 * @method $this withDBInstanceStorage($value)
 * @method string getSystemDBCharset()
 * @method $this withSystemDBCharset($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getDBInstanceDescription()
 * @method $this withDBInstanceDescription($value)
 * @method string getDBInstanceStorageType()
 * @method $this withDBInstanceStorageType($value)
 * @method string getBusinessInfo()
 * @method $this withBusinessInfo($value)
 * @method string getDBInstanceNetType()
 * @method $this withDBInstanceNetType($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getUsedTime()
 * @method $this withUsedTime($value)
 * @method string getDBInstanceClass()
 * @method $this withDBInstanceClass($value)
 * @method string getSecurityIPList()
 * @method $this withSecurityIPList($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getPrivateIpAddress()
 * @method $this withPrivateIpAddress($value)
 * @method string getVPCId()
 * @method $this withVPCId($value)
 * @method string getTunnelId()
 * @method $this withTunnelId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 * @method string getInstanceNetworkType()
 * @method $this withInstanceNetworkType($value)
 */
class CreateDBInstance extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getProxyId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class StartDBInstanceDiagnose extends V20140815Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceStorage()
 * @method $this withDBInstanceStorage($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getDBInstanceDescription()
 * @method $this withDBInstanceDescription($value)
 * @method string getDBInstanceStorageType()
 * @method $this withDBInstanceStorageType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceClass()
 * @method $this withDBInstanceClass($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getPrivateIpAddress()
 * @method $this withPrivateIpAddress($value)
 * @method string getVPCId()
 * @method $this withVPCId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 * @method string getInstanceNetworkType()
 * @method $this withInstanceNetworkType($value)
 */
class CreateReadOnlyDBInstance extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getConnectionStringPrefix()
 * @method $this withConnectionStringPrefix($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPort()
 * @method $this withPort($value)
 */
class AllocateInstancePublicConnection extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getFlag()
 * @method $this withFlag($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceNetRWSplitType()
 * @method $this withDBInstanceNetRWSplitType($value)
 */
class DescribeDBInstanceNetInfo extends V20140815Rpc
{
}

/**
 * @method string getTag4value()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTag2key()
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getTag3key()
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getTag1value()
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getTag3value()
 * @method string getProxyId()
 * @method string getTag5key()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTag5value()
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getTag1key()
 * @method string getTag2value()
 * @method string getTag4key()
 */
class DescribeAbnormalDBInstances extends V20140815Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag4value($value)
    {
        $this->data['Tag4value'] = $value;
        $this->options['query']['Tag.4.value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag2key($value)
    {
        $this->data['Tag2key'] = $value;
        $this->options['query']['Tag.2.key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag3key($value)
    {
        $this->data['Tag3key'] = $value;
        $this->options['query']['Tag.3.key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag1value($value)
    {
        $this->data['Tag1value'] = $value;
        $this->options['query']['Tag.1.value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag3value($value)
    {
        $this->data['Tag3value'] = $value;
        $this->options['query']['Tag.3.value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag5key($value)
    {
        $this->data['Tag5key'] = $value;
        $this->options['query']['Tag.5.key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag5value($value)
    {
        $this->data['Tag5value'] = $value;
        $this->options['query']['Tag.5.value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag1key($value)
    {
        $this->data['Tag1key'] = $value;
        $this->options['query']['Tag.1.key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag2value($value)
    {
        $this->data['Tag2value'] = $value;
        $this->options['query']['Tag.2.value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag4key($value)
    {
        $this->data['Tag4key'] = $value;
        $this->options['query']['Tag.4.key'] = $value;

        return $this;
    }
}

/**
 * @method string getTag4value()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTag2key()
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getTag3key()
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getTag1value()
 * @method string getSortKey()
 * @method $this withSortKey($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getTag3value()
 * @method string getProxyId()
 * @method string getTag5key()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTag5value()
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getTag1key()
 * @method string getSortMethod()
 * @method $this withSortMethod($value)
 * @method string getTag2value()
 * @method string getTag4key()
 */
class DescribeDBInstancesByPerformance extends V20140815Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag4value($value)
    {
        $this->data['Tag4value'] = $value;
        $this->options['query']['Tag.4.value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag2key($value)
    {
        $this->data['Tag2key'] = $value;
        $this->options['query']['Tag.2.key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag3key($value)
    {
        $this->data['Tag3key'] = $value;
        $this->options['query']['Tag.3.key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag1value($value)
    {
        $this->data['Tag1value'] = $value;
        $this->options['query']['Tag.1.value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag3value($value)
    {
        $this->data['Tag3value'] = $value;
        $this->options['query']['Tag.3.value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag5key($value)
    {
        $this->data['Tag5key'] = $value;
        $this->options['query']['Tag.5.key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag5value($value)
    {
        $this->data['Tag5value'] = $value;
        $this->options['query']['Tag.5.value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag1key($value)
    {
        $this->data['Tag1key'] = $value;
        $this->options['query']['Tag.1.key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag2value($value)
    {
        $this->data['Tag2value'] = $value;
        $this->options['query']['Tag.2.value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag4key($value)
    {
        $this->data['Tag4key'] = $value;
        $this->options['query']['Tag.4.key'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getExpired()
 * @method $this withExpired($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getExpirePeriod()
 * @method $this withExpirePeriod($value)
 * @method string getProxyId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTags()
 * @method $this withTags($value)
 */
class DescribeDBInstancesByExpireTime extends V20140815Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBackupStrategy()
 * @method $this withBackupStrategy($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getBackupType()
 * @method $this withBackupType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBackupMethod()
 * @method $this withBackupMethod($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 */
class CreateBackup extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DeleteDBInstance extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getConnectionStringPrefix()
 * @method $this withConnectionStringPrefix($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCurrentConnectionString()
 * @method $this withCurrentConnectionString($value)
 * @method string getPort()
 * @method $this withPort($value)
 */
class ModifyDBInstanceConnectionString extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getExpired()
 * @method $this withExpired($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDBInstanceAttribute extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CheckAccountNameAvailable extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAccountType()
 * @method $this withAccountType($value)
 * @method string getAccountDescription()
 * @method $this withAccountDescription($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAccountPassword()
 * @method $this withAccountPassword($value)
 */
class CreateAccount extends V20140815Rpc
{
}

/**
 * @method string getBackupJobId()
 * @method $this withBackupJobId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getFlag()
 * @method $this withFlag($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBackupJobStatus()
 * @method $this withBackupJobStatus($value)
 * @method string getBackupMode()
 * @method $this withBackupMode($value)
 */
class DescribeBackupTasks extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTaskAction()
 * @method $this withTaskAction($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeTasks extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getGuardDBInstanceId()
 * @method $this withGuardDBInstanceId($value)
 */
class ReceiveDBInstance extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAccountDescription()
 * @method $this withAccountDescription($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyAccountDescription extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCurrentConnectionString()
 * @method $this withCurrentConnectionString($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class ReleaseInstancePublicConnection extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getConnectionStringPrefix()
 * @method $this withConnectionStringPrefix($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getConnectionStringType()
 * @method $this withConnectionStringType($value)
 * @method string getPort()
 * @method $this withPort($value)
 */
class SwitchDBInstanceNetType extends V20140815Rpc
{
}

/**
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeDiagnosticReportList extends V20140815Rpc
{
}

/**
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeSQLDiagnosisList extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAccountPassword()
 * @method $this withAccountPassword($value)
 */
class ResetAccountForPG extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 */
class BatchRevokeAccountPrivilege extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getBusinessInfo()
 * @method $this withBusinessInfo($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getAgentId()
 * @method $this withAgentId($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getResource()
 * @method $this withResource($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getUsedTime()
 * @method $this withUsedTime($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 */
class ModifyDBInstancePayType extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPolicyId()
 * @method $this withPolicyId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreatePolicyWithSpecifiedPolicy extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getRestoreTime()
 * @method $this withRestoreTime($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBackupId()
 * @method $this withBackupId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class RestoreDBInstance extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDampPoliciesByCid extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getConnectionString()
 * @method $this withConnectionString($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class ModifyDBInstanceSSL extends V20140815Rpc
{
}

/**
 * @method string getDBInstanceIPArrayName()
 * @method $this withDBInstanceIPArrayName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSecurityIps()
 * @method $this withSecurityIps($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getWhitelistNetworkType()
 * @method $this withWhitelistNetworkType($value)
 * @method string getSecurityIPType()
 * @method $this withSecurityIPType($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getModifyMode()
 * @method $this withModifyMode($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceIPArrayAttribute()
 * @method $this withDBInstanceIPArrayAttribute($value)
 */
class ModifySecurityIps extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyResourceGroup extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getEffectiveTime()
 * @method $this withEffectiveTime($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class UpgradeDBInstanceEngineVersion extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeSQLInjectionInfos extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class CreateUploadPathForSQLServer extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeModifyParameterLog extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeUserInfo extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getConnectionString()
 * @method $this withConnectionString($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class UpgradeDBInstanceNetWorkInfo extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DeleteDatabase extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getRestoreTime()
 * @method $this withRestoreTime($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBackupId()
 * @method $this withBackupId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateTempDBInstance extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAccountPassword()
 * @method $this withAccountPassword($value)
 */
class ResetAccountPassword extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getLockReason()
 * @method $this withLockReason($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class LockDBInstance extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceStorage()
 * @method $this withDBInstanceStorage($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getDBInstanceDescription()
 * @method $this withDBInstanceDescription($value)
 * @method string getDBInstanceNetType()
 * @method $this withDBInstanceNetType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceClass()
 * @method $this withDBInstanceClass($value)
 * @method string getSecurityIPList()
 * @method $this withSecurityIPList($value)
 */
class CreatePostpaidDBInstance extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAccountPrivilege()
 * @method $this withAccountPrivilege($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 */
class BatchGrantAccountPrivilege extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getProxyId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeInstanceAutoRenewalAttribute extends V20140815Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeFilesForSQLServer extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getBusinessInfo()
 * @method $this withBusinessInfo($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class RenewInstance extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeOperatorPermission extends V20140815Rpc
{
}

/**
 * @method string getTag4value()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTag2key()
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getTag3key()
 * @method string getTag1value()
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getTag3value()
 * @method string getProxyId()
 * @method string getTag5key()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTag5value()
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getTag1key()
 * @method string getTag2value()
 * @method string getTag4key()
 */
class AddTagsToResource extends V20140815Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag4value($value)
    {
        $this->data['Tag4value'] = $value;
        $this->options['query']['Tag.4.value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag2key($value)
    {
        $this->data['Tag2key'] = $value;
        $this->options['query']['Tag.2.key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag3key($value)
    {
        $this->data['Tag3key'] = $value;
        $this->options['query']['Tag.3.key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag1value($value)
    {
        $this->data['Tag1value'] = $value;
        $this->options['query']['Tag.1.value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag3value($value)
    {
        $this->data['Tag3value'] = $value;
        $this->options['query']['Tag.3.value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag5key($value)
    {
        $this->data['Tag5key'] = $value;
        $this->options['query']['Tag.5.key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag5value($value)
    {
        $this->data['Tag5value'] = $value;
        $this->options['query']['Tag.5.value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag1key($value)
    {
        $this->data['Tag1key'] = $value;
        $this->options['query']['Tag.1.key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag2value($value)
    {
        $this->data['Tag2value'] = $value;
        $this->options['query']['Tag.2.value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag4key($value)
    {
        $this->data['Tag4key'] = $value;
        $this->options['query']['Tag.4.key'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeRealtimeDiagnoses extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getDBDescription()
 * @method $this withDBDescription($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 */
class ModifyDBDescription extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeOptimizeAdviceOnMissPK extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DeleteAccount extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getBackupPolicyMode()
 * @method $this withBackupPolicyMode($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getCompressType()
 * @method $this withCompressType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeBackupPolicy extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class SwitchDBInstanceChargeType extends V20140815Rpc
{
}

/**
 * @method string getConnectionMode()
 * @method $this withConnectionMode($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class ModifyDBInstanceConnectionMode extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class ReleaseReadWriteSplittingConnection extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getImportId()
 * @method $this withImportId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class CancelImport extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceStorage()
 * @method $this withDBInstanceStorage($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getTargetAliBid()
 * @method $this withTargetAliBid($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getDBInstanceDescription()
 * @method $this withDBInstanceDescription($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBackupId()
 * @method $this withBackupId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceClass()
 * @method $this withDBInstanceClass($value)
 * @method string getTargetAliUid()
 * @method $this withTargetAliUid($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 */
class CloneDBInstanceForSecurity extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceStorage()
 * @method $this withDBInstanceStorage($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getEffectiveTime()
 * @method $this withEffectiveTime($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceClass()
 * @method $this withDBInstanceClass($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 */
class ModifyDBInstanceSpec extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStoragePeriod()
 * @method $this withStoragePeriod($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSQLCollectorStatus()
 * @method $this withSQLCollectorStatus($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifySQLCollectorPolicy extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTimeRules()
 * @method $this withTimeRules($value)
 * @method string getActionRules()
 * @method $this withActionRules($value)
 * @method string getHandlers()
 * @method $this withHandlers($value)
 * @method string getPolicyName()
 * @method $this withPolicyName($value)
 * @method string getSourceRules()
 * @method $this withSourceRules($value)
 */
class ModifyDampPolicy extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeOptimizeAdviceOnStorage extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeParameters extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class RevokeOperatorPermission extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getRestoreTime()
 * @method $this withRestoreTime($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBackupFile()
 * @method $this withBackupFile($value)
 * @method string getBackupId()
 * @method $this withBackupId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CheckRecoveryConditions extends V20140815Rpc
{
}

/**
 * @method string getDBInstanceStorage()
 * @method $this withDBInstanceStorage($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getUid()
 * @method string getBidLoginEmail()
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getUidLoginEmail()
 * @method string getDBInstanceNetType()
 * @method $this withDBInstanceNetType($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceRemarks()
 * @method $this withDBInstanceRemarks($value)
 * @method string getDBInstanceClass()
 * @method $this withDBInstanceClass($value)
 * @method string getBid()
 * @method string getCharacterSetName()
 * @method $this withCharacterSetName($value)
 */
class CreateDBInstanceforFirstPay extends V20140815Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUid($value)
    {
        $this->data['Uid'] = $value;
        $this->options['query']['uid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBidLoginEmail($value)
    {
        $this->data['BidLoginEmail'] = $value;
        $this->options['query']['bidLoginEmail'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUidLoginEmail($value)
    {
        $this->data['UidLoginEmail'] = $value;
        $this->options['query']['uidLoginEmail'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBid($value)
    {
        $this->data['Bid'] = $value;
        $this->options['query']['bid'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAccountPrivilege()
 * @method $this withAccountPrivilege($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 */
class GrantAccountPrivilege extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClassicExpiredDays()
 * @method $this withClassicExpiredDays($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getReadWriteSplittingPrivateIpAddress()
 * @method $this withReadWriteSplittingPrivateIpAddress($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getPrivateIpAddress()
 * @method $this withPrivateIpAddress($value)
 * @method string getRetainClassic()
 * @method $this withRetainClassic($value)
 * @method string getVPCId()
 * @method $this withVPCId($value)
 * @method string getInstanceNetworkType()
 * @method $this withInstanceNetworkType($value)
 * @method string getReadWriteSplittingClassicExpiredDays()
 * @method $this withReadWriteSplittingClassicExpiredDays($value)
 */
class ModifyDBInstanceNetworkType extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBusinessUnit()
 * @method $this withBusinessUnit($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class AddBuDBInstanceRelation extends V20140815Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeDatabaseLockDiagnosis extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class RestartDBInstance extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 */
class CheckDBNameAvailable extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getCommodityCode()
 * @method $this withCommodityCode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class DescribeCommodity extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeDBInstanceSSL extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSearchKey()
 * @method $this withSearchKey($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceUseType()
 * @method $this withDBInstanceUseType($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeOperationLogs extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceStorage()
 * @method $this withDBInstanceStorage($value)
 * @method string getNodeType()
 * @method $this withNodeType($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getEffectiveTime()
 * @method $this withEffectiveTime($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getDBInstanceStorageType()
 * @method $this withDBInstanceStorageType($value)
 * @method string getBusinessInfo()
 * @method $this withBusinessInfo($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getResource()
 * @method $this withResource($value)
 * @method string getCommodityCode()
 * @method $this withCommodityCode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getUsedTime()
 * @method $this withUsedTime($value)
 * @method string getDBInstanceClass()
 * @method $this withDBInstanceClass($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getPromotionCode()
 * @method $this withPromotionCode($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getTimeType()
 * @method $this withTimeType($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 * @method string getInstanceNetworkType()
 * @method $this withInstanceNetworkType($value)
 */
class CreateOrderForModify extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getFileName()
 * @method $this withFileName($value)
 */
class DescribeSQLLogFiles extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getProxyId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeInstanceAutoRenewAttribute extends V20140815Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeBinlogFiles extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 * @method string getSQLHASH()
 * @method $this withSQLHASH($value)
 */
class DescribeSlowLogRecords extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getConnectionString()
 * @method $this withConnectionString($value)
 * @method string getClassicExpiredDays()
 * @method $this withClassicExpiredDays($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyDBInstanceNetworkExpireTime extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeMigrateTasks extends V20140815Rpc
{
}

/**
 * @method string getPrivileges()
 * @method $this withPrivileges($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getExpiredTime()
 * @method $this withExpiredTime($value)
 */
class GrantOperatorPermission extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getMaintainTime()
 * @method $this withMaintainTime($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyDBInstanceMaintainTime extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeOptimizeAdviceOnMissIndex extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeRegions extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeRegionsForChannel extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getConnectionString()
 * @method $this withConnectionString($value)
 * @method string getClassicExpiredDays()
 * @method $this withClassicExpiredDays($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyDBInstanceNetExpireTime extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBackupId()
 * @method $this withBackupId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ExtractBackupFromOAS extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAccountPrivilege()
 * @method $this withAccountPrivilege($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getDBDescription()
 * @method $this withDBDescription($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAccountPassword()
 * @method $this withAccountPassword($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 * @method string getCharacterSetName()
 * @method $this withCharacterSetName($value)
 */
class CreateDatabaseForInner extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getReplicaId()
 * @method $this withReplicaId($value)
 * @method string getKey()
 * @method $this withKey($value)
 * @method string getDestinationDBInstanceId()
 * @method $this withDestinationDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSourceDBInstanceId()
 * @method $this withSourceDBInstanceId($value)
 */
class DescribeReplicaPerformance extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getIsOnlineDB()
 * @method $this withIsOnlineDB($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getTaskType()
 * @method $this withTaskType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOSSUrls()
 * @method $this withOSSUrls($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 */
class CreateMigrateTaskForSQLServer extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getReplicaId()
 * @method $this withReplicaId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ReleaseReplica extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getReplicaId()
 * @method $this withReplicaId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeReplicaInitializeProgress extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeOptimizeAdviceOnExcessIndex extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getConnectionStringPrefix()
 * @method $this withConnectionStringPrefix($value)
 * @method string getDistributionType()
 * @method $this withDistributionType($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getWeight()
 * @method $this withWeight($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getNetType()
 * @method $this withNetType($value)
 * @method string getMaxDelayTime()
 * @method $this withMaxDelayTime($value)
 */
class AllocateReadWriteSplittingConnection extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeAccounts extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 */
class ModifyInstanceAutoRenewalAttribute extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceStorage()
 * @method $this withDBInstanceStorage($value)
 * @method string getSystemDBCharset()
 * @method $this withSystemDBCharset($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getDBInstanceDescription()
 * @method $this withDBInstanceDescription($value)
 * @method string getDBInstanceStorageType()
 * @method $this withDBInstanceStorageType($value)
 * @method string getDBInstanceNetType()
 * @method $this withDBInstanceNetType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceClass()
 * @method $this withDBInstanceClass($value)
 * @method string getSecurityIPList()
 * @method $this withSecurityIPList($value)
 * @method string getAccountPassword()
 * @method $this withAccountPassword($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 * @method string getInstanceNetworkType()
 * @method $this withInstanceNetworkType($value)
 */
class CreateDBInstanceForChannel extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getReplicaId()
 * @method $this withReplicaId($value)
 * @method string getSourceInstanceId()
 * @method $this withSourceInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDestinationInstanceId()
 * @method $this withDestinationInstanceId($value)
 */
class DescribeStaticVerificationList extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class CalculateDBInstanceWeight extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class ModifySecurityGroupConfiguration extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLogicDBInstanceTopology extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getDBInstanceDescription()
 * @method $this withDBInstanceDescription($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyDBInstanceDescription extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBackupId()
 * @method $this withBackupId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DeleteBackup extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeSQLReports extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getImportId()
 * @method $this withImportId($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescibeImportsFromDatabase extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getDBDescription()
 * @method $this withDBDescription($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 * @method string getCharacterSetName()
 * @method $this withCharacterSetName($value)
 */
class CreateDatabase extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeErrorLogs extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getBusinessInfo()
 * @method $this withBusinessInfo($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getResource()
 * @method $this withResource($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPromotionCode()
 * @method $this withPromotionCode($value)
 */
class QueryPriceMultiForDefer extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 */
class DescribeCharacterSetName extends V20140815Rpc
{
}

/**
 * @method string getTag4value()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTag2key()
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getTag3key()
 * @method string getTag1value()
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getTag3value()
 * @method string getProxyId()
 * @method string getTag5key()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTag5value()
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getTag1key()
 * @method string getTag2value()
 * @method string getTag4key()
 */
class RemoveTagsFromResource extends V20140815Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag4value($value)
    {
        $this->data['Tag4value'] = $value;
        $this->options['query']['Tag.4.value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag2key($value)
    {
        $this->data['Tag2key'] = $value;
        $this->options['query']['Tag.2.key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag3key($value)
    {
        $this->data['Tag3key'] = $value;
        $this->options['query']['Tag.3.key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag1value($value)
    {
        $this->data['Tag1value'] = $value;
        $this->options['query']['Tag.1.value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag3value($value)
    {
        $this->data['Tag3value'] = $value;
        $this->options['query']['Tag.3.value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag5key($value)
    {
        $this->data['Tag5key'] = $value;
        $this->options['query']['Tag.5.key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag5value($value)
    {
        $this->data['Tag5value'] = $value;
        $this->options['query']['Tag.5.value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag1key($value)
    {
        $this->data['Tag1key'] = $value;
        $this->options['query']['Tag.1.key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag2value($value)
    {
        $this->data['Tag2value'] = $value;
        $this->options['query']['Tag.2.value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag4key($value)
    {
        $this->data['Tag4key'] = $value;
        $this->options['query']['Tag.4.key'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getDBStatus()
 * @method $this withDBStatus($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 */
class DescribeDatabases extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeResourceUsage extends V20140815Rpc
{
}

/**
 * @method string getReplicaDescription()
 * @method $this withReplicaDescription($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getReplicaId()
 * @method $this withReplicaId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyReplicaDescription extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceStorage()
 * @method $this withDBInstanceStorage($value)
 * @method string getCountryCode()
 * @method $this withCountryCode($value)
 * @method string getCurrencyCode()
 * @method $this withCurrencyCode($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBInstanceDescription()
 * @method $this withDBInstanceDescription($value)
 * @method string getBusinessInfo()
 * @method $this withBusinessInfo($value)
 * @method string getAgentId()
 * @method $this withAgentId($value)
 * @method string getResource()
 * @method $this withResource($value)
 * @method string getBackupId()
 * @method $this withBackupId($value)
 * @method string getCommodityCode()
 * @method $this withCommodityCode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceClass()
 * @method $this withDBInstanceClass($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getPrivateIpAddress()
 * @method $this withPrivateIpAddress($value)
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 * @method string getPromotionCode()
 * @method $this withPromotionCode($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getTimeType()
 * @method $this withTimeType($value)
 * @method string getInstanceNetworkType()
 * @method $this withInstanceNetworkType($value)
 * @method string getNodeType()
 * @method $this withNodeType($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getTableMeta()
 * @method $this withTableMeta($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getDBInstanceStorageType()
 * @method $this withDBInstanceStorageType($value)
 * @method string getRestoreTime()
 * @method $this withRestoreTime($value)
 * @method string getQuantity()
 * @method $this withQuantity($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getRestoreTable()
 * @method $this withRestoreTable($value)
 * @method string getUsedTime()
 * @method $this withUsedTime($value)
 * @method string getDBNames()
 * @method $this withDBNames($value)
 * @method string getInstanceUsedType()
 * @method $this withInstanceUsedType($value)
 * @method string getVPCId()
 * @method $this withVPCId($value)
 * @method string getCloneInstanceDefaultValue()
 * @method $this withCloneInstanceDefaultValue($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 */
class CreateOrderForClone extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getZoneIdSlave1()
 * @method $this withZoneIdSlave1($value)
 * @method string getZoneIdSlave2()
 * @method $this withZoneIdSlave2($value)
 * @method string getEffectiveTime()
 * @method $this withEffectiveTime($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getVPCId()
 * @method $this withVPCId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 */
class MigrateToOtherZone extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceStorage()
 * @method $this withDBInstanceStorage($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getQuantity()
 * @method $this withQuantity($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getCommodityCode()
 * @method $this withCommodityCode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getUsedTime()
 * @method $this withUsedTime($value)
 * @method string getDBInstanceClass()
 * @method $this withDBInstanceClass($value)
 * @method string getInstanceUsedType()
 * @method $this withInstanceUsedType($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getTimeType()
 * @method $this withTimeType($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class QueryPriceForBuy extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class DescribeVpcZoneNos extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTargetAliBid()
 * @method $this withTargetAliBid($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getBackupLocation()
 * @method $this withBackupLocation($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBackupId()
 * @method $this withBackupId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBackupStatus()
 * @method $this withBackupStatus($value)
 * @method string getTargetAliUid()
 * @method $this withTargetAliUid($value)
 * @method string getBackupMode()
 * @method $this withBackupMode($value)
 */
class DescribeBackupSetsForSecurity extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeDBInstanceHAConfig extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPolicyName()
 * @method $this withPolicyName($value)
 */
class DescribeDampPolicyByPolicyName extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPolicyName()
 * @method $this withPolicyName($value)
 */
class DeleteDampPolicy extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class ModifyDBInstanceECSSGRelation extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getCountryCode()
 * @method $this withCountryCode($value)
 * @method string getCurrencyCode()
 * @method $this withCurrencyCode($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getBusinessInfo()
 * @method $this withBusinessInfo($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getCommodityCode()
 * @method $this withCommodityCode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getUsedTime()
 * @method $this withUsedTime($value)
 * @method string getDBInstanceClass()
 * @method $this withDBInstanceClass($value)
 * @method string getPromotionCode()
 * @method $this withPromotionCode($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class QueryPriceForTempUpgrade extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getImportDataType()
 * @method $this withImportDataType($value)
 * @method string getSourceDatabaseDBNames()
 * @method $this withSourceDatabaseDBNames($value)
 * @method string getSourceDatabaseIp()
 * @method $this withSourceDatabaseIp($value)
 * @method string getSourceDatabaseUserName()
 * @method $this withSourceDatabaseUserName($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getIsLockTable()
 * @method $this withIsLockTable($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSourceDatabasePassword()
 * @method $this withSourceDatabasePassword($value)
 * @method string getSourceDatabasePort()
 * @method $this withSourceDatabasePort($value)
 */
class ImportDataFromDatabase extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeTaskInfo extends V20140815Rpc
{
}

/**
 * @method string getDomainMode()
 * @method $this withDomainMode($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getReplicaId()
 * @method $this withReplicaId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyGuardDomainMode extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getIsOnlineDB()
 * @method $this withIsOnlineDB($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getMigrateTaskId()
 * @method $this withMigrateTaskId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOssObjectPositions()
 * @method $this withOssObjectPositions($value)
 * @method string getOSSUrls()
 * @method $this withOSSUrls($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 * @method string getBackupMode()
 * @method $this withBackupMode($value)
 * @method string getCheckDBMode()
 * @method $this withCheckDBMode($value)
 */
class CreateMigrateTask extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getPreCheckId()
 * @method $this withPreCheckId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribePreCheckResults extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getBackupLocation()
 * @method $this withBackupLocation($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBackupId()
 * @method $this withBackupId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBackupStatus()
 * @method $this withBackupStatus($value)
 * @method string getBackupMode()
 * @method $this withBackupMode($value)
 */
class DescribeBackups extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getProxyId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTags()
 * @method $this withTags($value)
 */
class DescribeTags extends V20140815Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDbInstanceId()
 * @method $this withDbInstanceId($value)
 * @method string getHAMode()
 * @method $this withHAMode($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSyncMode()
 * @method $this withSyncMode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyDBInstanceHAConfig extends V20140815Rpc
{
}

/**
 * @method string getServiceRequestType()
 * @method $this withServiceRequestType($value)
 * @method string getServiceRequestParam()
 * @method $this withServiceRequestParam($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class LoginDBInstancefromCloudDBA extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getConnectionStringPrefix()
 * @method $this withConnectionStringPrefix($value)
 * @method string getDistributionType()
 * @method $this withDistributionType($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getWeight()
 * @method $this withWeight($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getMaxDelayTime()
 * @method $this withMaxDelayTime($value)
 */
class ModifyReadWriteSplittingConnection extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getConnectionString()
 * @method $this withConnectionString($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class UpgradeDBInstanceNetwork extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceStorage()
 * @method $this withDBInstanceStorage($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getQuantity()
 * @method $this withQuantity($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getCommodityCode()
 * @method $this withCommodityCode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getUsedTime()
 * @method $this withUsedTime($value)
 * @method string getDBInstanceClass()
 * @method $this withDBInstanceClass($value)
 * @method string getInstanceUsedType()
 * @method $this withInstanceUsedType($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getTimeType()
 * @method $this withTimeType($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class DescribePrice extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLogBackupFiles extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeSqlLogDetailArchiveStatus extends V20140815Rpc
{
}

/**
 * @method string getDomainMode()
 * @method $this withDomainMode($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getReplicaId()
 * @method $this withReplicaId($value)
 * @method string getPrimaryInstanceId()
 * @method $this withPrimaryInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getReplicaMode()
 * @method $this withReplicaMode($value)
 */
class ModifyReplicaMode extends V20140815Rpc
{
}

/**
 * @method string getDBInstanceIPArrayName()
 * @method $this withDBInstanceIPArrayName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSecurityIps()
 * @method $this withSecurityIps($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getWhitelistNetworkType()
 * @method $this withWhitelistNetworkType($value)
 * @method string getSecurityIPType()
 * @method $this withSecurityIPType($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getModifyMode()
 * @method $this withModifyMode($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceIPArrayAttribute()
 * @method $this withDBInstanceIPArrayAttribute($value)
 */
class ModifySecurityIpsForChannel extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class PurgeDBInstanceLog extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHostType()
 * @method $this withHostType($value)
 * @method string getSpecifyCount()
 * @method $this withSpecifyCount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceUsedType()
 * @method $this withInstanceUsedType($value)
 */
class DescribeRegionAvailability extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAccountPassword()
 * @method $this withAccountPassword($value)
 */
class ResetAccount extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getKey()
 * @method $this withKey($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDBInstancePerformance extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getBusinessInfo()
 * @method $this withBusinessInfo($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getResource()
 * @method $this withResource($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateMulOrderForDefer extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceStorage()
 * @method $this withDBInstanceStorage($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBInstanceDescription()
 * @method $this withDBInstanceDescription($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getRestoreTime()
 * @method $this withRestoreTime($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBackupId()
 * @method $this withBackupId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getUsedTime()
 * @method $this withUsedTime($value)
 * @method string getDBInstanceClass()
 * @method $this withDBInstanceClass($value)
 * @method string getDbNames()
 * @method $this withDbNames($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getPrivateIpAddress()
 * @method $this withPrivateIpAddress($value)
 * @method string getVPCId()
 * @method $this withVPCId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 * @method string getInstanceNetworkType()
 * @method $this withInstanceNetworkType($value)
 */
class CloneDBInstance extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPolicyName()
 * @method $this withPolicyName($value)
 */
class DescribeDampPolicyByComment extends V20140815Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeResourceDiagnosis extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getImportId()
 * @method $this withImportId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class StopSyncing extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getQueryKeywords()
 * @method $this withQueryKeywords($value)
 * @method string getDatabase()
 * @method $this withDatabase($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getUser()
 * @method $this withUser($value)
 */
class StartArchiveSQLLog extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeDBInstanceMonitor extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getProxyId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDBInstanceByTags extends V20140815Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeDBInstanceECSSGRelation extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSpecifyCount()
 * @method $this withSpecifyCount($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getDBInstanceUseType()
 * @method $this withDBInstanceUseType($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceClass()
 * @method $this withDBInstanceClass($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 */
class CheckResource extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class RenewDBInstance extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceStorage()
 * @method $this withDBInstanceStorage($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getRenewChange()
 * @method $this withRenewChange($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getBusinessInfo()
 * @method $this withBusinessInfo($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getResource()
 * @method $this withResource($value)
 * @method string getCommodityCode()
 * @method $this withCommodityCode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getUsedTime()
 * @method $this withUsedTime($value)
 * @method string getDBInstanceClass()
 * @method $this withDBInstanceClass($value)
 * @method string getTimeType()
 * @method $this withTimeType($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 */
class CreateOrderForDefer extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceStorage()
 * @method $this withDBInstanceStorage($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceClass()
 * @method $this withDBInstanceClass($value)
 */
class ModifyPostpaidDBInstanceSpec extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getReplicaId()
 * @method $this withReplicaId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeVerificationList extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getWhitelistNetworkType()
 * @method $this withWhitelistNetworkType($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeDBInstanceIPArrayList extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeOptimizeAdviceOnBigTable extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAccountType()
 * @method $this withAccountType($value)
 * @method string getAccountDescription()
 * @method $this withAccountDescription($value)
 * @method string getAccountPrivilege()
 * @method $this withAccountPrivilege($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAccountPassword()
 * @method $this withAccountPassword($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 */
class CreateAccountForInner extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getTimeRules()
 * @method $this withTimeRules($value)
 * @method string getActionRules()
 * @method $this withActionRules($value)
 * @method string getHandlers()
 * @method $this withHandlers($value)
 * @method string getPolicyName()
 * @method $this withPolicyName($value)
 * @method string getSourceRules()
 * @method $this withSourceRules($value)
 */
class CreateDampPolicy extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class ModifyCommodity extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeOptimizeAdviceByDBA extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getBusinessInfo()
 * @method $this withBusinessInfo($value)
 * @method string getQuantity()
 * @method $this withQuantity($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getCommodityCode()
 * @method $this withCommodityCode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getUsedTime()
 * @method $this withUsedTime($value)
 * @method string getDBInstanceClass()
 * @method $this withDBInstanceClass($value)
 * @method string getPromotionCode()
 * @method $this withPromotionCode($value)
 * @method string getTimeType()
 * @method $this withTimeType($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class DescribeRenewalPrice extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class SwitchGuardToMasterInstance extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeDBInstancesAsCsv extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceStorage()
 * @method $this withDBInstanceStorage($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getDBInstanceDescription()
 * @method $this withDBInstanceDescription($value)
 * @method string getDBInstanceNetType()
 * @method $this withDBInstanceNetType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceClass()
 * @method $this withDBInstanceClass($value)
 * @method string getSecurityIPList()
 * @method $this withSecurityIPList($value)
 */
class CreatePostpaidDBInstanceForChannel extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeSQLCollectorVersion extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeDBInstanceTDE extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class UnlockDBInstance extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CopyDatabase extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getEffectiveTime()
 * @method $this withEffectiveTime($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getForce()
 * @method $this withForce($value)
 * @method string getNodeId()
 * @method $this withNodeId($value)
 * @method string getOperation()
 * @method $this withOperation($value)
 */
class SwitchDBInstanceHA extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getReplicaId()
 * @method $this withReplicaId($value)
 * @method string getVerificationMode()
 * @method $this withVerificationMode($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyReplicaVerificationMode extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getSortKey()
 * @method $this withSortKey($value)
 * @method string getTemplateHash()
 * @method $this withTemplateHash($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageNumbers()
 * @method $this withPageNumbers($value)
 * @method string getPagingId()
 * @method $this withPagingId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getMaxRecordsPerPage()
 * @method $this withMaxRecordsPerPage($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSortMethod()
 * @method $this withSortMethod($value)
 */
class DescribeTemplateSqlDetail extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getLocalLogRetentionHours()
 * @method $this withLocalLogRetentionHours($value)
 * @method string getLogBackupFrequency()
 * @method $this withLogBackupFrequency($value)
 * @method string getBackupLog()
 * @method $this withBackupLog($value)
 * @method string getDuplicationContent()
 * @method $this withDuplicationContent($value)
 * @method string getHighSpaceUsageProtection()
 * @method $this withHighSpaceUsageProtection($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getEnableBackupLog()
 * @method $this withEnableBackupLog($value)
 * @method string getBackupPolicyMode()
 * @method $this withBackupPolicyMode($value)
 * @method string getPreferredBackupPeriod()
 * @method $this withPreferredBackupPeriod($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getCompressType()
 * @method $this withCompressType($value)
 * @method string getLocalLogRetentionSpace()
 * @method $this withLocalLogRetentionSpace($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDuplication()
 * @method $this withDuplication($value)
 * @method string getPreferredBackupTime()
 * @method $this withPreferredBackupTime($value)
 * @method string getBackupRetentionPeriod()
 * @method $this withBackupRetentionPeriod($value)
 * @method string getDuplicationLocation()
 * @method $this withDuplicationLocation($value)
 * @method string getLogBackupRetentionPeriod()
 * @method $this withLogBackupRetentionPeriod($value)
 */
class ModifyBackupPolicy extends V20140815Rpc
{
}

/**
 * @method string getSQLDiagId()
 * @method $this withSQLDiagId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeSQLDiagnosis extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getReplicaId()
 * @method $this withReplicaId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class EvaluateFailOverSwitch extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeCollationTimeZones extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeDBInstanceProxyConfiguration extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class ModifyDBInstanceMonitor extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getRecoveryMode()
 * @method $this withRecoveryMode($value)
 * @method string getReplicaId()
 * @method $this withReplicaId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyReplicaRecoveryMode extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNewUID()
 * @method $this withNewUID($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class ModifyDBInstanceOwner extends V20140815Rpc
{
}

/**
 * @method string getServiceRequestType()
 * @method $this withServiceRequestType($value)
 * @method string getServiceRequestParam()
 * @method $this withServiceRequestParam($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class RequestServiceOfCloudDBA extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceStorage()
 * @method $this withDBInstanceStorage($value)
 * @method string getSystemDBCharset()
 * @method $this withSystemDBCharset($value)
 * @method string getCountryCode()
 * @method $this withCountryCode($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getCurrencyCode()
 * @method $this withCurrencyCode($value)
 * @method string getDBInstanceDescription()
 * @method $this withDBInstanceDescription($value)
 * @method string getBusinessInfo()
 * @method $this withBusinessInfo($value)
 * @method string getResource()
 * @method $this withResource($value)
 * @method string getCommodityCode()
 * @method $this withCommodityCode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceClass()
 * @method $this withDBInstanceClass($value)
 * @method string getSecurityIPList()
 * @method $this withSecurityIPList($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getPrivateIpAddress()
 * @method $this withPrivateIpAddress($value)
 * @method string getPromotionCode()
 * @method $this withPromotionCode($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getTimeType()
 * @method $this withTimeType($value)
 * @method string getInstanceNetworkType()
 * @method $this withInstanceNetworkType($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 * @method string getConnectionMode()
 * @method $this withConnectionMode($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getDBInstanceStorageType()
 * @method $this withDBInstanceStorageType($value)
 * @method string getDBInstanceNetType()
 * @method $this withDBInstanceNetType($value)
 * @method string getQuantity()
 * @method $this withQuantity($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOrderParamOut()
 * @method $this withOrderParamOut($value)
 * @method string getUsedTime()
 * @method $this withUsedTime($value)
 * @method string getInstanceUsedType()
 * @method $this withInstanceUsedType($value)
 * @method string getVPCId()
 * @method $this withVPCId($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 */
class QueryPrice extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getIsHistory()
 * @method $this withIsHistory($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeActiveOperationTaskType extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getForcerestart()
 * @method $this withForcerestart($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getParameters()
 * @method $this withParameters($value)
 */
class ModifyParameter extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSortKey()
 * @method $this withSortKey($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 */
class DescribeSlowLogs extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeSQLCollectorPolicy extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class CheckInstanceExsit extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getFileName()
 * @method $this withFileName($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class ImportDataForSQLServer extends V20140815Rpc
{
}

/**
 * @method string getConnectionMode()
 * @method $this withConnectionMode($value)
 * @method string getDomainMode()
 * @method $this withDomainMode($value)
 * @method string getReplicaDescription()
 * @method $this withReplicaDescription($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceStorage()
 * @method $this withDBInstanceStorage($value)
 * @method string getSystemDBCharset()
 * @method $this withSystemDBCharset($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getDBInstanceDescription()
 * @method $this withDBInstanceDescription($value)
 * @method string getDBInstanceNetType()
 * @method $this withDBInstanceNetType($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getUsedTime()
 * @method $this withUsedTime($value)
 * @method string getDBInstanceClass()
 * @method $this withDBInstanceClass($value)
 * @method string getSecurityIPList()
 * @method $this withSecurityIPList($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getPrivateIpAddress()
 * @method $this withPrivateIpAddress($value)
 * @method string getSourceDBInstanceId()
 * @method $this withSourceDBInstanceId($value)
 * @method string getReplicaMode()
 * @method $this withReplicaMode($value)
 * @method string getVPCId()
 * @method $this withVPCId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 * @method string getInstanceNetworkType()
 * @method $this withInstanceNetworkType($value)
 */
class CreateDBInstanceReplica extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class CheckDBInstances extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEncryptionKey()
 * @method $this withEncryptionKey($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 * @method string getRoleArn()
 * @method $this withRoleArn($value)
 * @method string getTDEStatus()
 * @method $this withTDEStatus($value)
 */
class ModifyDBInstanceTDE extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInfo()
 * @method $this withDBInfo($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSourceDBInstanceId()
 * @method $this withSourceDBInstanceId($value)
 */
class ImportDatabaseBetweenInstances extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getReplicaId()
 * @method $this withReplicaId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDynamicVerificationList extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getMinScanRows()
 * @method $this withMinScanRows($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getHostAddress()
 * @method $this withHostAddress($value)
 * @method string getSortKey()
 * @method $this withSortKey($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageNumbers()
 * @method $this withPageNumbers($value)
 * @method string getPagingID()
 * @method $this withPagingID($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 * @method string getSqlType()
 * @method $this withSqlType($value)
 * @method string getMinConsume()
 * @method $this withMinConsume($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getMaxRecordsPerPage()
 * @method $this withMaxRecordsPerPage($value)
 * @method string getQueryKeyword()
 * @method $this withQueryKeyword($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMaxConsume()
 * @method $this withMaxConsume($value)
 * @method string getThreadID()
 * @method $this withThreadID($value)
 * @method string getLogicalOperator()
 * @method $this withLogicalOperator($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 * @method string getSortMethod()
 * @method $this withSortMethod($value)
 * @method string getMaxScanRows()
 * @method $this withMaxScanRows($value)
 */
class DescribeSQLLogRecordsList extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTimeLevel()
 * @method $this withTimeLevel($value)
 */
class DescribeSqlLogTimeDistribution extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DecribeSqlLogDumpStatus extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getUpgradeTime()
 * @method $this withUpgradeTime($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getSwitchTime()
 * @method $this withSwitchTime($value)
 */
class UpgradeDBInstanceKernelVersion extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getRestoreTime()
 * @method $this withRestoreTime($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBackupId()
 * @method $this withBackupId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSyncUserPrivilege()
 * @method $this withSyncUserPrivilege($value)
 * @method string getDbNames()
 * @method $this withDbNames($value)
 * @method string getTargetDBInstanceId()
 * @method $this withTargetDBInstanceId($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 */
class CopyDatabaseBetweenInstances extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSqlDelay()
 * @method $this withSqlDelay($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class ModifyMySQLDBInstanceDelay extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getLcuQuota()
 * @method $this withLcuQuota($value)
 * @method string getSearchType()
 * @method $this withSearchType($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getStorageQuota()
 * @method $this withStorageQuota($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getSpecQuota()
 * @method $this withSpecQuota($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateOpenSearchDBInstance extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getMinScanRows()
 * @method $this withMinScanRows($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getSortKey()
 * @method $this withSortKey($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPagingId()
 * @method $this withPagingId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getMinConsume()
 * @method $this withMinConsume($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMaxConsume()
 * @method $this withMaxConsume($value)
 * @method string getSortMethod()
 * @method $this withSortMethod($value)
 * @method string getMaxScanRows()
 * @method $this withMaxScanRows($value)
 */
class DescribeTemplatesSqlType extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeCustinsKernelReleaseNotes extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class MigrateSecurityIPMode extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class StartSqlLogTrail extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeSqlLogDumpStatus extends V20140815Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class CreateSQLDiagnosis extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 */
class ModifyInstanceAutoRenewAttribute extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class CheckInstanceExist extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QueryOssBuckets extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getIsHistory()
 * @method $this withIsHistory($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTaskType()
 * @method $this withTaskType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class DescribeActiveOperationTask extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceStorage()
 * @method $this withDBInstanceStorage($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceClass()
 * @method $this withDBInstanceClass($value)
 */
class DegradeDBInstanceSpec extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CheckSqlLogHistoryEnable extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 */
class DescribeParameterTemplates extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getReplicaId()
 * @method $this withReplicaId($value)
 * @method string getPrimaryInstanceId()
 * @method $this withPrimaryInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class SwitchOver extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getMigrateTaskId()
 * @method $this withMigrateTaskId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 * @method string getCheckDBMode()
 * @method $this withCheckDBMode($value)
 */
class CreateOnlineDatabaseTask extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getImportDataType()
 * @method $this withImportDataType($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSourceDatabaseDBNames()
 * @method $this withSourceDatabaseDBNames($value)
 * @method string getSourceDatabaseIp()
 * @method $this withSourceDatabaseIp($value)
 * @method string getSourceDatabaseUserName()
 * @method $this withSourceDatabaseUserName($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSourceDatabasePassword()
 * @method $this withSourceDatabasePassword($value)
 * @method string getSourceDatabasePort()
 * @method $this withSourceDatabasePort($value)
 */
class PreCheckBeforeImportData extends V20140815Rpc
{
}

/**
 * @method string getAddressPort()
 * @method $this withAddressPort($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAddressIP()
 * @method $this withAddressIP($value)
 */
class DescribeDBInstanceInfo extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getReplicaId()
 * @method $this withReplicaId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class EvaluateFailover extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeActiveOperationTaskCount extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class AllocateCloudInstanceIp extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getIsHistory()
 * @method $this withIsHistory($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getTaskType()
 * @method $this withTaskType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeActiveOperationTaskRegion extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAccountPassword()
 * @method $this withAccountPassword($value)
 */
class ResetAdminAccountPassword extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getMigrateTaskId()
 * @method $this withMigrateTaskId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeOssDownloads extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeSQLServerUpgradeVersions extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getReplicaId()
 * @method $this withReplicaId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeStrategy extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeSqlTemplatesConsumeAndScanRows extends V20140815Rpc
{
}

/**
 * @method string getServiceRequestType()
 * @method $this withServiceRequestType($value)
 * @method string getServiceRequestParam()
 * @method $this withServiceRequestParam($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeCloudDBAService extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getConfigValue()
 * @method $this withConfigValue($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifySQLCollectorRetention extends V20140815Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeDBInstanceNetwork extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getReadSQLReplicationTime()
 * @method $this withReadSQLReplicationTime($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class ModifyReadonlyInstanceDelayReplicationTime extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getReadInstanceId()
 * @method $this withReadInstanceId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeReadDBInstanceDelay extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeInstanceLevelList extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getReplicaId()
 * @method $this withReplicaId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getAttachDbInstanceData()
 * @method $this withAttachDbInstanceData($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeReplicas extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getReplicaId()
 * @method $this withReplicaId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeReplicaConflictInfo extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceStorage()
 * @method $this withDBInstanceStorage($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEffectiveTime()
 * @method $this withEffectiveTime($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getBusinessInfo()
 * @method $this withBusinessInfo($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getResource()
 * @method $this withResource($value)
 * @method string getCommodityCode()
 * @method $this withCommodityCode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getUsedTime()
 * @method $this withUsedTime($value)
 * @method string getDBInstanceClass()
 * @method $this withDBInstanceClass($value)
 * @method string getPromotionCode()
 * @method $this withPromotionCode($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getTimeType()
 * @method $this withTimeType($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 */
class CreateOrderForDegrade extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDBInstanceEncryptionKey extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getSortKey()
 * @method $this withSortKey($value)
 * @method string getMinAvgScanRows()
 * @method $this withMinAvgScanRows($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageNumbers()
 * @method $this withPageNumbers($value)
 * @method string getPagingId()
 * @method $this withPagingId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getMaxAvgScanRows()
 * @method $this withMaxAvgScanRows($value)
 * @method string getSqlType()
 * @method $this withSqlType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getMinAvgConsume()
 * @method $this withMinAvgConsume($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getMaxRecordsPerPage()
 * @method $this withMaxRecordsPerPage($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMaxAvgConsume()
 * @method $this withMaxAvgConsume($value)
 * @method string getSortMethod()
 * @method $this withSortMethod($value)
 */
class DescribeSqlLogTemplatesList extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getConfigValue()
 * @method $this withConfigValue($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBucket()
 * @method $this withBucket($value)
 */
class StartSqlLogDump extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getReplicaId()
 * @method $this withReplicaId($value)
 * @method string getRecoverMode()
 * @method $this withRecoverMode($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyReplicaRecoverMode extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getSwitchTime()
 * @method $this withSwitchTime($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIds()
 * @method $this withIds($value)
 */
class ModifyActiveOperationTask extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTriggerId()
 * @method $this withTriggerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteFCTrigger extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getParameterGroupId()
 * @method $this withParameterGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getParameterGroupName()
 * @method $this withParameterGroupName($value)
 * @method string getParameters()
 * @method $this withParameters($value)
 * @method string getParameterGroupDesc()
 * @method $this withParameterGroupDesc($value)
 */
class ModifyParameterGroup extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeSQLLogReports extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getLcuQuota()
 * @method $this withLcuQuota($value)
 * @method string getSearchType()
 * @method $this withSearchType($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getStorageQuota()
 * @method $this withStorageQuota($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getSpecQuota()
 * @method $this withSpecQuota($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyOpenSearchDBInstance extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTriggerId()
 * @method $this withTriggerId($value)
 * @method array getSubscriptionObjects()
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getEventFormat()
 * @method $this withEventFormat($value)
 * @method string getRetry()
 * @method $this withRetry($value)
 * @method string getTriggerArn()
 * @method $this withTriggerArn($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getSourceArn()
 * @method $this withSourceArn($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getConcurrency()
 * @method $this withConcurrency($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getInvocationRoleArn()
 * @method $this withInvocationRoleArn($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getFunctionArn()
 * @method $this withFunctionArn($value)
 */
class CreateFCTrigger extends V20140815Rpc
{

    /**
     * @param array $subscriptionObjects
     *
     * @return $this
     */
    public function withSubscriptionObjects(array $subscriptionObjects)
    {
        $this->data['SubscriptionObjects'] = $subscriptionObjects;
        foreach ($subscriptionObjects as $i => $iValue) {
            $this->options['query']['SubscriptionObjects.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getDBInstanceDescription()
 * @method $this withDBInstanceDescription($value)
 * @method string getBusinessInfo()
 * @method $this withBusinessInfo($value)
 * @method string getAgentId()
 * @method $this withAgentId($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getResource()
 * @method $this withResource($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getCommodityCode()
 * @method $this withCommodityCode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getUsedTime()
 * @method $this withUsedTime($value)
 * @method string getDBInstanceClass()
 * @method $this withDBInstanceClass($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getRebuildInstanceFlag()
 * @method $this withRebuildInstanceFlag($value)
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 * @method string getPromotionCode()
 * @method $this withPromotionCode($value)
 * @method string getVPCId()
 * @method $this withVPCId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getTimeType()
 * @method $this withTimeType($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 * @method string getInstanceNetworkType()
 * @method $this withInstanceNetworkType($value)
 */
class CreateOrderForRebuild extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getConnectionStringPrefix()
 * @method $this withConnectionStringPrefix($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPort()
 * @method $this withPort($value)
 */
class AllocateInstancePrivateConnection extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DestroyDBInstance extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DisableSqlLogDistribution extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getKey()
 * @method $this withKey($value)
 */
class DescribeInstanceKeywords extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getServiceRequestType()
 * @method $this withServiceRequestType($value)
 * @method string getServiceRequestParam()
 * @method $this withServiceRequestParam($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeCloudDbExpertService extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeSyncAccounts extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getMigrateTaskId()
 * @method $this withMigrateTaskId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeOssDownloadsForSQLServer extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeParameterGroups extends V20140815Rpc
{
}

/**
 * @method string getServiceRequestType()
 * @method $this withServiceRequestType($value)
 * @method string getServiceRequestParam()
 * @method $this withServiceRequestParam($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeServiceOfCloudDBA extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getPrivateIpAddress()
 * @method $this withPrivateIpAddress($value)
 * @method string getVPCId()
 * @method $this withVPCId($value)
 */
class SwitchDBInstanceVpc extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getReplicaId()
 * @method $this withReplicaId($value)
 * @method string getPrimaryInstanceId()
 * @method $this withPrimaryInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class Failover extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getCountryCode()
 * @method $this withCountryCode($value)
 * @method string getCurrencyCode()
 * @method $this withCurrencyCode($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getBusinessInfo()
 * @method $this withBusinessInfo($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getCommodityCode()
 * @method $this withCommodityCode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPromotionCode()
 * @method $this withPromotionCode($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class QueryPriceForRefund extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getImportId()
 * @method $this withImportId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeImportsForSQLServer extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getReadSQLReplicationTime()
 * @method $this withReadSQLReplicationTime($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class ModifyDBInstanceDelayedReplicationTime extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeDBInstanceExtendAttribute extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTargetAliBid()
 * @method $this withTargetAliBid($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getBackupLocation()
 * @method $this withBackupLocation($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBackupId()
 * @method $this withBackupId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBackupStatus()
 * @method $this withBackupStatus($value)
 * @method string getTargetAliUid()
 * @method $this withTargetAliUid($value)
 * @method string getBackupMode()
 * @method $this withBackupMode($value)
 */
class DescribeBackupsForSecurity extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getSortKey()
 * @method $this withSortKey($value)
 * @method string getMinAvgScanRows()
 * @method $this withMinAvgScanRows($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageNumbers()
 * @method $this withPageNumbers($value)
 * @method string getPagingId()
 * @method $this withPagingId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getMaxAvgScanRows()
 * @method $this withMaxAvgScanRows($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getMinAvgConsume()
 * @method $this withMinAvgConsume($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getMaxRecordsPerPage()
 * @method $this withMaxRecordsPerPage($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMaxAvgConsume()
 * @method $this withMaxAvgConsume($value)
 * @method string getSqType()
 * @method $this withSqType($value)
 * @method string getSortMethod()
 * @method $this withSortMethod($value)
 */
class DescribeTemplatesList extends V20140815Rpc
{
}

/**
 * @method string getAccountType()
 * @method $this withAccountType($value)
 * @method string getAccountDescription()
 * @method $this withAccountDescription($value)
 * @method string getAccountPassword()
 * @method $this withAccountPassword($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class CreateAdminAccount extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getTableMeta()
 * @method $this withTableMeta($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getRestoreTime()
 * @method $this withRestoreTime($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBackupId()
 * @method $this withBackupId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class RestoreTable extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getSortKey()
 * @method $this withSortKey($value)
 * @method string getTemplateHash()
 * @method $this withTemplateHash($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTimeLevel()
 * @method $this withTimeLevel($value)
 */
class DescribeSqlLogTemplatesTimeDistribution extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class DescribeAvailableResource extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CheckCloudResourceAuthorized extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeOpenSearchDBInstance extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DeleteOpenSearchDBInstance extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeSecurityGroupConfiguration extends V20140815Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class CreateDiagnosticReport extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeProxyFunctionSupport extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getColumns()
 * @method $this withColumns($value)
 * @method string getMinScanRows()
 * @method $this withMinScanRows($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getHostAddress()
 * @method $this withHostAddress($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 * @method string getSqlType()
 * @method $this withSqlType($value)
 * @method string getMinConsume()
 * @method $this withMinConsume($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getQueryKeyword()
 * @method $this withQueryKeyword($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMaxConsume()
 * @method $this withMaxConsume($value)
 * @method string getThreadID()
 * @method $this withThreadID($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 * @method string getMaxScanRows()
 * @method $this withMaxScanRows($value)
 */
class StartSqlLogDetailArchive extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getReplicaId()
 * @method $this withReplicaId($value)
 * @method string getDestinationDBInstanceId()
 * @method $this withDestinationDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSourceDBInstanceId()
 * @method $this withSourceDBInstanceId($value)
 */
class DescribeReplicaUsage extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeMigrateTasksForSQLServer extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceStorage()
 * @method $this withDBInstanceStorage($value)
 * @method string getNodeType()
 * @method $this withNodeType($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getDBInstanceStorageType()
 * @method $this withDBInstanceStorageType($value)
 * @method string getBusinessInfo()
 * @method $this withBusinessInfo($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getResource()
 * @method $this withResource($value)
 * @method string getCommodityCode()
 * @method $this withCommodityCode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getUsedTime()
 * @method $this withUsedTime($value)
 * @method string getDBInstanceClass()
 * @method $this withDBInstanceClass($value)
 */
class CreateOrderForTempUpgrade extends V20140815Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeSyncAccountForInner extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTargetVpcId()
 * @method $this withTargetVpcId($value)
 * @method string getTargetZoneId()
 * @method $this withTargetZoneId($value)
 * @method string getEffectiveTime()
 * @method $this withEffectiveTime($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getSwitchTime()
 * @method $this withSwitchTime($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getTargetVSwitchId()
 * @method $this withTargetVSwitchId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTargetRegionId()
 * @method $this withTargetRegionId($value)
 */
class MigrateToOtherRegion extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getQueryKeywords()
 * @method $this withQueryKeywords($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getDatabase()
 * @method $this withDatabase($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getSQLId()
 * @method $this withSQLId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getForm()
 * @method $this withForm($value)
 * @method string getUser()
 * @method $this withUser($value)
 */
class DescribeSQLLogRecords extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getReplicaId()
 * @method $this withReplicaId($value)
 * @method string getSourceInstanceId()
 * @method $this withSourceInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDestinationInstanceId()
 * @method $this withDestinationInstanceId($value)
 */
class CreateStaticVerification extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 */
class RevokeAccountPrivilege extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getParameterGroupId()
 * @method $this withParameterGroupId($value)
 * @method string getTargetRegionId()
 * @method $this withTargetRegionId($value)
 */
class CloneParameterGroup extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getReplicaId()
 * @method $this withReplicaId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyReplicaRelation extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDBInstanceSwitchLog extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getFlag()
 * @method $this withFlag($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceNetRWSplitType()
 * @method $this withDBInstanceNetRWSplitType($value)
 */
class DescribeDBInstanceNetInfoForChannel extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getLoghubRegion()
 * @method $this withLoghubRegion($value)
 * @method string getLogstore()
 * @method $this withLogstore($value)
 */
class EnableSqlLogDistribution extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTargetVpcId()
 * @method $this withTargetVpcId($value)
 * @method string getTargetZoneId()
 * @method $this withTargetZoneId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getTargetVSwitchId()
 * @method $this withTargetVSwitchId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTargetRegionId()
 * @method $this withTargetRegionId($value)
 */
class AllocateInstanceVpcNetworkType extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceStorage()
 * @method $this withDBInstanceStorage($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getShardsInfo()
 * @method $this withShardsInfo($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceClass()
 * @method $this withDBInstanceClass($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 */
class EvaluateResource extends V20140815Rpc
{
}

/**
 * @method string getServiceRequestType()
 * @method $this withServiceRequestType($value)
 * @method string getServiceRequestParam()
 * @method $this withServiceRequestParam($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class RequestServiceOfCloudDBExpert extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDynamicMode()
 * @method $this withDynamicMode($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getReplicaId()
 * @method $this withReplicaId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyReplicaDynamicMode extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getDBInstanceStorageType()
 * @method $this withDBInstanceStorageType($value)
 * @method string getRestoreTime()
 * @method $this withRestoreTime($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBackupId()
 * @method $this withBackupId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getVPCId()
 * @method $this withVPCId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getInstanceNetworkType()
 * @method $this withInstanceNetworkType($value)
 */
class CreateTempDBInstanceForChannel extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeUserEncryptionKeyList extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDynamicMode()
 * @method $this withDynamicMode($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getReplicaId()
 * @method $this withReplicaId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyDynamicMode extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getParam()
 * @method $this withParam($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class QueryPriceMulti extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getParameterGroupId()
 * @method $this withParameterGroupId($value)
 */
class DescribeParameterGroup extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getConnectionString()
 * @method $this withConnectionString($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeDBInstanceUser extends V20140815Rpc
{
}

/**
 * @method string getStartPoint()
 * @method $this withStartPoint($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getEndPoint()
 * @method $this withEndPoint($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeDBInstanceNetworkDetail extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeSQLLogReportList extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteCloudInstanceIp extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getPattern()
 * @method $this withPattern($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getPageIndex()
 * @method $this withPageIndex($value)
 * @method string getRestoreTime()
 * @method $this withRestoreTime($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBackupSetID()
 * @method $this withBackupSetID($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getGetDbName()
 * @method $this withGetDbName($value)
 * @method string getRestoreType()
 * @method $this withRestoreType($value)
 */
class DescribeMetaList extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceStorage()
 * @method $this withDBInstanceStorage($value)
 * @method string getSystemDBCharset()
 * @method $this withSystemDBCharset($value)
 * @method string getCountryCode()
 * @method $this withCountryCode($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getCurrencyCode()
 * @method $this withCurrencyCode($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBInstanceDescription()
 * @method $this withDBInstanceDescription($value)
 * @method string getBusinessInfo()
 * @method $this withBusinessInfo($value)
 * @method string getAgentId()
 * @method $this withAgentId($value)
 * @method string getResource()
 * @method $this withResource($value)
 * @method string getBackupId()
 * @method $this withBackupId($value)
 * @method string getCommodityCode()
 * @method $this withCommodityCode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceClass()
 * @method $this withDBInstanceClass($value)
 * @method string getSecurityIPList()
 * @method $this withSecurityIPList($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getPrivateIpAddress()
 * @method $this withPrivateIpAddress($value)
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 * @method string getPromotionCode()
 * @method $this withPromotionCode($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getTimeType()
 * @method $this withTimeType($value)
 * @method string getInstanceNetworkType()
 * @method $this withInstanceNetworkType($value)
 * @method string getConnectionMode()
 * @method $this withConnectionMode($value)
 * @method string getNodeType()
 * @method $this withNodeType($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getZoneIdSlave1()
 * @method $this withZoneIdSlave1($value)
 * @method string getZoneIdSlave2()
 * @method $this withZoneIdSlave2($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getDBInstanceStorageType()
 * @method $this withDBInstanceStorageType($value)
 * @method string getDBInstanceNetType()
 * @method $this withDBInstanceNetType($value)
 * @method string getRestoreTime()
 * @method $this withRestoreTime($value)
 * @method string getQuantity()
 * @method $this withQuantity($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getUsedTime()
 * @method $this withUsedTime($value)
 * @method string getInstanceUsedType()
 * @method $this withInstanceUsedType($value)
 * @method string getVPCId()
 * @method $this withVPCId($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 */
class CreateOrder extends V20140815Rpc
{
}

/**
 * @method string getTag4value()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTag2key()
 * @method string getTag3key()
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getTag1value()
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getProxyId()
 * @method string getTag5key()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceType()
 * @method $this withDBInstanceType($value)
 * @method string getDBInstanceClass()
 * @method $this withDBInstanceClass($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getTag4key()
 * @method string getInstanceNetworkType()
 * @method $this withInstanceNetworkType($value)
 * @method string getConnectionMode()
 * @method $this withConnectionMode($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSearchKey()
 * @method $this withSearchKey($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getExpired()
 * @method $this withExpired($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceStatus()
 * @method $this withDBInstanceStatus($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getTag3value()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getTag5value()
 * @method string getTag1key()
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getTag2value()
 * @method string getPayType()
 * @method $this withPayType($value)
 */
class DescribeDBInstances extends V20140815Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag4value($value)
    {
        $this->data['Tag4value'] = $value;
        $this->options['query']['Tag.4.value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag2key($value)
    {
        $this->data['Tag2key'] = $value;
        $this->options['query']['Tag.2.key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag3key($value)
    {
        $this->data['Tag3key'] = $value;
        $this->options['query']['Tag.3.key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag1value($value)
    {
        $this->data['Tag1value'] = $value;
        $this->options['query']['Tag.1.value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag5key($value)
    {
        $this->data['Tag5key'] = $value;
        $this->options['query']['Tag.5.key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag4key($value)
    {
        $this->data['Tag4key'] = $value;
        $this->options['query']['Tag.4.key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag3value($value)
    {
        $this->data['Tag3value'] = $value;
        $this->options['query']['Tag.3.value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag5value($value)
    {
        $this->data['Tag5value'] = $value;
        $this->options['query']['Tag.5.value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag1key($value)
    {
        $this->data['Tag1key'] = $value;
        $this->options['query']['Tag.1.key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag2value($value)
    {
        $this->data['Tag2value'] = $value;
        $this->options['query']['Tag.2.value'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getParam()
 * @method $this withParam($value)
 * @method string getAgentId()
 * @method $this withAgentId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateMulOrderForBuy extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEncryptionKey()
 * @method $this withEncryptionKey($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRoleArn()
 * @method $this withRoleArn($value)
 */
class DescribeDBInstancesWithCloudResource extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getParameterGroupName()
 * @method $this withParameterGroupName($value)
 * @method string getParameters()
 * @method $this withParameters($value)
 * @method string getParameterGroupDesc()
 * @method $this withParameterGroupDesc($value)
 */
class CreateParameterGroup extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeSqlLogInstances extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceStorage()
 * @method $this withDBInstanceStorage($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBInstanceDescription()
 * @method $this withDBInstanceDescription($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getRestoreTime()
 * @method $this withRestoreTime($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBackupId()
 * @method $this withBackupId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getUsedTime()
 * @method $this withUsedTime($value)
 * @method string getDBInstanceClass()
 * @method $this withDBInstanceClass($value)
 * @method string getDbNames()
 * @method $this withDbNames($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getPrivateIpAddress()
 * @method $this withPrivateIpAddress($value)
 * @method string getTargetDBInstanceId()
 * @method $this withTargetDBInstanceId($value)
 * @method string getVPCId()
 * @method $this withVPCId($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 * @method string getInstanceNetworkType()
 * @method $this withInstanceNetworkType($value)
 */
class RecoveryDBInstance extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 */
class DescribeRdsVpcs extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 */
class DescribeRdsVSwitchs extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getReadSQLReplicationTime()
 * @method $this withReadSQLReplicationTime($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class ModifyDBInstanceDelayReplicationTime extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getTimezone()
 * @method $this withTimezone($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getCollation()
 * @method $this withCollation($value)
 */
class ModifyCollationTimeZone extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getArchiveJobID()
 * @method $this withArchiveJobID($value)
 * @method string getOssTableName()
 * @method $this withOssTableName($value)
 */
class DescribeArchiveSQLLogFromKepler extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeTemplatesConsumeAndScanRows extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTriggerId()
 * @method $this withTriggerId($value)
 * @method array getSubscriptionObjects()
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getEventFormat()
 * @method $this withEventFormat($value)
 * @method string getRetry()
 * @method $this withRetry($value)
 * @method string getTriggerArn()
 * @method $this withTriggerArn($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getConcurrency()
 * @method $this withConcurrency($value)
 * @method string getInvocationRoleArn()
 * @method $this withInvocationRoleArn($value)
 * @method string getFunctionArn()
 * @method $this withFunctionArn($value)
 */
class ModifyFCTrigger extends V20140815Rpc
{

    /**
     * @param array $subscriptionObjects
     *
     * @return $this
     */
    public function withSubscriptionObjects(array $subscriptionObjects)
    {
        $this->data['SubscriptionObjects'] = $subscriptionObjects;
        foreach ($subscriptionObjects as $i => $iValue) {
            $this->options['query']['SubscriptionObjects.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeMigrateCountInfo extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getParameterGroupId()
 * @method $this withParameterGroupId($value)
 */
class DeleteParameterGroup extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTriggerId()
 * @method $this withTriggerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeFCTrigger extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClassicExpiredDays()
 * @method $this withClassicExpiredDays($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRetainClassic()
 * @method $this withRetainClassic($value)
 * @method string getInstanceNetworkType()
 * @method $this withInstanceNetworkType($value)
 */
class AllocateClassicNetworkType extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeSQLCollectorRetention extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getJuShiTaInstanceUid()
 * @method $this withJuShiTaInstanceUid($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getChargeType()
 * @method $this withChargeType($value)
 */
class ModifyDBInstanceChargeTypeForJuShiTa extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getFillterDDL()
 * @method $this withFillterDDL($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getReplicaId()
 * @method $this withReplicaId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyReplicaFilterMode extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 */
class DescribeInstanceVpcMigrateInfo extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getSubDomain()
 * @method $this withSubDomain($value)
 */
class CompensateInstanceForChannel extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBackupId()
 * @method $this withBackupId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeBackupDatabase extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getProxyConfigurationValue()
 * @method $this withProxyConfigurationValue($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getProxyConfigurationKey()
 * @method $this withProxyConfigurationKey($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class ModifyDBInstanceProxyConfiguration extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class DescribeAvailableInstanceClass extends V20140815Rpc
{
}
