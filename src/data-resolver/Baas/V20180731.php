<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method string getId
 * @method self withId
 */
final class DescribeEthereum extends RpcRequest
{
}

/**
 * @method string getId
 * @method self withId
 */
final class DescribeEthereumNode extends RpcRequest
{
}

/**
 * @method string getChaincodeId
 * @method self withChaincodeId
 * @method string getLocation
 * @method self withLocation
 */
final class DescribeChaincodeCollectionConfig extends RpcRequest
{
}

/**
 * @method string getEthereumId
 * @method self withEthereumId
 */
final class QueryEthereumDeletable extends RpcRequest
{
}

/**
 * @method string getEthereumId
 * @method self withEthereumId
 */
final class DestroyEthereum extends RpcRequest
{
}

/**
 * @method string getEthereumId
 * @method self withEthereumId
 */
final class DescribeEthereumDeletable extends RpcRequest
{
}

/**
 * @method string getName
 * @method self withName
 * @method string getConsensus
 * @method self withConsensus
 * @method string getRegion
 * @method self withRegion
 * @method string getDescription
 * @method self withDescription
 * @method string getNetworkId
 * @method self withNetworkId
 * @method string getGas
 * @method self withGas
 * @method string getDifficulty
 * @method self withDifficulty
 * @method RepeatList getNode
 * @method self withNode
 */
final class CreateEthereum extends RpcRequest
{
}

final class DescribeEthereums extends RpcRequest
{
}

/**
 * @method string getName
 * @method self withName
 * @method string getDescription
 * @method self withDescription
 * @method string getId
 * @method self withId
 */
final class UpdateEthereum extends RpcRequest
{
}

final class DescribeEthereumNodes extends RpcRequest
{
}

/**
 * @method string getNodeName
 * @method self withNodeName
 * @method string getDescription
 * @method self withDescription
 * @method string getId
 * @method self withId
 */
final class UpdateEthereumNode extends RpcRequest
{
}

/**
 * @method string getNodeName
 * @method self withNodeName
 * @method string getDescription
 * @method self withDescription
 * @method string getId
 * @method self withId
 * @method Boolean getExternalNode
 * @method self withExternalNode
 */
final class AddEthereumNode extends RpcRequest
{
}

/**
 * @method string getNodeId
 * @method self withNodeId
 */
final class DescribeEthereumNodeInfo extends RpcRequest
{
}

/**
 * @method string getNodeId
 * @method self withNodeId
 */
final class DescribeEthereumClientUsers extends RpcRequest
{
}

/**
 * @method string getNodeId
 * @method self withNodeId
 * @method string getUsername
 * @method self withUsername
 * @method string getPassword
 * @method self withPassword
 */
final class UpdateEthereumClientUserPassword extends RpcRequest
{
}

/**
 * @method string getNodeId
 * @method self withNodeId
 * @method string getTarget
 * @method self withTarget
 * @method string getLines
 * @method self withLines
 */
final class DescribeEthereumNodeLogs extends RpcRequest
{
}

/**
 * @method string getId
 * @method self withId
 */
final class CreateEthereumInvitation extends RpcRequest
{
}

/**
 * @method string getToken
 * @method self withToken
 */
final class DescribeEthereumInvitaion extends RpcRequest
{
}

/**
 * @method string getToken
 * @method self withToken
 * @method string getCode
 * @method self withCode
 */
final class AcceptEthereumInvitation extends RpcRequest
{
}

/**
 * @method string getId
 * @method self withId
 */
final class DescribeNetstatURL extends RpcRequest
{
}

/**
 * @method string getNodeId
 * @method self withNodeId
 */
final class DescribeExplorerURL extends RpcRequest
{
}

/**
 * @method string getId
 * @method self withId
 * @method RepeatList getInvitee
 * @method self withInvitee
 */
final class ApproveEthereumInvitee extends RpcRequest
{
}

/**
 * @method string getId
 * @method self withId
 */
final class DescribeEthereumInvitee extends RpcRequest
{
}

/**
 * @method string getNodeId
 * @method self withNodeId
 */
final class DescribeEthereumNodeConfiguration extends RpcRequest
{
}

/**
 * @method string getNodeId
 * @method self withNodeId
 * @method string getIP
 * @method self withIP
 * @method string getNodePub
 * @method self withNodePub
 * @method string getTMPub
 * @method self withTMPub
 * @method Integer getP2pPort
 * @method self withP2pPort
 * @method Integer getTMPort
 * @method self withTMPort
 * @method Integer getRaftPort
 * @method self withRaftPort
 * @method Integer getRpcPort
 * @method self withRpcPort
 * @method Integer getWSPort
 * @method self withWSPort
 */
final class UpdateEthereumNodeConfiguration extends RpcRequest
{
}

final class DescribeResourceType extends RpcRequest
{
}

/**
 * @method string getBizid
 * @method self withBizid
 */
final class DescribeBlockchainSchema extends RpcRequest
{
}

/**
 * @method string getBizid
 * @method self withBizid
 * @method Integer getMachineNum
 * @method self withMachineNum
 * @method Integer getSize
 * @method self withSize
 * @method Integer getLiveTime
 * @method self withLiveTime
 */
final class CreateBlockchainApplication extends RpcRequest
{
}

final class DescribeMySuccessfulApplication extends RpcRequest
{
}

/**
 * @method string getBizid
 * @method self withBizid
 */
final class DownloadSDK2 extends RpcRequest
{
}

/**
 * @method Long getSchemaId
 * @method self withSchemaId
 * @method string getBizid
 * @method self withBizid
 */
final class DescribeSchemaDetail extends RpcRequest
{
}

/**
 * @method string getBizid
 * @method self withBizid
 * @method Long getHeight
 * @method self withHeight
 */
final class DescribeBlock extends RpcRequest
{
}

/**
 * @method string getMetric
 * @method self withMetric
 * @method string getPeriod
 * @method self withPeriod
 * @method string getInnerIp
 * @method self withInnerIp
 * @method string getPort
 * @method self withPort
 * @method string getBizid
 * @method self withBizid
 * @method string getTimeArea
 * @method self withTimeArea
 */
final class DescribeMetric extends RpcRequest
{
}

/**
 * @method string getBizid
 * @method self withBizid
 * @method string getHash
 * @method self withHash
 */
final class DescribeTransaction extends RpcRequest
{
}

/**
 * @method string getBizid
 * @method self withBizid
 */
final class ResetCertificate extends RpcRequest
{
}

/**
 * @method string getBizid
 * @method self withBizid
 * @method string getStatus
 * @method self withStatus
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getCurrent
 * @method self withCurrent
 */
final class DescribeApplies extends RpcRequest
{
}

/**
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getCurrent
 * @method self withCurrent
 * @method Integer getTotal
 * @method self withTotal
 */
final class DescribeAllBlockchains extends RpcRequest
{
}

/**
 * @method string getBizid
 * @method self withBizid
 */
final class DescribeBcSchema extends RpcRequest
{
}

/**
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getCurrent
 * @method self withCurrent
 */
final class DescribeBlockchainCreateTask extends RpcRequest
{
}

/**
 * @method string getBizid
 * @method self withBizid
 */
final class DescribeBlockchainInfo extends RpcRequest
{
}

/**
 * @method string getBizid
 * @method self withBizid
 * @method Long getStart
 * @method self withStart
 * @method Long getEnd
 * @method self withEnd
 */
final class DescribeLatestTransaction extends RpcRequest
{
}

final class DescribeMyBlockchains extends RpcRequest
{
}

final class DescribeMySuccessApplies extends RpcRequest
{
}

/**
 * @method string getBizid
 * @method self withBizid
 */
final class DescribeOssProperties extends RpcRequest
{
}

final class DescribeTemplates extends RpcRequest
{
}

/**
 * @method string getBizid
 * @method self withBizid
 */
final class DownloadAll extends RpcRequest
{
}

/**
 * @method string getOrganizationId
 * @method self withOrganizationId
 * @method string getPeerName
 * @method self withPeerName
 * @method string getLines
 * @method self withLines
 */
final class DescribePeerLogs extends RpcRequest
{
}

/**
 * @method string getConsortiumId
 * @method self withConsortiumId
 * @method string getOrdererName
 * @method self withOrdererName
 * @method string getLines
 * @method self withLines
 */
final class DescribeOrdererLogs extends RpcRequest
{
}

/**
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getCurrent
 * @method self withCurrent
 */
final class GetBlockchainCreateTask extends RpcRequest
{
}

/**
 * @method string getBizid
 * @method self withBizid
 */
final class GetOssProperties extends RpcRequest
{
}

/**
 * @method Long getSchemaId
 * @method self withSchemaId
 * @method string getSchemaName
 * @method self withSchemaName
 * @method string getBizid
 * @method self withBizid
 * @method string getDescription
 * @method self withDescription
 * @method string getCategoryConfigs
 * @method self withCategoryConfigs
 */
final class UpdateSchema extends RpcRequest
{
}

/**
 * @method Long getSchemaId
 * @method self withSchemaId
 * @method string getBizid
 * @method self withBizid
 */
final class SchemaDetail extends RpcRequest
{
}

/**
 * @method string getBizid
 * @method self withBizid
 * @method string getUserName
 * @method self withUserName
 * @method string getBid
 * @method self withBid
 * @method Integer getOperation
 * @method self withOperation
 */
final class ResetUser extends RpcRequest
{
}

/**
 * @method string getBizid
 * @method self withBizid
 * @method string getUserName
 * @method self withUserName
 * @method string getBid
 * @method self withBid
 * @method string getReason
 * @method self withReason
 */
final class RejectUser extends RpcRequest
{
}

/**
 * @method string getBizid
 * @method self withBizid
 * @method string getHash
 * @method self withHash
 */
final class QueryTransaction extends RpcRequest
{
}

/**
 * @method string getPeriod
 * @method self withPeriod
 * @method string getMetric
 * @method self withMetric
 * @method string getInnerIp
 * @method self withInnerIp
 * @method string getPort
 * @method self withPort
 * @method string getBizid
 * @method self withBizid
 * @method string getTimeArea
 * @method self withTimeArea
 */
final class QueryMetric extends RpcRequest
{
}

/**
 * @method string getBizid
 * @method self withBizid
 * @method Long getHeight
 * @method self withHeight
 */
final class QueryBlock extends RpcRequest
{
}

/**
 * @method string getBizid
 * @method self withBizid
 * @method string getUserName
 * @method self withUserName
 * @method Integer getOperation
 * @method self withOperation
 * @method string getBid
 * @method self withBid
 */
final class OperateUser extends RpcRequest
{
}

/**
 * @method string getBizid
 * @method self withBizid
 * @method string getUserEmail
 * @method self withUserEmail
 * @method Long getUserId
 * @method self withUserId
 * @method string getBid
 * @method self withBid
 */
final class InviteUser extends RpcRequest
{
}

final class GetTemplates extends RpcRequest
{
}

final class GetMySuccessApplies extends RpcRequest
{
}

final class GetMyBlockchains extends RpcRequest
{
}

/**
 * @method string getBizid
 * @method self withBizid
 * @method Long getStart
 * @method self withStart
 * @method Long getEnd
 * @method self withEnd
 */
final class GetLatestTransaction extends RpcRequest
{
}

/**
 * @method string getBizid
 * @method self withBizid
 */
final class GetBlockchainInfo extends RpcRequest
{
}

/**
 * @method string getBizid
 * @method self withBizid
 */
final class GetBcSchema extends RpcRequest
{
}

/**
 * @method string getBizid
 * @method self withBizid
 * @method string getStatus
 * @method self withStatus
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getCurrent
 * @method self withCurrent
 */
final class GetApplies extends RpcRequest
{
}

/**
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getCurrent
 * @method self withCurrent
 * @method Integer getTotal
 * @method self withTotal
 */
final class GetAllBlockchains extends RpcRequest
{
}

/**
 * @method string getPath
 * @method self withPath
 * @method string getBizid
 * @method self withBizid
 */
final class DownloadSignedData extends RpcRequest
{
}

/**
 * @method string getBizid
 * @method self withBizid
 */
final class DownloadSdk extends RpcRequest
{
}

/**
 * @method string getBizid
 * @method self withBizid
 */
final class DownloadBizview extends RpcRequest
{
}

/**
 * @method string getBizid
 * @method self withBizid
 * @method Integer getMachineNum
 * @method self withMachineNum
 * @method Integer getSize
 * @method self withSize
 * @method Integer getLiveTime
 * @method self withLiveTime
 */
final class CreateBlockchainApply extends RpcRequest
{
}

/**
 * @method string getBlockchain
 * @method self withBlockchain
 * @method string getUploadReq
 * @method self withUploadReq
 */
final class ApplyBlockchain extends RpcRequest
{
}

/**
 * @method string getCode
 * @method self withCode
 */
final class AgreeInvite extends RpcRequest
{
}

/**
 * @method string getConsortiumId
 * @method self withConsortiumId
 * @method string getLocation
 * @method self withLocation
 */
final class DescribeConsortiumDeletable extends RpcRequest
{
}

/**
 * @method string getOrganizationId
 * @method self withOrganizationId
 * @method string getLocation
 * @method self withLocation
 */
final class DescribeOrganizationDeletable extends RpcRequest
{
}

/**
 * @method string getOrganizationId
 * @method self withOrganizationId
 * @method string getLocation
 * @method self withLocation
 */
final class QueryOrganizationDeletable extends RpcRequest
{
}

/**
 * @method string getConsortiumId
 * @method self withConsortiumId
 * @method string getLocation
 * @method self withLocation
 */
final class QueryConsortiumDeletable extends RpcRequest
{
}

/**
 * @method string getCode
 * @method self withCode
 * @method Boolean getIsAccepted
 * @method self withIsAccepted
 */
final class TestBatch extends RpcRequest
{
}

/**
 * @method string getChaincodeId
 * @method self withChaincodeId
 */
final class DeleteChaincode extends RpcRequest
{
}

/**
 * @method string getConsortiumId
 * @method self withConsortiumId
 * @method string getLocation
 * @method self withLocation
 */
final class DescribeConsortiumMembers extends RpcRequest
{
}

/**
 * @method string getLocation
 * @method self withLocation
 */
final class DescribeOrganizations extends RpcRequest
{
}

/**
 * @method string getOrganizationId
 * @method self withOrganizationId
 * @method string getLocation
 * @method self withLocation
 */
final class DescribeOrganizationChannels extends RpcRequest
{
}

/**
 * @method string getCode
 * @method self withCode
 * @method Boolean getIsAccepted
 * @method self withIsAccepted
 */
final class AcceptInvitation extends RpcRequest
{
}

/**
 * @method string getOrganizationId
 * @method self withOrganizationId
 * @method string getLocation
 * @method self withLocation
 */
final class DescribeOrganizationChaincodes extends RpcRequest
{
}

final class DescribeRegions extends RpcRequest
{
}

/**
 * @method string getOrganizationId
 * @method self withOrganizationId
 * @method string getLocation
 * @method self withLocation
 */
final class DescribeOrganizationUsers extends RpcRequest
{
}

/**
 * @method string getOrganizationId
 * @method self withOrganizationId
 * @method string getLocation
 * @method self withLocation
 */
final class DescribeOrganizationPeers extends RpcRequest
{
}

/**
 * @method string getConsortiumId
 * @method self withConsortiumId
 */
final class DescribeInvitationList extends RpcRequest
{
}

/**
 * @method string getOrganizationId
 * @method self withOrganizationId
 */
final class DescribeChaincodeUploadPolicy extends RpcRequest
{
}

/**
 * @method string getLocation
 * @method self withLocation
 */
final class DescribeConsortiumAdminStatus extends RpcRequest
{
}

/**
 * @method string getOrganizationId
 * @method self withOrganizationId
 * @method string getLocation
 * @method self withLocation
 */
final class DescribeOrganization extends RpcRequest
{
}

final class DescribeEcosphereSpecs extends RpcRequest
{
}

final class DescribeConsortiumSpecs extends RpcRequest
{
}

final class DescribeConsortiumConfig extends RpcRequest
{
}

final class DescribeOrganizationSpecs extends RpcRequest
{
}

final class DescribeRootDomain extends RpcRequest
{
}

/**
 * @method string getZoneId
 * @method self withZoneId
 * @method string getOrdererType
 * @method self withOrdererType
 * @method string getConsortiumName
 * @method self withConsortiumName
 * @method string getOrdererDomain
 * @method self withOrdererDomain
 * @method string getDescription
 * @method self withDescription
 * @method string getLocation
 * @method self withLocation
 * @method string getChannelPolicy
 * @method self withChannelPolicy
 * @method string getSpecName
 * @method self withSpecName
 * @method Integer getOrderersCount
 * @method self withOrderersCount
 * @method Integer getPeersCount
 * @method self withPeersCount
 * @method RepeatList getOrganization
 * @method self withOrganization
 */
final class CreateEcosphere extends RpcRequest
{
}

/**
 * @method string getLocation
 * @method self withLocation
 * @method string getOrdererType
 * @method self withOrdererType
 * @method string getZoneId
 * @method self withZoneId
 * @method string getName
 * @method self withName
 * @method string getDomain
 * @method self withDomain
 * @method string getDescription
 * @method self withDescription
 * @method string getChannelPolicy
 * @method self withChannelPolicy
 * @method string getSpecName
 * @method self withSpecName
 * @method Integer getOrderersCount
 * @method self withOrderersCount
 * @method Integer getPeersCount
 * @method self withPeersCount
 * @method RepeatList getOrganization
 * @method self withOrganization
 */
final class CreateConsortium extends RpcRequest
{
}

/**
 * @method string getOrganizationId
 * @method self withOrganizationId
 * @method string getChaincodeId
 * @method self withChaincodeId
 */
final class SynchronizeChaincode extends RpcRequest
{
}

/**
 * @method string getOrganizationId
 * @method self withOrganizationId
 * @method string getUsername
 * @method self withUsername
 * @method string getLocation
 * @method self withLocation
 */
final class DownloadOrganizationSDK extends RpcRequest
{
}

/**
 * @method string getOrganizationId
 * @method self withOrganizationId
 * @method string getUsername
 * @method self withUsername
 * @method string getPassword
 * @method self withPassword
 * @method string getLocation
 * @method self withLocation
 */
final class ResetOrganizationUserPassword extends RpcRequest
{
}

/**
 * @method string getConsortiumId
 * @method self withConsortiumId
 */
final class DescribeInvitationCode extends RpcRequest
{
}

/**
 * @method string getOrganizationId
 * @method self withOrganizationId
 * @method string getUsername
 * @method self withUsername
 */
final class DescribeOrganizationUserCerts extends RpcRequest
{
}

/**
 * @method string getOrganizationId
 * @method self withOrganizationId
 * @method string getUsername
 * @method self withUsername
 * @method string getPassword
 * @method self withPassword
 */
final class CreateOrganizationUser extends RpcRequest
{
}

final class DescribeTasks extends RpcRequest
{
}

/**
 * @method string getChannelId
 * @method self withChannelId
 * @method RepeatList getOrganization
 * @method self withOrganization
 */
final class CreateChannelMember extends RpcRequest
{
}

/**
 * @method string getConsortiumId
 * @method self withConsortiumId
 * @method string getLocation
 * @method self withLocation
 */
final class DescribeConsortiumMemberApproval extends RpcRequest
{
}

/**
 * @method string getChannelId
 * @method self withChannelId
 * @method string getDo
 * @method self withDo
 * @method string getLocation
 * @method self withLocation
 */
final class JoinChannel extends RpcRequest
{
}

/**
 * @method string getConsortiumId
 * @method self withConsortiumId
 * @method string getLocation
 * @method self withLocation
 */
final class DescribeConsortiumOrderers extends RpcRequest
{
}

/**
 * @method string getCode
 * @method self withCode
 */
final class DescribeInviter extends RpcRequest
{
}

/**
 * @method string getLocation
 * @method self withLocation
 */
final class DescribeCandidateOrganizations extends RpcRequest
{
}

/**
 * @method string getConsortiumId
 * @method self withConsortiumId
 * @method RepeatList getOrganization
 * @method self withOrganization
 * @method string getCode
 * @method self withCode
 */
final class CreateConsortiumMember extends RpcRequest
{
}

/**
 * @method string getOrganizationId
 * @method self withOrganizationId
 * @method string getLocation
 * @method self withLocation
 */
final class DescribeOrganizationMembers extends RpcRequest
{
}

/**
 * @method string getConsortiumId
 * @method self withConsortiumId
 * @method RepeatList getOrganization
 * @method self withOrganization
 */
final class ConfirmConsortiumMember extends RpcRequest
{
}

/**
 * @method string getDomainCode
 * @method self withDomainCode
 */
final class CheckConsortiumDomain extends RpcRequest
{
}

/**
 * @method string getDomainCode
 * @method self withDomainCode
 * @method string getDomain
 * @method self withDomain
 */
final class CheckOrganizationDomain extends RpcRequest
{
}

/**
 * @method string getConsortiumId
 * @method self withConsortiumId
 */
final class DestroyConsortium extends RpcRequest
{
}

/**
 * @method string getOrganizationId
 * @method self withOrganizationId
 */
final class DestroyOrganization extends RpcRequest
{
}

/**
 * @method string getOrganizationId
 * @method self withOrganizationId
 * @method string getExMethod
 * @method self withExMethod
 * @method string getExUrl
 * @method self withExUrl
 * @method string getExBody
 * @method self withExBody
 */
final class DescribeExplorer extends RpcRequest
{
}

/**
 * @method string getConsortiumId
 * @method self withConsortiumId
 * @method string getLocation
 * @method self withLocation
 */
final class DescribeConsortiums extends RpcRequest
{
}

/**
 * @method string getName
 * @method self withName
 * @method string getLocation
 * @method self withLocation
 * @method string getDomain
 * @method self withDomain
 * @method string getDescription
 * @method self withDescription
 * @method string getSpecName
 * @method self withSpecName
 */
final class CreateOrganization extends RpcRequest
{
}

/**
 * @method string getConsortiumId
 * @method self withConsortiumId
 * @method string getLocation
 * @method self withLocation
 */
final class DescribeConsortiumChannels extends RpcRequest
{
}

/**
 * @method string getConsortiumId
 * @method self withConsortiumId
 * @method RepeatList getOrganization
 * @method self withOrganization
 * @method string getChannelName
 * @method self withChannelName
 */
final class CreateChannel extends RpcRequest
{
}

/**
 * @method string getChannelId
 * @method self withChannelId
 */
final class DescribeChannelMembers extends RpcRequest
{
}

/**
 * @method string getOrganizationId
 * @method self withOrganizationId
 * @method string getLocation
 * @method self withLocation
 */
final class DescribeOrgnaizationChaincodes extends RpcRequest
{
}

/**
 * @method string getConsortiumId
 * @method self withConsortiumId
 * @method string getLocation
 * @method self withLocation
 */
final class DescribeConsortiumChaincodes extends RpcRequest
{
}

/**
 * @method string getOrganizationId
 * @method self withOrganizationId
 * @method string getChannelId
 * @method self withChannelId
 * @method string getConsortiumId
 * @method self withConsortiumId
 * @method string getOssBucket
 * @method self withOssBucket
 * @method string getOssUrl
 * @method self withOssUrl
 * @method string getEndorsePolicy
 * @method self withEndorsePolicy
 * @method string getLocation
 * @method self withLocation
 */
final class CreateChaincode extends RpcRequest
{
}

/**
 * @method string getOrganizationId
 * @method self withOrganizationId
 * @method string getChaincodeId
 * @method self withChaincodeId
 * @method string getLocation
 * @method self withLocation
 */
final class InstallChaincode extends RpcRequest
{
}

/**
 * @method string getOrganizationId
 * @method self withOrganizationId
 * @method string getChaincodeId
 * @method self withChaincodeId
 * @method string getEndorsePolicy
 * @method self withEndorsePolicy
 * @method string getLocation
 * @method self withLocation
 */
final class UpgradeChaincode extends RpcRequest
{
}

/**
 * @method string getOrganizationId
 * @method self withOrganizationId
 * @method string getChaincodeId
 * @method self withChaincodeId
 * @method string getEndorsePolicy
 * @method self withEndorsePolicy
 * @method string getLocation
 * @method self withLocation
 */
final class InstantiateChaincode extends RpcRequest
{
}
