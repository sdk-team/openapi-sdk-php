<?php

namespace AlibabaCloud\Chatbot\V20171011;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RpcRequest as Rpc;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method CreateCoreWord createCoreWord($options = [])
 * @method CreateBot createBot($options = [])
 * @method DescribeDialog describeDialog($options = [])
 * @method DeleteDialog deleteDialog($options = [])
 * @method UpdateDialog updateDialog($options = [])
 * @method QueryDialogs queryDialogs($options = [])
 * @method DescribeDialogFlow describeDialogFlow($options = [])
 * @method DeleteIntent deleteIntent($options = [])
 * @method UpdateIntent updateIntent($options = [])
 * @method QueryEntities queryEntities($options = [])
 * @method DescribeEntities describeEntities($options = [])
 * @method DisableDialogFlow disableDialogFlow($options = [])
 * @method UpdateEntity updateEntity($options = [])
 * @method DeleteEntity deleteEntity($options = [])
 * @method TestDialogFlow testDialogFlow($options = [])
 * @method AppendEntityMember appendEntityMember($options = [])
 * @method RemoveEntityMember removeEntityMember($options = [])
 * @method DescribeIntent describeIntent($options = [])
 * @method QueryIntents queryIntents($options = [])
 * @method DescribePerspective describePerspective($options = [])
 * @method QueryPerspectives queryPerspectives($options = [])
 * @method DescribeCategory describeCategory($options = [])
 * @method UpdatePerspective updatePerspective($options = [])
 * @method CreatePerspective createPerspective($options = [])
 * @method ActivatePerspective activatePerspective($options = [])
 * @method PublishKnowledge publishKnowledge($options = [])
 * @method MoveKnowledgeCategory moveKnowledgeCategory($options = [])
 * @method QueryKnowledges queryKnowledges($options = [])
 * @method DisableKnowledge disableKnowledge($options = [])
 * @method QueryCoreWords queryCoreWords($options = [])
 * @method DescribeCoreWord describeCoreWord($options = [])
 * @method CreateCordWord createCordWord($options = [])
 * @method AddSynonym addSynonym($options = [])
 * @method RemoveSynonym removeSynonym($options = [])
 * @method DescribeMachineReadingArticle describeMachineReadingArticle($options = [])
 * @method QueryMachineReadingArticles queryMachineReadingArticles($options = [])
 * @method DeleteBot deleteBot($options = [])
 * @method UpdateBot updateBot($options = [])
 * @method SearchKnowledges searchKnowledges($options = [])
 * @method UpdateKnowledge updateKnowledge($options = [])
 * @method DescribeKnowledge describeKnowledge($options = [])
 * @method DeleteKnowledge deleteKnowledge($options = [])
 * @method CreateKnowledge createKnowledge($options = [])
 * @method QueryBots queryBots($options = [])
 * @method QueryCategories queryCategories($options = [])
 * @method LinkBotCategory linkBotCategory($options = [])
 * @method DescribeBot describeBot($options = [])
 * @method CreateIntent createIntent($options = [])
 * @method CreateEntity createEntity($options = [])
 * @method UpdateAndPushDialogFlowToSandbox updateAndPushDialogFlowToSandbox($options = [])
 * @method QuerySystemEntities querySystemEntities($options = [])
 * @method UpdateDialogFlow updateDialogFlow($options = [])
 * @method CreateDialog createDialog($options = [])
 * @method PublishDialogFlow publishDialogFlow($options = [])
 * @method UpdateMachineReadingArticle updateMachineReadingArticle($options = [])
 * @method CreateMachineReadingArticle createMachineReadingArticle($options = [])
 * @method DeleteCategory deleteCategory($options = [])
 * @method UpdateCategory updateCategory($options = [])
 * @method DeleteMachineReadingArticle deleteMachineReadingArticle($options = [])
 * @method CreateCategory createCategory($options = [])
 * @method Feedback feedback($options = [])
 * @method Chat chat($options = [])
 */
class V20171011
{
    use ApiResolverTrait;
}

/**
 * @method string getCoreWordName
 * @method self withCoreWordName(string $coreWordName)
 */
class CreateCoreWord extends Rpc
{
    use R;
}

/**
 * @method string getLanguageCode
 * @method self withLanguageCode(string $languageCode)
 * @method string getTimeZone
 * @method self withTimeZone(string $timeZone)
 * @method string getName
 * @method self withName(string $name)
 * @method string getAvatar
 * @method self withAvatar(string $avatar)
 * @method string getIntroduction
 * @method self withIntroduction(string $introduction)
 */
class CreateBot extends Rpc
{
    use R;
}

/**
 * @method int getDialogId
 * @method self withDialogId(int $dialogId)
 */
class DescribeDialog extends Rpc
{
    use R;
}

/**
 * @method int getDialogId
 * @method self withDialogId(int $dialogId)
 */
class DeleteDialog extends Rpc
{
    use R;
}

/**
 * @method int getDialogId
 * @method self withDialogId(int $dialogId)
 * @method string getDialogName
 * @method self withDialogName(string $dialogName)
 * @method string getDescription
 * @method self withDescription(string $description)
 */
class UpdateDialog extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getDialogName
 * @method self withDialogName(string $dialogName)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class QueryDialogs extends Rpc
{
    use R;
}

/**
 * @method int getDialogId
 * @method self withDialogId(int $dialogId)
 */
class DescribeDialogFlow extends Rpc
{
    use R;
}

/**
 * @method int getIntentId
 * @method self withIntentId(int $intentId)
 */
class DeleteIntent extends Rpc
{
    use R;
}

/**
 * @method string getIntentDefinition
 * @method self withIntentDefinition(string $intentDefinition)
 * @method int getIntentId
 * @method self withIntentId(int $intentId)
 */
class UpdateIntent extends Rpc
{
    use R;
}

/**
 * @method string getEntityName
 * @method self withEntityName(string $entityName)
 * @method int getDialogId
 * @method self withDialogId(int $dialogId)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class QueryEntities extends Rpc
{
    use R;
}

/**
 * @method int getEntityId
 * @method self withEntityId(int $entityId)
 */
class DescribeEntities extends Rpc
{
    use R;
}

/**
 * @method int getDialogId
 * @method self withDialogId(int $dialogId)
 */
class DisableDialogFlow extends Rpc
{
    use R;
}

/**
 * @method int getEntityId
 * @method self withEntityId(int $entityId)
 * @method string getEntityName
 * @method self withEntityName(string $entityName)
 * @method string getEntityType
 * @method self withEntityType(string $entityType)
 * @method string getRegex
 * @method self withRegex(string $regex)
 * @method string getMembers
 * @method self withMembers(string $members)
 */
class UpdateEntity extends Rpc
{
    use R;
}

/**
 * @method int getEntityId
 * @method self withEntityId(int $entityId)
 */
class DeleteEntity extends Rpc
{
    use R;
}

/**
 * @method int getDialogId
 * @method self withDialogId(int $dialogId)
 */
class TestDialogFlow extends Rpc
{
    use R;
}

/**
 * @method int getEntityId
 * @method self withEntityId(int $entityId)
 * @method string getApplyType
 * @method self withApplyType(string $applyType)
 * @method string getMember
 * @method self withMember(string $member)
 */
class AppendEntityMember extends Rpc
{
    use R;
}

/**
 * @method int getEntityId
 * @method self withEntityId(int $entityId)
 * @method string getRemoveType
 * @method self withRemoveType(string $removeType)
 * @method string getMember
 * @method self withMember(string $member)
 */
class RemoveEntityMember extends Rpc
{
    use R;
}

/**
 * @method int getIntentId
 * @method self withIntentId(int $intentId)
 */
class DescribeIntent extends Rpc
{
    use R;
}

/**
 * @method string getIntentName
 * @method self withIntentName(string $intentName)
 * @method int getDialogId
 * @method self withDialogId(int $dialogId)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class QueryIntents extends Rpc
{
    use R;
}

/**
 * @method string getPerspectiveId
 * @method self withPerspectiveId(string $perspectiveId)
 */
class DescribePerspective extends Rpc
{
    use R;
}

class QueryPerspectives extends Rpc
{
    use R;
}

/**
 * @method int getCategoryId
 * @method self withCategoryId(int $categoryId)
 */
class DescribeCategory extends Rpc
{
    use R;
}

/**
 * @method string getPerspectiveId
 * @method self withPerspectiveId(string $perspectiveId)
 * @method string getName
 * @method self withName(string $name)
 */
class UpdatePerspective extends Rpc
{
    use R;
}

/**
 * @method string getName
 * @method self withName(string $name)
 */
class CreatePerspective extends Rpc
{
    use R;
}

/**
 * @method string getPerspectiveId
 * @method self withPerspectiveId(string $perspectiveId)
 */
class ActivatePerspective extends Rpc
{
    use R;
}

/**
 * @method int getKnowledgeId
 * @method self withKnowledgeId(int $knowledgeId)
 */
class PublishKnowledge extends Rpc
{
    use R;
}

/**
 * @method int getKnowledgeId
 * @method self withKnowledgeId(int $knowledgeId)
 * @method int getCategoryId
 * @method self withCategoryId(int $categoryId)
 */
class MoveKnowledgeCategory extends Rpc
{
    use R;
}

/**
 * @method string getKnowledgeTitle
 * @method self withKnowledgeTitle(string $knowledgeTitle)
 * @method string getCoreWordName
 * @method self withCoreWordName(string $coreWordName)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method int getCategoryId
 * @method self withCategoryId(int $categoryId)
 */
class QueryKnowledges extends Rpc
{
    use R;
}

/**
 * @method int getKnowledgeId
 * @method self withKnowledgeId(int $knowledgeId)
 */
class DisableKnowledge extends Rpc
{
    use R;
}

/**
 * @method string getCoreWordName
 * @method self withCoreWordName(string $coreWordName)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class QueryCoreWords extends Rpc
{
    use R;
}

/**
 * @method string getCoreWordName
 * @method self withCoreWordName(string $coreWordName)
 */
class DescribeCoreWord extends Rpc
{
    use R;
}

/**
 * @method string getCoreWordName
 * @method self withCoreWordName(string $coreWordName)
 */
class CreateCordWord extends Rpc
{
    use R;
}

/**
 * @method string getCoreWordName
 * @method self withCoreWordName(string $coreWordName)
 * @method string getSynonym
 * @method self withSynonym(string $synonym)
 */
class AddSynonym extends Rpc
{
    use R;
}

/**
 * @method string getCoreWordName
 * @method self withCoreWordName(string $coreWordName)
 * @method string getSynonym
 * @method self withSynonym(string $synonym)
 */
class RemoveSynonym extends Rpc
{
    use R;
}

/**
 * @method int getMachineReadingId
 * @method self withMachineReadingId(int $machineReadingId)
 */
class DescribeMachineReadingArticle extends Rpc
{
    use R;
}

/**
 * @method int getCategoryId
 * @method self withCategoryId(int $categoryId)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getTitle
 * @method self withTitle(string $title)
 */
class QueryMachineReadingArticles extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class DeleteBot extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getIntroduction
 * @method self withIntroduction(string $introduction)
 * @method string getAvatar
 * @method self withAvatar(string $avatar)
 */
class UpdateBot extends Rpc
{
    use R;
}

/**
 * @method string getUserQuery
 * @method self withUserQuery(string $userQuery)
 * @method int getCategoryId
 * @method self withCategoryId(int $categoryId)
 * @method int getKnowledgeId
 * @method self withKnowledgeId(int $knowledgeId)
 * @method Integer getKnowledgeStatus
 * @method self withKnowledgeStatus(Integer $knowledgeStatus)
 * @method Integer getKnowledgeType
 * @method self withKnowledgeType(Integer $knowledgeType)
 * @method string getCreateUserName
 * @method self withCreateUserName(string $createUserName)
 * @method string getModifyUserName
 * @method self withModifyUserName(string $modifyUserName)
 * @method string getCreateTimeBegin
 * @method self withCreateTimeBegin(string $createTimeBegin)
 * @method string getCreateTimeEnd
 * @method self withCreateTimeEnd(string $createTimeEnd)
 * @method string getModifyTimeBegin
 * @method self withModifyTimeBegin(string $modifyTimeBegin)
 * @method string getModifyTimeEnd
 * @method self withModifyTimeEnd(string $modifyTimeEnd)
 * @method string getStartTimeBegin
 * @method self withStartTimeBegin(string $startTimeBegin)
 * @method string getStartTimeEnd
 * @method self withStartTimeEnd(string $startTimeEnd)
 * @method string getEndTimeBegin
 * @method self withEndTimeBegin(string $endTimeBegin)
 * @method string getEndTimeEnd
 * @method self withEndTimeEnd(string $endTimeEnd)
 * @method string getDataType
 * @method self withDataType(string $dataType)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class SearchKnowledges extends Rpc
{
    use R;
}

/**
 * @method string getKnowledge
 * @method self withKnowledge(string $knowledge)
 */
class UpdateKnowledge extends Rpc
{
    use R;
}

/**
 * @method int getKnowledgeId
 * @method self withKnowledgeId(int $knowledgeId)
 */
class DescribeKnowledge extends Rpc
{
    use R;
}

/**
 * @method int getKnowledgeId
 * @method self withKnowledgeId(int $knowledgeId)
 */
class DeleteKnowledge extends Rpc
{
    use R;
}

/**
 * @method string getKnowledge
 * @method self withKnowledge(string $knowledge)
 */
class CreateKnowledge extends Rpc
{
    use R;
}

/**
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class QueryBots extends Rpc
{
    use R;
}

/**
 * @method int getParentCategoryId
 * @method self withParentCategoryId(int $parentCategoryId)
 * @method bool getShowChildrens
 * @method self withShowChildrens(bool $showChildrens)
 */
class QueryCategories extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getCategoryIds
 * @method self withCategoryIds(string $categoryIds)
 */
class LinkBotCategory extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class DescribeBot extends Rpc
{
    use R;
}

/**
 * @method string getIntentDefinition
 * @method self withIntentDefinition(string $intentDefinition)
 * @method int getDialogId
 * @method self withDialogId(int $dialogId)
 */
class CreateIntent extends Rpc
{
    use R;
}

/**
 * @method int getDialogId
 * @method self withDialogId(int $dialogId)
 * @method string getEntityName
 * @method self withEntityName(string $entityName)
 * @method string getEntityType
 * @method self withEntityType(string $entityType)
 * @method string getRegex
 * @method self withRegex(string $regex)
 * @method string getMembers
 * @method self withMembers(string $members)
 */
class CreateEntity extends Rpc
{
    use R;
}

/**
 * @method int getDialogId
 * @method self withDialogId(int $dialogId)
 * @method string getModulePassDTO
 * @method self withModulePassDTO(string $modulePassDTO)
 */
class UpdateAndPushDialogFlowToSandbox extends Rpc
{
    use R;
}

/**
 * @method string getEntityName
 * @method self withEntityName(string $entityName)
 */
class QuerySystemEntities extends Rpc
{
    use R;
}

/**
 * @method int getDialogId
 * @method self withDialogId(int $dialogId)
 * @method string getModuleDefinition
 * @method self withModuleDefinition(string $moduleDefinition)
 */
class UpdateDialogFlow extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getDialogName
 * @method self withDialogName(string $dialogName)
 * @method string getDescription
 * @method self withDescription(string $description)
 */
class CreateDialog extends Rpc
{
    use R;
}

/**
 * @method int getDialogId
 * @method self withDialogId(int $dialogId)
 */
class PublishDialogFlow extends Rpc
{
    use R;
}

/**
 * @method string getTitle
 * @method self withTitle(string $title)
 * @method int getCategoryId
 * @method self withCategoryId(int $categoryId)
 * @method string getCoreWord
 * @method self withCoreWord(string $coreWord)
 * @method string getPerspectiveIds
 * @method self withPerspectiveIds(string $perspectiveIds)
 * @method string getContent
 * @method self withContent(string $content)
 * @method int getMachineReadingId
 * @method self withMachineReadingId(int $machineReadingId)
 * @method string getCode
 * @method self withCode(string $code)
 * @method string getBizDataRanges
 * @method self withBizDataRanges(string $bizDataRanges)
 */
class UpdateMachineReadingArticle extends Rpc
{
    use R;
}

/**
 * @method string getTitle
 * @method self withTitle(string $title)
 * @method int getCategoryId
 * @method self withCategoryId(int $categoryId)
 * @method string getCoreWord
 * @method self withCoreWord(string $coreWord)
 * @method string getContent
 * @method self withContent(string $content)
 * @method string getCode
 * @method self withCode(string $code)
 * @method string getPerspectiveIds
 * @method self withPerspectiveIds(string $perspectiveIds)
 * @method string getBizDataRanges
 * @method self withBizDataRanges(string $bizDataRanges)
 */
class CreateMachineReadingArticle extends Rpc
{
    use R;
}

/**
 * @method int getCategoryId
 * @method self withCategoryId(int $categoryId)
 */
class DeleteCategory extends Rpc
{
    use R;
}

/**
 * @method string getName
 * @method self withName(string $name)
 * @method int getCategoryId
 * @method self withCategoryId(int $categoryId)
 */
class UpdateCategory extends Rpc
{
    use R;
}

/**
 * @method int getMachineReadingId
 * @method self withMachineReadingId(int $machineReadingId)
 */
class DeleteMachineReadingArticle extends Rpc
{
    use R;
}

/**
 * @method int getParentCategoryId
 * @method self withParentCategoryId(int $parentCategoryId)
 * @method string getName
 * @method self withName(string $name)
 */
class CreateCategory extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getSessionId
 * @method self withSessionId(string $sessionId)
 * @method string getMessageId
 * @method self withMessageId(string $messageId)
 * @method string getFeedback
 * @method self withFeedback(string $feedback)
 */
class Feedback extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getSessionId
 * @method self withSessionId(string $sessionId)
 * @method string getKnowledgeId
 * @method self withKnowledgeId(string $knowledgeId)
 * @method string getSenderId
 * @method self withSenderId(string $senderId)
 * @method string getSenderNick
 * @method self withSenderNick(string $senderNick)
 * @method string getTag
 * @method self withTag(string $tag)
 * @method string getUtterance
 * @method self withUtterance(string $utterance)
 * @method array getPerspective
 * @method self withPerspective(array $perspective)
 */
class Chat extends Rpc
{
    use R;
}
