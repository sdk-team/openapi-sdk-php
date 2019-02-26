<?php

namespace AlibabaCloud\Cloudesl\V20180801;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method string getStoreId
 * @method self withStoreId
 * @method string getSkuId
 * @method self withSkuId
 */
final class DeleteItemBySkuId extends RpcRequest
{
}

/**
 * @method string getUserType
 * @method self withUserType
 * @method string getCompanyId
 * @method self withCompanyId
 * @method string getStoreId
 * @method self withStoreId
 */
final class DescribeUserRamPolicy extends RpcRequest
{
}

/**
 * @method RepeatList getItemInfo
 * @method self withItemInfo
 * @method string getStoreId
 * @method self withStoreId
 */
final class BatchInsertItems extends RpcRequest
{
}

/**
 * @method string getStoreId
 * @method self withStoreId
 * @method string getItemBarCode
 * @method self withItemBarCode
 * @method Long getItemId
 * @method self withItemId
 * @method string getItemTitle
 * @method self withItemTitle
 * @method string getSkuId
 * @method self withSkuId
 * @method Boolean getBePromotion
 * @method self withBePromotion
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getShelfCode
 * @method self withShelfCode
 */
final class DescribeItems extends RpcRequest
{
}

/**
 * @method string getStoreId
 * @method self withStoreId
 * @method string getEslBarCode
 * @method self withEslBarCode
 * @method string getItemBarCode
 * @method self withItemBarCode
 */
final class BindEslDevice extends RpcRequest
{
}

/**
 * @method string getStoreId
 * @method self withStoreId
 * @method string getEslBarCode
 * @method self withEslBarCode
 * @method string getItemBarCode
 * @method self withItemBarCode
 */
final class UnbindEslDevice extends RpcRequest
{
}

/**
 * @method string getStoreId
 * @method self withStoreId
 * @method string getEslBarCode
 * @method self withEslBarCode
 */
final class DeleteEslDevice extends RpcRequest
{
}

/**
 * @method string getStoreId
 * @method self withStoreId
 * @method string getEslBarCode
 * @method self withEslBarCode
 * @method string getShelfCode
 * @method self withShelfCode
 */
final class BindEslDeviceShelf extends RpcRequest
{
}

/**
 * @method string getStoreId
 * @method self withStoreId
 * @method string getEslBarCode
 * @method self withEslBarCode
 * @method string getMac
 * @method self withMac
 * @method string getVendor
 * @method self withVendor
 * @method string getType
 * @method self withType
 * @method string getShelfCode
 * @method self withShelfCode
 * @method string getEslStatus
 * @method self withEslStatus
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getFromBatteryLevel
 * @method self withFromBatteryLevel
 * @method Integer getToBatteryLevel
 * @method self withToBatteryLevel
 * @method Boolean getBeBind
 * @method self withBeBind
 * @method string getItemBarCode
 * @method self withItemBarCode
 */
final class DescribeEslDevices extends RpcRequest
{
}

/**
 * @method string getStoreId
 * @method self withStoreId
 * @method string getEslBarCode
 * @method self withEslBarCode
 */
final class UnbindEslDeviceShelf extends RpcRequest
{
}

/**
 * @method string getStoreId
 * @method self withStoreId
 * @method string getEslBarCode
 * @method self withEslBarCode
 * @method string getItemBarCode
 * @method self withItemBarCode
 * @method Long getItemId
 * @method self withItemId
 * @method string getItemTitle
 * @method self withItemTitle
 * @method string getOperateType
 * @method self withOperateType
 * @method string getOperateStatus
 * @method self withOperateStatus
 * @method Long getOperateUserId
 * @method self withOperateUserId
 * @method string getFromDate
 * @method self withFromDate
 * @method string getToDate
 * @method self withToDate
 * @method Boolean getReverse
 * @method self withReverse
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class DescribeUserOperationLog extends RpcRequest
{
}

/**
 * @method string getStoreId
 * @method self withStoreId
 * @method string getItemBarCode
 * @method self withItemBarCode
 */
final class DeleteItem extends RpcRequest
{
}

/**
 * @method string getStoreId
 * @method self withStoreId
 * @method string getStoreName
 * @method self withStoreName
 * @method string getBrand
 * @method self withBrand
 * @method string getGroups
 * @method self withGroups
 * @method string getFromDate
 * @method self withFromDate
 * @method string getToDate
 * @method self withToDate
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class DescribeStores extends RpcRequest
{
}

/**
 * @method string getStoreId
 * @method self withStoreId
 * @method string getStoreName
 * @method self withStoreName
 * @method string getBrand
 * @method self withBrand
 * @method string getOutId
 * @method self withOutId
 * @method string getGroups
 * @method self withGroups
 * @method string getComments
 * @method self withComments
 * @method string getPhone
 * @method self withPhone
 */
final class UpdateStore extends RpcRequest
{
}

/**
 * @method string getStoreId
 * @method self withStoreId
 */
final class DeleteStore extends RpcRequest
{
}

/**
 * @method string getCompanyId
 * @method self withCompanyId
 * @method string getStoreName
 * @method self withStoreName
 * @method string getBrand
 * @method self withBrand
 * @method string getOutId
 * @method self withOutId
 * @method string getGroups
 * @method self withGroups
 * @method string getComments
 * @method self withComments
 * @method string getParentId
 * @method self withParentId
 * @method string getPhone
 * @method self withPhone
 */
final class CreateStore extends RpcRequest
{
}

/**
 * @method string getStoreId
 * @method self withStoreId
 * @method string getAlarmId
 * @method self withAlarmId
 * @method string getAlarmType
 * @method self withAlarmType
 * @method string getErrorType
 * @method self withErrorType
 * @method string getAlarmStatus
 * @method self withAlarmStatus
 * @method string getFromAlarmTime
 * @method self withFromAlarmTime
 * @method string getToAlarmTime
 * @method self withToAlarmTime
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class DescribeAlarms extends RpcRequest
{
}

final class DescribeCompany extends RpcRequest
{
}
