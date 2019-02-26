<?php

namespace AlibabaCloud\Dts\V20150629;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method drcGuidRouteApi drcGuidRouteApi($options = [])
 */
class V20150629
{
    use ApiResolverTrait;
}

/**
 * @method string getguid
 * @method self withguid(string $guid)
 */
class drcGuidRouteApi extends Roa
{
    use R;
}
