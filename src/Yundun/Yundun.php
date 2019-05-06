<?php

namespace AlibabaCloud\Yundun;

use AlibabaCloud\VersionResolverTrait;

/**
 * Resolve version based on the method name.
 *
 * @method V20150227\YundunApiResolver v20150227()
 * @method V20150416\YundunApiResolver v20150416()
 */
class Yundun
{
    use VersionResolverTrait;
}
