<?php

namespace AlibabaCloud\Baas\V20181221;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method string getEthereumId
 * @method self withEthereumId
 */
final class QueryEthereumDeletable extends RpcRequest
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
 * @method string getLocation
 * @method self withLocation
 */
final class InstallChaincode extends RpcRequest
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
 * @method string getLocation
 * @method self withLocation
 */
final class DescribeOrgnaizationChaincodes extends RpcRequest
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
 * @method string getConsortiumId
 * @method self withConsortiumId
 * @method string getLocation
 * @method self withLocation
 */
final class DescribeConsortiumChannels extends RpcRequest
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
final class DescribeConsortiums extends RpcRequest
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
 * @method string getDomainCode
 * @method self withDomainCode
 * @method string getDomain
 * @method self withDomain
 */
final class CheckOrganizationDomain extends RpcRequest
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
 * @method string getConsortiumId
 * @method self withConsortiumId
 * @method RepeatList getOrganization
 * @method self withOrganization
 */
final class ConfirmConsortiumMember extends RpcRequest
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
 * @method string getCode
 * @method self withCode
 */
final class CreateConsortiumMember extends RpcRequest
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
 * @method string getCode
 * @method self withCode
 */
final class DescribeInviter extends RpcRequest
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
final class DescribeConsortiumMemberApproval extends RpcRequest
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

final class DescribeTasks extends RpcRequest
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
 * @method string getPassword
 * @method self withPassword
 * @method string getLocation
 * @method self withLocation
 */
final class ResetOrganizationUserPassword extends RpcRequest
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
 * @method string getChaincodeId
 * @method self withChaincodeId
 */
final class SynchronizeChaincode extends RpcRequest
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

final class DescribeRootDomain extends RpcRequest
{
}

final class DescribeOrganizationSpecs extends RpcRequest
{
}

final class DescribeConsortiumConfig extends RpcRequest
{
}

final class DescribeConsortiumSpecs extends RpcRequest
{
}

final class DescribeEcosphereSpecs extends RpcRequest
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
 */
final class DescribeChaincodeUploadPolicy extends RpcRequest
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
 * @method string getOrganizationId
 * @method self withOrganizationId
 * @method string getLocation
 * @method self withLocation
 */
final class DescribeOrganizationUsers extends RpcRequest
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
final class DescribeOrganizationChaincodes extends RpcRequest
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
final class DescribeOrganizationChannels extends RpcRequest
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
 * @method string getConsortiumId
 * @method self withConsortiumId
 * @method string getLocation
 * @method self withLocation
 */
final class DescribeConsortiumMembers extends RpcRequest
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
final class QueryConsortiumDeletable extends RpcRequest
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
 * @method string getOrganizationId
 * @method self withOrganizationId
 * @method string getLocation
 * @method self withLocation
 */
final class DescribeOrganizationDeletable extends RpcRequest
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
