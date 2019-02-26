<?php

namespace AlibabaCloud\Rtc\V20180111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getTraceId
 * @method self withTraceId
 * @method string getBizId
 * @method self withBizId
 * @method string getEvent
 * @method self withEvent
 * @method string getContentType
 * @method self withContentType
 * @method string getContent
 * @method self withContent
 */
final class ReceiveNotify extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getChannelId
 * @method self withChannelId
 * @method Long getTemplateId
 * @method self withTemplateId
 * @method Long getTaskId
 * @method self withTaskId
 * @method RepeatList getMixPanes
 * @method self withMixPanes
 */
final class UpdateTaskParam extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getChannelId
 * @method self withChannelId
 * @method Long getTaskId
 * @method self withTaskId
 */
final class StopTask extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getChannelId
 * @method self withChannelId
 * @method Long getTemplateId
 * @method self withTemplateId
 * @method string getIdempotentId
 * @method self withIdempotentId
 * @method RepeatList getMixPanes
 * @method self withMixPanes
 */
final class StartTask extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method Long getTemplateId
 * @method self withTemplateId
 */
final class GetTemplateInfo extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getChannelId
 * @method self withChannelId
 * @method Long getTaskId
 * @method self withTaskId
 */
final class GetTaskStatus extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method Long getTaskId
 * @method self withTaskId
 */
final class GetTaskParam extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 */
final class GetAllTemplate extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method Long getTemplateId
 * @method self withTemplateId
 */
final class DeleteTemplate extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method Integer getMixMode
 * @method self withMixMode
 * @method Integer getServiceMode
 * @method self withServiceMode
 * @method string getCallBack
 * @method self withCallBack
 * @method Integer getMaxMixStreamCount
 * @method self withMaxMixStreamCount
 * @method Integer getMediaConfig
 * @method self withMediaConfig
 * @method RepeatList getLayOut
 * @method self withLayOut
 * @method RepeatList getRecordConfig
 * @method self withRecordConfig
 * @method RepeatList getLiveConfig
 * @method self withLiveConfig
 */
final class CreateTemplate extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getChannelId
 * @method self withChannelId
 * @method string getSessionId
 * @method self withSessionId
 * @method string getUId
 * @method self withUId
 * @method string getNonce
 * @method self withNonce
 */
final class CreateChannelToken extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getChannelId
 * @method self withChannelId
 * @method RepeatList getTerminalIds
 * @method self withTerminalIds
 */
final class RemoveTerminals extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getSortType
 * @method self withSortType
 * @method string getServiceArea
 * @method self withServiceArea
 * @method string getInterval
 * @method self withInterval
 * @method string getDataType
 * @method self withDataType
 */
final class DescribeRtcStatis extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getIdType
 * @method self withIdType
 * @method string getId
 * @method self withId
 * @method string getSortType
 * @method self withSortType
 * @method string getServiceArea
 * @method self withServiceArea
 * @method Long getPageNo
 * @method self withPageNo
 * @method Long getPageSize
 * @method self withPageSize
 */
final class DescribeRtcRecordList extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getChannelId
 * @method self withChannelId
 * @method string getRecordId
 * @method self withRecordId
 */
final class DescribeRtcRecordDetail extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 */
final class DescribeRtcRealTimeRecordList extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getChannelId
 * @method self withChannelId
 * @method string getRecordId
 * @method self withRecordId
 */
final class DescribeRtcRealTimeRecordDetail extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 */
final class StopApp extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 */
final class StartApp extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getConferenceId
 * @method self withConferenceId
 * @method RepeatList getParticipantIds
 * @method self withParticipantIds
 */
final class RemoveParticipants extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getSortType
 * @method self withSortType
 * @method string getServiceArea
 * @method self withServiceArea
 * @method string getInterval
 * @method self withInterval
 * @method string getDataType
 * @method self withDataType
 */
final class DescribeStatis extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getIdType
 * @method self withIdType
 * @method string getId
 * @method self withId
 * @method string getSortType
 * @method self withSortType
 * @method string getServiceArea
 * @method self withServiceArea
 * @method Long getPageNo
 * @method self withPageNo
 * @method Long getPageSize
 * @method self withPageSize
 */
final class DescribeRecordList extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getChannelId
 * @method self withChannelId
 * @method string getRecordId
 * @method self withRecordId
 */
final class DescribeRecordDetail extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 */
final class DescribeRealTimeRecordList extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getChannelId
 * @method self withChannelId
 * @method string getRecordId
 * @method self withRecordId
 */
final class DescribeRealTimeRecordDetail extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getChannelId
 * @method self withChannelId
 * @method string getNonce
 * @method self withNonce
 */
final class UpdateChannel extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getChannelId
 * @method self withChannelId
 */
final class DeleteChannel extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getChannelId
 * @method self withChannelId
 */
final class CreateChannel extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getConferenceId
 * @method self withConferenceId
 * @method string getParticipantId
 * @method self withParticipantId
 */
final class UnmuteAudioAll extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getConferenceId
 * @method self withConferenceId
 * @method RepeatList getParticipantIds
 * @method self withParticipantIds
 */
final class UnmuteAudio extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getConferenceId
 * @method self withConferenceId
 * @method string getParticipantId
 * @method self withParticipantId
 */
final class MuteAudioAll extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getConferenceId
 * @method self withConferenceId
 * @method RepeatList getParticipantIds
 * @method self withParticipantIds
 */
final class MuteAudio extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getConferenceId
 * @method self withConferenceId
 * @method string getConferenceName
 * @method self withConferenceName
 * @method string getStartTime
 * @method self withStartTime
 * @method string getType
 * @method self withType
 * @method Integer getRemindNotice
 * @method self withRemindNotice
 */
final class ModifyConference extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getAppName
 * @method self withAppName
 */
final class ModifyApp extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getConferenceId
 * @method self withConferenceId
 * @method RepeatList getParticipantIds
 * @method self withParticipantIds
 */
final class Kick extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 */
final class EnableApp extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 */
final class DisableApp extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getConferenceId
 * @method self withConferenceId
 */
final class DescribeConferenceAuthInfo extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getStatus
 * @method self withStatus
 * @method string getOrder
 * @method self withOrder
 * @method Integer getPageNum
 * @method self withPageNum
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class DescribeApps extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getChannelId
 * @method self withChannelId
 */
final class UpdateRTCChannel extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getConferenceId
 * @method self withConferenceId
 */
final class DeleteConference extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getAppId
 * @method self withAppId
 */
final class DeleteApp extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getConferenceName
 * @method self withConferenceName
 * @method string getClientToken
 * @method self withClientToken
 * @method string getStartTime
 * @method self withStartTime
 * @method string getType
 * @method self withType
 * @method Integer getRemindNotice
 * @method self withRemindNotice
 */
final class CreateConference extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppName
 * @method self withAppName
 * @method string getAppType
 * @method self withAppType
 * @method string getClientToken
 * @method self withClientToken
 * @method RepeatList getServiceAreas
 * @method self withServiceAreas
 */
final class CreateApp extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 */
final class StopRTCApp extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getChannelId
 * @method self withChannelId
 * @method Boolean getBroadcast
 * @method self withBroadcast
 * @method RepeatList getAllowGroups
 * @method self withAllowGroups
 * @method RepeatList getDenyGroups
 * @method self withDenyGroups
 * @method string getContentType
 * @method self withContentType
 * @method string getContent
 * @method self withContent
 */
final class RTCProxyMessage extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getChannelId
 * @method self withChannelId
 */
final class DeleteRTCChannel extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getChannelId
 * @method self withChannelId
 */
final class CreateRTCChannel extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getDescription
 * @method self withDescription
 * @method string getAppType
 * @method self withAppType
 * @method RepeatList getServiceAreas
 * @method self withServiceAreas
 * @method string getBillType
 * @method self withBillType
 */
final class CreateRTCApp extends RpcRequest
{
}
