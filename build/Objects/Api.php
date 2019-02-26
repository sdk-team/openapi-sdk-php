<?php

namespace AlibabaCloud\Build\Objects;

use AlibabaCloud\Build\Meta;

/**
 * Class Api
 *
 * @package AlibabaCloud
 */
class Api
{

    /**
     * @var array
     */
    private $originalData;
    /**
     * @var array
     */
    public $attributes;
    /**
     * @var array
     */
    public $parameters;
    /**
     * @var array
     */
    public $IspProtocol;
    /**
     * @var array
     */
    public $IsvProtocol;
    /**
     * @var array
     */
    public $FlowControl;
    /**
     * @var string
     */
    public $name;

    /**
     * Product constructor.
     *
     * @param string $productName
     * @param string $versionName
     * @param string $name
     */
    public function __construct($productName, $versionName, $name)
    {
        $this->name         = $name;
        $this->originalData = Meta::getApi($productName, $versionName, $name)->toArray();

        if (isset($this->originalData['@attributes'])) {
            $this->attributes = $this->originalData['@attributes'];
        } elseif ($this->originalData === []) {
            dump('没有获得接口数据');
        } else {
            dump($this->originalData);
            exit;
        }

        if (isset($this->originalData['Parameters'])) {
            $this->resolveParameters($this->originalData['Parameters']);
        }

        if (isset($this->originalData['IspProtocol'])) {
            $this->resolveIspProtocol($this->originalData['IspProtocol']);
        }

        if (isset($this->originalData['IsvProtocol'])) {
            $this->resolveIsvProtocol($this->originalData['IsvProtocol']);
        }

        if (isset($this->originalData['FlowControl'])) {
            $this->resolveFlowControl($this->originalData['FlowControl']);
        }
    }

    /**
     * @param $parameters
     */
    public function resolveParameters($parameters)
    {
        if (isset($parameters['Parameter'])) {
            $this->resolveSingelParameter($parameters['Parameter']);
        }

        if (isset($parameters['ParameterGroup'])) {
            if (isset($parameters['ParameterGroup']['Parameter'])) {
                // Only one
                $this->resolveSingelParameter($parameters['ParameterGroup']['Parameter']);
            } else {
                // Many
                foreach ($parameters['ParameterGroup'] as $parameter) {
                    if (isset($parameter['Parameter'])) {
                        $this->resolveSingelParameter($parameter['Parameter']);
                    } else {
                        dump($parameters['ParameterGroup']);
                        exit;
                    }
                }
            }
        }
    }

    /**
     * @param $parameters
     */
    private function resolveSingelParameter($parameters)
    {
        if (isset($parameters['@attributes'])) {
            $parameterModel = $parameters['@attributes'];

            $this->putParameter($parameterModel['tagName'], $parameterModel);

            return;
        }
        foreach ($parameters as $parameter) {
            if (isset($parameter['@attributes'])) {
                // 可能会有多个参数
                $parameterModel = $parameter['@attributes'];
            } elseif (isset($parameter['tagName'])) {
                // 只有一个参数的时候循环key就是@attributes
                $parameterModel = $parameter;
            } else {
                dump('解析接口参数错误 ' . __FILE__ . ':' . __LINE__);
                dump($parameters);
                exit;
            }

            $this->putParameter($parameterModel['tagName'], $parameterModel);
        }
    }

    /**
     * @param $name
     * @param $attributes
     */
    private function putParameter($name, $attributes)
    {
        //$this->changeKeyName($attributes,
        //                     [
        //                         'name'        => 'n',
        //                         'tagName'     => 'tag',
        //                         'type'        => 't',
        //                         'required'    => 'r',
        //                         'tagPosition' => 'p',
        //                         'checkBlank'  => 'c',
        //                     ]);

        $removeParameters = [
            'AccessKeyId',
            'RegionId',
            'Action',
        ];
        $acceptPositions  = [
            'Query',
            'Header',
            'Path',
            'Domain',
            'Body',
        ];
        if (isset($attributes['tagName']) && in_array($attributes['tagName'], $removeParameters, true)) {
            return;
        }
        if (isset($attributes['tagPosition']) && in_array($attributes['tagPosition'], $acceptPositions, true)) {
            $tagName                                 = self::formatTagName($name);
            $this->parameters['Parameter'][$tagName] = $attributes;
        }
    }

    /**
     * @param $name
     *
     * @return mixed
     */
    public static function formatTagName($name)
    {
        $name = str_replace(['-', '.', '_'], '', $name);

        return $name;
    }

    /**
     * @param array $attributes
     * @param array $keys
     */
    private function changeKeyName(array &$attributes, array $keys)
    {
        foreach ($keys as $key => $newKey) {
            if (isset($attributes[$key])) {
                $attributes[$newKey] = $attributes[$key];
                unset($attributes[$key]);
            }
        }
    }

    /**
     * @return array
     */
    public function getOriginalData()
    {
        return $this->originalData;
    }

    /**
     * @param $parameters
     */
    public function resolveIspProtocol($parameters)
    {
        if (isset($parameters['@attributes'])) {
            $this->IspProtocol = $parameters['@attributes'];
        } elseif (isset($parameters['interface'])) {
            $this->IspProtocol = $parameters;
        } else {
            dump('没有找到 IspProtocol', $this->originalData);

            exit;
        }
    }

    /**
     * @param $parameters
     */
    public function resolveIsvProtocol($parameters)
    {
        if (isset($parameters['@attributes'])) {
            $this->IsvProtocol = $parameters['@attributes'];
        } elseif (isset($parameters['protocol'])) {
            $this->IsvProtocol = $parameters;
        } else {
            dump('没有找到 IsvProtocol', $this->originalData);
            exit;
        }
    }

    /**
     * @param $parameters
     */
    public function resolveFlowControl($parameters)
    {
        if (isset($parameters['@attributes'])) {
            $this->FlowControl = $parameters['@attributes'];
        } elseif (isset($parameters['userDefault'])) {
            $this->FlowControl = $parameters;
        } else {
            dump('没有找到 FlowControl', $this->originalData);
            exit;
        }
    }
}
