<?php

namespace AlibabaCloud\Cloudesl\V20180801;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RpcRequest as Rpc;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method DeleteItemBySkuId deleteItemBySkuId($options = [])
 * @method DescribeUserRamPolicy describeUserRamPolicy($options = [])
 * @method BatchInsertItems batchInsertItems($options = [])
 * @method DescribeItems describeItems($options = [])
 * @method BindEslDevice bindEslDevice($options = [])
 * @method UnbindEslDevice unbindEslDevice($options = [])
 * @method DeleteEslDevice deleteEslDevice($options = [])
 * @method BindEslDeviceShelf bindEslDeviceShelf($options = [])
 * @method DescribeEslDevices describeEslDevices($options = [])
 * @method UnbindEslDeviceShelf unbindEslDeviceShelf($options = [])
 * @method DescribeUserOperationLog describeUserOperationLog($options = [])
 * @method DeleteItem deleteItem($options = [])
 * @method DescribeStores describeStores($options = [])
 * @method UpdateStore updateStore($options = [])
 * @method DeleteStore deleteStore($options = [])
 * @method CreateStore createStore($options = [])
 * @method DescribeAlarms describeAlarms($options = [])
 * @method DescribeCompany describeCompany($options = [])
 */
class V20180801
{
    use ApiResolverTrait;
}

/**
 * @method string getStoreId
 * @method self withStoreId(string $storeId)
 * @method string getSkuId
 * @method self withSkuId(string $skuId)
 */
class DeleteItemBySkuId extends Rpc
{
    use R;
}

/**
 * @method string getUserType
 * @method self withUserType(string $userType)
 * @method string getCompanyId
 * @method self withCompanyId(string $companyId)
 * @method string getStoreId
 * @method self withStoreId(string $storeId)
 */
class DescribeUserRamPolicy extends Rpc
{
    use R;
}

/**
 * @method array getItemInfo
 * @method self withItemInfo(array $itemInfo)
 * @method string getStoreId
 * @method self withStoreId(string $storeId)
 */
class BatchInsertItems extends Rpc
{
    use R;
}

/**
 * @method string getStoreId
 * @method self withStoreId(string $storeId)
 * @method string getItemBarCode
 * @method self withItemBarCode(string $itemBarCode)
 * @method int getItemId
 * @method self withItemId(int $itemId)
 * @method string getItemTitle
 * @method self withItemTitle(string $itemTitle)
 * @method string getSkuId
 * @method self withSkuId(string $skuId)
 * @method bool getBePromotion
 * @method self withBePromotion(bool $bePromotion)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getShelfCode
 * @method self withShelfCode(string $shelfCode)
 */
class DescribeItems extends Rpc
{
    use R;
}

/**
 * @method string getStoreId
 * @method self withStoreId(string $storeId)
 * @method string getEslBarCode
 * @method self withEslBarCode(string $eslBarCode)
 * @method string getItemBarCode
 * @method self withItemBarCode(string $itemBarCode)
 */
class BindEslDevice extends Rpc
{
    use R;
}

/**
 * @method string getStoreId
 * @method self withStoreId(string $storeId)
 * @method string getEslBarCode
 * @method self withEslBarCode(string $eslBarCode)
 * @method string getItemBarCode
 * @method self withItemBarCode(string $itemBarCode)
 */
class UnbindEslDevice extends Rpc
{
    use R;
}

/**
 * @method string getStoreId
 * @method self withStoreId(string $storeId)
 * @method string getEslBarCode
 * @method self withEslBarCode(string $eslBarCode)
 */
class DeleteEslDevice extends Rpc
{
    use R;
}

/**
 * @method string getStoreId
 * @method self withStoreId(string $storeId)
 * @method string getEslBarCode
 * @method self withEslBarCode(string $eslBarCode)
 * @method string getShelfCode
 * @method self withShelfCode(string $shelfCode)
 */
class BindEslDeviceShelf extends Rpc
{
    use R;
}

/**
 * @method string getStoreId
 * @method self withStoreId(string $storeId)
 * @method string getEslBarCode
 * @method self withEslBarCode(string $eslBarCode)
 * @method string getMac
 * @method self withMac(string $mac)
 * @method string getVendor
 * @method self withVendor(string $vendor)
 * @method string getType
 * @method self withType(string $type)
 * @method string getShelfCode
 * @method self withShelfCode(string $shelfCode)
 * @method string getEslStatus
 * @method self withEslStatus(string $eslStatus)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getFromBatteryLevel
 * @method self withFromBatteryLevel(Integer $fromBatteryLevel)
 * @method Integer getToBatteryLevel
 * @method self withToBatteryLevel(Integer $toBatteryLevel)
 * @method bool getBeBind
 * @method self withBeBind(bool $beBind)
 * @method string getItemBarCode
 * @method self withItemBarCode(string $itemBarCode)
 */
class DescribeEslDevices extends Rpc
{
    use R;
}

/**
 * @method string getStoreId
 * @method self withStoreId(string $storeId)
 * @method string getEslBarCode
 * @method self withEslBarCode(string $eslBarCode)
 */
class UnbindEslDeviceShelf extends Rpc
{
    use R;
}

/**
 * @method string getStoreId
 * @method self withStoreId(string $storeId)
 * @method string getEslBarCode
 * @method self withEslBarCode(string $eslBarCode)
 * @method string getItemBarCode
 * @method self withItemBarCode(string $itemBarCode)
 * @method int getItemId
 * @method self withItemId(int $itemId)
 * @method string getItemTitle
 * @method self withItemTitle(string $itemTitle)
 * @method string getOperateType
 * @method self withOperateType(string $operateType)
 * @method string getOperateStatus
 * @method self withOperateStatus(string $operateStatus)
 * @method int getOperateUserId
 * @method self withOperateUserId(int $operateUserId)
 * @method string getFromDate
 * @method self withFromDate(string $fromDate)
 * @method string getToDate
 * @method self withToDate(string $toDate)
 * @method bool getReverse
 * @method self withReverse(bool $reverse)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeUserOperationLog extends Rpc
{
    use R;
}

/**
 * @method string getStoreId
 * @method self withStoreId(string $storeId)
 * @method string getItemBarCode
 * @method self withItemBarCode(string $itemBarCode)
 */
class DeleteItem extends Rpc
{
    use R;
}

/**
 * @method string getStoreId
 * @method self withStoreId(string $storeId)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 * @method string getBrand
 * @method self withBrand(string $brand)
 * @method string getGroups
 * @method self withGroups(string $groups)
 * @method string getFromDate
 * @method self withFromDate(string $fromDate)
 * @method string getToDate
 * @method self withToDate(string $toDate)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeStores extends Rpc
{
    use R;
}

/**
 * @method string getStoreId
 * @method self withStoreId(string $storeId)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 * @method string getBrand
 * @method self withBrand(string $brand)
 * @method string getOutId
 * @method self withOutId(string $outId)
 * @method string getGroups
 * @method self withGroups(string $groups)
 * @method string getComments
 * @method self withComments(string $comments)
 * @method string getPhone
 * @method self withPhone(string $phone)
 */
class UpdateStore extends Rpc
{
    use R;
}

/**
 * @method string getStoreId
 * @method self withStoreId(string $storeId)
 */
class DeleteStore extends Rpc
{
    use R;
}

/**
 * @method string getCompanyId
 * @method self withCompanyId(string $companyId)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 * @method string getBrand
 * @method self withBrand(string $brand)
 * @method string getOutId
 * @method self withOutId(string $outId)
 * @method string getGroups
 * @method self withGroups(string $groups)
 * @method string getComments
 * @method self withComments(string $comments)
 * @method string getParentId
 * @method self withParentId(string $parentId)
 * @method string getPhone
 * @method self withPhone(string $phone)
 */
class CreateStore extends Rpc
{
    use R;
}

/**
 * @method string getStoreId
 * @method self withStoreId(string $storeId)
 * @method string getAlarmId
 * @method self withAlarmId(string $alarmId)
 * @method string getAlarmType
 * @method self withAlarmType(string $alarmType)
 * @method string getErrorType
 * @method self withErrorType(string $errorType)
 * @method string getAlarmStatus
 * @method self withAlarmStatus(string $alarmStatus)
 * @method string getFromAlarmTime
 * @method self withFromAlarmTime(string $fromAlarmTime)
 * @method string getToAlarmTime
 * @method self withToAlarmTime(string $toAlarmTime)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeAlarms extends Rpc
{
    use R;
}

class DescribeCompany extends Rpc
{
    use R;
}
