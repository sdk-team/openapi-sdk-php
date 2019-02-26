<?php

namespace AlibabaCloud\Market\V20151101;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method DescribeProducts describeProducts($options = [])
 * @method UpdateProductSku updateProductSku($options = [])
 * @method UpdateProduct updateProduct($options = [])
 * @method CreateProduct createProduct($options = [])
 * @method SubscribeImage subscribeImage($options = [])
 * @method BindImagePackage bindImagePackage($options = [])
 * @method DescribeProduct describeProduct($options = [])
 * @method DescribePrice describePrice($options = [])
 * @method DescribeOrder describeOrder($options = [])
 * @method DescribeInstance describeInstance($options = [])
 * @method CreateOrder createOrder($options = [])
 * @method PushMeteringData pushMeteringData($options = [])
 * @method DescribeLicense describeLicense($options = [])
 * @method ActivateLicense activateLicense($options = [])
 * @method SubscriptionCheck subscriptionCheck($options = [])
 * @method QueryMarketImages queryMarketImages($options = [])
 * @method QueryMarketCategories queryMarketCategories($options = [])
 * @method QueryAvaiableImages queryAvaiableImages($options = [])
 * @method PrevProduceImageInstance prevProduceImageInstance($options = [])
 * @method GetImageResourceByNo getImageResourceByNo($options = [])
 * @method GetImageResource getImageResource($options = [])
 * @method GetImageInstance getImageInstance($options = [])
 */
class V20151101
{
    use ApiResolverTrait;
}

/**
 * @method string getSearchTerm
 * @method self withSearchTerm(string $searchTerm)
 * @method array getFilter
 * @method self withFilter(array $filter)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeProducts extends Roa
{
    use R;
}

/**
 * @method string getProductCode
 * @method self withProductCode(string $productCode)
 * @method string getCode
 * @method self withCode(string $code)
 * @method string getName
 * @method self withName(string $name)
 * @method Integer getSortId
 * @method self withSortId(Integer $sortId)
 * @method bool getHidden
 * @method self withHidden(bool $hidden)
 * @method array getSalePrice
 * @method self withSalePrice(array $salePrice)
 * @method array getProperty
 * @method self withProperty(array $property)
 */
class UpdateProductSku extends Roa
{
    use R;
}

/**
 * @method string getCode
 * @method self withCode(string $code)
 * @method string getType
 * @method self withType(string $type)
 * @method string getName
 * @method self withName(string $name)
 * @method string getPicUrl
 * @method self withPicUrl(string $picUrl)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getShortDescription
 * @method self withShortDescription(string $shortDescription)
 * @method bool getHidden
 * @method self withHidden(bool $hidden)
 * @method array getProductExtra
 * @method self withProductExtra(array $productExtra)
 */
class UpdateProduct extends Roa
{
    use R;
}

/**
 * @method string getType
 * @method self withType(string $type)
 * @method string getName
 * @method self withName(string $name)
 * @method string getPicUrl
 * @method self withPicUrl(string $picUrl)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getShortDescription
 * @method self withShortDescription(string $shortDescription)
 * @method bool getHidden
 * @method self withHidden(bool $hidden)
 * @method array getProductSku
 * @method self withProductSku(array $productSku)
 * @method array getProductExtra
 * @method self withProductExtra(array $productExtra)
 */
class CreateProduct extends Roa
{
    use R;
}

/**
 * @method string getProductCode
 * @method self withProductCode(string $productCode)
 */
class SubscribeImage extends Roa
{
    use R;
}

/**
 * @method string getEcsInstanceId
 * @method self withEcsInstanceId(string $ecsInstanceId)
 * @method string getImagePackageInstanceId
 * @method self withImagePackageInstanceId(string $imagePackageInstanceId)
 */
class BindImagePackage extends Roa
{
    use R;
}

/**
 * @method string getAliUid
 * @method self withAliUid(string $aliUid)
 * @method string getCode
 * @method self withCode(string $code)
 * @method bool getQueryDraft
 * @method self withQueryDraft(bool $queryDraft)
 */
class DescribeProduct extends Roa
{
    use R;
}

/**
 * @method string getOrderType
 * @method self withOrderType(string $orderType)
 * @method string getCommodity
 * @method self withCommodity(string $commodity)
 */
class DescribePrice extends Roa
{
    use R;
}

/**
 * @method string getOrderId
 * @method self withOrderId(string $orderId)
 */
class DescribeOrder extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class DescribeInstance extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getOrderType
 * @method self withOrderType(string $orderType)
 * @method string getCommodity
 * @method self withCommodity(string $commodity)
 * @method string getOrderSouce
 * @method self withOrderSouce(string $orderSouce)
 * @method string getPaymentType
 * @method self withPaymentType(string $paymentType)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 */
class CreateOrder extends Roa
{
    use R;
}

/**
 * @method string getMetering
 * @method self withMetering(string $metering)
 */
class PushMeteringData extends Roa
{
    use R;
}

/**
 * @method string getLicenseCode
 * @method self withLicenseCode(string $licenseCode)
 */
class DescribeLicense extends Roa
{
    use R;
}

/**
 * @method string getLicenseCode
 * @method self withLicenseCode(string $licenseCode)
 * @method string getIdentification
 * @method self withIdentification(string $identification)
 */
class ActivateLicense extends Roa
{
    use R;
}

/**
 * @method array getImageIdList
 * @method self withImageIdList(array $imageIdList)
 * @method string getAliyunPK
 * @method self withAliyunPK(string $aliyunPK)
 * @method string getRequestSource
 * @method self withRequestSource(string $requestSource)
 */
class SubscriptionCheck extends Roa
{
    use R;
}

/**
 * @method string getParam
 * @method self withParam(string $param)
 */
class QueryMarketImages extends Roa
{
    use R;
}

class QueryMarketCategories extends Roa
{
    use R;
}

/**
 * @method string getRegionNo
 * @method self withRegionNo(string $regionNo)
 * @method string getImageName
 * @method self withImageName(string $imageName)
 * @method string getSnapshotId
 * @method self withSnapshotId(string $snapshotId)
 * @method string getUserPK
 * @method self withUserPK(string $userPK)
 * @method Integer getPageIndex
 * @method self withPageIndex(Integer $pageIndex)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method array getImageIds
 * @method self withImageIds(array $imageIds)
 * @method array getOsTypes
 * @method self withOsTypes(array $osTypes)
 * @method array getEcsUnitModels
 * @method self withEcsUnitModels(array $ecsUnitModels)
 */
class QueryAvaiableImages extends Roa
{
    use R;
}

/**
 * @method array getImageIdList
 * @method self withImageIdList(array $imageIdList)
 * @method string getRegionNo
 * @method self withRegionNo(string $regionNo)
 * @method int getUserPK
 * @method self withUserPK(int $userPK)
 * @method string getBid
 * @method self withBid(string $bid)
 */
class PrevProduceImageInstance extends Roa
{
    use R;
}

/**
 * @method string getImageNo
 * @method self withImageNo(string $imageNo)
 */
class GetImageResourceByNo extends Roa
{
    use R;
}

/**
 * @method string getBid
 * @method self withBid(string $bid)
 * @method string getAliUid
 * @method self withAliUid(string $aliUid)
 * @method string getImageNo
 * @method self withImageNo(string $imageNo)
 * @method string getRegionNo
 * @method self withRegionNo(string $regionNo)
 * @method string getChannel
 * @method self withChannel(string $channel)
 */
class GetImageResource extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class GetImageInstance extends Roa
{
    use R;
}
