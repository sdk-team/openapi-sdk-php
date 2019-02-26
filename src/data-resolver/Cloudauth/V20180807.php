<?php

namespace AlibabaCloud\Cloudauth\V20180807;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method string getSourceIp
 * @method self withSourceIp
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
 * @method string getSourceIp
 * @method self withSourceIp
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
 * @method Map getVerifyConfigs
 * @method self withVerifyConfigs
 */
final class GetVerifyToken extends RpcRequest
{
}

/**
 * @method string getSourceIp
 * @method self withSourceIp
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
 * @method string getSourceIp
 * @method self withSourceIp
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
 * @method string getSourceIp
 * @method self withSourceIp
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getMaterialValue
 * @method self withMaterialValue
 * @method Boolean getDontSaveDB
 * @method self withDontSaveDB
 * @method string getClientTag
 * @method self withClientTag
 * @method Integer getMaxNumPhotosPerCategory
 * @method self withMaxNumPhotosPerCategory
 * @method string getRetAttributes
 * @method self withRetAttributes
 * @method Integer getMaxFaceNum
 * @method self withMaxFaceNum
 */
final class DetectFaceAttributes extends RpcRequest
{
}

/**
 * @method string getSourceIp
 * @method self withSourceIp
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
