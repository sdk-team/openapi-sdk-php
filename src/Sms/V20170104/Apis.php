<?php

namespace AlibabaCloud\Sms\V20170104;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method SingleSendSms singleSendSms($options = [])
 */
class V20170104
{
    use ApiResolverTrait;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getSignName
 * @method self withSignName(string $signName)
 * @method string getTemplateCode
 * @method self withTemplateCode(string $templateCode)
 * @method string getRecNum
 * @method self withRecNum(string $recNum)
 * @method string getParamString
 * @method self withParamString(string $paramString)
 */
class SingleSendSms extends Roa
{
    use R;
}
