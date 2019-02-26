<?php

namespace AlibabaCloud\Pvtz\V20180101;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RpcRequest as Rpc;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method SetProxyPattern setProxyPattern($options = [])
 * @method DescribeRecordStatisticsHistory describeRecordStatisticsHistory($options = [])
 * @method DescribeZoneStatisticsHistory describeZoneStatisticsHistory($options = [])
 * @method DescribeRecordStatisticsSummary describeRecordStatisticsSummary($options = [])
 * @method DescribeZoneStatisticsSummary describeZoneStatisticsSummary($options = [])
 * @method ImportEcsHostName importEcsHostName($options = [])
 * @method DescribeStatisticSummary describeStatisticSummary($options = [])
 * @method DescribeRequestGraph describeRequestGraph($options = [])
 * @method DescribeZoneVpcTree describeZoneVpcTree($options = [])
 * @method AddZoneRecord addZoneRecord($options = [])
 * @method DeleteZoneRecord deleteZoneRecord($options = [])
 * @method CheckZoneName checkZoneName($options = [])
 * @method AddZone addZone($options = [])
 * @method DeleteZone deleteZone($options = [])
 * @method DescribeZones describeZones($options = [])
 * @method UpdateZoneRemark updateZoneRemark($options = [])
 * @method DescribeZoneInfo describeZoneInfo($options = [])
 * @method DescribeRegions describeRegions($options = [])
 * @method BindZoneVpc bindZoneVpc($options = [])
 * @method UpdateZoneRecord updateZoneRecord($options = [])
 * @method SetZoneRecordStatus setZoneRecordStatus($options = [])
 * @method DescribeZoneRecords describeZoneRecords($options = [])
 * @method DescribeChangeLogs describeChangeLogs($options = [])
 * @method DescribeUserServiceStatus describeUserServiceStatus($options = [])
 * @method ImportZoneRecord importZoneRecord($options = [])
 * @method DescribeImportResult describeImportResult($options = [])
 */
class V20180101
{
    use ApiResolverTrait;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 * @method string getProxyPattern
 * @method self withProxyPattern(string $proxyPattern)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 */
class SetProxyPattern extends Rpc
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
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
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
 * @method string getStartDate
 * @method self withStartDate(string $startDate)
 * @method string getEndDate
 * @method self withEndDate(string $endDate)
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 */
class DescribeZoneStatisticsHistory extends Rpc
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
 * @method string getStartDate
 * @method self withStartDate(string $startDate)
 * @method string getEndDate
 * @method self withEndDate(string $endDate)
 * @method string getOrderBy
 * @method self withOrderBy(string $orderBy)
 * @method string getDirection
 * @method self withDirection(string $direction)
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
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
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
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
class DescribeZoneStatisticsSummary extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 * @method string getEcsRegionId
 * @method self withEcsRegionId(string $ecsRegionId)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 */
class ImportEcsHostName extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 */
class DescribeStatisticSummary extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 * @method int getStartTimestamp
 * @method self withStartTimestamp(int $startTimestamp)
 * @method int getEndTimestamp
 * @method self withEndTimestamp(int $endTimestamp)
 */
class DescribeRequestGraph extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 */
class DescribeZoneVpcTree extends Rpc
{
    use R;
}

/**
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getRr
 * @method self withRr(string $rr)
 * @method string getType
 * @method self withType(string $type)
 * @method Integer getTtl
 * @method self withTtl(Integer $ttl)
 * @method Integer getPriority
 * @method self withPriority(Integer $priority)
 * @method string getValue
 * @method self withValue(string $value)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 */
class AddZoneRecord extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method int getRecordId
 * @method self withRecordId(int $recordId)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 */
class DeleteZoneRecord extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getZoneName
 * @method self withZoneName(string $zoneName)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 */
class CheckZoneName extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getZoneName
 * @method self withZoneName(string $zoneName)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getProxyPattern
 * @method self withProxyPattern(string $proxyPattern)
 */
class AddZone extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 */
class DeleteZone extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getKeyword
 * @method self withKeyword(string $keyword)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getSearchMode
 * @method self withSearchMode(string $searchMode)
 */
class DescribeZones extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 * @method string getRemark
 * @method self withRemark(string $remark)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 */
class UpdateZoneRemark extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 */
class DescribeZoneInfo extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getAcceptLanguage
 * @method self withAcceptLanguage(string $acceptLanguage)
 */
class DescribeRegions extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 * @method array getVpcs
 * @method self withVpcs(array $vpcs)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 */
class BindZoneVpc extends Rpc
{
    use R;
}

/**
 * @method string getRr
 * @method self withRr(string $rr)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method int getRecordId
 * @method self withRecordId(int $recordId)
 * @method string getType
 * @method self withType(string $type)
 * @method Integer getTtl
 * @method self withTtl(Integer $ttl)
 * @method Integer getPriority
 * @method self withPriority(Integer $priority)
 * @method string getValue
 * @method self withValue(string $value)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 */
class UpdateZoneRecord extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method int getRecordId
 * @method self withRecordId(int $recordId)
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 */
class SetZoneRecordStatus extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getKeyword
 * @method self withKeyword(string $keyword)
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getTag
 * @method self withTag(string $tag)
 * @method string getSearchMode
 * @method self withSearchMode(string $searchMode)
 */
class DescribeZoneRecords extends Rpc
{
    use R;
}

/**
 * @method string getKeyword
 * @method self withKeyword(string $keyword)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method int getStartTimestamp
 * @method self withStartTimestamp(int $startTimestamp)
 * @method int getEndTimestamp
 * @method self withEndTimestamp(int $endTimestamp)
 * @method string getEntityType
 * @method self withEntityType(string $entityType)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 */
class DescribeChangeLogs extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 */
class DescribeUserServiceStatus extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 * @method string getFileName
 * @method self withFileName(string $fileName)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 */
class ImportZoneRecord extends Rpc
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
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 */
class DescribeImportResult extends Rpc
{
    use R;
}
