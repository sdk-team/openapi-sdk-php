<?php

namespace AlibabaCloud\Cloudauth\V20170912;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RpcRequest as Rpc;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method GetVerifyToken getVerifyToken($options = [])
 * @method GetStatus getStatus($options = [])
 * @method GetMaterials getMaterials($options = [])
 * @method CompareFaces compareFaces($options = [])
 * @method SubmitMaterials submitMaterials($options = [])
 */
class V20170912
{
    use ApiResolverTrait;
}

/**
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
 * @method string getSourceImageType
 * @method self withSourceImageType(string $sourceImageType)
 * @method string getSourceImageValue
 * @method self withSourceImageValue(string $sourceImageValue)
 * @method string getTargetImageType
 * @method self withTargetImageType(string $targetImageType)
 * @method string getTargetImageValue
 * @method self withTargetImageValue(string $targetImageValue)
 */
class CompareFaces extends Rpc
{
    use R;
}

/**
 * @method string getVerifyToken
 * @method self withVerifyToken(string $verifyToken)
 * @method array getMaterial
 * @method self withMaterial(array $material)
 */
class SubmitMaterials extends Rpc
{
    use R;
}
