<?php

namespace AlibabaCloud;

class Parameter
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $tagName;
    /**
     * @var string
     */
    public $type;
    /**
     * @var string
     */
    public $required;
    /**
     * @var string
     */
    public $tagPosition;
    /**
     * @var string
     */
    public $checkBlank;
    /**
     * @var array
     */
    private $originalData;

    /**
     * Parameter constructor.
     *
     * @param $originalData
     */
    public function __construct($originalData)
    {
        $this->originalData = $originalData;
        $this->name         = $this->originalData['name'];
        $this->tagName      = $this->originalData['tagName'];
        $this->type         = $this->originalData['type'];
        $this->required     = $this->originalData['required'];
        $this->tagPosition  = $this->originalData['tagPosition'];
        $this->checkBlank   = $this->originalData['checkBlank'];
    }

    /**
     * @return array
     */
    public function getOriginalData()
    {
        return $this->originalData;
    }
}
