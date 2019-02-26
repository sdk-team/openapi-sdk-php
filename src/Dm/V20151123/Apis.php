<?php

namespace AlibabaCloud\Dm\V20151123;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method ModifyPWByDomain modifyPWByDomain($options = [])
 * @method GetTrackListByMailFromAndTagName getTrackListByMailFromAndTagName($options = [])
 * @method DescAccountSummary2 descAccountSummary2($options = [])
 * @method MigrateMarket migrateMarket($options = [])
 * @method EnableAccount enableAccount($options = [])
 * @method CheckInvalidAddress checkInvalidAddress($options = [])
 * @method DeleteInvalidAddress deleteInvalidAddress($options = [])
 * @method SetMaxQuotaLevel setMaxQuotaLevel($options = [])
 * @method DeleteMailAddress deleteMailAddress($options = [])
 * @method ModifySenderAddressNotification modifySenderAddressNotification($options = [])
 * @method ModifyAccountNotification modifyAccountNotification($options = [])
 * @method GetSenderAddressList getSenderAddressList($options = [])
 * @method GetRegionList getRegionList($options = [])
 * @method GetAccountList getAccountList($options = [])
 * @method UpdateDomainTrackName updateDomainTrackName($options = [])
 * @method GetTrackList getTrackList($options = [])
 * @method DescDomain descDomain($options = [])
 * @method UpdateIpProtection updateIpProtection($options = [])
 * @method GetIpProtection getIpProtection($options = [])
 * @method GetIpfilterList getIpfilterList($options = [])
 * @method DeleteIpfilterByEdmId deleteIpfilterByEdmId($options = [])
 * @method AddIpfilter addIpfilter($options = [])
 * @method ApproveMailTemplate approveMailTemplate($options = [])
 * @method ApproveSmsTemplate approveSmsTemplate($options = [])
 * @method SingleSendSms singleSendSms($options = [])
 * @method QuerySmsStatistics querySmsStatistics($options = [])
 * @method QuerySignByParam querySignByParam($options = [])
 * @method DeleteSign deleteSign($options = [])
 * @method CreateSign createSign($options = [])
 * @method CreateDayu createDayu($options = [])
 * @method DeleteReceiverDetail deleteReceiverDetail($options = [])
 * @method QueryReceiverDetail queryReceiverDetail($options = [])
 * @method SenderStatisticsDetailByParam senderStatisticsDetailByParam($options = [])
 * @method QueryInvalidAddress queryInvalidAddress($options = [])
 * @method DescAccountSummary descAccountSummary($options = [])
 * @method ApproveReplyMailAddress approveReplyMailAddress($options = [])
 * @method CreateTag createTag($options = [])
 * @method CreateReceiver createReceiver($options = [])
 * @method CreateMailAddress createMailAddress($options = [])
 * @method CreateDomain createDomain($options = [])
 * @method CheckReplyToMailAddress checkReplyToMailAddress($options = [])
 * @method CheckDomain checkDomain($options = [])
 * @method BatchSendMail batchSendMail($options = [])
 * @method ApproveTemplate approveTemplate($options = [])
 * @method ModifyTag modifyTag($options = [])
 * @method ModifyMailAddress modifyMailAddress($options = [])
 * @method DescTemplate descTemplate($options = [])
 * @method DeleteTemplate deleteTemplate($options = [])
 * @method DeleteTag deleteTag($options = [])
 * @method DeleteReceiver deleteReceiver($options = [])
 * @method DeleteDomain deleteDomain($options = [])
 * @method CreateTemplate createTemplate($options = [])
 * @method SaveReceiverDetail saveReceiverDetail($options = [])
 * @method QueryTemplateByParam queryTemplateByParam($options = [])
 * @method QueryTaskByParam queryTaskByParam($options = [])
 * @method QueryTagByParam queryTagByParam($options = [])
 * @method QueryReceiverByParam queryReceiverByParam($options = [])
 * @method QueryMailAddressByParam queryMailAddressByParam($options = [])
 * @method QueryDomainByParam queryDomainByParam($options = [])
 * @method ModifyTemplate modifyTemplate($options = [])
 * @method SingleSendMail singleSendMail($options = [])
 * @method SendTestByTemplate sendTestByTemplate($options = [])
 * @method SenderStatisticsByTagNameAndBatchID senderStatisticsByTagNameAndBatchID($options = [])
 */
class V20151123
{
    use ApiResolverTrait;
}

/**
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getPassword
 * @method self withPassword(string $password)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 */
class ModifyPWByDomain extends Roa
{
    use R;
}

/**
 * @method string getTotal
 * @method self withTotal(string $total)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getOffset
 * @method self withOffset(string $offset)
 * @method string getPageSize
 * @method self withPageSize(string $pageSize)
 * @method string getOffsetCreateTime
 * @method self withOffsetCreateTime(string $offsetCreateTime)
 * @method string getOffsetCreateTimeDesc
 * @method self withOffsetCreateTimeDesc(string $offsetCreateTimeDesc)
 * @method string getPageNumber
 * @method self withPageNumber(string $pageNumber)
 * @method string getAccountName
 * @method self withAccountName(string $accountName)
 * @method string getTagName
 * @method self withTagName(string $tagName)
 */
class GetTrackListByMailFromAndTagName extends Roa
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
 * @method Integer getFromType
 * @method self withFromType(Integer $fromType)
 */
class DescAccountSummary2 extends Roa
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
 * @method string getVersion
 * @method self withVersion(string $version)
 * @method Integer getFromType
 * @method self withFromType(Integer $fromType)
 */
class MigrateMarket extends Roa
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
 */
class EnableAccount extends Roa
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
 * @method string getToAddress
 * @method self withToAddress(string $toAddress)
 */
class CheckInvalidAddress extends Roa
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
 * @method string getToAddress
 * @method self withToAddress(string $toAddress)
 */
class DeleteInvalidAddress extends Roa
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
 * @method string getMaxQuotaLevel
 * @method self withMaxQuotaLevel(string $maxQuotaLevel)
 */
class SetMaxQuotaLevel extends Roa
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
 * @method Integer getMailAddressId
 * @method self withMailAddressId(Integer $mailAddressId)
 */
class DeleteMailAddress extends Roa
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
 * @method string getSenderAddressId
 * @method self withSenderAddressId(string $senderAddressId)
 * @method string getSenderAddress
 * @method self withSenderAddress(string $senderAddress)
 * @method string getRegion
 * @method self withRegion(string $region)
 * @method string getStatus
 * @method self withStatus(string $status)
 */
class ModifySenderAddressNotification extends Roa
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
 * @method string getRegion
 * @method self withRegion(string $region)
 * @method string getStatus
 * @method self withStatus(string $status)
 */
class ModifyAccountNotification extends Roa
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
 * @method string getTotal
 * @method self withTotal(string $total)
 * @method string getOffset
 * @method self withOffset(string $offset)
 * @method string getPageSize
 * @method self withPageSize(string $pageSize)
 * @method string getPageNo
 * @method self withPageNo(string $pageNo)
 * @method string getKeyword
 * @method self withKeyword(string $keyword)
 * @method string getNotifyUrl
 * @method self withNotifyUrl(string $notifyUrl)
 */
class GetSenderAddressList extends Roa
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
 * @method string getTotal
 * @method self withTotal(string $total)
 * @method string getOffset
 * @method self withOffset(string $offset)
 * @method string getPageSize
 * @method self withPageSize(string $pageSize)
 * @method string getOffsetCreateTime
 * @method self withOffsetCreateTime(string $offsetCreateTime)
 * @method string getOffsetCreateTimeDesc
 * @method self withOffsetCreateTimeDesc(string $offsetCreateTimeDesc)
 * @method string getPageNumber
 * @method self withPageNumber(string $pageNumber)
 */
class GetRegionList extends Roa
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
 * @method string getTotal
 * @method self withTotal(string $total)
 * @method string getOffset
 * @method self withOffset(string $offset)
 * @method string getPageSize
 * @method self withPageSize(string $pageSize)
 * @method string getOffsetCreateTime
 * @method self withOffsetCreateTime(string $offsetCreateTime)
 * @method string getOffsetCreateTimeDesc
 * @method self withOffsetCreateTimeDesc(string $offsetCreateTimeDesc)
 * @method string getPageNumber
 * @method self withPageNumber(string $pageNumber)
 */
class GetAccountList extends Roa
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
 * @method Integer getDomainId
 * @method self withDomainId(Integer $domainId)
 * @method string getCnameTrackRecord
 * @method self withCnameTrackRecord(string $cnameTrackRecord)
 */
class UpdateDomainTrackName extends Roa
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
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getTotal
 * @method self withTotal(string $total)
 * @method string getOffset
 * @method self withOffset(string $offset)
 * @method string getPageSize
 * @method self withPageSize(string $pageSize)
 * @method string getOffsetCreateTime
 * @method self withOffsetCreateTime(string $offsetCreateTime)
 * @method string getOffsetCreateTimeDesc
 * @method self withOffsetCreateTimeDesc(string $offsetCreateTimeDesc)
 * @method string getPageNumber
 * @method self withPageNumber(string $pageNumber)
 */
class GetTrackList extends Roa
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
 * @method Integer getDomainId
 * @method self withDomainId(Integer $domainId)
 */
class DescDomain extends Roa
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
 * @method string getIpProtection
 * @method self withIpProtection(string $ipProtection)
 */
class UpdateIpProtection extends Roa
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
 */
class GetIpProtection extends Roa
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
 */
class GetIpfilterList extends Roa
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
 * @method Integer getFromType
 * @method self withFromType(Integer $fromType)
 * @method string getId
 * @method self withId(string $id)
 */
class DeleteIpfilterByEdmId extends Roa
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
 * @method string getIpAddress
 * @method self withIpAddress(string $ipAddress)
 */
class AddIpfilter extends Roa
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
 * @method Integer getTemplateId
 * @method self withTemplateId(Integer $templateId)
 * @method Integer getFromType
 * @method self withFromType(Integer $fromType)
 */
class ApproveMailTemplate extends Roa
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
 * @method Integer getTemplateId
 * @method self withTemplateId(Integer $templateId)
 * @method Integer getFromType
 * @method self withFromType(Integer $fromType)
 */
class ApproveSmsTemplate extends Roa
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
 * @method string getSignName
 * @method self withSignName(string $signName)
 * @method string getTemplateCode
 * @method self withTemplateCode(string $templateCode)
 * @method string getRecNum
 * @method self withRecNum(string $recNum)
 * @method string getParamString
 * @method self withParamString(string $paramString)
 * @method string getVersion
 * @method self withVersion(string $version)
 */
class SingleSendSms extends Roa
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
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method Integer getFromType
 * @method self withFromType(Integer $fromType)
 */
class QuerySmsStatistics extends Roa
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
 * @method Integer getPageNo
 * @method self withPageNo(Integer $pageNo)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getKeyWord
 * @method self withKeyWord(string $keyWord)
 * @method Integer getFromType
 * @method self withFromType(Integer $fromType)
 */
class QuerySignByParam extends Roa
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
 * @method int getSignId
 * @method self withSignId(int $signId)
 * @method Integer getFromType
 * @method self withFromType(Integer $fromType)
 */
class DeleteSign extends Roa
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
 * @method string getSignName
 * @method self withSignName(string $signName)
 * @method string getRemark
 * @method self withRemark(string $remark)
 * @method Integer getSignType
 * @method self withSignType(Integer $signType)
 * @method string getFileNames
 * @method self withFileNames(string $fileNames)
 * @method Integer getFromType
 * @method self withFromType(Integer $fromType)
 */
class CreateSign extends Roa
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
 * @method Integer getAccountType
 * @method self withAccountType(Integer $accountType)
 */
class CreateDayu extends Roa
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
 * @method string getReceiverId
 * @method self withReceiverId(string $receiverId)
 * @method string getEmail
 * @method self withEmail(string $email)
 */
class DeleteReceiverDetail extends Roa
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
 * @method string getReceiverId
 * @method self withReceiverId(string $receiverId)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getKeyWord
 * @method self withKeyWord(string $keyWord)
 * @method string getNextStart
 * @method self withNextStart(string $nextStart)
 */
class QueryReceiverDetail extends Roa
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
 * @method string getAccountName
 * @method self withAccountName(string $accountName)
 * @method string getToAddress
 * @method self withToAddress(string $toAddress)
 * @method Integer getStatus
 * @method self withStatus(Integer $status)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getTagName
 * @method self withTagName(string $tagName)
 * @method Integer getLength
 * @method self withLength(Integer $length)
 * @method string getNextStart
 * @method self withNextStart(string $nextStart)
 */
class SenderStatisticsDetailByParam extends Roa
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
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getKeyWord
 * @method self withKeyWord(string $keyWord)
 * @method Integer getLength
 * @method self withLength(Integer $length)
 * @method string getNextStart
 * @method self withNextStart(string $nextStart)
 */
class QueryInvalidAddress extends Roa
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
 */
class DescAccountSummary extends Roa
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
 * @method string getTicket
 * @method self withTicket(string $ticket)
 */
class ApproveReplyMailAddress extends Roa
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
 * @method string getTagName
 * @method self withTagName(string $tagName)
 */
class CreateTag extends Roa
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
 * @method string getReceiversName
 * @method self withReceiversName(string $receiversName)
 * @method string getReceiversAlias
 * @method self withReceiversAlias(string $receiversAlias)
 * @method string getDesc
 * @method self withDesc(string $desc)
 */
class CreateReceiver extends Roa
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
 * @method string getAccountName
 * @method self withAccountName(string $accountName)
 * @method string getReplyAddress
 * @method self withReplyAddress(string $replyAddress)
 * @method string getSendtype
 * @method self withSendtype(string $sendtype)
 */
class CreateMailAddress extends Roa
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
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class CreateDomain extends Roa
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
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getRegion
 * @method self withRegion(string $region)
 * @method Integer getMailAddressId
 * @method self withMailAddressId(Integer $mailAddressId)
 */
class CheckReplyToMailAddress extends Roa
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
 * @method Integer getDomainId
 * @method self withDomainId(Integer $domainId)
 */
class CheckDomain extends Roa
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
 * @method string getTemplateName
 * @method self withTemplateName(string $templateName)
 * @method string getAccountName
 * @method self withAccountName(string $accountName)
 * @method string getReceiversName
 * @method self withReceiversName(string $receiversName)
 * @method Integer getAddressType
 * @method self withAddressType(Integer $addressType)
 * @method string getTagName
 * @method self withTagName(string $tagName)
 * @method string getReplyAddress
 * @method self withReplyAddress(string $replyAddress)
 * @method string getReplyAddressAlias
 * @method self withReplyAddressAlias(string $replyAddressAlias)
 * @method string getClickTrace
 * @method self withClickTrace(string $clickTrace)
 */
class BatchSendMail extends Roa
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
 * @method Integer getTemplateId
 * @method self withTemplateId(Integer $templateId)
 * @method Integer getFromType
 * @method self withFromType(Integer $fromType)
 */
class ApproveTemplate extends Roa
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
 * @method Integer getTagId
 * @method self withTagId(Integer $tagId)
 * @method string getTagName
 * @method self withTagName(string $tagName)
 */
class ModifyTag extends Roa
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
 * @method Integer getMailAddressId
 * @method self withMailAddressId(Integer $mailAddressId)
 * @method string getReplyAddress
 * @method self withReplyAddress(string $replyAddress)
 * @method string getPassword
 * @method self withPassword(string $password)
 */
class ModifyMailAddress extends Roa
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
 * @method Integer getTemplateId
 * @method self withTemplateId(Integer $templateId)
 * @method Integer getFromType
 * @method self withFromType(Integer $fromType)
 */
class DescTemplate extends Roa
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
 * @method Integer getTemplateId
 * @method self withTemplateId(Integer $templateId)
 * @method Integer getFromType
 * @method self withFromType(Integer $fromType)
 */
class DeleteTemplate extends Roa
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
 * @method Integer getTagId
 * @method self withTagId(Integer $tagId)
 */
class DeleteTag extends Roa
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
 * @method string getReceiverId
 * @method self withReceiverId(string $receiverId)
 */
class DeleteReceiver extends Roa
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
 * @method Integer getDomainId
 * @method self withDomainId(Integer $domainId)
 */
class DeleteDomain extends Roa
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
 * @method Integer getTemplateType
 * @method self withTemplateType(Integer $templateType)
 * @method string getTemplateName
 * @method self withTemplateName(string $templateName)
 * @method string getTemplateSubject
 * @method self withTemplateSubject(string $templateSubject)
 * @method string getTemplateNickName
 * @method self withTemplateNickName(string $templateNickName)
 * @method string getTemplateText
 * @method self withTemplateText(string $templateText)
 * @method Integer getSmsType
 * @method self withSmsType(Integer $smsType)
 * @method string getSmsContent
 * @method self withSmsContent(string $smsContent)
 * @method string getRemark
 * @method self withRemark(string $remark)
 * @method Integer getFromType
 * @method self withFromType(Integer $fromType)
 */
class CreateTemplate extends Roa
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
 * @method string getReceiverId
 * @method self withReceiverId(string $receiverId)
 * @method string getDetail
 * @method self withDetail(string $detail)
 */
class SaveReceiverDetail extends Roa
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
 * @method Integer getPageNo
 * @method self withPageNo(Integer $pageNo)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getKeyWord
 * @method self withKeyWord(string $keyWord)
 * @method Integer getStatus
 * @method self withStatus(Integer $status)
 * @method Integer getFromType
 * @method self withFromType(Integer $fromType)
 */
class QueryTemplateByParam extends Roa
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
 * @method Integer getPageNo
 * @method self withPageNo(Integer $pageNo)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getKeyWord
 * @method self withKeyWord(string $keyWord)
 * @method Integer getStatus
 * @method self withStatus(Integer $status)
 */
class QueryTaskByParam extends Roa
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
 * @method Integer getPageNo
 * @method self withPageNo(Integer $pageNo)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getKeyWord
 * @method self withKeyWord(string $keyWord)
 */
class QueryTagByParam extends Roa
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
 * @method Integer getPageNo
 * @method self withPageNo(Integer $pageNo)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getKeyWord
 * @method self withKeyWord(string $keyWord)
 * @method Integer getStatus
 * @method self withStatus(Integer $status)
 */
class QueryReceiverByParam extends Roa
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
 * @method Integer getPageNo
 * @method self withPageNo(Integer $pageNo)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getKeyWord
 * @method self withKeyWord(string $keyWord)
 * @method string getSendtype
 * @method self withSendtype(string $sendtype)
 */
class QueryMailAddressByParam extends Roa
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
 * @method Integer getPageNo
 * @method self withPageNo(Integer $pageNo)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getKeyWord
 * @method self withKeyWord(string $keyWord)
 * @method Integer getStatus
 * @method self withStatus(Integer $status)
 */
class QueryDomainByParam extends Roa
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
 * @method Integer getTemplateId
 * @method self withTemplateId(Integer $templateId)
 * @method string getTemplateName
 * @method self withTemplateName(string $templateName)
 * @method string getTemplateSubject
 * @method self withTemplateSubject(string $templateSubject)
 * @method string getTemplateNickName
 * @method self withTemplateNickName(string $templateNickName)
 * @method string getTemplateText
 * @method self withTemplateText(string $templateText)
 * @method Integer getSmsType
 * @method self withSmsType(Integer $smsType)
 * @method string getSmsContent
 * @method self withSmsContent(string $smsContent)
 * @method string getRemark
 * @method self withRemark(string $remark)
 * @method Integer getFromType
 * @method self withFromType(Integer $fromType)
 */
class ModifyTemplate extends Roa
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
 * @method string getAccountName
 * @method self withAccountName(string $accountName)
 * @method Integer getAddressType
 * @method self withAddressType(Integer $addressType)
 * @method string getTagName
 * @method self withTagName(string $tagName)
 * @method bool getReplyToAddress
 * @method self withReplyToAddress(bool $replyToAddress)
 * @method string getToAddress
 * @method self withToAddress(string $toAddress)
 * @method string getSubject
 * @method self withSubject(string $subject)
 * @method string getHtmlBody
 * @method self withHtmlBody(string $htmlBody)
 * @method string getTextBody
 * @method self withTextBody(string $textBody)
 * @method string getFromAlias
 * @method self withFromAlias(string $fromAlias)
 * @method string getReplyAddress
 * @method self withReplyAddress(string $replyAddress)
 * @method string getReplyAddressAlias
 * @method self withReplyAddressAlias(string $replyAddressAlias)
 * @method string getClickTrace
 * @method self withClickTrace(string $clickTrace)
 */
class SingleSendMail extends Roa
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
 * @method Integer getTemplateId
 * @method self withTemplateId(Integer $templateId)
 * @method string getAccountName
 * @method self withAccountName(string $accountName)
 * @method string getUserName
 * @method self withUserName(string $userName)
 * @method string getNickName
 * @method self withNickName(string $nickName)
 * @method string getBirthday
 * @method self withBirthday(string $birthday)
 * @method string getGender
 * @method self withGender(string $gender)
 * @method string getMobile
 * @method self withMobile(string $mobile)
 * @method string getEmail
 * @method self withEmail(string $email)
 */
class SendTestByTemplate extends Roa
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
 * @method string getAccountName
 * @method self withAccountName(string $accountName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getTagName
 * @method self withTagName(string $tagName)
 */
class SenderStatisticsByTagNameAndBatchID extends Roa
{
    use R;
}
