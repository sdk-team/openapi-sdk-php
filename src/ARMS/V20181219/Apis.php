<?php

namespace AlibabaCloud\ARMS\V20181219;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RpcRequest as Rpc;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method GetServices getServices($options = [])
 * @method SearchTraces searchTraces($options = [])
 * @method GetTrace getTrace($options = [])
 * @method ARMSQueryDataSet aRMSQueryDataSet($options = [])
 * @method MetricQuery metricQuery($options = [])
 * @method CreateApp createApp($options = [])
 * @method DeleteApp deleteApp($options = [])
 */
class V20181219
{
    use ApiResolverTrait;
}

/**
 * @method string getAppType
 * @method self withAppType(string $appType)
 */
class GetServices extends Rpc
{
    use R;
}

/**
 * @method int getStartTime
 * @method self withStartTime(int $startTime)
 * @method int getEndTime
 * @method self withEndTime(int $endTime)
 * @method string getServiceName
 * @method self withServiceName(string $serviceName)
 * @method string getOperationName
 * @method self withOperationName(string $operationName)
 * @method int getMinDuration
 * @method self withMinDuration(int $minDuration)
 * @method string getAppType
 * @method self withAppType(string $appType)
 * @method string getTag1
 * @method self withTag1(string $tag1)
 * @method string getTag2
 * @method self withTag2(string $tag2)
 */
class SearchTraces extends Rpc
{
    use R;
}

/**
 * @method string getTraceID
 * @method self withTraceID(string $traceID)
 * @method string getAppType
 * @method self withAppType(string $appType)
 */
class GetTrace extends Rpc
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
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getType
 * @method self withType(string $type)
 * @method string getSource
 * @method self withSource(string $source)
 * @method string getConfig
 * @method self withConfig(string $config)
 */
class CreateApp extends Rpc
{
    use R;
}

/**
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getType
 * @method self withType(string $type)
 */
class DeleteApp extends Rpc
{
    use R;
}
