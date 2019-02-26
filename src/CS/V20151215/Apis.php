<?php

namespace AlibabaCloud\CS\V20151215;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method GetCidrsForVpc getCidrsForVpc($options = [])
 * @method ReBindSecurityGroup reBindSecurityGroup($options = [])
 * @method AbandonCluster abandonCluster($options = [])
 * @method UpdateTemplate updateTemplate($options = [])
 * @method DeleteTemplate deleteTemplate($options = [])
 * @method DescribeEdasClusterToken describeEdasClusterToken($options = [])
 * @method DescribeMonitorToken describeMonitorToken($options = [])
 * @method CreateEdasClusterRole createEdasClusterRole($options = [])
 * @method CreateEdasClusterRoleBinding createEdasClusterRoleBinding($options = [])
 * @method UpdateEdasClusterRole updateEdasClusterRole($options = [])
 * @method UpdateEdasClusterRoleBinding updateEdasClusterRoleBinding($options = [])
 * @method DescribeClusterUserKubeconfig describeClusterUserKubeconfig($options = [])
 * @method DescribeClusterEndpoints describeClusterEndpoints($options = [])
 * @method DescribeKubernetesTemplate describeKubernetesTemplate($options = [])
 * @method DescribeKubernetesTemplates describeKubernetesTemplates($options = [])
 * @method UpgradeClusterComponents upgradeClusterComponents($options = [])
 * @method DescribeClusterNodes describeClusterNodes($options = [])
 * @method DescribeClusterLogs describeClusterLogs($options = [])
 * @method DescribeImages describeImages($options = [])
 * @method CheckAliyunCSServiceRole checkAliyunCSServiceRole($options = [])
 * @method ResetClusterNode resetClusterNode($options = [])
 * @method GatherLogsToken gatherLogsToken($options = [])
 * @method DescribeAgilityTunnelCerts describeAgilityTunnelCerts($options = [])
 * @method DescribeAgilityTunnelAgentInfo describeAgilityTunnelAgentInfo($options = [])
 * @method CallBackAgilityCluster callBackAgilityCluster($options = [])
 * @method AddAgilityCluster addAgilityCluster($options = [])
 * @method DescribeClusterScaledNode describeClusterScaledNode($options = [])
 * @method UpdateSubUserResouces updateSubUserResouces($options = [])
 * @method DescribeTaskInfo describeTaskInfo($options = [])
 * @method ScaleInCluster scaleInCluster($options = [])
 * @method DeleteClusterNode deleteClusterNode($options = [])
 * @method RevokeClusterToken revokeClusterToken($options = [])
 * @method DownloadClusterNodeCerts downloadClusterNodeCerts($options = [])
 * @method DescribeClusterTokens describeClusterTokens($options = [])
 * @method DescribeClusterNodeInfoWithInstance describeClusterNodeInfoWithInstance($options = [])
 * @method DescribeClusterNodeInfo describeClusterNodeInfo($options = [])
 * @method CreateClusterToken createClusterToken($options = [])
 * @method CallbackClusterToken callbackClusterToken($options = [])
 * @method AttachInstances attachInstances($options = [])
 * @method DescribeTemplates describeTemplates($options = [])
 * @method DescribeTemplateAttribute describeTemplateAttribute($options = [])
 * @method CreateTemplate createTemplate($options = [])
 * @method GetProjectEvents getProjectEvents($options = [])
 * @method GetClusterProjects getClusterProjects($options = [])
 * @method DescribeServiceContainers describeServiceContainers($options = [])
 * @method DescribeClusterServices describeClusterServices($options = [])
 * @method DescribeClusterHosts describeClusterHosts($options = [])
 * @method ModifyClusterName modifyClusterName($options = [])
 * @method GetTriggerHook getTriggerHook($options = [])
 * @method DescribeUserContainers describeUserContainers($options = [])
 * @method CreateCluster createCluster($options = [])
 * @method ScaleCluster scaleCluster($options = [])
 * @method DescribeClusters describeClusters($options = [])
 * @method DescribeClusterDetail describeClusterDetail($options = [])
 * @method DescribeClusterCerts describeClusterCerts($options = [])
 * @method DeleteCluster deleteCluster($options = [])
 * @method DescribeApiVersion describeApiVersion($options = [])
 */
class V20151215
{
    use ApiResolverTrait;
}

/**
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 */
class GetCidrsForVpc extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 */
class ReBindSecurityGroup extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 */
class AbandonCluster extends Roa
{
    use R;
}

/**
 * @method string getTemplateId
 * @method self withTemplateId(string $templateId)
 */
class UpdateTemplate extends Roa
{
    use R;
}

/**
 * @method string getTemplateId
 * @method self withTemplateId(string $templateId)
 */
class DeleteTemplate extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 */
class DescribeEdasClusterToken extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 */
class DescribeMonitorToken extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 */
class CreateEdasClusterRole extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 */
class CreateEdasClusterRoleBinding extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 */
class UpdateEdasClusterRole extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 */
class UpdateEdasClusterRoleBinding extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 */
class DescribeClusterUserKubeconfig extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 */
class DescribeClusterEndpoints extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 */
class DescribeKubernetesTemplate extends Roa
{
    use R;
}

/**
 * @method string getKubernetesVersion
 * @method self withKubernetesVersion(string $kubernetesVersion)
 * @method string getRegion
 * @method self withRegion(string $region)
 */
class DescribeKubernetesTemplates extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 * @method string getComponentId
 * @method self withComponentId(string $componentId)
 */
class UpgradeClusterComponents extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 * @method string getpageSize
 * @method self withpageSize(string $pageSize)
 * @method string getpageNumber
 * @method self withpageNumber(string $pageNumber)
 */
class DescribeClusterNodes extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 */
class DescribeClusterLogs extends Roa
{
    use R;
}

/**
 * @method string getRegionID
 * @method self withRegionID(string $regionID)
 * @method string getDockerVersion
 * @method self withDockerVersion(string $dockerVersion)
 * @method string getImageName
 * @method self withImageName(string $imageName)
 */
class DescribeImages extends Roa
{
    use R;
}

class CheckAliyunCSServiceRole extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class ResetClusterNode extends Roa
{
    use R;
}

/**
 * @method string getToken
 * @method self withToken(string $token)
 */
class GatherLogsToken extends Roa
{
    use R;
}

/**
 * @method string getToken
 * @method self withToken(string $token)
 */
class DescribeAgilityTunnelCerts extends Roa
{
    use R;
}

/**
 * @method string getToken
 * @method self withToken(string $token)
 */
class DescribeAgilityTunnelAgentInfo extends Roa
{
    use R;
}

/**
 * @method string getToken
 * @method self withToken(string $token)
 * @method string getReqOnce
 * @method self withReqOnce(string $reqOnce)
 */
class CallBackAgilityCluster extends Roa
{
    use R;
}

class AddAgilityCluster extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 */
class DescribeClusterScaledNode extends Roa
{
    use R;
}

class UpdateSubUserResouces extends Roa
{
    use R;
}

/**
 * @method string getTaskId
 * @method self withTaskId(string $taskId)
 */
class DescribeTaskInfo extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 */
class ScaleInCluster extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 * @method string getIp
 * @method self withIp(string $ip)
 * @method string getforce
 * @method self withforce(string $force)
 * @method string getreleaseInstance
 * @method self withreleaseInstance(string $releaseInstance)
 */
class DeleteClusterNode extends Roa
{
    use R;
}

/**
 * @method string getToken
 * @method self withToken(string $token)
 */
class RevokeClusterToken extends Roa
{
    use R;
}

/**
 * @method string getToken
 * @method self withToken(string $token)
 * @method string getNodeId
 * @method self withNodeId(string $nodeId)
 */
class DownloadClusterNodeCerts extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 */
class DescribeClusterTokens extends Roa
{
    use R;
}

/**
 * @method string getToken
 * @method self withToken(string $token)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class DescribeClusterNodeInfoWithInstance extends Roa
{
    use R;
}

/**
 * @method string getToken
 * @method self withToken(string $token)
 */
class DescribeClusterNodeInfo extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 */
class CreateClusterToken extends Roa
{
    use R;
}

/**
 * @method string getToken
 * @method self withToken(string $token)
 * @method string getReqOnce
 * @method self withReqOnce(string $reqOnce)
 */
class CallbackClusterToken extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 */
class AttachInstances extends Roa
{
    use R;
}

/**
 * @method string gettemplatetype
 * @method self withtemplatetype(string $templatetype)
 */
class DescribeTemplates extends Roa
{
    use R;
}

/**
 * @method string getTemplateId
 * @method self withTemplateId(string $templateId)
 */
class DescribeTemplateAttribute extends Roa
{
    use R;
}

class CreateTemplate extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 * @method string getProjectId
 * @method self withProjectId(string $projectId)
 */
class GetProjectEvents extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 */
class GetClusterProjects extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 * @method string getServiceId
 * @method self withServiceId(string $serviceId)
 */
class DescribeServiceContainers extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 */
class DescribeClusterServices extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 */
class DescribeClusterHosts extends Roa
{
    use R;
}

class ModifyClusterName extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 * @method string getProjectId
 * @method self withProjectId(string $projectId)
 */
class GetTriggerHook extends Roa
{
    use R;
}

/**
 * @method string getServiceId
 * @method self withServiceId(string $serviceId)
 */
class DescribeUserContainers extends Roa
{
    use R;
}

class CreateCluster extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 */
class ScaleCluster extends Roa
{
    use R;
}

/**
 * @method string getName
 * @method self withName(string $name)
 * @method string getclusterType
 * @method self withclusterType(string $clusterType)
 */
class DescribeClusters extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 */
class DescribeClusterDetail extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 */
class DescribeClusterCerts extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 */
class DeleteCluster extends Roa
{
    use R;
}

class DescribeApiVersion extends Roa
{
    use R;
}
