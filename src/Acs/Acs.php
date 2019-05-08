<?php

namespace AlibabaCloud\Acs;

use AlibabaCloud\VersionResolverTrait;

/**
 * Resolve version based on the method name.
 *
 * @method V20150101\AcsApiResolver v20150101()
 * @method V20150201\AcsApiResolver v20150201()
 */
class Acs
{
    use VersionResolverTrait;
}
