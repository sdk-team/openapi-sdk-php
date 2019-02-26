<?php

namespace AlibabaCloud\ARMS\V20161125;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method WhereInDimQuery whereInDimQuery($options = [])
 * @method ARMSQueryDataSet aRMSQueryDataSet($options = [])
 */
class V20161125
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
 * @method string getOrderByKey
 * @method self withOrderByKey(string $orderByKey)
 * @method Integer getLimit
 * @method self withLimit(Integer $limit)
 * @method bool getReduceTail
 * @method self withReduceTail(bool $reduceTail)
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
 * @method int getDateStr
 * @method self withDateStr(int $dateStr)
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
 * @method string getOrderByKey
 * @method self withOrderByKey(string $orderByKey)
 * @method Integer getLimit
 * @method self withLimit(Integer $limit)
 * @method bool getReduceTail
 * @method self withReduceTail(bool $reduceTail)
 * @method bool getHungryMode
 * @method self withHungryMode(bool $hungryMode)
 * @method array getRequiredDims
 * @method self withRequiredDims(array $requiredDims)
 * @method array getOptionalDims
 * @method self withOptionalDims(array $optionalDims)
 */
class ARMSQueryDataSet extends Roa
{
    use R;
}
