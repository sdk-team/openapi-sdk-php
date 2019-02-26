<?php

namespace AlibabaCloud\Iot\V20170420;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method RamAuth ramAuth($options = [])
 * @method SetDeviceProp setDeviceProp($options = [])
 * @method GetDeviceProp getDeviceProp($options = [])
 * @method DisableSubDevice disableSubDevice($options = [])
 * @method EnableSubDevice enableSubDevice($options = [])
 * @method QuerySubDeviceList querySubDeviceList($options = [])
 * @method EnableDevice enableDevice($options = [])
 * @method DisableDevice disableDevice($options = [])
 * @method DeleteSubDevice deleteSubDevice($options = [])
 * @method doPhysicalDeleteResource doPhysicalDeleteResource($options = [])
 * @method doLogicalDeleteResource doLogicalDeleteResource($options = [])
 * @method doCheckResource doCheckResource($options = [])
 * @method UpdateC2CConfig updateC2CConfig($options = [])
 * @method GetMqInfo getMqInfo($options = [])
 * @method GetC2CConfig getC2CConfig($options = [])
 * @method DeleteMq deleteMq($options = [])
 * @method CreateMq createMq($options = [])
 * @method QueryTopicRouteTable queryTopicRouteTable($options = [])
 * @method QueryTopicReverseRouteTable queryTopicReverseRouteTable($options = [])
 * @method DeleteTopicRouteTable deleteTopicRouteTable($options = [])
 * @method CreateTopicRouteTable createTopicRouteTable($options = [])
 * @method QueryDeviceSession queryDeviceSession($options = [])
 * @method GetVpcServerMapping getVpcServerMapping($options = [])
 * @method RevokeInstance revokeInstance($options = [])
 * @method GrantInstance grantInstance($options = [])
 * @method GetVpcInstanceMapping getVpcInstanceMapping($options = [])
 * @method GetServerMapping getServerMapping($options = [])
 * @method SaveUserServeStatus saveUserServeStatus($options = [])
 * @method SaveDeviceProp saveDeviceProp($options = [])
 * @method QueryUserServeStatus queryUserServeStatus($options = [])
 * @method QueryServeList queryServeList($options = [])
 * @method QueryServeById queryServeById($options = [])
 * @method QueryDeviceProp queryDeviceProp($options = [])
 * @method QueryDeviceDetails queryDeviceDetails($options = [])
 * @method DeleteDeviceProp deleteDeviceProp($options = [])
 * @method RRpc rRpc($options = [])
 * @method UpdateRuleAction updateRuleAction($options = [])
 * @method UpdateRule updateRule($options = [])
 * @method UpdateProductTopic updateProductTopic($options = [])
 * @method UpdateProduct updateProduct($options = [])
 * @method UpdateDeviceShadow updateDeviceShadow($options = [])
 * @method StopRule stopRule($options = [])
 * @method StartRule startRule($options = [])
 * @method SaveServerCallback saveServerCallback($options = [])
 * @method RegistDevice registDevice($options = [])
 * @method QueryTenant queryTenant($options = [])
 * @method QueryServerCallback queryServerCallback($options = [])
 * @method QueryProductTopic queryProductTopic($options = [])
 * @method QueryProductByUserId queryProductByUserId($options = [])
 * @method QueryProduct queryProduct($options = [])
 * @method QueryPageByApplyId queryPageByApplyId($options = [])
 * @method QueryDeviceTopic queryDeviceTopic($options = [])
 * @method QueryDeviceByName queryDeviceByName($options = [])
 * @method QueryDeviceById queryDeviceById($options = [])
 * @method QueryDevice queryDevice($options = [])
 * @method QueryApplyStatus queryApplyStatus($options = [])
 * @method PubBroadcast pubBroadcast($options = [])
 * @method Pub pub($options = [])
 * @method ListRuleActions listRuleActions($options = [])
 * @method ListRule listRule($options = [])
 * @method GetRuleAction getRuleAction($options = [])
 * @method GetRule getRule($options = [])
 * @method GetDeviceShadow getDeviceShadow($options = [])
 * @method GetCats getCats($options = [])
 * @method DeleteRuleAction deleteRuleAction($options = [])
 * @method DeleteRule deleteRule($options = [])
 * @method DeleteProductTopicByProductKey deleteProductTopicByProductKey($options = [])
 * @method DeleteProductTopic deleteProductTopic($options = [])
 * @method DeleteProduct deleteProduct($options = [])
 * @method DeleteDevice deleteDevice($options = [])
 * @method DebugRuleSql debugRuleSql($options = [])
 * @method CreateRuleAction createRuleAction($options = [])
 * @method CreateRule createRule($options = [])
 * @method BatchGetDeviceState batchGetDeviceState($options = [])
 * @method ApplyDeviceWithNames applyDeviceWithNames($options = [])
 * @method CreateProductTopic createProductTopic($options = [])
 * @method CreateProduct createProduct($options = [])
 */
class V20170420
{
    use ApiResolverTrait;
}

class RamAuth extends Roa
{
    use R;
}

/**
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getProps
 * @method self withProps(string $props)
 */
class SetDeviceProp extends Roa
{
    use R;
}

/**
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 */
class GetDeviceProp extends Roa
{
    use R;
}

/**
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class DisableSubDevice extends Roa
{
    use R;
}

/**
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class EnableSubDevice extends Roa
{
    use R;
}

/**
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getSubDeviceName
 * @method self withSubDeviceName(string $subDeviceName)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 */
class QuerySubDeviceList extends Roa
{
    use R;
}

/**
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class EnableDevice extends Roa
{
    use R;
}

/**
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class DisableDevice extends Roa
{
    use R;
}

/**
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class DeleteSubDevice extends Roa
{
    use R;
}

/**
 * @method bool getInterrupt
 * @method self withInterrupt(bool $interrupt)
 * @method string getInvoker
 * @method self withInvoker(string $invoker)
 * @method string getPk
 * @method self withPk(string $pk)
 * @method string getBid
 * @method self withBid(string $bid)
 * @method int getHid
 * @method self withHid(int $hid)
 * @method string getCountry
 * @method self withCountry(string $country)
 * @method string getTaskIdentifier
 * @method self withTaskIdentifier(string $taskIdentifier)
 * @method string getTaskExtraData
 * @method self withTaskExtraData(string $taskExtraData)
 * @method string getGmtWakeup
 * @method self withGmtWakeup(string $gmtWakeup)
 * @method bool getSuccess
 * @method self withSuccess(bool $success)
 * @method string getMessage
 * @method self withMessage(string $message)
 */
class doPhysicalDeleteResource extends Roa
{
    use R;
}

/**
 * @method bool getInterrupt
 * @method self withInterrupt(bool $interrupt)
 * @method string getInvoker
 * @method self withInvoker(string $invoker)
 * @method string getPk
 * @method self withPk(string $pk)
 * @method string getBid
 * @method self withBid(string $bid)
 * @method int getHid
 * @method self withHid(int $hid)
 * @method string getCountry
 * @method self withCountry(string $country)
 * @method string getTaskIdentifier
 * @method self withTaskIdentifier(string $taskIdentifier)
 * @method string getTaskExtraData
 * @method self withTaskExtraData(string $taskExtraData)
 * @method string getGmtWakeup
 * @method self withGmtWakeup(string $gmtWakeup)
 * @method bool getSuccess
 * @method self withSuccess(bool $success)
 * @method string getMessage
 * @method self withMessage(string $message)
 */
class doLogicalDeleteResource extends Roa
{
    use R;
}

/**
 * @method bool getInterrupt
 * @method self withInterrupt(bool $interrupt)
 * @method string getInvoker
 * @method self withInvoker(string $invoker)
 * @method string getPk
 * @method self withPk(string $pk)
 * @method string getBid
 * @method self withBid(string $bid)
 * @method int getHid
 * @method self withHid(int $hid)
 * @method string getCountry
 * @method self withCountry(string $country)
 * @method string getTaskIdentifier
 * @method self withTaskIdentifier(string $taskIdentifier)
 * @method string getTaskExtraData
 * @method self withTaskExtraData(string $taskExtraData)
 * @method string getGmtWakeup
 * @method self withGmtWakeup(string $gmtWakeup)
 * @method bool getSuccess
 * @method self withSuccess(bool $success)
 * @method string getMessage
 * @method self withMessage(string $message)
 * @method int getLevel
 * @method self withLevel(int $level)
 * @method string getUrl
 * @method self withUrl(string $url)
 * @method string getPrompt
 * @method self withPrompt(string $prompt)
 */
class doCheckResource extends Roa
{
    use R;
}

/**
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method Integer getMessageType
 * @method self withMessageType(Integer $messageType)
 */
class UpdateC2CConfig extends Roa
{
    use R;
}

/**
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 */
class GetMqInfo extends Roa
{
    use R;
}

/**
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 */
class GetC2CConfig extends Roa
{
    use R;
}

/**
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 */
class DeleteMq extends Roa
{
    use R;
}

/**
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 */
class CreateMq extends Roa
{
    use R;
}

/**
 * @method string getTopic
 * @method self withTopic(string $topic)
 */
class QueryTopicRouteTable extends Roa
{
    use R;
}

/**
 * @method string getTopic
 * @method self withTopic(string $topic)
 */
class QueryTopicReverseRouteTable extends Roa
{
    use R;
}

/**
 * @method string getSrcTopic
 * @method self withSrcTopic(string $srcTopic)
 * @method array getDstTopic
 * @method self withDstTopic(array $dstTopic)
 */
class DeleteTopicRouteTable extends Roa
{
    use R;
}

/**
 * @method string getSrcTopic
 * @method self withSrcTopic(string $srcTopic)
 * @method array getDstTopic
 * @method self withDstTopic(array $dstTopic)
 */
class CreateTopicRouteTable extends Roa
{
    use R;
}

/**
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method array getDeviceName
 * @method self withDeviceName(array $deviceName)
 */
class QueryDeviceSession extends Roa
{
    use R;
}

class GetVpcServerMapping extends Roa
{
    use R;
}

/**
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getInstancePort
 * @method self withInstancePort(string $instancePort)
 */
class RevokeInstance extends Roa
{
    use R;
}

/**
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getInstancePort
 * @method self withInstancePort(string $instancePort)
 */
class GrantInstance extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 */
class GetVpcInstanceMapping extends Roa
{
    use R;
}

class GetServerMapping extends Roa
{
    use R;
}

/**
 * @method int getServeId
 * @method self withServeId(int $serveId)
 * @method string getStatus
 * @method self withStatus(string $status)
 */
class SaveUserServeStatus extends Roa
{
    use R;
}

/**
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getProps
 * @method self withProps(string $props)
 */
class SaveDeviceProp extends Roa
{
    use R;
}

/**
 * @method int getServeId
 * @method self withServeId(int $serveId)
 */
class QueryUserServeStatus extends Roa
{
    use R;
}

/**
 * @method array getExclusionServe
 * @method self withExclusionServe(array $exclusionServe)
 */
class QueryServeList extends Roa
{
    use R;
}

/**
 * @method int getServeId
 * @method self withServeId(int $serveId)
 */
class QueryServeById extends Roa
{
    use R;
}

/**
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 */
class QueryDeviceProp extends Roa
{
    use R;
}

/**
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 */
class QueryDeviceDetails extends Roa
{
    use R;
}

/**
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getPropKey
 * @method self withPropKey(string $propKey)
 */
class DeleteDeviceProp extends Roa
{
    use R;
}

/**
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method Integer getTimeout
 * @method self withTimeout(Integer $timeout)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getTopic
 * @method self withTopic(string $topic)
 * @method string getRequestBase64Byte
 * @method self withRequestBase64Byte(string $requestBase64Byte)
 */
class RRpc extends Roa
{
    use R;
}

/**
 * @method int getActionId
 * @method self withActionId(int $actionId)
 * @method string getType
 * @method self withType(string $type)
 * @method string getConfiguration
 * @method self withConfiguration(string $configuration)
 */
class UpdateRuleAction extends Roa
{
    use R;
}

/**
 * @method int getRuleId
 * @method self withRuleId(int $ruleId)
 * @method string getSelect
 * @method self withSelect(string $select)
 * @method string getShortTopic
 * @method self withShortTopic(string $shortTopic)
 * @method string getWhere
 * @method self withWhere(string $where)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getName
 * @method self withName(string $name)
 * @method string getRuleDesc
 * @method self withRuleDesc(string $ruleDesc)
 */
class UpdateRule extends Roa
{
    use R;
}

/**
 * @method string getDesc
 * @method self withDesc(string $desc)
 * @method string getOperation
 * @method self withOperation(string $operation)
 * @method string getTopicShortName
 * @method self withTopicShortName(string $topicShortName)
 * @method string getTopicId
 * @method self withTopicId(string $topicId)
 */
class UpdateProductTopic extends Roa
{
    use R;
}

/**
 * @method string getProductName
 * @method self withProductName(string $productName)
 * @method Integer getNodeType
 * @method self withNodeType(Integer $nodeType)
 * @method string getProductDesc
 * @method self withProductDesc(string $productDesc)
 * @method string getExtProps
 * @method self withExtProps(string $extProps)
 * @method int getCatId
 * @method self withCatId(int $catId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 */
class UpdateProduct extends Roa
{
    use R;
}

/**
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getShadowMessage
 * @method self withShadowMessage(string $shadowMessage)
 */
class UpdateDeviceShadow extends Roa
{
    use R;
}

/**
 * @method int getRuleId
 * @method self withRuleId(int $ruleId)
 */
class StopRule extends Roa
{
    use R;
}

/**
 * @method int getRuleId
 * @method self withRuleId(int $ruleId)
 */
class StartRule extends Roa
{
    use R;
}

/**
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getMnsConfiguration
 * @method self withMnsConfiguration(string $mnsConfiguration)
 * @method Integer getCallbackType
 * @method self withCallbackType(Integer $callbackType)
 */
class SaveServerCallback extends Roa
{
    use R;
}

/**
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 */
class RegistDevice extends Roa
{
    use R;
}

class QueryTenant extends Roa
{
    use R;
}

/**
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 */
class QueryServerCallback extends Roa
{
    use R;
}

/**
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 */
class QueryProductTopic extends Roa
{
    use R;
}

/**
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 */
class QueryProductByUserId extends Roa
{
    use R;
}

/**
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 */
class QueryProduct extends Roa
{
    use R;
}

/**
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method int getApplyId
 * @method self withApplyId(int $applyId)
 */
class QueryPageByApplyId extends Roa
{
    use R;
}

/**
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class QueryDeviceTopic extends Roa
{
    use R;
}

/**
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 */
class QueryDeviceByName extends Roa
{
    use R;
}

/**
 * @method string getDeviceId
 * @method self withDeviceId(string $deviceId)
 */
class QueryDeviceById extends Roa
{
    use R;
}

/**
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 */
class QueryDevice extends Roa
{
    use R;
}

/**
 * @method int getApplyId
 * @method self withApplyId(int $applyId)
 */
class QueryApplyStatus extends Roa
{
    use R;
}

/**
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getTopicFullName
 * @method self withTopicFullName(string $topicFullName)
 * @method string getMessageContent
 * @method self withMessageContent(string $messageContent)
 */
class PubBroadcast extends Roa
{
    use R;
}

/**
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method Integer getQos
 * @method self withQos(Integer $qos)
 * @method string getTopicFullName
 * @method self withTopicFullName(string $topicFullName)
 * @method string getMessageContent
 * @method self withMessageContent(string $messageContent)
 */
class Pub extends Roa
{
    use R;
}

/**
 * @method int getRuleId
 * @method self withRuleId(int $ruleId)
 */
class ListRuleActions extends Roa
{
    use R;
}

/**
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class ListRule extends Roa
{
    use R;
}

/**
 * @method int getActionId
 * @method self withActionId(int $actionId)
 */
class GetRuleAction extends Roa
{
    use R;
}

/**
 * @method int getRuleId
 * @method self withRuleId(int $ruleId)
 */
class GetRule extends Roa
{
    use R;
}

/**
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getShadowMessage
 * @method self withShadowMessage(string $shadowMessage)
 */
class GetDeviceShadow extends Roa
{
    use R;
}

/**
 * @method int getRootId
 * @method self withRootId(int $rootId)
 */
class GetCats extends Roa
{
    use R;
}

/**
 * @method int getActionId
 * @method self withActionId(int $actionId)
 */
class DeleteRuleAction extends Roa
{
    use R;
}

/**
 * @method int getRuleId
 * @method self withRuleId(int $ruleId)
 */
class DeleteRule extends Roa
{
    use R;
}

/**
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 */
class DeleteProductTopicByProductKey extends Roa
{
    use R;
}

/**
 * @method string getTopicId
 * @method self withTopicId(string $topicId)
 */
class DeleteProductTopic extends Roa
{
    use R;
}

/**
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 */
class DeleteProduct extends Roa
{
    use R;
}

/**
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 */
class DeleteDevice extends Roa
{
    use R;
}

/**
 * @method int getRuleId
 * @method self withRuleId(int $ruleId)
 * @method string getSql
 * @method self withSql(string $sql)
 * @method string getJsonInfo
 * @method self withJsonInfo(string $jsonInfo)
 */
class DebugRuleSql extends Roa
{
    use R;
}

/**
 * @method int getRuleId
 * @method self withRuleId(int $ruleId)
 * @method string getType
 * @method self withType(string $type)
 * @method string getConfiguration
 * @method self withConfiguration(string $configuration)
 */
class CreateRuleAction extends Roa
{
    use R;
}

/**
 * @method string getSelect
 * @method self withSelect(string $select)
 * @method string getShortTopic
 * @method self withShortTopic(string $shortTopic)
 * @method string getWhere
 * @method self withWhere(string $where)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getName
 * @method self withName(string $name)
 * @method string getRuleDesc
 * @method self withRuleDesc(string $ruleDesc)
 * @method string getDataType
 * @method self withDataType(string $dataType)
 */
class CreateRule extends Roa
{
    use R;
}

/**
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method array getDeviceName
 * @method self withDeviceName(array $deviceName)
 */
class BatchGetDeviceState extends Roa
{
    use R;
}

/**
 * @method array getDeviceName
 * @method self withDeviceName(array $deviceName)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 */
class ApplyDeviceWithNames extends Roa
{
    use R;
}

/**
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getTopicShortName
 * @method self withTopicShortName(string $topicShortName)
 * @method string getOperation
 * @method self withOperation(string $operation)
 * @method string getDesc
 * @method self withDesc(string $desc)
 */
class CreateProductTopic extends Roa
{
    use R;
}

/**
 * @method string getName
 * @method self withName(string $name)
 * @method Integer getNodeType
 * @method self withNodeType(Integer $nodeType)
 * @method string getDesc
 * @method self withDesc(string $desc)
 * @method int getCatId
 * @method self withCatId(int $catId)
 * @method string getExtProps
 * @method self withExtProps(string $extProps)
 * @method string getSecurityPolicy
 * @method self withSecurityPolicy(string $securityPolicy)
 * @method bool getId2
 * @method self withId2(bool $id2)
 * @method Integer getPayType
 * @method self withPayType(Integer $payType)
 */
class CreateProduct extends Roa
{
    use R;
}
