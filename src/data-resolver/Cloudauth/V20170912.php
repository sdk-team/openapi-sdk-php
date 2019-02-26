<?php

namespace AlibabaCloud\Cloudauth\V20170912;

use AlibabaCloud\Client\Request\RpcRequest;

/**
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
 * @method string getBiz
 * @method self withBiz
 * @method string getTicketId
 * @method self withTicketId
 */
final class GetStatus extends RpcRequest
{
}

/**
 * @method string getBiz
 * @method self withBiz
 * @method string getTicketId
 * @method self withTicketId
 */
final class GetMaterials extends RpcRequest
{
}

/**
 * @method string getSourceImageType
 * @method self withSourceImageType
 * @method string getSourceImageValue
 * @method self withSourceImageValue
 * @method string getTargetImageType
 * @method self withTargetImageType
 * @method string getTargetImageValue
 * @method self withTargetImageValue
 */
final class CompareFaces extends RpcRequest
{
}

/**
 * @method string getVerifyToken
 * @method self withVerifyToken
 * @method RepeatList getMaterial
 * @method self withMaterial
 */
final class SubmitMaterials extends RpcRequest
{
}
