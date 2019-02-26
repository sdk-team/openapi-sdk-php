<?php

namespace AlibabaCloud\Cloudauth\V20171117;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RpcRequest as Rpc;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method SubmitMaterials submitMaterials($options = [])
 * @method GetVerifyToken getVerifyToken($options = [])
 * @method GetStatus getStatus($options = [])
 * @method GetMaterials getMaterials($options = [])
 * @method CompareFaces compareFaces($options = [])
 */
class V20171117
{
    use ApiResolverTrait;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getVerifyToken
 * @method self withVerifyToken(string $verifyToken)
 * @method array getMaterial
 * @method self withMaterial(array $material)
 */
class SubmitMaterials extends Rpc
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getBiz
 * @method self withBiz(string $biz)
 * @method string getTicketId
 * @method self withTicketId(string $ticketId)
 * @method Map getBinding
 * @method self withBinding(Map $binding)
 * @method Map getUserData
 * @method self withUserData(Map $userData)
 */
class GetVerifyToken extends Rpc
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getBiz
 * @method self withBiz(string $biz)
 * @method string getTicketId
 * @method self withTicketId(string $ticketId)
 */
class GetStatus extends Rpc
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getBiz
 * @method self withBiz(string $biz)
 * @method string getTicketId
 * @method self withTicketId(string $ticketId)
 */
class GetMaterials extends Rpc
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getTargetImageType
 * @method self withTargetImageType(string $targetImageType)
 * @method string getSourceImageType
 * @method self withSourceImageType(string $sourceImageType)
 * @method string getSourceImageValue
 * @method self withSourceImageValue(string $sourceImageValue)
 * @method string getTargetImageValue
 * @method self withTargetImageValue(string $targetImageValue)
 */
class CompareFaces extends Rpc
{
    use R;
}
