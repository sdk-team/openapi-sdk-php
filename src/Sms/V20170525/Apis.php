<?php

namespace AlibabaCloud\Sms\V20170525;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method SendSms sendSms($options = [])
 */
class V20170525
{
    use ApiResolverTrait;
}

/**
 * @method string getFormat
 * @method self withFormat(string $format)
 * @method string getPhoneNumbers
 * @method self withPhoneNumbers(string $phoneNumbers)
 * @method string getSignature
 * @method self withSignature(string $signature)
 * @method string getSignatureMethod
 * @method self withSignatureMethod(string $signatureMethod)
 * @method string getSignatureNonce
 * @method self withSignatureNonce(string $signatureNonce)
 * @method string getSignatureVersion
 * @method self withSignatureVersion(string $signatureVersion)
 * @method string getSignName
 * @method self withSignName(string $signName)
 * @method string getTemplateCode
 * @method self withTemplateCode(string $templateCode)
 * @method string getTemplateParam
 * @method self withTemplateParam(string $templateParam)
 * @method string getOutId
 * @method self withOutId(string $outId)
 * @method string getSmsUpExtendCode
 * @method self withSmsUpExtendCode(string $smsUpExtendCode)
 * @method string getTimestamp
 * @method self withTimestamp(string $timestamp)
 * @method string getVersion
 * @method self withVersion(string $version)
 */
class SendSms extends Roa
{
    use R;
}
