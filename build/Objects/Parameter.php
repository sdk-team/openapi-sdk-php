<?php

namespace AlibabaCloud\Build\Objects;

/**
 * @property mixed name
 * @property mixed tagName
 * @property mixed type
 * @property mixed required
 * @property mixed tagPosition
 * @property mixed checkBlank
 * @property mixed value
 * @property mixed visibility
 */
class Parameter
{
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
        $this->name         = $originalData['name'];
        $this->tagName      = $originalData['tagName'];
        $this->type         = $originalData['type'];
        $this->required     = $originalData['required'];
        $this->tagPosition  = $originalData['tagPosition'];
        $this->checkBlank   = $originalData['checkBlank'];
        $this->value        = $originalData['value'];
        $this->visibility   = $originalData['visibility'];
    }

    /**
     * @return array
     */
    public function getOriginalData()
    {
        return $this->originalData;
    }
}
