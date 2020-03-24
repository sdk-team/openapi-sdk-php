<?php

namespace AlibabaCloud\EcsDemo\V20190626;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CancelInstance cancelInstance(array $options = [])
 */
class EcsDemoApiResolver extends ApiResolver
{
}

class Roa extends \AlibabaCloud\Client\Resolver\Roa
{
    /** @var string */
    public $product = 'EcsDemo';

    /** @var string */
    public $version = '2019-06-26';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getInstanceId()
 */
class CancelInstance extends Roa
{
    /** @var string */
    public $pathPattern = '/dev/mvp/cancel/instance';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['query']['InstanceId'] = $value;

        return $this;
    }
}
