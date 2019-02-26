<?php

namespace AlibabaCloud\Iot\V20181120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method Long getServiceId
 * @method self withServiceId
 * @method string getChannelCode
 * @method self withChannelCode
 * @method RepeatList getMessageResources
 * @method self withMessageResources
 */
final class AuthorizeMessageService extends RpcRequest
{
}

/**
 * @method string getTemplateCode
 * @method self withTemplateCode
 * @method string getAccessCode
 * @method self withAccessCode
 */
final class GetTemplateDetail extends RpcRequest
{
}

/**
 * @method string getAccessCode
 * @method self withAccessCode
 * @method string getTemplateName
 * @method self withTemplateName
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class QueryTemplateList extends RpcRequest
{
}

/**
 * @method Long getUid
 * @method self withUid
 * @method string getRoleName
 * @method self withRoleName
 * @method string getName
 * @method self withName
 */
final class RegisterSMSServiceMetadata extends RpcRequest
{
}

/**
 * @method string getAccessCode
 * @method self withAccessCode
 * @method string getSignName
 * @method self withSignName
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class QuerySignList extends RpcRequest
{
}

/**
 * @method Integer getOrderType
 * @method self withOrderType
 * @method Integer getOffset
 * @method self withOffset
 * @method Integer getLimit
 * @method self withLimit
 * @method string getScopeId
 * @method self withScopeId
 * @method string getName
 * @method self withName
 * @method Long getEventTypeId
 * @method self withEventTypeId
 */
final class QueryEvent extends RpcRequest
{
}

/**
 * @method string getCode
 * @method self withCode
 * @method string getName
 * @method self withName
 * @method string getDescription
 * @method self withDescription
 * @method Long getParentId
 * @method self withParentId
 * @method string getScopeId
 * @method self withScopeId
 * @method string getLevel
 * @method self withLevel
 * @method string getType
 * @method self withType
 * @method string getIcon
 * @method self withIcon
 * @method string getCreator
 * @method self withCreator
 * @method string getModifier
 * @method self withModifier
 */
final class CreateEventType extends RpcRequest
{
}

/**
 * @method Long getId
 * @method self withId
 * @method string getCode
 * @method self withCode
 * @method string getName
 * @method self withName
 * @method string getType
 * @method self withType
 * @method string getIcon
 * @method self withIcon
 * @method string getDescription
 * @method self withDescription
 * @method string getScopeId
 * @method self withScopeId
 * @method string getModifier
 * @method self withModifier
 * @method string getLevel
 * @method self withLevel
 */
final class UpdateEventType extends RpcRequest
{
}

/**
 * @method Long getEventTypeId
 * @method self withEventTypeId
 * @method string getScopeId
 * @method self withScopeId
 */
final class DeleteEventType extends RpcRequest
{
}

/**
 * @method Long getEventTypeId
 * @method self withEventTypeId
 * @method string getScopeId
 * @method self withScopeId
 */
final class QueryEventTypeById extends RpcRequest
{
}

/**
 * @method string getScopeId
 * @method self withScopeId
 * @method Integer getOnlyRoot
 * @method self withOnlyRoot
 * @method Long getParentId
 * @method self withParentId
 */
final class CountEventType extends RpcRequest
{
}

/**
 * @method Integer getOrderType
 * @method self withOrderType
 * @method Integer getOffset
 * @method self withOffset
 * @method Integer getLimit
 * @method self withLimit
 * @method string getScopeId
 * @method self withScopeId
 * @method Integer getOnlyRoot
 * @method self withOnlyRoot
 * @method Long getParentId
 * @method self withParentId
 */
final class QueryEventType extends RpcRequest
{
}

/**
 * @method string getScopeId
 * @method self withScopeId
 * @method string getDescription
 * @method self withDescription
 * @method Long getEventTypeId
 * @method self withEventTypeId
 * @method string getEventTriggerRuleId
 * @method self withEventTriggerRuleId
 * @method string getExtraInfo
 * @method self withExtraInfo
 * @method string getName
 * @method self withName
 */
final class CreateEvent extends RpcRequest
{
}

/**
 * @method Long getId
 * @method self withId
 * @method string getScopeId
 * @method self withScopeId
 * @method string getName
 * @method self withName
 * @method string getDescription
 * @method self withDescription
 * @method Long getEventTypeId
 * @method self withEventTypeId
 * @method string getExtraInfo
 * @method self withExtraInfo
 */
final class UpdateEvent extends RpcRequest
{
}

/**
 * @method Long getEventId
 * @method self withEventId
 * @method string getScopeId
 * @method self withScopeId
 */
final class DeleteEvent extends RpcRequest
{
}

/**
 * @method Long getEventId
 * @method self withEventId
 * @method string getTriggerRuleId
 * @method self withTriggerRuleId
 * @method string getScopeId
 * @method self withScopeId
 */
final class BindEventTriggerRules extends RpcRequest
{
}

/**
 * @method string getType
 * @method self withType
 * @method string getPara
 * @method self withPara
 * @method Long getEventId
 * @method self withEventId
 * @method string getScopeId
 * @method self withScopeId
 */
final class RegisterEventHandler extends RpcRequest
{
}

/**
 * @method string getTriggerRuleId
 * @method self withTriggerRuleId
 * @method string getData
 * @method self withData
 * @method string getScopeId
 * @method self withScopeId
 */
final class TriggerEvent extends RpcRequest
{
}

/**
 * @method Long getEventId
 * @method self withEventId
 * @method string getScopeId
 * @method self withScopeId
 */
final class QueryEventById extends RpcRequest
{
}

/**
 * @method string getScopeId
 * @method self withScopeId
 * @method string getName
 * @method self withName
 * @method Long getEventTypeId
 * @method self withEventTypeId
 */
final class CountEvent extends RpcRequest
{
}

/**
 * @method string getScopeId
 * @method self withScopeId
 * @method Long getEventRecordId
 * @method self withEventRecordId
 * @method string getStatus
 * @method self withStatus
 */
final class UpdateEventRecordStatus extends RpcRequest
{
}

/**
 * @method Long getEventRecordId
 * @method self withEventRecordId
 * @method string getScopeId
 * @method self withScopeId
 */
final class QueryEventRecordById extends RpcRequest
{
}

/**
 * @method string getScopeId
 * @method self withScopeId
 * @method Long getEventTypeId
 * @method self withEventTypeId
 * @method RepeatList getEventIdList
 * @method self withEventIdList
 * @method RepeatList getStatusList
 * @method self withStatusList
 * @method Long getStartTime
 * @method self withStartTime
 * @method Long getEndTime
 * @method self withEndTime
 */
final class CountEventRecord extends RpcRequest
{
}

/**
 * @method string getScopeId
 * @method self withScopeId
 * @method Long getEventTypeId
 * @method self withEventTypeId
 * @method RepeatList getEventIdList
 * @method self withEventIdList
 * @method RepeatList getStatusList
 * @method self withStatusList
 * @method Long getStartTime
 * @method self withStartTime
 * @method Long getEndTime
 * @method self withEndTime
 * @method Integer getOrderType
 * @method self withOrderType
 * @method Integer getOffset
 * @method self withOffset
 * @method Integer getLimit
 * @method self withLimit
 */
final class QueryEventRecord extends RpcRequest
{
}

/**
 * @method Long getEventId
 * @method self withEventId
 * @method string getScopeId
 * @method self withScopeId
 */
final class QueryEventHandlerByEventId extends RpcRequest
{
}

/**
 * @method Long getEventHandlerId
 * @method self withEventHandlerId
 * @method string getScopeId
 * @method self withScopeId
 */
final class UnregisterEventHandler extends RpcRequest
{
}

/**
 * @method string getScopeId
 * @method self withScopeId
 * @method string getSpaceId
 * @method self withSpaceId
 */
final class QueryChildSpaceInfo extends RpcRequest
{
}

/**
 * @method string getScopeId
 * @method self withScopeId
 * @method string getBusinessId
 * @method self withBusinessId
 * @method Json getGeo
 * @method self withGeo
 * @method string getSpaceName
 * @method self withSpaceName
 * @method string getDescription
 * @method self withDescription
 * @method string getTypeCode
 * @method self withTypeCode
 * @method string getUsesCode
 * @method self withUsesCode
 * @method Integer getStatus
 * @method self withStatus
 * @method Integer getSpaceScope
 * @method self withSpaceScope
 * @method string getAttribute
 * @method self withAttribute
 * @method RepeatList getChildSpace
 * @method self withChildSpace
 * @method string getBizType
 * @method self withBizType
 * @method string getOperatorType
 * @method self withOperatorType
 * @method string getOperatorId
 * @method self withOperatorId
 */
final class CreateRootSpace extends RpcRequest
{
}

/**
 * @method string getRootSpaceId
 * @method self withRootSpaceId
 * @method string getScopeId
 * @method self withScopeId
 * @method string getParentSpaceId
 * @method self withParentSpaceId
 * @method string getBusinessId
 * @method self withBusinessId
 * @method Json getGeo
 * @method self withGeo
 * @method string getSpaceName
 * @method self withSpaceName
 * @method string getDescription
 * @method self withDescription
 * @method string getTypeCode
 * @method self withTypeCode
 * @method string getUsesCode
 * @method self withUsesCode
 * @method Integer getStatus
 * @method self withStatus
 * @method Integer getSpaceScope
 * @method self withSpaceScope
 * @method string getAttribute
 * @method self withAttribute
 * @method RepeatList getChildSpace
 * @method self withChildSpace
 * @method string getBizType
 * @method self withBizType
 * @method string getOperatorType
 * @method self withOperatorType
 * @method string getOperatorId
 * @method self withOperatorId
 */
final class CreateSpace extends RpcRequest
{
}

/**
 * @method string getRootSpaceId
 * @method self withRootSpaceId
 * @method string getScopeId
 * @method self withScopeId
 * @method string getSpaceId
 * @method self withSpaceId
 */
final class RemoveSpace extends RpcRequest
{
}

/**
 * @method string getRootSpaceId
 * @method self withRootSpaceId
 * @method string getScopeId
 * @method self withScopeId
 * @method string getSpaceId
 * @method self withSpaceId
 * @method string getOperatorType
 * @method self withOperatorType
 * @method string getOperatorId
 * @method self withOperatorId
 * @method string getDescription
 * @method self withDescription
 * @method string getBusinessId
 * @method self withBusinessId
 * @method string getUsesCode
 * @method self withUsesCode
 * @method string getAttribute
 * @method self withAttribute
 * @method string getBizType
 * @method self withBizType
 * @method string getName
 * @method self withName
 */
final class UpdateSpace extends RpcRequest
{
}

/**
 * @method string getRootSpaceId
 * @method self withRootSpaceId
 * @method string getScopeId
 * @method self withScopeId
 * @method string getSpaceId
 * @method self withSpaceId
 * @method Integer getStatus
 * @method self withStatus
 * @method string getOperatorType
 * @method self withOperatorType
 * @method string getOperatorId
 * @method self withOperatorId
 */
final class UpdateSpaceStatus extends RpcRequest
{
}

/**
 * @method string getRootSpaceId
 * @method self withRootSpaceId
 * @method string getScopeId
 * @method self withScopeId
 * @method string getOperatorType
 * @method self withOperatorType
 * @method string getOperatorId
 * @method self withOperatorId
 * @method string getThingId
 * @method self withThingId
 */
final class RemoveThing extends RpcRequest
{
}

/**
 * @method string getSpaceId
 * @method self withSpaceId
 * @method string getRelationType
 * @method self withRelationType
 * @method string getOperatorId
 * @method self withOperatorId
 * @method string getOperatorType
 * @method self withOperatorType
 * @method string getScopeId
 * @method self withScopeId
 * @method RepeatList getObjectDTOList
 * @method self withObjectDTOList
 */
final class CreateSpaceRelation extends RpcRequest
{
}

/**
 * @method string getScopeId
 * @method self withScopeId
 * @method RepeatList getSpaceIds
 * @method self withSpaceIds
 */
final class QuerySpaceInfoByIds extends RpcRequest
{
}

/**
 * @method string getSpaceId
 * @method self withSpaceId
 * @method string getTypeCode
 * @method self withTypeCode
 * @method string getScopeId
 * @method self withScopeId
 * @method string getName
 * @method self withName
 * @method string getUsesCode
 * @method self withUsesCode
 * @method Integer getStatus
 * @method self withStatus
 */
final class QueryChildSpaceInfoBy extends RpcRequest
{
}

/**
 * @method Json getQueryDTO
 * @method self withQueryDTO
 * @method string getScopeId
 * @method self withScopeId
 */
final class QueryRootSpaceInfoByAddr extends RpcRequest
{
}

/**
 * @method string getSpaceId
 * @method self withSpaceId
 * @method string getScopeId
 * @method self withScopeId
 * @method RepeatList getRelationIdList
 * @method self withRelationIdList
 */
final class RemoveSpaceRelation extends RpcRequest
{
}

/**
 * @method string getSpaceId
 * @method self withSpaceId
 * @method string getRelationType
 * @method self withRelationType
 * @method string getName
 * @method self withName
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getScopeId
 * @method self withScopeId
 */
final class QueryRelationsInInAllSpace extends RpcRequest
{
}

/**
 * @method string getSpaceId
 * @method self withSpaceId
 * @method string getRelationType
 * @method self withRelationType
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getScopeId
 * @method self withScopeId
 * @method string getName
 * @method self withName
 */
final class QueryRelationsInSpace extends RpcRequest
{
}

/**
 * @method string getScopeId
 * @method self withScopeId
 * @method string getRootSpaceId
 * @method self withRootSpaceId
 * @method RepeatList getRelObjectIdList
 * @method self withRelObjectIdList
 */
final class QuerySpaceByRelationIds extends RpcRequest
{
}

/**
 * @method string getScopeId
 * @method self withScopeId
 * @method string getRootSpaceId
 * @method self withRootSpaceId
 * @method string getBusinessId
 * @method self withBusinessId
 */
final class QuerySpaceByBusinessId extends RpcRequest
{
}

/**
 * @method string getRootSpaceId
 * @method self withRootSpaceId
 * @method string getSpaceId
 * @method self withSpaceId
 * @method string getIotId
 * @method self withIotId
 * @method string getOperatorType
 * @method self withOperatorType
 * @method string getOperatorId
 * @method self withOperatorId
 * @method string getCategory
 * @method self withCategory
 * @method string getModel
 * @method self withModel
 * @method string getDescription
 * @method self withDescription
 * @method string getName
 * @method self withName
 * @method string getScopeId
 * @method self withScopeId
 */
final class BindDevice2Space extends RpcRequest
{
}

/**
 * @method string getRootSpaceId
 * @method self withRootSpaceId
 * @method string getScopeId
 * @method self withScopeId
 * @method string getOperatorType
 * @method self withOperatorType
 * @method string getOperatorId
 * @method self withOperatorId
 * @method string getThingId
 * @method self withThingId
 */
final class UnBindDeviceFromSpace extends RpcRequest
{
}

/**
 * @method string getRootSpaceId
 * @method self withRootSpaceId
 * @method string getScopeId
 * @method self withScopeId
 * @method string getSpaceId
 * @method self withSpaceId
 * @method string getTypeCode
 * @method self withTypeCode
 * @method string getTypeTag
 * @method self withTypeTag
 * @method string getTypeTagExclude
 * @method self withTypeTagExclude
 * @method RepeatList getTypeCodeList
 * @method self withTypeCodeList
 * @method string getSpaceName
 * @method self withSpaceName
 * @method string getNameLike
 * @method self withNameLike
 * @method string getUsesCode
 * @method self withUsesCode
 * @method Json getAttributes
 * @method self withAttributes
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class QueryAllChildSpaceBy extends RpcRequest
{
}

/**
 * @method string getNickName
 * @method self withNickName
 * @method string getProps
 * @method self withProps
 * @method string getIotId
 * @method self withIotId
 */
final class UpdateDeviceExt extends RpcRequest
{
}

/**
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getProductKey
 * @method self withProductKey
 * @method string getNickName
 * @method self withNickName
 * @method string getProps
 * @method self withProps
 */
final class RegisterDeviceExt extends RpcRequest
{
}

/**
 * @method string getDeviceNameLike
 * @method self withDeviceNameLike
 * @method string getNicknameLike
 * @method self withNicknameLike
 * @method Long getCategoryId
 * @method self withCategoryId
 * @method string getSpacePathLike
 * @method self withSpacePathLike
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getProductKey
 * @method self withProductKey
 * @method RepeatList getDeviceStatus
 * @method self withDeviceStatus
 * @method RepeatList getSpaceId
 * @method self withSpaceId
 * @method string getModel
 * @method self withModel
 * @method RepeatList getIotId
 * @method self withIotId
 */
final class QueryDeviceListBySpace extends RpcRequest
{
}

/**
 * @method string getIotId
 * @method self withIotId
 */
final class QueryDeviceDetailExt extends RpcRequest
{
}
