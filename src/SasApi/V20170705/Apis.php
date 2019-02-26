<?php

namespace AlibabaCloud\SasApi\V20170705;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method DescribeTotalAndRateLine describeTotalAndRateLine($options = [])
 * @method DescribeThreatTypeLines describeThreatTypeLines($options = [])
 * @method DescribePerDateData describePerDateData($options = [])
 * @method PhysicalDeleteResourceAction physicalDeleteResourceAction($options = [])
 * @method LogicalDeleteResourceAction logicalDeleteResourceAction($options = [])
 * @method CheckResourceAction checkResourceAction($options = [])
 * @method DescribeAccountProfileByKey describeAccountProfileByKey($options = [])
 * @method DescribeThreatDistribute describeThreatDistribute($options = [])
 * @method DescribeHitRatePie describeHitRatePie($options = [])
 * @method DescribeHitRateColumn describeHitRateColumn($options = [])
 * @method describeAccountProfileByKeyWord describeAccountProfileByKeyWord($options = [])
 * @method GetThreatAnalyseList getThreatAnalyseList($options = [])
 * @method GetSecurityEventList getSecurityEventList($options = [])
 * @method GetCrackList getCrackList($options = [])
 * @method GetApplicationAttackList getApplicationAttackList($options = [])
 * @method GetAccountProfile getAccountProfile($options = [])
 * @method RefundInstance refundInstance($options = [])
 * @method RenewInstance renewInstance($options = [])
 * @method UpgradeInstance upgradeInstance($options = [])
 * @method GetInstanceCount getInstanceCount($options = [])
 * @method CreateInstance createInstance($options = [])
 * @method GetPhoneProfile getPhoneProfile($options = [])
 * @method GetIpProfile getIpProfile($options = [])
 */
class V20170705
{
    use ApiResolverTrait;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method Integer getApiType
 * @method self withApiType(Integer $apiType)
 */
class DescribeTotalAndRateLine extends Roa
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method Integer getApiType
 * @method self withApiType(Integer $apiType)
 */
class DescribeThreatTypeLines extends Roa
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method Integer getApiType
 * @method self withApiType(Integer $apiType)
 */
class DescribePerDateData extends Roa
{
    use R;
}

class PhysicalDeleteResourceAction extends Roa
{
    use R;
}

class LogicalDeleteResourceAction extends Roa
{
    use R;
}

class CheckResourceAction extends Roa
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getKeyword
 * @method self withKeyword(string $keyword)
 */
class DescribeAccountProfileByKey extends Roa
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getEndDate
 * @method self withEndDate(string $endDate)
 * @method Integer getHitDay
 * @method self withHitDay(Integer $hitDay)
 * @method string getStartDate
 * @method self withStartDate(string $startDate)
 * @method Integer getApiType
 * @method self withApiType(Integer $apiType)
 */
class DescribeThreatDistribute extends Roa
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getEndDate
 * @method self withEndDate(string $endDate)
 * @method string getStartDate
 * @method self withStartDate(string $startDate)
 * @method Integer getApiType
 * @method self withApiType(Integer $apiType)
 * @method Integer getHitDay
 * @method self withHitDay(Integer $hitDay)
 */
class DescribeHitRatePie extends Roa
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getEndDate
 * @method self withEndDate(string $endDate)
 * @method Integer getHitDay
 * @method self withHitDay(Integer $hitDay)
 * @method string getStartDate
 * @method self withStartDate(string $startDate)
 * @method Integer getApiType
 * @method self withApiType(Integer $apiType)
 */
class DescribeHitRateColumn extends Roa
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getKeyword
 * @method self withKeyword(string $keyword)
 */
class describeAccountProfileByKeyWord extends Roa
{
    use R;
}

/**
 * @method Integer getStart
 * @method self withStart(Integer $start)
 * @method Integer getLimit
 * @method self withLimit(Integer $limit)
 */
class GetThreatAnalyseList extends Roa
{
    use R;
}

/**
 * @method Integer getStart
 * @method self withStart(Integer $start)
 * @method Integer getLimit
 * @method self withLimit(Integer $limit)
 */
class GetSecurityEventList extends Roa
{
    use R;
}

/**
 * @method Integer getStart
 * @method self withStart(Integer $start)
 * @method Integer getLimit
 * @method self withLimit(Integer $limit)
 */
class GetCrackList extends Roa
{
    use R;
}

/**
 * @method Integer getStart
 * @method self withStart(Integer $start)
 * @method Integer getLimit
 * @method self withLimit(Integer $limit)
 */
class GetApplicationAttackList extends Roa
{
    use R;
}

/**
 * @method string getIp
 * @method self withIp(string $ip)
 * @method string getPhone
 * @method self withPhone(string $phone)
 * @method int getAccessTimestamp
 * @method self withAccessTimestamp(int $accessTimestamp)
 * @method Integer getSensType
 * @method self withSensType(Integer $sensType)
 * @method Integer getBusinessType
 * @method self withBusinessType(Integer $businessType)
 * @method string getRequestUrl
 * @method self withRequestUrl(string $requestUrl)
 * @method string getUserAgent
 * @method self withUserAgent(string $userAgent)
 * @method string getDeviceIdMd5
 * @method self withDeviceIdMd5(string $deviceIdMd5)
 * @method string getOs
 * @method self withOs(string $os)
 * @method Integer getDeviceType
 * @method self withDeviceType(Integer $deviceType)
 * @method Integer getConnectionType
 * @method self withConnectionType(Integer $connectionType)
 * @method Integer getCarrier
 * @method self withCarrier(Integer $carrier)
 */
class GetAccountProfile extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class RefundInstance extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method Integer getDuration
 * @method self withDuration(Integer $duration)
 * @method string getPricingCycle
 * @method self withPricingCycle(string $pricingCycle)
 * @method Integer getBuyNumber
 * @method self withBuyNumber(Integer $buyNumber)
 */
class RenewInstance extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getVersionCode
 * @method self withVersionCode(string $versionCode)
 * @method Integer getBuyNumber
 * @method self withBuyNumber(Integer $buyNumber)
 */
class UpgradeInstance extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 */
class GetInstanceCount extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method Integer getDuration
 * @method self withDuration(Integer $duration)
 * @method string getPricingCycle
 * @method self withPricingCycle(string $pricingCycle)
 * @method string getVersionCode
 * @method self withVersionCode(string $versionCode)
 * @method Integer getBuyNumber
 * @method self withBuyNumber(Integer $buyNumber)
 * @method bool getIsAutoRenew
 * @method self withIsAutoRenew(bool $isAutoRenew)
 * @method Integer getAutoRenewDuration
 * @method self withAutoRenewDuration(Integer $autoRenewDuration)
 * @method bool getSasLog
 * @method self withSasLog(bool $sasLog)
 * @method bool getSasScreen
 * @method self withSasScreen(bool $sasScreen)
 */
class CreateInstance extends Roa
{
    use R;
}

/**
 * @method string getPhone
 * @method self withPhone(string $phone)
 * @method Integer getSensType
 * @method self withSensType(Integer $sensType)
 * @method Integer getBusinessType
 * @method self withBusinessType(Integer $businessType)
 * @method string getDataVersion
 * @method self withDataVersion(string $dataVersion)
 */
class GetPhoneProfile extends Roa
{
    use R;
}

/**
 * @method string getIp
 * @method self withIp(string $ip)
 * @method Integer getSensType
 * @method self withSensType(Integer $sensType)
 * @method Integer getBusinessType
 * @method self withBusinessType(Integer $businessType)
 * @method string getRequestUrl
 * @method self withRequestUrl(string $requestUrl)
 * @method string getUserAgent
 * @method self withUserAgent(string $userAgent)
 * @method string getDeviceIdMd5
 * @method self withDeviceIdMd5(string $deviceIdMd5)
 * @method string getOs
 * @method self withOs(string $os)
 * @method Integer getDeviceType
 * @method self withDeviceType(Integer $deviceType)
 * @method Integer getConnectionType
 * @method self withConnectionType(Integer $connectionType)
 * @method Integer getCarrier
 * @method self withCarrier(Integer $carrier)
 */
class GetIpProfile extends Roa
{
    use R;
}
