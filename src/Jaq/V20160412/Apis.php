<?php

namespace AlibabaCloud\Jaq\V20160412;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method ScanVuln scanVuln($options = [])
 * @method ScanMalware scanMalware($options = [])
 * @method ScanFake scanFake($options = [])
 * @method GetRiskSummary getRiskSummary($options = [])
 * @method GetRiskDetail4Batch getRiskDetail4Batch($options = [])
 * @method GetRiskDetail getRiskDetail($options = [])
 * @method DiyShield diyShield($options = [])
 * @method BatchScanPlugin batchScanPlugin($options = [])
 * @method BatchScanMalware batchScanMalware($options = [])
 * @method Shield shield($options = [])
 * @method GetShieldResult getShieldResult($options = [])
 */
class V20160412
{
    use ApiResolverTrait;
}

/**
 * @method string getAppInfo
 * @method self withAppInfo(string $appInfo)
 * @method string getExtParam
 * @method self withExtParam(string $extParam)
 */
class ScanVuln extends Roa
{
    use R;
}

/**
 * @method string getAppInfo
 * @method self withAppInfo(string $appInfo)
 * @method string getExtParam
 * @method self withExtParam(string $extParam)
 */
class ScanMalware extends Roa
{
    use R;
}

/**
 * @method string getAppInfo
 * @method self withAppInfo(string $appInfo)
 * @method string getExtParam
 * @method self withExtParam(string $extParam)
 */
class ScanFake extends Roa
{
    use R;
}

/**
 * @method string getItemId
 * @method self withItemId(string $itemId)
 */
class GetRiskSummary extends Roa
{
    use R;
}

/**
 * @method string getItemId
 * @method self withItemId(string $itemId)
 * @method string getLanguage
 * @method self withLanguage(string $language)
 * @method string getCountry
 * @method self withCountry(string $country)
 */
class GetRiskDetail4Batch extends Roa
{
    use R;
}

/**
 * @method string getItemId
 * @method self withItemId(string $itemId)
 * @method string getLanguage
 * @method self withLanguage(string $language)
 * @method string getCountry
 * @method self withCountry(string $country)
 */
class GetRiskDetail extends Roa
{
    use R;
}

/**
 * @method string getAppInfo
 * @method self withAppInfo(string $appInfo)
 * @method string getChannel
 * @method self withChannel(string $channel)
 * @method string getEnhance
 * @method self withEnhance(string $enhance)
 */
class DiyShield extends Roa
{
    use R;
}

/**
 * @method string getAppInfoBatch
 * @method self withAppInfoBatch(string $appInfoBatch)
 */
class BatchScanPlugin extends Roa
{
    use R;
}

/**
 * @method string getAppInfoBatch
 * @method self withAppInfoBatch(string $appInfoBatch)
 */
class BatchScanMalware extends Roa
{
    use R;
}

/**
 * @method string getAppInfo
 * @method self withAppInfo(string $appInfo)
 * @method string getChannel
 * @method self withChannel(string $channel)
 */
class Shield extends Roa
{
    use R;
}

/**
 * @method string getItemId
 * @method self withItemId(string $itemId)
 */
class GetShieldResult extends Roa
{
    use R;
}
