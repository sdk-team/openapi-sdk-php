<?php

namespace AlibabaCloud\ARMS;

use AlibabaCloud\VersionResolverTrait;

/**
 * Resolve version based on the method name.
 *
 * @method V20160804\ARMSApiResolver v20160804()
 * @method V20181015\ARMSApiResolver v20181015()
 */
class ARMS
{
    use VersionResolverTrait;
}
