<?php

namespace AlibabaCloud\Cms\V20150801;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method string getDimTableName
 * @method self withDimTableName
 * @method string getBody
 * @method self withBody
 */
final class BatchPutDimTableData123 extends RpcRequest
{
}

/**
 * @method string getNamespace
 * @method self withNamespace
 * @method string getMetricName
 * @method self withMetricName
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getInterval
 * @method self withInterval
 * @method string getDimensions
 * @method self withDimensions
 * @method Integer getNextToken
 * @method self withNextToken
 * @method Integer getLength
 * @method self withLength
 */
final class GetMetricStatistics extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getMetric
 * @method self withMetric
 * @method string getPeriod
 * @method self withPeriod
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getDimensions
 * @method self withDimensions
 * @method string getExtend
 * @method self withExtend
 * @method string getFilter
 * @method self withFilter
 */
final class BatchQueryMetric extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getMetric
 * @method self withMetric
 * @method string getPeriod
 * @method self withPeriod
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getDimensions
 * @method self withDimensions
 * @method string getTargetPeriod
 * @method self withTargetPeriod
 * @method string getFunction
 * @method self withFunction
 * @method string getExtend
 * @method self withExtend
 */
final class QueryStatistics extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getMetric
 * @method self withMetric
 * @method string getPeriod
 * @method self withPeriod
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getDimensions
 * @method self withDimensions
 * @method string getValueKey
 * @method self withValueKey
 * @method string getTop
 * @method self withTop
 * @method string getExtend
 * @method self withExtend
 */
final class QueryMetricTopN extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getMetric
 * @method self withMetric
 * @method string getPeriod
 * @method self withPeriod
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getDimensions
 * @method self withDimensions
 * @method string getPage
 * @method self withPage
 * @method string getLength
 * @method self withLength
 * @method string getExtend
 * @method self withExtend
 */
final class QueryMetric extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getMetric
 * @method self withMetric
 * @method string getPeriod
 * @method self withPeriod
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getDimensions
 * @method self withDimensions
 * @method string getPage
 * @method self withPage
 * @method string getLength
 * @method self withLength
 * @method string getExtend
 * @method self withExtend
 * @method string getFilter
 * @method self withFilter
 */
final class QueryListMetric extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getMetric
 * @method self withMetric
 * @method string getPeriod
 * @method self withPeriod
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getDimensions
 * @method self withDimensions
 * @method string getTargetPeriod
 * @method self withTargetPeriod
 * @method string getColumns
 * @method self withColumns
 * @method string getExtend
 * @method self withExtend
 */
final class QueryIncremental extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getMetric
 * @method self withMetric
 * @method string getPeriod
 * @method self withPeriod
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getDimensions
 * @method self withDimensions
 */
final class DescribeMetric extends RpcRequest
{
}

/**
 * @method string getProjectName
 * @method self withProjectName
 */
final class StopProject extends RpcRequest
{
}

/**
 * @method string getProjectName
 * @method self withProjectName
 */
final class StatusProject extends RpcRequest
{
}

/**
 * @method string getProjectName
 * @method self withProjectName
 */
final class StartProject extends RpcRequest
{
}

/**
 * @method string getProjectName
 * @method self withProjectName
 * @method string getSqls
 * @method self withSqls
 * @method Integer getIsPublic
 * @method self withIsPublic
 */
final class BatchCreateSqlMetrics extends RpcRequest
{
}

/**
 * @method string getProjectName
 * @method self withProjectName
 * @method string getMetricStreamName
 * @method self withMetricStreamName
 * @method string getMetricStream
 * @method self withMetricStream
 */
final class UpdateMetricStream extends RpcRequest
{
}

/**
 * @method string getProjectName
 * @method self withProjectName
 * @method string getMetricStreamName
 * @method self withMetricStreamName
 */
final class StopMetricStream extends RpcRequest
{
}

/**
 * @method string getProjectName
 * @method self withProjectName
 * @method string getMetricStreamName
 * @method self withMetricStreamName
 */
final class GetMetricStreamStatus extends RpcRequest
{
}

/**
 * @method string getProjectName
 * @method self withProjectName
 * @method string getMetricStreamName
 * @method self withMetricStreamName
 */
final class StartMetricStream extends RpcRequest
{
}

/**
 * @method string getProjectName
 * @method self withProjectName
 * @method string getMetricStreamName
 * @method self withMetricStreamName
 */
final class GetMetricStreamMeta extends RpcRequest
{
}

/**
 * @method string getProjectName
 * @method self withProjectName
 * @method string getMetricStreamName
 * @method self withMetricStreamName
 * @method Long getPage
 * @method self withPage
 * @method Long getPageSize
 * @method self withPageSize
 */
final class ListMetricStream extends RpcRequest
{
}

/**
 * @method string getProjectName
 * @method self withProjectName
 * @method string getMetricStreamName
 * @method self withMetricStreamName
 */
final class GetMetricStream extends RpcRequest
{
}

/**
 * @method string getProjectName
 * @method self withProjectName
 * @method string getMetricStreamName
 * @method self withMetricStreamName
 */
final class DeleteMetricStream extends RpcRequest
{
}

/**
 * @method string getProjectName
 * @method self withProjectName
 * @method string getMetricStream
 * @method self withMetricStream
 */
final class CreateMetricStream extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getMetric
 * @method self withMetric
 * @method string getPeriod
 * @method self withPeriod
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getDimensions
 * @method self withDimensions
 * @method string getPage
 * @method self withPage
 * @method string getLength
 * @method self withLength
 * @method string getExtend
 * @method self withExtend
 */
final class DescribeMetricDatum extends RpcRequest
{
}

/**
 * @method string getDimTableName
 * @method self withDimTableName
 * @method string getKey
 * @method self withKey
 */
final class ListDimTableData extends RpcRequest
{
}

/**
 * @method string getDimTableName
 * @method self withDimTableName
 * @method string getBody
 * @method self withBody
 */
final class PutDimTableData extends RpcRequest
{
}

/**
 * @method string getProjectName
 * @method self withProjectName
 * @method string getProject
 * @method self withProject
 */
final class UpdateProject extends RpcRequest
{
}

/**
 * @method string getProjectOwner
 * @method self withProjectOwner
 * @method Long getPage
 * @method self withPage
 * @method Long getPageSize
 * @method self withPageSize
 */
final class ListProject extends RpcRequest
{
}

/**
 * @method string getProjectName
 * @method self withProjectName
 */
final class GetProject extends RpcRequest
{
}

/**
 * @method string getProjectName
 * @method self withProjectName
 */
final class DeleteProject extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 */
final class CreateProject extends RpcRequest
{
}

/**
 * @method string getProjectName
 * @method self withProjectName
 * @method string getMetricStreamName
 * @method self withMetricStreamName
 * @method string getMetricName
 * @method self withMetricName
 * @method string getMetrics
 * @method self withMetrics
 */
final class UpdateMetrics extends RpcRequest
{
}

/**
 * @method string getProjectName
 * @method self withProjectName
 * @method string getMetricName
 * @method self withMetricName
 * @method string getSql
 * @method self withSql
 * @method Integer getIsPublic
 * @method self withIsPublic
 */
final class updateSQLMetrics extends RpcRequest
{
}

/**
 * @method string getProjectName
 * @method self withProjectName
 * @method string getMetricName
 * @method self withMetricName
 * @method Long getPage
 * @method self withPage
 * @method Long getPageSize
 * @method self withPageSize
 */
final class ListSQLMetrics extends RpcRequest
{
}

/**
 * @method string getProjectName
 * @method self withProjectName
 * @method string getMetricName
 * @method self withMetricName
 */
final class GetSQLMetrics extends RpcRequest
{
}

/**
 * @method string getProjectName
 * @method self withProjectName
 * @method string getSql
 * @method self withSql
 * @method Integer getIsPublic
 * @method self withIsPublic
 */
final class CreateSQLMetrics extends RpcRequest
{
}

/**
 * @method string getProjectName
 * @method self withProjectName
 * @method string getMetricStreamName
 * @method self withMetricStreamName
 * @method string getMetricName
 * @method self withMetricName
 * @method Long getPage
 * @method self withPage
 * @method Long getPageSize
 * @method self withPageSize
 */
final class ListMetricsPlan extends RpcRequest
{
}

/**
 * @method string getProjectName
 * @method self withProjectName
 * @method string getMetricName
 * @method self withMetricName
 */
final class GetMetricsMeta extends RpcRequest
{
}

/**
 * @method string getProjectName
 * @method self withProjectName
 * @method string getMetricStreamName
 * @method self withMetricStreamName
 * @method string getMetricName
 * @method self withMetricName
 * @method Long getPage
 * @method self withPage
 * @method Long getPageSize
 * @method self withPageSize
 */
final class ListMetrics extends RpcRequest
{
}

/**
 * @method string getProjectName
 * @method self withProjectName
 * @method string getMetricStreamName
 * @method self withMetricStreamName
 * @method string getMetricName
 * @method self withMetricName
 */
final class GetMetrics extends RpcRequest
{
}

/**
 * @method string getProjectName
 * @method self withProjectName
 * @method string getMetricName
 * @method self withMetricName
 */
final class DeleteMetrics extends RpcRequest
{
}

/**
 * @method string getProjectName
 * @method self withProjectName
 * @method string getMetricStreamName
 * @method self withMetricStreamName
 * @method string getMetrics
 * @method self withMetrics
 */
final class CreateMetrics extends RpcRequest
{
}

/**
 * @method string getProjectName
 * @method self withProjectName
 * @method string getMetricStreamName
 * @method self withMetricStreamName
 * @method string getSqls
 * @method self withSqls
 */
final class BatchCreateMetrics extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getMetric
 * @method self withMetric
 * @method string getPeriod
 * @method self withPeriod
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getDimensions
 * @method self withDimensions
 * @method string getPage
 * @method self withPage
 * @method string getLength
 * @method self withLength
 */
final class DescribeMetricList extends RpcRequest
{
}

/**
 * @method string getDimTableName
 * @method self withDimTableName
 * @method string getDimTable
 * @method self withDimTable
 */
final class UpdateDimTable extends RpcRequest
{
}

/**
 * @method string getDimTableName
 * @method self withDimTableName
 * @method Long getPage
 * @method self withPage
 * @method Long getPageSize
 * @method self withPageSize
 */
final class ListDimTable extends RpcRequest
{
}

/**
 * @method string getDimTableName
 * @method self withDimTableName
 */
final class GetDimTable extends RpcRequest
{
}

/**
 * @method string getDimTableName
 * @method self withDimTableName
 */
final class DeleteDimTable extends RpcRequest
{
}

/**
 * @method string getDimTable
 * @method self withDimTable
 */
final class CreateDimTable extends RpcRequest
{
}

/**
 * @method string getDimTableName
 * @method self withDimTableName
 * @method string getKey
 * @method self withKey
 */
final class DeleteDimTableData extends RpcRequest
{
}

/**
 * @method string getDimTableName
 * @method self withDimTableName
 * @method string getBody
 * @method self withBody
 */
final class BatchPutDimTableData extends RpcRequest
{
}
