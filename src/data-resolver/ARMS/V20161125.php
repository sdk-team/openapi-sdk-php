<?php

namespace AlibabaCloud\ARMS\V20161125;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method Long getDatasetId
 * @method self withDatasetId
 * @method Integer getIntervalInSec
 * @method self withIntervalInSec
 * @method string getDateStr
 * @method self withDateStr
 * @method Long getMinTime
 * @method self withMinTime
 * @method Long getMaxTime
 * @method self withMaxTime
 * @method RepeatList getDimensions
 * @method self withDimensions
 * @method string getWhereInKey
 * @method self withWhereInKey
 * @method RepeatList getWhereInValues
 * @method self withWhereInValues
 * @method RepeatList getMeasures
 * @method self withMeasures
 * @method Boolean getIsDrillDown
 * @method self withIsDrillDown
 * @method string getOrderByKey
 * @method self withOrderByKey
 * @method Integer getLimit
 * @method self withLimit
 * @method Boolean getReduceTail
 * @method self withReduceTail
 */
final class WhereInDimQuery extends RpcRequest
{
}

/**
 * @method Long getDatasetId
 * @method self withDatasetId
 * @method Integer getIntervalInSec
 * @method self withIntervalInSec
 * @method Long getDateStr
 * @method self withDateStr
 * @method Long getMinTime
 * @method self withMinTime
 * @method Long getMaxTime
 * @method self withMaxTime
 * @method RepeatList getDimensions
 * @method self withDimensions
 * @method RepeatList getMeasures
 * @method self withMeasures
 * @method Boolean getIsDrillDown
 * @method self withIsDrillDown
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
 * @method RepeatList getOptionalDims
 * @method self withOptionalDims
 */
final class ARMSQueryDataSet extends RpcRequest
{
}
