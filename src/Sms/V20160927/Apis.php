<?php

namespace AlibabaCloud\Sms\V20160927;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method ModifyAccountSummary modifyAccountSummary($options = [])
 * @method QuerySmsTemplateInfoList querySmsTemplateInfoList($options = [])
 * @method QuerySmsCurrentStatistics querySmsCurrentStatistics($options = [])
 * @method BatchSendSms batchSendSms($options = [])
 * @method ModifyDayu modifyDayu($options = [])
 * @method SingleSendSms singleSendSms($options = [])
 * @method QueryTemplateByParam queryTemplateByParam($options = [])
 * @method QuerySmsStatistics querySmsStatistics($options = [])
 * @method QuerySmsFailByPage querySmsFailByPage($options = [])
 * @method QuerySmsDetailByPage querySmsDetailByPage($options = [])
 * @method QuerySignByParam querySignByParam($options = [])
 * @method DescAccountSummary descAccountSummary($options = [])
 * @method DeleteTemplate deleteTemplate($options = [])
 * @method DeleteSign deleteSign($options = [])
 * @method CreateTemplate createTemplate($options = [])
 * @method CreateSign createSign($options = [])
 * @method CreateMarketing createMarketing($options = [])
 */
class V20160927
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
 * @method string getDailyQuota
 * @method self withDailyQuota(string $dailyQuota)
 * @method string getMonthQuota
 * @method self withMonthQuota(string $monthQuota)
 */
class ModifyAccountSummary extends Roa
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
class QuerySmsTemplateInfoList extends Roa
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
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNo
 * @method self withPageNo(Integer $pageNo)
 * @method string getStartDateStr
 * @method self withStartDateStr(string $startDateStr)
 * @method string getEndDateStr
 * @method self withEndDateStr(string $endDateStr)
 * @method string getTemplateType
 * @method self withTemplateType(string $templateType)
 * @method string getTemplateCode
 * @method self withTemplateCode(string $templateCode)
 * @method string getTagCode
 * @method self withTagCode(string $tagCode)
 */
class QuerySmsCurrentStatistics extends Roa
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
 * @method string getData
 * @method self withData(string $data)
 * @method string getRegion
 * @method self withRegion(string $region)
 * @method string getMessageID
 * @method self withMessageID(string $messageID)
 * @method int getSmsResourceOwnerId
 * @method self withSmsResourceOwnerId(int $smsResourceOwnerId)
 * @method string getVersion
 * @method self withVersion(string $version)
 */
class BatchSendSms extends Roa
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
class ModifyDayu extends Roa
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
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNo
 * @method self withPageNo(Integer $pageNo)
 * @method Integer getSmsType
 * @method self withSmsType(Integer $smsType)
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
 * @method string getQueryTime
 * @method self withQueryTime(string $queryTime)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNo
 * @method self withPageNo(Integer $pageNo)
 * @method Integer getSmsType
 * @method self withSmsType(Integer $smsType)
 */
class QuerySmsFailByPage extends Roa
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
 * @method string getQueryTime
 * @method self withQueryTime(string $queryTime)
 * @method string getRecNum
 * @method self withRecNum(string $recNum)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNo
 * @method self withPageNo(Integer $pageNo)
 */
class QuerySmsDetailByPage extends Roa
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
 * @method string getVersion
 * @method self withVersion(string $version)
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
 * @method Integer getTemplateType
 * @method self withTemplateType(Integer $templateType)
 * @method string getTemplateName
 * @method self withTemplateName(string $templateName)
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
 * @method Integer getType
 * @method self withType(Integer $type)
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
 */
class CreateMarketing extends Roa
{
    use R;
}
