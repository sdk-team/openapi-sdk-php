<?php

namespace AlibabaCloud\ARMS\V20180620;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RpcRequest as Rpc;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method doCheckResource doCheckResource($options = [])
 * @method doLogicalDeleteResource doLogicalDeleteResource($options = [])
 * @method doPhysicalDeleteResource doPhysicalDeleteResource($options = [])
 * @method ARMSQueryDataSet aRMSQueryDataSet($options = [])
 */
class V20180620
{
    use ApiResolverTrait;
}

/**
 * @method string getPk
 * @method self withPk(string $pk)
 * @method string getBid
 * @method self withBid(string $bid)
 * @method int getHid
 * @method self withHid(int $hid)
 * @method string getCountry
 * @method self withCountry(string $country)
 * @method string getTaskIdentifier
 * @method self withTaskIdentifier(string $taskIdentifier)
 * @method string getTaskExtraData
 * @method self withTaskExtraData(string $taskExtraData)
 * @method string getGmtWakeup
 * @method self withGmtWakeup(string $gmtWakeup)
 */
class doCheckResource extends Rpc
{
    use R;
}

/**
 * @method string getPk
 * @method self withPk(string $pk)
 * @method string getBid
 * @method self withBid(string $bid)
 * @method int getHid
 * @method self withHid(int $hid)
 * @method string getCountry
 * @method self withCountry(string $country)
 * @method string getTaskIdentifier
 * @method self withTaskIdentifier(string $taskIdentifier)
 * @method string getTaskExtraData
 * @method self withTaskExtraData(string $taskExtraData)
 * @method string getGmtWakeup
 * @method self withGmtWakeup(string $gmtWakeup)
 */
class doLogicalDeleteResource extends Rpc
{
    use R;
}

/**
 * @method string getPk
 * @method self withPk(string $pk)
 * @method string getBid
 * @method self withBid(string $bid)
 * @method int getHid
 * @method self withHid(int $hid)
 * @method string getCountry
 * @method self withCountry(string $country)
 * @method string getTaskIdentifier
 * @method self withTaskIdentifier(string $taskIdentifier)
 * @method string getTaskExtraData
 * @method self withTaskExtraData(string $taskExtraData)
 * @method string getGmtWakeup
 * @method self withGmtWakeup(string $gmtWakeup)
 */
class doPhysicalDeleteResource extends Rpc
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
