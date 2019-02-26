<?php

namespace AlibabaCloud\Alimt\V20190102;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method TranslateGeneral translateGeneral($options = [])
 * @method TranslateECommerce translateECommerce($options = [])
 */
class V20190102
{
    use ApiResolverTrait;
}

class TranslateGeneral extends Roa
{
    use R;
}

class TranslateECommerce extends Roa
{
    use R;
}
