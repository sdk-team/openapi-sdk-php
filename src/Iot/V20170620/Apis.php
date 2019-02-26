<?php

namespace AlibabaCloud\Iot\V20170620;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method UpdateProduct updateProduct($options = [])
 * @method UpdateDeviceShadow updateDeviceShadow($options = [])
 * @method RegistDevice registDevice($options = [])
 * @method QueryPageByApplyId queryPageByApplyId($options = [])
 * @method QueryDeviceByName queryDeviceByName($options = [])
 * @method QueryDevice queryDevice($options = [])
 * @method QueryApplyStatus queryApplyStatus($options = [])
 * @method PubBroadcast pubBroadcast($options = [])
 * @method Pub pub($options = [])
 * @method GetDeviceShadow getDeviceShadow($options = [])
 * @method GetCats getCats($options = [])
 * @method CreateProduct createProduct($options = [])
 * @method BatchGetDeviceState batchGetDeviceState($options = [])
 * @method ApplyDeviceWithNames applyDeviceWithNames($options = [])
 */
class V20170620
{
    use ApiResolverTrait;
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
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 */
class RegistDevice extends Roa
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
 * @method string getName
 * @method self withName(string $name)
 * @method int getCatId
 * @method self withCatId(int $catId)
 * @method string getDesc
 * @method self withDesc(string $desc)
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
