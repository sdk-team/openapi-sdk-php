<?php

namespace AlibabaCloud\Alimt\V20181012;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RpcRequest as Rpc;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method SaveInterventionData saveInterventionData($options = [])
 * @method DeleteIntervention deleteIntervention($options = [])
 * @method TranslateInterventionDataReview translateInterventionDataReview($options = [])
 * @method GetOssInfo getOssInfo($options = [])
 * @method CreateInterventionTask createInterventionTask($options = [])
 * @method FindInterventionTask findInterventionTask($options = [])
 * @method FindInterventionData findInterventionData($options = [])
 * @method UpdateInterventionData updateInterventionData($options = [])
 * @method DeleteInterventionData deleteInterventionData($options = [])
 * @method QueryResourcePackage queryResourcePackage($options = [])
 * @method TranslateGeneral translateGeneral($options = [])
 * @method TranslateECommerce translateECommerce($options = [])
 * @method PayOrderCallback payOrderCallback($options = [])
 * @method GetTranslateReport getTranslateReport($options = [])
 */
class V20181012
{
    use ApiResolverTrait;
}

/**
 * @method int getInterventionId
 * @method self withInterventionId(int $interventionId)
 * @method string getSourceText
 * @method self withSourceText(string $sourceText)
 * @method string getTargetText
 * @method self withTargetText(string $targetText)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getName
 * @method self withName(string $name)
 * @method string getSourceLanguage
 * @method self withSourceLanguage(string $sourceLanguage)
 * @method string getTargetLanguage
 * @method self withTargetLanguage(string $targetLanguage)
 */
class SaveInterventionData extends Rpc
{
    use R;
}

/**
 * @method int getId
 * @method self withId(int $id)
 */
class DeleteIntervention extends Rpc
{
    use R;
}

/**
 * @method string getOssPath
 * @method self withOssPath(string $ossPath)
 */
class TranslateInterventionDataReview extends Rpc
{
    use R;
}

class GetOssInfo extends Rpc
{
    use R;
}

/**
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getName
 * @method self withName(string $name)
 * @method string getOssPath
 * @method self withOssPath(string $ossPath)
 * @method string getSourceLanguage
 * @method self withSourceLanguage(string $sourceLanguage)
 * @method string getTargetLanguage
 * @method self withTargetLanguage(string $targetLanguage)
 */
class CreateInterventionTask extends Rpc
{
    use R;
}

/**
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getSourceLanguage
 * @method self withSourceLanguage(string $sourceLanguage)
 * @method string getTargetLanguage
 * @method self withTargetLanguage(string $targetLanguage)
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method string getName
 * @method self withName(string $name)
 */
class FindInterventionTask extends Rpc
{
    use R;
}

/**
 * @method int getInterventionId
 * @method self withInterventionId(int $interventionId)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getName
 * @method self withName(string $name)
 * @method string getSourceLanguage
 * @method self withSourceLanguage(string $sourceLanguage)
 * @method string getTargetLanguage
 * @method self withTargetLanguage(string $targetLanguage)
 * @method string getSourceText
 * @method self withSourceText(string $sourceText)
 * @method string getTargetText
 * @method self withTargetText(string $targetText)
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class FindInterventionData extends Rpc
{
    use R;
}

/**
 * @method int getId
 * @method self withId(int $id)
 * @method string getSourceText
 * @method self withSourceText(string $sourceText)
 * @method string getTargetText
 * @method self withTargetText(string $targetText)
 */
class UpdateInterventionData extends Rpc
{
    use R;
}

/**
 * @method string getIdList
 * @method self withIdList(string $idList)
 */
class DeleteInterventionData extends Rpc
{
    use R;
}

/**
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class QueryResourcePackage extends Rpc
{
    use R;
}

/**
 * @method string getFormatType
 * @method self withFormatType(string $formatType)
 * @method string getSourceLanguage
 * @method self withSourceLanguage(string $sourceLanguage)
 * @method string getTargetLanguage
 * @method self withTargetLanguage(string $targetLanguage)
 * @method string getSourceText
 * @method self withSourceText(string $sourceText)
 * @method string getScene
 * @method self withScene(string $scene)
 */
class TranslateGeneral extends Rpc
{
    use R;
}

/**
 * @method string getFormatType
 * @method self withFormatType(string $formatType)
 * @method string getTargetLanguage
 * @method self withTargetLanguage(string $targetLanguage)
 * @method string getSourceLanguage
 * @method self withSourceLanguage(string $sourceLanguage)
 * @method string getSourceText
 * @method self withSourceText(string $sourceText)
 * @method string getScene
 * @method self withScene(string $scene)
 */
class TranslateECommerce extends Rpc
{
    use R;
}

/**
 * @method string getdata
 * @method self withdata(string $data)
 */
class PayOrderCallback extends Rpc
{
    use R;
}

/**
 * @method string getBeginTime
 * @method self withBeginTime(string $beginTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getApiName
 * @method self withApiName(string $apiName)
 * @method string getGroup
 * @method self withGroup(string $group)
 */
class GetTranslateReport extends Rpc
{
    use R;
}
