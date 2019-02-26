<?php

namespace AlibabaCloud\Cloudauth\V20171010;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getVerifyToken
 * @method self withVerifyToken
 * @method RepeatList getMaterial
 * @method self withMaterial
 */
final class SubmitMaterials extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getBiz
 * @method self withBiz
 * @method string getTicketId
 * @method self withTicketId
 * @method Map getBinding
 * @method self withBinding
 * @method Map getUserData
 * @method self withUserData
 */
final class GetVerifyToken extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getBiz
 * @method self withBiz
 * @method string getTicketId
 * @method self withTicketId
 */
final class GetStatus extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getBiz
 * @method self withBiz
 * @method string getTicketId
 * @method self withTicketId
 */
final class GetMaterials extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getTargetImageType
 * @method self withTargetImageType
 * @method string getSourceImageType
 * @method self withSourceImageType
 * @method string getSourceImageValue
 * @method self withSourceImageValue
 * @method string getTargetImageValue
 * @method self withTargetImageValue
 */
final class CompareFaces extends RpcRequest
{
}
