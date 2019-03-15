<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Rpc;

/**
 * @method array getEventId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEventPublishTimeEnd()
 * @method array getInstanceEventType()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getNotBeforeStart()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getEventPublishTimeStart()
 * @method array getInstanceId()
 * @method string getNotBeforeEnd()
 * @method string getHealthStatus()
 * @method $this withHealthStatus($value)
 * @method string getEventType()
 * @method $this withEventType($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeInstancesFullStatus extends Rpc
{
    public $product = 'Ecs';

    public $version = '2014-05-26';

    public $method = 'POST';

    public $serviceCode = 'ecs';

    /**
     * @param array $eventId
     *
     * @return $this
     */
    public function withEventId(array $eventId)
    {
        $this->data['EventId'] = $eventId;
        foreach ($eventId as $i => $iValue) {
            $this->options['query']['EventId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $eventPublishTimeEnd
     *
     * @return $this
     */
    public function withEventPublishTimeEnd($eventPublishTimeEnd)
    {
        $this->data['EventPublishTimeEnd'] = $eventPublishTimeEnd;
        $this->options['query']['EventPublishTime.End'] = $eventPublishTimeEnd;

        return $this;
    }

    /**
     * @param array $instanceEventType
     *
     * @return $this
     */
    public function withInstanceEventType(array $instanceEventType)
    {
        $this->data['InstanceEventType'] = $instanceEventType;
        foreach ($instanceEventType as $i => $iValue) {
            $this->options['query']['InstanceEventType.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $notBeforeStart
     *
     * @return $this
     */
    public function withNotBeforeStart($notBeforeStart)
    {
        $this->data['NotBeforeStart'] = $notBeforeStart;
        $this->options['query']['NotBefore.Start'] = $notBeforeStart;

        return $this;
    }

    /**
     * @param string $eventPublishTimeStart
     *
     * @return $this
     */
    public function withEventPublishTimeStart($eventPublishTimeStart)
    {
        $this->data['EventPublishTimeStart'] = $eventPublishTimeStart;
        $this->options['query']['EventPublishTime.Start'] = $eventPublishTimeStart;

        return $this;
    }

    /**
     * @param array $instanceId
     *
     * @return $this
     */
    public function withInstanceId(array $instanceId)
    {
        $this->data['InstanceId'] = $instanceId;
        foreach ($instanceId as $i => $iValue) {
            $this->options['query']['InstanceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $notBeforeEnd
     *
     * @return $this
     */
    public function withNotBeforeEnd($notBeforeEnd)
    {
        $this->data['NotBeforeEnd'] = $notBeforeEnd;
        $this->options['query']['NotBefore.End'] = $notBeforeEnd;

        return $this;
    }
}
