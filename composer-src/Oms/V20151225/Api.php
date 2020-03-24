<?php

namespace AlibabaCloud\Oms\V20151225;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

/**
 * Resolve Api based on the method name.
 *
 * @method GetMeasureData getMeasureData(array $options = [])
 * @method PutDomainPart putDomainPart(array $options = [])
 * @method PutReadyFlag putReadyFlag(array $options = [])
 * @method CheckReadyFlag checkReadyFlag(array $options = [])
 * @method DeleteDomainPart deleteDomainPart(array $options = [])
 * @method GetReadyFlag getReadyFlag(array $options = [])
 * @method GetDomainPart getDomainPart(array $options = [])
 * @method PutMeasureData putMeasureData(array $options = [])
 */
class OmsApiResolver
{
    use ApiResolverTrait;
}

class V20151225Rpc extends Rpc
{
    /** @var string */
    public $product = 'Oms';

    /** @var string */
    public $version = '2015-12-25';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'oms';
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
class GetMeasureData extends V20151225Rpc
{

    /** @var string */
    public $method = 'GET';
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
class PutDomainPart extends V20151225Rpc
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
class PutReadyFlag extends V20151225Rpc
{
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
class CheckReadyFlag extends V20151225Rpc
{
}

/**
 * @method string getDomainCode()
 * @method $this withDomainCode($value)
 * @method string getDataType()
 * @method $this withDataType($value)
 * @method string getPart()
 * @method $this withPart($value)
 */
class DeleteDomainPart extends V20151225Rpc
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
class GetReadyFlag extends V20151225Rpc
{

    /** @var string */
    public $method = 'GET';
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
class GetDomainPart extends V20151225Rpc
{

    /** @var string */
    public $method = 'GET';
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
class PutMeasureData extends V20151225Rpc
{
}
