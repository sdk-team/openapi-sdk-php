<?php

namespace AlibabaCloud\Ccs\V20171001;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RpcRequest as Rpc;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method QueryTicket queryTicket($options = [])
 * @method ProceedTicket proceedTicket($options = [])
 * @method CreateTicket createTicket($options = [])
 * @method QueryHotlineRecord queryHotlineRecord($options = [])
 * @method GetHotlineRecord getHotlineRecord($options = [])
 */
class V20171001
{
    use ApiResolverTrait;
}

/**
 * @method string getCcsInstanceId
 * @method self withCcsInstanceId(string $ccsInstanceId)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getType
 * @method self withType(string $type)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getCreatorId
 * @method self withCreatorId(string $creatorId)
 * @method string getStage
 * @method self withStage(string $stage)
 */
class QueryTicket extends Rpc
{
    use R;
}

/**
 * @method string getCcsInstanceId
 * @method self withCcsInstanceId(string $ccsInstanceId)
 * @method string getId
 * @method self withId(string $id)
 * @method string getOperation
 * @method self withOperation(string $operation)
 * @method string getOperatorId
 * @method self withOperatorId(string $operatorId)
 * @method string getMemo
 * @method self withMemo(string $memo)
 */
class ProceedTicket extends Rpc
{
    use R;
}

/**
 * @method string getCcsInstanceId
 * @method self withCcsInstanceId(string $ccsInstanceId)
 * @method string getType
 * @method self withType(string $type)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getCreatorId
 * @method self withCreatorId(string $creatorId)
 * @method string getCustomFields
 * @method self withCustomFields(string $customFields)
 */
class CreateTicket extends Rpc
{
    use R;
}

/**
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getVisitorId
 * @method self withVisitorId(string $visitorId)
 * @method string getVisitorProvince
 * @method self withVisitorProvince(string $visitorProvince)
 * @method string getVisitorPhone
 * @method self withVisitorPhone(string $visitorPhone)
 * @method string getCallType
 * @method self withCallType(string $callType)
 * @method string getAgentId
 * @method self withAgentId(string $agentId)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method int getMaxTalkDuration
 * @method self withMaxTalkDuration(int $maxTalkDuration)
 * @method int getMinTalkDuratoin
 * @method self withMinTalkDuratoin(int $minTalkDuratoin)
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method string getSatisfaction
 * @method self withSatisfaction(string $satisfaction)
 * @method string getCategoryIds
 * @method self withCategoryIds(string $categoryIds)
 * @method string getCcsInstanceId
 * @method self withCcsInstanceId(string $ccsInstanceId)
 */
class QueryHotlineRecord extends Rpc
{
    use R;
}

/**
 * @method string getId
 * @method self withId(string $id)
 * @method string getCcsInstanceId
 * @method self withCcsInstanceId(string $ccsInstanceId)
 */
class GetHotlineRecord extends Rpc
{
    use R;
}
