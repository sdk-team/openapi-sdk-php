<?php

namespace AlibabaCloud\NlsCloudMeta\V20171214;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method CreateMetaToken createMetaToken($options = [])
 * @method VerifyMetaToken verifyMetaToken($options = [])
 */
class V20171214
{
    use ApiResolverTrait;
}

/**
 * @method string getParams
 * @method self withParams(string $params)
 */
class CreateMetaToken extends Roa
{
    use R;
}

/**
 * @method string getToken
 * @method self withToken(string $token)
 */
class VerifyMetaToken extends Roa
{
    use R;
}
