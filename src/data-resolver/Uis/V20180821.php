<?php

namespace AlibabaCloud\Uis\V20180821;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getUisNodeId
 * @method self withUisNodeId
 * @method string getDestinationIp
 * @method self withDestinationIp
 * @method Integer getDestinationPort
 * @method self withDestinationPort
 * @method string getOriginalIp
 * @method self withOriginalIp
 * @method Integer getOriginalPort
 * @method self withOriginalPort
 * @method string getIpProtocol
 * @method self withIpProtocol
 * @method string getName
 * @method self withName
 */
final class CreateDnatEntry extends RpcRequest
{
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getUisNodeId
 * @method self withUisNodeId
 * @method string getUisDnatId
 * @method self withUisDnatId
 */
final class DeleteDnatEntry extends RpcRequest
{
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getUisNodeId
 * @method self withUisNodeId
 * @method string getUisDnatId
 * @method self withUisDnatId
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class DescribeDnatEntries extends RpcRequest
{
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getUisNodeId
 * @method self withUisNodeId
 * @method string getUisDnatId
 * @method self withUisDnatId
 * @method string getDestinationIp
 * @method self withDestinationIp
 * @method Integer getDestinationPort
 * @method self withDestinationPort
 * @method string getOriginalIp
 * @method self withOriginalIp
 * @method Integer getOriginalPort
 * @method self withOriginalPort
 * @method string getIpProtocol
 * @method self withIpProtocol
 * @method string getName
 * @method self withName
 */
final class ModifyDnatEntry extends RpcRequest
{
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getUisNodeId
 * @method self withUisNodeId
 * @method string getVswitchId
 * @method self withVswitchId
 * @method string getSecurityGroupId
 * @method self withSecurityGroupId
 * @method string getIpAddress
 * @method self withIpAddress
 * @method string getName
 * @method self withName
 * @method string getDescription
 * @method self withDescription
 */
final class CreateUisNetworkInterface extends RpcRequest
{
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getUisNodeId
 * @method self withUisNodeId
 * @method string getUisEniId
 * @method self withUisEniId
 */
final class DeleteUisNetworkInterface extends RpcRequest
{
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getUisNodeId
 * @method self withUisNodeId
 * @method string getUisEniId
 * @method self withUisEniId
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class DescribeUisNetworkInterfaces extends RpcRequest
{
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 */
final class DescribeAreas extends RpcRequest
{
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getUisId
 * @method self withUisId
 * @method string getChartDate
 * @method self withChartDate
 */
final class GetDroppedIpList extends RpcRequest
{
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getClientToken
 * @method self withClientToken
 * @method string getUisId
 * @method self withUisId
 * @method string getName
 * @method self withName
 * @method string getDescription
 * @method self withDescription
 */
final class ModifyUisAttribute extends RpcRequest
{
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getClientToken
 * @method self withClientToken
 * @method string getName
 * @method self withName
 * @method string getDescription
 * @method self withDescription
 */
final class CreateUis extends RpcRequest
{
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getClientToken
 * @method self withClientToken
 * @method string getUisId
 * @method self withUisId
 */
final class DeleteUis extends RpcRequest
{
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getUisId
 * @method self withUisId
 * @method string getName
 * @method self withName
 * @method string getDescription
 * @method self withDescription
 * @method Integer getUisNodeBandwidth
 * @method self withUisNodeBandwidth
 * @method Integer getIpAddrsNum
 * @method self withIpAddrsNum
 * @method string getUisNodeAreaId
 * @method self withUisNodeAreaId
 */
final class CreateUisNode extends RpcRequest
{
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getClientToken
 * @method self withClientToken
 * @method string getUisId
 * @method self withUisId
 * @method string getUisNodeId
 * @method self withUisNodeId
 */
final class DeleteUisNode extends RpcRequest
{
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getUisId
 * @method self withUisId
 * @method string getUisNodeId
 * @method self withUisNodeId
 * @method string getName
 * @method self withName
 * @method string getDescription
 * @method self withDescription
 * @method Integer getUisNodeBandwidth
 * @method self withUisNodeBandwidth
 */
final class ModifyUisNodeAttribute extends RpcRequest
{
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getUisId
 * @method self withUisId
 * @method string getUisNodeId
 * @method self withUisNodeId
 * @method string getName
 * @method self withName
 * @method string getStatus
 * @method self withStatus
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getClientToken
 * @method self withClientToken
 */
final class DescribeUisNodes extends RpcRequest
{
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getUisNodeId
 * @method self withUisNodeId
 * @method string getUisProtocol
 * @method self withUisProtocol
 * @method string getDescription
 * @method self withDescription
 * @method string getName
 * @method self withName
 * @method string getGreConfig
 * @method self withGreConfig
 * @method string getSslConfig
 * @method self withSslConfig
 */
final class CreateUisConnection extends RpcRequest
{
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getClientToken
 * @method self withClientToken
 * @method string getUisConnectionId
 * @method self withUisConnectionId
 * @method string getUisNodeId
 * @method self withUisNodeId
 */
final class DeleteUisConnection extends RpcRequest
{
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getUisNodeId
 * @method self withUisNodeId
 * @method string getUisConnectionId
 * @method self withUisConnectionId
 * @method string getUisProtocol
 * @method self withUisProtocol
 * @method string getDescription
 * @method self withDescription
 * @method string getName
 * @method self withName
 * @method string getGreConfig
 * @method self withGreConfig
 * @method string getSslConfig
 * @method self withSslConfig
 */
final class ModifyUisConnectionAttribute extends RpcRequest
{
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getUisNodeId
 * @method self withUisNodeId
 * @method string getUisConnectionId
 * @method self withUisConnectionId
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getClientToken
 * @method self withClientToken
 */
final class DescribeUisConnections extends RpcRequest
{
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getClientToken
 * @method self withClientToken
 * @method string getUisId
 * @method self withUisId
 * @method string getHighPriorityIp
 * @method self withHighPriorityIp
 */
final class AddHighPriorityIp extends RpcRequest
{
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getClientToken
 * @method self withClientToken
 * @method string getUisId
 * @method self withUisId
 * @method string getHighPriorityIp
 * @method self withHighPriorityIp
 */
final class DeleteHighPriorityIp extends RpcRequest
{
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getClientToken
 * @method self withClientToken
 * @method string getUisId
 * @method self withUisId
 * @method string getHighPriorityIp
 * @method self withHighPriorityIp
 */
final class ModifyHighPriorityIp extends RpcRequest
{
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getUisId
 * @method self withUisId
 * @method string getHighPriorityIp
 * @method self withHighPriorityIp
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getClientToken
 * @method self withClientToken
 */
final class DescribeHighPriorityIp extends RpcRequest
{
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getClientToken
 * @method self withClientToken
 * @method string getUisNodeId
 * @method self withUisNodeId
 * @method Integer getIpAddrsNum
 * @method self withIpAddrsNum
 */
final class AddUisNodeIp extends RpcRequest
{
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getClientToken
 * @method self withClientToken
 * @method string getUisNodeId
 * @method self withUisNodeId
 * @method string getUisNodeIpAddress
 * @method self withUisNodeIpAddress
 */
final class DeleteUisNodeIp extends RpcRequest
{
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getUisId
 * @method self withUisId
 * @method string getName
 * @method self withName
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class DescribeUises extends RpcRequest
{
}
