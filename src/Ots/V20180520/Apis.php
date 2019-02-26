<?php

namespace AlibabaCloud\Ots\V20180520;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method DoLogicalDeleteResource doLogicalDeleteResource($options = [])
 * @method DeleteTags deleteTags($options = [])
 * @method ListClusterType listClusterType($options = [])
 * @method DeleteInstance deleteInstance($options = [])
 * @method ListTags listTags($options = [])
 * @method InsertInstance insertInstance($options = [])
 * @method UpdateInstance updateInstance($options = [])
 * @method BindInstance2Vpc bindInstance2Vpc($options = [])
 * @method UnbindInstance2Vpc unbindInstance2Vpc($options = [])
 * @method ListVpcInfoByVpc listVpcInfoByVpc($options = [])
 * @method ListInstance listInstance($options = [])
 * @method GetInstance getInstance($options = [])
 * @method DoCheckResource doCheckResource($options = [])
 * @method DoPhysicalDeleteResource doPhysicalDeleteResource($options = [])
 * @method InsertTags insertTags($options = [])
 * @method ListVpcInfoByInstance listVpcInfoByInstance($options = [])
 */
class V20180520
{
    use ApiResolverTrait;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method bool getInterrupt
 * @method self withInterrupt(bool $interrupt)
 * @method string getInvoker
 * @method self withInvoker(string $invoker)
 * @method string getPk
 * @method self withPk(string $pk)
 * @method string getBid
 * @method self withBid(string $bid)
 * @method int getHid
 * @method self withHid(int $hid)
 * @method string getCountry
 * @method self withCountry(string $country)
 * @method string getTaskIdentifier
 * @method self withTaskIdentifier(string $taskIdentifier)
 * @method string getTaskExtraData
 * @method self withTaskExtraData(string $taskExtraData)
 * @method string getGmtWakeup
 * @method self withGmtWakeup(string $gmtWakeup)
 * @method bool getSuccess
 * @method self withSuccess(bool $success)
 * @method string getMessage
 * @method self withMessage(string $message)
 */
class DoLogicalDeleteResource extends Roa
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
 * @method bool getInterrupt
 * @method self withInterrupt(bool $interrupt)
 * @method string getInvoker
 * @method self withInvoker(string $invoker)
 * @method string getPk
 * @method self withPk(string $pk)
 * @method string getBid
 * @method self withBid(string $bid)
 * @method int getHid
 * @method self withHid(int $hid)
 * @method string getCountry
 * @method self withCountry(string $country)
 * @method string getTaskIdentifier
 * @method self withTaskIdentifier(string $taskIdentifier)
 * @method string getTaskExtraData
 * @method self withTaskExtraData(string $taskExtraData)
 * @method string getGmtWakeup
 * @method self withGmtWakeup(string $gmtWakeup)
 * @method bool getSuccess
 * @method self withSuccess(bool $success)
 * @method string getMessage
 * @method self withMessage(string $message)
 * @method int getLevel
 * @method self withLevel(int $level)
 * @method string getUrl
 * @method self withUrl(string $url)
 * @method string getPrompt
 * @method self withPrompt(string $prompt)
 */
class DoCheckResource extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method bool getInterrupt
 * @method self withInterrupt(bool $interrupt)
 * @method string getInvoker
 * @method self withInvoker(string $invoker)
 * @method string getPk
 * @method self withPk(string $pk)
 * @method string getBid
 * @method self withBid(string $bid)
 * @method int getHid
 * @method self withHid(int $hid)
 * @method string getCountry
 * @method self withCountry(string $country)
 * @method string getTaskIdentifier
 * @method self withTaskIdentifier(string $taskIdentifier)
 * @method string getTaskExtraData
 * @method self withTaskExtraData(string $taskExtraData)
 * @method string getGmtWakeup
 * @method self withGmtWakeup(string $gmtWakeup)
 * @method bool getSuccess
 * @method self withSuccess(bool $success)
 * @method string getMessage
 * @method self withMessage(string $message)
 */
class DoPhysicalDeleteResource extends Roa
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
 * @method int getPageNum
 * @method self withPageNum(int $pageNum)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 */
class ListVpcInfoByInstance extends Roa
{
    use R;
}
