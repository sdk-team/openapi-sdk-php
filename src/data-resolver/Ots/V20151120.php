<?php

namespace AlibabaCloud\Ots\V20151120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getInstanceName
 * @method self withInstanceName
 * @method string getNetwork
 * @method self withNetwork
 */
final class UpdateInstance extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getInstanceName
 * @method self withInstanceName
 * @method string getInstanceVpcName
 * @method self withInstanceVpcName
 * @method string getRegionNo
 * @method self withRegionNo
 */
final class UnbindInstance2Vpc extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getVpcId
 * @method self withVpcId
 * @method Long getPageNum
 * @method self withPageNum
 * @method Long getPageSize
 * @method self withPageSize
 * @method RepeatList getTagInfo
 * @method self withTagInfo
 */
final class ListVpcInfoByVpc extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getInstanceName
 * @method self withInstanceName
 * @method Long getPageNum
 * @method self withPageNum
 * @method Long getPageSize
 * @method self withPageSize
 */
final class ListVpcInfoByInstance extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getVpcId
 * @method self withVpcId
 * @method string getVirtualSwitchId
 * @method self withVirtualSwitchId
 * @method string getInstanceName
 * @method self withInstanceName
 * @method string getInstanceVpcName
 * @method self withInstanceVpcName
 * @method string getRegionNo
 * @method self withRegionNo
 * @method string getNetwork
 * @method self withNetwork
 */
final class BindInstance2Vpc extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getInstanceName
 * @method self withInstanceName
 * @method Long getPageNum
 * @method self withPageNum
 * @method Long getPageSize
 * @method self withPageSize
 * @method RepeatList getTagInfo
 * @method self withTagInfo
 */
final class ListTags extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method Long getPageNum
 * @method self withPageNum
 * @method Long getPageSize
 * @method self withPageSize
 * @method RepeatList getTagInfo
 * @method self withTagInfo
 */
final class ListInstance extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getInstanceName
 * @method self withInstanceName
 * @method RepeatList getTagInfo
 * @method self withTagInfo
 */
final class InsertTags extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getInstanceName
 * @method self withInstanceName
 * @method string getClusterType
 * @method self withClusterType
 * @method string getNetwork
 * @method self withNetwork
 * @method string getDescription
 * @method self withDescription
 * @method RepeatList getTagInfo
 * @method self withTagInfo
 */
final class InsertInstance extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getInstanceName
 * @method self withInstanceName
 */
final class GetInstance extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getInstanceName
 * @method self withInstanceName
 * @method RepeatList getTagInfo
 * @method self withTagInfo
 */
final class DeleteTags extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getInstanceName
 * @method self withInstanceName
 */
final class DeleteInstance extends RpcRequest
{
}
