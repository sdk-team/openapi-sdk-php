<?php

namespace AlibabaCloud\Smartag\V20180313;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RpcRequest as Rpc;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method ModifySerialNumber modifySerialNumber($options = [])
 * @method CreateACL createACL($options = [])
 * @method DescribeACLs describeACLs($options = [])
 * @method AssociateACL associateACL($options = [])
 * @method AddACLRule addACLRule($options = [])
 * @method DisassociateACL disassociateACL($options = [])
 * @method DeleteACLRule deleteACLRule($options = [])
 * @method ModifyACLRule modifyACLRule($options = [])
 * @method DescribeACLAttribute describeACLAttribute($options = [])
 * @method DeleteACL deleteACL($options = [])
 * @method ModifyACL modifyACL($options = [])
 * @method UnicomOrderConfirm unicomOrderConfirm($options = [])
 * @method UnicomSignConfirm unicomSignConfirm($options = [])
 * @method DowngradeSmartAccessGateway downgradeSmartAccessGateway($options = [])
 * @method UpgradeSmartAccessGateway upgradeSmartAccessGateway($options = [])
 * @method DescribeGrantRules describeGrantRules($options = [])
 * @method GrantInstanceToCbn grantInstanceToCbn($options = [])
 * @method RevokeInstanceFromCbn revokeInstanceFromCbn($options = [])
 * @method CreateSAGLinkLevelHa createSAGLinkLevelHa($options = [])
 * @method SwitchSAGHaState switchSAGHaState($options = [])
 * @method DeleteSAGLinkLevelHa deleteSAGLinkLevelHa($options = [])
 * @method DeleteDedicatedLineBackup deleteDedicatedLineBackup($options = [])
 * @method CreateDedicatedLineBackup createDedicatedLineBackup($options = [])
 * @method DescribeSmartAccessGatewayHa describeSmartAccessGatewayHa($options = [])
 * @method SwitchCloudBoxHaState switchCloudBoxHaState($options = [])
 * @method RebootSmartAccessGateway rebootSmartAccessGateway($options = [])
 * @method CreateSmartAccessGateway createSmartAccessGateway($options = [])
 * @method ActivateSmartAccessGateway activateSmartAccessGateway($options = [])
 * @method UnlockSmartAccessGateway unlockSmartAccessGateway($options = [])
 * @method BindSmartAccessGateway bindSmartAccessGateway($options = [])
 * @method CreateCloudConnectNetwork createCloudConnectNetwork($options = [])
 * @method DeleteCloudConnectNetwork deleteCloudConnectNetwork($options = [])
 * @method DescribeCloudConnectNetworks describeCloudConnectNetworks($options = [])
 * @method DescribeRegions describeRegions($options = [])
 * @method DescribeSmartAccessGateways describeSmartAccessGateways($options = [])
 * @method GetCloudConnectNetworkUseLimit getCloudConnectNetworkUseLimit($options = [])
 * @method GetSmartAccessGatewayUseLimit getSmartAccessGatewayUseLimit($options = [])
 * @method InnerCreateSmartAccessGateway innerCreateSmartAccessGateway($options = [])
 * @method ModifyCloudConnectNetwork modifyCloudConnectNetwork($options = [])
 * @method ModifySmartAccessGateway modifySmartAccessGateway($options = [])
 * @method UnbindSmartAccessGateway unbindSmartAccessGateway($options = [])
 * @method UpdateSmartAccessGatewayVersion updateSmartAccessGatewayVersion($options = [])
 * @method DescribeSmartAccessGatewayVersions describeSmartAccessGatewayVersions($options = [])
 * @method SmartAccessGatewayFillParams smartAccessGatewayFillParams($options = [])
 * @method SmartAccessGatewayFillRestrictions smartAccessGatewayFillRestrictions($options = [])
 * @method SmartAccessGatewayValidateOrder smartAccessGatewayValidateOrder($options = [])
 * @method SmartAccessGatewayPrepayNotifyPaid smartAccessGatewayPrepayNotifyPaid($options = [])
 */
class V20180313
{
    use ApiResolverTrait;
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
 * @method string getSmartAGId
 * @method self withSmartAGId(string $smartAGId)
 * @method string getSerialNumber
 * @method self withSerialNumber(string $serialNumber)
 */
class ModifySerialNumber extends Rpc
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
 */
class CreateACL extends Rpc
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
 * @method string getAclIds
 * @method self withAclIds(string $aclIds)
 * @method string getName
 * @method self withName(string $name)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 */
class DescribeACLs extends Rpc
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
 * @method string getSmartAGId
 * @method self withSmartAGId(string $smartAGId)
 */
class AssociateACL extends Rpc
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
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getDirection
 * @method self withDirection(string $direction)
 * @method string getSourceCidr
 * @method self withSourceCidr(string $sourceCidr)
 * @method string getDestCidr
 * @method self withDestCidr(string $destCidr)
 * @method string getIpProtocol
 * @method self withIpProtocol(string $ipProtocol)
 * @method string getSourcePortRange
 * @method self withSourcePortRange(string $sourcePortRange)
 * @method string getDestPortRange
 * @method self withDestPortRange(string $destPortRange)
 * @method string getPolicy
 * @method self withPolicy(string $policy)
 * @method Integer getPriority
 * @method self withPriority(Integer $priority)
 */
class AddACLRule extends Rpc
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
 * @method string getSmartAGId
 * @method self withSmartAGId(string $smartAGId)
 */
class DisassociateACL extends Rpc
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
 * @method string getAcrId
 * @method self withAcrId(string $acrId)
 */
class DeleteACLRule extends Rpc
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
 * @method string getAcrId
 * @method self withAcrId(string $acrId)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getDirection
 * @method self withDirection(string $direction)
 * @method string getSourceCidr
 * @method self withSourceCidr(string $sourceCidr)
 * @method string getDestCidr
 * @method self withDestCidr(string $destCidr)
 * @method string getIpProtocol
 * @method self withIpProtocol(string $ipProtocol)
 * @method string getSourcePortRange
 * @method self withSourcePortRange(string $sourcePortRange)
 * @method string getDestPortRange
 * @method self withDestPortRange(string $destPortRange)
 * @method string getPolicy
 * @method self withPolicy(string $policy)
 * @method Integer getPriority
 * @method self withPriority(Integer $priority)
 */
class ModifyACLRule extends Rpc
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
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method string getDirection
 * @method self withDirection(string $direction)
 * @method string getOrder
 * @method self withOrder(string $order)
 */
class DescribeACLAttribute extends Rpc
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
 */
class DeleteACL extends Rpc
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
 * @method string getName
 * @method self withName(string $name)
 */
class ModifyACL extends Rpc
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
 * @method string getOwnerUserId
 * @method self withOwnerUserId(string $ownerUserId)
 * @method string getTradeId
 * @method self withTradeId(string $tradeId)
 * @method string getTmsCode
 * @method self withTmsCode(string $tmsCode)
 * @method string getTmsOrderCode
 * @method self withTmsOrderCode(string $tmsOrderCode)
 * @method int getOrderPostFee
 * @method self withOrderPostFee(int $orderPostFee)
 * @method array getOrderItem
 * @method self withOrderItem(array $orderItem)
 */
class UnicomOrderConfirm extends Rpc
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
 * @method array getTmsOrder
 * @method self withTmsOrder(array $tmsOrder)
 */
class UnicomSignConfirm extends Rpc
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
 * @method string getSmartAGId
 * @method self withSmartAGId(string $smartAGId)
 * @method int getBandWidthSpec
 * @method self withBandWidthSpec(int $bandWidthSpec)
 * @method bool getAutoPay
 * @method self withAutoPay(bool $autoPay)
 */
class DowngradeSmartAccessGateway extends Rpc
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
 * @method string getSmartAGId
 * @method self withSmartAGId(string $smartAGId)
 * @method int getBandWidthSpec
 * @method self withBandWidthSpec(int $bandWidthSpec)
 * @method bool getAutoPay
 * @method self withAutoPay(bool $autoPay)
 */
class UpgradeSmartAccessGateway extends Rpc
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
 * @method string getAssociatedCcnId
 * @method self withAssociatedCcnId(string $associatedCcnId)
 * @method string getPageSize
 * @method self withPageSize(string $pageSize)
 * @method string getPageNumber
 * @method self withPageNumber(string $pageNumber)
 */
class DescribeGrantRules extends Rpc
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
 * @method string getCenUid
 * @method self withCenUid(string $cenUid)
 * @method string getCcnInstanceId
 * @method self withCcnInstanceId(string $ccnInstanceId)
 * @method string getCenInstanceId
 * @method self withCenInstanceId(string $cenInstanceId)
 */
class GrantInstanceToCbn extends Rpc
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
 * @method string getCcnInstanceId
 * @method self withCcnInstanceId(string $ccnInstanceId)
 * @method string getCenInstanceId
 * @method self withCenInstanceId(string $cenInstanceId)
 */
class RevokeInstanceFromCbn extends Rpc
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
 * @method string getSmartAGId
 * @method self withSmartAGId(string $smartAGId)
 * @method string getHaType
 * @method self withHaType(string $haType)
 * @method string getMainLinkId
 * @method self withMainLinkId(string $mainLinkId)
 * @method string getBackupLinkId
 * @method self withBackupLinkId(string $backupLinkId)
 * @method string getMainLinkRegionId
 * @method self withMainLinkRegionId(string $mainLinkRegionId)
 * @method string getBackupLinkRegionId
 * @method self withBackupLinkRegionId(string $backupLinkRegionId)
 */
class CreateSAGLinkLevelHa extends Rpc
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
 * @method string getSmartAGId
 * @method self withSmartAGId(string $smartAGId)
 * @method string getHaType
 * @method self withHaType(string $haType)
 */
class SwitchSAGHaState extends Rpc
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
 * @method string getSmartAGId
 * @method self withSmartAGId(string $smartAGId)
 * @method string getHaType
 * @method self withHaType(string $haType)
 */
class DeleteSAGLinkLevelHa extends Rpc
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
 * @method string getSmartAGId
 * @method self withSmartAGId(string $smartAGId)
 */
class DeleteDedicatedLineBackup extends Rpc
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
 * @method string getSmartAGId
 * @method self withSmartAGId(string $smartAGId)
 * @method string getVbrId
 * @method self withVbrId(string $vbrId)
 * @method string getVbrRegionId
 * @method self withVbrRegionId(string $vbrRegionId)
 */
class CreateDedicatedLineBackup extends Rpc
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
 * @method string getSmartAGId
 * @method self withSmartAGId(string $smartAGId)
 */
class DescribeSmartAccessGatewayHa extends Rpc
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
 * @method string getSmartAGId
 * @method self withSmartAGId(string $smartAGId)
 */
class SwitchCloudBoxHaState extends Rpc
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
 * @method string getSmartAGId
 * @method self withSmartAGId(string $smartAGId)
 * @method string getSerialNumber
 * @method self withSerialNumber(string $serialNumber)
 */
class RebootSmartAccessGateway extends Rpc
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
 * @method Integer getMaxBandWidth
 * @method self withMaxBandWidth(Integer $maxBandWidth)
 * @method string getName
 * @method self withName(string $name)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method Integer getPeriod
 * @method self withPeriod(Integer $period)
 * @method bool getAutoPay
 * @method self withAutoPay(bool $autoPay)
 * @method string getHardWareSpec
 * @method self withHardWareSpec(string $hardWareSpec)
 * @method string getReceiverCountry
 * @method self withReceiverCountry(string $receiverCountry)
 * @method string getReceiverState
 * @method self withReceiverState(string $receiverState)
 * @method string getReceiverCity
 * @method self withReceiverCity(string $receiverCity)
 * @method string getReceiverDistrict
 * @method self withReceiverDistrict(string $receiverDistrict)
 * @method string getReceiverTown
 * @method self withReceiverTown(string $receiverTown)
 * @method string getReceiverZip
 * @method self withReceiverZip(string $receiverZip)
 * @method string getReceiverPhone
 * @method self withReceiverPhone(string $receiverPhone)
 * @method string getReceiverMobile
 * @method self withReceiverMobile(string $receiverMobile)
 * @method string getReceiverName
 * @method self withReceiverName(string $receiverName)
 * @method string getReceiverEmail
 * @method self withReceiverEmail(string $receiverEmail)
 * @method string getBuyerMessage
 * @method self withBuyerMessage(string $buyerMessage)
 * @method string getReceiverAddress
 * @method self withReceiverAddress(string $receiverAddress)
 * @method string getHaType
 * @method self withHaType(string $haType)
 * @method string getChargeType
 * @method self withChargeType(string $chargeType)
 */
class CreateSmartAccessGateway extends Rpc
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
 * @method string getSmartAGId
 * @method self withSmartAGId(string $smartAGId)
 */
class ActivateSmartAccessGateway extends Rpc
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
 * @method string getSmartAGId
 * @method self withSmartAGId(string $smartAGId)
 */
class UnlockSmartAccessGateway extends Rpc
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
 * @method string getCcnId
 * @method self withCcnId(string $ccnId)
 * @method string getSmartAGId
 * @method self withSmartAGId(string $smartAGId)
 */
class BindSmartAccessGateway extends Rpc
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
 * @method bool getIsDefault
 * @method self withIsDefault(bool $isDefault)
 * @method string getName
 * @method self withName(string $name)
 * @method string getDescription
 * @method self withDescription(string $description)
 */
class CreateCloudConnectNetwork extends Rpc
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
 * @method string getCcnId
 * @method self withCcnId(string $ccnId)
 */
class DeleteCloudConnectNetwork extends Rpc
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
 * @method string getCcnId
 * @method self withCcnId(string $ccnId)
 * @method string getPageSize
 * @method self withPageSize(string $pageSize)
 * @method string getPageNumber
 * @method self withPageNumber(string $pageNumber)
 */
class DescribeCloudConnectNetworks extends Rpc
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
 * @method string getAcceptLanguage
 * @method self withAcceptLanguage(string $acceptLanguage)
 */
class DescribeRegions extends Rpc
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
 * @method string getAssociatedCcnId
 * @method self withAssociatedCcnId(string $associatedCcnId)
 * @method string getSmartAGId
 * @method self withSmartAGId(string $smartAGId)
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method string getName
 * @method self withName(string $name)
 * @method string getPageSize
 * @method self withPageSize(string $pageSize)
 * @method string getPageNumber
 * @method self withPageNumber(string $pageNumber)
 * @method string getSerialNumber
 * @method self withSerialNumber(string $serialNumber)
 * @method string getAclIds
 * @method self withAclIds(string $aclIds)
 * @method string getUnboundAclIds
 * @method self withUnboundAclIds(string $unboundAclIds)
 */
class DescribeSmartAccessGateways extends Rpc
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
 */
class GetCloudConnectNetworkUseLimit extends Rpc
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
 */
class GetSmartAccessGatewayUseLimit extends Rpc
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
 * @method string getCidrBlock
 * @method self withCidrBlock(string $cidrBlock)
 * @method string getBandWidthSpec
 * @method self withBandWidthSpec(string $bandWidthSpec)
 * @method string getCity
 * @method self withCity(string $city)
 */
class InnerCreateSmartAccessGateway extends Rpc
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
 * @method string getCcnId
 * @method self withCcnId(string $ccnId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getDescription
 * @method self withDescription(string $description)
 */
class ModifyCloudConnectNetwork extends Rpc
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
 * @method string getCity
 * @method self withCity(string $city)
 * @method string getSmartAGId
 * @method self withSmartAGId(string $smartAGId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getCidrBlock
 * @method self withCidrBlock(string $cidrBlock)
 * @method Integer getSecurityLockThreshold
 * @method self withSecurityLockThreshold(Integer $securityLockThreshold)
 */
class ModifySmartAccessGateway extends Rpc
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
 * @method string getCcnId
 * @method self withCcnId(string $ccnId)
 * @method string getSmartAGId
 * @method self withSmartAGId(string $smartAGId)
 */
class UnbindSmartAccessGateway extends Rpc
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
 * @method string getSmartAGId
 * @method self withSmartAGId(string $smartAGId)
 * @method string getVersionCode
 * @method self withVersionCode(string $versionCode)
 * @method string getSerialNumber
 * @method self withSerialNumber(string $serialNumber)
 */
class UpdateSmartAccessGatewayVersion extends Rpc
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
 * @method string getSmartAGId
 * @method self withSmartAGId(string $smartAGId)
 */
class DescribeSmartAccessGatewayVersions extends Rpc
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
class SmartAccessGatewayFillParams extends Rpc
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
class SmartAccessGatewayFillRestrictions extends Rpc
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
class SmartAccessGatewayValidateOrder extends Rpc
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
 * @method string getdata
 * @method self withdata(string $data)
 */
class SmartAccessGatewayPrepayNotifyPaid extends Rpc
{
    use R;
}
