<?php

namespace AlibabaCloud\RKvstore\V20150101;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method ListTagResources listTagResources($options = [])
 * @method TagResources tagResources($options = [])
 * @method MigrateToOtherZone migrateToOtherZone($options = [])
 * @method UntagResources untagResources($options = [])
 * @method ModifyAuditLogConfig modifyAuditLogConfig($options = [])
 * @method ModifyDBInstanceMonitor modifyDBInstanceMonitor($options = [])
 * @method DescribeDBInstanceMonitor describeDBInstanceMonitor($options = [])
 * @method DescribeCacheAnalysisReportList describeCacheAnalysisReportList($options = [])
 * @method DescribeIntranetAttribute describeIntranetAttribute($options = [])
 * @method ModifyIntranetAttribute modifyIntranetAttribute($options = [])
 * @method DescribeCacheAnalysisReport describeCacheAnalysisReport($options = [])
 * @method CreateCacheAnalysisTask createCacheAnalysisTask($options = [])
 * @method DescribeAuditRecords describeAuditRecords($options = [])
 * @method DescribeSlowLogRecords describeSlowLogRecords($options = [])
 * @method DescribeErrorLogRecords describeErrorLogRecords($options = [])
 * @method RestartInstance restartInstance($options = [])
 * @method ModifyInstanceAutoRenewalAttribute modifyInstanceAutoRenewalAttribute($options = [])
 * @method DescribeInstanceAutoRenewalAttribute describeInstanceAutoRenewalAttribute($options = [])
 * @method AppendReplicaInstance appendReplicaInstance($options = [])
 * @method DescribeRunningLogRecords describeRunningLogRecords($options = [])
 * @method UnlinkReplicaInstance unlinkReplicaInstance($options = [])
 * @method ModifyActiveOperationTask modifyActiveOperationTask($options = [])
 * @method DescribeActiveOperationTaskType describeActiveOperationTaskType($options = [])
 * @method DescribeActiveOperationTaskRegion describeActiveOperationTaskRegion($options = [])
 * @method DescribeActiveOperationTaskCount describeActiveOperationTaskCount($options = [])
 * @method DescribeActiveOperationTask describeActiveOperationTask($options = [])
 * @method ModifyInstanceMajorVersion modifyInstanceMajorVersion($options = [])
 * @method DescribeParameterTemplates describeParameterTemplates($options = [])
 * @method RevokeAccountPrivilege revokeAccountPrivilege($options = [])
 * @method DescribeParameters describeParameters($options = [])
 * @method ModifyAccountDescription modifyAccountDescription($options = [])
 * @method ResetAccount resetAccount($options = [])
 * @method CreateAccount createAccount($options = [])
 * @method DeleteAccount deleteAccount($options = [])
 * @method DescribeParameterModificationHistory describeParameterModificationHistory($options = [])
 * @method ResetAccountPassword resetAccountPassword($options = [])
 * @method DescribeAccounts describeAccounts($options = [])
 * @method GrantAccountPrivilege grantAccountPrivilege($options = [])
 * @method EvaluateFailOverSwitch evaluateFailOverSwitch($options = [])
 * @method DestroyInstance destroyInstance($options = [])
 * @method ModifyInstanceVpcAuthMode modifyInstanceVpcAuthMode($options = [])
 * @method ModifyDBInstanceConnectionString modifyDBInstanceConnectionString($options = [])
 * @method DescribeRdsVSwitchs describeRdsVSwitchs($options = [])
 * @method DescribeRdsVpcs describeRdsVpcs($options = [])
 * @method DescribeStrategy describeStrategy($options = [])
 * @method DescribeReplicaConflictInfo describeReplicaConflictInfo($options = [])
 * @method CreateStaticVerification createStaticVerification($options = [])
 * @method ModifyReplicaRecoveryMode modifyReplicaRecoveryMode($options = [])
 * @method DescribeStaticVerificationList describeStaticVerificationList($options = [])
 * @method DescribeVerificationList describeVerificationList($options = [])
 * @method ModifyReplicaVerificationMode modifyReplicaVerificationMode($options = [])
 * @method DescribeInstancesByExpireTime describeInstancesByExpireTime($options = [])
 * @method ModifyReplicaRelation modifyReplicaRelation($options = [])
 * @method ModifyReplicaMode modifyReplicaMode($options = [])
 * @method ModifyGuardDomainMode modifyGuardDomainMode($options = [])
 * @method ModifyInstanceSSL modifyInstanceSSL($options = [])
 * @method DescribeInstanceSSL describeInstanceSSL($options = [])
 * @method DescribeLogicInstanceTopology describeLogicInstanceTopology($options = [])
 * @method ModifyInstanceVPCAuth modifyInstanceVPCAuth($options = [])
 * @method ModifyInstanceSpec modifyInstanceSpec($options = [])
 * @method DescribeInstanceVPCAuth describeInstanceVPCAuth($options = [])
 * @method ModifyInstanceSpecPreCheck modifyInstanceSpecPreCheck($options = [])
 * @method ModifyInstanceNetExpireTime modifyInstanceNetExpireTime($options = [])
 * @method CreateInstanceReplica createInstanceReplica($options = [])
 * @method ReleaseReplica releaseReplica($options = [])
 * @method ModifyReplicaDescription modifyReplicaDescription($options = [])
 * @method DescribeReplicaUsage describeReplicaUsage($options = [])
 * @method DescribeReplicas describeReplicas($options = [])
 * @method DescribeReplicaPerformance describeReplicaPerformance($options = [])
 * @method DescribeReplicaInitializeProgress describeReplicaInitializeProgress($options = [])
 * @method ModifyInstanceMinorVersion modifyInstanceMinorVersion($options = [])
 * @method ModifyCertification modifyCertification($options = [])
 * @method DescribeEngineVersion describeEngineVersion($options = [])
 * @method DescribeCertification describeCertification($options = [])
 * @method DescribeDBInstanceNetInfo describeDBInstanceNetInfo($options = [])
 * @method DescribeMonthlyServiceStatusDetail describeMonthlyServiceStatusDetail($options = [])
 * @method DescribeMonthlyServiceStatus describeMonthlyServiceStatus($options = [])
 * @method ModifySecurityIps modifySecurityIps($options = [])
 * @method DescribeSecurityIps describeSecurityIps($options = [])
 * @method ModifyInstanceMaintainTime modifyInstanceMaintainTime($options = [])
 * @method DescribeInstanceAttribute describeInstanceAttribute($options = [])
 * @method RestoreInstance restoreInstance($options = [])
 * @method ModifyBackupPolicy modifyBackupPolicy($options = [])
 * @method DescribeBackups describeBackups($options = [])
 * @method DescribeBackupPolicy describeBackupPolicy($options = [])
 * @method CreateBackup createBackup($options = [])
 * @method SwitchNetwork switchNetwork($options = [])
 * @method DescribeZones describeZones($options = [])
 * @method DeleteSnapshot deleteSnapshot($options = [])
 * @method CreateTempInstance createTempInstance($options = [])
 * @method CreateSnapshot createSnapshot($options = [])
 * @method DeleteTempInstance deleteTempInstance($options = [])
 * @method DeleteSnapshotSettings deleteSnapshotSettings($options = [])
 * @method GetSnapshotSettings getSnapshotSettings($options = [])
 * @method DescribeTempInstance describeTempInstance($options = [])
 * @method DescribeSnapshots describeSnapshots($options = [])
 * @method RestoreSnapshot restoreSnapshot($options = [])
 * @method QueryTask queryTask($options = [])
 * @method SwitchTempInstance switchTempInstance($options = [])
 * @method SetSnapshotSettings setSnapshotSettings($options = [])
 * @method RenewMultiInstance renewMultiInstance($options = [])
 * @method TransformToPrePaid transformToPrePaid($options = [])
 * @method RenewInstance renewInstance($options = [])
 * @method DescribeUserInfo describeUserInfo($options = [])
 * @method DescribePrice describePrice($options = [])
 * @method DescribeCommodity describeCommodity($options = [])
 * @method CreateInstances createInstances($options = [])
 * @method DescribeInstanceCount describeInstanceCount($options = [])
 * @method DescribeConnectionDomain describeConnectionDomain($options = [])
 * @method VerifyPassword verifyPassword($options = [])
 * @method ModifyInstanceConfig modifyInstanceConfig($options = [])
 * @method ModifyInstanceCapacity modifyInstanceCapacity($options = [])
 * @method ModifyInstanceAttribute modifyInstanceAttribute($options = [])
 * @method FlushInstance flushInstance($options = [])
 * @method DescribeRegions describeRegions($options = [])
 * @method DescribeMonitorValues describeMonitorValues($options = [])
 * @method DescribeMonitorItems describeMonitorItems($options = [])
 * @method DescribeInstances describeInstances($options = [])
 * @method DescribeInstanceConfig describeInstanceConfig($options = [])
 * @method DescribeHistoryMonitorValues describeHistoryMonitorValues($options = [])
 * @method DeleteInstance deleteInstance($options = [])
 * @method DeactivateInstance deactivateInstance($options = [])
 * @method DataOperate dataOperate($options = [])
 * @method CreateInstance createInstance($options = [])
 * @method ActivateInstance activateInstance($options = [])
 */
class V20150101
{
    use ApiResolverTrait;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceType
 * @method self withResourceType(string $resourceType)
 * @method string getResourceId1
 * @method self withResourceId1(string $resourceId1)
 * @method string getResourceId2
 * @method self withResourceId2(string $resourceId2)
 * @method string getResourceId3
 * @method self withResourceId3(string $resourceId3)
 * @method string getResourceId4
 * @method self withResourceId4(string $resourceId4)
 * @method string getResourceId5
 * @method self withResourceId5(string $resourceId5)
 * @method string getResourceId6
 * @method self withResourceId6(string $resourceId6)
 * @method string getResourceId7
 * @method self withResourceId7(string $resourceId7)
 * @method string getResourceId8
 * @method self withResourceId8(string $resourceId8)
 * @method string getResourceId9
 * @method self withResourceId9(string $resourceId9)
 * @method string getResourceId10
 * @method self withResourceId10(string $resourceId10)
 * @method string getResourceId11
 * @method self withResourceId11(string $resourceId11)
 * @method string getResourceId12
 * @method self withResourceId12(string $resourceId12)
 * @method string getResourceId13
 * @method self withResourceId13(string $resourceId13)
 * @method string getResourceId14
 * @method self withResourceId14(string $resourceId14)
 * @method string getResourceId15
 * @method self withResourceId15(string $resourceId15)
 * @method string getResourceId16
 * @method self withResourceId16(string $resourceId16)
 * @method string getResourceId17
 * @method self withResourceId17(string $resourceId17)
 * @method string getResourceId18
 * @method self withResourceId18(string $resourceId18)
 * @method string getResourceId19
 * @method self withResourceId19(string $resourceId19)
 * @method string getResourceId20
 * @method self withResourceId20(string $resourceId20)
 * @method string getResourceId21
 * @method self withResourceId21(string $resourceId21)
 * @method string getResourceId22
 * @method self withResourceId22(string $resourceId22)
 * @method string getResourceId23
 * @method self withResourceId23(string $resourceId23)
 * @method string getResourceId24
 * @method self withResourceId24(string $resourceId24)
 * @method string getResourceId25
 * @method self withResourceId25(string $resourceId25)
 * @method string getResourceId26
 * @method self withResourceId26(string $resourceId26)
 * @method string getResourceId27
 * @method self withResourceId27(string $resourceId27)
 * @method string getResourceId28
 * @method self withResourceId28(string $resourceId28)
 * @method string getResourceId29
 * @method self withResourceId29(string $resourceId29)
 * @method string getResourceId30
 * @method self withResourceId30(string $resourceId30)
 * @method string getResourceId31
 * @method self withResourceId31(string $resourceId31)
 * @method string getResourceId32
 * @method self withResourceId32(string $resourceId32)
 * @method string getResourceId33
 * @method self withResourceId33(string $resourceId33)
 * @method string getResourceId34
 * @method self withResourceId34(string $resourceId34)
 * @method string getResourceId35
 * @method self withResourceId35(string $resourceId35)
 * @method string getResourceId36
 * @method self withResourceId36(string $resourceId36)
 * @method string getResourceId37
 * @method self withResourceId37(string $resourceId37)
 * @method string getResourceId38
 * @method self withResourceId38(string $resourceId38)
 * @method string getResourceId39
 * @method self withResourceId39(string $resourceId39)
 * @method string getResourceId40
 * @method self withResourceId40(string $resourceId40)
 * @method string getResourceId41
 * @method self withResourceId41(string $resourceId41)
 * @method string getResourceId42
 * @method self withResourceId42(string $resourceId42)
 * @method string getResourceId43
 * @method self withResourceId43(string $resourceId43)
 * @method string getResourceId44
 * @method self withResourceId44(string $resourceId44)
 * @method string getResourceId45
 * @method self withResourceId45(string $resourceId45)
 * @method string getResourceId46
 * @method self withResourceId46(string $resourceId46)
 * @method string getResourceId47
 * @method self withResourceId47(string $resourceId47)
 * @method string getResourceId48
 * @method self withResourceId48(string $resourceId48)
 * @method string getResourceId49
 * @method self withResourceId49(string $resourceId49)
 * @method string getResourceId50
 * @method self withResourceId50(string $resourceId50)
 * @method string getTagKey1
 * @method self withTagKey1(string $tagKey1)
 * @method string getTagKey2
 * @method self withTagKey2(string $tagKey2)
 * @method string getTagKey3
 * @method self withTagKey3(string $tagKey3)
 * @method string getTagKey4
 * @method self withTagKey4(string $tagKey4)
 * @method string getTagKey5
 * @method self withTagKey5(string $tagKey5)
 * @method string getTagKey6
 * @method self withTagKey6(string $tagKey6)
 * @method string getTagKey7
 * @method self withTagKey7(string $tagKey7)
 * @method string getTagKey8
 * @method self withTagKey8(string $tagKey8)
 * @method string getTagKey9
 * @method self withTagKey9(string $tagKey9)
 * @method string getTagKey10
 * @method self withTagKey10(string $tagKey10)
 * @method string getTagKey11
 * @method self withTagKey11(string $tagKey11)
 * @method string getTagKey12
 * @method self withTagKey12(string $tagKey12)
 * @method string getTagKey13
 * @method self withTagKey13(string $tagKey13)
 * @method string getTagKey14
 * @method self withTagKey14(string $tagKey14)
 * @method string getTagKey15
 * @method self withTagKey15(string $tagKey15)
 * @method string getTagKey16
 * @method self withTagKey16(string $tagKey16)
 * @method string getTagKey17
 * @method self withTagKey17(string $tagKey17)
 * @method string getTagKey18
 * @method self withTagKey18(string $tagKey18)
 * @method string getTagKey19
 * @method self withTagKey19(string $tagKey19)
 * @method string getTagKey20
 * @method self withTagKey20(string $tagKey20)
 * @method string getScope
 * @method self withScope(string $scope)
 * @method string getNextToken
 * @method self withNextToken(string $nextToken)
 */
class ListTagResources extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceType
 * @method self withResourceType(string $resourceType)
 * @method string getResourceId1
 * @method self withResourceId1(string $resourceId1)
 * @method string getResourceId2
 * @method self withResourceId2(string $resourceId2)
 * @method string getResourceId3
 * @method self withResourceId3(string $resourceId3)
 * @method string getResourceId4
 * @method self withResourceId4(string $resourceId4)
 * @method string getResourceId5
 * @method self withResourceId5(string $resourceId5)
 * @method string getResourceId6
 * @method self withResourceId6(string $resourceId6)
 * @method string getResourceId7
 * @method self withResourceId7(string $resourceId7)
 * @method string getResourceId8
 * @method self withResourceId8(string $resourceId8)
 * @method string getResourceId9
 * @method self withResourceId9(string $resourceId9)
 * @method string getResourceId10
 * @method self withResourceId10(string $resourceId10)
 * @method string getResourceId11
 * @method self withResourceId11(string $resourceId11)
 * @method string getResourceId12
 * @method self withResourceId12(string $resourceId12)
 * @method string getResourceId13
 * @method self withResourceId13(string $resourceId13)
 * @method string getResourceId14
 * @method self withResourceId14(string $resourceId14)
 * @method string getResourceId15
 * @method self withResourceId15(string $resourceId15)
 * @method string getResourceId16
 * @method self withResourceId16(string $resourceId16)
 * @method string getResourceId17
 * @method self withResourceId17(string $resourceId17)
 * @method string getResourceId18
 * @method self withResourceId18(string $resourceId18)
 * @method string getResourceId19
 * @method self withResourceId19(string $resourceId19)
 * @method string getResourceId20
 * @method self withResourceId20(string $resourceId20)
 * @method string getResourceId21
 * @method self withResourceId21(string $resourceId21)
 * @method string getResourceId22
 * @method self withResourceId22(string $resourceId22)
 * @method string getResourceId23
 * @method self withResourceId23(string $resourceId23)
 * @method string getResourceId24
 * @method self withResourceId24(string $resourceId24)
 * @method string getResourceId25
 * @method self withResourceId25(string $resourceId25)
 * @method string getResourceId26
 * @method self withResourceId26(string $resourceId26)
 * @method string getResourceId27
 * @method self withResourceId27(string $resourceId27)
 * @method string getResourceId28
 * @method self withResourceId28(string $resourceId28)
 * @method string getResourceId29
 * @method self withResourceId29(string $resourceId29)
 * @method string getResourceId30
 * @method self withResourceId30(string $resourceId30)
 * @method string getResourceId31
 * @method self withResourceId31(string $resourceId31)
 * @method string getResourceId32
 * @method self withResourceId32(string $resourceId32)
 * @method string getResourceId33
 * @method self withResourceId33(string $resourceId33)
 * @method string getResourceId34
 * @method self withResourceId34(string $resourceId34)
 * @method string getResourceId35
 * @method self withResourceId35(string $resourceId35)
 * @method string getResourceId36
 * @method self withResourceId36(string $resourceId36)
 * @method string getResourceId37
 * @method self withResourceId37(string $resourceId37)
 * @method string getResourceId38
 * @method self withResourceId38(string $resourceId38)
 * @method string getResourceId39
 * @method self withResourceId39(string $resourceId39)
 * @method string getResourceId40
 * @method self withResourceId40(string $resourceId40)
 * @method string getResourceId41
 * @method self withResourceId41(string $resourceId41)
 * @method string getResourceId42
 * @method self withResourceId42(string $resourceId42)
 * @method string getResourceId43
 * @method self withResourceId43(string $resourceId43)
 * @method string getResourceId44
 * @method self withResourceId44(string $resourceId44)
 * @method string getResourceId45
 * @method self withResourceId45(string $resourceId45)
 * @method string getResourceId46
 * @method self withResourceId46(string $resourceId46)
 * @method string getResourceId47
 * @method self withResourceId47(string $resourceId47)
 * @method string getResourceId48
 * @method self withResourceId48(string $resourceId48)
 * @method string getResourceId49
 * @method self withResourceId49(string $resourceId49)
 * @method string getResourceId50
 * @method self withResourceId50(string $resourceId50)
 * @method string getTag1Key
 * @method self withTag1Key(string $tag1Key)
 * @method string getTag2Key
 * @method self withTag2Key(string $tag2Key)
 * @method string getTag3Key
 * @method self withTag3Key(string $tag3Key)
 * @method string getTag4Key
 * @method self withTag4Key(string $tag4Key)
 * @method string getTag5Key
 * @method self withTag5Key(string $tag5Key)
 * @method string getTag6Key
 * @method self withTag6Key(string $tag6Key)
 * @method string getTag7Key
 * @method self withTag7Key(string $tag7Key)
 * @method string getTag8Key
 * @method self withTag8Key(string $tag8Key)
 * @method string getTag9Key
 * @method self withTag9Key(string $tag9Key)
 * @method string getTag10Key
 * @method self withTag10Key(string $tag10Key)
 * @method string getTag11Key
 * @method self withTag11Key(string $tag11Key)
 * @method string getTag12Key
 * @method self withTag12Key(string $tag12Key)
 * @method string getTag13Key
 * @method self withTag13Key(string $tag13Key)
 * @method string getTag14Key
 * @method self withTag14Key(string $tag14Key)
 * @method string getTag15Key
 * @method self withTag15Key(string $tag15Key)
 * @method string getTag16Key
 * @method self withTag16Key(string $tag16Key)
 * @method string getTag17Key
 * @method self withTag17Key(string $tag17Key)
 * @method string getTag18Key
 * @method self withTag18Key(string $tag18Key)
 * @method string getTag19Key
 * @method self withTag19Key(string $tag19Key)
 * @method string getTag20Key
 * @method self withTag20Key(string $tag20Key)
 * @method string getTag1Value
 * @method self withTag1Value(string $tag1Value)
 * @method string getTag2Value
 * @method self withTag2Value(string $tag2Value)
 * @method string getTag3Value
 * @method self withTag3Value(string $tag3Value)
 * @method string getTag4Value
 * @method self withTag4Value(string $tag4Value)
 * @method string getTag5Value
 * @method self withTag5Value(string $tag5Value)
 * @method string getTag6Value
 * @method self withTag6Value(string $tag6Value)
 * @method string getTag7Value
 * @method self withTag7Value(string $tag7Value)
 * @method string getTag8Value
 * @method self withTag8Value(string $tag8Value)
 * @method string getTag9Value
 * @method self withTag9Value(string $tag9Value)
 * @method string getTag10Value
 * @method self withTag10Value(string $tag10Value)
 * @method string getTag11Value
 * @method self withTag11Value(string $tag11Value)
 * @method string getTag12Value
 * @method self withTag12Value(string $tag12Value)
 * @method string getTag13Value
 * @method self withTag13Value(string $tag13Value)
 * @method string getTag14Value
 * @method self withTag14Value(string $tag14Value)
 * @method string getTag15Value
 * @method self withTag15Value(string $tag15Value)
 * @method string getTag16Value
 * @method self withTag16Value(string $tag16Value)
 * @method string getTag17Value
 * @method self withTag17Value(string $tag17Value)
 * @method string getTag18Value
 * @method self withTag18Value(string $tag18Value)
 * @method string getTag19Value
 * @method self withTag19Value(string $tag19Value)
 * @method string getTag20Value
 * @method self withTag20Value(string $tag20Value)
 * @method string getScope
 * @method self withScope(string $scope)
 */
class TagResources extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 * @method string getVSwitchId
 * @method self withVSwitchId(string $vSwitchId)
 * @method string getEffectiveTime
 * @method self withEffectiveTime(string $effectiveTime)
 */
class MigrateToOtherZone extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceType
 * @method self withResourceType(string $resourceType)
 * @method string getResourceId1
 * @method self withResourceId1(string $resourceId1)
 * @method string getResourceId2
 * @method self withResourceId2(string $resourceId2)
 * @method string getResourceId3
 * @method self withResourceId3(string $resourceId3)
 * @method string getResourceId4
 * @method self withResourceId4(string $resourceId4)
 * @method string getResourceId5
 * @method self withResourceId5(string $resourceId5)
 * @method string getResourceId6
 * @method self withResourceId6(string $resourceId6)
 * @method string getResourceId7
 * @method self withResourceId7(string $resourceId7)
 * @method string getResourceId8
 * @method self withResourceId8(string $resourceId8)
 * @method string getResourceId9
 * @method self withResourceId9(string $resourceId9)
 * @method string getResourceId10
 * @method self withResourceId10(string $resourceId10)
 * @method string getResourceId11
 * @method self withResourceId11(string $resourceId11)
 * @method string getResourceId12
 * @method self withResourceId12(string $resourceId12)
 * @method string getResourceId13
 * @method self withResourceId13(string $resourceId13)
 * @method string getResourceId14
 * @method self withResourceId14(string $resourceId14)
 * @method string getResourceId15
 * @method self withResourceId15(string $resourceId15)
 * @method string getResourceId16
 * @method self withResourceId16(string $resourceId16)
 * @method string getResourceId17
 * @method self withResourceId17(string $resourceId17)
 * @method string getResourceId18
 * @method self withResourceId18(string $resourceId18)
 * @method string getResourceId19
 * @method self withResourceId19(string $resourceId19)
 * @method string getResourceId20
 * @method self withResourceId20(string $resourceId20)
 * @method string getResourceId21
 * @method self withResourceId21(string $resourceId21)
 * @method string getResourceId22
 * @method self withResourceId22(string $resourceId22)
 * @method string getResourceId23
 * @method self withResourceId23(string $resourceId23)
 * @method string getResourceId24
 * @method self withResourceId24(string $resourceId24)
 * @method string getResourceId25
 * @method self withResourceId25(string $resourceId25)
 * @method string getResourceId26
 * @method self withResourceId26(string $resourceId26)
 * @method string getResourceId27
 * @method self withResourceId27(string $resourceId27)
 * @method string getResourceId28
 * @method self withResourceId28(string $resourceId28)
 * @method string getResourceId29
 * @method self withResourceId29(string $resourceId29)
 * @method string getResourceId30
 * @method self withResourceId30(string $resourceId30)
 * @method string getResourceId31
 * @method self withResourceId31(string $resourceId31)
 * @method string getResourceId32
 * @method self withResourceId32(string $resourceId32)
 * @method string getResourceId33
 * @method self withResourceId33(string $resourceId33)
 * @method string getResourceId34
 * @method self withResourceId34(string $resourceId34)
 * @method string getResourceId35
 * @method self withResourceId35(string $resourceId35)
 * @method string getResourceId36
 * @method self withResourceId36(string $resourceId36)
 * @method string getResourceId37
 * @method self withResourceId37(string $resourceId37)
 * @method string getResourceId38
 * @method self withResourceId38(string $resourceId38)
 * @method string getResourceId39
 * @method self withResourceId39(string $resourceId39)
 * @method string getResourceId40
 * @method self withResourceId40(string $resourceId40)
 * @method string getResourceId41
 * @method self withResourceId41(string $resourceId41)
 * @method string getResourceId42
 * @method self withResourceId42(string $resourceId42)
 * @method string getResourceId43
 * @method self withResourceId43(string $resourceId43)
 * @method string getResourceId44
 * @method self withResourceId44(string $resourceId44)
 * @method string getResourceId45
 * @method self withResourceId45(string $resourceId45)
 * @method string getResourceId46
 * @method self withResourceId46(string $resourceId46)
 * @method string getResourceId47
 * @method self withResourceId47(string $resourceId47)
 * @method string getResourceId48
 * @method self withResourceId48(string $resourceId48)
 * @method string getResourceId49
 * @method self withResourceId49(string $resourceId49)
 * @method string getResourceId50
 * @method self withResourceId50(string $resourceId50)
 * @method string getTagKey1
 * @method self withTagKey1(string $tagKey1)
 * @method string getTagKey2
 * @method self withTagKey2(string $tagKey2)
 * @method string getTagKey3
 * @method self withTagKey3(string $tagKey3)
 * @method string getTagKey4
 * @method self withTagKey4(string $tagKey4)
 * @method string getTagKey5
 * @method self withTagKey5(string $tagKey5)
 * @method string getTagKey6
 * @method self withTagKey6(string $tagKey6)
 * @method string getTagKey7
 * @method self withTagKey7(string $tagKey7)
 * @method string getTagKey8
 * @method self withTagKey8(string $tagKey8)
 * @method string getTagKey9
 * @method self withTagKey9(string $tagKey9)
 * @method string getTagKey10
 * @method self withTagKey10(string $tagKey10)
 * @method string getTagKey11
 * @method self withTagKey11(string $tagKey11)
 * @method string getTagKey12
 * @method self withTagKey12(string $tagKey12)
 * @method string getTagKey13
 * @method self withTagKey13(string $tagKey13)
 * @method string getTagKey14
 * @method self withTagKey14(string $tagKey14)
 * @method string getTagKey15
 * @method self withTagKey15(string $tagKey15)
 * @method string getTagKey16
 * @method self withTagKey16(string $tagKey16)
 * @method string getTagKey17
 * @method self withTagKey17(string $tagKey17)
 * @method string getTagKey18
 * @method self withTagKey18(string $tagKey18)
 * @method string getTagKey19
 * @method self withTagKey19(string $tagKey19)
 * @method string getTagKey20
 * @method self withTagKey20(string $tagKey20)
 * @method string getScope
 * @method self withScope(string $scope)
 */
class UntagResources extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getRetention
 * @method self withRetention(string $retention)
 * @method string getAuditCommand
 * @method self withAuditCommand(string $auditCommand)
 */
class ModifyAuditLogConfig extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getInterval
 * @method self withInterval(string $interval)
 */
class ModifyDBInstanceMonitor extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 */
class DescribeDBInstanceMonitor extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method Integer getDays
 * @method self withDays(Integer $days)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumbers
 * @method self withPageNumbers(Integer $pageNumbers)
 * @method string getNodeId
 * @method self withNodeId(string $nodeId)
 */
class DescribeCacheAnalysisReportList extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class DescribeIntranetAttribute extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class ModifyIntranetAttribute extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getDate
 * @method self withDate(string $date)
 * @method string getAnalysisType
 * @method self withAnalysisType(string $analysisType)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumbers
 * @method self withPageNumbers(Integer $pageNumbers)
 * @method string getNodeId
 * @method self withNodeId(string $nodeId)
 */
class DescribeCacheAnalysisReport extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class CreateCacheAnalysisTask extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getNodeId
 * @method self withNodeId(string $nodeId)
 * @method string getAccountName
 * @method self withAccountName(string $accountName)
 * @method string getDatabaseName
 * @method self withDatabaseName(string $databaseName)
 * @method string getQueryKeywords
 * @method self withQueryKeywords(string $queryKeywords)
 * @method string getHostAddress
 * @method self withHostAddress(string $hostAddress)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeAuditRecords extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getNodeId
 * @method self withNodeId(string $nodeId)
 * @method int getSQLId
 * @method self withSQLId(int $sQLId)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getDBName
 * @method self withDBName(string $dBName)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 */
class DescribeSlowLogRecords extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getNodeId
 * @method self withNodeId(string $nodeId)
 * @method int getSQLId
 * @method self withSQLId(int $sQLId)
 * @method string getRoleType
 * @method self withRoleType(string $roleType)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getDBName
 * @method self withDBName(string $dBName)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 */
class DescribeErrorLogRecords extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getEffectiveTime
 * @method self withEffectiveTime(string $effectiveTime)
 */
class RestartInstance extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getDuration
 * @method self withDuration(string $duration)
 * @method string getAutoRenew
 * @method self withAutoRenew(string $autoRenew)
 */
class ModifyInstanceAutoRenewalAttribute extends Roa
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
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeInstanceAutoRenewalAttribute extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getReplicaId
 * @method self withReplicaId(string $replicaId)
 * @method string getInstanceName
 * @method self withInstanceName(string $instanceName)
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 * @method string getChargeType
 * @method self withChargeType(string $chargeType)
 * @method Integer getPeriod
 * @method self withPeriod(Integer $period)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getNetworkType
 * @method self withNetworkType(string $networkType)
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 * @method string getVSwitchId
 * @method self withVSwitchId(string $vSwitchId)
 */
class AppendReplicaInstance extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getNodeId
 * @method self withNodeId(string $nodeId)
 * @method int getSQLId
 * @method self withSQLId(int $sQLId)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getDBName
 * @method self withDBName(string $dBName)
 * @method string getRoleType
 * @method self withRoleType(string $roleType)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 */
class DescribeRunningLogRecords extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getReplicaId
 * @method self withReplicaId(string $replicaId)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class UnlinkReplicaInstance extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getIds
 * @method self withIds(string $ids)
 * @method string getSwitchTime
 * @method self withSwitchTime(string $switchTime)
 */
class ModifyActiveOperationTask extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method Integer getIsHistory
 * @method self withIsHistory(Integer $isHistory)
 */
class DescribeActiveOperationTaskType extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getTaskType
 * @method self withTaskType(string $taskType)
 * @method Integer getIsHistory
 * @method self withIsHistory(Integer $isHistory)
 */
class DescribeActiveOperationTaskRegion extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeActiveOperationTaskCount extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getRegion
 * @method self withRegion(string $region)
 * @method string getTaskType
 * @method self withTaskType(string $taskType)
 * @method Integer getIsHistory
 * @method self withIsHistory(Integer $isHistory)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 */
class DescribeActiveOperationTask extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getMajorVersion
 * @method self withMajorVersion(string $majorVersion)
 * @method string getEffectTime
 * @method self withEffectTime(string $effectTime)
 */
class ModifyInstanceMajorVersion extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getCharacterType
 * @method self withCharacterType(string $characterType)
 * @method string getEngine
 * @method self withEngine(string $engine)
 * @method string getEngineVersion
 * @method self withEngineVersion(string $engineVersion)
 */
class DescribeParameterTemplates extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getAccountName
 * @method self withAccountName(string $accountName)
 */
class RevokeAccountPrivilege extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getNodeId
 * @method self withNodeId(string $nodeId)
 */
class DescribeParameters extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getAccountName
 * @method self withAccountName(string $accountName)
 * @method string getAccountDescription
 * @method self withAccountDescription(string $accountDescription)
 */
class ModifyAccountDescription extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getAccountName
 * @method self withAccountName(string $accountName)
 * @method string getAccountPassword
 * @method self withAccountPassword(string $accountPassword)
 */
class ResetAccount extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getAccountName
 * @method self withAccountName(string $accountName)
 * @method string getAccountPrivilege
 * @method self withAccountPrivilege(string $accountPrivilege)
 * @method string getAccountPassword
 * @method self withAccountPassword(string $accountPassword)
 * @method string getAccountDescription
 * @method self withAccountDescription(string $accountDescription)
 * @method string getAccountType
 * @method self withAccountType(string $accountType)
 */
class CreateAccount extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getAccountName
 * @method self withAccountName(string $accountName)
 */
class DeleteAccount extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getNodeId
 * @method self withNodeId(string $nodeId)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeParameterModificationHistory extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getAccountName
 * @method self withAccountName(string $accountName)
 * @method string getAccountPassword
 * @method self withAccountPassword(string $accountPassword)
 */
class ResetAccountPassword extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getAccountName
 * @method self withAccountName(string $accountName)
 */
class DescribeAccounts extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getAccountName
 * @method self withAccountName(string $accountName)
 * @method string getAccountPrivilege
 * @method self withAccountPrivilege(string $accountPrivilege)
 */
class GrantAccountPrivilege extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getReplicaId
 * @method self withReplicaId(string $replicaId)
 */
class EvaluateFailOverSwitch extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class DestroyInstance extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getVpcAuthMode
 * @method self withVpcAuthMode(string $vpcAuthMode)
 */
class ModifyInstanceVpcAuthMode extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDBInstanceId
 * @method self withDBInstanceId(string $dBInstanceId)
 * @method string getnewConnectionString
 * @method self withnewConnectionString(string $newConnectionString)
 * @method string getcurrentConnectionString
 * @method self withcurrentConnectionString(string $currentConnectionString)
 */
class ModifyDBInstanceConnectionString extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 */
class DescribeRdsVSwitchs extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 */
class DescribeRdsVpcs extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getReplicaId
 * @method self withReplicaId(string $replicaId)
 */
class DescribeStrategy extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getReplicaId
 * @method self withReplicaId(string $replicaId)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeReplicaConflictInfo extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getReplicaId
 * @method self withReplicaId(string $replicaId)
 * @method string getSourceInstanceId
 * @method self withSourceInstanceId(string $sourceInstanceId)
 * @method string getDestinationInstanceId
 * @method self withDestinationInstanceId(string $destinationInstanceId)
 */
class CreateStaticVerification extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getReplicaId
 * @method self withReplicaId(string $replicaId)
 * @method string getRecoveryMode
 * @method self withRecoveryMode(string $recoveryMode)
 */
class ModifyReplicaRecoveryMode extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getReplicaId
 * @method self withReplicaId(string $replicaId)
 * @method string getSourceInstanceId
 * @method self withSourceInstanceId(string $sourceInstanceId)
 * @method string getDestinationInstanceId
 * @method self withDestinationInstanceId(string $destinationInstanceId)
 */
class DescribeStaticVerificationList extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getReplicaId
 * @method self withReplicaId(string $replicaId)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeVerificationList extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getReplicaId
 * @method self withReplicaId(string $replicaId)
 * @method string getVerificationMode
 * @method self withVerificationMode(string $verificationMode)
 */
class ModifyReplicaVerificationMode extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method Integer getExpirePeriod
 * @method self withExpirePeriod(Integer $expirePeriod)
 * @method bool getHasExpiredRes
 * @method self withHasExpiredRes(bool $hasExpiredRes)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getInstanceType
 * @method self withInstanceType(string $instanceType)
 */
class DescribeInstancesByExpireTime extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getReplicaId
 * @method self withReplicaId(string $replicaId)
 */
class ModifyReplicaRelation extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getReplicaId
 * @method self withReplicaId(string $replicaId)
 * @method string getReplicaMode
 * @method self withReplicaMode(string $replicaMode)
 * @method string getPrimaryInstanceId
 * @method self withPrimaryInstanceId(string $primaryInstanceId)
 * @method string getDomainMode
 * @method self withDomainMode(string $domainMode)
 */
class ModifyReplicaMode extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getReplicaId
 * @method self withReplicaId(string $replicaId)
 * @method string getDomainMode
 * @method self withDomainMode(string $domainMode)
 */
class ModifyGuardDomainMode extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getSSLEnabled
 * @method self withSSLEnabled(string $sSLEnabled)
 */
class ModifyInstanceSSL extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class DescribeInstanceSSL extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class DescribeLogicInstanceTopology extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method bool getIsVPCAuth
 * @method self withIsVPCAuth(bool $isVPCAuth)
 */
class ModifyInstanceVPCAuth extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getInstanceClass
 * @method self withInstanceClass(string $instanceClass)
 * @method string getFromApp
 * @method self withFromApp(string $fromApp)
 * @method string getBusinessInfo
 * @method self withBusinessInfo(string $businessInfo)
 * @method string getCouponNo
 * @method self withCouponNo(string $couponNo)
 * @method bool getForceUpgrade
 * @method self withForceUpgrade(bool $forceUpgrade)
 * @method string getEffectiveTime
 * @method self withEffectiveTime(string $effectiveTime)
 * @method bool getAutoPay
 * @method self withAutoPay(bool $autoPay)
 */
class ModifyInstanceSpec extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class DescribeInstanceVPCAuth extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getTargetInstanceClass
 * @method self withTargetInstanceClass(string $targetInstanceClass)
 */
class ModifyInstanceSpecPreCheck extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getConnectionString
 * @method self withConnectionString(string $connectionString)
 * @method Integer getClassicExpiredDays
 * @method self withClassicExpiredDays(Integer $classicExpiredDays)
 */
class ModifyInstanceNetExpireTime extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 * @method string getSourceDBInstanceId
 * @method self withSourceDBInstanceId(string $sourceDBInstanceId)
 * @method string getDBInstanceDescription
 * @method self withDBInstanceDescription(string $dBInstanceDescription)
 * @method string getReplicaDescription
 * @method self withReplicaDescription(string $replicaDescription)
 * @method string getSecurityIPList
 * @method self withSecurityIPList(string $securityIPList)
 * @method string getAccountPassword
 * @method self withAccountPassword(string $accountPassword)
 * @method string getChargeType
 * @method self withChargeType(string $chargeType)
 * @method Integer getPeriod
 * @method self withPeriod(Integer $period)
 * @method string getNetworkType
 * @method self withNetworkType(string $networkType)
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 * @method string getVSwitchId
 * @method self withVSwitchId(string $vSwitchId)
 * @method bool getAutoPay
 * @method self withAutoPay(bool $autoPay)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getReplicaMode
 * @method self withReplicaMode(string $replicaMode)
 * @method string getDomainMode
 * @method self withDomainMode(string $domainMode)
 */
class CreateInstanceReplica extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getReplicaId
 * @method self withReplicaId(string $replicaId)
 */
class ReleaseReplica extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getReplicaId
 * @method self withReplicaId(string $replicaId)
 * @method string getReplicaDescription
 * @method self withReplicaDescription(string $replicaDescription)
 */
class ModifyReplicaDescription extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getReplicaId
 * @method self withReplicaId(string $replicaId)
 * @method string getSourceDBInstanceId
 * @method self withSourceDBInstanceId(string $sourceDBInstanceId)
 * @method string getDestinationDBInstanceId
 * @method self withDestinationDBInstanceId(string $destinationDBInstanceId)
 */
class DescribeReplicaUsage extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getReplicaId
 * @method self withReplicaId(string $replicaId)
 * @method bool getAttachDbInstanceData
 * @method self withAttachDbInstanceData(bool $attachDbInstanceData)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 */
class DescribeReplicas extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getReplicaId
 * @method self withReplicaId(string $replicaId)
 * @method string getSourceDBInstanceId
 * @method self withSourceDBInstanceId(string $sourceDBInstanceId)
 * @method string getDestinationDBInstanceId
 * @method self withDestinationDBInstanceId(string $destinationDBInstanceId)
 * @method string getKey
 * @method self withKey(string $key)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeReplicaPerformance extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getReplicaId
 * @method self withReplicaId(string $replicaId)
 */
class DescribeReplicaInitializeProgress extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getMinorversion
 * @method self withMinorversion(string $minorversion)
 * @method string getEffectTime
 * @method self withEffectTime(string $effectTime)
 */
class ModifyInstanceMinorVersion extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method bool getNoCertification
 * @method self withNoCertification(bool $noCertification)
 */
class ModifyCertification extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getParameters
 * @method self withParameters(string $parameters)
 */
class DescribeEngineVersion extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getParameters
 * @method self withParameters(string $parameters)
 */
class DescribeCertification extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class DescribeDBInstanceNetInfo extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getMonth
 * @method self withMonth(string $month)
 */
class DescribeMonthlyServiceStatusDetail extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceIds
 * @method self withInstanceIds(string $instanceIds)
 * @method string getMonth
 * @method self withMonth(string $month)
 */
class DescribeMonthlyServiceStatus extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getSecurityIps
 * @method self withSecurityIps(string $securityIps)
 * @method string getSecurityIpGroupName
 * @method self withSecurityIpGroupName(string $securityIpGroupName)
 * @method string getSecurityIpGroupAttribute
 * @method self withSecurityIpGroupAttribute(string $securityIpGroupAttribute)
 * @method string getModifyMode
 * @method self withModifyMode(string $modifyMode)
 */
class ModifySecurityIps extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class DescribeSecurityIps extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getMaintainStartTime
 * @method self withMaintainStartTime(string $maintainStartTime)
 * @method string getMaintainEndTime
 * @method self withMaintainEndTime(string $maintainEndTime)
 */
class ModifyInstanceMaintainTime extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class DescribeInstanceAttribute extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getBackupId
 * @method self withBackupId(string $backupId)
 */
class RestoreInstance extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getPreferredBackupTime
 * @method self withPreferredBackupTime(string $preferredBackupTime)
 * @method string getPreferredBackupPeriod
 * @method self withPreferredBackupPeriod(string $preferredBackupPeriod)
 */
class ModifyBackupPolicy extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method Integer getBackupId
 * @method self withBackupId(Integer $backupId)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeBackups extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class DescribeBackupPolicy extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class CreateBackup extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getTargetNetworkType
 * @method self withTargetNetworkType(string $targetNetworkType)
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 * @method string getVSwitchId
 * @method self withVSwitchId(string $vSwitchId)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getRetainClassic
 * @method self withRetainClassic(string $retainClassic)
 * @method string getClassicExpiredDays
 * @method self withClassicExpiredDays(string $classicExpiredDays)
 */
class SwitchNetwork extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getAcceptLanguage
 * @method self withAcceptLanguage(string $acceptLanguage)
 */
class DescribeZones extends Roa
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getSnapshotId
 * @method self withSnapshotId(string $snapshotId)
 */
class DeleteSnapshot extends Roa
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getSnapshotId
 * @method self withSnapshotId(string $snapshotId)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class CreateTempInstance extends Roa
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getSnapshotName
 * @method self withSnapshotName(string $snapshotName)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class CreateSnapshot extends Roa
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getTempInstanceId
 * @method self withTempInstanceId(string $tempInstanceId)
 */
class DeleteTempInstance extends Roa
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class DeleteSnapshotSettings extends Roa
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class GetSnapshotSettings extends Roa
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class DescribeTempInstance extends Roa
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getSnapshotIds
 * @method self withSnapshotIds(string $snapshotIds)
 * @method string getBeginTime
 * @method self withBeginTime(string $beginTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeSnapshots extends Roa
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getSnapshotId
 * @method self withSnapshotId(string $snapshotId)
 */
class RestoreSnapshot extends Roa
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class QueryTask extends Roa
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getTempInstanceId
 * @method self withTempInstanceId(string $tempInstanceId)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class SwitchTempInstance extends Roa
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method Integer getBeginHour
 * @method self withBeginHour(Integer $beginHour)
 * @method Integer getEndHour
 * @method self withEndHour(Integer $endHour)
 * @method Integer getRetentionDay
 * @method self withRetentionDay(Integer $retentionDay)
 * @method Integer getMaxAutoSnapshots
 * @method self withMaxAutoSnapshots(Integer $maxAutoSnapshots)
 * @method Integer getMaxManualSnapshots
 * @method self withMaxManualSnapshots(Integer $maxManualSnapshots)
 * @method Integer getDayList
 * @method self withDayList(Integer $dayList)
 */
class SetSnapshotSettings extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getFromApp
 * @method self withFromApp(string $fromApp)
 * @method string getInstanceIds
 * @method self withInstanceIds(string $instanceIds)
 * @method int getPeriod
 * @method self withPeriod(int $period)
 * @method bool getAutoPay
 * @method self withAutoPay(bool $autoPay)
 * @method string getBusinessInfo
 * @method self withBusinessInfo(string $businessInfo)
 * @method string getCouponNo
 * @method self withCouponNo(string $couponNo)
 */
class RenewMultiInstance extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method int getPeriod
 * @method self withPeriod(int $period)
 * @method bool getAutoPay
 * @method self withAutoPay(bool $autoPay)
 * @method string getFromApp
 * @method self withFromApp(string $fromApp)
 */
class TransformToPrePaid extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getCapacity
 * @method self withCapacity(string $capacity)
 * @method string getInstanceClass
 * @method self withInstanceClass(string $instanceClass)
 * @method int getPeriod
 * @method self withPeriod(int $period)
 * @method bool getAutoPay
 * @method self withAutoPay(bool $autoPay)
 * @method string getFromApp
 * @method self withFromApp(string $fromApp)
 * @method string getBusinessInfo
 * @method self withBusinessInfo(string $businessInfo)
 * @method string getCouponNo
 * @method self withCouponNo(string $couponNo)
 * @method bool getForceUpgrade
 * @method self withForceUpgrade(bool $forceUpgrade)
 */
class RenewInstance extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeUserInfo extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getCapacity
 * @method self withCapacity(int $capacity)
 * @method string getInstanceClass
 * @method self withInstanceClass(string $instanceClass)
 * @method string getOrderType
 * @method self withOrderType(string $orderType)
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 * @method string getChargeType
 * @method self withChargeType(string $chargeType)
 * @method string getNodeType
 * @method self withNodeType(string $nodeType)
 * @method int getPeriod
 * @method self withPeriod(int $period)
 * @method int getQuantity
 * @method self withQuantity(int $quantity)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getInstances
 * @method self withInstances(string $instances)
 * @method string getBusinessInfo
 * @method self withBusinessInfo(string $businessInfo)
 * @method string getCouponNo
 * @method self withCouponNo(string $couponNo)
 * @method bool getForceUpgrade
 * @method self withForceUpgrade(bool $forceUpgrade)
 * @method string getOrderParamOut
 * @method self withOrderParamOut(string $orderParamOut)
 */
class DescribePrice extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getCommodityCode
 * @method self withCommodityCode(string $commodityCode)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getOrderType
 * @method self withOrderType(string $orderType)
 * @method string getInstanceType
 * @method self withInstanceType(string $instanceType)
 */
class DescribeCommodity extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstances
 * @method self withInstances(string $instances)
 * @method string getToken
 * @method self withToken(string $token)
 * @method bool getAutoPay
 * @method self withAutoPay(bool $autoPay)
 * @method string getAgentId
 * @method self withAgentId(string $agentId)
 * @method string getBusinessInfo
 * @method self withBusinessInfo(string $businessInfo)
 * @method string getCouponNo
 * @method self withCouponNo(string $couponNo)
 * @method string getEngineVersion
 * @method self withEngineVersion(string $engineVersion)
 * @method bool getRebuildInstance
 * @method self withRebuildInstance(bool $rebuildInstance)
 * @method string getPrivateIpAddress
 * @method self withPrivateIpAddress(string $privateIpAddress)
 * @method string getAutoRenew
 * @method self withAutoRenew(string $autoRenew)
 */
class CreateInstances extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeInstanceCount extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getConnectionDomain
 * @method self withConnectionDomain(string $connectionDomain)
 */
class DescribeConnectionDomain extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getPassword
 * @method self withPassword(string $password)
 */
class VerifyPassword extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getConfig
 * @method self withConfig(string $config)
 */
class ModifyInstanceConfig extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getCapacity
 * @method self withCapacity(string $capacity)
 * @method string getOrderType
 * @method self withOrderType(string $orderType)
 * @method bool getAutoPay
 * @method self withAutoPay(bool $autoPay)
 * @method string getInstanceClass
 * @method self withInstanceClass(string $instanceClass)
 * @method string getFromApp
 * @method self withFromApp(string $fromApp)
 * @method string getBusinessInfo
 * @method self withBusinessInfo(string $businessInfo)
 * @method string getCouponNo
 * @method self withCouponNo(string $couponNo)
 * @method bool getForceUpgrade
 * @method self withForceUpgrade(bool $forceUpgrade)
 * @method string getEffectiveTime
 * @method self withEffectiveTime(string $effectiveTime)
 */
class ModifyInstanceCapacity extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getInstanceName
 * @method self withInstanceName(string $instanceName)
 * @method string getNewPassword
 * @method self withNewPassword(string $newPassword)
 */
class ModifyInstanceAttribute extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class FlushInstance extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getAcceptLanguage
 * @method self withAcceptLanguage(string $acceptLanguage)
 */
class DescribeRegions extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceIds
 * @method self withInstanceIds(string $instanceIds)
 * @method string getMonitorKeys
 * @method self withMonitorKeys(string $monitorKeys)
 */
class DescribeMonitorValues extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeMonitorItems extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceIds
 * @method self withInstanceIds(string $instanceIds)
 * @method string getInstanceStatus
 * @method self withInstanceStatus(string $instanceStatus)
 * @method string getChargeType
 * @method self withChargeType(string $chargeType)
 * @method string getNetworkType
 * @method self withNetworkType(string $networkType)
 * @method string getEngineVersion
 * @method self withEngineVersion(string $engineVersion)
 * @method string getInstanceClass
 * @method self withInstanceClass(string $instanceClass)
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 * @method string getVSwitchId
 * @method self withVSwitchId(string $vSwitchId)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getInstanceType
 * @method self withInstanceType(string $instanceType)
 * @method string getSearchKey
 * @method self withSearchKey(string $searchKey)
 * @method string getArchitectureType
 * @method self withArchitectureType(string $architectureType)
 * @method string getExpired
 * @method self withExpired(string $expired)
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 * @method string getTags
 * @method self withTags(string $tags)
 */
class DescribeInstances extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class DescribeInstanceConfig extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getIntervalForHistory
 * @method self withIntervalForHistory(string $intervalForHistory)
 * @method string getMonitorKeys
 * @method self withMonitorKeys(string $monitorKeys)
 * @method string getNodeId
 * @method self withNodeId(string $nodeId)
 */
class DescribeHistoryMonitorValues extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class DeleteInstance extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class DeactivateInstance extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getCommand
 * @method self withCommand(string $command)
 */
class DataOperate extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getToken
 * @method self withToken(string $token)
 * @method string getInstanceName
 * @method self withInstanceName(string $instanceName)
 * @method string getPassword
 * @method self withPassword(string $password)
 * @method int getCapacity
 * @method self withCapacity(int $capacity)
 * @method string getInstanceClass
 * @method self withInstanceClass(string $instanceClass)
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 * @method string getConfig
 * @method self withConfig(string $config)
 * @method string getChargeType
 * @method self withChargeType(string $chargeType)
 * @method string getNodeType
 * @method self withNodeType(string $nodeType)
 * @method string getNetworkType
 * @method self withNetworkType(string $networkType)
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 * @method string getVSwitchId
 * @method self withVSwitchId(string $vSwitchId)
 * @method string getPeriod
 * @method self withPeriod(string $period)
 * @method string getBusinessInfo
 * @method self withBusinessInfo(string $businessInfo)
 * @method string getCouponNo
 * @method self withCouponNo(string $couponNo)
 * @method string getSrcDBInstanceId
 * @method self withSrcDBInstanceId(string $srcDBInstanceId)
 * @method string getBackupId
 * @method self withBackupId(string $backupId)
 * @method string getInstanceType
 * @method self withInstanceType(string $instanceType)
 * @method string getEngineVersion
 * @method self withEngineVersion(string $engineVersion)
 * @method string getPrivateIpAddress
 * @method self withPrivateIpAddress(string $privateIpAddress)
 */
class CreateInstance extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class ActivateInstance extends Roa
{
    use R;
}
