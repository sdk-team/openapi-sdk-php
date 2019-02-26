<?php

namespace AlibabaCloud\CloudAPI\V20180901;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RpcRequest as Rpc;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method LoadVpcAccess loadVpcAccess($options = [])
 * @method ReportServerStatus reportServerStatus($options = [])
 * @method ReportGroupStatus reportGroupStatus($options = [])
 * @method LoadGroups loadGroups($options = [])
 * @method LoadApis loadApis($options = [])
 * @method LoadApiAuthorizations loadApiAuthorizations($options = [])
 * @method LoadMarketSubscriptions loadMarketSubscriptions($options = [])
 */
class V20180901
{
    use ApiResolverTrait;
}

/**
 * @method string getSourceVpcId
 * @method self withSourceVpcId(string $sourceVpcId)
 * @method string getTargetVpcId
 * @method self withTargetVpcId(string $targetVpcId)
 * @method string getTargetInstance
 * @method self withTargetInstance(string $targetInstance)
 * @method Integer getPort
 * @method self withPort(Integer $port)
 */
class LoadVpcAccess extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getEcsInstanceId
 * @method self withEcsInstanceId(string $ecsInstanceId)
 * @method string getReportTime
 * @method self withReportTime(string $reportTime)
 * @method Integer getReportInterval
 * @method self withReportInterval(Integer $reportInterval)
 * @method Integer getRps
 * @method self withRps(Integer $rps)
 * @method Integer getTotalRequests
 * @method self withTotalRequests(Integer $totalRequests)
 * @method Integer getTotalErrors
 * @method self withTotalErrors(Integer $totalErrors)
 * @method int getThroughputInbound
 * @method self withThroughputInbound(int $throughputInbound)
 * @method int getThroughputOutbound
 * @method self withThroughputOutbound(int $throughputOutbound)
 * @method string getErrors
 * @method self withErrors(string $errors)
 * @method string getSystemMetrics
 * @method self withSystemMetrics(string $systemMetrics)
 * @method string getExtension
 * @method self withExtension(string $extension)
 * @method string getImageVersion
 * @method self withImageVersion(string $imageVersion)
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 * @method string getVSwitchId
 * @method self withVSwitchId(string $vSwitchId)
 * @method string getPrivateIp
 * @method self withPrivateIp(string $privateIp)
 */
class ReportServerStatus extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getReportTime
 * @method self withReportTime(string $reportTime)
 * @method Integer getReportInterval
 * @method self withReportInterval(Integer $reportInterval)
 * @method Integer getRps
 * @method self withRps(Integer $rps)
 * @method Integer getTotalRequests
 * @method self withTotalRequests(Integer $totalRequests)
 * @method Integer getTotalErrors
 * @method self withTotalErrors(Integer $totalErrors)
 * @method int getThroughputInbound
 * @method self withThroughputInbound(int $throughputInbound)
 * @method int getThroughputOutbound
 * @method self withThroughputOutbound(int $throughputOutbound)
 * @method string getErrors
 * @method self withErrors(string $errors)
 * @method string getExtension
 * @method self withExtension(string $extension)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class ReportGroupStatus extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method int getLastTimestamp
 * @method self withLastTimestamp(int $lastTimestamp)
 * @method bool getIncludeDeleted
 * @method self withIncludeDeleted(bool $includeDeleted)
 * @method string getLastId
 * @method self withLastId(string $lastId)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class LoadGroups extends Rpc
{
    use R;
}

/**
 * @method string getGroupIds
 * @method self withGroupIds(string $groupIds)
 * @method int getLastTimestamp
 * @method self withLastTimestamp(int $lastTimestamp)
 * @method bool getIncludeDeleted
 * @method self withIncludeDeleted(bool $includeDeleted)
 * @method string getLastId
 * @method self withLastId(string $lastId)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class LoadApis extends Rpc
{
    use R;
}

/**
 * @method string getGroupIds
 * @method self withGroupIds(string $groupIds)
 * @method int getLastTimestamp
 * @method self withLastTimestamp(int $lastTimestamp)
 * @method bool getIncludeDeleted
 * @method self withIncludeDeleted(bool $includeDeleted)
 * @method int getLastId
 * @method self withLastId(int $lastId)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class LoadApiAuthorizations extends Rpc
{
    use R;
}

/**
 * @method int getLastTimestamp
 * @method self withLastTimestamp(int $lastTimestamp)
 * @method int getLastId
 * @method self withLastId(int $lastId)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class LoadMarketSubscriptions extends Rpc
{
    use R;
}
