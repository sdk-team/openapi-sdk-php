<?php

namespace AlibabaCloud\Ons\V20160405;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method OnsEmpowerList onsEmpowerList($options = [])
 * @method OnsEmpowerDelete onsEmpowerDelete($options = [])
 * @method OnsEmpowerCreate onsEmpowerCreate($options = [])
 * @method OnsTrendTopicInputTps onsTrendTopicInputTps($options = [])
 * @method OnsTrendGroupOutputTps onsTrendGroupOutputTps($options = [])
 * @method OnsTopicStatus onsTopicStatus($options = [])
 * @method OnsTopicSearch onsTopicSearch($options = [])
 * @method OnsTopicList onsTopicList($options = [])
 * @method OnsTopicGet onsTopicGet($options = [])
 * @method OnsTopicDelete onsTopicDelete($options = [])
 * @method OnsTopicCreate onsTopicCreate($options = [])
 * @method OnsSubscriptionSearch onsSubscriptionSearch($options = [])
 * @method OnsSubscriptionList onsSubscriptionList($options = [])
 * @method OnsSubscriptionGet onsSubscriptionGet($options = [])
 * @method OnsSubscriptionDelete onsSubscriptionDelete($options = [])
 * @method OnsSubscriptionCreate onsSubscriptionCreate($options = [])
 * @method OnsRegionList onsRegionList($options = [])
 * @method OnsPublishSearch onsPublishSearch($options = [])
 * @method OnsPublishList onsPublishList($options = [])
 * @method OnsPublishGet onsPublishGet($options = [])
 * @method OnsPublishDelete onsPublishDelete($options = [])
 * @method OnsPublishCreate onsPublishCreate($options = [])
 * @method OnsMessageTrace onsMessageTrace($options = [])
 * @method OnsMessageSend onsMessageSend($options = [])
 * @method OnsMessagePush onsMessagePush($options = [])
 * @method OnsMessagePageQueryByTopic onsMessagePageQueryByTopic($options = [])
 * @method OnsMessageGetByMsgId onsMessageGetByMsgId($options = [])
 * @method OnsMessageGetByKey onsMessageGetByKey($options = [])
 * @method OnsConsumerTimeSpan onsConsumerTimeSpan($options = [])
 * @method OnsConsumerStatus onsConsumerStatus($options = [])
 * @method OnsConsumerResetOffset onsConsumerResetOffset($options = [])
 * @method OnsConsumerGetConnection onsConsumerGetConnection($options = [])
 * @method OnsConsumerAccumulate onsConsumerAccumulate($options = [])
 */
class V20160405
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
 * @method string getConsumerId
 * @method self withConsumerId(string $consumerId)
 * @method bool getDetail
 * @method self withDetail(bool $detail)
 */
class OnsConsumerAccumulate extends Roa
{
    use R;
}
