<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method string getInstanceName
 * @method self withInstanceName
 * @method string getInstanceDescription
 * @method self withInstanceDescription
 * @method Integer getMaxConcurrentConversation
 * @method self withMaxConcurrentConversation
 * @method string getCallCenterInstanceId
 * @method self withCallCenterInstanceId
 */
final class CreateCabInstance extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getConnectId
 * @method self withConnectId
 * @method Long getStartTime
 * @method self withStartTime
 * @method Long getStopTime
 * @method self withStopTime
 * @method string getCallingNumber
 * @method self withCallingNumber
 * @method string getCalledNumber
 * @method self withCalledNumber
 * @method string getAgentId
 * @method self withAgentId
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class ListRecordingOfDualTrack extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getCalleeNumber
 * @method self withCalleeNumber
 * @method RepeatList getCandidateNumber
 * @method self withCandidateNumber
 * @method Integer getCount
 * @method self withCount
 */
final class PickOutboundNumbers extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getContactId
 * @method self withContactId
 * @method Boolean getMockResponse
 * @method self withMockResponse
 */
final class QueryRedialIndicator extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getDn
 * @method self withDn
 * @method string getAgentId
 * @method self withAgentId
 */
final class GetAgentState extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getSkillGroupId
 * @method self withSkillGroupId
 * @method string getNumber
 * @method self withNumber
 */
final class AddNumberToSkillGroup extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getSkillGroupId
 * @method self withSkillGroupId
 * @method string getNumber
 * @method self withNumber
 */
final class RemoveNumberFromSkillGroup extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getContactId
 * @method self withContactId
 * @method Long getStartTime
 * @method self withStartTime
 * @method Long getStopTime
 * @method self withStopTime
 * @method string getCallingNumber
 * @method self withCallingNumber
 * @method string getCalledNumber
 * @method self withCalledNumber
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class ListIvrTrackingDetail extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getSkillGroupId
 * @method self withSkillGroupId
 * @method RepeatList getUserId
 * @method self withUserId
 */
final class RemoveUsersFromSkillGroup extends RpcRequest
{
}

/**
 * @method string getIntervalType
 * @method self withIntervalType
 */
final class ListCallMeasureSummaryReports extends RpcRequest
{
}

/**
 * @method string getIntervalType
 * @method self withIntervalType
 * @method Integer getYear
 * @method self withYear
 * @method Integer getMonth
 * @method self withMonth
 * @method Integer getDay
 * @method self withDay
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class GetCallMeasureSummaryReport extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getTelA
 * @method self withTelA
 * @method string getTelB
 * @method self withTelB
 */
final class CallOnlinePrivacyNumber extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getCallId
 * @method self withCallId
 * @method string getContactId
 * @method self withContactId
 */
final class ModifyPrivacyNumberCallDetail extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method Long getStartTime
 * @method self withStartTime
 * @method Long getEndTime
 * @method self withEndTime
 * @method string getContactId
 * @method self withContactId
 * @method string getAgentId
 * @method self withAgentId
 * @method string getAgentName
 * @method self withAgentName
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class ListPrivacyNumberCallDetails extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getName
 * @method self withName
 * @method string getDescription
 * @method self withDescription
 * @method string getFileName
 * @method self withFileName
 * @method string getType
 * @method self withType
 * @method string getContent
 * @method self withContent
 * @method string getOssFileName
 * @method self withOssFileName
 * @method string getOssFilePath
 * @method self withOssFilePath
 * @method string getUploadResult
 * @method self withUploadResult
 */
final class CreateMedia extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getName
 * @method self withName
 * @method string getDescription
 * @method self withDescription
 * @method string getFileName
 * @method self withFileName
 * @method string getType
 * @method self withType
 * @method string getContent
 * @method self withContent
 * @method string getOssFileName
 * @method self withOssFileName
 * @method string getOssFilePath
 * @method self withOssFilePath
 * @method string getUploadResult
 * @method self withUploadResult
 */
final class ModifyMedia extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getName
 * @method self withName
 */
final class DeleteMedia extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getName
 * @method self withName
 * @method string getDescription
 * @method self withDescription
 * @method string getFileName
 * @method self withFileName
 * @method string getType
 * @method self withType
 * @method string getContent
 * @method self withContent
 */
final class PreModifyMedia extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getNamePrefix
 * @method self withNamePrefix
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class ListMedias extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getName
 * @method self withName
 * @method string getDescription
 * @method self withDescription
 * @method string getFileName
 * @method self withFileName
 * @method string getType
 * @method self withType
 * @method string getContent
 * @method self withContent
 */
final class PreCreateMedia extends RpcRequest
{
}

/**
 * @method string getOwnerId
 * @method self withOwnerId
 */
final class CreateCCCPostOrder extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getCaller
 * @method self withCaller
 * @method string getCallee
 * @method self withCallee
 * @method string getContractFlowId
 * @method self withContractFlowId
 */
final class SimpleDial extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getUserId
 * @method self withUserId
 */
final class ListOutboundPhoneNumberOfUser extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getSkillGroups
 * @method self withSkillGroups
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class ListSkillGroupSummaryReportsSinceMidnight extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getSkillGroupIds
 * @method self withSkillGroupIds
 * @method string getInterval
 * @method self withInterval
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class ListSkillGroupSummaryReportsByInterval extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class GetInstanceSummaryReport extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getInterval
 * @method self withInterval
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class GetInstanceSummaryReportByInterval extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class GetInstanceSummaryReportSinceMidnight extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getSkillGroupIds
 * @method self withSkillGroupIds
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class ListSkillGroupStates extends RpcRequest
{
}

/**
 * @method string getName
 * @method self withName
 * @method string getDescription
 * @method self withDescription
 * @method string getDomainName
 * @method self withDomainName
 * @method Integer getStorageMaxDays
 * @method self withStorageMaxDays
 * @method Integer getStorageMaxSize
 * @method self withStorageMaxSize
 * @method string getDirectoryId
 * @method self withDirectoryId
 * @method RepeatList getAdminRamId
 * @method self withAdminRamId
 * @method string getPhoneNumber
 * @method self withPhoneNumber
 */
final class CreateInstance extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 */
final class DeleteInstance extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 */
final class GetInstance extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getName
 * @method self withName
 * @method string getDescription
 * @method self withDescription
 * @method string getType
 * @method self withType
 * @method string getCanvas
 * @method self withCanvas
 * @method string getContent
 * @method self withContent
 */
final class CreateContactFlow extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getContactFlowVersionId
 * @method self withContactFlowVersionId
 * @method string getCanvas
 * @method self withCanvas
 * @method string getContent
 * @method self withContent
 */
final class CommitContactFlowVersionModification extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getContactFlowVersionId
 * @method self withContactFlowVersionId
 */
final class PublishContactFlowVersion extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 */
final class GetInstanceState extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getUserId
 * @method self withUserId
 * @method RepeatList getRoleId
 * @method self withRoleId
 * @method RepeatList getSkillGroupId
 * @method self withSkillGroupId
 * @method RepeatList getSkillLevel
 * @method self withSkillLevel
 */
final class ModifySkillGroupOfUser extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getProducerId
 * @method self withProducerId
 * @method string getAccessPoint
 * @method self withAccessPoint
 * @method string getTopic
 * @method self withTopic
 * @method RepeatList getSubscriptions
 * @method self withSubscriptions
 */
final class ModifyNotificationConfig extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getCriteria
 * @method self withCriteria
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class FindUsers extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getSkillGroupId
 * @method self withSkillGroupId
 * @method string getAgentIds
 * @method self withAgentIds
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class ListAgentSummaryReportsSinceMidnight extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getSkillGroupIds
 * @method self withSkillGroupIds
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class ListSkillGroupSummaryReports extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getSkillGroupId
 * @method self withSkillGroupId
 * @method string getAgentIds
 * @method self withAgentIds
 * @method string getInterval
 * @method self withInterval
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class ListAgentSummaryReportsByInterval extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getSkillGroupId
 * @method self withSkillGroupId
 * @method string getAgentIds
 * @method self withAgentIds
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class ListAgentSummaryReports extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getJobId
 * @method self withJobId
 */
final class GetPredictiveJob extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getOutboundTaskId
 * @method self withOutboundTaskId
 */
final class GetContactIdentifyByOutBoundTaskId extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getSkillGroupId
 * @method self withSkillGroupId
 * @method string getAgentIds
 * @method self withAgentIds
 * @method string getState
 * @method self withState
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class ListAgentStates extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method RepeatList getScenario
 * @method self withScenario
 */
final class GetSmsConfig extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method Long getStartTime
 * @method self withStartTime
 * @method Long getStopTime
 * @method self withStopTime
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getCriteria
 * @method self withCriteria
 */
final class ListRecentCallRecords extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getPhoneNumbers
 * @method self withPhoneNumbers
 * @method Long getConfigId
 * @method self withConfigId
 * @method string getTemplateParam
 * @method self withTemplateParam
 */
final class SendPredefinedShortMessage extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getAcid
 * @method self withAcid
 * @method string getSkillGroupId
 * @method self withSkillGroupId
 * @method Integer getContactType
 * @method self withContactType
 * @method string getPhoneNumbers
 * @method self withPhoneNumbers
 */
final class LaunchShortMessageAppraise extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getContactId
 * @method self withContactId
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class GetConversationDetailByContactId extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getJobGroupId
 * @method self withJobGroupId
 */
final class DeleteJobGroup extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getScenarioId
 * @method self withScenarioId
 * @method string getName
 * @method self withName
 * @method string getDescription
 * @method self withDescription
 * @method string getVariables
 * @method self withVariables
 */
final class ModifyScenario extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method Boolean getAll
 * @method self withAll
 * @method string getJobGroupId
 * @method self withJobGroupId
 * @method RepeatList getJobId
 * @method self withJobId
 */
final class CancelPredictiveJobs extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getSkillGroupId
 * @method self withSkillGroupId
 * @method string getStrategyJson
 * @method self withStrategyJson
 * @method RepeatList getJobsJson
 * @method self withJobsJson
 */
final class CreatePredictiveJobs extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getJobGroupId
 * @method self withJobGroupId
 * @method Long getStartTime
 * @method self withStartTime
 * @method Long getEndTime
 * @method self withEndTime
 * @method string getTimeAlignment
 * @method self withTimeAlignment
 * @method string getContactName
 * @method self withContactName
 * @method string getPhoneNumber
 * @method self withPhoneNumber
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class ListPredictiveJobStatus extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getScenarioId
 * @method self withScenarioId
 * @method string getName
 * @method self withName
 * @method string getDescription
 * @method self withDescription
 * @method string getFlowJson
 * @method self withFlowJson
 * @method string getCorpora
 * @method self withCorpora
 * @method string getSpeechOptimizationParam
 * @method self withSpeechOptimizationParam
 * @method string getGlobalQuestions
 * @method self withGlobalQuestions
 * @method string getRole
 * @method self withRole
 * @method Integer getRound
 * @method self withRound
 */
final class CreateSurvey extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getScenarioId
 * @method self withScenarioId
 * @method string getSurveyId
 * @method self withSurveyId
 */
final class DeleteSurvey extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getScenarioId
 * @method self withScenarioId
 * @method string getSurveyId
 * @method self withSurveyId
 */
final class GetSurvey extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getScenarioId
 * @method self withScenarioId
 */
final class ListSurveys extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getSurveyId
 * @method self withSurveyId
 * @method string getScenarioId
 * @method self withScenarioId
 * @method string getName
 * @method self withName
 * @method string getDescription
 * @method self withDescription
 * @method string getFlowId
 * @method self withFlowId
 * @method string getFlowJson
 * @method self withFlowJson
 * @method string getCorpora
 * @method self withCorpora
 * @method string getSpeechOptimizationParam
 * @method self withSpeechOptimizationParam
 * @method string getGlobalQuestions
 * @method self withGlobalQuestions
 * @method string getRole
 * @method self withRole
 * @method Integer getRound
 * @method self withRound
 */
final class ModifySurvey extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getScenarioId
 * @method self withScenarioId
 * @method string getSurveyId
 * @method self withSurveyId
 */
final class PublishSurvey extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getScenarioId
 * @method self withScenarioId
 */
final class GetScenario extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getScenarioId
 * @method self withScenarioId
 */
final class GetJobTemplateDownloadParams extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getJobGroupId
 * @method self withJobGroupId
 */
final class DownloadUnreachableContacts extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getJobGroupId
 * @method self withJobGroupId
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class ListUnreachableContacts extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getJobGroupId
 * @method self withJobGroupId
 * @method string getTitle
 * @method self withTitle
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class ListBasicStatisticsReportSubItems extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getJobGroupId
 * @method self withJobGroupId
 */
final class DownloadOriginalStatisticsReport extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getUserId
 * @method self withUserId
 */
final class ListPrivilegesOfUser extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getAgentId
 * @method self withAgentId
 * @method string getStartDate
 * @method self withStartDate
 * @method string getEndDate
 * @method self withEndDate
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class GenerateAgentStatisticReport extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getWorkflowId
 * @method self withWorkflowId
 * @method string getCallCenterNumber
 * @method self withCallCenterNumber
 * @method string getCaller
 * @method self withCaller
 * @method string getCallee
 * @method self withCallee
 */
final class StartBack2BackCall extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getCaller
 * @method self withCaller
 * @method string getCalleeAgent
 * @method self withCalleeAgent
 * @method string getCalleeCustomer
 * @method self withCalleeCustomer
 */
final class TwoPartiesCall extends RpcRequest
{
}

/**
 * @method string getPublicKey
 * @method self withPublicKey
 * @method RepeatList getPlainText
 * @method self withPlainText
 */
final class Encrypt extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getStartDay
 * @method self withStartDay
 * @method string getEndDay
 * @method self withEndDay
 * @method string getUserId
 * @method self withUserId
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class GetAgentData extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getJobGroupId
 * @method self withJobGroupId
 */
final class GetJobGroup extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getGroupId
 * @method self withGroupId
 * @method string getScenarioId
 * @method self withScenarioId
 * @method string getStrategyJson
 * @method self withStrategyJson
 * @method RepeatList getCallingNumber
 * @method self withCallingNumber
 * @method RepeatList getJobsJson
 * @method self withJobsJson
 */
final class AssignJobs extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method Boolean getAll
 * @method self withAll
 * @method string getScenarioId
 * @method self withScenarioId
 * @method string getGroupId
 * @method self withGroupId
 * @method RepeatList getJobId
 * @method self withJobId
 * @method RepeatList getJobReferenceId
 * @method self withJobReferenceId
 */
final class CancelJobs extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getName
 * @method self withName
 * @method string getDescription
 * @method self withDescription
 * @method string getScenarioId
 * @method self withScenarioId
 * @method string getStrategyJson
 * @method self withStrategyJson
 * @method RepeatList getCallingNumber
 * @method self withCallingNumber
 * @method string getJobFilePath
 * @method self withJobFilePath
 * @method Boolean getSubmitted
 * @method self withSubmitted
 */
final class CreateBatchJobs extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getJobGroupId
 * @method self withJobGroupId
 * @method string getJobStatus
 * @method self withJobStatus
 * @method string getJobFailureReason
 * @method self withJobFailureReason
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class ListJobsByGroup extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method Boolean getAll
 * @method self withAll
 * @method string getScenarioId
 * @method self withScenarioId
 * @method string getGroupId
 * @method self withGroupId
 * @method RepeatList getJobId
 * @method self withJobId
 * @method RepeatList getJobReferenceId
 * @method self withJobReferenceId
 */
final class ResumeJobs extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getJobGroupId
 * @method self withJobGroupId
 */
final class SubmitBatchJobs extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method Boolean getAll
 * @method self withAll
 * @method string getScenarioId
 * @method self withScenarioId
 * @method string getGroupId
 * @method self withGroupId
 * @method RepeatList getJobId
 * @method self withJobId
 * @method RepeatList getJobReferenceId
 * @method self withJobReferenceId
 */
final class SuspendJobs extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getName
 * @method self withName
 * @method string getDescription
 * @method self withDescription
 * @method string getTemplateId
 * @method self withTemplateId
 * @method string getVariables
 * @method self withVariables
 */
final class CreateScenarioFromTemplate extends RpcRequest
{
}

final class ListScenarioTemplates extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getFileName
 * @method self withFileName
 */
final class GetJobDataUploadParams extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getAcid
 * @method self withAcid
 */
final class LaunchAppraise extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getTaskId
 * @method self withTaskId
 */
final class GetConversationList extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getJobGroupId
 * @method self withJobGroupId
 * @method Integer getStatus
 * @method self withStatus
 * @method Boolean getQueryAll
 * @method self withQueryAll
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class GetJobList extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getJobId
 * @method self withJobId
 */
final class GetTaskList extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method RepeatList getConfigItem
 * @method self withConfigItem
 */
final class ListConfig extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 */
final class ListRealTimeAgent extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getJobId
 * @method self withJobId
 */
final class GetJob extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 */
final class ListScenarios extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getName
 * @method self withName
 * @method string getDescription
 * @method self withDescription
 * @method string getStrategyJson
 * @method self withStrategyJson
 * @method string getType
 * @method self withType
 * @method RepeatList getSurveysJson
 * @method self withSurveysJson
 */
final class CreateScenario extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getNumber
 * @method self withNumber
 */
final class GetNumberRegionInfo extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getCalleeNumber
 * @method self withCalleeNumber
 * @method RepeatList getCandidateNumber
 * @method self withCandidateNumber
 */
final class PickLocalNumber extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getCallId
 * @method self withCallId
 * @method string getCallType
 * @method self withCallType
 * @method string getScenarioId
 * @method self withScenarioId
 * @method string getTaskId
 * @method self withTaskId
 * @method string getUtterance
 * @method self withUtterance
 * @method string getActionKey
 * @method self withActionKey
 * @method string getActionParams
 * @method self withActionParams
 * @method string getCallingNumber
 * @method self withCallingNumber
 * @method string getCalledNumber
 * @method self withCalledNumber
 */
final class Dialogue extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getName
 * @method self withName
 * @method string getDescription
 * @method self withDescription
 * @method string getScenarioId
 * @method self withScenarioId
 * @method string getStrategyJson
 * @method self withStrategyJson
 * @method RepeatList getCallingNumber
 * @method self withCallingNumber
 */
final class CreateJobGroup extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method Long getStartTime
 * @method self withStartTime
 * @method Long getEndTime
 * @method self withEndTime
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class ListJobGroups extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getCallId
 * @method self withCallId
 */
final class GetJobStatusByCallId extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getScenarioId
 * @method self withScenarioId
 * @method string getGroupId
 * @method self withGroupId
 * @method Long getStartTime
 * @method self withStartTime
 * @method Long getEndTime
 * @method self withEndTime
 * @method string getTimeAlignment
 * @method self withTimeAlignment
 * @method string getContactName
 * @method self withContactName
 * @method string getPhoneNumber
 * @method self withPhoneNumber
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class ListJobStatus extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getGroupId
 * @method self withGroupId
 * @method string getScenarioId
 * @method self withScenarioId
 * @method RepeatList getCallingNumber
 * @method self withCallingNumber
 * @method string getJobJson
 * @method self withJobJson
 * @method Boolean getSelfHostedCallCenter
 * @method self withSelfHostedCallCenter
 */
final class StartJob extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getContactId
 * @method self withContactId
 */
final class ListRecordingsByContactId extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getPhoneNumber
 * @method self withPhoneNumber
 * @method Long getStartTime
 * @method self withStartTime
 * @method Long getStopTime
 * @method self withStopTime
 * @method string getCriteria
 * @method self withCriteria
 * @method string getContactType
 * @method self withContactType
 * @method string getContactDisposition
 * @method self withContactDisposition
 * @method Boolean getWithRecording
 * @method self withWithRecording
 * @method string getContactId
 * @method self withContactId
 * @method string getOrderBy
 * @method self withOrderBy
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class ListCallDetailRecords extends RpcRequest
{
}

/**
 * @method Long getStopTime
 * @method self withStopTime
 * @method string getInstanceId
 * @method self withInstanceId
 * @method Long getStartTime
 * @method self withStartTime
 * @method string getPhoneNumber
 * @method self withPhoneNumber
 * @method string getAgentId
 * @method self withAgentId
 * @method string getCriteria
 * @method self withCriteria
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class ListRecordings extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getFileName
 * @method self withFileName
 * @method string getChannel
 * @method self withChannel
 */
final class DownloadRecording extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 */
final class RequestLoginInfo extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method RepeatList getUserId
 * @method self withUserId
 */
final class RemoveUsers extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getPhoneNumberId
 * @method self withPhoneNumberId
 */
final class RemovePhoneNumber extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getPhoneNumber
 * @method self withPhoneNumber
 * @method string getUsage
 * @method self withUsage
 * @method string getContactFlowId
 * @method self withContactFlowId
 */
final class AddPhoneNumber extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method RepeatList getUserRamId
 * @method self withUserRamId
 * @method RepeatList getRoleId
 * @method self withRoleId
 * @method RepeatList getSkillGroupId
 * @method self withSkillGroupId
 * @method RepeatList getSkillLevel
 * @method self withSkillLevel
 */
final class AssignUsers extends RpcRequest
{
}

/**
 * @method string getName
 * @method self withName
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getDescription
 * @method self withDescription
 * @method RepeatList getOutboundPhoneNumberId
 * @method self withOutboundPhoneNumberId
 * @method RepeatList getUserId
 * @method self withUserId
 * @method RepeatList getSkillLevel
 * @method self withSkillLevel
 */
final class CreateSkillGroup extends RpcRequest
{
}

/**
 * @method string getDisplayName
 * @method self withDisplayName
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getLoginName
 * @method self withLoginName
 * @method string getPhone
 * @method self withPhone
 * @method string getEmail
 * @method self withEmail
 * @method string getPrivateOutboundNumberId
 * @method self withPrivateOutboundNumberId
 * @method RepeatList getRoleId
 * @method self withRoleId
 * @method RepeatList getSkillGroupId
 * @method self withSkillGroupId
 * @method RepeatList getSkillLevel
 * @method self withSkillLevel
 */
final class CreateUser extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getSkillGroupId
 * @method self withSkillGroupId
 */
final class DeleteSkillGroup extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getName
 * @method self withName
 * @method string getObjectId
 * @method self withObjectId
 * @method string getObjectType
 * @method self withObjectType
 */
final class GetConfig extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getServiceType
 * @method self withServiceType
 */
final class GetServiceExtensions extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getUserId
 * @method self withUserId
 */
final class GetUser extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 */
final class ListContactFlows extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method Boolean getOutboundOnly
 * @method self withOutboundOnly
 */
final class ListPhoneNumbers extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 */
final class ListRoles extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 */
final class ListSkillGroups extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getUserId
 * @method self withUserId
 */
final class ListSkillGroupsOfUser extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class ListUsers extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getSkillGroupId
 * @method self withSkillGroupId
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class ListUsersOfSkillGroup extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getPhoneNumberId
 * @method self withPhoneNumberId
 * @method string getUsage
 * @method self withUsage
 * @method string getContactFlowId
 * @method self withContactFlowId
 */
final class ModifyPhoneNumber extends RpcRequest
{
}

/**
 * @method string getName
 * @method self withName
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getSkillGroupId
 * @method self withSkillGroupId
 * @method string getDescription
 * @method self withDescription
 * @method RepeatList getOutboundPhoneNumberId
 * @method self withOutboundPhoneNumberId
 * @method RepeatList getUserId
 * @method self withUserId
 * @method RepeatList getSkillLevel
 * @method self withSkillLevel
 * @method Boolean getAllowPrivateOutboundNumber
 * @method self withAllowPrivateOutboundNumber
 */
final class ModifySkillGroup extends RpcRequest
{
}

/**
 * @method string getDisplayName
 * @method self withDisplayName
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getUserId
 * @method self withUserId
 * @method string getPhone
 * @method self withPhone
 * @method string getEmail
 * @method self withEmail
 * @method string getPrivateOutboundNumberId
 * @method self withPrivateOutboundNumberId
 * @method RepeatList getRoleId
 * @method self withRoleId
 * @method RepeatList getSkillGroupId
 * @method self withSkillGroupId
 * @method RepeatList getSkillLevel
 * @method self withSkillLevel
 */
final class ModifyUser extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 */
final class RefreshToken extends RpcRequest
{
}
