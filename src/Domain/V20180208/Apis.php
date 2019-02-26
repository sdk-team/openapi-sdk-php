<?php

namespace AlibabaCloud\Domain\V20180208;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RpcRequest as Rpc;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method QueryBrokerDemand queryBrokerDemand($options = [])
 * @method AcceptDemand acceptDemand($options = [])
 * @method RefuseDemand refuseDemand($options = [])
 * @method RecordDemand recordDemand($options = [])
 * @method FailDemand failDemand($options = [])
 * @method FinishDemand finishDemand($options = [])
 * @method RequestPayDemand requestPayDemand($options = [])
 * @method QueryBrokerDemandRecord queryBrokerDemandRecord($options = [])
 * @method GetReserveDomainUrl getReserveDomainUrl($options = [])
 * @method BidDomain bidDomain($options = [])
 * @method QueryBookingDomainInfo queryBookingDomainInfo($options = [])
 * @method QueryBidRecords queryBidRecords($options = [])
 * @method QueryAuctions queryAuctions($options = [])
 * @method QueryAuctionDetail queryAuctionDetail($options = [])
 * @method ReserveDomain reserveDomain($options = [])
 */
class V20180208
{
    use ApiResolverTrait;
}

/**
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getBizId
 * @method self withBizId(string $bizId)
 */
class QueryBrokerDemand extends Rpc
{
    use R;
}

/**
 * @method string getBizId
 * @method self withBizId(string $bizId)
 * @method string getMessage
 * @method self withMessage(string $message)
 */
class AcceptDemand extends Rpc
{
    use R;
}

/**
 * @method string getBizId
 * @method self withBizId(string $bizId)
 * @method string getMessage
 * @method self withMessage(string $message)
 */
class RefuseDemand extends Rpc
{
    use R;
}

/**
 * @method string getBizId
 * @method self withBizId(string $bizId)
 * @method string getMessage
 * @method self withMessage(string $message)
 */
class RecordDemand extends Rpc
{
    use R;
}

/**
 * @method string getBizId
 * @method self withBizId(string $bizId)
 * @method string getMessage
 * @method self withMessage(string $message)
 */
class FailDemand extends Rpc
{
    use R;
}

/**
 * @method string getBizId
 * @method self withBizId(string $bizId)
 * @method string getMessage
 * @method self withMessage(string $message)
 */
class FinishDemand extends Rpc
{
    use R;
}

/**
 * @method string getBizId
 * @method self withBizId(string $bizId)
 * @method string getMessage
 * @method self withMessage(string $message)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method float getPrice
 * @method self withPrice(float $price)
 * @method Integer getProduceType
 * @method self withProduceType(Integer $produceType)
 */
class RequestPayDemand extends Rpc
{
    use R;
}

/**
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getBizId
 * @method self withBizId(string $bizId)
 */
class QueryBrokerDemandRecord extends Rpc
{
    use R;
}

class GetReserveDomainUrl extends Rpc
{
    use R;
}

/**
 * @method string getAuctionId
 * @method self withAuctionId(string $auctionId)
 * @method float getMaxBid
 * @method self withMaxBid(float $maxBid)
 * @method string getCurrency
 * @method self withCurrency(string $currency)
 */
class BidDomain extends Rpc
{
    use R;
}

/**
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class QueryBookingDomainInfo extends Rpc
{
    use R;
}

/**
 * @method string getAuctionId
 * @method self withAuctionId(string $auctionId)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class QueryBidRecords extends Rpc
{
    use R;
}

/**
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class QueryAuctions extends Rpc
{
    use R;
}

/**
 * @method string getAuctionId
 * @method self withAuctionId(string $auctionId)
 */
class QueryAuctionDetail extends Rpc
{
    use R;
}

/**
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method array getChannels
 * @method self withChannels(array $channels)
 */
class ReserveDomain extends Rpc
{
    use R;
}
