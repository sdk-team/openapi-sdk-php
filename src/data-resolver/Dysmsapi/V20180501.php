<?php

namespace AlibabaCloud\Dysmsapi\V20180501;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getTo
 * @method self withTo
 * @method string getFrom
 * @method self withFrom
 * @method string getTemplateCode
 * @method self withTemplateCode
 * @method string getTemplateParam
 * @method self withTemplateParam
 * @method string getSmsUpExtendCode
 * @method self withSmsUpExtendCode
 */
final class SendMessageWithTemplate extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getMessageId
 * @method self withMessageId
 * @method string getConversionDate
 * @method self withConversionDate
 */
final class SmsConversion extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getTo
 * @method self withTo
 * @method string getFrom
 * @method self withFrom
 * @method string getMessage
 * @method self withMessage
 * @method string getType
 * @method self withType
 */
final class SendMessageToGlobe extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getMessageId
 * @method self withMessageId
 */
final class QueryMessage extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getPhoneNumbers
 * @method self withPhoneNumbers
 * @method string getContentCode
 * @method self withContentCode
 * @method string getContentParam
 * @method self withContentParam
 * @method string getExternalId
 * @method self withExternalId
 * @method string getSignName
 * @method self withSignName
 */
final class SendSms extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getPhoneNumber
 * @method self withPhoneNumber
 * @method string getBizId
 * @method self withBizId
 * @method string getStartDate
 * @method self withStartDate
 * @method string getEndDate
 * @method self withEndDate
 * @method Long getPageSize
 * @method self withPageSize
 * @method Long getCurrentPage
 * @method self withCurrentPage
 */
final class QuerySendDetails extends RpcRequest
{
}
