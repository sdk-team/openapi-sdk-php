<?php

namespace AlibabaCloud\Jarvis\V20180206;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RpcRequest as Rpc;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method DescribeCdnCertify describeCdnCertify($options = [])
 * @method CreateAllEcsWhiteList createAllEcsWhiteList($options = [])
 * @method DescribeSpecialEcs describeSpecialEcs($options = [])
 * @method DescribeEcsListPage describeEcsListPage($options = [])
 * @method DescribeConsoleAccessWhiteList describeConsoleAccessWhiteList($options = [])
 * @method CreateConsoleAccessWhiteList createConsoleAccessWhiteList($options = [])
 * @method DeleteConsoleAccessWhiteList deleteConsoleAccessWhiteList($options = [])
 * @method DeleteCdnIp deleteCdnIp($options = [])
 * @method CreateCdnIp createCdnIp($options = [])
 * @method DescribeCdnIpList describeCdnIpList($options = [])
 * @method DeleteCdnSubscription deleteCdnSubscription($options = [])
 * @method CreateCdnSubscription createCdnSubscription($options = [])
 * @method DescribeCdnSubscription describeCdnSubscription($options = [])
 * @method DescribeCdnVendor describeCdnVendor($options = [])
 * @method DescribeAccessWhiteListSlbList describeAccessWhiteListSlbList($options = [])
 * @method DescribeAccessWhiteListEipList describeAccessWhiteListEipList($options = [])
 * @method DescribePunishList describePunishList($options = [])
 * @method DescribeRiskListDetail describeRiskListDetail($options = [])
 * @method DescribeDdosDefenseInfo describeDdosDefenseInfo($options = [])
 * @method DescribePhoneInfo describePhoneInfo($options = [])
 * @method DeleteUidWhiteListGroup deleteUidWhiteListGroup($options = [])
 * @method ModifyUidWhiteListAutoShare modifyUidWhiteListAutoShare($options = [])
 * @method CreateUidWhiteListGroup createUidWhiteListGroup($options = [])
 * @method DescribeUidWhiteListGroup describeUidWhiteListGroup($options = [])
 * @method DescribeRiskTrend describeRiskTrend($options = [])
 * @method ModifyAccessWhiteListAutoShare modifyAccessWhiteListAutoShare($options = [])
 * @method DescribeUidGcLevel describeUidGcLevel($options = [])
 * @method DescribeResetRecordQueryCount describeResetRecordQueryCount($options = [])
 * @method DescribeResetRecordList describeResetRecordList($options = [])
 * @method DescribeCpmcPunishList describeCpmcPunishList($options = [])
 * @method DescribeAccessWhiteListGroup describeAccessWhiteListGroup($options = [])
 * @method DescribeAccessWhitelistEcsList describeAccessWhitelistEcsList($options = [])
 * @method DeleteAccessWhiteListGroup deleteAccessWhiteListGroup($options = [])
 * @method CreateCpmcPunishFeedBack createCpmcPunishFeedBack($options = [])
 * @method CreateAccessWhiteListGroup createAccessWhiteListGroup($options = [])
 */
class V20180206
{
    use ApiResolverTrait;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getSourceCode
 * @method self withSourceCode(string $sourceCode)
 * @method string getLang
 * @method self withLang(string $lang)
 */
class DescribeCdnCertify extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getSourceCode
 * @method self withSourceCode(string $sourceCode)
 * @method string getSrcIP
 * @method self withSrcIP(string $srcIP)
 */
class CreateAllEcsWhiteList extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getSourceCode
 * @method self withSourceCode(string $sourceCode)
 * @method string getTargetIp
 * @method self withTargetIp(string $targetIp)
 * @method string getLang
 * @method self withLang(string $lang)
 */
class DescribeSpecialEcs extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getSourceCode
 * @method self withSourceCode(string $sourceCode)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method string getLang
 * @method self withLang(string $lang)
 */
class DescribeEcsListPage extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method string getSourceCode
 * @method self withSourceCode(string $sourceCode)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getWhiteListType
 * @method self withWhiteListType(Integer $whiteListType)
 * @method string getqueryProduct
 * @method self withqueryProduct(string $queryProduct)
 * @method string getDstIP
 * @method self withDstIP(string $dstIP)
 * @method string getSrcIP
 * @method self withSrcIP(string $srcIP)
 * @method string getLang
 * @method self withLang(string $lang)
 */
class DescribeConsoleAccessWhiteList extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getSourceCode
 * @method self withSourceCode(string $sourceCode)
 * @method Integer getWhiteListType
 * @method self withWhiteListType(Integer $whiteListType)
 * @method string getProductName
 * @method self withProductName(string $productName)
 * @method Integer getDstPort
 * @method self withDstPort(Integer $dstPort)
 * @method string getSrcIP
 * @method self withSrcIP(string $srcIP)
 * @method string getInstanceIdList
 * @method self withInstanceIdList(string $instanceIdList)
 * @method string getInstanceInfoList
 * @method self withInstanceInfoList(string $instanceInfoList)
 * @method Integer getLiveTime
 * @method self withLiveTime(Integer $liveTime)
 * @method string getNote
 * @method self withNote(string $note)
 * @method string getLang
 * @method self withLang(string $lang)
 */
class CreateConsoleAccessWhiteList extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getDisableWhitelist
 * @method self withDisableWhitelist(string $disableWhitelist)
 * @method string getSourceCode
 * @method self withSourceCode(string $sourceCode)
 * @method string getLang
 * @method self withLang(string $lang)
 */
class DeleteConsoleAccessWhiteList extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getSourceCode
 * @method self withSourceCode(string $sourceCode)
 * @method string getCdnIp
 * @method self withCdnIp(string $cdnIp)
 * @method Integer getItemId
 * @method self withItemId(Integer $itemId)
 */
class DeleteCdnIp extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getSourceCode
 * @method self withSourceCode(string $sourceCode)
 * @method string getCdnIpList
 * @method self withCdnIpList(string $cdnIpList)
 */
class CreateCdnIp extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getSourceCode
 * @method self withSourceCode(string $sourceCode)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getWlState
 * @method self withWlState(Integer $wlState)
 * @method string getSrcIP
 * @method self withSrcIP(string $srcIP)
 * @method string getLang
 * @method self withLang(string $lang)
 */
class DescribeCdnIpList extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getSourceCode
 * @method self withSourceCode(string $sourceCode)
 * @method string getCdnUidList
 * @method self withCdnUidList(string $cdnUidList)
 */
class DeleteCdnSubscription extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getSourceCode
 * @method self withSourceCode(string $sourceCode)
 * @method string getCdnUidList
 * @method self withCdnUidList(string $cdnUidList)
 */
class CreateCdnSubscription extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getSourceCode
 * @method self withSourceCode(string $sourceCode)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getVendorName
 * @method self withVendorName(string $vendorName)
 * @method Integer getSubscriptionState
 * @method self withSubscriptionState(Integer $subscriptionState)
 */
class DescribeCdnSubscription extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getSourceCode
 * @method self withSourceCode(string $sourceCode)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method string getLang
 * @method self withLang(string $lang)
 */
class DescribeCdnVendor extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getSourceCode
 * @method self withSourceCode(string $sourceCode)
 * @method string getLang
 * @method self withLang(string $lang)
 */
class DescribeAccessWhiteListSlbList extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getSourceCode
 * @method self withSourceCode(string $sourceCode)
 * @method string getLang
 * @method self withLang(string $lang)
 */
class DescribeAccessWhiteListEipList extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getsourceCode
 * @method self withsourceCode(string $sourceCode)
 * @method int getsrcUid
 * @method self withsrcUid(int $srcUid)
 * @method string getSrcIP
 * @method self withSrcIP(string $srcIP)
 * @method string getPunishStatus
 * @method self withPunishStatus(string $punishStatus)
 * @method Integer getpageSize
 * @method self withpageSize(Integer $pageSize)
 * @method Integer getcurrentPage
 * @method self withcurrentPage(Integer $currentPage)
 * @method string getLang
 * @method self withLang(string $lang)
 */
class DescribePunishList extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getsourceCode
 * @method self withsourceCode(string $sourceCode)
 * @method int getsrcUid
 * @method self withsrcUid(int $srcUid)
 * @method string getqueryRegionId
 * @method self withqueryRegionId(string $queryRegionId)
 * @method string getriskType
 * @method self withriskType(string $riskType)
 * @method string getriskDescribe
 * @method self withriskDescribe(string $riskDescribe)
 * @method Integer getcurrentPage
 * @method self withcurrentPage(Integer $currentPage)
 * @method Integer getpageSize
 * @method self withpageSize(Integer $pageSize)
 * @method string getqueryProduct
 * @method self withqueryProduct(string $queryProduct)
 * @method string getstatus
 * @method self withstatus(string $status)
 */
class DescribeRiskListDetail extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getsourceCode
 * @method self withsourceCode(string $sourceCode)
 * @method int getsrcUid
 * @method self withsrcUid(int $srcUid)
 */
class DescribeDdosDefenseInfo extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getsourceCode
 * @method self withsourceCode(string $sourceCode)
 * @method string getphoneNum
 * @method self withphoneNum(string $phoneNum)
 */
class DescribePhoneInfo extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getGroupIdList
 * @method self withGroupIdList(string $groupIdList)
 * @method string getSourceCode
 * @method self withSourceCode(string $sourceCode)
 * @method string getLang
 * @method self withLang(string $lang)
 */
class DeleteUidWhiteListGroup extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getSourceCode
 * @method self withSourceCode(string $sourceCode)
 * @method Integer getWhiteListType
 * @method self withWhiteListType(Integer $whiteListType)
 * @method string getProductName
 * @method self withProductName(string $productName)
 * @method string getSrcUid
 * @method self withSrcUid(string $srcUid)
 * @method Integer getAutoConfig
 * @method self withAutoConfig(Integer $autoConfig)
 * @method string getLang
 * @method self withLang(string $lang)
 */
class ModifyUidWhiteListAutoShare extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getSourceCode
 * @method self withSourceCode(string $sourceCode)
 * @method Integer getWhiteListType
 * @method self withWhiteListType(Integer $whiteListType)
 * @method string getProductName
 * @method self withProductName(string $productName)
 * @method Integer getDstPort
 * @method self withDstPort(Integer $dstPort)
 * @method string getSrcUid
 * @method self withSrcUid(string $srcUid)
 * @method string getInstanceIdList
 * @method self withInstanceIdList(string $instanceIdList)
 * @method Integer getLiveTime
 * @method self withLiveTime(Integer $liveTime)
 * @method string getNote
 * @method self withNote(string $note)
 * @method string getLang
 * @method self withLang(string $lang)
 */
class CreateUidWhiteListGroup extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method string getSourceCode
 * @method self withSourceCode(string $sourceCode)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getWhiteListType
 * @method self withWhiteListType(Integer $whiteListType)
 * @method string getDstIP
 * @method self withDstIP(string $dstIP)
 * @method string getSrcUid
 * @method self withSrcUid(string $srcUid)
 * @method string getLang
 * @method self withLang(string $lang)
 */
class DescribeUidWhiteListGroup extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getPeroid
 * @method self withPeroid(string $peroid)
 * @method string getSourceCode
 * @method self withSourceCode(string $sourceCode)
 * @method string getQueryProduct
 * @method self withQueryProduct(string $queryProduct)
 * @method string getQueryRegionId
 * @method self withQueryRegionId(string $queryRegionId)
 */
class DescribeRiskTrend extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getSourceCode
 * @method self withSourceCode(string $sourceCode)
 * @method Integer getWhiteListType
 * @method self withWhiteListType(Integer $whiteListType)
 * @method string getProductName
 * @method self withProductName(string $productName)
 * @method string getSrcIP
 * @method self withSrcIP(string $srcIP)
 * @method Integer getAutoConfig
 * @method self withAutoConfig(Integer $autoConfig)
 * @method string getLang
 * @method self withLang(string $lang)
 */
class ModifyAccessWhiteListAutoShare extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getSourceCode
 * @method self withSourceCode(string $sourceCode)
 * @method string getLang
 * @method self withLang(string $lang)
 */
class DescribeUidGcLevel extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getSourceCode
 * @method self withSourceCode(string $sourceCode)
 * @method string getLang
 * @method self withLang(string $lang)
 */
class DescribeResetRecordQueryCount extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getSourceCode
 * @method self withSourceCode(string $sourceCode)
 * @method string getSrcIP
 * @method self withSrcIP(string $srcIP)
 * @method string getDstIP
 * @method self withDstIP(string $dstIP)
 * @method string getPeriod
 * @method self withPeriod(string $period)
 * @method string getRegion
 * @method self withRegion(string $region)
 * @method Integer getpageSize
 * @method self withpageSize(Integer $pageSize)
 * @method Integer getcurrentPage
 * @method self withcurrentPage(Integer $currentPage)
 * @method string getLang
 * @method self withLang(string $lang)
 */
class DescribeResetRecordList extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getSourceCode
 * @method self withSourceCode(string $sourceCode)
 * @method string getSrcIP
 * @method self withSrcIP(string $srcIP)
 * @method string getPunishStatus
 * @method self withPunishStatus(string $punishStatus)
 * @method Integer getpageSize
 * @method self withpageSize(Integer $pageSize)
 * @method Integer getcurrentPage
 * @method self withcurrentPage(Integer $currentPage)
 * @method string getLang
 * @method self withLang(string $lang)
 */
class DescribeCpmcPunishList extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method string getSourceCode
 * @method self withSourceCode(string $sourceCode)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getWhiteListType
 * @method self withWhiteListType(Integer $whiteListType)
 * @method string getqueryProduct
 * @method self withqueryProduct(string $queryProduct)
 * @method string getDstIP
 * @method self withDstIP(string $dstIP)
 * @method string getSrcIP
 * @method self withSrcIP(string $srcIP)
 * @method string getLang
 * @method self withLang(string $lang)
 */
class DescribeAccessWhiteListGroup extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getSourceCode
 * @method self withSourceCode(string $sourceCode)
 * @method string getLang
 * @method self withLang(string $lang)
 */
class DescribeAccessWhitelistEcsList extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getGroupIdList
 * @method self withGroupIdList(string $groupIdList)
 * @method string getSourceCode
 * @method self withSourceCode(string $sourceCode)
 * @method string getLang
 * @method self withLang(string $lang)
 */
class DeleteAccessWhiteListGroup extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getSourceCode
 * @method self withSourceCode(string $sourceCode)
 * @method string getGmtCreate
 * @method self withGmtCreate(string $gmtCreate)
 * @method Integer getSrcPort
 * @method self withSrcPort(Integer $srcPort)
 * @method Integer getFeedBack
 * @method self withFeedBack(Integer $feedBack)
 * @method string getPunishType
 * @method self withPunishType(string $punishType)
 * @method string getDstIP
 * @method self withDstIP(string $dstIP)
 * @method Integer getDstPort
 * @method self withDstPort(Integer $dstPort)
 * @method string getProtocolName
 * @method self withProtocolName(string $protocolName)
 * @method string getSrcIP
 * @method self withSrcIP(string $srcIP)
 * @method string getLang
 * @method self withLang(string $lang)
 */
class CreateCpmcPunishFeedBack extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getSourceCode
 * @method self withSourceCode(string $sourceCode)
 * @method Integer getWhiteListType
 * @method self withWhiteListType(Integer $whiteListType)
 * @method string getProductName
 * @method self withProductName(string $productName)
 * @method Integer getDstPort
 * @method self withDstPort(Integer $dstPort)
 * @method string getSrcIP
 * @method self withSrcIP(string $srcIP)
 * @method string getInstanceIdList
 * @method self withInstanceIdList(string $instanceIdList)
 * @method string getInstanceInfoList
 * @method self withInstanceInfoList(string $instanceInfoList)
 * @method Integer getLiveTime
 * @method self withLiveTime(Integer $liveTime)
 * @method string getNote
 * @method self withNote(string $note)
 * @method string getLang
 * @method self withLang(string $lang)
 */
class CreateAccessWhiteListGroup extends Rpc
{
    use R;
}
