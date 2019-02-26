<?php

namespace AlibabaCloud\ARMS\V20181015;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RpcRequest as Rpc;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method MetricQuery metricQuery($options = [])
 * @method ARMSQueryDataSet aRMSQueryDataSet($options = [])
 */
class V20181015
{
    use ApiResolverTrait;
}

/**
 * @method array getFilters
 * @method self withFilters(array $filters)
 * @method Integer getIintervalInSec
 * @method self withIintervalInSec(Integer $iintervalInSec)
 * @method int getStartTime
 * @method self withStartTime(int $startTime)
 * @method int getEndTime
 * @method self withEndTime(int $endTime)
 * @method string getMetric
 * @method self withMetric(string $metric)
 * @method array getMeasures
 * @method self withMeasures(array $measures)
 * @method array getDimensions
 * @method self withDimensions(array $dimensions)
 * @method string getOrderBy
 * @method self withOrderBy(string $orderBy)
 * @method Integer getLimit
 * @method self withLimit(Integer $limit)
 * @method string getOrder
 * @method self withOrder(string $order)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 */
class MetricQuery extends Rpc
{
    use R;
}

/**
 * @method array getDimensions
 * @method self withDimensions(array $dimensions)
 * @method Integer getIntervalInSec
 * @method self withIntervalInSec(Integer $intervalInSec)
 * @method string getDateStr
 * @method self withDateStr(string $dateStr)
 * @method int getMinTime
 * @method self withMinTime(int $minTime)
 * @method int getMaxTime
 * @method self withMaxTime(int $maxTime)
 * @method bool getIsDrillDown
 * @method self withIsDrillDown(bool $isDrillDown)
 * @method array getMeasures
 * @method self withMeasures(array $measures)
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
 * @method int getDatasetId
 * @method self withDatasetId(int $datasetId)
 * @method array getOptionalDims
 * @method self withOptionalDims(array $optionalDims)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 */
class ARMSQueryDataSet extends Rpc
{
    use R;
}
