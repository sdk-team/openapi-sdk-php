<?php

namespace AlibabaCloud\SDK\V20180101;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method Demo demo(array $options = [])
 */
class SDKApiResolver extends ApiResolver
{
}

class Roa extends \AlibabaCloud\Client\Resolver\Roa
{
    /** @var string */
    public $product = 'SDK';

    /** @var string */
    public $version = '2018-01-01';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getPrice()
 * @method string getName()
 * @method array getContentList()
 */
class Demo extends Roa
{
    /** @var string */
    public $pathPattern = '/helloworld';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPrice($value)
    {
        $this->data['Price'] = $value;
        $this->options['query']['Price'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }

    /**
     * @param array $contentList
     *
     * @return $this
     */
	public function withContentList(array $contentList)
	{
	    $this->data['ContentList'] = $contentList;
		foreach ($contentList as $depth1 => $depth1Value) {
			if(isset($depth1Value['Tag'])){
				$this->options['form_params']['ContentList.' . ($depth1 + 1) . '.Tag'] = $depth1Value['Tag'];
			}
			foreach ($depth1Value['Letters'] as $i => $iValue) {
				$this->options['form_params']['ContentList.' . ($depth1 + 1) . '.Letters.' . ($i + 1)] = $iValue;
			}
		}

		return $this;
    }
}
