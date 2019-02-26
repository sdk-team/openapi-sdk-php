<?php

namespace AlibabaCloud\Alidns\V20150109;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RpcRequest as Rpc;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method DescribeInstanceDomains describeInstanceDomains($options = [])
 * @method BindInstanceDomains bindInstanceDomains($options = [])
 * @method UnbindInstanceDomains unbindInstanceDomains($options = [])
 * @method UpdateCustomLine updateCustomLine($options = [])
 * @method AddCustomLine addCustomLine($options = [])
 * @method DeleteCustomLines deleteCustomLines($options = [])
 * @method DescribeCustomLine describeCustomLine($options = [])
 * @method DescribeCustomLines describeCustomLines($options = [])
 * @method RetrieveBatchDomain retrieveBatchDomain($options = [])
 * @method AddRecordGroup addRecordGroup($options = [])
 * @method UpdateRecordGroup updateRecordGroup($options = [])
 * @method DeleteRecordGroup deleteRecordGroup($options = [])
 * @method ChangeRecordGroup changeRecordGroup($options = [])
 * @method DescribeDomainStatisticsSummary describeDomainStatisticsSummary($options = [])
 * @method DescribeRecordStatisticsHistory describeRecordStatisticsHistory($options = [])
 * @method DescribeRecordGroups describeRecordGroups($options = [])
 * @method DescribeRecordStatisticsSummary describeRecordStatisticsSummary($options = [])
 * @method TransferBatchDomain transferBatchDomain($options = [])
 * @method DescribeBatchLogs describeBatchLogs($options = [])
 * @method DescribeDnsMonitor describeDnsMonitor($options = [])
 * @method UpdateDnsMonitor updateDnsMonitor($options = [])
 * @method QueryDnsMonitorHistory queryDnsMonitorHistory($options = [])
 * @method QueryDnsMonitorLast queryDnsMonitorLast($options = [])
 * @method QueryDnsMonitorStatistics queryDnsMonitorStatistics($options = [])
 * @method QueryDnsMonitorFailureRate queryDnsMonitorFailureRate($options = [])
 * @method DescribeDnsMonitorTaskConfig describeDnsMonitorTaskConfig($options = [])
 * @method DescribeDnsMonitorAvailableNodes describeDnsMonitorAvailableNodes($options = [])
 * @method DescribeDnsMonitors describeDnsMonitors($options = [])
 * @method AddDnsMonitor addDnsMonitor($options = [])
 * @method DeleteDnsMonitor deleteDnsMonitor($options = [])
 * @method QueryDnsMonitorErrorEvent queryDnsMonitorErrorEvent($options = [])
 * @method QueryDnsMonitorNodeResponseTime queryDnsMonitorNodeResponseTime($options = [])
 * @method OperateBatchDomain operateBatchDomain($options = [])
 * @method AddBatchDomain addBatchDomain($options = [])
 * @method AddBatchRr addBatchRr($options = [])
 * @method DescribeBatchResultDetail describeBatchResultDetail($options = [])
 * @method AddBatchDomainFromFile addBatchDomainFromFile($options = [])
 * @method ChangeBatchDomainGroup changeBatchDomainGroup($options = [])
 * @method DeleteBatchDomain deleteBatchDomain($options = [])
 * @method DeleteBatchRr deleteBatchRr($options = [])
 * @method DescribeBatchResultCount describeBatchResultCount($options = [])
 * @method UpdateBatchRr updateBatchRr($options = [])
 * @method ResetBatchResult resetBatchResult($options = [])
 * @method SetGtmAccessMode setGtmAccessMode($options = [])
 * @method SetGtmMonitorStatus setGtmMonitorStatus($options = [])
 * @method UpdateGtmInstanceGlobalConfig updateGtmInstanceGlobalConfig($options = [])
 * @method DescribeGtmLogs describeGtmLogs($options = [])
 * @method DeleteGtmAccessStrategy deleteGtmAccessStrategy($options = [])
 * @method AddGtmMonitor addGtmMonitor($options = [])
 * @method AddGtmAddressPool addGtmAddressPool($options = [])
 * @method AddGtmAccessStrategy addGtmAccessStrategy($options = [])
 * @method DescribeGtmInstances describeGtmInstances($options = [])
 * @method DeleteGtmAddressPool deleteGtmAddressPool($options = [])
 * @method DescribeGtmAccessStrategies describeGtmAccessStrategies($options = [])
 * @method DescribeGtmAccessStrategy describeGtmAccessStrategy($options = [])
 * @method DescribeGtmAccessStrategyAvailableConfig describeGtmAccessStrategyAvailableConfig($options = [])
 * @method DescribeGtmAvailableAlertGroup describeGtmAvailableAlertGroup($options = [])
 * @method DescribeGtmInstance describeGtmInstance($options = [])
 * @method DescribeGtmInstanceAddressPool describeGtmInstanceAddressPool($options = [])
 * @method DescribeGtmInstanceAddressPools describeGtmInstanceAddressPools($options = [])
 * @method DescribeGtmInstanceStatus describeGtmInstanceStatus($options = [])
 * @method DescribeGtmMonitorAvailableConfig describeGtmMonitorAvailableConfig($options = [])
 * @method DescribeGtmMonitorConfig describeGtmMonitorConfig($options = [])
 * @method UpdateGtmAccessStrategy updateGtmAccessStrategy($options = [])
 * @method UpdateGtmAddressPool updateGtmAddressPool($options = [])
 * @method UpdateGtmMonitor updateGtmMonitor($options = [])
 * @method DescribeDomainSoa describeDomainSoa($options = [])
 * @method DescribeSlaveDnsStatus describeSlaveDnsStatus($options = [])
 * @method AddSlaveDnsConfig addSlaveDnsConfig($options = [])
 * @method DescribeSlaveDnsConfig describeSlaveDnsConfig($options = [])
 * @method DescribeSlaveDnsDomains describeSlaveDnsDomains($options = [])
 * @method UpdateSlaveDnsConfig updateSlaveDnsConfig($options = [])
 * @method SetSlaveDnsConfigStatus setSlaveDnsConfigStatus($options = [])
 * @method SyncWithMasterDns syncWithMasterDns($options = [])
 * @method CreateInstance createInstance($options = [])
 * @method QueryCreateInstancePrice queryCreateInstancePrice($options = [])
 * @method AddBatchTempDomains addBatchTempDomains($options = [])
 * @method AddDnsTemplateRecord addDnsTemplateRecord($options = [])
 * @method DescribeDnsTemplateInfo describeDnsTemplateInfo($options = [])
 * @method AddDnsTemplate addDnsTemplate($options = [])
 * @method DescribeBundleTempDomains describeBundleTempDomains($options = [])
 * @method DescribeDnsTemplates describeDnsTemplates($options = [])
 * @method DeleteDnsTemplate deleteDnsTemplate($options = [])
 * @method ResetImportDomainsResult resetImportDomainsResult($options = [])
 * @method UpdateDnsTemplateRecord updateDnsTemplateRecord($options = [])
 * @method DeleteDnsTemplateRecord deleteDnsTemplateRecord($options = [])
 * @method VerifyTxtRecordForRetrievalDomainName verifyTxtRecordForRetrievalDomainName($options = [])
 * @method ValidateDomainCanBind validateDomainCanBind($options = [])
 * @method ValidateDomainCanAdd validateDomainCanAdd($options = [])
 * @method UpdateSiteMonitor updateSiteMonitor($options = [])
 * @method UpdateDomainRemark updateDomainRemark($options = [])
 * @method UpdateDomainRecordRemark updateDomainRecordRemark($options = [])
 * @method SwitchLineType switchLineType($options = [])
 * @method SubmitImportDomainsFile submitImportDomainsFile($options = [])
 * @method SubmitImportDomainRecordsFile submitImportDomainRecordsFile($options = [])
 * @method SetSiteMonitorsStatus setSiteMonitorsStatus($options = [])
 * @method ScanSubdomainRecords scanSubdomainRecords($options = [])
 * @method OpenGslb openGslb($options = [])
 * @method MarkGslbStatusOk markGslbStatusOk($options = [])
 * @method GetTxtRecordForRetrievalDomainName getTxtRecordForRetrievalDomainName($options = [])
 * @method DescribeSiteMonitors describeSiteMonitors($options = [])
 * @method DescribeSiteMonitorProvinceTrends describeSiteMonitorProvinceTrends($options = [])
 * @method DescribeSiteMonitorNodeTrends describeSiteMonitorNodeTrends($options = [])
 * @method DescribeSiteMonitorIspTrends describeSiteMonitorIspTrends($options = [])
 * @method DescribeSiteMonitorIspPointTrends describeSiteMonitorIspPointTrends($options = [])
 * @method DescribeSiteMonitorIspInfos describeSiteMonitorIspInfos($options = [])
 * @method DescribeSiteMonitorIspCityInfos describeSiteMonitorIspCityInfos($options = [])
 * @method DescribeSiteMonitorAlertLogs describeSiteMonitorAlertLogs($options = [])
 * @method DescribeSiteMonitor describeSiteMonitor($options = [])
 * @method DescribeInstanceExtendStatus describeInstanceExtendStatus($options = [])
 * @method DescribeImportDomainsResult describeImportDomainsResult($options = [])
 * @method DescribeImportDomainRecordsResult describeImportDomainRecordsResult($options = [])
 * @method DescribeGslbInstances describeGslbInstances($options = [])
 * @method DescribeGslbInstance describeGslbInstance($options = [])
 * @method DescribeDomainDnsStatistics describeDomainDnsStatistics($options = [])
 * @method DescribeDomainDnsProtectLogs describeDomainDnsProtectLogs($options = [])
 * @method DescribeDomainDnsAttackStatistics describeDomainDnsAttackStatistics($options = [])
 * @method DescribeCanAddMonitorSubDomainInfo describeCanAddMonitorSubDomainInfo($options = [])
 * @method DescribeCanAddMonitorDomainRrs describeCanAddMonitorDomainRrs($options = [])
 * @method DeleteSiteMonitors deleteSiteMonitors($options = [])
 * @method CloseGslb closeGslb($options = [])
 * @method AddSiteMonitor addSiteMonitor($options = [])
 * @method SubmitBundleRecordTask submitBundleRecordTask($options = [])
 * @method DescribeBundleRecordTaskResult describeBundleRecordTaskResult($options = [])
 * @method DescribeSupportLines describeSupportLines($options = [])
 * @method NotifyDnsAttackBlackHold notifyDnsAttackBlackHold($options = [])
 * @method NotifyDnsAttackClean notifyDnsAttackClean($options = [])
 * @method DescribeDomainNs describeDomainNs($options = [])
 * @method QueryAllowRenewPeriodList queryAllowRenewPeriodList($options = [])
 * @method QueryInstanceUnpaidOrder queryInstanceUnpaidOrder($options = [])
 * @method QueryRenewPrice queryRenewPrice($options = [])
 * @method QueryInstanceOrderList queryInstanceOrderList($options = [])
 * @method DescribeDnsProductInstance describeDnsProductInstance($options = [])
 * @method CreateRenewOrder createRenewOrder($options = [])
 * @method CancelOrder cancelOrder($options = [])
 * @method OrderPaidNotice orderPaidNotice($options = [])
 * @method UpdateDomainRecord updateDomainRecord($options = [])
 * @method UpdateDomainGroup updateDomainGroup($options = [])
 * @method UpdateDNSSLBWeight updateDNSSLBWeight($options = [])
 * @method SetDomainRecordStatus setDomainRecordStatus($options = [])
 * @method SetDNSSLBStatus setDNSSLBStatus($options = [])
 * @method RefundOrder refundOrder($options = [])
 * @method ModifyHichinaDomainDNS modifyHichinaDomainDNS($options = [])
 * @method GetMainDomainName getMainDomainName($options = [])
 * @method DescribeSubDomainRecords describeSubDomainRecords($options = [])
 * @method DescribeRecordLogs describeRecordLogs($options = [])
 * @method DescribeDomainWhoisInfo describeDomainWhoisInfo($options = [])
 * @method DescribeDomains describeDomains($options = [])
 * @method DescribeDomainRecords describeDomainRecords($options = [])
 * @method DescribeDomainRecordInfo describeDomainRecordInfo($options = [])
 * @method DescribeDomainLogs describeDomainLogs($options = [])
 * @method DescribeDomainInfo describeDomainInfo($options = [])
 * @method DescribeDomainGroups describeDomainGroups($options = [])
 * @method DescribeDNSSLBSubDomains describeDNSSLBSubDomains($options = [])
 * @method DescribeDnsProductInstances describeDnsProductInstances($options = [])
 * @method DescribeDnsProductAttributes describeDnsProductAttributes($options = [])
 * @method DeleteSubDomainRecords deleteSubDomainRecords($options = [])
 * @method DeleteDomainRecord deleteDomainRecord($options = [])
 * @method DeleteDomainGroup deleteDomainGroup($options = [])
 * @method DeleteDomain deleteDomain($options = [])
 * @method CheckDomainRecord checkDomainRecord($options = [])
 * @method ChangeDomainOfDnsProduct changeDomainOfDnsProduct($options = [])
 * @method ChangeDomainGroup changeDomainGroup($options = [])
 * @method AddDomainRecord addDomainRecord($options = [])
 * @method AddDomainGroup addDomainGroup($options = [])
 * @method AddDomain addDomain($options = [])
 */
class V20150109
{
    use ApiResolverTrait;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method int getPageNumber
 * @method self withPageNumber(int $pageNumber)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class DescribeInstanceDomains extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getDomainNames
 * @method self withDomainNames(string $domainNames)
 */
class BindInstanceDomains extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getDomainNames
 * @method self withDomainNames(string $domainNames)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class UnbindInstanceDomains extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLineName
 * @method self withLineName(string $lineName)
 * @method array getIpSegment
 * @method self withIpSegment(array $ipSegment)
 * @method int getLineId
 * @method self withLineId(int $lineId)
 */
class UpdateCustomLine extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getLineName
 * @method self withLineName(string $lineName)
 * @method array getIpSegment
 * @method self withIpSegment(array $ipSegment)
 */
class AddCustomLine extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLineIds
 * @method self withLineIds(string $lineIds)
 */
class DeleteCustomLines extends Rpc
{
    use R;
}

/**
 * @method int getLineId
 * @method self withLineId(int $lineId)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 */
class DescribeCustomLine extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method int getPageNumber
 * @method self withPageNumber(int $pageNumber)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class DescribeCustomLines extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getFileName
 * @method self withFileName(string $fileName)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method Integer getDelayTime
 * @method self withDelayTime(Integer $delayTime)
 */
class RetrieveBatchDomain extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getGroupName
 * @method self withGroupName(string $groupName)
 */
class AddRecordGroup extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 * @method string getGroupName
 * @method self withGroupName(string $groupName)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class UpdateRecordGroup extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 */
class DeleteRecordGroup extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 * @method string getRecordIdList
 * @method self withRecordIdList(string $recordIdList)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class ChangeRecordGroup extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method int getPageNumber
 * @method self withPageNumber(int $pageNumber)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 * @method string getStartDate
 * @method self withStartDate(string $startDate)
 * @method string getEndDate
 * @method self withEndDate(string $endDate)
 * @method string getOrderBy
 * @method self withOrderBy(string $orderBy)
 * @method string getDirection
 * @method self withDirection(string $direction)
 * @method string getSearchMode
 * @method self withSearchMode(string $searchMode)
 * @method string getKeyword
 * @method self withKeyword(string $keyword)
 * @method int getThreshold
 * @method self withThreshold(int $threshold)
 */
class DescribeDomainStatisticsSummary extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getStartDate
 * @method self withStartDate(string $startDate)
 * @method string getEndDate
 * @method self withEndDate(string $endDate)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getRr
 * @method self withRr(string $rr)
 */
class DescribeRecordStatisticsHistory extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class DescribeRecordGroups extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method int getPageNumber
 * @method self withPageNumber(int $pageNumber)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 * @method string getStartDate
 * @method self withStartDate(string $startDate)
 * @method string getEndDate
 * @method self withEndDate(string $endDate)
 * @method string getOrderBy
 * @method self withOrderBy(string $orderBy)
 * @method string getDirection
 * @method self withDirection(string $direction)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getSearchMode
 * @method self withSearchMode(string $searchMode)
 * @method string getKeyword
 * @method self withKeyword(string $keyword)
 * @method int getThreshold
 * @method self withThreshold(int $threshold)
 */
class DescribeRecordStatisticsSummary extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getFileName
 * @method self withFileName(string $fileName)
 * @method string getVerifyCode
 * @method self withVerifyCode(string $verifyCode)
 * @method string getTransferToAccount
 * @method self withTransferToAccount(string $transferToAccount)
 * @method string getRemark
 * @method self withRemark(string $remark)
 */
class TransferBatchDomain extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method int getPageNumber
 * @method self withPageNumber(int $pageNumber)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 * @method string getStartDate
 * @method self withStartDate(string $startDate)
 * @method string getEndDate
 * @method self withEndDate(string $endDate)
 */
class DescribeBatchLogs extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getTaskId
 * @method self withTaskId(string $taskId)
 * @method bool getNeedAlarmInfo
 * @method self withNeedAlarmInfo(bool $needAlarmInfo)
 */
class DescribeDnsMonitor extends Rpc
{
    use R;
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getTaskId
 * @method self withTaskId(string $taskId)
 * @method Integer getInterval
 * @method self withInterval(Integer $interval)
 * @method string getNotifyType
 * @method self withNotifyType(string $notifyType)
 * @method array getNode
 * @method self withNode(array $node)
 * @method string getDnsValues
 * @method self withDnsValues(string $dnsValues)
 * @method array getAlarm
 * @method self withAlarm(array $alarm)
 */
class UpdateDnsMonitor extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getTaskId
 * @method self withTaskId(string $taskId)
 * @method string getAlarmType
 * @method self withAlarmType(string $alarmType)
 * @method int getStartTimestamp
 * @method self withStartTimestamp(int $startTimestamp)
 * @method int getEndTimestamp
 * @method self withEndTimestamp(int $endTimestamp)
 */
class QueryDnsMonitorHistory extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getTaskId
 * @method self withTaskId(string $taskId)
 * @method string getAlarmType
 * @method self withAlarmType(string $alarmType)
 */
class QueryDnsMonitorLast extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getTaskId
 * @method self withTaskId(string $taskId)
 */
class QueryDnsMonitorStatistics extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getTaskId
 * @method self withTaskId(string $taskId)
 * @method Integer getLastMinute
 * @method self withLastMinute(Integer $lastMinute)
 */
class QueryDnsMonitorFailureRate extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 */
class DescribeDnsMonitorTaskConfig extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 */
class DescribeDnsMonitorAvailableNodes extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method int getPageNumber
 * @method self withPageNumber(int $pageNumber)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 * @method string getKeyword
 * @method self withKeyword(string $keyword)
 * @method string getSearchMode
 * @method self withSearchMode(string $searchMode)
 */
class DescribeDnsMonitors extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getAddress
 * @method self withAddress(string $address)
 */
class AddDnsMonitor extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getTaskId
 * @method self withTaskId(string $taskId)
 */
class DeleteDnsMonitor extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getTaskId
 * @method self withTaskId(string $taskId)
 * @method int getStartTimestamp
 * @method self withStartTimestamp(int $startTimestamp)
 * @method int getEndTimestamp
 * @method self withEndTimestamp(int $endTimestamp)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getCursor
 * @method self withCursor(string $cursor)
 */
class QueryDnsMonitorErrorEvent extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getTaskId
 * @method self withTaskId(string $taskId)
 */
class QueryDnsMonitorNodeResponseTime extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getType
 * @method self withType(string $type)
 * @method array getDomainRecordInfo
 * @method self withDomainRecordInfo(array $domainRecordInfo)
 */
class OperateBatchDomain extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getFileName
 * @method self withFileName(string $fileName)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 */
class AddBatchDomain extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getFileName
 * @method self withFileName(string $fileName)
 * @method string getRr
 * @method self withRr(string $rr)
 * @method string getType
 * @method self withType(string $type)
 * @method string getLine
 * @method self withLine(string $line)
 * @method string getValue
 * @method self withValue(string $value)
 * @method Integer getPriority
 * @method self withPriority(Integer $priority)
 * @method Integer getTtl
 * @method self withTtl(Integer $ttl)
 */
class AddBatchRr extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method int getTaskId
 * @method self withTaskId(int $taskId)
 */
class DescribeBatchResultDetail extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getFileName
 * @method self withFileName(string $fileName)
 */
class AddBatchDomainFromFile extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getFileName
 * @method self withFileName(string $fileName)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 */
class ChangeBatchDomainGroup extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getFileName
 * @method self withFileName(string $fileName)
 */
class DeleteBatchDomain extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getFileName
 * @method self withFileName(string $fileName)
 * @method string getRr
 * @method self withRr(string $rr)
 * @method string getValue
 * @method self withValue(string $value)
 * @method Integer getQueryParamType
 * @method self withQueryParamType(Integer $queryParamType)
 */
class DeleteBatchRr extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method int getTaskId
 * @method self withTaskId(int $taskId)
 */
class DescribeBatchResultCount extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getFileName
 * @method self withFileName(string $fileName)
 * @method string getRr
 * @method self withRr(string $rr)
 * @method string getValue
 * @method self withValue(string $value)
 * @method string getNewRr
 * @method self withNewRr(string $newRr)
 * @method string getNewValue
 * @method self withNewValue(string $newValue)
 * @method Integer getType
 * @method self withType(Integer $type)
 * @method Integer getQueryParamType
 * @method self withQueryParamType(Integer $queryParamType)
 */
class UpdateBatchRr extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 */
class ResetBatchResult extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getStrategyId
 * @method self withStrategyId(string $strategyId)
 * @method string getAccessMode
 * @method self withAccessMode(string $accessMode)
 */
class SetGtmAccessMode extends Rpc
{
    use R;
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getMonitorConfigId
 * @method self withMonitorConfigId(string $monitorConfigId)
 * @method string getStatus
 * @method self withStatus(string $status)
 */
class SetGtmMonitorStatus extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getInstanceName
 * @method self withInstanceName(string $instanceName)
 * @method Integer getTtl
 * @method self withTtl(Integer $ttl)
 * @method string getUserDomainName
 * @method self withUserDomainName(string $userDomainName)
 * @method string getLbaStrategy
 * @method self withLbaStrategy(string $lbaStrategy)
 * @method string getAlertGroup
 * @method self withAlertGroup(string $alertGroup)
 */
class UpdateGtmInstanceGlobalConfig extends Rpc
{
    use R;
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getKeyword
 * @method self withKeyword(string $keyword)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method int getStartTimestamp
 * @method self withStartTimestamp(int $startTimestamp)
 * @method int getEndTimestamp
 * @method self withEndTimestamp(int $endTimestamp)
 */
class DescribeGtmLogs extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getStrategyId
 * @method self withStrategyId(string $strategyId)
 */
class DeleteGtmAccessStrategy extends Rpc
{
    use R;
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getAddrPoolId
 * @method self withAddrPoolId(string $addrPoolId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getProtocolType
 * @method self withProtocolType(string $protocolType)
 * @method Integer getInterval
 * @method self withInterval(Integer $interval)
 * @method Integer getEvaluationCount
 * @method self withEvaluationCount(Integer $evaluationCount)
 * @method Integer getTimeout
 * @method self withTimeout(Integer $timeout)
 * @method string getMonitorExtendInfo
 * @method self withMonitorExtendInfo(string $monitorExtendInfo)
 * @method array getIspCityNode
 * @method self withIspCityNode(array $ispCityNode)
 */
class AddGtmMonitor extends Rpc
{
    use R;
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getType
 * @method self withType(string $type)
 * @method Integer getMinAvailableAddrNum
 * @method self withMinAvailableAddrNum(Integer $minAvailableAddrNum)
 * @method array getAddr
 * @method self withAddr(array $addr)
 */
class AddGtmAddressPool extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getStrategyName
 * @method self withStrategyName(string $strategyName)
 * @method string getDefaultAddrPoolId
 * @method self withDefaultAddrPoolId(string $defaultAddrPoolId)
 * @method string getFailoverAddrPoolId
 * @method self withFailoverAddrPoolId(string $failoverAddrPoolId)
 * @method string getAccessLines
 * @method self withAccessLines(string $accessLines)
 */
class AddGtmAccessStrategy extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getKeyword
 * @method self withKeyword(string $keyword)
 */
class DescribeGtmInstances extends Rpc
{
    use R;
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getAddrPoolId
 * @method self withAddrPoolId(string $addrPoolId)
 */
class DeleteGtmAddressPool extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeGtmAccessStrategies extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getStrategyId
 * @method self withStrategyId(string $strategyId)
 */
class DescribeGtmAccessStrategy extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class DescribeGtmAccessStrategyAvailableConfig extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 */
class DescribeGtmAvailableAlertGroup extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class DescribeGtmInstance extends Rpc
{
    use R;
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getAddrPoolId
 * @method self withAddrPoolId(string $addrPoolId)
 */
class DescribeGtmInstanceAddressPool extends Rpc
{
    use R;
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeGtmInstanceAddressPools extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class DescribeGtmInstanceStatus extends Rpc
{
    use R;
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 */
class DescribeGtmMonitorAvailableConfig extends Rpc
{
    use R;
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getMonitorConfigId
 * @method self withMonitorConfigId(string $monitorConfigId)
 */
class DescribeGtmMonitorConfig extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getStrategyId
 * @method self withStrategyId(string $strategyId)
 * @method string getStrategyName
 * @method self withStrategyName(string $strategyName)
 * @method string getDefaultAddrPoolId
 * @method self withDefaultAddrPoolId(string $defaultAddrPoolId)
 * @method string getFailoverAddrPoolId
 * @method self withFailoverAddrPoolId(string $failoverAddrPoolId)
 * @method string getAccessLines
 * @method self withAccessLines(string $accessLines)
 */
class UpdateGtmAccessStrategy extends Rpc
{
    use R;
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getAddrPoolId
 * @method self withAddrPoolId(string $addrPoolId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getType
 * @method self withType(string $type)
 * @method Integer getMinAvailableAddrNum
 * @method self withMinAvailableAddrNum(Integer $minAvailableAddrNum)
 * @method array getAddr
 * @method self withAddr(array $addr)
 */
class UpdateGtmAddressPool extends Rpc
{
    use R;
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getMonitorConfigId
 * @method self withMonitorConfigId(string $monitorConfigId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getProtocolType
 * @method self withProtocolType(string $protocolType)
 * @method Integer getInterval
 * @method self withInterval(Integer $interval)
 * @method Integer getEvaluationCount
 * @method self withEvaluationCount(Integer $evaluationCount)
 * @method Integer getTimeout
 * @method self withTimeout(Integer $timeout)
 * @method string getMonitorExtendInfo
 * @method self withMonitorExtendInfo(string $monitorExtendInfo)
 * @method array getIspCityNode
 * @method self withIspCityNode(array $ispCityNode)
 */
class UpdateGtmMonitor extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class DescribeDomainSoa extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class DescribeSlaveDnsStatus extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method bool getNeedNotice
 * @method self withNeedNotice(bool $needNotice)
 * @method array getTsigConfig
 * @method self withTsigConfig(array $tsigConfig)
 * @method array getIpSegment
 * @method self withIpSegment(array $ipSegment)
 */
class AddSlaveDnsConfig extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class DescribeSlaveDnsConfig extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method int getPageNumber
 * @method self withPageNumber(int $pageNumber)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 */
class DescribeSlaveDnsDomains extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method bool getNeedNotice
 * @method self withNeedNotice(bool $needNotice)
 * @method array getTsigConfig
 * @method self withTsigConfig(array $tsigConfig)
 * @method array getIpSegment
 * @method self withIpSegment(array $ipSegment)
 */
class UpdateSlaveDnsConfig extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStatus
 * @method self withStatus(string $status)
 */
class SetSlaveDnsConfigStatus extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class SyncWithMasterDns extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getInstanceVersion
 * @method self withInstanceVersion(string $instanceVersion)
 * @method Integer getMonth
 * @method self withMonth(Integer $month)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getToken
 * @method self withToken(string $token)
 */
class CreateInstance extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getInstanceVersion
 * @method self withInstanceVersion(string $instanceVersion)
 * @method Integer getMonth
 * @method self withMonth(Integer $month)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 */
class QueryCreateInstancePrice extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getFileName
 * @method self withFileName(string $fileName)
 * @method int getTemplateId
 * @method self withTemplateId(int $templateId)
 */
class AddBatchTempDomains extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method int getDnsTemplateId
 * @method self withDnsTemplateId(int $dnsTemplateId)
 * @method string getRR
 * @method self withRR(string $rR)
 * @method string getType
 * @method self withType(string $type)
 * @method string getValue
 * @method self withValue(string $value)
 * @method int getPriority
 * @method self withPriority(int $priority)
 */
class AddDnsTemplateRecord extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method int getDnsTemplateId
 * @method self withDnsTemplateId(int $dnsTemplateId)
 */
class DescribeDnsTemplateInfo extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getTemplateName
 * @method self withTemplateName(string $templateName)
 */
class AddDnsTemplate extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method int getTemplateId
 * @method self withTemplateId(int $templateId)
 */
class DescribeBundleTempDomains extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 */
class DescribeDnsTemplates extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method int getDnsTemplateId
 * @method self withDnsTemplateId(int $dnsTemplateId)
 */
class DeleteDnsTemplate extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 */
class ResetImportDomainsResult extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method int getDnsTemplateRecordId
 * @method self withDnsTemplateRecordId(int $dnsTemplateRecordId)
 * @method string getRR
 * @method self withRR(string $rR)
 * @method string getType
 * @method self withType(string $type)
 * @method string getValue
 * @method self withValue(string $value)
 * @method int getPriority
 * @method self withPriority(int $priority)
 */
class UpdateDnsTemplateRecord extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method int getDnsTemplateRecordId
 * @method self withDnsTemplateRecordId(int $dnsTemplateRecordId)
 */
class DeleteDnsTemplateRecord extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class VerifyTxtRecordForRetrievalDomainName extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class ValidateDomainCanBind extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class ValidateDomainCanAdd extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getTaskId
 * @method self withTaskId(string $taskId)
 * @method string getAlertNotifyChannels
 * @method self withAlertNotifyChannels(string $alertNotifyChannels)
 * @method string getAlertSwitchPolicy
 * @method self withAlertSwitchPolicy(string $alertSwitchPolicy)
 * @method Integer getTaskInterval
 * @method self withTaskInterval(Integer $taskInterval)
 * @method string getTaskNodes
 * @method self withTaskNodes(string $taskNodes)
 * @method Integer getTaskPort
 * @method self withTaskPort(Integer $taskPort)
 * @method string getTaskPath
 * @method self withTaskPath(string $taskPath)
 * @method string getTaskProtocol
 * @method self withTaskProtocol(string $taskProtocol)
 * @method Integer getAlertTimes
 * @method self withAlertTimes(Integer $alertTimes)
 * @method array getStandbyValue
 * @method self withStandbyValue(array $standbyValue)
 */
class UpdateSiteMonitor extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getRemark
 * @method self withRemark(string $remark)
 */
class UpdateDomainRemark extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getRecordId
 * @method self withRecordId(string $recordId)
 * @method string getRemark
 * @method self withRemark(string $remark)
 */
class UpdateDomainRecordRemark extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getLineType
 * @method self withLineType(string $lineType)
 */
class SwitchLineType extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getFileName
 * @method self withFileName(string $fileName)
 */
class SubmitImportDomainsFile extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getFileName
 * @method self withFileName(string $fileName)
 */
class SubmitImportDomainRecordsFile extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getTaskIds
 * @method self withTaskIds(string $taskIds)
 * @method bool getPaused
 * @method self withPaused(bool $paused)
 */
class SetSiteMonitorsStatus extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getSubDomain
 * @method self withSubDomain(string $subDomain)
 */
class ScanSubdomainRecords extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getSubDomain
 * @method self withSubDomain(string $subDomain)
 */
class OpenGslb extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method int getStatusId
 * @method self withStatusId(int $statusId)
 */
class MarkGslbStatusOk extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class GetTxtRecordForRetrievalDomainName extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method int getPageNumber
 * @method self withPageNumber(int $pageNumber)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getKeyWord
 * @method self withKeyWord(string $keyWord)
 */
class DescribeSiteMonitors extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getTaskId
 * @method self withTaskId(string $taskId)
 * @method int getStartTimestamp
 * @method self withStartTimestamp(int $startTimestamp)
 * @method int getEndTimestamp
 * @method self withEndTimestamp(int $endTimestamp)
 */
class DescribeSiteMonitorProvinceTrends extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getTaskId
 * @method self withTaskId(string $taskId)
 * @method int getStartTimestamp
 * @method self withStartTimestamp(int $startTimestamp)
 * @method int getEndTimestamp
 * @method self withEndTimestamp(int $endTimestamp)
 */
class DescribeSiteMonitorNodeTrends extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getTaskId
 * @method self withTaskId(string $taskId)
 * @method int getStartTimestamp
 * @method self withStartTimestamp(int $startTimestamp)
 * @method int getEndTimestamp
 * @method self withEndTimestamp(int $endTimestamp)
 */
class DescribeSiteMonitorIspTrends extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getTaskId
 * @method self withTaskId(string $taskId)
 * @method int getStartTimestamp
 * @method self withStartTimestamp(int $startTimestamp)
 * @method int getEndTimestamp
 * @method self withEndTimestamp(int $endTimestamp)
 */
class DescribeSiteMonitorIspPointTrends extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 */
class DescribeSiteMonitorIspInfos extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getIsp
 * @method self withIsp(string $isp)
 */
class DescribeSiteMonitorIspCityInfos extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method int getPageNumber
 * @method self withPageNumber(int $pageNumber)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getKeyWord
 * @method self withKeyWord(string $keyWord)
 */
class DescribeSiteMonitorAlertLogs extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getTaskId
 * @method self withTaskId(string $taskId)
 */
class DescribeSiteMonitor extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class DescribeInstanceExtendStatus extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 */
class DescribeImportDomainsResult extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method bool getOnlyFailed
 * @method self withOnlyFailed(bool $onlyFailed)
 */
class DescribeImportDomainRecordsResult extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method int getPageNumber
 * @method self withPageNumber(int $pageNumber)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 */
class DescribeGslbInstances extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getSubDomain
 * @method self withSubDomain(string $subDomain)
 */
class DescribeGslbInstance extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartDate
 * @method self withStartDate(string $startDate)
 * @method string getEndDate
 * @method self withEndDate(string $endDate)
 */
class DescribeDomainDnsStatistics extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method int getPageNumber
 * @method self withPageNumber(int $pageNumber)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class DescribeDomainDnsProtectLogs extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getDate
 * @method self withDate(string $date)
 */
class DescribeDomainDnsAttackStatistics extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getRR
 * @method self withRR(string $rR)
 */
class DescribeCanAddMonitorSubDomainInfo extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class DescribeCanAddMonitorDomainRrs extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getTaskIds
 * @method self withTaskIds(string $taskIds)
 */
class DeleteSiteMonitors extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getSubDomain
 * @method self withSubDomain(string $subDomain)
 */
class CloseGslb extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getRecordId
 * @method self withRecordId(string $recordId)
 */
class AddSiteMonitor extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getRecords
 * @method self withRecords(string $records)
 */
class SubmitBundleRecordTask extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method int getTaskId
 * @method self withTaskId(int $taskId)
 */
class DescribeBundleRecordTaskResult extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class DescribeSupportLines extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getName
 * @method self withName(string $name)
 * @method Integer getStatus
 * @method self withStatus(Integer $status)
 * @method int getQps
 * @method self withQps(int $qps)
 * @method int getEventTimestamp
 * @method self withEventTimestamp(int $eventTimestamp)
 */
class NotifyDnsAttackBlackHold extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getName
 * @method self withName(string $name)
 * @method Integer getStatus
 * @method self withStatus(Integer $status)
 * @method int getQps
 * @method self withQps(int $qps)
 * @method int getEventTimestamp
 * @method self withEventTimestamp(int $eventTimestamp)
 */
class NotifyDnsAttackClean extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class DescribeDomainNs extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 */
class QueryAllowRenewPeriodList extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class QueryInstanceUnpaidOrder extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method int getMonth
 * @method self withMonth(int $month)
 */
class QueryRenewPrice extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getOrderStatus
 * @method self withOrderStatus(string $orderStatus)
 * @method int getPageNumber
 * @method self withPageNumber(int $pageNumber)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 */
class QueryInstanceOrderList extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class DescribeDnsProductInstance extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method int getMonth
 * @method self withMonth(int $month)
 */
class CreateRenewOrder extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method int getOrderId
 * @method self withOrderId(int $orderId)
 */
class CancelOrder extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getdata
 * @method self withdata(string $data)
 */
class OrderPaidNotice extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getRecordId
 * @method self withRecordId(string $recordId)
 * @method string getRR
 * @method self withRR(string $rR)
 * @method string getType
 * @method self withType(string $type)
 * @method string getValue
 * @method self withValue(string $value)
 * @method int getTTL
 * @method self withTTL(int $tTL)
 * @method int getPriority
 * @method self withPriority(int $priority)
 * @method string getLine
 * @method self withLine(string $line)
 */
class UpdateDomainRecord extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getGroupName
 * @method self withGroupName(string $groupName)
 */
class UpdateDomainGroup extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getRecordId
 * @method self withRecordId(string $recordId)
 * @method Integer getWeight
 * @method self withWeight(Integer $weight)
 */
class UpdateDNSSLBWeight extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getRecordId
 * @method self withRecordId(string $recordId)
 * @method string getStatus
 * @method self withStatus(string $status)
 */
class SetDomainRecordStatus extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getSubDomain
 * @method self withSubDomain(string $subDomain)
 * @method bool getOpen
 * @method self withOpen(bool $open)
 */
class SetDNSSLBStatus extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getRefundType
 * @method self withRefundType(string $refundType)
 * @method int getOrderId
 * @method self withOrderId(int $orderId)
 */
class RefundOrder extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class ModifyHichinaDomainDNS extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getInputString
 * @method self withInputString(string $inputString)
 */
class GetMainDomainName extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getSubDomain
 * @method self withSubDomain(string $subDomain)
 * @method int getPageNumber
 * @method self withPageNumber(int $pageNumber)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 * @method string getType
 * @method self withType(string $type)
 * @method string getLine
 * @method self withLine(string $line)
 */
class DescribeSubDomainRecords extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method int getPageNumber
 * @method self withPageNumber(int $pageNumber)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 * @method string getKeyWord
 * @method self withKeyWord(string $keyWord)
 * @method string getStartDate
 * @method self withStartDate(string $startDate)
 * @method string getendDate
 * @method self withendDate(string $endDate)
 */
class DescribeRecordLogs extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 */
class DescribeDomainWhoisInfo extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getKeyWord
 * @method self withKeyWord(string $keyWord)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method int getPageNumber
 * @method self withPageNumber(int $pageNumber)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 * @method string getSearchMode
 * @method self withSearchMode(string $searchMode)
 */
class DescribeDomains extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method int getPageNumber
 * @method self withPageNumber(int $pageNumber)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 * @method string getKeyWord
 * @method self withKeyWord(string $keyWord)
 * @method string getRRKeyWord
 * @method self withRRKeyWord(string $rRKeyWord)
 * @method string getTypeKeyWord
 * @method self withTypeKeyWord(string $typeKeyWord)
 * @method string getValueKeyWord
 * @method self withValueKeyWord(string $valueKeyWord)
 * @method string getOrderBy
 * @method self withOrderBy(string $orderBy)
 * @method string getDirection
 * @method self withDirection(string $direction)
 * @method string getSearchMode
 * @method self withSearchMode(string $searchMode)
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 */
class DescribeDomainRecords extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getRecordId
 * @method self withRecordId(string $recordId)
 */
class DescribeDomainRecordInfo extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getKeyWord
 * @method self withKeyWord(string $keyWord)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method int getPageNumber
 * @method self withPageNumber(int $pageNumber)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 * @method string getStartDate
 * @method self withStartDate(string $startDate)
 * @method string getendDate
 * @method self withendDate(string $endDate)
 * @method string getType
 * @method self withType(string $type)
 */
class DescribeDomainLogs extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method bool getNeedDetailAttributes
 * @method self withNeedDetailAttributes(bool $needDetailAttributes)
 */
class DescribeDomainInfo extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getKeyWord
 * @method self withKeyWord(string $keyWord)
 * @method int getPageNumber
 * @method self withPageNumber(int $pageNumber)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 */
class DescribeDomainGroups extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method int getPageNumber
 * @method self withPageNumber(int $pageNumber)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 */
class DescribeDNSSLBSubDomains extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method int getPageNumber
 * @method self withPageNumber(int $pageNumber)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 * @method string getVersionCode
 * @method self withVersionCode(string $versionCode)
 */
class DescribeDnsProductInstances extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getVersionCode
 * @method self withVersionCode(string $versionCode)
 */
class DescribeDnsProductAttributes extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getRR
 * @method self withRR(string $rR)
 * @method string getType
 * @method self withType(string $type)
 */
class DeleteSubDomainRecords extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getRecordId
 * @method self withRecordId(string $recordId)
 */
class DeleteDomainRecord extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 */
class DeleteDomainGroup extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class DeleteDomain extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getRR
 * @method self withRR(string $rR)
 * @method string getType
 * @method self withType(string $type)
 * @method string getValue
 * @method self withValue(string $value)
 */
class CheckDomainRecord extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getNewDomain
 * @method self withNewDomain(string $newDomain)
 * @method bool getForce
 * @method self withForce(bool $force)
 */
class ChangeDomainOfDnsProduct extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 */
class ChangeDomainGroup extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getRR
 * @method self withRR(string $rR)
 * @method string getType
 * @method self withType(string $type)
 * @method string getValue
 * @method self withValue(string $value)
 * @method int getTTL
 * @method self withTTL(int $tTL)
 * @method int getPriority
 * @method self withPriority(int $priority)
 * @method string getLine
 * @method self withLine(string $line)
 */
class AddDomainRecord extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getGroupName
 * @method self withGroupName(string $groupName)
 */
class AddDomainGroup extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 */
class AddDomain extends Rpc
{
    use R;
}
