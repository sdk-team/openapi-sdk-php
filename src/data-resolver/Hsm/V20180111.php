<?php

namespace AlibabaCloud\Hsm\V20180111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method string getClientToken
 * @method self withClientToken
 * @method Integer getPeriod
 * @method self withPeriod
 * @method string getPeriodUnit
 * @method self withPeriodUnit
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId
 */
final class RenewInstance extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId
 */
final class ReleaseInstance extends RpcRequest
{
}

/**
 * @method string getSourceIp
 * @method self withSourceIp
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getRemark
 * @method self withRemark
 */
final class ModifyInstance extends RpcRequest
{
}

/**
 * @method string getSourceIp
 * @method self withSourceIp
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 */
final class DescribeRegions extends RpcRequest
{
}

/**
 * @method string getSourceIp
 * @method self withSourceIp
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getHsmStatus
 * @method self withHsmStatus
 * @method string getInstanceId
 * @method self withInstanceId
 */
final class DescribeInstances extends RpcRequest
{
}

/**
 * @method string getClientToken
 * @method self withClientToken
 * @method Integer getPeriod
 * @method self withPeriod
 * @method string getPeriodUnit
 * @method self withPeriodUnit
 * @method string getHsmDeviceType
 * @method self withHsmDeviceType
 * @method string getHsmOem
 * @method self withHsmOem
 * @method string getZoneId
 * @method self withZoneId
 * @method Integer getQuantity
 * @method self withQuantity
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId
 */
final class CreateInstance extends RpcRequest
{
}

/**
 * @method string getSourceIp
 * @method self withSourceIp
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getWhiteList
 * @method self withWhiteList
 */
final class ConfigWhiteList extends RpcRequest
{
}

/**
 * @method string getSourceIp
 * @method self withSourceIp
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getVpcId
 * @method self withVpcId
 * @method string getVSwitchId
 * @method self withVSwitchId
 * @method string getIp
 * @method self withIp
 */
final class ConfigNetwork extends RpcRequest
{
}
