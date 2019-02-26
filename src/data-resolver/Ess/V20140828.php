<?php

namespace AlibabaCloud\Ess\V20140828;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method string getScalingGroupId
 * @method self withScalingGroupId
 * @method RepeatList getVServerGroup
 * @method self withVServerGroup
 * @method Boolean getForceDetach
 * @method self withForceDetach
 */
final class DetachVServerGroups extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method string getScalingGroupId
 * @method self withScalingGroupId
 * @method RepeatList getVServerGroup
 * @method self withVServerGroup
 * @method Boolean getForceAttach
 * @method self withForceAttach
 */
final class AttachVServerGroups extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method string getAlarmTaskId
 * @method self withAlarmTaskId
 * @method string getName
 * @method self withName
 * @method string getDescription
 * @method self withDescription
 * @method RepeatList getAlarmAction
 * @method self withAlarmAction
 * @method string getMetricName
 * @method self withMetricName
 * @method string getMetricType
 * @method self withMetricType
 * @method Integer getPeriod
 * @method self withPeriod
 * @method string getStatistics
 * @method self withStatistics
 * @method Float getThreshold
 * @method self withThreshold
 * @method string getComparisonOperator
 * @method self withComparisonOperator
 * @method Integer getEvaluationCount
 * @method self withEvaluationCount
 * @method Integer getGroupId
 * @method self withGroupId
 * @method RepeatList getDimension
 * @method self withDimension
 */
final class ModifyAlarm extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method string getAlarmTaskId
 * @method self withAlarmTaskId
 */
final class EnableAlarm extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method string getAlarmTaskId
 * @method self withAlarmTaskId
 */
final class DisableAlarm extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method string getScalingGroupId
 * @method self withScalingGroupId
 * @method string getAlarmTaskId
 * @method self withAlarmTaskId
 * @method string getState
 * @method self withState
 * @method Boolean getIsEnable
 * @method self withIsEnable
 * @method string getMetricType
 * @method self withMetricType
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getPageNumber
 * @method self withPageNumber
 */
final class DescribeAlarms extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method string getAlarmTaskId
 * @method self withAlarmTaskId
 */
final class DeleteAlarm extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method string getName
 * @method self withName
 * @method string getDescription
 * @method self withDescription
 * @method RepeatList getAlarmAction
 * @method self withAlarmAction
 * @method string getScalingGroupId
 * @method self withScalingGroupId
 * @method string getMetricName
 * @method self withMetricName
 * @method string getMetricType
 * @method self withMetricType
 * @method Integer getPeriod
 * @method self withPeriod
 * @method string getStatistics
 * @method self withStatistics
 * @method Float getThreshold
 * @method self withThreshold
 * @method string getComparisonOperator
 * @method self withComparisonOperator
 * @method Integer getEvaluationCount
 * @method self withEvaluationCount
 * @method RepeatList getDimension
 * @method self withDimension
 * @method Integer getGroupId
 * @method self withGroupId
 */
final class CreateAlarm extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method string getScalingGroupId
 * @method self withScalingGroupId
 * @method RepeatList getDBInstance
 * @method self withDBInstance
 * @method Boolean getForceDetach
 * @method self withForceDetach
 */
final class DetachDBInstances extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method string getScalingGroupId
 * @method self withScalingGroupId
 * @method RepeatList getDBInstance
 * @method self withDBInstance
 * @method Boolean getForceAttach
 * @method self withForceAttach
 */
final class AttachDBInstances extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method string getScalingGroupId
 * @method self withScalingGroupId
 * @method RepeatList getLoadBalancer
 * @method self withLoadBalancer
 * @method Boolean getForceDetach
 * @method self withForceDetach
 */
final class DetachLoadBalancers extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method string getScalingGroupId
 * @method self withScalingGroupId
 * @method RepeatList getLoadBalancer
 * @method self withLoadBalancer
 * @method Boolean getForceAttach
 * @method self withForceAttach
 */
final class AttachLoadBalancers extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getScalingConfigurationId
 * @method self withScalingConfigurationId
 * @method string getIoOptimized
 * @method self withIoOptimized
 * @method RepeatList getDataDisk
 * @method self withDataDisk
 * @method string getSpotStrategy
 * @method self withSpotStrategy
 * @method RepeatList getSpotPriceLimit
 * @method self withSpotPriceLimit
 * @method string getScalingConfigurationName
 * @method self withScalingConfigurationName
 * @method string getInstanceName
 * @method self withInstanceName
 * @method string getHostName
 * @method self withHostName
 * @method string getImageId
 * @method self withImageId
 * @method string getImageName
 * @method self withImageName
 * @method RepeatList getInstanceTypes
 * @method self withInstanceTypes
 * @method Integer getCpu
 * @method self withCpu
 * @method Integer getMemory
 * @method self withMemory
 * @method string getInternetChargeType
 * @method self withInternetChargeType
 * @method Integer getInternetMaxBandwidthOut
 * @method self withInternetMaxBandwidthOut
 * @method string getSystemDisk.Category
 * @method self withSystemDisk.Category
 * @method Integer getSystemDisk.Size
 * @method self withSystemDisk.Size
 * @method Integer getLoadBalancerWeight
 * @method self withLoadBalancerWeight
 * @method string getUserData
 * @method self withUserData
 * @method string getKeyPairName
 * @method self withKeyPairName
 * @method string getRamRoleName
 * @method self withRamRoleName
 * @method Boolean getPasswordInherit
 * @method self withPasswordInherit
 * @method string getTags
 * @method self withTags
 * @method string getDeploymentSetId
 * @method self withDeploymentSetId
 * @method string getSecurityGroupId
 * @method self withSecurityGroupId
 * @method Boolean getOverride
 * @method self withOverride
 * @method string getResourceGroupId
 * @method self withResourceGroupId
 */
final class ModifyScalingConfiguration extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getScalingGroupId
 * @method self withScalingGroupId
 * @method string getLifecycleHookName
 * @method self withLifecycleHookName
 * @method RepeatList getLifecycleHookId
 * @method self withLifecycleHookId
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class DescribeLifecycleHooks extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getLifecycleHookId
 * @method self withLifecycleHookId
 * @method string getScalingGroupId
 * @method self withScalingGroupId
 * @method string getLifecycleHookName
 * @method self withLifecycleHookName
 * @method string getDefaultResult
 * @method self withDefaultResult
 * @method Integer getHeartbeatTimeout
 * @method self withHeartbeatTimeout
 * @method string getLifecycleTransition
 * @method self withLifecycleTransition
 * @method string getNotificationMetadata
 * @method self withNotificationMetadata
 * @method string getNotificationArn
 * @method self withNotificationArn
 */
final class ModifyLifecycleHook extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getLifecycleHookId
 * @method self withLifecycleHookId
 * @method string getScalingGroupId
 * @method self withScalingGroupId
 * @method string getLifecycleHookName
 * @method self withLifecycleHookName
 */
final class DeleteLifecycleHook extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getLifecycleHookId
 * @method self withLifecycleHookId
 * @method string getLifecycleActionToken
 * @method self withLifecycleActionToken
 * @method string getLifecycleActionResult
 * @method self withLifecycleActionResult
 */
final class CompleteLifecycleAction extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getScalingGroupId
 * @method self withScalingGroupId
 * @method string getLifecycleHookName
 * @method self withLifecycleHookName
 * @method string getLifecycleTransition
 * @method self withLifecycleTransition
 * @method string getDefaultResult
 * @method self withDefaultResult
 * @method Integer getHeartbeatTimeout
 * @method self withHeartbeatTimeout
 * @method string getNotificationMetadata
 * @method self withNotificationMetadata
 * @method string getNotificationArn
 * @method self withNotificationArn
 * @method RepeatList getLifecycleHook
 * @method self withLifecycleHook
 */
final class CreateLifecycleHook extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getlifecycleHookId
 * @method self withlifecycleHookId
 * @method string getlifecycleActionToken
 * @method self withlifecycleActionToken
 * @method Integer getheartbeatTimeout
 * @method self withheartbeatTimeout
 */
final class RecordLifecycleActionHeartbeat extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method string getScalingGroupId
 * @method self withScalingGroupId
 * @method RepeatList getInstanceId
 * @method self withInstanceId
 * @method Boolean getProtectedFromScaleIn
 * @method self withProtectedFromScaleIn
 */
final class SetInstancesProtection extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getScalingGroupId
 * @method self withScalingGroupId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class RebalanceInstances extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method string getScalingGroupId
 * @method self withScalingGroupId
 * @method string getNotificationArn
 * @method self withNotificationArn
 */
final class DeleteNotificationConfiguration extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method string getScalingGroupId
 * @method self withScalingGroupId
 * @method string getNotificationArn
 * @method self withNotificationArn
 * @method RepeatList getNotificationType
 * @method self withNotificationType
 */
final class ModifyNotificationConfiguration extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method string getScalingGroupId
 * @method self withScalingGroupId
 */
final class DescribeNotificationConfigurations extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 */
final class DescribeNotificationTypes extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method string getScalingGroupId
 * @method self withScalingGroupId
 * @method string getNotificationArn
 * @method self withNotificationArn
 * @method RepeatList getNotificationType
 * @method self withNotificationType
 */
final class CreateNotificationConfiguration extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method string getScalingGroupId
 * @method self withScalingGroupId
 * @method RepeatList getInstanceId
 * @method self withInstanceId
 */
final class ExitStandby extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method string getScalingGroupId
 * @method self withScalingGroupId
 * @method RepeatList getInstanceId
 * @method self withInstanceId
 */
final class EnterStandby extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method string getScalingConfigurationId
 * @method self withScalingConfigurationId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class DeactivateScalingConfiguration extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Boolean getForceDelete
 * @method self withForceDelete
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method Long getUserId
 * @method self withUserId
 */
final class DescribeUser extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getScalingGroupId
 * @method self withScalingGroupId
 * @method string getInstanceId.1
 * @method self withInstanceId.1
 * @method string getInstanceId.2
 * @method self withInstanceId.2
 * @method string getInstanceId.3
 * @method self withInstanceId.3
 * @method string getInstanceId.4
 * @method self withInstanceId.4
 * @method string getInstanceId.5
 * @method self withInstanceId.5
 * @method string getInstanceId.6
 * @method self withInstanceId.6
 * @method string getInstanceId.7
 * @method self withInstanceId.7
 * @method string getInstanceId.8
 * @method self withInstanceId.8
 * @method string getInstanceId.9
 * @method self withInstanceId.9
 * @method string getInstanceId.10
 * @method self withInstanceId.10
 * @method string getInstanceId.11
 * @method self withInstanceId.11
 * @method string getInstanceId.12
 * @method self withInstanceId.12
 * @method string getInstanceId.13
 * @method self withInstanceId.13
 * @method string getInstanceId.14
 * @method self withInstanceId.14
 * @method string getInstanceId.15
 * @method self withInstanceId.15
 * @method string getInstanceId.16
 * @method self withInstanceId.16
 * @method string getInstanceId.17
 * @method self withInstanceId.17
 * @method string getInstanceId.18
 * @method self withInstanceId.18
 * @method string getInstanceId.19
 * @method self withInstanceId.19
 * @method string getInstanceId.20
 * @method self withInstanceId.20
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class DetachInstances_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 */
final class DescribeAccountAttributes_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 */
final class VerifyUser_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method Long getUid
 * @method self withUid
 */
final class VerifyAuthentication_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getScalingGroupId
 * @method self withScalingGroupId
 * @method string getInstanceId.1
 * @method self withInstanceId.1
 * @method string getInstanceId.2
 * @method self withInstanceId.2
 * @method string getInstanceId.3
 * @method self withInstanceId.3
 * @method string getInstanceId.4
 * @method self withInstanceId.4
 * @method string getInstanceId.5
 * @method self withInstanceId.5
 * @method string getInstanceId.6
 * @method self withInstanceId.6
 * @method string getInstanceId.7
 * @method self withInstanceId.7
 * @method string getInstanceId.8
 * @method self withInstanceId.8
 * @method string getInstanceId.9
 * @method self withInstanceId.9
 * @method string getInstanceId.10
 * @method self withInstanceId.10
 * @method string getInstanceId.11
 * @method self withInstanceId.11
 * @method string getInstanceId.12
 * @method self withInstanceId.12
 * @method string getInstanceId.13
 * @method self withInstanceId.13
 * @method string getInstanceId.14
 * @method self withInstanceId.14
 * @method string getInstanceId.15
 * @method self withInstanceId.15
 * @method string getInstanceId.16
 * @method self withInstanceId.16
 * @method string getInstanceId.17
 * @method self withInstanceId.17
 * @method string getInstanceId.18
 * @method self withInstanceId.18
 * @method string getInstanceId.19
 * @method self withInstanceId.19
 * @method string getInstanceId.20
 * @method self withInstanceId.20
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class RemoveInstances_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getScheduledTaskId
 * @method self withScheduledTaskId
 * @method string getScheduledTaskName
 * @method self withScheduledTaskName
 * @method string getDescription
 * @method self withDescription
 * @method string getScheduledAction
 * @method self withScheduledAction
 * @method string getRecurrenceEndTime
 * @method self withRecurrenceEndTime
 * @method string getLaunchTime
 * @method self withLaunchTime
 * @method string getRecurrenceType
 * @method self withRecurrenceType
 * @method string getRecurrenceValue
 * @method self withRecurrenceValue
 * @method Boolean getTaskEnabled
 * @method self withTaskEnabled
 * @method Integer getLaunchExpirationTime
 * @method self withLaunchExpirationTime
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class ModifyScheduledTask_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getScalingRuleId
 * @method self withScalingRuleId
 * @method string getScalingRuleName
 * @method self withScalingRuleName
 * @method Integer getCooldown
 * @method self withCooldown
 * @method string getAdjustmentType
 * @method self withAdjustmentType
 * @method Integer getAdjustmentValue
 * @method self withAdjustmentValue
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class ModifyScalingRule_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getScalingGroupId
 * @method self withScalingGroupId
 * @method string getScalingGroupName
 * @method self withScalingGroupName
 * @method Integer getMinSize
 * @method self withMinSize
 * @method Integer getMaxSize
 * @method self withMaxSize
 * @method Integer getDefaultCooldown
 * @method self withDefaultCooldown
 * @method string getRemovalPolicy.1
 * @method self withRemovalPolicy.1
 * @method string getRemovalPolicy.2
 * @method self withRemovalPolicy.2
 * @method string getActiveScalingConfigurationId
 * @method self withActiveScalingConfigurationId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class ModifyScalingGroup_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method string getScalingGroupId
 * @method self withScalingGroupId
 * @method Integer getSuccessConfig
 * @method self withSuccessConfig
 * @method Integer getFailConfig
 * @method self withFailConfig
 * @method Integer getRejectConfig
 * @method self withRejectConfig
 */
final class ModifyAlertConfig_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getScalingRuleAri
 * @method self withScalingRuleAri
 * @method string getClientToken
 * @method self withClientToken
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class ExecuteScalingRule_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getScalingGroupId
 * @method self withScalingGroupId
 * @method string getActiveScalingConfigurationId
 * @method self withActiveScalingConfigurationId
 * @method string getInstanceId.1
 * @method self withInstanceId.1
 * @method string getInstanceId.2
 * @method self withInstanceId.2
 * @method string getInstanceId.3
 * @method self withInstanceId.3
 * @method string getInstanceId.4
 * @method self withInstanceId.4
 * @method string getInstanceId.5
 * @method self withInstanceId.5
 * @method string getInstanceId.6
 * @method self withInstanceId.6
 * @method string getInstanceId.7
 * @method self withInstanceId.7
 * @method string getInstanceId.8
 * @method self withInstanceId.8
 * @method string getInstanceId.9
 * @method self withInstanceId.9
 * @method string getInstanceId.10
 * @method self withInstanceId.10
 * @method string getInstanceId.11
 * @method self withInstanceId.11
 * @method string getInstanceId.12
 * @method self withInstanceId.12
 * @method string getInstanceId.13
 * @method self withInstanceId.13
 * @method string getInstanceId.14
 * @method self withInstanceId.14
 * @method string getInstanceId.15
 * @method self withInstanceId.15
 * @method string getInstanceId.16
 * @method self withInstanceId.16
 * @method string getInstanceId.17
 * @method self withInstanceId.17
 * @method string getInstanceId.18
 * @method self withInstanceId.18
 * @method string getInstanceId.19
 * @method self withInstanceId.19
 * @method string getInstanceId.20
 * @method self withInstanceId.20
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class EnableScalingGroup_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getScalingGroupId
 * @method self withScalingGroupId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class DisableScalingGroup_GatedLaunch extends RpcRequest
{
}

final class DescribeScheduledTasks_GatedLaunch extends RpcRequest
{
}

final class DescribeScalingRules_GatedLaunch extends RpcRequest
{
}

final class DescribeScalingInstances_GatedLaunch extends RpcRequest
{
}

final class DescribeScalingGroups_GatedLaunch extends RpcRequest
{
}

final class DescribeScalingConfigurations_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getScalingActivityId
 * @method self withScalingActivityId
 */
final class DescribeScalingActivityDetail_GatedLaunch extends RpcRequest
{
}

final class DescribeScalingActivities_GatedLaunch extends RpcRequest
{
}

final class DescribeRegions_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 */
final class DescribeLimitation_GatedLaunch extends RpcRequest
{
}

final class DescribeCapacityHistory_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method string getScalingGroupId
 * @method self withScalingGroupId
 */
final class DescribeAlertConfig_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method string getScheduledTaskId
 * @method self withScheduledTaskId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class DeleteScheduledTask_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method string getScalingRuleId
 * @method self withScalingRuleId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class DeleteScalingRule_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method string getScalingGroupId
 * @method self withScalingGroupId
 * @method Boolean getForceDelete
 * @method self withForceDelete
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class DeleteScalingGroup_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method string getScalingConfigurationId
 * @method self withScalingConfigurationId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class DeleteScalingConfiguration_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method string getScheduledTaskName
 * @method self withScheduledTaskName
 * @method string getDescription
 * @method self withDescription
 * @method string getScheduledAction
 * @method self withScheduledAction
 * @method string getRecurrenceEndTime
 * @method self withRecurrenceEndTime
 * @method string getLaunchTime
 * @method self withLaunchTime
 * @method string getRecurrenceType
 * @method self withRecurrenceType
 * @method string getRecurrenceValue
 * @method self withRecurrenceValue
 * @method Boolean getTaskEnabled
 * @method self withTaskEnabled
 * @method Integer getLaunchExpirationTime
 * @method self withLaunchExpirationTime
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class CreateScheduledTask_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method string getScalingGroupId
 * @method self withScalingGroupId
 * @method string getScalingRuleName
 * @method self withScalingRuleName
 * @method Integer getCooldown
 * @method self withCooldown
 * @method string getAdjustmentType
 * @method self withAdjustmentType
 * @method Integer getAdjustmentValue
 * @method self withAdjustmentValue
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class CreateScalingRule_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method string getScalingGroupName
 * @method self withScalingGroupName
 * @method Integer getMinSize
 * @method self withMinSize
 * @method Integer getMaxSize
 * @method self withMaxSize
 * @method Integer getDefaultCooldown
 * @method self withDefaultCooldown
 * @method string getLoadBalancerIds
 * @method self withLoadBalancerIds
 * @method string getDBInstanceIds
 * @method self withDBInstanceIds
 * @method string getRemovalPolicy.1
 * @method self withRemovalPolicy.1
 * @method string getRemovalPolicy.2
 * @method self withRemovalPolicy.2
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getVSwitchId
 * @method self withVSwitchId
 */
final class CreateScalingGroup_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method string getScalingGroupId
 * @method self withScalingGroupId
 * @method string getImageId
 * @method self withImageId
 * @method string getInstanceType
 * @method self withInstanceType
 * @method string getSecurityGroupId
 * @method self withSecurityGroupId
 * @method string getIoOptimized
 * @method self withIoOptimized
 * @method string getInternetChargeType
 * @method self withInternetChargeType
 * @method Integer getInternetMaxBandwidthIn
 * @method self withInternetMaxBandwidthIn
 * @method Integer getInternetMaxBandwidthOut
 * @method self withInternetMaxBandwidthOut
 * @method string getSystemDisk.Category
 * @method self withSystemDisk.Category
 * @method Integer getSystemDisk.Size
 * @method self withSystemDisk.Size
 * @method string getScalingConfigurationName
 * @method self withScalingConfigurationName
 * @method Integer getDataDisk.1.Size
 * @method self withDataDisk.1.Size
 * @method Integer getDataDisk.2.Size
 * @method self withDataDisk.2.Size
 * @method Integer getDataDisk.3.Size
 * @method self withDataDisk.3.Size
 * @method Integer getDataDisk.4.Size
 * @method self withDataDisk.4.Size
 * @method string getDataDisk.1.Category
 * @method self withDataDisk.1.Category
 * @method string getDataDisk.2.Category
 * @method self withDataDisk.2.Category
 * @method string getDataDisk.3.Category
 * @method self withDataDisk.3.Category
 * @method string getDataDisk.4.Category
 * @method self withDataDisk.4.Category
 * @method string getDataDisk.1.SnapshotId
 * @method self withDataDisk.1.SnapshotId
 * @method string getDataDisk.2.SnapshotId
 * @method self withDataDisk.2.SnapshotId
 * @method string getDataDisk.3.SnapshotId
 * @method self withDataDisk.3.SnapshotId
 * @method string getDataDisk.4.SnapshotId
 * @method self withDataDisk.4.SnapshotId
 * @method string getDataDisk.1.Device
 * @method self withDataDisk.1.Device
 * @method string getDataDisk.2.Device
 * @method self withDataDisk.2.Device
 * @method string getDataDisk.3.Device
 * @method self withDataDisk.3.Device
 * @method string getDataDisk.4.Device
 * @method self withDataDisk.4.Device
 * @method string getDataDisk.1.DeleteWithInstance
 * @method self withDataDisk.1.DeleteWithInstance
 * @method string getDataDisk.2.DeleteWithInstance
 * @method self withDataDisk.2.DeleteWithInstance
 * @method string getDataDisk.3.DeleteWithInstance
 * @method self withDataDisk.3.DeleteWithInstance
 * @method string getDataDisk.4.DeleteWithInstance
 * @method self withDataDisk.4.DeleteWithInstance
 * @method Integer getLoadBalancerWeight
 * @method self withLoadBalancerWeight
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class CreateScalingConfiguration_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getScalingGroupId
 * @method self withScalingGroupId
 * @method string getInstanceId.1
 * @method self withInstanceId.1
 * @method string getInstanceId.2
 * @method self withInstanceId.2
 * @method string getInstanceId.3
 * @method self withInstanceId.3
 * @method string getInstanceId.4
 * @method self withInstanceId.4
 * @method string getInstanceId.5
 * @method self withInstanceId.5
 * @method string getInstanceId.6
 * @method self withInstanceId.6
 * @method string getInstanceId.7
 * @method self withInstanceId.7
 * @method string getInstanceId.8
 * @method self withInstanceId.8
 * @method string getInstanceId.9
 * @method self withInstanceId.9
 * @method string getInstanceId.10
 * @method self withInstanceId.10
 * @method string getInstanceId.11
 * @method self withInstanceId.11
 * @method string getInstanceId.12
 * @method self withInstanceId.12
 * @method string getInstanceId.13
 * @method self withInstanceId.13
 * @method string getInstanceId.14
 * @method self withInstanceId.14
 * @method string getInstanceId.15
 * @method self withInstanceId.15
 * @method string getInstanceId.16
 * @method self withInstanceId.16
 * @method string getInstanceId.17
 * @method self withInstanceId.17
 * @method string getInstanceId.18
 * @method self withInstanceId.18
 * @method string getInstanceId.19
 * @method self withInstanceId.19
 * @method string getInstanceId.20
 * @method self withInstanceId.20
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class AttachInstances_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method string getScalingGroupId
 * @method self withScalingGroupId
 * @method Integer getSuccessConfig
 * @method self withSuccessConfig
 * @method Integer getFailConfig
 * @method self withFailConfig
 * @method Integer getRejectConfig
 * @method self withRejectConfig
 */
final class ModifyAlertConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method string getScalingGroupId
 * @method self withScalingGroupId
 */
final class DescribeAlertConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method Long getUid
 * @method self withUid
 */
final class VerifyAuthentication extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 */
final class VerifyUser extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 */
final class DescribeRegions extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method string getScalingGroupId
 * @method self withScalingGroupId
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class DescribeCapacityHistory extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 */
final class DescribeLimitation extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getScalingActivityId
 * @method self withScalingActivityId
 */
final class DescribeScalingActivityDetail extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 */
final class DescribeAccountAttributes extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getScalingGroupId
 * @method self withScalingGroupId
 * @method RepeatList getInstanceId
 * @method self withInstanceId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getRemovePolicy
 * @method self withRemovePolicy
 */
final class RemoveInstances extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getScheduledTaskId
 * @method self withScheduledTaskId
 * @method string getScheduledTaskName
 * @method self withScheduledTaskName
 * @method string getDescription
 * @method self withDescription
 * @method string getScheduledAction
 * @method self withScheduledAction
 * @method string getRecurrenceEndTime
 * @method self withRecurrenceEndTime
 * @method string getLaunchTime
 * @method self withLaunchTime
 * @method string getRecurrenceType
 * @method self withRecurrenceType
 * @method string getRecurrenceValue
 * @method self withRecurrenceValue
 * @method Boolean getTaskEnabled
 * @method self withTaskEnabled
 * @method Integer getLaunchExpirationTime
 * @method self withLaunchExpirationTime
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class ModifyScheduledTask extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getScalingRuleId
 * @method self withScalingRuleId
 * @method string getScalingRuleName
 * @method self withScalingRuleName
 * @method Integer getCooldown
 * @method self withCooldown
 * @method string getAdjustmentType
 * @method self withAdjustmentType
 * @method Integer getAdjustmentValue
 * @method self withAdjustmentValue
 * @method Integer getEstimatedInstanceWarmup
 * @method self withEstimatedInstanceWarmup
 * @method string getMetricName
 * @method self withMetricName
 * @method Float getTargetValue
 * @method self withTargetValue
 * @method Boolean getDisableScaleIn
 * @method self withDisableScaleIn
 * @method RepeatList getStepAdjustment
 * @method self withStepAdjustment
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class ModifyScalingRule extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getScalingGroupId
 * @method self withScalingGroupId
 * @method string getScalingGroupName
 * @method self withScalingGroupName
 * @method Integer getMinSize
 * @method self withMinSize
 * @method Integer getMaxSize
 * @method self withMaxSize
 * @method RepeatList getVSwitchIds
 * @method self withVSwitchIds
 * @method Integer getDefaultCooldown
 * @method self withDefaultCooldown
 * @method string getRemovalPolicy.1
 * @method self withRemovalPolicy.1
 * @method string getRemovalPolicy.2
 * @method self withRemovalPolicy.2
 * @method string getActiveScalingConfigurationId
 * @method self withActiveScalingConfigurationId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getHealthCheckType
 * @method self withHealthCheckType
 * @method string getLaunchTemplateId
 * @method self withLaunchTemplateId
 * @method string getLaunchTemplateVersion
 * @method self withLaunchTemplateVersion
 */
final class ModifyScalingGroup extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getScalingRuleAri
 * @method self withScalingRuleAri
 * @method string getClientToken
 * @method self withClientToken
 * @method Float getBreachThreshold
 * @method self withBreachThreshold
 * @method Float getMetricValue
 * @method self withMetricValue
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class ExecuteScalingRule extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getScalingGroupId
 * @method self withScalingGroupId
 * @method string getActiveScalingConfigurationId
 * @method self withActiveScalingConfigurationId
 * @method string getInstanceId.1
 * @method self withInstanceId.1
 * @method string getInstanceId.2
 * @method self withInstanceId.2
 * @method string getInstanceId.3
 * @method self withInstanceId.3
 * @method string getInstanceId.4
 * @method self withInstanceId.4
 * @method string getInstanceId.5
 * @method self withInstanceId.5
 * @method string getInstanceId.6
 * @method self withInstanceId.6
 * @method string getInstanceId.7
 * @method self withInstanceId.7
 * @method string getInstanceId.8
 * @method self withInstanceId.8
 * @method string getInstanceId.9
 * @method self withInstanceId.9
 * @method string getInstanceId.10
 * @method self withInstanceId.10
 * @method string getInstanceId.11
 * @method self withInstanceId.11
 * @method string getInstanceId.12
 * @method self withInstanceId.12
 * @method string getInstanceId.13
 * @method self withInstanceId.13
 * @method string getInstanceId.14
 * @method self withInstanceId.14
 * @method string getInstanceId.15
 * @method self withInstanceId.15
 * @method string getInstanceId.16
 * @method self withInstanceId.16
 * @method string getInstanceId.17
 * @method self withInstanceId.17
 * @method string getInstanceId.18
 * @method self withInstanceId.18
 * @method string getInstanceId.19
 * @method self withInstanceId.19
 * @method string getInstanceId.20
 * @method self withInstanceId.20
 * @method Integer getLoadBalancerWeight.1
 * @method self withLoadBalancerWeight.1
 * @method Integer getLoadBalancerWeight.2
 * @method self withLoadBalancerWeight.2
 * @method Integer getLoadBalancerWeight.3
 * @method self withLoadBalancerWeight.3
 * @method Integer getLoadBalancerWeight.4
 * @method self withLoadBalancerWeight.4
 * @method Integer getLoadBalancerWeight.5
 * @method self withLoadBalancerWeight.5
 * @method Integer getLoadBalancerWeight.6
 * @method self withLoadBalancerWeight.6
 * @method Integer getLoadBalancerWeight.7
 * @method self withLoadBalancerWeight.7
 * @method Integer getLoadBalancerWeight.8
 * @method self withLoadBalancerWeight.8
 * @method Integer getLoadBalancerWeight.9
 * @method self withLoadBalancerWeight.9
 * @method Integer getLoadBalancerWeight.10
 * @method self withLoadBalancerWeight.10
 * @method Integer getLoadBalancerWeight.11
 * @method self withLoadBalancerWeight.11
 * @method Integer getLoadBalancerWeight.12
 * @method self withLoadBalancerWeight.12
 * @method Integer getLoadBalancerWeight.13
 * @method self withLoadBalancerWeight.13
 * @method Integer getLoadBalancerWeight.14
 * @method self withLoadBalancerWeight.14
 * @method Integer getLoadBalancerWeight.15
 * @method self withLoadBalancerWeight.15
 * @method Integer getLoadBalancerWeight.16
 * @method self withLoadBalancerWeight.16
 * @method Integer getLoadBalancerWeight.17
 * @method self withLoadBalancerWeight.17
 * @method Integer getLoadBalancerWeight.18
 * @method self withLoadBalancerWeight.18
 * @method Integer getLoadBalancerWeight.19
 * @method self withLoadBalancerWeight.19
 * @method Integer getLoadBalancerWeight.20
 * @method self withLoadBalancerWeight.20
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getLaunchTemplateId
 * @method self withLaunchTemplateId
 * @method string getLaunchTemplateVersion
 * @method self withLaunchTemplateVersion
 */
final class EnableScalingGroup extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getScalingGroupId
 * @method self withScalingGroupId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class DisableScalingGroup extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getScalingGroupId
 * @method self withScalingGroupId
 * @method RepeatList getInstanceId
 * @method self withInstanceId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class DetachInstances extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getScheduledAction.1
 * @method self withScheduledAction.1
 * @method string getScheduledAction.2
 * @method self withScheduledAction.2
 * @method string getScheduledAction.3
 * @method self withScheduledAction.3
 * @method string getScheduledAction.4
 * @method self withScheduledAction.4
 * @method string getScheduledAction.5
 * @method self withScheduledAction.5
 * @method string getScheduledAction.6
 * @method self withScheduledAction.6
 * @method string getScheduledAction.7
 * @method self withScheduledAction.7
 * @method string getScheduledAction.8
 * @method self withScheduledAction.8
 * @method string getScheduledAction.9
 * @method self withScheduledAction.9
 * @method string getScheduledAction.10
 * @method self withScheduledAction.10
 * @method string getScheduledAction.11
 * @method self withScheduledAction.11
 * @method string getScheduledAction.12
 * @method self withScheduledAction.12
 * @method string getScheduledAction.13
 * @method self withScheduledAction.13
 * @method string getScheduledAction.14
 * @method self withScheduledAction.14
 * @method string getScheduledAction.15
 * @method self withScheduledAction.15
 * @method string getScheduledAction.16
 * @method self withScheduledAction.16
 * @method string getScheduledAction.17
 * @method self withScheduledAction.17
 * @method string getScheduledAction.18
 * @method self withScheduledAction.18
 * @method string getScheduledAction.19
 * @method self withScheduledAction.19
 * @method string getScheduledAction.20
 * @method self withScheduledAction.20
 * @method string getScheduledTaskId.1
 * @method self withScheduledTaskId.1
 * @method string getScheduledTaskId.2
 * @method self withScheduledTaskId.2
 * @method string getScheduledTaskId.3
 * @method self withScheduledTaskId.3
 * @method string getScheduledTaskId.4
 * @method self withScheduledTaskId.4
 * @method string getScheduledTaskId.5
 * @method self withScheduledTaskId.5
 * @method string getScheduledTaskId.6
 * @method self withScheduledTaskId.6
 * @method string getScheduledTaskId.7
 * @method self withScheduledTaskId.7
 * @method string getScheduledTaskId.8
 * @method self withScheduledTaskId.8
 * @method string getScheduledTaskId.9
 * @method self withScheduledTaskId.9
 * @method string getScheduledTaskId.10
 * @method self withScheduledTaskId.10
 * @method string getScheduledTaskId.11
 * @method self withScheduledTaskId.11
 * @method string getScheduledTaskId.12
 * @method self withScheduledTaskId.12
 * @method string getScheduledTaskId.13
 * @method self withScheduledTaskId.13
 * @method string getScheduledTaskId.14
 * @method self withScheduledTaskId.14
 * @method string getScheduledTaskId.15
 * @method self withScheduledTaskId.15
 * @method string getScheduledTaskId.16
 * @method self withScheduledTaskId.16
 * @method string getScheduledTaskId.17
 * @method self withScheduledTaskId.17
 * @method string getScheduledTaskId.18
 * @method self withScheduledTaskId.18
 * @method string getScheduledTaskId.19
 * @method self withScheduledTaskId.19
 * @method string getScheduledTaskId.20
 * @method self withScheduledTaskId.20
 * @method string getScheduledTaskName.1
 * @method self withScheduledTaskName.1
 * @method string getScheduledTaskName.2
 * @method self withScheduledTaskName.2
 * @method string getScheduledTaskName.3
 * @method self withScheduledTaskName.3
 * @method string getScheduledTaskName.4
 * @method self withScheduledTaskName.4
 * @method string getScheduledTaskName.5
 * @method self withScheduledTaskName.5
 * @method string getScheduledTaskName.6
 * @method self withScheduledTaskName.6
 * @method string getScheduledTaskName.7
 * @method self withScheduledTaskName.7
 * @method string getScheduledTaskName.8
 * @method self withScheduledTaskName.8
 * @method string getScheduledTaskName.9
 * @method self withScheduledTaskName.9
 * @method string getScheduledTaskName.10
 * @method self withScheduledTaskName.10
 * @method string getScheduledTaskName.11
 * @method self withScheduledTaskName.11
 * @method string getScheduledTaskName.12
 * @method self withScheduledTaskName.12
 * @method string getScheduledTaskName.13
 * @method self withScheduledTaskName.13
 * @method string getScheduledTaskName.14
 * @method self withScheduledTaskName.14
 * @method string getScheduledTaskName.15
 * @method self withScheduledTaskName.15
 * @method string getScheduledTaskName.16
 * @method self withScheduledTaskName.16
 * @method string getScheduledTaskName.17
 * @method self withScheduledTaskName.17
 * @method string getScheduledTaskName.18
 * @method self withScheduledTaskName.18
 * @method string getScheduledTaskName.19
 * @method self withScheduledTaskName.19
 * @method string getScheduledTaskName.20
 * @method self withScheduledTaskName.20
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class DescribeScheduledTasks extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getScalingGroupId
 * @method self withScalingGroupId
 * @method string getScalingRuleType
 * @method self withScalingRuleType
 * @method Boolean getShowAlarmRules
 * @method self withShowAlarmRules
 * @method string getScalingRuleId.1
 * @method self withScalingRuleId.1
 * @method string getScalingRuleId.2
 * @method self withScalingRuleId.2
 * @method string getScalingRuleId.3
 * @method self withScalingRuleId.3
 * @method string getScalingRuleId.4
 * @method self withScalingRuleId.4
 * @method string getScalingRuleId.5
 * @method self withScalingRuleId.5
 * @method string getScalingRuleId.6
 * @method self withScalingRuleId.6
 * @method string getScalingRuleId.7
 * @method self withScalingRuleId.7
 * @method string getScalingRuleId.8
 * @method self withScalingRuleId.8
 * @method string getScalingRuleId.9
 * @method self withScalingRuleId.9
 * @method string getScalingRuleId.10
 * @method self withScalingRuleId.10
 * @method string getScalingRuleName.1
 * @method self withScalingRuleName.1
 * @method string getScalingRuleName.2
 * @method self withScalingRuleName.2
 * @method string getScalingRuleName.3
 * @method self withScalingRuleName.3
 * @method string getScalingRuleName.4
 * @method self withScalingRuleName.4
 * @method string getScalingRuleName.5
 * @method self withScalingRuleName.5
 * @method string getScalingRuleName.6
 * @method self withScalingRuleName.6
 * @method string getScalingRuleName.7
 * @method self withScalingRuleName.7
 * @method string getScalingRuleName.8
 * @method self withScalingRuleName.8
 * @method string getScalingRuleName.9
 * @method self withScalingRuleName.9
 * @method string getScalingRuleName.10
 * @method self withScalingRuleName.10
 * @method string getScalingRuleAri.1
 * @method self withScalingRuleAri.1
 * @method string getScalingRuleAri.2
 * @method self withScalingRuleAri.2
 * @method string getScalingRuleAri.3
 * @method self withScalingRuleAri.3
 * @method string getScalingRuleAri.4
 * @method self withScalingRuleAri.4
 * @method string getScalingRuleAri.5
 * @method self withScalingRuleAri.5
 * @method string getScalingRuleAri.6
 * @method self withScalingRuleAri.6
 * @method string getScalingRuleAri.7
 * @method self withScalingRuleAri.7
 * @method string getScalingRuleAri.8
 * @method self withScalingRuleAri.8
 * @method string getScalingRuleAri.9
 * @method self withScalingRuleAri.9
 * @method string getScalingRuleAri.10
 * @method self withScalingRuleAri.10
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class DescribeScalingRules extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getScalingGroupId
 * @method self withScalingGroupId
 * @method string getScalingConfigurationId
 * @method self withScalingConfigurationId
 * @method string getHealthStatus
 * @method self withHealthStatus
 * @method string getLifecycleState
 * @method self withLifecycleState
 * @method string getCreationType
 * @method self withCreationType
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getInstanceId.1
 * @method self withInstanceId.1
 * @method string getInstanceId.2
 * @method self withInstanceId.2
 * @method string getInstanceId.3
 * @method self withInstanceId.3
 * @method string getInstanceId.4
 * @method self withInstanceId.4
 * @method string getInstanceId.5
 * @method self withInstanceId.5
 * @method string getInstanceId.6
 * @method self withInstanceId.6
 * @method string getInstanceId.7
 * @method self withInstanceId.7
 * @method string getInstanceId.8
 * @method self withInstanceId.8
 * @method string getInstanceId.9
 * @method self withInstanceId.9
 * @method string getInstanceId.10
 * @method self withInstanceId.10
 * @method string getInstanceId.11
 * @method self withInstanceId.11
 * @method string getInstanceId.12
 * @method self withInstanceId.12
 * @method string getInstanceId.13
 * @method self withInstanceId.13
 * @method string getInstanceId.14
 * @method self withInstanceId.14
 * @method string getInstanceId.15
 * @method self withInstanceId.15
 * @method string getInstanceId.16
 * @method self withInstanceId.16
 * @method string getInstanceId.17
 * @method self withInstanceId.17
 * @method string getInstanceId.18
 * @method self withInstanceId.18
 * @method string getInstanceId.19
 * @method self withInstanceId.19
 * @method string getInstanceId.20
 * @method self withInstanceId.20
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class DescribeScalingInstances extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getScalingGroupId.1
 * @method self withScalingGroupId.1
 * @method string getScalingGroupId.2
 * @method self withScalingGroupId.2
 * @method string getScalingGroupId.3
 * @method self withScalingGroupId.3
 * @method string getScalingGroupId.4
 * @method self withScalingGroupId.4
 * @method string getScalingGroupId.5
 * @method self withScalingGroupId.5
 * @method string getScalingGroupId.6
 * @method self withScalingGroupId.6
 * @method string getScalingGroupId.7
 * @method self withScalingGroupId.7
 * @method string getScalingGroupId.8
 * @method self withScalingGroupId.8
 * @method string getScalingGroupId.9
 * @method self withScalingGroupId.9
 * @method string getScalingGroupId.10
 * @method self withScalingGroupId.10
 * @method string getScalingGroupId.12
 * @method self withScalingGroupId.12
 * @method string getScalingGroupId.13
 * @method self withScalingGroupId.13
 * @method string getScalingGroupId.14
 * @method self withScalingGroupId.14
 * @method string getScalingGroupId.15
 * @method self withScalingGroupId.15
 * @method string getScalingGroupId.16
 * @method self withScalingGroupId.16
 * @method string getScalingGroupId.17
 * @method self withScalingGroupId.17
 * @method string getScalingGroupId.18
 * @method self withScalingGroupId.18
 * @method string getScalingGroupId.19
 * @method self withScalingGroupId.19
 * @method string getScalingGroupId.20
 * @method self withScalingGroupId.20
 * @method string getScalingGroupName
 * @method self withScalingGroupName
 * @method string getScalingGroupName.1
 * @method self withScalingGroupName.1
 * @method string getScalingGroupName.2
 * @method self withScalingGroupName.2
 * @method string getScalingGroupName.3
 * @method self withScalingGroupName.3
 * @method string getScalingGroupName.4
 * @method self withScalingGroupName.4
 * @method string getScalingGroupName.5
 * @method self withScalingGroupName.5
 * @method string getScalingGroupName.6
 * @method self withScalingGroupName.6
 * @method string getScalingGroupName.7
 * @method self withScalingGroupName.7
 * @method string getScalingGroupName.8
 * @method self withScalingGroupName.8
 * @method string getScalingGroupName.9
 * @method self withScalingGroupName.9
 * @method string getScalingGroupName.10
 * @method self withScalingGroupName.10
 * @method string getScalingGroupName.11
 * @method self withScalingGroupName.11
 * @method string getScalingGroupName.12
 * @method self withScalingGroupName.12
 * @method string getScalingGroupName.13
 * @method self withScalingGroupName.13
 * @method string getScalingGroupName.14
 * @method self withScalingGroupName.14
 * @method string getScalingGroupName.15
 * @method self withScalingGroupName.15
 * @method string getScalingGroupName.16
 * @method self withScalingGroupName.16
 * @method string getScalingGroupName.17
 * @method self withScalingGroupName.17
 * @method string getScalingGroupName.18
 * @method self withScalingGroupName.18
 * @method string getScalingGroupName.19
 * @method self withScalingGroupName.19
 * @method string getScalingGroupName.20
 * @method self withScalingGroupName.20
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class DescribeScalingGroups extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getScalingGroupId
 * @method self withScalingGroupId
 * @method string getScalingConfigurationId.1
 * @method self withScalingConfigurationId.1
 * @method string getScalingConfigurationId.2
 * @method self withScalingConfigurationId.2
 * @method string getScalingConfigurationId.3
 * @method self withScalingConfigurationId.3
 * @method string getScalingConfigurationId.4
 * @method self withScalingConfigurationId.4
 * @method string getScalingConfigurationId.5
 * @method self withScalingConfigurationId.5
 * @method string getScalingConfigurationId.6
 * @method self withScalingConfigurationId.6
 * @method string getScalingConfigurationId.7
 * @method self withScalingConfigurationId.7
 * @method string getScalingConfigurationId.8
 * @method self withScalingConfigurationId.8
 * @method string getScalingConfigurationId.9
 * @method self withScalingConfigurationId.9
 * @method string getScalingConfigurationId.10
 * @method self withScalingConfigurationId.10
 * @method string getScalingConfigurationName.1
 * @method self withScalingConfigurationName.1
 * @method string getScalingConfigurationName.2
 * @method self withScalingConfigurationName.2
 * @method string getScalingConfigurationName.3
 * @method self withScalingConfigurationName.3
 * @method string getScalingConfigurationName.4
 * @method self withScalingConfigurationName.4
 * @method string getScalingConfigurationName.5
 * @method self withScalingConfigurationName.5
 * @method string getScalingConfigurationName.6
 * @method self withScalingConfigurationName.6
 * @method string getScalingConfigurationName.7
 * @method self withScalingConfigurationName.7
 * @method string getScalingConfigurationName.8
 * @method self withScalingConfigurationName.8
 * @method string getScalingConfigurationName.9
 * @method self withScalingConfigurationName.9
 * @method string getScalingConfigurationName.10
 * @method self withScalingConfigurationName.10
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class DescribeScalingConfigurations extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getScalingGroupId
 * @method self withScalingGroupId
 * @method string getStatusCode
 * @method self withStatusCode
 * @method string getScalingActivityId.1
 * @method self withScalingActivityId.1
 * @method string getScalingActivityId.2
 * @method self withScalingActivityId.2
 * @method string getScalingActivityId.3
 * @method self withScalingActivityId.3
 * @method string getScalingActivityId.4
 * @method self withScalingActivityId.4
 * @method string getScalingActivityId.5
 * @method self withScalingActivityId.5
 * @method string getScalingActivityId.6
 * @method self withScalingActivityId.6
 * @method string getScalingActivityId.7
 * @method self withScalingActivityId.7
 * @method string getScalingActivityId.8
 * @method self withScalingActivityId.8
 * @method string getScalingActivityId.9
 * @method self withScalingActivityId.9
 * @method string getScalingActivityId.10
 * @method self withScalingActivityId.10
 * @method string getScalingActivityId.11
 * @method self withScalingActivityId.11
 * @method string getScalingActivityId.12
 * @method self withScalingActivityId.12
 * @method string getScalingActivityId.13
 * @method self withScalingActivityId.13
 * @method string getScalingActivityId.14
 * @method self withScalingActivityId.14
 * @method string getScalingActivityId.15
 * @method self withScalingActivityId.15
 * @method string getScalingActivityId.16
 * @method self withScalingActivityId.16
 * @method string getScalingActivityId.17
 * @method self withScalingActivityId.17
 * @method string getScalingActivityId.18
 * @method self withScalingActivityId.18
 * @method string getScalingActivityId.19
 * @method self withScalingActivityId.19
 * @method string getScalingActivityId.20
 * @method self withScalingActivityId.20
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class DescribeScalingActivities extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method string getScheduledTaskId
 * @method self withScheduledTaskId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class DeleteScheduledTask extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method string getScalingRuleId
 * @method self withScalingRuleId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class DeleteScalingRule extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method string getScalingGroupId
 * @method self withScalingGroupId
 * @method Boolean getForceDelete
 * @method self withForceDelete
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class DeleteScalingGroup extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method string getScalingConfigurationId
 * @method self withScalingConfigurationId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class DeleteScalingConfiguration extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method string getScheduledTaskName
 * @method self withScheduledTaskName
 * @method string getDescription
 * @method self withDescription
 * @method string getScheduledAction
 * @method self withScheduledAction
 * @method string getRecurrenceEndTime
 * @method self withRecurrenceEndTime
 * @method string getLaunchTime
 * @method self withLaunchTime
 * @method string getRecurrenceType
 * @method self withRecurrenceType
 * @method string getRecurrenceValue
 * @method self withRecurrenceValue
 * @method Boolean getTaskEnabled
 * @method self withTaskEnabled
 * @method Integer getLaunchExpirationTime
 * @method self withLaunchExpirationTime
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class CreateScheduledTask extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method string getScalingGroupId
 * @method self withScalingGroupId
 * @method string getScalingRuleName
 * @method self withScalingRuleName
 * @method Integer getCooldown
 * @method self withCooldown
 * @method string getAdjustmentType
 * @method self withAdjustmentType
 * @method Integer getAdjustmentValue
 * @method self withAdjustmentValue
 * @method string getScalingRuleType
 * @method self withScalingRuleType
 * @method Integer getEstimatedInstanceWarmup
 * @method self withEstimatedInstanceWarmup
 * @method string getMetricName
 * @method self withMetricName
 * @method Float getTargetValue
 * @method self withTargetValue
 * @method Boolean getDisableScaleIn
 * @method self withDisableScaleIn
 * @method RepeatList getStepAdjustment
 * @method self withStepAdjustment
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class CreateScalingRule extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method string getScalingGroupName
 * @method self withScalingGroupName
 * @method string getLaunchTemplateId
 * @method self withLaunchTemplateId
 * @method string getLaunchTemplateVersion
 * @method self withLaunchTemplateVersion
 * @method Integer getMinSize
 * @method self withMinSize
 * @method Integer getMaxSize
 * @method self withMaxSize
 * @method Integer getDefaultCooldown
 * @method self withDefaultCooldown
 * @method string getLoadBalancerIds
 * @method self withLoadBalancerIds
 * @method string getDBInstanceIds
 * @method self withDBInstanceIds
 * @method string getRemovalPolicy.1
 * @method self withRemovalPolicy.1
 * @method string getRemovalPolicy.2
 * @method self withRemovalPolicy.2
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getVSwitchId
 * @method self withVSwitchId
 * @method RepeatList getVSwitchIds
 * @method self withVSwitchIds
 * @method string getMultiAZPolicy
 * @method self withMultiAZPolicy
 * @method string getHealthCheckType
 * @method self withHealthCheckType
 * @method RepeatList getLifecycleHook
 * @method self withLifecycleHook
 * @method RepeatList getVServerGroup
 * @method self withVServerGroup
 * @method string getScalingPolicy
 * @method self withScalingPolicy
 * @method string getClientToken
 * @method self withClientToken
 */
final class CreateScalingGroup extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method string getScalingGroupId
 * @method self withScalingGroupId
 * @method string getImageId
 * @method self withImageId
 * @method string getImageName
 * @method self withImageName
 * @method string getInstanceType
 * @method self withInstanceType
 * @method Integer getCpu
 * @method self withCpu
 * @method Integer getMemory
 * @method self withMemory
 * @method string getDeploymentSetId
 * @method self withDeploymentSetId
 * @method RepeatList getInstanceTypes
 * @method self withInstanceTypes
 * @method string getSecurityGroupId
 * @method self withSecurityGroupId
 * @method string getIoOptimized
 * @method self withIoOptimized
 * @method string getInternetChargeType
 * @method self withInternetChargeType
 * @method Integer getInternetMaxBandwidthIn
 * @method self withInternetMaxBandwidthIn
 * @method Integer getInternetMaxBandwidthOut
 * @method self withInternetMaxBandwidthOut
 * @method string getSystemDisk.Category
 * @method self withSystemDisk.Category
 * @method Integer getSystemDisk.Size
 * @method self withSystemDisk.Size
 * @method string getScalingConfigurationName
 * @method self withScalingConfigurationName
 * @method RepeatList getDataDisk
 * @method self withDataDisk
 * @method Integer getLoadBalancerWeight
 * @method self withLoadBalancerWeight
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getTags
 * @method self withTags
 * @method string getUserData
 * @method self withUserData
 * @method string getKeyPairName
 * @method self withKeyPairName
 * @method string getRamRoleName
 * @method self withRamRoleName
 * @method string getSecurityEnhancementStrategy
 * @method self withSecurityEnhancementStrategy
 * @method string getInstanceName
 * @method self withInstanceName
 * @method string getHostName
 * @method self withHostName
 * @method string getSpotStrategy
 * @method self withSpotStrategy
 * @method Boolean getPasswordInherit
 * @method self withPasswordInherit
 * @method RepeatList getSpotPriceLimit
 * @method self withSpotPriceLimit
 * @method string getPassword
 * @method self withPassword
 * @method string getResourceGroupId
 * @method self withResourceGroupId
 */
final class CreateScalingConfiguration extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getScalingGroupId
 * @method self withScalingGroupId
 * @method string getInstanceId.1
 * @method self withInstanceId.1
 * @method string getInstanceId.2
 * @method self withInstanceId.2
 * @method string getInstanceId.3
 * @method self withInstanceId.3
 * @method string getInstanceId.4
 * @method self withInstanceId.4
 * @method string getInstanceId.5
 * @method self withInstanceId.5
 * @method string getInstanceId.6
 * @method self withInstanceId.6
 * @method string getInstanceId.7
 * @method self withInstanceId.7
 * @method string getInstanceId.8
 * @method self withInstanceId.8
 * @method string getInstanceId.9
 * @method self withInstanceId.9
 * @method string getInstanceId.10
 * @method self withInstanceId.10
 * @method string getInstanceId.11
 * @method self withInstanceId.11
 * @method string getInstanceId.12
 * @method self withInstanceId.12
 * @method string getInstanceId.13
 * @method self withInstanceId.13
 * @method string getInstanceId.14
 * @method self withInstanceId.14
 * @method string getInstanceId.15
 * @method self withInstanceId.15
 * @method string getInstanceId.16
 * @method self withInstanceId.16
 * @method string getInstanceId.17
 * @method self withInstanceId.17
 * @method string getInstanceId.18
 * @method self withInstanceId.18
 * @method string getInstanceId.19
 * @method self withInstanceId.19
 * @method string getInstanceId.20
 * @method self withInstanceId.20
 * @method Integer getLoadBalancerWeight.1
 * @method self withLoadBalancerWeight.1
 * @method Integer getLoadBalancerWeight.2
 * @method self withLoadBalancerWeight.2
 * @method Integer getLoadBalancerWeight.3
 * @method self withLoadBalancerWeight.3
 * @method Integer getLoadBalancerWeight.4
 * @method self withLoadBalancerWeight.4
 * @method Integer getLoadBalancerWeight.5
 * @method self withLoadBalancerWeight.5
 * @method Integer getLoadBalancerWeight.6
 * @method self withLoadBalancerWeight.6
 * @method Integer getLoadBalancerWeight.7
 * @method self withLoadBalancerWeight.7
 * @method Integer getLoadBalancerWeight.8
 * @method self withLoadBalancerWeight.8
 * @method Integer getLoadBalancerWeight.9
 * @method self withLoadBalancerWeight.9
 * @method Integer getLoadBalancerWeight.10
 * @method self withLoadBalancerWeight.10
 * @method Integer getLoadBalancerWeight.11
 * @method self withLoadBalancerWeight.11
 * @method Integer getLoadBalancerWeight.12
 * @method self withLoadBalancerWeight.12
 * @method Integer getLoadBalancerWeight.13
 * @method self withLoadBalancerWeight.13
 * @method Integer getLoadBalancerWeight.14
 * @method self withLoadBalancerWeight.14
 * @method Integer getLoadBalancerWeight.15
 * @method self withLoadBalancerWeight.15
 * @method Integer getLoadBalancerWeight.16
 * @method self withLoadBalancerWeight.16
 * @method Integer getLoadBalancerWeight.17
 * @method self withLoadBalancerWeight.17
 * @method Integer getLoadBalancerWeight.18
 * @method self withLoadBalancerWeight.18
 * @method Integer getLoadBalancerWeight.19
 * @method self withLoadBalancerWeight.19
 * @method Integer getLoadBalancerWeight.20
 * @method self withLoadBalancerWeight.20
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class AttachInstances extends RpcRequest
{
}
