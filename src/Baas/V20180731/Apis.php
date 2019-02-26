<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RpcRequest as Rpc;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method DescribeEthereum describeEthereum($options = [])
 * @method DescribeEthereumNode describeEthereumNode($options = [])
 * @method DescribeChaincodeCollectionConfig describeChaincodeCollectionConfig($options = [])
 * @method QueryEthereumDeletable queryEthereumDeletable($options = [])
 * @method DestroyEthereum destroyEthereum($options = [])
 * @method DescribeEthereumDeletable describeEthereumDeletable($options = [])
 * @method CreateEthereum createEthereum($options = [])
 * @method DescribeEthereums describeEthereums($options = [])
 * @method UpdateEthereum updateEthereum($options = [])
 * @method DescribeEthereumNodes describeEthereumNodes($options = [])
 * @method UpdateEthereumNode updateEthereumNode($options = [])
 * @method AddEthereumNode addEthereumNode($options = [])
 * @method DescribeEthereumNodeInfo describeEthereumNodeInfo($options = [])
 * @method DescribeEthereumClientUsers describeEthereumClientUsers($options = [])
 * @method UpdateEthereumClientUserPassword updateEthereumClientUserPassword($options = [])
 * @method DescribeEthereumNodeLogs describeEthereumNodeLogs($options = [])
 * @method CreateEthereumInvitation createEthereumInvitation($options = [])
 * @method DescribeEthereumInvitaion describeEthereumInvitaion($options = [])
 * @method AcceptEthereumInvitation acceptEthereumInvitation($options = [])
 * @method DescribeNetstatURL describeNetstatURL($options = [])
 * @method DescribeExplorerURL describeExplorerURL($options = [])
 * @method ApproveEthereumInvitee approveEthereumInvitee($options = [])
 * @method DescribeEthereumInvitee describeEthereumInvitee($options = [])
 * @method DescribeEthereumNodeConfiguration describeEthereumNodeConfiguration($options = [])
 * @method UpdateEthereumNodeConfiguration updateEthereumNodeConfiguration($options = [])
 * @method DescribeResourceType describeResourceType($options = [])
 * @method DescribeBlockchainSchema describeBlockchainSchema($options = [])
 * @method CreateBlockchainApplication createBlockchainApplication($options = [])
 * @method DescribeMySuccessfulApplication describeMySuccessfulApplication($options = [])
 * @method DownloadSDK2 downloadSDK2($options = [])
 * @method DescribeSchemaDetail describeSchemaDetail($options = [])
 * @method DescribeBlock describeBlock($options = [])
 * @method DescribeMetric describeMetric($options = [])
 * @method DescribeTransaction describeTransaction($options = [])
 * @method ResetCertificate resetCertificate($options = [])
 * @method DescribeApplies describeApplies($options = [])
 * @method DescribeAllBlockchains describeAllBlockchains($options = [])
 * @method DescribeBcSchema describeBcSchema($options = [])
 * @method DescribeBlockchainCreateTask describeBlockchainCreateTask($options = [])
 * @method DescribeBlockchainInfo describeBlockchainInfo($options = [])
 * @method DescribeLatestTransaction describeLatestTransaction($options = [])
 * @method DescribeMyBlockchains describeMyBlockchains($options = [])
 * @method DescribeMySuccessApplies describeMySuccessApplies($options = [])
 * @method DescribeOssProperties describeOssProperties($options = [])
 * @method DescribeTemplates describeTemplates($options = [])
 * @method DownloadAll downloadAll($options = [])
 * @method DescribePeerLogs describePeerLogs($options = [])
 * @method DescribeOrdererLogs describeOrdererLogs($options = [])
 * @method GetBlockchainCreateTask getBlockchainCreateTask($options = [])
 * @method GetOssProperties getOssProperties($options = [])
 * @method UpdateSchema updateSchema($options = [])
 * @method SchemaDetail schemaDetail($options = [])
 * @method ResetUser resetUser($options = [])
 * @method RejectUser rejectUser($options = [])
 * @method QueryTransaction queryTransaction($options = [])
 * @method QueryMetric queryMetric($options = [])
 * @method QueryBlock queryBlock($options = [])
 * @method OperateUser operateUser($options = [])
 * @method InviteUser inviteUser($options = [])
 * @method GetTemplates getTemplates($options = [])
 * @method GetMySuccessApplies getMySuccessApplies($options = [])
 * @method GetMyBlockchains getMyBlockchains($options = [])
 * @method GetLatestTransaction getLatestTransaction($options = [])
 * @method GetBlockchainInfo getBlockchainInfo($options = [])
 * @method GetBcSchema getBcSchema($options = [])
 * @method GetApplies getApplies($options = [])
 * @method GetAllBlockchains getAllBlockchains($options = [])
 * @method DownloadSignedData downloadSignedData($options = [])
 * @method DownloadSdk downloadSdk($options = [])
 * @method DownloadBizview downloadBizview($options = [])
 * @method CreateBlockchainApply createBlockchainApply($options = [])
 * @method ApplyBlockchain applyBlockchain($options = [])
 * @method AgreeInvite agreeInvite($options = [])
 * @method DescribeConsortiumDeletable describeConsortiumDeletable($options = [])
 * @method DescribeOrganizationDeletable describeOrganizationDeletable($options = [])
 * @method QueryOrganizationDeletable queryOrganizationDeletable($options = [])
 * @method QueryConsortiumDeletable queryConsortiumDeletable($options = [])
 * @method TestBatch testBatch($options = [])
 * @method DeleteChaincode deleteChaincode($options = [])
 * @method DescribeConsortiumMembers describeConsortiumMembers($options = [])
 * @method DescribeOrganizations describeOrganizations($options = [])
 * @method DescribeOrganizationChannels describeOrganizationChannels($options = [])
 * @method AcceptInvitation acceptInvitation($options = [])
 * @method DescribeOrganizationChaincodes describeOrganizationChaincodes($options = [])
 * @method DescribeRegions describeRegions($options = [])
 * @method DescribeOrganizationUsers describeOrganizationUsers($options = [])
 * @method DescribeOrganizationPeers describeOrganizationPeers($options = [])
 * @method DescribeInvitationList describeInvitationList($options = [])
 * @method DescribeChaincodeUploadPolicy describeChaincodeUploadPolicy($options = [])
 * @method DescribeConsortiumAdminStatus describeConsortiumAdminStatus($options = [])
 * @method DescribeOrganization describeOrganization($options = [])
 * @method DescribeEcosphereSpecs describeEcosphereSpecs($options = [])
 * @method DescribeConsortiumSpecs describeConsortiumSpecs($options = [])
 * @method DescribeConsortiumConfig describeConsortiumConfig($options = [])
 * @method DescribeOrganizationSpecs describeOrganizationSpecs($options = [])
 * @method DescribeRootDomain describeRootDomain($options = [])
 * @method CreateEcosphere createEcosphere($options = [])
 * @method CreateConsortium createConsortium($options = [])
 * @method SynchronizeChaincode synchronizeChaincode($options = [])
 * @method DownloadOrganizationSDK downloadOrganizationSDK($options = [])
 * @method ResetOrganizationUserPassword resetOrganizationUserPassword($options = [])
 * @method DescribeInvitationCode describeInvitationCode($options = [])
 * @method DescribeOrganizationUserCerts describeOrganizationUserCerts($options = [])
 * @method CreateOrganizationUser createOrganizationUser($options = [])
 * @method DescribeTasks describeTasks($options = [])
 * @method CreateChannelMember createChannelMember($options = [])
 * @method DescribeConsortiumMemberApproval describeConsortiumMemberApproval($options = [])
 * @method JoinChannel joinChannel($options = [])
 * @method DescribeConsortiumOrderers describeConsortiumOrderers($options = [])
 * @method DescribeInviter describeInviter($options = [])
 * @method DescribeCandidateOrganizations describeCandidateOrganizations($options = [])
 * @method CreateConsortiumMember createConsortiumMember($options = [])
 * @method DescribeOrganizationMembers describeOrganizationMembers($options = [])
 * @method ConfirmConsortiumMember confirmConsortiumMember($options = [])
 * @method CheckConsortiumDomain checkConsortiumDomain($options = [])
 * @method CheckOrganizationDomain checkOrganizationDomain($options = [])
 * @method DestroyConsortium destroyConsortium($options = [])
 * @method DestroyOrganization destroyOrganization($options = [])
 * @method DescribeExplorer describeExplorer($options = [])
 * @method DescribeConsortiums describeConsortiums($options = [])
 * @method CreateOrganization createOrganization($options = [])
 * @method DescribeConsortiumChannels describeConsortiumChannels($options = [])
 * @method CreateChannel createChannel($options = [])
 * @method DescribeChannelMembers describeChannelMembers($options = [])
 * @method DescribeOrgnaizationChaincodes describeOrgnaizationChaincodes($options = [])
 * @method DescribeConsortiumChaincodes describeConsortiumChaincodes($options = [])
 * @method CreateChaincode createChaincode($options = [])
 * @method InstallChaincode installChaincode($options = [])
 * @method UpgradeChaincode upgradeChaincode($options = [])
 * @method InstantiateChaincode instantiateChaincode($options = [])
 */
class V20180731
{
    use ApiResolverTrait;
}

/**
 * @method string getId
 * @method self withId(string $id)
 */
class DescribeEthereum extends Rpc
{
    use R;
}

/**
 * @method string getId
 * @method self withId(string $id)
 */
class DescribeEthereumNode extends Rpc
{
    use R;
}

/**
 * @method string getChaincodeId
 * @method self withChaincodeId(string $chaincodeId)
 * @method string getLocation
 * @method self withLocation(string $location)
 */
class DescribeChaincodeCollectionConfig extends Rpc
{
    use R;
}

/**
 * @method string getEthereumId
 * @method self withEthereumId(string $ethereumId)
 */
class QueryEthereumDeletable extends Rpc
{
    use R;
}

/**
 * @method string getEthereumId
 * @method self withEthereumId(string $ethereumId)
 */
class DestroyEthereum extends Rpc
{
    use R;
}

/**
 * @method string getEthereumId
 * @method self withEthereumId(string $ethereumId)
 */
class DescribeEthereumDeletable extends Rpc
{
    use R;
}

/**
 * @method string getName
 * @method self withName(string $name)
 * @method string getConsensus
 * @method self withConsensus(string $consensus)
 * @method string getRegion
 * @method self withRegion(string $region)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getNetworkId
 * @method self withNetworkId(string $networkId)
 * @method string getGas
 * @method self withGas(string $gas)
 * @method string getDifficulty
 * @method self withDifficulty(string $difficulty)
 * @method array getNode
 * @method self withNode(array $node)
 */
class CreateEthereum extends Rpc
{
    use R;
}

class DescribeEthereums extends Rpc
{
    use R;
}

/**
 * @method string getName
 * @method self withName(string $name)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getId
 * @method self withId(string $id)
 */
class UpdateEthereum extends Rpc
{
    use R;
}

class DescribeEthereumNodes extends Rpc
{
    use R;
}

/**
 * @method string getNodeName
 * @method self withNodeName(string $nodeName)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getId
 * @method self withId(string $id)
 */
class UpdateEthereumNode extends Rpc
{
    use R;
}

/**
 * @method string getNodeName
 * @method self withNodeName(string $nodeName)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getId
 * @method self withId(string $id)
 * @method bool getExternalNode
 * @method self withExternalNode(bool $externalNode)
 */
class AddEthereumNode extends Rpc
{
    use R;
}

/**
 * @method string getNodeId
 * @method self withNodeId(string $nodeId)
 */
class DescribeEthereumNodeInfo extends Rpc
{
    use R;
}

/**
 * @method string getNodeId
 * @method self withNodeId(string $nodeId)
 */
class DescribeEthereumClientUsers extends Rpc
{
    use R;
}

/**
 * @method string getNodeId
 * @method self withNodeId(string $nodeId)
 * @method string getUsername
 * @method self withUsername(string $username)
 * @method string getPassword
 * @method self withPassword(string $password)
 */
class UpdateEthereumClientUserPassword extends Rpc
{
    use R;
}

/**
 * @method string getNodeId
 * @method self withNodeId(string $nodeId)
 * @method string getTarget
 * @method self withTarget(string $target)
 * @method string getLines
 * @method self withLines(string $lines)
 */
class DescribeEthereumNodeLogs extends Rpc
{
    use R;
}

/**
 * @method string getId
 * @method self withId(string $id)
 */
class CreateEthereumInvitation extends Rpc
{
    use R;
}

/**
 * @method string getToken
 * @method self withToken(string $token)
 */
class DescribeEthereumInvitaion extends Rpc
{
    use R;
}

/**
 * @method string getToken
 * @method self withToken(string $token)
 * @method string getCode
 * @method self withCode(string $code)
 */
class AcceptEthereumInvitation extends Rpc
{
    use R;
}

/**
 * @method string getId
 * @method self withId(string $id)
 */
class DescribeNetstatURL extends Rpc
{
    use R;
}

/**
 * @method string getNodeId
 * @method self withNodeId(string $nodeId)
 */
class DescribeExplorerURL extends Rpc
{
    use R;
}

/**
 * @method string getId
 * @method self withId(string $id)
 * @method array getInvitee
 * @method self withInvitee(array $invitee)
 */
class ApproveEthereumInvitee extends Rpc
{
    use R;
}

/**
 * @method string getId
 * @method self withId(string $id)
 */
class DescribeEthereumInvitee extends Rpc
{
    use R;
}

/**
 * @method string getNodeId
 * @method self withNodeId(string $nodeId)
 */
class DescribeEthereumNodeConfiguration extends Rpc
{
    use R;
}

/**
 * @method string getNodeId
 * @method self withNodeId(string $nodeId)
 * @method string getIP
 * @method self withIP(string $iP)
 * @method string getNodePub
 * @method self withNodePub(string $nodePub)
 * @method string getTMPub
 * @method self withTMPub(string $tMPub)
 * @method Integer getP2pPort
 * @method self withP2pPort(Integer $p2pPort)
 * @method Integer getTMPort
 * @method self withTMPort(Integer $tMPort)
 * @method Integer getRaftPort
 * @method self withRaftPort(Integer $raftPort)
 * @method Integer getRpcPort
 * @method self withRpcPort(Integer $rpcPort)
 * @method Integer getWSPort
 * @method self withWSPort(Integer $wSPort)
 */
class UpdateEthereumNodeConfiguration extends Rpc
{
    use R;
}

class DescribeResourceType extends Rpc
{
    use R;
}

/**
 * @method string getBizid
 * @method self withBizid(string $bizid)
 */
class DescribeBlockchainSchema extends Rpc
{
    use R;
}

/**
 * @method string getBizid
 * @method self withBizid(string $bizid)
 * @method Integer getMachineNum
 * @method self withMachineNum(Integer $machineNum)
 * @method Integer getSize
 * @method self withSize(Integer $size)
 * @method Integer getLiveTime
 * @method self withLiveTime(Integer $liveTime)
 */
class CreateBlockchainApplication extends Rpc
{
    use R;
}

class DescribeMySuccessfulApplication extends Rpc
{
    use R;
}

/**
 * @method string getBizid
 * @method self withBizid(string $bizid)
 */
class DownloadSDK2 extends Rpc
{
    use R;
}

/**
 * @method int getSchemaId
 * @method self withSchemaId(int $schemaId)
 * @method string getBizid
 * @method self withBizid(string $bizid)
 */
class DescribeSchemaDetail extends Rpc
{
    use R;
}

/**
 * @method string getBizid
 * @method self withBizid(string $bizid)
 * @method int getHeight
 * @method self withHeight(int $height)
 */
class DescribeBlock extends Rpc
{
    use R;
}

/**
 * @method string getMetric
 * @method self withMetric(string $metric)
 * @method string getPeriod
 * @method self withPeriod(string $period)
 * @method string getInnerIp
 * @method self withInnerIp(string $innerIp)
 * @method string getPort
 * @method self withPort(string $port)
 * @method string getBizid
 * @method self withBizid(string $bizid)
 * @method string getTimeArea
 * @method self withTimeArea(string $timeArea)
 */
class DescribeMetric extends Rpc
{
    use R;
}

/**
 * @method string getBizid
 * @method self withBizid(string $bizid)
 * @method string getHash
 * @method self withHash(string $hash)
 */
class DescribeTransaction extends Rpc
{
    use R;
}

/**
 * @method string getBizid
 * @method self withBizid(string $bizid)
 */
class ResetCertificate extends Rpc
{
    use R;
}

/**
 * @method string getBizid
 * @method self withBizid(string $bizid)
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getCurrent
 * @method self withCurrent(Integer $current)
 */
class DescribeApplies extends Rpc
{
    use R;
}

/**
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getCurrent
 * @method self withCurrent(Integer $current)
 * @method Integer getTotal
 * @method self withTotal(Integer $total)
 */
class DescribeAllBlockchains extends Rpc
{
    use R;
}

/**
 * @method string getBizid
 * @method self withBizid(string $bizid)
 */
class DescribeBcSchema extends Rpc
{
    use R;
}

/**
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getCurrent
 * @method self withCurrent(Integer $current)
 */
class DescribeBlockchainCreateTask extends Rpc
{
    use R;
}

/**
 * @method string getBizid
 * @method self withBizid(string $bizid)
 */
class DescribeBlockchainInfo extends Rpc
{
    use R;
}

/**
 * @method string getBizid
 * @method self withBizid(string $bizid)
 * @method int getStart
 * @method self withStart(int $start)
 * @method int getEnd
 * @method self withEnd(int $end)
 */
class DescribeLatestTransaction extends Rpc
{
    use R;
}

class DescribeMyBlockchains extends Rpc
{
    use R;
}

class DescribeMySuccessApplies extends Rpc
{
    use R;
}

/**
 * @method string getBizid
 * @method self withBizid(string $bizid)
 */
class DescribeOssProperties extends Rpc
{
    use R;
}

class DescribeTemplates extends Rpc
{
    use R;
}

/**
 * @method string getBizid
 * @method self withBizid(string $bizid)
 */
class DownloadAll extends Rpc
{
    use R;
}

/**
 * @method string getOrganizationId
 * @method self withOrganizationId(string $organizationId)
 * @method string getPeerName
 * @method self withPeerName(string $peerName)
 * @method string getLines
 * @method self withLines(string $lines)
 */
class DescribePeerLogs extends Rpc
{
    use R;
}

/**
 * @method string getConsortiumId
 * @method self withConsortiumId(string $consortiumId)
 * @method string getOrdererName
 * @method self withOrdererName(string $ordererName)
 * @method string getLines
 * @method self withLines(string $lines)
 */
class DescribeOrdererLogs extends Rpc
{
    use R;
}

/**
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getCurrent
 * @method self withCurrent(Integer $current)
 */
class GetBlockchainCreateTask extends Rpc
{
    use R;
}

/**
 * @method string getBizid
 * @method self withBizid(string $bizid)
 */
class GetOssProperties extends Rpc
{
    use R;
}

/**
 * @method int getSchemaId
 * @method self withSchemaId(int $schemaId)
 * @method string getSchemaName
 * @method self withSchemaName(string $schemaName)
 * @method string getBizid
 * @method self withBizid(string $bizid)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getCategoryConfigs
 * @method self withCategoryConfigs(string $categoryConfigs)
 */
class UpdateSchema extends Rpc
{
    use R;
}

/**
 * @method int getSchemaId
 * @method self withSchemaId(int $schemaId)
 * @method string getBizid
 * @method self withBizid(string $bizid)
 */
class SchemaDetail extends Rpc
{
    use R;
}

/**
 * @method string getBizid
 * @method self withBizid(string $bizid)
 * @method string getUserName
 * @method self withUserName(string $userName)
 * @method string getBid
 * @method self withBid(string $bid)
 * @method Integer getOperation
 * @method self withOperation(Integer $operation)
 */
class ResetUser extends Rpc
{
    use R;
}

/**
 * @method string getBizid
 * @method self withBizid(string $bizid)
 * @method string getUserName
 * @method self withUserName(string $userName)
 * @method string getBid
 * @method self withBid(string $bid)
 * @method string getReason
 * @method self withReason(string $reason)
 */
class RejectUser extends Rpc
{
    use R;
}

/**
 * @method string getBizid
 * @method self withBizid(string $bizid)
 * @method string getHash
 * @method self withHash(string $hash)
 */
class QueryTransaction extends Rpc
{
    use R;
}

/**
 * @method string getPeriod
 * @method self withPeriod(string $period)
 * @method string getMetric
 * @method self withMetric(string $metric)
 * @method string getInnerIp
 * @method self withInnerIp(string $innerIp)
 * @method string getPort
 * @method self withPort(string $port)
 * @method string getBizid
 * @method self withBizid(string $bizid)
 * @method string getTimeArea
 * @method self withTimeArea(string $timeArea)
 */
class QueryMetric extends Rpc
{
    use R;
}

/**
 * @method string getBizid
 * @method self withBizid(string $bizid)
 * @method int getHeight
 * @method self withHeight(int $height)
 */
class QueryBlock extends Rpc
{
    use R;
}

/**
 * @method string getBizid
 * @method self withBizid(string $bizid)
 * @method string getUserName
 * @method self withUserName(string $userName)
 * @method Integer getOperation
 * @method self withOperation(Integer $operation)
 * @method string getBid
 * @method self withBid(string $bid)
 */
class OperateUser extends Rpc
{
    use R;
}

/**
 * @method string getBizid
 * @method self withBizid(string $bizid)
 * @method string getUserEmail
 * @method self withUserEmail(string $userEmail)
 * @method int getUserId
 * @method self withUserId(int $userId)
 * @method string getBid
 * @method self withBid(string $bid)
 */
class InviteUser extends Rpc
{
    use R;
}

class GetTemplates extends Rpc
{
    use R;
}

class GetMySuccessApplies extends Rpc
{
    use R;
}

class GetMyBlockchains extends Rpc
{
    use R;
}

/**
 * @method string getBizid
 * @method self withBizid(string $bizid)
 * @method int getStart
 * @method self withStart(int $start)
 * @method int getEnd
 * @method self withEnd(int $end)
 */
class GetLatestTransaction extends Rpc
{
    use R;
}

/**
 * @method string getBizid
 * @method self withBizid(string $bizid)
 */
class GetBlockchainInfo extends Rpc
{
    use R;
}

/**
 * @method string getBizid
 * @method self withBizid(string $bizid)
 */
class GetBcSchema extends Rpc
{
    use R;
}

/**
 * @method string getBizid
 * @method self withBizid(string $bizid)
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getCurrent
 * @method self withCurrent(Integer $current)
 */
class GetApplies extends Rpc
{
    use R;
}

/**
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getCurrent
 * @method self withCurrent(Integer $current)
 * @method Integer getTotal
 * @method self withTotal(Integer $total)
 */
class GetAllBlockchains extends Rpc
{
    use R;
}

/**
 * @method string getPath
 * @method self withPath(string $path)
 * @method string getBizid
 * @method self withBizid(string $bizid)
 */
class DownloadSignedData extends Rpc
{
    use R;
}

/**
 * @method string getBizid
 * @method self withBizid(string $bizid)
 */
class DownloadSdk extends Rpc
{
    use R;
}

/**
 * @method string getBizid
 * @method self withBizid(string $bizid)
 */
class DownloadBizview extends Rpc
{
    use R;
}

/**
 * @method string getBizid
 * @method self withBizid(string $bizid)
 * @method Integer getMachineNum
 * @method self withMachineNum(Integer $machineNum)
 * @method Integer getSize
 * @method self withSize(Integer $size)
 * @method Integer getLiveTime
 * @method self withLiveTime(Integer $liveTime)
 */
class CreateBlockchainApply extends Rpc
{
    use R;
}

/**
 * @method string getBlockchain
 * @method self withBlockchain(string $blockchain)
 * @method string getUploadReq
 * @method self withUploadReq(string $uploadReq)
 */
class ApplyBlockchain extends Rpc
{
    use R;
}

/**
 * @method string getCode
 * @method self withCode(string $code)
 */
class AgreeInvite extends Rpc
{
    use R;
}

/**
 * @method string getConsortiumId
 * @method self withConsortiumId(string $consortiumId)
 * @method string getLocation
 * @method self withLocation(string $location)
 */
class DescribeConsortiumDeletable extends Rpc
{
    use R;
}

/**
 * @method string getOrganizationId
 * @method self withOrganizationId(string $organizationId)
 * @method string getLocation
 * @method self withLocation(string $location)
 */
class DescribeOrganizationDeletable extends Rpc
{
    use R;
}

/**
 * @method string getOrganizationId
 * @method self withOrganizationId(string $organizationId)
 * @method string getLocation
 * @method self withLocation(string $location)
 */
class QueryOrganizationDeletable extends Rpc
{
    use R;
}

/**
 * @method string getConsortiumId
 * @method self withConsortiumId(string $consortiumId)
 * @method string getLocation
 * @method self withLocation(string $location)
 */
class QueryConsortiumDeletable extends Rpc
{
    use R;
}

/**
 * @method string getCode
 * @method self withCode(string $code)
 * @method bool getIsAccepted
 * @method self withIsAccepted(bool $isAccepted)
 */
class TestBatch extends Rpc
{
    use R;
}

/**
 * @method string getChaincodeId
 * @method self withChaincodeId(string $chaincodeId)
 */
class DeleteChaincode extends Rpc
{
    use R;
}

/**
 * @method string getConsortiumId
 * @method self withConsortiumId(string $consortiumId)
 * @method string getLocation
 * @method self withLocation(string $location)
 */
class DescribeConsortiumMembers extends Rpc
{
    use R;
}

/**
 * @method string getLocation
 * @method self withLocation(string $location)
 */
class DescribeOrganizations extends Rpc
{
    use R;
}

/**
 * @method string getOrganizationId
 * @method self withOrganizationId(string $organizationId)
 * @method string getLocation
 * @method self withLocation(string $location)
 */
class DescribeOrganizationChannels extends Rpc
{
    use R;
}

/**
 * @method string getCode
 * @method self withCode(string $code)
 * @method bool getIsAccepted
 * @method self withIsAccepted(bool $isAccepted)
 */
class AcceptInvitation extends Rpc
{
    use R;
}

/**
 * @method string getOrganizationId
 * @method self withOrganizationId(string $organizationId)
 * @method string getLocation
 * @method self withLocation(string $location)
 */
class DescribeOrganizationChaincodes extends Rpc
{
    use R;
}

class DescribeRegions extends Rpc
{
    use R;
}

/**
 * @method string getOrganizationId
 * @method self withOrganizationId(string $organizationId)
 * @method string getLocation
 * @method self withLocation(string $location)
 */
class DescribeOrganizationUsers extends Rpc
{
    use R;
}

/**
 * @method string getOrganizationId
 * @method self withOrganizationId(string $organizationId)
 * @method string getLocation
 * @method self withLocation(string $location)
 */
class DescribeOrganizationPeers extends Rpc
{
    use R;
}

/**
 * @method string getConsortiumId
 * @method self withConsortiumId(string $consortiumId)
 */
class DescribeInvitationList extends Rpc
{
    use R;
}

/**
 * @method string getOrganizationId
 * @method self withOrganizationId(string $organizationId)
 */
class DescribeChaincodeUploadPolicy extends Rpc
{
    use R;
}

/**
 * @method string getLocation
 * @method self withLocation(string $location)
 */
class DescribeConsortiumAdminStatus extends Rpc
{
    use R;
}

/**
 * @method string getOrganizationId
 * @method self withOrganizationId(string $organizationId)
 * @method string getLocation
 * @method self withLocation(string $location)
 */
class DescribeOrganization extends Rpc
{
    use R;
}

class DescribeEcosphereSpecs extends Rpc
{
    use R;
}

class DescribeConsortiumSpecs extends Rpc
{
    use R;
}

class DescribeConsortiumConfig extends Rpc
{
    use R;
}

class DescribeOrganizationSpecs extends Rpc
{
    use R;
}

class DescribeRootDomain extends Rpc
{
    use R;
}

/**
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 * @method string getOrdererType
 * @method self withOrdererType(string $ordererType)
 * @method string getConsortiumName
 * @method self withConsortiumName(string $consortiumName)
 * @method string getOrdererDomain
 * @method self withOrdererDomain(string $ordererDomain)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getLocation
 * @method self withLocation(string $location)
 * @method string getChannelPolicy
 * @method self withChannelPolicy(string $channelPolicy)
 * @method string getSpecName
 * @method self withSpecName(string $specName)
 * @method Integer getOrderersCount
 * @method self withOrderersCount(Integer $orderersCount)
 * @method Integer getPeersCount
 * @method self withPeersCount(Integer $peersCount)
 * @method array getOrganization
 * @method self withOrganization(array $organization)
 */
class CreateEcosphere extends Rpc
{
    use R;
}

/**
 * @method string getLocation
 * @method self withLocation(string $location)
 * @method string getOrdererType
 * @method self withOrdererType(string $ordererType)
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getDomain
 * @method self withDomain(string $domain)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getChannelPolicy
 * @method self withChannelPolicy(string $channelPolicy)
 * @method string getSpecName
 * @method self withSpecName(string $specName)
 * @method Integer getOrderersCount
 * @method self withOrderersCount(Integer $orderersCount)
 * @method Integer getPeersCount
 * @method self withPeersCount(Integer $peersCount)
 * @method array getOrganization
 * @method self withOrganization(array $organization)
 */
class CreateConsortium extends Rpc
{
    use R;
}

/**
 * @method string getOrganizationId
 * @method self withOrganizationId(string $organizationId)
 * @method string getChaincodeId
 * @method self withChaincodeId(string $chaincodeId)
 */
class SynchronizeChaincode extends Rpc
{
    use R;
}

/**
 * @method string getOrganizationId
 * @method self withOrganizationId(string $organizationId)
 * @method string getUsername
 * @method self withUsername(string $username)
 * @method string getLocation
 * @method self withLocation(string $location)
 */
class DownloadOrganizationSDK extends Rpc
{
    use R;
}

/**
 * @method string getOrganizationId
 * @method self withOrganizationId(string $organizationId)
 * @method string getUsername
 * @method self withUsername(string $username)
 * @method string getPassword
 * @method self withPassword(string $password)
 * @method string getLocation
 * @method self withLocation(string $location)
 */
class ResetOrganizationUserPassword extends Rpc
{
    use R;
}

/**
 * @method string getConsortiumId
 * @method self withConsortiumId(string $consortiumId)
 */
class DescribeInvitationCode extends Rpc
{
    use R;
}

/**
 * @method string getOrganizationId
 * @method self withOrganizationId(string $organizationId)
 * @method string getUsername
 * @method self withUsername(string $username)
 */
class DescribeOrganizationUserCerts extends Rpc
{
    use R;
}

/**
 * @method string getOrganizationId
 * @method self withOrganizationId(string $organizationId)
 * @method string getUsername
 * @method self withUsername(string $username)
 * @method string getPassword
 * @method self withPassword(string $password)
 */
class CreateOrganizationUser extends Rpc
{
    use R;
}

class DescribeTasks extends Rpc
{
    use R;
}

/**
 * @method string getChannelId
 * @method self withChannelId(string $channelId)
 * @method array getOrganization
 * @method self withOrganization(array $organization)
 */
class CreateChannelMember extends Rpc
{
    use R;
}

/**
 * @method string getConsortiumId
 * @method self withConsortiumId(string $consortiumId)
 * @method string getLocation
 * @method self withLocation(string $location)
 */
class DescribeConsortiumMemberApproval extends Rpc
{
    use R;
}

/**
 * @method string getChannelId
 * @method self withChannelId(string $channelId)
 * @method string getDo
 * @method self withDo(string $do)
 * @method string getLocation
 * @method self withLocation(string $location)
 */
class JoinChannel extends Rpc
{
    use R;
}

/**
 * @method string getConsortiumId
 * @method self withConsortiumId(string $consortiumId)
 * @method string getLocation
 * @method self withLocation(string $location)
 */
class DescribeConsortiumOrderers extends Rpc
{
    use R;
}

/**
 * @method string getCode
 * @method self withCode(string $code)
 */
class DescribeInviter extends Rpc
{
    use R;
}

/**
 * @method string getLocation
 * @method self withLocation(string $location)
 */
class DescribeCandidateOrganizations extends Rpc
{
    use R;
}

/**
 * @method string getConsortiumId
 * @method self withConsortiumId(string $consortiumId)
 * @method array getOrganization
 * @method self withOrganization(array $organization)
 * @method string getCode
 * @method self withCode(string $code)
 */
class CreateConsortiumMember extends Rpc
{
    use R;
}

/**
 * @method string getOrganizationId
 * @method self withOrganizationId(string $organizationId)
 * @method string getLocation
 * @method self withLocation(string $location)
 */
class DescribeOrganizationMembers extends Rpc
{
    use R;
}

/**
 * @method string getConsortiumId
 * @method self withConsortiumId(string $consortiumId)
 * @method array getOrganization
 * @method self withOrganization(array $organization)
 */
class ConfirmConsortiumMember extends Rpc
{
    use R;
}

/**
 * @method string getDomainCode
 * @method self withDomainCode(string $domainCode)
 */
class CheckConsortiumDomain extends Rpc
{
    use R;
}

/**
 * @method string getDomainCode
 * @method self withDomainCode(string $domainCode)
 * @method string getDomain
 * @method self withDomain(string $domain)
 */
class CheckOrganizationDomain extends Rpc
{
    use R;
}

/**
 * @method string getConsortiumId
 * @method self withConsortiumId(string $consortiumId)
 */
class DestroyConsortium extends Rpc
{
    use R;
}

/**
 * @method string getOrganizationId
 * @method self withOrganizationId(string $organizationId)
 */
class DestroyOrganization extends Rpc
{
    use R;
}

/**
 * @method string getOrganizationId
 * @method self withOrganizationId(string $organizationId)
 * @method string getExMethod
 * @method self withExMethod(string $exMethod)
 * @method string getExUrl
 * @method self withExUrl(string $exUrl)
 * @method string getExBody
 * @method self withExBody(string $exBody)
 */
class DescribeExplorer extends Rpc
{
    use R;
}

/**
 * @method string getConsortiumId
 * @method self withConsortiumId(string $consortiumId)
 * @method string getLocation
 * @method self withLocation(string $location)
 */
class DescribeConsortiums extends Rpc
{
    use R;
}

/**
 * @method string getName
 * @method self withName(string $name)
 * @method string getLocation
 * @method self withLocation(string $location)
 * @method string getDomain
 * @method self withDomain(string $domain)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getSpecName
 * @method self withSpecName(string $specName)
 */
class CreateOrganization extends Rpc
{
    use R;
}

/**
 * @method string getConsortiumId
 * @method self withConsortiumId(string $consortiumId)
 * @method string getLocation
 * @method self withLocation(string $location)
 */
class DescribeConsortiumChannels extends Rpc
{
    use R;
}

/**
 * @method string getConsortiumId
 * @method self withConsortiumId(string $consortiumId)
 * @method array getOrganization
 * @method self withOrganization(array $organization)
 * @method string getChannelName
 * @method self withChannelName(string $channelName)
 */
class CreateChannel extends Rpc
{
    use R;
}

/**
 * @method string getChannelId
 * @method self withChannelId(string $channelId)
 */
class DescribeChannelMembers extends Rpc
{
    use R;
}

/**
 * @method string getOrganizationId
 * @method self withOrganizationId(string $organizationId)
 * @method string getLocation
 * @method self withLocation(string $location)
 */
class DescribeOrgnaizationChaincodes extends Rpc
{
    use R;
}

/**
 * @method string getConsortiumId
 * @method self withConsortiumId(string $consortiumId)
 * @method string getLocation
 * @method self withLocation(string $location)
 */
class DescribeConsortiumChaincodes extends Rpc
{
    use R;
}

/**
 * @method string getOrganizationId
 * @method self withOrganizationId(string $organizationId)
 * @method string getChannelId
 * @method self withChannelId(string $channelId)
 * @method string getConsortiumId
 * @method self withConsortiumId(string $consortiumId)
 * @method string getOssBucket
 * @method self withOssBucket(string $ossBucket)
 * @method string getOssUrl
 * @method self withOssUrl(string $ossUrl)
 * @method string getEndorsePolicy
 * @method self withEndorsePolicy(string $endorsePolicy)
 * @method string getLocation
 * @method self withLocation(string $location)
 */
class CreateChaincode extends Rpc
{
    use R;
}

/**
 * @method string getOrganizationId
 * @method self withOrganizationId(string $organizationId)
 * @method string getChaincodeId
 * @method self withChaincodeId(string $chaincodeId)
 * @method string getLocation
 * @method self withLocation(string $location)
 */
class InstallChaincode extends Rpc
{
    use R;
}

/**
 * @method string getOrganizationId
 * @method self withOrganizationId(string $organizationId)
 * @method string getChaincodeId
 * @method self withChaincodeId(string $chaincodeId)
 * @method string getEndorsePolicy
 * @method self withEndorsePolicy(string $endorsePolicy)
 * @method string getLocation
 * @method self withLocation(string $location)
 */
class UpgradeChaincode extends Rpc
{
    use R;
}

/**
 * @method string getOrganizationId
 * @method self withOrganizationId(string $organizationId)
 * @method string getChaincodeId
 * @method self withChaincodeId(string $chaincodeId)
 * @method string getEndorsePolicy
 * @method self withEndorsePolicy(string $endorsePolicy)
 * @method string getLocation
 * @method self withLocation(string $location)
 */
class InstantiateChaincode extends Rpc
{
    use R;
}
