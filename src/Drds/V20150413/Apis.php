<?php

namespace AlibabaCloud\Drds\V20150413;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method ValidateOrder validateOrder($options = [])
 * @method QueryInstanceInfoByConn queryInstanceInfoByConn($options = [])
 * @method ProductInfoComplement productInfoComplement($options = [])
 * @method OrderSucceededCallback orderSucceededCallback($options = [])
 * @method DrdsApiValidateOrder drdsApiValidateOrder($options = [])
 * @method CompleteProductInfo completeProductInfo($options = [])
 * @method CompleteOrderInfo completeOrderInfo($options = [])
 * @method CompleteCommodityInfo completeCommodityInfo($options = [])
 * @method CancleDDLTask cancleDDLTask($options = [])
 * @method DescribeRegions describeRegions($options = [])
 * @method DescribeDrdsInstanceNetInfoForInner describeDrdsInstanceNetInfoForInner($options = [])
 * @method RemoveReadOnlyAccount removeReadOnlyAccount($options = [])
 * @method ModifyReadOnlyAccountPassword modifyReadOnlyAccountPassword($options = [])
 * @method DescribeReadOnlyAccount describeReadOnlyAccount($options = [])
 * @method CreateReadOnlyAccount createReadOnlyAccount($options = [])
 * @method ModifyRdsReadWeight modifyRdsReadWeight($options = [])
 * @method ModifyFullTableScan modifyFullTableScan($options = [])
 * @method DescribeShardDBs describeShardDBs($options = [])
 * @method DescribeShardDbConnectionInfo describeShardDbConnectionInfo($options = [])
 * @method DescribeRdsList describeRdsList($options = [])
 * @method DeleteFailedDrdsDB deleteFailedDrdsDB($options = [])
 * @method DescribeDrdsDBIpWhiteList describeDrdsDBIpWhiteList($options = [])
 * @method ModifyDrdsIpWhiteList modifyDrdsIpWhiteList($options = [])
 * @method RemoveDrdsInstance removeDrdsInstance($options = [])
 * @method DescribeCreateDrdsInstanceStatus describeCreateDrdsInstanceStatus($options = [])
 * @method ModifyDrdsInstanceDescription modifyDrdsInstanceDescription($options = [])
 * @method ModifyDrdsDBPasswd modifyDrdsDBPasswd($options = [])
 * @method ListUnCompleteTasks listUnCompleteTasks($options = [])
 * @method DropTables dropTables($options = [])
 * @method DropIndexes dropIndexes($options = [])
 * @method DescribeDrdsInstances describeDrdsInstances($options = [])
 * @method DescribeDrdsInstance describeDrdsInstance($options = [])
 * @method DescribeDrdsDBs describeDrdsDBs($options = [])
 * @method DescribeDrdsDB describeDrdsDB($options = [])
 * @method DescribeDDLTask describeDDLTask($options = [])
 * @method DeleteDrdsDB deleteDrdsDB($options = [])
 * @method CreateTable createTable($options = [])
 * @method CreateIndex createIndex($options = [])
 * @method CreateDrdsInstance createDrdsInstance($options = [])
 * @method CreateDrdsDB createDrdsDB($options = [])
 * @method CancelDDLTask cancelDDLTask($options = [])
 * @method AlterTable alterTable($options = [])
 */
class V20150413
{
    use ApiResolverTrait;
}

/**
 * @method string getdata
 * @method self withdata(string $data)
 */
class ValidateOrder extends Roa
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
 * @method string getname
 * @method self withname(string $name)
 * @method string getgender
 * @method self withgender(string $gender)
 */
class ProductInfoComplement extends Roa
{
    use R;
}

/**
 * @method string getdata
 * @method self withdata(string $data)
 */
class OrderSucceededCallback extends Roa
{
    use R;
}

/**
 * @method string getdata
 * @method self withdata(string $data)
 */
class DrdsApiValidateOrder extends Roa
{
    use R;
}

/**
 * @method string getdata
 * @method self withdata(string $data)
 */
class CompleteProductInfo extends Roa
{
    use R;
}

/**
 * @method string getdata
 * @method self withdata(string $data)
 */
class CompleteOrderInfo extends Roa
{
    use R;
}

/**
 * @method string getdata
 * @method self withdata(string $data)
 */
class CompleteCommodityInfo extends Roa
{
    use R;
}

/**
 * @method string getDrdsInstanceId
 * @method self withDrdsInstanceId(string $drdsInstanceId)
 * @method string getDbName
 * @method self withDbName(string $dbName)
 * @method string getTaskId
 * @method self withTaskId(string $taskId)
 */
class CancleDDLTask extends Roa
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
 */
class DescribeDrdsInstanceNetInfoForInner extends Roa
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
 * @method string getpassword
 * @method self withpassword(string $password)
 */
class CreateReadOnlyAccount extends Roa
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
 */
class RemoveDrdsInstance extends Roa
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
class ListUnCompleteTasks extends Roa
{
    use R;
}

/**
 * @method string getDrdsInstanceId
 * @method self withDrdsInstanceId(string $drdsInstanceId)
 * @method string getDbName
 * @method self withDbName(string $dbName)
 * @method string getTables
 * @method self withTables(string $tables)
 */
class DropTables extends Roa
{
    use R;
}

/**
 * @method string getDrdsInstanceId
 * @method self withDrdsInstanceId(string $drdsInstanceId)
 * @method string getDbName
 * @method self withDbName(string $dbName)
 * @method string getTable
 * @method self withTable(string $table)
 * @method string getIndexes
 * @method self withIndexes(string $indexes)
 */
class DropIndexes extends Roa
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
 */
class DescribeDrdsDB extends Roa
{
    use R;
}

/**
 * @method string getDrdsInstanceId
 * @method self withDrdsInstanceId(string $drdsInstanceId)
 * @method string getDbName
 * @method self withDbName(string $dbName)
 * @method string getTaskId
 * @method self withTaskId(string $taskId)
 */
class DescribeDDLTask extends Roa
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
 * @method string getDdlSql
 * @method self withDdlSql(string $ddlSql)
 * @method string getShardType
 * @method self withShardType(string $shardType)
 * @method string getShardKey
 * @method self withShardKey(string $shardKey)
 * @method string getAllowFullTableScan
 * @method self withAllowFullTableScan(string $allowFullTableScan)
 */
class CreateTable extends Roa
{
    use R;
}

/**
 * @method string getDrdsInstanceId
 * @method self withDrdsInstanceId(string $drdsInstanceId)
 * @method string getDbName
 * @method self withDbName(string $dbName)
 * @method string getDdlSql
 * @method self withDdlSql(string $ddlSql)
 */
class CreateIndex extends Roa
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
 * @method string getSpecification
 * @method self withSpecification(string $specification)
 * @method string getPayType
 * @method self withPayType(string $payType)
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 * @method string getVswitchId
 * @method self withVswitchId(string $vswitchId)
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

/**
 * @method string getDrdsInstanceId
 * @method self withDrdsInstanceId(string $drdsInstanceId)
 * @method string getDbName
 * @method self withDbName(string $dbName)
 * @method string getTaskId
 * @method self withTaskId(string $taskId)
 */
class CancelDDLTask extends Roa
{
    use R;
}

/**
 * @method string getDrdsInstanceId
 * @method self withDrdsInstanceId(string $drdsInstanceId)
 * @method string getDbName
 * @method self withDbName(string $dbName)
 * @method string getDdlSql
 * @method self withDdlSql(string $ddlSql)
 */
class AlterTable extends Roa
{
    use R;
}
