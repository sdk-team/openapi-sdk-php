<?php

namespace AlibabaCloud;

use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Request\RoaRequest;
use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Class RequestResolverTrait
 *
 * @package AlibabaCloud
 * @mixin RoaRequest
 * @mixin RpcRequest
 */
trait RequestResolverTrait
{

    /**
     * @var DataResolver
     */
    private $dataResolver;

    /**
     * RequestResolverTrait constructor.
     *
     * @param array $options
     *
     * @throws ClientException
     */
    public function __construct($options = [])
    {
        parent::__construct($options);
        $this->dataResolver = new DataResolver($this);
        $this->product($this->dataResolver->get('product.name'));
        $this->version($this->dataResolver->get('version.name'));
        $this->action($this->dataResolver->getApiName());
        $this->scheme($this->dataResolver->getScheme());
        $this->method($this->dataResolver->getMethod());
        if ($this instanceof RoaRequest) {
            $this->pathPattern($this->dataResolver->getPattern());
        }
        $this->serviceCode('nlp');
    }

    /**
     * @var array
     */
    public $domainParameters = [];

    /**
     * Magic method for set or get request parameters.
     *
     * @param string $name
     * @param mixed  $arguments
     *
     * @return $this
     * @throws ClientException
     */
    public function __call($name, $arguments)
    {
        if (\strpos($name, 'get') !== false) {
            $parameterName = $this->propertyNameByMethodName($name);

            return $this->__get($parameterName);
        }

        if (\strpos($name, 'with') !== false) {
            $parameterName = $this->propertyNameByMethodName($name, 4);

            return $this->__set($parameterName, $arguments[0]);
        }

        return $this;
    }

    /**
     * @param $name
     *
     * @return mixed|string|null
     * @throws ClientException
     */
    public function __get($name)
    {
        $position = $this->parameterPointer($name);

        return isset($position[$name]) ? $position[$name] : null;
    }

    /**
     * @param $name
     * @param $value
     *
     * @return $this
     * @throws ClientException
     */
    public function __set($name, $value)
    {
        $this->parameterPointer($name)[$name] = $value;

        return $this;
    }

    /**
     * @param $name
     *
     * @return bool
     * @throws ClientException
     */
    public function __isset($name)
    {
        return isset($this->parameterPointer($name)[$name]);
    }

    /**
     * @param $name
     *
     * @return array|mixed
     * @throws ClientException
     */
    private function &parameterPointer($name)
    {
        if (!isset($this->options['query'])) {
            $this->options['query'] = [];
        }
        if (!isset($this->options['headers'])) {
            $this->options['headers'] = [];
        }
        if (!isset($this->options['form_params'])) {
            $this->options['form_params'] = [];
        }

        $parameter = $this->dataResolver->getParameter($name);

        switch ($parameter->tagPosition) {
            case 'Query':
                return $this->options['query'];
                break;
            case 'Header':
                return $this->options['headers'];
                break;
            case 'Path':
                return $this->pathParameters;
                break;
            case 'Domain':
                return $this->domainParameters;
                break;
            case 'Body':
                return $this->options['form_params'];
                break;
            default:
                throw new ClientException(
                    "Unknown position of parameter {$parameter->name}",
                    'SDK.UnknownParameterPosition'
                );
        }
    }

    /**
     * @param string $methodName
     * @param int    $start
     *
     * @return string
     */
    protected function propertyNameByMethodName($methodName, $start = 3)
    {
        return \mb_strcut($methodName, $start);
    }

    /**
     * @return Client\Result\Result
     * @throws ClientException
     * @throws Client\Exception\ServerException
     */
    public function request()
    {
        if (isset($this->options['query']) && $this->options['query'] === []) {
            unset($this->options['query']);
        }
        if (isset($this->options['headers']) && $this->options['headers'] === []) {
            unset($this->options['headers']);
        }
        if (isset($this->options['form_params']) && $this->options['form_params'] === []) {
            unset($this->options['form_params']);
        }

        return parent::request();
    }
}
