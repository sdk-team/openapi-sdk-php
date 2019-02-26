<?php

namespace AlibabaCloud\Drds\V20171016;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method string getDrdsInstanceId
 * @method self withDrdsInstanceId
 * @method string getKey
 * @method self withKey
 * @method Long getStartTime
 * @method self withStartTime
 * @method Long getEndTime
 * @method self withEndTime
 * @method Integer getPeriodMultiple
 * @method self withPeriodMultiple
 */
final class DescribeDrdsInstanceMonitor extends RpcRequest
{
}

/**
 * @method string getDrdsInstanceId
 * @method self withDrdsInstanceId
 * @method string getDbName
 * @method self withDbName
 * @method string getKey
 * @method self withKey
 * @method Long getStartTime
 * @method self withStartTime
 * @method Long getEndTime
 * @method self withEndTime
 */
final class DescribeDrdsInstanceDbMonitor extends RpcRequest
{
}

/**
 * @method string getDrdsInstanceId
 * @method self withDrdsInstanceId
 * @method string getDbName
 * @method self withDbName
 * @method string getUserName
 * @method self withUserName
 * @method string getPassword
 * @method self withPassword
 */
final class CreateDrdsAccount extends RpcRequest
{
}

/**
 * @method string getHost
 * @method self withHost
 * @method Integer getPort
 * @method self withPort
 * @method string getUserName
 * @method self withUserName
 */
final class QueryInstanceInfoByConn extends RpcRequest
{
}

/**
 * @method string getDrdsInstanceId
 * @method self withDrdsInstanceId
 * @method string getDbName
 * @method self withDbName
 * @method string getAccountName
 * @method self withAccountName
 */
final class RemoveReadOnlyAccount extends RpcRequest
{
}

/**
 * @method string getDrdsInstanceId
 * @method self withDrdsInstanceId
 */
final class RemoveDrdsInstance extends RpcRequest
{
}

/**
 * @method string getDrdsInstanceId
 * @method self withDrdsInstanceId
 * @method string getDbName
 * @method self withDbName
 * @method string getAccountName
 * @method self withAccountName
 * @method string getOriginPassword
 * @method self withOriginPassword
 * @method string getNewPasswd
 * @method self withNewPasswd
 */
final class ModifyReadOnlyAccountPassword extends RpcRequest
{
}

/**
 * @method string getDrdsInstanceId
 * @method self withDrdsInstanceId
 * @method string getDbName
 * @method self withDbName
 * @method string getInstanceNames
 * @method self withInstanceNames
 * @method string getWeights
 * @method self withWeights
 */
final class ModifyRdsReadWeight extends RpcRequest
{
}

/**
 * @method string getDrdsInstanceId
 * @method self withDrdsInstanceId
 * @method string getDbName
 * @method self withDbName
 * @method string getTableNames
 * @method self withTableNames
 * @method Boolean getFullTableScan
 * @method self withFullTableScan
 */
final class ModifyFullTableScan extends RpcRequest
{
}

/**
 * @method string getDrdsInstanceId
 * @method self withDrdsInstanceId
 * @method string getDbName
 * @method self withDbName
 * @method string getIpWhiteList
 * @method self withIpWhiteList
 * @method Boolean getMode
 * @method self withMode
 * @method string getGroupName
 * @method self withGroupName
 * @method string getGroupAttribute
 * @method self withGroupAttribute
 */
final class ModifyDrdsIpWhiteList extends RpcRequest
{
}

/**
 * @method string getDrdsInstanceId
 * @method self withDrdsInstanceId
 * @method string getDescription
 * @method self withDescription
 */
final class ModifyDrdsInstanceDescription extends RpcRequest
{
}

/**
 * @method string getDrdsInstanceId
 * @method self withDrdsInstanceId
 * @method string getDbName
 * @method self withDbName
 * @method string getNewPasswd
 * @method self withNewPasswd
 */
final class ModifyDrdsDBPasswd extends RpcRequest
{
}

/**
 * @method string getDrdsInstanceId
 * @method self withDrdsInstanceId
 * @method string getDbName
 * @method self withDbName
 */
final class DescribeShardDBs extends RpcRequest
{
}

/**
 * @method string getDrdsInstanceId
 * @method self withDrdsInstanceId
 * @method string getDbName
 * @method self withDbName
 * @method string getSubDbName
 * @method self withSubDbName
 */
final class DescribeShardDbConnectionInfo extends RpcRequest
{
}

final class DescribeRegions extends RpcRequest
{
}

/**
 * @method string getDrdsInstanceId
 * @method self withDrdsInstanceId
 * @method string getDbName
 * @method self withDbName
 */
final class DescribeReadOnlyAccount extends RpcRequest
{
}

/**
 * @method string getDrdsInstanceId
 * @method self withDrdsInstanceId
 * @method string getDbName
 * @method self withDbName
 */
final class DescribeRdsList extends RpcRequest
{
}

/**
 * @method string getType
 * @method self withType
 */
final class DescribeDrdsInstances extends RpcRequest
{
}

/**
 * @method string getDrdsInstanceId
 * @method self withDrdsInstanceId
 */
final class DescribeDrdsInstanceNetInfoForInner extends RpcRequest
{
}

/**
 * @method string getDrdsInstanceId
 * @method self withDrdsInstanceId
 */
final class DescribeDrdsInstance extends RpcRequest
{
}

/**
 * @method string getDrdsInstanceId
 * @method self withDrdsInstanceId
 */
final class DescribeDrdsDBs extends RpcRequest
{
}

/**
 * @method string getDrdsInstanceId
 * @method self withDrdsInstanceId
 * @method string getDbName
 * @method self withDbName
 * @method string getGroupName
 * @method self withGroupName
 */
final class DescribeDrdsDBIpWhiteList extends RpcRequest
{
}

/**
 * @method string getDrdsInstanceId
 * @method self withDrdsInstanceId
 * @method string getDbName
 * @method self withDbName
 */
final class DescribeDrdsDB extends RpcRequest
{
}

/**
 * @method string getDrdsInstanceId
 * @method self withDrdsInstanceId
 */
final class DescribeCreateDrdsInstanceStatus extends RpcRequest
{
}

/**
 * @method string getDrdsInstanceId
 * @method self withDrdsInstanceId
 * @method string getDbName
 * @method self withDbName
 */
final class DeleteFailedDrdsDB extends RpcRequest
{
}

/**
 * @method string getDrdsInstanceId
 * @method self withDrdsInstanceId
 * @method string getDbName
 * @method self withDbName
 */
final class DeleteDrdsDB extends RpcRequest
{
}

/**
 * @method string getDrdsInstanceId
 * @method self withDrdsInstanceId
 * @method string getDbName
 * @method self withDbName
 * @method string getpassword
 * @method self withpassword
 */
final class CreateReadOnlyAccount extends RpcRequest
{
}

/**
 * @method string getDescription
 * @method self withDescription
 * @method string getZoneId
 * @method self withZoneId
 * @method string getType
 * @method self withType
 * @method Integer getQuantity
 * @method self withQuantity
 * @method string getInstanceSeries
 * @method self withInstanceSeries
 * @method string getSpecification
 * @method self withSpecification
 * @method string getPayType
 * @method self withPayType
 * @method string getVpcId
 * @method self withVpcId
 * @method string getVswitchId
 * @method self withVswitchId
 * @method Boolean getIsHa
 * @method self withIsHa
 * @method string getPricingCycle
 * @method self withPricingCycle
 * @method Integer getDuration
 * @method self withDuration
 * @method Boolean getIsAutoRenew
 * @method self withIsAutoRenew
 * @method string getClientToken
 * @method self withClientToken
 */
final class CreateDrdsInstance extends RpcRequest
{
}

/**
 * @method string getDrdsInstanceId
 * @method self withDrdsInstanceId
 * @method string getDbName
 * @method self withDbName
 * @method string getEncode
 * @method self withEncode
 * @method string getPassword
 * @method self withPassword
 * @method string getRdsInstances
 * @method self withRdsInstances
 */
final class CreateDrdsDB extends RpcRequest
{
}
