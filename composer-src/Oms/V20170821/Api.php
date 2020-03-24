<?php

namespace AlibabaCloud\Oms\V20170821;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

/**
 * Resolve Api based on the method name.
 *
 * @method GetDomainCodeByEnv getDomainCodeByEnv(array $options = [])
 * @method GetDomainCodes getDomainCodes(array $options = [])
 * @method GetDomainList getDomainList(array $options = [])
 * @method CheckBeforeDeployed checkBeforeDeployed(array $options = [])
 */
class OmsApiResolver
{
    use ApiResolverTrait;
}

class V20170821Rpc extends Rpc
{
    /** @var string */
    public $product = 'Oms';

    /** @var string */
    public $version = '2017-08-21';

    /** @var string */
    public $serviceCode = 'oms';
}

/**
 * @method string getDomainCode()
 * @method $this withDomainCode($value)
 * @method string getEnviroment()
 * @method $this withEnviroment($value)
 * @method string getCompressEnable()
 * @method $this withCompressEnable($value)
 */
class GetDomainCodeByEnv extends V20170821Rpc
{
}

/**
 * @method string getDomainCode()
 * @method $this withDomainCode($value)
 * @method string getRestrictOnline()
 * @method $this withRestrictOnline($value)
 * @method string getEnviroment()
 * @method $this withEnviroment($value)
 * @method string getCompressEnable()
 * @method $this withCompressEnable($value)
 * @method array getProductNameList()
 */
class GetDomainCodes extends V20170821Rpc
{

    /**
     * @param array $productNameList
     *
     * @return $this
     */
    public function withProductNameList(array $productNameList)
    {
        $this->data['ProductNameList'] = $productNameList;
        foreach ($productNameList as $i => $iValue) {
            $this->options['query']['ProductNameList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getDomainCode()
 * @method $this withDomainCode($value)
 * @method string getEnviroment()
 * @method $this withEnviroment($value)
 * @method string getCompressEnable()
 * @method $this withCompressEnable($value)
 * @method string getProductName()
 * @method $this withProductName($value)
 */
class GetDomainList extends V20170821Rpc
{
}

/**
 * @method string getDomainCode()
 * @method $this withDomainCode($value)
 * @method string getCompressEnable()
 * @method $this withCompressEnable($value)
 */
class CheckBeforeDeployed extends V20170821Rpc
{
}
