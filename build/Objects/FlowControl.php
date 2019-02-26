<?php

namespace AlibabaCloud\Build\Objects;

/**
 * @property mixed userDefault
 * @property mixed controlUnit
 */
class FlowControl
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
        $this->userDefault  = $this->originalData['userDefault'];
        $this->controlUnit  = $this->originalData['controlUnit'];
    }

    /**
     * @return array
     */
    public function getOriginalData()
    {
        return $this->originalData;
    }
}
