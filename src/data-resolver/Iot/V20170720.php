<?php

namespace AlibabaCloud\Iot\V20170720;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method string getTopic
 * @method self withTopic
 * @method string getExts
 * @method self withExts
 * @method string getSubscriberId
 * @method self withSubscriberId
 */
final class CleanTopic extends RpcRequest
{
}

/**
 * @method string getJsonCommands
 * @method self withJsonCommands
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 */
final class SendMacCommand extends RpcRequest
{
}

/**
 * @method string getjsonRouteMap
 * @method self withjsonRouteMap
 * @method string getjsonTxpkDTO
 * @method self withjsonTxpkDTO
 */
final class SyncGateway extends RpcRequest
{
}

/**
 * @method string getJsonRouteMap
 * @method self withJsonRouteMap
 * @method string getJsonTxpkDTO
 * @method self withJsonTxpkDTO
 */
final class SynchronizeGateway extends RpcRequest
{
}

/**
 * @method string getDevAddr
 * @method self withDevAddr
 * @method string getDevEui
 * @method self withDevEui
 * @method string getGatewayId
 * @method self withGatewayId
 */
final class DeleteRouteMap extends RpcRequest
{
}

/**
 * @method string getPattern
 * @method self withPattern
 * @method string getDownlinkFreq
 * @method self withDownlinkFreq
 * @method Integer getDeviceNum
 * @method self withDeviceNum
 * @method string getProductKey
 * @method self withProductKey
 * @method string getOui
 * @method self withOui
 * @method string getOrgId
 * @method self withOrgId
 * @method string getType
 * @method self withType
 * @method Integer getNodeFreqType
 * @method self withNodeFreqType
 */
final class CreateOtaaDevice extends RpcRequest
{
}

/**
 * @method string getProductKey
 * @method self withProductKey
 */
final class CreateLoraApp extends RpcRequest
{
}

/**
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 */
final class QueryOtaaDevice extends RpcRequest
{
}

/**
 * @method string getProductKey
 * @method self withProductKey
 */
final class QueryAmsProductMapping extends RpcRequest
{
}

/**
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 */
final class QueryLoraNodeInfoList extends RpcRequest
{
}

/**
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 */
final class DeleteDeviceList extends RpcRequest
{
}

/**
 * @method string getDevAddr
 * @method self withDevAddr
 * @method string getDevEui
 * @method self withDevEui
 * @method string getGatewayId
 * @method self withGatewayId
 * @method string getGwDeviceName
 * @method self withGwDeviceName
 * @method string getGwProductKey
 * @method self withGwProductKey
 */
final class DeleteRouteMapResponse extends RpcRequest
{
}

/**
 * @method Long getFirmwareId
 * @method self withFirmwareId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getJobResult
 * @method self withJobResult
 */
final class DeviceUpgradeInfo extends RpcRequest
{
}

/**
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 */
final class getLoraNodeInfoList extends RpcRequest
{
}

/**
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getProductKey
 * @method self withProductKey
 * @method Integer gettime
 * @method self withtime
 */
final class InsertCommand extends RpcRequest
{
}

/**
 * @method string getDevAddr
 * @method self withDevAddr
 * @method string getDevEui
 * @method self withDevEui
 * @method string getGatewayId
 * @method self withGatewayId
 * @method string getGwDeviceName
 * @method self withGwDeviceName
 * @method string getGwProductKey
 * @method self withGwProductKey
 * @method string getNodeTxFreq
 * @method self withNodeTxFreq
 * @method Integer getNodeMixFlag
 * @method self withNodeMixFlag
 * @method Integer getGatewayMainFlag
 * @method self withGatewayMainFlag
 */
final class InitNmsRouteMapResponse extends RpcRequest
{
}

/**
 * @method string getDevAddr
 * @method self withDevAddr
 * @method string getDevEui
 * @method self withDevEui
 * @method string getGatewayId
 * @method self withGatewayId
 * @method string getGwDeviceName
 * @method self withGwDeviceName
 * @method string getGwProductKey
 * @method self withGwProductKey
 * @method string getNodeTxFreq
 * @method self withNodeTxFreq
 * @method Integer getNodeMixFlag
 * @method self withNodeMixFlag
 * @method Integer getGatewayMainFlag
 * @method self withGatewayMainFlag
 */
final class InitNmsRouteMap extends RpcRequest
{
}

/**
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 */
final class QueryDeviceInfo extends RpcRequest
{
}

/**
 * @method Long getFirmwareId
 * @method self withFirmwareId
 */
final class QueryFirmwareByPk extends RpcRequest
{
}

/**
 * @method Long getFirmwareId
 * @method self withFirmwareId
 */
final class QueryFirmwareVersionById extends RpcRequest
{
}

final class QueryLoraProductName extends RpcRequest
{
}

/**
 * @method string getProductKey
 * @method self withProductKey
 * @method string getStatus
 * @method self withStatus
 * @method RepeatList getDeviceName
 * @method self withDeviceName
 */
final class QueryOtaJobByDevices extends RpcRequest
{
}

final class QueryProductName extends RpcRequest
{
}

/**
 * @method string getFirmwareName
 * @method self withFirmwareName
 */
final class QueryStrategyByFirName extends RpcRequest
{
}

/**
 * @method string getJsonCommands
 * @method self withJsonCommands
 * @method string getProductKey
 * @method self withProductKey
 */
final class SendEventData extends RpcRequest
{
}

/**
 * @method string getFirmwareName
 * @method self withFirmwareName
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 */
final class UpgradeSingleDevice extends RpcRequest
{
}

/**
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getFirmwareName
 * @method self withFirmwareName
 */
final class ResetDeviceUpgrade extends RpcRequest
{
}

/**
 * @method string getFirmwareName
 * @method self withFirmwareName
 */
final class QueryFirmwareByName extends RpcRequest
{
}

/**
 * @method string getFirmwareName
 * @method self withFirmwareName
 * @method string getProductKey
 * @method self withProductKey
 * @method RepeatList getDeviceName
 * @method self withDeviceName
 */
final class VerifyFirmware extends RpcRequest
{
}

/**
 * @method Long getFirmwareId
 * @method self withFirmwareId
 * @method string getFirmwareName
 * @method self withFirmwareName
 * @method string getDestVersion
 * @method self withDestVersion
 * @method string getFirmwareUrl
 * @method self withFirmwareUrl
 * @method string getFirmwareMd5
 * @method self withFirmwareMd5
 * @method Integer getFirmwareSize
 * @method self withFirmwareSize
 * @method string getFirmwareDesc
 * @method self withFirmwareDesc
 * @method Integer getVerifyState
 * @method self withVerifyState
 */
final class UpdateFirmware extends RpcRequest
{
}

/**
 * @method string getFirmwareName
 * @method self withFirmwareName
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 */
final class ReUpgradeDevices extends RpcRequest
{
}

/**
 * @method string getProductKey
 * @method self withProductKey
 */
final class QueryVersionsByPk extends RpcRequest
{
}

/**
 * @method string getFirmwareName
 * @method self withFirmwareName
 */
final class QueryFirmwareVerifyInfo extends RpcRequest
{
}

/**
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getDeleteStatus
 * @method self withDeleteStatus
 */
final class QueryFirmwareByUid extends RpcRequest
{
}

/**
 * @method Long getFirmwareId
 * @method self withFirmwareId
 */
final class QueryFirmwareById extends RpcRequest
{
}

/**
 * @method string getFirmwareName
 * @method self withFirmwareName
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getType
 * @method self withType
 */
final class QueryDeviceUpgradeInfo extends RpcRequest
{
}

/**
 * @method string getProductKey
 * @method self withProductKey
 * @method string getIndistinctDevName
 * @method self withIndistinctDevName
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 * @method RepeatList getFirmwareVersion
 * @method self withFirmwareVersion
 */
final class QueryDeviceByPkAndVersion extends RpcRequest
{
}

/**
 * @method string getFirmwareName
 * @method self withFirmwareName
 */
final class FinishVerifyTask extends RpcRequest
{
}

/**
 * @method string getFirmwareName
 * @method self withFirmwareName
 */
final class DeviceUpgradeCount extends RpcRequest
{
}

/**
 * @method string getFirmwareName
 * @method self withFirmwareName
 */
final class DeleteFirmware extends RpcRequest
{
}

/**
 * @method string getFirmwareName
 * @method self withFirmwareName
 * @method string getDestVersion
 * @method self withDestVersion
 * @method string getFirmwareUrl
 * @method self withFirmwareUrl
 * @method string getFirmwareSign
 * @method self withFirmwareSign
 * @method string getSignMethod
 * @method self withSignMethod
 * @method Integer getFirmwareSize
 * @method self withFirmwareSize
 * @method string getProductKey
 * @method self withProductKey
 * @method string getFirmwareDesc
 * @method self withFirmwareDesc
 */
final class CreateFirmware extends RpcRequest
{
}

/**
 * @method string getFirmwareName
 * @method self withFirmwareName
 * @method string getProductKey
 * @method self withProductKey
 * @method string getUpgradeType
 * @method self withUpgradeType
 * @method string getStrategyType
 * @method self withStrategyType
 * @method string getDestVersion
 * @method self withDestVersion
 * @method string getLocations
 * @method self withLocations
 * @method RepeatList getSrcVersion
 * @method self withSrcVersion
 * @method RepeatList getDeviceName
 * @method self withDeviceName
 */
final class BatchDeviceUpgrade extends RpcRequest
{
}

/**
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getProductKey
 * @method self withProductKey
 * @method string getCommandContent
 * @method self withCommandContent
 * @method Integer getFport
 * @method self withFport
 */
final class SendMessage extends RpcRequest
{
}

/**
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getRegion
 * @method self withRegion
 * @method string getNetId
 * @method self withNetId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceEui
 * @method self withDeviceEui
 * @method string getAppEui
 * @method self withAppEui
 * @method string getAppKey
 * @method self withAppKey
 * @method string getAliyunCommodityCode
 * @method self withAliyunCommodityCode
 * @method Long getTenantId
 * @method self withTenantId
 * @method string getDownlinkFreq
 * @method self withDownlinkFreq
 * @method string getModu
 * @method self withModu
 * @method string getNodeFreqType
 * @method self withNodeFreqType
 */
final class RegisterLoraDevice extends RpcRequest
{
}

/**
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 */
final class QuerySingleDevice extends RpcRequest
{
}

final class QueryProductNameAndAllCount extends RpcRequest
{
}

/**
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 */
final class QueryLoraDeviceInfoList extends RpcRequest
{
}

/**
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 */
final class DeleteLoraDevice extends RpcRequest
{
}
