<?php

namespace AlibabaCloud\Lubancloud\V20180509;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RpcRequest as Rpc;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method SubmitCutoutTask submitCutoutTask($options = [])
 * @method QueryCutoutTaskResult queryCutoutTaskResult($options = [])
 * @method SubmitGenerateTask submitGenerateTask($options = [])
 * @method QueryGenerateTaskResult queryGenerateTaskResult($options = [])
 * @method GetStyles getStyles($options = [])
 * @method BuyOriginPictures buyOriginPictures($options = [])
 */
class V20180509
{
    use ApiResolverTrait;
}

/**
 * @method array getPictureUrl
 * @method self withPictureUrl(array $pictureUrl)
 */
class SubmitCutoutTask extends Rpc
{
    use R;
}

/**
 * @method int getTaskId
 * @method self withTaskId(int $taskId)
 */
class QueryCutoutTaskResult extends Rpc
{
    use R;
}

/**
 * @method Integer getWidth
 * @method self withWidth(Integer $width)
 * @method array getCopyWrite
 * @method self withCopyWrite(array $copyWrite)
 * @method array getMajorImagePath
 * @method self withMajorImagePath(array $majorImagePath)
 * @method string getActionPoint
 * @method self withActionPoint(string $actionPoint)
 * @method Integer getHeight
 * @method self withHeight(Integer $height)
 * @method string getLogoImagePath
 * @method self withLogoImagePath(string $logoImagePath)
 * @method array getPropertyId
 * @method self withPropertyId(array $propertyId)
 * @method Integer getType
 * @method self withType(Integer $type)
 * @method Integer getImageCount
 * @method self withImageCount(Integer $imageCount)
 */
class SubmitGenerateTask extends Rpc
{
    use R;
}

/**
 * @method int getTaskId
 * @method self withTaskId(int $taskId)
 */
class QueryGenerateTaskResult extends Rpc
{
    use R;
}

class GetStyles extends Rpc
{
    use R;
}

/**
 * @method array getPictureId
 * @method self withPictureId(array $pictureId)
 */
class BuyOriginPictures extends Rpc
{
    use R;
}
