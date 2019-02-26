<?php

namespace AlibabaCloud\Httpdns\V20160201;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method SetIPRegionResult setIPRegionResult($options = [])
 * @method GetIPRegionResult getIPRegionResult($options = [])
 * @method SetGrayIPRegion setGrayIPRegion($options = [])
 * @method GetGrayIPRegion getGrayIPRegion($options = [])
 * @method GetResolveCountSummary getResolveCountSummary($options = [])
 * @method SwitchUnsignedInterface switchUnsignedInterface($options = [])
 * @method ResolveDomain resolveDomain($options = [])
 * @method ListDomains listDomains($options = [])
 * @method GetResolveStatistics getResolveStatistics($options = [])
 * @method GetAccountInfo getAccountInfo($options = [])
 * @method DescribeDomains describeDomains($options = [])
 * @method DeleteDomain deleteDomain($options = [])
 * @method AddDomain addDomain($options = [])
 */
class V20160201
{
    use ApiResolverTrait;
}

/**
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getPayload
 * @method self withPayload(string $payload)
 */
class SetIPRegionResult extends Roa
{
    use R;
}

/**
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class GetIPRegionResult extends Roa
{
    use R;
}

/**
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getPayload
 * @method self withPayload(string $payload)
 */
class SetGrayIPRegion extends Roa
{
    use R;
}

/**
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class GetGrayIPRegion extends Roa
{
    use R;
}

/**
 * @method string getGranularity
 * @method self withGranularity(string $granularity)
 * @method Integer getTimeSpan
 * @method self withTimeSpan(Integer $timeSpan)
 */
class GetResolveCountSummary extends Roa
{
    use R;
}

/**
 * @method bool getEnableInterface
 * @method self withEnableInterface(bool $enableInterface)
 */
class SwitchUnsignedInterface extends Roa
{
    use R;
}

/**
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 */
class ResolveDomain extends Roa
{
    use R;
}

/**
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class ListDomains extends Roa
{
    use R;
}

/**
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getGranularity
 * @method self withGranularity(string $granularity)
 * @method Integer getTimeSpan
 * @method self withTimeSpan(Integer $timeSpan)
 * @method string getProtocolName
 * @method self withProtocolName(string $protocolName)
 */
class GetResolveStatistics extends Roa
{
    use R;
}

class GetAccountInfo extends Roa
{
    use R;
}

/**
 * @method string getAccountId
 * @method self withAccountId(string $accountId)
 * @method int getPageNumber
 * @method self withPageNumber(int $pageNumber)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 */
class DescribeDomains extends Roa
{
    use R;
}

/**
 * @method string getAccountId
 * @method self withAccountId(string $accountId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class DeleteDomain extends Roa
{
    use R;
}

/**
 * @method string getAccountId
 * @method self withAccountId(string $accountId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class AddDomain extends Roa
{
    use R;
}
