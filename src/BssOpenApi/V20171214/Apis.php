<?php

namespace AlibabaCloud\BssOpenApi\V20171214;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method QueryPrice queryPrice($options = [])
 * @method QueryBillOverview queryBillOverview($options = [])
 * @method QueryBill queryBill($options = [])
 * @method QueryInstanceBill queryInstanceBill($options = [])
 * @method EnableBillGeneration enableBillGeneration($options = [])
 * @method QueryRedeem queryRedeem($options = [])
 * @method ConvertChargeType convertChargeType($options = [])
 * @method ChangeConsumeAmount changeConsumeAmount($options = [])
 * @method QueryAvaliableQuota queryAvaliableQuota($options = [])
 * @method QueryEnduserStatus queryEnduserStatus($options = [])
 * @method SetEnduserStatus setEnduserStatus($options = [])
 * @method QueryAccountBookList queryAccountBookList($options = [])
 * @method SetUserAlarmThreshold setUserAlarmThreshold($options = [])
 * @method QueryUserAlarmThreshold queryUserAlarmThreshold($options = [])
 * @method CreateUserQuota createUserQuota($options = [])
 * @method SetUserQuota setUserQuota($options = [])
 * @method CreateInstance createInstance($options = [])
 * @method ModifyInstance modifyInstance($options = [])
 * @method DescribePricingModule describePricingModule($options = [])
 * @method QueryProductList queryProductList($options = [])
 * @method QueryPriceList queryPriceList($options = [])
 * @method QueryInstanceGaapCost queryInstanceGaapCost($options = [])
 * @method RenewInstance renewInstance($options = [])
 * @method UnsubscribeExportToOSS unsubscribeExportToOSS($options = [])
 * @method SubscribeExportToOSS subscribeExportToOSS($options = [])
 * @method GetOrderDetail getOrderDetail($options = [])
 * @method QueryOrders queryOrders($options = [])
 * @method QueryMonthlyInstanceConsumption queryMonthlyInstanceConsumption($options = [])
 * @method QuerySettlementBill querySettlementBill($options = [])
 * @method SubscribeDetail subscribeDetail($options = [])
 * @method QueryMonthlyBill queryMonthlyBill($options = [])
 * @method SetRenewal setRenewal($options = [])
 * @method QueryAvailableInstances queryAvailableInstances($options = [])
 * @method CreateResourcePackage createResourcePackage($options = [])
 * @method QueryResourcePackageInstances queryResourcePackageInstances($options = [])
 * @method GetResourcePackagePrice getResourcePackagePrice($options = [])
 * @method GetSubscriptionPrice getSubscriptionPrice($options = [])
 * @method GetPayAsYouGoPrice getPayAsYouGoPrice($options = [])
 * @method QueryPrepaidCards queryPrepaidCards($options = [])
 * @method QueryCashCoupons queryCashCoupons($options = [])
 * @method QueryAccountBalance queryAccountBalance($options = [])
 * @method DescribeResourcePackageProduct describeResourcePackageProduct($options = [])
 */
class V20171214
{
    use ApiResolverTrait;
}

/**
 * @method string getParamStr
 * @method self withParamStr(string $paramStr)
 */
class QueryPrice extends Roa
{
    use R;
}

/**
 * @method string getBillingCycle
 * @method self withBillingCycle(string $billingCycle)
 * @method string getProductCode
 * @method self withProductCode(string $productCode)
 * @method string getProductType
 * @method self withProductType(string $productType)
 * @method string getSubscriptionType
 * @method self withSubscriptionType(string $subscriptionType)
 */
class QueryBillOverview extends Roa
{
    use R;
}

/**
 * @method string getBillingCycle
 * @method self withBillingCycle(string $billingCycle)
 * @method string getType
 * @method self withType(string $type)
 * @method string getProductCode
 * @method self withProductCode(string $productCode)
 * @method string getProductType
 * @method self withProductType(string $productType)
 * @method string getSubscriptionType
 * @method self withSubscriptionType(string $subscriptionType)
 * @method bool getIsHideZeroCharge
 * @method self withIsHideZeroCharge(bool $isHideZeroCharge)
 * @method bool getIsDisplayLocalCurrency
 * @method self withIsDisplayLocalCurrency(bool $isDisplayLocalCurrency)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class QueryBill extends Roa
{
    use R;
}

/**
 * @method string getBillingCycle
 * @method self withBillingCycle(string $billingCycle)
 * @method string getProductCode
 * @method self withProductCode(string $productCode)
 * @method string getProductType
 * @method self withProductType(string $productType)
 * @method string getSubscriptionType
 * @method self withSubscriptionType(string $subscriptionType)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method bool getIsBillingItem
 * @method self withIsBillingItem(bool $isBillingItem)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method bool getIsHideZeroCharge
 * @method self withIsHideZeroCharge(bool $isHideZeroCharge)
 */
class QueryInstanceBill extends Roa
{
    use R;
}

/**
 * @method string getProductCode
 * @method self withProductCode(string $productCode)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 */
class EnableBillGeneration extends Roa
{
    use R;
}

/**
 * @method string getExpiryTimeStart
 * @method self withExpiryTimeStart(string $expiryTimeStart)
 * @method string getExpiryTimeEnd
 * @method self withExpiryTimeEnd(string $expiryTimeEnd)
 * @method bool getEffectiveOrNot
 * @method self withEffectiveOrNot(bool $effectiveOrNot)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class QueryRedeem extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getProductType
 * @method self withProductType(string $productType)
 * @method string getSubscriptionType
 * @method self withSubscriptionType(string $subscriptionType)
 * @method Integer getPeriod
 * @method self withPeriod(Integer $period)
 * @method string getProductCode
 * @method self withProductCode(string $productCode)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class ConvertChargeType extends Roa
{
    use R;
}

/**
 * @method int getUid
 * @method self withUid(int $uid)
 * @method string getBid
 * @method self withBid(string $bid)
 * @method string getAdjustType
 * @method self withAdjustType(string $adjustType)
 * @method string getAmount
 * @method self withAmount(string $amount)
 * @method string getCurrency
 * @method self withCurrency(string $currency)
 * @method string getBusinessType
 * @method self withBusinessType(string $businessType)
 * @method string getSource
 * @method self withSource(string $source)
 * @method string getOutBizId
 * @method self withOutBizId(string $outBizId)
 * @method string getExtendMap
 * @method self withExtendMap(string $extendMap)
 */
class ChangeConsumeAmount extends Roa
{
    use R;
}

/**
 * @method int getUid
 * @method self withUid(int $uid)
 * @method string getBid
 * @method self withBid(string $bid)
 * @method string getItemCodes
 * @method self withItemCodes(string $itemCodes)
 */
class QueryAvaliableQuota extends Roa
{
    use R;
}

/**
 * @method int getUid
 * @method self withUid(int $uid)
 * @method string getPrimaryAccount
 * @method self withPrimaryAccount(string $primaryAccount)
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method string getBusinessType
 * @method self withBusinessType(string $businessType)
 */
class QueryEnduserStatus extends Roa
{
    use R;
}

/**
 * @method int getUid
 * @method self withUid(int $uid)
 * @method string getPrimaryAccount
 * @method self withPrimaryAccount(string $primaryAccount)
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method string getBusinessType
 * @method self withBusinessType(string $businessType)
 */
class SetEnduserStatus extends Roa
{
    use R;
}

/**
 * @method int getUid
 * @method self withUid(int $uid)
 * @method string getBid
 * @method self withBid(string $bid)
 * @method string getItemCodes
 * @method self withItemCodes(string $itemCodes)
 */
class QueryAccountBookList extends Roa
{
    use R;
}

/**
 * @method int getUid
 * @method self withUid(int $uid)
 * @method string getBid
 * @method self withBid(string $bid)
 * @method string getAlarmType
 * @method self withAlarmType(string $alarmType)
 * @method string getAlarmThresholds
 * @method self withAlarmThresholds(string $alarmThresholds)
 */
class SetUserAlarmThreshold extends Roa
{
    use R;
}

/**
 * @method int getUid
 * @method self withUid(int $uid)
 * @method string getBid
 * @method self withBid(string $bid)
 * @method string getAlarmType
 * @method self withAlarmType(string $alarmType)
 * @method string getAlarmThresholds
 * @method self withAlarmThresholds(string $alarmThresholds)
 */
class QueryUserAlarmThreshold extends Roa
{
    use R;
}

/**
 * @method int getUid
 * @method self withUid(int $uid)
 * @method string getBid
 * @method self withBid(string $bid)
 * @method string getAmount
 * @method self withAmount(string $amount)
 * @method string getCurrency
 * @method self withCurrency(string $currency)
 * @method string getOutBizId
 * @method self withOutBizId(string $outBizId)
 */
class CreateUserQuota extends Roa
{
    use R;
}

/**
 * @method int getUid
 * @method self withUid(int $uid)
 * @method string getBid
 * @method self withBid(string $bid)
 * @method string getAmount
 * @method self withAmount(string $amount)
 * @method string getCurrency
 * @method self withCurrency(string $currency)
 * @method string getOutBizId
 * @method self withOutBizId(string $outBizId)
 */
class SetUserQuota extends Roa
{
    use R;
}

/**
 * @method string getProductCode
 * @method self withProductCode(string $productCode)
 * @method array getParameter
 * @method self withParameter(array $parameter)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getProductType
 * @method self withProductType(string $productType)
 * @method string getSubscriptionType
 * @method self withSubscriptionType(string $subscriptionType)
 * @method Integer getPeriod
 * @method self withPeriod(Integer $period)
 * @method string getRenewalStatus
 * @method self withRenewalStatus(string $renewalStatus)
 * @method Integer getRenewPeriod
 * @method self withRenewPeriod(Integer $renewPeriod)
 */
class CreateInstance extends Roa
{
    use R;
}

/**
 * @method string getProductCode
 * @method self withProductCode(string $productCode)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getProductType
 * @method self withProductType(string $productType)
 * @method string getSubscriptionType
 * @method self withSubscriptionType(string $subscriptionType)
 * @method string getModifyType
 * @method self withModifyType(string $modifyType)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method array getParameter
 * @method self withParameter(array $parameter)
 */
class ModifyInstance extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getProductCode
 * @method self withProductCode(string $productCode)
 * @method string getProductType
 * @method self withProductType(string $productType)
 * @method string getSubscriptionType
 * @method self withSubscriptionType(string $subscriptionType)
 */
class DescribePricingModule extends Roa
{
    use R;
}

/**
 * @method bool getQueryTotalCount
 * @method self withQueryTotalCount(bool $queryTotalCount)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class QueryProductList extends Roa
{
    use R;
}

/**
 * @method string getSubscriptionType
 * @method self withSubscriptionType(string $subscriptionType)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getProductCode
 * @method self withProductCode(string $productCode)
 * @method string getProductType
 * @method self withProductType(string $productType)
 * @method string getModuleCode
 * @method self withModuleCode(string $moduleCode)
 */
class QueryPriceList extends Roa
{
    use R;
}

/**
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getBillingCycle
 * @method self withBillingCycle(string $billingCycle)
 * @method string getProductCode
 * @method self withProductCode(string $productCode)
 * @method string getProductType
 * @method self withProductType(string $productType)
 * @method string getSubscriptionType
 * @method self withSubscriptionType(string $subscriptionType)
 */
class QueryInstanceGaapCost extends Roa
{
    use R;
}

/**
 * @method string getProductCode
 * @method self withProductCode(string $productCode)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method Integer getRenewPeriod
 * @method self withRenewPeriod(Integer $renewPeriod)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getProductType
 * @method self withProductType(string $productType)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 */
class RenewInstance extends Roa
{
    use R;
}

class UnsubscribeExportToOSS extends Roa
{
    use R;
}

/**
 * @method string getSubscribeBucket
 * @method self withSubscribeBucket(string $subscribeBucket)
 * @method int getBucketOwnerId
 * @method self withBucketOwnerId(int $bucketOwnerId)
 * @method array getSubscribeType
 * @method self withSubscribeType(array $subscribeType)
 */
class SubscribeExportToOSS extends Roa
{
    use R;
}

/**
 * @method string getOrderId
 * @method self withOrderId(string $orderId)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 */
class GetOrderDetail extends Roa
{
    use R;
}

/**
 * @method string getCreateTimeEnd
 * @method self withCreateTimeEnd(string $createTimeEnd)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getProductCode
 * @method self withProductCode(string $productCode)
 * @method string getProductType
 * @method self withProductType(string $productType)
 * @method string getSubscriptionType
 * @method self withSubscriptionType(string $subscriptionType)
 * @method string getOrderType
 * @method self withOrderType(string $orderType)
 * @method string getPaymentStatus
 * @method self withPaymentStatus(string $paymentStatus)
 * @method string getCreateTimeStart
 * @method self withCreateTimeStart(string $createTimeStart)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 */
class QueryOrders extends Roa
{
    use R;
}

/**
 * @method string getProductCode
 * @method self withProductCode(string $productCode)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getBillingCycle
 * @method self withBillingCycle(string $billingCycle)
 * @method string getProductType
 * @method self withProductType(string $productType)
 * @method string getSubscriptionType
 * @method self withSubscriptionType(string $subscriptionType)
 */
class QueryMonthlyInstanceConsumption extends Roa
{
    use R;
}

/**
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method string getBillingCycle
 * @method self withBillingCycle(string $billingCycle)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getType
 * @method self withType(string $type)
 * @method string getProductCode
 * @method self withProductCode(string $productCode)
 * @method string getProductType
 * @method self withProductType(string $productType)
 * @method string getSubscriptionType
 * @method self withSubscriptionType(string $subscriptionType)
 * @method bool getIsHideZeroCharge
 * @method self withIsHideZeroCharge(bool $isHideZeroCharge)
 */
class QuerySettlementBill extends Roa
{
    use R;
}

/**
 * @method string getSubscribeBucket
 * @method self withSubscribeBucket(string $subscribeBucket)
 * @method int getBucketOwnerId
 * @method self withBucketOwnerId(int $bucketOwnerId)
 * @method array getSubscribeType
 * @method self withSubscribeType(array $subscribeType)
 */
class SubscribeDetail extends Roa
{
    use R;
}

/**
 * @method string getBillingCycle
 * @method self withBillingCycle(string $billingCycle)
 */
class QueryMonthlyBill extends Roa
{
    use R;
}

/**
 * @method Integer getRenewalPeriod
 * @method self withRenewalPeriod(Integer $renewalPeriod)
 * @method string getInstanceIDs
 * @method self withInstanceIDs(string $instanceIDs)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getProductCode
 * @method self withProductCode(string $productCode)
 * @method string getProductType
 * @method self withProductType(string $productType)
 * @method string getSubscriptionType
 * @method self withSubscriptionType(string $subscriptionType)
 * @method string getRenewalPeriodUnit
 * @method self withRenewalPeriodUnit(string $renewalPeriodUnit)
 * @method string getRenewalStatus
 * @method self withRenewalStatus(string $renewalStatus)
 */
class SetRenewal extends Roa
{
    use R;
}

/**
 * @method string getRegion
 * @method self withRegion(string $region)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getProductCode
 * @method self withProductCode(string $productCode)
 * @method string getProductType
 * @method self withProductType(string $productType)
 * @method string getSubscriptionType
 * @method self withSubscriptionType(string $subscriptionType)
 * @method string getInstanceIDs
 * @method self withInstanceIDs(string $instanceIDs)
 * @method string getEndTimeStart
 * @method self withEndTimeStart(string $endTimeStart)
 * @method string getEndTimeEnd
 * @method self withEndTimeEnd(string $endTimeEnd)
 * @method string getCreateTimeStart
 * @method self withCreateTimeStart(string $createTimeStart)
 * @method string getCreateTimeEnd
 * @method self withCreateTimeEnd(string $createTimeEnd)
 * @method string getRenewStatus
 * @method self withRenewStatus(string $renewStatus)
 */
class QueryAvailableInstances extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getProductCode
 * @method self withProductCode(string $productCode)
 * @method string getPackageType
 * @method self withPackageType(string $packageType)
 * @method string getEffectiveDate
 * @method self withEffectiveDate(string $effectiveDate)
 * @method string getSpecification
 * @method self withSpecification(string $specification)
 * @method Integer getDuration
 * @method self withDuration(Integer $duration)
 * @method string getPricingCycle
 * @method self withPricingCycle(string $pricingCycle)
 */
class CreateResourcePackage extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getProductCode
 * @method self withProductCode(string $productCode)
 * @method string getExpiryTimeStart
 * @method self withExpiryTimeStart(string $expiryTimeStart)
 * @method string getExpiryTimeEnd
 * @method self withExpiryTimeEnd(string $expiryTimeEnd)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class QueryResourcePackageInstances extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getProductCode
 * @method self withProductCode(string $productCode)
 * @method string getPackageType
 * @method self withPackageType(string $packageType)
 * @method string getEffectiveDate
 * @method self withEffectiveDate(string $effectiveDate)
 * @method string getSpecification
 * @method self withSpecification(string $specification)
 * @method Integer getDuration
 * @method self withDuration(Integer $duration)
 * @method string getPricingCycle
 * @method self withPricingCycle(string $pricingCycle)
 */
class GetResourcePackagePrice extends Roa
{
    use R;
}

/**
 * @method string getServicePeriodUnit
 * @method self withServicePeriodUnit(string $servicePeriodUnit)
 * @method string getSubscriptionType
 * @method self withSubscriptionType(string $subscriptionType)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getProductCode
 * @method self withProductCode(string $productCode)
 * @method string getOrderType
 * @method self withOrderType(string $orderType)
 * @method Integer getServicePeriodQuantity
 * @method self withServicePeriodQuantity(Integer $servicePeriodQuantity)
 * @method string getProductType
 * @method self withProductType(string $productType)
 * @method string getRegion
 * @method self withRegion(string $region)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method array getModuleList
 * @method self withModuleList(array $moduleList)
 * @method Integer getQuantity
 * @method self withQuantity(Integer $quantity)
 */
class GetSubscriptionPrice extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getProductCode
 * @method self withProductCode(string $productCode)
 * @method string getProductType
 * @method self withProductType(string $productType)
 * @method string getSubscriptionType
 * @method self withSubscriptionType(string $subscriptionType)
 * @method string getRegion
 * @method self withRegion(string $region)
 * @method array getModuleList
 * @method self withModuleList(array $moduleList)
 */
class GetPayAsYouGoPrice extends Roa
{
    use R;
}

/**
 * @method string getExpiryTimeEnd
 * @method self withExpiryTimeEnd(string $expiryTimeEnd)
 * @method string getExpiryTimeStart
 * @method self withExpiryTimeStart(string $expiryTimeStart)
 * @method bool getEffectiveOrNot
 * @method self withEffectiveOrNot(bool $effectiveOrNot)
 */
class QueryPrepaidCards extends Roa
{
    use R;
}

/**
 * @method string getExpiryTimeEnd
 * @method self withExpiryTimeEnd(string $expiryTimeEnd)
 * @method string getExpiryTimeStart
 * @method self withExpiryTimeStart(string $expiryTimeStart)
 * @method bool getEffectiveOrNot
 * @method self withEffectiveOrNot(bool $effectiveOrNot)
 */
class QueryCashCoupons extends Roa
{
    use R;
}

class QueryAccountBalance extends Roa
{
    use R;
}

/**
 * @method string getProductCode
 * @method self withProductCode(string $productCode)
 */
class DescribeResourcePackageProduct extends Roa
{
    use R;
}
