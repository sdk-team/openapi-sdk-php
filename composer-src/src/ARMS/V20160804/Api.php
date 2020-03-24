<?php

namespace AlibabaCloud\ARMS\V20160804;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

/**
 * Resolve Api based on the method name.
 *
 * @method ArmsQueryDataSet armsQueryDataSet(array $options = [])
 */
class ARMSApiResolver
{
    use ApiResolverTrait;
}

class V20160804Rpc extends Rpc
{
    /** @var string */
    public $product = 'ARMS';

    /** @var string */
    public $version = '2016-08-04';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getDateStr()
 * @method $this withDateStr($value)
 * @method string getMinTime()
 * @method $this withMinTime($value)
 * @method string getMaxTime()
 * @method $this withMaxTime($value)
 * @method array getMeasures()
 * @method string getIntervalInSec()
 * @method $this withIntervalInSec($value)
 * @method string getDatasetId()
 * @method $this withDatasetId($value)
 * @method array getDimensions()
 */
class ArmsQueryDataSet extends V20160804Rpc
{

    /**
     * @param array $measures
     *
     * @return $this
     */
    public function withMeasures(array $measures)
    {
        $this->data['Measures'] = $measures;
        foreach ($measures as $i => $iValue) {
            $this->options['query']['Measures.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $dimensions
     *
     * @return $this
     */
    public function withDimensions(array $dimensions)
    {
        $this->data['Dimensions'] = $dimensions;
        foreach ($dimensions as $depth1 => $depth1Value) {
            $this->options['query']['Dimensions.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
            $this->options['query']['Dimensions.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
        }

        return $this;
    }
}
