<?php

namespace AlibabaCloud\Oos\V20190601;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method GenerateExecutionPolicy generateExecutionPolicy(array $options = [])
 * @method ValidateTemplateContent validateTemplateContent(array $options = [])
 * @method UpdateTemplate updateTemplate(array $options = [])
 * @method StartExecution startExecution(array $options = [])
 * @method NotifyExecution notifyExecution(array $options = [])
 * @method ListTemplates listTemplates(array $options = [])
 * @method ListTaskExecutions listTaskExecutions(array $options = [])
 * @method ListExecutions listExecutions(array $options = [])
 * @method ListExecutionLogs listExecutionLogs(array $options = [])
 * @method ListActions listActions(array $options = [])
 * @method GetTemplate getTemplate(array $options = [])
 * @method GetExecutionTemplate getExecutionTemplate(array $options = [])
 * @method DeleteTemplate deleteTemplate(array $options = [])
 * @method DeleteExecutions deleteExecutions(array $options = [])
 * @method CreateTemplate createTemplate(array $options = [])
 * @method CancelExecution cancelExecution(array $options = [])
 */
class OosApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'oos';

    /** @var string */
    public $version = '2019-06-01';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'oos';
}

/**
 * @method string getTemplateName()
 * @method $this withTemplateName($value)
 */
class GenerateExecutionPolicy extends Rpc
{
}

/**
 * @method string getContent()
 * @method $this withContent($value)
 */
class ValidateTemplateContent extends Rpc
{
}

/**
 * @method string getTemplateName()
 * @method $this withTemplateName($value)
 * @method string getContent()
 * @method $this withContent($value)
 */
class UpdateTemplate extends Rpc
{
}

/**
 * @method string getMode()
 * @method $this withMode($value)
 * @method string getTemplateVersion()
 * @method $this withTemplateVersion($value)
 * @method string getParentExecutionId()
 * @method $this withParentExecutionId($value)
 * @method string getTemplateName()
 * @method $this withTemplateName($value)
 * @method string getSafetyCheck()
 * @method $this withSafetyCheck($value)
 * @method string getParameters()
 * @method $this withParameters($value)
 */
class StartExecution extends Rpc
{
}

/**
 * @method string getExecutionId()
 * @method $this withExecutionId($value)
 * @method string getExecutionStatus()
 * @method $this withExecutionStatus($value)
 * @method string getNotifyNote()
 * @method $this withNotifyNote($value)
 * @method string getTaskName()
 * @method $this withTaskName($value)
 * @method string getNotifyType()
 * @method $this withNotifyType($value)
 * @method string getParameters()
 * @method $this withParameters($value)
 */
class NotifyExecution extends Rpc
{
}

/**
 * @method string getCreatedDateBefore()
 * @method $this withCreatedDateBefore($value)
 * @method string getCreatedBy()
 * @method $this withCreatedBy($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getCreatedDateAfter()
 * @method $this withCreatedDateAfter($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getTemplateName()
 * @method $this withTemplateName($value)
 * @method string getSortOrder()
 * @method $this withSortOrder($value)
 * @method string getTemplateFormat()
 * @method $this withTemplateFormat($value)
 * @method string getShareType()
 * @method $this withShareType($value)
 * @method string getSortField()
 * @method $this withSortField($value)
 */
class ListTemplates extends Rpc
{
}

/**
 * @method string getStartDateAfter()
 * @method $this withStartDateAfter($value)
 * @method string getStartDateBefore()
 * @method $this withStartDateBefore($value)
 * @method string getTaskName()
 * @method $this withTaskName($value)
 * @method string getIncludeChildTaskExecution()
 * @method $this withIncludeChildTaskExecution($value)
 * @method string getExecutionId()
 * @method $this withExecutionId($value)
 * @method string getParentTaskExecutionId()
 * @method $this withParentTaskExecutionId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getEndDateAfter()
 * @method $this withEndDateAfter($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getEndDateBefore()
 * @method $this withEndDateBefore($value)
 * @method string getTaskExecutionId()
 * @method $this withTaskExecutionId($value)
 * @method string getSortOrder()
 * @method $this withSortOrder($value)
 * @method string getSortField()
 * @method $this withSortField($value)
 * @method string getTaskAction()
 * @method $this withTaskAction($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListTaskExecutions extends Rpc
{
}

/**
 * @method string getExecutedBy()
 * @method $this withExecutedBy($value)
 * @method string getIncludeChildExecution()
 * @method $this withIncludeChildExecution($value)
 * @method string getStartDateAfter()
 * @method $this withStartDateAfter($value)
 * @method string getStartDateBefore()
 * @method $this withStartDateBefore($value)
 * @method string getMode()
 * @method $this withMode($value)
 * @method string getExecutionId()
 * @method $this withExecutionId($value)
 * @method string getParentExecutionId()
 * @method $this withParentExecutionId($value)
 * @method string getRamRole()
 * @method $this withRamRole($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getEndDateAfter()
 * @method $this withEndDateAfter($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getTemplateName()
 * @method $this withTemplateName($value)
 * @method string getEndDateBefore()
 * @method $this withEndDateBefore($value)
 * @method string getSortOrder()
 * @method $this withSortOrder($value)
 * @method string getSortField()
 * @method $this withSortField($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListExecutions extends Rpc
{
}

/**
 * @method string getExecutionId()
 * @method $this withExecutionId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListExecutionLogs extends Rpc
{
}

/**
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getActionName()
 * @method $this withActionName($value)
 */
class ListActions extends Rpc
{
}

/**
 * @method string getTemplateVersion()
 * @method $this withTemplateVersion($value)
 * @method string getTemplateName()
 * @method $this withTemplateName($value)
 */
class GetTemplate extends Rpc
{
}

/**
 * @method string getExecutionId()
 * @method $this withExecutionId($value)
 */
class GetExecutionTemplate extends Rpc
{
}

/**
 * @method string getTemplateName()
 * @method $this withTemplateName($value)
 */
class DeleteTemplate extends Rpc
{
}

/**
 * @method string getExecutionIds()
 * @method $this withExecutionIds($value)
 */
class DeleteExecutions extends Rpc
{
}

/**
 * @method string getTemplateName()
 * @method $this withTemplateName($value)
 * @method string getContent()
 * @method $this withContent($value)
 */
class CreateTemplate extends Rpc
{
}

/**
 * @method string getExecutionId()
 * @method $this withExecutionId($value)
 */
class CancelExecution extends Rpc
{
}
