<?php

namespace AlibabaCloud\DmsEnterprise\V20181101;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RpcRequest as Rpc;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method DisableUser disableUser($options = [])
 * @method EnableUser enableUser($options = [])
 * @method DeleteUser deleteUser($options = [])
 * @method GetOpLog getOpLog($options = [])
 * @method RegisterUser registerUser($options = [])
 * @method RegisterInstance registerInstance($options = [])
 */
class V20181101
{
    use ApiResolverTrait;
}

/**
 * @method int getTid
 * @method self withTid(int $tid)
 * @method int getUid
 * @method self withUid(int $uid)
 */
class DisableUser extends Rpc
{
    use R;
}

/**
 * @method int getTid
 * @method self withTid(int $tid)
 * @method int getUid
 * @method self withUid(int $uid)
 */
class EnableUser extends Rpc
{
    use R;
}

/**
 * @method int getTid
 * @method self withTid(int $tid)
 * @method int getUid
 * @method self withUid(int $uid)
 */
class DeleteUser extends Rpc
{
    use R;
}

/**
 * @method int getTid
 * @method self withTid(int $tid)
 * @method string getModule
 * @method self withModule(string $module)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 */
class GetOpLog extends Rpc
{
    use R;
}

/**
 * @method int getTid
 * @method self withTid(int $tid)
 * @method int getUid
 * @method self withUid(int $uid)
 * @method string getUserNick
 * @method self withUserNick(string $userNick)
 * @method string getRoleNames
 * @method self withRoleNames(string $roleNames)
 */
class RegisterUser extends Rpc
{
    use R;
}

/**
 * @method int getTid
 * @method self withTid(int $tid)
 * @method string getInstanceType
 * @method self withInstanceType(string $instanceType)
 * @method string getInstanceSource
 * @method self withInstanceSource(string $instanceSource)
 * @method string getNetworkType
 * @method self withNetworkType(string $networkType)
 * @method string getEnvType
 * @method self withEnvType(string $envType)
 * @method string getEcsInstanceId
 * @method self withEcsInstanceId(string $ecsInstanceId)
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 * @method string getEcsRegion
 * @method self withEcsRegion(string $ecsRegion)
 * @method string getHost
 * @method self withHost(string $host)
 * @method Integer getPort
 * @method self withPort(Integer $port)
 * @method string getSid
 * @method self withSid(string $sid)
 * @method string getDatabaseUser
 * @method self withDatabaseUser(string $databaseUser)
 * @method string getDatabasePassword
 * @method self withDatabasePassword(string $databasePassword)
 * @method string getInstanceAlias
 * @method self withInstanceAlias(string $instanceAlias)
 * @method int getDbaUid
 * @method self withDbaUid(int $dbaUid)
 * @method string getSafeRule
 * @method self withSafeRule(string $safeRule)
 * @method Integer getQueryTimeout
 * @method self withQueryTimeout(Integer $queryTimeout)
 * @method Integer getExportTimeout
 * @method self withExportTimeout(Integer $exportTimeout)
 */
class RegisterInstance extends Rpc
{
    use R;
}
