<?php

namespace AlibabaCloud\Green\V20170112;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method VideoFeedback videoFeedback($options = [])
 * @method TextScan textScan($options = [])
 * @method TextFeedback textFeedback($options = [])
 * @method ImageSyncScan imageSyncScan($options = [])
 * @method ImageScanFeedback imageScanFeedback($options = [])
 * @method ImageAsyncScanResults imageAsyncScanResults($options = [])
 * @method ImageAsyncScan imageAsyncScan($options = [])
 * @method VideoAsyncScanResults videoAsyncScanResults($options = [])
 * @method VideoAsyncScan videoAsyncScan($options = [])
 */
class V20170112
{
    use ApiResolverTrait;
}

/**
 * @method string getClientInfo
 * @method self withClientInfo(string $clientInfo)
 */
class VideoFeedback extends Roa
{
    use R;
}

/**
 * @method string getClientInfo
 * @method self withClientInfo(string $clientInfo)
 */
class TextScan extends Roa
{
    use R;
}

/**
 * @method string getClientInfo
 * @method self withClientInfo(string $clientInfo)
 */
class TextFeedback extends Roa
{
    use R;
}

/**
 * @method string getClientInfo
 * @method self withClientInfo(string $clientInfo)
 */
class ImageSyncScan extends Roa
{
    use R;
}

/**
 * @method string getClientInfo
 * @method self withClientInfo(string $clientInfo)
 */
class ImageScanFeedback extends Roa
{
    use R;
}

/**
 * @method string getClientInfo
 * @method self withClientInfo(string $clientInfo)
 */
class ImageAsyncScanResults extends Roa
{
    use R;
}

/**
 * @method string getClientInfo
 * @method self withClientInfo(string $clientInfo)
 */
class ImageAsyncScan extends Roa
{
    use R;
}

/**
 * @method string getClientInfo
 * @method self withClientInfo(string $clientInfo)
 */
class VideoAsyncScanResults extends Roa
{
    use R;
}

/**
 * @method string getClientInfo
 * @method self withClientInfo(string $clientInfo)
 */
class VideoAsyncScan extends Roa
{
    use R;
}
