<?php

namespace AlibabaCloud\Market\V20151101;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method string getSearchTerm
 * @method self withSearchTerm
 * @method RepeatList getFilter
 * @method self withFilter
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class DescribeProducts extends RpcRequest
{
}

/**
 * @method string getProductCode
 * @method self withProductCode
 * @method string getCode
 * @method self withCode
 * @method string getName
 * @method self withName
 * @method Integer getSortId
 * @method self withSortId
 * @method Boolean getHidden
 * @method self withHidden
 * @method RepeatList getSalePrice
 * @method self withSalePrice
 * @method RepeatList getProperty
 * @method self withProperty
 */
final class UpdateProductSku extends RpcRequest
{
}

/**
 * @method string getCode
 * @method self withCode
 * @method string getType
 * @method self withType
 * @method string getName
 * @method self withName
 * @method string getPicUrl
 * @method self withPicUrl
 * @method string getDescription
 * @method self withDescription
 * @method string getShortDescription
 * @method self withShortDescription
 * @method Boolean getHidden
 * @method self withHidden
 * @method RepeatList getProductExtra
 * @method self withProductExtra
 */
final class UpdateProduct extends RpcRequest
{
}

/**
 * @method string getType
 * @method self withType
 * @method string getName
 * @method self withName
 * @method string getPicUrl
 * @method self withPicUrl
 * @method string getDescription
 * @method self withDescription
 * @method string getShortDescription
 * @method self withShortDescription
 * @method Boolean getHidden
 * @method self withHidden
 * @method RepeatList getProductSku
 * @method self withProductSku
 * @method RepeatList getProductExtra
 * @method self withProductExtra
 */
final class CreateProduct extends RpcRequest
{
}

/**
 * @method string getProductCode
 * @method self withProductCode
 */
final class SubscribeImage extends RpcRequest
{
}

/**
 * @method string getEcsInstanceId
 * @method self withEcsInstanceId
 * @method string getImagePackageInstanceId
 * @method self withImagePackageInstanceId
 */
final class BindImagePackage extends RpcRequest
{
}

/**
 * @method string getAliUid
 * @method self withAliUid
 * @method string getCode
 * @method self withCode
 * @method Boolean getQueryDraft
 * @method self withQueryDraft
 */
final class DescribeProduct extends RpcRequest
{
}

/**
 * @method string getOrderType
 * @method self withOrderType
 * @method string getCommodity
 * @method self withCommodity
 */
final class DescribePrice extends RpcRequest
{
}

/**
 * @method string getOrderId
 * @method self withOrderId
 */
final class DescribeOrder extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 */
final class DescribeInstance extends RpcRequest
{
}

/**
 * @method string getOwnerId
 * @method self withOwnerId
 * @method string getOrderType
 * @method self withOrderType
 * @method string getCommodity
 * @method self withCommodity
 * @method string getOrderSouce
 * @method self withOrderSouce
 * @method string getPaymentType
 * @method self withPaymentType
 * @method string getClientToken
 * @method self withClientToken
 */
final class CreateOrder extends RpcRequest
{
}

/**
 * @method string getMetering
 * @method self withMetering
 */
final class PushMeteringData extends RpcRequest
{
}

/**
 * @method string getLicenseCode
 * @method self withLicenseCode
 */
final class DescribeLicense extends RpcRequest
{
}

/**
 * @method string getLicenseCode
 * @method self withLicenseCode
 * @method string getIdentification
 * @method self withIdentification
 */
final class ActivateLicense extends RpcRequest
{
}

/**
 * @method RepeatList getImageIdList
 * @method self withImageIdList
 * @method string getAliyunPK
 * @method self withAliyunPK
 * @method string getRequestSource
 * @method self withRequestSource
 */
final class SubscriptionCheck extends RpcRequest
{
}

/**
 * @method string getParam
 * @method self withParam
 */
final class QueryMarketImages extends RpcRequest
{
}

final class QueryMarketCategories extends RpcRequest
{
}

/**
 * @method string getRegionNo
 * @method self withRegionNo
 * @method string getImageName
 * @method self withImageName
 * @method string getSnapshotId
 * @method self withSnapshotId
 * @method string getUserPK
 * @method self withUserPK
 * @method Integer getPageIndex
 * @method self withPageIndex
 * @method Integer getPageSize
 * @method self withPageSize
 * @method RepeatList getImageIds
 * @method self withImageIds
 * @method RepeatList getOsTypes
 * @method self withOsTypes
 * @method RepeatList getEcsUnitModels
 * @method self withEcsUnitModels
 */
final class QueryAvaiableImages extends RpcRequest
{
}

/**
 * @method RepeatList getImageIdList
 * @method self withImageIdList
 * @method string getRegionNo
 * @method self withRegionNo
 * @method Long getUserPK
 * @method self withUserPK
 * @method string getBid
 * @method self withBid
 */
final class PrevProduceImageInstance extends RpcRequest
{
}

/**
 * @method string getImageNo
 * @method self withImageNo
 */
final class GetImageResourceByNo extends RpcRequest
{
}

/**
 * @method string getBid
 * @method self withBid
 * @method string getAliUid
 * @method self withAliUid
 * @method string getImageNo
 * @method self withImageNo
 * @method string getRegionNo
 * @method self withRegionNo
 * @method string getChannel
 * @method self withChannel
 */
final class GetImageResource extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 */
final class GetImageInstance extends RpcRequest
{
}
