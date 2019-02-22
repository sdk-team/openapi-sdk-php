<?php

namespace AlibabaCloud;

/**
 * @property mixed protocol
 * @property mixed method
 */
class IsvProtocol
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
        $this->protocol     = $this->originalData['protocol'];
        $this->method       = $this->originalData['method'];
    }

    /**
     * @return array
     */
    public function getOriginalData()
    {
        return $this->originalData;
    }
}
