<?php

namespace AlibabaCloud\IDST\V20170922;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method RoaSearch roaSearch($options = [])
 */
class V20170922
{
    use ApiResolverTrait;
}

/**
 * @method string getvid
 * @method self withvid(string $vid)
 * @method string getproductid
 * @method self withproductid(string $productid)
 * @method string getpicname
 * @method self withpicname(string $picname)
 * @method string getapp
 * @method self withapp(string $app)
 * @method string getcatid
 * @method self withcatid(string $catid)
 * @method Integer gets
 * @method self withs(Integer $s)
 * @method Integer getn
 * @method self withn(Integer $n)
 */
class RoaSearch extends Roa
{
    use R;
}
