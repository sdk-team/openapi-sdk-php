<?php

namespace AlibabaCloud\Rtc\V20180111;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method ReceiveNotify receiveNotify($options = [])
 * @method UpdateTaskParam updateTaskParam($options = [])
 * @method StopTask stopTask($options = [])
 * @method StartTask startTask($options = [])
 * @method GetTemplateInfo getTemplateInfo($options = [])
 * @method GetTaskStatus getTaskStatus($options = [])
 * @method GetTaskParam getTaskParam($options = [])
 * @method GetAllTemplate getAllTemplate($options = [])
 * @method DeleteTemplate deleteTemplate($options = [])
 * @method CreateTemplate createTemplate($options = [])
 * @method CreateChannelToken createChannelToken($options = [])
 * @method RemoveTerminals removeTerminals($options = [])
 * @method DescribeRtcStatis describeRtcStatis($options = [])
 * @method DescribeRtcRecordList describeRtcRecordList($options = [])
 * @method DescribeRtcRecordDetail describeRtcRecordDetail($options = [])
 * @method DescribeRtcRealTimeRecordList describeRtcRealTimeRecordList($options = [])
 * @method DescribeRtcRealTimeRecordDetail describeRtcRealTimeRecordDetail($options = [])
 * @method StopApp stopApp($options = [])
 * @method StartApp startApp($options = [])
 * @method RemoveParticipants removeParticipants($options = [])
 * @method DescribeStatis describeStatis($options = [])
 * @method DescribeRecordList describeRecordList($options = [])
 * @method DescribeRecordDetail describeRecordDetail($options = [])
 * @method DescribeRealTimeRecordList describeRealTimeRecordList($options = [])
 * @method DescribeRealTimeRecordDetail describeRealTimeRecordDetail($options = [])
 * @method UpdateChannel updateChannel($options = [])
 * @method DeleteChannel deleteChannel($options = [])
 * @method CreateChannel createChannel($options = [])
 * @method UnmuteAudioAll unmuteAudioAll($options = [])
 * @method UnmuteAudio unmuteAudio($options = [])
 * @method MuteAudioAll muteAudioAll($options = [])
 * @method MuteAudio muteAudio($options = [])
 * @method ModifyConference modifyConference($options = [])
 * @method ModifyApp modifyApp($options = [])
 * @method Kick kick($options = [])
 * @method EnableApp enableApp($options = [])
 * @method DisableApp disableApp($options = [])
 * @method DescribeConferenceAuthInfo describeConferenceAuthInfo($options = [])
 * @method DescribeApps describeApps($options = [])
 * @method UpdateRTCChannel updateRTCChannel($options = [])
 * @method DeleteConference deleteConference($options = [])
 * @method DeleteApp deleteApp($options = [])
 * @method CreateConference createConference($options = [])
 * @method CreateApp createApp($options = [])
 * @method StopRTCApp stopRTCApp($options = [])
 * @method RTCProxyMessage rTCProxyMessage($options = [])
 * @method DeleteRTCChannel deleteRTCChannel($options = [])
 * @method CreateRTCChannel createRTCChannel($options = [])
 * @method CreateRTCApp createRTCApp($options = [])
 */
class V20180111
{
    use ApiResolverTrait;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getTraceId
 * @method self withTraceId(string $traceId)
 * @method string getBizId
 * @method self withBizId(string $bizId)
 * @method string getEvent
 * @method self withEvent(string $event)
 * @method string getContentType
 * @method self withContentType(string $contentType)
 * @method string getContent
 * @method self withContent(string $content)
 */
class ReceiveNotify extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getChannelId
 * @method self withChannelId(string $channelId)
 * @method int getTemplateId
 * @method self withTemplateId(int $templateId)
 * @method int getTaskId
 * @method self withTaskId(int $taskId)
 * @method array getMixPanes
 * @method self withMixPanes(array $mixPanes)
 */
class UpdateTaskParam extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getChannelId
 * @method self withChannelId(string $channelId)
 * @method int getTaskId
 * @method self withTaskId(int $taskId)
 */
class StopTask extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getChannelId
 * @method self withChannelId(string $channelId)
 * @method int getTemplateId
 * @method self withTemplateId(int $templateId)
 * @method string getIdempotentId
 * @method self withIdempotentId(string $idempotentId)
 * @method array getMixPanes
 * @method self withMixPanes(array $mixPanes)
 */
class StartTask extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method int getTemplateId
 * @method self withTemplateId(int $templateId)
 */
class GetTemplateInfo extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getChannelId
 * @method self withChannelId(string $channelId)
 * @method int getTaskId
 * @method self withTaskId(int $taskId)
 */
class GetTaskStatus extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method int getTaskId
 * @method self withTaskId(int $taskId)
 */
class GetTaskParam extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 */
class GetAllTemplate extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method int getTemplateId
 * @method self withTemplateId(int $templateId)
 */
class DeleteTemplate extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method Integer getMixMode
 * @method self withMixMode(Integer $mixMode)
 * @method Integer getServiceMode
 * @method self withServiceMode(Integer $serviceMode)
 * @method string getCallBack
 * @method self withCallBack(string $callBack)
 * @method Integer getMaxMixStreamCount
 * @method self withMaxMixStreamCount(Integer $maxMixStreamCount)
 * @method Integer getMediaConfig
 * @method self withMediaConfig(Integer $mediaConfig)
 * @method array getLayOut
 * @method self withLayOut(array $layOut)
 * @method array getRecordConfig
 * @method self withRecordConfig(array $recordConfig)
 * @method array getLiveConfig
 * @method self withLiveConfig(array $liveConfig)
 */
class CreateTemplate extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getChannelId
 * @method self withChannelId(string $channelId)
 * @method string getSessionId
 * @method self withSessionId(string $sessionId)
 * @method string getUId
 * @method self withUId(string $uId)
 * @method string getNonce
 * @method self withNonce(string $nonce)
 */
class CreateChannelToken extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getChannelId
 * @method self withChannelId(string $channelId)
 * @method array getTerminalIds
 * @method self withTerminalIds(array $terminalIds)
 */
class RemoveTerminals extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getSortType
 * @method self withSortType(string $sortType)
 * @method string getServiceArea
 * @method self withServiceArea(string $serviceArea)
 * @method string getInterval
 * @method self withInterval(string $interval)
 * @method string getDataType
 * @method self withDataType(string $dataType)
 */
class DescribeRtcStatis extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getIdType
 * @method self withIdType(string $idType)
 * @method string getId
 * @method self withId(string $id)
 * @method string getSortType
 * @method self withSortType(string $sortType)
 * @method string getServiceArea
 * @method self withServiceArea(string $serviceArea)
 * @method int getPageNo
 * @method self withPageNo(int $pageNo)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 */
class DescribeRtcRecordList extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getChannelId
 * @method self withChannelId(string $channelId)
 * @method string getRecordId
 * @method self withRecordId(string $recordId)
 */
class DescribeRtcRecordDetail extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeRtcRealTimeRecordList extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getChannelId
 * @method self withChannelId(string $channelId)
 * @method string getRecordId
 * @method self withRecordId(string $recordId)
 */
class DescribeRtcRealTimeRecordDetail extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 */
class StopApp extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 */
class StartApp extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getConferenceId
 * @method self withConferenceId(string $conferenceId)
 * @method array getParticipantIds
 * @method self withParticipantIds(array $participantIds)
 */
class RemoveParticipants extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getSortType
 * @method self withSortType(string $sortType)
 * @method string getServiceArea
 * @method self withServiceArea(string $serviceArea)
 * @method string getInterval
 * @method self withInterval(string $interval)
 * @method string getDataType
 * @method self withDataType(string $dataType)
 */
class DescribeStatis extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getIdType
 * @method self withIdType(string $idType)
 * @method string getId
 * @method self withId(string $id)
 * @method string getSortType
 * @method self withSortType(string $sortType)
 * @method string getServiceArea
 * @method self withServiceArea(string $serviceArea)
 * @method int getPageNo
 * @method self withPageNo(int $pageNo)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 */
class DescribeRecordList extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getChannelId
 * @method self withChannelId(string $channelId)
 * @method string getRecordId
 * @method self withRecordId(string $recordId)
 */
class DescribeRecordDetail extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeRealTimeRecordList extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getChannelId
 * @method self withChannelId(string $channelId)
 * @method string getRecordId
 * @method self withRecordId(string $recordId)
 */
class DescribeRealTimeRecordDetail extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getChannelId
 * @method self withChannelId(string $channelId)
 * @method string getNonce
 * @method self withNonce(string $nonce)
 */
class UpdateChannel extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getChannelId
 * @method self withChannelId(string $channelId)
 */
class DeleteChannel extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getChannelId
 * @method self withChannelId(string $channelId)
 */
class CreateChannel extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getConferenceId
 * @method self withConferenceId(string $conferenceId)
 * @method string getParticipantId
 * @method self withParticipantId(string $participantId)
 */
class UnmuteAudioAll extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getConferenceId
 * @method self withConferenceId(string $conferenceId)
 * @method array getParticipantIds
 * @method self withParticipantIds(array $participantIds)
 */
class UnmuteAudio extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getConferenceId
 * @method self withConferenceId(string $conferenceId)
 * @method string getParticipantId
 * @method self withParticipantId(string $participantId)
 */
class MuteAudioAll extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getConferenceId
 * @method self withConferenceId(string $conferenceId)
 * @method array getParticipantIds
 * @method self withParticipantIds(array $participantIds)
 */
class MuteAudio extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getConferenceId
 * @method self withConferenceId(string $conferenceId)
 * @method string getConferenceName
 * @method self withConferenceName(string $conferenceName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getType
 * @method self withType(string $type)
 * @method Integer getRemindNotice
 * @method self withRemindNotice(Integer $remindNotice)
 */
class ModifyConference extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getAppName
 * @method self withAppName(string $appName)
 */
class ModifyApp extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getConferenceId
 * @method self withConferenceId(string $conferenceId)
 * @method array getParticipantIds
 * @method self withParticipantIds(array $participantIds)
 */
class Kick extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 */
class EnableApp extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 */
class DisableApp extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getConferenceId
 * @method self withConferenceId(string $conferenceId)
 */
class DescribeConferenceAuthInfo extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method string getOrder
 * @method self withOrder(string $order)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeApps extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getChannelId
 * @method self withChannelId(string $channelId)
 */
class UpdateRTCChannel extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getConferenceId
 * @method self withConferenceId(string $conferenceId)
 */
class DeleteConference extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getAppId
 * @method self withAppId(string $appId)
 */
class DeleteApp extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getConferenceName
 * @method self withConferenceName(string $conferenceName)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getType
 * @method self withType(string $type)
 * @method Integer getRemindNotice
 * @method self withRemindNotice(Integer $remindNotice)
 */
class CreateConference extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getAppType
 * @method self withAppType(string $appType)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method array getServiceAreas
 * @method self withServiceAreas(array $serviceAreas)
 */
class CreateApp extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 */
class StopRTCApp extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getChannelId
 * @method self withChannelId(string $channelId)
 * @method bool getBroadcast
 * @method self withBroadcast(bool $broadcast)
 * @method array getAllowGroups
 * @method self withAllowGroups(array $allowGroups)
 * @method array getDenyGroups
 * @method self withDenyGroups(array $denyGroups)
 * @method string getContentType
 * @method self withContentType(string $contentType)
 * @method string getContent
 * @method self withContent(string $content)
 */
class RTCProxyMessage extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getChannelId
 * @method self withChannelId(string $channelId)
 */
class DeleteRTCChannel extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getChannelId
 * @method self withChannelId(string $channelId)
 */
class CreateRTCChannel extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getAppType
 * @method self withAppType(string $appType)
 * @method array getServiceAreas
 * @method self withServiceAreas(array $serviceAreas)
 * @method string getBillType
 * @method self withBillType(string $billType)
 */
class CreateRTCApp extends Roa
{
    use R;
}
