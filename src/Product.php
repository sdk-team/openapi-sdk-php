<?php

namespace AlibabaCloud;

class Product
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $type;

    /**
     * Product constructor.
     *
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;

        CompileArray::dump("生成： {$name}");
        $data = CompileArray::getResponse("/Product/{$name}");

        $this->type   = $data['@attributes']['type'];
        $this->domain = $data['@attributes']['domain'];
        if (isset($data['Versions'])) {
            $this->resolveVersions($data['Versions']['Version']);
        }
        Products::remove($this);
    }

    /**
     * @param $versions
     */
    public function resolveVersions($versions)
    {
        foreach ($versions as $version) {
            if (isset($version['name'])) {
                $versionName = $version['name'];
            } else {
                $versionName = $version['@attributes']['name'];
            }

            new Version($this, $versionName);
        }
    }

    /**
     * @return string
     */
    public function getClassName()
    {
        return self::getProductName($this->name);
    }

    /**
     * @param $name
     *
     * @return string
     */
    public static function getProductName($name)
    {
        $array  = explode('-', $name);
        $string = '';
        foreach ($array as $i) {
            $i[0]   = strtoupper($i[0]);
            $string .= $i;
        }

        $array  = explode('_', $string);
        $string = '';
        foreach ($array as $i) {
            $i[0]   = strtoupper($i[0]);
            $string .= $i;
        }

        return $string;
    }

    /**
     * @return bool
     */
    public function isGenerated()
    {
        return file_exists(__DIR__ . '/' . $this->name);
    }
}
