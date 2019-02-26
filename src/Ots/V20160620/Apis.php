<?php

namespace AlibabaCloud\Ots\V20160620;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method UpdateInstance updateInstance($options = [])
 * @method UnbindInstance2Vpc unbindInstance2Vpc($options = [])
 * @method ListVpcInfoByVpc listVpcInfoByVpc($options = [])
 * @method ListVpcInfoByInstance listVpcInfoByInstance($options = [])
 * @method ListTags listTags($options = [])
 * @method ListInstance listInstance($options = [])
 * @method ListClusterType listClusterType($options = [])
 * @method InsertTags insertTags($options = [])
 * @method InsertInstance insertInstance($options = [])
 * @method GetInstance getInstance($options = [])
 * @method DeleteTags deleteTags($options = [])
 * @method DeleteInstance deleteInstance($options = [])
 * @method BindInstance2Vpc bindInstance2Vpc($options = [])
 */
class V20160620
{
    use ApiResolverTrait;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getInstanceName
 * @method self withInstanceName(string $instanceName)
 * @method string getNetwork
 * @method self withNetwork(string $network)
 */
class UpdateInstance extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getInstanceName
 * @method self withInstanceName(string $instanceName)
 * @method string getInstanceVpcName
 * @method self withInstanceVpcName(string $instanceVpcName)
 * @method string getRegionNo
 * @method self withRegionNo(string $regionNo)
 */
class UnbindInstance2Vpc extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 * @method int getPageNum
 * @method self withPageNum(int $pageNum)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 * @method array getTagInfo
 * @method self withTagInfo(array $tagInfo)
 */
class ListVpcInfoByVpc extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getInstanceName
 * @method self withInstanceName(string $instanceName)
 * @method int getPageNum
 * @method self withPageNum(int $pageNum)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 */
class ListVpcInfoByInstance extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getInstanceName
 * @method self withInstanceName(string $instanceName)
 * @method int getPageNum
 * @method self withPageNum(int $pageNum)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 * @method array getTagInfo
 * @method self withTagInfo(array $tagInfo)
 */
class ListTags extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method int getPageNum
 * @method self withPageNum(int $pageNum)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 * @method array getTagInfo
 * @method self withTagInfo(array $tagInfo)
 */
class ListInstance extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 */
class ListClusterType extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getInstanceName
 * @method self withInstanceName(string $instanceName)
 * @method array getTagInfo
 * @method self withTagInfo(array $tagInfo)
 */
class InsertTags extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getInstanceName
 * @method self withInstanceName(string $instanceName)
 * @method string getClusterType
 * @method self withClusterType(string $clusterType)
 * @method string getNetwork
 * @method self withNetwork(string $network)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method array getTagInfo
 * @method self withTagInfo(array $tagInfo)
 */
class InsertInstance extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getInstanceName
 * @method self withInstanceName(string $instanceName)
 */
class GetInstance extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getInstanceName
 * @method self withInstanceName(string $instanceName)
 * @method array getTagInfo
 * @method self withTagInfo(array $tagInfo)
 */
class DeleteTags extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getInstanceName
 * @method self withInstanceName(string $instanceName)
 */
class DeleteInstance extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 * @method string getVirtualSwitchId
 * @method self withVirtualSwitchId(string $virtualSwitchId)
 * @method string getInstanceName
 * @method self withInstanceName(string $instanceName)
 * @method string getInstanceVpcName
 * @method self withInstanceVpcName(string $instanceVpcName)
 * @method string getRegionNo
 * @method self withRegionNo(string $regionNo)
 * @method string getNetwork
 * @method self withNetwork(string $network)
 */
class BindInstance2Vpc extends Roa
{
    use R;
}
