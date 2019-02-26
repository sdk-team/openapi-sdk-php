<?php

namespace AlibabaCloud\Cms\V20170620;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method UpdateTemplateApplyGroups updateTemplateApplyGroups($options = [])
 * @method GetProductGroupsAction getProductGroupsAction($options = [])
 * @method PutAlertTemplate putAlertTemplate($options = [])
 * @method ListAlertTemplate listAlertTemplate($options = [])
 * @method DeleteAlertTemplate deleteAlertTemplate($options = [])
 */
class V20170620
{
    use ApiResolverTrait;
}

/**
 * @method string getTemplateId
 * @method self withTemplateId(string $templateId)
 * @method string getGroupIds
 * @method self withGroupIds(string $groupIds)
 */
class UpdateTemplateApplyGroups extends Roa
{
    use R;
}

class GetProductGroupsAction extends Roa
{
    use R;
}

/**
 * @method Integer getTemplateId
 * @method self withTemplateId(Integer $templateId)
 * @method string getTemplateName
 * @method self withTemplateName(string $templateName)
 * @method string getTemplateDescribe
 * @method self withTemplateDescribe(string $templateDescribe)
 * @method string getSilenceTime
 * @method self withSilenceTime(string $silenceTime)
 * @method string getEnableStartTime
 * @method self withEnableStartTime(string $enableStartTime)
 * @method string getEnableEndTime
 * @method self withEnableEndTime(string $enableEndTime)
 * @method string getNotifyLevel
 * @method self withNotifyLevel(string $notifyLevel)
 * @method string getTemplateType
 * @method self withTemplateType(string $templateType)
 * @method string getApplyGroups
 * @method self withApplyGroups(string $applyGroups)
 * @method string getAlarmTemplateItems
 * @method self withAlarmTemplateItems(string $alarmTemplateItems)
 */
class PutAlertTemplate extends Roa
{
    use R;
}

/**
 * @method int getTemplateId
 * @method self withTemplateId(int $templateId)
 * @method Integer getPage
 * @method self withPage(Integer $page)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class ListAlertTemplate extends Roa
{
    use R;
}

/**
 * @method Integer getTemplateId
 * @method self withTemplateId(Integer $templateId)
 */
class DeleteAlertTemplate extends Roa
{
    use R;
}
