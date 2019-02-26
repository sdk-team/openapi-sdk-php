<?php

namespace AlibabaCloud\Iot\V20181120;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RpcRequest as Rpc;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method AuthorizeMessageService authorizeMessageService($options = [])
 * @method GetTemplateDetail getTemplateDetail($options = [])
 * @method QueryTemplateList queryTemplateList($options = [])
 * @method RegisterSMSServiceMetadata registerSMSServiceMetadata($options = [])
 * @method QuerySignList querySignList($options = [])
 * @method QueryEvent queryEvent($options = [])
 * @method CreateEventType createEventType($options = [])
 * @method UpdateEventType updateEventType($options = [])
 * @method DeleteEventType deleteEventType($options = [])
 * @method QueryEventTypeById queryEventTypeById($options = [])
 * @method CountEventType countEventType($options = [])
 * @method QueryEventType queryEventType($options = [])
 * @method CreateEvent createEvent($options = [])
 * @method UpdateEvent updateEvent($options = [])
 * @method DeleteEvent deleteEvent($options = [])
 * @method BindEventTriggerRules bindEventTriggerRules($options = [])
 * @method RegisterEventHandler registerEventHandler($options = [])
 * @method TriggerEvent triggerEvent($options = [])
 * @method QueryEventById queryEventById($options = [])
 * @method CountEvent countEvent($options = [])
 * @method UpdateEventRecordStatus updateEventRecordStatus($options = [])
 * @method QueryEventRecordById queryEventRecordById($options = [])
 * @method CountEventRecord countEventRecord($options = [])
 * @method QueryEventRecord queryEventRecord($options = [])
 * @method QueryEventHandlerByEventId queryEventHandlerByEventId($options = [])
 * @method UnregisterEventHandler unregisterEventHandler($options = [])
 * @method QueryChildSpaceInfo queryChildSpaceInfo($options = [])
 * @method CreateRootSpace createRootSpace($options = [])
 * @method CreateSpace createSpace($options = [])
 * @method RemoveSpace removeSpace($options = [])
 * @method UpdateSpace updateSpace($options = [])
 * @method UpdateSpaceStatus updateSpaceStatus($options = [])
 * @method RemoveThing removeThing($options = [])
 * @method CreateSpaceRelation createSpaceRelation($options = [])
 * @method QuerySpaceInfoByIds querySpaceInfoByIds($options = [])
 * @method QueryChildSpaceInfoBy queryChildSpaceInfoBy($options = [])
 * @method QueryRootSpaceInfoByAddr queryRootSpaceInfoByAddr($options = [])
 * @method RemoveSpaceRelation removeSpaceRelation($options = [])
 * @method QueryRelationsInInAllSpace queryRelationsInInAllSpace($options = [])
 * @method QueryRelationsInSpace queryRelationsInSpace($options = [])
 * @method QuerySpaceByRelationIds querySpaceByRelationIds($options = [])
 * @method QuerySpaceByBusinessId querySpaceByBusinessId($options = [])
 * @method BindDevice2Space bindDevice2Space($options = [])
 * @method UnBindDeviceFromSpace unBindDeviceFromSpace($options = [])
 * @method QueryAllChildSpaceBy queryAllChildSpaceBy($options = [])
 * @method UpdateDeviceExt updateDeviceExt($options = [])
 * @method RegisterDeviceExt registerDeviceExt($options = [])
 * @method QueryDeviceListBySpace queryDeviceListBySpace($options = [])
 * @method QueryDeviceDetailExt queryDeviceDetailExt($options = [])
 */
class V20181120
{
    use ApiResolverTrait;
}

/**
 * @method int getServiceId
 * @method self withServiceId(int $serviceId)
 * @method string getChannelCode
 * @method self withChannelCode(string $channelCode)
 * @method array getMessageResources
 * @method self withMessageResources(array $messageResources)
 */
class AuthorizeMessageService extends Rpc
{
    use R;
}

/**
 * @method string getTemplateCode
 * @method self withTemplateCode(string $templateCode)
 * @method string getAccessCode
 * @method self withAccessCode(string $accessCode)
 */
class GetTemplateDetail extends Rpc
{
    use R;
}

/**
 * @method string getAccessCode
 * @method self withAccessCode(string $accessCode)
 * @method string getTemplateName
 * @method self withTemplateName(string $templateName)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class QueryTemplateList extends Rpc
{
    use R;
}

/**
 * @method int getUid
 * @method self withUid(int $uid)
 * @method string getRoleName
 * @method self withRoleName(string $roleName)
 * @method string getName
 * @method self withName(string $name)
 */
class RegisterSMSServiceMetadata extends Rpc
{
    use R;
}

/**
 * @method string getAccessCode
 * @method self withAccessCode(string $accessCode)
 * @method string getSignName
 * @method self withSignName(string $signName)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class QuerySignList extends Rpc
{
    use R;
}

/**
 * @method Integer getOrderType
 * @method self withOrderType(Integer $orderType)
 * @method Integer getOffset
 * @method self withOffset(Integer $offset)
 * @method Integer getLimit
 * @method self withLimit(Integer $limit)
 * @method string getScopeId
 * @method self withScopeId(string $scopeId)
 * @method string getName
 * @method self withName(string $name)
 * @method int getEventTypeId
 * @method self withEventTypeId(int $eventTypeId)
 */
class QueryEvent extends Rpc
{
    use R;
}

/**
 * @method string getCode
 * @method self withCode(string $code)
 * @method string getName
 * @method self withName(string $name)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method int getParentId
 * @method self withParentId(int $parentId)
 * @method string getScopeId
 * @method self withScopeId(string $scopeId)
 * @method string getLevel
 * @method self withLevel(string $level)
 * @method string getType
 * @method self withType(string $type)
 * @method string getIcon
 * @method self withIcon(string $icon)
 * @method string getCreator
 * @method self withCreator(string $creator)
 * @method string getModifier
 * @method self withModifier(string $modifier)
 */
class CreateEventType extends Rpc
{
    use R;
}

/**
 * @method int getId
 * @method self withId(int $id)
 * @method string getCode
 * @method self withCode(string $code)
 * @method string getName
 * @method self withName(string $name)
 * @method string getType
 * @method self withType(string $type)
 * @method string getIcon
 * @method self withIcon(string $icon)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getScopeId
 * @method self withScopeId(string $scopeId)
 * @method string getModifier
 * @method self withModifier(string $modifier)
 * @method string getLevel
 * @method self withLevel(string $level)
 */
class UpdateEventType extends Rpc
{
    use R;
}

/**
 * @method int getEventTypeId
 * @method self withEventTypeId(int $eventTypeId)
 * @method string getScopeId
 * @method self withScopeId(string $scopeId)
 */
class DeleteEventType extends Rpc
{
    use R;
}

/**
 * @method int getEventTypeId
 * @method self withEventTypeId(int $eventTypeId)
 * @method string getScopeId
 * @method self withScopeId(string $scopeId)
 */
class QueryEventTypeById extends Rpc
{
    use R;
}

/**
 * @method string getScopeId
 * @method self withScopeId(string $scopeId)
 * @method Integer getOnlyRoot
 * @method self withOnlyRoot(Integer $onlyRoot)
 * @method int getParentId
 * @method self withParentId(int $parentId)
 */
class CountEventType extends Rpc
{
    use R;
}

/**
 * @method Integer getOrderType
 * @method self withOrderType(Integer $orderType)
 * @method Integer getOffset
 * @method self withOffset(Integer $offset)
 * @method Integer getLimit
 * @method self withLimit(Integer $limit)
 * @method string getScopeId
 * @method self withScopeId(string $scopeId)
 * @method Integer getOnlyRoot
 * @method self withOnlyRoot(Integer $onlyRoot)
 * @method int getParentId
 * @method self withParentId(int $parentId)
 */
class QueryEventType extends Rpc
{
    use R;
}

/**
 * @method string getScopeId
 * @method self withScopeId(string $scopeId)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method int getEventTypeId
 * @method self withEventTypeId(int $eventTypeId)
 * @method string getEventTriggerRuleId
 * @method self withEventTriggerRuleId(string $eventTriggerRuleId)
 * @method string getExtraInfo
 * @method self withExtraInfo(string $extraInfo)
 * @method string getName
 * @method self withName(string $name)
 */
class CreateEvent extends Rpc
{
    use R;
}

/**
 * @method int getId
 * @method self withId(int $id)
 * @method string getScopeId
 * @method self withScopeId(string $scopeId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method int getEventTypeId
 * @method self withEventTypeId(int $eventTypeId)
 * @method string getExtraInfo
 * @method self withExtraInfo(string $extraInfo)
 */
class UpdateEvent extends Rpc
{
    use R;
}

/**
 * @method int getEventId
 * @method self withEventId(int $eventId)
 * @method string getScopeId
 * @method self withScopeId(string $scopeId)
 */
class DeleteEvent extends Rpc
{
    use R;
}

/**
 * @method int getEventId
 * @method self withEventId(int $eventId)
 * @method string getTriggerRuleId
 * @method self withTriggerRuleId(string $triggerRuleId)
 * @method string getScopeId
 * @method self withScopeId(string $scopeId)
 */
class BindEventTriggerRules extends Rpc
{
    use R;
}

/**
 * @method string getType
 * @method self withType(string $type)
 * @method string getPara
 * @method self withPara(string $para)
 * @method int getEventId
 * @method self withEventId(int $eventId)
 * @method string getScopeId
 * @method self withScopeId(string $scopeId)
 */
class RegisterEventHandler extends Rpc
{
    use R;
}

/**
 * @method string getTriggerRuleId
 * @method self withTriggerRuleId(string $triggerRuleId)
 * @method string getData
 * @method self withData(string $data)
 * @method string getScopeId
 * @method self withScopeId(string $scopeId)
 */
class TriggerEvent extends Rpc
{
    use R;
}

/**
 * @method int getEventId
 * @method self withEventId(int $eventId)
 * @method string getScopeId
 * @method self withScopeId(string $scopeId)
 */
class QueryEventById extends Rpc
{
    use R;
}

/**
 * @method string getScopeId
 * @method self withScopeId(string $scopeId)
 * @method string getName
 * @method self withName(string $name)
 * @method int getEventTypeId
 * @method self withEventTypeId(int $eventTypeId)
 */
class CountEvent extends Rpc
{
    use R;
}

/**
 * @method string getScopeId
 * @method self withScopeId(string $scopeId)
 * @method int getEventRecordId
 * @method self withEventRecordId(int $eventRecordId)
 * @method string getStatus
 * @method self withStatus(string $status)
 */
class UpdateEventRecordStatus extends Rpc
{
    use R;
}

/**
 * @method int getEventRecordId
 * @method self withEventRecordId(int $eventRecordId)
 * @method string getScopeId
 * @method self withScopeId(string $scopeId)
 */
class QueryEventRecordById extends Rpc
{
    use R;
}

/**
 * @method string getScopeId
 * @method self withScopeId(string $scopeId)
 * @method int getEventTypeId
 * @method self withEventTypeId(int $eventTypeId)
 * @method array getEventIdList
 * @method self withEventIdList(array $eventIdList)
 * @method array getStatusList
 * @method self withStatusList(array $statusList)
 * @method int getStartTime
 * @method self withStartTime(int $startTime)
 * @method int getEndTime
 * @method self withEndTime(int $endTime)
 */
class CountEventRecord extends Rpc
{
    use R;
}

/**
 * @method string getScopeId
 * @method self withScopeId(string $scopeId)
 * @method int getEventTypeId
 * @method self withEventTypeId(int $eventTypeId)
 * @method array getEventIdList
 * @method self withEventIdList(array $eventIdList)
 * @method array getStatusList
 * @method self withStatusList(array $statusList)
 * @method int getStartTime
 * @method self withStartTime(int $startTime)
 * @method int getEndTime
 * @method self withEndTime(int $endTime)
 * @method Integer getOrderType
 * @method self withOrderType(Integer $orderType)
 * @method Integer getOffset
 * @method self withOffset(Integer $offset)
 * @method Integer getLimit
 * @method self withLimit(Integer $limit)
 */
class QueryEventRecord extends Rpc
{
    use R;
}

/**
 * @method int getEventId
 * @method self withEventId(int $eventId)
 * @method string getScopeId
 * @method self withScopeId(string $scopeId)
 */
class QueryEventHandlerByEventId extends Rpc
{
    use R;
}

/**
 * @method int getEventHandlerId
 * @method self withEventHandlerId(int $eventHandlerId)
 * @method string getScopeId
 * @method self withScopeId(string $scopeId)
 */
class UnregisterEventHandler extends Rpc
{
    use R;
}

/**
 * @method string getScopeId
 * @method self withScopeId(string $scopeId)
 * @method string getSpaceId
 * @method self withSpaceId(string $spaceId)
 */
class QueryChildSpaceInfo extends Rpc
{
    use R;
}

/**
 * @method string getScopeId
 * @method self withScopeId(string $scopeId)
 * @method string getBusinessId
 * @method self withBusinessId(string $businessId)
 * @method Json getGeo
 * @method self withGeo(Json $geo)
 * @method string getSpaceName
 * @method self withSpaceName(string $spaceName)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getTypeCode
 * @method self withTypeCode(string $typeCode)
 * @method string getUsesCode
 * @method self withUsesCode(string $usesCode)
 * @method Integer getStatus
 * @method self withStatus(Integer $status)
 * @method Integer getSpaceScope
 * @method self withSpaceScope(Integer $spaceScope)
 * @method string getAttribute
 * @method self withAttribute(string $attribute)
 * @method array getChildSpace
 * @method self withChildSpace(array $childSpace)
 * @method string getBizType
 * @method self withBizType(string $bizType)
 * @method string getOperatorType
 * @method self withOperatorType(string $operatorType)
 * @method string getOperatorId
 * @method self withOperatorId(string $operatorId)
 */
class CreateRootSpace extends Rpc
{
    use R;
}

/**
 * @method string getRootSpaceId
 * @method self withRootSpaceId(string $rootSpaceId)
 * @method string getScopeId
 * @method self withScopeId(string $scopeId)
 * @method string getParentSpaceId
 * @method self withParentSpaceId(string $parentSpaceId)
 * @method string getBusinessId
 * @method self withBusinessId(string $businessId)
 * @method Json getGeo
 * @method self withGeo(Json $geo)
 * @method string getSpaceName
 * @method self withSpaceName(string $spaceName)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getTypeCode
 * @method self withTypeCode(string $typeCode)
 * @method string getUsesCode
 * @method self withUsesCode(string $usesCode)
 * @method Integer getStatus
 * @method self withStatus(Integer $status)
 * @method Integer getSpaceScope
 * @method self withSpaceScope(Integer $spaceScope)
 * @method string getAttribute
 * @method self withAttribute(string $attribute)
 * @method array getChildSpace
 * @method self withChildSpace(array $childSpace)
 * @method string getBizType
 * @method self withBizType(string $bizType)
 * @method string getOperatorType
 * @method self withOperatorType(string $operatorType)
 * @method string getOperatorId
 * @method self withOperatorId(string $operatorId)
 */
class CreateSpace extends Rpc
{
    use R;
}

/**
 * @method string getRootSpaceId
 * @method self withRootSpaceId(string $rootSpaceId)
 * @method string getScopeId
 * @method self withScopeId(string $scopeId)
 * @method string getSpaceId
 * @method self withSpaceId(string $spaceId)
 */
class RemoveSpace extends Rpc
{
    use R;
}

/**
 * @method string getRootSpaceId
 * @method self withRootSpaceId(string $rootSpaceId)
 * @method string getScopeId
 * @method self withScopeId(string $scopeId)
 * @method string getSpaceId
 * @method self withSpaceId(string $spaceId)
 * @method string getOperatorType
 * @method self withOperatorType(string $operatorType)
 * @method string getOperatorId
 * @method self withOperatorId(string $operatorId)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getBusinessId
 * @method self withBusinessId(string $businessId)
 * @method string getUsesCode
 * @method self withUsesCode(string $usesCode)
 * @method string getAttribute
 * @method self withAttribute(string $attribute)
 * @method string getBizType
 * @method self withBizType(string $bizType)
 * @method string getName
 * @method self withName(string $name)
 */
class UpdateSpace extends Rpc
{
    use R;
}

/**
 * @method string getRootSpaceId
 * @method self withRootSpaceId(string $rootSpaceId)
 * @method string getScopeId
 * @method self withScopeId(string $scopeId)
 * @method string getSpaceId
 * @method self withSpaceId(string $spaceId)
 * @method Integer getStatus
 * @method self withStatus(Integer $status)
 * @method string getOperatorType
 * @method self withOperatorType(string $operatorType)
 * @method string getOperatorId
 * @method self withOperatorId(string $operatorId)
 */
class UpdateSpaceStatus extends Rpc
{
    use R;
}

/**
 * @method string getRootSpaceId
 * @method self withRootSpaceId(string $rootSpaceId)
 * @method string getScopeId
 * @method self withScopeId(string $scopeId)
 * @method string getOperatorType
 * @method self withOperatorType(string $operatorType)
 * @method string getOperatorId
 * @method self withOperatorId(string $operatorId)
 * @method string getThingId
 * @method self withThingId(string $thingId)
 */
class RemoveThing extends Rpc
{
    use R;
}

/**
 * @method string getSpaceId
 * @method self withSpaceId(string $spaceId)
 * @method string getRelationType
 * @method self withRelationType(string $relationType)
 * @method string getOperatorId
 * @method self withOperatorId(string $operatorId)
 * @method string getOperatorType
 * @method self withOperatorType(string $operatorType)
 * @method string getScopeId
 * @method self withScopeId(string $scopeId)
 * @method array getObjectDTOList
 * @method self withObjectDTOList(array $objectDTOList)
 */
class CreateSpaceRelation extends Rpc
{
    use R;
}

/**
 * @method string getScopeId
 * @method self withScopeId(string $scopeId)
 * @method array getSpaceIds
 * @method self withSpaceIds(array $spaceIds)
 */
class QuerySpaceInfoByIds extends Rpc
{
    use R;
}

/**
 * @method string getSpaceId
 * @method self withSpaceId(string $spaceId)
 * @method string getTypeCode
 * @method self withTypeCode(string $typeCode)
 * @method string getScopeId
 * @method self withScopeId(string $scopeId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getUsesCode
 * @method self withUsesCode(string $usesCode)
 * @method Integer getStatus
 * @method self withStatus(Integer $status)
 */
class QueryChildSpaceInfoBy extends Rpc
{
    use R;
}

/**
 * @method Json getQueryDTO
 * @method self withQueryDTO(Json $queryDTO)
 * @method string getScopeId
 * @method self withScopeId(string $scopeId)
 */
class QueryRootSpaceInfoByAddr extends Rpc
{
    use R;
}

/**
 * @method string getSpaceId
 * @method self withSpaceId(string $spaceId)
 * @method string getScopeId
 * @method self withScopeId(string $scopeId)
 * @method array getRelationIdList
 * @method self withRelationIdList(array $relationIdList)
 */
class RemoveSpaceRelation extends Rpc
{
    use R;
}

/**
 * @method string getSpaceId
 * @method self withSpaceId(string $spaceId)
 * @method string getRelationType
 * @method self withRelationType(string $relationType)
 * @method string getName
 * @method self withName(string $name)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getScopeId
 * @method self withScopeId(string $scopeId)
 */
class QueryRelationsInInAllSpace extends Rpc
{
    use R;
}

/**
 * @method string getSpaceId
 * @method self withSpaceId(string $spaceId)
 * @method string getRelationType
 * @method self withRelationType(string $relationType)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getScopeId
 * @method self withScopeId(string $scopeId)
 * @method string getName
 * @method self withName(string $name)
 */
class QueryRelationsInSpace extends Rpc
{
    use R;
}

/**
 * @method string getScopeId
 * @method self withScopeId(string $scopeId)
 * @method string getRootSpaceId
 * @method self withRootSpaceId(string $rootSpaceId)
 * @method array getRelObjectIdList
 * @method self withRelObjectIdList(array $relObjectIdList)
 */
class QuerySpaceByRelationIds extends Rpc
{
    use R;
}

/**
 * @method string getScopeId
 * @method self withScopeId(string $scopeId)
 * @method string getRootSpaceId
 * @method self withRootSpaceId(string $rootSpaceId)
 * @method string getBusinessId
 * @method self withBusinessId(string $businessId)
 */
class QuerySpaceByBusinessId extends Rpc
{
    use R;
}

/**
 * @method string getRootSpaceId
 * @method self withRootSpaceId(string $rootSpaceId)
 * @method string getSpaceId
 * @method self withSpaceId(string $spaceId)
 * @method string getIotId
 * @method self withIotId(string $iotId)
 * @method string getOperatorType
 * @method self withOperatorType(string $operatorType)
 * @method string getOperatorId
 * @method self withOperatorId(string $operatorId)
 * @method string getCategory
 * @method self withCategory(string $category)
 * @method string getModel
 * @method self withModel(string $model)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getName
 * @method self withName(string $name)
 * @method string getScopeId
 * @method self withScopeId(string $scopeId)
 */
class BindDevice2Space extends Rpc
{
    use R;
}

/**
 * @method string getRootSpaceId
 * @method self withRootSpaceId(string $rootSpaceId)
 * @method string getScopeId
 * @method self withScopeId(string $scopeId)
 * @method string getOperatorType
 * @method self withOperatorType(string $operatorType)
 * @method string getOperatorId
 * @method self withOperatorId(string $operatorId)
 * @method string getThingId
 * @method self withThingId(string $thingId)
 */
class UnBindDeviceFromSpace extends Rpc
{
    use R;
}

/**
 * @method string getRootSpaceId
 * @method self withRootSpaceId(string $rootSpaceId)
 * @method string getScopeId
 * @method self withScopeId(string $scopeId)
 * @method string getSpaceId
 * @method self withSpaceId(string $spaceId)
 * @method string getTypeCode
 * @method self withTypeCode(string $typeCode)
 * @method string getTypeTag
 * @method self withTypeTag(string $typeTag)
 * @method string getTypeTagExclude
 * @method self withTypeTagExclude(string $typeTagExclude)
 * @method array getTypeCodeList
 * @method self withTypeCodeList(array $typeCodeList)
 * @method string getSpaceName
 * @method self withSpaceName(string $spaceName)
 * @method string getNameLike
 * @method self withNameLike(string $nameLike)
 * @method string getUsesCode
 * @method self withUsesCode(string $usesCode)
 * @method Json getAttributes
 * @method self withAttributes(Json $attributes)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class QueryAllChildSpaceBy extends Rpc
{
    use R;
}

/**
 * @method string getNickName
 * @method self withNickName(string $nickName)
 * @method string getProps
 * @method self withProps(string $props)
 * @method string getIotId
 * @method self withIotId(string $iotId)
 */
class UpdateDeviceExt extends Rpc
{
    use R;
}

/**
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getNickName
 * @method self withNickName(string $nickName)
 * @method string getProps
 * @method self withProps(string $props)
 */
class RegisterDeviceExt extends Rpc
{
    use R;
}

/**
 * @method string getDeviceNameLike
 * @method self withDeviceNameLike(string $deviceNameLike)
 * @method string getNicknameLike
 * @method self withNicknameLike(string $nicknameLike)
 * @method int getCategoryId
 * @method self withCategoryId(int $categoryId)
 * @method string getSpacePathLike
 * @method self withSpacePathLike(string $spacePathLike)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method array getDeviceStatus
 * @method self withDeviceStatus(array $deviceStatus)
 * @method array getSpaceId
 * @method self withSpaceId(array $spaceId)
 * @method string getModel
 * @method self withModel(string $model)
 * @method array getIotId
 * @method self withIotId(array $iotId)
 */
class QueryDeviceListBySpace extends Rpc
{
    use R;
}

/**
 * @method string getIotId
 * @method self withIotId(string $iotId)
 */
class QueryDeviceDetailExt extends Rpc
{
    use R;
}
