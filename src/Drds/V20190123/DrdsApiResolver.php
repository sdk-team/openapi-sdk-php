<?php

namespace AlibabaCloud\Drds\V20190123;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CreateDrdsDBPreCheck createDrdsDBPreCheck(array $options = [])
 * @method CheckCapacityDataReady checkCapacityDataReady(array $options = [])
 * @method DescribeHiStoreInstanceInfo describeHiStoreInstanceInfo(array $options = [])
 * @method RollbackHiStoreInstance rollbackHiStoreInstance(array $options = [])
 * @method ModifyPolarDbReadWeight modifyPolarDbReadWeight(array $options = [])
 * @method DatalinkReplicationPrecheck datalinkReplicationPrecheck(array $options = [])
 * @method DescribeDrdsDbRelationInfo describeDrdsDbRelationInfo(array $options = [])
 * @method ReleaseHiStoreInstance releaseHiStoreInstance(array $options = [])
 * @method SubmitSmoothExpandPreCheck submitSmoothExpandPreCheck(array $options = [])
 * @method DescribeDrdsDBCluster describeDrdsDBCluster(array $options = [])
 * @method PreCheckCreateHiStoreInstance preCheckCreateHiStoreInstance(array $options = [])
 * @method SubmitHotExpandPreCheckTask submitHotExpandPreCheckTask(array $options = [])
 * @method UpgradeHiStoreInstance upgradeHiStoreInstance(array $options = [])
 * @method SubmitSmoothExpandPreCheckTask submitSmoothExpandPreCheckTask(array $options = [])
 * @method DescribePreCheckResult describePreCheckResult(array $options = [])
 * @method DescribeDrdsDbRdsRelationInfo describeDrdsDbRdsRelationInfo(array $options = [])
 * @method DescribeRDSPerformance describeRDSPerformance(array $options = [])
 * @method UpdateInstanceNetwork updateInstanceNetwork(array $options = [])
 * @method DescribeDrdsSqlAuditStatus describeDrdsSqlAuditStatus(array $options = [])
 * @method DescribeStorageInstanceSubDbInfo describeStorageInstanceSubDbInfo(array $options = [])
 * @method DescribeDrdsDbRdsNameList describeDrdsDbRdsNameList(array $options = [])
 * @method SwitchGlobalBroadcastType switchGlobalBroadcastType(array $options = [])
 * @method ResetDrdsToRdsConnections resetDrdsToRdsConnections(array $options = [])
 * @method DescribeInstanceSwitchAzone describeInstanceSwitchAzone(array $options = [])
 * @method ChangeInstanceAzone changeInstanceAzone(array $options = [])
 * @method DescribeInstanceSwitchNetwork describeInstanceSwitchNetwork(array $options = [])
 * @method ChangeInstanceNetwork changeInstanceNetwork(array $options = [])
 * @method DescribeConsoleConfig describeConsoleConfig(array $options = [])
 * @method DescribeDbInstances describeDbInstances(array $options = [])
 * @method DescribeDrdsInstances describeDrdsInstances(array $options = [])
 * @method DescribeDrdsDBs describeDrdsDBs(array $options = [])
 * @method DescribeDrdsInstance describeDrdsInstance(array $options = [])
 * @method DescribeDrdsInstanceVersion describeDrdsInstanceVersion(array $options = [])
 * @method DescribeRdsSuperAccountInstances describeRdsSuperAccountInstances(array $options = [])
 * @method DescribeDrdsDB describeDrdsDB(array $options = [])
 * @method CreateDrdsDBPreview createDrdsDBPreview(array $options = [])
 * @method CreateDrdsDB createDrdsDB(array $options = [])
 * @method DescribeDrdsRegions describeDrdsRegions(array $options = [])
 * @method ModifyRdsReadWeight modifyRdsReadWeight(array $options = [])
 * @method CheckDrdsDbName checkDrdsDbName(array $options = [])
 * @method DescribeInstanceAccounts describeInstanceAccounts(array $options = [])
 * @method DescribeDrdsDbInstance describeDrdsDbInstance(array $options = [])
 * @method DescribeDrdsDbInstances describeDrdsDbInstances(array $options = [])
 * @method DescribeDrdsShardingDbs describeDrdsShardingDbs(array $options = [])
 * @method RemoveDrdsInstance removeDrdsInstance(array $options = [])
 * @method CreateInstanceAccount createInstanceAccount(array $options = [])
 * @method ModifyAccountDescription modifyAccountDescription(array $options = [])
 * @method ChangeAccountPassword changeAccountPassword(array $options = [])
 * @method RemoveInstanceAccount removeInstanceAccount(array $options = [])
 * @method RemoveDrdsDb removeDrdsDb(array $options = [])
 * @method ModifyAccountPrivilege modifyAccountPrivilege(array $options = [])
 * @method DescribeDrdsSlowSqls describeDrdsSlowSqls(array $options = [])
 * @method ModifyDrdsIpWhiteList modifyDrdsIpWhiteList(array $options = [])
 * @method DescribeDrdsDBIpWhiteList describeDrdsDBIpWhiteList(array $options = [])
 * @method DescribeDrdsTasks describeDrdsTasks(array $options = [])
 * @method ConfigureDrdsDbInstances configureDrdsDbInstances(array $options = [])
 * @method RestartDrdsInstance restartDrdsInstance(array $options = [])
 * @method SubmitSqlFlashbackTask submitSqlFlashbackTask(array $options = [])
 * @method EnableSqlFlashbackMatchSwitch enableSqlFlashbackMatchSwitch(array $options = [])
 * @method PreCheckSqlFlashbackTask preCheckSqlFlashbackTask(array $options = [])
 * @method CheckSlsStatus checkSlsStatus(array $options = [])
 * @method DisableSqlAudit disableSqlAudit(array $options = [])
 * @method CheckSqlAuditEnableStatus checkSqlAuditEnableStatus(array $options = [])
 * @method EnableSqlAudit enableSqlAudit(array $options = [])
 * @method CheckDrdsDefaultRole checkDrdsDefaultRole(array $options = [])
 * @method RefreshDrdsAtomUrl refreshDrdsAtomUrl(array $options = [])
 * @method DescribeInstanceMenuSwitch describeInstanceMenuSwitch(array $options = [])
 * @method DescribeDrdsInstanceLevelTasks describeDrdsInstanceLevelTasks(array $options = [])
 * @method DescribeBackMenu describeBackMenu(array $options = [])
 * @method DescribeBackupDbs describeBackupDbs(array $options = [])
 * @method DescribeBackupLocal describeBackupLocal(array $options = [])
 * @method DescribeBackupSets describeBackupSets(array $options = [])
 * @method DescribeBackupPolicy describeBackupPolicy(array $options = [])
 * @method DescribeBackupTimes describeBackupTimes(array $options = [])
 * @method DescribeRestoreOrder describeRestoreOrder(array $options = [])
 * @method PutRestorePreCheck putRestorePreCheck(array $options = [])
 * @method SetBackupLocal setBackupLocal(array $options = [])
 * @method RemoveBackupsSet removeBackupsSet(array $options = [])
 * @method SetBackupPolicy setBackupPolicy(array $options = [])
 * @method StartRestore startRestore(array $options = [])
 * @method CheckRdsSuperAccount checkRdsSuperAccount(array $options = [])
 * @method PutStartBackup putStartBackup(array $options = [])
 * @method DescribeDrdsDbTasks describeDrdsDbTasks(array $options = [])
 * @method SubmitSmoothExpandTask submitSmoothExpandTask(array $options = [])
 * @method RearrangeDbToInstance rearrangeDbToInstance(array $options = [])
 * @method DescribeDbInstanceDbs describeDbInstanceDbs(array $options = [])
 * @method SubmitSwitchTask submitSwitchTask(array $options = [])
 * @method SubmitCleanTask submitCleanTask(array $options = [])
 * @method SubmitRollbackTask submitRollbackTask(array $options = [])
 * @method SubmitHotExpandTask submitHotExpandTask(array $options = [])
 * @method GetHotDbList getHotDbList(array $options = [])
 * @method GetSrcRdsList getSrcRdsList(array $options = [])
 * @method GetLogicTableInfoList getLogicTableInfoList(array $options = [])
 * @method CheckRdsExpandStatus checkRdsExpandStatus(array $options = [])
 * @method CheckExpandStatus checkExpandStatus(array $options = [])
 * @method GetCandidateInstanceList getCandidateInstanceList(array $options = [])
 * @method GetExpandLogicTableInfoList getExpandLogicTableInfoList(array $options = [])
 * @method DescribeSrcRdsList describeSrcRdsList(array $options = [])
 * @method DescribeCandidateInstanceList describeCandidateInstanceList(array $options = [])
 * @method DescribeExpandLogicTableInfoList describeExpandLogicTableInfoList(array $options = [])
 * @method DescribeCanExpandInstanceDetailList describeCanExpandInstanceDetailList(array $options = [])
 * @method DescribeHotDbList describeHotDbList(array $options = [])
 * @method DescribeSqlFlashbakTask describeSqlFlashbakTask(array $options = [])
 * @method MigrateJstDrdsDbAcrossRegion migrateJstDrdsDbAcrossRegion(array $options = [])
 * @method RefreshJstMigrateDrdsDbAtomUrl refreshJstMigrateDrdsDbAtomUrl(array $options = [])
 * @method DescribeInstDbLogInfo describeInstDbLogInfo(array $options = [])
 * @method DescribeInstDbSlsInfo describeInstDbSlsInfo(array $options = [])
 * @method RemoveRecycleBinTable removeRecycleBinTable(array $options = [])
 * @method CreateShardTask createShardTask(array $options = [])
 * @method EnableInstanceIpv6Address enableInstanceIpv6Address(array $options = [])
 * @method DescribeTable describeTable(array $options = [])
 * @method UpgradeInstanceVersion upgradeInstanceVersion(array $options = [])
 * @method DescribeTableListByType describeTableListByType(array $options = [])
 * @method ValidateShardTask validateShardTask(array $options = [])
 * @method DescribeTables describeTables(array $options = [])
 * @method DescribeShardTaskList describeShardTaskList(array $options = [])
 * @method CreateInstanceInternetAddress createInstanceInternetAddress(array $options = [])
 * @method DescribeBroadcastTables describeBroadcastTables(array $options = [])
 * @method FlashbackRecycleBinTable flashbackRecycleBinTable(array $options = [])
 * @method SetupBroadcastTables setupBroadcastTables(array $options = [])
 * @method RollbackInstanceVersion rollbackInstanceVersion(array $options = [])
 * @method DescribeGlobalBroadcastType describeGlobalBroadcastType(array $options = [])
 * @method ReleaseInstanceInternetAddress releaseInstanceInternetAddress(array $options = [])
 * @method DescribeRecycleBinTables describeRecycleBinTables(array $options = [])
 * @method DescribeDrdsParams describeDrdsParams(array $options = [])
 * @method DeleteShardTasks deleteShardTasks(array $options = [])
 * @method SetupTable setupTable(array $options = [])
 * @method SetupDrdsParams setupDrdsParams(array $options = [])
 * @method DescribeRecycleBinStatus describeRecycleBinStatus(array $options = [])
 * @method DescribeShardTaskInfo describeShardTaskInfo(array $options = [])
 * @method SetupRecycleBinStatus setupRecycleBinStatus(array $options = [])
 * @method UntagResources untagResources(array $options = [])
 * @method DescribeDrdsInstanceMonitor describeDrdsInstanceMonitor(array $options = [])
 * @method DescribeDrdsInstanceDbMonitor describeDrdsInstanceDbMonitor(array $options = [])
 * @method TagResources tagResources(array $options = [])
 * @method RemoveDrdsDbFailedRecord removeDrdsDbFailedRecord(array $options = [])
 * @method ListTagResources listTagResources(array $options = [])
 * @method DescribeRdsCommodity describeRdsCommodity(array $options = [])
 * @method DescribeRdsPrice describeRdsPrice(array $options = [])
 * @method CreateOrderForRds createOrderForRds(array $options = [])
 * @method DescribeRdsVpcForZone describeRdsVpcForZone(array $options = [])
 * @method DescribeRdsPerformanceSummary describeRdsPerformanceSummary(array $options = [])
 * @method ModifyDrdsInstanceDescription modifyDrdsInstanceDescription(array $options = [])
 */
class DrdsApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Drds';

    /** @var string */
    public $version = '2019-01-23';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'drds';
}

/**
 * @method string getEncode()
 * @method $this withEncode($value)
 * @method array getInstDbName()
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method array getRdsSuperAccount()
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method array getRdsInstance()
 * @method string getType()
 * @method $this withType($value)
 * @method string getDbInstType()
 * @method $this withDbInstType($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 * @method string getDbInstanceIsCreating()
 * @method $this withDbInstanceIsCreating($value)
 */
class CreateDrdsDBPreCheck extends Rpc
{

    /**
     * @param array $instDbName
     *
     * @return $this
     */
    public function withInstDbName(array $instDbName)
    {
        $this->data['InstDbName'] = $instDbName;
        foreach ($instDbName as $depth1 => $depth1Value) {
            foreach ($depth1Value['ShardDbName'] as $i => $iValue) {
                $this->options['query']['InstDbName.' . ($depth1 + 1) . '.ShardDbName.' . ($i + 1)] = $iValue;
            }
            $this->options['query']['InstDbName.' . ($depth1 + 1) . '.DbInstanceId'] = $depth1Value['DbInstanceId'];
        }

        return $this;
    }

    /**
     * @param array $rdsSuperAccount
     *
     * @return $this
     */
    public function withRdsSuperAccount(array $rdsSuperAccount)
    {
        $this->data['RdsSuperAccount'] = $rdsSuperAccount;
        foreach ($rdsSuperAccount as $depth1 => $depth1Value) {
            $this->options['query']['RdsSuperAccount.' . ($depth1 + 1) . '.Password'] = $depth1Value['Password'];
            $this->options['query']['RdsSuperAccount.' . ($depth1 + 1) . '.AccountName'] = $depth1Value['AccountName'];
            $this->options['query']['RdsSuperAccount.' . ($depth1 + 1) . '.DbInstanceId'] = $depth1Value['DbInstanceId'];
        }

        return $this;
    }

    /**
     * @param array $rdsInstance
     *
     * @return $this
     */
    public function withRdsInstance(array $rdsInstance)
    {
        $this->data['RdsInstance'] = $rdsInstance;
        foreach ($rdsInstance as $i => $iValue) {
            $this->options['query']['RdsInstance.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class CheckCapacityDataReady extends Rpc
{
}

/**
 * @method string getHistoreInstanceId()
 * @method $this withHistoreInstanceId($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class DescribeHiStoreInstanceInfo extends Rpc
{
}

/**
 * @method string getHistoreInstanceId()
 * @method $this withHistoreInstanceId($value)
 * @method string getDrdsPassword()
 * @method $this withDrdsPassword($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class RollbackHiStoreInstance extends Rpc
{
}

/**
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getDbInstanceId()
 * @method $this withDbInstanceId($value)
 * @method string getWeights()
 * @method $this withWeights($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 * @method string getDbNodeIds()
 * @method $this withDbNodeIds($value)
 */
class ModifyPolarDbReadWeight extends Rpc
{
}

/**
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getSrcTableName()
 * @method $this withSrcTableName($value)
 * @method string getDstTableName()
 * @method $this withDstTableName($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class DatalinkReplicationPrecheck extends Rpc
{
}

/**
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class DescribeDrdsDbRelationInfo extends Rpc
{
}

/**
 * @method string getHistoreInstanceId()
 * @method $this withHistoreInstanceId($value)
 * @method string getDrdsPassword()
 * @method $this withDrdsPassword($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class ReleaseHiStoreInstance extends Rpc
{
}

/**
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getDbInstType()
 * @method $this withDbInstType($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class SubmitSmoothExpandPreCheck extends Rpc
{
}

/**
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getDbInstanceId()
 * @method $this withDbInstanceId($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class DescribeDrdsDBCluster extends Rpc
{
}

/**
 * @method string getDrdsPassword()
 * @method $this withDrdsPassword($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class PreCheckCreateHiStoreInstance extends Rpc
{
}

/**
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method array getTableList()
 * @method string getDbInstType()
 * @method $this withDbInstType($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class SubmitHotExpandPreCheckTask extends Rpc
{

    /**
     * @param array $tableList
     *
     * @return $this
     */
    public function withTableList(array $tableList)
    {
        $this->data['TableList'] = $tableList;
        foreach ($tableList as $i => $iValue) {
            $this->options['query']['TableList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getHistoreInstanceId()
 * @method $this withHistoreInstanceId($value)
 * @method string getDrdsPassword()
 * @method $this withDrdsPassword($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class UpgradeHiStoreInstance extends Rpc
{
}

/**
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class SubmitSmoothExpandPreCheckTask extends Rpc
{
}

/**
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class DescribePreCheckResult extends Rpc
{
}

/**
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class DescribeDrdsDbRdsRelationInfo extends Rpc
{
}

/**
 * @method string getKeys()
 * @method $this withKeys($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getRdsInstanceId()
 * @method $this withRdsInstanceId($value)
 * @method string getDbInstType()
 * @method $this withDbInstType($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class DescribeRDSPerformance extends Rpc
{
}

/**
 * @method string getRetainClassic()
 * @method $this withRetainClassic($value)
 * @method string getClassicExpiredDays()
 * @method $this withClassicExpiredDays($value)
 * @method string getSrcInstanceNetworkType()
 * @method $this withSrcInstanceNetworkType($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class UpdateInstanceNetwork extends Rpc
{
}

/**
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class DescribeDrdsSqlAuditStatus extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 * @method string getInstType()
 * @method $this withInstType($value)
 */
class DescribeStorageInstanceSubDbInfo extends Rpc
{
}

/**
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class DescribeDrdsDbRdsNameList extends Rpc
{
}

/**
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class SwitchGlobalBroadcastType extends Rpc
{
}

/**
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class ResetDrdsToRdsConnections extends Rpc
{
}

/**
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class DescribeInstanceSwitchAzone extends Rpc
{
}

/**
 * @method string getOriginAzoneId()
 * @method $this withOriginAzoneId($value)
 * @method string getTargetAzoneId()
 * @method $this withTargetAzoneId($value)
 * @method string getDrdsRegionId()
 * @method $this withDrdsRegionId($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class ChangeInstanceAzone extends Rpc
{
}

/**
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class DescribeInstanceSwitchNetwork extends Rpc
{
}

/**
 * @method string getVswitchId()
 * @method $this withVswitchId($value)
 * @method string getRetainClassic()
 * @method $this withRetainClassic($value)
 * @method string getClassicExpiredDays()
 * @method $this withClassicExpiredDays($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getSrcInstanceNetworkType()
 * @method $this withSrcInstanceNetworkType($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class ChangeInstanceNetwork extends Rpc
{
}

/**
 * @method string getType()
 * @method $this withType($value)
 */
class DescribeConsoleConfig extends Rpc
{
}

/**
 * @method string getSearch()
 * @method $this withSearch($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDbInstType()
 * @method $this withDbInstType($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeDbInstances extends Rpc
{
}

/**
 * @method string getExpired()
 * @method $this withExpired($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method array getTag()
 * @method string getType()
 * @method $this withType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeDrdsInstances extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
    public function withTag(array $tag)
    {
        $this->data['Tag'] = $tag;
        foreach ($tag as $depth1 => $depth1Value) {
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
        }

        return $this;
    }
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeDrdsDBs extends Rpc
{
}

/**
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class DescribeDrdsInstance extends Rpc
{
}

/**
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class DescribeDrdsInstanceVersion extends Rpc
{
}

/**
 * @method array getRdsInstance()
 * @method string getDbInstType()
 * @method $this withDbInstType($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class DescribeRdsSuperAccountInstances extends Rpc
{

    /**
     * @param array $rdsInstance
     *
     * @return $this
     */
    public function withRdsInstance(array $rdsInstance)
    {
        $this->data['RdsInstance'] = $rdsInstance;
        foreach ($rdsInstance as $i => $iValue) {
            $this->options['query']['RdsInstance.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class DescribeDrdsDB extends Rpc
{
}

/**
 * @method array getInstDbName()
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method array getRdsInstance()
 * @method string getType()
 * @method $this withType($value)
 * @method string getDbInstType()
 * @method $this withDbInstType($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 * @method string getDbInstanceIsCreating()
 * @method $this withDbInstanceIsCreating($value)
 */
class CreateDrdsDBPreview extends Rpc
{

    /**
     * @param array $instDbName
     *
     * @return $this
     */
    public function withInstDbName(array $instDbName)
    {
        $this->data['InstDbName'] = $instDbName;
        foreach ($instDbName as $depth1 => $depth1Value) {
            foreach ($depth1Value['ShardDbName'] as $i => $iValue) {
                $this->options['query']['InstDbName.' . ($depth1 + 1) . '.ShardDbName.' . ($i + 1)] = $iValue;
            }
            $this->options['query']['InstDbName.' . ($depth1 + 1) . '.DbInstanceId'] = $depth1Value['DbInstanceId'];
        }

        return $this;
    }

    /**
     * @param array $rdsInstance
     *
     * @return $this
     */
    public function withRdsInstance(array $rdsInstance)
    {
        $this->data['RdsInstance'] = $rdsInstance;
        foreach ($rdsInstance as $i => $iValue) {
            $this->options['query']['RdsInstance.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getEncode()
 * @method $this withEncode($value)
 * @method array getInstDbName()
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method array getRdsSuperAccount()
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method array getRdsInstance()
 * @method string getType()
 * @method $this withType($value)
 * @method string getDbInstType()
 * @method $this withDbInstType($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 * @method string getDbInstanceIsCreating()
 * @method $this withDbInstanceIsCreating($value)
 */
class CreateDrdsDB extends Rpc
{

    /**
     * @param array $instDbName
     *
     * @return $this
     */
    public function withInstDbName(array $instDbName)
    {
        $this->data['InstDbName'] = $instDbName;
        foreach ($instDbName as $depth1 => $depth1Value) {
            foreach ($depth1Value['ShardDbName'] as $i => $iValue) {
                $this->options['query']['InstDbName.' . ($depth1 + 1) . '.ShardDbName.' . ($i + 1)] = $iValue;
            }
            $this->options['query']['InstDbName.' . ($depth1 + 1) . '.DbInstanceId'] = $depth1Value['DbInstanceId'];
        }

        return $this;
    }

    /**
     * @param array $rdsSuperAccount
     *
     * @return $this
     */
    public function withRdsSuperAccount(array $rdsSuperAccount)
    {
        $this->data['RdsSuperAccount'] = $rdsSuperAccount;
        foreach ($rdsSuperAccount as $depth1 => $depth1Value) {
            $this->options['query']['RdsSuperAccount.' . ($depth1 + 1) . '.Password'] = $depth1Value['Password'];
            $this->options['query']['RdsSuperAccount.' . ($depth1 + 1) . '.AccountName'] = $depth1Value['AccountName'];
            $this->options['query']['RdsSuperAccount.' . ($depth1 + 1) . '.DbInstanceId'] = $depth1Value['DbInstanceId'];
        }

        return $this;
    }

    /**
     * @param array $rdsInstance
     *
     * @return $this
     */
    public function withRdsInstance(array $rdsInstance)
    {
        $this->data['RdsInstance'] = $rdsInstance;
        foreach ($rdsInstance as $i => $iValue) {
            $this->options['query']['RdsInstance.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

class DescribeDrdsRegions extends Rpc
{
}

/**
 * @method string getInstanceNames()
 * @method $this withInstanceNames($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getWeights()
 * @method $this withWeights($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class ModifyRdsReadWeight extends Rpc
{
}

/**
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class CheckDrdsDbName extends Rpc
{
}

/**
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class DescribeInstanceAccounts extends Rpc
{
}

/**
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getDbInstanceId()
 * @method $this withDbInstanceId($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class DescribeDrdsDbInstance extends Rpc
{
}

/**
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeDrdsDbInstances extends Rpc
{
}

/**
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getDbNamePattern()
 * @method $this withDbNamePattern($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class DescribeDrdsShardingDbs extends Rpc
{
}

/**
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class RemoveDrdsInstance extends Rpc
{
}

/**
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 * @method array getDbPrivilege()
 */
class CreateInstanceAccount extends Rpc
{

    /**
     * @param array $dbPrivilege
     *
     * @return $this
     */
    public function withDbPrivilege(array $dbPrivilege)
    {
        $this->data['DbPrivilege'] = $dbPrivilege;
        foreach ($dbPrivilege as $depth1 => $depth1Value) {
            $this->options['query']['DbPrivilege.' . ($depth1 + 1) . '.DbName'] = $depth1Value['DbName'];
            $this->options['query']['DbPrivilege.' . ($depth1 + 1) . '.Privilege'] = $depth1Value['Privilege'];
        }

        return $this;
    }
}

/**
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class ModifyAccountDescription extends Rpc
{
}

/**
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class ChangeAccountPassword extends Rpc
{
}

/**
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class RemoveInstanceAccount extends Rpc
{
}

/**
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class RemoveDrdsDb extends Rpc
{
}

/**
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 * @method array getDbPrivilege()
 */
class ModifyAccountPrivilege extends Rpc
{

    /**
     * @param array $dbPrivilege
     *
     * @return $this
     */
    public function withDbPrivilege(array $dbPrivilege)
    {
        $this->data['DbPrivilege'] = $dbPrivilege;
        foreach ($dbPrivilege as $depth1 => $depth1Value) {
            $this->options['query']['DbPrivilege.' . ($depth1 + 1) . '.DbName'] = $depth1Value['DbName'];
            $this->options['query']['DbPrivilege.' . ($depth1 + 1) . '.Privilege'] = $depth1Value['Privilege'];
        }

        return $this;
    }
}

/**
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getExeTime()
 * @method $this withExeTime($value)
 */
class DescribeDrdsSlowSqls extends Rpc
{
}

/**
 * @method string getMode()
 * @method $this withMode($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getGroupAttribute()
 * @method $this withGroupAttribute($value)
 * @method string getIpWhiteList()
 * @method $this withIpWhiteList($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 */
class ModifyDrdsIpWhiteList extends Rpc
{
}

/**
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 */
class DescribeDrdsDBIpWhiteList extends Rpc
{
}

/**
 * @method string getTaskType()
 * @method $this withTaskType($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class DescribeDrdsTasks extends Rpc
{
}

/**
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method array getDbInstance()
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class ConfigureDrdsDbInstances extends Rpc
{

    /**
     * @param array $dbInstance
     *
     * @return $this
     */
    public function withDbInstance(array $dbInstance)
    {
        $this->data['DbInstance'] = $dbInstance;
        foreach ($dbInstance as $depth1 => $depth1Value) {
            $this->options['query']['DbInstance.' . ($depth1 + 1) . '.SlaveDbInstanceType'] = $depth1Value['SlaveDbInstanceType'];
            $this->options['query']['DbInstance.' . ($depth1 + 1) . '.SlaveDbInstanceId'] = $depth1Value['SlaveDbInstanceId'];
            $this->options['query']['DbInstance.' . ($depth1 + 1) . '.MasterDbInstanceId'] = $depth1Value['MasterDbInstanceId'];
        }

        return $this;
    }
}

/**
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class RestartDrdsInstance extends Rpc
{
}

/**
 * @method string getTraceId()
 * @method $this withTraceId($value)
 * @method string getSqlType()
 * @method $this withSqlType($value)
 * @method string getSqlPk()
 * @method $this withSqlPk($value)
 * @method string getRecallRestoreType()
 * @method $this withRecallRestoreType($value)
 * @method string getRecallType()
 * @method $this withRecallType($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class SubmitSqlFlashbackTask extends Rpc
{
}

/**
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class EnableSqlFlashbackMatchSwitch extends Rpc
{
}

/**
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class PreCheckSqlFlashbackTask extends Rpc
{
}

class CheckSlsStatus extends Rpc
{
}

/**
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class DisableSqlAudit extends Rpc
{
}

/**
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class CheckSqlAuditEnableStatus extends Rpc
{
}

/**
 * @method string getRecallStartTimestamp()
 * @method $this withRecallStartTimestamp($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getIsRecall()
 * @method $this withIsRecall($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 * @method string getRecallEndTimestamp()
 * @method $this withRecallEndTimestamp($value)
 */
class EnableSqlAudit extends Rpc
{
}

class CheckDrdsDefaultRole extends Rpc
{
}

/**
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class RefreshDrdsAtomUrl extends Rpc
{
}

/**
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class DescribeInstanceMenuSwitch extends Rpc
{
}

/**
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class DescribeDrdsInstanceLevelTasks extends Rpc
{
}

/**
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class DescribeBackMenu extends Rpc
{
}

/**
 * @method string getPreferredRestoreTime()
 * @method $this withPreferredRestoreTime($value)
 * @method string getBackupId()
 * @method $this withBackupId($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class DescribeBackupDbs extends Rpc
{
}

/**
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class DescribeBackupLocal extends Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class DescribeBackupSets extends Rpc
{
}

/**
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class DescribeBackupPolicy extends Rpc
{
}

/**
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class DescribeBackupTimes extends Rpc
{
}

/**
 * @method string getPreferredBackupTime()
 * @method $this withPreferredBackupTime($value)
 * @method string getBackupDbNames()
 * @method $this withBackupDbNames($value)
 * @method string getBackupId()
 * @method $this withBackupId($value)
 * @method string getBackupMode()
 * @method $this withBackupMode($value)
 * @method string getBackupLevel()
 * @method $this withBackupLevel($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class DescribeRestoreOrder extends Rpc
{
}

/**
 * @method string getPreferredBackupTime()
 * @method $this withPreferredBackupTime($value)
 * @method string getBackupDbNames()
 * @method $this withBackupDbNames($value)
 * @method string getBackupId()
 * @method $this withBackupId($value)
 * @method string getBackupMode()
 * @method $this withBackupMode($value)
 * @method string getBackupLevel()
 * @method $this withBackupLevel($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class PutRestorePreCheck extends Rpc
{
}

/**
 * @method string getLocalLogRetentionHours()
 * @method $this withLocalLogRetentionHours($value)
 * @method string getHighSpaceUsageProtection()
 * @method $this withHighSpaceUsageProtection($value)
 * @method string getLocalLogRetentionSpace()
 * @method $this withLocalLogRetentionSpace($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class SetBackupLocal extends Rpc
{
}

/**
 * @method string getBackupId()
 * @method $this withBackupId($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class RemoveBackupsSet extends Rpc
{
}

/**
 * @method string getPreferredBackupPeriod()
 * @method $this withPreferredBackupPeriod($value)
 * @method string getBackupDbNames()
 * @method $this withBackupDbNames($value)
 * @method string getDataBackupRetentionPeriod()
 * @method $this withDataBackupRetentionPeriod($value)
 * @method string getPreferredBackupStartTime()
 * @method $this withPreferredBackupStartTime($value)
 * @method string getPreferredBackupEndTime()
 * @method $this withPreferredBackupEndTime($value)
 * @method string getBackupMode()
 * @method $this withBackupMode($value)
 * @method string getBackupLog()
 * @method $this withBackupLog($value)
 * @method string getBackupLevel()
 * @method $this withBackupLevel($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 * @method string getLogBackupRetentionPeriod()
 * @method $this withLogBackupRetentionPeriod($value)
 */
class SetBackupPolicy extends Rpc
{
}

/**
 * @method string getPreferredBackupTime()
 * @method $this withPreferredBackupTime($value)
 * @method string getBackupDbNames()
 * @method $this withBackupDbNames($value)
 * @method string getBackupId()
 * @method $this withBackupId($value)
 * @method string getBackupMode()
 * @method $this withBackupMode($value)
 * @method string getBackupLevel()
 * @method $this withBackupLevel($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class StartRestore extends Rpc
{
}

/**
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getDbInstanceId()
 * @method $this withDbInstanceId($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class CheckRdsSuperAccount extends Rpc
{
}

/**
 * @method string getBackupDbNames()
 * @method $this withBackupDbNames($value)
 * @method string getBackupMode()
 * @method $this withBackupMode($value)
 * @method string getBackupLevel()
 * @method $this withBackupLevel($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class PutStartBackup extends Rpc
{
}

/**
 * @method string getTaskType()
 * @method $this withTaskType($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class DescribeDrdsDbTasks extends Rpc
{
}

/**
 * @method array getRdsSuperInstances()
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method array getTransferTaskInfos()
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 * @method string getDbInstanceIsCreating()
 * @method $this withDbInstanceIsCreating($value)
 */
class SubmitSmoothExpandTask extends Rpc
{

    /**
     * @param array $rdsSuperInstances
     *
     * @return $this
     */
    public function withRdsSuperInstances(array $rdsSuperInstances)
    {
        $this->data['RdsSuperInstances'] = $rdsSuperInstances;
        foreach ($rdsSuperInstances as $depth1 => $depth1Value) {
            $this->options['query']['RdsSuperInstances.' . ($depth1 + 1) . '.Password'] = $depth1Value['Password'];
            $this->options['query']['RdsSuperInstances.' . ($depth1 + 1) . '.AccountName'] = $depth1Value['AccountName'];
            $this->options['query']['RdsSuperInstances.' . ($depth1 + 1) . '.RdsName'] = $depth1Value['RdsName'];
        }

        return $this;
    }

    /**
     * @param array $transferTaskInfos
     *
     * @return $this
     */
    public function withTransferTaskInfos(array $transferTaskInfos)
    {
        $this->data['TransferTaskInfos'] = $transferTaskInfos;
        foreach ($transferTaskInfos as $depth1 => $depth1Value) {
            $this->options['query']['TransferTaskInfos.' . ($depth1 + 1) . '.DbName'] = $depth1Value['DbName'];
            $this->options['query']['TransferTaskInfos.' . ($depth1 + 1) . '.SrcInstanceName'] = $depth1Value['SrcInstanceName'];
            $this->options['query']['TransferTaskInfos.' . ($depth1 + 1) . '.InstanceType'] = $depth1Value['InstanceType'];
            $this->options['query']['TransferTaskInfos.' . ($depth1 + 1) . '.DstInstanceName'] = $depth1Value['DstInstanceName'];
        }

        return $this;
    }
}

/**
 * @method string getChooseSubDb()
 * @method $this withChooseSubDb($value)
 * @method array getInstanceList()
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getChooseRds()
 * @method $this withChooseRds($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class RearrangeDbToInstance extends Rpc
{

    /**
     * @param array $instanceList
     *
     * @return $this
     */
    public function withInstanceList(array $instanceList)
    {
        $this->data['InstanceList'] = $instanceList;
        foreach ($instanceList as $i => $iValue) {
            $this->options['query']['InstanceList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getDbInstanceId()
 * @method $this withDbInstanceId($value)
 * @method string getDbInstType()
 * @method $this withDbInstType($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class DescribeDbInstanceDbs extends Rpc
{
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getParentJobId()
 * @method $this withParentJobId($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 * @method string getExpandType()
 * @method $this withExpandType($value)
 */
class SubmitSwitchTask extends Rpc
{
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getParentJobId()
 * @method $this withParentJobId($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 * @method string getExpandType()
 * @method $this withExpandType($value)
 */
class SubmitCleanTask extends Rpc
{
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getParentJobId()
 * @method $this withParentJobId($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 * @method string getExpandType()
 * @method $this withExpandType($value)
 */
class SubmitRollbackTask extends Rpc
{
}

/**
 * @method array getInstanceDbMapping()
 * @method array getMapping()
 * @method string getTaskDesc()
 * @method $this withTaskDesc($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method array getSupperAccountMapping()
 * @method array getExtendedMapping()
 * @method string getTaskName()
 * @method $this withTaskName($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class SubmitHotExpandTask extends Rpc
{

    /**
     * @param array $instanceDbMapping
     *
     * @return $this
     */
    public function withInstanceDbMapping(array $instanceDbMapping)
    {
        $this->data['InstanceDbMapping'] = $instanceDbMapping;
        foreach ($instanceDbMapping as $depth1 => $depth1Value) {
            $this->options['query']['InstanceDbMapping.' . ($depth1 + 1) . '.DbList'] = $depth1Value['DbList'];
            $this->options['query']['InstanceDbMapping.' . ($depth1 + 1) . '.InstanceName'] = $depth1Value['InstanceName'];
        }

        return $this;
    }

    /**
     * @param array $mapping
     *
     * @return $this
     */
    public function withMapping(array $mapping)
    {
        $this->data['Mapping'] = $mapping;
        foreach ($mapping as $depth1 => $depth1Value) {
            $this->options['query']['Mapping.' . ($depth1 + 1) . '.DbShardColumn'] = $depth1Value['DbShardColumn'];
            $this->options['query']['Mapping.' . ($depth1 + 1) . '.TbShardColumn'] = $depth1Value['TbShardColumn'];
            $this->options['query']['Mapping.' . ($depth1 + 1) . '.ShardTbValue'] = $depth1Value['ShardTbValue'];
            $this->options['query']['Mapping.' . ($depth1 + 1) . '.HotDbName'] = $depth1Value['HotDbName'];
            $this->options['query']['Mapping.' . ($depth1 + 1) . '.ShardDbValue'] = $depth1Value['ShardDbValue'];
            $this->options['query']['Mapping.' . ($depth1 + 1) . '.HotTableName'] = $depth1Value['HotTableName'];
            $this->options['query']['Mapping.' . ($depth1 + 1) . '.LogicTable'] = $depth1Value['LogicTable'];
        }

        return $this;
    }

    /**
     * @param array $supperAccountMapping
     *
     * @return $this
     */
    public function withSupperAccountMapping(array $supperAccountMapping)
    {
        $this->data['SupperAccountMapping'] = $supperAccountMapping;
        foreach ($supperAccountMapping as $depth1 => $depth1Value) {
            $this->options['query']['SupperAccountMapping.' . ($depth1 + 1) . '.InstanceName'] = $depth1Value['InstanceName'];
            $this->options['query']['SupperAccountMapping.' . ($depth1 + 1) . '.SupperAccount'] = $depth1Value['SupperAccount'];
            $this->options['query']['SupperAccountMapping.' . ($depth1 + 1) . '.SupperPassword'] = $depth1Value['SupperPassword'];
        }

        return $this;
    }

    /**
     * @param array $extendedMapping
     *
     * @return $this
     */
    public function withExtendedMapping(array $extendedMapping)
    {
        $this->data['ExtendedMapping'] = $extendedMapping;
        foreach ($extendedMapping as $depth1 => $depth1Value) {
            $this->options['query']['ExtendedMapping.' . ($depth1 + 1) . '.SrcInstanceId'] = $depth1Value['SrcInstanceId'];
            $this->options['query']['ExtendedMapping.' . ($depth1 + 1) . '.SrcDb'] = $depth1Value['SrcDb'];
        }

        return $this;
    }
}

/**
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class GetHotDbList extends Rpc
{
}

/**
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method array getPartitionMapping()
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class GetSrcRdsList extends Rpc
{

    /**
     * @param array $partitionMapping
     *
     * @return $this
     */
    public function withPartitionMapping(array $partitionMapping)
    {
        $this->data['PartitionMapping'] = $partitionMapping;
        foreach ($partitionMapping as $depth1 => $depth1Value) {
            $this->options['query']['PartitionMapping.' . ($depth1 + 1) . '.DbShardValue'] = $depth1Value['DbShardValue'];
            $this->options['query']['PartitionMapping.' . ($depth1 + 1) . '.HotDbName'] = $depth1Value['HotDbName'];
            $this->options['query']['PartitionMapping.' . ($depth1 + 1) . '.HotTableName'] = $depth1Value['HotTableName'];
            $this->options['query']['PartitionMapping.' . ($depth1 + 1) . '.TbShardValue'] = $depth1Value['TbShardValue'];
            $this->options['query']['PartitionMapping.' . ($depth1 + 1) . '.LogicTable'] = $depth1Value['LogicTable'];
        }

        return $this;
    }
}

/**
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class GetLogicTableInfoList extends Rpc
{
}

/**
 * @method array getInstanceList()
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class CheckRdsExpandStatus extends Rpc
{

    /**
     * @param array $instanceList
     *
     * @return $this
     */
    public function withInstanceList(array $instanceList)
    {
        $this->data['InstanceList'] = $instanceList;
        foreach ($instanceList as $i => $iValue) {
            $this->options['query']['InstanceList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class CheckExpandStatus extends Rpc
{
}

/**
 * @method string getSearch()
 * @method $this withSearch($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getAcrossZone()
 * @method $this withAcrossZone($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class GetCandidateInstanceList extends Rpc
{
}

/**
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class GetExpandLogicTableInfoList extends Rpc
{
}

/**
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method array getPartitionMapping()
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class DescribeSrcRdsList extends Rpc
{

    /**
     * @param array $partitionMapping
     *
     * @return $this
     */
    public function withPartitionMapping(array $partitionMapping)
    {
        $this->data['PartitionMapping'] = $partitionMapping;
        foreach ($partitionMapping as $depth1 => $depth1Value) {
            $this->options['query']['PartitionMapping.' . ($depth1 + 1) . '.DbShardValue'] = $depth1Value['DbShardValue'];
            $this->options['query']['PartitionMapping.' . ($depth1 + 1) . '.HotDbName'] = $depth1Value['HotDbName'];
            $this->options['query']['PartitionMapping.' . ($depth1 + 1) . '.HotTableName'] = $depth1Value['HotTableName'];
            $this->options['query']['PartitionMapping.' . ($depth1 + 1) . '.TbShardValue'] = $depth1Value['TbShardValue'];
            $this->options['query']['PartitionMapping.' . ($depth1 + 1) . '.LogicTable'] = $depth1Value['LogicTable'];
        }

        return $this;
    }
}

/**
 * @method string getSearch()
 * @method $this withSearch($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getAcrossZone()
 * @method $this withAcrossZone($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeCandidateInstanceList extends Rpc
{
}

/**
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class DescribeExpandLogicTableInfoList extends Rpc
{
}

/**
 * @method string getCurrentPlan()
 * @method $this withCurrentPlan($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class DescribeCanExpandInstanceDetailList extends Rpc
{
}

/**
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class DescribeHotDbList extends Rpc
{
}

/**
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class DescribeSqlFlashbakTask extends Rpc
{
}

/**
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getSrcDrdsInstanceId()
 * @method $this withSrcDrdsInstanceId($value)
 * @method string getDstDrdsInstanceId()
 * @method $this withDstDrdsInstanceId($value)
 */
class MigrateJstDrdsDbAcrossRegion extends Rpc
{
}

/**
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class RefreshJstMigrateDrdsDbAtomUrl extends Rpc
{
}

/**
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class DescribeInstDbLogInfo extends Rpc
{
}

/**
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class DescribeInstDbSlsInfo extends Rpc
{
}

/**
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class RemoveRecycleBinTable extends Rpc
{
}

/**
 * @method string getTaskType()
 * @method $this withTaskType($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getSourceTableName()
 * @method $this withSourceTableName($value)
 * @method string getTargetTableName()
 * @method $this withTargetTableName($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class CreateShardTask extends Rpc
{
}

/**
 * @method string getDrdsPassword()
 * @method $this withDrdsPassword($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class EnableInstanceIpv6Address extends Rpc
{
}

/**
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class DescribeTable extends Rpc
{
}

/**
 * @method string getDrdsPassword()
 * @method $this withDrdsPassword($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class UpgradeInstanceVersion extends Rpc
{
}

/**
 * @method string getTableType()
 * @method $this withTableType($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getQuery()
 * @method $this withQuery($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class DescribeTableListByType extends Rpc
{
}

/**
 * @method string getTaskType()
 * @method $this withTaskType($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getSourceTableName()
 * @method $this withSourceTableName($value)
 * @method string getTargetTableName()
 * @method $this withTargetTableName($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class ValidateShardTask extends Rpc
{
}

/**
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getQuery()
 * @method $this withQuery($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class DescribeTables extends Rpc
{
}

/**
 * @method string getTaskType()
 * @method $this withTaskType($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getQuery()
 * @method $this withQuery($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class DescribeShardTaskList extends Rpc
{
}

/**
 * @method string getDrdsPassword()
 * @method $this withDrdsPassword($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class CreateInstanceInternetAddress extends Rpc
{
}

/**
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getQuery()
 * @method $this withQuery($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class DescribeBroadcastTables extends Rpc
{
}

/**
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class FlashbackRecycleBinTable extends Rpc
{
}

/**
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getActive()
 * @method $this withActive($value)
 * @method array getTableName()
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class SetupBroadcastTables extends Rpc
{

    /**
     * @param array $tableName
     *
     * @return $this
     */
    public function withTableName(array $tableName)
    {
        $this->data['TableName'] = $tableName;
        foreach ($tableName as $i => $iValue) {
            $this->options['query']['TableName.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getDrdsPassword()
 * @method $this withDrdsPassword($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class RollbackInstanceVersion extends Rpc
{
}

/**
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class DescribeGlobalBroadcastType extends Rpc
{
}

/**
 * @method string getDrdsPassword()
 * @method $this withDrdsPassword($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class ReleaseInstanceInternetAddress extends Rpc
{
}

/**
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class DescribeRecycleBinTables extends Rpc
{
}

/**
 * @method string getParamLevel()
 * @method $this withParamLevel($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class DescribeDrdsParams extends Rpc
{
}

/**
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method array getTableName()
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class DeleteShardTasks extends Rpc
{

    /**
     * @param array $tableName
     *
     * @return $this
     */
    public function withTableName(array $tableName)
    {
        $this->data['TableName'] = $tableName;
        foreach ($tableName as $depth1 => $depth1Value) {
            $this->options['query']['TableName.' . ($depth1 + 1) . '.SourceTableName'] = $depth1Value['SourceTableName'];
            $this->options['query']['TableName.' . ($depth1 + 1) . '.TargetTableName'] = $depth1Value['TargetTableName'];
        }

        return $this;
    }
}

/**
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getAllowFullTableScan()
 * @method $this withAllowFullTableScan($value)
 * @method array getTableName()
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class SetupTable extends Rpc
{

    /**
     * @param array $tableName
     *
     * @return $this
     */
    public function withTableName(array $tableName)
    {
        $this->data['TableName'] = $tableName;
        foreach ($tableName as $i => $iValue) {
            $this->options['query']['TableName.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getParamLevel()
 * @method $this withParamLevel($value)
 * @method array getData()
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class SetupDrdsParams extends Rpc
{

    /**
     * @param array $data
     *
     * @return $this
     */
    public function withData(array $data)
    {
        $this->data['Data'] = $data;
        foreach ($data as $depth1 => $depth1Value) {
            $this->options['query']['Data.' . ($depth1 + 1) . '.ParamType'] = $depth1Value['ParamType'];
            $this->options['query']['Data.' . ($depth1 + 1) . '.DbName'] = $depth1Value['DbName'];
            $this->options['query']['Data.' . ($depth1 + 1) . '.ParamRanges'] = $depth1Value['ParamRanges'];
            $this->options['query']['Data.' . ($depth1 + 1) . '.ParamVariableName'] = $depth1Value['ParamVariableName'];
            $this->options['query']['Data.' . ($depth1 + 1) . '.ParamValue'] = $depth1Value['ParamValue'];
        }

        return $this;
    }
}

/**
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class DescribeRecycleBinStatus extends Rpc
{
}

/**
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getSourceTableName()
 * @method $this withSourceTableName($value)
 * @method string getTargetTableName()
 * @method $this withTargetTableName($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class DescribeShardTaskInfo extends Rpc
{
}

/**
 * @method string getStatusAction()
 * @method $this withStatusAction($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class SetupRecycleBinStatus extends Rpc
{
}

/**
 * @method string getAll()
 * @method $this withAll($value)
 * @method string getNoRole()
 * @method $this withNoRole($value)
 * @method array getResourceId()
 * @method array getTagKey()
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class UntagResources extends Rpc
{

    /**
     * @param array $resourceId
     *
     * @return $this
     */
    public function withResourceId(array $resourceId)
    {
        $this->data['ResourceId'] = $resourceId;
        foreach ($resourceId as $i => $iValue) {
            $this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $tagKey
     *
     * @return $this
     */
    public function withTagKey(array $tagKey)
    {
        $this->data['TagKey'] = $tagKey;
        foreach ($tagKey as $i => $iValue) {
            $this->options['query']['TagKey.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 * @method string getKey()
 * @method $this withKey($value)
 * @method string getPeriodMultiple()
 * @method $this withPeriodMultiple($value)
 */
class DescribeDrdsInstanceMonitor extends Rpc
{
}

/**
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 * @method string getKey()
 * @method $this withKey($value)
 */
class DescribeDrdsInstanceDbMonitor extends Rpc
{
}

/**
 * @method string getNoRole()
 * @method $this withNoRole($value)
 * @method array getResourceId()
 * @method array getTag()
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class TagResources extends Rpc
{

    /**
     * @param array $resourceId
     *
     * @return $this
     */
    public function withResourceId(array $resourceId)
    {
        $this->data['ResourceId'] = $resourceId;
        foreach ($resourceId as $i => $iValue) {
            $this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $tag
     *
     * @return $this
     */
    public function withTag(array $tag)
    {
        $this->data['Tag'] = $tag;
        foreach ($tag as $depth1 => $depth1Value) {
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
        }

        return $this;
    }
}

/**
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class RemoveDrdsDbFailedRecord extends Rpc
{
}

/**
 * @method string getNoRole()
 * @method $this withNoRole($value)
 * @method array getResourceId()
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method array getTag()
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class ListTagResources extends Rpc
{

    /**
     * @param array $resourceId
     *
     * @return $this
     */
    public function withResourceId(array $resourceId)
    {
        $this->data['ResourceId'] = $resourceId;
        foreach ($resourceId as $i => $iValue) {
            $this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $tag
     *
     * @return $this
     */
    public function withTag(array $tag)
    {
        $this->data['Tag'] = $tag;
        foreach ($tag as $depth1 => $depth1Value) {
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
        }

        return $this;
    }
}

/**
 * @method string getCommodityCode()
 * @method $this withCommodityCode($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class DescribeRdsCommodity extends Rpc
{
}

/**
 * @method string getParams()
 * @method $this withParams($value)
 */
class DescribeRdsPrice extends Rpc
{
}

/**
 * @method string getParams()
 * @method $this withParams($value)
 */
class CreateOrderForRds extends Rpc
{
}

/**
 * @method string getZoneId()
 * @method $this withZoneId($value)
 */
class DescribeRdsVpcForZone extends Rpc
{
}

/**
 * @method array getRdsInstanceId()
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class DescribeRdsPerformanceSummary extends Rpc
{

    /**
     * @param array $rdsInstanceId
     *
     * @return $this
     */
    public function withRdsInstanceId(array $rdsInstanceId)
    {
        $this->data['RdsInstanceId'] = $rdsInstanceId;
        foreach ($rdsInstanceId as $i => $iValue) {
            $this->options['query']['RdsInstanceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class ModifyDrdsInstanceDescription extends Rpc
{
}
