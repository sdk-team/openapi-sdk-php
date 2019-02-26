<?php

namespace AlibabaCloud\ARMS4FINANCE\V20171130;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method WhereInDimQuery whereInDimQuery($options = [])
 * @method ARMSQueryDataSet aRMSQueryDataSet($options = [])
 */
class V20171130
{
    use ApiResolverTrait;
}

/**
 * @method int getDatasetId
 * @method self withDatasetId(int $datasetId)
 * @method Integer getIntervalInSec
 * @method self withIntervalInSec(Integer $intervalInSec)
 * @method string getDateStr
 * @method self withDateStr(string $dateStr)
 * @method int getMinTime
 * @method self withMinTime(int $minTime)
 * @method int getMaxTime
 * @method self withMaxTime(int $maxTime)
 * @method array getDimensions
 * @method self withDimensions(array $dimensions)
 * @method string getWhereInKey
 * @method self withWhereInKey(string $whereInKey)
 * @method array getWhereInValues
 * @method self withWhereInValues(array $whereInValues)
 * @method array getMeasures
 * @method self withMeasures(array $measures)
 * @method bool getIsDrillDown
 * @method self withIsDrillDown(bool $isDrillDown)
 */
class WhereInDimQuery extends Roa
{
    use R;
}

/**
 * @method int getDatasetId
 * @method self withDatasetId(int $datasetId)
 * @method Integer getIntervalInSec
 * @method self withIntervalInSec(Integer $intervalInSec)
 * @method string getDateStr
 * @method self withDateStr(string $dateStr)
 * @method int getMinTime
 * @method self withMinTime(int $minTime)
 * @method int getMaxTime
 * @method self withMaxTime(int $maxTime)
 * @method array getDimensions
 * @method self withDimensions(array $dimensions)
 * @method array getMeasures
 * @method self withMeasures(array $measures)
 * @method bool getIsDrillDown
 * @method self withIsDrillDown(bool $isDrillDown)
 */
class ARMSQueryDataSet extends Roa
{
    use R;
}
