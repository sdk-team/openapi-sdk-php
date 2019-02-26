<?php

namespace AlibabaCloud\Dyvmsapi\V20170525;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method QueryRobotInfoList queryRobotInfoList($options = [])
 * @method BatchRobotSmartCall batchRobotSmartCall($options = [])
 * @method QueryCallDetailByTaskId queryCallDetailByTaskId($options = [])
 * @method GetRtcToken getRtcToken($options = [])
 * @method AddRtcAccount addRtcAccount($options = [])
 * @method VoipAddAccount voipAddAccount($options = [])
 * @method VoipGetToken voipGetToken($options = [])
 * @method SmartCall smartCall($options = [])
 * @method QueryCallDetailByCallId queryCallDetailByCallId($options = [])
 * @method CancelCall cancelCall($options = [])
 * @method ClickToDial clickToDial($options = [])
 * @method IvrCall ivrCall($options = [])
 * @method SingleCallByVoice singleCallByVoice($options = [])
 * @method SingleCallByTts singleCallByTts($options = [])
 */
class V20170525
{
    use ApiResolverTrait;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getAuditStatus
 * @method self withAuditStatus(string $auditStatus)
 */
class QueryRobotInfoList extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getCalledShowNumber
 * @method self withCalledShowNumber(string $calledShowNumber)
 * @method string getCorpName
 * @method self withCorpName(string $corpName)
 * @method string getCalledNumber
 * @method self withCalledNumber(string $calledNumber)
 * @method string getDialogId
 * @method self withDialogId(string $dialogId)
 * @method bool getEarlyMediaAsr
 * @method self withEarlyMediaAsr(bool $earlyMediaAsr)
 * @method string getTaskName
 * @method self withTaskName(string $taskName)
 * @method int getScheduleTime
 * @method self withScheduleTime(int $scheduleTime)
 * @method bool getScheduleCall
 * @method self withScheduleCall(bool $scheduleCall)
 * @method string getTtsParam
 * @method self withTtsParam(string $ttsParam)
 * @method string getTtsParamHead
 * @method self withTtsParamHead(string $ttsParamHead)
 */
class BatchRobotSmartCall extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getTaskId
 * @method self withTaskId(string $taskId)
 * @method int getQueryDate
 * @method self withQueryDate(int $queryDate)
 * @method string getCallee
 * @method self withCallee(string $callee)
 */
class QueryCallDetailByTaskId extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getUserId
 * @method self withUserId(string $userId)
 * @method string getDeviceId
 * @method self withDeviceId(string $deviceId)
 * @method bool getIsCustomAccount
 * @method self withIsCustomAccount(bool $isCustomAccount)
 */
class GetRtcToken extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getDeviceId
 * @method self withDeviceId(string $deviceId)
 */
class AddRtcAccount extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getDeviceId
 * @method self withDeviceId(string $deviceId)
 */
class VoipAddAccount extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getVoipId
 * @method self withVoipId(string $voipId)
 * @method string getDeviceId
 * @method self withDeviceId(string $deviceId)
 * @method bool getIsCustomAccount
 * @method self withIsCustomAccount(bool $isCustomAccount)
 */
class VoipGetToken extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getCalledShowNumber
 * @method self withCalledShowNumber(string $calledShowNumber)
 * @method string getCalledNumber
 * @method self withCalledNumber(string $calledNumber)
 * @method string getVoiceCode
 * @method self withVoiceCode(string $voiceCode)
 * @method bool getRecordFlag
 * @method self withRecordFlag(bool $recordFlag)
 * @method Integer getVolume
 * @method self withVolume(Integer $volume)
 * @method Integer getSpeed
 * @method self withSpeed(Integer $speed)
 * @method string getAsrModelId
 * @method self withAsrModelId(string $asrModelId)
 * @method Integer getPauseTime
 * @method self withPauseTime(Integer $pauseTime)
 * @method Integer getMuteTime
 * @method self withMuteTime(Integer $muteTime)
 * @method bool getActionCodeBreak
 * @method self withActionCodeBreak(bool $actionCodeBreak)
 * @method string getOutId
 * @method self withOutId(string $outId)
 * @method string getDynamicId
 * @method self withDynamicId(string $dynamicId)
 * @method bool getEarlyMediaAsr
 * @method self withEarlyMediaAsr(bool $earlyMediaAsr)
 * @method string getVoiceCodeParam
 * @method self withVoiceCodeParam(string $voiceCodeParam)
 * @method Integer getSessionTimeout
 * @method self withSessionTimeout(Integer $sessionTimeout)
 * @method Integer getActionCodeTimeBreak
 * @method self withActionCodeTimeBreak(Integer $actionCodeTimeBreak)
 * @method string getTtsStyle
 * @method self withTtsStyle(string $ttsStyle)
 * @method Integer getTtsVolume
 * @method self withTtsVolume(Integer $ttsVolume)
 * @method Integer getTtsSpeed
 * @method self withTtsSpeed(Integer $ttsSpeed)
 * @method bool getTtsConf
 * @method self withTtsConf(bool $ttsConf)
 */
class SmartCall extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getCallId
 * @method self withCallId(string $callId)
 * @method int getProdId
 * @method self withProdId(int $prodId)
 * @method int getQueryDate
 * @method self withQueryDate(int $queryDate)
 */
class QueryCallDetailByCallId extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getCallId
 * @method self withCallId(string $callId)
 */
class CancelCall extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getCallerShowNumber
 * @method self withCallerShowNumber(string $callerShowNumber)
 * @method string getCallerNumber
 * @method self withCallerNumber(string $callerNumber)
 * @method string getCalledShowNumber
 * @method self withCalledShowNumber(string $calledShowNumber)
 * @method string getCalledNumber
 * @method self withCalledNumber(string $calledNumber)
 * @method bool getRecordFlag
 * @method self withRecordFlag(bool $recordFlag)
 * @method bool getAsrFlag
 * @method self withAsrFlag(bool $asrFlag)
 * @method Integer getSessionTimeout
 * @method self withSessionTimeout(Integer $sessionTimeout)
 * @method string getAsrModelId
 * @method self withAsrModelId(string $asrModelId)
 * @method string getOutId
 * @method self withOutId(string $outId)
 */
class ClickToDial extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getCalledShowNumber
 * @method self withCalledShowNumber(string $calledShowNumber)
 * @method string getCalledNumber
 * @method self withCalledNumber(string $calledNumber)
 * @method string getStartCode
 * @method self withStartCode(string $startCode)
 * @method string getStartTtsParams
 * @method self withStartTtsParams(string $startTtsParams)
 * @method array getMenuKeyMap
 * @method self withMenuKeyMap(array $menuKeyMap)
 * @method int getPlayTimes
 * @method self withPlayTimes(int $playTimes)
 * @method string getByeCode
 * @method self withByeCode(string $byeCode)
 * @method string getByeTtsParams
 * @method self withByeTtsParams(string $byeTtsParams)
 * @method Integer getTimeout
 * @method self withTimeout(Integer $timeout)
 * @method string getOutId
 * @method self withOutId(string $outId)
 */
class IvrCall extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getCalledShowNumber
 * @method self withCalledShowNumber(string $calledShowNumber)
 * @method string getCalledNumber
 * @method self withCalledNumber(string $calledNumber)
 * @method string getVoiceCode
 * @method self withVoiceCode(string $voiceCode)
 * @method Integer getPlayTimes
 * @method self withPlayTimes(Integer $playTimes)
 * @method Integer getVolume
 * @method self withVolume(Integer $volume)
 * @method Integer getSpeed
 * @method self withSpeed(Integer $speed)
 * @method string getOutId
 * @method self withOutId(string $outId)
 */
class SingleCallByVoice extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getCalledShowNumber
 * @method self withCalledShowNumber(string $calledShowNumber)
 * @method string getCalledNumber
 * @method self withCalledNumber(string $calledNumber)
 * @method string getTtsCode
 * @method self withTtsCode(string $ttsCode)
 * @method string getTtsParam
 * @method self withTtsParam(string $ttsParam)
 * @method Integer getPlayTimes
 * @method self withPlayTimes(Integer $playTimes)
 * @method Integer getVolume
 * @method self withVolume(Integer $volume)
 * @method Integer getSpeed
 * @method self withSpeed(Integer $speed)
 * @method string getOutId
 * @method self withOutId(string $outId)
 */
class SingleCallByTts extends Roa
{
    use R;
}
