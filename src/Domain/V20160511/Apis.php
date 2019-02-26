<?php

namespace AlibabaCloud\Domain\V20160511;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RpcRequest as Rpc;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method SaveTaskForUpdatingContactByTempateId saveTaskForUpdatingContactByTempateId($options = [])
 * @method SaveTaskForUpdatingContactByTemplateId saveTaskForUpdatingContactByTemplateId($options = [])
 * @method SaveTaskForSubmittingDomainNameCredentialByTemplateId saveTaskForSubmittingDomainNameCredentialByTemplateId($options = [])
 * @method SaveTaskForSubmittingDomainNameCredential saveTaskForSubmittingDomainNameCredential($options = [])
 * @method SaveTaskForModifyingDomainDns saveTaskForModifyingDomainDns($options = [])
 * @method SaveContactTemplateCredential saveContactTemplateCredential($options = [])
 * @method QueryFailReasonList queryFailReasonList($options = [])
 * @method SaveOrUpdateWhoisPopProtection saveOrUpdateWhoisPopProtection($options = [])
 * @method QueryOrderProductList queryOrderProductList($options = [])
 * @method QueryDefaultDns queryDefaultDns($options = [])
 * @method QueryCurrentDns queryCurrentDns($options = [])
 * @method WhoisProtection whoisProtection($options = [])
 * @method QueryBatchTaskList queryBatchTaskList($options = [])
 * @method QueryBatchTaskDetailList queryBatchTaskDetailList($options = [])
 * @method ImportPreDeleteDomain importPreDeleteDomain($options = [])
 * @method QueryDomainList queryDomainList($options = [])
 * @method QueryDomainBySaleId queryDomainBySaleId($options = [])
 * @method QueryContact queryContact($options = [])
 * @method UpdateContact updateContact($options = [])
 * @method DeleteContactTemplate deleteContactTemplate($options = [])
 * @method SaveContactTemplate saveContactTemplate($options = [])
 * @method QueryContactTemplate queryContactTemplate($options = [])
 * @method OSuborderDomain oSuborderDomain($options = [])
 * @method QueryOrder queryOrder($options = [])
 * @method GetWhoisInfo getWhoisInfo($options = [])
 * @method CreateOrder createOrder($options = [])
 * @method CheckDomain checkDomain($options = [])
 */
class V20160511
{
    use ApiResolverTrait;
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getSaleId
 * @method self withSaleId(string $saleId)
 * @method int getContactTemplateId
 * @method self withContactTemplateId(int $contactTemplateId)
 * @method string getContactType
 * @method self withContactType(string $contactType)
 * @method bool getAddTransferLock
 * @method self withAddTransferLock(bool $addTransferLock)
 */
class SaveTaskForUpdatingContactByTempateId extends Rpc
{
    use R;
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getSaleId
 * @method self withSaleId(string $saleId)
 * @method int getContactTemplateId
 * @method self withContactTemplateId(int $contactTemplateId)
 * @method string getContactType
 * @method self withContactType(string $contactType)
 * @method bool getAddTransferLock
 * @method self withAddTransferLock(bool $addTransferLock)
 */
class SaveTaskForUpdatingContactByTemplateId extends Rpc
{
    use R;
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getSaleId
 * @method self withSaleId(string $saleId)
 * @method int getContactTemplateId
 * @method self withContactTemplateId(int $contactTemplateId)
 */
class SaveTaskForSubmittingDomainNameCredentialByTemplateId extends Rpc
{
    use R;
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getSaleId
 * @method self withSaleId(string $saleId)
 * @method string getCredential
 * @method self withCredential(string $credential)
 * @method string getCredentialNo
 * @method self withCredentialNo(string $credentialNo)
 */
class SaveTaskForSubmittingDomainNameCredential extends Rpc
{
    use R;
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getSaleId
 * @method self withSaleId(string $saleId)
 * @method bool getAliyunDns
 * @method self withAliyunDns(bool $aliyunDns)
 * @method array getDnsList
 * @method self withDnsList(array $dnsList)
 */
class SaveTaskForModifyingDomainDns extends Rpc
{
    use R;
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method int getContactTemplateId
 * @method self withContactTemplateId(int $contactTemplateId)
 * @method string getCredential
 * @method self withCredential(string $credential)
 * @method string getCredentialNo
 * @method self withCredentialNo(string $credentialNo)
 */
class SaveContactTemplateCredential extends Rpc
{
    use R;
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method int getContactTemplateId
 * @method self withContactTemplateId(int $contactTemplateId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getSaleId
 * @method self withSaleId(string $saleId)
 */
class QueryFailReasonList extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string gettaskType
 * @method self withtaskType(string $taskType)
 * @method string getdataSource
 * @method self withdataSource(string $dataSource)
 * @method string getdataContent
 * @method self withdataContent(string $dataContent)
 * @method string gettaskParam
 * @method self withtaskParam(string $taskParam)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 */
class SaveOrUpdateWhoisPopProtection extends Rpc
{
    use R;
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getSaleId
 * @method self withSaleId(string $saleId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method int getStartDate
 * @method self withStartDate(int $startDate)
 * @method int getEndDate
 * @method self withEndDate(int $endDate)
 */
class QueryOrderProductList extends Rpc
{
    use R;
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class QueryDefaultDns extends Rpc
{
    use R;
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class QueryCurrentDns extends Rpc
{
    use R;
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method Integer getDataSource
 * @method self withDataSource(Integer $dataSource)
 * @method string getDataContent
 * @method self withDataContent(string $dataContent)
 * @method bool getWhoisProtect
 * @method self withWhoisProtect(bool $whoisProtect)
 */
class WhoisProtection extends Rpc
{
    use R;
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getBeginCreateTime
 * @method self withBeginCreateTime(string $beginCreateTime)
 * @method string getEndCreateTime
 * @method self withEndCreateTime(string $endCreateTime)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class QueryBatchTaskList extends Rpc
{
    use R;
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getTaskNo
 * @method self withTaskNo(string $taskNo)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getSaleId
 * @method self withSaleId(string $saleId)
 * @method Integer getTaskStatus
 * @method self withTaskStatus(Integer $taskStatus)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class QueryBatchTaskDetailList extends Rpc
{
    use R;
}

/**
 * @method string getregistry
 * @method self withregistry(string $registry)
 * @method array getPreDeleteDomainParam
 * @method self withPreDeleteDomainParam(array $preDeleteDomainParam)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 */
class ImportPreDeleteDomain extends Rpc
{
    use R;
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getQueryType
 * @method self withQueryType(string $queryType)
 * @method string getStartDate
 * @method self withStartDate(string $startDate)
 * @method string getEndDate
 * @method self withEndDate(string $endDate)
 * @method int getDeadStartDate
 * @method self withDeadStartDate(int $deadStartDate)
 * @method int getDeadEndDate
 * @method self withDeadEndDate(int $deadEndDate)
 * @method int getRegStartDate
 * @method self withRegStartDate(int $regStartDate)
 * @method int getRegEndDate
 * @method self withRegEndDate(int $regEndDate)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getOrderByType
 * @method self withOrderByType(string $orderByType)
 * @method string getOrderKeyType
 * @method self withOrderKeyType(string $orderKeyType)
 * @method string getDomainType
 * @method self withDomainType(string $domainType)
 * @method string getProductDomainType
 * @method self withProductDomainType(string $productDomainType)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class QueryDomainList extends Rpc
{
    use R;
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getSaleId
 * @method self withSaleId(string $saleId)
 */
class QueryDomainBySaleId extends Rpc
{
    use R;
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getContactType
 * @method self withContactType(string $contactType)
 */
class QueryContact extends Rpc
{
    use R;
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getSaleId
 * @method self withSaleId(string $saleId)
 * @method string getContactType
 * @method self withContactType(string $contactType)
 * @method string getCCity
 * @method self withCCity(string $cCity)
 * @method string getCCompany
 * @method self withCCompany(string $cCompany)
 * @method string getCCountry
 * @method self withCCountry(string $cCountry)
 * @method string getCName
 * @method self withCName(string $cName)
 * @method string getCProvince
 * @method self withCProvince(string $cProvince)
 * @method string getCVenu
 * @method self withCVenu(string $cVenu)
 * @method string getECity
 * @method self withECity(string $eCity)
 * @method string getECompany
 * @method self withECompany(string $eCompany)
 * @method string getEName
 * @method self withEName(string $eName)
 * @method string getEProvince
 * @method self withEProvince(string $eProvince)
 * @method string getEVenu
 * @method self withEVenu(string $eVenu)
 * @method string getEmail
 * @method self withEmail(string $email)
 * @method string getPostalCode
 * @method self withPostalCode(string $postalCode)
 * @method string getTelArea
 * @method self withTelArea(string $telArea)
 * @method string getTelMain
 * @method self withTelMain(string $telMain)
 * @method string getTelExt
 * @method self withTelExt(string $telExt)
 * @method string getRegType
 * @method self withRegType(string $regType)
 * @method bool getAddTransferLock
 * @method self withAddTransferLock(bool $addTransferLock)
 */
class UpdateContact extends Rpc
{
    use R;
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method int getContactTemplateId
 * @method self withContactTemplateId(int $contactTemplateId)
 */
class DeleteContactTemplate extends Rpc
{
    use R;
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method int getContactTemplateId
 * @method self withContactTemplateId(int $contactTemplateId)
 * @method bool getDefaultTemplate
 * @method self withDefaultTemplate(bool $defaultTemplate)
 * @method string getCCity
 * @method self withCCity(string $cCity)
 * @method string getCCompany
 * @method self withCCompany(string $cCompany)
 * @method string getCCountry
 * @method self withCCountry(string $cCountry)
 * @method string getCName
 * @method self withCName(string $cName)
 * @method string getCProvince
 * @method self withCProvince(string $cProvince)
 * @method string getCVenu
 * @method self withCVenu(string $cVenu)
 * @method string getECity
 * @method self withECity(string $eCity)
 * @method string getECompany
 * @method self withECompany(string $eCompany)
 * @method string getEName
 * @method self withEName(string $eName)
 * @method string getEProvince
 * @method self withEProvince(string $eProvince)
 * @method string getEVenu
 * @method self withEVenu(string $eVenu)
 * @method string getEmail
 * @method self withEmail(string $email)
 * @method string getPostalCode
 * @method self withPostalCode(string $postalCode)
 * @method string getTelArea
 * @method self withTelArea(string $telArea)
 * @method string getTelMain
 * @method self withTelMain(string $telMain)
 * @method string getTelExt
 * @method self withTelExt(string $telExt)
 * @method string getRegType
 * @method self withRegType(string $regType)
 */
class SaveContactTemplate extends Rpc
{
    use R;
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getCCompany
 * @method self withCCompany(string $cCompany)
 * @method string getECompany
 * @method self withECompany(string $eCompany)
 * @method int getContactTemplateId
 * @method self withContactTemplateId(int $contactTemplateId)
 * @method bool getDefaultTemplate
 * @method self withDefaultTemplate(bool $defaultTemplate)
 * @method string getAuditStatus
 * @method self withAuditStatus(string $auditStatus)
 * @method string getRegType
 * @method self withRegType(string $regType)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class QueryContactTemplate extends Rpc
{
    use R;
}

/**
 * @method string gettype
 * @method self withtype(string $type)
 * @method string getstartDate
 * @method self withstartDate(string $startDate)
 * @method string getendDate
 * @method self withendDate(string $endDate)
 * @method Integer getpageNum
 * @method self withpageNum(Integer $pageNum)
 * @method Integer getpageSize
 * @method self withpageSize(Integer $pageSize)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 */
class OSuborderDomain extends Rpc
{
    use R;
}

/**
 * @method string getOrderID
 * @method self withOrderID(string $orderID)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 */
class QueryOrder extends Rpc
{
    use R;
}

/**
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class GetWhoisInfo extends Rpc
{
    use R;
}

/**
 * @method array getSubOrderParam
 * @method self withSubOrderParam(array $subOrderParam)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 */
class CreateOrder extends Rpc
{
    use R;
}

/**
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 */
class CheckDomain extends Rpc
{
    use R;
}
