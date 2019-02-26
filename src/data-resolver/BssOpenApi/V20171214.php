<?php

namespace AlibabaCloud\BssOpenApi\V20171214;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method string getParamStr
 * @method self withParamStr
 */
final class QueryPrice extends RpcRequest
{
}

/**
 * @method string getBillingCycle
 * @method self withBillingCycle
 * @method string getProductCode
 * @method self withProductCode
 * @method string getProductType
 * @method self withProductType
 * @method string getSubscriptionType
 * @method self withSubscriptionType
 */
final class QueryBillOverview extends RpcRequest
{
}

/**
 * @method string getBillingCycle
 * @method self withBillingCycle
 * @method string getType
 * @method self withType
 * @method string getProductCode
 * @method self withProductCode
 * @method string getProductType
 * @method self withProductType
 * @method string getSubscriptionType
 * @method self withSubscriptionType
 * @method Boolean getIsHideZeroCharge
 * @method self withIsHideZeroCharge
 * @method Boolean getIsDisplayLocalCurrency
 * @method self withIsDisplayLocalCurrency
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method Integer getPageNum
 * @method self withPageNum
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class QueryBill extends RpcRequest
{
}

/**
 * @method string getBillingCycle
 * @method self withBillingCycle
 * @method string getProductCode
 * @method self withProductCode
 * @method string getProductType
 * @method self withProductType
 * @method string getSubscriptionType
 * @method self withSubscriptionType
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method Boolean getIsBillingItem
 * @method self withIsBillingItem
 * @method Integer getPageNum
 * @method self withPageNum
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class QueryInstanceBill extends RpcRequest
{
}

/**
 * @method string getProductCode
 * @method self withProductCode
 * @method Long getOwnerId
 * @method self withOwnerId
 */
final class EnableBillGeneration extends RpcRequest
{
}

/**
 * @method string getExpiryTimeStart
 * @method self withExpiryTimeStart
 * @method string getExpiryTimeEnd
 * @method self withExpiryTimeEnd
 * @method Boolean getEffectiveOrNot
 * @method self withEffectiveOrNot
 * @method Integer getPageNum
 * @method self withPageNum
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class QueryRedeem extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getProductType
 * @method self withProductType
 * @method string getSubscriptionType
 * @method self withSubscriptionType
 * @method Integer getPeriod
 * @method self withPeriod
 * @method string getProductCode
 * @method self withProductCode
 * @method string getInstanceId
 * @method self withInstanceId
 */
final class ConvertChargeType extends RpcRequest
{
}

/**
 * @method Long getUid
 * @method self withUid
 * @method string getBid
 * @method self withBid
 * @method string getAdjustType
 * @method self withAdjustType
 * @method string getAmount
 * @method self withAmount
 * @method string getCurrency
 * @method self withCurrency
 * @method string getBusinessType
 * @method self withBusinessType
 * @method string getSource
 * @method self withSource
 * @method string getOutBizId
 * @method self withOutBizId
 * @method string getExtendMap
 * @method self withExtendMap
 */
final class ChangeConsumeAmount extends RpcRequest
{
}

/**
 * @method Long getUid
 * @method self withUid
 * @method string getBid
 * @method self withBid
 * @method string getItemCodes
 * @method self withItemCodes
 */
final class QueryAvaliableQuota extends RpcRequest
{
}

/**
 * @method Long getUid
 * @method self withUid
 * @method string getPrimaryAccount
 * @method self withPrimaryAccount
 * @method string getStatus
 * @method self withStatus
 * @method string getBusinessType
 * @method self withBusinessType
 */
final class QueryEnduserStatus extends RpcRequest
{
}

/**
 * @method Long getUid
 * @method self withUid
 * @method string getPrimaryAccount
 * @method self withPrimaryAccount
 * @method string getStatus
 * @method self withStatus
 * @method string getBusinessType
 * @method self withBusinessType
 */
final class SetEnduserStatus extends RpcRequest
{
}

/**
 * @method Long getUid
 * @method self withUid
 * @method string getBid
 * @method self withBid
 * @method string getItemCodes
 * @method self withItemCodes
 */
final class QueryAccountBookList extends RpcRequest
{
}

/**
 * @method Long getUid
 * @method self withUid
 * @method string getBid
 * @method self withBid
 * @method string getAlarmType
 * @method self withAlarmType
 * @method string getAlarmThresholds
 * @method self withAlarmThresholds
 */
final class SetUserAlarmThreshold extends RpcRequest
{
}

/**
 * @method Long getUid
 * @method self withUid
 * @method string getBid
 * @method self withBid
 * @method string getAlarmType
 * @method self withAlarmType
 * @method string getAlarmThresholds
 * @method self withAlarmThresholds
 */
final class QueryUserAlarmThreshold extends RpcRequest
{
}

/**
 * @method Long getUid
 * @method self withUid
 * @method string getBid
 * @method self withBid
 * @method string getAmount
 * @method self withAmount
 * @method string getCurrency
 * @method self withCurrency
 * @method string getOutBizId
 * @method self withOutBizId
 */
final class CreateUserQuota extends RpcRequest
{
}

/**
 * @method Long getUid
 * @method self withUid
 * @method string getBid
 * @method self withBid
 * @method string getAmount
 * @method self withAmount
 * @method string getCurrency
 * @method self withCurrency
 * @method string getOutBizId
 * @method self withOutBizId
 */
final class SetUserQuota extends RpcRequest
{
}

/**
 * @method string getProductCode
 * @method self withProductCode
 * @method RepeatList getParameter
 * @method self withParameter
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getProductType
 * @method self withProductType
 * @method string getSubscriptionType
 * @method self withSubscriptionType
 * @method Integer getPeriod
 * @method self withPeriod
 * @method string getRenewalStatus
 * @method self withRenewalStatus
 * @method Integer getRenewPeriod
 * @method self withRenewPeriod
 */
final class CreateInstance extends RpcRequest
{
}

/**
 * @method string getProductCode
 * @method self withProductCode
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getProductType
 * @method self withProductType
 * @method string getSubscriptionType
 * @method self withSubscriptionType
 * @method string getModifyType
 * @method self withModifyType
 * @method string getInstanceId
 * @method self withInstanceId
 * @method RepeatList getParameter
 * @method self withParameter
 */
final class ModifyInstance extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getProductCode
 * @method self withProductCode
 * @method string getProductType
 * @method self withProductType
 * @method string getSubscriptionType
 * @method self withSubscriptionType
 */
final class DescribePricingModule extends RpcRequest
{
}

/**
 * @method Boolean getQueryTotalCount
 * @method self withQueryTotalCount
 * @method Integer getPageNum
 * @method self withPageNum
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class QueryProductList extends RpcRequest
{
}

/**
 * @method string getSubscriptionType
 * @method self withSubscriptionType
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getProductCode
 * @method self withProductCode
 * @method string getProductType
 * @method self withProductType
 * @method string getModuleCode
 * @method self withModuleCode
 */
final class QueryPriceList extends RpcRequest
{
}

/**
 * @method Integer getPageNum
 * @method self withPageNum
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getBillingCycle
 * @method self withBillingCycle
 * @method string getProductCode
 * @method self withProductCode
 * @method string getProductType
 * @method self withProductType
 * @method string getSubscriptionType
 * @method self withSubscriptionType
 */
final class QueryInstanceGaapCost extends RpcRequest
{
}

/**
 * @method string getProductCode
 * @method self withProductCode
 * @method string getInstanceId
 * @method self withInstanceId
 * @method Integer getRenewPeriod
 * @method self withRenewPeriod
 * @method string getClientToken
 * @method self withClientToken
 * @method string getProductType
 * @method self withProductType
 * @method Long getOwnerId
 * @method self withOwnerId
 */
final class RenewInstance extends RpcRequest
{
}

final class UnsubscribeExportToOSS extends RpcRequest
{
}

/**
 * @method string getSubscribeBucket
 * @method self withSubscribeBucket
 * @method Long getBucketOwnerId
 * @method self withBucketOwnerId
 * @method RepeatList getSubscribeType
 * @method self withSubscribeType
 */
final class SubscribeExportToOSS extends RpcRequest
{
}

/**
 * @method string getOrderId
 * @method self withOrderId
 * @method Long getOwnerId
 * @method self withOwnerId
 */
final class GetOrderDetail extends RpcRequest
{
}

/**
 * @method string getCreateTimeEnd
 * @method self withCreateTimeEnd
 * @method Integer getPageNum
 * @method self withPageNum
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getProductCode
 * @method self withProductCode
 * @method string getProductType
 * @method self withProductType
 * @method string getSubscriptionType
 * @method self withSubscriptionType
 * @method string getOrderType
 * @method self withOrderType
 * @method string getPaymentStatus
 * @method self withPaymentStatus
 * @method string getCreateTimeStart
 * @method self withCreateTimeStart
 * @method Long getOwnerId
 * @method self withOwnerId
 */
final class QueryOrders extends RpcRequest
{
}

/**
 * @method string getProductCode
 * @method self withProductCode
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method Integer getPageNum
 * @method self withPageNum
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getBillingCycle
 * @method self withBillingCycle
 * @method string getProductType
 * @method self withProductType
 * @method string getSubscriptionType
 * @method self withSubscriptionType
 */
final class QueryMonthlyInstanceConsumption extends RpcRequest
{
}

/**
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method Integer getPageNum
 * @method self withPageNum
 * @method string getBillingCycle
 * @method self withBillingCycle
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getType
 * @method self withType
 * @method string getProductCode
 * @method self withProductCode
 * @method string getProductType
 * @method self withProductType
 * @method string getSubscriptionType
 * @method self withSubscriptionType
 * @method Boolean getIsHideZeroCharge
 * @method self withIsHideZeroCharge
 */
final class QuerySettlementBill extends RpcRequest
{
}

/**
 * @method string getSubscribeBucket
 * @method self withSubscribeBucket
 * @method Long getBucketOwnerId
 * @method self withBucketOwnerId
 * @method RepeatList getSubscribeType
 * @method self withSubscribeType
 */
final class SubscribeDetail extends RpcRequest
{
}

/**
 * @method string getBillingCycle
 * @method self withBillingCycle
 */
final class QueryMonthlyBill extends RpcRequest
{
}

/**
 * @method Integer getRenewalPeriod
 * @method self withRenewalPeriod
 * @method string getInstanceIDs
 * @method self withInstanceIDs
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getProductCode
 * @method self withProductCode
 * @method string getProductType
 * @method self withProductType
 * @method string getSubscriptionType
 * @method self withSubscriptionType
 * @method string getRenewalPeriodUnit
 * @method self withRenewalPeriodUnit
 * @method string getRenewalStatus
 * @method self withRenewalStatus
 */
final class SetRenewal extends RpcRequest
{
}

/**
 * @method string getRegion
 * @method self withRegion
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method Integer getPageNum
 * @method self withPageNum
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getProductCode
 * @method self withProductCode
 * @method string getProductType
 * @method self withProductType
 * @method string getSubscriptionType
 * @method self withSubscriptionType
 * @method string getInstanceIDs
 * @method self withInstanceIDs
 * @method string getEndTimeStart
 * @method self withEndTimeStart
 * @method string getEndTimeEnd
 * @method self withEndTimeEnd
 * @method string getCreateTimeStart
 * @method self withCreateTimeStart
 * @method string getCreateTimeEnd
 * @method self withCreateTimeEnd
 * @method string getRenewStatus
 * @method self withRenewStatus
 */
final class QueryAvailableInstances extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getProductCode
 * @method self withProductCode
 * @method string getPackageType
 * @method self withPackageType
 * @method string getEffectiveDate
 * @method self withEffectiveDate
 * @method string getSpecification
 * @method self withSpecification
 * @method Integer getDuration
 * @method self withDuration
 * @method string getPricingCycle
 * @method self withPricingCycle
 */
final class CreateResourcePackage extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getProductCode
 * @method self withProductCode
 * @method string getExpiryTimeStart
 * @method self withExpiryTimeStart
 * @method string getExpiryTimeEnd
 * @method self withExpiryTimeEnd
 * @method Integer getPageNum
 * @method self withPageNum
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class QueryResourcePackageInstances extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getProductCode
 * @method self withProductCode
 * @method string getPackageType
 * @method self withPackageType
 * @method string getEffectiveDate
 * @method self withEffectiveDate
 * @method string getSpecification
 * @method self withSpecification
 * @method Integer getDuration
 * @method self withDuration
 * @method string getPricingCycle
 * @method self withPricingCycle
 */
final class GetResourcePackagePrice extends RpcRequest
{
}

/**
 * @method string getServicePeriodUnit
 * @method self withServicePeriodUnit
 * @method string getSubscriptionType
 * @method self withSubscriptionType
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getProductCode
 * @method self withProductCode
 * @method string getOrderType
 * @method self withOrderType
 * @method Integer getServicePeriodQuantity
 * @method self withServicePeriodQuantity
 * @method string getProductType
 * @method self withProductType
 * @method string getRegion
 * @method self withRegion
 * @method string getInstanceId
 * @method self withInstanceId
 * @method RepeatList getModuleList
 * @method self withModuleList
 * @method Integer getQuantity
 * @method self withQuantity
 */
final class GetSubscriptionPrice extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getProductCode
 * @method self withProductCode
 * @method string getProductType
 * @method self withProductType
 * @method string getSubscriptionType
 * @method self withSubscriptionType
 * @method string getRegion
 * @method self withRegion
 * @method RepeatList getModuleList
 * @method self withModuleList
 */
final class GetPayAsYouGoPrice extends RpcRequest
{
}

/**
 * @method string getExpiryTimeEnd
 * @method self withExpiryTimeEnd
 * @method string getExpiryTimeStart
 * @method self withExpiryTimeStart
 * @method Boolean getEffectiveOrNot
 * @method self withEffectiveOrNot
 */
final class QueryPrepaidCards extends RpcRequest
{
}

/**
 * @method string getExpiryTimeEnd
 * @method self withExpiryTimeEnd
 * @method string getExpiryTimeStart
 * @method self withExpiryTimeStart
 * @method Boolean getEffectiveOrNot
 * @method self withEffectiveOrNot
 */
final class QueryCashCoupons extends RpcRequest
{
}

final class QueryAccountBalance extends RpcRequest
{
}

/**
 * @method string getProductCode
 * @method self withProductCode
 */
final class DescribeResourcePackageProduct extends RpcRequest
{
}
