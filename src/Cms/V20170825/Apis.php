<?php

namespace AlibabaCloud\Cms\V20170825;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method UpdateEventTriggerDesc updateEventTriggerDesc($options = [])
 * @method SetEventTrigger setEventTrigger($options = [])
 * @method ListEventTrigger listEventTrigger($options = [])
 * @method GetEventTrigger getEventTrigger($options = [])
 * @method DeleteEventTrigger deleteEventTrigger($options = [])
 * @method ChangeEventTriggerStatus changeEventTriggerStatus($options = [])
 */
class V20170825
{
    use ApiResolverTrait;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getUuid
 * @method self withUuid(string $uuid)
 * @method string getShowName
 * @method self withShowName(string $showName)
 * @method string getDetail
 * @method self withDetail(string $detail)
 */
class UpdateEventTriggerDesc extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string geteventProduct
 * @method self witheventProduct(string $eventProduct)
 * @method string getUuid
 * @method self withUuid(string $uuid)
 * @method string getEventName
 * @method self withEventName(string $eventName)
 * @method string getShowName
 * @method self withShowName(string $showName)
 * @method string getDetail
 * @method self withDetail(string $detail)
 * @method string getappGroupId
 * @method self withappGroupId(string $appGroupId)
 * @method string getappGroupName
 * @method self withappGroupName(string $appGroupName)
 * @method string getConditionJson
 * @method self withConditionJson(string $conditionJson)
 * @method string getMatchJson
 * @method self withMatchJson(string $matchJson)
 * @method string getTargetListJson
 * @method self withTargetListJson(string $targetListJson)
 */
class SetEventTrigger extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method int getOffset
 * @method self withOffset(int $offset)
 * @method int getLength
 * @method self withLength(int $length)
 */
class ListEventTrigger extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getUuid
 * @method self withUuid(string $uuid)
 */
class GetEventTrigger extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getUuid
 * @method self withUuid(string $uuid)
 */
class DeleteEventTrigger extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getUuid
 * @method self withUuid(string $uuid)
 * @method int getstatus
 * @method self withstatus(int $status)
 */
class ChangeEventTriggerStatus extends Roa
{
    use R;
}
