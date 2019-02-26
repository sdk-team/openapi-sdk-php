<?php

namespace AlibabaCloud\Cloudauth\V20180807;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RpcRequest as Rpc;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method SubmitMaterials submitMaterials($options = [])
 * @method GetVerifyToken getVerifyToken($options = [])
 * @method GetStatus getStatus($options = [])
 * @method GetMaterials getMaterials($options = [])
 * @method DetectFaceAttributes detectFaceAttributes($options = [])
 * @method CompareFaces compareFaces($options = [])
 */
class V20180807
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
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
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
 * @method Map getVerifyConfigs
 * @method self withVerifyConfigs(Map $verifyConfigs)
 */
class GetVerifyToken extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
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
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
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
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getMaterialValue
 * @method self withMaterialValue(string $materialValue)
 * @method bool getDontSaveDB
 * @method self withDontSaveDB(bool $dontSaveDB)
 * @method string getClientTag
 * @method self withClientTag(string $clientTag)
 * @method Integer getMaxNumPhotosPerCategory
 * @method self withMaxNumPhotosPerCategory(Integer $maxNumPhotosPerCategory)
 * @method string getRetAttributes
 * @method self withRetAttributes(string $retAttributes)
 * @method Integer getMaxFaceNum
 * @method self withMaxFaceNum(Integer $maxFaceNum)
 */
class DetectFaceAttributes extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
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
