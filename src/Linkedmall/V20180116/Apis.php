<?php

namespace AlibabaCloud\Linkedmall\V20180116;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RpcRequest as Rpc;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method CreateOrder createOrder($options = [])
 * @method CreateMovieTicketOrder createMovieTicketOrder($options = [])
 * @method QueryGuideItemGroup queryGuideItemGroup($options = [])
 * @method QueryItemDetail queryItemDetail($options = [])
 * @method QueryHotMovies queryHotMovies($options = [])
 * @method QueryMovieComments queryMovieComments($options = [])
 * @method QueryMovieSchedules queryMovieSchedules($options = [])
 * @method QueryMessages queryMessages($options = [])
 * @method RemoveMessages removeMessages($options = [])
 * @method QueryMovieTickets queryMovieTickets($options = [])
 * @method QueryAllCinemas queryAllCinemas($options = [])
 * @method QueryAllCities queryAllCities($options = [])
 * @method QueryUpcomingMovies queryUpcomingMovies($options = [])
 * @method QueryMovieSeats queryMovieSeats($options = [])
 * @method ReserveMovieSeat reserveMovieSeat($options = [])
 * @method ReleaseMovieSeat releaseMovieSeat($options = [])
 * @method QueryBizItems queryBizItems($options = [])
 * @method NotifyPayOrderStatus notifyPayOrderStatus($options = [])
 */
class V20180116
{
    use ApiResolverTrait;
}

/**
 * @method string getBizId
 * @method self withBizId(string $bizId)
 * @method string getBizUid
 * @method self withBizUid(string $bizUid)
 * @method string getOutTradeId
 * @method self withOutTradeId(string $outTradeId)
 * @method int getItemId
 * @method self withItemId(int $itemId)
 * @method int getQuantity
 * @method self withQuantity(int $quantity)
 * @method int getTotalAmount
 * @method self withTotalAmount(int $totalAmount)
 * @method string getExtJson
 * @method self withExtJson(string $extJson)
 */
class CreateOrder extends Rpc
{
    use R;
}

/**
 * @method string getBizId
 * @method self withBizId(string $bizId)
 * @method string getBizUid
 * @method self withBizUid(string $bizUid)
 * @method string getOutTradeId
 * @method self withOutTradeId(string $outTradeId)
 * @method string getLockSeatAppKey
 * @method self withLockSeatAppKey(string $lockSeatAppKey)
 * @method string getExtJson
 * @method self withExtJson(string $extJson)
 */
class CreateMovieTicketOrder extends Rpc
{
    use R;
}

/**
 * @method string getBizId
 * @method self withBizId(string $bizId)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method int getPageNumber
 * @method self withPageNumber(int $pageNumber)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 */
class QueryGuideItemGroup extends Rpc
{
    use R;
}

/**
 * @method string getBizId
 * @method self withBizId(string $bizId)
 * @method int getItemId
 * @method self withItemId(int $itemId)
 */
class QueryItemDetail extends Rpc
{
    use R;
}

/**
 * @method string getBizId
 * @method self withBizId(string $bizId)
 * @method int getCityCode
 * @method self withCityCode(int $cityCode)
 * @method string getExtJson
 * @method self withExtJson(string $extJson)
 */
class QueryHotMovies extends Rpc
{
    use R;
}

/**
 * @method string getBizId
 * @method self withBizId(string $bizId)
 * @method int getMovieId
 * @method self withMovieId(int $movieId)
 * @method int getPageNumber
 * @method self withPageNumber(int $pageNumber)
 * @method string getExtJson
 * @method self withExtJson(string $extJson)
 */
class QueryMovieComments extends Rpc
{
    use R;
}

/**
 * @method string getBizId
 * @method self withBizId(string $bizId)
 * @method int getCinemaId
 * @method self withCinemaId(int $cinemaId)
 * @method string getExtJson
 * @method self withExtJson(string $extJson)
 */
class QueryMovieSchedules extends Rpc
{
    use R;
}

/**
 * @method string getBizId
 * @method self withBizId(string $bizId)
 * @method string getTopic
 * @method self withTopic(string $topic)
 * @method string getExtJson
 * @method self withExtJson(string $extJson)
 */
class QueryMessages extends Rpc
{
    use R;
}

/**
 * @method string getBizId
 * @method self withBizId(string $bizId)
 * @method string getMessageIds
 * @method self withMessageIds(string $messageIds)
 * @method string getExtJson
 * @method self withExtJson(string $extJson)
 */
class RemoveMessages extends Rpc
{
    use R;
}

/**
 * @method string getBizId
 * @method self withBizId(string $bizId)
 * @method string getBizUid
 * @method self withBizUid(string $bizUid)
 * @method string getOrderId
 * @method self withOrderId(string $orderId)
 * @method string getExtJson
 * @method self withExtJson(string $extJson)
 */
class QueryMovieTickets extends Rpc
{
    use R;
}

/**
 * @method string getBizId
 * @method self withBizId(string $bizId)
 * @method int getCityCode
 * @method self withCityCode(int $cityCode)
 * @method int getPageNumber
 * @method self withPageNumber(int $pageNumber)
 * @method string getExtJson
 * @method self withExtJson(string $extJson)
 */
class QueryAllCinemas extends Rpc
{
    use R;
}

/**
 * @method string getBizId
 * @method self withBizId(string $bizId)
 * @method Json getExtJson
 * @method self withExtJson(Json $extJson)
 */
class QueryAllCities extends Rpc
{
    use R;
}

/**
 * @method string getBizId
 * @method self withBizId(string $bizId)
 * @method int getCityCode
 * @method self withCityCode(int $cityCode)
 * @method Json getExtJson
 * @method self withExtJson(Json $extJson)
 */
class QueryUpcomingMovies extends Rpc
{
    use R;
}

/**
 * @method string getBizId
 * @method self withBizId(string $bizId)
 * @method int getScheduleId
 * @method self withScheduleId(int $scheduleId)
 * @method string getExtJson
 * @method self withExtJson(string $extJson)
 */
class QueryMovieSeats extends Rpc
{
    use R;
}

/**
 * @method string getBizId
 * @method self withBizId(string $bizId)
 * @method int getScheduleId
 * @method self withScheduleId(int $scheduleId)
 * @method string getSeatIds
 * @method self withSeatIds(string $seatIds)
 * @method string getSeatNames
 * @method self withSeatNames(string $seatNames)
 * @method string getBizUid
 * @method self withBizUid(string $bizUid)
 * @method string getMobile
 * @method self withMobile(string $mobile)
 * @method string getExtJson
 * @method self withExtJson(string $extJson)
 */
class ReserveMovieSeat extends Rpc
{
    use R;
}

/**
 * @method string getBizId
 * @method self withBizId(string $bizId)
 * @method string getLockSeatApplyKey
 * @method self withLockSeatApplyKey(string $lockSeatApplyKey)
 * @method string getBizUid
 * @method self withBizUid(string $bizUid)
 * @method string getExtJson
 * @method self withExtJson(string $extJson)
 */
class ReleaseMovieSeat extends Rpc
{
    use R;
}

/**
 * @method string getBizId
 * @method self withBizId(string $bizId)
 * @method string getSubBizId
 * @method self withSubBizId(string $subBizId)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getUserId
 * @method self withUserId(Integer $userId)
 */
class QueryBizItems extends Rpc
{
    use R;
}

/**
 * @method string getChannelId
 * @method self withChannelId(string $channelId)
 * @method string getRequestId
 * @method self withRequestId(string $requestId)
 * @method string getOperationDate
 * @method self withOperationDate(string $operationDate)
 * @method string getPayTypes
 * @method self withPayTypes(string $payTypes)
 * @method int getAmount
 * @method self withAmount(int $amount)
 */
class NotifyPayOrderStatus extends Rpc
{
    use R;
}
