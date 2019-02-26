<?php

namespace AlibabaCloud\Uis\V20180821;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RpcRequest as Rpc;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method CreateDnatEntry createDnatEntry($options = [])
 * @method DeleteDnatEntry deleteDnatEntry($options = [])
 * @method DescribeDnatEntries describeDnatEntries($options = [])
 * @method ModifyDnatEntry modifyDnatEntry($options = [])
 * @method CreateUisNetworkInterface createUisNetworkInterface($options = [])
 * @method DeleteUisNetworkInterface deleteUisNetworkInterface($options = [])
 * @method DescribeUisNetworkInterfaces describeUisNetworkInterfaces($options = [])
 * @method DescribeAreas describeAreas($options = [])
 * @method GetDroppedIpList getDroppedIpList($options = [])
 * @method ModifyUisAttribute modifyUisAttribute($options = [])
 * @method CreateUis createUis($options = [])
 * @method DeleteUis deleteUis($options = [])
 * @method CreateUisNode createUisNode($options = [])
 * @method DeleteUisNode deleteUisNode($options = [])
 * @method ModifyUisNodeAttribute modifyUisNodeAttribute($options = [])
 * @method DescribeUisNodes describeUisNodes($options = [])
 * @method CreateUisConnection createUisConnection($options = [])
 * @method DeleteUisConnection deleteUisConnection($options = [])
 * @method ModifyUisConnectionAttribute modifyUisConnectionAttribute($options = [])
 * @method DescribeUisConnections describeUisConnections($options = [])
 * @method AddHighPriorityIp addHighPriorityIp($options = [])
 * @method DeleteHighPriorityIp deleteHighPriorityIp($options = [])
 * @method ModifyHighPriorityIp modifyHighPriorityIp($options = [])
 * @method DescribeHighPriorityIp describeHighPriorityIp($options = [])
 * @method AddUisNodeIp addUisNodeIp($options = [])
 * @method DeleteUisNodeIp deleteUisNodeIp($options = [])
 * @method DescribeUises describeUises($options = [])
 */
class V20180821
{
    use ApiResolverTrait;
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getUisNodeId
 * @method self withUisNodeId(string $uisNodeId)
 * @method string getDestinationIp
 * @method self withDestinationIp(string $destinationIp)
 * @method Integer getDestinationPort
 * @method self withDestinationPort(Integer $destinationPort)
 * @method string getOriginalIp
 * @method self withOriginalIp(string $originalIp)
 * @method Integer getOriginalPort
 * @method self withOriginalPort(Integer $originalPort)
 * @method string getIpProtocol
 * @method self withIpProtocol(string $ipProtocol)
 * @method string getName
 * @method self withName(string $name)
 */
class CreateDnatEntry extends Rpc
{
    use R;
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getUisNodeId
 * @method self withUisNodeId(string $uisNodeId)
 * @method string getUisDnatId
 * @method self withUisDnatId(string $uisDnatId)
 */
class DeleteDnatEntry extends Rpc
{
    use R;
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getUisNodeId
 * @method self withUisNodeId(string $uisNodeId)
 * @method string getUisDnatId
 * @method self withUisDnatId(string $uisDnatId)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeDnatEntries extends Rpc
{
    use R;
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getUisNodeId
 * @method self withUisNodeId(string $uisNodeId)
 * @method string getUisDnatId
 * @method self withUisDnatId(string $uisDnatId)
 * @method string getDestinationIp
 * @method self withDestinationIp(string $destinationIp)
 * @method Integer getDestinationPort
 * @method self withDestinationPort(Integer $destinationPort)
 * @method string getOriginalIp
 * @method self withOriginalIp(string $originalIp)
 * @method Integer getOriginalPort
 * @method self withOriginalPort(Integer $originalPort)
 * @method string getIpProtocol
 * @method self withIpProtocol(string $ipProtocol)
 * @method string getName
 * @method self withName(string $name)
 */
class ModifyDnatEntry extends Rpc
{
    use R;
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getUisNodeId
 * @method self withUisNodeId(string $uisNodeId)
 * @method string getVswitchId
 * @method self withVswitchId(string $vswitchId)
 * @method string getSecurityGroupId
 * @method self withSecurityGroupId(string $securityGroupId)
 * @method string getIpAddress
 * @method self withIpAddress(string $ipAddress)
 * @method string getName
 * @method self withName(string $name)
 * @method string getDescription
 * @method self withDescription(string $description)
 */
class CreateUisNetworkInterface extends Rpc
{
    use R;
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getUisNodeId
 * @method self withUisNodeId(string $uisNodeId)
 * @method string getUisEniId
 * @method self withUisEniId(string $uisEniId)
 */
class DeleteUisNetworkInterface extends Rpc
{
    use R;
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getUisNodeId
 * @method self withUisNodeId(string $uisNodeId)
 * @method string getUisEniId
 * @method self withUisEniId(string $uisEniId)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeUisNetworkInterfaces extends Rpc
{
    use R;
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 */
class DescribeAreas extends Rpc
{
    use R;
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getUisId
 * @method self withUisId(string $uisId)
 * @method string getChartDate
 * @method self withChartDate(string $chartDate)
 */
class GetDroppedIpList extends Rpc
{
    use R;
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getUisId
 * @method self withUisId(string $uisId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getDescription
 * @method self withDescription(string $description)
 */
class ModifyUisAttribute extends Rpc
{
    use R;
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getName
 * @method self withName(string $name)
 * @method string getDescription
 * @method self withDescription(string $description)
 */
class CreateUis extends Rpc
{
    use R;
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getUisId
 * @method self withUisId(string $uisId)
 */
class DeleteUis extends Rpc
{
    use R;
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getUisId
 * @method self withUisId(string $uisId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method Integer getUisNodeBandwidth
 * @method self withUisNodeBandwidth(Integer $uisNodeBandwidth)
 * @method Integer getIpAddrsNum
 * @method self withIpAddrsNum(Integer $ipAddrsNum)
 * @method string getUisNodeAreaId
 * @method self withUisNodeAreaId(string $uisNodeAreaId)
 */
class CreateUisNode extends Rpc
{
    use R;
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getUisId
 * @method self withUisId(string $uisId)
 * @method string getUisNodeId
 * @method self withUisNodeId(string $uisNodeId)
 */
class DeleteUisNode extends Rpc
{
    use R;
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getUisId
 * @method self withUisId(string $uisId)
 * @method string getUisNodeId
 * @method self withUisNodeId(string $uisNodeId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method Integer getUisNodeBandwidth
 * @method self withUisNodeBandwidth(Integer $uisNodeBandwidth)
 */
class ModifyUisNodeAttribute extends Rpc
{
    use R;
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getUisId
 * @method self withUisId(string $uisId)
 * @method string getUisNodeId
 * @method self withUisNodeId(string $uisNodeId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 */
class DescribeUisNodes extends Rpc
{
    use R;
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getUisNodeId
 * @method self withUisNodeId(string $uisNodeId)
 * @method string getUisProtocol
 * @method self withUisProtocol(string $uisProtocol)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getName
 * @method self withName(string $name)
 * @method string getGreConfig
 * @method self withGreConfig(string $greConfig)
 * @method string getSslConfig
 * @method self withSslConfig(string $sslConfig)
 */
class CreateUisConnection extends Rpc
{
    use R;
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getUisConnectionId
 * @method self withUisConnectionId(string $uisConnectionId)
 * @method string getUisNodeId
 * @method self withUisNodeId(string $uisNodeId)
 */
class DeleteUisConnection extends Rpc
{
    use R;
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getUisNodeId
 * @method self withUisNodeId(string $uisNodeId)
 * @method string getUisConnectionId
 * @method self withUisConnectionId(string $uisConnectionId)
 * @method string getUisProtocol
 * @method self withUisProtocol(string $uisProtocol)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getName
 * @method self withName(string $name)
 * @method string getGreConfig
 * @method self withGreConfig(string $greConfig)
 * @method string getSslConfig
 * @method self withSslConfig(string $sslConfig)
 */
class ModifyUisConnectionAttribute extends Rpc
{
    use R;
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getUisNodeId
 * @method self withUisNodeId(string $uisNodeId)
 * @method string getUisConnectionId
 * @method self withUisConnectionId(string $uisConnectionId)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 */
class DescribeUisConnections extends Rpc
{
    use R;
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getUisId
 * @method self withUisId(string $uisId)
 * @method string getHighPriorityIp
 * @method self withHighPriorityIp(string $highPriorityIp)
 */
class AddHighPriorityIp extends Rpc
{
    use R;
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getUisId
 * @method self withUisId(string $uisId)
 * @method string getHighPriorityIp
 * @method self withHighPriorityIp(string $highPriorityIp)
 */
class DeleteHighPriorityIp extends Rpc
{
    use R;
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getUisId
 * @method self withUisId(string $uisId)
 * @method string getHighPriorityIp
 * @method self withHighPriorityIp(string $highPriorityIp)
 */
class ModifyHighPriorityIp extends Rpc
{
    use R;
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getUisId
 * @method self withUisId(string $uisId)
 * @method string getHighPriorityIp
 * @method self withHighPriorityIp(string $highPriorityIp)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 */
class DescribeHighPriorityIp extends Rpc
{
    use R;
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getUisNodeId
 * @method self withUisNodeId(string $uisNodeId)
 * @method Integer getIpAddrsNum
 * @method self withIpAddrsNum(Integer $ipAddrsNum)
 */
class AddUisNodeIp extends Rpc
{
    use R;
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getUisNodeId
 * @method self withUisNodeId(string $uisNodeId)
 * @method string getUisNodeIpAddress
 * @method self withUisNodeIpAddress(string $uisNodeIpAddress)
 */
class DeleteUisNodeIp extends Rpc
{
    use R;
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getUisId
 * @method self withUisId(string $uisId)
 * @method string getName
 * @method self withName(string $name)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeUises extends Rpc
{
    use R;
}
