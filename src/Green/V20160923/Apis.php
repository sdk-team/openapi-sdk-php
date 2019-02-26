<?php

namespace AlibabaCloud\Green\V20160923;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RpcRequest as Rpc;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method TextWordCorrect textWordCorrect($options = [])
 * @method TextKeywordFilter textKeywordFilter($options = [])
 * @method PluginAntispamResults pluginAntispamResults($options = [])
 * @method PluginAntispamFeedback pluginAntispamFeedback($options = [])
 * @method PluginAntispamDetection pluginAntispamDetection($options = [])
 * @method ImageResults imageResults($options = [])
 * @method ImageResult imageResult($options = [])
 * @method ImageFeedback imageFeedback($options = [])
 * @method ImageDetection imageDetection($options = [])
 * @method AntispamResults antispamResults($options = [])
 * @method AntispamDetection antispamDetection($options = [])
 */
class V20160923
{
    use ApiResolverTrait;
}

/**
 * @method string getText
 * @method self withText(string $text)
 */
class TextWordCorrect extends Rpc
{
    use R;
}

/**
 * @method string getText
 * @method self withText(string $text)
 */
class TextKeywordFilter extends Rpc
{
    use R;
}

/**
 * @method string getBizScene
 * @method self withBizScene(string $bizScene)
 * @method string getClientVersion
 * @method self withClientVersion(string $clientVersion)
 * @method string getPostContentType
 * @method self withPostContentType(string $postContentType)
 * @method string getPageIndex
 * @method self withPageIndex(string $pageIndex)
 * @method string getPageSize
 * @method self withPageSize(string $pageSize)
 */
class PluginAntispamResults extends Rpc
{
    use R;
}

/**
 * @method string getClientVersion
 * @method self withClientVersion(string $clientVersion)
 * @method string getActionResult
 * @method self withActionResult(string $actionResult)
 * @method array getIds
 * @method self withIds(array $ids)
 */
class PluginAntispamFeedback extends Rpc
{
    use R;
}

/**
 * @method string getBizScene
 * @method self withBizScene(string $bizScene)
 * @method string getClientVersion
 * @method self withClientVersion(string $clientVersion)
 * @method string getUserId
 * @method self withUserId(string $userId)
 * @method string getTopicId
 * @method self withTopicId(string $topicId)
 * @method string getFeedId
 * @method self withFeedId(string $feedId)
 * @method string getTitle
 * @method self withTitle(string $title)
 * @method int getPostTime
 * @method self withPostTime(int $postTime)
 * @method string getPostContent
 * @method self withPostContent(string $postContent)
 * @method string getPostContentType
 * @method self withPostContentType(string $postContentType)
 * @method string getDynamicProp
 * @method self withDynamicProp(string $dynamicProp)
 */
class PluginAntispamDetection extends Rpc
{
    use R;
}

/**
 * @method array getTaskId
 * @method self withTaskId(array $taskId)
 */
class ImageResults extends Rpc
{
    use R;
}

/**
 * @method string getTaskId
 * @method self withTaskId(string $taskId)
 */
class ImageResult extends Rpc
{
    use R;
}

/**
 * @method string getTaskId
 * @method self withTaskId(string $taskId)
 */
class ImageFeedback extends Rpc
{
    use R;
}

/**
 * @method bool getAsync
 * @method self withAsync(bool $async)
 * @method string getNotifyUrl
 * @method self withNotifyUrl(string $notifyUrl)
 * @method string getNotifySeed
 * @method self withNotifySeed(string $notifySeed)
 * @method array getImageUrl
 * @method self withImageUrl(array $imageUrl)
 * @method array getScene
 * @method self withScene(array $scene)
 */
class ImageDetection extends Rpc
{
    use R;
}

/**
 * @method array getDataId
 * @method self withDataId(array $dataId)
 */
class AntispamResults extends Rpc
{
    use R;
}

/**
 * @method string getDataId
 * @method self withDataId(string $dataId)
 * @method string getPostId
 * @method self withPostId(string $postId)
 * @method string getSceneId
 * @method self withSceneId(string $sceneId)
 * @method string getPostNick
 * @method self withPostNick(string $postNick)
 * @method string getPostIp
 * @method self withPostIp(string $postIp)
 * @method string getPostMac
 * @method self withPostMac(string $postMac)
 * @method int getPostTime
 * @method self withPostTime(int $postTime)
 * @method string getMachineCode
 * @method self withMachineCode(string $machineCode)
 * @method string getParentDataId
 * @method self withParentDataId(string $parentDataId)
 * @method string getTitle
 * @method self withTitle(string $title)
 * @method string getPostContent
 * @method self withPostContent(string $postContent)
 * @method array getImageUrl
 * @method self withImageUrl(array $imageUrl)
 */
class AntispamDetection extends Rpc
{
    use R;
}
