<?php

namespace AlibabaCloud\Ons\V20170918;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method OnsMqttGroupIdCreate onsMqttGroupIdCreate($options = [])
 * @method OnsTrendTopicInputTps onsTrendTopicInputTps($options = [])
 * @method OnsMqttGroupIdList onsMqttGroupIdList($options = [])
 * @method OnsMessageGetByKey onsMessageGetByKey($options = [])
 * @method OnsTopicSearch onsTopicSearch($options = [])
 * @method OnsEmpowerDelete onsEmpowerDelete($options = [])
 * @method OnsBuyOrdersProduce onsBuyOrdersProduce($options = [])
 * @method OnsSubscriptionGet onsSubscriptionGet($options = [])
 * @method OnsPublishCreate onsPublishCreate($options = [])
 * @method OnsConsumerGetConnection onsConsumerGetConnection($options = [])
 * @method OnsMessageTrace onsMessageTrace($options = [])
 * @method OnsMessageGetByMsgId onsMessageGetByMsgId($options = [])
 * @method OnsWarnCreate onsWarnCreate($options = [])
 * @method OnsEmpowerCreate onsEmpowerCreate($options = [])
 * @method OnsWarnDelete onsWarnDelete($options = [])
 * @method OnsSubscriptionCreate onsSubscriptionCreate($options = [])
 * @method OnsEmpowerList onsEmpowerList($options = [])
 * @method OnsRegionList onsRegionList($options = [])
 * @method OnsPublishDelete onsPublishDelete($options = [])
 * @method OnsTopicStatus onsTopicStatus($options = [])
 * @method OnsTraceQueryByMsgId onsTraceQueryByMsgId($options = [])
 * @method OnsTrendGroupOutputTps onsTrendGroupOutputTps($options = [])
 * @method OnsMessagePush onsMessagePush($options = [])
 * @method OnsPublishList onsPublishList($options = [])
 * @method OnsSubscriptionSearch onsSubscriptionSearch($options = [])
 * @method OnsTraceQueryByMsgKey onsTraceQueryByMsgKey($options = [])
 * @method OnsMqttQueryClientByClientId onsMqttQueryClientByClientId($options = [])
 * @method OnsMqttQueryClientByGroupId onsMqttQueryClientByGroupId($options = [])
 * @method OnsPublishSearch onsPublishSearch($options = [])
 * @method OnsConsumerStatus onsConsumerStatus($options = [])
 * @method OnsTopicList onsTopicList($options = [])
 * @method OnsMqttQueryHistoryOnline onsMqttQueryHistoryOnline($options = [])
 * @method OnsTopicDelete onsTopicDelete($options = [])
 * @method OnsPublishGet onsPublishGet($options = [])
 * @method OnsConsumerTimeSpan onsConsumerTimeSpan($options = [])
 * @method OnsMqttQueryClientByTopic onsMqttQueryClientByTopic($options = [])
 * @method OnsMqttQueryMsgByPubInfo onsMqttQueryMsgByPubInfo($options = [])
 * @method OnsMessagePageQueryByTopic onsMessagePageQueryByTopic($options = [])
 * @method OnsTopicCreate onsTopicCreate($options = [])
 * @method OnsConsumerAccumulate onsConsumerAccumulate($options = [])
 * @method OnsConsumerResetOffset onsConsumerResetOffset($options = [])
 * @method OnsMqttQueryTraceByTraceId onsMqttQueryTraceByTraceId($options = [])
 * @method OnsSubscriptionDelete onsSubscriptionDelete($options = [])
 * @method OnsSubscriptionList onsSubscriptionList($options = [])
 * @method OnsMqttManualUpdateRule onsMqttManualUpdateRule($options = [])
 * @method OnsMqttQueryMsgTransTrend onsMqttQueryMsgTransTrend($options = [])
 * @method OnsMessageSend onsMessageSend($options = [])
 * @method OnsMqttBuyRefund onsMqttBuyRefund($options = [])
 * @method OnsTraceGetResult onsTraceGetResult($options = [])
 * @method OnsSubscriptionUpdate onsSubscriptionUpdate($options = [])
 * @method OnsMqttBuyProduce onsMqttBuyProduce($options = [])
 * @method OnsTopicUpdate onsTopicUpdate($options = [])
 * @method OnsTopicGet onsTopicGet($options = [])
 * @method OnsMqttBuyCheck onsMqttBuyCheck($options = [])
 */
class V20170918
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
 * @method string getTopic
 * @method self withTopic(string $topic)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 */
class OnsMqttGroupIdCreate extends Roa
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
class OnsTrendTopicInputTps extends Roa
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
class OnsMqttGroupIdList extends Roa
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
class OnsMessageGetByKey extends Roa
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
class OnsTopicSearch extends Roa
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
class OnsEmpowerDelete extends Roa
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
class OnsBuyOrdersProduce extends Roa
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
class OnsSubscriptionGet extends Roa
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
class OnsPublishCreate extends Roa
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
class OnsConsumerGetConnection extends Roa
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
class OnsMessageTrace extends Roa
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
class OnsMessageGetByMsgId extends Roa
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
class OnsWarnCreate extends Roa
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
class OnsEmpowerCreate extends Roa
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
class OnsWarnDelete extends Roa
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
class OnsSubscriptionCreate extends Roa
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
class OnsEmpowerList extends Roa
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
class OnsRegionList extends Roa
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
class OnsPublishDelete extends Roa
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
class OnsTopicStatus extends Roa
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
class OnsTraceQueryByMsgId extends Roa
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
class OnsTrendGroupOutputTps extends Roa
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
class OnsMessagePush extends Roa
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
class OnsPublishList extends Roa
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
class OnsSubscriptionSearch extends Roa
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
class OnsTraceQueryByMsgKey extends Roa
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
class OnsMqttQueryClientByClientId extends Roa
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
class OnsMqttQueryClientByGroupId extends Roa
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
class OnsPublishSearch extends Roa
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
class OnsConsumerStatus extends Roa
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
class OnsTopicList extends Roa
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
class OnsMqttQueryHistoryOnline extends Roa
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
class OnsTopicDelete extends Roa
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
class OnsPublishGet extends Roa
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
class OnsConsumerTimeSpan extends Roa
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
class OnsMqttQueryClientByTopic extends Roa
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
class OnsMqttQueryMsgByPubInfo extends Roa
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
class OnsMessagePageQueryByTopic extends Roa
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
class OnsTopicCreate extends Roa
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
class OnsConsumerAccumulate extends Roa
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
class OnsConsumerResetOffset extends Roa
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
class OnsMqttQueryTraceByTraceId extends Roa
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
class OnsSubscriptionDelete extends Roa
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
class OnsSubscriptionList extends Roa
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
class OnsMqttManualUpdateRule extends Roa
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
class OnsMqttQueryMsgTransTrend extends Roa
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
class OnsMessageSend extends Roa
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
class OnsMqttBuyRefund extends Roa
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
class OnsTraceGetResult extends Roa
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
class OnsSubscriptionUpdate extends Roa
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
class OnsMqttBuyProduce extends Roa
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
class OnsTopicUpdate extends Roa
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
class OnsTopicGet extends Roa
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
class OnsMqttBuyCheck extends Roa
{
    use R;
}
