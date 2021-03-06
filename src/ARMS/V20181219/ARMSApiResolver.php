<?php

namespace AlibabaCloud\ARMS\V20181219;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method GetTrace getTrace(array $options = [])
 * @method GetServices getServices(array $options = [])
 * @method SearchTraces searchTraces(array $options = [])
 * @method MetricQuery metricQuery(array $options = [])
 * @method CreateApp createApp(array $options = [])
 * @method DeleteApp deleteApp(array $options = [])
 * @method ARMSQueryDataSet aRMSQueryDataSet(array $options = [])
 */
class ARMSApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'ARMS';

    /** @var string */
    public $version = '2018-12-19';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'arms';
}

/**
 * @method string getTraceID()
 * @method $this withTraceID($value)
 * @method string getAppType()
 * @method $this withAppType($value)
 */
class GetTrace extends Rpc
{
}

/**
 * @method string getAppType()
 * @method $this withAppType($value)
 */
class GetServices extends Rpc
{
}

/**
 * @method string getTag1()
 * @method $this withTag1($value)
 * @method string getAppType()
 * @method $this withAppType($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getMinDuration()
 * @method $this withMinDuration($value)
 * @method string getTag2()
 * @method $this withTag2($value)
 * @method string getOperationName()
 * @method $this withOperationName($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 */
class SearchTraces extends Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOrderBy()
 * @method $this withOrderBy($value)
 * @method array getFilters()
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getIintervalInSec()
 * @method $this withIintervalInSec($value)
 * @method array getMeasures()
 * @method string getMetric()
 * @method $this withMetric($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method array getDimensions()
 * @method string getOrder()
 * @method $this withOrder($value)
 */
class MetricQuery extends Rpc
{

    /**
     * @param array $filters
     *
     * @return $this
     */
    public function withFilters(array $filters)
    {
        $this->data['Filters'] = $filters;
        foreach ($filters as $depth1 => $depth1Value) {
            $this->options['query']['Filters.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
            $this->options['query']['Filters.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
        }

        return $this;
    }

    /**
     * @param array $measures
     *
     * @return $this
     */
    public function withMeasures(array $measures)
    {
        $this->data['Measures'] = $measures;
        foreach ($measures as $i => $iValue) {
            $this->options['query']['Measures.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $dimensions
     *
     * @return $this
     */
    public function withDimensions(array $dimensions)
    {
        $this->data['Dimensions'] = $dimensions;
        foreach ($dimensions as $i => $iValue) {
            $this->options['query']['Dimensions.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getSource()
 * @method $this withSource($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getConfig()
 * @method $this withConfig($value)
 */
class CreateApp extends Rpc
{
}

/**
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getType()
 * @method $this withType($value)
 */
class DeleteApp extends Rpc
{
}

/**
 * @method string getDateStr()
 * @method $this withDateStr($value)
 * @method string getMinTime()
 * @method $this withMinTime($value)
 * @method string getReduceTail()
 * @method $this withReduceTail($value)
 * @method string getMaxTime()
 * @method $this withMaxTime($value)
 * @method array getOptionalDims()
 * @method array getMeasures()
 * @method string getIntervalInSec()
 * @method $this withIntervalInSec($value)
 * @method string getIsDrillDown()
 * @method $this withIsDrillDown($value)
 * @method string getHungryMode()
 * @method $this withHungryMode($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getOrderByKey()
 * @method $this withOrderByKey($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method array getRequiredDims()
 * @method string getDatasetId()
 * @method $this withDatasetId($value)
 * @method array getDimensions()
 */
class ARMSQueryDataSet extends Rpc
{

    /**
     * @param array $optionalDims
     *
     * @return $this
     */
    public function withOptionalDims(array $optionalDims)
    {
        $this->data['OptionalDims'] = $optionalDims;
        foreach ($optionalDims as $depth1 => $depth1Value) {
            $this->options['query']['OptionalDims.' . ($depth1 + 1) . '.Type'] = $depth1Value['Type'];
            $this->options['query']['OptionalDims.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
            $this->options['query']['OptionalDims.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
        }

        return $this;
    }

    /**
     * @param array $measures
     *
     * @return $this
     */
    public function withMeasures(array $measures)
    {
        $this->data['Measures'] = $measures;
        foreach ($measures as $i => $iValue) {
            $this->options['query']['Measures.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $requiredDims
     *
     * @return $this
     */
    public function withRequiredDims(array $requiredDims)
    {
        $this->data['RequiredDims'] = $requiredDims;
        foreach ($requiredDims as $depth1 => $depth1Value) {
            $this->options['query']['RequiredDims.' . ($depth1 + 1) . '.Type'] = $depth1Value['Type'];
            $this->options['query']['RequiredDims.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
            $this->options['query']['RequiredDims.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
        }

        return $this;
    }

    /**
     * @param array $dimensions
     *
     * @return $this
     */
    public function withDimensions(array $dimensions)
    {
        $this->data['Dimensions'] = $dimensions;
        foreach ($dimensions as $depth1 => $depth1Value) {
            $this->options['query']['Dimensions.' . ($depth1 + 1) . '.Type'] = $depth1Value['Type'];
            $this->options['query']['Dimensions.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
            $this->options['query']['Dimensions.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
        }

        return $this;
    }
}
