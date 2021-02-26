<?php

namespace AlibabaCloud\Ft\V20180713;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method BatchAuditTest01 batchAuditTest01(array $options = [])
 * @method BatchAuditTest02 batchAuditTest02(array $options = [])
 * @method CountCloudProductCallTimes countCloudProductCallTimes(array $options = [])
 * @method DeleteAllStrategy deleteAllStrategy(array $options = [])
 * @method DescribeResourceType describeResourceType(array $options = [])
 * @method FTApiAliasApi fTApiAliasApi(array $options = [])
 * @method FtDynamicAddressDubbo ftDynamicAddressDubbo(array $options = [])
 * @method FtDynamicAddressHsf ftDynamicAddressHsf(array $options = [])
 * @method FtDynamicAddressHttpVpc ftDynamicAddressHttpVpc(array $options = [])
 * @method FtEagleEye ftEagleEye(array $options = [])
 * @method FtFlowSpecial ftFlowSpecial(array $options = [])
 * @method FtFlowSpecial1586868138332 ftFlowSpecial1586868138332(array $options = [])
 * @method FtGatedLaunchPolicy3Api ftGatedLaunchPolicy3Api(array $options = [])
 * @method FtGatedLaunchPolicy4 ftGatedLaunchPolicy4(array $options = [])
 * @method FtGatedLaunchPolicyApi ftGatedLaunchPolicyApi(array $options = [])
 * @method FtIpFlowControl ftIpFlowControl(array $options = [])
 * @method FtParamList ftParamList(array $options = [])
 * @method GetMigrateStrategyResult getMigrateStrategyResult(array $options = [])
 * @method GetTairData getTairData(array $options = [])
 * @method MigrateStrategy migrateStrategy(array $options = [])
 * @method QueryDomainChangeRecords queryDomainChangeRecords(array $options = [])
 * @method QueryErrorApis queryErrorApis(array $options = [])
 * @method RpcDubboServiceRouteApi rpcDubboServiceRouteApi(array $options = [])
 * @method RpcHsfServiceRouteMatchApi rpcHsfServiceRouteMatchApi(array $options = [])
 * @method TestDubboRetryApi testDubboRetryApi(array $options = [])
 * @method TestErrorCodeForGateWay testErrorCodeForGateWay(array $options = [])
 * @method TestFlowStrategy01 testFlowStrategy01(array $options = [])
 * @method TestHttpApi testHttpApi(array $options = [])
 * @method TestIspHttpValidator testIspHttpValidator(array $options = [])
 * @method TestXmlServiceRoutePolicy testXmlServiceRoutePolicy(array $options = [])
 * @method UpdateDomainRecordsRegionId updateDomainRecordsRegionId(array $options = [])
 */
class FtApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Ft';

    /** @var string */
    public $version = '2018-07-13';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getDemo01()
 * @method $this withDemo01($value)
 * @method string getTest010101()
 * @method string getName()
 * @method $this withName($value)
 * @method string getBatchAuditTest01()
 * @method $this withBatchAuditTest01($value)
 */
class BatchAuditTest01 extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTest010101($value)
    {
        $this->data['Test010101'] = $value;
        $this->options['form_params']['Test010101'] = $value;

        return $this;
    }
}

/**
 * @method string getName()
 * @method $this withName($value)
 * @method string getBatchAuditTest01()
 * @method $this withBatchAuditTest01($value)
 */
class BatchAuditTest02 extends Rpc
{
}

/**
 * @method string getBucUid()
 * @method $this withBucUid($value)
 * @method string getBucName()
 * @method $this withBucName($value)
 * @method string getBucEmpId()
 * @method $this withBucEmpId($value)
 * @method string getCloudProductsJsonString()
 * @method string getClearCloudCache()
 * @method string getClearProductCache()
 */
class CountCloudProductCallTimes extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCloudProductsJsonString($value)
    {
        $this->data['CloudProductsJsonString'] = $value;
        $this->options['form_params']['CloudProductsJsonString'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClearCloudCache($value)
    {
        $this->data['ClearCloudCache'] = $value;
        $this->options['form_params']['ClearCloudCache'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClearProductCache($value)
    {
        $this->data['ClearProductCache'] = $value;
        $this->options['form_params']['ClearProductCache'] = $value;

        return $this;
    }
}

/**
 * @method string getBucUid()
 * @method $this withBucUid($value)
 * @method string getBucName()
 * @method $this withBucName($value)
 * @method string getBucEmpId()
 * @method $this withBucEmpId($value)
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getEnv()
 * @method $this withEnv($value)
 */
class DeleteAllStrategy extends Rpc
{
}

/**
 * @method string getProduct()
 * @method $this withProduct($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getEnv()
 * @method $this withEnv($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class DescribeResourceType extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getName()
 * @method $this withName($value)
 */
class FTApiAliasApi extends Rpc
{
}

/**
 * @method string getIntValue()
 * @method $this withIntValue($value)
 * @method string getStringValue()
 * @method $this withStringValue($value)
 */
class FtDynamicAddressDubbo extends Rpc
{
}

class FtDynamicAddressHsf extends Rpc
{
}

/**
 * @method string getStringValue()
 * @method $this withStringValue($value)
 * @method string getOtherParam()
 * @method $this withOtherParam($value)
 * @method string getBooleanParam()
 * @method $this withBooleanParam($value)
 * @method string getDefaultValue()
 * @method $this withDefaultValue($value)
 */
class FtDynamicAddressHttpVpc extends Rpc
{
}

/**
 * @method string getName()
 * @method $this withName($value)
 */
class FtEagleEye extends Rpc
{
}

/**
 * @method string getName()
 * @method $this withName($value)
 */
class FtFlowSpecial extends Rpc
{
}

/**
 * @method string getName()
 * @method $this withName($value)
 */
class FtFlowSpecial1586868138332 extends Rpc
{
}

/**
 * @method string getName()
 * @method $this withName($value)
 */
class FtGatedLaunchPolicy3Api extends Rpc
{
}

/**
 * @method string getIsGatedLaunch()
 * @method $this withIsGatedLaunch($value)
 */
class FtGatedLaunchPolicy4 extends Rpc
{
}

/**
 * @method string getUnGatedLaunchPolicy()
 * @method $this withUnGatedLaunchPolicy($value)
 */
class FtGatedLaunchPolicyApi extends Rpc
{
}

/**
 * @method string getStringList()
 * @method $this withStringList($value)
 */
class FtIpFlowControl extends Rpc
{
}

/**
 * @method array getDisk()
 * @method string getName()
 * @method $this withName($value)
 */
class FtParamList extends Rpc
{

    /**
     * @param array $disk
     *
     * @return $this
     */
	public function withDisk(array $disk)
	{
	    $this->data['Disk'] = $disk;
		foreach ($disk as $depth1 => $depth1Value) {
			foreach ($depth1Value['Size'] as $i => $iValue) {
				$this->options['query']['Disk.' . ($depth1 + 1) . '.Size.' . ($i + 1)] = $iValue;
			}
			foreach ($depth1Value['Type'] as $i => $iValue) {
				$this->options['query']['Disk.' . ($depth1 + 1) . '.Type.' . ($i + 1)] = $iValue;
			}
		}

		return $this;
    }
}

/**
 * @method string getParentName()
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getBucName()
 * @method $this withBucName($value)
 * @method string getEnv()
 * @method $this withEnv($value)
 * @method string getType()
 * @method string getBucEmpId()
 * @method $this withBucEmpId($value)
 * @method string getStrategyName()
 * @method string getApiName()
 * @method $this withApiName($value)
 * @method string getFlowSpecial()
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getBucUid()
 * @method $this withBucUid($value)
 * @method string getVersionName()
 * @method $this withVersionName($value)
 * @method string getStatus()
 */
class GetMigrateStrategyResult extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParentName($value)
    {
        $this->data['ParentName'] = $value;
        $this->options['query']['parentName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withType($value)
    {
        $this->data['Type'] = $value;
        $this->options['query']['type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStrategyName($value)
    {
        $this->data['StrategyName'] = $value;
        $this->options['form_params']['strategyName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFlowSpecial($value)
    {
        $this->data['FlowSpecial'] = $value;
        $this->options['query']['flowSpecial'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStatus($value)
    {
        $this->data['Status'] = $value;
        $this->options['query']['status'] = $value;

        return $this;
    }
}

/**
 * @method array getKeys()
 * @method string getCacheName()
 * @method $this withCacheName($value)
 */
class GetTairData extends Rpc
{

    /**
     * @param array $keys
     *
     * @return $this
     */
	public function withKeys(array $keys)
	{
	    $this->data['Keys'] = $keys;
		foreach ($keys as $i => $iValue) {
			$this->options['query']['Keys.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getApiName()
 * @method $this withApiName($value)
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getBucUid()
 * @method $this withBucUid($value)
 * @method string getStep()
 * @method $this withStep($value)
 * @method string getBucName()
 * @method $this withBucName($value)
 * @method string getEnv()
 * @method $this withEnv($value)
 * @method string getBucEmpId()
 * @method $this withBucEmpId($value)
 * @method string getVersionName()
 * @method $this withVersionName($value)
 */
class MigrateStrategy extends Rpc
{
}

/**
 * @method string getProduct()
 * @method $this withProduct($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getBucUid()
 * @method $this withBucUid($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getBucName()
 * @method $this withBucName($value)
 * @method string getBucEmpId()
 * @method $this withBucEmpId($value)
 */
class QueryDomainChangeRecords extends Rpc
{
}

/**
 * @method string getBeginDate()
 * @method $this withBeginDate($value)
 * @method string getEndDate()
 * @method $this withEndDate($value)
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getBucUid()
 * @method $this withBucUid($value)
 * @method string getBucName()
 * @method $this withBucName($value)
 * @method string getBucEmpId()
 * @method $this withBucEmpId($value)
 */
class QueryErrorApis extends Rpc
{
}

/**
 * @method string getRequiredValue()
 * @method $this withRequiredValue($value)
 * @method string getCode()
 * @method $this withCode($value)
 * @method string getIntValue()
 * @method $this withIntValue($value)
 * @method string getProxyOriginalSecurityTransport()
 * @method string getResultSwitchValue()
 * @method $this withResultSwitchValue($value)
 * @method string getProxyOriginalSourceIp()
 * @method string getJsonObject()
 * @method $this withJsonObject($value)
 * @method string getSleep()
 * @method $this withSleep($value)
 * @method string getSwitchValue()
 * @method $this withSwitchValue($value)
 * @method string getJsonObjectList()
 * @method $this withJsonObjectList($value)
 * @method string getDefaultValue()
 * @method $this withDefaultValue($value)
 * @method string getNumberRange()
 * @method $this withNumberRange($value)
 * @method string getMessage()
 * @method $this withMessage($value)
 * @method string getCheckNumberValue()
 * @method $this withCheckNumberValue($value)
 * @method string getHttpStatusCode()
 * @method $this withHttpStatusCode($value)
 * @method string getStringValue()
 * @method $this withStringValue($value)
 * @method string getEnumValue()
 * @method $this withEnumValue($value)
 * @method string getSuccess()
 * @method $this withSuccess($value)
 * @method string getOtherParam()
 * @method $this withOtherParam($value)
 */
class RpcDubboServiceRouteApi extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyOriginalSecurityTransport($value)
    {
        $this->data['ProxyOriginalSecurityTransport'] = $value;
        $this->options['query']['proxy_original_security_transport'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyOriginalSourceIp($value)
    {
        $this->data['ProxyOriginalSourceIp'] = $value;
        $this->options['query']['proxy_original_source_ip'] = $value;

        return $this;
    }
}

/**
 * @method string getName()
 * @method $this withName($value)
 */
class RpcHsfServiceRouteMatchApi extends Rpc
{
}

class TestDubboRetryApi extends Rpc
{
}

/**
 * @method string getHttpStatusCode()
 * @method $this withHttpStatusCode($value)
 * @method string getCode()
 * @method $this withCode($value)
 * @method string getSuccess()
 * @method $this withSuccess($value)
 * @method string getMessage()
 * @method $this withMessage($value)
 */
class TestErrorCodeForGateWay extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getNames()
 */
class TestFlowStrategy01 extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNames($value)
    {
        $this->data['Names'] = $value;
        $this->options['form_params']['Names'] = $value;

        return $this;
    }
}

/**
 * @method string getStringValue()
 * @method $this withStringValue($value)
 * @method string getOtherParam()
 * @method $this withOtherParam($value)
 * @method string getBooleanParam()
 * @method $this withBooleanParam($value)
 * @method string getDefaultValue()
 * @method $this withDefaultValue($value)
 */
class TestHttpApi extends Rpc
{
}

class TestIspHttpValidator extends Rpc
{
}

/**
 * @method string getApi()
 * @method $this withApi($value)
 */
class TestXmlServiceRoutePolicy extends Rpc
{
}

/**
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getBucUid()
 * @method $this withBucUid($value)
 * @method string getBucName()
 * @method $this withBucName($value)
 * @method string getBucEmpId()
 * @method $this withBucEmpId($value)
 */
class UpdateDomainRecordsRegionId extends Rpc
{
}
