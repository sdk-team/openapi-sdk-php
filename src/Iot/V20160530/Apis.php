<?php

namespace AlibabaCloud\Iot\V20160530;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method SaveServerCallback saveServerCallback($options = [])
 * @method QueryServerCallback queryServerCallback($options = [])
 * @method UpdateProductTopic updateProductTopic($options = [])
 * @method QueryProductTopic queryProductTopic($options = [])
 * @method QueryDeviceTopic queryDeviceTopic($options = [])
 * @method DeleteProductTopic deleteProductTopic($options = [])
 * @method DebugRuleSql debugRuleSql($options = [])
 * @method CreateProductTopic createProductTopic($options = [])
 * @method UpdateRuleAction updateRuleAction($options = [])
 * @method UpdateRule updateRule($options = [])
 * @method UpdateProduct updateProduct($options = [])
 * @method StopRule stopRule($options = [])
 * @method StartRule startRule($options = [])
 * @method QueryTopic queryTopic($options = [])
 * @method QueryProductByUserId queryProductByUserId($options = [])
 * @method QueryProduct queryProduct($options = [])
 * @method QueryPageByApplyId queryPageByApplyId($options = [])
 * @method QueryDeviceByName queryDeviceByName($options = [])
 * @method QueryDeviceById queryDeviceById($options = [])
 * @method QueryDevice queryDevice($options = [])
 * @method QueryApplyStatus queryApplyStatus($options = [])
 * @method ListRuleActions listRuleActions($options = [])
 * @method ListRule listRule($options = [])
 * @method GetRuleAction getRuleAction($options = [])
 * @method GetRule getRule($options = [])
 * @method GetCats getCats($options = [])
 * @method DeleteRuleAction deleteRuleAction($options = [])
 * @method DeleteRule deleteRule($options = [])
 * @method DeleteDevice deleteDevice($options = [])
 * @method CreateRuleAction createRuleAction($options = [])
 * @method CreateRule createRule($options = [])
 * @method CreateProduct createProduct($options = [])
 * @method CheckTopicPermission checkTopicPermission($options = [])
 * @method BatchGetDeviceState batchGetDeviceState($options = [])
 * @method ApplyDeviceWithNames applyDeviceWithNames($options = [])
 * @method ServerOnline serverOnline($options = [])
 * @method UnSub unSub($options = [])
 * @method SubTopicFilter subTopicFilter($options = [])
 * @method Sub sub($options = [])
 * @method RevertRpc revertRpc($options = [])
 * @method Pub pub($options = [])
 * @method ListDevicePermits listDevicePermits($options = [])
 * @method DeviceRevokeByTopic deviceRevokeByTopic($options = [])
 * @method DeviceRevokeById deviceRevokeById($options = [])
 * @method DevicePermitModify devicePermitModify($options = [])
 * @method DeviceGrant deviceGrant($options = [])
 * @method RegistDevice registDevice($options = [])
 */
class V20160530
{
    use ApiResolverTrait;
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
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 */
class QueryServerCallback extends Roa
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
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 */
class QueryProductTopic extends Roa
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
 * @method string getTopicId
 * @method self withTopicId(string $topicId)
 */
class DeleteProductTopic extends Roa
{
    use R;
}

/**
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
 * @method int getProductKey
 * @method self withProductKey(int $productKey)
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
 * @method string getProductName
 * @method self withProductName(string $productName)
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
 * @method string getTopicName
 * @method self withTopicName(string $topicName)
 */
class QueryTopic extends Roa
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
 * @method Integer getCurrenPage
 * @method self withCurrenPage(Integer $currenPage)
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
 * @method int getRuleId
 * @method self withRuleId(int $ruleId)
 */
class ListRuleActions extends Roa
{
    use R;
}

/**
 * @method Integer getCurrenPage
 * @method self withCurrenPage(Integer $currenPage)
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
 * @method int getProductKey
 * @method self withProductKey(int $productKey)
 * @method string getName
 * @method self withName(string $name)
 * @method string getRuleDesc
 * @method self withRuleDesc(string $ruleDesc)
 */
class CreateRule extends Roa
{
    use R;
}

/**
 * @method string getName
 * @method self withName(string $name)
 * @method string getDesc
 * @method self withDesc(string $desc)
 * @method int getCatId
 * @method self withCatId(int $catId)
 * @method string getExtProps
 * @method self withExtProps(string $extProps)
 * @method string getSecurityPolicy
 * @method self withSecurityPolicy(string $securityPolicy)
 */
class CreateProduct extends Roa
{
    use R;
}

/**
 * @method string getTopicOperation
 * @method self withTopicOperation(string $topicOperation)
 * @method string getTopic
 * @method self withTopic(string $topic)
 * @method int getProductKey
 * @method self withProductKey(int $productKey)
 */
class CheckTopicPermission extends Roa
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
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method array getDeviceName
 * @method self withDeviceName(array $deviceName)
 */
class ApplyDeviceWithNames extends Roa
{
    use R;
}

/**
 * @method int getProductKey
 * @method self withProductKey(int $productKey)
 */
class ServerOnline extends Roa
{
    use R;
}

/**
 * @method int getProductKey
 * @method self withProductKey(int $productKey)
 * @method string getTopicList
 * @method self withTopicList(string $topicList)
 * @method array getTopic
 * @method self withTopic(array $topic)
 */
class UnSub extends Roa
{
    use R;
}

/**
 * @method int getProductKey
 * @method self withProductKey(int $productKey)
 * @method string getSubCallback
 * @method self withSubCallback(string $subCallback)
 * @method array getTopic
 * @method self withTopic(array $topic)
 */
class SubTopicFilter extends Roa
{
    use R;
}

/**
 * @method int getProductKey
 * @method self withProductKey(int $productKey)
 * @method string getSubCallback
 * @method self withSubCallback(string $subCallback)
 * @method string getTopicList
 * @method self withTopicList(string $topicList)
 * @method array getTopic
 * @method self withTopic(array $topic)
 */
class Sub extends Roa
{
    use R;
}

/**
 * @method int getProductKey
 * @method self withProductKey(int $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getRpcContent
 * @method self withRpcContent(string $rpcContent)
 * @method Integer getTimeOut
 * @method self withTimeOut(Integer $timeOut)
 */
class RevertRpc extends Roa
{
    use R;
}

/**
 * @method int getProductKey
 * @method self withProductKey(int $productKey)
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
 * @method int getProductKey
 * @method self withProductKey(int $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class ListDevicePermits extends Roa
{
    use R;
}

/**
 * @method int getProductKey
 * @method self withProductKey(int $productKey)
 * @method string getTopicFullName
 * @method self withTopicFullName(string $topicFullName)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getGrantType
 * @method self withGrantType(string $grantType)
 */
class DeviceRevokeByTopic extends Roa
{
    use R;
}

/**
 * @method int getProductKey
 * @method self withProductKey(int $productKey)
 * @method int getRuleId
 * @method self withRuleId(int $ruleId)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class DeviceRevokeById extends Roa
{
    use R;
}

/**
 * @method int getProductKey
 * @method self withProductKey(int $productKey)
 * @method int getRuleId
 * @method self withRuleId(int $ruleId)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getTopicFullName
 * @method self withTopicFullName(string $topicFullName)
 * @method string getGrantType
 * @method self withGrantType(string $grantType)
 */
class DevicePermitModify extends Roa
{
    use R;
}

/**
 * @method int getProductKey
 * @method self withProductKey(int $productKey)
 * @method string getTopicFullName
 * @method self withTopicFullName(string $topicFullName)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getGrantType
 * @method self withGrantType(string $grantType)
 */
class DeviceGrant extends Roa
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
