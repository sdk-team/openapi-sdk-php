<?php

namespace AlibabaCloud\Drds\V20171016;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method DescribeDrdsInstanceMonitor describeDrdsInstanceMonitor($options = [])
 * @method DescribeDrdsInstanceDbMonitor describeDrdsInstanceDbMonitor($options = [])
 * @method CreateDrdsAccount createDrdsAccount($options = [])
 * @method QueryInstanceInfoByConn queryInstanceInfoByConn($options = [])
 * @method RemoveReadOnlyAccount removeReadOnlyAccount($options = [])
 * @method RemoveDrdsInstance removeDrdsInstance($options = [])
 * @method ModifyReadOnlyAccountPassword modifyReadOnlyAccountPassword($options = [])
 * @method ModifyRdsReadWeight modifyRdsReadWeight($options = [])
 * @method ModifyFullTableScan modifyFullTableScan($options = [])
 * @method ModifyDrdsIpWhiteList modifyDrdsIpWhiteList($options = [])
 * @method ModifyDrdsInstanceDescription modifyDrdsInstanceDescription($options = [])
 * @method ModifyDrdsDBPasswd modifyDrdsDBPasswd($options = [])
 * @method DescribeShardDBs describeShardDBs($options = [])
 * @method DescribeShardDbConnectionInfo describeShardDbConnectionInfo($options = [])
 * @method DescribeRegions describeRegions($options = [])
 * @method DescribeReadOnlyAccount describeReadOnlyAccount($options = [])
 * @method DescribeRdsList describeRdsList($options = [])
 * @method DescribeDrdsInstances describeDrdsInstances($options = [])
 * @method DescribeDrdsInstanceNetInfoForInner describeDrdsInstanceNetInfoForInner($options = [])
 * @method DescribeDrdsInstance describeDrdsInstance($options = [])
 * @method DescribeDrdsDBs describeDrdsDBs($options = [])
 * @method DescribeDrdsDBIpWhiteList describeDrdsDBIpWhiteList($options = [])
 * @method DescribeDrdsDB describeDrdsDB($options = [])
 * @method DescribeCreateDrdsInstanceStatus describeCreateDrdsInstanceStatus($options = [])
 * @method DeleteFailedDrdsDB deleteFailedDrdsDB($options = [])
 * @method DeleteDrdsDB deleteDrdsDB($options = [])
 * @method CreateReadOnlyAccount createReadOnlyAccount($options = [])
 * @method CreateDrdsInstance createDrdsInstance($options = [])
 * @method CreateDrdsDB createDrdsDB($options = [])
 */
class V20171016
{
    use ApiResolverTrait;
}

/**
 * @method string getDrdsInstanceId
 * @method self withDrdsInstanceId(string $drdsInstanceId)
 * @method string getKey
 * @method self withKey(string $key)
 * @method int getStartTime
 * @method self withStartTime(int $startTime)
 * @method int getEndTime
 * @method self withEndTime(int $endTime)
 * @method Integer getPeriodMultiple
 * @method self withPeriodMultiple(Integer $periodMultiple)
 */
class DescribeDrdsInstanceMonitor extends Roa
{
    use R;
}

/**
 * @method string getDrdsInstanceId
 * @method self withDrdsInstanceId(string $drdsInstanceId)
 * @method string getDbName
 * @method self withDbName(string $dbName)
 * @method string getKey
 * @method self withKey(string $key)
 * @method int getStartTime
 * @method self withStartTime(int $startTime)
 * @method int getEndTime
 * @method self withEndTime(int $endTime)
 */
class DescribeDrdsInstanceDbMonitor extends Roa
{
    use R;
}

/**
 * @method string getDrdsInstanceId
 * @method self withDrdsInstanceId(string $drdsInstanceId)
 * @method string getDbName
 * @method self withDbName(string $dbName)
 * @method string getUserName
 * @method self withUserName(string $userName)
 * @method string getPassword
 * @method self withPassword(string $password)
 */
class CreateDrdsAccount extends Roa
{
    use R;
}

/**
 * @method string getHost
 * @method self withHost(string $host)
 * @method Integer getPort
 * @method self withPort(Integer $port)
 * @method string getUserName
 * @method self withUserName(string $userName)
 */
class QueryInstanceInfoByConn extends Roa
{
    use R;
}

/**
 * @method string getDrdsInstanceId
 * @method self withDrdsInstanceId(string $drdsInstanceId)
 * @method string getDbName
 * @method self withDbName(string $dbName)
 * @method string getAccountName
 * @method self withAccountName(string $accountName)
 */
class RemoveReadOnlyAccount extends Roa
{
    use R;
}

/**
 * @method string getDrdsInstanceId
 * @method self withDrdsInstanceId(string $drdsInstanceId)
 */
class RemoveDrdsInstance extends Roa
{
    use R;
}

/**
 * @method string getDrdsInstanceId
 * @method self withDrdsInstanceId(string $drdsInstanceId)
 * @method string getDbName
 * @method self withDbName(string $dbName)
 * @method string getAccountName
 * @method self withAccountName(string $accountName)
 * @method string getOriginPassword
 * @method self withOriginPassword(string $originPassword)
 * @method string getNewPasswd
 * @method self withNewPasswd(string $newPasswd)
 */
class ModifyReadOnlyAccountPassword extends Roa
{
    use R;
}

/**
 * @method string getDrdsInstanceId
 * @method self withDrdsInstanceId(string $drdsInstanceId)
 * @method string getDbName
 * @method self withDbName(string $dbName)
 * @method string getInstanceNames
 * @method self withInstanceNames(string $instanceNames)
 * @method string getWeights
 * @method self withWeights(string $weights)
 */
class ModifyRdsReadWeight extends Roa
{
    use R;
}

/**
 * @method string getDrdsInstanceId
 * @method self withDrdsInstanceId(string $drdsInstanceId)
 * @method string getDbName
 * @method self withDbName(string $dbName)
 * @method string getTableNames
 * @method self withTableNames(string $tableNames)
 * @method bool getFullTableScan
 * @method self withFullTableScan(bool $fullTableScan)
 */
class ModifyFullTableScan extends Roa
{
    use R;
}

/**
 * @method string getDrdsInstanceId
 * @method self withDrdsInstanceId(string $drdsInstanceId)
 * @method string getDbName
 * @method self withDbName(string $dbName)
 * @method string getIpWhiteList
 * @method self withIpWhiteList(string $ipWhiteList)
 * @method bool getMode
 * @method self withMode(bool $mode)
 * @method string getGroupName
 * @method self withGroupName(string $groupName)
 * @method string getGroupAttribute
 * @method self withGroupAttribute(string $groupAttribute)
 */
class ModifyDrdsIpWhiteList extends Roa
{
    use R;
}

/**
 * @method string getDrdsInstanceId
 * @method self withDrdsInstanceId(string $drdsInstanceId)
 * @method string getDescription
 * @method self withDescription(string $description)
 */
class ModifyDrdsInstanceDescription extends Roa
{
    use R;
}

/**
 * @method string getDrdsInstanceId
 * @method self withDrdsInstanceId(string $drdsInstanceId)
 * @method string getDbName
 * @method self withDbName(string $dbName)
 * @method string getNewPasswd
 * @method self withNewPasswd(string $newPasswd)
 */
class ModifyDrdsDBPasswd extends Roa
{
    use R;
}

/**
 * @method string getDrdsInstanceId
 * @method self withDrdsInstanceId(string $drdsInstanceId)
 * @method string getDbName
 * @method self withDbName(string $dbName)
 */
class DescribeShardDBs extends Roa
{
    use R;
}

/**
 * @method string getDrdsInstanceId
 * @method self withDrdsInstanceId(string $drdsInstanceId)
 * @method string getDbName
 * @method self withDbName(string $dbName)
 * @method string getSubDbName
 * @method self withSubDbName(string $subDbName)
 */
class DescribeShardDbConnectionInfo extends Roa
{
    use R;
}

class DescribeRegions extends Roa
{
    use R;
}

/**
 * @method string getDrdsInstanceId
 * @method self withDrdsInstanceId(string $drdsInstanceId)
 * @method string getDbName
 * @method self withDbName(string $dbName)
 */
class DescribeReadOnlyAccount extends Roa
{
    use R;
}

/**
 * @method string getDrdsInstanceId
 * @method self withDrdsInstanceId(string $drdsInstanceId)
 * @method string getDbName
 * @method self withDbName(string $dbName)
 */
class DescribeRdsList extends Roa
{
    use R;
}

/**
 * @method string getType
 * @method self withType(string $type)
 */
class DescribeDrdsInstances extends Roa
{
    use R;
}

/**
 * @method string getDrdsInstanceId
 * @method self withDrdsInstanceId(string $drdsInstanceId)
 */
class DescribeDrdsInstanceNetInfoForInner extends Roa
{
    use R;
}

/**
 * @method string getDrdsInstanceId
 * @method self withDrdsInstanceId(string $drdsInstanceId)
 */
class DescribeDrdsInstance extends Roa
{
    use R;
}

/**
 * @method string getDrdsInstanceId
 * @method self withDrdsInstanceId(string $drdsInstanceId)
 */
class DescribeDrdsDBs extends Roa
{
    use R;
}

/**
 * @method string getDrdsInstanceId
 * @method self withDrdsInstanceId(string $drdsInstanceId)
 * @method string getDbName
 * @method self withDbName(string $dbName)
 * @method string getGroupName
 * @method self withGroupName(string $groupName)
 */
class DescribeDrdsDBIpWhiteList extends Roa
{
    use R;
}

/**
 * @method string getDrdsInstanceId
 * @method self withDrdsInstanceId(string $drdsInstanceId)
 * @method string getDbName
 * @method self withDbName(string $dbName)
 */
class DescribeDrdsDB extends Roa
{
    use R;
}

/**
 * @method string getDrdsInstanceId
 * @method self withDrdsInstanceId(string $drdsInstanceId)
 */
class DescribeCreateDrdsInstanceStatus extends Roa
{
    use R;
}

/**
 * @method string getDrdsInstanceId
 * @method self withDrdsInstanceId(string $drdsInstanceId)
 * @method string getDbName
 * @method self withDbName(string $dbName)
 */
class DeleteFailedDrdsDB extends Roa
{
    use R;
}

/**
 * @method string getDrdsInstanceId
 * @method self withDrdsInstanceId(string $drdsInstanceId)
 * @method string getDbName
 * @method self withDbName(string $dbName)
 */
class DeleteDrdsDB extends Roa
{
    use R;
}

/**
 * @method string getDrdsInstanceId
 * @method self withDrdsInstanceId(string $drdsInstanceId)
 * @method string getDbName
 * @method self withDbName(string $dbName)
 * @method string getpassword
 * @method self withpassword(string $password)
 */
class CreateReadOnlyAccount extends Roa
{
    use R;
}

/**
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 * @method string getType
 * @method self withType(string $type)
 * @method Integer getQuantity
 * @method self withQuantity(Integer $quantity)
 * @method string getInstanceSeries
 * @method self withInstanceSeries(string $instanceSeries)
 * @method string getSpecification
 * @method self withSpecification(string $specification)
 * @method string getPayType
 * @method self withPayType(string $payType)
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 * @method string getVswitchId
 * @method self withVswitchId(string $vswitchId)
 * @method bool getIsHa
 * @method self withIsHa(bool $isHa)
 * @method string getPricingCycle
 * @method self withPricingCycle(string $pricingCycle)
 * @method Integer getDuration
 * @method self withDuration(Integer $duration)
 * @method bool getIsAutoRenew
 * @method self withIsAutoRenew(bool $isAutoRenew)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 */
class CreateDrdsInstance extends Roa
{
    use R;
}

/**
 * @method string getDrdsInstanceId
 * @method self withDrdsInstanceId(string $drdsInstanceId)
 * @method string getDbName
 * @method self withDbName(string $dbName)
 * @method string getEncode
 * @method self withEncode(string $encode)
 * @method string getPassword
 * @method self withPassword(string $password)
 * @method string getRdsInstances
 * @method self withRdsInstances(string $rdsInstances)
 */
class CreateDrdsDB extends Roa
{
    use R;
}
