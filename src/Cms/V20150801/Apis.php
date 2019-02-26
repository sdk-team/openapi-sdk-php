<?php

namespace AlibabaCloud\Cms\V20150801;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method BatchPutDimTableData123 batchPutDimTableData123($options = [])
 * @method GetMetricStatistics getMetricStatistics($options = [])
 * @method BatchQueryMetric batchQueryMetric($options = [])
 * @method QueryStatistics queryStatistics($options = [])
 * @method QueryMetricTopN queryMetricTopN($options = [])
 * @method QueryMetric queryMetric($options = [])
 * @method QueryListMetric queryListMetric($options = [])
 * @method QueryIncremental queryIncremental($options = [])
 * @method DescribeMetric describeMetric($options = [])
 * @method StopProject stopProject($options = [])
 * @method StatusProject statusProject($options = [])
 * @method StartProject startProject($options = [])
 * @method BatchCreateSqlMetrics batchCreateSqlMetrics($options = [])
 * @method UpdateMetricStream updateMetricStream($options = [])
 * @method StopMetricStream stopMetricStream($options = [])
 * @method GetMetricStreamStatus getMetricStreamStatus($options = [])
 * @method StartMetricStream startMetricStream($options = [])
 * @method GetMetricStreamMeta getMetricStreamMeta($options = [])
 * @method ListMetricStream listMetricStream($options = [])
 * @method GetMetricStream getMetricStream($options = [])
 * @method DeleteMetricStream deleteMetricStream($options = [])
 * @method CreateMetricStream createMetricStream($options = [])
 * @method DescribeMetricDatum describeMetricDatum($options = [])
 * @method ListDimTableData listDimTableData($options = [])
 * @method PutDimTableData putDimTableData($options = [])
 * @method UpdateProject updateProject($options = [])
 * @method ListProject listProject($options = [])
 * @method GetProject getProject($options = [])
 * @method DeleteProject deleteProject($options = [])
 * @method CreateProject createProject($options = [])
 * @method UpdateMetrics updateMetrics($options = [])
 * @method updateSQLMetrics updateSQLMetrics($options = [])
 * @method ListSQLMetrics listSQLMetrics($options = [])
 * @method GetSQLMetrics getSQLMetrics($options = [])
 * @method CreateSQLMetrics createSQLMetrics($options = [])
 * @method ListMetricsPlan listMetricsPlan($options = [])
 * @method GetMetricsMeta getMetricsMeta($options = [])
 * @method ListMetrics listMetrics($options = [])
 * @method GetMetrics getMetrics($options = [])
 * @method DeleteMetrics deleteMetrics($options = [])
 * @method CreateMetrics createMetrics($options = [])
 * @method BatchCreateMetrics batchCreateMetrics($options = [])
 * @method DescribeMetricList describeMetricList($options = [])
 * @method UpdateDimTable updateDimTable($options = [])
 * @method ListDimTable listDimTable($options = [])
 * @method GetDimTable getDimTable($options = [])
 * @method DeleteDimTable deleteDimTable($options = [])
 * @method CreateDimTable createDimTable($options = [])
 * @method DeleteDimTableData deleteDimTableData($options = [])
 * @method BatchPutDimTableData batchPutDimTableData($options = [])
 */
class V20150801
{
    use ApiResolverTrait;
}

/**
 * @method string getDimTableName
 * @method self withDimTableName(string $dimTableName)
 * @method string getBody
 * @method self withBody(string $body)
 */
class BatchPutDimTableData123 extends Roa
{
    use R;
}

/**
 * @method string getNamespace
 * @method self withNamespace(string $namespace)
 * @method string getMetricName
 * @method self withMetricName(string $metricName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getInterval
 * @method self withInterval(string $interval)
 * @method string getDimensions
 * @method self withDimensions(string $dimensions)
 * @method Integer getNextToken
 * @method self withNextToken(Integer $nextToken)
 * @method Integer getLength
 * @method self withLength(Integer $length)
 */
class GetMetricStatistics extends Roa
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getMetric
 * @method self withMetric(string $metric)
 * @method string getPeriod
 * @method self withPeriod(string $period)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getDimensions
 * @method self withDimensions(string $dimensions)
 * @method string getExtend
 * @method self withExtend(string $extend)
 * @method string getFilter
 * @method self withFilter(string $filter)
 */
class BatchQueryMetric extends Roa
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getMetric
 * @method self withMetric(string $metric)
 * @method string getPeriod
 * @method self withPeriod(string $period)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getDimensions
 * @method self withDimensions(string $dimensions)
 * @method string getTargetPeriod
 * @method self withTargetPeriod(string $targetPeriod)
 * @method string getFunction
 * @method self withFunction(string $function)
 * @method string getExtend
 * @method self withExtend(string $extend)
 */
class QueryStatistics extends Roa
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getMetric
 * @method self withMetric(string $metric)
 * @method string getPeriod
 * @method self withPeriod(string $period)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getDimensions
 * @method self withDimensions(string $dimensions)
 * @method string getValueKey
 * @method self withValueKey(string $valueKey)
 * @method string getTop
 * @method self withTop(string $top)
 * @method string getExtend
 * @method self withExtend(string $extend)
 */
class QueryMetricTopN extends Roa
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getMetric
 * @method self withMetric(string $metric)
 * @method string getPeriod
 * @method self withPeriod(string $period)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getDimensions
 * @method self withDimensions(string $dimensions)
 * @method string getPage
 * @method self withPage(string $page)
 * @method string getLength
 * @method self withLength(string $length)
 * @method string getExtend
 * @method self withExtend(string $extend)
 */
class QueryMetric extends Roa
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getMetric
 * @method self withMetric(string $metric)
 * @method string getPeriod
 * @method self withPeriod(string $period)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getDimensions
 * @method self withDimensions(string $dimensions)
 * @method string getPage
 * @method self withPage(string $page)
 * @method string getLength
 * @method self withLength(string $length)
 * @method string getExtend
 * @method self withExtend(string $extend)
 * @method string getFilter
 * @method self withFilter(string $filter)
 */
class QueryListMetric extends Roa
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getMetric
 * @method self withMetric(string $metric)
 * @method string getPeriod
 * @method self withPeriod(string $period)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getDimensions
 * @method self withDimensions(string $dimensions)
 * @method string getTargetPeriod
 * @method self withTargetPeriod(string $targetPeriod)
 * @method string getColumns
 * @method self withColumns(string $columns)
 * @method string getExtend
 * @method self withExtend(string $extend)
 */
class QueryIncremental extends Roa
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getMetric
 * @method self withMetric(string $metric)
 * @method string getPeriod
 * @method self withPeriod(string $period)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getDimensions
 * @method self withDimensions(string $dimensions)
 */
class DescribeMetric extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 */
class StopProject extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 */
class StatusProject extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 */
class StartProject extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getSqls
 * @method self withSqls(string $sqls)
 * @method Integer getIsPublic
 * @method self withIsPublic(Integer $isPublic)
 */
class BatchCreateSqlMetrics extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getMetricStreamName
 * @method self withMetricStreamName(string $metricStreamName)
 * @method string getMetricStream
 * @method self withMetricStream(string $metricStream)
 */
class UpdateMetricStream extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getMetricStreamName
 * @method self withMetricStreamName(string $metricStreamName)
 */
class StopMetricStream extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getMetricStreamName
 * @method self withMetricStreamName(string $metricStreamName)
 */
class GetMetricStreamStatus extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getMetricStreamName
 * @method self withMetricStreamName(string $metricStreamName)
 */
class StartMetricStream extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getMetricStreamName
 * @method self withMetricStreamName(string $metricStreamName)
 */
class GetMetricStreamMeta extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getMetricStreamName
 * @method self withMetricStreamName(string $metricStreamName)
 * @method int getPage
 * @method self withPage(int $page)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 */
class ListMetricStream extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getMetricStreamName
 * @method self withMetricStreamName(string $metricStreamName)
 */
class GetMetricStream extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getMetricStreamName
 * @method self withMetricStreamName(string $metricStreamName)
 */
class DeleteMetricStream extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getMetricStream
 * @method self withMetricStream(string $metricStream)
 */
class CreateMetricStream extends Roa
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getMetric
 * @method self withMetric(string $metric)
 * @method string getPeriod
 * @method self withPeriod(string $period)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getDimensions
 * @method self withDimensions(string $dimensions)
 * @method string getPage
 * @method self withPage(string $page)
 * @method string getLength
 * @method self withLength(string $length)
 * @method string getExtend
 * @method self withExtend(string $extend)
 */
class DescribeMetricDatum extends Roa
{
    use R;
}

/**
 * @method string getDimTableName
 * @method self withDimTableName(string $dimTableName)
 * @method string getKey
 * @method self withKey(string $key)
 */
class ListDimTableData extends Roa
{
    use R;
}

/**
 * @method string getDimTableName
 * @method self withDimTableName(string $dimTableName)
 * @method string getBody
 * @method self withBody(string $body)
 */
class PutDimTableData extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getProject
 * @method self withProject(string $project)
 */
class UpdateProject extends Roa
{
    use R;
}

/**
 * @method string getProjectOwner
 * @method self withProjectOwner(string $projectOwner)
 * @method int getPage
 * @method self withPage(int $page)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 */
class ListProject extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 */
class GetProject extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 */
class DeleteProject extends Roa
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 */
class CreateProject extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getMetricStreamName
 * @method self withMetricStreamName(string $metricStreamName)
 * @method string getMetricName
 * @method self withMetricName(string $metricName)
 * @method string getMetrics
 * @method self withMetrics(string $metrics)
 */
class UpdateMetrics extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getMetricName
 * @method self withMetricName(string $metricName)
 * @method string getSql
 * @method self withSql(string $sql)
 * @method Integer getIsPublic
 * @method self withIsPublic(Integer $isPublic)
 */
class updateSQLMetrics extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getMetricName
 * @method self withMetricName(string $metricName)
 * @method int getPage
 * @method self withPage(int $page)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 */
class ListSQLMetrics extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getMetricName
 * @method self withMetricName(string $metricName)
 */
class GetSQLMetrics extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getSql
 * @method self withSql(string $sql)
 * @method Integer getIsPublic
 * @method self withIsPublic(Integer $isPublic)
 */
class CreateSQLMetrics extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getMetricStreamName
 * @method self withMetricStreamName(string $metricStreamName)
 * @method string getMetricName
 * @method self withMetricName(string $metricName)
 * @method int getPage
 * @method self withPage(int $page)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 */
class ListMetricsPlan extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getMetricName
 * @method self withMetricName(string $metricName)
 */
class GetMetricsMeta extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getMetricStreamName
 * @method self withMetricStreamName(string $metricStreamName)
 * @method string getMetricName
 * @method self withMetricName(string $metricName)
 * @method int getPage
 * @method self withPage(int $page)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 */
class ListMetrics extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getMetricStreamName
 * @method self withMetricStreamName(string $metricStreamName)
 * @method string getMetricName
 * @method self withMetricName(string $metricName)
 */
class GetMetrics extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getMetricName
 * @method self withMetricName(string $metricName)
 */
class DeleteMetrics extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getMetricStreamName
 * @method self withMetricStreamName(string $metricStreamName)
 * @method string getMetrics
 * @method self withMetrics(string $metrics)
 */
class CreateMetrics extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getMetricStreamName
 * @method self withMetricStreamName(string $metricStreamName)
 * @method string getSqls
 * @method self withSqls(string $sqls)
 */
class BatchCreateMetrics extends Roa
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getMetric
 * @method self withMetric(string $metric)
 * @method string getPeriod
 * @method self withPeriod(string $period)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getDimensions
 * @method self withDimensions(string $dimensions)
 * @method string getPage
 * @method self withPage(string $page)
 * @method string getLength
 * @method self withLength(string $length)
 */
class DescribeMetricList extends Roa
{
    use R;
}

/**
 * @method string getDimTableName
 * @method self withDimTableName(string $dimTableName)
 * @method string getDimTable
 * @method self withDimTable(string $dimTable)
 */
class UpdateDimTable extends Roa
{
    use R;
}

/**
 * @method string getDimTableName
 * @method self withDimTableName(string $dimTableName)
 * @method int getPage
 * @method self withPage(int $page)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 */
class ListDimTable extends Roa
{
    use R;
}

/**
 * @method string getDimTableName
 * @method self withDimTableName(string $dimTableName)
 */
class GetDimTable extends Roa
{
    use R;
}

/**
 * @method string getDimTableName
 * @method self withDimTableName(string $dimTableName)
 */
class DeleteDimTable extends Roa
{
    use R;
}

/**
 * @method string getDimTable
 * @method self withDimTable(string $dimTable)
 */
class CreateDimTable extends Roa
{
    use R;
}

/**
 * @method string getDimTableName
 * @method self withDimTableName(string $dimTableName)
 * @method string getKey
 * @method self withKey(string $key)
 */
class DeleteDimTableData extends Roa
{
    use R;
}

/**
 * @method string getDimTableName
 * @method self withDimTableName(string $dimTableName)
 * @method string getBody
 * @method self withBody(string $body)
 */
class BatchPutDimTableData extends Roa
{
    use R;
}
