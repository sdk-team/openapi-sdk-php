<?php

namespace AlibabaCloud\Afs\V20180112;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RpcRequest as Rpc;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method UpdateConfigName updateConfigName($options = [])
 * @method DescribeCaptchaOrder describeCaptchaOrder($options = [])
 * @method DescribeOrderInfo describeOrderInfo($options = [])
 * @method SetEarlyWarning setEarlyWarning($options = [])
 * @method DescribePersonMachineList describePersonMachineList($options = [])
 * @method DescribeEarlyWarning describeEarlyWarning($options = [])
 * @method DescribeConfigName describeConfigName($options = [])
 * @method DescribeCaptchaRisk describeCaptchaRisk($options = [])
 * @method DescribeCaptchaMin describeCaptchaMin($options = [])
 * @method DescribeCaptchaIpCity describeCaptchaIpCity($options = [])
 * @method DescribeCaptchaDay describeCaptchaDay($options = [])
 * @method CreateConfiguration createConfiguration($options = [])
 * @method ConfigurationStyle configurationStyle($options = [])
 * @method AuthenticateSig authenticateSig($options = [])
 * @method AnalyzeNvc analyzeNvc($options = [])
 */
class V20180112
{
    use ApiResolverTrait;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getRefExtId
 * @method self withRefExtId(string $refExtId)
 * @method string getConfigName
 * @method self withConfigName(string $configName)
 */
class UpdateConfigName extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 */
class DescribeCaptchaOrder extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 */
class DescribeOrderInfo extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method bool getWarnOpen
 * @method self withWarnOpen(bool $warnOpen)
 * @method string getChannel
 * @method self withChannel(string $channel)
 * @method string getFrequency
 * @method self withFrequency(string $frequency)
 * @method bool getTimeOpen
 * @method self withTimeOpen(bool $timeOpen)
 * @method string getTimeBegin
 * @method self withTimeBegin(string $timeBegin)
 * @method string getTimeEnd
 * @method self withTimeEnd(string $timeEnd)
 * @method string getTitle
 * @method self withTitle(string $title)
 */
class SetEarlyWarning extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 */
class DescribePersonMachineList extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 */
class DescribeEarlyWarning extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 */
class DescribeConfigName extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getConfigName
 * @method self withConfigName(string $configName)
 * @method string getTime
 * @method self withTime(string $time)
 * @method string getRefExtId
 * @method self withRefExtId(string $refExtId)
 */
class DescribeCaptchaRisk extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getConfigName
 * @method self withConfigName(string $configName)
 * @method string getType
 * @method self withType(string $type)
 * @method string getTime
 * @method self withTime(string $time)
 * @method string getRefExtId
 * @method self withRefExtId(string $refExtId)
 */
class DescribeCaptchaMin extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getConfigName
 * @method self withConfigName(string $configName)
 * @method string getType
 * @method self withType(string $type)
 * @method string getTime
 * @method self withTime(string $time)
 * @method string getRefExtId
 * @method self withRefExtId(string $refExtId)
 */
class DescribeCaptchaIpCity extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getConfigName
 * @method self withConfigName(string $configName)
 * @method string getType
 * @method self withType(string $type)
 * @method string getTime
 * @method self withTime(string $time)
 * @method string getRefExtId
 * @method self withRefExtId(string $refExtId)
 */
class DescribeCaptchaDay extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getConfigurationName
 * @method self withConfigurationName(string $configurationName)
 * @method string getApplyType
 * @method self withApplyType(string $applyType)
 * @method string getScene
 * @method self withScene(string $scene)
 * @method string getMaxPV
 * @method self withMaxPV(string $maxPV)
 * @method string getConfigurationMethod
 * @method self withConfigurationMethod(string $configurationMethod)
 */
class CreateConfiguration extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getApplyType
 * @method self withApplyType(string $applyType)
 * @method string getScene
 * @method self withScene(string $scene)
 * @method string getConfigurationMethod
 * @method self withConfigurationMethod(string $configurationMethod)
 * @method string getRefExtId
 * @method self withRefExtId(string $refExtId)
 */
class ConfigurationStyle extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getSessionId
 * @method self withSessionId(string $sessionId)
 * @method string getAppKey
 * @method self withAppKey(string $appKey)
 * @method string getSig
 * @method self withSig(string $sig)
 * @method string getToken
 * @method self withToken(string $token)
 * @method string getScene
 * @method self withScene(string $scene)
 * @method string getRemoteIp
 * @method self withRemoteIp(string $remoteIp)
 */
class AuthenticateSig extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getScoreJsonStr
 * @method self withScoreJsonStr(string $scoreJsonStr)
 * @method string getData
 * @method self withData(string $data)
 */
class AnalyzeNvc extends Rpc
{
    use R;
}
