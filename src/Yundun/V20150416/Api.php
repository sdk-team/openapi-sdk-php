<?php

namespace AlibabaCloud\Yundun\V20150416;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

/**
 * Resolve Api based on the method name.
 *
 * @method VulScanLog vulScanLog(array $options = [])
 * @method WafInfo wafInfo(array $options = [])
 * @method Summary summary(array $options = [])
 * @method SetDdosQps setDdosQps(array $options = [])
 * @method SetDdosAuto setDdosAuto(array $options = [])
 * @method ServiceStatus serviceStatus(array $options = [])
 * @method QueryDdosConfig queryDdosConfig(array $options = [])
 * @method OpenVulScan openVulScan(array $options = [])
 * @method OpenPortScan openPortScan(array $options = [])
 * @method OpenCCProtect openCCProtect(array $options = [])
 * @method GetDdosConfigOptions getDdosConfigOptions(array $options = [])
 * @method DetectVulByIp detectVulByIp(array $options = [])
 * @method DetectVulById detectVulById(array $options = [])
 * @method DeleteCNameWaf deleteCNameWaf(array $options = [])
 * @method DdosFlowGraph ddosFlowGraph(array $options = [])
 * @method ConfirmLogin confirmLogin(array $options = [])
 * @method ConfigDdos configDdos(array $options = [])
 * @method CloseVulScan closeVulScan(array $options = [])
 * @method ClosePortScan closePortScan(array $options = [])
 * @method CloseCCProtect closeCCProtect(array $options = [])
 * @method AddCNameWaf addCNameWaf(array $options = [])
 * @method WebshellLog webshellLog(array $options = [])
 * @method WafLog wafLog(array $options = [])
 * @method SecureCheck secureCheck(array $options = [])
 * @method LogineventLog logineventLog(array $options = [])
 * @method ListInstanceInfos listInstanceInfos(array $options = [])
 * @method DeleteBackDoorFile deleteBackDoorFile(array $options = [])
 * @method DdosLog ddosLog(array $options = [])
 * @method BruteforceLog bruteforceLog(array $options = [])
 */
class YundunApiResolver
{
    use ApiResolverTrait;
}

class V20150416Rpc extends Rpc
{
    /** @var string */
    public $product = 'Yundun';

    /** @var string */
    public $version = '2015-04-16';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'yundun';
}

/**
 * @method string getJstOwnerId()
 * @method $this withJstOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getVulStatus()
 * @method $this withVulStatus($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class VulScanLog extends V20150416Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 */
class WafInfo extends V20150416Rpc
{
}

/**
 * @method string getJstOwnerId()
 * @method $this withJstOwnerId($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 */
class Summary extends V20150416Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getLevel()
 * @method $this withLevel($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getQpsPosition()
 * @method $this withQpsPosition($value)
 */
class SetDdosQps extends V20150416Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 */
class SetDdosAuto extends V20150416Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ServiceStatus extends V20150416Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 */
class QueryDdosConfig extends V20150416Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class OpenVulScan extends V20150416Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class OpenPortScan extends V20150416Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 */
class OpenCCProtect extends V20150416Rpc
{
}

class GetDdosConfigOptions extends V20150416Rpc
{
}

/**
 * @method string getVulIp()
 * @method $this withVulIp($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DetectVulByIp extends V20150416Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getVulId()
 * @method $this withVulId($value)
 */
class DetectVulById extends V20150416Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getCnameId()
 * @method $this withCnameId($value)
 */
class DeleteCNameWaf extends V20150416Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 */
class DdosFlowGraph extends V20150416Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getTime()
 * @method $this withTime($value)
 */
class ConfirmLogin extends V20150416Rpc
{
}

/**
 * @method string getStrategyPosition()
 * @method $this withStrategyPosition($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getLevel()
 * @method $this withLevel($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getFlowPosition()
 * @method $this withFlowPosition($value)
 */
class ConfigDdos extends V20150416Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class CloseVulScan extends V20150416Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ClosePortScan extends V20150416Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 */
class CloseCCProtect extends V20150416Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 */
class AddCNameWaf extends V20150416Rpc
{
}

/**
 * @method string getJstOwnerId()
 * @method $this withJstOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getRecordType()
 * @method $this withRecordType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class WebshellLog extends V20150416Rpc
{
}

/**
 * @method string getJstOwnerId()
 * @method $this withJstOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class WafLog extends V20150416Rpc
{
}

/**
 * @method string getJstOwnerId()
 * @method $this withJstOwnerId($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 */
class SecureCheck extends V20150416Rpc
{
}

/**
 * @method string getJstOwnerId()
 * @method $this withJstOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getRecordType()
 * @method $this withRecordType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class LogineventLog extends V20150416Rpc
{
}

/**
 * @method string getJstOwnerId()
 * @method $this withJstOwnerId($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getEventType()
 * @method $this withEventType($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListInstanceInfos extends V20150416Rpc
{
}

/**
 * @method string getPath()
 * @method $this withPath($value)
 * @method string getJstOwnerId()
 * @method $this withJstOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DeleteBackDoorFile extends V20150416Rpc
{
}

/**
 * @method string getJstOwnerId()
 * @method $this withJstOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DdosLog extends V20150416Rpc
{
}

/**
 * @method string getJstOwnerId()
 * @method $this withJstOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getRecordType()
 * @method $this withRecordType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class BruteforceLog extends V20150416Rpc
{
}
