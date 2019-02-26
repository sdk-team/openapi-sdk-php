<?php

namespace AlibabaCloud\Iot\V20170420;

use AlibabaCloud\Client\Request\RpcRequest;

final class RamAuth extends RpcRequest
{
}

/**
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getProductKey
 * @method self withProductKey
 * @method string getProps
 * @method self withProps
 */
final class SetDeviceProp extends RpcRequest
{
}

/**
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getProductKey
 * @method self withProductKey
 */
final class GetDeviceProp extends RpcRequest
{
}

/**
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 */
final class DisableSubDevice extends RpcRequest
{
}

/**
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 */
final class EnableSubDevice extends RpcRequest
{
}

/**
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getSubDeviceName
 * @method self withSubDeviceName
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 */
final class QuerySubDeviceList extends RpcRequest
{
}

/**
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 */
final class EnableDevice extends RpcRequest
{
}

/**
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 */
final class DisableDevice extends RpcRequest
{
}

/**
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 */
final class DeleteSubDevice extends RpcRequest
{
}

/**
 * @method Boolean getInterrupt
 * @method self withInterrupt
 * @method string getInvoker
 * @method self withInvoker
 * @method string getPk
 * @method self withPk
 * @method string getBid
 * @method self withBid
 * @method Long getHid
 * @method self withHid
 * @method string getCountry
 * @method self withCountry
 * @method string getTaskIdentifier
 * @method self withTaskIdentifier
 * @method string getTaskExtraData
 * @method self withTaskExtraData
 * @method string getGmtWakeup
 * @method self withGmtWakeup
 * @method Boolean getSuccess
 * @method self withSuccess
 * @method string getMessage
 * @method self withMessage
 */
final class doPhysicalDeleteResource extends RpcRequest
{
}

/**
 * @method Boolean getInterrupt
 * @method self withInterrupt
 * @method string getInvoker
 * @method self withInvoker
 * @method string getPk
 * @method self withPk
 * @method string getBid
 * @method self withBid
 * @method Long getHid
 * @method self withHid
 * @method string getCountry
 * @method self withCountry
 * @method string getTaskIdentifier
 * @method self withTaskIdentifier
 * @method string getTaskExtraData
 * @method self withTaskExtraData
 * @method string getGmtWakeup
 * @method self withGmtWakeup
 * @method Boolean getSuccess
 * @method self withSuccess
 * @method string getMessage
 * @method self withMessage
 */
final class doLogicalDeleteResource extends RpcRequest
{
}

/**
 * @method Boolean getInterrupt
 * @method self withInterrupt
 * @method string getInvoker
 * @method self withInvoker
 * @method string getPk
 * @method self withPk
 * @method string getBid
 * @method self withBid
 * @method Long getHid
 * @method self withHid
 * @method string getCountry
 * @method self withCountry
 * @method string getTaskIdentifier
 * @method self withTaskIdentifier
 * @method string getTaskExtraData
 * @method self withTaskExtraData
 * @method string getGmtWakeup
 * @method self withGmtWakeup
 * @method Boolean getSuccess
 * @method self withSuccess
 * @method string getMessage
 * @method self withMessage
 * @method Long getLevel
 * @method self withLevel
 * @method string getUrl
 * @method self withUrl
 * @method string getPrompt
 * @method self withPrompt
 */
final class doCheckResource extends RpcRequest
{
}

/**
 * @method string getProductKey
 * @method self withProductKey
 * @method Integer getMessageType
 * @method self withMessageType
 */
final class UpdateC2CConfig extends RpcRequest
{
}

/**
 * @method string getProductKey
 * @method self withProductKey
 */
final class GetMqInfo extends RpcRequest
{
}

/**
 * @method string getProductKey
 * @method self withProductKey
 */
final class GetC2CConfig extends RpcRequest
{
}

/**
 * @method string getProductKey
 * @method self withProductKey
 */
final class DeleteMq extends RpcRequest
{
}

/**
 * @method string getProductKey
 * @method self withProductKey
 */
final class CreateMq extends RpcRequest
{
}

/**
 * @method string getTopic
 * @method self withTopic
 */
final class QueryTopicRouteTable extends RpcRequest
{
}

/**
 * @method string getTopic
 * @method self withTopic
 */
final class QueryTopicReverseRouteTable extends RpcRequest
{
}

/**
 * @method string getSrcTopic
 * @method self withSrcTopic
 * @method RepeatList getDstTopic
 * @method self withDstTopic
 */
final class DeleteTopicRouteTable extends RpcRequest
{
}

/**
 * @method string getSrcTopic
 * @method self withSrcTopic
 * @method RepeatList getDstTopic
 * @method self withDstTopic
 */
final class CreateTopicRouteTable extends RpcRequest
{
}

/**
 * @method string getProductKey
 * @method self withProductKey
 * @method RepeatList getDeviceName
 * @method self withDeviceName
 */
final class QueryDeviceSession extends RpcRequest
{
}

final class GetVpcServerMapping extends RpcRequest
{
}

/**
 * @method string getVpcId
 * @method self withVpcId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getInstancePort
 * @method self withInstancePort
 */
final class RevokeInstance extends RpcRequest
{
}

/**
 * @method string getVpcId
 * @method self withVpcId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getInstancePort
 * @method self withInstancePort
 */
final class GrantInstance extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getVpcId
 * @method self withVpcId
 */
final class GetVpcInstanceMapping extends RpcRequest
{
}

final class GetServerMapping extends RpcRequest
{
}

/**
 * @method Long getServeId
 * @method self withServeId
 * @method string getStatus
 * @method self withStatus
 */
final class SaveUserServeStatus extends RpcRequest
{
}

/**
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getProductKey
 * @method self withProductKey
 * @method string getProps
 * @method self withProps
 */
final class SaveDeviceProp extends RpcRequest
{
}

/**
 * @method Long getServeId
 * @method self withServeId
 */
final class QueryUserServeStatus extends RpcRequest
{
}

/**
 * @method RepeatList getExclusionServe
 * @method self withExclusionServe
 */
final class QueryServeList extends RpcRequest
{
}

/**
 * @method Long getServeId
 * @method self withServeId
 */
final class QueryServeById extends RpcRequest
{
}

/**
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getProductKey
 * @method self withProductKey
 */
final class QueryDeviceProp extends RpcRequest
{
}

/**
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getProductKey
 * @method self withProductKey
 */
final class QueryDeviceDetails extends RpcRequest
{
}

/**
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getProductKey
 * @method self withProductKey
 * @method string getPropKey
 * @method self withPropKey
 */
final class DeleteDeviceProp extends RpcRequest
{
}

/**
 * @method string getProductKey
 * @method self withProductKey
 * @method Integer getTimeout
 * @method self withTimeout
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getTopic
 * @method self withTopic
 * @method string getRequestBase64Byte
 * @method self withRequestBase64Byte
 */
final class RRpc extends RpcRequest
{
}

/**
 * @method Long getActionId
 * @method self withActionId
 * @method string getType
 * @method self withType
 * @method string getConfiguration
 * @method self withConfiguration
 */
final class UpdateRuleAction extends RpcRequest
{
}

/**
 * @method Long getRuleId
 * @method self withRuleId
 * @method string getSelect
 * @method self withSelect
 * @method string getShortTopic
 * @method self withShortTopic
 * @method string getWhere
 * @method self withWhere
 * @method string getProductKey
 * @method self withProductKey
 * @method string getName
 * @method self withName
 * @method string getRuleDesc
 * @method self withRuleDesc
 */
final class UpdateRule extends RpcRequest
{
}

/**
 * @method string getDesc
 * @method self withDesc
 * @method string getOperation
 * @method self withOperation
 * @method string getTopicShortName
 * @method self withTopicShortName
 * @method string getTopicId
 * @method self withTopicId
 */
final class UpdateProductTopic extends RpcRequest
{
}

/**
 * @method string getProductName
 * @method self withProductName
 * @method Integer getNodeType
 * @method self withNodeType
 * @method string getProductDesc
 * @method self withProductDesc
 * @method string getExtProps
 * @method self withExtProps
 * @method Long getCatId
 * @method self withCatId
 * @method string getProductKey
 * @method self withProductKey
 */
final class UpdateProduct extends RpcRequest
{
}

/**
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getProductKey
 * @method self withProductKey
 * @method string getShadowMessage
 * @method self withShadowMessage
 */
final class UpdateDeviceShadow extends RpcRequest
{
}

/**
 * @method Long getRuleId
 * @method self withRuleId
 */
final class StopRule extends RpcRequest
{
}

/**
 * @method Long getRuleId
 * @method self withRuleId
 */
final class StartRule extends RpcRequest
{
}

/**
 * @method string getProductKey
 * @method self withProductKey
 * @method string getMnsConfiguration
 * @method self withMnsConfiguration
 * @method Integer getCallbackType
 * @method self withCallbackType
 */
final class SaveServerCallback extends RpcRequest
{
}

/**
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getProductKey
 * @method self withProductKey
 */
final class RegistDevice extends RpcRequest
{
}

final class QueryTenant extends RpcRequest
{
}

/**
 * @method string getProductKey
 * @method self withProductKey
 */
final class QueryServerCallback extends RpcRequest
{
}

/**
 * @method string getProductKey
 * @method self withProductKey
 */
final class QueryProductTopic extends RpcRequest
{
}

/**
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 */
final class QueryProductByUserId extends RpcRequest
{
}

/**
 * @method string getProductKey
 * @method self withProductKey
 */
final class QueryProduct extends RpcRequest
{
}

/**
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Long getApplyId
 * @method self withApplyId
 */
final class QueryPageByApplyId extends RpcRequest
{
}

/**
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 */
final class QueryDeviceTopic extends RpcRequest
{
}

/**
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getProductKey
 * @method self withProductKey
 */
final class QueryDeviceByName extends RpcRequest
{
}

/**
 * @method string getDeviceId
 * @method self withDeviceId
 */
final class QueryDeviceById extends RpcRequest
{
}

/**
 * @method string getProductKey
 * @method self withProductKey
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 */
final class QueryDevice extends RpcRequest
{
}

/**
 * @method Long getApplyId
 * @method self withApplyId
 */
final class QueryApplyStatus extends RpcRequest
{
}

/**
 * @method string getProductKey
 * @method self withProductKey
 * @method string getTopicFullName
 * @method self withTopicFullName
 * @method string getMessageContent
 * @method self withMessageContent
 */
final class PubBroadcast extends RpcRequest
{
}

/**
 * @method string getProductKey
 * @method self withProductKey
 * @method Integer getQos
 * @method self withQos
 * @method string getTopicFullName
 * @method self withTopicFullName
 * @method string getMessageContent
 * @method self withMessageContent
 */
final class Pub extends RpcRequest
{
}

/**
 * @method Long getRuleId
 * @method self withRuleId
 */
final class ListRuleActions extends RpcRequest
{
}

/**
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class ListRule extends RpcRequest
{
}

/**
 * @method Long getActionId
 * @method self withActionId
 */
final class GetRuleAction extends RpcRequest
{
}

/**
 * @method Long getRuleId
 * @method self withRuleId
 */
final class GetRule extends RpcRequest
{
}

/**
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getProductKey
 * @method self withProductKey
 * @method string getShadowMessage
 * @method self withShadowMessage
 */
final class GetDeviceShadow extends RpcRequest
{
}

/**
 * @method Long getRootId
 * @method self withRootId
 */
final class GetCats extends RpcRequest
{
}

/**
 * @method Long getActionId
 * @method self withActionId
 */
final class DeleteRuleAction extends RpcRequest
{
}

/**
 * @method Long getRuleId
 * @method self withRuleId
 */
final class DeleteRule extends RpcRequest
{
}

/**
 * @method string getProductKey
 * @method self withProductKey
 */
final class DeleteProductTopicByProductKey extends RpcRequest
{
}

/**
 * @method string getTopicId
 * @method self withTopicId
 */
final class DeleteProductTopic extends RpcRequest
{
}

/**
 * @method string getProductKey
 * @method self withProductKey
 */
final class DeleteProduct extends RpcRequest
{
}

/**
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getProductKey
 * @method self withProductKey
 */
final class DeleteDevice extends RpcRequest
{
}

/**
 * @method Long getRuleId
 * @method self withRuleId
 * @method string getSql
 * @method self withSql
 * @method string getJsonInfo
 * @method self withJsonInfo
 */
final class DebugRuleSql extends RpcRequest
{
}

/**
 * @method Long getRuleId
 * @method self withRuleId
 * @method string getType
 * @method self withType
 * @method string getConfiguration
 * @method self withConfiguration
 */
final class CreateRuleAction extends RpcRequest
{
}

/**
 * @method string getSelect
 * @method self withSelect
 * @method string getShortTopic
 * @method self withShortTopic
 * @method string getWhere
 * @method self withWhere
 * @method string getProductKey
 * @method self withProductKey
 * @method string getName
 * @method self withName
 * @method string getRuleDesc
 * @method self withRuleDesc
 * @method string getDataType
 * @method self withDataType
 */
final class CreateRule extends RpcRequest
{
}

/**
 * @method string getProductKey
 * @method self withProductKey
 * @method RepeatList getDeviceName
 * @method self withDeviceName
 */
final class BatchGetDeviceState extends RpcRequest
{
}

/**
 * @method RepeatList getDeviceName
 * @method self withDeviceName
 * @method string getProductKey
 * @method self withProductKey
 */
final class ApplyDeviceWithNames extends RpcRequest
{
}

/**
 * @method string getProductKey
 * @method self withProductKey
 * @method string getTopicShortName
 * @method self withTopicShortName
 * @method string getOperation
 * @method self withOperation
 * @method string getDesc
 * @method self withDesc
 */
final class CreateProductTopic extends RpcRequest
{
}

/**
 * @method string getName
 * @method self withName
 * @method Integer getNodeType
 * @method self withNodeType
 * @method string getDesc
 * @method self withDesc
 * @method Long getCatId
 * @method self withCatId
 * @method string getExtProps
 * @method self withExtProps
 * @method string getSecurityPolicy
 * @method self withSecurityPolicy
 * @method Boolean getId2
 * @method self withId2
 * @method Integer getPayType
 * @method self withPayType
 */
final class CreateProduct extends RpcRequest
{
}
