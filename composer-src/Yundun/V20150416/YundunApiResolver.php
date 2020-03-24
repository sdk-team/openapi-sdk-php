<?php

namespace AlibabaCloud\Yundun\V20150416;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method BruteforceLog bruteforceLog(array $options = [])
 * @method DeleteBackDoorFile deleteBackDoorFile(array $options = [])
 * @method LogineventLog logineventLog(array $options = [])
 * @method DdosLog ddosLog(array $options = [])
 * @method WebshellLog webshellLog(array $options = [])
 * @method CloseVulScan closeVulScan(array $options = [])
 * @method ConfirmLogin confirmLogin(array $options = [])
 * @method ListInstanceInfos listInstanceInfos(array $options = [])
 * @method SecureCheck secureCheck(array $options = [])
 * @method CloseCCProtect closeCCProtect(array $options = [])
 * @method WafLog wafLog(array $options = [])
 * @method DdosFlowGraph ddosFlowGraph(array $options = [])
 * @method ConfigDdos configDdos(array $options = [])
 * @method DetectVulById detectVulById(array $options = [])
 * @method ClosePortScan closePortScan(array $options = [])
 * @method OpenPortScan openPortScan(array $options = [])
 * @method OpenCCProtect openCCProtect(array $options = [])
 * @method DeleteCNameWaf deleteCNameWaf(array $options = [])
 * @method DetectVulByIp detectVulByIp(array $options = [])
 * @method QueryDdosConfig queryDdosConfig(array $options = [])
 * @method GetDdosConfigOptions getDdosConfigOptions(array $options = [])
 * @method ServiceStatus serviceStatus(array $options = [])
 * @method SetDdosQps setDdosQps(array $options = [])
 * @method WafInfo wafInfo(array $options = [])
 * @method SetDdosAuto setDdosAuto(array $options = [])
 * @method OpenVulScan openVulScan(array $options = [])
 * @method Summary summary(array $options = [])
 * @method VulScanLog vulScanLog(array $options = [])
 * @method AddCNameWaf addCNameWaf(array $options = [])
 */
class YundunApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
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
 * @method string getRecordType()
 * @method $this withRecordType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class BruteforceLog extends Rpc
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
class DeleteBackDoorFile extends Rpc
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
class LogineventLog extends Rpc
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
class DdosLog extends Rpc
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
class WebshellLog extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class CloseVulScan extends Rpc
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
class ConfirmLogin extends Rpc
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
class ListInstanceInfos extends Rpc
{
}

/**
 * @method string getJstOwnerId()
 * @method $this withJstOwnerId($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 */
class SecureCheck extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 */
class CloseCCProtect extends Rpc
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
class WafLog extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 */
class DdosFlowGraph extends Rpc
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
class ConfigDdos extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getVulId()
 * @method $this withVulId($value)
 */
class DetectVulById extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ClosePortScan extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class OpenPortScan extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 */
class OpenCCProtect extends Rpc
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
class DeleteCNameWaf extends Rpc
{
}

/**
 * @method string getVulIp()
 * @method $this withVulIp($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DetectVulByIp extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 */
class QueryDdosConfig extends Rpc
{
}

class GetDdosConfigOptions extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ServiceStatus extends Rpc
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
class SetDdosQps extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 */
class WafInfo extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 */
class SetDdosAuto extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class OpenVulScan extends Rpc
{
}

/**
 * @method string getJstOwnerId()
 * @method $this withJstOwnerId($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 */
class Summary extends Rpc
{
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
class VulScanLog extends Rpc
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
class AddCNameWaf extends Rpc
{
}
