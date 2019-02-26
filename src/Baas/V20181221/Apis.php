<?php

namespace AlibabaCloud\Baas\V20181221;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RpcRequest as Rpc;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method QueryEthereumDeletable queryEthereumDeletable($options = [])
 * @method DescribeOrdererLogs describeOrdererLogs($options = [])
 * @method DescribePeerLogs describePeerLogs($options = [])
 * @method InstantiateChaincode instantiateChaincode($options = [])
 * @method UpgradeChaincode upgradeChaincode($options = [])
 * @method InstallChaincode installChaincode($options = [])
 * @method CreateChaincode createChaincode($options = [])
 * @method DescribeConsortiumChaincodes describeConsortiumChaincodes($options = [])
 * @method DescribeOrgnaizationChaincodes describeOrgnaizationChaincodes($options = [])
 * @method DescribeChannelMembers describeChannelMembers($options = [])
 * @method CreateChannel createChannel($options = [])
 * @method DescribeConsortiumChannels describeConsortiumChannels($options = [])
 * @method CreateOrganization createOrganization($options = [])
 * @method DescribeConsortiums describeConsortiums($options = [])
 * @method DescribeExplorer describeExplorer($options = [])
 * @method CheckOrganizationDomain checkOrganizationDomain($options = [])
 * @method CheckConsortiumDomain checkConsortiumDomain($options = [])
 * @method ConfirmConsortiumMember confirmConsortiumMember($options = [])
 * @method DescribeOrganizationMembers describeOrganizationMembers($options = [])
 * @method CreateConsortiumMember createConsortiumMember($options = [])
 * @method DescribeCandidateOrganizations describeCandidateOrganizations($options = [])
 * @method DescribeInviter describeInviter($options = [])
 * @method DescribeConsortiumOrderers describeConsortiumOrderers($options = [])
 * @method JoinChannel joinChannel($options = [])
 * @method DescribeConsortiumMemberApproval describeConsortiumMemberApproval($options = [])
 * @method CreateChannelMember createChannelMember($options = [])
 * @method DescribeTasks describeTasks($options = [])
 * @method CreateOrganizationUser createOrganizationUser($options = [])
 * @method DescribeInvitationCode describeInvitationCode($options = [])
 * @method ResetOrganizationUserPassword resetOrganizationUserPassword($options = [])
 * @method DownloadOrganizationSDK downloadOrganizationSDK($options = [])
 * @method SynchronizeChaincode synchronizeChaincode($options = [])
 * @method CreateConsortium createConsortium($options = [])
 * @method CreateEcosphere createEcosphere($options = [])
 * @method DescribeRootDomain describeRootDomain($options = [])
 * @method DescribeOrganizationSpecs describeOrganizationSpecs($options = [])
 * @method DescribeConsortiumConfig describeConsortiumConfig($options = [])
 * @method DescribeConsortiumSpecs describeConsortiumSpecs($options = [])
 * @method DescribeEcosphereSpecs describeEcosphereSpecs($options = [])
 * @method DescribeOrganization describeOrganization($options = [])
 * @method DescribeConsortiumAdminStatus describeConsortiumAdminStatus($options = [])
 * @method DescribeChaincodeUploadPolicy describeChaincodeUploadPolicy($options = [])
 * @method DescribeOrganizationPeers describeOrganizationPeers($options = [])
 * @method DescribeOrganizationUsers describeOrganizationUsers($options = [])
 * @method DescribeRegions describeRegions($options = [])
 * @method DescribeOrganizationChaincodes describeOrganizationChaincodes($options = [])
 * @method AcceptInvitation acceptInvitation($options = [])
 * @method DescribeOrganizationChannels describeOrganizationChannels($options = [])
 * @method DescribeOrganizations describeOrganizations($options = [])
 * @method DescribeConsortiumMembers describeConsortiumMembers($options = [])
 * @method DeleteChaincode deleteChaincode($options = [])
 * @method QueryConsortiumDeletable queryConsortiumDeletable($options = [])
 * @method QueryOrganizationDeletable queryOrganizationDeletable($options = [])
 * @method DescribeOrganizationDeletable describeOrganizationDeletable($options = [])
 * @method DescribeConsortiumDeletable describeConsortiumDeletable($options = [])
 */
class V20181221
{
    use ApiResolverTrait;
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
 * @method string getLocation
 * @method self withLocation(string $location)
 */
class DescribeOrgnaizationChaincodes extends Rpc
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
class DescribeConsortiums extends Rpc
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
 * @method string getDomainCode
 * @method self withDomainCode(string $domainCode)
 */
class CheckConsortiumDomain extends Rpc
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
 * @method string getCode
 * @method self withCode(string $code)
 */
class CreateConsortiumMember extends Rpc
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
 * @method string getCode
 * @method self withCode(string $code)
 */
class DescribeInviter extends Rpc
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
class DescribeConsortiumMemberApproval extends Rpc
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

class DescribeTasks extends Rpc
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
 * @method string getChaincodeId
 * @method self withChaincodeId(string $chaincodeId)
 */
class SynchronizeChaincode extends Rpc
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

class DescribeRootDomain extends Rpc
{
    use R;
}

class DescribeOrganizationSpecs extends Rpc
{
    use R;
}

class DescribeConsortiumConfig extends Rpc
{
    use R;
}

class DescribeConsortiumSpecs extends Rpc
{
    use R;
}

class DescribeEcosphereSpecs extends Rpc
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
 */
class DescribeChaincodeUploadPolicy extends Rpc
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
 * @method string getOrganizationId
 * @method self withOrganizationId(string $organizationId)
 * @method string getLocation
 * @method self withLocation(string $location)
 */
class DescribeOrganizationUsers extends Rpc
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
class DescribeOrganizationChaincodes extends Rpc
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
class DescribeOrganizationChannels extends Rpc
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
class QueryConsortiumDeletable extends Rpc
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
 * @method string getConsortiumId
 * @method self withConsortiumId(string $consortiumId)
 * @method string getLocation
 * @method self withLocation(string $location)
 */
class DescribeConsortiumDeletable extends Rpc
{
    use R;
}
