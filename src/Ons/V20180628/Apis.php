<?php

namespace AlibabaCloud\Ons\V20180628;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RpcRequest as Rpc;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method OnsInstanceBaseInfo onsInstanceBaseInfo($options = [])
 * @method OnsConsumerAccumulate onsConsumerAccumulate($options = [])
 * @method OnsConsumerGetConnection onsConsumerGetConnection($options = [])
 * @method OnsConsumerResetOffset onsConsumerResetOffset($options = [])
 * @method OnsConsumerStatus onsConsumerStatus($options = [])
 * @method OnsConsumerTimeSpan onsConsumerTimeSpan($options = [])
 * @method OnsInstanceInServiceList onsInstanceInServiceList($options = [])
 * @method OnsMessageGetByKey onsMessageGetByKey($options = [])
 * @method OnsMessageGetByMsgId onsMessageGetByMsgId($options = [])
 * @method OnsMessagePageQueryByTopic onsMessagePageQueryByTopic($options = [])
 * @method OnsMessagePush onsMessagePush($options = [])
 * @method OnsMessageSend onsMessageSend($options = [])
 * @method OnsMessageTrace onsMessageTrace($options = [])
 * @method OnsRegionList onsRegionList($options = [])
 * @method OnsTopicCreate onsTopicCreate($options = [])
 * @method OnsTopicDelete onsTopicDelete($options = [])
 * @method OnsTopicList onsTopicList($options = [])
 * @method OnsTopicStatus onsTopicStatus($options = [])
 * @method OnsTopicUpdate onsTopicUpdate($options = [])
 * @method OnsTraceGetResult onsTraceGetResult($options = [])
 * @method OnsTraceQueryByMsgId onsTraceQueryByMsgId($options = [])
 * @method OnsTraceQueryByMsgKey onsTraceQueryByMsgKey($options = [])
 * @method OnsWarnCreate onsWarnCreate($options = [])
 * @method OnsWarnDelete onsWarnDelete($options = [])
 * @method OnsInstanceCreate onsInstanceCreate($options = [])
 * @method OnsInstanceDelete onsInstanceDelete($options = [])
 * @method OnsGroupConsumerUpdate onsGroupConsumerUpdate($options = [])
 * @method OnsGroupList onsGroupList($options = [])
 * @method OnsGroupDelete onsGroupDelete($options = [])
 * @method OnsGroupCreate onsGroupCreate($options = [])
 * @method OnsInstanceUpdate onsInstanceUpdate($options = [])
 * @method OnsTrendTopicInputTps onsTrendTopicInputTps($options = [])
 * @method OnsTrendGroupOutputTps onsTrendGroupOutputTps($options = [])
 * @method OnsMqttGroupIdDelete onsMqttGroupIdDelete($options = [])
 * @method OnsMqttQueryClientByTopic onsMqttQueryClientByTopic($options = [])
 * @method OnsMqttQueryMsgTransTrend onsMqttQueryMsgTransTrend($options = [])
 * @method OnsMqttQueryHistoryOnline onsMqttQueryHistoryOnline($options = [])
 * @method OnsMqttQueryClientByGroupId onsMqttQueryClientByGroupId($options = [])
 * @method OnsMqttQueryClientByClientId onsMqttQueryClientByClientId($options = [])
 * @method OnsMqttGroupIdList onsMqttGroupIdList($options = [])
 * @method OnsMqttGroupIdCreate onsMqttGroupIdCreate($options = [])
 */
class V20180628
{
    use ApiResolverTrait;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class OnsInstanceBaseInfo extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method bool getDetail
 * @method self withDetail(bool $detail)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class OnsConsumerAccumulate extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class OnsConsumerGetConnection extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getTopic
 * @method self withTopic(string $topic)
 * @method Integer getType
 * @method self withType(Integer $type)
 * @method int getResetTimestamp
 * @method self withResetTimestamp(int $resetTimestamp)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class OnsConsumerResetOffset extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method bool getDetail
 * @method self withDetail(bool $detail)
 * @method bool getNeedJstack
 * @method self withNeedJstack(bool $needJstack)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class OnsConsumerStatus extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getTopic
 * @method self withTopic(string $topic)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class OnsConsumerTimeSpan extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
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
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getTopic
 * @method self withTopic(string $topic)
 * @method string getKey
 * @method self withKey(string $key)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class OnsMessageGetByKey extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getMsgId
 * @method self withMsgId(string $msgId)
 * @method string getTopic
 * @method self withTopic(string $topic)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class OnsMessageGetByMsgId extends Rpc
{
    use R;
}

/**
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
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
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class OnsMessagePageQueryByTopic extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getClientId
 * @method self withClientId(string $clientId)
 * @method string getMsgId
 * @method self withMsgId(string $msgId)
 * @method string getTopic
 * @method self withTopic(string $topic)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class OnsMessagePush extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getTopic
 * @method self withTopic(string $topic)
 * @method string getTag
 * @method self withTag(string $tag)
 * @method string getKey
 * @method self withKey(string $key)
 * @method string getMessage
 * @method self withMessage(string $message)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class OnsMessageSend extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getTopic
 * @method self withTopic(string $topic)
 * @method string getMsgId
 * @method self withMsgId(string $msgId)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class OnsMessageTrace extends Rpc
{
    use R;
}

/**
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
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getTopic
 * @method self withTopic(string $topic)
 * @method Integer getMessageType
 * @method self withMessageType(Integer $messageType)
 * @method string getRemark
 * @method self withRemark(string $remark)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class OnsTopicCreate extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getTopic
 * @method self withTopic(string $topic)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class OnsTopicDelete extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getTopic
 * @method self withTopic(string $topic)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class OnsTopicList extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getTopic
 * @method self withTopic(string $topic)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class OnsTopicStatus extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getTopic
 * @method self withTopic(string $topic)
 * @method Integer getPerm
 * @method self withPerm(Integer $perm)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class OnsTopicUpdate extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
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
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class OnsTraceQueryByMsgId extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
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
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class OnsTraceQueryByMsgKey extends Rpc
{
    use R;
}

/**
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method string getOnsPlatform
 * @method self withOnsPlatform(string $onsPlatform)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
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
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
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
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getTopic
 * @method self withTopic(string $topic)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class OnsWarnDelete extends Rpc
{
    use R;
}

/**
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method string getRemark
 * @method self withRemark(string $remark)
 * @method string getInstanceName
 * @method self withInstanceName(string $instanceName)
 */
class OnsInstanceCreate extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class OnsInstanceDelete extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method bool getReadEnable
 * @method self withReadEnable(bool $readEnable)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class OnsGroupConsumerUpdate extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 */
class OnsGroupList extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class OnsGroupDelete extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getRemark
 * @method self withRemark(string $remark)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class OnsGroupCreate extends Rpc
{
    use R;
}

/**
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method string getRemark
 * @method self withRemark(string $remark)
 * @method string getInstanceName
 * @method self withInstanceName(string $instanceName)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class OnsInstanceUpdate extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getTopic
 * @method self withTopic(string $topic)
 * @method int getBeginTime
 * @method self withBeginTime(int $beginTime)
 * @method int getEndTime
 * @method self withEndTime(int $endTime)
 * @method Integer getType
 * @method self withType(Integer $type)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method int getPeriod
 * @method self withPeriod(int $period)
 */
class OnsTrendTopicInputTps extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getTopic
 * @method self withTopic(string $topic)
 * @method int getBeginTime
 * @method self withBeginTime(int $beginTime)
 * @method int getEndTime
 * @method self withEndTime(int $endTime)
 * @method Integer getType
 * @method self withType(Integer $type)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method int getPeriod
 * @method self withPeriod(int $period)
 */
class OnsTrendGroupOutputTps extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class OnsMqttGroupIdDelete extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getParentTopic
 * @method self withParentTopic(string $parentTopic)
 * @method string getSubTopic
 * @method self withSubTopic(string $subTopic)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class OnsMqttQueryClientByTopic extends Rpc
{
    use R;
}

/**
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
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
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
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
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method int getBeginTime
 * @method self withBeginTime(int $beginTime)
 * @method int getEndTime
 * @method self withEndTime(int $endTime)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class OnsMqttQueryHistoryOnline extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class OnsMqttQueryClientByGroupId extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getClientId
 * @method self withClientId(string $clientId)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class OnsMqttQueryClientByClientId extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class OnsMqttGroupIdList extends Rpc
{
    use R;
}

/**
 * @method string getOnsRegionId
 * @method self withOnsRegionId(string $onsRegionId)
 * @method int getPreventCache
 * @method self withPreventCache(int $preventCache)
 * @method string getTopic
 * @method self withTopic(string $topic)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class OnsMqttGroupIdCreate extends Rpc
{
    use R;
}
