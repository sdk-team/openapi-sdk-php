<?php

namespace AlibabaCloud\CloudAPI\V20180901;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method string getSourceVpcId
 * @method self withSourceVpcId
 * @method string getTargetVpcId
 * @method self withTargetVpcId
 * @method string getTargetInstance
 * @method self withTargetInstance
 * @method Integer getPort
 * @method self withPort
 */
final class LoadVpcAccess extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getEcsInstanceId
 * @method self withEcsInstanceId
 * @method string getReportTime
 * @method self withReportTime
 * @method Integer getReportInterval
 * @method self withReportInterval
 * @method Integer getRps
 * @method self withRps
 * @method Integer getTotalRequests
 * @method self withTotalRequests
 * @method Integer getTotalErrors
 * @method self withTotalErrors
 * @method Long getThroughputInbound
 * @method self withThroughputInbound
 * @method Long getThroughputOutbound
 * @method self withThroughputOutbound
 * @method string getErrors
 * @method self withErrors
 * @method string getSystemMetrics
 * @method self withSystemMetrics
 * @method string getExtension
 * @method self withExtension
 * @method string getImageVersion
 * @method self withImageVersion
 * @method string getVpcId
 * @method self withVpcId
 * @method string getVSwitchId
 * @method self withVSwitchId
 * @method string getPrivateIp
 * @method self withPrivateIp
 */
final class ReportServerStatus extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getGroupId
 * @method self withGroupId
 * @method string getReportTime
 * @method self withReportTime
 * @method Integer getReportInterval
 * @method self withReportInterval
 * @method Integer getRps
 * @method self withRps
 * @method Integer getTotalRequests
 * @method self withTotalRequests
 * @method Integer getTotalErrors
 * @method self withTotalErrors
 * @method Long getThroughputInbound
 * @method self withThroughputInbound
 * @method Long getThroughputOutbound
 * @method self withThroughputOutbound
 * @method string getErrors
 * @method self withErrors
 * @method string getExtension
 * @method self withExtension
 * @method string getDomainName
 * @method self withDomainName
 */
final class ReportGroupStatus extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method Long getLastTimestamp
 * @method self withLastTimestamp
 * @method Boolean getIncludeDeleted
 * @method self withIncludeDeleted
 * @method string getLastId
 * @method self withLastId
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class LoadGroups extends RpcRequest
{
}

/**
 * @method string getGroupIds
 * @method self withGroupIds
 * @method Long getLastTimestamp
 * @method self withLastTimestamp
 * @method Boolean getIncludeDeleted
 * @method self withIncludeDeleted
 * @method string getLastId
 * @method self withLastId
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class LoadApis extends RpcRequest
{
}

/**
 * @method string getGroupIds
 * @method self withGroupIds
 * @method Long getLastTimestamp
 * @method self withLastTimestamp
 * @method Boolean getIncludeDeleted
 * @method self withIncludeDeleted
 * @method Long getLastId
 * @method self withLastId
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class LoadApiAuthorizations extends RpcRequest
{
}

/**
 * @method Long getLastTimestamp
 * @method self withLastTimestamp
 * @method Long getLastId
 * @method self withLastId
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class LoadMarketSubscriptions extends RpcRequest
{
}
