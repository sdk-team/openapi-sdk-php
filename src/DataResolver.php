<?php

namespace AlibabaCloud;

use Adbar\Dot;
use AlibabaCloud\Build\Objects\Parameter;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Request\Request;
use ReflectionObject;

class DataResolver extends Dot
{
    /**
     * @var Request
     */
    private $api;

    /**
     * DataResolver constructor.
     *
     * @param $api
     *
     * @throws ClientException
     */
    public function __construct($api)
    {
        $this->api = $api;
        $file      = $this->getFile();

        if (!file_exists($file)) {
            throw new ClientException('No data file was found', 'SDK.DataNotFound');
        }

        parent::__construct(require_once $file);
    }

    /**
     * @return string
     */
    public function getShortName()
    {
        return $this->getReflectionObject()->getShortName();
    }

    /**
     * @return mixed
     * @throws ClientException
     */
    private function getApi()
    {
        $data    = $this->items;
        $apiName = $this->getShortName();
        if (isset($data['api'][$apiName])) {
            return $data['api'][$apiName];
        }
        throw new ClientException("API $apiName was not found", 'SDK.ApiNotFound');
    }

    /**
     * @return mixed
     */
    public function getApiName()
    {
        $apiName = $this->getShortName();

        return $this->get("api.$apiName.attributes.name");
    }

    /**
     * @return mixed
     */
    public function getPattern()
    {
        $apiName = $this->getShortName();

        return $this->get("api.$apiName.IsvProtocol.pattern");
    }


    /**
     * @return mixed
     */
    public function getMethod()
    {
        $apiName = $this->getShortName();

        return $this->get("api.$apiName.IsvProtocol.method");
    }

    /**
     * @return mixed
     */
    public function getScheme()
    {
        $apiName = $this->getShortName();

        return $this->get("api.$apiName.IsvProtocol.protocol");
    }


    /**
     * @return string
     */
    private function getFile()
    {
        return dirname($this->getReflectionObject()->getFileName()) . '/Data.php';
    }

    /**
     * @param $name
     *
     * @return Parameter
     * @throws ClientException
     */
    public function getParameter($name)
    {
        $api = $this->getApi();

        if (isset($api['parameters']['Parameter'][$name])) {
            return new Parameter($api['parameters']['Parameter'][$name]);
        }
        throw new ClientException("Parameter $name was not found", 'SDK.ParameterNotFound');
    }

    /**
     * @return ReflectionObject
     */
    private function getReflectionObject()
    {
        return new ReflectionObject($this->api);
    }
}
