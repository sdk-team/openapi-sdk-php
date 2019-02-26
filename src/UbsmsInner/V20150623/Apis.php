<?php

namespace AlibabaCloud\UbsmsInner\V20150623;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method DescribeBidRelationByBid describeBidRelationByBid($options = [])
 * @method doPhysicalDeleteResource doPhysicalDeleteResource($options = [])
 * @method DescribeBidUserBusinessStatus describeBidUserBusinessStatus($options = [])
 * @method DescribeBusinessStatusOfUser describeBusinessStatusOfUser($options = [])
 * @method DescribeUserNetworkTypes describeUserNetworkTypes($options = [])
 * @method DescribeUserNetworkType describeUserNetworkType($options = [])
 * @method DescribeBusinessStatus describeBusinessStatus($options = [])
 * @method SetUserSecurityStatus setUserSecurityStatus($options = [])
 * @method SetUserBusinessStatuses setUserBusinessStatuses($options = [])
 * @method NotifyUserBusinessCommand notifyUserBusinessCommand($options = [])
 * @method DescribeUserBusinessStatus describeUserBusinessStatus($options = [])
 */
class V20150623
{
    use ApiResolverTrait;
}

/**
 * @method string getRequestid
 * @method self withRequestid(string $requestid)
 * @method string getBid
 * @method self withBid(string $bid)
 */
class DescribeBidRelationByBid extends Roa
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
 * @method string getcallerBid
 * @method self withcallerBid(string $callerBid)
 * @method string getBid
 * @method self withBid(string $bid)
 * @method string getServiceCode
 * @method self withServiceCode(string $serviceCode)
 * @method array getStatusKey
 * @method self withStatusKey(array $statusKey)
 * @method string getPassword
 * @method self withPassword(string $password)
 */
class DescribeBidUserBusinessStatus extends Roa
{
    use R;
}

/**
 * @method string getcallerBid
 * @method self withcallerBid(string $callerBid)
 * @method string getUid
 * @method self withUid(string $uid)
 * @method string getServiceCode
 * @method self withServiceCode(string $serviceCode)
 * @method array getStatusKey
 * @method self withStatusKey(array $statusKey)
 * @method string getPassword
 * @method self withPassword(string $password)
 */
class DescribeBusinessStatusOfUser extends Roa
{
    use R;
}

/**
 * @method int getUid
 * @method self withUid(int $uid)
 * @method string getBid
 * @method self withBid(string $bid)
 * @method string getServiceCode
 * @method self withServiceCode(string $serviceCode)
 * @method array getRegionIds
 * @method self withRegionIds(array $regionIds)
 */
class DescribeUserNetworkTypes extends Roa
{
    use R;
}

/**
 * @method int getUid
 * @method self withUid(int $uid)
 * @method string getBid
 * @method self withBid(string $bid)
 * @method string getServiceCode
 * @method self withServiceCode(string $serviceCode)
 */
class DescribeUserNetworkType extends Roa
{
    use R;
}

/**
 * @method string getcallerBid
 * @method self withcallerBid(string $callerBid)
 * @method string getPassword
 * @method self withPassword(string $password)
 */
class DescribeBusinessStatus extends Roa
{
    use R;
}

/**
 * @method string getUid
 * @method self withUid(string $uid)
 * @method string getStatusKey1
 * @method self withStatusKey1(string $statusKey1)
 * @method string getStatusValue1
 * @method self withStatusValue1(string $statusValue1)
 * @method string getStatusKey2
 * @method self withStatusKey2(string $statusKey2)
 * @method string getStatusValue2
 * @method self withStatusValue2(string $statusValue2)
 * @method string getStatusKey3
 * @method self withStatusKey3(string $statusKey3)
 * @method string getStatusValue3
 * @method self withStatusValue3(string $statusValue3)
 * @method string getStatusKey4
 * @method self withStatusKey4(string $statusKey4)
 * @method string getStatusValue4
 * @method self withStatusValue4(string $statusValue4)
 * @method string getStatusKey5
 * @method self withStatusKey5(string $statusKey5)
 * @method string getStatusValue5
 * @method self withStatusValue5(string $statusValue5)
 * @method string getStatusKey6
 * @method self withStatusKey6(string $statusKey6)
 * @method string getStatusValue6
 * @method self withStatusValue6(string $statusValue6)
 * @method string getStatusKey7
 * @method self withStatusKey7(string $statusKey7)
 * @method string getStatusValue7
 * @method self withStatusValue7(string $statusValue7)
 * @method string getStatusKey8
 * @method self withStatusKey8(string $statusKey8)
 * @method string getStatusValue8
 * @method self withStatusValue8(string $statusValue8)
 * @method string getStatusKey9
 * @method self withStatusKey9(string $statusKey9)
 * @method string getStatusValue9
 * @method self withStatusValue9(string $statusValue9)
 * @method string getStatusKey10
 * @method self withStatusKey10(string $statusKey10)
 * @method string getStatusValue10
 * @method self withStatusValue10(string $statusValue10)
 * @method string getPassword
 * @method self withPassword(string $password)
 */
class SetUserSecurityStatus extends Roa
{
    use R;
}

/**
 * @method string getUid
 * @method self withUid(string $uid)
 * @method string getServiceCode
 * @method self withServiceCode(string $serviceCode)
 * @method string getStatusKey1
 * @method self withStatusKey1(string $statusKey1)
 * @method string getStatusValue1
 * @method self withStatusValue1(string $statusValue1)
 * @method string getStatusKey2
 * @method self withStatusKey2(string $statusKey2)
 * @method string getStatusValue2
 * @method self withStatusValue2(string $statusValue2)
 * @method string getStatusKey3
 * @method self withStatusKey3(string $statusKey3)
 * @method string getStatusValue3
 * @method self withStatusValue3(string $statusValue3)
 * @method string getStatusKey4
 * @method self withStatusKey4(string $statusKey4)
 * @method string getStatusValue4
 * @method self withStatusValue4(string $statusValue4)
 * @method string getStatusKey5
 * @method self withStatusKey5(string $statusKey5)
 * @method string getStatusValue5
 * @method self withStatusValue5(string $statusValue5)
 * @method string getStatusKey6
 * @method self withStatusKey6(string $statusKey6)
 * @method string getStatusValue6
 * @method self withStatusValue6(string $statusValue6)
 * @method string getStatusKey7
 * @method self withStatusKey7(string $statusKey7)
 * @method string getStatusValue7
 * @method self withStatusValue7(string $statusValue7)
 * @method string getStatusKey8
 * @method self withStatusKey8(string $statusKey8)
 * @method string getStatusValue8
 * @method self withStatusValue8(string $statusValue8)
 * @method string getStatusKey9
 * @method self withStatusKey9(string $statusKey9)
 * @method string getStatusValue9
 * @method self withStatusValue9(string $statusValue9)
 * @method string getStatusKey10
 * @method self withStatusKey10(string $statusKey10)
 * @method string getStatusValue10
 * @method self withStatusValue10(string $statusValue10)
 * @method string getPassword
 * @method self withPassword(string $password)
 */
class SetUserBusinessStatuses extends Roa
{
    use R;
}

/**
 * @method string getUid
 * @method self withUid(string $uid)
 * @method string getServiceCode
 * @method self withServiceCode(string $serviceCode)
 * @method string getCmd
 * @method self withCmd(string $cmd)
 * @method string getRegion
 * @method self withRegion(string $region)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getPassword
 * @method self withPassword(string $password)
 */
class NotifyUserBusinessCommand extends Roa
{
    use R;
}

/**
 * @method string getcallerBid
 * @method self withcallerBid(string $callerBid)
 * @method string getUid
 * @method self withUid(string $uid)
 * @method string getServiceCode
 * @method self withServiceCode(string $serviceCode)
 * @method string getPassword
 * @method self withPassword(string $password)
 */
class DescribeUserBusinessStatus extends Roa
{
    use R;
}
