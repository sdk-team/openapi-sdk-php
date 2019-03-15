<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Rpc;

/**
 * @method string getJobJson()
 * @method $this withJobJson($value)
 * @method array getCallingNumber()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getSelfHostedCallCenter()
 * @method $this withSelfHostedCallCenter($value)
 * @method string getScenarioId()
 * @method $this withScenarioId($value)
 */
class StartJob extends Rpc
{
    public $product = 'CCC';

    public $version = '2017-07-05';

    public $method = 'POST';

    public $serviceCode = 'ccc';

    /**
     * @param array $callingNumber
     *
     * @return $this
     */
    public function withCallingNumber(array $callingNumber)
    {
        $this->data['CallingNumber'] = $callingNumber;
        foreach ($callingNumber as $i => $iValue) {
            $this->options['query']['CallingNumber.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
