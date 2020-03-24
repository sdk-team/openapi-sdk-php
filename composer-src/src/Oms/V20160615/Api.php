<?php

namespace AlibabaCloud\Oms\V20160615;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

/**
 * Resolve Api based on the method name.
 *
 * @method PutMeasureData putMeasureData(array $options = [])
 * @method PutReadyFlag putReadyFlag(array $options = [])
 * @method GetReadyFlag getReadyFlag(array $options = [])
 * @method PutDomainPart putDomainPart(array $options = [])
 * @method GetMeasureData getMeasureData(array $options = [])
 * @method PutMeasureDataByProxy putMeasureDataByProxy(array $options = [])
 * @method DeleteDomainPartByProxy deleteDomainPartByProxy(array $options = [])
 * @method GetReadyFlagAlertConfig getReadyFlagAlertConfig(array $options = [])
 * @method GetDomainConfig getDomainConfig(array $options = [])
 * @method PutDomainPartByProxy putDomainPartByProxy(array $options = [])
 * @method GetSystemConfig getSystemConfig(array $options = [])
 * @method GetReadyFlagByProxy getReadyFlagByProxy(array $options = [])
 * @method GetOpenApiConfig getOpenApiConfig(array $options = [])
 * @method DeleteDomainPart deleteDomainPart(array $options = [])
 * @method GetDomainPartConfig getDomainPartConfig(array $options = [])
 * @method GetDomainPartByProxy getDomainPartByProxy(array $options = [])
 * @method GetDomainPart getDomainPart(array $options = [])
 * @method GetAccessPolicyConfig getAccessPolicyConfig(array $options = [])
 * @method PutReadyFlagByProxy putReadyFlagByProxy(array $options = [])
 * @method CheckReadyFlag checkReadyFlag(array $options = [])
 */
class OmsApiResolver
{
    use ApiResolverTrait;
}

class V20160615Rpc extends Rpc
{
    /** @var string */
    public $product = 'Oms';

    /** @var string */
    public $version = '2016-06-15';

    /** @var string */
    public $serviceCode = 'oms';
}

/**
 * @method string getFilter()
 * @method $this withFilter($value)
 * @method string getDomainCode()
 * @method $this withDomainCode($value)
 * @method string getData()
 * @method $this withData($value)
 * @method string getDataType()
 * @method $this withDataType($value)
 * @method string getCompressed()
 * @method $this withCompressed($value)
 * @method string getApiType()
 * @method $this withApiType($value)
 */
class PutMeasureData extends V20160615Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getDomainCode()
 * @method $this withDomainCode($value)
 * @method string getData()
 * @method $this withData($value)
 * @method string getDataType()
 * @method $this withDataType($value)
 * @method string getCompressed()
 * @method $this withCompressed($value)
 * @method string getApiType()
 * @method $this withApiType($value)
 */
class PutReadyFlag extends V20160615Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getFilter()
 * @method $this withFilter($value)
 * @method string getDomainCode()
 * @method $this withDomainCode($value)
 * @method string getDataType()
 * @method $this withDataType($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getCompressEnable()
 * @method $this withCompressEnable($value)
 * @method string getApiType()
 * @method $this withApiType($value)
 * @method string getMaxResult()
 * @method $this withMaxResult($value)
 */
class GetReadyFlag extends V20160615Rpc
{
}

/**
 * @method string getDomainCode()
 * @method $this withDomainCode($value)
 * @method string getData()
 * @method $this withData($value)
 * @method string getDataType()
 * @method $this withDataType($value)
 * @method string getCompressed()
 * @method $this withCompressed($value)
 */
class PutDomainPart extends V20160615Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getFilter()
 * @method $this withFilter($value)
 * @method string getDomainCode()
 * @method $this withDomainCode($value)
 * @method string getDataType()
 * @method $this withDataType($value)
 * @method string getQueryField()
 * @method $this withQueryField($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getCompressEnable()
 * @method $this withCompressEnable($value)
 * @method string getApiType()
 * @method $this withApiType($value)
 * @method string getMaxResult()
 * @method $this withMaxResult($value)
 */
class GetMeasureData extends V20160615Rpc
{
}

/**
 * @method string getFilter()
 * @method $this withFilter($value)
 * @method string getDomainCode()
 * @method $this withDomainCode($value)
 * @method string getData()
 * @method $this withData($value)
 * @method string getDataType()
 * @method $this withDataType($value)
 * @method string getCompressed()
 * @method $this withCompressed($value)
 * @method string getApiType()
 * @method $this withApiType($value)
 */
class PutMeasureDataByProxy extends V20160615Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getDomainCode()
 * @method $this withDomainCode($value)
 * @method string getDataType()
 * @method $this withDataType($value)
 * @method string getPart()
 * @method $this withPart($value)
 */
class DeleteDomainPartByProxy extends V20160615Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getDomainCode()
 * @method $this withDomainCode($value)
 * @method string getDataType()
 * @method $this withDataType($value)
 * @method string getCompressEnable()
 * @method $this withCompressEnable($value)
 */
class GetReadyFlagAlertConfig extends V20160615Rpc
{
}

/**
 * @method string getDomainCode()
 * @method $this withDomainCode($value)
 * @method string getCompressEnable()
 * @method $this withCompressEnable($value)
 */
class GetDomainConfig extends V20160615Rpc
{
}

/**
 * @method string getDomainCode()
 * @method $this withDomainCode($value)
 * @method string getData()
 * @method $this withData($value)
 * @method string getDataType()
 * @method $this withDataType($value)
 * @method string getCompressed()
 * @method $this withCompressed($value)
 */
class PutDomainPartByProxy extends V20160615Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getConfigKey()
 * @method $this withConfigKey($value)
 * @method string getCompressEnable()
 * @method $this withCompressEnable($value)
 */
class GetSystemConfig extends V20160615Rpc
{
}

/**
 * @method string getFilter()
 * @method $this withFilter($value)
 * @method string getDomainCode()
 * @method $this withDomainCode($value)
 * @method string getDataType()
 * @method $this withDataType($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getCompressEnable()
 * @method $this withCompressEnable($value)
 * @method string getApiType()
 * @method $this withApiType($value)
 * @method string getMaxResult()
 * @method $this withMaxResult($value)
 */
class GetReadyFlagByProxy extends V20160615Rpc
{
}

/**
 * @method string getDataType()
 * @method $this withDataType($value)
 * @method string getCompressEnable()
 * @method $this withCompressEnable($value)
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 * @method string getSiteBid()
 */
class GetOpenApiConfig extends V20160615Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSiteBid($value)
    {
        $this->data['SiteBid'] = $value;
        $this->options['query']['siteBid'] = $value;

        return $this;
    }
}

/**
 * @method string getDomainCode()
 * @method $this withDomainCode($value)
 * @method string getDataType()
 * @method $this withDataType($value)
 * @method string getPart()
 * @method $this withPart($value)
 */
class DeleteDomainPart extends V20160615Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getDomainCode()
 * @method $this withDomainCode($value)
 * @method string getDataType()
 * @method $this withDataType($value)
 * @method string getCompressEnable()
 * @method $this withCompressEnable($value)
 * @method string getPart()
 * @method $this withPart($value)
 */
class GetDomainPartConfig extends V20160615Rpc
{
}

/**
 * @method string getDomainCode()
 * @method $this withDomainCode($value)
 * @method string getDataType()
 * @method $this withDataType($value)
 * @method string getCompressEnable()
 * @method $this withCompressEnable($value)
 * @method string getPart()
 * @method $this withPart($value)
 */
class GetDomainPartByProxy extends V20160615Rpc
{
}

/**
 * @method string getDomainCode()
 * @method $this withDomainCode($value)
 * @method string getDataType()
 * @method $this withDataType($value)
 * @method string getCompressEnable()
 * @method $this withCompressEnable($value)
 * @method string getPart()
 * @method $this withPart($value)
 */
class GetDomainPart extends V20160615Rpc
{
}

/**
 * @method string getCompressEnable()
 * @method $this withCompressEnable($value)
 * @method string getAliUid()
 * @method $this withAliUid($value)
 */
class GetAccessPolicyConfig extends V20160615Rpc
{
}

/**
 * @method string getDomainCode()
 * @method $this withDomainCode($value)
 * @method string getData()
 * @method $this withData($value)
 * @method string getDataType()
 * @method $this withDataType($value)
 * @method string getCompressed()
 * @method $this withCompressed($value)
 * @method string getApiType()
 * @method $this withApiType($value)
 */
class PutReadyFlagByProxy extends V20160615Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getDomainCode()
 * @method $this withDomainCode($value)
 * @method string getDataType()
 * @method $this withDataType($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getCycles()
 * @method $this withCycles($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class CheckReadyFlag extends V20160615Rpc
{

    /** @var string */
    public $method = 'POST';
}
