<?php

namespace AlibabaCloud\Dybaseapi\V20170525;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method QueryTokenForMnsQueue queryTokenForMnsQueue($options = [])
 */
class V20170525
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
 * @method string getMessageType
 * @method self withMessageType(string $messageType)
 * @method string getQueueName
 * @method self withQueueName(string $queueName)
 */
class QueryTokenForMnsQueue extends Roa
{
    use R;
}
