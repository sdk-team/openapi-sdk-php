<?php

namespace AlibabaCloud\ARMS\V20160804;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method ArmsQueryDataSet armsQueryDataSet($options = [])
 */
class V20160804
{
    use ApiResolverTrait;
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
 */
class ArmsQueryDataSet extends Roa
{
    use R;
}
