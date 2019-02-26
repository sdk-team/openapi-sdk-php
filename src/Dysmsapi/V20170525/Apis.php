<?php

namespace AlibabaCloud\Dysmsapi\V20170525;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method SmsConversion smsConversion($options = [])
 * @method QueryTemplateList queryTemplateList($options = [])
 * @method QuerySignatureList querySignatureList($options = [])
 * @method QueryPhoneStatus queryPhoneStatus($options = [])
 * @method SendBatchSms sendBatchSms($options = [])
 * @method SendPersonalSms sendPersonalSms($options = [])
 * @method SendInterSms sendInterSms($options = [])
 * @method QueryInterSmsIsoInfo queryInterSmsIsoInfo($options = [])
 * @method SendSms sendSms($options = [])
 * @method QuerySendDetails querySendDetails($options = [])
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
 * @method string getPhoneNumber
 * @method self withPhoneNumber(string $phoneNumber)
 * @method string getRegisterTime
 * @method self withRegisterTime(string $registerTime)
 * @method string getTemplateCode
 * @method self withTemplateCode(string $templateCode)
 * @method string getBizId
 * @method self withBizId(string $bizId)
 */
class SmsConversion extends Roa
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
 * @method string getProdCode
 * @method self withProdCode(string $prodCode)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getAuditState
 * @method self withAuditState(string $auditState)
 * @method string getBusinessType
 * @method self withBusinessType(string $businessType)
 * @method string getTemplateName
 * @method self withTemplateName(string $templateName)
 */
class QueryTemplateList extends Roa
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
 * @method string getProdCode
 * @method self withProdCode(string $prodCode)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getAuditState
 * @method self withAuditState(string $auditState)
 * @method string getSignName
 * @method self withSignName(string $signName)
 */
class QuerySignatureList extends Roa
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
 * @method string getPhoneNumber
 * @method self withPhoneNumber(string $phoneNumber)
 */
class QueryPhoneStatus extends Roa
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
 * @method string getPhoneNumberJson
 * @method self withPhoneNumberJson(string $phoneNumberJson)
 * @method string getSignNameJson
 * @method self withSignNameJson(string $signNameJson)
 * @method string getTemplateCode
 * @method self withTemplateCode(string $templateCode)
 * @method string gettemplateParamJson
 * @method self withtemplateParamJson(string $templateParamJson)
 * @method string getTemplateParamJson
 * @method self withTemplateParamJson(string $templateParamJson)
 * @method string getSmsUpExtendCodeJson
 * @method self withSmsUpExtendCodeJson(string $smsUpExtendCodeJson)
 */
class SendBatchSms extends Roa
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
 * @method string getPhoneNumberJson
 * @method self withPhoneNumberJson(string $phoneNumberJson)
 * @method string getSignNameJson
 * @method self withSignNameJson(string $signNameJson)
 * @method string getTemplateCode
 * @method self withTemplateCode(string $templateCode)
 * @method string gettemplateParamJson
 * @method self withtemplateParamJson(string $templateParamJson)
 * @method string getSmsUpExtendCodeJson
 * @method self withSmsUpExtendCodeJson(string $smsUpExtendCodeJson)
 */
class SendPersonalSms extends Roa
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
 * @method string getCountryCode
 * @method self withCountryCode(string $countryCode)
 * @method string getPhoneNumbers
 * @method self withPhoneNumbers(string $phoneNumbers)
 * @method string getSignName
 * @method self withSignName(string $signName)
 * @method string getTemplateCode
 * @method self withTemplateCode(string $templateCode)
 * @method string getTemplateParam
 * @method self withTemplateParam(string $templateParam)
 * @method string getOutId
 * @method self withOutId(string $outId)
 */
class SendInterSms extends Roa
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
 * @method string getCountryName
 * @method self withCountryName(string $countryName)
 */
class QueryInterSmsIsoInfo extends Roa
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
 * @method string getPhoneNumbers
 * @method self withPhoneNumbers(string $phoneNumbers)
 * @method string getSignName
 * @method self withSignName(string $signName)
 * @method string getTemplateCode
 * @method self withTemplateCode(string $templateCode)
 * @method string getTemplateParam
 * @method self withTemplateParam(string $templateParam)
 * @method string getSmsUpExtendCode
 * @method self withSmsUpExtendCode(string $smsUpExtendCode)
 * @method string getOutId
 * @method self withOutId(string $outId)
 */
class SendSms extends Roa
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
 * @method string getPhoneNumber
 * @method self withPhoneNumber(string $phoneNumber)
 * @method string getBizId
 * @method self withBizId(string $bizId)
 * @method string getSendDate
 * @method self withSendDate(string $sendDate)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 * @method int getCurrentPage
 * @method self withCurrentPage(int $currentPage)
 */
class QuerySendDetails extends Roa
{
    use R;
}
