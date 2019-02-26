<?php

namespace AlibabaCloud\Hsm\V20180111;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RpcRequest as Rpc;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method RenewInstance renewInstance($options = [])
 * @method ReleaseInstance releaseInstance($options = [])
 * @method ModifyInstance modifyInstance($options = [])
 * @method DescribeRegions describeRegions($options = [])
 * @method DescribeInstances describeInstances($options = [])
 * @method CreateInstance createInstance($options = [])
 * @method ConfigWhiteList configWhiteList($options = [])
 * @method ConfigNetwork configNetwork($options = [])
 */
class V20180111
{
    use ApiResolverTrait;
}

/**
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method Integer getPeriod
 * @method self withPeriod(Integer $period)
 * @method string getPeriodUnit
 * @method self withPeriodUnit(string $periodUnit)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 */
class RenewInstance extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 */
class ReleaseInstance extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getRemark
 * @method self withRemark(string $remark)
 */
class ModifyInstance extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 */
class DescribeRegions extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getHsmStatus
 * @method self withHsmStatus(Integer $hsmStatus)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class DescribeInstances extends Rpc
{
    use R;
}

/**
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method Integer getPeriod
 * @method self withPeriod(Integer $period)
 * @method string getPeriodUnit
 * @method self withPeriodUnit(string $periodUnit)
 * @method string getHsmDeviceType
 * @method self withHsmDeviceType(string $hsmDeviceType)
 * @method string getHsmOem
 * @method self withHsmOem(string $hsmOem)
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 * @method Integer getQuantity
 * @method self withQuantity(Integer $quantity)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 */
class CreateInstance extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getWhiteList
 * @method self withWhiteList(string $whiteList)
 */
class ConfigWhiteList extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 * @method string getVSwitchId
 * @method self withVSwitchId(string $vSwitchId)
 * @method string getIp
 * @method self withIp(string $ip)
 */
class ConfigNetwork extends Rpc
{
    use R;
}
