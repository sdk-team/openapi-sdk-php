<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RpcRequest as Rpc;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method CreateCabInstance createCabInstance($options = [])
 * @method ListRecordingOfDualTrack listRecordingOfDualTrack($options = [])
 * @method PickOutboundNumbers pickOutboundNumbers($options = [])
 * @method QueryRedialIndicator queryRedialIndicator($options = [])
 * @method GetAgentState getAgentState($options = [])
 * @method AddNumberToSkillGroup addNumberToSkillGroup($options = [])
 * @method RemoveNumberFromSkillGroup removeNumberFromSkillGroup($options = [])
 * @method ListIvrTrackingDetail listIvrTrackingDetail($options = [])
 * @method RemoveUsersFromSkillGroup removeUsersFromSkillGroup($options = [])
 * @method ListCallMeasureSummaryReports listCallMeasureSummaryReports($options = [])
 * @method GetCallMeasureSummaryReport getCallMeasureSummaryReport($options = [])
 * @method CallOnlinePrivacyNumber callOnlinePrivacyNumber($options = [])
 * @method ModifyPrivacyNumberCallDetail modifyPrivacyNumberCallDetail($options = [])
 * @method ListPrivacyNumberCallDetails listPrivacyNumberCallDetails($options = [])
 * @method CreateMedia createMedia($options = [])
 * @method ModifyMedia modifyMedia($options = [])
 * @method DeleteMedia deleteMedia($options = [])
 * @method PreModifyMedia preModifyMedia($options = [])
 * @method ListMedias listMedias($options = [])
 * @method PreCreateMedia preCreateMedia($options = [])
 * @method CreateCCCPostOrder createCCCPostOrder($options = [])
 * @method SimpleDial simpleDial($options = [])
 * @method ListOutboundPhoneNumberOfUser listOutboundPhoneNumberOfUser($options = [])
 * @method ListSkillGroupSummaryReportsSinceMidnight listSkillGroupSummaryReportsSinceMidnight($options = [])
 * @method ListSkillGroupSummaryReportsByInterval listSkillGroupSummaryReportsByInterval($options = [])
 * @method GetInstanceSummaryReport getInstanceSummaryReport($options = [])
 * @method GetInstanceSummaryReportByInterval getInstanceSummaryReportByInterval($options = [])
 * @method GetInstanceSummaryReportSinceMidnight getInstanceSummaryReportSinceMidnight($options = [])
 * @method ListSkillGroupStates listSkillGroupStates($options = [])
 * @method CreateInstance createInstance($options = [])
 * @method DeleteInstance deleteInstance($options = [])
 * @method GetInstance getInstance($options = [])
 * @method CreateContactFlow createContactFlow($options = [])
 * @method CommitContactFlowVersionModification commitContactFlowVersionModification($options = [])
 * @method PublishContactFlowVersion publishContactFlowVersion($options = [])
 * @method GetInstanceState getInstanceState($options = [])
 * @method ModifySkillGroupOfUser modifySkillGroupOfUser($options = [])
 * @method ModifyNotificationConfig modifyNotificationConfig($options = [])
 * @method FindUsers findUsers($options = [])
 * @method ListAgentSummaryReportsSinceMidnight listAgentSummaryReportsSinceMidnight($options = [])
 * @method ListSkillGroupSummaryReports listSkillGroupSummaryReports($options = [])
 * @method ListAgentSummaryReportsByInterval listAgentSummaryReportsByInterval($options = [])
 * @method ListAgentSummaryReports listAgentSummaryReports($options = [])
 * @method GetPredictiveJob getPredictiveJob($options = [])
 * @method GetContactIdentifyByOutBoundTaskId getContactIdentifyByOutBoundTaskId($options = [])
 * @method ListAgentStates listAgentStates($options = [])
 * @method GetSmsConfig getSmsConfig($options = [])
 * @method ListRecentCallRecords listRecentCallRecords($options = [])
 * @method SendPredefinedShortMessage sendPredefinedShortMessage($options = [])
 * @method LaunchShortMessageAppraise launchShortMessageAppraise($options = [])
 * @method GetConversationDetailByContactId getConversationDetailByContactId($options = [])
 * @method DeleteJobGroup deleteJobGroup($options = [])
 * @method ModifyScenario modifyScenario($options = [])
 * @method CancelPredictiveJobs cancelPredictiveJobs($options = [])
 * @method CreatePredictiveJobs createPredictiveJobs($options = [])
 * @method ListPredictiveJobStatus listPredictiveJobStatus($options = [])
 * @method CreateSurvey createSurvey($options = [])
 * @method DeleteSurvey deleteSurvey($options = [])
 * @method GetSurvey getSurvey($options = [])
 * @method ListSurveys listSurveys($options = [])
 * @method ModifySurvey modifySurvey($options = [])
 * @method PublishSurvey publishSurvey($options = [])
 * @method GetScenario getScenario($options = [])
 * @method GetJobTemplateDownloadParams getJobTemplateDownloadParams($options = [])
 * @method DownloadUnreachableContacts downloadUnreachableContacts($options = [])
 * @method ListUnreachableContacts listUnreachableContacts($options = [])
 * @method ListBasicStatisticsReportSubItems listBasicStatisticsReportSubItems($options = [])
 * @method DownloadOriginalStatisticsReport downloadOriginalStatisticsReport($options = [])
 * @method ListPrivilegesOfUser listPrivilegesOfUser($options = [])
 * @method GenerateAgentStatisticReport generateAgentStatisticReport($options = [])
 * @method StartBack2BackCall startBack2BackCall($options = [])
 * @method TwoPartiesCall twoPartiesCall($options = [])
 * @method Encrypt encrypt($options = [])
 * @method GetAgentData getAgentData($options = [])
 * @method GetJobGroup getJobGroup($options = [])
 * @method AssignJobs assignJobs($options = [])
 * @method CancelJobs cancelJobs($options = [])
 * @method CreateBatchJobs createBatchJobs($options = [])
 * @method ListJobsByGroup listJobsByGroup($options = [])
 * @method ResumeJobs resumeJobs($options = [])
 * @method SubmitBatchJobs submitBatchJobs($options = [])
 * @method SuspendJobs suspendJobs($options = [])
 * @method CreateScenarioFromTemplate createScenarioFromTemplate($options = [])
 * @method ListScenarioTemplates listScenarioTemplates($options = [])
 * @method GetJobDataUploadParams getJobDataUploadParams($options = [])
 * @method LaunchAppraise launchAppraise($options = [])
 * @method GetConversationList getConversationList($options = [])
 * @method GetJobList getJobList($options = [])
 * @method GetTaskList getTaskList($options = [])
 * @method ListConfig listConfig($options = [])
 * @method ListRealTimeAgent listRealTimeAgent($options = [])
 * @method GetJob getJob($options = [])
 * @method ListScenarios listScenarios($options = [])
 * @method CreateScenario createScenario($options = [])
 * @method GetNumberRegionInfo getNumberRegionInfo($options = [])
 * @method PickLocalNumber pickLocalNumber($options = [])
 * @method Dialogue dialogue($options = [])
 * @method CreateJobGroup createJobGroup($options = [])
 * @method ListJobGroups listJobGroups($options = [])
 * @method GetJobStatusByCallId getJobStatusByCallId($options = [])
 * @method ListJobStatus listJobStatus($options = [])
 * @method StartJob startJob($options = [])
 * @method ListRecordingsByContactId listRecordingsByContactId($options = [])
 * @method ListCallDetailRecords listCallDetailRecords($options = [])
 * @method ListRecordings listRecordings($options = [])
 * @method DownloadRecording downloadRecording($options = [])
 * @method RequestLoginInfo requestLoginInfo($options = [])
 * @method RemoveUsers removeUsers($options = [])
 * @method RemovePhoneNumber removePhoneNumber($options = [])
 * @method AddPhoneNumber addPhoneNumber($options = [])
 * @method AssignUsers assignUsers($options = [])
 * @method CreateSkillGroup createSkillGroup($options = [])
 * @method CreateUser createUser($options = [])
 * @method DeleteSkillGroup deleteSkillGroup($options = [])
 * @method GetConfig getConfig($options = [])
 * @method GetServiceExtensions getServiceExtensions($options = [])
 * @method GetUser getUser($options = [])
 * @method ListContactFlows listContactFlows($options = [])
 * @method ListPhoneNumbers listPhoneNumbers($options = [])
 * @method ListRoles listRoles($options = [])
 * @method ListSkillGroups listSkillGroups($options = [])
 * @method ListSkillGroupsOfUser listSkillGroupsOfUser($options = [])
 * @method ListUsers listUsers($options = [])
 * @method ListUsersOfSkillGroup listUsersOfSkillGroup($options = [])
 * @method ModifyPhoneNumber modifyPhoneNumber($options = [])
 * @method ModifySkillGroup modifySkillGroup($options = [])
 * @method ModifyUser modifyUser($options = [])
 * @method RefreshToken refreshToken($options = [])
 */
class V20170705
{
    use ApiResolverTrait;
}

/**
 * @method string getInstanceName
 * @method self withInstanceName(string $instanceName)
 * @method string getInstanceDescription
 * @method self withInstanceDescription(string $instanceDescription)
 * @method Integer getMaxConcurrentConversation
 * @method self withMaxConcurrentConversation(Integer $maxConcurrentConversation)
 * @method string getCallCenterInstanceId
 * @method self withCallCenterInstanceId(string $callCenterInstanceId)
 */
class CreateCabInstance extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getConnectId
 * @method self withConnectId(string $connectId)
 * @method int getStartTime
 * @method self withStartTime(int $startTime)
 * @method int getStopTime
 * @method self withStopTime(int $stopTime)
 * @method string getCallingNumber
 * @method self withCallingNumber(string $callingNumber)
 * @method string getCalledNumber
 * @method self withCalledNumber(string $calledNumber)
 * @method string getAgentId
 * @method self withAgentId(string $agentId)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class ListRecordingOfDualTrack extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getCalleeNumber
 * @method self withCalleeNumber(string $calleeNumber)
 * @method array getCandidateNumber
 * @method self withCandidateNumber(array $candidateNumber)
 * @method Integer getCount
 * @method self withCount(Integer $count)
 */
class PickOutboundNumbers extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getContactId
 * @method self withContactId(string $contactId)
 * @method bool getMockResponse
 * @method self withMockResponse(bool $mockResponse)
 */
class QueryRedialIndicator extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getDn
 * @method self withDn(string $dn)
 * @method string getAgentId
 * @method self withAgentId(string $agentId)
 */
class GetAgentState extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getSkillGroupId
 * @method self withSkillGroupId(string $skillGroupId)
 * @method string getNumber
 * @method self withNumber(string $number)
 */
class AddNumberToSkillGroup extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getSkillGroupId
 * @method self withSkillGroupId(string $skillGroupId)
 * @method string getNumber
 * @method self withNumber(string $number)
 */
class RemoveNumberFromSkillGroup extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getContactId
 * @method self withContactId(string $contactId)
 * @method int getStartTime
 * @method self withStartTime(int $startTime)
 * @method int getStopTime
 * @method self withStopTime(int $stopTime)
 * @method string getCallingNumber
 * @method self withCallingNumber(string $callingNumber)
 * @method string getCalledNumber
 * @method self withCalledNumber(string $calledNumber)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class ListIvrTrackingDetail extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getSkillGroupId
 * @method self withSkillGroupId(string $skillGroupId)
 * @method array getUserId
 * @method self withUserId(array $userId)
 */
class RemoveUsersFromSkillGroup extends Rpc
{
    use R;
}

/**
 * @method string getIntervalType
 * @method self withIntervalType(string $intervalType)
 */
class ListCallMeasureSummaryReports extends Rpc
{
    use R;
}

/**
 * @method string getIntervalType
 * @method self withIntervalType(string $intervalType)
 * @method Integer getYear
 * @method self withYear(Integer $year)
 * @method Integer getMonth
 * @method self withMonth(Integer $month)
 * @method Integer getDay
 * @method self withDay(Integer $day)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class GetCallMeasureSummaryReport extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getTelA
 * @method self withTelA(string $telA)
 * @method string getTelB
 * @method self withTelB(string $telB)
 */
class CallOnlinePrivacyNumber extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getCallId
 * @method self withCallId(string $callId)
 * @method string getContactId
 * @method self withContactId(string $contactId)
 */
class ModifyPrivacyNumberCallDetail extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method int getStartTime
 * @method self withStartTime(int $startTime)
 * @method int getEndTime
 * @method self withEndTime(int $endTime)
 * @method string getContactId
 * @method self withContactId(string $contactId)
 * @method string getAgentId
 * @method self withAgentId(string $agentId)
 * @method string getAgentName
 * @method self withAgentName(string $agentName)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class ListPrivacyNumberCallDetails extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getFileName
 * @method self withFileName(string $fileName)
 * @method string getType
 * @method self withType(string $type)
 * @method string getContent
 * @method self withContent(string $content)
 * @method string getOssFileName
 * @method self withOssFileName(string $ossFileName)
 * @method string getOssFilePath
 * @method self withOssFilePath(string $ossFilePath)
 * @method string getUploadResult
 * @method self withUploadResult(string $uploadResult)
 */
class CreateMedia extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getFileName
 * @method self withFileName(string $fileName)
 * @method string getType
 * @method self withType(string $type)
 * @method string getContent
 * @method self withContent(string $content)
 * @method string getOssFileName
 * @method self withOssFileName(string $ossFileName)
 * @method string getOssFilePath
 * @method self withOssFilePath(string $ossFilePath)
 * @method string getUploadResult
 * @method self withUploadResult(string $uploadResult)
 */
class ModifyMedia extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getName
 * @method self withName(string $name)
 */
class DeleteMedia extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getFileName
 * @method self withFileName(string $fileName)
 * @method string getType
 * @method self withType(string $type)
 * @method string getContent
 * @method self withContent(string $content)
 */
class PreModifyMedia extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getNamePrefix
 * @method self withNamePrefix(string $namePrefix)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class ListMedias extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getFileName
 * @method self withFileName(string $fileName)
 * @method string getType
 * @method self withType(string $type)
 * @method string getContent
 * @method self withContent(string $content)
 */
class PreCreateMedia extends Rpc
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 */
class CreateCCCPostOrder extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getCaller
 * @method self withCaller(string $caller)
 * @method string getCallee
 * @method self withCallee(string $callee)
 * @method string getContractFlowId
 * @method self withContractFlowId(string $contractFlowId)
 */
class SimpleDial extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getUserId
 * @method self withUserId(string $userId)
 */
class ListOutboundPhoneNumberOfUser extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getSkillGroups
 * @method self withSkillGroups(string $skillGroups)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class ListSkillGroupSummaryReportsSinceMidnight extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getSkillGroupIds
 * @method self withSkillGroupIds(string $skillGroupIds)
 * @method string getInterval
 * @method self withInterval(string $interval)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class ListSkillGroupSummaryReportsByInterval extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class GetInstanceSummaryReport extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getInterval
 * @method self withInterval(string $interval)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class GetInstanceSummaryReportByInterval extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class GetInstanceSummaryReportSinceMidnight extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getSkillGroupIds
 * @method self withSkillGroupIds(string $skillGroupIds)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class ListSkillGroupStates extends Rpc
{
    use R;
}

/**
 * @method string getName
 * @method self withName(string $name)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method Integer getStorageMaxDays
 * @method self withStorageMaxDays(Integer $storageMaxDays)
 * @method Integer getStorageMaxSize
 * @method self withStorageMaxSize(Integer $storageMaxSize)
 * @method string getDirectoryId
 * @method self withDirectoryId(string $directoryId)
 * @method array getAdminRamId
 * @method self withAdminRamId(array $adminRamId)
 * @method string getPhoneNumber
 * @method self withPhoneNumber(string $phoneNumber)
 */
class CreateInstance extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class DeleteInstance extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class GetInstance extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getType
 * @method self withType(string $type)
 * @method string getCanvas
 * @method self withCanvas(string $canvas)
 * @method string getContent
 * @method self withContent(string $content)
 */
class CreateContactFlow extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getContactFlowVersionId
 * @method self withContactFlowVersionId(string $contactFlowVersionId)
 * @method string getCanvas
 * @method self withCanvas(string $canvas)
 * @method string getContent
 * @method self withContent(string $content)
 */
class CommitContactFlowVersionModification extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getContactFlowVersionId
 * @method self withContactFlowVersionId(string $contactFlowVersionId)
 */
class PublishContactFlowVersion extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class GetInstanceState extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getUserId
 * @method self withUserId(string $userId)
 * @method array getRoleId
 * @method self withRoleId(array $roleId)
 * @method array getSkillGroupId
 * @method self withSkillGroupId(array $skillGroupId)
 * @method array getSkillLevel
 * @method self withSkillLevel(array $skillLevel)
 */
class ModifySkillGroupOfUser extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getProducerId
 * @method self withProducerId(string $producerId)
 * @method string getAccessPoint
 * @method self withAccessPoint(string $accessPoint)
 * @method string getTopic
 * @method self withTopic(string $topic)
 * @method array getSubscriptions
 * @method self withSubscriptions(array $subscriptions)
 */
class ModifyNotificationConfig extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getCriteria
 * @method self withCriteria(string $criteria)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class FindUsers extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getSkillGroupId
 * @method self withSkillGroupId(string $skillGroupId)
 * @method string getAgentIds
 * @method self withAgentIds(string $agentIds)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class ListAgentSummaryReportsSinceMidnight extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getSkillGroupIds
 * @method self withSkillGroupIds(string $skillGroupIds)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class ListSkillGroupSummaryReports extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getSkillGroupId
 * @method self withSkillGroupId(string $skillGroupId)
 * @method string getAgentIds
 * @method self withAgentIds(string $agentIds)
 * @method string getInterval
 * @method self withInterval(string $interval)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class ListAgentSummaryReportsByInterval extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getSkillGroupId
 * @method self withSkillGroupId(string $skillGroupId)
 * @method string getAgentIds
 * @method self withAgentIds(string $agentIds)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class ListAgentSummaryReports extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getJobId
 * @method self withJobId(string $jobId)
 */
class GetPredictiveJob extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getOutboundTaskId
 * @method self withOutboundTaskId(string $outboundTaskId)
 */
class GetContactIdentifyByOutBoundTaskId extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getSkillGroupId
 * @method self withSkillGroupId(string $skillGroupId)
 * @method string getAgentIds
 * @method self withAgentIds(string $agentIds)
 * @method string getState
 * @method self withState(string $state)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class ListAgentStates extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method array getScenario
 * @method self withScenario(array $scenario)
 */
class GetSmsConfig extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method int getStartTime
 * @method self withStartTime(int $startTime)
 * @method int getStopTime
 * @method self withStopTime(int $stopTime)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getCriteria
 * @method self withCriteria(string $criteria)
 */
class ListRecentCallRecords extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getPhoneNumbers
 * @method self withPhoneNumbers(string $phoneNumbers)
 * @method int getConfigId
 * @method self withConfigId(int $configId)
 * @method string getTemplateParam
 * @method self withTemplateParam(string $templateParam)
 */
class SendPredefinedShortMessage extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getAcid
 * @method self withAcid(string $acid)
 * @method string getSkillGroupId
 * @method self withSkillGroupId(string $skillGroupId)
 * @method Integer getContactType
 * @method self withContactType(Integer $contactType)
 * @method string getPhoneNumbers
 * @method self withPhoneNumbers(string $phoneNumbers)
 */
class LaunchShortMessageAppraise extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getContactId
 * @method self withContactId(string $contactId)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class GetConversationDetailByContactId extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getJobGroupId
 * @method self withJobGroupId(string $jobGroupId)
 */
class DeleteJobGroup extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getScenarioId
 * @method self withScenarioId(string $scenarioId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getVariables
 * @method self withVariables(string $variables)
 */
class ModifyScenario extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method bool getAll
 * @method self withAll(bool $all)
 * @method string getJobGroupId
 * @method self withJobGroupId(string $jobGroupId)
 * @method array getJobId
 * @method self withJobId(array $jobId)
 */
class CancelPredictiveJobs extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getSkillGroupId
 * @method self withSkillGroupId(string $skillGroupId)
 * @method string getStrategyJson
 * @method self withStrategyJson(string $strategyJson)
 * @method array getJobsJson
 * @method self withJobsJson(array $jobsJson)
 */
class CreatePredictiveJobs extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getJobGroupId
 * @method self withJobGroupId(string $jobGroupId)
 * @method int getStartTime
 * @method self withStartTime(int $startTime)
 * @method int getEndTime
 * @method self withEndTime(int $endTime)
 * @method string getTimeAlignment
 * @method self withTimeAlignment(string $timeAlignment)
 * @method string getContactName
 * @method self withContactName(string $contactName)
 * @method string getPhoneNumber
 * @method self withPhoneNumber(string $phoneNumber)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class ListPredictiveJobStatus extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getScenarioId
 * @method self withScenarioId(string $scenarioId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getFlowJson
 * @method self withFlowJson(string $flowJson)
 * @method string getCorpora
 * @method self withCorpora(string $corpora)
 * @method string getSpeechOptimizationParam
 * @method self withSpeechOptimizationParam(string $speechOptimizationParam)
 * @method string getGlobalQuestions
 * @method self withGlobalQuestions(string $globalQuestions)
 * @method string getRole
 * @method self withRole(string $role)
 * @method Integer getRound
 * @method self withRound(Integer $round)
 */
class CreateSurvey extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getScenarioId
 * @method self withScenarioId(string $scenarioId)
 * @method string getSurveyId
 * @method self withSurveyId(string $surveyId)
 */
class DeleteSurvey extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getScenarioId
 * @method self withScenarioId(string $scenarioId)
 * @method string getSurveyId
 * @method self withSurveyId(string $surveyId)
 */
class GetSurvey extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getScenarioId
 * @method self withScenarioId(string $scenarioId)
 */
class ListSurveys extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getSurveyId
 * @method self withSurveyId(string $surveyId)
 * @method string getScenarioId
 * @method self withScenarioId(string $scenarioId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getFlowId
 * @method self withFlowId(string $flowId)
 * @method string getFlowJson
 * @method self withFlowJson(string $flowJson)
 * @method string getCorpora
 * @method self withCorpora(string $corpora)
 * @method string getSpeechOptimizationParam
 * @method self withSpeechOptimizationParam(string $speechOptimizationParam)
 * @method string getGlobalQuestions
 * @method self withGlobalQuestions(string $globalQuestions)
 * @method string getRole
 * @method self withRole(string $role)
 * @method Integer getRound
 * @method self withRound(Integer $round)
 */
class ModifySurvey extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getScenarioId
 * @method self withScenarioId(string $scenarioId)
 * @method string getSurveyId
 * @method self withSurveyId(string $surveyId)
 */
class PublishSurvey extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getScenarioId
 * @method self withScenarioId(string $scenarioId)
 */
class GetScenario extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getScenarioId
 * @method self withScenarioId(string $scenarioId)
 */
class GetJobTemplateDownloadParams extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getJobGroupId
 * @method self withJobGroupId(string $jobGroupId)
 */
class DownloadUnreachableContacts extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getJobGroupId
 * @method self withJobGroupId(string $jobGroupId)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class ListUnreachableContacts extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getJobGroupId
 * @method self withJobGroupId(string $jobGroupId)
 * @method string getTitle
 * @method self withTitle(string $title)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class ListBasicStatisticsReportSubItems extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getJobGroupId
 * @method self withJobGroupId(string $jobGroupId)
 */
class DownloadOriginalStatisticsReport extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getUserId
 * @method self withUserId(string $userId)
 */
class ListPrivilegesOfUser extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getAgentId
 * @method self withAgentId(string $agentId)
 * @method string getStartDate
 * @method self withStartDate(string $startDate)
 * @method string getEndDate
 * @method self withEndDate(string $endDate)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class GenerateAgentStatisticReport extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getWorkflowId
 * @method self withWorkflowId(string $workflowId)
 * @method string getCallCenterNumber
 * @method self withCallCenterNumber(string $callCenterNumber)
 * @method string getCaller
 * @method self withCaller(string $caller)
 * @method string getCallee
 * @method self withCallee(string $callee)
 */
class StartBack2BackCall extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getCaller
 * @method self withCaller(string $caller)
 * @method string getCalleeAgent
 * @method self withCalleeAgent(string $calleeAgent)
 * @method string getCalleeCustomer
 * @method self withCalleeCustomer(string $calleeCustomer)
 */
class TwoPartiesCall extends Rpc
{
    use R;
}

/**
 * @method string getPublicKey
 * @method self withPublicKey(string $publicKey)
 * @method array getPlainText
 * @method self withPlainText(array $plainText)
 */
class Encrypt extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getStartDay
 * @method self withStartDay(string $startDay)
 * @method string getEndDay
 * @method self withEndDay(string $endDay)
 * @method string getUserId
 * @method self withUserId(string $userId)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class GetAgentData extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getJobGroupId
 * @method self withJobGroupId(string $jobGroupId)
 */
class GetJobGroup extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getScenarioId
 * @method self withScenarioId(string $scenarioId)
 * @method string getStrategyJson
 * @method self withStrategyJson(string $strategyJson)
 * @method array getCallingNumber
 * @method self withCallingNumber(array $callingNumber)
 * @method array getJobsJson
 * @method self withJobsJson(array $jobsJson)
 */
class AssignJobs extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method bool getAll
 * @method self withAll(bool $all)
 * @method string getScenarioId
 * @method self withScenarioId(string $scenarioId)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method array getJobId
 * @method self withJobId(array $jobId)
 * @method array getJobReferenceId
 * @method self withJobReferenceId(array $jobReferenceId)
 */
class CancelJobs extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getScenarioId
 * @method self withScenarioId(string $scenarioId)
 * @method string getStrategyJson
 * @method self withStrategyJson(string $strategyJson)
 * @method array getCallingNumber
 * @method self withCallingNumber(array $callingNumber)
 * @method string getJobFilePath
 * @method self withJobFilePath(string $jobFilePath)
 * @method bool getSubmitted
 * @method self withSubmitted(bool $submitted)
 */
class CreateBatchJobs extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getJobGroupId
 * @method self withJobGroupId(string $jobGroupId)
 * @method string getJobStatus
 * @method self withJobStatus(string $jobStatus)
 * @method string getJobFailureReason
 * @method self withJobFailureReason(string $jobFailureReason)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class ListJobsByGroup extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method bool getAll
 * @method self withAll(bool $all)
 * @method string getScenarioId
 * @method self withScenarioId(string $scenarioId)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method array getJobId
 * @method self withJobId(array $jobId)
 * @method array getJobReferenceId
 * @method self withJobReferenceId(array $jobReferenceId)
 */
class ResumeJobs extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getJobGroupId
 * @method self withJobGroupId(string $jobGroupId)
 */
class SubmitBatchJobs extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method bool getAll
 * @method self withAll(bool $all)
 * @method string getScenarioId
 * @method self withScenarioId(string $scenarioId)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method array getJobId
 * @method self withJobId(array $jobId)
 * @method array getJobReferenceId
 * @method self withJobReferenceId(array $jobReferenceId)
 */
class SuspendJobs extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getTemplateId
 * @method self withTemplateId(string $templateId)
 * @method string getVariables
 * @method self withVariables(string $variables)
 */
class CreateScenarioFromTemplate extends Rpc
{
    use R;
}

class ListScenarioTemplates extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getFileName
 * @method self withFileName(string $fileName)
 */
class GetJobDataUploadParams extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getAcid
 * @method self withAcid(string $acid)
 */
class LaunchAppraise extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getTaskId
 * @method self withTaskId(string $taskId)
 */
class GetConversationList extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getJobGroupId
 * @method self withJobGroupId(string $jobGroupId)
 * @method Integer getStatus
 * @method self withStatus(Integer $status)
 * @method bool getQueryAll
 * @method self withQueryAll(bool $queryAll)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class GetJobList extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getJobId
 * @method self withJobId(string $jobId)
 */
class GetTaskList extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method array getConfigItem
 * @method self withConfigItem(array $configItem)
 */
class ListConfig extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class ListRealTimeAgent extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getJobId
 * @method self withJobId(string $jobId)
 */
class GetJob extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class ListScenarios extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getStrategyJson
 * @method self withStrategyJson(string $strategyJson)
 * @method string getType
 * @method self withType(string $type)
 * @method array getSurveysJson
 * @method self withSurveysJson(array $surveysJson)
 */
class CreateScenario extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getNumber
 * @method self withNumber(string $number)
 */
class GetNumberRegionInfo extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getCalleeNumber
 * @method self withCalleeNumber(string $calleeNumber)
 * @method array getCandidateNumber
 * @method self withCandidateNumber(array $candidateNumber)
 */
class PickLocalNumber extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getCallId
 * @method self withCallId(string $callId)
 * @method string getCallType
 * @method self withCallType(string $callType)
 * @method string getScenarioId
 * @method self withScenarioId(string $scenarioId)
 * @method string getTaskId
 * @method self withTaskId(string $taskId)
 * @method string getUtterance
 * @method self withUtterance(string $utterance)
 * @method string getActionKey
 * @method self withActionKey(string $actionKey)
 * @method string getActionParams
 * @method self withActionParams(string $actionParams)
 * @method string getCallingNumber
 * @method self withCallingNumber(string $callingNumber)
 * @method string getCalledNumber
 * @method self withCalledNumber(string $calledNumber)
 */
class Dialogue extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getScenarioId
 * @method self withScenarioId(string $scenarioId)
 * @method string getStrategyJson
 * @method self withStrategyJson(string $strategyJson)
 * @method array getCallingNumber
 * @method self withCallingNumber(array $callingNumber)
 */
class CreateJobGroup extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method int getStartTime
 * @method self withStartTime(int $startTime)
 * @method int getEndTime
 * @method self withEndTime(int $endTime)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class ListJobGroups extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getCallId
 * @method self withCallId(string $callId)
 */
class GetJobStatusByCallId extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getScenarioId
 * @method self withScenarioId(string $scenarioId)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method int getStartTime
 * @method self withStartTime(int $startTime)
 * @method int getEndTime
 * @method self withEndTime(int $endTime)
 * @method string getTimeAlignment
 * @method self withTimeAlignment(string $timeAlignment)
 * @method string getContactName
 * @method self withContactName(string $contactName)
 * @method string getPhoneNumber
 * @method self withPhoneNumber(string $phoneNumber)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class ListJobStatus extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getScenarioId
 * @method self withScenarioId(string $scenarioId)
 * @method array getCallingNumber
 * @method self withCallingNumber(array $callingNumber)
 * @method string getJobJson
 * @method self withJobJson(string $jobJson)
 * @method bool getSelfHostedCallCenter
 * @method self withSelfHostedCallCenter(bool $selfHostedCallCenter)
 */
class StartJob extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getContactId
 * @method self withContactId(string $contactId)
 */
class ListRecordingsByContactId extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getPhoneNumber
 * @method self withPhoneNumber(string $phoneNumber)
 * @method int getStartTime
 * @method self withStartTime(int $startTime)
 * @method int getStopTime
 * @method self withStopTime(int $stopTime)
 * @method string getCriteria
 * @method self withCriteria(string $criteria)
 * @method string getContactType
 * @method self withContactType(string $contactType)
 * @method string getContactDisposition
 * @method self withContactDisposition(string $contactDisposition)
 * @method bool getWithRecording
 * @method self withWithRecording(bool $withRecording)
 * @method string getContactId
 * @method self withContactId(string $contactId)
 * @method string getOrderBy
 * @method self withOrderBy(string $orderBy)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class ListCallDetailRecords extends Rpc
{
    use R;
}

/**
 * @method int getStopTime
 * @method self withStopTime(int $stopTime)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method int getStartTime
 * @method self withStartTime(int $startTime)
 * @method string getPhoneNumber
 * @method self withPhoneNumber(string $phoneNumber)
 * @method string getAgentId
 * @method self withAgentId(string $agentId)
 * @method string getCriteria
 * @method self withCriteria(string $criteria)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class ListRecordings extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getFileName
 * @method self withFileName(string $fileName)
 * @method string getChannel
 * @method self withChannel(string $channel)
 */
class DownloadRecording extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class RequestLoginInfo extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method array getUserId
 * @method self withUserId(array $userId)
 */
class RemoveUsers extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getPhoneNumberId
 * @method self withPhoneNumberId(string $phoneNumberId)
 */
class RemovePhoneNumber extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getPhoneNumber
 * @method self withPhoneNumber(string $phoneNumber)
 * @method string getUsage
 * @method self withUsage(string $usage)
 * @method string getContactFlowId
 * @method self withContactFlowId(string $contactFlowId)
 */
class AddPhoneNumber extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method array getUserRamId
 * @method self withUserRamId(array $userRamId)
 * @method array getRoleId
 * @method self withRoleId(array $roleId)
 * @method array getSkillGroupId
 * @method self withSkillGroupId(array $skillGroupId)
 * @method array getSkillLevel
 * @method self withSkillLevel(array $skillLevel)
 */
class AssignUsers extends Rpc
{
    use R;
}

/**
 * @method string getName
 * @method self withName(string $name)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method array getOutboundPhoneNumberId
 * @method self withOutboundPhoneNumberId(array $outboundPhoneNumberId)
 * @method array getUserId
 * @method self withUserId(array $userId)
 * @method array getSkillLevel
 * @method self withSkillLevel(array $skillLevel)
 */
class CreateSkillGroup extends Rpc
{
    use R;
}

/**
 * @method string getDisplayName
 * @method self withDisplayName(string $displayName)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getLoginName
 * @method self withLoginName(string $loginName)
 * @method string getPhone
 * @method self withPhone(string $phone)
 * @method string getEmail
 * @method self withEmail(string $email)
 * @method string getPrivateOutboundNumberId
 * @method self withPrivateOutboundNumberId(string $privateOutboundNumberId)
 * @method array getRoleId
 * @method self withRoleId(array $roleId)
 * @method array getSkillGroupId
 * @method self withSkillGroupId(array $skillGroupId)
 * @method array getSkillLevel
 * @method self withSkillLevel(array $skillLevel)
 */
class CreateUser extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getSkillGroupId
 * @method self withSkillGroupId(string $skillGroupId)
 */
class DeleteSkillGroup extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getObjectId
 * @method self withObjectId(string $objectId)
 * @method string getObjectType
 * @method self withObjectType(string $objectType)
 */
class GetConfig extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getServiceType
 * @method self withServiceType(string $serviceType)
 */
class GetServiceExtensions extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getUserId
 * @method self withUserId(string $userId)
 */
class GetUser extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class ListContactFlows extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method bool getOutboundOnly
 * @method self withOutboundOnly(bool $outboundOnly)
 */
class ListPhoneNumbers extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class ListRoles extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class ListSkillGroups extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getUserId
 * @method self withUserId(string $userId)
 */
class ListSkillGroupsOfUser extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class ListUsers extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getSkillGroupId
 * @method self withSkillGroupId(string $skillGroupId)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class ListUsersOfSkillGroup extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getPhoneNumberId
 * @method self withPhoneNumberId(string $phoneNumberId)
 * @method string getUsage
 * @method self withUsage(string $usage)
 * @method string getContactFlowId
 * @method self withContactFlowId(string $contactFlowId)
 */
class ModifyPhoneNumber extends Rpc
{
    use R;
}

/**
 * @method string getName
 * @method self withName(string $name)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getSkillGroupId
 * @method self withSkillGroupId(string $skillGroupId)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method array getOutboundPhoneNumberId
 * @method self withOutboundPhoneNumberId(array $outboundPhoneNumberId)
 * @method array getUserId
 * @method self withUserId(array $userId)
 * @method array getSkillLevel
 * @method self withSkillLevel(array $skillLevel)
 * @method bool getAllowPrivateOutboundNumber
 * @method self withAllowPrivateOutboundNumber(bool $allowPrivateOutboundNumber)
 */
class ModifySkillGroup extends Rpc
{
    use R;
}

/**
 * @method string getDisplayName
 * @method self withDisplayName(string $displayName)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getUserId
 * @method self withUserId(string $userId)
 * @method string getPhone
 * @method self withPhone(string $phone)
 * @method string getEmail
 * @method self withEmail(string $email)
 * @method string getPrivateOutboundNumberId
 * @method self withPrivateOutboundNumberId(string $privateOutboundNumberId)
 * @method array getRoleId
 * @method self withRoleId(array $roleId)
 * @method array getSkillGroupId
 * @method self withSkillGroupId(array $skillGroupId)
 * @method array getSkillLevel
 * @method self withSkillLevel(array $skillLevel)
 */
class ModifyUser extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class RefreshToken extends Rpc
{
    use R;
}
