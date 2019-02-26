<?php

namespace AlibabaCloud\Chatbot\V20171011;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method string getCoreWordName
 * @method self withCoreWordName
 */
final class CreateCoreWord extends RpcRequest
{
}

/**
 * @method string getLanguageCode
 * @method self withLanguageCode
 * @method string getTimeZone
 * @method self withTimeZone
 * @method string getName
 * @method self withName
 * @method string getAvatar
 * @method self withAvatar
 * @method string getIntroduction
 * @method self withIntroduction
 */
final class CreateBot extends RpcRequest
{
}

/**
 * @method Long getDialogId
 * @method self withDialogId
 */
final class DescribeDialog extends RpcRequest
{
}

/**
 * @method Long getDialogId
 * @method self withDialogId
 */
final class DeleteDialog extends RpcRequest
{
}

/**
 * @method Long getDialogId
 * @method self withDialogId
 * @method string getDialogName
 * @method self withDialogName
 * @method string getDescription
 * @method self withDescription
 */
final class UpdateDialog extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getDialogName
 * @method self withDialogName
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class QueryDialogs extends RpcRequest
{
}

/**
 * @method Long getDialogId
 * @method self withDialogId
 */
final class DescribeDialogFlow extends RpcRequest
{
}

/**
 * @method Long getIntentId
 * @method self withIntentId
 */
final class DeleteIntent extends RpcRequest
{
}

/**
 * @method string getIntentDefinition
 * @method self withIntentDefinition
 * @method Long getIntentId
 * @method self withIntentId
 */
final class UpdateIntent extends RpcRequest
{
}

/**
 * @method string getEntityName
 * @method self withEntityName
 * @method Long getDialogId
 * @method self withDialogId
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class QueryEntities extends RpcRequest
{
}

/**
 * @method Long getEntityId
 * @method self withEntityId
 */
final class DescribeEntities extends RpcRequest
{
}

/**
 * @method Long getDialogId
 * @method self withDialogId
 */
final class DisableDialogFlow extends RpcRequest
{
}

/**
 * @method Long getEntityId
 * @method self withEntityId
 * @method string getEntityName
 * @method self withEntityName
 * @method string getEntityType
 * @method self withEntityType
 * @method string getRegex
 * @method self withRegex
 * @method string getMembers
 * @method self withMembers
 */
final class UpdateEntity extends RpcRequest
{
}

/**
 * @method Long getEntityId
 * @method self withEntityId
 */
final class DeleteEntity extends RpcRequest
{
}

/**
 * @method Long getDialogId
 * @method self withDialogId
 */
final class TestDialogFlow extends RpcRequest
{
}

/**
 * @method Long getEntityId
 * @method self withEntityId
 * @method string getApplyType
 * @method self withApplyType
 * @method string getMember
 * @method self withMember
 */
final class AppendEntityMember extends RpcRequest
{
}

/**
 * @method Long getEntityId
 * @method self withEntityId
 * @method string getRemoveType
 * @method self withRemoveType
 * @method string getMember
 * @method self withMember
 */
final class RemoveEntityMember extends RpcRequest
{
}

/**
 * @method Long getIntentId
 * @method self withIntentId
 */
final class DescribeIntent extends RpcRequest
{
}

/**
 * @method string getIntentName
 * @method self withIntentName
 * @method Long getDialogId
 * @method self withDialogId
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class QueryIntents extends RpcRequest
{
}

/**
 * @method string getPerspectiveId
 * @method self withPerspectiveId
 */
final class DescribePerspective extends RpcRequest
{
}

final class QueryPerspectives extends RpcRequest
{
}

/**
 * @method Long getCategoryId
 * @method self withCategoryId
 */
final class DescribeCategory extends RpcRequest
{
}

/**
 * @method string getPerspectiveId
 * @method self withPerspectiveId
 * @method string getName
 * @method self withName
 */
final class UpdatePerspective extends RpcRequest
{
}

/**
 * @method string getName
 * @method self withName
 */
final class CreatePerspective extends RpcRequest
{
}

/**
 * @method string getPerspectiveId
 * @method self withPerspectiveId
 */
final class ActivatePerspective extends RpcRequest
{
}

/**
 * @method Long getKnowledgeId
 * @method self withKnowledgeId
 */
final class PublishKnowledge extends RpcRequest
{
}

/**
 * @method Long getKnowledgeId
 * @method self withKnowledgeId
 * @method Long getCategoryId
 * @method self withCategoryId
 */
final class MoveKnowledgeCategory extends RpcRequest
{
}

/**
 * @method string getKnowledgeTitle
 * @method self withKnowledgeTitle
 * @method string getCoreWordName
 * @method self withCoreWordName
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Long getCategoryId
 * @method self withCategoryId
 */
final class QueryKnowledges extends RpcRequest
{
}

/**
 * @method Long getKnowledgeId
 * @method self withKnowledgeId
 */
final class DisableKnowledge extends RpcRequest
{
}

/**
 * @method string getCoreWordName
 * @method self withCoreWordName
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class QueryCoreWords extends RpcRequest
{
}

/**
 * @method string getCoreWordName
 * @method self withCoreWordName
 */
final class DescribeCoreWord extends RpcRequest
{
}

/**
 * @method string getCoreWordName
 * @method self withCoreWordName
 */
final class CreateCordWord extends RpcRequest
{
}

/**
 * @method string getCoreWordName
 * @method self withCoreWordName
 * @method string getSynonym
 * @method self withSynonym
 */
final class AddSynonym extends RpcRequest
{
}

/**
 * @method string getCoreWordName
 * @method self withCoreWordName
 * @method string getSynonym
 * @method self withSynonym
 */
final class RemoveSynonym extends RpcRequest
{
}

/**
 * @method Long getMachineReadingId
 * @method self withMachineReadingId
 */
final class DescribeMachineReadingArticle extends RpcRequest
{
}

/**
 * @method Long getCategoryId
 * @method self withCategoryId
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getTitle
 * @method self withTitle
 */
final class QueryMachineReadingArticles extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 */
final class DeleteBot extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getName
 * @method self withName
 * @method string getIntroduction
 * @method self withIntroduction
 * @method string getAvatar
 * @method self withAvatar
 */
final class UpdateBot extends RpcRequest
{
}

/**
 * @method string getUserQuery
 * @method self withUserQuery
 * @method Long getCategoryId
 * @method self withCategoryId
 * @method Long getKnowledgeId
 * @method self withKnowledgeId
 * @method Integer getKnowledgeStatus
 * @method self withKnowledgeStatus
 * @method Integer getKnowledgeType
 * @method self withKnowledgeType
 * @method string getCreateUserName
 * @method self withCreateUserName
 * @method string getModifyUserName
 * @method self withModifyUserName
 * @method string getCreateTimeBegin
 * @method self withCreateTimeBegin
 * @method string getCreateTimeEnd
 * @method self withCreateTimeEnd
 * @method string getModifyTimeBegin
 * @method self withModifyTimeBegin
 * @method string getModifyTimeEnd
 * @method self withModifyTimeEnd
 * @method string getStartTimeBegin
 * @method self withStartTimeBegin
 * @method string getStartTimeEnd
 * @method self withStartTimeEnd
 * @method string getEndTimeBegin
 * @method self withEndTimeBegin
 * @method string getEndTimeEnd
 * @method self withEndTimeEnd
 * @method string getDataType
 * @method self withDataType
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class SearchKnowledges extends RpcRequest
{
}

/**
 * @method string getKnowledge
 * @method self withKnowledge
 */
final class UpdateKnowledge extends RpcRequest
{
}

/**
 * @method Long getKnowledgeId
 * @method self withKnowledgeId
 */
final class DescribeKnowledge extends RpcRequest
{
}

/**
 * @method Long getKnowledgeId
 * @method self withKnowledgeId
 */
final class DeleteKnowledge extends RpcRequest
{
}

/**
 * @method string getKnowledge
 * @method self withKnowledge
 */
final class CreateKnowledge extends RpcRequest
{
}

/**
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class QueryBots extends RpcRequest
{
}

/**
 * @method Long getParentCategoryId
 * @method self withParentCategoryId
 * @method Boolean getShowChildrens
 * @method self withShowChildrens
 */
final class QueryCategories extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getCategoryIds
 * @method self withCategoryIds
 */
final class LinkBotCategory extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 */
final class DescribeBot extends RpcRequest
{
}

/**
 * @method string getIntentDefinition
 * @method self withIntentDefinition
 * @method Long getDialogId
 * @method self withDialogId
 */
final class CreateIntent extends RpcRequest
{
}

/**
 * @method Long getDialogId
 * @method self withDialogId
 * @method string getEntityName
 * @method self withEntityName
 * @method string getEntityType
 * @method self withEntityType
 * @method string getRegex
 * @method self withRegex
 * @method string getMembers
 * @method self withMembers
 */
final class CreateEntity extends RpcRequest
{
}

/**
 * @method Long getDialogId
 * @method self withDialogId
 * @method string getModulePassDTO
 * @method self withModulePassDTO
 */
final class UpdateAndPushDialogFlowToSandbox extends RpcRequest
{
}

/**
 * @method string getEntityName
 * @method self withEntityName
 */
final class QuerySystemEntities extends RpcRequest
{
}

/**
 * @method Long getDialogId
 * @method self withDialogId
 * @method string getModuleDefinition
 * @method self withModuleDefinition
 */
final class UpdateDialogFlow extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getDialogName
 * @method self withDialogName
 * @method string getDescription
 * @method self withDescription
 */
final class CreateDialog extends RpcRequest
{
}

/**
 * @method Long getDialogId
 * @method self withDialogId
 */
final class PublishDialogFlow extends RpcRequest
{
}

/**
 * @method string getTitle
 * @method self withTitle
 * @method Long getCategoryId
 * @method self withCategoryId
 * @method string getCoreWord
 * @method self withCoreWord
 * @method string getPerspectiveIds
 * @method self withPerspectiveIds
 * @method string getContent
 * @method self withContent
 * @method Long getMachineReadingId
 * @method self withMachineReadingId
 * @method string getCode
 * @method self withCode
 * @method string getBizDataRanges
 * @method self withBizDataRanges
 */
final class UpdateMachineReadingArticle extends RpcRequest
{
}

/**
 * @method string getTitle
 * @method self withTitle
 * @method Long getCategoryId
 * @method self withCategoryId
 * @method string getCoreWord
 * @method self withCoreWord
 * @method string getContent
 * @method self withContent
 * @method string getCode
 * @method self withCode
 * @method string getPerspectiveIds
 * @method self withPerspectiveIds
 * @method string getBizDataRanges
 * @method self withBizDataRanges
 */
final class CreateMachineReadingArticle extends RpcRequest
{
}

/**
 * @method Long getCategoryId
 * @method self withCategoryId
 */
final class DeleteCategory extends RpcRequest
{
}

/**
 * @method string getName
 * @method self withName
 * @method Long getCategoryId
 * @method self withCategoryId
 */
final class UpdateCategory extends RpcRequest
{
}

/**
 * @method Long getMachineReadingId
 * @method self withMachineReadingId
 */
final class DeleteMachineReadingArticle extends RpcRequest
{
}

/**
 * @method Long getParentCategoryId
 * @method self withParentCategoryId
 * @method string getName
 * @method self withName
 */
final class CreateCategory extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getSessionId
 * @method self withSessionId
 * @method string getMessageId
 * @method self withMessageId
 * @method string getFeedback
 * @method self withFeedback
 */
final class Feedback extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getSessionId
 * @method self withSessionId
 * @method string getKnowledgeId
 * @method self withKnowledgeId
 * @method string getSenderId
 * @method self withSenderId
 * @method string getSenderNick
 * @method self withSenderNick
 * @method string getTag
 * @method self withTag
 * @method string getUtterance
 * @method self withUtterance
 * @method RepeatList getPerspective
 * @method self withPerspective
 */
final class Chat extends RpcRequest
{
}
