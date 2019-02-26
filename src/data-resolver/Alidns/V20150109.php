<?php

namespace AlibabaCloud\Alidns\V20150109;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method Long getPageNumber
 * @method self withPageNumber
 * @method Long getPageSize
 * @method self withPageSize
 * @method string getInstanceId
 * @method self withInstanceId
 */
final class DescribeInstanceDomains extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getDomainNames
 * @method self withDomainNames
 */
final class BindInstanceDomains extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getDomainNames
 * @method self withDomainNames
 * @method string getInstanceId
 * @method self withInstanceId
 */
final class UnbindInstanceDomains extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getLineName
 * @method self withLineName
 * @method RepeatList getIpSegment
 * @method self withIpSegment
 * @method Long getLineId
 * @method self withLineId
 */
final class UpdateCustomLine extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getDomainName
 * @method self withDomainName
 * @method string getLineName
 * @method self withLineName
 * @method RepeatList getIpSegment
 * @method self withIpSegment
 */
final class AddCustomLine extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getLineIds
 * @method self withLineIds
 */
final class DeleteCustomLines extends RpcRequest
{
}

/**
 * @method Long getLineId
 * @method self withLineId
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 */
final class DescribeCustomLine extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method Long getPageNumber
 * @method self withPageNumber
 * @method Long getPageSize
 * @method self withPageSize
 * @method string getDomainName
 * @method self withDomainName
 */
final class DescribeCustomLines extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getFileName
 * @method self withFileName
 * @method string getGroupId
 * @method self withGroupId
 * @method Integer getDelayTime
 * @method self withDelayTime
 */
final class RetrieveBatchDomain extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getDomainName
 * @method self withDomainName
 * @method string getGroupName
 * @method self withGroupName
 */
final class AddRecordGroup extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method Long getGroupId
 * @method self withGroupId
 * @method string getGroupName
 * @method self withGroupName
 * @method string getDomainName
 * @method self withDomainName
 */
final class UpdateRecordGroup extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method Long getGroupId
 * @method self withGroupId
 */
final class DeleteRecordGroup extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method Long getGroupId
 * @method self withGroupId
 * @method string getRecordIdList
 * @method self withRecordIdList
 * @method string getDomainName
 * @method self withDomainName
 */
final class ChangeRecordGroup extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method Long getPageNumber
 * @method self withPageNumber
 * @method Long getPageSize
 * @method self withPageSize
 * @method string getStartDate
 * @method self withStartDate
 * @method string getEndDate
 * @method self withEndDate
 * @method string getOrderBy
 * @method self withOrderBy
 * @method string getDirection
 * @method self withDirection
 * @method string getSearchMode
 * @method self withSearchMode
 * @method string getKeyword
 * @method self withKeyword
 * @method Long getThreshold
 * @method self withThreshold
 */
final class DescribeDomainStatisticsSummary extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getStartDate
 * @method self withStartDate
 * @method string getEndDate
 * @method self withEndDate
 * @method string getDomainName
 * @method self withDomainName
 * @method string getRr
 * @method self withRr
 */
final class DescribeRecordStatisticsHistory extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getDomainName
 * @method self withDomainName
 */
final class DescribeRecordGroups extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method Long getPageNumber
 * @method self withPageNumber
 * @method Long getPageSize
 * @method self withPageSize
 * @method string getStartDate
 * @method self withStartDate
 * @method string getEndDate
 * @method self withEndDate
 * @method string getOrderBy
 * @method self withOrderBy
 * @method string getDirection
 * @method self withDirection
 * @method string getDomainName
 * @method self withDomainName
 * @method string getSearchMode
 * @method self withSearchMode
 * @method string getKeyword
 * @method self withKeyword
 * @method Long getThreshold
 * @method self withThreshold
 */
final class DescribeRecordStatisticsSummary extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getFileName
 * @method self withFileName
 * @method string getVerifyCode
 * @method self withVerifyCode
 * @method string getTransferToAccount
 * @method self withTransferToAccount
 * @method string getRemark
 * @method self withRemark
 */
final class TransferBatchDomain extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method Long getPageNumber
 * @method self withPageNumber
 * @method Long getPageSize
 * @method self withPageSize
 * @method string getStartDate
 * @method self withStartDate
 * @method string getEndDate
 * @method self withEndDate
 */
final class DescribeBatchLogs extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getTaskId
 * @method self withTaskId
 * @method Boolean getNeedAlarmInfo
 * @method self withNeedAlarmInfo
 */
final class DescribeDnsMonitor extends RpcRequest
{
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getLang
 * @method self withLang
 * @method string getTaskId
 * @method self withTaskId
 * @method Integer getInterval
 * @method self withInterval
 * @method string getNotifyType
 * @method self withNotifyType
 * @method RepeatList getNode
 * @method self withNode
 * @method string getDnsValues
 * @method self withDnsValues
 * @method RepeatList getAlarm
 * @method self withAlarm
 */
final class UpdateDnsMonitor extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getTaskId
 * @method self withTaskId
 * @method string getAlarmType
 * @method self withAlarmType
 * @method Long getStartTimestamp
 * @method self withStartTimestamp
 * @method Long getEndTimestamp
 * @method self withEndTimestamp
 */
final class QueryDnsMonitorHistory extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getTaskId
 * @method self withTaskId
 * @method string getAlarmType
 * @method self withAlarmType
 */
final class QueryDnsMonitorLast extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getTaskId
 * @method self withTaskId
 */
final class QueryDnsMonitorStatistics extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getTaskId
 * @method self withTaskId
 * @method Integer getLastMinute
 * @method self withLastMinute
 */
final class QueryDnsMonitorFailureRate extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 */
final class DescribeDnsMonitorTaskConfig extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 */
final class DescribeDnsMonitorAvailableNodes extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method Long getPageNumber
 * @method self withPageNumber
 * @method Long getPageSize
 * @method self withPageSize
 * @method string getKeyword
 * @method self withKeyword
 * @method string getSearchMode
 * @method self withSearchMode
 */
final class DescribeDnsMonitors extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getAddress
 * @method self withAddress
 */
final class AddDnsMonitor extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getTaskId
 * @method self withTaskId
 */
final class DeleteDnsMonitor extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getTaskId
 * @method self withTaskId
 * @method Long getStartTimestamp
 * @method self withStartTimestamp
 * @method Long getEndTimestamp
 * @method self withEndTimestamp
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getCursor
 * @method self withCursor
 */
final class QueryDnsMonitorErrorEvent extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getTaskId
 * @method self withTaskId
 */
final class QueryDnsMonitorNodeResponseTime extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getType
 * @method self withType
 * @method RepeatList getDomainRecordInfo
 * @method self withDomainRecordInfo
 */
final class OperateBatchDomain extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getFileName
 * @method self withFileName
 * @method string getGroupId
 * @method self withGroupId
 */
final class AddBatchDomain extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getFileName
 * @method self withFileName
 * @method string getRr
 * @method self withRr
 * @method string getType
 * @method self withType
 * @method string getLine
 * @method self withLine
 * @method string getValue
 * @method self withValue
 * @method Integer getPriority
 * @method self withPriority
 * @method Integer getTtl
 * @method self withTtl
 */
final class AddBatchRr extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Long getTaskId
 * @method self withTaskId
 */
final class DescribeBatchResultDetail extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getFileName
 * @method self withFileName
 */
final class AddBatchDomainFromFile extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getFileName
 * @method self withFileName
 * @method string getGroupId
 * @method self withGroupId
 */
final class ChangeBatchDomainGroup extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getFileName
 * @method self withFileName
 */
final class DeleteBatchDomain extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getFileName
 * @method self withFileName
 * @method string getRr
 * @method self withRr
 * @method string getValue
 * @method self withValue
 * @method Integer getQueryParamType
 * @method self withQueryParamType
 */
final class DeleteBatchRr extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method Long getTaskId
 * @method self withTaskId
 */
final class DescribeBatchResultCount extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getFileName
 * @method self withFileName
 * @method string getRr
 * @method self withRr
 * @method string getValue
 * @method self withValue
 * @method string getNewRr
 * @method self withNewRr
 * @method string getNewValue
 * @method self withNewValue
 * @method Integer getType
 * @method self withType
 * @method Integer getQueryParamType
 * @method self withQueryParamType
 */
final class UpdateBatchRr extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 */
final class ResetBatchResult extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getStrategyId
 * @method self withStrategyId
 * @method string getAccessMode
 * @method self withAccessMode
 */
final class SetGtmAccessMode extends RpcRequest
{
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getLang
 * @method self withLang
 * @method string getMonitorConfigId
 * @method self withMonitorConfigId
 * @method string getStatus
 * @method self withStatus
 */
final class SetGtmMonitorStatus extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getInstanceName
 * @method self withInstanceName
 * @method Integer getTtl
 * @method self withTtl
 * @method string getUserDomainName
 * @method self withUserDomainName
 * @method string getLbaStrategy
 * @method self withLbaStrategy
 * @method string getAlertGroup
 * @method self withAlertGroup
 */
final class UpdateGtmInstanceGlobalConfig extends RpcRequest
{
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getLang
 * @method self withLang
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getKeyword
 * @method self withKeyword
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Long getStartTimestamp
 * @method self withStartTimestamp
 * @method Long getEndTimestamp
 * @method self withEndTimestamp
 */
final class DescribeGtmLogs extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getStrategyId
 * @method self withStrategyId
 */
final class DeleteGtmAccessStrategy extends RpcRequest
{
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getLang
 * @method self withLang
 * @method string getAddrPoolId
 * @method self withAddrPoolId
 * @method string getName
 * @method self withName
 * @method string getProtocolType
 * @method self withProtocolType
 * @method Integer getInterval
 * @method self withInterval
 * @method Integer getEvaluationCount
 * @method self withEvaluationCount
 * @method Integer getTimeout
 * @method self withTimeout
 * @method string getMonitorExtendInfo
 * @method self withMonitorExtendInfo
 * @method RepeatList getIspCityNode
 * @method self withIspCityNode
 */
final class AddGtmMonitor extends RpcRequest
{
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getLang
 * @method self withLang
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getName
 * @method self withName
 * @method string getType
 * @method self withType
 * @method Integer getMinAvailableAddrNum
 * @method self withMinAvailableAddrNum
 * @method RepeatList getAddr
 * @method self withAddr
 */
final class AddGtmAddressPool extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getStrategyName
 * @method self withStrategyName
 * @method string getDefaultAddrPoolId
 * @method self withDefaultAddrPoolId
 * @method string getFailoverAddrPoolId
 * @method self withFailoverAddrPoolId
 * @method string getAccessLines
 * @method self withAccessLines
 */
final class AddGtmAccessStrategy extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getKeyword
 * @method self withKeyword
 */
final class DescribeGtmInstances extends RpcRequest
{
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getLang
 * @method self withLang
 * @method string getAddrPoolId
 * @method self withAddrPoolId
 */
final class DeleteGtmAddressPool extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getInstanceId
 * @method self withInstanceId
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class DescribeGtmAccessStrategies extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getStrategyId
 * @method self withStrategyId
 */
final class DescribeGtmAccessStrategy extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getInstanceId
 * @method self withInstanceId
 */
final class DescribeGtmAccessStrategyAvailableConfig extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 */
final class DescribeGtmAvailableAlertGroup extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getInstanceId
 * @method self withInstanceId
 */
final class DescribeGtmInstance extends RpcRequest
{
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getLang
 * @method self withLang
 * @method string getAddrPoolId
 * @method self withAddrPoolId
 */
final class DescribeGtmInstanceAddressPool extends RpcRequest
{
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getLang
 * @method self withLang
 * @method string getInstanceId
 * @method self withInstanceId
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class DescribeGtmInstanceAddressPools extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getInstanceId
 * @method self withInstanceId
 */
final class DescribeGtmInstanceStatus extends RpcRequest
{
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getLang
 * @method self withLang
 */
final class DescribeGtmMonitorAvailableConfig extends RpcRequest
{
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getLang
 * @method self withLang
 * @method string getMonitorConfigId
 * @method self withMonitorConfigId
 */
final class DescribeGtmMonitorConfig extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getStrategyId
 * @method self withStrategyId
 * @method string getStrategyName
 * @method self withStrategyName
 * @method string getDefaultAddrPoolId
 * @method self withDefaultAddrPoolId
 * @method string getFailoverAddrPoolId
 * @method self withFailoverAddrPoolId
 * @method string getAccessLines
 * @method self withAccessLines
 */
final class UpdateGtmAccessStrategy extends RpcRequest
{
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getLang
 * @method self withLang
 * @method string getAddrPoolId
 * @method self withAddrPoolId
 * @method string getName
 * @method self withName
 * @method string getType
 * @method self withType
 * @method Integer getMinAvailableAddrNum
 * @method self withMinAvailableAddrNum
 * @method RepeatList getAddr
 * @method self withAddr
 */
final class UpdateGtmAddressPool extends RpcRequest
{
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getLang
 * @method self withLang
 * @method string getMonitorConfigId
 * @method self withMonitorConfigId
 * @method string getName
 * @method self withName
 * @method string getProtocolType
 * @method self withProtocolType
 * @method Integer getInterval
 * @method self withInterval
 * @method Integer getEvaluationCount
 * @method self withEvaluationCount
 * @method Integer getTimeout
 * @method self withTimeout
 * @method string getMonitorExtendInfo
 * @method self withMonitorExtendInfo
 * @method RepeatList getIspCityNode
 * @method self withIspCityNode
 */
final class UpdateGtmMonitor extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getDomainName
 * @method self withDomainName
 */
final class DescribeDomainSoa extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getDomainName
 * @method self withDomainName
 */
final class DescribeSlaveDnsStatus extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getDomainName
 * @method self withDomainName
 * @method Boolean getNeedNotice
 * @method self withNeedNotice
 * @method RepeatList getTsigConfig
 * @method self withTsigConfig
 * @method RepeatList getIpSegment
 * @method self withIpSegment
 */
final class AddSlaveDnsConfig extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getDomainName
 * @method self withDomainName
 */
final class DescribeSlaveDnsConfig extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method Long getPageNumber
 * @method self withPageNumber
 * @method Long getPageSize
 * @method self withPageSize
 */
final class DescribeSlaveDnsDomains extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getDomainName
 * @method self withDomainName
 * @method Boolean getNeedNotice
 * @method self withNeedNotice
 * @method RepeatList getTsigConfig
 * @method self withTsigConfig
 * @method RepeatList getIpSegment
 * @method self withIpSegment
 */
final class UpdateSlaveDnsConfig extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getDomainName
 * @method self withDomainName
 * @method string getStatus
 * @method self withStatus
 */
final class SetSlaveDnsConfigStatus extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getDomainName
 * @method self withDomainName
 */
final class SyncWithMasterDns extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getDomainName
 * @method self withDomainName
 * @method string getInstanceVersion
 * @method self withInstanceVersion
 * @method Integer getMonth
 * @method self withMonth
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getToken
 * @method self withToken
 */
final class CreateInstance extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getInstanceVersion
 * @method self withInstanceVersion
 * @method Integer getMonth
 * @method self withMonth
 * @method Long getOwnerId
 * @method self withOwnerId
 */
final class QueryCreateInstancePrice extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getFileName
 * @method self withFileName
 * @method Long getTemplateId
 * @method self withTemplateId
 */
final class AddBatchTempDomains extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method Long getDnsTemplateId
 * @method self withDnsTemplateId
 * @method string getRR
 * @method self withRR
 * @method string getType
 * @method self withType
 * @method string getValue
 * @method self withValue
 * @method Long getPriority
 * @method self withPriority
 */
final class AddDnsTemplateRecord extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method Long getDnsTemplateId
 * @method self withDnsTemplateId
 */
final class DescribeDnsTemplateInfo extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getTemplateName
 * @method self withTemplateName
 */
final class AddDnsTemplate extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method Long getTemplateId
 * @method self withTemplateId
 */
final class DescribeBundleTempDomains extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 */
final class DescribeDnsTemplates extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method Long getDnsTemplateId
 * @method self withDnsTemplateId
 */
final class DeleteDnsTemplate extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 */
final class ResetImportDomainsResult extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method Long getDnsTemplateRecordId
 * @method self withDnsTemplateRecordId
 * @method string getRR
 * @method self withRR
 * @method string getType
 * @method self withType
 * @method string getValue
 * @method self withValue
 * @method Long getPriority
 * @method self withPriority
 */
final class UpdateDnsTemplateRecord extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method Long getDnsTemplateRecordId
 * @method self withDnsTemplateRecordId
 */
final class DeleteDnsTemplateRecord extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getDomainName
 * @method self withDomainName
 */
final class VerifyTxtRecordForRetrievalDomainName extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getDomainName
 * @method self withDomainName
 */
final class ValidateDomainCanBind extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getDomainName
 * @method self withDomainName
 */
final class ValidateDomainCanAdd extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getTaskId
 * @method self withTaskId
 * @method string getAlertNotifyChannels
 * @method self withAlertNotifyChannels
 * @method string getAlertSwitchPolicy
 * @method self withAlertSwitchPolicy
 * @method Integer getTaskInterval
 * @method self withTaskInterval
 * @method string getTaskNodes
 * @method self withTaskNodes
 * @method Integer getTaskPort
 * @method self withTaskPort
 * @method string getTaskPath
 * @method self withTaskPath
 * @method string getTaskProtocol
 * @method self withTaskProtocol
 * @method Integer getAlertTimes
 * @method self withAlertTimes
 * @method RepeatList getStandbyValue
 * @method self withStandbyValue
 */
final class UpdateSiteMonitor extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getDomainName
 * @method self withDomainName
 * @method string getRemark
 * @method self withRemark
 */
final class UpdateDomainRemark extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getRecordId
 * @method self withRecordId
 * @method string getRemark
 * @method self withRemark
 */
final class UpdateDomainRecordRemark extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getDomainName
 * @method self withDomainName
 * @method string getLineType
 * @method self withLineType
 */
final class SwitchLineType extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getFileName
 * @method self withFileName
 */
final class SubmitImportDomainsFile extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getDomainName
 * @method self withDomainName
 * @method string getFileName
 * @method self withFileName
 */
final class SubmitImportDomainRecordsFile extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getTaskIds
 * @method self withTaskIds
 * @method Boolean getPaused
 * @method self withPaused
 */
final class SetSiteMonitorsStatus extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getSubDomain
 * @method self withSubDomain
 */
final class ScanSubdomainRecords extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getSubDomain
 * @method self withSubDomain
 */
final class OpenGslb extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method Long getStatusId
 * @method self withStatusId
 */
final class MarkGslbStatusOk extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getDomainName
 * @method self withDomainName
 */
final class GetTxtRecordForRetrievalDomainName extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method Long getPageNumber
 * @method self withPageNumber
 * @method Long getPageSize
 * @method self withPageSize
 * @method string getDomainName
 * @method self withDomainName
 * @method string getKeyWord
 * @method self withKeyWord
 */
final class DescribeSiteMonitors extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getTaskId
 * @method self withTaskId
 * @method Long getStartTimestamp
 * @method self withStartTimestamp
 * @method Long getEndTimestamp
 * @method self withEndTimestamp
 */
final class DescribeSiteMonitorProvinceTrends extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getTaskId
 * @method self withTaskId
 * @method Long getStartTimestamp
 * @method self withStartTimestamp
 * @method Long getEndTimestamp
 * @method self withEndTimestamp
 */
final class DescribeSiteMonitorNodeTrends extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getTaskId
 * @method self withTaskId
 * @method Long getStartTimestamp
 * @method self withStartTimestamp
 * @method Long getEndTimestamp
 * @method self withEndTimestamp
 */
final class DescribeSiteMonitorIspTrends extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getTaskId
 * @method self withTaskId
 * @method Long getStartTimestamp
 * @method self withStartTimestamp
 * @method Long getEndTimestamp
 * @method self withEndTimestamp
 */
final class DescribeSiteMonitorIspPointTrends extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 */
final class DescribeSiteMonitorIspInfos extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getIsp
 * @method self withIsp
 */
final class DescribeSiteMonitorIspCityInfos extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method Long getPageNumber
 * @method self withPageNumber
 * @method Long getPageSize
 * @method self withPageSize
 * @method string getDomainName
 * @method self withDomainName
 * @method string getKeyWord
 * @method self withKeyWord
 */
final class DescribeSiteMonitorAlertLogs extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getTaskId
 * @method self withTaskId
 */
final class DescribeSiteMonitor extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getInstanceId
 * @method self withInstanceId
 */
final class DescribeInstanceExtendStatus extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 */
final class DescribeImportDomainsResult extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getDomainName
 * @method self withDomainName
 * @method Boolean getOnlyFailed
 * @method self withOnlyFailed
 */
final class DescribeImportDomainRecordsResult extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getDomainName
 * @method self withDomainName
 * @method Long getPageNumber
 * @method self withPageNumber
 * @method Long getPageSize
 * @method self withPageSize
 */
final class DescribeGslbInstances extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getSubDomain
 * @method self withSubDomain
 */
final class DescribeGslbInstance extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getDomainName
 * @method self withDomainName
 * @method string getStartDate
 * @method self withStartDate
 * @method string getEndDate
 * @method self withEndDate
 */
final class DescribeDomainDnsStatistics extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method Long getPageNumber
 * @method self withPageNumber
 * @method Long getPageSize
 * @method self withPageSize
 * @method string getDomainName
 * @method self withDomainName
 */
final class DescribeDomainDnsProtectLogs extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getDomainName
 * @method self withDomainName
 * @method string getDate
 * @method self withDate
 */
final class DescribeDomainDnsAttackStatistics extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getDomainName
 * @method self withDomainName
 * @method string getRR
 * @method self withRR
 */
final class DescribeCanAddMonitorSubDomainInfo extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getDomainName
 * @method self withDomainName
 */
final class DescribeCanAddMonitorDomainRrs extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getTaskIds
 * @method self withTaskIds
 */
final class DeleteSiteMonitors extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getSubDomain
 * @method self withSubDomain
 */
final class CloseGslb extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getRecordId
 * @method self withRecordId
 */
final class AddSiteMonitor extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getRecords
 * @method self withRecords
 */
final class SubmitBundleRecordTask extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method Long getTaskId
 * @method self withTaskId
 */
final class DescribeBundleRecordTaskResult extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getDomainName
 * @method self withDomainName
 */
final class DescribeSupportLines extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getName
 * @method self withName
 * @method Integer getStatus
 * @method self withStatus
 * @method Long getQps
 * @method self withQps
 * @method Long getEventTimestamp
 * @method self withEventTimestamp
 */
final class NotifyDnsAttackBlackHold extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getName
 * @method self withName
 * @method Integer getStatus
 * @method self withStatus
 * @method Long getQps
 * @method self withQps
 * @method Long getEventTimestamp
 * @method self withEventTimestamp
 */
final class NotifyDnsAttackClean extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getDomainName
 * @method self withDomainName
 */
final class DescribeDomainNs extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 */
final class QueryAllowRenewPeriodList extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getInstanceId
 * @method self withInstanceId
 */
final class QueryInstanceUnpaidOrder extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getInstanceId
 * @method self withInstanceId
 * @method Long getMonth
 * @method self withMonth
 */
final class QueryRenewPrice extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getOrderStatus
 * @method self withOrderStatus
 * @method Long getPageNumber
 * @method self withPageNumber
 * @method Long getPageSize
 * @method self withPageSize
 */
final class QueryInstanceOrderList extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getInstanceId
 * @method self withInstanceId
 */
final class DescribeDnsProductInstance extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getInstanceId
 * @method self withInstanceId
 * @method Long getMonth
 * @method self withMonth
 */
final class CreateRenewOrder extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method Long getOrderId
 * @method self withOrderId
 */
final class CancelOrder extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getdata
 * @method self withdata
 */
final class OrderPaidNotice extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getRecordId
 * @method self withRecordId
 * @method string getRR
 * @method self withRR
 * @method string getType
 * @method self withType
 * @method string getValue
 * @method self withValue
 * @method Long getTTL
 * @method self withTTL
 * @method Long getPriority
 * @method self withPriority
 * @method string getLine
 * @method self withLine
 */
final class UpdateDomainRecord extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getGroupId
 * @method self withGroupId
 * @method string getGroupName
 * @method self withGroupName
 */
final class UpdateDomainGroup extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getRecordId
 * @method self withRecordId
 * @method Integer getWeight
 * @method self withWeight
 */
final class UpdateDNSSLBWeight extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getRecordId
 * @method self withRecordId
 * @method string getStatus
 * @method self withStatus
 */
final class SetDomainRecordStatus extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getSubDomain
 * @method self withSubDomain
 * @method Boolean getOpen
 * @method self withOpen
 */
final class SetDNSSLBStatus extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getRefundType
 * @method self withRefundType
 * @method Long getOrderId
 * @method self withOrderId
 */
final class RefundOrder extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getDomainName
 * @method self withDomainName
 */
final class ModifyHichinaDomainDNS extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getInputString
 * @method self withInputString
 */
final class GetMainDomainName extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getSubDomain
 * @method self withSubDomain
 * @method Long getPageNumber
 * @method self withPageNumber
 * @method Long getPageSize
 * @method self withPageSize
 * @method string getType
 * @method self withType
 * @method string getLine
 * @method self withLine
 */
final class DescribeSubDomainRecords extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getDomainName
 * @method self withDomainName
 * @method Long getPageNumber
 * @method self withPageNumber
 * @method Long getPageSize
 * @method self withPageSize
 * @method string getKeyWord
 * @method self withKeyWord
 * @method string getStartDate
 * @method self withStartDate
 * @method string getendDate
 * @method self withendDate
 */
final class DescribeRecordLogs extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getDomainName
 * @method self withDomainName
 * @method string getGroupId
 * @method self withGroupId
 */
final class DescribeDomainWhoisInfo extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getKeyWord
 * @method self withKeyWord
 * @method string getGroupId
 * @method self withGroupId
 * @method Long getPageNumber
 * @method self withPageNumber
 * @method Long getPageSize
 * @method self withPageSize
 * @method string getSearchMode
 * @method self withSearchMode
 */
final class DescribeDomains extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getDomainName
 * @method self withDomainName
 * @method Long getPageNumber
 * @method self withPageNumber
 * @method Long getPageSize
 * @method self withPageSize
 * @method string getKeyWord
 * @method self withKeyWord
 * @method string getRRKeyWord
 * @method self withRRKeyWord
 * @method string getTypeKeyWord
 * @method self withTypeKeyWord
 * @method string getValueKeyWord
 * @method self withValueKeyWord
 * @method string getOrderBy
 * @method self withOrderBy
 * @method string getDirection
 * @method self withDirection
 * @method string getSearchMode
 * @method self withSearchMode
 * @method Long getGroupId
 * @method self withGroupId
 */
final class DescribeDomainRecords extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getRecordId
 * @method self withRecordId
 */
final class DescribeDomainRecordInfo extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getKeyWord
 * @method self withKeyWord
 * @method string getGroupId
 * @method self withGroupId
 * @method Long getPageNumber
 * @method self withPageNumber
 * @method Long getPageSize
 * @method self withPageSize
 * @method string getStartDate
 * @method self withStartDate
 * @method string getendDate
 * @method self withendDate
 * @method string getType
 * @method self withType
 */
final class DescribeDomainLogs extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getDomainName
 * @method self withDomainName
 * @method Boolean getNeedDetailAttributes
 * @method self withNeedDetailAttributes
 */
final class DescribeDomainInfo extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getKeyWord
 * @method self withKeyWord
 * @method Long getPageNumber
 * @method self withPageNumber
 * @method Long getPageSize
 * @method self withPageSize
 */
final class DescribeDomainGroups extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getDomainName
 * @method self withDomainName
 * @method Long getPageNumber
 * @method self withPageNumber
 * @method Long getPageSize
 * @method self withPageSize
 */
final class DescribeDNSSLBSubDomains extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method Long getPageNumber
 * @method self withPageNumber
 * @method Long getPageSize
 * @method self withPageSize
 * @method string getVersionCode
 * @method self withVersionCode
 */
final class DescribeDnsProductInstances extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getVersionCode
 * @method self withVersionCode
 */
final class DescribeDnsProductAttributes extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getDomainName
 * @method self withDomainName
 * @method string getRR
 * @method self withRR
 * @method string getType
 * @method self withType
 */
final class DeleteSubDomainRecords extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getRecordId
 * @method self withRecordId
 */
final class DeleteDomainRecord extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getGroupId
 * @method self withGroupId
 */
final class DeleteDomainGroup extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getDomainName
 * @method self withDomainName
 */
final class DeleteDomain extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getDomainName
 * @method self withDomainName
 * @method string getRR
 * @method self withRR
 * @method string getType
 * @method self withType
 * @method string getValue
 * @method self withValue
 */
final class CheckDomainRecord extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getNewDomain
 * @method self withNewDomain
 * @method Boolean getForce
 * @method self withForce
 */
final class ChangeDomainOfDnsProduct extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getDomainName
 * @method self withDomainName
 * @method string getGroupId
 * @method self withGroupId
 */
final class ChangeDomainGroup extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getDomainName
 * @method self withDomainName
 * @method string getRR
 * @method self withRR
 * @method string getType
 * @method self withType
 * @method string getValue
 * @method self withValue
 * @method Long getTTL
 * @method self withTTL
 * @method Long getPriority
 * @method self withPriority
 * @method string getLine
 * @method self withLine
 */
final class AddDomainRecord extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getGroupName
 * @method self withGroupName
 */
final class AddDomainGroup extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getDomainName
 * @method self withDomainName
 * @method string getGroupId
 * @method self withGroupId
 */
final class AddDomain extends RpcRequest
{
}
