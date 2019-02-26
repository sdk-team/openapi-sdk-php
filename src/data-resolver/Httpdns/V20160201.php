<?php

namespace AlibabaCloud\Httpdns\V20160201;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method string getDomainName
 * @method self withDomainName
 * @method string getPayload
 * @method self withPayload
 */
final class SetIPRegionResult extends RpcRequest
{
}

/**
 * @method string getDomainName
 * @method self withDomainName
 */
final class GetIPRegionResult extends RpcRequest
{
}

/**
 * @method string getDomainName
 * @method self withDomainName
 * @method string getPayload
 * @method self withPayload
 */
final class SetGrayIPRegion extends RpcRequest
{
}

/**
 * @method string getDomainName
 * @method self withDomainName
 */
final class GetGrayIPRegion extends RpcRequest
{
}

/**
 * @method string getGranularity
 * @method self withGranularity
 * @method Integer getTimeSpan
 * @method self withTimeSpan
 */
final class GetResolveCountSummary extends RpcRequest
{
}

/**
 * @method Boolean getEnableInterface
 * @method self withEnableInterface
 */
final class SwitchUnsignedInterface extends RpcRequest
{
}

/**
 * @method string getDomainName
 * @method self withDomainName
 * @method string getSourceIp
 * @method self withSourceIp
 */
final class ResolveDomain extends RpcRequest
{
}

/**
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class ListDomains extends RpcRequest
{
}

/**
 * @method string getDomainName
 * @method self withDomainName
 * @method string getGranularity
 * @method self withGranularity
 * @method Integer getTimeSpan
 * @method self withTimeSpan
 * @method string getProtocolName
 * @method self withProtocolName
 */
final class GetResolveStatistics extends RpcRequest
{
}

final class GetAccountInfo extends RpcRequest
{
}

/**
 * @method string getAccountId
 * @method self withAccountId
 * @method Long getPageNumber
 * @method self withPageNumber
 * @method Long getPageSize
 * @method self withPageSize
 */
final class DescribeDomains extends RpcRequest
{
}

/**
 * @method string getAccountId
 * @method self withAccountId
 * @method string getDomainName
 * @method self withDomainName
 */
final class DeleteDomain extends RpcRequest
{
}

/**
 * @method string getAccountId
 * @method self withAccountId
 * @method string getDomainName
 * @method self withDomainName
 */
final class AddDomain extends RpcRequest
{
}
