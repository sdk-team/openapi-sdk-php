<?php

namespace AlibabaCloud\Dcdn\V20180115;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RpcRequest as Rpc;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method DescribeDcdnDomainRealTimeBpsData describeDcdnDomainRealTimeBpsData($options = [])
 * @method DescribeDcdnDomainRealTimeByteHitRateData describeDcdnDomainRealTimeByteHitRateData($options = [])
 * @method DescribeDcdnDomainRealTimeHttpCodeData describeDcdnDomainRealTimeHttpCodeData($options = [])
 * @method DescribeDcdnDomainRealTimeQpsData describeDcdnDomainRealTimeQpsData($options = [])
 * @method DescribeDcdnDomainRealTimeReqHitRateData describeDcdnDomainRealTimeReqHitRateData($options = [])
 * @method DescribeDcdnDomainRealTimeSrcBpsData describeDcdnDomainRealTimeSrcBpsData($options = [])
 * @method DescribeDcdnDomainRealTimeSrcHttpCodeData describeDcdnDomainRealTimeSrcHttpCodeData($options = [])
 * @method DescribeDcdnDomainRealTimeSrcTrafficData describeDcdnDomainRealTimeSrcTrafficData($options = [])
 * @method DescribeDcdnDomainRealTimeTrafficData describeDcdnDomainRealTimeTrafficData($options = [])
 * @method DescribeDcdnDomainUvData describeDcdnDomainUvData($options = [])
 * @method DescribeDcdnDomainPvData describeDcdnDomainPvData($options = [])
 * @method SetDcdnUserConfig setDcdnUserConfig($options = [])
 * @method DescribeDcdnDomainWebsocketHttpCodeData describeDcdnDomainWebsocketHttpCodeData($options = [])
 * @method DescribeDcdnDomainWebsocketBpsData describeDcdnDomainWebsocketBpsData($options = [])
 * @method DescribeDcdnDomainWebsocketTrafficData describeDcdnDomainWebsocketTrafficData($options = [])
 * @method DescribeDcdnDomainTopUrlVisit describeDcdnDomainTopUrlVisit($options = [])
 * @method DescribeDcdnDomainTopReferVisit describeDcdnDomainTopReferVisit($options = [])
 * @method DescribeDcdnDomainRegionData describeDcdnDomainRegionData($options = [])
 * @method DescribeDcdnDomainIspData describeDcdnDomainIspData($options = [])
 * @method DescribeDcdnTopDomainsByFlow describeDcdnTopDomainsByFlow($options = [])
 * @method DescribeDcdnUserQuota describeDcdnUserQuota($options = [])
 * @method DescribeDcdnDomainCertificateInfo describeDcdnDomainCertificateInfo($options = [])
 * @method DescribeDcdnDomainTrafficData describeDcdnDomainTrafficData($options = [])
 * @method DescribeDcdnDomainQpsData describeDcdnDomainQpsData($options = [])
 * @method DescribeDcdnDomainOriginTrafficData describeDcdnDomainOriginTrafficData($options = [])
 * @method DescribeDcdnDomainOriginBpsData describeDcdnDomainOriginBpsData($options = [])
 * @method DescribeDcdnDomainLog describeDcdnDomainLog($options = [])
 * @method DescribeDcdnDomainHttpCodeData describeDcdnDomainHttpCodeData($options = [])
 * @method DescribeDcdnDomainHitRateData describeDcdnDomainHitRateData($options = [])
 * @method DescribeDcdnDomainCname describeDcdnDomainCname($options = [])
 * @method DescribeDcdnDomainBpsData describeDcdnDomainBpsData($options = [])
 * @method PreloadDcdnObjectCaches preloadDcdnObjectCaches($options = [])
 * @method DeleteDcdnSpecificConfig deleteDcdnSpecificConfig($options = [])
 * @method DescribeDcdnUserDomains describeDcdnUserDomains($options = [])
 * @method BatchStartDcdnDomain batchStartDcdnDomain($options = [])
 * @method DescribeDcdnDomainDetail describeDcdnDomainDetail($options = [])
 * @method DescribeUserDcdnStatus describeUserDcdnStatus($options = [])
 * @method StartDcdnDomain startDcdnDomain($options = [])
 * @method DescribeDcdnRefreshTasks describeDcdnRefreshTasks($options = [])
 * @method BatchStopDcdnDomain batchStopDcdnDomain($options = [])
 * @method StopDcdnDomain stopDcdnDomain($options = [])
 * @method UpdateDcdnDomain updateDcdnDomain($options = [])
 * @method DescribeDcdnService describeDcdnService($options = [])
 * @method RefreshDcdnObjectCaches refreshDcdnObjectCaches($options = [])
 * @method DescribeDcdnDomainConfigs describeDcdnDomainConfigs($options = [])
 * @method DescribeDcdnUserResourcePackage describeDcdnUserResourcePackage($options = [])
 * @method DescribeDcdnRefreshQuota describeDcdnRefreshQuota($options = [])
 * @method BatchSetDcdnDomainConfigs batchSetDcdnDomainConfigs($options = [])
 * @method SetDcdnDomainCertificate setDcdnDomainCertificate($options = [])
 * @method AddDcdnDomain addDcdnDomain($options = [])
 * @method DeleteDcdnDomain deleteDcdnDomain($options = [])
 * @method DescribeDcdnCertificateDetail describeDcdnCertificateDetail($options = [])
 * @method DescribeDcdnCertificateList describeDcdnCertificateList($options = [])
 * @method BatchDeleteDcdnDomainConfigs batchDeleteDcdnDomainConfigs($options = [])
 */
class V20180115
{
    use ApiResolverTrait;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getIspNameEn
 * @method self withIspNameEn(string $ispNameEn)
 * @method string getLocationNameEn
 * @method self withLocationNameEn(string $locationNameEn)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeDcdnDomainRealTimeBpsData extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeDcdnDomainRealTimeByteHitRateData extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getIspNameEn
 * @method self withIspNameEn(string $ispNameEn)
 * @method string getLocationNameEn
 * @method self withLocationNameEn(string $locationNameEn)
 */
class DescribeDcdnDomainRealTimeHttpCodeData extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getIspNameEn
 * @method self withIspNameEn(string $ispNameEn)
 * @method string getLocationNameEn
 * @method self withLocationNameEn(string $locationNameEn)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeDcdnDomainRealTimeQpsData extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeDcdnDomainRealTimeReqHitRateData extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeDcdnDomainRealTimeSrcBpsData extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getIspNameEn
 * @method self withIspNameEn(string $ispNameEn)
 * @method string getLocationNameEn
 * @method self withLocationNameEn(string $locationNameEn)
 */
class DescribeDcdnDomainRealTimeSrcHttpCodeData extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeDcdnDomainRealTimeSrcTrafficData extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeDcdnDomainRealTimeTrafficData extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeDcdnDomainUvData extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeDcdnDomainPvData extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method Integer getFunctionId
 * @method self withFunctionId(Integer $functionId)
 * @method string getConfigs
 * @method self withConfigs(string $configs)
 */
class SetDcdnUserConfig extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getInterval
 * @method self withInterval(string $interval)
 * @method string getIspNameEn
 * @method self withIspNameEn(string $ispNameEn)
 * @method string getLocationNameEn
 * @method self withLocationNameEn(string $locationNameEn)
 */
class DescribeDcdnDomainWebsocketHttpCodeData extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getTimeMerge
 * @method self withTimeMerge(string $timeMerge)
 * @method string getInterval
 * @method self withInterval(string $interval)
 * @method string getFixTimeGap
 * @method self withFixTimeGap(string $fixTimeGap)
 * @method string getIspNameEn
 * @method self withIspNameEn(string $ispNameEn)
 * @method string getLocationNameEn
 * @method self withLocationNameEn(string $locationNameEn)
 */
class DescribeDcdnDomainWebsocketBpsData extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getTimeMerge
 * @method self withTimeMerge(string $timeMerge)
 * @method string getInterval
 * @method self withInterval(string $interval)
 * @method string getFixTimeGap
 * @method self withFixTimeGap(string $fixTimeGap)
 * @method string getIspNameEn
 * @method self withIspNameEn(string $ispNameEn)
 * @method string getLocationNameEn
 * @method self withLocationNameEn(string $locationNameEn)
 */
class DescribeDcdnDomainWebsocketTrafficData extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getSortBy
 * @method self withSortBy(string $sortBy)
 */
class DescribeDcdnDomainTopUrlVisit extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getSortBy
 * @method self withSortBy(string $sortBy)
 */
class DescribeDcdnDomainTopReferVisit extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeDcdnDomainRegionData extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeDcdnDomainIspData extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getProduct
 * @method self withProduct(string $product)
 * @method int getLimit
 * @method self withLimit(int $limit)
 */
class DescribeDcdnTopDomainsByFlow extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 */
class DescribeDcdnUserQuota extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class DescribeDcdnDomainCertificateInfo extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getTimeMerge
 * @method self withTimeMerge(string $timeMerge)
 * @method string getInterval
 * @method self withInterval(string $interval)
 * @method string getFixTimeGap
 * @method self withFixTimeGap(string $fixTimeGap)
 * @method string getIspNameEn
 * @method self withIspNameEn(string $ispNameEn)
 * @method string getLocationNameEn
 * @method self withLocationNameEn(string $locationNameEn)
 */
class DescribeDcdnDomainTrafficData extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getTimeMerge
 * @method self withTimeMerge(string $timeMerge)
 * @method string getInterval
 * @method self withInterval(string $interval)
 * @method string getFixTimeGap
 * @method self withFixTimeGap(string $fixTimeGap)
 * @method string getIspNameEn
 * @method self withIspNameEn(string $ispNameEn)
 * @method string getLocationNameEn
 * @method self withLocationNameEn(string $locationNameEn)
 */
class DescribeDcdnDomainQpsData extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getTimeMerge
 * @method self withTimeMerge(string $timeMerge)
 * @method string getInterval
 * @method self withInterval(string $interval)
 * @method string getFixTimeGap
 * @method self withFixTimeGap(string $fixTimeGap)
 */
class DescribeDcdnDomainOriginTrafficData extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getTimeMerge
 * @method self withTimeMerge(string $timeMerge)
 * @method string getInterval
 * @method self withInterval(string $interval)
 * @method string getFixTimeGap
 * @method self withFixTimeGap(string $fixTimeGap)
 */
class DescribeDcdnDomainOriginBpsData extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 * @method int getPageNumber
 * @method self withPageNumber(int $pageNumber)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeDcdnDomainLog extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getInterval
 * @method self withInterval(string $interval)
 * @method string getIspNameEn
 * @method self withIspNameEn(string $ispNameEn)
 * @method string getLocationNameEn
 * @method self withLocationNameEn(string $locationNameEn)
 */
class DescribeDcdnDomainHttpCodeData extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getInterval
 * @method self withInterval(string $interval)
 */
class DescribeDcdnDomainHitRateData extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class DescribeDcdnDomainCname extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getTimeMerge
 * @method self withTimeMerge(string $timeMerge)
 * @method string getInterval
 * @method self withInterval(string $interval)
 * @method string getFixTimeGap
 * @method self withFixTimeGap(string $fixTimeGap)
 * @method string getIspNameEn
 * @method self withIspNameEn(string $ispNameEn)
 * @method string getLocationNameEn
 * @method self withLocationNameEn(string $locationNameEn)
 */
class DescribeDcdnDomainBpsData extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getObjectPath
 * @method self withObjectPath(string $objectPath)
 * @method string getArea
 * @method self withArea(string $area)
 */
class PreloadDcdnObjectCaches extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getConfigId
 * @method self withConfigId(string $configId)
 */
class DeleteDcdnSpecificConfig extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getDomainStatus
 * @method self withDomainStatus(string $domainStatus)
 * @method string getDomainSearchType
 * @method self withDomainSearchType(string $domainSearchType)
 * @method bool getCheckDomainShow
 * @method self withCheckDomainShow(bool $checkDomainShow)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 * @method string getFuncId
 * @method self withFuncId(string $funcId)
 * @method string getFuncFilter
 * @method self withFuncFilter(string $funcFilter)
 */
class DescribeDcdnUserDomains extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainNames
 * @method self withDomainNames(string $domainNames)
 */
class BatchStartDcdnDomain extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class DescribeDcdnDomainDetail extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 */
class DescribeUserDcdnStatus extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class StartDcdnDomain extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getTaskId
 * @method self withTaskId(string $taskId)
 * @method string getObjectPath
 * @method self withObjectPath(string $objectPath)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method string getObjectType
 * @method self withObjectType(string $objectType)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 */
class DescribeDcdnRefreshTasks extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainNames
 * @method self withDomainNames(string $domainNames)
 */
class BatchStopDcdnDomain extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class StopDcdnDomain extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getSources
 * @method self withSources(string $sources)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 * @method string getTopLevelDomain
 * @method self withTopLevelDomain(string $topLevelDomain)
 */
class UpdateDcdnDomain extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 */
class DescribeDcdnService extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getObjectPath
 * @method self withObjectPath(string $objectPath)
 * @method string getObjectType
 * @method self withObjectType(string $objectType)
 */
class RefreshDcdnObjectCaches extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getFunctionNames
 * @method self withFunctionNames(string $functionNames)
 */
class DescribeDcdnDomainConfigs extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 */
class DescribeDcdnUserResourcePackage extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 */
class DescribeDcdnRefreshQuota extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainNames
 * @method self withDomainNames(string $domainNames)
 * @method string getFunctions
 * @method self withFunctions(string $functions)
 */
class BatchSetDcdnDomainConfigs extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getCertName
 * @method self withCertName(string $certName)
 * @method string getCertType
 * @method self withCertType(string $certType)
 * @method string getSSLProtocol
 * @method self withSSLProtocol(string $sSLProtocol)
 * @method string getSSLPub
 * @method self withSSLPub(string $sSLPub)
 * @method string getSSLPri
 * @method self withSSLPri(string $sSLPri)
 * @method string getRegion
 * @method self withRegion(string $region)
 * @method string getForceSet
 * @method self withForceSet(string $forceSet)
 */
class SetDcdnDomainCertificate extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 * @method string getSources
 * @method self withSources(string $sources)
 * @method string getCheckUrl
 * @method self withCheckUrl(string $checkUrl)
 * @method string getScope
 * @method self withScope(string $scope)
 * @method string getTopLevelDomain
 * @method self withTopLevelDomain(string $topLevelDomain)
 */
class AddDcdnDomain extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 */
class DeleteDcdnDomain extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getCertName
 * @method self withCertName(string $certName)
 */
class DescribeDcdnCertificateDetail extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class DescribeDcdnCertificateList extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainNames
 * @method self withDomainNames(string $domainNames)
 * @method string getFunctionNames
 * @method self withFunctionNames(string $functionNames)
 */
class BatchDeleteDcdnDomainConfigs extends Rpc
{
    use R;
}
