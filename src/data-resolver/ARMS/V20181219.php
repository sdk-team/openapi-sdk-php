<?php

namespace AlibabaCloud\ARMS\V20181219;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method string getAppType
 * @method self withAppType
 */
final class GetServices extends RpcRequest
{
}

/**
 * @method Long getStartTime
 * @method self withStartTime
 * @method Long getEndTime
 * @method self withEndTime
 * @method string getServiceName
 * @method self withServiceName
 * @method string getOperationName
 * @method self withOperationName
 * @method Long getMinDuration
 * @method self withMinDuration
 * @method string getAppType
 * @method self withAppType
 * @method string getTag1
 * @method self withTag1
 * @method string getTag2
 * @method self withTag2
 */
final class SearchTraces extends RpcRequest
{
}

/**
 * @method string getTraceID
 * @method self withTraceID
 * @method string getAppType
 * @method self withAppType
 */
final class GetTrace extends RpcRequest
{
}

/**
 * @method RepeatList getDimensions
 * @method self withDimensions
 * @method Integer getIntervalInSec
 * @method self withIntervalInSec
 * @method string getDateStr
 * @method self withDateStr
 * @method Long getMinTime
 * @method self withMinTime
 * @method Long getMaxTime
 * @method self withMaxTime
 * @method Boolean getIsDrillDown
 * @method self withIsDrillDown
 * @method RepeatList getMeasures
 * @method self withMeasures
 * @method string getOrderByKey
 * @method self withOrderByKey
 * @method Integer getLimit
 * @method self withLimit
 * @method Boolean getReduceTail
 * @method self withReduceTail
 * @method Boolean getHungryMode
 * @method self withHungryMode
 * @method RepeatList getRequiredDims
 * @method self withRequiredDims
 * @method Long getDatasetId
 * @method self withDatasetId
 * @method RepeatList getOptionalDims
 * @method self withOptionalDims
 * @method string getSecurityToken
 * @method self withSecurityToken
 */
final class ARMSQueryDataSet extends RpcRequest
{
}

/**
 * @method RepeatList getFilters
 * @method self withFilters
 * @method Integer getIintervalInSec
 * @method self withIintervalInSec
 * @method Long getStartTime
 * @method self withStartTime
 * @method Long getEndTime
 * @method self withEndTime
 * @method string getMetric
 * @method self withMetric
 * @method RepeatList getMeasures
 * @method self withMeasures
 * @method RepeatList getDimensions
 * @method self withDimensions
 * @method string getOrderBy
 * @method self withOrderBy
 * @method Integer getLimit
 * @method self withLimit
 * @method string getOrder
 * @method self withOrder
 * @method string getSecurityToken
 * @method self withSecurityToken
 */
final class MetricQuery extends RpcRequest
{
}

/**
 * @method string getAppId
 * @method self withAppId
 * @method string getAppName
 * @method self withAppName
 * @method string getType
 * @method self withType
 * @method string getSource
 * @method self withSource
 * @method string getConfig
 * @method self withConfig
 */
final class CreateApp extends RpcRequest
{
}

/**
 * @method string getAppId
 * @method self withAppId
 * @method string getType
 * @method self withType
 */
final class DeleteApp extends RpcRequest
{
}
