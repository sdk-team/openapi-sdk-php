<?php

namespace AlibabaCloud\IDST\V20170920;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method Search search($options = [])
 */
class V20170920
{
    use ApiResolverTrait;
}

/**
 * @method string getVid
 * @method self withVid(string $vid)
 * @method string getProductId
 * @method self withProductId(string $productId)
 * @method string getPicName
 * @method self withPicName(string $picName)
 * @method string getApp
 * @method self withApp(string $app)
 */
class Search extends Roa
{
    use R;
}
