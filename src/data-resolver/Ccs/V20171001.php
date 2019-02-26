<?php

namespace AlibabaCloud\Ccs\V20171001;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method string getCcsInstanceId
 * @method self withCcsInstanceId
 * @method Integer getPageNum
 * @method self withPageNum
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getType
 * @method self withType
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getCreatorId
 * @method self withCreatorId
 * @method string getStage
 * @method self withStage
 */
final class QueryTicket extends RpcRequest
{
}

/**
 * @method string getCcsInstanceId
 * @method self withCcsInstanceId
 * @method string getId
 * @method self withId
 * @method string getOperation
 * @method self withOperation
 * @method string getOperatorId
 * @method self withOperatorId
 * @method string getMemo
 * @method self withMemo
 */
final class ProceedTicket extends RpcRequest
{
}

/**
 * @method string getCcsInstanceId
 * @method self withCcsInstanceId
 * @method string getType
 * @method self withType
 * @method string getDescription
 * @method self withDescription
 * @method string getCreatorId
 * @method self withCreatorId
 * @method string getCustomFields
 * @method self withCustomFields
 */
final class CreateTicket extends RpcRequest
{
}

/**
 * @method string getStartTime
 * @method self withStartTime
 * @method Integer getPageNum
 * @method self withPageNum
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getEndTime
 * @method self withEndTime
 * @method string getVisitorId
 * @method self withVisitorId
 * @method string getVisitorProvince
 * @method self withVisitorProvince
 * @method string getVisitorPhone
 * @method self withVisitorPhone
 * @method string getCallType
 * @method self withCallType
 * @method string getAgentId
 * @method self withAgentId
 * @method string getGroupId
 * @method self withGroupId
 * @method Long getMaxTalkDuration
 * @method self withMaxTalkDuration
 * @method Long getMinTalkDuratoin
 * @method self withMinTalkDuratoin
 * @method string getStatus
 * @method self withStatus
 * @method string getSatisfaction
 * @method self withSatisfaction
 * @method string getCategoryIds
 * @method self withCategoryIds
 * @method string getCcsInstanceId
 * @method self withCcsInstanceId
 */
final class QueryHotlineRecord extends RpcRequest
{
}

/**
 * @method string getId
 * @method self withId
 * @method string getCcsInstanceId
 * @method self withCcsInstanceId
 */
final class GetHotlineRecord extends RpcRequest
{
}
