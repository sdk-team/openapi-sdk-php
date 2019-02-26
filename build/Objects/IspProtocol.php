<?php

namespace AlibabaCloud\Build\Objects;

/**
 * @property mixed version
 * @property mixed protocol
 * @property mixed interface
 * @property mixed method
 * @property mixed group
 * @property mixed invokeType
 * @property mixed timeout
 */
class IspProtocol
{

    /**
     * Parameter constructor.
     *
     * @param $originalData
     */
    public function __construct($originalData)
    {
        $this->version    = $originalData['version'];
        $this->protocol   = $originalData['protocol'];
        $this->interface  = $originalData['interface'];
        $this->method     = $originalData['method'];
        $this->group      = $originalData['group'];
        $this->invokeType = $originalData['invokeType'];
        $this->timeout    = $originalData['timeout'];
    }
}
