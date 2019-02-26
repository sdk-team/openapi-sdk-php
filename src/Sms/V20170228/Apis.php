<?php

namespace AlibabaCloud\Sms\V20170228;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method MigrateMarket migrateMarket($options = [])
 * @method ModifyAccountSummary modifyAccountSummary($options = [])
 * @method QuerySmsTemplateInfoList querySmsTemplateInfoList($options = [])
 * @method QuerySmsCurrentStatistics querySmsCurrentStatistics($options = [])
 * @method QueryTemplateByParam queryTemplateByParam($options = [])
 * @method QuerySmsStatistics querySmsStatistics($options = [])
 * @method QuerySmsFailByPage querySmsFailByPage($options = [])
 * @method QuerySmsDetailByPage querySmsDetailByPage($options = [])
 * @method QuerySignByParam querySignByParam($options = [])
 * @method ModifyDayu modifyDayu($options = [])
 * @method DescAccountSummary descAccountSummary($options = [])
 * @method DeleteTemplate deleteTemplate($options = [])
 * @method DeleteSign deleteSign($options = [])
 * @method CreateTemplate createTemplate($options = [])
 * @method CreateSign createSign($options = [])
 * @method CreateMarketing createMarketing($options = [])
 */
class V20170228
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
 * @method string getVersion
 * @method self withVersion(string $version)
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
 * @method string getVersion
 * @method self withVersion(string $version)
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
 * @method string getVersion
 * @method self withVersion(string $version)
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
 * @method Integer getPageNo
 * @method self withPageNo(Integer $pageNo)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getKeyWord
 * @method self withKeyWord(string $keyWord)
 * @method Integer getStatus
 * @method self withStatus(Integer $status)
 * @method string getVersion
 * @method self withVersion(string $version)
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
 * @method string getVersion
 * @method self withVersion(string $version)
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
 * @method string getVersion
 * @method self withVersion(string $version)
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
 * @method string getVersion
 * @method self withVersion(string $version)
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
 * @method string getVersion
 * @method self withVersion(string $version)
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
 * @method string getVersion
 * @method self withVersion(string $version)
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
 * @method string getVersion
 * @method self withVersion(string $version)
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
 * @method string getVersion
 * @method self withVersion(string $version)
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
 * @method string getVersion
 * @method self withVersion(string $version)
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
 * @method string getVersion
 * @method self withVersion(string $version)
 */
class CreateMarketing extends Roa
{
    use R;
}
