<?php

namespace AlibabaCloud\IDST\V20170830;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method Image image($options = [])
 */
class V20170830
{
    use ApiResolverTrait;
}

/**
 * @method string getVid
 * @method self withVid(string $vid)
 * @method string getItemId
 * @method self withItemId(string $itemId)
 * @method string getPicName
 * @method self withPicName(string $picName)
 * @method string getApp
 * @method self withApp(string $app)
 */
class Image extends Roa
{
    use R;
}
