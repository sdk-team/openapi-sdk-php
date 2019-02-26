<?php

namespace AlibabaCloud\Domain\V20180208;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method string getStatus
 * @method self withStatus
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getBizId
 * @method self withBizId
 */
final class QueryBrokerDemand extends RpcRequest
{
}

/**
 * @method string getBizId
 * @method self withBizId
 * @method string getMessage
 * @method self withMessage
 */
final class AcceptDemand extends RpcRequest
{
}

/**
 * @method string getBizId
 * @method self withBizId
 * @method string getMessage
 * @method self withMessage
 */
final class RefuseDemand extends RpcRequest
{
}

/**
 * @method string getBizId
 * @method self withBizId
 * @method string getMessage
 * @method self withMessage
 */
final class RecordDemand extends RpcRequest
{
}

/**
 * @method string getBizId
 * @method self withBizId
 * @method string getMessage
 * @method self withMessage
 */
final class FailDemand extends RpcRequest
{
}

/**
 * @method string getBizId
 * @method self withBizId
 * @method string getMessage
 * @method self withMessage
 */
final class FinishDemand extends RpcRequest
{
}

/**
 * @method string getBizId
 * @method self withBizId
 * @method string getMessage
 * @method self withMessage
 * @method string getDomainName
 * @method self withDomainName
 * @method Float getPrice
 * @method self withPrice
 * @method Integer getProduceType
 * @method self withProduceType
 */
final class RequestPayDemand extends RpcRequest
{
}

/**
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getBizId
 * @method self withBizId
 */
final class QueryBrokerDemandRecord extends RpcRequest
{
}

final class GetReserveDomainUrl extends RpcRequest
{
}

/**
 * @method string getAuctionId
 * @method self withAuctionId
 * @method Float getMaxBid
 * @method self withMaxBid
 * @method string getCurrency
 * @method self withCurrency
 */
final class BidDomain extends RpcRequest
{
}

/**
 * @method string getDomainName
 * @method self withDomainName
 */
final class QueryBookingDomainInfo extends RpcRequest
{
}

/**
 * @method string getAuctionId
 * @method self withAuctionId
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class QueryBidRecords extends RpcRequest
{
}

/**
 * @method string getStatus
 * @method self withStatus
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class QueryAuctions extends RpcRequest
{
}

/**
 * @method string getAuctionId
 * @method self withAuctionId
 */
final class QueryAuctionDetail extends RpcRequest
{
}

/**
 * @method string getDomainName
 * @method self withDomainName
 * @method RepeatList getChannels
 * @method self withChannels
 */
final class ReserveDomain extends RpcRequest
{
}
