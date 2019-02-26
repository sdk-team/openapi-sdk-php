<?php

namespace AlibabaCloud\Eci\V20180808;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method Float getCpu
 * @method self withCpu
 * @method Float getMemory
 * @method self withMemory
 */
final class DescribeContainerGroupPrice extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getContainerGroupId
 * @method self withContainerGroupId
 * @method string getContainerName
 * @method self withContainerName
 * @method string getCommand
 * @method self withCommand
 */
final class ExecContainerCommand extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getContainerGroupIds
 * @method self withContainerGroupIds
 */
final class DescribePrimaryIp extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getContainerGroupId
 * @method self withContainerGroupId
 * @method string getContainerName
 * @method self withContainerName
 * @method string getStartTime
 * @method self withStartTime
 * @method Integer getTail
 * @method self withTail
 */
final class DescribeContainerLog extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getZoneId
 * @method self withZoneId
 * @method string getSecurityGroupId
 * @method self withSecurityGroupId
 * @method string getVSwitchId
 * @method self withVSwitchId
 * @method string getContainerGroupName
 * @method self withContainerGroupName
 * @method string getRestartPolicy
 * @method self withRestartPolicy
 * @method RepeatList getTag
 * @method self withTag
 * @method RepeatList getImageRegistryCredential
 * @method self withImageRegistryCredential
 * @method RepeatList getContainer
 * @method self withContainer
 * @method RepeatList getVolume
 * @method self withVolume
 * @method string getEipInstanceId
 * @method self withEipInstanceId
 * @method RepeatList getInitContainer
 * @method self withInitContainer
 * @method RepeatList getDnsConfig.NameServer
 * @method self withDnsConfig.NameServer
 * @method RepeatList getDnsConfig.Search
 * @method self withDnsConfig.Search
 * @method RepeatList getDnsConfig.Option
 * @method self withDnsConfig.Option
 * @method Float getCpu
 * @method self withCpu
 * @method Float getMemory
 * @method self withMemory
 * @method string getResourceGroupId
 * @method self withResourceGroupId
 * @method string getDnsPolicy
 * @method self withDnsPolicy
 * @method string getClientToken
 * @method self withClientToken
 */
final class CreateContainerGroup extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getZoneId
 * @method self withZoneId
 * @method string getVSwitchId
 * @method self withVSwitchId
 * @method string getNextToken
 * @method self withNextToken
 * @method Integer getLimit
 * @method self withLimit
 * @method RepeatList getTag
 * @method self withTag
 * @method string getContainerGroupIds
 * @method self withContainerGroupIds
 * @method string getContainerGroupName
 * @method self withContainerGroupName
 * @method string getStatus
 * @method self withStatus
 */
final class DescribeContainerGroups extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getContainerGroupId
 * @method self withContainerGroupId
 * @method string getClientToken
 * @method self withClientToken
 */
final class DeleteContainerGroup extends RpcRequest
{
}
