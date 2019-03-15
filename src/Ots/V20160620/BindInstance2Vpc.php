<?php

namespace AlibabaCloud\Ots\V20160620;

use AlibabaCloud\Rpc;

/**
 * @method string getAccessKeyId()
 * @method string getInstanceVpcName()
 * @method $this withInstanceVpcName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getVirtualSwitchId()
 * @method $this withVirtualSwitchId($value)
 * @method string getRegionNo()
 * @method $this withRegionNo($value)
 * @method string getNetwork()
 * @method $this withNetwork($value)
 */
class BindInstance2Vpc extends Rpc
{
    public $product = 'Ots';

    public $version = '2016-06-20';

    public $method = 'POST';

    public $serviceCode = 'ots';

    /**
     * @param string $accessKeyId
     *
     * @return $this
     */
    public function withAccessKeyId($accessKeyId)
    {
        $this->data['AccessKeyId'] = $accessKeyId;
        $this->options['query']['access_key_id'] = $accessKeyId;

        return $this;
    }
}
