<?php

namespace AlibabaCloud\Ots\V20130912;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method string getInstanceName
 * @method self withInstanceName
 */
final class GetInstance extends RpcRequest
{
}

final class DeleteUser extends RpcRequest
{
}

/**
 * @method string getInstanceName
 * @method self withInstanceName
 */
final class DeleteInstance extends RpcRequest
{
}

/**
 * @method Integer getInstanceQuota
 * @method self withInstanceQuota
 * @method string getDescription
 * @method self withDescription
 */
final class UpdateUser extends RpcRequest
{
}

/**
 * @method string getInstanceName
 * @method self withInstanceName
 * @method Integer getWriteCapacity
 * @method self withWriteCapacity
 * @method Integer getReadCapacity
 * @method self withReadCapacity
 * @method Integer getEntityQuota
 * @method self withEntityQuota
 * @method string getDescription
 * @method self withDescription
 */
final class UpdateInstance extends RpcRequest
{
}

final class ListInstance extends RpcRequest
{
}

/**
 * @method Integer getInstanceQuota
 * @method self withInstanceQuota
 * @method string getDescription
 * @method self withDescription
 */
final class InsertUser extends RpcRequest
{
}

/**
 * @method string getInstanceName
 * @method self withInstanceName
 * @method string getClusterName
 * @method self withClusterName
 * @method Integer getWriteCapacity
 * @method self withWriteCapacity
 * @method Integer getReadCapacity
 * @method self withReadCapacity
 * @method Integer getEntityQuota
 * @method self withEntityQuota
 * @method string getDescription
 * @method self withDescription
 */
final class InsertInstance extends RpcRequest
{
}

final class GetUser extends RpcRequest
{
}
