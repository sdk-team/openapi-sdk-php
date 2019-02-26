<?php

namespace AlibabaCloud\Linkedmall\V20180116;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method string getBizId
 * @method self withBizId
 * @method string getBizUid
 * @method self withBizUid
 * @method string getOutTradeId
 * @method self withOutTradeId
 * @method Long getItemId
 * @method self withItemId
 * @method Long getQuantity
 * @method self withQuantity
 * @method Long getTotalAmount
 * @method self withTotalAmount
 * @method string getExtJson
 * @method self withExtJson
 */
final class CreateOrder extends RpcRequest
{
}

/**
 * @method string getBizId
 * @method self withBizId
 * @method string getBizUid
 * @method self withBizUid
 * @method string getOutTradeId
 * @method self withOutTradeId
 * @method string getLockSeatAppKey
 * @method self withLockSeatAppKey
 * @method string getExtJson
 * @method self withExtJson
 */
final class CreateMovieTicketOrder extends RpcRequest
{
}

/**
 * @method string getBizId
 * @method self withBizId
 * @method string getGroupId
 * @method self withGroupId
 * @method Long getPageNumber
 * @method self withPageNumber
 * @method Long getPageSize
 * @method self withPageSize
 */
final class QueryGuideItemGroup extends RpcRequest
{
}

/**
 * @method string getBizId
 * @method self withBizId
 * @method Long getItemId
 * @method self withItemId
 */
final class QueryItemDetail extends RpcRequest
{
}

/**
 * @method string getBizId
 * @method self withBizId
 * @method Long getCityCode
 * @method self withCityCode
 * @method string getExtJson
 * @method self withExtJson
 */
final class QueryHotMovies extends RpcRequest
{
}

/**
 * @method string getBizId
 * @method self withBizId
 * @method Long getMovieId
 * @method self withMovieId
 * @method Long getPageNumber
 * @method self withPageNumber
 * @method string getExtJson
 * @method self withExtJson
 */
final class QueryMovieComments extends RpcRequest
{
}

/**
 * @method string getBizId
 * @method self withBizId
 * @method Long getCinemaId
 * @method self withCinemaId
 * @method string getExtJson
 * @method self withExtJson
 */
final class QueryMovieSchedules extends RpcRequest
{
}

/**
 * @method string getBizId
 * @method self withBizId
 * @method string getTopic
 * @method self withTopic
 * @method string getExtJson
 * @method self withExtJson
 */
final class QueryMessages extends RpcRequest
{
}

/**
 * @method string getBizId
 * @method self withBizId
 * @method string getMessageIds
 * @method self withMessageIds
 * @method string getExtJson
 * @method self withExtJson
 */
final class RemoveMessages extends RpcRequest
{
}

/**
 * @method string getBizId
 * @method self withBizId
 * @method string getBizUid
 * @method self withBizUid
 * @method string getOrderId
 * @method self withOrderId
 * @method string getExtJson
 * @method self withExtJson
 */
final class QueryMovieTickets extends RpcRequest
{
}

/**
 * @method string getBizId
 * @method self withBizId
 * @method Long getCityCode
 * @method self withCityCode
 * @method Long getPageNumber
 * @method self withPageNumber
 * @method string getExtJson
 * @method self withExtJson
 */
final class QueryAllCinemas extends RpcRequest
{
}

/**
 * @method string getBizId
 * @method self withBizId
 * @method Json getExtJson
 * @method self withExtJson
 */
final class QueryAllCities extends RpcRequest
{
}

/**
 * @method string getBizId
 * @method self withBizId
 * @method Long getCityCode
 * @method self withCityCode
 * @method Json getExtJson
 * @method self withExtJson
 */
final class QueryUpcomingMovies extends RpcRequest
{
}

/**
 * @method string getBizId
 * @method self withBizId
 * @method Long getScheduleId
 * @method self withScheduleId
 * @method string getExtJson
 * @method self withExtJson
 */
final class QueryMovieSeats extends RpcRequest
{
}

/**
 * @method string getBizId
 * @method self withBizId
 * @method Long getScheduleId
 * @method self withScheduleId
 * @method string getSeatIds
 * @method self withSeatIds
 * @method string getSeatNames
 * @method self withSeatNames
 * @method string getBizUid
 * @method self withBizUid
 * @method string getMobile
 * @method self withMobile
 * @method string getExtJson
 * @method self withExtJson
 */
final class ReserveMovieSeat extends RpcRequest
{
}

/**
 * @method string getBizId
 * @method self withBizId
 * @method string getLockSeatApplyKey
 * @method self withLockSeatApplyKey
 * @method string getBizUid
 * @method self withBizUid
 * @method string getExtJson
 * @method self withExtJson
 */
final class ReleaseMovieSeat extends RpcRequest
{
}

/**
 * @method string getBizId
 * @method self withBizId
 * @method string getSubBizId
 * @method self withSubBizId
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getUserId
 * @method self withUserId
 */
final class QueryBizItems extends RpcRequest
{
}

/**
 * @method string getChannelId
 * @method self withChannelId
 * @method string getRequestId
 * @method self withRequestId
 * @method string getOperationDate
 * @method self withOperationDate
 * @method string getPayTypes
 * @method self withPayTypes
 * @method Long getAmount
 * @method self withAmount
 */
final class NotifyPayOrderStatus extends RpcRequest
{
}
