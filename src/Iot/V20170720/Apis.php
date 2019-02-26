<?php

namespace AlibabaCloud\Iot\V20170720;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method CleanTopic cleanTopic($options = [])
 * @method SendMacCommand sendMacCommand($options = [])
 * @method SyncGateway syncGateway($options = [])
 * @method SynchronizeGateway synchronizeGateway($options = [])
 * @method DeleteRouteMap deleteRouteMap($options = [])
 * @method CreateOtaaDevice createOtaaDevice($options = [])
 * @method CreateLoraApp createLoraApp($options = [])
 * @method QueryOtaaDevice queryOtaaDevice($options = [])
 * @method QueryAmsProductMapping queryAmsProductMapping($options = [])
 * @method QueryLoraNodeInfoList queryLoraNodeInfoList($options = [])
 * @method DeleteDeviceList deleteDeviceList($options = [])
 * @method DeleteRouteMapResponse deleteRouteMapResponse($options = [])
 * @method DeviceUpgradeInfo deviceUpgradeInfo($options = [])
 * @method getLoraNodeInfoList getLoraNodeInfoList($options = [])
 * @method InsertCommand insertCommand($options = [])
 * @method InitNmsRouteMapResponse initNmsRouteMapResponse($options = [])
 * @method InitNmsRouteMap initNmsRouteMap($options = [])
 * @method QueryDeviceInfo queryDeviceInfo($options = [])
 * @method QueryFirmwareByPk queryFirmwareByPk($options = [])
 * @method QueryFirmwareVersionById queryFirmwareVersionById($options = [])
 * @method QueryLoraProductName queryLoraProductName($options = [])
 * @method QueryOtaJobByDevices queryOtaJobByDevices($options = [])
 * @method QueryProductName queryProductName($options = [])
 * @method QueryStrategyByFirName queryStrategyByFirName($options = [])
 * @method SendEventData sendEventData($options = [])
 * @method UpgradeSingleDevice upgradeSingleDevice($options = [])
 * @method ResetDeviceUpgrade resetDeviceUpgrade($options = [])
 * @method QueryFirmwareByName queryFirmwareByName($options = [])
 * @method VerifyFirmware verifyFirmware($options = [])
 * @method UpdateFirmware updateFirmware($options = [])
 * @method ReUpgradeDevices reUpgradeDevices($options = [])
 * @method QueryVersionsByPk queryVersionsByPk($options = [])
 * @method QueryFirmwareVerifyInfo queryFirmwareVerifyInfo($options = [])
 * @method QueryFirmwareByUid queryFirmwareByUid($options = [])
 * @method QueryFirmwareById queryFirmwareById($options = [])
 * @method QueryDeviceUpgradeInfo queryDeviceUpgradeInfo($options = [])
 * @method QueryDeviceByPkAndVersion queryDeviceByPkAndVersion($options = [])
 * @method FinishVerifyTask finishVerifyTask($options = [])
 * @method DeviceUpgradeCount deviceUpgradeCount($options = [])
 * @method DeleteFirmware deleteFirmware($options = [])
 * @method CreateFirmware createFirmware($options = [])
 * @method BatchDeviceUpgrade batchDeviceUpgrade($options = [])
 * @method SendMessage sendMessage($options = [])
 * @method RegisterLoraDevice registerLoraDevice($options = [])
 * @method QuerySingleDevice querySingleDevice($options = [])
 * @method QueryProductNameAndAllCount queryProductNameAndAllCount($options = [])
 * @method QueryLoraDeviceInfoList queryLoraDeviceInfoList($options = [])
 * @method DeleteLoraDevice deleteLoraDevice($options = [])
 */
class V20170720
{
    use ApiResolverTrait;
}

/**
 * @method string getTopic
 * @method self withTopic(string $topic)
 * @method string getExts
 * @method self withExts(string $exts)
 * @method string getSubscriberId
 * @method self withSubscriberId(string $subscriberId)
 */
class CleanTopic extends Roa
{
    use R;
}

/**
 * @method string getJsonCommands
 * @method self withJsonCommands(string $jsonCommands)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class SendMacCommand extends Roa
{
    use R;
}

/**
 * @method string getjsonRouteMap
 * @method self withjsonRouteMap(string $jsonRouteMap)
 * @method string getjsonTxpkDTO
 * @method self withjsonTxpkDTO(string $jsonTxpkDTO)
 */
class SyncGateway extends Roa
{
    use R;
}

/**
 * @method string getJsonRouteMap
 * @method self withJsonRouteMap(string $jsonRouteMap)
 * @method string getJsonTxpkDTO
 * @method self withJsonTxpkDTO(string $jsonTxpkDTO)
 */
class SynchronizeGateway extends Roa
{
    use R;
}

/**
 * @method string getDevAddr
 * @method self withDevAddr(string $devAddr)
 * @method string getDevEui
 * @method self withDevEui(string $devEui)
 * @method string getGatewayId
 * @method self withGatewayId(string $gatewayId)
 */
class DeleteRouteMap extends Roa
{
    use R;
}

/**
 * @method string getPattern
 * @method self withPattern(string $pattern)
 * @method string getDownlinkFreq
 * @method self withDownlinkFreq(string $downlinkFreq)
 * @method Integer getDeviceNum
 * @method self withDeviceNum(Integer $deviceNum)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getOui
 * @method self withOui(string $oui)
 * @method string getOrgId
 * @method self withOrgId(string $orgId)
 * @method string getType
 * @method self withType(string $type)
 * @method Integer getNodeFreqType
 * @method self withNodeFreqType(Integer $nodeFreqType)
 */
class CreateOtaaDevice extends Roa
{
    use R;
}

/**
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 */
class CreateLoraApp extends Roa
{
    use R;
}

/**
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class QueryOtaaDevice extends Roa
{
    use R;
}

/**
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 */
class QueryAmsProductMapping extends Roa
{
    use R;
}

/**
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class QueryLoraNodeInfoList extends Roa
{
    use R;
}

/**
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class DeleteDeviceList extends Roa
{
    use R;
}

/**
 * @method string getDevAddr
 * @method self withDevAddr(string $devAddr)
 * @method string getDevEui
 * @method self withDevEui(string $devEui)
 * @method string getGatewayId
 * @method self withGatewayId(string $gatewayId)
 * @method string getGwDeviceName
 * @method self withGwDeviceName(string $gwDeviceName)
 * @method string getGwProductKey
 * @method self withGwProductKey(string $gwProductKey)
 */
class DeleteRouteMapResponse extends Roa
{
    use R;
}

/**
 * @method int getFirmwareId
 * @method self withFirmwareId(int $firmwareId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getJobResult
 * @method self withJobResult(Integer $jobResult)
 */
class DeviceUpgradeInfo extends Roa
{
    use R;
}

/**
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class getLoraNodeInfoList extends Roa
{
    use R;
}

/**
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method Integer gettime
 * @method self withtime(Integer $time)
 */
class InsertCommand extends Roa
{
    use R;
}

/**
 * @method string getDevAddr
 * @method self withDevAddr(string $devAddr)
 * @method string getDevEui
 * @method self withDevEui(string $devEui)
 * @method string getGatewayId
 * @method self withGatewayId(string $gatewayId)
 * @method string getGwDeviceName
 * @method self withGwDeviceName(string $gwDeviceName)
 * @method string getGwProductKey
 * @method self withGwProductKey(string $gwProductKey)
 * @method string getNodeTxFreq
 * @method self withNodeTxFreq(string $nodeTxFreq)
 * @method Integer getNodeMixFlag
 * @method self withNodeMixFlag(Integer $nodeMixFlag)
 * @method Integer getGatewayMainFlag
 * @method self withGatewayMainFlag(Integer $gatewayMainFlag)
 */
class InitNmsRouteMapResponse extends Roa
{
    use R;
}

/**
 * @method string getDevAddr
 * @method self withDevAddr(string $devAddr)
 * @method string getDevEui
 * @method self withDevEui(string $devEui)
 * @method string getGatewayId
 * @method self withGatewayId(string $gatewayId)
 * @method string getGwDeviceName
 * @method self withGwDeviceName(string $gwDeviceName)
 * @method string getGwProductKey
 * @method self withGwProductKey(string $gwProductKey)
 * @method string getNodeTxFreq
 * @method self withNodeTxFreq(string $nodeTxFreq)
 * @method Integer getNodeMixFlag
 * @method self withNodeMixFlag(Integer $nodeMixFlag)
 * @method Integer getGatewayMainFlag
 * @method self withGatewayMainFlag(Integer $gatewayMainFlag)
 */
class InitNmsRouteMap extends Roa
{
    use R;
}

/**
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class QueryDeviceInfo extends Roa
{
    use R;
}

/**
 * @method int getFirmwareId
 * @method self withFirmwareId(int $firmwareId)
 */
class QueryFirmwareByPk extends Roa
{
    use R;
}

/**
 * @method int getFirmwareId
 * @method self withFirmwareId(int $firmwareId)
 */
class QueryFirmwareVersionById extends Roa
{
    use R;
}

class QueryLoraProductName extends Roa
{
    use R;
}

/**
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method array getDeviceName
 * @method self withDeviceName(array $deviceName)
 */
class QueryOtaJobByDevices extends Roa
{
    use R;
}

class QueryProductName extends Roa
{
    use R;
}

/**
 * @method string getFirmwareName
 * @method self withFirmwareName(string $firmwareName)
 */
class QueryStrategyByFirName extends Roa
{
    use R;
}

/**
 * @method string getJsonCommands
 * @method self withJsonCommands(string $jsonCommands)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 */
class SendEventData extends Roa
{
    use R;
}

/**
 * @method string getFirmwareName
 * @method self withFirmwareName(string $firmwareName)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class UpgradeSingleDevice extends Roa
{
    use R;
}

/**
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getFirmwareName
 * @method self withFirmwareName(string $firmwareName)
 */
class ResetDeviceUpgrade extends Roa
{
    use R;
}

/**
 * @method string getFirmwareName
 * @method self withFirmwareName(string $firmwareName)
 */
class QueryFirmwareByName extends Roa
{
    use R;
}

/**
 * @method string getFirmwareName
 * @method self withFirmwareName(string $firmwareName)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method array getDeviceName
 * @method self withDeviceName(array $deviceName)
 */
class VerifyFirmware extends Roa
{
    use R;
}

/**
 * @method int getFirmwareId
 * @method self withFirmwareId(int $firmwareId)
 * @method string getFirmwareName
 * @method self withFirmwareName(string $firmwareName)
 * @method string getDestVersion
 * @method self withDestVersion(string $destVersion)
 * @method string getFirmwareUrl
 * @method self withFirmwareUrl(string $firmwareUrl)
 * @method string getFirmwareMd5
 * @method self withFirmwareMd5(string $firmwareMd5)
 * @method Integer getFirmwareSize
 * @method self withFirmwareSize(Integer $firmwareSize)
 * @method string getFirmwareDesc
 * @method self withFirmwareDesc(string $firmwareDesc)
 * @method Integer getVerifyState
 * @method self withVerifyState(Integer $verifyState)
 */
class UpdateFirmware extends Roa
{
    use R;
}

/**
 * @method string getFirmwareName
 * @method self withFirmwareName(string $firmwareName)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class ReUpgradeDevices extends Roa
{
    use R;
}

/**
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 */
class QueryVersionsByPk extends Roa
{
    use R;
}

/**
 * @method string getFirmwareName
 * @method self withFirmwareName(string $firmwareName)
 */
class QueryFirmwareVerifyInfo extends Roa
{
    use R;
}

/**
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getDeleteStatus
 * @method self withDeleteStatus(Integer $deleteStatus)
 */
class QueryFirmwareByUid extends Roa
{
    use R;
}

/**
 * @method int getFirmwareId
 * @method self withFirmwareId(int $firmwareId)
 */
class QueryFirmwareById extends Roa
{
    use R;
}

/**
 * @method string getFirmwareName
 * @method self withFirmwareName(string $firmwareName)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getType
 * @method self withType(Integer $type)
 */
class QueryDeviceUpgradeInfo extends Roa
{
    use R;
}

/**
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getIndistinctDevName
 * @method self withIndistinctDevName(string $indistinctDevName)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method array getFirmwareVersion
 * @method self withFirmwareVersion(array $firmwareVersion)
 */
class QueryDeviceByPkAndVersion extends Roa
{
    use R;
}

/**
 * @method string getFirmwareName
 * @method self withFirmwareName(string $firmwareName)
 */
class FinishVerifyTask extends Roa
{
    use R;
}

/**
 * @method string getFirmwareName
 * @method self withFirmwareName(string $firmwareName)
 */
class DeviceUpgradeCount extends Roa
{
    use R;
}

/**
 * @method string getFirmwareName
 * @method self withFirmwareName(string $firmwareName)
 */
class DeleteFirmware extends Roa
{
    use R;
}

/**
 * @method string getFirmwareName
 * @method self withFirmwareName(string $firmwareName)
 * @method string getDestVersion
 * @method self withDestVersion(string $destVersion)
 * @method string getFirmwareUrl
 * @method self withFirmwareUrl(string $firmwareUrl)
 * @method string getFirmwareSign
 * @method self withFirmwareSign(string $firmwareSign)
 * @method string getSignMethod
 * @method self withSignMethod(string $signMethod)
 * @method Integer getFirmwareSize
 * @method self withFirmwareSize(Integer $firmwareSize)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getFirmwareDesc
 * @method self withFirmwareDesc(string $firmwareDesc)
 */
class CreateFirmware extends Roa
{
    use R;
}

/**
 * @method string getFirmwareName
 * @method self withFirmwareName(string $firmwareName)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getUpgradeType
 * @method self withUpgradeType(string $upgradeType)
 * @method string getStrategyType
 * @method self withStrategyType(string $strategyType)
 * @method string getDestVersion
 * @method self withDestVersion(string $destVersion)
 * @method string getLocations
 * @method self withLocations(string $locations)
 * @method array getSrcVersion
 * @method self withSrcVersion(array $srcVersion)
 * @method array getDeviceName
 * @method self withDeviceName(array $deviceName)
 */
class BatchDeviceUpgrade extends Roa
{
    use R;
}

/**
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getCommandContent
 * @method self withCommandContent(string $commandContent)
 * @method Integer getFport
 * @method self withFport(Integer $fport)
 */
class SendMessage extends Roa
{
    use R;
}

/**
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getRegion
 * @method self withRegion(string $region)
 * @method string getNetId
 * @method self withNetId(string $netId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceEui
 * @method self withDeviceEui(string $deviceEui)
 * @method string getAppEui
 * @method self withAppEui(string $appEui)
 * @method string getAppKey
 * @method self withAppKey(string $appKey)
 * @method string getAliyunCommodityCode
 * @method self withAliyunCommodityCode(string $aliyunCommodityCode)
 * @method int getTenantId
 * @method self withTenantId(int $tenantId)
 * @method string getDownlinkFreq
 * @method self withDownlinkFreq(string $downlinkFreq)
 * @method string getModu
 * @method self withModu(string $modu)
 * @method string getNodeFreqType
 * @method self withNodeFreqType(string $nodeFreqType)
 */
class RegisterLoraDevice extends Roa
{
    use R;
}

/**
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class QuerySingleDevice extends Roa
{
    use R;
}

class QueryProductNameAndAllCount extends Roa
{
    use R;
}

/**
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class QueryLoraDeviceInfoList extends Roa
{
    use R;
}

/**
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class DeleteLoraDevice extends Roa
{
    use R;
}
