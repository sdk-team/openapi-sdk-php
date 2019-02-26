<?php

namespace AlibabaCloud\Ons\V20180516;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RpcRequest as Rpc;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method OnsRegionList onsRegionList($options = [])
 * @method OnsEmpowerList onsEmpowerList($options = [])
 * @method OnsEmpowerCreate onsEmpowerCreate($options = [])
 * @method OnsTopicList onsTopicList($options = [])
 * @method OnsPublishSearch onsPublishSearch($options = [])
 * @method OnsMqttGroupIdList onsMqttGroupIdList($options = [])
 * @method OnsPublishGet onsPublishGet($options = [])
 * @method OnsPublishList onsPublishList($options = [])
 * @method OnsSubscriptionGet onsSubscriptionGet($options = [])
 * @method OnsSubscriptionList onsSubscriptionList($options = [])
 * @method OnsSubscriptionSearch onsSubscriptionSearch($options = [])
 * @method OnsTopicGet onsTopicGet($options = [])
 * @method OnsTopicSearch onsTopicSearch($options = [])
 * @method OnsInstanceInServiceList onsInstanceInServiceList($options = [])
 * @method OnsConsumerAccumulate onsConsumerAccumulate($options = [])
 * @method OnsBuyOrdersProduce onsBuyOrdersProduce($options = [])
 * @method OnsConsumerGetConnection onsConsumerGetConnection($options = [])
 * @method OnsConsumerStatus onsConsumerStatus($options = [])
 * @method OnsConsumerResetOffset onsConsumerResetOffset($options = [])
 * @method OnsConsumerTimeSpan onsConsumerTimeSpan($options = [])
 * @method OnsEmpowerDelete onsEmpowerDelete($options = [])
 * @method OnsMessageGetByKey onsMessageGetByKey($options = [])
 * @method OnsMessagePageQueryByTopic onsMessagePageQueryByTopic($options = [])
 * @method OnsMessageGetByMsgId onsMessageGetByMsgId($options = [])
 * @method OnsMessageSend onsMessageSend($options = [])
 * @method OnsMessagePush onsMessagePush($options = [])
 * @method OnsMessageTrace onsMessageTrace($options = [])
 * @method OnsMqttBuyProduce onsMqttBuyProduce($options = [])
 * @method OnsMqttBuyCheck onsMqttBuyCheck($options = [])
 * @method OnsMqttGroupIdCreate onsMqttGroupIdCreate($options = [])
 * @method OnsMqttBuyRefund onsMqttBuyRefund($options = [])
 * @method OnsMqttManualUpdateRule onsMqttManualUpdateRule($options = [])
 * @method OnsMqttQueryClientByGroupId onsMqttQueryClientByGroupId($options = [])
 * @method OnsMqttQueryClientByClientId onsMqttQueryClientByClientId($options = [])
 * @method OnsMqttQueryClientByTopic onsMqttQueryClientByTopic($options = [])
 * @method OnsMqttQueryMsgByPubInfo onsMqttQueryMsgByPubInfo($options = [])
 * @method OnsMqttQueryHistoryOnline onsMqttQueryHistoryOnline($options = [])
 * @method OnsMqttQueryTraceByTraceId onsMqttQueryTraceByTraceId($options = [])
 * @method OnsMqttQueryMsgTransTrend onsMqttQueryMsgTransTrend($options = [])
 * @method OnsPublishCreate onsPublishCreate($options = [])
 * @method OnsPublishDelete onsPublishDelete($options = [])
 * @method OnsSubscriptionCreate onsSubscriptionCreate($options = [])
 * @method OnsSubscriptionDelete onsSubscriptionDelete($options = [])
 * @method OnsSubscriptionUpdate onsSubscriptionUpdate($options = [])
 * @method OnsTopicDelete onsTopicDelete($options = [])
 * @method OnsTopicCreate onsTopicCreate($options = [])
 * @method OnsTopicStatus onsTopicStatus($options = [])
 * @method OnsTraceGetResult onsTraceGetResult($options = [])
 * @method OnsTopicUpdate onsTopicUpdate($options = [])
 * @method OnsTraceQueryByMsgId onsTraceQueryByMsgId($options = [])
 * @method OnsTrendGroupOutputTps onsTrendGroupOutputTps($options = [])
 * @method OnsTraceQueryByMsgKey onsTraceQueryByMsgKey($options = [])
 * @method OnsWarnCreate onsWarnCreate($options = [])
 * @method OnsTrendTopicInputTps onsTrendTopicInputTps($options = [])
 * @method OnsWarnDelete onsWarnDelete($options = [])
 */
class V20180516
{
    use ApiResolverTrait;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method string getOnsPlatform
 * @method self withOnsPlatform(string $onsPlatform)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 */
class OnsRegionList extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method string getOnsPlatform
 * @method self withOnsPlatform(string $onsPlatform)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getEmpowerUser
 * @method self withEmpowerUser(string $empowerUser)
 * @method string getTopic
 * @method self withTopic(string $topic)
 */
class OnsEmpowerList extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method string getOnsPlatform
 * @method self withOnsPlatform(string $onsPlatform)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getEmpowerUser
 * @method self withEmpowerUser(string $empowerUser)
 * @method string getTopic
 * @method self withTopic(string $topic)
 * @method Integer getRelation
 * @method self withRelation(Integer $relation)
 */
class OnsEmpowerCreate extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method string getOnsPlatform
 * @method self withOnsPlatform(string $onsPlatform)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getTopic
 * @method self withTopic(string $topic)
 */
class OnsTopicList extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method string getOnsPlatform
 * @method self withOnsPlatform(string $onsPlatform)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getSearch
 * @method self withSearch(string $search)
 */
class OnsPublishSearch extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method string getOnsPlatform
 * @method self withOnsPlatform(string $onsPlatform)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 */
class OnsMqttGroupIdList extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method string getOnsPlatform
 * @method self withOnsPlatform(string $onsPlatform)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getProducerId
 * @method self withProducerId(string $producerId)
 * @method string getTopic
 * @method self withTopic(string $topic)
 */
class OnsPublishGet extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method string getOnsPlatform
 * @method self withOnsPlatform(string $onsPlatform)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 */
class OnsPublishList extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method string getOnsPlatform
 * @method self withOnsPlatform(string $onsPlatform)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getConsumerId
 * @method self withConsumerId(string $consumerId)
 * @method string getTopic
 * @method self withTopic(string $topic)
 */
class OnsSubscriptionGet extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method string getOnsPlatform
 * @method self withOnsPlatform(string $onsPlatform)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 */
class OnsSubscriptionList extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method string getOnsPlatform
 * @method self withOnsPlatform(string $onsPlatform)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getSearch
 * @method self withSearch(string $search)
 */
class OnsSubscriptionSearch extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method string getOnsPlatform
 * @method self withOnsPlatform(string $onsPlatform)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getTopic
 * @method self withTopic(string $topic)
 */
class OnsTopicGet extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method string getOnsPlatform
 * @method self withOnsPlatform(string $onsPlatform)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getSearch
 * @method self withSearch(string $search)
 */
class OnsTopicSearch extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method string getOnsPlatform
 * @method self withOnsPlatform(string $onsPlatform)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 */
class OnsInstanceInServiceList extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method string getOnsPlatform
 * @method self withOnsPlatform(string $onsPlatform)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getConsumerId
 * @method self withConsumerId(string $consumerId)
 * @method bool getDetail
 * @method self withDetail(bool $detail)
 */
class OnsConsumerAccumulate extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method string getOnsPlatform
 * @method self withOnsPlatform(string $onsPlatform)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getdata
 * @method self withdata(string $data)
 */
class OnsBuyOrdersProduce extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method string getOnsPlatform
 * @method self withOnsPlatform(string $onsPlatform)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getConsumerId
 * @method self withConsumerId(string $consumerId)
 */
class OnsConsumerGetConnection extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method string getOnsPlatform
 * @method self withOnsPlatform(string $onsPlatform)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getConsumerId
 * @method self withConsumerId(string $consumerId)
 * @method bool getDetail
 * @method self withDetail(bool $detail)
 * @method bool getNeedJstack
 * @method self withNeedJstack(bool $needJstack)
 */
class OnsConsumerStatus extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method string getOnsPlatform
 * @method self withOnsPlatform(string $onsPlatform)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getConsumerId
 * @method self withConsumerId(string $consumerId)
 * @method string getTopic
 * @method self withTopic(string $topic)
 * @method Integer getType
 * @method self withType(Integer $type)
 * @method int getResetTimestamp
 * @method self withResetTimestamp(int $resetTimestamp)
 */
class OnsConsumerResetOffset extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method string getOnsPlatform
 * @method self withOnsPlatform(string $onsPlatform)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getConsumerId
 * @method self withConsumerId(string $consumerId)
 * @method string getTopic
 * @method self withTopic(string $topic)
 */
class OnsConsumerTimeSpan extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method string getOnsPlatform
 * @method self withOnsPlatform(string $onsPlatform)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getEmpowerUser
 * @method self withEmpowerUser(string $empowerUser)
 * @method string getTopic
 * @method self withTopic(string $topic)
 */
class OnsEmpowerDelete extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method string getOnsPlatform
 * @method self withOnsPlatform(string $onsPlatform)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getTopic
 * @method self withTopic(string $topic)
 * @method string getKey
 * @method self withKey(string $key)
 */
class OnsMessageGetByKey extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method string getOnsPlatform
 * @method self withOnsPlatform(string $onsPlatform)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getTopic
 * @method self withTopic(string $topic)
 * @method int getBeginTime
 * @method self withBeginTime(int $beginTime)
 * @method int getEndTime
 * @method self withEndTime(int $endTime)
 * @method string getTaskId
 * @method self withTaskId(string $taskId)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class OnsMessagePageQueryByTopic extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method string getOnsPlatform
 * @method self withOnsPlatform(string $onsPlatform)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getMsgId
 * @method self withMsgId(string $msgId)
 * @method string getTopic
 * @method self withTopic(string $topic)
 */
class OnsMessageGetByMsgId extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method string getOnsPlatform
 * @method self withOnsPlatform(string $onsPlatform)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getProducerId
 * @method self withProducerId(string $producerId)
 * @method string getTopic
 * @method self withTopic(string $topic)
 * @method string getTag
 * @method self withTag(string $tag)
 * @method string getKey
 * @method self withKey(string $key)
 * @method string getMessage
 * @method self withMessage(string $message)
 */
class OnsMessageSend extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method string getOnsPlatform
 * @method self withOnsPlatform(string $onsPlatform)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getConsumerId
 * @method self withConsumerId(string $consumerId)
 * @method string getClientId
 * @method self withClientId(string $clientId)
 * @method string getMsgId
 * @method self withMsgId(string $msgId)
 * @method string getTopic
 * @method self withTopic(string $topic)
 */
class OnsMessagePush extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method string getOnsPlatform
 * @method self withOnsPlatform(string $onsPlatform)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getTopic
 * @method self withTopic(string $topic)
 * @method string getMsgId
 * @method self withMsgId(string $msgId)
 */
class OnsMessageTrace extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method string getOnsPlatform
 * @method self withOnsPlatform(string $onsPlatform)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getdata
 * @method self withdata(string $data)
 */
class OnsMqttBuyProduce extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method string getOnsPlatform
 * @method self withOnsPlatform(string $onsPlatform)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getdata
 * @method self withdata(string $data)
 */
class OnsMqttBuyCheck extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method string getOnsPlatform
 * @method self withOnsPlatform(string $onsPlatform)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getTopic
 * @method self withTopic(string $topic)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 */
class OnsMqttGroupIdCreate extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method string getOnsPlatform
 * @method self withOnsPlatform(string $onsPlatform)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getdata
 * @method self withdata(string $data)
 */
class OnsMqttBuyRefund extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method string getOnsPlatform
 * @method self withOnsPlatform(string $onsPlatform)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getAdminKey
 * @method self withAdminKey(string $adminKey)
 */
class OnsMqttManualUpdateRule extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method string getOnsPlatform
 * @method self withOnsPlatform(string $onsPlatform)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 */
class OnsMqttQueryClientByGroupId extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method string getOnsPlatform
 * @method self withOnsPlatform(string $onsPlatform)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getClientId
 * @method self withClientId(string $clientId)
 */
class OnsMqttQueryClientByClientId extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method string getOnsPlatform
 * @method self withOnsPlatform(string $onsPlatform)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getParentTopic
 * @method self withParentTopic(string $parentTopic)
 * @method string getSubTopic
 * @method self withSubTopic(string $subTopic)
 */
class OnsMqttQueryClientByTopic extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method string getOnsPlatform
 * @method self withOnsPlatform(string $onsPlatform)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getTopic
 * @method self withTopic(string $topic)
 * @method string getClientId
 * @method self withClientId(string $clientId)
 * @method int getBeginTime
 * @method self withBeginTime(int $beginTime)
 * @method int getEndTime
 * @method self withEndTime(int $endTime)
 */
class OnsMqttQueryMsgByPubInfo extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method string getOnsPlatform
 * @method self withOnsPlatform(string $onsPlatform)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method int getBeginTime
 * @method self withBeginTime(int $beginTime)
 * @method int getEndTime
 * @method self withEndTime(int $endTime)
 */
class OnsMqttQueryHistoryOnline extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method string getOnsPlatform
 * @method self withOnsPlatform(string $onsPlatform)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getTraceId
 * @method self withTraceId(string $traceId)
 * @method string getTopic
 * @method self withTopic(string $topic)
 */
class OnsMqttQueryTraceByTraceId extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method string getOnsPlatform
 * @method self withOnsPlatform(string $onsPlatform)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getTpsType
 * @method self withTpsType(string $tpsType)
 * @method string getTransType
 * @method self withTransType(string $transType)
 * @method string getParentTopic
 * @method self withParentTopic(string $parentTopic)
 * @method string getSubTopic
 * @method self withSubTopic(string $subTopic)
 * @method string getMsgType
 * @method self withMsgType(string $msgType)
 * @method Integer getQos
 * @method self withQos(Integer $qos)
 * @method int getBeginTime
 * @method self withBeginTime(int $beginTime)
 * @method int getEndTime
 * @method self withEndTime(int $endTime)
 */
class OnsMqttQueryMsgTransTrend extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method string getOnsPlatform
 * @method self withOnsPlatform(string $onsPlatform)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getProducerId
 * @method self withProducerId(string $producerId)
 * @method string getTopic
 * @method self withTopic(string $topic)
 * @method string getAppName
 * @method self withAppName(string $appName)
 */
class OnsPublishCreate extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method string getOnsPlatform
 * @method self withOnsPlatform(string $onsPlatform)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getProducerId
 * @method self withProducerId(string $producerId)
 * @method string getTopic
 * @method self withTopic(string $topic)
 */
class OnsPublishDelete extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method string getOnsPlatform
 * @method self withOnsPlatform(string $onsPlatform)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getConsumerId
 * @method self withConsumerId(string $consumerId)
 * @method string getTopic
 * @method self withTopic(string $topic)
 */
class OnsSubscriptionCreate extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method string getOnsPlatform
 * @method self withOnsPlatform(string $onsPlatform)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getConsumerId
 * @method self withConsumerId(string $consumerId)
 * @method string getTopic
 * @method self withTopic(string $topic)
 */
class OnsSubscriptionDelete extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method string getOnsPlatform
 * @method self withOnsPlatform(string $onsPlatform)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getConsumerId
 * @method self withConsumerId(string $consumerId)
 * @method bool getReadEnable
 * @method self withReadEnable(bool $readEnable)
 */
class OnsSubscriptionUpdate extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method string getOnsPlatform
 * @method self withOnsPlatform(string $onsPlatform)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getTopic
 * @method self withTopic(string $topic)
 * @method string getCluster
 * @method self withCluster(string $cluster)
 */
class OnsTopicDelete extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method string getOnsPlatform
 * @method self withOnsPlatform(string $onsPlatform)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getTopic
 * @method self withTopic(string $topic)
 * @method string getCluster
 * @method self withCluster(string $cluster)
 * @method Integer getQueueNum
 * @method self withQueueNum(Integer $queueNum)
 * @method bool getOrder
 * @method self withOrder(bool $order)
 * @method int getQps
 * @method self withQps(int $qps)
 * @method Integer getStatus
 * @method self withStatus(Integer $status)
 * @method string getRemark
 * @method self withRemark(string $remark)
 * @method string getAppkey
 * @method self withAppkey(string $appkey)
 * @method string getAppName
 * @method self withAppName(string $appName)
 */
class OnsTopicCreate extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method string getOnsPlatform
 * @method self withOnsPlatform(string $onsPlatform)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getTopic
 * @method self withTopic(string $topic)
 */
class OnsTopicStatus extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method string getOnsPlatform
 * @method self withOnsPlatform(string $onsPlatform)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getQueryId
 * @method self withQueryId(string $queryId)
 */
class OnsTraceGetResult extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method string getOnsPlatform
 * @method self withOnsPlatform(string $onsPlatform)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getTopic
 * @method self withTopic(string $topic)
 * @method Integer getPerm
 * @method self withPerm(Integer $perm)
 */
class OnsTopicUpdate extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method string getOnsPlatform
 * @method self withOnsPlatform(string $onsPlatform)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getTopic
 * @method self withTopic(string $topic)
 * @method string getMsgId
 * @method self withMsgId(string $msgId)
 * @method int getBeginTime
 * @method self withBeginTime(int $beginTime)
 * @method int getEndTime
 * @method self withEndTime(int $endTime)
 */
class OnsTraceQueryByMsgId extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method string getOnsPlatform
 * @method self withOnsPlatform(string $onsPlatform)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getConsumerId
 * @method self withConsumerId(string $consumerId)
 * @method string getTopic
 * @method self withTopic(string $topic)
 * @method int getBeginTime
 * @method self withBeginTime(int $beginTime)
 * @method int getEndTime
 * @method self withEndTime(int $endTime)
 * @method int getPeriod
 * @method self withPeriod(int $period)
 * @method Integer getType
 * @method self withType(Integer $type)
 */
class OnsTrendGroupOutputTps extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method string getOnsPlatform
 * @method self withOnsPlatform(string $onsPlatform)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getTopic
 * @method self withTopic(string $topic)
 * @method string getMsgKey
 * @method self withMsgKey(string $msgKey)
 * @method int getBeginTime
 * @method self withBeginTime(int $beginTime)
 * @method int getEndTime
 * @method self withEndTime(int $endTime)
 */
class OnsTraceQueryByMsgKey extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method string getOnsPlatform
 * @method self withOnsPlatform(string $onsPlatform)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getConsumerId
 * @method self withConsumerId(string $consumerId)
 * @method string getTopic
 * @method self withTopic(string $topic)
 * @method string getThreshold
 * @method self withThreshold(string $threshold)
 * @method string getContacts
 * @method self withContacts(string $contacts)
 * @method string getDelayTime
 * @method self withDelayTime(string $delayTime)
 * @method string getBlockTime
 * @method self withBlockTime(string $blockTime)
 * @method string getAlertTime
 * @method self withAlertTime(string $alertTime)
 * @method string getLevel
 * @method self withLevel(string $level)
 */
class OnsWarnCreate extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method string getOnsPlatform
 * @method self withOnsPlatform(string $onsPlatform)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getTopic
 * @method self withTopic(string $topic)
 * @method int getBeginTime
 * @method self withBeginTime(int $beginTime)
 * @method int getEndTime
 * @method self withEndTime(int $endTime)
 * @method int getPeriod
 * @method self withPeriod(int $period)
 * @method Integer getType
 * @method self withType(Integer $type)
 */
class OnsTrendTopicInputTps extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method string getOnsPlatform
 * @method self withOnsPlatform(string $onsPlatform)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getConsumerId
 * @method self withConsumerId(string $consumerId)
 * @method string getTopic
 * @method self withTopic(string $topic)
 */
class OnsWarnDelete extends Rpc
{
    use R;
}
