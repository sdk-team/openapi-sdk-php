<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RpcRequest as Rpc;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method SetBoardCallback setBoardCallback($options = [])
 * @method DescribeRecords describeRecords($options = [])
 * @method DescribeRecord describeRecord($options = [])
 * @method CompleteBoardRecord completeBoardRecord($options = [])
 * @method StartBoardRecord startBoardRecord($options = [])
 * @method ApplyRecordToken applyRecordToken($options = [])
 * @method UpdateBoardCallback updateBoardCallback($options = [])
 * @method SetUserDomainAuthClose setUserDomainAuthClose($options = [])
 * @method DescribeLiveUserQuota describeLiveUserQuota($options = [])
 * @method DescribeLiveDomainMapping describeLiveDomainMapping($options = [])
 * @method DescribeLiveStreamCheatData describeLiveStreamCheatData($options = [])
 * @method DescribeIlvbRecordConfig describeIlvbRecordConfig($options = [])
 * @method DeleteIlvbRecordConfig deleteIlvbRecordConfig($options = [])
 * @method StopIlvbRealTimeRecord stopIlvbRealTimeRecord($options = [])
 * @method StartIlvbRealTimeRecord startIlvbRealTimeRecord($options = [])
 * @method AddIlvbRecordConfig addIlvbRecordConfig($options = [])
 * @method DescribeIlvbRecordList describeIlvbRecordList($options = [])
 * @method StopLiveIndex stopLiveIndex($options = [])
 * @method StartLiveIndex startLiveIndex($options = [])
 * @method DescribeIlvbTranscodeConfigList describeIlvbTranscodeConfigList($options = [])
 * @method EnableDefaultIlvbTranscodeConfig enableDefaultIlvbTranscodeConfig($options = [])
 * @method DisableDefaultIlvbTranscodeConfig disableDefaultIlvbTranscodeConfig($options = [])
 * @method UpdateIlvbTranscodeConfig updateIlvbTranscodeConfig($options = [])
 * @method AddIlvbTranscodeConfig addIlvbTranscodeConfig($options = [])
 * @method DeleteIlvbTranscodeConfig deleteIlvbTranscodeConfig($options = [])
 * @method UpdateRoomIlvbTranscodeConfig updateRoomIlvbTranscodeConfig($options = [])
 * @method CheckSnapshotStatus checkSnapshotStatus($options = [])
 * @method RealTimeSnapshotCommand realTimeSnapshotCommand($options = [])
 * @method DescribeLiveService describeLiveService($options = [])
 * @method DescribeLiveTopDomainsByFlow describeLiveTopDomainsByFlow($options = [])
 * @method DescribeLiveDomainMax95BpsData describeLiveDomainMax95BpsData($options = [])
 * @method DescribeLiveDomainRealTimeBpsData describeLiveDomainRealTimeBpsData($options = [])
 * @method DescribeLiveDomainRealTimeHttpCodeData describeLiveDomainRealTimeHttpCodeData($options = [])
 * @method DescribeLiveDomainRealTimeTrafficData describeLiveDomainRealTimeTrafficData($options = [])
 * @method DescribeLiveTranscodeLog describeLiveTranscodeLog($options = [])
 * @method DescribeLiveStreamUniversalAppStreams describeLiveStreamUniversalAppStreams($options = [])
 * @method DeleteLiveDomainPlayMapping deleteLiveDomainPlayMapping($options = [])
 * @method AddLiveDomainPlayMapping addLiveDomainPlayMapping($options = [])
 * @method DescribeUserUsageDetailDataExportTask describeUserUsageDetailDataExportTask($options = [])
 * @method CreateUsageDetailDataExportTask createUsageDetailDataExportTask($options = [])
 * @method DescribeLiveUpVideoAudioInfo describeLiveUpVideoAudioInfo($options = [])
 * @method ModifyApp modifyApp($options = [])
 * @method DescribeIlvbRegions describeIlvbRegions($options = [])
 * @method DeleteApp deleteApp($options = [])
 * @method DescribeTranscodeLog describeTranscodeLog($options = [])
 * @method DescribeClientList describeClientList($options = [])
 * @method DescribeClientCount describeClientCount($options = [])
 * @method DescribeApps describeApps($options = [])
 * @method DeleteLiveLazyPullStreamInfoConfig deleteLiveLazyPullStreamInfoConfig($options = [])
 * @method DescribeLiveLazyPullStreamConfig describeLiveLazyPullStreamConfig($options = [])
 * @method SetLiveLazyPullStreamInfoConfig setLiveLazyPullStreamInfoConfig($options = [])
 * @method UpdateCasterSceneAudio updateCasterSceneAudio($options = [])
 * @method SetCasterChannel setCasterChannel($options = [])
 * @method DescribeCasterSceneAudio describeCasterSceneAudio($options = [])
 * @method DescribeCasterChannels describeCasterChannels($options = [])
 * @method UpdateBoard updateBoard($options = [])
 * @method JoinBoard joinBoard($options = [])
 * @method DescribeBoardSnapshot describeBoardSnapshot($options = [])
 * @method DescribeBoards describeBoards($options = [])
 * @method DescribeBoardEvents describeBoardEvents($options = [])
 * @method DeleteBoard deleteBoard($options = [])
 * @method CreateBoardApp createBoardApp($options = [])
 * @method CreateBoard createBoard($options = [])
 * @method CompleteBoard completeBoard($options = [])
 * @method ApplyBoardToken applyBoardToken($options = [])
 * @method DescribeLiveStreamsPublishAndOnlineData describeLiveStreamsPublishAndOnlineData($options = [])
 * @method DescribeDomainUsageData describeDomainUsageData($options = [])
 * @method UnlinkMic unlinkMic($options = [])
 * @method RequestLinkMic requestLinkMic($options = [])
 * @method RejectLinkMic rejectLinkMic($options = [])
 * @method LinkMic linkMic($options = [])
 * @method KickoutLinkMic kickoutLinkMic($options = [])
 * @method DescribeLinkMicInfo describeLinkMicInfo($options = [])
 * @method CancelLinkMic cancelLinkMic($options = [])
 * @method AcceptLinkMic acceptLinkMic($options = [])
 * @method DescribeLiveStreamCount describeLiveStreamCount($options = [])
 * @method DescribeLiveCertificateDetail describeLiveCertificateDetail($options = [])
 * @method UpdateLiveDomain updateLiveDomain($options = [])
 * @method DescribeHlsLiveStreamRealTimeBpsData describeHlsLiveStreamRealTimeBpsData($options = [])
 * @method StopLiveDomain stopLiveDomain($options = [])
 * @method BatchStopLiveDomain batchStopLiveDomain($options = [])
 * @method DeleteLiveSpecificConfig deleteLiveSpecificConfig($options = [])
 * @method StartLiveDomain startLiveDomain($options = [])
 * @method BatchStartLiveDomain batchStartLiveDomain($options = [])
 * @method SetLiveDomainCertificate setLiveDomainCertificate($options = [])
 * @method BatchSetLiveDomainConfigs batchSetLiveDomainConfigs($options = [])
 * @method DescribeLiveCertificateList describeLiveCertificateList($options = [])
 * @method DeleteLiveDomain deleteLiveDomain($options = [])
 * @method DescribeLiveDomainConfigs describeLiveDomainConfigs($options = [])
 * @method AddLiveDomain addLiveDomain($options = [])
 * @method DescribeLiveDomainDetail describeLiveDomainDetail($options = [])
 * @method BatchDeleteLiveDomainConfigs batchDeleteLiveDomainConfigs($options = [])
 * @method DescribeLiveStreamBlackList describeLiveStreamBlackList($options = [])
 * @method DescribeRoomStatus describeRoomStatus($options = [])
 * @method DescribePlayInfo describePlayInfo($options = [])
 * @method DescribeRoomList describeRoomList($options = [])
 * @method DescribeRoomKickoutUserList describeRoomKickoutUserList($options = [])
 * @method RelieveKickout relieveKickout($options = [])
 * @method AllowRoomChat allowRoomChat($options = [])
 * @method QuitRoom quitRoom($options = [])
 * @method DescribeForbidRoomChatList describeForbidRoomChatList($options = [])
 * @method DownMic downMic($options = [])
 * @method Like like($options = [])
 * @method ApplyToken applyToken($options = [])
 * @method SendRoomUserNotification sendRoomUserNotification($options = [])
 * @method DescribeLikeInfo describeLikeInfo($options = [])
 * @method DescribeForbidPushStreamRoomList describeForbidPushStreamRoomList($options = [])
 * @method SendRoomNotification sendRoomNotification($options = [])
 * @method EnterRoom enterRoom($options = [])
 * @method DescribePushInfo describePushInfo($options = [])
 * @method SendRoomChat sendRoomChat($options = [])
 * @method UpMic upMic($options = [])
 * @method DescribeRoomChatHistory describeRoomChatHistory($options = [])
 * @method ForbidRoomChat forbidRoomChat($options = [])
 * @method DescribeLiveDomainLog describeLiveDomainLog($options = [])
 * @method DescribeLiveDomainQpsData describeLiveDomainQpsData($options = [])
 * @method DescribeLiveDomainHitRateData describeLiveDomainHitRateData($options = [])
 * @method DescribePrivateLineArea describePrivateLineArea($options = [])
 * @method LeaveRoom leaveRoom($options = [])
 * @method KickOut kickOut($options = [])
 * @method JoinRoom joinRoom($options = [])
 * @method ForbidSendMessage forbidSendMessage($options = [])
 * @method ForbidPushStream forbidPushStream($options = [])
 * @method ForbidAllSendMessage forbidAllSendMessage($options = [])
 * @method DescribeRoomTokenId describeRoomTokenId($options = [])
 * @method DescribeRoomMessages describeRoomMessages($options = [])
 * @method DescribeRoomInfo describeRoomInfo($options = [])
 * @method DeleteRoom deleteRoom($options = [])
 * @method CreateRoom createRoom($options = [])
 * @method CreateApp createApp($options = [])
 * @method AllowSendMessage allowSendMessage($options = [])
 * @method AllowPushStream allowPushStream($options = [])
 * @method AllowAllSendMessage allowAllSendMessage($options = [])
 * @method DescribeLiveUserDomains describeLiveUserDomains($options = [])
 * @method DescribeCasterRtcInfo describeCasterRtcInfo($options = [])
 * @method DescribeLiveDomainOriginBpsData describeLiveDomainOriginBpsData($options = [])
 * @method DescribeLiveDomainHttpCodeData describeLiveDomainHttpCodeData($options = [])
 * @method DescribeLiveDomainPvUvData describeLiveDomainPvUvData($options = [])
 * @method DescribeUpBpsPeakData describeUpBpsPeakData($options = [])
 * @method DescribeUpBpsPeakOfLine describeUpBpsPeakOfLine($options = [])
 * @method DescribeUpPeakPublishStreamData describeUpPeakPublishStreamData($options = [])
 * @method DescribeLiveDomainOriginTrafficData describeLiveDomainOriginTrafficData($options = [])
 * @method DescribeLiveDomainRegionData describeLiveDomainRegionData($options = [])
 * @method DescribeLiveStreamData describeLiveStreamData($options = [])
 * @method DescribeLiveDomainCname describeLiveDomainCname($options = [])
 * @method DeleteLiveDomainMapping deleteLiveDomainMapping($options = [])
 * @method AddLiveDomainMapping addLiveDomainMapping($options = [])
 * @method DescribeLiveSpecificDomainMapping describeLiveSpecificDomainMapping($options = [])
 * @method UpdateLivePullStreamInfoConfig updateLivePullStreamInfoConfig($options = [])
 * @method DescribeLiveStreamAppStreams describeLiveStreamAppStreams($options = [])
 * @method DescribeLiveBlackListAppStreams describeLiveBlackListAppStreams($options = [])
 * @method DescribeUserLiveStatus describeUserLiveStatus($options = [])
 * @method DescribeUserBillingInfo describeUserBillingInfo($options = [])
 * @method LiveDetectFeedback liveDetectFeedback($options = [])
 * @method DescribeLiveRegions describeLiveRegions($options = [])
 * @method DescribeLiveDiamondValue describeLiveDiamondValue($options = [])
 * @method AddCasterEpisodeGroupContent addCasterEpisodeGroupContent($options = [])
 * @method DescribeLiveResourcePackage describeLiveResourcePackage($options = [])
 * @method ModifyCasterProgram modifyCasterProgram($options = [])
 * @method ModifyCasterEpisode modifyCasterEpisode($options = [])
 * @method DescribeCasterProgram describeCasterProgram($options = [])
 * @method DeleteCasterProgram deleteCasterProgram($options = [])
 * @method DeleteCasterEpisodeGroup deleteCasterEpisodeGroup($options = [])
 * @method DeleteCasterEpisode deleteCasterEpisode($options = [])
 * @method AddCasterProgram addCasterProgram($options = [])
 * @method AddCasterEpisodeGroup addCasterEpisodeGroup($options = [])
 * @method AddCasterEpisode addCasterEpisode($options = [])
 * @method DescribeLiveDomainTranscodeData describeLiveDomainTranscodeData($options = [])
 * @method DescribeLiveDomainSnapshotData describeLiveDomainSnapshotData($options = [])
 * @method DescribeLiveDomainRecordData describeLiveDomainRecordData($options = [])
 * @method RealTimeRecordCommand realTimeRecordCommand($options = [])
 * @method DescribeLiveAudit describeLiveAudit($options = [])
 * @method DescribeLiveDomainTrafficData describeLiveDomainTrafficData($options = [])
 * @method DescribeLiveDomainBpsData describeLiveDomainBpsData($options = [])
 * @method DescribeBlackListByStreamName describeBlackListByStreamName($options = [])
 * @method AddTrancodeSEI addTrancodeSEI($options = [])
 * @method SetLiveShiftVision setLiveShiftVision($options = [])
 * @method SetLiveShiftAuth setLiveShiftAuth($options = [])
 * @method OpenLiveShift openLiveShift($options = [])
 * @method DescribeLiveShiftStatus describeLiveShiftStatus($options = [])
 * @method DeleteCasterSceneConfig deleteCasterSceneConfig($options = [])
 * @method AddCustomLiveStreamTranscode addCustomLiveStreamTranscode($options = [])
 * @method DescribeLiveDetectResultDigest describeLiveDetectResultDigest($options = [])
 * @method DescribeLiveDetectResultDetail describeLiveDetectResultDetail($options = [])
 * @method DescribeLiveRecordVodConfigs describeLiveRecordVodConfigs($options = [])
 * @method DeleteLiveRecordVodConfig deleteLiveRecordVodConfig($options = [])
 * @method AddLiveRecordVodConfig addLiveRecordVodConfig($options = [])
 * @method ModifyCasterComponent modifyCasterComponent($options = [])
 * @method DescribeCasterComponents describeCasterComponents($options = [])
 * @method DeleteCasterComponent deleteCasterComponent($options = [])
 * @method AddCasterComponent addCasterComponent($options = [])
 * @method StopCaster stopCaster($options = [])
 * @method StartCaster startCaster($options = [])
 * @method OpenLiveService openLiveService($options = [])
 * @method ModifyLiveService modifyLiveService($options = [])
 * @method DescribeLiveStreamHistoryUserNum describeLiveStreamHistoryUserNum($options = [])
 * @method UpdateCasterSceneConfig updateCasterSceneConfig($options = [])
 * @method StopCasterScene stopCasterScene($options = [])
 * @method StartCasterScene startCasterScene($options = [])
 * @method SetCasterSceneConfig setCasterSceneConfig($options = [])
 * @method SetCasterConfig setCasterConfig($options = [])
 * @method PayOrderCallback payOrderCallback($options = [])
 * @method ModifyCasterVideoResource modifyCasterVideoResource($options = [])
 * @method ModifyCasterLayout modifyCasterLayout($options = [])
 * @method EffectCasterVideoResource effectCasterVideoResource($options = [])
 * @method EffectCasterUrgent effectCasterUrgent($options = [])
 * @method DescribeCasterVideoResources describeCasterVideoResources($options = [])
 * @method DescribeCasterStreamUrl describeCasterStreamUrl($options = [])
 * @method DescribeCasterScenes describeCasterScenes($options = [])
 * @method DescribeCasters describeCasters($options = [])
 * @method DescribeCasterLayouts describeCasterLayouts($options = [])
 * @method DescribeCasterConfig describeCasterConfig($options = [])
 * @method DeleteCasterVideoResource deleteCasterVideoResource($options = [])
 * @method DeleteCasterScene deleteCasterScene($options = [])
 * @method DeleteCasterLayout deleteCasterLayout($options = [])
 * @method DeleteCaster deleteCaster($options = [])
 * @method CreateCasterScene createCasterScene($options = [])
 * @method CreateCaster createCaster($options = [])
 * @method CopyCasterSceneConfig copyCasterSceneConfig($options = [])
 * @method CopyCaster copyCaster($options = [])
 * @method AddCasterVideoResource addCasterVideoResource($options = [])
 * @method AddCasterLayout addCasterLayout($options = [])
 * @method DeletePrivateLineConfig deletePrivateLineConfig($options = [])
 * @method DescribePrivateLineConfigs describePrivateLineConfigs($options = [])
 * @method AddPrivateLineConfig addPrivateLineConfig($options = [])
 * @method DescribeLiveStreamRealTimeBpsData describeLiveStreamRealTimeBpsData($options = [])
 * @method UpdateLiveEditorNotifyConfig updateLiveEditorNotifyConfig($options = [])
 * @method UpdateLiveEditorCanvas updateLiveEditorCanvas($options = [])
 * @method StopLiveEditor stopLiveEditor($options = [])
 * @method StartLiveEditor startLiveEditor($options = [])
 * @method SetLiveEditorScene setLiveEditorScene($options = [])
 * @method ModifyLiveEditorLayout modifyLiveEditorLayout($options = [])
 * @method DescribeLiveEditorTranscodeTemplates describeLiveEditorTranscodeTemplates($options = [])
 * @method DescribeLiveEditorNotifyConfig describeLiveEditorNotifyConfig($options = [])
 * @method DescribeLiveEditorConfig describeLiveEditorConfig($options = [])
 * @method DeleteLiveEditorNotifyConfig deleteLiveEditorNotifyConfig($options = [])
 * @method DeleteLiveEditorConfig deleteLiveEditorConfig($options = [])
 * @method DeleteLiveEditorCanvas deleteLiveEditorCanvas($options = [])
 * @method AddLiveEditorNotifyConfig addLiveEditorNotifyConfig($options = [])
 * @method AddLiveEditorConfig addLiveEditorConfig($options = [])
 * @method AddLiveEditorCanvas addLiveEditorCanvas($options = [])
 * @method DescribeLivePullStreamConfig describeLivePullStreamConfig($options = [])
 * @method DeleteLivePullStreamInfoConfig deleteLivePullStreamInfoConfig($options = [])
 * @method AddLivePullStreamInfoConfig addLivePullStreamInfoConfig($options = [])
 * @method DescribeLiveStreamBitRateData describeLiveStreamBitRateData($options = [])
 * @method AddLiveDetectNotifyConfig addLiveDetectNotifyConfig($options = [])
 * @method AddLiveSnapshotDetectPornConfig addLiveSnapshotDetectPornConfig($options = [])
 * @method DeleteLiveDetectNotifyConfig deleteLiveDetectNotifyConfig($options = [])
 * @method DescribeLiveDetectNotifyConfig describeLiveDetectNotifyConfig($options = [])
 * @method DeleteLiveSnapshotDetectPornConfig deleteLiveSnapshotDetectPornConfig($options = [])
 * @method DescribeLiveSnapshotDetectPornConfig describeLiveSnapshotDetectPornConfig($options = [])
 * @method UpdateLiveDetectNotifyConfig updateLiveDetectNotifyConfig($options = [])
 * @method UpdateLiveSnapshotDetectPornConfig updateLiveSnapshotDetectPornConfig($options = [])
 * @method AddLiveEditNotifyConfig addLiveEditNotifyConfig($options = [])
 * @method AddLiveEditConfig addLiveEditConfig($options = [])
 * @method DeleteLiveEditNotifyConfig deleteLiveEditNotifyConfig($options = [])
 * @method DeleteLiveEditConfig deleteLiveEditConfig($options = [])
 * @method DescribeLiveEditNotifyConfig describeLiveEditNotifyConfig($options = [])
 * @method DescribeLiveEditConfig describeLiveEditConfig($options = [])
 * @method EditScreenPictures editScreenPictures($options = [])
 * @method EditScreenTexts editScreenTexts($options = [])
 * @method UpdateLiveEditNotifyConfig updateLiveEditNotifyConfig($options = [])
 * @method StopStreamIntercut stopStreamIntercut($options = [])
 * @method StartStreamIntercut startStreamIntercut($options = [])
 * @method DescribeLiveDomains describeLiveDomains($options = [])
 * @method OrderModifySucceededCallback orderModifySucceededCallback($options = [])
 * @method AddLiveMixConfig addLiveMixConfig($options = [])
 * @method DeleteLiveMixConfig deleteLiveMixConfig($options = [])
 * @method DescribeLiveMixConfig describeLiveMixConfig($options = [])
 * @method AddLiveMixNotifyConfig addLiveMixNotifyConfig($options = [])
 * @method DeleteLiveMixNotifyConfig deleteLiveMixNotifyConfig($options = [])
 * @method DescribeLiveMixNotifyConfig describeLiveMixNotifyConfig($options = [])
 * @method UpdateLiveMixNotifyConfig updateLiveMixNotifyConfig($options = [])
 * @method AddLiveRecordNotifyConfig addLiveRecordNotifyConfig($options = [])
 * @method DeleteLiveStreamsNotifyUrlConfig deleteLiveStreamsNotifyUrlConfig($options = [])
 * @method DeleteLiveRecordNotifyConfig deleteLiveRecordNotifyConfig($options = [])
 * @method DescribeLiveRecordNotifyConfig describeLiveRecordNotifyConfig($options = [])
 * @method DescribeLiveStreamsNotifyUrlConfig describeLiveStreamsNotifyUrlConfig($options = [])
 * @method UpdateLiveRecordNotifyConfig updateLiveRecordNotifyConfig($options = [])
 * @method OrderSucceededCallback orderSucceededCallback($options = [])
 * @method DescribeLiveStreamsBlockList describeLiveStreamsBlockList($options = [])
 * @method DescribeLiveStreamOnlineUserNum describeLiveStreamOnlineUserNum($options = [])
 * @method DescribeLiveStreamsPublishList describeLiveStreamsPublishList($options = [])
 * @method DescribeLiveStreamsOnlineList describeLiveStreamsOnlineList($options = [])
 * @method DescribeLiveStreamsControlHistory describeLiveStreamsControlHistory($options = [])
 * @method AddLiveStreamTranscode addLiveStreamTranscode($options = [])
 * @method DeleteLiveStreamTranscode deleteLiveStreamTranscode($options = [])
 * @method DescribeLiveStreamsFrameRateAndBitRateData describeLiveStreamsFrameRateAndBitRateData($options = [])
 * @method ForbidLiveStream forbidLiveStream($options = [])
 * @method DescribeLiveStreamTranscodeInfo describeLiveStreamTranscodeInfo($options = [])
 * @method StopMixStreamsService stopMixStreamsService($options = [])
 * @method StartMixStreamsService startMixStreamsService($options = [])
 * @method SetLiveStreamsNotifyUrlConfig setLiveStreamsNotifyUrlConfig($options = [])
 * @method ResumeLiveStream resumeLiveStream($options = [])
 * @method ImageDetection imageDetection($options = [])
 * @method AddLiveAppSnapshotConfig addLiveAppSnapshotConfig($options = [])
 * @method AddLiveAppRecordConfig addLiveAppRecordConfig($options = [])
 * @method DescribeLiveRecordConfig describeLiveRecordConfig($options = [])
 * @method DeleteLiveAppSnapshotConfig deleteLiveAppSnapshotConfig($options = [])
 * @method DeleteLiveAppRecordConfig deleteLiveAppRecordConfig($options = [])
 * @method CreateLiveStreamRecordIndexFiles createLiveStreamRecordIndexFiles($options = [])
 * @method DescribeLiveStreamSnapshotInfo describeLiveStreamSnapshotInfo($options = [])
 * @method DescribeLiveStreamRecordIndexFiles describeLiveStreamRecordIndexFiles($options = [])
 * @method DescribeLiveStreamRecordIndexFile describeLiveStreamRecordIndexFile($options = [])
 * @method DescribeLiveStreamRecordContent describeLiveStreamRecordContent($options = [])
 * @method DescribeLiveSnapshotConfig describeLiveSnapshotConfig($options = [])
 * @method UpdateLiveAppSnapshotConfig updateLiveAppSnapshotConfig($options = [])
 * @method AddMultipleStreamMixService addMultipleStreamMixService($options = [])
 * @method StopMultipleStreamMixService stopMultipleStreamMixService($options = [])
 * @method StartMultipleStreamMixService startMultipleStreamMixService($options = [])
 * @method RemoveMultipleStreamMixService removeMultipleStreamMixService($options = [])
 * @method ImagePornDetection imagePornDetection($options = [])
 */
class V20161101
{
    use ApiResolverTrait;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getAuthKey
 * @method self withAuthKey(string $authKey)
 * @method string getAuthSwitch
 * @method self withAuthSwitch(string $authSwitch)
 * @method Integer getCallbackEnable
 * @method self withCallbackEnable(Integer $callbackEnable)
 * @method string getCallbackUri
 * @method self withCallbackUri(string $callbackUri)
 * @method string getCallbackEvents
 * @method self withCallbackEvents(string $callbackEvents)
 */
class SetBoardCallback extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getRecordState
 * @method self withRecordState(string $recordState)
 */
class DescribeRecords extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getRecordId
 * @method self withRecordId(string $recordId)
 */
class DescribeRecord extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getRecordId
 * @method self withRecordId(string $recordId)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class CompleteBoardRecord extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getBoardId
 * @method self withBoardId(string $boardId)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 */
class StartBoardRecord extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 */
class ApplyRecordToken extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getAuthKey
 * @method self withAuthKey(string $authKey)
 * @method string getAuthSwitch
 * @method self withAuthSwitch(string $authSwitch)
 * @method Integer getCallbackEnable
 * @method self withCallbackEnable(Integer $callbackEnable)
 * @method string getCallbackUri
 * @method self withCallbackUri(string $callbackUri)
 * @method string getCallbackEvents
 * @method self withCallbackEvents(string $callbackEvents)
 */
class UpdateBoardCallback extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 */
class SetUserDomainAuthClose extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 */
class DescribeLiveUserQuota extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class DescribeLiveDomainMapping extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getQueryTime
 * @method self withQueryTime(string $queryTime)
 */
class DescribeLiveStreamCheatData extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 */
class DescribeIlvbRecordConfig extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 */
class DeleteIlvbRecordConfig extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getRoomId
 * @method self withRoomId(string $roomId)
 * @method string getAppUid
 * @method self withAppUid(string $appUid)
 */
class StopIlvbRealTimeRecord extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getRoomId
 * @method self withRoomId(string $roomId)
 * @method string getAppUid
 * @method self withAppUid(string $appUid)
 */
class StartIlvbRealTimeRecord extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getVodTranscodeGroupId
 * @method self withVodTranscodeGroupId(string $vodTranscodeGroupId)
 * @method Integer getOnDemand
 * @method self withOnDemand(Integer $onDemand)
 */
class AddIlvbRecordConfig extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getRoomId
 * @method self withRoomId(string $roomId)
 * @method string getAppUid
 * @method self withAppUid(string $appUid)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeIlvbRecordList extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getStreamName
 * @method self withStreamName(string $streamName)
 * @method string getTaskId
 * @method self withTaskId(string $taskId)
 */
class StopLiveIndex extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getStreamName
 * @method self withStreamName(string $streamName)
 * @method string getTokenId
 * @method self withTokenId(string $tokenId)
 * @method string getInputUrl
 * @method self withInputUrl(string $inputUrl)
 * @method Integer getInterval
 * @method self withInterval(Integer $interval)
 * @method string getOssBucket
 * @method self withOssBucket(string $ossBucket)
 * @method string getOssEndpoint
 * @method self withOssEndpoint(string $ossEndpoint)
 * @method string getOssUserId
 * @method self withOssUserId(string $ossUserId)
 * @method string getOssRamRole
 * @method self withOssRamRole(string $ossRamRole)
 */
class StartLiveIndex extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getOrder
 * @method self withOrder(string $order)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeIlvbTranscodeConfigList extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getTemplateId
 * @method self withTemplateId(string $templateId)
 */
class EnableDefaultIlvbTranscodeConfig extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getTemplateId
 * @method self withTemplateId(string $templateId)
 */
class DisableDefaultIlvbTranscodeConfig extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getTemplateId
 * @method self withTemplateId(string $templateId)
 * @method string getTemplateName
 * @method self withTemplateName(string $templateName)
 * @method string getTemplateDescription
 * @method self withTemplateDescription(string $templateDescription)
 * @method string getTemplateType
 * @method self withTemplateType(string $templateType)
 * @method Integer getHeight
 * @method self withHeight(Integer $height)
 * @method Integer getWidth
 * @method self withWidth(Integer $width)
 * @method Integer getVideoBitRate
 * @method self withVideoBitRate(Integer $videoBitRate)
 * @method Integer getAudioBitRate
 * @method self withAudioBitRate(Integer $audioBitRate)
 * @method Integer getFps
 * @method self withFps(Integer $fps)
 * @method Integer getGop
 * @method self withGop(Integer $gop)
 * @method bool getDefaultUseTemplate
 * @method self withDefaultUseTemplate(bool $defaultUseTemplate)
 */
class UpdateIlvbTranscodeConfig extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getTemplateId
 * @method self withTemplateId(string $templateId)
 * @method string getTemplateName
 * @method self withTemplateName(string $templateName)
 * @method string getTemplateDescription
 * @method self withTemplateDescription(string $templateDescription)
 * @method string getTemplateType
 * @method self withTemplateType(string $templateType)
 * @method Integer getHeight
 * @method self withHeight(Integer $height)
 * @method Integer getWidth
 * @method self withWidth(Integer $width)
 * @method Integer getVideoBitRate
 * @method self withVideoBitRate(Integer $videoBitRate)
 * @method Integer getAudioBitRate
 * @method self withAudioBitRate(Integer $audioBitRate)
 * @method Integer getFps
 * @method self withFps(Integer $fps)
 * @method Integer getGop
 * @method self withGop(Integer $gop)
 * @method bool getDefaultUseTemplate
 * @method self withDefaultUseTemplate(bool $defaultUseTemplate)
 */
class AddIlvbTranscodeConfig extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getTemplateId
 * @method self withTemplateId(string $templateId)
 */
class DeleteIlvbTranscodeConfig extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getRoomId
 * @method self withRoomId(string $roomId)
 * @method string getTemplateIds
 * @method self withTemplateIds(string $templateIds)
 * @method bool getUseDefaultTranscode
 * @method self withUseDefaultTranscode(bool $useDefaultTranscode)
 */
class UpdateRoomIlvbTranscodeConfig extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class CheckSnapshotStatus extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getCommand
 * @method self withCommand(string $command)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getStreamName
 * @method self withStreamName(string $streamName)
 * @method Integer getMode
 * @method self withMode(Integer $mode)
 * @method Integer getInterval
 * @method self withInterval(Integer $interval)
 */
class RealTimeSnapshotCommand extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 */
class DescribeLiveService extends Rpc
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
 * @method int getLimit
 * @method self withLimit(int $limit)
 */
class DescribeLiveTopDomainsByFlow extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeLiveDomainMax95BpsData extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getIspNameEn
 * @method self withIspNameEn(string $ispNameEn)
 * @method string getLocationNameEn
 * @method self withLocationNameEn(string $locationNameEn)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeLiveDomainRealTimeBpsData extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getIspNameEn
 * @method self withIspNameEn(string $ispNameEn)
 * @method string getLocationNameEn
 * @method self withLocationNameEn(string $locationNameEn)
 */
class DescribeLiveDomainRealTimeHttpCodeData extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getIspNameEn
 * @method self withIspNameEn(string $ispNameEn)
 * @method string getLocationNameEn
 * @method self withLocationNameEn(string $locationNameEn)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeLiveDomainRealTimeTrafficData extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 * @method int getPageNumber
 * @method self withPageNumber(int $pageNumber)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeLiveTranscodeLog extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getStreamName
 * @method self withStreamName(string $streamName)
 * @method string getField
 * @method self withField(string $field)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getQueryType
 * @method self withQueryType(string $queryType)
 * @method string getStreamType
 * @method self withStreamType(string $streamType)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 */
class DescribeLiveStreamUniversalAppStreams extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getPlayDomain
 * @method self withPlayDomain(string $playDomain)
 * @method string getPullDomain
 * @method self withPullDomain(string $pullDomain)
 */
class DeleteLiveDomainPlayMapping extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getPlayDomain
 * @method self withPlayDomain(string $playDomain)
 * @method string getPullDomain
 * @method self withPullDomain(string $pullDomain)
 */
class AddLiveDomainPlayMapping extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getPageSize
 * @method self withPageSize(string $pageSize)
 * @method string getPageNumber
 * @method self withPageNumber(string $pageNumber)
 */
class DescribeUserUsageDetailDataExportTask extends Rpc
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
 * @method string getGroup
 * @method self withGroup(string $group)
 * @method string getDomainNames
 * @method self withDomainNames(string $domainNames)
 * @method string getDimension
 * @method self withDimension(string $dimension)
 * @method string getTaskName
 * @method self withTaskName(string $taskName)
 */
class CreateUsageDetailDataExportTask extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getStream
 * @method self withStream(string $stream)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeLiveUpVideoAudioInfo extends Rpc
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
 * @method string getAppType
 * @method self withAppType(string $appType)
 * @method string getPushDomain
 * @method self withPushDomain(string $pushDomain)
 * @method string getPlayDomain
 * @method self withPlayDomain(string $playDomain)
 * @method string getRtcAppId
 * @method self withRtcAppId(string $rtcAppId)
 * @method bool getDefaultTranscode
 * @method self withDefaultTranscode(bool $defaultTranscode)
 */
class ModifyApp extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 */
class DescribeIlvbRegions extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 */
class DeleteApp extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 * @method int getPageNumber
 * @method self withPageNumber(int $pageNumber)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeTranscodeLog extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getBoardId
 * @method self withBoardId(string $boardId)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeClientList extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getBoardId
 * @method self withBoardId(string $boardId)
 */
class DescribeClientCount extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getRegionName
 * @method self withRegionName(string $regionName)
 * @method string getOrder
 * @method self withOrder(string $order)
 */
class DescribeApps extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 */
class DeleteLiveLazyPullStreamInfoConfig extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 */
class DescribeLiveLazyPullStreamConfig extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getPullDomainName
 * @method self withPullDomainName(string $pullDomainName)
 * @method string getPullAppName
 * @method self withPullAppName(string $pullAppName)
 * @method string getPullProtocol
 * @method self withPullProtocol(string $pullProtocol)
 * @method string getPullAuthType
 * @method self withPullAuthType(string $pullAuthType)
 * @method string getPullAuthKey
 * @method self withPullAuthKey(string $pullAuthKey)
 */
class SetLiveLazyPullStreamInfoConfig extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getCasterId
 * @method self withCasterId(string $casterId)
 * @method string getSceneId
 * @method self withSceneId(string $sceneId)
 * @method Integer getFollowEnable
 * @method self withFollowEnable(Integer $followEnable)
 * @method array getAudioLayer
 * @method self withAudioLayer(array $audioLayer)
 * @method array getMixList
 * @method self withMixList(array $mixList)
 */
class UpdateCasterSceneAudio extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getCasterId
 * @method self withCasterId(string $casterId)
 * @method string getChannelId
 * @method self withChannelId(string $channelId)
 * @method string getResourceId
 * @method self withResourceId(string $resourceId)
 * @method Integer getSeekOffset
 * @method self withSeekOffset(Integer $seekOffset)
 * @method Integer getPlayStatus
 * @method self withPlayStatus(Integer $playStatus)
 */
class SetCasterChannel extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getCasterId
 * @method self withCasterId(string $casterId)
 * @method string getSceneId
 * @method self withSceneId(string $sceneId)
 */
class DescribeCasterSceneAudio extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getCasterId
 * @method self withCasterId(string $casterId)
 */
class DescribeCasterChannels extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getBoardData
 * @method self withBoardData(string $boardData)
 */
class UpdateBoard extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getAppUid
 * @method self withAppUid(string $appUid)
 * @method string getBoardId
 * @method self withBoardId(string $boardId)
 */
class JoinBoard extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getBoardId
 * @method self withBoardId(string $boardId)
 */
class DescribeBoardSnapshot extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeBoards extends Rpc
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
 * @method string getBoardId
 * @method self withBoardId(string $boardId)
 */
class DescribeBoardEvents extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getBoardId
 * @method self withBoardId(string $boardId)
 */
class DeleteBoard extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 */
class CreateBoardApp extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getAppUid
 * @method self withAppUid(string $appUid)
 */
class CreateBoard extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getBoardId
 * @method self withBoardId(string $boardId)
 */
class CompleteBoard extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getAppUid
 * @method self withAppUid(string $appUid)
 * @method string getBoardId
 * @method self withBoardId(string $boardId)
 */
class ApplyBoardToken extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getQueryTime
 * @method self withQueryTime(string $queryTime)
 */
class DescribeLiveStreamsPublishAndOnlineData extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getArea
 * @method self withArea(string $area)
 * @method string getField
 * @method self withField(string $field)
 * @method string getInterval
 * @method self withInterval(string $interval)
 */
class DescribeDomainUsageData extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getRoomId
 * @method self withRoomId(string $roomId)
 * @method string getAppUid
 * @method self withAppUid(string $appUid)
 * @method string getUserData
 * @method self withUserData(string $userData)
 */
class UnlinkMic extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getRoomId
 * @method self withRoomId(string $roomId)
 * @method string getAppUid
 * @method self withAppUid(string $appUid)
 * @method string getAppRequestId
 * @method self withAppRequestId(string $appRequestId)
 * @method string getAppTargetUid
 * @method self withAppTargetUid(string $appTargetUid)
 * @method string getUserData
 * @method self withUserData(string $userData)
 */
class RequestLinkMic extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getRoomId
 * @method self withRoomId(string $roomId)
 * @method string getAppUid
 * @method self withAppUid(string $appUid)
 * @method string getAppRequestId
 * @method self withAppRequestId(string $appRequestId)
 * @method string getAppTargetUid
 * @method self withAppTargetUid(string $appTargetUid)
 * @method string getUserData
 * @method self withUserData(string $userData)
 */
class RejectLinkMic extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getRoomId
 * @method self withRoomId(string $roomId)
 * @method string getAppUid
 * @method self withAppUid(string $appUid)
 * @method string getAppTargetUid
 * @method self withAppTargetUid(string $appTargetUid)
 * @method string getUserData
 * @method self withUserData(string $userData)
 */
class LinkMic extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getRoomId
 * @method self withRoomId(string $roomId)
 * @method string getAppUid
 * @method self withAppUid(string $appUid)
 * @method string getAppTargetUid
 * @method self withAppTargetUid(string $appTargetUid)
 * @method string getUserData
 * @method self withUserData(string $userData)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class KickoutLinkMic extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getRoomId
 * @method self withRoomId(string $roomId)
 * @method string getAppUid
 * @method self withAppUid(string $appUid)
 */
class DescribeLinkMicInfo extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getRoomId
 * @method self withRoomId(string $roomId)
 * @method string getAppUid
 * @method self withAppUid(string $appUid)
 * @method string getCancelRequestId
 * @method self withCancelRequestId(string $cancelRequestId)
 * @method string getAppTargetUid
 * @method self withAppTargetUid(string $appTargetUid)
 * @method string getUserData
 * @method self withUserData(string $userData)
 */
class CancelLinkMic extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getRoomId
 * @method self withRoomId(string $roomId)
 * @method string getAppUid
 * @method self withAppUid(string $appUid)
 * @method string getAppRequestId
 * @method self withAppRequestId(string $appRequestId)
 * @method string getAppTargetUid
 * @method self withAppTargetUid(string $appTargetUid)
 * @method string getUserData
 * @method self withUserData(string $userData)
 */
class AcceptLinkMic extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class DescribeLiveStreamCount extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getCertName
 * @method self withCertName(string $certName)
 */
class DescribeLiveCertificateDetail extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getSources
 * @method self withSources(string $sources)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 */
class UpdateLiveDomain extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getTime
 * @method self withTime(string $time)
 */
class DescribeHlsLiveStreamRealTimeBpsData extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class StopLiveDomain extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainNames
 * @method self withDomainNames(string $domainNames)
 */
class BatchStopLiveDomain extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getConfigId
 * @method self withConfigId(string $configId)
 */
class DeleteLiveSpecificConfig extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class StartLiveDomain extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainNames
 * @method self withDomainNames(string $domainNames)
 */
class BatchStartLiveDomain extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getCertName
 * @method self withCertName(string $certName)
 * @method string getSSLProtocol
 * @method self withSSLProtocol(string $sSLProtocol)
 * @method string getSSLPub
 * @method self withSSLPub(string $sSLPub)
 * @method string getSSLPri
 * @method self withSSLPri(string $sSLPri)
 */
class SetLiveDomainCertificate extends Rpc
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
 * @method string getDomainNames
 * @method self withDomainNames(string $domainNames)
 * @method string getFunctions
 * @method self withFunctions(string $functions)
 */
class BatchSetLiveDomainConfigs extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class DescribeLiveCertificateList extends Rpc
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
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class DeleteLiveDomain extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getFunctionNames
 * @method self withFunctionNames(string $functionNames)
 */
class DescribeLiveDomainConfigs extends Rpc
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
 * @method string getLiveDomainType
 * @method self withLiveDomainType(string $liveDomainType)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getRegion
 * @method self withRegion(string $region)
 * @method string getCheckUrl
 * @method self withCheckUrl(string $checkUrl)
 * @method string getScope
 * @method self withScope(string $scope)
 * @method string getTopLevelDomain
 * @method self withTopLevelDomain(string $topLevelDomain)
 */
class AddLiveDomain extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class DescribeLiveDomainDetail extends Rpc
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
 * @method string getDomainNames
 * @method self withDomainNames(string $domainNames)
 * @method string getFunctionNames
 * @method self withFunctionNames(string $functionNames)
 */
class BatchDeleteLiveDomainConfigs extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getStreamName
 * @method self withStreamName(string $streamName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getOrderBy
 * @method self withOrderBy(string $orderBy)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 */
class DescribeLiveStreamBlackList extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getRoomId
 * @method self withRoomId(string $roomId)
 */
class DescribeRoomStatus extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getRoomId
 * @method self withRoomId(string $roomId)
 */
class DescribePlayInfo extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getRoomId
 * @method self withRoomId(string $roomId)
 * @method string getAnchorId
 * @method self withAnchorId(string $anchorId)
 * @method Integer getRoomStatus
 * @method self withRoomStatus(Integer $roomStatus)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getOrder
 * @method self withOrder(string $order)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeRoomList extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getRoomId
 * @method self withRoomId(string $roomId)
 * @method string getOrder
 * @method self withOrder(string $order)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeRoomKickoutUserList extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getRoomId
 * @method self withRoomId(string $roomId)
 * @method string getAppUid
 * @method self withAppUid(string $appUid)
 * @method string getOpAppUid
 * @method self withOpAppUid(string $opAppUid)
 */
class RelieveKickout extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getRoomId
 * @method self withRoomId(string $roomId)
 * @method string getAppUid
 * @method self withAppUid(string $appUid)
 * @method string getForbidAppUid
 * @method self withForbidAppUid(string $forbidAppUid)
 */
class AllowRoomChat extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getRoomId
 * @method self withRoomId(string $roomId)
 * @method string getAppUid
 * @method self withAppUid(string $appUid)
 */
class QuitRoom extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getRoomId
 * @method self withRoomId(string $roomId)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeForbidRoomChatList extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getRoomId
 * @method self withRoomId(string $roomId)
 * @method string getAppUid
 * @method self withAppUid(string $appUid)
 */
class DownMic extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getRoomId
 * @method self withRoomId(string $roomId)
 * @method Integer getCount
 * @method self withCount(Integer $count)
 */
class Like extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getRoomId
 * @method self withRoomId(string $roomId)
 * @method string getAppUid
 * @method self withAppUid(string $appUid)
 */
class ApplyToken extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getRoomId
 * @method self withRoomId(string $roomId)
 * @method string getAppUid
 * @method self withAppUid(string $appUid)
 * @method string getToAppUid
 * @method self withToAppUid(string $toAppUid)
 * @method string getData
 * @method self withData(string $data)
 * @method Integer getPriority
 * @method self withPriority(Integer $priority)
 */
class SendRoomUserNotification extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getRoomId
 * @method self withRoomId(string $roomId)
 */
class DescribeLikeInfo extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getOrder
 * @method self withOrder(string $order)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeForbidPushStreamRoomList extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getRoomId
 * @method self withRoomId(string $roomId)
 * @method string getAppUid
 * @method self withAppUid(string $appUid)
 * @method string getData
 * @method self withData(string $data)
 * @method Integer getPriority
 * @method self withPriority(Integer $priority)
 */
class SendRoomNotification extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getRoomId
 * @method self withRoomId(string $roomId)
 * @method string getAppUid
 * @method self withAppUid(string $appUid)
 * @method string getUserRole
 * @method self withUserRole(string $userRole)
 */
class EnterRoom extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getRoomId
 * @method self withRoomId(string $roomId)
 * @method string getAppUid
 * @method self withAppUid(string $appUid)
 */
class DescribePushInfo extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getAppUid
 * @method self withAppUid(string $appUid)
 * @method string getRoomId
 * @method self withRoomId(string $roomId)
 * @method string getContent
 * @method self withContent(string $content)
 * @method string getUserData
 * @method self withUserData(string $userData)
 */
class SendRoomChat extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getRoomId
 * @method self withRoomId(string $roomId)
 * @method string getAppUid
 * @method self withAppUid(string $appUid)
 */
class UpMic extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getRoomId
 * @method self withRoomId(string $roomId)
 */
class DescribeRoomChatHistory extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getRoomId
 * @method self withRoomId(string $roomId)
 * @method string getAppUid
 * @method self withAppUid(string $appUid)
 * @method string getForbidAppUid
 * @method self withForbidAppUid(string $forbidAppUid)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class ForbidRoomChat extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 * @method int getPageNumber
 * @method self withPageNumber(int $pageNumber)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeLiveDomainLog extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getTimeMerge
 * @method self withTimeMerge(string $timeMerge)
 * @method string getInterval
 * @method self withInterval(string $interval)
 * @method string getFixTimeGap
 * @method self withFixTimeGap(string $fixTimeGap)
 * @method string getIspNameEn
 * @method self withIspNameEn(string $ispNameEn)
 * @method string getLocationNameEn
 * @method self withLocationNameEn(string $locationNameEn)
 */
class DescribeLiveDomainQpsData extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getInterval
 * @method self withInterval(string $interval)
 */
class DescribeLiveDomainHitRateData extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribePrivateLineArea extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getRoomId
 * @method self withRoomId(string $roomId)
 * @method string getAppUid
 * @method self withAppUid(string $appUid)
 */
class LeaveRoom extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getRoomId
 * @method self withRoomId(string $roomId)
 * @method string getAppUid
 * @method self withAppUid(string $appUid)
 * @method string getOpAppUid
 * @method self withOpAppUid(string $opAppUid)
 * @method string getUserData
 * @method self withUserData(string $userData)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class KickOut extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getRoomId
 * @method self withRoomId(string $roomId)
 * @method string getAppUid
 * @method self withAppUid(string $appUid)
 * @method string getAppOptionInfo
 * @method self withAppOptionInfo(string $appOptionInfo)
 * @method Integer getUserRole
 * @method self withUserRole(Integer $userRole)
 */
class JoinRoom extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getRoomId
 * @method self withRoomId(string $roomId)
 * @method string getAppUid
 * @method self withAppUid(string $appUid)
 * @method string getExpireTime
 * @method self withExpireTime(string $expireTime)
 */
class ForbidSendMessage extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getRoomId
 * @method self withRoomId(string $roomId)
 * @method string getUserData
 * @method self withUserData(string $userData)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class ForbidPushStream extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getRoomId
 * @method self withRoomId(string $roomId)
 * @method string getExpireTime
 * @method self withExpireTime(string $expireTime)
 */
class ForbidAllSendMessage extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getRoomId
 * @method self withRoomId(string $roomId)
 * @method string getAppUid
 * @method self withAppUid(string $appUid)
 */
class DescribeRoomTokenId extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getRoomId
 * @method self withRoomId(string $roomId)
 * @method string getOrder
 * @method self withOrder(string $order)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeRoomMessages extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getRoomId
 * @method self withRoomId(string $roomId)
 */
class DescribeRoomInfo extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getRoomId
 * @method self withRoomId(string $roomId)
 */
class DeleteRoom extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getRoomId
 * @method self withRoomId(string $roomId)
 * @method string getAnchorId
 * @method self withAnchorId(string $anchorId)
 * @method string getTemplateIds
 * @method self withTemplateIds(string $templateIds)
 * @method bool getUseAppTranscode
 * @method self withUseAppTranscode(bool $useAppTranscode)
 */
class CreateRoom extends Rpc
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
 * @method string getPlayDomain
 * @method self withPlayDomain(string $playDomain)
 * @method string getPushDomain
 * @method self withPushDomain(string $pushDomain)
 * @method string getRtcAppId
 * @method self withRtcAppId(string $rtcAppId)
 * @method bool getDefaultTranscode
 * @method self withDefaultTranscode(bool $defaultTranscode)
 */
class CreateApp extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getRoomId
 * @method self withRoomId(string $roomId)
 * @method string getAppUid
 * @method self withAppUid(string $appUid)
 */
class AllowSendMessage extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getRoomId
 * @method self withRoomId(string $roomId)
 */
class AllowPushStream extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getRoomId
 * @method self withRoomId(string $roomId)
 */
class AllowAllSendMessage extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getLiveDomainType
 * @method self withLiveDomainType(string $liveDomainType)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getRegionName
 * @method self withRegionName(string $regionName)
 * @method string getDomainSearchType
 * @method self withDomainSearchType(string $domainSearchType)
 * @method string getDomainStatus
 * @method self withDomainStatus(string $domainStatus)
 */
class DescribeLiveUserDomains extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getCasterId
 * @method self withCasterId(string $casterId)
 */
class DescribeCasterRtcInfo extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getInterval
 * @method self withInterval(string $interval)
 */
class DescribeLiveDomainOriginBpsData extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getInterval
 * @method self withInterval(string $interval)
 * @method string getIspNameEn
 * @method self withIspNameEn(string $ispNameEn)
 * @method string getLocationNameEn
 * @method self withLocationNameEn(string $locationNameEn)
 */
class DescribeLiveDomainHttpCodeData extends Rpc
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
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeLiveDomainPvUvData extends Rpc
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
 * @method string getDomainSwitch
 * @method self withDomainSwitch(string $domainSwitch)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class DescribeUpBpsPeakData extends Rpc
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
 * @method string getLine
 * @method self withLine(string $line)
 * @method string getDomainSwitch
 * @method self withDomainSwitch(string $domainSwitch)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class DescribeUpBpsPeakOfLine extends Rpc
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
 * @method string getDomainSwitch
 * @method self withDomainSwitch(string $domainSwitch)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class DescribeUpPeakPublishStreamData extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getInterval
 * @method self withInterval(string $interval)
 */
class DescribeLiveDomainOriginTrafficData extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeLiveDomainRegionData extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getStreamPath
 * @method self withStreamPath(string $streamPath)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class DescribeLiveStreamData extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class DescribeLiveDomainCname extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getPushDomain
 * @method self withPushDomain(string $pushDomain)
 * @method string getPullDomain
 * @method self withPullDomain(string $pullDomain)
 */
class DeleteLiveDomainMapping extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getPushDomain
 * @method self withPushDomain(string $pushDomain)
 * @method string getPullDomain
 * @method self withPullDomain(string $pullDomain)
 */
class AddLiveDomainMapping extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getPullDomain
 * @method self withPullDomain(string $pullDomain)
 */
class DescribeLiveSpecificDomainMapping extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getStreamName
 * @method self withStreamName(string $streamName)
 * @method string getSourceUrl
 * @method self withSourceUrl(string $sourceUrl)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class UpdateLivePullStreamInfoConfig extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getField
 * @method self withField(string $field)
 * @method string getOnline
 * @method self withOnline(string $online)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getStreamType
 * @method self withStreamType(string $streamType)
 * @method string getType
 * @method self withType(string $type)
 * @method string getOrderBy
 * @method self withOrderBy(string $orderBy)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 */
class DescribeLiveStreamAppStreams extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getField
 * @method self withField(string $field)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getOrderBy
 * @method self withOrderBy(string $orderBy)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 */
class DescribeLiveBlackListAppStreams extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 */
class DescribeUserLiveStatus extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 */
class DescribeUserBillingInfo extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getTaskID
 * @method self withTaskID(string $taskID)
 * @method string getDataID
 * @method self withDataID(string $dataID)
 * @method string getURL
 * @method self withURL(string $uRL)
 * @method string getLabel
 * @method self withLabel(string $label)
 * @method string getNote
 * @method self withNote(string $note)
 */
class LiveDetectFeedback extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 */
class DescribeLiveRegions extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDiamondDataId
 * @method self withDiamondDataId(string $diamondDataId)
 * @method string getQueryValueType
 * @method self withQueryValueType(string $queryValueType)
 * @method string getQueryValue
 * @method self withQueryValue(string $queryValue)
 */
class DescribeLiveDiamondValue extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getContent
 * @method self withContent(string $content)
 */
class AddCasterEpisodeGroupContent extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourcePackageNames
 * @method self withResourcePackageNames(string $resourcePackageNames)
 */
class DescribeLiveResourcePackage extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getCasterId
 * @method self withCasterId(string $casterId)
 * @method array getEpisode
 * @method self withEpisode(array $episode)
 */
class ModifyCasterProgram extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getCasterId
 * @method self withCasterId(string $casterId)
 * @method string getEpisodeId
 * @method self withEpisodeId(string $episodeId)
 * @method string getEpisodeName
 * @method self withEpisodeName(string $episodeName)
 * @method string getResourceId
 * @method self withResourceId(string $resourceId)
 * @method array getComponentId
 * @method self withComponentId(array $componentId)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getSwitchType
 * @method self withSwitchType(string $switchType)
 */
class ModifyCasterEpisode extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getCasterId
 * @method self withCasterId(string $casterId)
 * @method string getEpisodeId
 * @method self withEpisodeId(string $episodeId)
 * @method string getEpisodeType
 * @method self withEpisodeType(string $episodeType)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getStatus
 * @method self withStatus(Integer $status)
 */
class DescribeCasterProgram extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getCasterId
 * @method self withCasterId(string $casterId)
 */
class DeleteCasterProgram extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getProgramId
 * @method self withProgramId(string $programId)
 */
class DeleteCasterEpisodeGroup extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getCasterId
 * @method self withCasterId(string $casterId)
 * @method string getEpisodeId
 * @method self withEpisodeId(string $episodeId)
 */
class DeleteCasterEpisode extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getCasterId
 * @method self withCasterId(string $casterId)
 * @method array getEpisode
 * @method self withEpisode(array $episode)
 */
class AddCasterProgram extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method array getItem
 * @method self withItem(array $item)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method Integer getRepeatNum
 * @method self withRepeatNum(Integer $repeatNum)
 * @method string getSideOutputUrl
 * @method self withSideOutputUrl(string $sideOutputUrl)
 * @method string getCallbackUrl
 * @method self withCallbackUrl(string $callbackUrl)
 */
class AddCasterEpisodeGroup extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getCasterId
 * @method self withCasterId(string $casterId)
 * @method string getEpisodeType
 * @method self withEpisodeType(string $episodeType)
 * @method string getEpisodeName
 * @method self withEpisodeName(string $episodeName)
 * @method string getResourceId
 * @method self withResourceId(string $resourceId)
 * @method array getComponentId
 * @method self withComponentId(array $componentId)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getSwitchType
 * @method self withSwitchType(string $switchType)
 */
class AddCasterEpisode extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeLiveDomainTranscodeData extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeLiveDomainSnapshotData extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getRecordType
 * @method self withRecordType(string $recordType)
 */
class DescribeLiveDomainRecordData extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getCommand
 * @method self withCommand(string $command)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getStreamName
 * @method self withStreamName(string $streamName)
 */
class RealTimeRecordCommand extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getBizType
 * @method self withBizType(string $bizType)
 * @method array getScenes
 * @method self withScenes(array $scenes)
 * @method array getTasks
 * @method self withTasks(array $tasks)
 */
class DescribeLiveAudit extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getInterval
 * @method self withInterval(string $interval)
 * @method string getIspNameEn
 * @method self withIspNameEn(string $ispNameEn)
 * @method string getLocationNameEn
 * @method self withLocationNameEn(string $locationNameEn)
 */
class DescribeLiveDomainTrafficData extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getInterval
 * @method self withInterval(string $interval)
 * @method string getIspNameEn
 * @method self withIspNameEn(string $ispNameEn)
 * @method string getLocationNameEn
 * @method self withLocationNameEn(string $locationNameEn)
 */
class DescribeLiveDomainBpsData extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getStreamName
 * @method self withStreamName(string $streamName)
 */
class DescribeBlackListByStreamName extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getStreamName
 * @method self withStreamName(string $streamName)
 * @method string getText
 * @method self withText(string $text)
 * @method string getPattern
 * @method self withPattern(string $pattern)
 * @method Integer getRepeat
 * @method self withRepeat(Integer $repeat)
 * @method Integer getDelay
 * @method self withDelay(Integer $delay)
 */
class AddTrancodeSEI extends Rpc
{
    use R;
}

/**
 * @method string getVersion
 * @method self withVersion(string $version)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getMethodName
 * @method self withMethodName(string $methodName)
 * @method Integer getVision
 * @method self withVision(Integer $vision)
 */
class SetLiveShiftVision extends Rpc
{
    use R;
}

/**
 * @method string getVersion
 * @method self withVersion(string $version)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class SetLiveShiftAuth extends Rpc
{
    use R;
}

/**
 * @method string getVersion
 * @method self withVersion(string $version)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method Integer getDuration
 * @method self withDuration(Integer $duration)
 * @method Integer getVision
 * @method self withVision(Integer $vision)
 */
class OpenLiveShift extends Rpc
{
    use R;
}

/**
 * @method string getVersion
 * @method self withVersion(string $version)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 */
class DescribeLiveShiftStatus extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getCasterId
 * @method self withCasterId(string $casterId)
 * @method string getSceneId
 * @method self withSceneId(string $sceneId)
 * @method string getType
 * @method self withType(string $type)
 */
class DeleteCasterSceneConfig extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomain
 * @method self withDomain(string $domain)
 * @method string getApp
 * @method self withApp(string $app)
 * @method string getTemplate
 * @method self withTemplate(string $template)
 * @method string getTemplateType
 * @method self withTemplateType(string $templateType)
 * @method Integer getHeight
 * @method self withHeight(Integer $height)
 * @method Integer getWidth
 * @method self withWidth(Integer $width)
 * @method Integer getFPS
 * @method self withFPS(Integer $fPS)
 * @method Integer getVideoBitrate
 * @method self withVideoBitrate(Integer $videoBitrate)
 * @method Integer getAudioBitrate
 * @method self withAudioBitrate(Integer $audioBitrate)
 * @method string getGop
 * @method self withGop(string $gop)
 * @method Integer getProfile
 * @method self withProfile(Integer $profile)
 */
class AddCustomLiveStreamTranscode extends Rpc
{
    use R;
}

/**
 * @method string getVersion
 * @method self withVersion(string $version)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getStreamName
 * @method self withStreamName(string $streamName)
 * @method string getScene
 * @method self withScene(string $scene)
 * @method array getLabel
 * @method self withLabel(array $label)
 * @method array getSuggestion
 * @method self withSuggestion(array $suggestion)
 * @method Integer getStartTime
 * @method self withStartTime(Integer $startTime)
 * @method Integer getEndTime
 * @method self withEndTime(Integer $endTime)
 * @method string getOrder
 * @method self withOrder(string $order)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeLiveDetectResultDigest extends Rpc
{
    use R;
}

/**
 * @method string getVersion
 * @method self withVersion(string $version)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getStreamName
 * @method self withStreamName(string $streamName)
 * @method string getScene
 * @method self withScene(string $scene)
 * @method array getRate
 * @method self withRate(array $rate)
 * @method array getLabel
 * @method self withLabel(array $label)
 * @method array getSuggestion
 * @method self withSuggestion(array $suggestion)
 * @method Integer getStartTime
 * @method self withStartTime(Integer $startTime)
 * @method Integer getEndTime
 * @method self withEndTime(Integer $endTime)
 * @method string getOrder
 * @method self withOrder(string $order)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeLiveDetectResultDetail extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getStreamName
 * @method self withStreamName(string $streamName)
 * @method int getPageNum
 * @method self withPageNum(int $pageNum)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 */
class DescribeLiveRecordVodConfigs extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getStreamName
 * @method self withStreamName(string $streamName)
 */
class DeleteLiveRecordVodConfig extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getStreamName
 * @method self withStreamName(string $streamName)
 * @method string getVodTranscodeGroupId
 * @method self withVodTranscodeGroupId(string $vodTranscodeGroupId)
 * @method Integer getCycleDuration
 * @method self withCycleDuration(Integer $cycleDuration)
 * @method string getAutoCompose
 * @method self withAutoCompose(string $autoCompose)
 * @method string getComposeVodTranscodeGroupId
 * @method self withComposeVodTranscodeGroupId(string $composeVodTranscodeGroupId)
 */
class AddLiveRecordVodConfig extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getCasterId
 * @method self withCasterId(string $casterId)
 * @method string getComponentId
 * @method self withComponentId(string $componentId)
 * @method string getComponentName
 * @method self withComponentName(string $componentName)
 * @method string getComponentType
 * @method self withComponentType(string $componentType)
 * @method string getEffect
 * @method self withEffect(string $effect)
 * @method string getComponentLayer
 * @method self withComponentLayer(string $componentLayer)
 * @method string getTextLayerContent
 * @method self withTextLayerContent(string $textLayerContent)
 * @method string getImageLayerContent
 * @method self withImageLayerContent(string $imageLayerContent)
 * @method string getCaptionLayerContent
 * @method self withCaptionLayerContent(string $captionLayerContent)
 */
class ModifyCasterComponent extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getCasterId
 * @method self withCasterId(string $casterId)
 * @method string getComponentId
 * @method self withComponentId(string $componentId)
 */
class DescribeCasterComponents extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getCasterId
 * @method self withCasterId(string $casterId)
 * @method string getComponentId
 * @method self withComponentId(string $componentId)
 */
class DeleteCasterComponent extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getCasterId
 * @method self withCasterId(string $casterId)
 * @method string getComponentName
 * @method self withComponentName(string $componentName)
 * @method string getLocationId
 * @method self withLocationId(string $locationId)
 * @method string getComponentType
 * @method self withComponentType(string $componentType)
 * @method string getEffect
 * @method self withEffect(string $effect)
 * @method string getComponentLayer
 * @method self withComponentLayer(string $componentLayer)
 * @method string getTextLayerContent
 * @method self withTextLayerContent(string $textLayerContent)
 * @method string getImageLayerContent
 * @method self withImageLayerContent(string $imageLayerContent)
 * @method string getCaptionLayerContent
 * @method self withCaptionLayerContent(string $captionLayerContent)
 */
class AddCasterComponent extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getCasterId
 * @method self withCasterId(string $casterId)
 */
class StopCaster extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getCasterId
 * @method self withCasterId(string $casterId)
 */
class StartCaster extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getInternetChargeType
 * @method self withInternetChargeType(string $internetChargeType)
 */
class OpenLiveService extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method Integer getInternetChargeType
 * @method self withInternetChargeType(Integer $internetChargeType)
 */
class ModifyLiveService extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getStreamName
 * @method self withStreamName(string $streamName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeLiveStreamHistoryUserNum extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getCasterId
 * @method self withCasterId(string $casterId)
 * @method string getSceneId
 * @method self withSceneId(string $sceneId)
 * @method string getLayoutId
 * @method self withLayoutId(string $layoutId)
 * @method array getComponentId
 * @method self withComponentId(array $componentId)
 */
class UpdateCasterSceneConfig extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getCasterId
 * @method self withCasterId(string $casterId)
 * @method string getSceneId
 * @method self withSceneId(string $sceneId)
 */
class StopCasterScene extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getCasterId
 * @method self withCasterId(string $casterId)
 * @method string getSceneId
 * @method self withSceneId(string $sceneId)
 */
class StartCasterScene extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getCasterId
 * @method self withCasterId(string $casterId)
 * @method string getSceneId
 * @method self withSceneId(string $sceneId)
 * @method string getLayoutId
 * @method self withLayoutId(string $layoutId)
 * @method array getComponentId
 * @method self withComponentId(array $componentId)
 */
class SetCasterSceneConfig extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getCasterId
 * @method self withCasterId(string $casterId)
 * @method string getCasterName
 * @method self withCasterName(string $casterName)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getTranscodeConfig
 * @method self withTranscodeConfig(string $transcodeConfig)
 * @method string getRecordConfig
 * @method self withRecordConfig(string $recordConfig)
 * @method float getDelay
 * @method self withDelay(float $delay)
 * @method string getUrgentMaterialId
 * @method self withUrgentMaterialId(string $urgentMaterialId)
 * @method string getSideOutputUrl
 * @method self withSideOutputUrl(string $sideOutputUrl)
 * @method string getCallbackUrl
 * @method self withCallbackUrl(string $callbackUrl)
 * @method Integer getProgramEffect
 * @method self withProgramEffect(Integer $programEffect)
 * @method string getProgramName
 * @method self withProgramName(string $programName)
 * @method Integer getChannelEnable
 * @method self withChannelEnable(Integer $channelEnable)
 */
class SetCasterConfig extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getdata
 * @method self withdata(string $data)
 */
class PayOrderCallback extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getCasterId
 * @method self withCasterId(string $casterId)
 * @method string getResourceId
 * @method self withResourceId(string $resourceId)
 * @method string getResourceName
 * @method self withResourceName(string $resourceName)
 * @method string getLiveStreamUrl
 * @method self withLiveStreamUrl(string $liveStreamUrl)
 * @method string getMaterialId
 * @method self withMaterialId(string $materialId)
 * @method string getVodUrl
 * @method self withVodUrl(string $vodUrl)
 * @method Integer getBeginOffset
 * @method self withBeginOffset(Integer $beginOffset)
 * @method Integer getEndOffset
 * @method self withEndOffset(Integer $endOffset)
 * @method Integer getRepeatNum
 * @method self withRepeatNum(Integer $repeatNum)
 * @method Integer getPtsCallbackInterval
 * @method self withPtsCallbackInterval(Integer $ptsCallbackInterval)
 */
class ModifyCasterVideoResource extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getCasterId
 * @method self withCasterId(string $casterId)
 * @method string getLayoutId
 * @method self withLayoutId(string $layoutId)
 * @method array getVideoLayer
 * @method self withVideoLayer(array $videoLayer)
 * @method array getAudioLayer
 * @method self withAudioLayer(array $audioLayer)
 * @method array getBlendList
 * @method self withBlendList(array $blendList)
 * @method array getMixList
 * @method self withMixList(array $mixList)
 */
class ModifyCasterLayout extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getCasterId
 * @method self withCasterId(string $casterId)
 * @method string getSceneId
 * @method self withSceneId(string $sceneId)
 * @method string getResourceId
 * @method self withResourceId(string $resourceId)
 */
class EffectCasterVideoResource extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getCasterId
 * @method self withCasterId(string $casterId)
 * @method string getSceneId
 * @method self withSceneId(string $sceneId)
 */
class EffectCasterUrgent extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getCasterId
 * @method self withCasterId(string $casterId)
 */
class DescribeCasterVideoResources extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getCasterId
 * @method self withCasterId(string $casterId)
 */
class DescribeCasterStreamUrl extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getCasterId
 * @method self withCasterId(string $casterId)
 * @method string getSceneId
 * @method self withSceneId(string $sceneId)
 */
class DescribeCasterScenes extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getCasterId
 * @method self withCasterId(string $casterId)
 * @method string getCasterName
 * @method self withCasterName(string $casterName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getStatus
 * @method self withStatus(Integer $status)
 */
class DescribeCasters extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getCasterId
 * @method self withCasterId(string $casterId)
 * @method string getLayoutId
 * @method self withLayoutId(string $layoutId)
 */
class DescribeCasterLayouts extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getCasterId
 * @method self withCasterId(string $casterId)
 */
class DescribeCasterConfig extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getCasterId
 * @method self withCasterId(string $casterId)
 * @method string getResourceId
 * @method self withResourceId(string $resourceId)
 */
class DeleteCasterVideoResource extends Rpc
{
    use R;
}

/**
 * @method string getVersion
 * @method self withVersion(string $version)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getCasterId
 * @method self withCasterId(string $casterId)
 * @method string getsceneId
 * @method self withsceneId(string $sceneId)
 */
class DeleteCasterScene extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getCasterId
 * @method self withCasterId(string $casterId)
 * @method string getLayoutId
 * @method self withLayoutId(string $layoutId)
 */
class DeleteCasterLayout extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getCasterId
 * @method self withCasterId(string $casterId)
 */
class DeleteCaster extends Rpc
{
    use R;
}

/**
 * @method string getVersion
 * @method self withVersion(string $version)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getCasterId
 * @method self withCasterId(string $casterId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getSceneName
 * @method self withSceneName(string $sceneName)
 * @method Integer getOutputType
 * @method self withOutputType(Integer $outputType)
 */
class CreateCasterScene extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getCasterName
 * @method self withCasterName(string $casterName)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method Integer getNormType
 * @method self withNormType(Integer $normType)
 * @method string getChargeType
 * @method self withChargeType(string $chargeType)
 * @method string getPurchaseTime
 * @method self withPurchaseTime(string $purchaseTime)
 * @method string getExpireTime
 * @method self withExpireTime(string $expireTime)
 * @method string getCasterTemplate
 * @method self withCasterTemplate(string $casterTemplate)
 */
class CreateCaster extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getCasterId
 * @method self withCasterId(string $casterId)
 * @method string getFromSceneId
 * @method self withFromSceneId(string $fromSceneId)
 * @method string getToSceneId
 * @method self withToSceneId(string $toSceneId)
 */
class CopyCasterSceneConfig extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getCasterName
 * @method self withCasterName(string $casterName)
 * @method string getSrcCasterId
 * @method self withSrcCasterId(string $srcCasterId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 */
class CopyCaster extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getCasterId
 * @method self withCasterId(string $casterId)
 * @method string getResourceName
 * @method self withResourceName(string $resourceName)
 * @method string getLocationId
 * @method self withLocationId(string $locationId)
 * @method string getLiveStreamUrl
 * @method self withLiveStreamUrl(string $liveStreamUrl)
 * @method string getMaterialId
 * @method self withMaterialId(string $materialId)
 * @method string getVodUrl
 * @method self withVodUrl(string $vodUrl)
 * @method Integer getBeginOffset
 * @method self withBeginOffset(Integer $beginOffset)
 * @method Integer getEndOffset
 * @method self withEndOffset(Integer $endOffset)
 * @method Integer getRepeatNum
 * @method self withRepeatNum(Integer $repeatNum)
 * @method Integer getPtsCallbackInterval
 * @method self withPtsCallbackInterval(Integer $ptsCallbackInterval)
 */
class AddCasterVideoResource extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getCasterId
 * @method self withCasterId(string $casterId)
 * @method array getVideoLayer
 * @method self withVideoLayer(array $videoLayer)
 * @method array getAudioLayer
 * @method self withAudioLayer(array $audioLayer)
 * @method array getBlendList
 * @method self withBlendList(array $blendList)
 * @method array getMixList
 * @method self withMixList(array $mixList)
 */
class AddCasterLayout extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStreamName
 * @method self withStreamName(string $streamName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getFlag
 * @method self withFlag(string $flag)
 */
class DeletePrivateLineConfig extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStreamName
 * @method self withStreamName(string $streamName)
 * @method string getFlag
 * @method self withFlag(string $flag)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribePrivateLineConfigs extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method Integer getGroup
 * @method self withGroup(Integer $group)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getStreamName
 * @method self withStreamName(string $streamName)
 * @method string getFlag
 * @method self withFlag(string $flag)
 */
class AddPrivateLineConfig extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getQueryTime
 * @method self withQueryTime(string $queryTime)
 * @method string getLowDelay
 * @method self withLowDelay(string $lowDelay)
 * @method string getAlignQueryTime
 * @method self withAlignQueryTime(string $alignQueryTime)
 */
class DescribeLiveStreamRealTimeBpsData extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getNotifyUrl
 * @method self withNotifyUrl(string $notifyUrl)
 */
class UpdateLiveEditorNotifyConfig extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getCanvasId
 * @method self withCanvasId(string $canvasId)
 * @method string getCanvasConfig
 * @method self withCanvasConfig(string $canvasConfig)
 */
class UpdateLiveEditorCanvas extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getStreamName
 * @method self withStreamName(string $streamName)
 */
class StopLiveEditor extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getStreamName
 * @method self withStreamName(string $streamName)
 * @method string getTranscodeTemplate
 * @method self withTranscodeTemplate(string $transcodeTemplate)
 * @method string getSidePushUrl
 * @method self withSidePushUrl(string $sidePushUrl)
 * @method float getSideDelay
 * @method self withSideDelay(float $sideDelay)
 * @method string getSecondaryStreamName
 * @method self withSecondaryStreamName(string $secondaryStreamName)
 * @method string getSecondaryTranscodeTemplate
 * @method self withSecondaryTranscodeTemplate(string $secondaryTranscodeTemplate)
 */
class StartLiveEditor extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getStreamName
 * @method self withStreamName(string $streamName)
 * @method string getLayoutConfig
 * @method self withLayoutConfig(string $layoutConfig)
 * @method Integer getClearSideOutput
 * @method self withClearSideOutput(Integer $clearSideOutput)
 */
class SetLiveEditorScene extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getStreamName
 * @method self withStreamName(string $streamName)
 * @method string getLayoutConfig
 * @method self withLayoutConfig(string $layoutConfig)
 */
class ModifyLiveEditorLayout extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 */
class DescribeLiveEditorTranscodeTemplates extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class DescribeLiveEditorNotifyConfig extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class DescribeLiveEditorConfig extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class DeleteLiveEditorNotifyConfig extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 */
class DeleteLiveEditorConfig extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getCanvasId
 * @method self withCanvasId(string $canvasId)
 */
class DeleteLiveEditorCanvas extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getNotifyUrl
 * @method self withNotifyUrl(string $notifyUrl)
 */
class AddLiveEditorNotifyConfig extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 */
class AddLiveEditorConfig extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getCanvasId
 * @method self withCanvasId(string $canvasId)
 * @method string getCanvasConfig
 * @method self withCanvasConfig(string $canvasConfig)
 * @method Integer getCanvasWidth
 * @method self withCanvasWidth(Integer $canvasWidth)
 * @method Integer getCanvasHeight
 * @method self withCanvasHeight(Integer $canvasHeight)
 */
class AddLiveEditorCanvas extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class DescribeLivePullStreamConfig extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getStreamName
 * @method self withStreamName(string $streamName)
 */
class DeleteLivePullStreamInfoConfig extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getStreamName
 * @method self withStreamName(string $streamName)
 * @method string getSourceUrl
 * @method self withSourceUrl(string $sourceUrl)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class AddLivePullStreamInfoConfig extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getStreamName
 * @method self withStreamName(string $streamName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeLiveStreamBitRateData extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getNotifyUrl
 * @method self withNotifyUrl(string $notifyUrl)
 */
class AddLiveDetectNotifyConfig extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getOssEndpoint
 * @method self withOssEndpoint(string $ossEndpoint)
 * @method string getOssBucket
 * @method self withOssBucket(string $ossBucket)
 * @method string getOssObject
 * @method self withOssObject(string $ossObject)
 * @method array getScene
 * @method self withScene(array $scene)
 * @method Integer getInterval
 * @method self withInterval(Integer $interval)
 */
class AddLiveSnapshotDetectPornConfig extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class DeleteLiveDetectNotifyConfig extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class DescribeLiveDetectNotifyConfig extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 */
class DeleteLiveSnapshotDetectPornConfig extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getOrder
 * @method self withOrder(string $order)
 */
class DescribeLiveSnapshotDetectPornConfig extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getNotifyUrl
 * @method self withNotifyUrl(string $notifyUrl)
 */
class UpdateLiveDetectNotifyConfig extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getOssEndpoint
 * @method self withOssEndpoint(string $ossEndpoint)
 * @method string getOssBucket
 * @method self withOssBucket(string $ossBucket)
 * @method string getOssObject
 * @method self withOssObject(string $ossObject)
 * @method Integer getInterval
 * @method self withInterval(Integer $interval)
 * @method array getScene
 * @method self withScene(array $scene)
 */
class UpdateLiveSnapshotDetectPornConfig extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getNotifyUrl
 * @method self withNotifyUrl(string $notifyUrl)
 */
class AddLiveEditNotifyConfig extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getTemplate
 * @method self withTemplate(string $template)
 */
class AddLiveEditConfig extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class DeleteLiveEditNotifyConfig extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 */
class DeleteLiveEditConfig extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class DescribeLiveEditNotifyConfig extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class DescribeLiveEditConfig extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getStreamName
 * @method self withStreamName(string $streamName)
 * @method array getPicture
 * @method self withPicture(array $picture)
 */
class EditScreenPictures extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getStreamName
 * @method self withStreamName(string $streamName)
 * @method array getText
 * @method self withText(array $text)
 */
class EditScreenTexts extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getNotifyUrl
 * @method self withNotifyUrl(string $notifyUrl)
 */
class UpdateLiveEditNotifyConfig extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getStreamName
 * @method self withStreamName(string $streamName)
 */
class StopStreamIntercut extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getStreamName
 * @method self withStreamName(string $streamName)
 * @method string getSourceType
 * @method self withSourceType(string $sourceType)
 * @method string getSourceUrl
 * @method self withSourceUrl(string $sourceUrl)
 */
class StartStreamIntercut extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 */
class DescribeLiveDomains extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getdata
 * @method self withdata(string $data)
 */
class OrderModifySucceededCallback extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getTemplate
 * @method self withTemplate(string $template)
 */
class AddLiveMixConfig extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 */
class DeleteLiveMixConfig extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class DescribeLiveMixConfig extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getNotifyUrl
 * @method self withNotifyUrl(string $notifyUrl)
 */
class AddLiveMixNotifyConfig extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class DeleteLiveMixNotifyConfig extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class DescribeLiveMixNotifyConfig extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getNotifyUrl
 * @method self withNotifyUrl(string $notifyUrl)
 */
class UpdateLiveMixNotifyConfig extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getNotifyUrl
 * @method self withNotifyUrl(string $notifyUrl)
 * @method bool getNeedStatusNotify
 * @method self withNeedStatusNotify(bool $needStatusNotify)
 * @method string getOnDemandUrl
 * @method self withOnDemandUrl(string $onDemandUrl)
 */
class AddLiveRecordNotifyConfig extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class DeleteLiveStreamsNotifyUrlConfig extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class DeleteLiveRecordNotifyConfig extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class DescribeLiveRecordNotifyConfig extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class DescribeLiveStreamsNotifyUrlConfig extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getNotifyUrl
 * @method self withNotifyUrl(string $notifyUrl)
 * @method string getOnDemandUrl
 * @method self withOnDemandUrl(string $onDemandUrl)
 * @method bool getNeedStatusNotify
 * @method self withNeedStatusNotify(bool $needStatusNotify)
 */
class UpdateLiveRecordNotifyConfig extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getdata
 * @method self withdata(string $data)
 */
class OrderSucceededCallback extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeLiveStreamsBlockList extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getStreamName
 * @method self withStreamName(string $streamName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeLiveStreamOnlineUserNum extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getStreamName
 * @method self withStreamName(string $streamName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method string getStreamType
 * @method self withStreamType(string $streamType)
 * @method string getQueryType
 * @method self withQueryType(string $queryType)
 * @method string getOrderBy
 * @method self withOrderBy(string $orderBy)
 */
class DescribeLiveStreamsPublishList extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getStreamName
 * @method self withStreamName(string $streamName)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method string getStreamType
 * @method self withStreamType(string $streamType)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getQueryType
 * @method self withQueryType(string $queryType)
 * @method string getOrderBy
 * @method self withOrderBy(string $orderBy)
 */
class DescribeLiveStreamsOnlineList extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeLiveStreamsControlHistory extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomain
 * @method self withDomain(string $domain)
 * @method string getApp
 * @method self withApp(string $app)
 * @method string getTemplate
 * @method self withTemplate(string $template)
 */
class AddLiveStreamTranscode extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomain
 * @method self withDomain(string $domain)
 * @method string getApp
 * @method self withApp(string $app)
 * @method string getTemplate
 * @method self withTemplate(string $template)
 */
class DeleteLiveStreamTranscode extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getStreamName
 * @method self withStreamName(string $streamName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeLiveStreamsFrameRateAndBitRateData extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getStreamName
 * @method self withStreamName(string $streamName)
 * @method string getLiveStreamType
 * @method self withLiveStreamType(string $liveStreamType)
 * @method string getOneshot
 * @method self withOneshot(string $oneshot)
 * @method string getControlStreamAction
 * @method self withControlStreamAction(string $controlStreamAction)
 * @method string getResumeTime
 * @method self withResumeTime(string $resumeTime)
 */
class ForbidLiveStream extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainTranscodeName
 * @method self withDomainTranscodeName(string $domainTranscodeName)
 */
class DescribeLiveStreamTranscodeInfo extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getMainDomainName
 * @method self withMainDomainName(string $mainDomainName)
 * @method string getMainAppName
 * @method self withMainAppName(string $mainAppName)
 * @method string getMainStreamName
 * @method self withMainStreamName(string $mainStreamName)
 * @method string getMixDomainName
 * @method self withMixDomainName(string $mixDomainName)
 * @method string getMixAppName
 * @method self withMixAppName(string $mixAppName)
 * @method string getMixStreamName
 * @method self withMixStreamName(string $mixStreamName)
 */
class StopMixStreamsService extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getMainDomainName
 * @method self withMainDomainName(string $mainDomainName)
 * @method string getMainAppName
 * @method self withMainAppName(string $mainAppName)
 * @method string getMainStreamName
 * @method self withMainStreamName(string $mainStreamName)
 * @method string getMixDomainName
 * @method self withMixDomainName(string $mixDomainName)
 * @method string getMixAppName
 * @method self withMixAppName(string $mixAppName)
 * @method string getMixStreamName
 * @method self withMixStreamName(string $mixStreamName)
 * @method string getMixTemplate
 * @method self withMixTemplate(string $mixTemplate)
 * @method string getMixType
 * @method self withMixType(string $mixType)
 */
class StartMixStreamsService extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getNotifyUrl
 * @method self withNotifyUrl(string $notifyUrl)
 * @method string getAuthType
 * @method self withAuthType(string $authType)
 * @method string getAuthKey
 * @method self withAuthKey(string $authKey)
 */
class SetLiveStreamsNotifyUrlConfig extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getLiveStreamType
 * @method self withLiveStreamType(string $liveStreamType)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getStreamName
 * @method self withStreamName(string $streamName)
 */
class ResumeLiveStream extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getImageUrl
 * @method self withImageUrl(string $imageUrl)
 * @method string getSceneList
 * @method self withSceneList(string $sceneList)
 */
class ImageDetection extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method Integer getTimeInterval
 * @method self withTimeInterval(Integer $timeInterval)
 * @method string getOssEndpoint
 * @method self withOssEndpoint(string $ossEndpoint)
 * @method string getOssBucket
 * @method self withOssBucket(string $ossBucket)
 * @method string getOverwriteOssObject
 * @method self withOverwriteOssObject(string $overwriteOssObject)
 * @method string getSequenceOssObject
 * @method self withSequenceOssObject(string $sequenceOssObject)
 */
class AddLiveAppSnapshotConfig extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getOssEndpoint
 * @method self withOssEndpoint(string $ossEndpoint)
 * @method string getOssBucket
 * @method self withOssBucket(string $ossBucket)
 * @method array getRecordFormat
 * @method self withRecordFormat(array $recordFormat)
 * @method string getStreamName
 * @method self withStreamName(string $streamName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method Integer getOnDemand
 * @method self withOnDemand(Integer $onDemand)
 */
class AddLiveAppRecordConfig extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getStreamName
 * @method self withStreamName(string $streamName)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getOrder
 * @method self withOrder(string $order)
 */
class DescribeLiveRecordConfig extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 */
class DeleteLiveAppSnapshotConfig extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getStreamName
 * @method self withStreamName(string $streamName)
 */
class DeleteLiveAppRecordConfig extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getStreamName
 * @method self withStreamName(string $streamName)
 * @method string getOssEndpoint
 * @method self withOssEndpoint(string $ossEndpoint)
 * @method string getOssBucket
 * @method self withOssBucket(string $ossBucket)
 * @method string getOssObject
 * @method self withOssObject(string $ossObject)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class CreateLiveStreamRecordIndexFiles extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getStreamName
 * @method self withStreamName(string $streamName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method Integer getLimit
 * @method self withLimit(Integer $limit)
 * @method string getOrder
 * @method self withOrder(string $order)
 */
class DescribeLiveStreamSnapshotInfo extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getStreamName
 * @method self withStreamName(string $streamName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getOrder
 * @method self withOrder(string $order)
 */
class DescribeLiveStreamRecordIndexFiles extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getStreamName
 * @method self withStreamName(string $streamName)
 * @method string getRecordId
 * @method self withRecordId(string $recordId)
 */
class DescribeLiveStreamRecordIndexFile extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getStreamName
 * @method self withStreamName(string $streamName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeLiveStreamRecordContent extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getOrder
 * @method self withOrder(string $order)
 */
class DescribeLiveSnapshotConfig extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method Integer getTimeInterval
 * @method self withTimeInterval(Integer $timeInterval)
 * @method string getOssEndpoint
 * @method self withOssEndpoint(string $ossEndpoint)
 * @method string getOssBucket
 * @method self withOssBucket(string $ossBucket)
 * @method string getOverwriteOssObject
 * @method self withOverwriteOssObject(string $overwriteOssObject)
 * @method string getSequenceOssObject
 * @method self withSequenceOssObject(string $sequenceOssObject)
 */
class UpdateLiveAppSnapshotConfig extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getStreamName
 * @method self withStreamName(string $streamName)
 * @method string getMixDomainName
 * @method self withMixDomainName(string $mixDomainName)
 * @method string getMixAppName
 * @method self withMixAppName(string $mixAppName)
 * @method string getMixStreamName
 * @method self withMixStreamName(string $mixStreamName)
 */
class AddMultipleStreamMixService extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getStreamName
 * @method self withStreamName(string $streamName)
 */
class StopMultipleStreamMixService extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getStreamName
 * @method self withStreamName(string $streamName)
 * @method string getMixTemplate
 * @method self withMixTemplate(string $mixTemplate)
 */
class StartMultipleStreamMixService extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getStreamName
 * @method self withStreamName(string $streamName)
 * @method string getMixDomainName
 * @method self withMixDomainName(string $mixDomainName)
 * @method string getMixAppName
 * @method self withMixAppName(string $mixAppName)
 * @method string getMixStreamName
 * @method self withMixStreamName(string $mixStreamName)
 */
class RemoveMultipleStreamMixService extends Rpc
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getImageUrl
 * @method self withImageUrl(string $imageUrl)
 */
class ImagePornDetection extends Rpc
{
    use R;
}
