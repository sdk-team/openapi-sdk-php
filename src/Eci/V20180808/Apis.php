<?php

namespace AlibabaCloud\Eci\V20180808;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RpcRequest as Rpc;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method DescribeContainerGroupPrice describeContainerGroupPrice($options = [])
 * @method ExecContainerCommand execContainerCommand($options = [])
 * @method DescribePrimaryIp describePrimaryIp($options = [])
 * @method DescribeContainerLog describeContainerLog($options = [])
 * @method CreateContainerGroup createContainerGroup($options = [])
 * @method DescribeContainerGroups describeContainerGroups($options = [])
 * @method DeleteContainerGroup deleteContainerGroup($options = [])
 */
class V20180808
{
    use ApiResolverTrait;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method float getCpu
 * @method self withCpu(float $cpu)
 * @method float getMemory
 * @method self withMemory(float $memory)
 */
class DescribeContainerGroupPrice extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getContainerGroupId
 * @method self withContainerGroupId(string $containerGroupId)
 * @method string getContainerName
 * @method self withContainerName(string $containerName)
 * @method string getCommand
 * @method self withCommand(string $command)
 */
class ExecContainerCommand extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getContainerGroupIds
 * @method self withContainerGroupIds(string $containerGroupIds)
 */
class DescribePrimaryIp extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getContainerGroupId
 * @method self withContainerGroupId(string $containerGroupId)
 * @method string getContainerName
 * @method self withContainerName(string $containerName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method Integer getTail
 * @method self withTail(Integer $tail)
 */
class DescribeContainerLog extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 * @method string getSecurityGroupId
 * @method self withSecurityGroupId(string $securityGroupId)
 * @method string getVSwitchId
 * @method self withVSwitchId(string $vSwitchId)
 * @method string getContainerGroupName
 * @method self withContainerGroupName(string $containerGroupName)
 * @method string getRestartPolicy
 * @method self withRestartPolicy(string $restartPolicy)
 * @method array getTag
 * @method self withTag(array $tag)
 * @method array getImageRegistryCredential
 * @method self withImageRegistryCredential(array $imageRegistryCredential)
 * @method array getContainer
 * @method self withContainer(array $container)
 * @method array getVolume
 * @method self withVolume(array $volume)
 * @method string getEipInstanceId
 * @method self withEipInstanceId(string $eipInstanceId)
 * @method array getInitContainer
 * @method self withInitContainer(array $initContainer)
 * @method array getDnsConfigNameServer
 * @method self withDnsConfigNameServer(array $dnsConfigNameServer)
 * @method array getDnsConfigSearch
 * @method self withDnsConfigSearch(array $dnsConfigSearch)
 * @method array getDnsConfigOption
 * @method self withDnsConfigOption(array $dnsConfigOption)
 * @method float getCpu
 * @method self withCpu(float $cpu)
 * @method float getMemory
 * @method self withMemory(float $memory)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 * @method string getDnsPolicy
 * @method self withDnsPolicy(string $dnsPolicy)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 */
class CreateContainerGroup extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 * @method string getVSwitchId
 * @method self withVSwitchId(string $vSwitchId)
 * @method string getNextToken
 * @method self withNextToken(string $nextToken)
 * @method Integer getLimit
 * @method self withLimit(Integer $limit)
 * @method array getTag
 * @method self withTag(array $tag)
 * @method string getContainerGroupIds
 * @method self withContainerGroupIds(string $containerGroupIds)
 * @method string getContainerGroupName
 * @method self withContainerGroupName(string $containerGroupName)
 * @method string getStatus
 * @method self withStatus(string $status)
 */
class DescribeContainerGroups extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getContainerGroupId
 * @method self withContainerGroupId(string $containerGroupId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 */
class DeleteContainerGroup extends Rpc
{
    use R;
}
