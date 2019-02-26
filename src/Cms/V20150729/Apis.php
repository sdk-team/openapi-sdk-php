<?php

namespace AlibabaCloud\Cms\V20150729;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method PutMetricDatum putMetricDatum($options = [])
 * @method DescribeMetricDatum describeMetricDatum($options = [])
 */
class V20150729
{
    use ApiResolverTrait;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getNamespace
 * @method self withNamespace(string $namespace)
 * @method string getMetrics
 * @method self withMetrics(string $metrics)
 */
class PutMetricDatum extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getNamespace
 * @method self withNamespace(string $namespace)
 * @method string getMetricName
 * @method self withMetricName(string $metricName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getDimensions
 * @method self withDimensions(string $dimensions)
 * @method string getPeriod
 * @method self withPeriod(string $period)
 * @method string getStatistics
 * @method self withStatistics(string $statistics)
 * @method string getGroupName
 * @method self withGroupName(string $groupName)
 * @method string getNextToken
 * @method self withNextToken(string $nextToken)
 * @method Integer getLength
 * @method self withLength(Integer $length)
 */
class DescribeMetricDatum extends Roa
{
    use R;
}
