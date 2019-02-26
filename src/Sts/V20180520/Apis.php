<?php

namespace AlibabaCloud\Sts\V20180520;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RpcRequest as Rpc;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method RegenerateTokenForInternal regenerateTokenForInternal($options = [])
 */
class V20180520
{
    use ApiResolverTrait;
}

/**
 * @method string getOriginalAccessKeyId
 * @method self withOriginalAccessKeyId(string $originalAccessKeyId)
 * @method string getOriginalSecurityToken
 * @method self withOriginalSecurityToken(string $originalSecurityToken)
 */
class RegenerateTokenForInternal extends Rpc
{
    use R;
}
