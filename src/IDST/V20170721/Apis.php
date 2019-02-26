<?php

namespace AlibabaCloud\IDST\V20170721;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method Iconic iconic($options = [])
 */
class V20170721
{
    use ApiResolverTrait;
}

/**
 * @method string getApp
 * @method self withApp(string $app)
 * @method string getUrl
 * @method self withUrl(string $url)
 * @method string getOutfmt
 * @method self withOutfmt(string $outfmt)
 * @method Integer getStart
 * @method self withStart(Integer $start)
 * @method string getRegion
 * @method self withRegion(string $region)
 * @method Integer getCategory
 * @method self withCategory(Integer $category)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class Iconic extends Roa
{
    use R;
}
