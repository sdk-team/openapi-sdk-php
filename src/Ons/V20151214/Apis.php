<?php

namespace AlibabaCloud\Ons\V20151214;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method OnsMessageQueryByTopic onsMessageQueryByTopic($options = [])
 * @method OnsMessagePageQueryByTopic onsMessagePageQueryByTopic($options = [])
 * @method OnsMessageGetByIndex onsMessageGetByIndex($options = [])
 * @method OnsTraceQueryByMsgTopic onsTraceQueryByMsgTopic($options = [])
 * @method OnsTraceQueryByMsgKey onsTraceQueryByMsgKey($options = [])
 * @method OnsTraceQueryByMsgId onsTraceQueryByMsgId($options = [])
 * @method OnsWarnList onsWarnList($options = [])
 * @method OnsWarnEnable onsWarnEnable($options = [])
 * @method OnsWarnEditor onsWarnEditor($options = [])
 * @method OnsWarnDisable onsWarnDisable($options = [])
 * @method OnsWarnDelete onsWarnDelete($options = [])
 * @method OnsWarnCreate onsWarnCreate($options = [])
 * @method OnsWarnAdmin onsWarnAdmin($options = [])
 * @method OnsTrendTopicInputTps onsTrendTopicInputTps($options = [])
 * @method OnsTrendGroupOutputTps onsTrendGroupOutputTps($options = [])
 * @method OnsTrendGetMachineSar onsTrendGetMachineSar($options = [])
 * @method OnsTrendClusterOutputTps onsTrendClusterOutputTps($options = [])
 * @method OnsTrendClusterInputTps onsTrendClusterInputTps($options = [])
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
 * @method OnsMessageGetByTopic onsMessageGetByTopic($options = [])
 * @method OnsMessageGetByMsgId onsMessageGetByMsgId($options = [])
 * @method OnsMessageGetByKey onsMessageGetByKey($options = [])
 * @method OnsEmpowerList onsEmpowerList($options = [])
 * @method OnsEmpowerDelete onsEmpowerDelete($options = [])
 * @method OnsEmpowerCreate onsEmpowerCreate($options = [])
 * @method OnsConsumerTimeSpan onsConsumerTimeSpan($options = [])
 * @method OnsConsumerStatus onsConsumerStatus($options = [])
 * @method OnsConsumerResetOffset onsConsumerResetOffset($options = [])
 * @method OnsConsumerGetConnection onsConsumerGetConnection($options = [])
 * @method OnsConsumerAccumulate onsConsumerAccumulate($options = [])
 * @method OnsClusterNames onsClusterNames($options = [])
 * @method OnsClusterList onsClusterList($options = [])
 * @method OnsCloudGetAppkeyList onsCloudGetAppkeyList($options = [])
 */
class V20151214
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
 * @method int getBeginTime
 * @method self withBeginTime(int $beginTime)
 * @method int getEndTime
 * @method self withEndTime(int $endTime)
 */
class OnsMessageQueryByTopic extends Roa
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
 * @method Integer getTotal
 * @method self withTotal(Integer $total)
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
 * @method string getTaskId
 * @method self withTaskId(string $taskId)
 * @method Integer getPageIndex
 * @method self withPageIndex(Integer $pageIndex)
 */
class OnsMessageGetByIndex extends Roa
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
 * @method int getendTime
 * @method self withendTime(int $endTime)
 */
class OnsTraceQueryByMsgTopic extends Roa
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
 * @method string getMsgKey
 * @method self withMsgKey(string $msgKey)
 * @method string getTopic
 * @method self withTopic(string $topic)
 * @method int getBeginTime
 * @method self withBeginTime(int $beginTime)
 * @method int getendTime
 * @method self withendTime(int $endTime)
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
 * @method string getMsgId
 * @method self withMsgId(string $msgId)
 * @method string getTopic
 * @method self withTopic(string $topic)
 * @method int getBeginTime
 * @method self withBeginTime(int $beginTime)
 * @method int getendTime
 * @method self withendTime(int $endTime)
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
 */
class OnsWarnList extends Roa
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
class OnsWarnEnable extends Roa
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
 */
class OnsWarnEditor extends Roa
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
class OnsWarnDisable extends Roa
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
 * @method string getThreshold
 * @method self withThreshold(string $threshold)
 * @method string getContacts
 * @method self withContacts(string $contacts)
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
 * @method string getUserId
 * @method self withUserId(string $userId)
 * @method string getConsumerId
 * @method self withConsumerId(string $consumerId)
 * @method string getTopic
 * @method self withTopic(string $topic)
 * @method string getType
 * @method self withType(string $type)
 */
class OnsWarnAdmin extends Roa
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
 * @method string getHostIp
 * @method self withHostIp(string $hostIp)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getMetric
 * @method self withMetric(string $metric)
 * @method int getBeginTime
 * @method self withBeginTime(int $beginTime)
 * @method int getEndTime
 * @method self withEndTime(int $endTime)
 * @method int getPeriod
 * @method self withPeriod(int $period)
 */
class OnsTrendGetMachineSar extends Roa
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
 * @method string getCluster
 * @method self withCluster(string $cluster)
 * @method int getBeginTime
 * @method self withBeginTime(int $beginTime)
 * @method int getEndTime
 * @method self withEndTime(int $endTime)
 * @method int getPeriod
 * @method self withPeriod(int $period)
 */
class OnsTrendClusterOutputTps extends Roa
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
 * @method string getCluster
 * @method self withCluster(string $cluster)
 * @method int getBeginTime
 * @method self withBeginTime(int $beginTime)
 * @method int getEndTime
 * @method self withEndTime(int $endTime)
 * @method int getPeriod
 * @method self withPeriod(int $period)
 */
class OnsTrendClusterInputTps extends Roa
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
 * @method bool getDetail
 * @method self withDetail(bool $detail)
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
 */
class OnsMessageGetByTopic extends Roa
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

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method string getOnsPlatform
 * @method self withOnsPlatform(string $onsPlatform)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 */
class OnsClusterNames extends Roa
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
 * @method string getCluster
 * @method self withCluster(string $cluster)
 */
class OnsClusterList extends Roa
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
 * @method int getIsvId
 * @method self withIsvId(int $isvId)
 */
class OnsCloudGetAppkeyList extends Roa
{
    use R;
}
