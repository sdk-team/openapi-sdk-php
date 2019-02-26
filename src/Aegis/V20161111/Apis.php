<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RpcRequest as Rpc;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method DescribeStatistics describeStatistics($options = [])
 * @method ModifySaveVulBatch modifySaveVulBatch($options = [])
 * @method DescribeVulBatch describeVulBatch($options = [])
 * @method DescribeVulLevel describeVulLevel($options = [])
 * @method ModifyVulLevel modifyVulLevel($options = [])
 * @method DescribeVulNumStatistics describeVulNumStatistics($options = [])
 * @method ExportVul exportVul($options = [])
 * @method DescribeVulMachineList describeVulMachineList($options = [])
 * @method DescribeGroupedVul describeGroupedVul($options = [])
 * @method DescribeTargetConfig describeTargetConfig($options = [])
 * @method DescribeVulExportInfo describeVulExportInfo($options = [])
 * @method ModifyVulConfig modifyVulConfig($options = [])
 * @method CreateVulWhitelist createVulWhitelist($options = [])
 * @method DescribeAutoDelConfig describeAutoDelConfig($options = [])
 * @method ModifyTargetConfig modifyTargetConfig($options = [])
 * @method DescribeVulWhitelist describeVulWhitelist($options = [])
 * @method DeleteVulBatch deleteVulBatch($options = [])
 * @method ModifyVulTarget modifyVulTarget($options = [])
 * @method DescribeVulTargetStatistics describeVulTargetStatistics($options = [])
 * @method DeleteVulWhitelist deleteVulWhitelist($options = [])
 * @method DescribeTarget describeTarget($options = [])
 * @method ModifyAutoDelConfig modifyAutoDelConfig($options = [])
 * @method DescribeVulConfig describeVulConfig($options = [])
 * @method OperateVul operateVul($options = [])
 * @method DescribeVulLevelStatistics describeVulLevelStatistics($options = [])
 * @method DescribeListAccessKeyIdAuth describeListAccessKeyIdAuth($options = [])
 * @method DescribeScreenVersionConfig describeScreenVersionConfig($options = [])
 * @method DescribeScreenOperateInfo describeScreenOperateInfo($options = [])
 * @method DescribeScreenHostStatistics describeScreenHostStatistics($options = [])
 * @method DescribeScreenAlarmEventList describeScreenAlarmEventList($options = [])
 * @method DescribeScreenSummaryInfo describeScreenSummaryInfo($options = [])
 * @method DescribeScreenAttackAnalysisData describeScreenAttackAnalysisData($options = [])
 * @method DescribeScreenSecurityStatInfo describeScreenSecurityStatInfo($options = [])
 * @method DescribeScreenScoreThread describeScreenScoreThread($options = [])
 * @method ModifyScreenSetting modifyScreenSetting($options = [])
 * @method DescribeScreenSettings describeScreenSettings($options = [])
 * @method DescribeScreenSetting describeScreenSetting($options = [])
 * @method DeleteScreenSetting deleteScreenSetting($options = [])
 * @method CreatScreenSetting creatScreenSetting($options = [])
 * @method DescribeAttackAnalysisData describeAttackAnalysisData($options = [])
 * @method DescribeAlarmEventDetail describeAlarmEventDetail($options = [])
 * @method DescribeAlarmEventList describeAlarmEventList($options = [])
 * @method OperateSuspiciousEvent operateSuspiciousEvent($options = [])
 * @method DescribeQuaraFile describeQuaraFile($options = [])
 * @method RollbackQuaraFile rollbackQuaraFile($options = [])
 * @method DescribeSuspEventTypes describeSuspEventTypes($options = [])
 * @method DescribeSuspTrendStatistics describeSuspTrendStatistics($options = [])
 * @method DescribeSummaryInfo describeSummaryInfo($options = [])
 * @method DescribeSecurityStatInfo describeSecurityStatInfo($options = [])
 * @method DescribeOperateInfo describeOperateInfo($options = [])
 * @method DescribeWebLockEvents describeWebLockEvents($options = [])
 * @method ModifyWebLockUpdateConfig modifyWebLockUpdateConfig($options = [])
 * @method ModifyWebLockCreateConfig modifyWebLockCreateConfig($options = [])
 * @method ModifyWebLockDeleteConfig modifyWebLockDeleteConfig($options = [])
 * @method DescribeWebLockConfigList describeWebLockConfigList($options = [])
 * @method ModifyWebLockRefresh modifyWebLockRefresh($options = [])
 * @method ModifyWebLockStatus modifyWebLockStatus($options = [])
 * @method DescribeWebLockBindList describeWebLockBindList($options = [])
 * @method ModifyWebLockMachineList modifyWebLockMachineList($options = [])
 * @method DescribeWebLockMachineList describeWebLockMachineList($options = [])
 * @method DescribeWebLockStatus describeWebLockStatus($options = [])
 * @method OperateSuspiciousTargetConfig operateSuspiciousTargetConfig($options = [])
 * @method OperateSuspiciousOverallConfig operateSuspiciousOverallConfig($options = [])
 * @method DescribeSuspiciousUUIDConfig describeSuspiciousUUIDConfig($options = [])
 * @method DescribeSuspiciousOverallConfig describeSuspiciousOverallConfig($options = [])
 * @method DescribeDataSource describeDataSource($options = [])
 * @method DeleteRule deleteRule($options = [])
 * @method DescribeRuleList describeRuleList($options = [])
 * @method CreateOrUpdateRule createOrUpdateRule($options = [])
 * @method DeleteRuleGroup deleteRuleGroup($options = [])
 * @method DescribeGroupList describeGroupList($options = [])
 * @method CreateOrUpdateGroup createOrUpdateGroup($options = [])
 * @method DescribeBuySummary describeBuySummary($options = [])
 * @method ModifyOpenLogShipper modifyOpenLogShipper($options = [])
 * @method DescribeLogShipperStatus describeLogShipperStatus($options = [])
 * @method ModifyLogMetaStatus modifyLogMetaStatus($options = [])
 * @method DescribeLogMeta describeLogMeta($options = [])
 * @method DescribeApiBuySummary describeApiBuySummary($options = [])
 * @method DescribeVersionConfig describeVersionConfig($options = [])
 * @method DescribeEventLevelCount describeEventLevelCount($options = [])
 * @method DescribeTotalStatistics describeTotalStatistics($options = [])
 * @method DescribeInstanceStatistics describeInstanceStatistics($options = [])
 * @method DescribeAllRegionsStatistics describeAllRegionsStatistics($options = [])
 * @method DescribeAssetSummary describeAssetSummary($options = [])
 * @method DescribeEmgUserAgreement describeEmgUserAgreement($options = [])
 * @method ModifyEmgVulSubmit modifyEmgVulSubmit($options = [])
 * @method DescribeEmgNotice describeEmgNotice($options = [])
 * @method DescribeEmgVulGroup describeEmgVulGroup($options = [])
 * @method DescribeYesterdayStatistics describeYesterdayStatistics($options = [])
 * @method ModifyConcernNecessity modifyConcernNecessity($options = [])
 * @method DescribeConcernNecessity describeConcernNecessity($options = [])
 * @method DescribeVulnerabilitySummary describeVulnerabilitySummary($options = [])
 * @method SaveSuspEventUserSetting saveSuspEventUserSetting($options = [])
 * @method RollbackSuspEventQuaraFile rollbackSuspEventQuaraFile($options = [])
 * @method OperationSuspEvents operationSuspEvents($options = [])
 * @method ExportSuspEvents exportSuspEvents($options = [])
 * @method ExecStrategy execStrategy($options = [])
 * @method DescribeUuidConfig describeUuidConfig($options = [])
 * @method DescribeSuspEventUserSetting describeSuspEventUserSetting($options = [])
 * @method DescribeSuspEvents describeSuspEvents($options = [])
 * @method DescribeSuspEventQuaraFiles describeSuspEventQuaraFiles($options = [])
 * @method DescribeSuspEventExportInfo describeSuspEventExportInfo($options = [])
 * @method DescribeSuspEventDetail describeSuspEventDetail($options = [])
 * @method DescribeStrategyExecDetail describeStrategyExecDetail($options = [])
 * @method DescribeNsasSuspEventType describeNsasSuspEventType($options = [])
 * @method ModifyAssetGroup modifyAssetGroup($options = [])
 * @method DeleteSearchCondition deleteSearchCondition($options = [])
 * @method ModifySearchCondition modifySearchCondition($options = [])
 * @method DescribeSearchCondition describeSearchCondition($options = [])
 * @method ModifySasAssetStatisticsColumn modifySasAssetStatisticsColumn($options = [])
 * @method DescribeSasAssetStatisticsColumn describeSasAssetStatisticsColumn($options = [])
 * @method DescribeAssetDetailByUuid describeAssetDetailByUuid($options = [])
 * @method TransformLeakage transformLeakage($options = [])
 * @method AutoUpgradeSas autoUpgradeSas($options = [])
 * @method DescribeTopRiskyAssets describeTopRiskyAssets($options = [])
 * @method DescribeEventCountCurve describeEventCountCurve($options = [])
 * @method DescribeSasAssetStatistics describeSasAssetStatistics($options = [])
 * @method DescribeAssetList describeAssetList($options = [])
 * @method DescribeSasLeftCondition describeSasLeftCondition($options = [])
 * @method OperateWarning operateWarning($options = [])
 * @method ModifyMachineConfig modifyMachineConfig($options = [])
 * @method ExportWarning exportWarning($options = [])
 * @method DescribeUserSetting describeUserSetting($options = [])
 * @method Describesummary describesummary($options = [])
 * @method DescribeRiskWhiteList describeRiskWhiteList($options = [])
 * @method DescribeRiskType describeRiskType($options = [])
 * @method DescribeRisks describeRisks($options = [])
 * @method DescribeMachineConfig describeMachineConfig($options = [])
 * @method DescribeMacConfig describeMacConfig($options = [])
 * @method DescribeExportInfo describeExportInfo($options = [])
 * @method CreateUserWhiteList createUserWhiteList($options = [])
 * @method CreateUserSetting createUserSetting($options = [])
 * @method BatchDeleteWhiteList batchDeleteWhiteList($options = [])
 * @method DescribeSuspiciousExportInfo describeSuspiciousExportInfo($options = [])
 * @method CreateSuspiciousExport createSuspiciousExport($options = [])
 * @method ModifyStrategyTarget modifyStrategyTarget($options = [])
 * @method ModifyStrategy modifyStrategy($options = [])
 * @method ModifyBatchIgnoreVul modifyBatchIgnoreVul($options = [])
 * @method DescribeWebshell describeWebshell($options = [])
 * @method DescribeWarning describeWarning($options = [])
 * @method DescribeVulList describeVulList($options = [])
 * @method DescribeVulDetails describeVulDetails($options = [])
 * @method DescribeSuspiciousEvents describeSuspiciousEvents($options = [])
 * @method DescribeStratetyDetail describeStratetyDetail($options = [])
 * @method DescribeStratety describeStratety($options = [])
 * @method DescribeStrategyTarget describeStrategyTarget($options = [])
 * @method DescribeLoginLogs describeLoginLogs($options = [])
 * @method DeleteStrategy deleteStrategy($options = [])
 * @method GetSummary getSummary($options = [])
 * @method QueryLoginEvent queryLoginEvent($options = [])
 * @method QueryCrackEvent queryCrackEvent($options = [])
 * @method GetStatisticsByUuid getStatisticsByUuid($options = [])
 * @method GetStatistics getStatistics($options = [])
 * @method GetEntityList getEntityList($options = [])
 * @method GetCrackStatistics getCrackStatistics($options = [])
 * @method GetAccountStatistics getAccountStatistics($options = [])
 * @method UpgradeInstance upgradeInstance($options = [])
 * @method RenewInstance renewInstance($options = [])
 * @method ReleaseInstance releaseInstance($options = [])
 * @method CreateInstance createInstance($options = [])
 */
class V20161111
{
    use ApiResolverTrait;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 */
class DescribeStatistics extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getStatusList
 * @method self withStatusList(string $statusList)
 * @method string getDealed
 * @method self withDealed(string $dealed)
 * @method string getType
 * @method self withType(string $type)
 * @method string getUuids
 * @method self withUuids(string $uuids)
 * @method string getRemark
 * @method self withRemark(string $remark)
 * @method string getLevel
 * @method self withLevel(string $level)
 * @method string getName
 * @method self withName(string $name)
 * @method string getAliasName
 * @method self withAliasName(string $aliasName)
 * @method string getNecessity
 * @method self withNecessity(string $necessity)
 * @method string getBatchName
 * @method self withBatchName(string $batchName)
 * @method string getResource
 * @method self withResource(string $resource)
 */
class ModifySaveVulBatch extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getResource
 * @method self withResource(string $resource)
 */
class DescribeVulBatch extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 */
class DescribeVulLevel extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getConcernLevel
 * @method self withConcernLevel(string $concernLevel)
 */
class ModifyVulLevel extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getUuids
 * @method self withUuids(string $uuids)
 * @method int getStartTs
 * @method self withStartTs(int $startTs)
 * @method int getEndTs
 * @method self withEndTs(int $endTs)
 * @method int getCreateTsStart
 * @method self withCreateTsStart(int $createTsStart)
 * @method int getCreateTsEnd
 * @method self withCreateTsEnd(int $createTsEnd)
 */
class DescribeVulNumStatistics extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getType
 * @method self withType(string $type)
 * @method string getUuids
 * @method self withUuids(string $uuids)
 * @method string getName
 * @method self withName(string $name)
 * @method string getLevel
 * @method self withLevel(string $level)
 * @method string getStatusList
 * @method self withStatusList(string $statusList)
 * @method string getAliasName
 * @method self withAliasName(string $aliasName)
 * @method string getBatchName
 * @method self withBatchName(string $batchName)
 * @method string getResource
 * @method self withResource(string $resource)
 * @method string getNecessity
 * @method self withNecessity(string $necessity)
 * @method string getDealed
 * @method self withDealed(string $dealed)
 */
class ExportVul extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getUuids
 * @method self withUuids(string $uuids)
 * @method int getStartTs
 * @method self withStartTs(int $startTs)
 * @method int getEndTs
 * @method self withEndTs(int $endTs)
 */
class DescribeVulMachineList extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getType
 * @method self withType(string $type)
 * @method string getUuids
 * @method self withUuids(string $uuids)
 * @method string getName
 * @method self withName(string $name)
 * @method string getAliasName
 * @method self withAliasName(string $aliasName)
 * @method int getPatchId
 * @method self withPatchId(int $patchId)
 * @method string getLevel
 * @method self withLevel(string $level)
 * @method int getLastTsStart
 * @method self withLastTsStart(int $lastTsStart)
 * @method int getLastTsEnd
 * @method self withLastTsEnd(int $lastTsEnd)
 * @method string getStatusList
 * @method self withStatusList(string $statusList)
 * @method string getOrderBy
 * @method self withOrderBy(string $orderBy)
 * @method string getDirection
 * @method self withDirection(string $direction)
 * @method string getNecessity
 * @method self withNecessity(string $necessity)
 * @method string getDealed
 * @method self withDealed(string $dealed)
 * @method int getCreateTsStart
 * @method self withCreateTsStart(int $createTsStart)
 * @method int getCreateTsEnd
 * @method self withCreateTsEnd(int $createTsEnd)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeGroupedVul extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getType
 * @method self withType(string $type)
 * @method string getUuid
 * @method self withUuid(string $uuid)
 */
class DescribeTargetConfig extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method int getExportId
 * @method self withExportId(int $exportId)
 */
class DescribeVulExportInfo extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getType
 * @method self withType(string $type)
 * @method string getConfig
 * @method self withConfig(string $config)
 */
class ModifyVulConfig extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getWhitelist
 * @method self withWhitelist(string $whitelist)
 * @method string getReason
 * @method self withReason(string $reason)
 */
class CreateVulWhitelist extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 */
class DescribeAutoDelConfig extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getType
 * @method self withType(string $type)
 * @method string getUuid
 * @method self withUuid(string $uuid)
 * @method string getConfig
 * @method self withConfig(string $config)
 */
class ModifyTargetConfig extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeVulWhitelist extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getBatchName
 * @method self withBatchName(string $batchName)
 * @method string getResource
 * @method self withResource(string $resource)
 */
class DeleteVulBatch extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getConfig
 * @method self withConfig(string $config)
 * @method string getTarget
 * @method self withTarget(string $target)
 */
class ModifyVulTarget extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getType
 * @method self withType(string $type)
 */
class DescribeVulTargetStatistics extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getWhitelist
 * @method self withWhitelist(string $whitelist)
 */
class DeleteVulWhitelist extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getType
 * @method self withType(string $type)
 * @method string getConfig
 * @method self withConfig(string $config)
 */
class DescribeTarget extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method Integer getDays
 * @method self withDays(Integer $days)
 */
class ModifyAutoDelConfig extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getType
 * @method self withType(string $type)
 */
class DescribeVulConfig extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getInfo
 * @method self withInfo(string $info)
 * @method string getOperateType
 * @method self withOperateType(string $operateType)
 * @method string getType
 * @method self withType(string $type)
 * @method string getReason
 * @method self withReason(string $reason)
 */
class OperateVul extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getUuids
 * @method self withUuids(string $uuids)
 * @method int getStartTs
 * @method self withStartTs(int $startTs)
 * @method int getEndTs
 * @method self withEndTs(int $endTs)
 */
class DescribeVulLevelStatistics extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 */
class DescribeListAccessKeyIdAuth extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 */
class DescribeScreenVersionConfig extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 */
class DescribeScreenOperateInfo extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 */
class DescribeScreenHostStatistics extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getDealed
 * @method self withDealed(string $dealed)
 * @method string getFrom
 * @method self withFrom(string $from)
 * @method string getLevels
 * @method self withLevels(string $levels)
 * @method string getRemark
 * @method self withRemark(string $remark)
 * @method string getAlarmEventName
 * @method self withAlarmEventName(string $alarmEventName)
 * @method string getAlarmEventType
 * @method self withAlarmEventType(string $alarmEventType)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method string getPageSize
 * @method self withPageSize(string $pageSize)
 */
class DescribeScreenAlarmEventList extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 */
class DescribeScreenSummaryInfo extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getType
 * @method self withType(string $type)
 * @method int getStartTime
 * @method self withStartTime(int $startTime)
 * @method int getEndTime
 * @method self withEndTime(int $endTime)
 * @method string getData
 * @method self withData(string $data)
 * @method string getBase64
 * @method self withBase64(string $base64)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeScreenAttackAnalysisData extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 */
class DescribeScreenSecurityStatInfo extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method int getStartTime
 * @method self withStartTime(int $startTime)
 * @method int getEndTime
 * @method self withEndTime(int $endTime)
 */
class DescribeScreenScoreThread extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getScreenTitle
 * @method self withScreenTitle(string $screenTitle)
 * @method string getScreenIdSetting
 * @method self withScreenIdSetting(string $screenIdSetting)
 */
class ModifyScreenSetting extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 */
class DescribeScreenSettings extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getScreenTitle
 * @method self withScreenTitle(string $screenTitle)
 */
class DescribeScreenSetting extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getScreenTitle
 * @method self withScreenTitle(string $screenTitle)
 */
class DeleteScreenSetting extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getScreenTitle
 * @method self withScreenTitle(string $screenTitle)
 * @method string getScreenIdSetting
 * @method self withScreenIdSetting(string $screenIdSetting)
 */
class CreatScreenSetting extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getType
 * @method self withType(string $type)
 * @method int getStartTime
 * @method self withStartTime(int $startTime)
 * @method int getEndTime
 * @method self withEndTime(int $endTime)
 * @method string getData
 * @method self withData(string $data)
 * @method string getBase64
 * @method self withBase64(string $base64)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeAttackAnalysisData extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getAlarmUniqueInfo
 * @method self withAlarmUniqueInfo(string $alarmUniqueInfo)
 * @method string getFrom
 * @method self withFrom(string $from)
 */
class DescribeAlarmEventDetail extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getDealed
 * @method self withDealed(string $dealed)
 * @method string getFrom
 * @method self withFrom(string $from)
 * @method string getLevels
 * @method self withLevels(string $levels)
 * @method string getRemark
 * @method self withRemark(string $remark)
 * @method string getAlarmEventName
 * @method self withAlarmEventName(string $alarmEventName)
 * @method string getAlarmEventType
 * @method self withAlarmEventType(string $alarmEventType)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method string getPageSize
 * @method self withPageSize(string $pageSize)
 */
class DescribeAlarmEventList extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getOperateType
 * @method self withOperateType(string $operateType)
 * @method string getData
 * @method self withData(string $data)
 */
class OperateSuspiciousEvent extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 */
class DescribeQuaraFile extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getEventName
 * @method self withEventName(string $eventName)
 * @method string getTag
 * @method self withTag(string $tag)
 * @method string getEventType
 * @method self withEventType(string $eventType)
 * @method string getUuid
 * @method self withUuid(string $uuid)
 */
class RollbackQuaraFile extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 */
class DescribeSuspEventTypes extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 */
class DescribeSuspTrendStatistics extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 */
class DescribeSummaryInfo extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 */
class DescribeSecurityStatInfo extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 */
class DescribeOperateInfo extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getRemark
 * @method self withRemark(string $remark)
 * @method string getTag
 * @method self withTag(string $tag)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getEventName
 * @method self withEventName(string $eventName)
 * @method string getLevel
 * @method self withLevel(string $level)
 * @method string getDealed
 * @method self withDealed(string $dealed)
 * @method string getStatusList
 * @method self withStatusList(string $statusList)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeWebLockEvents extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method Integer getId
 * @method self withId(Integer $id)
 * @method string getUuid
 * @method self withUuid(string $uuid)
 * @method string getDir
 * @method self withDir(string $dir)
 * @method string getExclusiveDir
 * @method self withExclusiveDir(string $exclusiveDir)
 * @method string getExclusiveFileType
 * @method self withExclusiveFileType(string $exclusiveFileType)
 * @method string getLocalBackupDir
 * @method self withLocalBackupDir(string $localBackupDir)
 */
class ModifyWebLockUpdateConfig extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUuid
 * @method self withUuid(string $uuid)
 * @method string getDir
 * @method self withDir(string $dir)
 * @method string getExclusiveDir
 * @method self withExclusiveDir(string $exclusiveDir)
 * @method string getExclusiveFileType
 * @method self withExclusiveFileType(string $exclusiveFileType)
 * @method string getLocalBackupDir
 * @method self withLocalBackupDir(string $localBackupDir)
 */
class ModifyWebLockCreateConfig extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method Integer getId
 * @method self withId(Integer $id)
 * @method string getUuid
 * @method self withUuid(string $uuid)
 */
class ModifyWebLockDeleteConfig extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUuid
 * @method self withUuid(string $uuid)
 */
class DescribeWebLockConfigList extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUuid
 * @method self withUuid(string $uuid)
 */
class ModifyWebLockRefresh extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUuid
 * @method self withUuid(string $uuid)
 * @method string getStatus
 * @method self withStatus(string $status)
 */
class ModifyWebLockStatus extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getRemark
 * @method self withRemark(string $remark)
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeWebLockBindList extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUuids
 * @method self withUuids(string $uuids)
 */
class ModifyWebLockMachineList extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 */
class DescribeWebLockMachineList extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 */
class DescribeWebLockStatus extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getType
 * @method self withType(string $type)
 * @method string getTargetType
 * @method self withTargetType(string $targetType)
 * @method string getTargetOperations
 * @method self withTargetOperations(string $targetOperations)
 */
class OperateSuspiciousTargetConfig extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getType
 * @method self withType(string $type)
 * @method string getConfig
 * @method self withConfig(string $config)
 */
class OperateSuspiciousOverallConfig extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getType
 * @method self withType(string $type)
 */
class DescribeSuspiciousUUIDConfig extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getType
 * @method self withType(string $type)
 */
class DescribeSuspiciousOverallConfig extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method int getId
 * @method self withId(int $id)
 * @method string getGroupName
 * @method self withGroupName(string $groupName)
 * @method string getDescription
 * @method self withDescription(string $description)
 */
class DescribeDataSource extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getId
 * @method self withId(string $id)
 */
class DeleteRule extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method int getId
 * @method self withId(int $id)
 * @method string getExGroupId
 * @method self withExGroupId(string $exGroupId)
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 * @method string getWarnLevel
 * @method self withWarnLevel(string $warnLevel)
 * @method string getRemark
 * @method self withRemark(string $remark)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeRuleList extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method int getId
 * @method self withId(int $id)
 * @method string getRuleName
 * @method self withRuleName(string $ruleName)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getWarnLevel
 * @method self withWarnLevel(string $warnLevel)
 * @method string getExpressions
 * @method self withExpressions(string $expressions)
 * @method int getDataSourceId
 * @method self withDataSourceId(int $dataSourceId)
 * @method string getRuleGroupIds
 * @method self withRuleGroupIds(string $ruleGroupIds)
 */
class CreateOrUpdateRule extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method int getId
 * @method self withId(int $id)
 */
class DeleteRuleGroup extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method int getRuleGroupId
 * @method self withRuleGroupId(int $ruleGroupId)
 * @method string getWarnLevel
 * @method self withWarnLevel(string $warnLevel)
 * @method int getExGroupId
 * @method self withExGroupId(int $exGroupId)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeGroupList extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method int getId
 * @method self withId(int $id)
 * @method string getGroupName
 * @method self withGroupName(string $groupName)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getMachineGroupIds
 * @method self withMachineGroupIds(string $machineGroupIds)
 * @method string getRuleIds
 * @method self withRuleIds(string $ruleIds)
 */
class CreateOrUpdateGroup extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 */
class DescribeBuySummary extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getFrom
 * @method self withFrom(string $from)
 */
class ModifyOpenLogShipper extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getFrom
 * @method self withFrom(string $from)
 */
class DescribeLogShipperStatus extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getFrom
 * @method self withFrom(string $from)
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getLogStore
 * @method self withLogStore(string $logStore)
 * @method string getStatus
 * @method self withStatus(string $status)
 */
class ModifyLogMetaStatus extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getFrom
 * @method self withFrom(string $from)
 */
class DescribeLogMeta extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 */
class DescribeApiBuySummary extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 */
class DescribeVersionConfig extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getType
 * @method self withType(string $type)
 * @method string getFrom
 * @method self withFrom(string $from)
 */
class DescribeEventLevelCount extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 * @method string getRemark
 * @method self withRemark(string $remark)
 * @method string getType
 * @method self withType(string $type)
 * @method string getUuid
 * @method self withUuid(string $uuid)
 * @method Integer getStatus
 * @method self withStatus(Integer $status)
 * @method string getStatusList
 * @method self withStatusList(string $statusList)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method int getWebGroupId
 * @method self withWebGroupId(int $webGroupId)
 * @method Integer getRuleType
 * @method self withRuleType(Integer $ruleType)
 * @method Integer getAction1
 * @method self withAction1(Integer $action1)
 * @method Integer getFlow
 * @method self withFlow(Integer $flow)
 * @method string getSaleId
 * @method self withSaleId(string $saleId)
 * @method string getDealed
 * @method self withDealed(string $dealed)
 * @method string getTag
 * @method self withTag(string $tag)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getSecureToken
 * @method self withSecureToken(string $secureToken)
 * @method string getFrom
 * @method self withFrom(string $from)
 */
class DescribeTotalStatistics extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUuid
 * @method self withUuid(string $uuid)
 */
class DescribeInstanceStatistics extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 * @method string getRemark
 * @method self withRemark(string $remark)
 * @method string getType
 * @method self withType(string $type)
 * @method string getUuid
 * @method self withUuid(string $uuid)
 * @method Integer getStatus
 * @method self withStatus(Integer $status)
 * @method string getStatusList
 * @method self withStatusList(string $statusList)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method int getWebGroupId
 * @method self withWebGroupId(int $webGroupId)
 * @method Integer getRuleType
 * @method self withRuleType(Integer $ruleType)
 * @method Integer getAction1
 * @method self withAction1(Integer $action1)
 * @method Integer getFlow
 * @method self withFlow(Integer $flow)
 * @method string getSaleId
 * @method self withSaleId(string $saleId)
 * @method string getDealed
 * @method self withDealed(string $dealed)
 * @method string getTag
 * @method self withTag(string $tag)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getSecureToken
 * @method self withSecureToken(string $secureToken)
 */
class DescribeAllRegionsStatistics extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 */
class DescribeAssetSummary extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 */
class DescribeEmgUserAgreement extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getName
 * @method self withName(string $name)
 * @method string getUserAgreement
 * @method self withUserAgreement(string $userAgreement)
 */
class ModifyEmgVulSubmit extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 */
class DescribeEmgNotice extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 */
class DescribeEmgVulGroup extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 */
class DescribeYesterdayStatistics extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getConcernNecessity
 * @method self withConcernNecessity(string $concernNecessity)
 */
class ModifyConcernNecessity extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 */
class DescribeConcernNecessity extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getCronJobId
 * @method self withCronJobId(string $cronJobId)
 */
class DescribeVulnerabilitySummary extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLevelsOn
 * @method self withLevelsOn(string $levelsOn)
 * @method string getFrom
 * @method self withFrom(string $from)
 */
class SaveSuspEventUserSetting extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method Integer getQuaraFileId
 * @method self withQuaraFileId(Integer $quaraFileId)
 * @method string getFrom
 * @method self withFrom(string $from)
 */
class RollbackSuspEventQuaraFile extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getSuspiciousEventIds
 * @method self withSuspiciousEventIds(string $suspiciousEventIds)
 * @method string getOperation
 * @method self withOperation(string $operation)
 * @method string getSubOperation
 * @method self withSubOperation(string $subOperation)
 * @method string getFrom
 * @method self withFrom(string $from)
 * @method string getWarnType
 * @method self withWarnType(string $warnType)
 */
class OperationSuspEvents extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getDealed
 * @method self withDealed(string $dealed)
 * @method string getTimeStart
 * @method self withTimeStart(string $timeStart)
 * @method string getTimeEnd
 * @method self withTimeEnd(string $timeEnd)
 * @method string getName
 * @method self withName(string $name)
 * @method string getLevels
 * @method self withLevels(string $levels)
 * @method string getParentEventTypes
 * @method self withParentEventTypes(string $parentEventTypes)
 * @method string getRemark
 * @method self withRemark(string $remark)
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getFrom
 * @method self withFrom(string $from)
 */
class ExportSuspEvents extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method Integer getStrategyId
 * @method self withStrategyId(Integer $strategyId)
 */
class ExecStrategy extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getUuid
 * @method self withUuid(string $uuid)
 */
class DescribeUuidConfig extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method Integer getId
 * @method self withId(Integer $id)
 * @method string getFrom
 * @method self withFrom(string $from)
 */
class DescribeSuspEventUserSetting extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getDealed
 * @method self withDealed(string $dealed)
 * @method string getName
 * @method self withName(string $name)
 * @method string getLevels
 * @method self withLevels(string $levels)
 * @method string getParentEventTypes
 * @method self withParentEventTypes(string $parentEventTypes)
 * @method string getRemark
 * @method self withRemark(string $remark)
 * @method string getPageSize
 * @method self withPageSize(string $pageSize)
 * @method string getCurrentPage
 * @method self withCurrentPage(string $currentPage)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getAlarmUniqueInfo
 * @method self withAlarmUniqueInfo(string $alarmUniqueInfo)
 * @method string getFrom
 * @method self withFrom(string $from)
 */
class DescribeSuspEvents extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getPageSize
 * @method self withPageSize(string $pageSize)
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method string getCurrentPage
 * @method self withCurrentPage(string $currentPage)
 * @method string getFrom
 * @method self withFrom(string $from)
 */
class DescribeSuspEventQuaraFiles extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method Integer getExportId
 * @method self withExportId(Integer $exportId)
 * @method string getFrom
 * @method self withFrom(string $from)
 */
class DescribeSuspEventExportInfo extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method Integer getSuspiciousEventId
 * @method self withSuspiciousEventId(Integer $suspiciousEventId)
 * @method string getFrom
 * @method self withFrom(string $from)
 */
class DescribeSuspEventDetail extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method Integer getStrategyId
 * @method self withStrategyId(Integer $strategyId)
 */
class DescribeStrategyExecDetail extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getRemark
 * @method self withRemark(string $remark)
 * @method string getName
 * @method self withName(string $name)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getFrom
 * @method self withFrom(string $from)
 */
class DescribeNsasSuspEventType extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 * @method string getUuids
 * @method self withUuids(string $uuids)
 */
class ModifyAssetGroup extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getName
 * @method self withName(string $name)
 */
class DeleteSearchCondition extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getName
 * @method self withName(string $name)
 * @method string getFilterConditions
 * @method self withFilterConditions(string $filterConditions)
 */
class ModifySearchCondition extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 */
class DescribeSearchCondition extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getStatisticsColumn
 * @method self withStatisticsColumn(string $statisticsColumn)
 */
class ModifySasAssetStatisticsColumn extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 */
class DescribeSasAssetStatisticsColumn extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getUuid
 * @method self withUuid(string $uuid)
 * @method string getLang
 * @method self withLang(string $lang)
 */
class DescribeAssetDetailByUuid extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 */
class TransformLeakage extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 */
class AutoUpgradeSas extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeTopRiskyAssets extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getTypes
 * @method self withTypes(string $types)
 * @method Integer getLastDays
 * @method self withLastDays(Integer $lastDays)
 * @method string getVulEventLevels
 * @method self withVulEventLevels(string $vulEventLevels)
 * @method string getSuspiciousEventLevels
 * @method self withSuspiciousEventLevels(string $suspiciousEventLevels)
 * @method string getHealthEventLevels
 * @method self withHealthEventLevels(string $healthEventLevels)
 */
class DescribeEventCountCurve extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method string getUuids
 * @method self withUuids(string $uuids)
 * @method string getStatisticsColumn
 * @method self withStatisticsColumn(string $statisticsColumn)
 */
class DescribeSasAssetStatistics extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method string getFilterConditions
 * @method self withFilterConditions(string $filterConditions)
 * @method string getLang
 * @method self withLang(string $lang)
 */
class DescribeAssetList extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getFilterConditions
 * @method self withFilterConditions(string $filterConditions)
 * @method string getConditionType
 * @method self withConditionType(string $conditionType)
 * @method string getLang
 * @method self withLang(string $lang)
 */
class DescribeSasLeftCondition extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getOperateType
 * @method self withOperateType(string $operateType)
 * @method string getRiskWarningIds
 * @method self withRiskWarningIds(string $riskWarningIds)
 * @method string getReason
 * @method self withReason(string $reason)
 */
class OperateWarning extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getType
 * @method self withType(string $type)
 * @method string getTarget
 * @method self withTarget(string $target)
 */
class ModifyMachineConfig extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getUuids
 * @method self withUuids(string $uuids)
 * @method string getTypeNames
 * @method self withTypeNames(string $typeNames)
 * @method string getSubTypeNames
 * @method self withSubTypeNames(string $subTypeNames)
 * @method string getRiskLevels
 * @method self withRiskLevels(string $riskLevels)
 * @method string getStatusList
 * @method self withStatusList(string $statusList)
 * @method string getRiskName
 * @method self withRiskName(string $riskName)
 * @method string getDealed
 * @method self withDealed(string $dealed)
 * @method Integer getIsSummaryExport
 * @method self withIsSummaryExport(Integer $isSummaryExport)
 * @method Integer getStrategyId
 * @method self withStrategyId(Integer $strategyId)
 */
class ExportWarning extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 */
class DescribeUserSetting extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getUuids
 * @method self withUuids(string $uuids)
 * @method string getTypeNames
 * @method self withTypeNames(string $typeNames)
 * @method string getSubTypeNames
 * @method self withSubTypeNames(string $subTypeNames)
 * @method string getRiskLevels
 * @method self withRiskLevels(string $riskLevels)
 * @method string getStatusList
 * @method self withStatusList(string $statusList)
 * @method string getRiskName
 * @method self withRiskName(string $riskName)
 * @method string getDealed
 * @method self withDealed(string $dealed)
 * @method int getStrategyId
 * @method self withStrategyId(int $strategyId)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 */
class Describesummary extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getRiskName
 * @method self withRiskName(string $riskName)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 */
class DescribeRiskWhiteList extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getUuids
 * @method self withUuids(string $uuids)
 * @method int getStrategyId
 * @method self withStrategyId(int $strategyId)
 */
class DescribeRiskType extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method int getRiskId
 * @method self withRiskId(int $riskId)
 * @method string getRiskName
 * @method self withRiskName(string $riskName)
 * @method Integer getLimit
 * @method self withLimit(Integer $limit)
 */
class DescribeRisks extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getTarget
 * @method self withTarget(string $target)
 * @method string getTypes
 * @method self withTypes(string $types)
 * @method string getType
 * @method self withType(string $type)
 * @method string getConfig
 * @method self withConfig(string $config)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeMachineConfig extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getTarget
 * @method self withTarget(string $target)
 * @method string getTypes
 * @method self withTypes(string $types)
 * @method string getType
 * @method self withType(string $type)
 * @method string getConfig
 * @method self withConfig(string $config)
 * @method string getExtern
 * @method self withExtern(string $extern)
 */
class DescribeMacConfig extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method int getExportId
 * @method self withExportId(int $exportId)
 */
class DescribeExportInfo extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getRiskIdList
 * @method self withRiskIdList(string $riskIdList)
 * @method string getReason
 * @method self withReason(string $reason)
 */
class CreateUserWhiteList extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method Integer getInvalidWarningKeepDays
 * @method self withInvalidWarningKeepDays(Integer $invalidWarningKeepDays)
 * @method string getAlertLevels
 * @method self withAlertLevels(string $alertLevels)
 */
class CreateUserSetting extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getRiskIdList
 * @method self withRiskIdList(string $riskIdList)
 */
class BatchDeleteWhiteList extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method Integer getExportId
 * @method self withExportId(Integer $exportId)
 */
class DescribeSuspiciousExportInfo extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getEventNameRemark
 * @method self withEventNameRemark(string $eventNameRemark)
 * @method string getStatusList
 * @method self withStatusList(string $statusList)
 * @method string getLevel
 * @method self withLevel(string $level)
 * @method string getDealed
 * @method self withDealed(string $dealed)
 * @method string getEventType
 * @method self withEventType(string $eventType)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getRemark
 * @method self withRemark(string $remark)
 * @method string getTag
 * @method self withTag(string $tag)
 */
class CreateSuspiciousExport extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getType
 * @method self withType(string $type)
 * @method string getConfig
 * @method self withConfig(string $config)
 * @method string getTarget
 * @method self withTarget(string $target)
 */
class ModifyStrategyTarget extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getCycleDays
 * @method self withCycleDays(string $cycleDays)
 * @method string getName
 * @method self withName(string $name)
 * @method string getCycleStartTime
 * @method self withCycleStartTime(string $cycleStartTime)
 * @method string getRiskSubTypeName
 * @method self withRiskSubTypeName(string $riskSubTypeName)
 * @method string getId
 * @method self withId(string $id)
 */
class ModifyStrategy extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getInfo
 * @method self withInfo(string $info)
 * @method string getReason
 * @method self withReason(string $reason)
 */
class ModifyBatchIgnoreVul extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method Integer getGroupId
 * @method self withGroupId(Integer $groupId)
 * @method string getRemark
 * @method self withRemark(string $remark)
 * @method Integer getTag
 * @method self withTag(Integer $tag)
 * @method string getDealed
 * @method self withDealed(string $dealed)
 */
class DescribeWebshell extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getTypeNames
 * @method self withTypeNames(string $typeNames)
 * @method string getSubTypeNames
 * @method self withSubTypeNames(string $subTypeNames)
 * @method string getRiskLevels
 * @method self withRiskLevels(string $riskLevels)
 * @method string getStatusList
 * @method self withStatusList(string $statusList)
 * @method string getRiskName
 * @method self withRiskName(string $riskName)
 * @method int getStrategyId
 * @method self withStrategyId(int $strategyId)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method string getUuids
 * @method self withUuids(string $uuids)
 * @method string getDealed
 * @method self withDealed(string $dealed)
 */
class DescribeWarning extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getRemark
 * @method self withRemark(string $remark)
 * @method string getType
 * @method self withType(string $type)
 * @method string getUuids
 * @method self withUuids(string $uuids)
 * @method string getName
 * @method self withName(string $name)
 * @method string getAliasName
 * @method self withAliasName(string $aliasName)
 * @method string getLevel
 * @method self withLevel(string $level)
 * @method string getStatusList
 * @method self withStatusList(string $statusList)
 * @method string getNecessity
 * @method self withNecessity(string $necessity)
 * @method string getDealed
 * @method self withDealed(string $dealed)
 * @method string getBatchName
 * @method self withBatchName(string $batchName)
 * @method string getResource
 * @method self withResource(string $resource)
 * @method int getCreateTsStart
 * @method self withCreateTsStart(int $createTsStart)
 * @method int getCreateTsEnd
 * @method self withCreateTsEnd(int $createTsEnd)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeVulList extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getType
 * @method self withType(string $type)
 * @method string getName
 * @method self withName(string $name)
 * @method string getAliasName
 * @method self withAliasName(string $aliasName)
 */
class DescribeVulDetails extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method string getUuid
 * @method self withUuid(string $uuid)
 * @method string getDealed
 * @method self withDealed(string $dealed)
 * @method string getRemark
 * @method self withRemark(string $remark)
 * @method string getLevel
 * @method self withLevel(string $level)
 * @method string getEventType
 * @method self withEventType(string $eventType)
 */
class DescribeSuspiciousEvents extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getId
 * @method self withId(string $id)
 */
class DescribeStratetyDetail extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 */
class DescribeStratety extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getType
 * @method self withType(string $type)
 * @method string getConfig
 * @method self withConfig(string $config)
 */
class DescribeStrategyTarget extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method string getStatuses
 * @method self withStatuses(string $statuses)
 * @method string getTypes
 * @method self withTypes(string $types)
 * @method string getTag
 * @method self withTag(string $tag)
 * @method string getRemark
 * @method self withRemark(string $remark)
 */
class DescribeLoginLogs extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getId
 * @method self withId(string $id)
 */
class DeleteStrategy extends Rpc
{
    use R;
}

class GetSummary extends Rpc
{
    use R;
}

/**
 * @method string getUuid
 * @method self withUuid(string $uuid)
 * @method Integer getStatus
 * @method self withStatus(Integer $status)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class QueryLoginEvent extends Rpc
{
    use R;
}

/**
 * @method string getUuid
 * @method self withUuid(string $uuid)
 * @method Integer getStatus
 * @method self withStatus(Integer $status)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class QueryCrackEvent extends Rpc
{
    use R;
}

/**
 * @method string getUuid
 * @method self withUuid(string $uuid)
 */
class GetStatisticsByUuid extends Rpc
{
    use R;
}

/**
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class GetStatistics extends Rpc
{
    use R;
}

/**
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 * @method string getRemark
 * @method self withRemark(string $remark)
 * @method string getEventType
 * @method self withEventType(string $eventType)
 * @method string getRegionNo
 * @method self withRegionNo(string $regionNo)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class GetEntityList extends Rpc
{
    use R;
}

/**
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class GetCrackStatistics extends Rpc
{
    use R;
}

/**
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class GetAccountStatistics extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method Integer getVersionCode
 * @method self withVersionCode(Integer $versionCode)
 * @method Integer getVmNumber
 * @method self withVmNumber(Integer $vmNumber)
 */
class UpgradeInstance extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getVmNumber
 * @method self withVmNumber(string $vmNumber)
 * @method Integer getDuration
 * @method self withDuration(Integer $duration)
 * @method string getPricingCycle
 * @method self withPricingCycle(string $pricingCycle)
 */
class RenewInstance extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class ReleaseInstance extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method Integer getDuration
 * @method self withDuration(Integer $duration)
 * @method string getPricingCycle
 * @method self withPricingCycle(string $pricingCycle)
 * @method Integer getVersionCode
 * @method self withVersionCode(Integer $versionCode)
 * @method Integer getVmNumber
 * @method self withVmNumber(Integer $vmNumber)
 * @method bool getIsAutoRenew
 * @method self withIsAutoRenew(bool $isAutoRenew)
 * @method Integer getAutoRenewDuration
 * @method self withAutoRenewDuration(Integer $autoRenewDuration)
 */
class CreateInstance extends Rpc
{
    use R;
}
