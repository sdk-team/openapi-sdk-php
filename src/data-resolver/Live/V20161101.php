<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getAuthKey
 * @method self withAuthKey
 * @method string getAuthSwitch
 * @method self withAuthSwitch
 * @method Integer getCallbackEnable
 * @method self withCallbackEnable
 * @method string getCallbackUri
 * @method self withCallbackUri
 * @method string getCallbackEvents
 * @method self withCallbackEvents
 */
final class SetBoardCallback extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method Integer getPageNum
 * @method self withPageNum
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getRecordState
 * @method self withRecordState
 */
final class DescribeRecords extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getRecordId
 * @method self withRecordId
 */
final class DescribeRecord extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getRecordId
 * @method self withRecordId
 * @method string getEndTime
 * @method self withEndTime
 */
final class CompleteBoardRecord extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getBoardId
 * @method self withBoardId
 * @method string getStartTime
 * @method self withStartTime
 */
final class StartBoardRecord extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 */
final class ApplyRecordToken extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getAuthKey
 * @method self withAuthKey
 * @method string getAuthSwitch
 * @method self withAuthSwitch
 * @method Integer getCallbackEnable
 * @method self withCallbackEnable
 * @method string getCallbackUri
 * @method self withCallbackUri
 * @method string getCallbackEvents
 * @method self withCallbackEvents
 */
final class UpdateBoardCallback extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 */
final class SetUserDomainAuthClose extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 */
final class DescribeLiveUserQuota extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 */
final class DescribeLiveDomainMapping extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getQueryTime
 * @method self withQueryTime
 */
final class DescribeLiveStreamCheatData extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 */
final class DescribeIlvbRecordConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 */
final class DeleteIlvbRecordConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getRoomId
 * @method self withRoomId
 * @method string getAppUid
 * @method self withAppUid
 */
final class StopIlvbRealTimeRecord extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getRoomId
 * @method self withRoomId
 * @method string getAppUid
 * @method self withAppUid
 */
final class StartIlvbRealTimeRecord extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getVodTranscodeGroupId
 * @method self withVodTranscodeGroupId
 * @method Integer getOnDemand
 * @method self withOnDemand
 */
final class AddIlvbRecordConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getRoomId
 * @method self withRoomId
 * @method string getAppUid
 * @method self withAppUid
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 */
final class DescribeIlvbRecordList extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAppName
 * @method self withAppName
 * @method string getStreamName
 * @method self withStreamName
 * @method string getTaskId
 * @method self withTaskId
 */
final class StopLiveIndex extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAppName
 * @method self withAppName
 * @method string getStreamName
 * @method self withStreamName
 * @method string getTokenId
 * @method self withTokenId
 * @method string getInputUrl
 * @method self withInputUrl
 * @method Integer getInterval
 * @method self withInterval
 * @method string getOssBucket
 * @method self withOssBucket
 * @method string getOssEndpoint
 * @method self withOssEndpoint
 * @method string getOssUserId
 * @method self withOssUserId
 * @method string getOssRamRole
 * @method self withOssRamRole
 */
final class StartLiveIndex extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getOrder
 * @method self withOrder
 * @method Integer getPageNum
 * @method self withPageNum
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class DescribeIlvbTranscodeConfigList extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getTemplateId
 * @method self withTemplateId
 */
final class EnableDefaultIlvbTranscodeConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getTemplateId
 * @method self withTemplateId
 */
final class DisableDefaultIlvbTranscodeConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getTemplateId
 * @method self withTemplateId
 * @method string getTemplateName
 * @method self withTemplateName
 * @method string getTemplateDescription
 * @method self withTemplateDescription
 * @method string getTemplateType
 * @method self withTemplateType
 * @method Integer getHeight
 * @method self withHeight
 * @method Integer getWidth
 * @method self withWidth
 * @method Integer getVideoBitRate
 * @method self withVideoBitRate
 * @method Integer getAudioBitRate
 * @method self withAudioBitRate
 * @method Integer getFps
 * @method self withFps
 * @method Integer getGop
 * @method self withGop
 * @method Boolean getDefaultUseTemplate
 * @method self withDefaultUseTemplate
 */
final class UpdateIlvbTranscodeConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getTemplateId
 * @method self withTemplateId
 * @method string getTemplateName
 * @method self withTemplateName
 * @method string getTemplateDescription
 * @method self withTemplateDescription
 * @method string getTemplateType
 * @method self withTemplateType
 * @method Integer getHeight
 * @method self withHeight
 * @method Integer getWidth
 * @method self withWidth
 * @method Integer getVideoBitRate
 * @method self withVideoBitRate
 * @method Integer getAudioBitRate
 * @method self withAudioBitRate
 * @method Integer getFps
 * @method self withFps
 * @method Integer getGop
 * @method self withGop
 * @method Boolean getDefaultUseTemplate
 * @method self withDefaultUseTemplate
 */
final class AddIlvbTranscodeConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getTemplateId
 * @method self withTemplateId
 */
final class DeleteIlvbTranscodeConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getRoomId
 * @method self withRoomId
 * @method string getTemplateIds
 * @method self withTemplateIds
 * @method Boolean getUseDefaultTranscode
 * @method self withUseDefaultTranscode
 */
final class UpdateRoomIlvbTranscodeConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 */
final class CheckSnapshotStatus extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getCommand
 * @method self withCommand
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAppName
 * @method self withAppName
 * @method string getStreamName
 * @method self withStreamName
 * @method Integer getMode
 * @method self withMode
 * @method Integer getInterval
 * @method self withInterval
 */
final class RealTimeSnapshotCommand extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 */
final class DescribeLiveService extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method Long getLimit
 * @method self withLimit
 */
final class DescribeLiveTopDomainsByFlow extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 */
final class DescribeLiveDomainMax95BpsData extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getIspNameEn
 * @method self withIspNameEn
 * @method string getLocationNameEn
 * @method self withLocationNameEn
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 */
final class DescribeLiveDomainRealTimeBpsData extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getIspNameEn
 * @method self withIspNameEn
 * @method string getLocationNameEn
 * @method self withLocationNameEn
 */
final class DescribeLiveDomainRealTimeHttpCodeData extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getStartTime
 * @method self withStartTime
 * @method string getIspNameEn
 * @method self withIspNameEn
 * @method string getLocationNameEn
 * @method self withLocationNameEn
 * @method string getEndTime
 * @method self withEndTime
 */
final class DescribeLiveDomainRealTimeTrafficData extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method Long getPageSize
 * @method self withPageSize
 * @method Long getPageNumber
 * @method self withPageNumber
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 */
final class DescribeLiveTranscodeLog extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAppName
 * @method self withAppName
 * @method string getStreamName
 * @method self withStreamName
 * @method string getField
 * @method self withField
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getQueryType
 * @method self withQueryType
 * @method string getStreamType
 * @method self withStreamType
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getPageNumber
 * @method self withPageNumber
 */
final class DescribeLiveStreamUniversalAppStreams extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getPlayDomain
 * @method self withPlayDomain
 * @method string getPullDomain
 * @method self withPullDomain
 */
final class DeleteLiveDomainPlayMapping extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getPlayDomain
 * @method self withPlayDomain
 * @method string getPullDomain
 * @method self withPullDomain
 */
final class AddLiveDomainPlayMapping extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getPageSize
 * @method self withPageSize
 * @method string getPageNumber
 * @method self withPageNumber
 */
final class DescribeUserUsageDetailDataExportTask extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getGroup
 * @method self withGroup
 * @method string getDomainNames
 * @method self withDomainNames
 * @method string getDimension
 * @method self withDimension
 * @method string getTaskName
 * @method self withTaskName
 */
final class CreateUsageDetailDataExportTask extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getStream
 * @method self withStream
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 */
final class DescribeLiveUpVideoAudioInfo extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getAppName
 * @method self withAppName
 * @method string getAppType
 * @method self withAppType
 * @method string getPushDomain
 * @method self withPushDomain
 * @method string getPlayDomain
 * @method self withPlayDomain
 * @method string getRtcAppId
 * @method self withRtcAppId
 * @method Boolean getDefaultTranscode
 * @method self withDefaultTranscode
 */
final class ModifyApp extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 */
final class DescribeIlvbRegions extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 */
final class DeleteApp extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method Long getPageSize
 * @method self withPageSize
 * @method Long getPageNumber
 * @method self withPageNumber
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 */
final class DescribeTranscodeLog extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getBoardId
 * @method self withBoardId
 * @method Integer getPageNum
 * @method self withPageNum
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class DescribeClientList extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getBoardId
 * @method self withBoardId
 */
final class DescribeClientCount extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getRegionName
 * @method self withRegionName
 * @method string getOrder
 * @method self withOrder
 */
final class DescribeApps extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAppName
 * @method self withAppName
 */
final class DeleteLiveLazyPullStreamInfoConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAppName
 * @method self withAppName
 */
final class DescribeLiveLazyPullStreamConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAppName
 * @method self withAppName
 * @method string getPullDomainName
 * @method self withPullDomainName
 * @method string getPullAppName
 * @method self withPullAppName
 * @method string getPullProtocol
 * @method self withPullProtocol
 * @method string getPullAuthType
 * @method self withPullAuthType
 * @method string getPullAuthKey
 * @method self withPullAuthKey
 */
final class SetLiveLazyPullStreamInfoConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getCasterId
 * @method self withCasterId
 * @method string getSceneId
 * @method self withSceneId
 * @method Integer getFollowEnable
 * @method self withFollowEnable
 * @method RepeatList getAudioLayer
 * @method self withAudioLayer
 * @method RepeatList getMixList
 * @method self withMixList
 */
final class UpdateCasterSceneAudio extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getCasterId
 * @method self withCasterId
 * @method string getChannelId
 * @method self withChannelId
 * @method string getResourceId
 * @method self withResourceId
 * @method Integer getSeekOffset
 * @method self withSeekOffset
 * @method Integer getPlayStatus
 * @method self withPlayStatus
 */
final class SetCasterChannel extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getCasterId
 * @method self withCasterId
 * @method string getSceneId
 * @method self withSceneId
 */
final class DescribeCasterSceneAudio extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getCasterId
 * @method self withCasterId
 */
final class DescribeCasterChannels extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getBoardData
 * @method self withBoardData
 */
final class UpdateBoard extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getAppUid
 * @method self withAppUid
 * @method string getBoardId
 * @method self withBoardId
 */
final class JoinBoard extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getBoardId
 * @method self withBoardId
 */
final class DescribeBoardSnapshot extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method Integer getPageNum
 * @method self withPageNum
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class DescribeBoards extends RpcRequest
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
 * @method string getBoardId
 * @method self withBoardId
 */
final class DescribeBoardEvents extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getBoardId
 * @method self withBoardId
 */
final class DeleteBoard extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 */
final class CreateBoardApp extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getAppUid
 * @method self withAppUid
 */
final class CreateBoard extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getBoardId
 * @method self withBoardId
 */
final class CompleteBoard extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getAppUid
 * @method self withAppUid
 * @method string getBoardId
 * @method self withBoardId
 */
final class ApplyBoardToken extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getQueryTime
 * @method self withQueryTime
 */
final class DescribeLiveStreamsPublishAndOnlineData extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getArea
 * @method self withArea
 * @method string getField
 * @method self withField
 * @method string getInterval
 * @method self withInterval
 */
final class DescribeDomainUsageData extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getRoomId
 * @method self withRoomId
 * @method string getAppUid
 * @method self withAppUid
 * @method string getUserData
 * @method self withUserData
 */
final class UnlinkMic extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getRoomId
 * @method self withRoomId
 * @method string getAppUid
 * @method self withAppUid
 * @method string getAppRequestId
 * @method self withAppRequestId
 * @method string getAppTargetUid
 * @method self withAppTargetUid
 * @method string getUserData
 * @method self withUserData
 */
final class RequestLinkMic extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getRoomId
 * @method self withRoomId
 * @method string getAppUid
 * @method self withAppUid
 * @method string getAppRequestId
 * @method self withAppRequestId
 * @method string getAppTargetUid
 * @method self withAppTargetUid
 * @method string getUserData
 * @method self withUserData
 */
final class RejectLinkMic extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getRoomId
 * @method self withRoomId
 * @method string getAppUid
 * @method self withAppUid
 * @method string getAppTargetUid
 * @method self withAppTargetUid
 * @method string getUserData
 * @method self withUserData
 */
final class LinkMic extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getRoomId
 * @method self withRoomId
 * @method string getAppUid
 * @method self withAppUid
 * @method string getAppTargetUid
 * @method self withAppTargetUid
 * @method string getUserData
 * @method self withUserData
 * @method string getEndTime
 * @method self withEndTime
 */
final class KickoutLinkMic extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getRoomId
 * @method self withRoomId
 * @method string getAppUid
 * @method self withAppUid
 */
final class DescribeLinkMicInfo extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getRoomId
 * @method self withRoomId
 * @method string getAppUid
 * @method self withAppUid
 * @method string getCancelRequestId
 * @method self withCancelRequestId
 * @method string getAppTargetUid
 * @method self withAppTargetUid
 * @method string getUserData
 * @method self withUserData
 */
final class CancelLinkMic extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getRoomId
 * @method self withRoomId
 * @method string getAppUid
 * @method self withAppUid
 * @method string getAppRequestId
 * @method self withAppRequestId
 * @method string getAppTargetUid
 * @method self withAppTargetUid
 * @method string getUserData
 * @method self withUserData
 */
final class AcceptLinkMic extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 */
final class DescribeLiveStreamCount extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getCertName
 * @method self withCertName
 */
final class DescribeLiveCertificateDetail extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getDomainName
 * @method self withDomainName
 * @method string getSources
 * @method self withSources
 * @method string getResourceGroupId
 * @method self withResourceGroupId
 */
final class UpdateLiveDomain extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getTime
 * @method self withTime
 */
final class DescribeHlsLiveStreamRealTimeBpsData extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getDomainName
 * @method self withDomainName
 */
final class StopLiveDomain extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getDomainNames
 * @method self withDomainNames
 */
final class BatchStopLiveDomain extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getDomainName
 * @method self withDomainName
 * @method string getConfigId
 * @method self withConfigId
 */
final class DeleteLiveSpecificConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getDomainName
 * @method self withDomainName
 */
final class StartLiveDomain extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getDomainNames
 * @method self withDomainNames
 */
final class BatchStartLiveDomain extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getDomainName
 * @method self withDomainName
 * @method string getCertName
 * @method self withCertName
 * @method string getSSLProtocol
 * @method self withSSLProtocol
 * @method string getSSLPub
 * @method self withSSLPub
 * @method string getSSLPri
 * @method self withSSLPri
 */
final class SetLiveDomainCertificate extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getDomainNames
 * @method self withDomainNames
 * @method string getFunctions
 * @method self withFunctions
 */
final class BatchSetLiveDomainConfigs extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getDomainName
 * @method self withDomainName
 */
final class DescribeLiveCertificateList extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getDomainName
 * @method self withDomainName
 */
final class DeleteLiveDomain extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getDomainName
 * @method self withDomainName
 * @method string getFunctionNames
 * @method self withFunctionNames
 */
final class DescribeLiveDomainConfigs extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getLiveDomainType
 * @method self withLiveDomainType
 * @method string getDomainName
 * @method self withDomainName
 * @method string getRegion
 * @method self withRegion
 * @method string getCheckUrl
 * @method self withCheckUrl
 * @method string getScope
 * @method self withScope
 * @method string getTopLevelDomain
 * @method self withTopLevelDomain
 */
final class AddLiveDomain extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getDomainName
 * @method self withDomainName
 */
final class DescribeLiveDomainDetail extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getDomainNames
 * @method self withDomainNames
 * @method string getFunctionNames
 * @method self withFunctionNames
 */
final class BatchDeleteLiveDomainConfigs extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAppName
 * @method self withAppName
 * @method string getStreamName
 * @method self withStreamName
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getOrderBy
 * @method self withOrderBy
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getPageNum
 * @method self withPageNum
 */
final class DescribeLiveStreamBlackList extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getRoomId
 * @method self withRoomId
 */
final class DescribeRoomStatus extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getRoomId
 * @method self withRoomId
 */
final class DescribePlayInfo extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getRoomId
 * @method self withRoomId
 * @method string getAnchorId
 * @method self withAnchorId
 * @method Integer getRoomStatus
 * @method self withRoomStatus
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getOrder
 * @method self withOrder
 * @method Integer getPageNum
 * @method self withPageNum
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class DescribeRoomList extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getRoomId
 * @method self withRoomId
 * @method string getOrder
 * @method self withOrder
 * @method Integer getPageNum
 * @method self withPageNum
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class DescribeRoomKickoutUserList extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getRoomId
 * @method self withRoomId
 * @method string getAppUid
 * @method self withAppUid
 * @method string getOpAppUid
 * @method self withOpAppUid
 */
final class RelieveKickout extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getRoomId
 * @method self withRoomId
 * @method string getAppUid
 * @method self withAppUid
 * @method string getForbidAppUid
 * @method self withForbidAppUid
 */
final class AllowRoomChat extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getRoomId
 * @method self withRoomId
 * @method string getAppUid
 * @method self withAppUid
 */
final class QuitRoom extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getRoomId
 * @method self withRoomId
 * @method Integer getPageNum
 * @method self withPageNum
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class DescribeForbidRoomChatList extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getRoomId
 * @method self withRoomId
 * @method string getAppUid
 * @method self withAppUid
 */
final class DownMic extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getRoomId
 * @method self withRoomId
 * @method Integer getCount
 * @method self withCount
 */
final class Like extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getRoomId
 * @method self withRoomId
 * @method string getAppUid
 * @method self withAppUid
 */
final class ApplyToken extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getRoomId
 * @method self withRoomId
 * @method string getAppUid
 * @method self withAppUid
 * @method string getToAppUid
 * @method self withToAppUid
 * @method string getData
 * @method self withData
 * @method Integer getPriority
 * @method self withPriority
 */
final class SendRoomUserNotification extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getRoomId
 * @method self withRoomId
 */
final class DescribeLikeInfo extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getOrder
 * @method self withOrder
 * @method Integer getPageNum
 * @method self withPageNum
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class DescribeForbidPushStreamRoomList extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getRoomId
 * @method self withRoomId
 * @method string getAppUid
 * @method self withAppUid
 * @method string getData
 * @method self withData
 * @method Integer getPriority
 * @method self withPriority
 */
final class SendRoomNotification extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getRoomId
 * @method self withRoomId
 * @method string getAppUid
 * @method self withAppUid
 * @method string getUserRole
 * @method self withUserRole
 */
final class EnterRoom extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getRoomId
 * @method self withRoomId
 * @method string getAppUid
 * @method self withAppUid
 */
final class DescribePushInfo extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getAppUid
 * @method self withAppUid
 * @method string getRoomId
 * @method self withRoomId
 * @method string getContent
 * @method self withContent
 * @method string getUserData
 * @method self withUserData
 */
final class SendRoomChat extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getRoomId
 * @method self withRoomId
 * @method string getAppUid
 * @method self withAppUid
 */
final class UpMic extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getRoomId
 * @method self withRoomId
 */
final class DescribeRoomChatHistory extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getRoomId
 * @method self withRoomId
 * @method string getAppUid
 * @method self withAppUid
 * @method string getForbidAppUid
 * @method self withForbidAppUid
 * @method string getEndTime
 * @method self withEndTime
 */
final class ForbidRoomChat extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method Long getPageSize
 * @method self withPageSize
 * @method Long getPageNumber
 * @method self withPageNumber
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 */
final class DescribeLiveDomainLog extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getTimeMerge
 * @method self withTimeMerge
 * @method string getInterval
 * @method self withInterval
 * @method string getFixTimeGap
 * @method self withFixTimeGap
 * @method string getIspNameEn
 * @method self withIspNameEn
 * @method string getLocationNameEn
 * @method self withLocationNameEn
 */
final class DescribeLiveDomainQpsData extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getInterval
 * @method self withInterval
 */
final class DescribeLiveDomainHitRateData extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method Integer getPageNum
 * @method self withPageNum
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class DescribePrivateLineArea extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getRoomId
 * @method self withRoomId
 * @method string getAppUid
 * @method self withAppUid
 */
final class LeaveRoom extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getRoomId
 * @method self withRoomId
 * @method string getAppUid
 * @method self withAppUid
 * @method string getOpAppUid
 * @method self withOpAppUid
 * @method string getUserData
 * @method self withUserData
 * @method string getEndTime
 * @method self withEndTime
 */
final class KickOut extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getRoomId
 * @method self withRoomId
 * @method string getAppUid
 * @method self withAppUid
 * @method string getAppOptionInfo
 * @method self withAppOptionInfo
 * @method Integer getUserRole
 * @method self withUserRole
 */
final class JoinRoom extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getRoomId
 * @method self withRoomId
 * @method string getAppUid
 * @method self withAppUid
 * @method string getExpireTime
 * @method self withExpireTime
 */
final class ForbidSendMessage extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getRoomId
 * @method self withRoomId
 * @method string getUserData
 * @method self withUserData
 * @method string getEndTime
 * @method self withEndTime
 */
final class ForbidPushStream extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getRoomId
 * @method self withRoomId
 * @method string getExpireTime
 * @method self withExpireTime
 */
final class ForbidAllSendMessage extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getRoomId
 * @method self withRoomId
 * @method string getAppUid
 * @method self withAppUid
 */
final class DescribeRoomTokenId extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getRoomId
 * @method self withRoomId
 * @method string getOrder
 * @method self withOrder
 * @method Integer getPageNum
 * @method self withPageNum
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class DescribeRoomMessages extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getRoomId
 * @method self withRoomId
 */
final class DescribeRoomInfo extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getRoomId
 * @method self withRoomId
 */
final class DeleteRoom extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getRoomId
 * @method self withRoomId
 * @method string getAnchorId
 * @method self withAnchorId
 * @method string getTemplateIds
 * @method self withTemplateIds
 * @method Boolean getUseAppTranscode
 * @method self withUseAppTranscode
 */
final class CreateRoom extends RpcRequest
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
 * @method string getPlayDomain
 * @method self withPlayDomain
 * @method string getPushDomain
 * @method self withPushDomain
 * @method string getRtcAppId
 * @method self withRtcAppId
 * @method Boolean getDefaultTranscode
 * @method self withDefaultTranscode
 */
final class CreateApp extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getRoomId
 * @method self withRoomId
 * @method string getAppUid
 * @method self withAppUid
 */
final class AllowSendMessage extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getRoomId
 * @method self withRoomId
 */
final class AllowPushStream extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getAppId
 * @method self withAppId
 * @method string getRoomId
 * @method self withRoomId
 */
final class AllowAllSendMessage extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getLiveDomainType
 * @method self withLiveDomainType
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method string getDomainName
 * @method self withDomainName
 * @method string getRegionName
 * @method self withRegionName
 * @method string getDomainSearchType
 * @method self withDomainSearchType
 * @method string getDomainStatus
 * @method self withDomainStatus
 */
final class DescribeLiveUserDomains extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getCasterId
 * @method self withCasterId
 */
final class DescribeCasterRtcInfo extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getInterval
 * @method self withInterval
 */
final class DescribeLiveDomainOriginBpsData extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getInterval
 * @method self withInterval
 * @method string getIspNameEn
 * @method self withIspNameEn
 * @method string getLocationNameEn
 * @method self withLocationNameEn
 */
final class DescribeLiveDomainHttpCodeData extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getDomainName
 * @method self withDomainName
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 */
final class DescribeLiveDomainPvUvData extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getDomainSwitch
 * @method self withDomainSwitch
 * @method string getDomainName
 * @method self withDomainName
 */
final class DescribeUpBpsPeakData extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getLine
 * @method self withLine
 * @method string getDomainSwitch
 * @method self withDomainSwitch
 * @method string getDomainName
 * @method self withDomainName
 */
final class DescribeUpBpsPeakOfLine extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getDomainSwitch
 * @method self withDomainSwitch
 * @method string getDomainName
 * @method self withDomainName
 */
final class DescribeUpPeakPublishStreamData extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getInterval
 * @method self withInterval
 */
final class DescribeLiveDomainOriginTrafficData extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 */
final class DescribeLiveDomainRegionData extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getStreamPath
 * @method self withStreamPath
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getDomainName
 * @method self withDomainName
 */
final class DescribeLiveStreamData extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 */
final class DescribeLiveDomainCname extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getPushDomain
 * @method self withPushDomain
 * @method string getPullDomain
 * @method self withPullDomain
 */
final class DeleteLiveDomainMapping extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getPushDomain
 * @method self withPushDomain
 * @method string getPullDomain
 * @method self withPullDomain
 */
final class AddLiveDomainMapping extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getPullDomain
 * @method self withPullDomain
 */
final class DescribeLiveSpecificDomainMapping extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAppName
 * @method self withAppName
 * @method string getStreamName
 * @method self withStreamName
 * @method string getSourceUrl
 * @method self withSourceUrl
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 */
final class UpdateLivePullStreamInfoConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAppName
 * @method self withAppName
 * @method string getField
 * @method self withField
 * @method string getOnline
 * @method self withOnline
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getStreamType
 * @method self withStreamType
 * @method string getType
 * @method self withType
 * @method string getOrderBy
 * @method self withOrderBy
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getPageNumber
 * @method self withPageNumber
 */
final class DescribeLiveStreamAppStreams extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAppName
 * @method self withAppName
 * @method string getField
 * @method self withField
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getOrderBy
 * @method self withOrderBy
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getPageNumber
 * @method self withPageNumber
 */
final class DescribeLiveBlackListAppStreams extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 */
final class DescribeUserLiveStatus extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 */
final class DescribeUserBillingInfo extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getTaskID
 * @method self withTaskID
 * @method string getDataID
 * @method self withDataID
 * @method string getURL
 * @method self withURL
 * @method string getLabel
 * @method self withLabel
 * @method string getNote
 * @method self withNote
 */
final class LiveDetectFeedback extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 */
final class DescribeLiveRegions extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDiamondDataId
 * @method self withDiamondDataId
 * @method string getQueryValueType
 * @method self withQueryValueType
 * @method string getQueryValue
 * @method self withQueryValue
 */
final class DescribeLiveDiamondValue extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getClientToken
 * @method self withClientToken
 * @method string getContent
 * @method self withContent
 */
final class AddCasterEpisodeGroupContent extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourcePackageNames
 * @method self withResourcePackageNames
 */
final class DescribeLiveResourcePackage extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getCasterId
 * @method self withCasterId
 * @method RepeatList getEpisode
 * @method self withEpisode
 */
final class ModifyCasterProgram extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getCasterId
 * @method self withCasterId
 * @method string getEpisodeId
 * @method self withEpisodeId
 * @method string getEpisodeName
 * @method self withEpisodeName
 * @method string getResourceId
 * @method self withResourceId
 * @method RepeatList getComponentId
 * @method self withComponentId
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getSwitchType
 * @method self withSwitchType
 */
final class ModifyCasterEpisode extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getCasterId
 * @method self withCasterId
 * @method string getEpisodeId
 * @method self withEpisodeId
 * @method string getEpisodeType
 * @method self withEpisodeType
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method Integer getPageNum
 * @method self withPageNum
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getStatus
 * @method self withStatus
 */
final class DescribeCasterProgram extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getCasterId
 * @method self withCasterId
 */
final class DeleteCasterProgram extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getProgramId
 * @method self withProgramId
 */
final class DeleteCasterEpisodeGroup extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getCasterId
 * @method self withCasterId
 * @method string getEpisodeId
 * @method self withEpisodeId
 */
final class DeleteCasterEpisode extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getCasterId
 * @method self withCasterId
 * @method RepeatList getEpisode
 * @method self withEpisode
 */
final class AddCasterProgram extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getClientToken
 * @method self withClientToken
 * @method string getDomainName
 * @method self withDomainName
 * @method RepeatList getItem
 * @method self withItem
 * @method string getStartTime
 * @method self withStartTime
 * @method Integer getRepeatNum
 * @method self withRepeatNum
 * @method string getSideOutputUrl
 * @method self withSideOutputUrl
 * @method string getCallbackUrl
 * @method self withCallbackUrl
 */
final class AddCasterEpisodeGroup extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getCasterId
 * @method self withCasterId
 * @method string getEpisodeType
 * @method self withEpisodeType
 * @method string getEpisodeName
 * @method self withEpisodeName
 * @method string getResourceId
 * @method self withResourceId
 * @method RepeatList getComponentId
 * @method self withComponentId
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getSwitchType
 * @method self withSwitchType
 */
final class AddCasterEpisode extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 */
final class DescribeLiveDomainTranscodeData extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 */
final class DescribeLiveDomainSnapshotData extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getRecordType
 * @method self withRecordType
 */
final class DescribeLiveDomainRecordData extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getCommand
 * @method self withCommand
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAppName
 * @method self withAppName
 * @method string getStreamName
 * @method self withStreamName
 */
final class RealTimeRecordCommand extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getBizType
 * @method self withBizType
 * @method RepeatList getScenes
 * @method self withScenes
 * @method RepeatList getTasks
 * @method self withTasks
 */
final class DescribeLiveAudit extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getInterval
 * @method self withInterval
 * @method string getIspNameEn
 * @method self withIspNameEn
 * @method string getLocationNameEn
 * @method self withLocationNameEn
 */
final class DescribeLiveDomainTrafficData extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getInterval
 * @method self withInterval
 * @method string getIspNameEn
 * @method self withIspNameEn
 * @method string getLocationNameEn
 * @method self withLocationNameEn
 */
final class DescribeLiveDomainBpsData extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAppName
 * @method self withAppName
 * @method string getStreamName
 * @method self withStreamName
 */
final class DescribeBlackListByStreamName extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAppName
 * @method self withAppName
 * @method string getStreamName
 * @method self withStreamName
 * @method string getText
 * @method self withText
 * @method string getPattern
 * @method self withPattern
 * @method Integer getRepeat
 * @method self withRepeat
 * @method Integer getDelay
 * @method self withDelay
 */
final class AddTrancodeSEI extends RpcRequest
{
}

/**
 * @method string getVersion
 * @method self withVersion
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAppName
 * @method self withAppName
 * @method string getMethodName
 * @method self withMethodName
 * @method Integer getVision
 * @method self withVision
 */
final class SetLiveShiftVision extends RpcRequest
{
}

/**
 * @method string getVersion
 * @method self withVersion
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getDomainName
 * @method self withDomainName
 */
final class SetLiveShiftAuth extends RpcRequest
{
}

/**
 * @method string getVersion
 * @method self withVersion
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAppName
 * @method self withAppName
 * @method Integer getDuration
 * @method self withDuration
 * @method Integer getVision
 * @method self withVision
 */
final class OpenLiveShift extends RpcRequest
{
}

/**
 * @method string getVersion
 * @method self withVersion
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAppName
 * @method self withAppName
 */
final class DescribeLiveShiftStatus extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getCasterId
 * @method self withCasterId
 * @method string getSceneId
 * @method self withSceneId
 * @method string getType
 * @method self withType
 */
final class DeleteCasterSceneConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomain
 * @method self withDomain
 * @method string getApp
 * @method self withApp
 * @method string getTemplate
 * @method self withTemplate
 * @method string getTemplateType
 * @method self withTemplateType
 * @method Integer getHeight
 * @method self withHeight
 * @method Integer getWidth
 * @method self withWidth
 * @method Integer getFPS
 * @method self withFPS
 * @method Integer getVideoBitrate
 * @method self withVideoBitrate
 * @method Integer getAudioBitrate
 * @method self withAudioBitrate
 * @method string getGop
 * @method self withGop
 * @method Integer getProfile
 * @method self withProfile
 */
final class AddCustomLiveStreamTranscode extends RpcRequest
{
}

/**
 * @method string getVersion
 * @method self withVersion
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAppName
 * @method self withAppName
 * @method string getStreamName
 * @method self withStreamName
 * @method string getScene
 * @method self withScene
 * @method RepeatList getLabel
 * @method self withLabel
 * @method RepeatList getSuggestion
 * @method self withSuggestion
 * @method Integer getStartTime
 * @method self withStartTime
 * @method Integer getEndTime
 * @method self withEndTime
 * @method string getOrder
 * @method self withOrder
 * @method Integer getPageNum
 * @method self withPageNum
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class DescribeLiveDetectResultDigest extends RpcRequest
{
}

/**
 * @method string getVersion
 * @method self withVersion
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAppName
 * @method self withAppName
 * @method string getStreamName
 * @method self withStreamName
 * @method string getScene
 * @method self withScene
 * @method RepeatList getRate
 * @method self withRate
 * @method RepeatList getLabel
 * @method self withLabel
 * @method RepeatList getSuggestion
 * @method self withSuggestion
 * @method Integer getStartTime
 * @method self withStartTime
 * @method Integer getEndTime
 * @method self withEndTime
 * @method string getOrder
 * @method self withOrder
 * @method Integer getPageNum
 * @method self withPageNum
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class DescribeLiveDetectResultDetail extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAppName
 * @method self withAppName
 * @method string getStreamName
 * @method self withStreamName
 * @method Long getPageNum
 * @method self withPageNum
 * @method Long getPageSize
 * @method self withPageSize
 */
final class DescribeLiveRecordVodConfigs extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAppName
 * @method self withAppName
 * @method string getStreamName
 * @method self withStreamName
 */
final class DeleteLiveRecordVodConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAppName
 * @method self withAppName
 * @method string getStreamName
 * @method self withStreamName
 * @method string getVodTranscodeGroupId
 * @method self withVodTranscodeGroupId
 * @method Integer getCycleDuration
 * @method self withCycleDuration
 * @method string getAutoCompose
 * @method self withAutoCompose
 * @method string getComposeVodTranscodeGroupId
 * @method self withComposeVodTranscodeGroupId
 */
final class AddLiveRecordVodConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getCasterId
 * @method self withCasterId
 * @method string getComponentId
 * @method self withComponentId
 * @method string getComponentName
 * @method self withComponentName
 * @method string getComponentType
 * @method self withComponentType
 * @method string getEffect
 * @method self withEffect
 * @method string getComponentLayer
 * @method self withComponentLayer
 * @method string getTextLayerContent
 * @method self withTextLayerContent
 * @method string getImageLayerContent
 * @method self withImageLayerContent
 * @method string getCaptionLayerContent
 * @method self withCaptionLayerContent
 */
final class ModifyCasterComponent extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getCasterId
 * @method self withCasterId
 * @method string getComponentId
 * @method self withComponentId
 */
final class DescribeCasterComponents extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getCasterId
 * @method self withCasterId
 * @method string getComponentId
 * @method self withComponentId
 */
final class DeleteCasterComponent extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getCasterId
 * @method self withCasterId
 * @method string getComponentName
 * @method self withComponentName
 * @method string getLocationId
 * @method self withLocationId
 * @method string getComponentType
 * @method self withComponentType
 * @method string getEffect
 * @method self withEffect
 * @method string getComponentLayer
 * @method self withComponentLayer
 * @method string getTextLayerContent
 * @method self withTextLayerContent
 * @method string getImageLayerContent
 * @method self withImageLayerContent
 * @method string getCaptionLayerContent
 * @method self withCaptionLayerContent
 */
final class AddCasterComponent extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getCasterId
 * @method self withCasterId
 */
final class StopCaster extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getCasterId
 * @method self withCasterId
 */
final class StartCaster extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getInternetChargeType
 * @method self withInternetChargeType
 */
final class OpenLiveService extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getInstanceId
 * @method self withInstanceId
 * @method Integer getInternetChargeType
 * @method self withInternetChargeType
 */
final class ModifyLiveService extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAppName
 * @method self withAppName
 * @method string getStreamName
 * @method self withStreamName
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 */
final class DescribeLiveStreamHistoryUserNum extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getCasterId
 * @method self withCasterId
 * @method string getSceneId
 * @method self withSceneId
 * @method string getLayoutId
 * @method self withLayoutId
 * @method RepeatList getComponentId
 * @method self withComponentId
 */
final class UpdateCasterSceneConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getCasterId
 * @method self withCasterId
 * @method string getSceneId
 * @method self withSceneId
 */
final class StopCasterScene extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getCasterId
 * @method self withCasterId
 * @method string getSceneId
 * @method self withSceneId
 */
final class StartCasterScene extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getCasterId
 * @method self withCasterId
 * @method string getSceneId
 * @method self withSceneId
 * @method string getLayoutId
 * @method self withLayoutId
 * @method RepeatList getComponentId
 * @method self withComponentId
 */
final class SetCasterSceneConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getCasterId
 * @method self withCasterId
 * @method string getCasterName
 * @method self withCasterName
 * @method string getDomainName
 * @method self withDomainName
 * @method string getTranscodeConfig
 * @method self withTranscodeConfig
 * @method string getRecordConfig
 * @method self withRecordConfig
 * @method Float getDelay
 * @method self withDelay
 * @method string getUrgentMaterialId
 * @method self withUrgentMaterialId
 * @method string getSideOutputUrl
 * @method self withSideOutputUrl
 * @method string getCallbackUrl
 * @method self withCallbackUrl
 * @method Integer getProgramEffect
 * @method self withProgramEffect
 * @method string getProgramName
 * @method self withProgramName
 * @method Integer getChannelEnable
 * @method self withChannelEnable
 */
final class SetCasterConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getdata
 * @method self withdata
 */
final class PayOrderCallback extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getCasterId
 * @method self withCasterId
 * @method string getResourceId
 * @method self withResourceId
 * @method string getResourceName
 * @method self withResourceName
 * @method string getLiveStreamUrl
 * @method self withLiveStreamUrl
 * @method string getMaterialId
 * @method self withMaterialId
 * @method string getVodUrl
 * @method self withVodUrl
 * @method Integer getBeginOffset
 * @method self withBeginOffset
 * @method Integer getEndOffset
 * @method self withEndOffset
 * @method Integer getRepeatNum
 * @method self withRepeatNum
 * @method Integer getPtsCallbackInterval
 * @method self withPtsCallbackInterval
 */
final class ModifyCasterVideoResource extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getCasterId
 * @method self withCasterId
 * @method string getLayoutId
 * @method self withLayoutId
 * @method RepeatList getVideoLayer
 * @method self withVideoLayer
 * @method RepeatList getAudioLayer
 * @method self withAudioLayer
 * @method RepeatList getBlendList
 * @method self withBlendList
 * @method RepeatList getMixList
 * @method self withMixList
 */
final class ModifyCasterLayout extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getCasterId
 * @method self withCasterId
 * @method string getSceneId
 * @method self withSceneId
 * @method string getResourceId
 * @method self withResourceId
 */
final class EffectCasterVideoResource extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getCasterId
 * @method self withCasterId
 * @method string getSceneId
 * @method self withSceneId
 */
final class EffectCasterUrgent extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getCasterId
 * @method self withCasterId
 */
final class DescribeCasterVideoResources extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getCasterId
 * @method self withCasterId
 */
final class DescribeCasterStreamUrl extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getCasterId
 * @method self withCasterId
 * @method string getSceneId
 * @method self withSceneId
 */
final class DescribeCasterScenes extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getCasterId
 * @method self withCasterId
 * @method string getCasterName
 * @method self withCasterName
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method Integer getPageNum
 * @method self withPageNum
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getStatus
 * @method self withStatus
 */
final class DescribeCasters extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getCasterId
 * @method self withCasterId
 * @method string getLayoutId
 * @method self withLayoutId
 */
final class DescribeCasterLayouts extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getCasterId
 * @method self withCasterId
 */
final class DescribeCasterConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getCasterId
 * @method self withCasterId
 * @method string getResourceId
 * @method self withResourceId
 */
final class DeleteCasterVideoResource extends RpcRequest
{
}

/**
 * @method string getVersion
 * @method self withVersion
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getCasterId
 * @method self withCasterId
 * @method string getsceneId
 * @method self withsceneId
 */
final class DeleteCasterScene extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getCasterId
 * @method self withCasterId
 * @method string getLayoutId
 * @method self withLayoutId
 */
final class DeleteCasterLayout extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getCasterId
 * @method self withCasterId
 */
final class DeleteCaster extends RpcRequest
{
}

/**
 * @method string getVersion
 * @method self withVersion
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getCasterId
 * @method self withCasterId
 * @method string getClientToken
 * @method self withClientToken
 * @method string getSceneName
 * @method self withSceneName
 * @method Integer getOutputType
 * @method self withOutputType
 */
final class CreateCasterScene extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getCasterName
 * @method self withCasterName
 * @method string getClientToken
 * @method self withClientToken
 * @method Integer getNormType
 * @method self withNormType
 * @method string getChargeType
 * @method self withChargeType
 * @method string getPurchaseTime
 * @method self withPurchaseTime
 * @method string getExpireTime
 * @method self withExpireTime
 * @method string getCasterTemplate
 * @method self withCasterTemplate
 */
final class CreateCaster extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getCasterId
 * @method self withCasterId
 * @method string getFromSceneId
 * @method self withFromSceneId
 * @method string getToSceneId
 * @method self withToSceneId
 */
final class CopyCasterSceneConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getCasterName
 * @method self withCasterName
 * @method string getSrcCasterId
 * @method self withSrcCasterId
 * @method string getClientToken
 * @method self withClientToken
 */
final class CopyCaster extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getCasterId
 * @method self withCasterId
 * @method string getResourceName
 * @method self withResourceName
 * @method string getLocationId
 * @method self withLocationId
 * @method string getLiveStreamUrl
 * @method self withLiveStreamUrl
 * @method string getMaterialId
 * @method self withMaterialId
 * @method string getVodUrl
 * @method self withVodUrl
 * @method Integer getBeginOffset
 * @method self withBeginOffset
 * @method Integer getEndOffset
 * @method self withEndOffset
 * @method Integer getRepeatNum
 * @method self withRepeatNum
 * @method Integer getPtsCallbackInterval
 * @method self withPtsCallbackInterval
 */
final class AddCasterVideoResource extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getCasterId
 * @method self withCasterId
 * @method RepeatList getVideoLayer
 * @method self withVideoLayer
 * @method RepeatList getAudioLayer
 * @method self withAudioLayer
 * @method RepeatList getBlendList
 * @method self withBlendList
 * @method RepeatList getMixList
 * @method self withMixList
 */
final class AddCasterLayout extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getStreamName
 * @method self withStreamName
 * @method string getAppName
 * @method self withAppName
 * @method string getFlag
 * @method self withFlag
 */
final class DeletePrivateLineConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getStreamName
 * @method self withStreamName
 * @method string getFlag
 * @method self withFlag
 * @method string getAppName
 * @method self withAppName
 * @method Integer getPageNum
 * @method self withPageNum
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class DescribePrivateLineConfigs extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method Integer getGroup
 * @method self withGroup
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAppName
 * @method self withAppName
 * @method string getStreamName
 * @method self withStreamName
 * @method string getFlag
 * @method self withFlag
 */
final class AddPrivateLineConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getQueryTime
 * @method self withQueryTime
 * @method string getLowDelay
 * @method self withLowDelay
 * @method string getAlignQueryTime
 * @method self withAlignQueryTime
 */
final class DescribeLiveStreamRealTimeBpsData extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getNotifyUrl
 * @method self withNotifyUrl
 */
final class UpdateLiveEditorNotifyConfig extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getCanvasId
 * @method self withCanvasId
 * @method string getCanvasConfig
 * @method self withCanvasConfig
 */
final class UpdateLiveEditorCanvas extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAppName
 * @method self withAppName
 * @method string getStreamName
 * @method self withStreamName
 */
final class StopLiveEditor extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAppName
 * @method self withAppName
 * @method string getStreamName
 * @method self withStreamName
 * @method string getTranscodeTemplate
 * @method self withTranscodeTemplate
 * @method string getSidePushUrl
 * @method self withSidePushUrl
 * @method Float getSideDelay
 * @method self withSideDelay
 * @method string getSecondaryStreamName
 * @method self withSecondaryStreamName
 * @method string getSecondaryTranscodeTemplate
 * @method self withSecondaryTranscodeTemplate
 */
final class StartLiveEditor extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAppName
 * @method self withAppName
 * @method string getStreamName
 * @method self withStreamName
 * @method string getLayoutConfig
 * @method self withLayoutConfig
 * @method Integer getClearSideOutput
 * @method self withClearSideOutput
 */
final class SetLiveEditorScene extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAppName
 * @method self withAppName
 * @method string getStreamName
 * @method self withStreamName
 * @method string getLayoutConfig
 * @method self withLayoutConfig
 */
final class ModifyLiveEditorLayout extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAppName
 * @method self withAppName
 */
final class DescribeLiveEditorTranscodeTemplates extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 */
final class DescribeLiveEditorNotifyConfig extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 */
final class DescribeLiveEditorConfig extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 */
final class DeleteLiveEditorNotifyConfig extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAppName
 * @method self withAppName
 */
final class DeleteLiveEditorConfig extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getCanvasId
 * @method self withCanvasId
 */
final class DeleteLiveEditorCanvas extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getNotifyUrl
 * @method self withNotifyUrl
 */
final class AddLiveEditorNotifyConfig extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAppName
 * @method self withAppName
 */
final class AddLiveEditorConfig extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getCanvasId
 * @method self withCanvasId
 * @method string getCanvasConfig
 * @method self withCanvasConfig
 * @method Integer getCanvasWidth
 * @method self withCanvasWidth
 * @method Integer getCanvasHeight
 * @method self withCanvasHeight
 */
final class AddLiveEditorCanvas extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 */
final class DescribeLivePullStreamConfig extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAppName
 * @method self withAppName
 * @method string getStreamName
 * @method self withStreamName
 */
final class DeleteLivePullStreamInfoConfig extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAppName
 * @method self withAppName
 * @method string getStreamName
 * @method self withStreamName
 * @method string getSourceUrl
 * @method self withSourceUrl
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 */
final class AddLivePullStreamInfoConfig extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAppName
 * @method self withAppName
 * @method string getStreamName
 * @method self withStreamName
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 */
final class DescribeLiveStreamBitRateData extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getNotifyUrl
 * @method self withNotifyUrl
 */
final class AddLiveDetectNotifyConfig extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAppName
 * @method self withAppName
 * @method string getOssEndpoint
 * @method self withOssEndpoint
 * @method string getOssBucket
 * @method self withOssBucket
 * @method string getOssObject
 * @method self withOssObject
 * @method RepeatList getScene
 * @method self withScene
 * @method Integer getInterval
 * @method self withInterval
 */
final class AddLiveSnapshotDetectPornConfig extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 */
final class DeleteLiveDetectNotifyConfig extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 */
final class DescribeLiveDetectNotifyConfig extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAppName
 * @method self withAppName
 */
final class DeleteLiveSnapshotDetectPornConfig extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAppName
 * @method self withAppName
 * @method Integer getPageNum
 * @method self withPageNum
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getOrder
 * @method self withOrder
 */
final class DescribeLiveSnapshotDetectPornConfig extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getNotifyUrl
 * @method self withNotifyUrl
 */
final class UpdateLiveDetectNotifyConfig extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAppName
 * @method self withAppName
 * @method string getOssEndpoint
 * @method self withOssEndpoint
 * @method string getOssBucket
 * @method self withOssBucket
 * @method string getOssObject
 * @method self withOssObject
 * @method Integer getInterval
 * @method self withInterval
 * @method RepeatList getScene
 * @method self withScene
 */
final class UpdateLiveSnapshotDetectPornConfig extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getNotifyUrl
 * @method self withNotifyUrl
 */
final class AddLiveEditNotifyConfig extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAppName
 * @method self withAppName
 * @method string getTemplate
 * @method self withTemplate
 */
final class AddLiveEditConfig extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 */
final class DeleteLiveEditNotifyConfig extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAppName
 * @method self withAppName
 */
final class DeleteLiveEditConfig extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 */
final class DescribeLiveEditNotifyConfig extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 */
final class DescribeLiveEditConfig extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAppName
 * @method self withAppName
 * @method string getStreamName
 * @method self withStreamName
 * @method RepeatList getPicture
 * @method self withPicture
 */
final class EditScreenPictures extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAppName
 * @method self withAppName
 * @method string getStreamName
 * @method self withStreamName
 * @method RepeatList getText
 * @method self withText
 */
final class EditScreenTexts extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getNotifyUrl
 * @method self withNotifyUrl
 */
final class UpdateLiveEditNotifyConfig extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAppName
 * @method self withAppName
 * @method string getStreamName
 * @method self withStreamName
 */
final class StopStreamIntercut extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAppName
 * @method self withAppName
 * @method string getStreamName
 * @method self withStreamName
 * @method string getSourceType
 * @method self withSourceType
 * @method string getSourceUrl
 * @method self withSourceUrl
 */
final class StartStreamIntercut extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 */
final class DescribeLiveDomains extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getdata
 * @method self withdata
 */
final class OrderModifySucceededCallback extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAppName
 * @method self withAppName
 * @method string getTemplate
 * @method self withTemplate
 */
final class AddLiveMixConfig extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAppName
 * @method self withAppName
 */
final class DeleteLiveMixConfig extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 */
final class DescribeLiveMixConfig extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getNotifyUrl
 * @method self withNotifyUrl
 */
final class AddLiveMixNotifyConfig extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 */
final class DeleteLiveMixNotifyConfig extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 */
final class DescribeLiveMixNotifyConfig extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getNotifyUrl
 * @method self withNotifyUrl
 */
final class UpdateLiveMixNotifyConfig extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getNotifyUrl
 * @method self withNotifyUrl
 * @method Boolean getNeedStatusNotify
 * @method self withNeedStatusNotify
 * @method string getOnDemandUrl
 * @method self withOnDemandUrl
 */
final class AddLiveRecordNotifyConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 */
final class DeleteLiveStreamsNotifyUrlConfig extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 */
final class DeleteLiveRecordNotifyConfig extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 */
final class DescribeLiveRecordNotifyConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 */
final class DescribeLiveStreamsNotifyUrlConfig extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getNotifyUrl
 * @method self withNotifyUrl
 * @method string getOnDemandUrl
 * @method self withOnDemandUrl
 * @method Boolean getNeedStatusNotify
 * @method self withNeedStatusNotify
 */
final class UpdateLiveRecordNotifyConfig extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getdata
 * @method self withdata
 */
final class OrderSucceededCallback extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method Integer getPageNum
 * @method self withPageNum
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class DescribeLiveStreamsBlockList extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAppName
 * @method self withAppName
 * @method string getStreamName
 * @method self withStreamName
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 */
final class DescribeLiveStreamOnlineUserNum extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAppName
 * @method self withAppName
 * @method string getStreamName
 * @method self withStreamName
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method string getStreamType
 * @method self withStreamType
 * @method string getQueryType
 * @method self withQueryType
 * @method string getOrderBy
 * @method self withOrderBy
 */
final class DescribeLiveStreamsPublishList extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAppName
 * @method self withAppName
 * @method string getStreamName
 * @method self withStreamName
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getPageNum
 * @method self withPageNum
 * @method string getStreamType
 * @method self withStreamType
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getQueryType
 * @method self withQueryType
 * @method string getOrderBy
 * @method self withOrderBy
 */
final class DescribeLiveStreamsOnlineList extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAppName
 * @method self withAppName
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 */
final class DescribeLiveStreamsControlHistory extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomain
 * @method self withDomain
 * @method string getApp
 * @method self withApp
 * @method string getTemplate
 * @method self withTemplate
 */
final class AddLiveStreamTranscode extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomain
 * @method self withDomain
 * @method string getApp
 * @method self withApp
 * @method string getTemplate
 * @method self withTemplate
 */
final class DeleteLiveStreamTranscode extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAppName
 * @method self withAppName
 * @method string getStreamName
 * @method self withStreamName
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 */
final class DescribeLiveStreamsFrameRateAndBitRateData extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAppName
 * @method self withAppName
 * @method string getStreamName
 * @method self withStreamName
 * @method string getLiveStreamType
 * @method self withLiveStreamType
 * @method string getOneshot
 * @method self withOneshot
 * @method string getControlStreamAction
 * @method self withControlStreamAction
 * @method string getResumeTime
 * @method self withResumeTime
 */
final class ForbidLiveStream extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainTranscodeName
 * @method self withDomainTranscodeName
 */
final class DescribeLiveStreamTranscodeInfo extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getMainDomainName
 * @method self withMainDomainName
 * @method string getMainAppName
 * @method self withMainAppName
 * @method string getMainStreamName
 * @method self withMainStreamName
 * @method string getMixDomainName
 * @method self withMixDomainName
 * @method string getMixAppName
 * @method self withMixAppName
 * @method string getMixStreamName
 * @method self withMixStreamName
 */
final class StopMixStreamsService extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getMainDomainName
 * @method self withMainDomainName
 * @method string getMainAppName
 * @method self withMainAppName
 * @method string getMainStreamName
 * @method self withMainStreamName
 * @method string getMixDomainName
 * @method self withMixDomainName
 * @method string getMixAppName
 * @method self withMixAppName
 * @method string getMixStreamName
 * @method self withMixStreamName
 * @method string getMixTemplate
 * @method self withMixTemplate
 * @method string getMixType
 * @method self withMixType
 */
final class StartMixStreamsService extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getNotifyUrl
 * @method self withNotifyUrl
 * @method string getAuthType
 * @method self withAuthType
 * @method string getAuthKey
 * @method self withAuthKey
 */
final class SetLiveStreamsNotifyUrlConfig extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getLiveStreamType
 * @method self withLiveStreamType
 * @method string getAppName
 * @method self withAppName
 * @method string getStreamName
 * @method self withStreamName
 */
final class ResumeLiveStream extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getImageUrl
 * @method self withImageUrl
 * @method string getSceneList
 * @method self withSceneList
 */
final class ImageDetection extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAppName
 * @method self withAppName
 * @method Integer getTimeInterval
 * @method self withTimeInterval
 * @method string getOssEndpoint
 * @method self withOssEndpoint
 * @method string getOssBucket
 * @method self withOssBucket
 * @method string getOverwriteOssObject
 * @method self withOverwriteOssObject
 * @method string getSequenceOssObject
 * @method self withSequenceOssObject
 */
final class AddLiveAppSnapshotConfig extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAppName
 * @method self withAppName
 * @method string getOssEndpoint
 * @method self withOssEndpoint
 * @method string getOssBucket
 * @method self withOssBucket
 * @method RepeatList getRecordFormat
 * @method self withRecordFormat
 * @method string getStreamName
 * @method self withStreamName
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method Integer getOnDemand
 * @method self withOnDemand
 */
final class AddLiveAppRecordConfig extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAppName
 * @method self withAppName
 * @method string getStreamName
 * @method self withStreamName
 * @method Integer getPageNum
 * @method self withPageNum
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getOrder
 * @method self withOrder
 */
final class DescribeLiveRecordConfig extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAppName
 * @method self withAppName
 */
final class DeleteLiveAppSnapshotConfig extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAppName
 * @method self withAppName
 * @method string getStreamName
 * @method self withStreamName
 */
final class DeleteLiveAppRecordConfig extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAppName
 * @method self withAppName
 * @method string getStreamName
 * @method self withStreamName
 * @method string getOssEndpoint
 * @method self withOssEndpoint
 * @method string getOssBucket
 * @method self withOssBucket
 * @method string getOssObject
 * @method self withOssObject
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 */
final class CreateLiveStreamRecordIndexFiles extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAppName
 * @method self withAppName
 * @method string getStreamName
 * @method self withStreamName
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method Integer getLimit
 * @method self withLimit
 * @method string getOrder
 * @method self withOrder
 */
final class DescribeLiveStreamSnapshotInfo extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAppName
 * @method self withAppName
 * @method string getStreamName
 * @method self withStreamName
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method Integer getPageNum
 * @method self withPageNum
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getOrder
 * @method self withOrder
 */
final class DescribeLiveStreamRecordIndexFiles extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAppName
 * @method self withAppName
 * @method string getStreamName
 * @method self withStreamName
 * @method string getRecordId
 * @method self withRecordId
 */
final class DescribeLiveStreamRecordIndexFile extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAppName
 * @method self withAppName
 * @method string getStreamName
 * @method self withStreamName
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 */
final class DescribeLiveStreamRecordContent extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAppName
 * @method self withAppName
 * @method Integer getPageNum
 * @method self withPageNum
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getOrder
 * @method self withOrder
 */
final class DescribeLiveSnapshotConfig extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAppName
 * @method self withAppName
 * @method Integer getTimeInterval
 * @method self withTimeInterval
 * @method string getOssEndpoint
 * @method self withOssEndpoint
 * @method string getOssBucket
 * @method self withOssBucket
 * @method string getOverwriteOssObject
 * @method self withOverwriteOssObject
 * @method string getSequenceOssObject
 * @method self withSequenceOssObject
 */
final class UpdateLiveAppSnapshotConfig extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAppName
 * @method self withAppName
 * @method string getStreamName
 * @method self withStreamName
 * @method string getMixDomainName
 * @method self withMixDomainName
 * @method string getMixAppName
 * @method self withMixAppName
 * @method string getMixStreamName
 * @method self withMixStreamName
 */
final class AddMultipleStreamMixService extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAppName
 * @method self withAppName
 * @method string getStreamName
 * @method self withStreamName
 */
final class StopMultipleStreamMixService extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAppName
 * @method self withAppName
 * @method string getStreamName
 * @method self withStreamName
 * @method string getMixTemplate
 * @method self withMixTemplate
 */
final class StartMultipleStreamMixService extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAppName
 * @method self withAppName
 * @method string getStreamName
 * @method self withStreamName
 * @method string getMixDomainName
 * @method self withMixDomainName
 * @method string getMixAppName
 * @method self withMixAppName
 * @method string getMixStreamName
 * @method self withMixStreamName
 */
final class RemoveMultipleStreamMixService extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getImageUrl
 * @method self withImageUrl
 */
final class ImagePornDetection extends RpcRequest
{
}
