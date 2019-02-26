<?php

namespace AlibabaCloud\Dysmsapi\V20180501;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method SendMessageWithTemplate sendMessageWithTemplate($options = [])
 * @method SmsConversion smsConversion($options = [])
 * @method SendMessageToGlobe sendMessageToGlobe($options = [])
 * @method QueryMessage queryMessage($options = [])
 * @method SendSms sendSms($options = [])
 * @method QuerySendDetails querySendDetails($options = [])
 */
class V20180501
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
 * @method string getTo
 * @method self withTo(string $to)
 * @method string getFrom
 * @method self withFrom(string $from)
 * @method string getTemplateCode
 * @method self withTemplateCode(string $templateCode)
 * @method string getTemplateParam
 * @method self withTemplateParam(string $templateParam)
 * @method string getSmsUpExtendCode
 * @method self withSmsUpExtendCode(string $smsUpExtendCode)
 */
class SendMessageWithTemplate extends Roa
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
 * @method string getMessageId
 * @method self withMessageId(string $messageId)
 * @method string getConversionDate
 * @method self withConversionDate(string $conversionDate)
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
 * @method string getTo
 * @method self withTo(string $to)
 * @method string getFrom
 * @method self withFrom(string $from)
 * @method string getMessage
 * @method self withMessage(string $message)
 * @method string getType
 * @method self withType(string $type)
 */
class SendMessageToGlobe extends Roa
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
 * @method string getMessageId
 * @method self withMessageId(string $messageId)
 */
class QueryMessage extends Roa
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
 * @method string getContentCode
 * @method self withContentCode(string $contentCode)
 * @method string getContentParam
 * @method self withContentParam(string $contentParam)
 * @method string getExternalId
 * @method self withExternalId(string $externalId)
 * @method string getSignName
 * @method self withSignName(string $signName)
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
 * @method string getStartDate
 * @method self withStartDate(string $startDate)
 * @method string getEndDate
 * @method self withEndDate(string $endDate)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 * @method int getCurrentPage
 * @method self withCurrentPage(int $currentPage)
 */
class QuerySendDetails extends Roa
{
    use R;
}
