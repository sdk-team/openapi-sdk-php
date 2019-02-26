<?php

namespace AlibabaCloud\Ess\V20160722;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method VerifyUser verifyUser($options = [])
 * @method VerifyAuthentication verifyAuthentication($options = [])
 * @method RemoveInstances removeInstances($options = [])
 * @method ModifyScheduledTask modifyScheduledTask($options = [])
 * @method ModifyScalingRule modifyScalingRule($options = [])
 * @method ModifyScalingGroup modifyScalingGroup($options = [])
 * @method ExecuteScalingRule executeScalingRule($options = [])
 * @method EnableScalingGroup enableScalingGroup($options = [])
 * @method DisableScalingGroup disableScalingGroup($options = [])
 * @method DetachInstances detachInstances($options = [])
 * @method DescribeScheduledTasks describeScheduledTasks($options = [])
 * @method DescribeScalingRules describeScalingRules($options = [])
 * @method DescribeScalingInstances describeScalingInstances($options = [])
 * @method DescribeScalingGroups describeScalingGroups($options = [])
 * @method DescribeScalingConfigurations describeScalingConfigurations($options = [])
 * @method DescribeScalingActivityDetail describeScalingActivityDetail($options = [])
 * @method DescribeScalingActivities describeScalingActivities($options = [])
 * @method DescribeRegions describeRegions($options = [])
 * @method DescribeLimitation describeLimitation($options = [])
 * @method DescribeCapacityHistory describeCapacityHistory($options = [])
 * @method DescribeAccountAttributes describeAccountAttributes($options = [])
 * @method DeleteScheduledTask deleteScheduledTask($options = [])
 * @method DeleteScalingRule deleteScalingRule($options = [])
 * @method DeleteScalingGroup deleteScalingGroup($options = [])
 * @method DeleteScalingConfiguration deleteScalingConfiguration($options = [])
 * @method CreateScheduledTask createScheduledTask($options = [])
 * @method CreateScalingRule createScalingRule($options = [])
 * @method CreateScalingGroup createScalingGroup($options = [])
 * @method CreateScalingConfiguration createScalingConfiguration($options = [])
 * @method AttachInstances attachInstances($options = [])
 */
class V20160722
{
    use ApiResolverTrait;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 */
class VerifyUser extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method int getUid
 * @method self withUid(int $uid)
 */
class VerifyAuthentication extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getScalingGroupId
 * @method self withScalingGroupId(string $scalingGroupId)
 * @method string getInstanceId1
 * @method self withInstanceId1(string $instanceId1)
 * @method string getInstanceId2
 * @method self withInstanceId2(string $instanceId2)
 * @method string getInstanceId3
 * @method self withInstanceId3(string $instanceId3)
 * @method string getInstanceId4
 * @method self withInstanceId4(string $instanceId4)
 * @method string getInstanceId5
 * @method self withInstanceId5(string $instanceId5)
 * @method string getInstanceId6
 * @method self withInstanceId6(string $instanceId6)
 * @method string getInstanceId7
 * @method self withInstanceId7(string $instanceId7)
 * @method string getInstanceId8
 * @method self withInstanceId8(string $instanceId8)
 * @method string getInstanceId9
 * @method self withInstanceId9(string $instanceId9)
 * @method string getInstanceId10
 * @method self withInstanceId10(string $instanceId10)
 * @method string getInstanceId11
 * @method self withInstanceId11(string $instanceId11)
 * @method string getInstanceId12
 * @method self withInstanceId12(string $instanceId12)
 * @method string getInstanceId13
 * @method self withInstanceId13(string $instanceId13)
 * @method string getInstanceId14
 * @method self withInstanceId14(string $instanceId14)
 * @method string getInstanceId15
 * @method self withInstanceId15(string $instanceId15)
 * @method string getInstanceId16
 * @method self withInstanceId16(string $instanceId16)
 * @method string getInstanceId17
 * @method self withInstanceId17(string $instanceId17)
 * @method string getInstanceId18
 * @method self withInstanceId18(string $instanceId18)
 * @method string getInstanceId19
 * @method self withInstanceId19(string $instanceId19)
 * @method string getInstanceId20
 * @method self withInstanceId20(string $instanceId20)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class RemoveInstances extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getScheduledTaskId
 * @method self withScheduledTaskId(string $scheduledTaskId)
 * @method string getScheduledTaskName
 * @method self withScheduledTaskName(string $scheduledTaskName)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getScheduledAction
 * @method self withScheduledAction(string $scheduledAction)
 * @method string getRecurrenceEndTime
 * @method self withRecurrenceEndTime(string $recurrenceEndTime)
 * @method string getLaunchTime
 * @method self withLaunchTime(string $launchTime)
 * @method string getRecurrenceType
 * @method self withRecurrenceType(string $recurrenceType)
 * @method string getRecurrenceValue
 * @method self withRecurrenceValue(string $recurrenceValue)
 * @method bool getTaskEnabled
 * @method self withTaskEnabled(bool $taskEnabled)
 * @method Integer getLaunchExpirationTime
 * @method self withLaunchExpirationTime(Integer $launchExpirationTime)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ModifyScheduledTask extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getScalingRuleId
 * @method self withScalingRuleId(string $scalingRuleId)
 * @method string getScalingRuleName
 * @method self withScalingRuleName(string $scalingRuleName)
 * @method Integer getCooldown
 * @method self withCooldown(Integer $cooldown)
 * @method string getAdjustmentType
 * @method self withAdjustmentType(string $adjustmentType)
 * @method Integer getAdjustmentValue
 * @method self withAdjustmentValue(Integer $adjustmentValue)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ModifyScalingRule extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getScalingGroupId
 * @method self withScalingGroupId(string $scalingGroupId)
 * @method string getScalingGroupName
 * @method self withScalingGroupName(string $scalingGroupName)
 * @method Integer getMinSize
 * @method self withMinSize(Integer $minSize)
 * @method Integer getMaxSize
 * @method self withMaxSize(Integer $maxSize)
 * @method Integer getDefaultCooldown
 * @method self withDefaultCooldown(Integer $defaultCooldown)
 * @method string getRemovalPolicy1
 * @method self withRemovalPolicy1(string $removalPolicy1)
 * @method string getRemovalPolicy2
 * @method self withRemovalPolicy2(string $removalPolicy2)
 * @method string getActiveScalingConfigurationId
 * @method self withActiveScalingConfigurationId(string $activeScalingConfigurationId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ModifyScalingGroup extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getScalingRuleAri
 * @method self withScalingRuleAri(string $scalingRuleAri)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ExecuteScalingRule extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getScalingGroupId
 * @method self withScalingGroupId(string $scalingGroupId)
 * @method string getActiveScalingConfigurationId
 * @method self withActiveScalingConfigurationId(string $activeScalingConfigurationId)
 * @method string getInstanceId1
 * @method self withInstanceId1(string $instanceId1)
 * @method string getInstanceId2
 * @method self withInstanceId2(string $instanceId2)
 * @method string getInstanceId3
 * @method self withInstanceId3(string $instanceId3)
 * @method string getInstanceId4
 * @method self withInstanceId4(string $instanceId4)
 * @method string getInstanceId5
 * @method self withInstanceId5(string $instanceId5)
 * @method string getInstanceId6
 * @method self withInstanceId6(string $instanceId6)
 * @method string getInstanceId7
 * @method self withInstanceId7(string $instanceId7)
 * @method string getInstanceId8
 * @method self withInstanceId8(string $instanceId8)
 * @method string getInstanceId9
 * @method self withInstanceId9(string $instanceId9)
 * @method string getInstanceId10
 * @method self withInstanceId10(string $instanceId10)
 * @method string getInstanceId11
 * @method self withInstanceId11(string $instanceId11)
 * @method string getInstanceId12
 * @method self withInstanceId12(string $instanceId12)
 * @method string getInstanceId13
 * @method self withInstanceId13(string $instanceId13)
 * @method string getInstanceId14
 * @method self withInstanceId14(string $instanceId14)
 * @method string getInstanceId15
 * @method self withInstanceId15(string $instanceId15)
 * @method string getInstanceId16
 * @method self withInstanceId16(string $instanceId16)
 * @method string getInstanceId17
 * @method self withInstanceId17(string $instanceId17)
 * @method string getInstanceId18
 * @method self withInstanceId18(string $instanceId18)
 * @method string getInstanceId19
 * @method self withInstanceId19(string $instanceId19)
 * @method string getInstanceId20
 * @method self withInstanceId20(string $instanceId20)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class EnableScalingGroup extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getScalingGroupId
 * @method self withScalingGroupId(string $scalingGroupId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DisableScalingGroup extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getScalingGroupId
 * @method self withScalingGroupId(string $scalingGroupId)
 * @method string getInstanceId1
 * @method self withInstanceId1(string $instanceId1)
 * @method string getInstanceId2
 * @method self withInstanceId2(string $instanceId2)
 * @method string getInstanceId3
 * @method self withInstanceId3(string $instanceId3)
 * @method string getInstanceId4
 * @method self withInstanceId4(string $instanceId4)
 * @method string getInstanceId5
 * @method self withInstanceId5(string $instanceId5)
 * @method string getInstanceId6
 * @method self withInstanceId6(string $instanceId6)
 * @method string getInstanceId7
 * @method self withInstanceId7(string $instanceId7)
 * @method string getInstanceId8
 * @method self withInstanceId8(string $instanceId8)
 * @method string getInstanceId9
 * @method self withInstanceId9(string $instanceId9)
 * @method string getInstanceId10
 * @method self withInstanceId10(string $instanceId10)
 * @method string getInstanceId11
 * @method self withInstanceId11(string $instanceId11)
 * @method string getInstanceId12
 * @method self withInstanceId12(string $instanceId12)
 * @method string getInstanceId13
 * @method self withInstanceId13(string $instanceId13)
 * @method string getInstanceId14
 * @method self withInstanceId14(string $instanceId14)
 * @method string getInstanceId15
 * @method self withInstanceId15(string $instanceId15)
 * @method string getInstanceId16
 * @method self withInstanceId16(string $instanceId16)
 * @method string getInstanceId17
 * @method self withInstanceId17(string $instanceId17)
 * @method string getInstanceId18
 * @method self withInstanceId18(string $instanceId18)
 * @method string getInstanceId19
 * @method self withInstanceId19(string $instanceId19)
 * @method string getInstanceId20
 * @method self withInstanceId20(string $instanceId20)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DetachInstances extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getScheduledAction1
 * @method self withScheduledAction1(string $scheduledAction1)
 * @method string getScheduledAction2
 * @method self withScheduledAction2(string $scheduledAction2)
 * @method string getScheduledAction3
 * @method self withScheduledAction3(string $scheduledAction3)
 * @method string getScheduledAction4
 * @method self withScheduledAction4(string $scheduledAction4)
 * @method string getScheduledAction5
 * @method self withScheduledAction5(string $scheduledAction5)
 * @method string getScheduledAction6
 * @method self withScheduledAction6(string $scheduledAction6)
 * @method string getScheduledAction7
 * @method self withScheduledAction7(string $scheduledAction7)
 * @method string getScheduledAction8
 * @method self withScheduledAction8(string $scheduledAction8)
 * @method string getScheduledAction9
 * @method self withScheduledAction9(string $scheduledAction9)
 * @method string getScheduledAction10
 * @method self withScheduledAction10(string $scheduledAction10)
 * @method string getScheduledAction11
 * @method self withScheduledAction11(string $scheduledAction11)
 * @method string getScheduledAction12
 * @method self withScheduledAction12(string $scheduledAction12)
 * @method string getScheduledAction13
 * @method self withScheduledAction13(string $scheduledAction13)
 * @method string getScheduledAction14
 * @method self withScheduledAction14(string $scheduledAction14)
 * @method string getScheduledAction15
 * @method self withScheduledAction15(string $scheduledAction15)
 * @method string getScheduledAction16
 * @method self withScheduledAction16(string $scheduledAction16)
 * @method string getScheduledAction17
 * @method self withScheduledAction17(string $scheduledAction17)
 * @method string getScheduledAction18
 * @method self withScheduledAction18(string $scheduledAction18)
 * @method string getScheduledAction19
 * @method self withScheduledAction19(string $scheduledAction19)
 * @method string getScheduledAction20
 * @method self withScheduledAction20(string $scheduledAction20)
 * @method string getScheduledTaskId1
 * @method self withScheduledTaskId1(string $scheduledTaskId1)
 * @method string getScheduledTaskId2
 * @method self withScheduledTaskId2(string $scheduledTaskId2)
 * @method string getScheduledTaskId3
 * @method self withScheduledTaskId3(string $scheduledTaskId3)
 * @method string getScheduledTaskId4
 * @method self withScheduledTaskId4(string $scheduledTaskId4)
 * @method string getScheduledTaskId5
 * @method self withScheduledTaskId5(string $scheduledTaskId5)
 * @method string getScheduledTaskId6
 * @method self withScheduledTaskId6(string $scheduledTaskId6)
 * @method string getScheduledTaskId7
 * @method self withScheduledTaskId7(string $scheduledTaskId7)
 * @method string getScheduledTaskId8
 * @method self withScheduledTaskId8(string $scheduledTaskId8)
 * @method string getScheduledTaskId9
 * @method self withScheduledTaskId9(string $scheduledTaskId9)
 * @method string getScheduledTaskId10
 * @method self withScheduledTaskId10(string $scheduledTaskId10)
 * @method string getScheduledTaskId11
 * @method self withScheduledTaskId11(string $scheduledTaskId11)
 * @method string getScheduledTaskId12
 * @method self withScheduledTaskId12(string $scheduledTaskId12)
 * @method string getScheduledTaskId13
 * @method self withScheduledTaskId13(string $scheduledTaskId13)
 * @method string getScheduledTaskId14
 * @method self withScheduledTaskId14(string $scheduledTaskId14)
 * @method string getScheduledTaskId15
 * @method self withScheduledTaskId15(string $scheduledTaskId15)
 * @method string getScheduledTaskId16
 * @method self withScheduledTaskId16(string $scheduledTaskId16)
 * @method string getScheduledTaskId17
 * @method self withScheduledTaskId17(string $scheduledTaskId17)
 * @method string getScheduledTaskId18
 * @method self withScheduledTaskId18(string $scheduledTaskId18)
 * @method string getScheduledTaskId19
 * @method self withScheduledTaskId19(string $scheduledTaskId19)
 * @method string getScheduledTaskId20
 * @method self withScheduledTaskId20(string $scheduledTaskId20)
 * @method string getScheduledTaskName1
 * @method self withScheduledTaskName1(string $scheduledTaskName1)
 * @method string getScheduledTaskName2
 * @method self withScheduledTaskName2(string $scheduledTaskName2)
 * @method string getScheduledTaskName3
 * @method self withScheduledTaskName3(string $scheduledTaskName3)
 * @method string getScheduledTaskName4
 * @method self withScheduledTaskName4(string $scheduledTaskName4)
 * @method string getScheduledTaskName5
 * @method self withScheduledTaskName5(string $scheduledTaskName5)
 * @method string getScheduledTaskName6
 * @method self withScheduledTaskName6(string $scheduledTaskName6)
 * @method string getScheduledTaskName7
 * @method self withScheduledTaskName7(string $scheduledTaskName7)
 * @method string getScheduledTaskName8
 * @method self withScheduledTaskName8(string $scheduledTaskName8)
 * @method string getScheduledTaskName9
 * @method self withScheduledTaskName9(string $scheduledTaskName9)
 * @method string getScheduledTaskName10
 * @method self withScheduledTaskName10(string $scheduledTaskName10)
 * @method string getScheduledTaskName11
 * @method self withScheduledTaskName11(string $scheduledTaskName11)
 * @method string getScheduledTaskName12
 * @method self withScheduledTaskName12(string $scheduledTaskName12)
 * @method string getScheduledTaskName13
 * @method self withScheduledTaskName13(string $scheduledTaskName13)
 * @method string getScheduledTaskName14
 * @method self withScheduledTaskName14(string $scheduledTaskName14)
 * @method string getScheduledTaskName15
 * @method self withScheduledTaskName15(string $scheduledTaskName15)
 * @method string getScheduledTaskName16
 * @method self withScheduledTaskName16(string $scheduledTaskName16)
 * @method string getScheduledTaskName17
 * @method self withScheduledTaskName17(string $scheduledTaskName17)
 * @method string getScheduledTaskName18
 * @method self withScheduledTaskName18(string $scheduledTaskName18)
 * @method string getScheduledTaskName19
 * @method self withScheduledTaskName19(string $scheduledTaskName19)
 * @method string getScheduledTaskName20
 * @method self withScheduledTaskName20(string $scheduledTaskName20)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeScheduledTasks extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getScalingGroupId
 * @method self withScalingGroupId(string $scalingGroupId)
 * @method string getScalingRuleId1
 * @method self withScalingRuleId1(string $scalingRuleId1)
 * @method string getScalingRuleId2
 * @method self withScalingRuleId2(string $scalingRuleId2)
 * @method string getScalingRuleId3
 * @method self withScalingRuleId3(string $scalingRuleId3)
 * @method string getScalingRuleId4
 * @method self withScalingRuleId4(string $scalingRuleId4)
 * @method string getScalingRuleId5
 * @method self withScalingRuleId5(string $scalingRuleId5)
 * @method string getScalingRuleId6
 * @method self withScalingRuleId6(string $scalingRuleId6)
 * @method string getScalingRuleId7
 * @method self withScalingRuleId7(string $scalingRuleId7)
 * @method string getScalingRuleId8
 * @method self withScalingRuleId8(string $scalingRuleId8)
 * @method string getScalingRuleId9
 * @method self withScalingRuleId9(string $scalingRuleId9)
 * @method string getScalingRuleId10
 * @method self withScalingRuleId10(string $scalingRuleId10)
 * @method string getScalingRuleName1
 * @method self withScalingRuleName1(string $scalingRuleName1)
 * @method string getScalingRuleName2
 * @method self withScalingRuleName2(string $scalingRuleName2)
 * @method string getScalingRuleName3
 * @method self withScalingRuleName3(string $scalingRuleName3)
 * @method string getScalingRuleName4
 * @method self withScalingRuleName4(string $scalingRuleName4)
 * @method string getScalingRuleName5
 * @method self withScalingRuleName5(string $scalingRuleName5)
 * @method string getScalingRuleName6
 * @method self withScalingRuleName6(string $scalingRuleName6)
 * @method string getScalingRuleName7
 * @method self withScalingRuleName7(string $scalingRuleName7)
 * @method string getScalingRuleName8
 * @method self withScalingRuleName8(string $scalingRuleName8)
 * @method string getScalingRuleName9
 * @method self withScalingRuleName9(string $scalingRuleName9)
 * @method string getScalingRuleName10
 * @method self withScalingRuleName10(string $scalingRuleName10)
 * @method string getScalingRuleAri1
 * @method self withScalingRuleAri1(string $scalingRuleAri1)
 * @method string getScalingRuleAri2
 * @method self withScalingRuleAri2(string $scalingRuleAri2)
 * @method string getScalingRuleAri3
 * @method self withScalingRuleAri3(string $scalingRuleAri3)
 * @method string getScalingRuleAri4
 * @method self withScalingRuleAri4(string $scalingRuleAri4)
 * @method string getScalingRuleAri5
 * @method self withScalingRuleAri5(string $scalingRuleAri5)
 * @method string getScalingRuleAri6
 * @method self withScalingRuleAri6(string $scalingRuleAri6)
 * @method string getScalingRuleAri7
 * @method self withScalingRuleAri7(string $scalingRuleAri7)
 * @method string getScalingRuleAri8
 * @method self withScalingRuleAri8(string $scalingRuleAri8)
 * @method string getScalingRuleAri9
 * @method self withScalingRuleAri9(string $scalingRuleAri9)
 * @method string getScalingRuleAri10
 * @method self withScalingRuleAri10(string $scalingRuleAri10)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeScalingRules extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getScalingGroupId
 * @method self withScalingGroupId(string $scalingGroupId)
 * @method string getScalingConfigurationId
 * @method self withScalingConfigurationId(string $scalingConfigurationId)
 * @method string getHealthStatus
 * @method self withHealthStatus(string $healthStatus)
 * @method string getLifecycleState
 * @method self withLifecycleState(string $lifecycleState)
 * @method string getCreationType
 * @method self withCreationType(string $creationType)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getInstanceId1
 * @method self withInstanceId1(string $instanceId1)
 * @method string getInstanceId2
 * @method self withInstanceId2(string $instanceId2)
 * @method string getInstanceId3
 * @method self withInstanceId3(string $instanceId3)
 * @method string getInstanceId4
 * @method self withInstanceId4(string $instanceId4)
 * @method string getInstanceId5
 * @method self withInstanceId5(string $instanceId5)
 * @method string getInstanceId6
 * @method self withInstanceId6(string $instanceId6)
 * @method string getInstanceId7
 * @method self withInstanceId7(string $instanceId7)
 * @method string getInstanceId8
 * @method self withInstanceId8(string $instanceId8)
 * @method string getInstanceId9
 * @method self withInstanceId9(string $instanceId9)
 * @method string getInstanceId10
 * @method self withInstanceId10(string $instanceId10)
 * @method string getInstanceId11
 * @method self withInstanceId11(string $instanceId11)
 * @method string getInstanceId12
 * @method self withInstanceId12(string $instanceId12)
 * @method string getInstanceId13
 * @method self withInstanceId13(string $instanceId13)
 * @method string getInstanceId14
 * @method self withInstanceId14(string $instanceId14)
 * @method string getInstanceId15
 * @method self withInstanceId15(string $instanceId15)
 * @method string getInstanceId16
 * @method self withInstanceId16(string $instanceId16)
 * @method string getInstanceId17
 * @method self withInstanceId17(string $instanceId17)
 * @method string getInstanceId18
 * @method self withInstanceId18(string $instanceId18)
 * @method string getInstanceId19
 * @method self withInstanceId19(string $instanceId19)
 * @method string getInstanceId20
 * @method self withInstanceId20(string $instanceId20)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeScalingInstances extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getScalingGroupId1
 * @method self withScalingGroupId1(string $scalingGroupId1)
 * @method string getScalingGroupId2
 * @method self withScalingGroupId2(string $scalingGroupId2)
 * @method string getScalingGroupId3
 * @method self withScalingGroupId3(string $scalingGroupId3)
 * @method string getScalingGroupId4
 * @method self withScalingGroupId4(string $scalingGroupId4)
 * @method string getScalingGroupId5
 * @method self withScalingGroupId5(string $scalingGroupId5)
 * @method string getScalingGroupId6
 * @method self withScalingGroupId6(string $scalingGroupId6)
 * @method string getScalingGroupId7
 * @method self withScalingGroupId7(string $scalingGroupId7)
 * @method string getScalingGroupId8
 * @method self withScalingGroupId8(string $scalingGroupId8)
 * @method string getScalingGroupId9
 * @method self withScalingGroupId9(string $scalingGroupId9)
 * @method string getScalingGroupId10
 * @method self withScalingGroupId10(string $scalingGroupId10)
 * @method string getScalingGroupId12
 * @method self withScalingGroupId12(string $scalingGroupId12)
 * @method string getScalingGroupId13
 * @method self withScalingGroupId13(string $scalingGroupId13)
 * @method string getScalingGroupId14
 * @method self withScalingGroupId14(string $scalingGroupId14)
 * @method string getScalingGroupId15
 * @method self withScalingGroupId15(string $scalingGroupId15)
 * @method string getScalingGroupId16
 * @method self withScalingGroupId16(string $scalingGroupId16)
 * @method string getScalingGroupId17
 * @method self withScalingGroupId17(string $scalingGroupId17)
 * @method string getScalingGroupId18
 * @method self withScalingGroupId18(string $scalingGroupId18)
 * @method string getScalingGroupId19
 * @method self withScalingGroupId19(string $scalingGroupId19)
 * @method string getScalingGroupId20
 * @method self withScalingGroupId20(string $scalingGroupId20)
 * @method string getScalingGroupName1
 * @method self withScalingGroupName1(string $scalingGroupName1)
 * @method string getScalingGroupName2
 * @method self withScalingGroupName2(string $scalingGroupName2)
 * @method string getScalingGroupName3
 * @method self withScalingGroupName3(string $scalingGroupName3)
 * @method string getScalingGroupName4
 * @method self withScalingGroupName4(string $scalingGroupName4)
 * @method string getScalingGroupName5
 * @method self withScalingGroupName5(string $scalingGroupName5)
 * @method string getScalingGroupName6
 * @method self withScalingGroupName6(string $scalingGroupName6)
 * @method string getScalingGroupName7
 * @method self withScalingGroupName7(string $scalingGroupName7)
 * @method string getScalingGroupName8
 * @method self withScalingGroupName8(string $scalingGroupName8)
 * @method string getScalingGroupName9
 * @method self withScalingGroupName9(string $scalingGroupName9)
 * @method string getScalingGroupName10
 * @method self withScalingGroupName10(string $scalingGroupName10)
 * @method string getScalingGroupName11
 * @method self withScalingGroupName11(string $scalingGroupName11)
 * @method string getScalingGroupName12
 * @method self withScalingGroupName12(string $scalingGroupName12)
 * @method string getScalingGroupName13
 * @method self withScalingGroupName13(string $scalingGroupName13)
 * @method string getScalingGroupName14
 * @method self withScalingGroupName14(string $scalingGroupName14)
 * @method string getScalingGroupName15
 * @method self withScalingGroupName15(string $scalingGroupName15)
 * @method string getScalingGroupName16
 * @method self withScalingGroupName16(string $scalingGroupName16)
 * @method string getScalingGroupName17
 * @method self withScalingGroupName17(string $scalingGroupName17)
 * @method string getScalingGroupName18
 * @method self withScalingGroupName18(string $scalingGroupName18)
 * @method string getScalingGroupName19
 * @method self withScalingGroupName19(string $scalingGroupName19)
 * @method string getScalingGroupName20
 * @method self withScalingGroupName20(string $scalingGroupName20)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeScalingGroups extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getScalingGroupId
 * @method self withScalingGroupId(string $scalingGroupId)
 * @method string getScalingConfigurationId1
 * @method self withScalingConfigurationId1(string $scalingConfigurationId1)
 * @method string getScalingConfigurationId2
 * @method self withScalingConfigurationId2(string $scalingConfigurationId2)
 * @method string getScalingConfigurationId3
 * @method self withScalingConfigurationId3(string $scalingConfigurationId3)
 * @method string getScalingConfigurationId4
 * @method self withScalingConfigurationId4(string $scalingConfigurationId4)
 * @method string getScalingConfigurationId5
 * @method self withScalingConfigurationId5(string $scalingConfigurationId5)
 * @method string getScalingConfigurationId6
 * @method self withScalingConfigurationId6(string $scalingConfigurationId6)
 * @method string getScalingConfigurationId7
 * @method self withScalingConfigurationId7(string $scalingConfigurationId7)
 * @method string getScalingConfigurationId8
 * @method self withScalingConfigurationId8(string $scalingConfigurationId8)
 * @method string getScalingConfigurationId9
 * @method self withScalingConfigurationId9(string $scalingConfigurationId9)
 * @method string getScalingConfigurationId10
 * @method self withScalingConfigurationId10(string $scalingConfigurationId10)
 * @method string getScalingConfigurationName1
 * @method self withScalingConfigurationName1(string $scalingConfigurationName1)
 * @method string getScalingConfigurationName2
 * @method self withScalingConfigurationName2(string $scalingConfigurationName2)
 * @method string getScalingConfigurationName3
 * @method self withScalingConfigurationName3(string $scalingConfigurationName3)
 * @method string getScalingConfigurationName4
 * @method self withScalingConfigurationName4(string $scalingConfigurationName4)
 * @method string getScalingConfigurationName5
 * @method self withScalingConfigurationName5(string $scalingConfigurationName5)
 * @method string getScalingConfigurationName6
 * @method self withScalingConfigurationName6(string $scalingConfigurationName6)
 * @method string getScalingConfigurationName7
 * @method self withScalingConfigurationName7(string $scalingConfigurationName7)
 * @method string getScalingConfigurationName8
 * @method self withScalingConfigurationName8(string $scalingConfigurationName8)
 * @method string getScalingConfigurationName9
 * @method self withScalingConfigurationName9(string $scalingConfigurationName9)
 * @method string getScalingConfigurationName10
 * @method self withScalingConfigurationName10(string $scalingConfigurationName10)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeScalingConfigurations extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getScalingActivityId
 * @method self withScalingActivityId(string $scalingActivityId)
 */
class DescribeScalingActivityDetail extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getScalingGroupId
 * @method self withScalingGroupId(string $scalingGroupId)
 * @method string getStatusCode
 * @method self withStatusCode(string $statusCode)
 * @method string getScalingActivityId1
 * @method self withScalingActivityId1(string $scalingActivityId1)
 * @method string getScalingActivityId2
 * @method self withScalingActivityId2(string $scalingActivityId2)
 * @method string getScalingActivityId3
 * @method self withScalingActivityId3(string $scalingActivityId3)
 * @method string getScalingActivityId4
 * @method self withScalingActivityId4(string $scalingActivityId4)
 * @method string getScalingActivityId5
 * @method self withScalingActivityId5(string $scalingActivityId5)
 * @method string getScalingActivityId6
 * @method self withScalingActivityId6(string $scalingActivityId6)
 * @method string getScalingActivityId7
 * @method self withScalingActivityId7(string $scalingActivityId7)
 * @method string getScalingActivityId8
 * @method self withScalingActivityId8(string $scalingActivityId8)
 * @method string getScalingActivityId9
 * @method self withScalingActivityId9(string $scalingActivityId9)
 * @method string getScalingActivityId10
 * @method self withScalingActivityId10(string $scalingActivityId10)
 * @method string getScalingActivityId11
 * @method self withScalingActivityId11(string $scalingActivityId11)
 * @method string getScalingActivityId12
 * @method self withScalingActivityId12(string $scalingActivityId12)
 * @method string getScalingActivityId13
 * @method self withScalingActivityId13(string $scalingActivityId13)
 * @method string getScalingActivityId14
 * @method self withScalingActivityId14(string $scalingActivityId14)
 * @method string getScalingActivityId15
 * @method self withScalingActivityId15(string $scalingActivityId15)
 * @method string getScalingActivityId16
 * @method self withScalingActivityId16(string $scalingActivityId16)
 * @method string getScalingActivityId17
 * @method self withScalingActivityId17(string $scalingActivityId17)
 * @method string getScalingActivityId18
 * @method self withScalingActivityId18(string $scalingActivityId18)
 * @method string getScalingActivityId19
 * @method self withScalingActivityId19(string $scalingActivityId19)
 * @method string getScalingActivityId20
 * @method self withScalingActivityId20(string $scalingActivityId20)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeScalingActivities extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 */
class DescribeRegions extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 */
class DescribeLimitation extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getScalingGroupId
 * @method self withScalingGroupId(string $scalingGroupId)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeCapacityHistory extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 */
class DescribeAccountAttributes extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getScheduledTaskId
 * @method self withScheduledTaskId(string $scheduledTaskId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DeleteScheduledTask extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getScalingRuleId
 * @method self withScalingRuleId(string $scalingRuleId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DeleteScalingRule extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getScalingGroupId
 * @method self withScalingGroupId(string $scalingGroupId)
 * @method bool getForceDelete
 * @method self withForceDelete(bool $forceDelete)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DeleteScalingGroup extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getScalingConfigurationId
 * @method self withScalingConfigurationId(string $scalingConfigurationId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DeleteScalingConfiguration extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getScheduledTaskName
 * @method self withScheduledTaskName(string $scheduledTaskName)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getScheduledAction
 * @method self withScheduledAction(string $scheduledAction)
 * @method string getRecurrenceEndTime
 * @method self withRecurrenceEndTime(string $recurrenceEndTime)
 * @method string getLaunchTime
 * @method self withLaunchTime(string $launchTime)
 * @method string getRecurrenceType
 * @method self withRecurrenceType(string $recurrenceType)
 * @method string getRecurrenceValue
 * @method self withRecurrenceValue(string $recurrenceValue)
 * @method bool getTaskEnabled
 * @method self withTaskEnabled(bool $taskEnabled)
 * @method Integer getLaunchExpirationTime
 * @method self withLaunchExpirationTime(Integer $launchExpirationTime)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class CreateScheduledTask extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getScalingGroupId
 * @method self withScalingGroupId(string $scalingGroupId)
 * @method string getScalingRuleName
 * @method self withScalingRuleName(string $scalingRuleName)
 * @method Integer getCooldown
 * @method self withCooldown(Integer $cooldown)
 * @method string getAdjustmentType
 * @method self withAdjustmentType(string $adjustmentType)
 * @method Integer getAdjustmentValue
 * @method self withAdjustmentValue(Integer $adjustmentValue)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class CreateScalingRule extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getScalingGroupName
 * @method self withScalingGroupName(string $scalingGroupName)
 * @method Integer getMinSize
 * @method self withMinSize(Integer $minSize)
 * @method Integer getMaxSize
 * @method self withMaxSize(Integer $maxSize)
 * @method Integer getDefaultCooldown
 * @method self withDefaultCooldown(Integer $defaultCooldown)
 * @method string getLoadBalancerIds
 * @method self withLoadBalancerIds(string $loadBalancerIds)
 * @method string getDBInstanceIds
 * @method self withDBInstanceIds(string $dBInstanceIds)
 * @method string getRemovalPolicy1
 * @method self withRemovalPolicy1(string $removalPolicy1)
 * @method string getRemovalPolicy2
 * @method self withRemovalPolicy2(string $removalPolicy2)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getVSwitchId
 * @method self withVSwitchId(string $vSwitchId)
 */
class CreateScalingGroup extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getScalingGroupId
 * @method self withScalingGroupId(string $scalingGroupId)
 * @method string getImageId
 * @method self withImageId(string $imageId)
 * @method string getInstanceType
 * @method self withInstanceType(string $instanceType)
 * @method string getSecurityGroupId
 * @method self withSecurityGroupId(string $securityGroupId)
 * @method string getIoOptimized
 * @method self withIoOptimized(string $ioOptimized)
 * @method string getInternetChargeType
 * @method self withInternetChargeType(string $internetChargeType)
 * @method Integer getInternetMaxBandwidthIn
 * @method self withInternetMaxBandwidthIn(Integer $internetMaxBandwidthIn)
 * @method Integer getInternetMaxBandwidthOut
 * @method self withInternetMaxBandwidthOut(Integer $internetMaxBandwidthOut)
 * @method string getSystemDiskCategory
 * @method self withSystemDiskCategory(string $systemDiskCategory)
 * @method Integer getSystemDiskSize
 * @method self withSystemDiskSize(Integer $systemDiskSize)
 * @method string getScalingConfigurationName
 * @method self withScalingConfigurationName(string $scalingConfigurationName)
 * @method Integer getDataDisk1Size
 * @method self withDataDisk1Size(Integer $dataDisk1Size)
 * @method Integer getDataDisk2Size
 * @method self withDataDisk2Size(Integer $dataDisk2Size)
 * @method Integer getDataDisk3Size
 * @method self withDataDisk3Size(Integer $dataDisk3Size)
 * @method Integer getDataDisk4Size
 * @method self withDataDisk4Size(Integer $dataDisk4Size)
 * @method string getDataDisk1Category
 * @method self withDataDisk1Category(string $dataDisk1Category)
 * @method string getDataDisk2Category
 * @method self withDataDisk2Category(string $dataDisk2Category)
 * @method string getDataDisk3Category
 * @method self withDataDisk3Category(string $dataDisk3Category)
 * @method string getDataDisk4Category
 * @method self withDataDisk4Category(string $dataDisk4Category)
 * @method string getDataDisk1SnapshotId
 * @method self withDataDisk1SnapshotId(string $dataDisk1SnapshotId)
 * @method string getDataDisk2SnapshotId
 * @method self withDataDisk2SnapshotId(string $dataDisk2SnapshotId)
 * @method string getDataDisk3SnapshotId
 * @method self withDataDisk3SnapshotId(string $dataDisk3SnapshotId)
 * @method string getDataDisk4SnapshotId
 * @method self withDataDisk4SnapshotId(string $dataDisk4SnapshotId)
 * @method string getDataDisk1Device
 * @method self withDataDisk1Device(string $dataDisk1Device)
 * @method string getDataDisk2Device
 * @method self withDataDisk2Device(string $dataDisk2Device)
 * @method string getDataDisk3Device
 * @method self withDataDisk3Device(string $dataDisk3Device)
 * @method string getDataDisk4Device
 * @method self withDataDisk4Device(string $dataDisk4Device)
 * @method string getDataDisk1DeleteWithInstance
 * @method self withDataDisk1DeleteWithInstance(string $dataDisk1DeleteWithInstance)
 * @method string getDataDisk2DeleteWithInstance
 * @method self withDataDisk2DeleteWithInstance(string $dataDisk2DeleteWithInstance)
 * @method string getDataDisk3DeleteWithInstance
 * @method self withDataDisk3DeleteWithInstance(string $dataDisk3DeleteWithInstance)
 * @method string getDataDisk4DeleteWithInstance
 * @method self withDataDisk4DeleteWithInstance(string $dataDisk4DeleteWithInstance)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class CreateScalingConfiguration extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getScalingGroupId
 * @method self withScalingGroupId(string $scalingGroupId)
 * @method string getInstanceId1
 * @method self withInstanceId1(string $instanceId1)
 * @method string getInstanceId2
 * @method self withInstanceId2(string $instanceId2)
 * @method string getInstanceId3
 * @method self withInstanceId3(string $instanceId3)
 * @method string getInstanceId4
 * @method self withInstanceId4(string $instanceId4)
 * @method string getInstanceId5
 * @method self withInstanceId5(string $instanceId5)
 * @method string getInstanceId6
 * @method self withInstanceId6(string $instanceId6)
 * @method string getInstanceId7
 * @method self withInstanceId7(string $instanceId7)
 * @method string getInstanceId8
 * @method self withInstanceId8(string $instanceId8)
 * @method string getInstanceId9
 * @method self withInstanceId9(string $instanceId9)
 * @method string getInstanceId10
 * @method self withInstanceId10(string $instanceId10)
 * @method string getInstanceId11
 * @method self withInstanceId11(string $instanceId11)
 * @method string getInstanceId12
 * @method self withInstanceId12(string $instanceId12)
 * @method string getInstanceId13
 * @method self withInstanceId13(string $instanceId13)
 * @method string getInstanceId14
 * @method self withInstanceId14(string $instanceId14)
 * @method string getInstanceId15
 * @method self withInstanceId15(string $instanceId15)
 * @method string getInstanceId16
 * @method self withInstanceId16(string $instanceId16)
 * @method string getInstanceId17
 * @method self withInstanceId17(string $instanceId17)
 * @method string getInstanceId18
 * @method self withInstanceId18(string $instanceId18)
 * @method string getInstanceId19
 * @method self withInstanceId19(string $instanceId19)
 * @method string getInstanceId20
 * @method self withInstanceId20(string $instanceId20)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class AttachInstances extends Roa
{
    use R;
}
