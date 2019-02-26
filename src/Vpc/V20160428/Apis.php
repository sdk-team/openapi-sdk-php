<?php

namespace AlibabaCloud\Vpc\V20160428;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RpcRequest as Rpc;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method ModifyRouteEntry modifyRouteEntry($options = [])
 * @method DescribeRouteEntryList describeRouteEntryList($options = [])
 * @method CreateIPv6TranslatorAclList createIPv6TranslatorAclList($options = [])
 * @method DeleteIPv6TranslatorAclList deleteIPv6TranslatorAclList($options = [])
 * @method AddIPv6TranslatorAclListEntry addIPv6TranslatorAclListEntry($options = [])
 * @method DescribeIPv6TranslatorAclLists describeIPv6TranslatorAclLists($options = [])
 * @method ModifyIPv6TranslatorAclAttribute modifyIPv6TranslatorAclAttribute($options = [])
 * @method RemoveIPv6TranslatorAclListEntry removeIPv6TranslatorAclListEntry($options = [])
 * @method DescribeIPv6TranslatorAclListAttributes describeIPv6TranslatorAclListAttributes($options = [])
 * @method ModifyIPv6TranslatorAclListEntry modifyIPv6TranslatorAclListEntry($options = [])
 * @method InnerVpcDescribeCrossBorderUsers innerVpcDescribeCrossBorderUsers($options = [])
 * @method InnerVpcDescribeCrossBorderRouterInterface innerVpcDescribeCrossBorderRouterInterface($options = [])
 * @method InnerVpcConfirmCrossBorderRouterInterface innerVpcConfirmCrossBorderRouterInterface($options = [])
 * @method UnTagResources unTagResources($options = [])
 * @method TagResources tagResources($options = [])
 * @method ListTagResources listTagResources($options = [])
 * @method ModifyIpv6InternetBandwidth modifyIpv6InternetBandwidth($options = [])
 * @method ModifyIpv6GatewaySpec modifyIpv6GatewaySpec($options = [])
 * @method ModifyIpv6GatewayAttribute modifyIpv6GatewayAttribute($options = [])
 * @method ModifyIpv6AddressAttribute modifyIpv6AddressAttribute($options = [])
 * @method DescribeIpv6Gateways describeIpv6Gateways($options = [])
 * @method DescribeIpv6GatewayAttribute describeIpv6GatewayAttribute($options = [])
 * @method DescribeIpv6EgressOnlyRules describeIpv6EgressOnlyRules($options = [])
 * @method DescribeIpv6Addresses describeIpv6Addresses($options = [])
 * @method DeleteIpv6InternetBandwidth deleteIpv6InternetBandwidth($options = [])
 * @method DeleteIpv6Gateway deleteIpv6Gateway($options = [])
 * @method DeleteIpv6EgressOnlyRule deleteIpv6EgressOnlyRule($options = [])
 * @method CreateIpv6Gateway createIpv6Gateway($options = [])
 * @method CreateIpv6EgressOnlyRule createIpv6EgressOnlyRule($options = [])
 * @method AllocateVpcIpv6Cidr allocateVpcIpv6Cidr($options = [])
 * @method AllocateIpv6InternetBandwidth allocateIpv6InternetBandwidth($options = [])
 * @method DescribePhysicalConnectionOrder describePhysicalConnectionOrder($options = [])
 * @method ModifyEipForwardMode modifyEipForwardMode($options = [])
 * @method DescribeTrafficConsumeByMonth describeTrafficConsumeByMonth($options = [])
 * @method DeleteExpressConnect deleteExpressConnect($options = [])
 * @method Describe95Traffic describe95Traffic($options = [])
 * @method CreateIPv6Translator createIPv6Translator($options = [])
 * @method DescribeIPv6Translators describeIPv6Translators($options = [])
 * @method ModifyIPv6TranslatorAttribute modifyIPv6TranslatorAttribute($options = [])
 * @method ModifyIPv6TranslatorBandwidth modifyIPv6TranslatorBandwidth($options = [])
 * @method CreateIPv6TranslatorEntry createIPv6TranslatorEntry($options = [])
 * @method DeleteIPv6TranslatorEntry deleteIPv6TranslatorEntry($options = [])
 * @method ModifyIPv6TranslatorEntry modifyIPv6TranslatorEntry($options = [])
 * @method DescribeIPv6TranslatorEntries describeIPv6TranslatorEntries($options = [])
 * @method IPv6TranslatorFillParams iPv6TranslatorFillParams($options = [])
 * @method IPv6TranslatorFillRestrictions iPv6TranslatorFillRestrictions($options = [])
 * @method IPv6TranslatorPrepayNotifyPaid iPv6TranslatorPrepayNotifyPaid($options = [])
 * @method IPv6TranslatorValidateOrder iPv6TranslatorValidateOrder($options = [])
 * @method DeleteIPv6Translator deleteIPv6Translator($options = [])
 * @method ForceAllocateEipAddress forceAllocateEipAddress($options = [])
 * @method AllocateEipAddressPro allocateEipAddressPro($options = [])
 * @method SetHighDefinitionMonitorLogStatus setHighDefinitionMonitorLogStatus($options = [])
 * @method DescribeHighDefinitionMonitorLogAttribute describeHighDefinitionMonitorLogAttribute($options = [])
 * @method ModifyFlowLogAttribute modifyFlowLogAttribute($options = [])
 * @method DescribeFlowLogs describeFlowLogs($options = [])
 * @method DeleteFlowLog deleteFlowLog($options = [])
 * @method DeactiveFlowLog deactiveFlowLog($options = [])
 * @method CreateFlowLog createFlowLog($options = [])
 * @method ActiveFlowLog activeFlowLog($options = [])
 * @method UnassociateRouteTable unassociateRouteTable($options = [])
 * @method DeleteRouteTable deleteRouteTable($options = [])
 * @method CreateRouteTable createRouteTable($options = [])
 * @method AssociateRouteTable associateRouteTable($options = [])
 * @method CreateVpnGateway createVpnGateway($options = [])
 * @method DescribeNetworkQuotas describeNetworkQuotas($options = [])
 * @method DescribeVpnConnectionLogs describeVpnConnectionLogs($options = [])
 * @method MoveResourceGroup moveResourceGroup($options = [])
 * @method RevokeInstanceFromCen revokeInstanceFromCen($options = [])
 * @method GrantInstanceToCen grantInstanceToCen($options = [])
 * @method DescribeGrantRulesToCen describeGrantRulesToCen($options = [])
 * @method ModifySslVpnServer modifySslVpnServer($options = [])
 * @method ModifySslVpnClientCert modifySslVpnClientCert($options = [])
 * @method DescribeSslVpnServers describeSslVpnServers($options = [])
 * @method DescribeSslVpnServerCaCert describeSslVpnServerCaCert($options = [])
 * @method DescribeSslVpnClientConfig describeSslVpnClientConfig($options = [])
 * @method DescribeSslVpnClientCerts describeSslVpnClientCerts($options = [])
 * @method DescribeSslVpnClientCert describeSslVpnClientCert($options = [])
 * @method DeleteSslVpnServer deleteSslVpnServer($options = [])
 * @method DeleteSslVpnClientCert deleteSslVpnClientCert($options = [])
 * @method CreateSslVpnServer createSslVpnServer($options = [])
 * @method CreateSslVpnClientCert createSslVpnClientCert($options = [])
 * @method DescribeEipAddressesByBwp describeEipAddressesByBwp($options = [])
 * @method RemoveGlobalAccelerationInstanceIp removeGlobalAccelerationInstanceIp($options = [])
 * @method AddGlobalAccelerationInstanceIp addGlobalAccelerationInstanceIp($options = [])
 * @method SetHaVipMasterInstance setHaVipMasterInstance($options = [])
 * @method DescribePublicIpAddress describePublicIpAddress($options = [])
 * @method RevokeInstanceFromCbn revokeInstanceFromCbn($options = [])
 * @method GrantInstanceToCbn grantInstanceToCbn($options = [])
 * @method DescribeGrantRulesToCbn describeGrantRulesToCbn($options = [])
 * @method DescribeRouteTableList describeRouteTableList($options = [])
 * @method ModifyRouteTableAttributes modifyRouteTableAttributes($options = [])
 * @method DescribeBgpNetworks describeBgpNetworks($options = [])
 * @method DescribeRouterInterfacesForGlobal describeRouterInterfacesForGlobal($options = [])
 * @method ModifyCommonBandwidthPackagePayType modifyCommonBandwidthPackagePayType($options = [])
 * @method UnassociateGlobalAccelerationInstance unassociateGlobalAccelerationInstance($options = [])
 * @method ModifyGlobalAccelerationInstanceSpec modifyGlobalAccelerationInstanceSpec($options = [])
 * @method ModifyGlobalAccelerationInstanceAttributes modifyGlobalAccelerationInstanceAttributes($options = [])
 * @method DescribeServerRelatedGlobalAccelerationInstances describeServerRelatedGlobalAccelerationInstances($options = [])
 * @method DescribeGlobalAccelerationInstances describeGlobalAccelerationInstances($options = [])
 * @method DeleteGlobalAccelerationInstance deleteGlobalAccelerationInstance($options = [])
 * @method CreateGlobalAccelerationInstance createGlobalAccelerationInstance($options = [])
 * @method AssociateGlobalAccelerationInstance associateGlobalAccelerationInstance($options = [])
 * @method DescribeVSwitchAttributes describeVSwitchAttributes($options = [])
 * @method RemoveCommonBandwidthPackageIp removeCommonBandwidthPackageIp($options = [])
 * @method NotifyProducePreCommonBandwidthPackage notifyProducePreCommonBandwidthPackage($options = [])
 * @method NotifyProduceCommonBandwidthPackage notifyProduceCommonBandwidthPackage($options = [])
 * @method ModifyCommonBandwidthPackageSpec modifyCommonBandwidthPackageSpec($options = [])
 * @method ModifyCommonBandwidthPackageAttribute modifyCommonBandwidthPackageAttribute($options = [])
 * @method FillCommonBandwidthPackageInstanceId fillCommonBandwidthPackageInstanceId($options = [])
 * @method DescribeCommonBandwidthPackages describeCommonBandwidthPackages($options = [])
 * @method DeleteCommonBandwidthPackage deleteCommonBandwidthPackage($options = [])
 * @method CreateCommonBandwidthPackage createCommonBandwidthPackage($options = [])
 * @method CheckCommonBandwidthPackageOrderParam checkCommonBandwidthPackageOrderParam($options = [])
 * @method AddCommonBandwidthPackageIp addCommonBandwidthPackageIp($options = [])
 * @method RiOrderCheck riOrderCheck($options = [])
 * @method RiNotifyPaid riNotifyPaid($options = [])
 * @method RiFillProduct riFillProduct($options = [])
 * @method RiFillParams riFillParams($options = [])
 * @method DescribeVpcsByRegionNo describeVpcsByRegionNo($options = [])
 * @method DescribeVBRs describeVBRs($options = [])
 * @method VpnGatewayValidateOrder vpnGatewayValidateOrder($options = [])
 * @method VpnGatewayPrepayNotifyPaid vpnGatewayPrepayNotifyPaid($options = [])
 * @method VpnGatewayFillRestrictions vpnGatewayFillRestrictions($options = [])
 * @method VpnGatewayFillParams vpnGatewayFillParams($options = [])
 * @method ModifyVpnGatewayAttribute modifyVpnGatewayAttribute($options = [])
 * @method ModifyVpnConnectionAttribute modifyVpnConnectionAttribute($options = [])
 * @method ModifyCustomerGatewayAttribute modifyCustomerGatewayAttribute($options = [])
 * @method DownloadVpnConnectionConfig downloadVpnConnectionConfig($options = [])
 * @method DescribeVpnGateways describeVpnGateways($options = [])
 * @method DescribeVpnGateway describeVpnGateway($options = [])
 * @method DescribeVpnConnections describeVpnConnections($options = [])
 * @method DescribeVpnConnection describeVpnConnection($options = [])
 * @method DescribeCustomerGateways describeCustomerGateways($options = [])
 * @method DescribeCustomerGateway describeCustomerGateway($options = [])
 * @method DeleteVpnGateway deleteVpnGateway($options = [])
 * @method DeleteVpnConnection deleteVpnConnection($options = [])
 * @method DeleteCustomerGateway deleteCustomerGateway($options = [])
 * @method CreateVpnConnection createVpnConnection($options = [])
 * @method CreateCustomerGateway createCustomerGateway($options = [])
 * @method ModifyNqa modifyNqa($options = [])
 * @method ModifyBgpGroupAttribute modifyBgpGroupAttribute($options = [])
 * @method DescribeNqas describeNqas($options = [])
 * @method DescribeBgpPeers describeBgpPeers($options = [])
 * @method DescribeBgpGroups describeBgpGroups($options = [])
 * @method DeleteNqa deleteNqa($options = [])
 * @method DeleteBgpPeer deleteBgpPeer($options = [])
 * @method DeleteBgpNetwork deleteBgpNetwork($options = [])
 * @method DeleteBgpGroup deleteBgpGroup($options = [])
 * @method CreateNqa createNqa($options = [])
 * @method CreateBgpPeer createBgpPeer($options = [])
 * @method CreateBgpGroup createBgpGroup($options = [])
 * @method AddBgpNetwork addBgpNetwork($options = [])
 * @method EnableVpcClassicLink enableVpcClassicLink($options = [])
 * @method DisableVpcClassicLink disableVpcClassicLink($options = [])
 * @method DescribeVpcAttribute describeVpcAttribute($options = [])
 * @method UnassociatePhysicalConnectionFromVirtualBorderRouter unassociatePhysicalConnectionFromVirtualBorderRouter($options = [])
 * @method CreatePhysicalConnectionNew createPhysicalConnectionNew($options = [])
 * @method AssociatePhysicalConnectionToVirtualBorderRouter associatePhysicalConnectionToVirtualBorderRouter($options = [])
 * @method EipPrepayNotifyPaid eipPrepayNotifyPaid($options = [])
 * @method EipOrderCheck eipOrderCheck($options = [])
 * @method NotifyProduceNatGateway notifyProduceNatGateway($options = [])
 * @method NotifyProduceBandwidthPackage notifyProduceBandwidthPackage($options = [])
 * @method ModifySnatEntry modifySnatEntry($options = [])
 * @method ModifyNatGatewaySpec modifyNatGatewaySpec($options = [])
 * @method ModifyNatGatewayAttribute modifyNatGatewayAttribute($options = [])
 * @method ModifyBandwidthPackageAttribute modifyBandwidthPackageAttribute($options = [])
 * @method FillNatGatwayInstanceId fillNatGatwayInstanceId($options = [])
 * @method FillNatGatewayParam fillNatGatewayParam($options = [])
 * @method FillBandwidthPackageParam fillBandwidthPackageParam($options = [])
 * @method FillBandwidthPackageInstanceId fillBandwidthPackageInstanceId($options = [])
 * @method DescribeSnatTableEntries describeSnatTableEntries($options = [])
 * @method DescribeBandwidthPackagePublicIpMonitorData describeBandwidthPackagePublicIpMonitorData($options = [])
 * @method DescribeBandwidthPackageMonitorData describeBandwidthPackageMonitorData($options = [])
 * @method DeleteSnatEntry deleteSnatEntry($options = [])
 * @method CreateSnatEntry createSnatEntry($options = [])
 * @method CreateBandwidthPackage createBandwidthPackage($options = [])
 * @method CheckNatGatewayOrderParam checkNatGatewayOrderParam($options = [])
 * @method CheckBandwidthPackageOrderParam checkBandwidthPackageOrderParam($options = [])
 * @method UnassociateHaVip unassociateHaVip($options = [])
 * @method UnassociateEipAddress unassociateEipAddress($options = [])
 * @method TerminateVirtualBorderRouter terminateVirtualBorderRouter($options = [])
 * @method TerminatePhysicalConnection terminatePhysicalConnection($options = [])
 * @method StaticEipNotifyPaid staticEipNotifyPaid($options = [])
 * @method StaticEipFillParams staticEipFillParams($options = [])
 * @method RemoveBandwidthPackageIps removeBandwidthPackageIps($options = [])
 * @method ReleaseEipAddress releaseEipAddress($options = [])
 * @method RecoverVirtualBorderRouter recoverVirtualBorderRouter($options = [])
 * @method ModifyVSwitchAttribute modifyVSwitchAttribute($options = [])
 * @method ModifyVRouterAttribute modifyVRouterAttribute($options = [])
 * @method ModifyVpcAttribute modifyVpcAttribute($options = [])
 * @method ModifyVirtualBorderRouterAttribute modifyVirtualBorderRouterAttribute($options = [])
 * @method ModifyRouterInterfaceSpec modifyRouterInterfaceSpec($options = [])
 * @method ModifyRouterInterfaceAttribute modifyRouterInterfaceAttribute($options = [])
 * @method ModifyPhysicalConnectionAttribute modifyPhysicalConnectionAttribute($options = [])
 * @method ModifyHaVipAttribute modifyHaVipAttribute($options = [])
 * @method ModifyForwardEntry modifyForwardEntry($options = [])
 * @method ModifyEipAddressAttribute modifyEipAddressAttribute($options = [])
 * @method ModifyBandwidthPackageSpec modifyBandwidthPackageSpec($options = [])
 * @method EnablePhysicalConnection enablePhysicalConnection($options = [])
 * @method EipNotifyPaid eipNotifyPaid($options = [])
 * @method EipFillProduct eipFillProduct($options = [])
 * @method EipFillParams eipFillParams($options = [])
 * @method DescribeZones describeZones($options = [])
 * @method DescribeVSwitches describeVSwitches($options = [])
 * @method DescribeVRouters describeVRouters($options = [])
 * @method DescribeVpcs describeVpcs($options = [])
 * @method DescribeVirtualBorderRoutersForPhysicalConnection describeVirtualBorderRoutersForPhysicalConnection($options = [])
 * @method DescribeVirtualBorderRouters describeVirtualBorderRouters($options = [])
 * @method DescribeRouteTables describeRouteTables($options = [])
 * @method DescribeRouterInterfaces describeRouterInterfaces($options = [])
 * @method DescribeRegions describeRegions($options = [])
 * @method DescribePhysicalConnections describePhysicalConnections($options = [])
 * @method DescribeNewProjectEipMonitorData describeNewProjectEipMonitorData($options = [])
 * @method DescribeNatGateways describeNatGateways($options = [])
 * @method DescribeHaVips describeHaVips($options = [])
 * @method DescribeForwardTableEntries describeForwardTableEntries($options = [])
 * @method DescribeForwardTables describeForwardTables($options = [])
 * @method DescribeEipMonitorData describeEipMonitorData($options = [])
 * @method DescribeEipAddresses describeEipAddresses($options = [])
 * @method DescribeBandwidthPackages describeBandwidthPackages($options = [])
 * @method DescribeAccessPoints describeAccessPoints($options = [])
 * @method DeleteVSwitch deleteVSwitch($options = [])
 * @method DeleteVpc deleteVpc($options = [])
 * @method DeleteVirtualBorderRouter deleteVirtualBorderRouter($options = [])
 * @method DeleteRouterInterface deleteRouterInterface($options = [])
 * @method DeleteRouteEntry deleteRouteEntry($options = [])
 * @method DeletePhysicalConnection deletePhysicalConnection($options = [])
 * @method DeleteNatGateway deleteNatGateway($options = [])
 * @method DeleteHaVip deleteHaVip($options = [])
 * @method DeleteForwardEntry deleteForwardEntry($options = [])
 * @method DeleteBandwidthPackage deleteBandwidthPackage($options = [])
 * @method DeactivateRouterInterface deactivateRouterInterface($options = [])
 * @method CreateVSwitch createVSwitch($options = [])
 * @method CreateVpc createVpc($options = [])
 * @method CreateVirtualBorderRouter createVirtualBorderRouter($options = [])
 * @method CreateRouterInterface createRouterInterface($options = [])
 * @method CreateRouteEntry createRouteEntry($options = [])
 * @method CreatePhysicalConnection createPhysicalConnection($options = [])
 * @method CreateNatGateway createNatGateway($options = [])
 * @method CreateHaVip createHaVip($options = [])
 * @method CreateForwardEntry createForwardEntry($options = [])
 * @method ConnectRouterInterface connectRouterInterface($options = [])
 * @method CancelPhysicalConnection cancelPhysicalConnection($options = [])
 * @method AssociateHaVip associateHaVip($options = [])
 * @method AssociateEipAddress associateEipAddress($options = [])
 * @method AllocateEipAddress allocateEipAddress($options = [])
 * @method AddBandwidthPackageIps addBandwidthPackageIps($options = [])
 * @method ActivateRouterInterface activateRouterInterface($options = [])
 */
class V20160428
{
    use ApiResolverTrait;
}

/**
 * @method string getRouteEntryName
 * @method self withRouteEntryName(string $routeEntryName)
 * @method string getRouteEntryId
 * @method self withRouteEntryId(string $routeEntryId)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ModifyRouteEntry extends Rpc
{
    use R;
}

/**
 * @method string getRouteTableId
 * @method self withRouteTableId(string $routeTableId)
 * @method string getRouteEntryId
 * @method self withRouteEntryId(string $routeEntryId)
 * @method string getDestinationCidrBlock
 * @method self withDestinationCidrBlock(string $destinationCidrBlock)
 * @method string getRouteEntryName
 * @method self withRouteEntryName(string $routeEntryName)
 * @method string getIpVersion
 * @method self withIpVersion(string $ipVersion)
 * @method string getRouteEntryType
 * @method self withRouteEntryType(string $routeEntryType)
 * @method string getNextHopId
 * @method self withNextHopId(string $nextHopId)
 * @method string getNextHopType
 * @method self withNextHopType(string $nextHopType)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeRouteEntryList extends Rpc
{
    use R;
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getAclName
 * @method self withAclName(string $aclName)
 */
class CreateIPv6TranslatorAclList extends Rpc
{
    use R;
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getAclId
 * @method self withAclId(string $aclId)
 */
class DeleteIPv6TranslatorAclList extends Rpc
{
    use R;
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getAclId
 * @method self withAclId(string $aclId)
 * @method string getAclEntryIp
 * @method self withAclEntryIp(string $aclEntryIp)
 * @method string getAclEntryComment
 * @method self withAclEntryComment(string $aclEntryComment)
 */
class AddIPv6TranslatorAclListEntry extends Rpc
{
    use R;
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getAclId
 * @method self withAclId(string $aclId)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getAclName
 * @method self withAclName(string $aclName)
 */
class DescribeIPv6TranslatorAclLists extends Rpc
{
    use R;
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getAclId
 * @method self withAclId(string $aclId)
 * @method string getAclName
 * @method self withAclName(string $aclName)
 */
class ModifyIPv6TranslatorAclAttribute extends Rpc
{
    use R;
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getAclId
 * @method self withAclId(string $aclId)
 * @method string getAclEntryId
 * @method self withAclEntryId(string $aclEntryId)
 */
class RemoveIPv6TranslatorAclListEntry extends Rpc
{
    use R;
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getAclId
 * @method self withAclId(string $aclId)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeIPv6TranslatorAclListAttributes extends Rpc
{
    use R;
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getAclId
 * @method self withAclId(string $aclId)
 * @method string getAclEntryId
 * @method self withAclEntryId(string $aclEntryId)
 * @method string getAclEntryComment
 * @method self withAclEntryComment(string $aclEntryComment)
 */
class ModifyIPv6TranslatorAclListEntry extends Rpc
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
 * @method string getBandwidth
 * @method self withBandwidth(string $bandwidth)
 * @method string getKbpsBandwidth
 * @method self withKbpsBandwidth(string $kbpsBandwidth)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceBid
 * @method self withResourceBid(string $resourceBid)
 * @method int getResourceUid
 * @method self withResourceUid(int $resourceUid)
 */
class InnerVpcDescribeCrossBorderUsers extends Rpc
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
 * @method string getBandwidth
 * @method self withBandwidth(string $bandwidth)
 * @method string getKbpsBandwidth
 * @method self withKbpsBandwidth(string $kbpsBandwidth)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceBid
 * @method self withResourceBid(string $resourceBid)
 * @method int getResourceUid
 * @method self withResourceUid(int $resourceUid)
 */
class InnerVpcDescribeCrossBorderRouterInterface extends Rpc
{
    use R;
}

/**
 * @method string getConfirm
 * @method self withConfirm(string $confirm)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getBandwidth
 * @method self withBandwidth(string $bandwidth)
 * @method string getKbpsBandwidth
 * @method self withKbpsBandwidth(string $kbpsBandwidth)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceBid
 * @method self withResourceBid(string $resourceBid)
 * @method int getResourceUid
 * @method self withResourceUid(int $resourceUid)
 */
class InnerVpcConfirmCrossBorderRouterInterface extends Rpc
{
    use R;
}

/**
 * @method string getTagOwnerBid
 * @method self withTagOwnerBid(string $tagOwnerBid)
 * @method int getTagOwnerUid
 * @method self withTagOwnerUid(int $tagOwnerUid)
 * @method string getResourceType
 * @method self withResourceType(string $resourceType)
 * @method array getResourceId
 * @method self withResourceId(array $resourceId)
 * @method array getTagKey
 * @method self withTagKey(array $tagKey)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class UnTagResources extends Rpc
{
    use R;
}

/**
 * @method string getScope
 * @method self withScope(string $scope)
 * @method string getTagOwnerBid
 * @method self withTagOwnerBid(string $tagOwnerBid)
 * @method int getTagOwnerUid
 * @method self withTagOwnerUid(int $tagOwnerUid)
 * @method string getResourceType
 * @method self withResourceType(string $resourceType)
 * @method array getResourceId
 * @method self withResourceId(array $resourceId)
 * @method array getTag
 * @method self withTag(array $tag)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class TagResources extends Rpc
{
    use R;
}

/**
 * @method string getScope
 * @method self withScope(string $scope)
 * @method string getTagOwnerBid
 * @method self withTagOwnerBid(string $tagOwnerBid)
 * @method int getTagOwnerUid
 * @method self withTagOwnerUid(int $tagOwnerUid)
 * @method string getResourceType
 * @method self withResourceType(string $resourceType)
 * @method array getResourceId
 * @method self withResourceId(array $resourceId)
 * @method array getTag
 * @method self withTag(array $tag)
 * @method string getNextToken
 * @method self withNextToken(string $nextToken)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ListTagResources extends Rpc
{
    use R;
}

/**
 * @method string getIpv6AddressId
 * @method self withIpv6AddressId(string $ipv6AddressId)
 * @method string getIpv6InternetBandwidthId
 * @method self withIpv6InternetBandwidthId(string $ipv6InternetBandwidthId)
 * @method int getBandwidth
 * @method self withBandwidth(int $bandwidth)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ModifyIpv6InternetBandwidth extends Rpc
{
    use R;
}

/**
 * @method string getIpv6GatewayId
 * @method self withIpv6GatewayId(string $ipv6GatewayId)
 * @method string getSpec
 * @method self withSpec(string $spec)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ModifyIpv6GatewaySpec extends Rpc
{
    use R;
}

/**
 * @method string getIpv6GatewayId
 * @method self withIpv6GatewayId(string $ipv6GatewayId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ModifyIpv6GatewayAttribute extends Rpc
{
    use R;
}

/**
 * @method string getIpv6AddressId
 * @method self withIpv6AddressId(string $ipv6AddressId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ModifyIpv6AddressAttribute extends Rpc
{
    use R;
}

/**
 * @method string getIpv6GatewayId
 * @method self withIpv6GatewayId(string $ipv6GatewayId)
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 * @method string getName
 * @method self withName(string $name)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeIpv6Gateways extends Rpc
{
    use R;
}

/**
 * @method string getIpv6GatewayId
 * @method self withIpv6GatewayId(string $ipv6GatewayId)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeIpv6GatewayAttribute extends Rpc
{
    use R;
}

/**
 * @method string getIpv6GatewayId
 * @method self withIpv6GatewayId(string $ipv6GatewayId)
 * @method string getIpv6EgressOnlyRuleId
 * @method self withIpv6EgressOnlyRuleId(string $ipv6EgressOnlyRuleId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getInstanceType
 * @method self withInstanceType(string $instanceType)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeIpv6EgressOnlyRules extends Rpc
{
    use R;
}

/**
 * @method string getIpv6AddressId
 * @method self withIpv6AddressId(string $ipv6AddressId)
 * @method string getIpv6Address
 * @method self withIpv6Address(string $ipv6Address)
 * @method string getName
 * @method self withName(string $name)
 * @method string getAssociatedInstanceId
 * @method self withAssociatedInstanceId(string $associatedInstanceId)
 * @method string getAssociatedInstanceType
 * @method self withAssociatedInstanceType(string $associatedInstanceType)
 * @method string getNetworkType
 * @method self withNetworkType(string $networkType)
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 * @method string getVSwitchId
 * @method self withVSwitchId(string $vSwitchId)
 * @method string getIpv6InternetBandwidthId
 * @method self withIpv6InternetBandwidthId(string $ipv6InternetBandwidthId)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeIpv6Addresses extends Rpc
{
    use R;
}

/**
 * @method string getIpv6AddressId
 * @method self withIpv6AddressId(string $ipv6AddressId)
 * @method string getIpv6InternetBandwidthId
 * @method self withIpv6InternetBandwidthId(string $ipv6InternetBandwidthId)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DeleteIpv6InternetBandwidth extends Rpc
{
    use R;
}

/**
 * @method string getIpv6GatewayId
 * @method self withIpv6GatewayId(string $ipv6GatewayId)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DeleteIpv6Gateway extends Rpc
{
    use R;
}

/**
 * @method string getIpv6EgressOnlyRuleId
 * @method self withIpv6EgressOnlyRuleId(string $ipv6EgressOnlyRuleId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DeleteIpv6EgressOnlyRule extends Rpc
{
    use R;
}

/**
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 * @method string getSpec
 * @method self withSpec(string $spec)
 * @method string getName
 * @method self withName(string $name)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class CreateIpv6Gateway extends Rpc
{
    use R;
}

/**
 * @method string getIpv6GatewayId
 * @method self withIpv6GatewayId(string $ipv6GatewayId)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getInstanceType
 * @method self withInstanceType(string $instanceType)
 * @method string getName
 * @method self withName(string $name)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class CreateIpv6EgressOnlyRule extends Rpc
{
    use R;
}

/**
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class AllocateVpcIpv6Cidr extends Rpc
{
    use R;
}

/**
 * @method string getIpv6GatewayId
 * @method self withIpv6GatewayId(string $ipv6GatewayId)
 * @method string getIpv6AddressId
 * @method self withIpv6AddressId(string $ipv6AddressId)
 * @method string getInternetChargeType
 * @method self withInternetChargeType(string $internetChargeType)
 * @method Integer getBandwidth
 * @method self withBandwidth(Integer $bandwidth)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class AllocateIpv6InternetBandwidth extends Rpc
{
    use R;
}

/**
 * @method string getPhysicalConnectionId
 * @method self withPhysicalConnectionId(string $physicalConnectionId)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribePhysicalConnectionOrder extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getMode
 * @method self withMode(string $mode)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 */
class ModifyEipForwardMode extends Rpc
{
    use R;
}

/**
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getMonth
 * @method self withMonth(string $month)
 */
class DescribeTrafficConsumeByMonth extends Rpc
{
    use R;
}

/**
 * @method string getRouterInterfaceId
 * @method self withRouterInterfaceId(string $routerInterfaceId)
 * @method bool getForce
 * @method self withForce(bool $force)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DeleteExpressConnect extends Rpc
{
    use R;
}

/**
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getResourceBid
 * @method self withResourceBid(string $resourceBid)
 * @method int getResourceUid
 * @method self withResourceUid(int $resourceUid)
 * @method string getResourceType
 * @method self withResourceType(string $resourceType)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getDay
 * @method self withDay(string $day)
 */
class Describe95Traffic extends Rpc
{
    use R;
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getName
 * @method self withName(string $name)
 * @method string getSpec
 * @method self withSpec(string $spec)
 * @method string getPayType
 * @method self withPayType(string $payType)
 * @method string getPricingCycle
 * @method self withPricingCycle(string $pricingCycle)
 * @method Integer getDuration
 * @method self withDuration(Integer $duration)
 * @method bool getAutoPay
 * @method self withAutoPay(bool $autoPay)
 * @method Integer getBandwidth
 * @method self withBandwidth(Integer $bandwidth)
 */
class CreateIPv6Translator extends Rpc
{
    use R;
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getIpv6TranslatorId
 * @method self withIpv6TranslatorId(string $ipv6TranslatorId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getSpec
 * @method self withSpec(string $spec)
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method string getAllocateIpv6Addr
 * @method self withAllocateIpv6Addr(string $allocateIpv6Addr)
 * @method string getAllocateIpv4Addr
 * @method self withAllocateIpv4Addr(string $allocateIpv4Addr)
 * @method string getPayType
 * @method self withPayType(string $payType)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getBusinessStatus
 * @method self withBusinessStatus(string $businessStatus)
 */
class DescribeIPv6Translators extends Rpc
{
    use R;
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getIpv6TranslatorId
 * @method self withIpv6TranslatorId(string $ipv6TranslatorId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getDescription
 * @method self withDescription(string $description)
 */
class ModifyIPv6TranslatorAttribute extends Rpc
{
    use R;
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getIpv6TranslatorId
 * @method self withIpv6TranslatorId(string $ipv6TranslatorId)
 * @method Integer getBandwidth
 * @method self withBandwidth(Integer $bandwidth)
 * @method bool getAutoPay
 * @method self withAutoPay(bool $autoPay)
 */
class ModifyIPv6TranslatorBandwidth extends Rpc
{
    use R;
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getIpv6TranslatorId
 * @method self withIpv6TranslatorId(string $ipv6TranslatorId)
 * @method string getEntryName
 * @method self withEntryName(string $entryName)
 * @method string getEntryDescription
 * @method self withEntryDescription(string $entryDescription)
 * @method Integer getAllocateIpv6Port
 * @method self withAllocateIpv6Port(Integer $allocateIpv6Port)
 * @method string getBackendIpv4Addr
 * @method self withBackendIpv4Addr(string $backendIpv4Addr)
 * @method Integer getBackendIpv4Port
 * @method self withBackendIpv4Port(Integer $backendIpv4Port)
 * @method string getTransProtocol
 * @method self withTransProtocol(string $transProtocol)
 * @method Integer getEntryBandwidth
 * @method self withEntryBandwidth(Integer $entryBandwidth)
 * @method string getAclStatus
 * @method self withAclStatus(string $aclStatus)
 * @method string getAclType
 * @method self withAclType(string $aclType)
 * @method string getAclId
 * @method self withAclId(string $aclId)
 */
class CreateIPv6TranslatorEntry extends Rpc
{
    use R;
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getIpv6TranslatorEntryId
 * @method self withIpv6TranslatorEntryId(string $ipv6TranslatorEntryId)
 * @method string getIpv6TranslatorId
 * @method self withIpv6TranslatorId(string $ipv6TranslatorId)
 */
class DeleteIPv6TranslatorEntry extends Rpc
{
    use R;
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getIpv6TranslatorEntryId
 * @method self withIpv6TranslatorEntryId(string $ipv6TranslatorEntryId)
 * @method string getEntryName
 * @method self withEntryName(string $entryName)
 * @method string getEntryDescription
 * @method self withEntryDescription(string $entryDescription)
 * @method Integer getAllocateIpv6Port
 * @method self withAllocateIpv6Port(Integer $allocateIpv6Port)
 * @method string getBackendIpv4Addr
 * @method self withBackendIpv4Addr(string $backendIpv4Addr)
 * @method Integer getBackendIpv4Port
 * @method self withBackendIpv4Port(Integer $backendIpv4Port)
 * @method string getTransProtocol
 * @method self withTransProtocol(string $transProtocol)
 * @method Integer getEntryBandwidth
 * @method self withEntryBandwidth(Integer $entryBandwidth)
 * @method string getAclStatus
 * @method self withAclStatus(string $aclStatus)
 * @method string getAclType
 * @method self withAclType(string $aclType)
 * @method string getAclId
 * @method self withAclId(string $aclId)
 */
class ModifyIPv6TranslatorEntry extends Rpc
{
    use R;
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getIpv6TranslatorId
 * @method self withIpv6TranslatorId(string $ipv6TranslatorId)
 * @method string getIpv6TranslatorEntryId
 * @method self withIpv6TranslatorEntryId(string $ipv6TranslatorEntryId)
 * @method string getEntryName
 * @method self withEntryName(string $entryName)
 * @method string getAllocateIpv6Addr
 * @method self withAllocateIpv6Addr(string $allocateIpv6Addr)
 * @method Integer getAllocateIpv6Port
 * @method self withAllocateIpv6Port(Integer $allocateIpv6Port)
 * @method string getBackendIpv4Addr
 * @method self withBackendIpv4Addr(string $backendIpv4Addr)
 * @method Integer getBackendIpv4Port
 * @method self withBackendIpv4Port(Integer $backendIpv4Port)
 * @method string getTransProtocol
 * @method self withTransProtocol(string $transProtocol)
 * @method string getAclStatus
 * @method self withAclStatus(string $aclStatus)
 * @method string getAclType
 * @method self withAclType(string $aclType)
 * @method string getAclId
 * @method self withAclId(string $aclId)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 */
class DescribeIPv6TranslatorEntries extends Rpc
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
 * @method string getdata
 * @method self withdata(string $data)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 */
class IPv6TranslatorFillParams extends Rpc
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
 * @method string getdata
 * @method self withdata(string $data)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 */
class IPv6TranslatorFillRestrictions extends Rpc
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
 * @method string getdata
 * @method self withdata(string $data)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 */
class IPv6TranslatorPrepayNotifyPaid extends Rpc
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
 * @method string getdata
 * @method self withdata(string $data)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 */
class IPv6TranslatorValidateOrder extends Rpc
{
    use R;
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getIpv6TranslatorId
 * @method self withIpv6TranslatorId(string $ipv6TranslatorId)
 */
class DeleteIPv6Translator extends Rpc
{
    use R;
}

/**
 * @method string getISP
 * @method self withISP(string $iSP)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getIp
 * @method self withIp(string $ip)
 * @method string getBandwidth
 * @method self withBandwidth(string $bandwidth)
 * @method Integer getPeriod
 * @method self withPeriod(Integer $period)
 * @method string getNetmode
 * @method self withNetmode(string $netmode)
 * @method bool getAutoPay
 * @method self withAutoPay(bool $autoPay)
 * @method string getPricingCycle
 * @method self withPricingCycle(string $pricingCycle)
 * @method string getInstanceChargeType
 * @method self withInstanceChargeType(string $instanceChargeType)
 * @method string getInternetChargeType
 * @method self withInternetChargeType(string $internetChargeType)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 */
class ForceAllocateEipAddress extends Rpc
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
 * @method string getIpAddress
 * @method self withIpAddress(string $ipAddress)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getBandwidth
 * @method self withBandwidth(string $bandwidth)
 * @method Integer getPeriod
 * @method self withPeriod(Integer $period)
 * @method string getISP
 * @method self withISP(string $iSP)
 * @method string getNetmode
 * @method self withNetmode(string $netmode)
 * @method bool getAutoPay
 * @method self withAutoPay(bool $autoPay)
 * @method string getPricingCycle
 * @method self withPricingCycle(string $pricingCycle)
 * @method string getInstanceChargeType
 * @method self withInstanceChargeType(string $instanceChargeType)
 * @method string getInternetChargeType
 * @method self withInternetChargeType(string $internetChargeType)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 */
class AllocateEipAddressPro extends Rpc
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
 * @method string getLogProject
 * @method self withLogProject(string $logProject)
 * @method string getLogStore
 * @method self withLogStore(string $logStore)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getInstanceType
 * @method self withInstanceType(string $instanceType)
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class SetHighDefinitionMonitorLogStatus extends Rpc
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
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getInstanceType
 * @method self withInstanceType(string $instanceType)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeHighDefinitionMonitorLogAttribute extends Rpc
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
 * @method string getFlowLogId
 * @method self withFlowLogId(string $flowLogId)
 * @method string getFlowLogName
 * @method self withFlowLogName(string $flowLogName)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ModifyFlowLogAttribute extends Rpc
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
 * @method string getFlowLogName
 * @method self withFlowLogName(string $flowLogName)
 * @method string getFlowLogId
 * @method self withFlowLogId(string $flowLogId)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getResourceType
 * @method self withResourceType(string $resourceType)
 * @method string getResourceId
 * @method self withResourceId(string $resourceId)
 * @method string getTrafficType
 * @method self withTrafficType(string $trafficType)
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getLogStoreName
 * @method self withLogStoreName(string $logStoreName)
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeFlowLogs extends Rpc
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
 * @method string getFlowLogId
 * @method self withFlowLogId(string $flowLogId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DeleteFlowLog extends Rpc
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
 * @method string getFlowLogId
 * @method self withFlowLogId(string $flowLogId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DeactiveFlowLog extends Rpc
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
 * @method string getFlowLogName
 * @method self withFlowLogName(string $flowLogName)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getResourceType
 * @method self withResourceType(string $resourceType)
 * @method string getResourceId
 * @method self withResourceId(string $resourceId)
 * @method string getTrafficType
 * @method self withTrafficType(string $trafficType)
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getLogStoreName
 * @method self withLogStoreName(string $logStoreName)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class CreateFlowLog extends Rpc
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
 * @method string getFlowLogId
 * @method self withFlowLogId(string $flowLogId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ActiveFlowLog extends Rpc
{
    use R;
}

/**
 * @method string getRouteTableId
 * @method self withRouteTableId(string $routeTableId)
 * @method string getVSwitchId
 * @method self withVSwitchId(string $vSwitchId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class UnassociateRouteTable extends Rpc
{
    use R;
}

/**
 * @method string getRouteTableId
 * @method self withRouteTableId(string $routeTableId)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DeleteRouteTable extends Rpc
{
    use R;
}

/**
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 * @method string getRouteTableName
 * @method self withRouteTableName(string $routeTableName)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class CreateRouteTable extends Rpc
{
    use R;
}

/**
 * @method string getRouteTableId
 * @method self withRouteTableId(string $routeTableId)
 * @method string getVSwitchId
 * @method self withVSwitchId(string $vSwitchId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class AssociateRouteTable extends Rpc
{
    use R;
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 * @method string getInstanceChargeType
 * @method self withInstanceChargeType(string $instanceChargeType)
 * @method Integer getPeriod
 * @method self withPeriod(Integer $period)
 * @method bool getAutoPay
 * @method self withAutoPay(bool $autoPay)
 * @method Integer getBandwidth
 * @method self withBandwidth(Integer $bandwidth)
 * @method bool getEnableIpsec
 * @method self withEnableIpsec(bool $enableIpsec)
 * @method bool getEnableSsl
 * @method self withEnableSsl(bool $enableSsl)
 * @method Integer getSslConnections
 * @method self withSslConnections(Integer $sslConnections)
 */
class CreateVpnGateway extends Rpc
{
    use R;
}

/**
 * @method string getProduct
 * @method self withProduct(string $product)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 */
class DescribeNetworkQuotas extends Rpc
{
    use R;
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getVpnConnectionId
 * @method self withVpnConnectionId(string $vpnConnectionId)
 * @method Integer getFrom
 * @method self withFrom(Integer $from)
 * @method Integer getTo
 * @method self withTo(Integer $to)
 * @method Integer getMinutePeriod
 * @method self withMinutePeriod(Integer $minutePeriod)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeVpnConnectionLogs extends Rpc
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
 * @method string getResourceId
 * @method self withResourceId(string $resourceId)
 * @method string getResourceType
 * @method self withResourceType(string $resourceType)
 * @method string getNewResourceGroupId
 * @method self withNewResourceGroupId(string $newResourceGroupId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class MoveResourceGroup extends Rpc
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
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getInstanceType
 * @method self withInstanceType(string $instanceType)
 * @method string getCenId
 * @method self withCenId(string $cenId)
 * @method int getCenOwnerId
 * @method self withCenOwnerId(int $cenOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class RevokeInstanceFromCen extends Rpc
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
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getInstanceType
 * @method self withInstanceType(string $instanceType)
 * @method string getCenId
 * @method self withCenId(string $cenId)
 * @method int getCenOwnerId
 * @method self withCenOwnerId(int $cenOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class GrantInstanceToCen extends Rpc
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
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getInstanceType
 * @method self withInstanceType(string $instanceType)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeGrantRulesToCen extends Rpc
{
    use R;
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getSslVpnServerId
 * @method self withSslVpnServerId(string $sslVpnServerId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getClientIpPool
 * @method self withClientIpPool(string $clientIpPool)
 * @method string getLocalSubnet
 * @method self withLocalSubnet(string $localSubnet)
 * @method string getProto
 * @method self withProto(string $proto)
 * @method string getCipher
 * @method self withCipher(string $cipher)
 * @method Integer getPort
 * @method self withPort(Integer $port)
 * @method bool getCompress
 * @method self withCompress(bool $compress)
 */
class ModifySslVpnServer extends Rpc
{
    use R;
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getSslVpnClientCertId
 * @method self withSslVpnClientCertId(string $sslVpnClientCertId)
 * @method string getName
 * @method self withName(string $name)
 */
class ModifySslVpnClientCert extends Rpc
{
    use R;
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getSslVpnServerId
 * @method self withSslVpnServerId(string $sslVpnServerId)
 * @method string getVpnGatewayId
 * @method self withVpnGatewayId(string $vpnGatewayId)
 * @method string getName
 * @method self withName(string $name)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeSslVpnServers extends Rpc
{
    use R;
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getSslVpnServerId
 * @method self withSslVpnServerId(string $sslVpnServerId)
 */
class DescribeSslVpnServerCaCert extends Rpc
{
    use R;
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getSslVpnServerId
 * @method self withSslVpnServerId(string $sslVpnServerId)
 * @method string getSslVpnClientCertId
 * @method self withSslVpnClientCertId(string $sslVpnClientCertId)
 */
class DescribeSslVpnClientConfig extends Rpc
{
    use R;
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getSslVpnServerId
 * @method self withSslVpnServerId(string $sslVpnServerId)
 * @method string getSslVpnClientCertId
 * @method self withSslVpnClientCertId(string $sslVpnClientCertId)
 * @method string getName
 * @method self withName(string $name)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeSslVpnClientCerts extends Rpc
{
    use R;
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getSslVpnClientCertId
 * @method self withSslVpnClientCertId(string $sslVpnClientCertId)
 */
class DescribeSslVpnClientCert extends Rpc
{
    use R;
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getSslVpnServerId
 * @method self withSslVpnServerId(string $sslVpnServerId)
 */
class DeleteSslVpnServer extends Rpc
{
    use R;
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getSslVpnClientCertId
 * @method self withSslVpnClientCertId(string $sslVpnClientCertId)
 */
class DeleteSslVpnClientCert extends Rpc
{
    use R;
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getVpnGatewayId
 * @method self withVpnGatewayId(string $vpnGatewayId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getClientIpPool
 * @method self withClientIpPool(string $clientIpPool)
 * @method string getLocalSubnet
 * @method self withLocalSubnet(string $localSubnet)
 * @method string getProto
 * @method self withProto(string $proto)
 * @method string getCipher
 * @method self withCipher(string $cipher)
 * @method Integer getPort
 * @method self withPort(Integer $port)
 * @method bool getCompress
 * @method self withCompress(bool $compress)
 */
class CreateSslVpnServer extends Rpc
{
    use R;
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getSslVpnServerId
 * @method self withSslVpnServerId(string $sslVpnServerId)
 * @method string getName
 * @method self withName(string $name)
 */
class CreateSslVpnClientCert extends Rpc
{
    use R;
}

/**
 * @method string getBandwidthPackageId
 * @method self withBandwidthPackageId(string $bandwidthPackageId)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getISP
 * @method self withISP(string $iSP)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeEipAddressesByBwp extends Rpc
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
 * @method string getGlobalAccelerationInstanceId
 * @method self withGlobalAccelerationInstanceId(string $globalAccelerationInstanceId)
 * @method string getIpInstanceId
 * @method self withIpInstanceId(string $ipInstanceId)
 */
class RemoveGlobalAccelerationInstanceIp extends Rpc
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
 * @method string getGlobalAccelerationInstanceId
 * @method self withGlobalAccelerationInstanceId(string $globalAccelerationInstanceId)
 * @method string getIpInstanceId
 * @method self withIpInstanceId(string $ipInstanceId)
 */
class AddGlobalAccelerationInstanceIp extends Rpc
{
    use R;
}

/**
 * @method string getMasterInstanceId
 * @method self withMasterInstanceId(string $masterInstanceId)
 * @method string getHaVipId
 * @method self withHaVipId(string $haVipId)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceBid
 * @method self withResourceBid(string $resourceBid)
 * @method int getResourceUid
 * @method self withResourceUid(int $resourceUid)
 */
class SetHaVipMasterInstance extends Rpc
{
    use R;
}

/**
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getBandwidth
 * @method self withBandwidth(string $bandwidth)
 * @method string getKbpsBandwidth
 * @method self withKbpsBandwidth(string $kbpsBandwidth)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceBid
 * @method self withResourceBid(string $resourceBid)
 * @method int getResourceUid
 * @method self withResourceUid(int $resourceUid)
 */
class DescribePublicIpAddress extends Rpc
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
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getInstanceType
 * @method self withInstanceType(string $instanceType)
 * @method string getCbnInstanceId
 * @method self withCbnInstanceId(string $cbnInstanceId)
 * @method int getCbnUid
 * @method self withCbnUid(int $cbnUid)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class RevokeInstanceFromCbn extends Rpc
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
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getInstanceType
 * @method self withInstanceType(string $instanceType)
 * @method string getCbnInstanceId
 * @method self withCbnInstanceId(string $cbnInstanceId)
 * @method string getCbnUid
 * @method self withCbnUid(string $cbnUid)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class GrantInstanceToCbn extends Rpc
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
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getInstanceType
 * @method self withInstanceType(string $instanceType)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeGrantRulesToCbn extends Rpc
{
    use R;
}

/**
 * @method string getRouterType
 * @method self withRouterType(string $routerType)
 * @method string getRouterId
 * @method self withRouterId(string $routerId)
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 * @method string getRouteTableId
 * @method self withRouteTableId(string $routeTableId)
 * @method string getRouteTableName
 * @method self withRouteTableName(string $routeTableName)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 * @method array getTag
 * @method self withTag(array $tag)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeRouteTableList extends Rpc
{
    use R;
}

/**
 * @method string getRouteTableId
 * @method self withRouteTableId(string $routeTableId)
 * @method string getRouteTableName
 * @method self withRouteTableName(string $routeTableName)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getBandwidth
 * @method self withBandwidth(string $bandwidth)
 * @method string getKbpsBandwidth
 * @method self withKbpsBandwidth(string $kbpsBandwidth)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceBid
 * @method self withResourceBid(string $resourceBid)
 * @method int getResourceUid
 * @method self withResourceUid(int $resourceUid)
 */
class ModifyRouteTableAttributes extends Rpc
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
 * @method string getRouterId
 * @method self withRouterId(string $routerId)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeBgpNetworks extends Rpc
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
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeRouterInterfacesForGlobal extends Rpc
{
    use R;
}

/**
 * @method string getBandwidthPackageId
 * @method self withBandwidthPackageId(string $bandwidthPackageId)
 * @method string getPayType
 * @method self withPayType(string $payType)
 * @method string getPricingCycle
 * @method self withPricingCycle(string $pricingCycle)
 * @method Integer getDuration
 * @method self withDuration(Integer $duration)
 * @method bool getAutoPay
 * @method self withAutoPay(bool $autoPay)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getBandwidth
 * @method self withBandwidth(string $bandwidth)
 * @method string getKbpsBandwidth
 * @method self withKbpsBandwidth(string $kbpsBandwidth)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceBid
 * @method self withResourceBid(string $resourceBid)
 * @method int getResourceUid
 * @method self withResourceUid(int $resourceUid)
 */
class ModifyCommonBandwidthPackagePayType extends Rpc
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
 * @method string getGlobalAccelerationInstanceId
 * @method self withGlobalAccelerationInstanceId(string $globalAccelerationInstanceId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceType
 * @method self withInstanceType(string $instanceType)
 */
class UnassociateGlobalAccelerationInstance extends Rpc
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
 * @method string getGlobalAccelerationInstanceId
 * @method self withGlobalAccelerationInstanceId(string $globalAccelerationInstanceId)
 * @method string getBandwidth
 * @method self withBandwidth(string $bandwidth)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ModifyGlobalAccelerationInstanceSpec extends Rpc
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
 * @method string getGlobalAccelerationInstanceId
 * @method self withGlobalAccelerationInstanceId(string $globalAccelerationInstanceId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ModifyGlobalAccelerationInstanceAttributes extends Rpc
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
 * @method string getServerId
 * @method self withServerId(string $serverId)
 * @method string getServerType
 * @method self withServerType(string $serverType)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeServerRelatedGlobalAccelerationInstances extends Rpc
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
 * @method bool getIncludeReservationData
 * @method self withIncludeReservationData(bool $includeReservationData)
 * @method string getGlobalAccelerationInstanceId
 * @method self withGlobalAccelerationInstanceId(string $globalAccelerationInstanceId)
 * @method string getIpAddress
 * @method self withIpAddress(string $ipAddress)
 * @method string getName
 * @method self withName(string $name)
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method string getBandwidthType
 * @method self withBandwidthType(string $bandwidthType)
 * @method string getServiceLocation
 * @method self withServiceLocation(string $serviceLocation)
 * @method string getServerId
 * @method self withServerId(string $serverId)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeGlobalAccelerationInstances extends Rpc
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
 * @method string getGlobalAccelerationInstanceId
 * @method self withGlobalAccelerationInstanceId(string $globalAccelerationInstanceId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DeleteGlobalAccelerationInstance extends Rpc
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
 * @method string getServiceLocation
 * @method self withServiceLocation(string $serviceLocation)
 * @method string getBandwidth
 * @method self withBandwidth(string $bandwidth)
 * @method string getInternetChargeType
 * @method self withInternetChargeType(string $internetChargeType)
 * @method string getBandwidthType
 * @method self withBandwidthType(string $bandwidthType)
 * @method string getName
 * @method self withName(string $name)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 */
class CreateGlobalAccelerationInstance extends Rpc
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
 * @method string getGlobalAccelerationInstanceId
 * @method self withGlobalAccelerationInstanceId(string $globalAccelerationInstanceId)
 * @method string getBackendServerId
 * @method self withBackendServerId(string $backendServerId)
 * @method string getBackendServerRegionId
 * @method self withBackendServerRegionId(string $backendServerRegionId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getBackendServerType
 * @method self withBackendServerType(string $backendServerType)
 */
class AssociateGlobalAccelerationInstance extends Rpc
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
 * @method string getVSwitchId
 * @method self withVSwitchId(string $vSwitchId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeVSwitchAttributes extends Rpc
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
 * @method string getBandwidthPackageId
 * @method self withBandwidthPackageId(string $bandwidthPackageId)
 * @method string getIpInstanceId
 * @method self withIpInstanceId(string $ipInstanceId)
 */
class RemoveCommonBandwidthPackageIp extends Rpc
{
    use R;
}

/**
 * @method string getdata
 * @method self withdata(string $data)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class NotifyProducePreCommonBandwidthPackage extends Rpc
{
    use R;
}

/**
 * @method string getdata
 * @method self withdata(string $data)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getUserCidr
 * @method self withUserCidr(string $userCidr)
 */
class NotifyProduceCommonBandwidthPackage extends Rpc
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
 * @method string getBandwidthPackageId
 * @method self withBandwidthPackageId(string $bandwidthPackageId)
 * @method string getBandwidth
 * @method self withBandwidth(string $bandwidth)
 */
class ModifyCommonBandwidthPackageSpec extends Rpc
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
 * @method string getBandwidthPackageId
 * @method self withBandwidthPackageId(string $bandwidthPackageId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getDescription
 * @method self withDescription(string $description)
 */
class ModifyCommonBandwidthPackageAttribute extends Rpc
{
    use R;
}

/**
 * @method string getdata
 * @method self withdata(string $data)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getUserCidr
 * @method self withUserCidr(string $userCidr)
 */
class FillCommonBandwidthPackageInstanceId extends Rpc
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
 * @method bool getIncludeReservationData
 * @method self withIncludeReservationData(bool $includeReservationData)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getBandwidthPackageId
 * @method self withBandwidthPackageId(string $bandwidthPackageId)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 * @method string getName
 * @method self withName(string $name)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeCommonBandwidthPackages extends Rpc
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
 * @method string getForce
 * @method self withForce(string $force)
 * @method string getBandwidthPackageId
 * @method self withBandwidthPackageId(string $bandwidthPackageId)
 */
class DeleteCommonBandwidthPackage extends Rpc
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
 * @method string getZone
 * @method self withZone(string $zone)
 * @method string getISP
 * @method self withISP(string $iSP)
 * @method string getName
 * @method self withName(string $name)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 * @method Integer getBandwidth
 * @method self withBandwidth(Integer $bandwidth)
 * @method Integer getRatio
 * @method self withRatio(Integer $ratio)
 * @method string getInternetChargeType
 * @method self withInternetChargeType(string $internetChargeType)
 */
class CreateCommonBandwidthPackage extends Rpc
{
    use R;
}

/**
 * @method string getdata
 * @method self withdata(string $data)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getUserCidr
 * @method self withUserCidr(string $userCidr)
 */
class CheckCommonBandwidthPackageOrderParam extends Rpc
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
 * @method string getBandwidthPackageId
 * @method self withBandwidthPackageId(string $bandwidthPackageId)
 * @method string getIpInstanceId
 * @method self withIpInstanceId(string $ipInstanceId)
 */
class AddCommonBandwidthPackageIp extends Rpc
{
    use R;
}

/**
 * @method string getdata
 * @method self withdata(string $data)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class RiOrderCheck extends Rpc
{
    use R;
}

/**
 * @method string getdata
 * @method self withdata(string $data)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getUserCidr
 * @method self withUserCidr(string $userCidr)
 */
class RiNotifyPaid extends Rpc
{
    use R;
}

/**
 * @method string getdata
 * @method self withdata(string $data)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getUserCidr
 * @method self withUserCidr(string $userCidr)
 */
class RiFillProduct extends Rpc
{
    use R;
}

/**
 * @method string getdata
 * @method self withdata(string $data)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getUserCidr
 * @method self withUserCidr(string $userCidr)
 */
class RiFillParams extends Rpc
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
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 * @method string getFilterVpcId
 * @method self withFilterVpcId(string $filterVpcId)
 * @method string getFilterVRouterId
 * @method self withFilterVRouterId(string $filterVRouterId)
 * @method bool getIsDefault
 * @method self withIsDefault(bool $isDefault)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeVpcsByRegionNo extends Rpc
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
 * @method string getAccessPointId
 * @method self withAccessPointId(string $accessPointId)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeVBRs extends Rpc
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
 * @method string getdata
 * @method self withdata(string $data)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 */
class VpnGatewayValidateOrder extends Rpc
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
 * @method string getdata
 * @method self withdata(string $data)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 */
class VpnGatewayPrepayNotifyPaid extends Rpc
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
 * @method string getdata
 * @method self withdata(string $data)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 */
class VpnGatewayFillRestrictions extends Rpc
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
 * @method string getdata
 * @method self withdata(string $data)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 */
class VpnGatewayFillParams extends Rpc
{
    use R;
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getVpnGatewayId
 * @method self withVpnGatewayId(string $vpnGatewayId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getDescription
 * @method self withDescription(string $description)
 */
class ModifyVpnGatewayAttribute extends Rpc
{
    use R;
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getVpnConnectionId
 * @method self withVpnConnectionId(string $vpnConnectionId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getLocalSubnet
 * @method self withLocalSubnet(string $localSubnet)
 * @method string getRemoteSubnet
 * @method self withRemoteSubnet(string $remoteSubnet)
 * @method bool getEffectImmediately
 * @method self withEffectImmediately(bool $effectImmediately)
 * @method string getIkeConfig
 * @method self withIkeConfig(string $ikeConfig)
 * @method string getIpsecConfig
 * @method self withIpsecConfig(string $ipsecConfig)
 */
class ModifyVpnConnectionAttribute extends Rpc
{
    use R;
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getCustomerGatewayId
 * @method self withCustomerGatewayId(string $customerGatewayId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getDescription
 * @method self withDescription(string $description)
 */
class ModifyCustomerGatewayAttribute extends Rpc
{
    use R;
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getVpnConnectionId
 * @method self withVpnConnectionId(string $vpnConnectionId)
 */
class DownloadVpnConnectionConfig extends Rpc
{
    use R;
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 * @method string getVpnGatewayId
 * @method self withVpnGatewayId(string $vpnGatewayId)
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method string getBusinessStatus
 * @method self withBusinessStatus(string $businessStatus)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeVpnGateways extends Rpc
{
    use R;
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getVpnGatewayId
 * @method self withVpnGatewayId(string $vpnGatewayId)
 */
class DescribeVpnGateway extends Rpc
{
    use R;
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getVpnGatewayId
 * @method self withVpnGatewayId(string $vpnGatewayId)
 * @method string getCustomerGatewayId
 * @method self withCustomerGatewayId(string $customerGatewayId)
 * @method string getVpnConnectionId
 * @method self withVpnConnectionId(string $vpnConnectionId)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeVpnConnections extends Rpc
{
    use R;
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getVpnConnectionId
 * @method self withVpnConnectionId(string $vpnConnectionId)
 */
class DescribeVpnConnection extends Rpc
{
    use R;
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getCustomerGatewayId
 * @method self withCustomerGatewayId(string $customerGatewayId)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeCustomerGateways extends Rpc
{
    use R;
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getCustomerGatewayId
 * @method self withCustomerGatewayId(string $customerGatewayId)
 */
class DescribeCustomerGateway extends Rpc
{
    use R;
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getVpnGatewayId
 * @method self withVpnGatewayId(string $vpnGatewayId)
 */
class DeleteVpnGateway extends Rpc
{
    use R;
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getVpnConnectionId
 * @method self withVpnConnectionId(string $vpnConnectionId)
 */
class DeleteVpnConnection extends Rpc
{
    use R;
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getCustomerGatewayId
 * @method self withCustomerGatewayId(string $customerGatewayId)
 */
class DeleteCustomerGateway extends Rpc
{
    use R;
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getCustomerGatewayId
 * @method self withCustomerGatewayId(string $customerGatewayId)
 * @method string getVpnGatewayId
 * @method self withVpnGatewayId(string $vpnGatewayId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getLocalSubnet
 * @method self withLocalSubnet(string $localSubnet)
 * @method string getRemoteSubnet
 * @method self withRemoteSubnet(string $remoteSubnet)
 * @method bool getEffectImmediately
 * @method self withEffectImmediately(bool $effectImmediately)
 * @method string getIkeConfig
 * @method self withIkeConfig(string $ikeConfig)
 * @method string getIpsecConfig
 * @method self withIpsecConfig(string $ipsecConfig)
 */
class CreateVpnConnection extends Rpc
{
    use R;
}

/**
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getIpAddress
 * @method self withIpAddress(string $ipAddress)
 * @method string getName
 * @method self withName(string $name)
 * @method string getDescription
 * @method self withDescription(string $description)
 */
class CreateCustomerGateway extends Rpc
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
 * @method string getDestinationIp
 * @method self withDestinationIp(string $destinationIp)
 * @method string getNqaId
 * @method self withNqaId(string $nqaId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ModifyNqa extends Rpc
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
 * @method string getBgpGroupId
 * @method self withBgpGroupId(string $bgpGroupId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method int getPeerAsn
 * @method self withPeerAsn(int $peerAsn)
 * @method string getAuthKey
 * @method self withAuthKey(string $authKey)
 * @method bool getIsFakeAsn
 * @method self withIsFakeAsn(bool $isFakeAsn)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ModifyBgpGroupAttribute extends Rpc
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
 * @method string getRouterId
 * @method self withRouterId(string $routerId)
 * @method string getNqaId
 * @method self withNqaId(string $nqaId)
 * @method bool getIsDefault
 * @method self withIsDefault(bool $isDefault)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeNqas extends Rpc
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
 * @method string getRouterId
 * @method self withRouterId(string $routerId)
 * @method string getBgpPeerId
 * @method self withBgpPeerId(string $bgpPeerId)
 * @method string getBgpGroupId
 * @method self withBgpGroupId(string $bgpGroupId)
 * @method bool getIsDefault
 * @method self withIsDefault(bool $isDefault)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeBgpPeers extends Rpc
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
 * @method string getRouterId
 * @method self withRouterId(string $routerId)
 * @method string getBgpGroupId
 * @method self withBgpGroupId(string $bgpGroupId)
 * @method bool getIsDefault
 * @method self withIsDefault(bool $isDefault)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeBgpGroups extends Rpc
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
 * @method string getNqaId
 * @method self withNqaId(string $nqaId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DeleteNqa extends Rpc
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
 * @method string getBgpPeerId
 * @method self withBgpPeerId(string $bgpPeerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DeleteBgpPeer extends Rpc
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
 * @method string getDstCidrBlock
 * @method self withDstCidrBlock(string $dstCidrBlock)
 * @method string getRouterId
 * @method self withRouterId(string $routerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DeleteBgpNetwork extends Rpc
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
 * @method string getBgpGroupId
 * @method self withBgpGroupId(string $bgpGroupId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DeleteBgpGroup extends Rpc
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
 * @method string getDestinationIp
 * @method self withDestinationIp(string $destinationIp)
 * @method string getRouterId
 * @method self withRouterId(string $routerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class CreateNqa extends Rpc
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
 * @method string getBgpGroupId
 * @method self withBgpGroupId(string $bgpGroupId)
 * @method string getPeerIpAddress
 * @method self withPeerIpAddress(string $peerIpAddress)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class CreateBgpPeer extends Rpc
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
 * @method string getRouterId
 * @method self withRouterId(string $routerId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method int getPeerAsn
 * @method self withPeerAsn(int $peerAsn)
 * @method string getAuthKey
 * @method self withAuthKey(string $authKey)
 * @method bool getIsFakeAsn
 * @method self withIsFakeAsn(bool $isFakeAsn)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class CreateBgpGroup extends Rpc
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
 * @method string getDstCidrBlock
 * @method self withDstCidrBlock(string $dstCidrBlock)
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 * @method string getRouterId
 * @method self withRouterId(string $routerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class AddBgpNetwork extends Rpc
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
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class EnableVpcClassicLink extends Rpc
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
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DisableVpcClassicLink extends Rpc
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
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 * @method bool getIsDefault
 * @method self withIsDefault(bool $isDefault)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeVpcAttribute extends Rpc
{
    use R;
}

/**
 * @method string getVbrId
 * @method self withVbrId(string $vbrId)
 * @method string getPhysicalConnectionId
 * @method self withPhysicalConnectionId(string $physicalConnectionId)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class UnassociatePhysicalConnectionFromVirtualBorderRouter extends Rpc
{
    use R;
}

/**
 * @method string getAccessPointId
 * @method self withAccessPointId(string $accessPointId)
 * @method string getType
 * @method self withType(string $type)
 * @method string getLineOperator
 * @method self withLineOperator(string $lineOperator)
 * @method Integer getbandwidth
 * @method self withbandwidth(Integer $bandwidth)
 * @method string getPeerLocation
 * @method self withPeerLocation(string $peerLocation)
 * @method string getPortType
 * @method self withPortType(string $portType)
 * @method string getRedundantPhysicalConnectionId
 * @method self withRedundantPhysicalConnectionId(string $redundantPhysicalConnectionId)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getName
 * @method self withName(string $name)
 * @method string getCircuitCode
 * @method self withCircuitCode(string $circuitCode)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getInterfaceName
 * @method self withInterfaceName(string $interfaceName)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class CreatePhysicalConnectionNew extends Rpc
{
    use R;
}

/**
 * @method string getVbrId
 * @method self withVbrId(string $vbrId)
 * @method string getPhysicalConnectionId
 * @method self withPhysicalConnectionId(string $physicalConnectionId)
 * @method string getVlanId
 * @method self withVlanId(string $vlanId)
 * @method string getCircuitCode
 * @method self withCircuitCode(string $circuitCode)
 * @method string getLocalGatewayIp
 * @method self withLocalGatewayIp(string $localGatewayIp)
 * @method string getPeerGatewayIp
 * @method self withPeerGatewayIp(string $peerGatewayIp)
 * @method string getPeeringSubnetMask
 * @method self withPeeringSubnetMask(string $peeringSubnetMask)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class AssociatePhysicalConnectionToVirtualBorderRouter extends Rpc
{
    use R;
}

/**
 * @method string getdata
 * @method self withdata(string $data)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getUserCidr
 * @method self withUserCidr(string $userCidr)
 */
class EipPrepayNotifyPaid extends Rpc
{
    use R;
}

/**
 * @method string getdata
 * @method self withdata(string $data)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getUserCidr
 * @method self withUserCidr(string $userCidr)
 */
class EipOrderCheck extends Rpc
{
    use R;
}

/**
 * @method string getdata
 * @method self withdata(string $data)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class NotifyProduceNatGateway extends Rpc
{
    use R;
}

/**
 * @method string getdata
 * @method self withdata(string $data)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getUserCidr
 * @method self withUserCidr(string $userCidr)
 */
class NotifyProduceBandwidthPackage extends Rpc
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
 * @method string getSnatTableId
 * @method self withSnatTableId(string $snatTableId)
 * @method string getSnatEntryId
 * @method self withSnatEntryId(string $snatEntryId)
 * @method string getSnatIp
 * @method self withSnatIp(string $snatIp)
 * @method string getSnatEntryName
 * @method self withSnatEntryName(string $snatEntryName)
 */
class ModifySnatEntry extends Rpc
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
 * @method string getNatGatewayId
 * @method self withNatGatewayId(string $natGatewayId)
 * @method string getSpec
 * @method self withSpec(string $spec)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 */
class ModifyNatGatewaySpec extends Rpc
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
 * @method string getNatGatewayId
 * @method self withNatGatewayId(string $natGatewayId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getDescription
 * @method self withDescription(string $description)
 */
class ModifyNatGatewayAttribute extends Rpc
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
 * @method string getBandwidthPackageId
 * @method self withBandwidthPackageId(string $bandwidthPackageId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getDescription
 * @method self withDescription(string $description)
 */
class ModifyBandwidthPackageAttribute extends Rpc
{
    use R;
}

/**
 * @method string getdata
 * @method self withdata(string $data)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getUserCidr
 * @method self withUserCidr(string $userCidr)
 */
class FillNatGatwayInstanceId extends Rpc
{
    use R;
}

/**
 * @method string getdata
 * @method self withdata(string $data)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getUserCidr
 * @method self withUserCidr(string $userCidr)
 */
class FillNatGatewayParam extends Rpc
{
    use R;
}

/**
 * @method string getdata
 * @method self withdata(string $data)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getUserCidr
 * @method self withUserCidr(string $userCidr)
 */
class FillBandwidthPackageParam extends Rpc
{
    use R;
}

/**
 * @method string getdata
 * @method self withdata(string $data)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getUserCidr
 * @method self withUserCidr(string $userCidr)
 */
class FillBandwidthPackageInstanceId extends Rpc
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
 * @method string getSnatTableId
 * @method self withSnatTableId(string $snatTableId)
 * @method string getSnatEntryId
 * @method self withSnatEntryId(string $snatEntryId)
 * @method string getSourceVSwitchId
 * @method self withSourceVSwitchId(string $sourceVSwitchId)
 * @method string getSourceCIDR
 * @method self withSourceCIDR(string $sourceCIDR)
 * @method string getSnatIp
 * @method self withSnatIp(string $snatIp)
 * @method string getSnatEntryName
 * @method self withSnatEntryName(string $snatEntryName)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeSnatTableEntries extends Rpc
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
 * @method string getAllocationId
 * @method self withAllocationId(string $allocationId)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method Integer getPeriod
 * @method self withPeriod(Integer $period)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeBandwidthPackagePublicIpMonitorData extends Rpc
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
 * @method string getBandwidthPackageId
 * @method self withBandwidthPackageId(string $bandwidthPackageId)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method Integer getPeriod
 * @method self withPeriod(Integer $period)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeBandwidthPackageMonitorData extends Rpc
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
 * @method string getSnatTableId
 * @method self withSnatTableId(string $snatTableId)
 * @method string getSnatEntryId
 * @method self withSnatEntryId(string $snatEntryId)
 */
class DeleteSnatEntry extends Rpc
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
 * @method string getSnatTableId
 * @method self withSnatTableId(string $snatTableId)
 * @method string getSourceVSwitchId
 * @method self withSourceVSwitchId(string $sourceVSwitchId)
 * @method string getSourceCIDR
 * @method self withSourceCIDR(string $sourceCIDR)
 * @method string getSnatIp
 * @method self withSnatIp(string $snatIp)
 * @method string getSnatEntryName
 * @method self withSnatEntryName(string $snatEntryName)
 */
class CreateSnatEntry extends Rpc
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
 * @method string getNatGatewayId
 * @method self withNatGatewayId(string $natGatewayId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method Integer getIpCount
 * @method self withIpCount(Integer $ipCount)
 * @method Integer getBandwidth
 * @method self withBandwidth(Integer $bandwidth)
 * @method string getISP
 * @method self withISP(string $iSP)
 * @method string getZone
 * @method self withZone(string $zone)
 * @method string getInternetChargeType
 * @method self withInternetChargeType(string $internetChargeType)
 */
class CreateBandwidthPackage extends Rpc
{
    use R;
}

/**
 * @method string getdata
 * @method self withdata(string $data)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getUserCidr
 * @method self withUserCidr(string $userCidr)
 */
class CheckNatGatewayOrderParam extends Rpc
{
    use R;
}

/**
 * @method string getdata
 * @method self withdata(string $data)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getUserCidr
 * @method self withUserCidr(string $userCidr)
 */
class CheckBandwidthPackageOrderParam extends Rpc
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
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getHaVipId
 * @method self withHaVipId(string $haVipId)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getForce
 * @method self withForce(string $force)
 */
class UnassociateHaVip extends Rpc
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
 * @method bool getForce
 * @method self withForce(bool $force)
 * @method string getAllocationId
 * @method self withAllocationId(string $allocationId)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceType
 * @method self withInstanceType(string $instanceType)
 * @method string getPrivateIpAddress
 * @method self withPrivateIpAddress(string $privateIpAddress)
 */
class UnassociateEipAddress extends Rpc
{
    use R;
}

/**
 * @method string getVbrId
 * @method self withVbrId(string $vbrId)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class TerminateVirtualBorderRouter extends Rpc
{
    use R;
}

/**
 * @method string getPhysicalConnectionId
 * @method self withPhysicalConnectionId(string $physicalConnectionId)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class TerminatePhysicalConnection extends Rpc
{
    use R;
}

/**
 * @method string getdata
 * @method self withdata(string $data)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getUserCidr
 * @method self withUserCidr(string $userCidr)
 */
class StaticEipNotifyPaid extends Rpc
{
    use R;
}

/**
 * @method string getdata
 * @method self withdata(string $data)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getUserCidr
 * @method self withUserCidr(string $userCidr)
 */
class StaticEipFillParams extends Rpc
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
 * @method string getBandwidthPackageId
 * @method self withBandwidthPackageId(string $bandwidthPackageId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method array getRemovedIpAddresses
 * @method self withRemovedIpAddresses(array $removedIpAddresses)
 */
class RemoveBandwidthPackageIps extends Rpc
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
 * @method string getAllocationId
 * @method self withAllocationId(string $allocationId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ReleaseEipAddress extends Rpc
{
    use R;
}

/**
 * @method string getVbrId
 * @method self withVbrId(string $vbrId)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class RecoverVirtualBorderRouter extends Rpc
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
 * @method string getVSwitchId
 * @method self withVSwitchId(string $vSwitchId)
 * @method string getVSwitchName
 * @method self withVSwitchName(string $vSwitchName)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method Integer getIpv6CidrBlock
 * @method self withIpv6CidrBlock(Integer $ipv6CidrBlock)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ModifyVSwitchAttribute extends Rpc
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
 * @method string getVRouterId
 * @method self withVRouterId(string $vRouterId)
 * @method string getVRouterName
 * @method self withVRouterName(string $vRouterName)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ModifyVRouterAttribute extends Rpc
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
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getVpcName
 * @method self withVpcName(string $vpcName)
 * @method string getCidrBlock
 * @method self withCidrBlock(string $cidrBlock)
 * @method bool getEnableIPv6
 * @method self withEnableIPv6(bool $enableIPv6)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ModifyVpcAttribute extends Rpc
{
    use R;
}

/**
 * @method string getVbrId
 * @method self withVbrId(string $vbrId)
 * @method Integer getVlanId
 * @method self withVlanId(Integer $vlanId)
 * @method string getCircuitCode
 * @method self withCircuitCode(string $circuitCode)
 * @method string getLocalGatewayIp
 * @method self withLocalGatewayIp(string $localGatewayIp)
 * @method string getPeerGatewayIp
 * @method self withPeerGatewayIp(string $peerGatewayIp)
 * @method string getPeeringSubnetMask
 * @method self withPeeringSubnetMask(string $peeringSubnetMask)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getName
 * @method self withName(string $name)
 * @method string getAssociatedPhysicalConnections
 * @method self withAssociatedPhysicalConnections(string $associatedPhysicalConnections)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ModifyVirtualBorderRouterAttribute extends Rpc
{
    use R;
}

/**
 * @method string getRouterInterfaceId
 * @method self withRouterInterfaceId(string $routerInterfaceId)
 * @method string getSpec
 * @method self withSpec(string $spec)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ModifyRouterInterfaceSpec extends Rpc
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
 * @method string getRouterInterfaceId
 * @method self withRouterInterfaceId(string $routerInterfaceId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getOppositeInterfaceId
 * @method self withOppositeInterfaceId(string $oppositeInterfaceId)
 * @method string getOppositeRouterId
 * @method self withOppositeRouterId(string $oppositeRouterId)
 * @method string getOppositeRouterType
 * @method self withOppositeRouterType(string $oppositeRouterType)
 * @method int getOppositeInterfaceOwnerId
 * @method self withOppositeInterfaceOwnerId(int $oppositeInterfaceOwnerId)
 * @method string getHealthCheckSourceIp
 * @method self withHealthCheckSourceIp(string $healthCheckSourceIp)
 * @method string getHealthCheckTargetIp
 * @method self withHealthCheckTargetIp(string $healthCheckTargetIp)
 * @method bool getDeleteHealthCheckIp
 * @method self withDeleteHealthCheckIp(bool $deleteHealthCheckIp)
 */
class ModifyRouterInterfaceAttribute extends Rpc
{
    use R;
}

/**
 * @method string getPhysicalConnectionId
 * @method self withPhysicalConnectionId(string $physicalConnectionId)
 * @method string getLineOperator
 * @method self withLineOperator(string $lineOperator)
 * @method Integer getbandwidth
 * @method self withbandwidth(Integer $bandwidth)
 * @method string getPeerLocation
 * @method self withPeerLocation(string $peerLocation)
 * @method string getPortType
 * @method self withPortType(string $portType)
 * @method string getRedundantPhysicalConnectionId
 * @method self withRedundantPhysicalConnectionId(string $redundantPhysicalConnectionId)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getName
 * @method self withName(string $name)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getCircuitCode
 * @method self withCircuitCode(string $circuitCode)
 */
class ModifyPhysicalConnectionAttribute extends Rpc
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
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getHaVipId
 * @method self withHaVipId(string $haVipId)
 * @method string getDescription
 * @method self withDescription(string $description)
 */
class ModifyHaVipAttribute extends Rpc
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
 * @method string getForwardTableId
 * @method self withForwardTableId(string $forwardTableId)
 * @method string getForwardEntryId
 * @method self withForwardEntryId(string $forwardEntryId)
 * @method string getExternalIp
 * @method self withExternalIp(string $externalIp)
 * @method string getExternalPort
 * @method self withExternalPort(string $externalPort)
 * @method string getInternalIp
 * @method self withInternalIp(string $internalIp)
 * @method string getInternalPort
 * @method self withInternalPort(string $internalPort)
 * @method string getIpProtocol
 * @method self withIpProtocol(string $ipProtocol)
 * @method string getForwardEntryName
 * @method self withForwardEntryName(string $forwardEntryName)
 */
class ModifyForwardEntry extends Rpc
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
 * @method string getAllocationId
 * @method self withAllocationId(string $allocationId)
 * @method string getBandwidth
 * @method self withBandwidth(string $bandwidth)
 * @method string getName
 * @method self withName(string $name)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ModifyEipAddressAttribute extends Rpc
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
 * @method string getBandwidthPackageId
 * @method self withBandwidthPackageId(string $bandwidthPackageId)
 * @method string getBandwidth
 * @method self withBandwidth(string $bandwidth)
 */
class ModifyBandwidthPackageSpec extends Rpc
{
    use R;
}

/**
 * @method string getPhysicalConnectionId
 * @method self withPhysicalConnectionId(string $physicalConnectionId)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class EnablePhysicalConnection extends Rpc
{
    use R;
}

/**
 * @method string getdata
 * @method self withdata(string $data)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getUserCidr
 * @method self withUserCidr(string $userCidr)
 */
class EipNotifyPaid extends Rpc
{
    use R;
}

/**
 * @method string getdata
 * @method self withdata(string $data)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getUserCidr
 * @method self withUserCidr(string $userCidr)
 */
class EipFillProduct extends Rpc
{
    use R;
}

/**
 * @method string getdata
 * @method self withdata(string $data)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getUserCidr
 * @method self withUserCidr(string $userCidr)
 */
class EipFillParams extends Rpc
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
 */
class DescribeZones extends Rpc
{
    use R;
}

/**
 * @method array getTag
 * @method self withTag(array $tag)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 * @method string getVSwitchId
 * @method self withVSwitchId(string $vSwitchId)
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 * @method string getVSwitchName
 * @method self withVSwitchName(string $vSwitchName)
 * @method bool getIsDefault
 * @method self withIsDefault(bool $isDefault)
 * @method string getRouteTableId
 * @method self withRouteTableId(string $routeTableId)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeVSwitches extends Rpc
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
 * @method string getVRouterId
 * @method self withVRouterId(string $vRouterId)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeVRouters extends Rpc
{
    use R;
}

/**
 * @method array getTag
 * @method self withTag(array $tag)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 * @method string getVpcName
 * @method self withVpcName(string $vpcName)
 * @method bool getIsDefault
 * @method self withIsDefault(bool $isDefault)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeVpcs extends Rpc
{
    use R;
}

/**
 * @method array getFilter
 * @method self withFilter(array $filter)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getPhysicalConnectionId
 * @method self withPhysicalConnectionId(string $physicalConnectionId)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeVirtualBorderRoutersForPhysicalConnection extends Rpc
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
 * @method array getFilter
 * @method self withFilter(array $filter)
 */
class DescribeVirtualBorderRouters extends Rpc
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
 * @method string getVRouterId
 * @method self withVRouterId(string $vRouterId)
 * @method string getRouteTableId
 * @method self withRouteTableId(string $routeTableId)
 * @method string getRouterType
 * @method self withRouterType(string $routerType)
 * @method string getRouterId
 * @method self withRouterId(string $routerId)
 * @method string getType
 * @method self withType(string $type)
 * @method string getRouteTableName
 * @method self withRouteTableName(string $routeTableName)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeRouteTables extends Rpc
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
 * @method bool getIncludeReservationData
 * @method self withIncludeReservationData(bool $includeReservationData)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method array getFilter
 * @method self withFilter(array $filter)
 */
class DescribeRouterInterfaces extends Rpc
{
    use R;
}

/**
 * @method string getProductType
 * @method self withProductType(string $productType)
 * @method string getAcceptLanguage
 * @method self withAcceptLanguage(string $acceptLanguage)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeRegions extends Rpc
{
    use R;
}

/**
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method array getFilter
 * @method self withFilter(array $filter)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribePhysicalConnections extends Rpc
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
 * @method string getAllocationId
 * @method self withAllocationId(string $allocationId)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method Integer getPeriod
 * @method self withPeriod(Integer $period)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeNewProjectEipMonitorData extends Rpc
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
 * @method string getNatGatewayId
 * @method self withNatGatewayId(string $natGatewayId)
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 * @method string getName
 * @method self withName(string $name)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeNatGateways extends Rpc
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
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method array getFilter
 * @method self withFilter(array $filter)
 */
class DescribeHaVips extends Rpc
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
 * @method string getForwardTableId
 * @method self withForwardTableId(string $forwardTableId)
 * @method string getForwardEntryId
 * @method self withForwardEntryId(string $forwardEntryId)
 * @method string getExternalIp
 * @method self withExternalIp(string $externalIp)
 * @method string getExternalPort
 * @method self withExternalPort(string $externalPort)
 * @method string getInternalIp
 * @method self withInternalIp(string $internalIp)
 * @method string getInternalPort
 * @method self withInternalPort(string $internalPort)
 * @method string getIpProtocol
 * @method self withIpProtocol(string $ipProtocol)
 * @method string getForwardEntryName
 * @method self withForwardEntryName(string $forwardEntryName)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeForwardTableEntries extends Rpc
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
 * @method string getForwardTableId
 * @method self withForwardTableId(string $forwardTableId)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeForwardTables extends Rpc
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
 * @method string getAllocationId
 * @method self withAllocationId(string $allocationId)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method Integer getPeriod
 * @method self withPeriod(Integer $period)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeEipMonitorData extends Rpc
{
    use R;
}

/**
 * @method array getTag
 * @method self withTag(array $tag)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method bool getIncludeReservationData
 * @method self withIncludeReservationData(bool $includeReservationData)
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method string getEipAddress
 * @method self withEipAddress(string $eipAddress)
 * @method string getAllocationId
 * @method self withAllocationId(string $allocationId)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getISP
 * @method self withISP(string $iSP)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getFilter1Key
 * @method self withFilter1Key(string $filter1Key)
 * @method string getFilter2Key
 * @method self withFilter2Key(string $filter2Key)
 * @method string getFilter1Value
 * @method self withFilter1Value(string $filter1Value)
 * @method string getFilter2Value
 * @method self withFilter2Value(string $filter2Value)
 * @method string getLockReason
 * @method self withLockReason(string $lockReason)
 * @method string getAssociatedInstanceType
 * @method self withAssociatedInstanceType(string $associatedInstanceType)
 * @method string getAssociatedInstanceId
 * @method self withAssociatedInstanceId(string $associatedInstanceId)
 * @method string getChargeType
 * @method self withChargeType(string $chargeType)
 */
class DescribeEipAddresses extends Rpc
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
 * @method string getBandwidthPackageId
 * @method self withBandwidthPackageId(string $bandwidthPackageId)
 * @method string getNatGatewayId
 * @method self withNatGatewayId(string $natGatewayId)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeBandwidthPackages extends Rpc
{
    use R;
}

/**
 * @method array getFilter
 * @method self withFilter(array $filter)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getType
 * @method self withType(string $type)
 * @method string getName
 * @method self withName(string $name)
 * @method string getHostOperator
 * @method self withHostOperator(string $hostOperator)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeAccessPoints extends Rpc
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
 * @method string getVSwitchId
 * @method self withVSwitchId(string $vSwitchId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DeleteVSwitch extends Rpc
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
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DeleteVpc extends Rpc
{
    use R;
}

/**
 * @method string getVbrId
 * @method self withVbrId(string $vbrId)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DeleteVirtualBorderRouter extends Rpc
{
    use R;
}

/**
 * @method string getRouterInterfaceId
 * @method self withRouterInterfaceId(string $routerInterfaceId)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DeleteRouterInterface extends Rpc
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
 * @method string getRouteTableId
 * @method self withRouteTableId(string $routeTableId)
 * @method string getRouteEntryId
 * @method self withRouteEntryId(string $routeEntryId)
 * @method string getDestinationCidrBlock
 * @method self withDestinationCidrBlock(string $destinationCidrBlock)
 * @method string getNextHopId
 * @method self withNextHopId(string $nextHopId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method array getNextHopList
 * @method self withNextHopList(array $nextHopList)
 */
class DeleteRouteEntry extends Rpc
{
    use R;
}

/**
 * @method string getPhysicalConnectionId
 * @method self withPhysicalConnectionId(string $physicalConnectionId)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getUserCidr
 * @method self withUserCidr(string $userCidr)
 */
class DeletePhysicalConnection extends Rpc
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
 * @method string getNatGatewayId
 * @method self withNatGatewayId(string $natGatewayId)
 * @method bool getForce
 * @method self withForce(bool $force)
 */
class DeleteNatGateway extends Rpc
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
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getHaVipId
 * @method self withHaVipId(string $haVipId)
 */
class DeleteHaVip extends Rpc
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
 * @method string getForwardTableId
 * @method self withForwardTableId(string $forwardTableId)
 * @method string getForwardEntryId
 * @method self withForwardEntryId(string $forwardEntryId)
 */
class DeleteForwardEntry extends Rpc
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
 * @method string getBandwidthPackageId
 * @method self withBandwidthPackageId(string $bandwidthPackageId)
 * @method bool getForce
 * @method self withForce(bool $force)
 */
class DeleteBandwidthPackage extends Rpc
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
 * @method string getRouterInterfaceId
 * @method self withRouterInterfaceId(string $routerInterfaceId)
 */
class DeactivateRouterInterface extends Rpc
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
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 * @method string getCidrBlock
 * @method self withCidrBlock(string $cidrBlock)
 * @method Integer getIpv6CidrBlock
 * @method self withIpv6CidrBlock(Integer $ipv6CidrBlock)
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 * @method string getVSwitchName
 * @method self withVSwitchName(string $vSwitchName)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class CreateVSwitch extends Rpc
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
 * @method string getCidrBlock
 * @method self withCidrBlock(string $cidrBlock)
 * @method string getIpv6CidrBlock
 * @method self withIpv6CidrBlock(string $ipv6CidrBlock)
 * @method bool getEnableIpv6
 * @method self withEnableIpv6(bool $enableIpv6)
 * @method string getVpcName
 * @method self withVpcName(string $vpcName)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getUserCidr
 * @method self withUserCidr(string $userCidr)
 */
class CreateVpc extends Rpc
{
    use R;
}

/**
 * @method string getPhysicalConnectionId
 * @method self withPhysicalConnectionId(string $physicalConnectionId)
 * @method int getVbrOwnerId
 * @method self withVbrOwnerId(int $vbrOwnerId)
 * @method Integer getVlanId
 * @method self withVlanId(Integer $vlanId)
 * @method string getCircuitCode
 * @method self withCircuitCode(string $circuitCode)
 * @method string getLocalGatewayIp
 * @method self withLocalGatewayIp(string $localGatewayIp)
 * @method string getPeerGatewayIp
 * @method self withPeerGatewayIp(string $peerGatewayIp)
 * @method string getPeeringSubnetMask
 * @method self withPeeringSubnetMask(string $peeringSubnetMask)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getName
 * @method self withName(string $name)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class CreateVirtualBorderRouter extends Rpc
{
    use R;
}

/**
 * @method string getRole
 * @method self withRole(string $role)
 * @method string getOppositeRegionId
 * @method self withOppositeRegionId(string $oppositeRegionId)
 * @method string getSpec
 * @method self withSpec(string $spec)
 * @method string getRouterType
 * @method self withRouterType(string $routerType)
 * @method string getRouterId
 * @method self withRouterId(string $routerId)
 * @method string getOppositeInterfaceId
 * @method self withOppositeInterfaceId(string $oppositeInterfaceId)
 * @method string getOppositeRouterId
 * @method self withOppositeRouterId(string $oppositeRouterId)
 * @method string getOppositeRouterType
 * @method self withOppositeRouterType(string $oppositeRouterType)
 * @method string getOppositeInterfaceOwnerId
 * @method self withOppositeInterfaceOwnerId(string $oppositeInterfaceOwnerId)
 * @method string getHealthCheckSourceIp
 * @method self withHealthCheckSourceIp(string $healthCheckSourceIp)
 * @method string getHealthCheckTargetIp
 * @method self withHealthCheckTargetIp(string $healthCheckTargetIp)
 * @method string getAccessPointId
 * @method self withAccessPointId(string $accessPointId)
 * @method string getOppositeAccessPointId
 * @method self withOppositeAccessPointId(string $oppositeAccessPointId)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getName
 * @method self withName(string $name)
 * @method Integer getPeriod
 * @method self withPeriod(Integer $period)
 * @method string getInstanceChargeType
 * @method self withInstanceChargeType(string $instanceChargeType)
 * @method bool getAutoPay
 * @method self withAutoPay(bool $autoPay)
 * @method string getPricingCycle
 * @method self withPricingCycle(string $pricingCycle)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class CreateRouterInterface extends Rpc
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
 * @method string getRouteTableId
 * @method self withRouteTableId(string $routeTableId)
 * @method string getDestinationCidrBlock
 * @method self withDestinationCidrBlock(string $destinationCidrBlock)
 * @method string getNextHopId
 * @method self withNextHopId(string $nextHopId)
 * @method string getPrivateIpAddress
 * @method self withPrivateIpAddress(string $privateIpAddress)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getRouteEntryName
 * @method self withRouteEntryName(string $routeEntryName)
 * @method string getNextHopType
 * @method self withNextHopType(string $nextHopType)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method array getNextHopList
 * @method self withNextHopList(array $nextHopList)
 */
class CreateRouteEntry extends Rpc
{
    use R;
}

/**
 * @method string getAccessPointId
 * @method self withAccessPointId(string $accessPointId)
 * @method string getType
 * @method self withType(string $type)
 * @method string getLineOperator
 * @method self withLineOperator(string $lineOperator)
 * @method Integer getbandwidth
 * @method self withbandwidth(Integer $bandwidth)
 * @method string getPeerLocation
 * @method self withPeerLocation(string $peerLocation)
 * @method string getPortType
 * @method self withPortType(string $portType)
 * @method string getRedundantPhysicalConnectionId
 * @method self withRedundantPhysicalConnectionId(string $redundantPhysicalConnectionId)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getName
 * @method self withName(string $name)
 * @method string getCircuitCode
 * @method self withCircuitCode(string $circuitCode)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class CreatePhysicalConnection extends Rpc
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
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getSpec
 * @method self withSpec(string $spec)
 * @method array getBandwidthPackage
 * @method self withBandwidthPackage(array $bandwidthPackage)
 */
class CreateNatGateway extends Rpc
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
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getVSwitchId
 * @method self withVSwitchId(string $vSwitchId)
 * @method string getIpAddress
 * @method self withIpAddress(string $ipAddress)
 * @method string getDescription
 * @method self withDescription(string $description)
 */
class CreateHaVip extends Rpc
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
 * @method string getForwardTableId
 * @method self withForwardTableId(string $forwardTableId)
 * @method string getExternalIp
 * @method self withExternalIp(string $externalIp)
 * @method string getExternalPort
 * @method self withExternalPort(string $externalPort)
 * @method string getInternalIp
 * @method self withInternalIp(string $internalIp)
 * @method string getInternalPort
 * @method self withInternalPort(string $internalPort)
 * @method string getIpProtocol
 * @method self withIpProtocol(string $ipProtocol)
 * @method string getForwardEntryName
 * @method self withForwardEntryName(string $forwardEntryName)
 */
class CreateForwardEntry extends Rpc
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
 * @method string getRouterInterfaceId
 * @method self withRouterInterfaceId(string $routerInterfaceId)
 */
class ConnectRouterInterface extends Rpc
{
    use R;
}

/**
 * @method string getPhysicalConnectionId
 * @method self withPhysicalConnectionId(string $physicalConnectionId)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class CancelPhysicalConnection extends Rpc
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
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getHaVipId
 * @method self withHaVipId(string $haVipId)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class AssociateHaVip extends Rpc
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
 * @method string getAllocationId
 * @method self withAllocationId(string $allocationId)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceType
 * @method self withInstanceType(string $instanceType)
 * @method string getInstanceRegionId
 * @method self withInstanceRegionId(string $instanceRegionId)
 * @method string getPrivateIpAddress
 * @method self withPrivateIpAddress(string $privateIpAddress)
 */
class AssociateEipAddress extends Rpc
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
 * @method string getBandwidth
 * @method self withBandwidth(string $bandwidth)
 * @method Integer getPeriod
 * @method self withPeriod(Integer $period)
 * @method string getISP
 * @method self withISP(string $iSP)
 * @method string getNetmode
 * @method self withNetmode(string $netmode)
 * @method bool getAutoPay
 * @method self withAutoPay(bool $autoPay)
 * @method string getPricingCycle
 * @method self withPricingCycle(string $pricingCycle)
 * @method string getInstanceChargeType
 * @method self withInstanceChargeType(string $instanceChargeType)
 * @method string getInternetChargeType
 * @method self withInternetChargeType(string $internetChargeType)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 */
class AllocateEipAddress extends Rpc
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
 * @method string getBandwidthPackageId
 * @method self withBandwidthPackageId(string $bandwidthPackageId)
 * @method string getIpCount
 * @method self withIpCount(string $ipCount)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 */
class AddBandwidthPackageIps extends Rpc
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
 * @method string getRouterInterfaceId
 * @method self withRouterInterfaceId(string $routerInterfaceId)
 */
class ActivateRouterInterface extends Rpc
{
    use R;
}
