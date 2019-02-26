<?php

namespace AlibabaCloud\Dm\V20160825;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getSignName
 * @method self withSignName
 * @method string getTemplateCode
 * @method self withTemplateCode
 * @method string getRecNum
 * @method self withRecNum
 * @method string getParamString
 * @method self withParamString
 */
final class SingleSendSms extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getAccountName
 * @method self withAccountName
 * @method Integer getAddressType
 * @method self withAddressType
 * @method string getTagName
 * @method self withTagName
 * @method Boolean getReplyToAddress
 * @method self withReplyToAddress
 * @method string getToAddress
 * @method self withToAddress
 * @method string getSubject
 * @method self withSubject
 * @method string getHtmlBody
 * @method self withHtmlBody
 * @method string getTextBody
 * @method self withTextBody
 * @method string getFromAlias
 * @method self withFromAlias
 * @method string getReplyAddress
 * @method self withReplyAddress
 * @method string getReplyAddressAlias
 * @method self withReplyAddressAlias
 */
final class SingleSendMail extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method Integer getTemplateId
 * @method self withTemplateId
 * @method string getAccountName
 * @method self withAccountName
 * @method string getUserName
 * @method self withUserName
 * @method string getNickName
 * @method self withNickName
 * @method string getBirthday
 * @method self withBirthday
 * @method string getGender
 * @method self withGender
 * @method string getMobile
 * @method self withMobile
 * @method string getEmail
 * @method self withEmail
 */
final class SendTestByTemplate extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getAccountName
 * @method self withAccountName
 * @method string getToAddress
 * @method self withToAddress
 * @method Integer getStatus
 * @method self withStatus
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getTagName
 * @method self withTagName
 * @method Integer getLength
 * @method self withLength
 * @method string getNextStart
 * @method self withNextStart
 */
final class SenderStatisticsDetailByParam extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getAccountName
 * @method self withAccountName
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getTagName
 * @method self withTagName
 */
final class SenderStatisticsByTagNameAndBatchID extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getReceiverId
 * @method self withReceiverId
 * @method string getDetail
 * @method self withDetail
 */
final class SaveReceiverDetail extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method Integer getPageNo
 * @method self withPageNo
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getKeyWord
 * @method self withKeyWord
 * @method Integer getStatus
 * @method self withStatus
 * @method Integer getFromType
 * @method self withFromType
 */
final class QueryTemplateByParam extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method Integer getPageNo
 * @method self withPageNo
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getKeyWord
 * @method self withKeyWord
 * @method Integer getStatus
 * @method self withStatus
 */
final class QueryTaskByParam extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method Integer getPageNo
 * @method self withPageNo
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getKeyWord
 * @method self withKeyWord
 */
final class QueryTagByParam extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method Integer getFromType
 * @method self withFromType
 */
final class QuerySmsStatistics extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method Integer getPageNo
 * @method self withPageNo
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getKeyWord
 * @method self withKeyWord
 * @method Integer getFromType
 * @method self withFromType
 */
final class QuerySignByParam extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getReceiverId
 * @method self withReceiverId
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getKeyWord
 * @method self withKeyWord
 * @method string getNextStart
 * @method self withNextStart
 */
final class QueryReceiverDetail extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method Integer getPageNo
 * @method self withPageNo
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getKeyWord
 * @method self withKeyWord
 * @method Integer getStatus
 * @method self withStatus
 */
final class QueryReceiverByParam extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method Integer getPageNo
 * @method self withPageNo
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getKeyWord
 * @method self withKeyWord
 * @method string getSendtype
 * @method self withSendtype
 */
final class QueryMailAddressByParam extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getKeyWord
 * @method self withKeyWord
 * @method Integer getLength
 * @method self withLength
 * @method string getNextStart
 * @method self withNextStart
 */
final class QueryInvalidAddress extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method Integer getPageNo
 * @method self withPageNo
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getKeyWord
 * @method self withKeyWord
 * @method Integer getStatus
 * @method self withStatus
 */
final class QueryDomainByParam extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method Integer getTemplateId
 * @method self withTemplateId
 * @method string getTemplateName
 * @method self withTemplateName
 * @method string getTemplateSubject
 * @method self withTemplateSubject
 * @method string getTemplateNickName
 * @method self withTemplateNickName
 * @method string getTemplateText
 * @method self withTemplateText
 * @method Integer getSmsType
 * @method self withSmsType
 * @method string getSmsContent
 * @method self withSmsContent
 * @method string getRemark
 * @method self withRemark
 * @method Integer getFromType
 * @method self withFromType
 */
final class ModifyTemplate extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method Integer getTagId
 * @method self withTagId
 * @method string getTagName
 * @method self withTagName
 */
final class ModifyTag extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method Integer getMailAddressId
 * @method self withMailAddressId
 * @method string getReplyAddress
 * @method self withReplyAddress
 * @method string getPassword
 * @method self withPassword
 */
final class ModifyMailAddress extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method Integer getTemplateId
 * @method self withTemplateId
 * @method Integer getFromType
 * @method self withFromType
 */
final class DescTemplate extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 */
final class DescAccountSummary extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method Integer getTemplateId
 * @method self withTemplateId
 * @method Integer getFromType
 * @method self withFromType
 */
final class DeleteTemplate extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method Integer getTagId
 * @method self withTagId
 */
final class DeleteTag extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method Long getSignId
 * @method self withSignId
 * @method Integer getFromType
 * @method self withFromType
 */
final class DeleteSign extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getReceiverId
 * @method self withReceiverId
 * @method string getEmail
 * @method self withEmail
 */
final class DeleteReceiverDetail extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getReceiverId
 * @method self withReceiverId
 */
final class DeleteReceiver extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method Integer getDomainId
 * @method self withDomainId
 */
final class DeleteDomain extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method Integer getTemplateType
 * @method self withTemplateType
 * @method string getTemplateName
 * @method self withTemplateName
 * @method string getTemplateSubject
 * @method self withTemplateSubject
 * @method string getTemplateNickName
 * @method self withTemplateNickName
 * @method string getTemplateText
 * @method self withTemplateText
 * @method Integer getSmsType
 * @method self withSmsType
 * @method string getSmsContent
 * @method self withSmsContent
 * @method string getRemark
 * @method self withRemark
 * @method Integer getFromType
 * @method self withFromType
 */
final class CreateTemplate extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getTagName
 * @method self withTagName
 */
final class CreateTag extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getSignName
 * @method self withSignName
 * @method string getRemark
 * @method self withRemark
 * @method Integer getSignType
 * @method self withSignType
 * @method string getFileNames
 * @method self withFileNames
 * @method Integer getFromType
 * @method self withFromType
 */
final class CreateSign extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getReceiversName
 * @method self withReceiversName
 * @method string getReceiversAlias
 * @method self withReceiversAlias
 * @method string getDesc
 * @method self withDesc
 */
final class CreateReceiver extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getAccountName
 * @method self withAccountName
 * @method string getReplyAddress
 * @method self withReplyAddress
 * @method string getSendtype
 * @method self withSendtype
 */
final class CreateMailAddress extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getDomainName
 * @method self withDomainName
 */
final class CreateDomain extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method Integer getAccountType
 * @method self withAccountType
 */
final class CreateDayu extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method Integer getMailAddressId
 * @method self withMailAddressId
 */
final class CheckReplyToMailAddress extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method Integer getDomainId
 * @method self withDomainId
 */
final class CheckDomain extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getTemplateName
 * @method self withTemplateName
 * @method string getAccountName
 * @method self withAccountName
 * @method string getReceiversName
 * @method self withReceiversName
 * @method Integer getAddressType
 * @method self withAddressType
 * @method string getTagName
 * @method self withTagName
 * @method string getReplyAddress
 * @method self withReplyAddress
 * @method string getReplyAddressAlias
 * @method self withReplyAddressAlias
 */
final class BatchSendMail extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method Integer getTemplateId
 * @method self withTemplateId
 * @method Integer getFromType
 * @method self withFromType
 */
final class ApproveSmsTemplate extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getTicket
 * @method self withTicket
 */
final class ApproveReplyMailAddress extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method Integer getTemplateId
 * @method self withTemplateId
 * @method Integer getFromType
 * @method self withFromType
 */
final class ApproveMailTemplate extends RpcRequest
{
}
