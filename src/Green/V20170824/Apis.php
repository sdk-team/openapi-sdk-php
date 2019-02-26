<?php

namespace AlibabaCloud\Green\V20170824;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RpcRequest as Rpc;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method MarkCdnImagePornData markCdnImagePornData($options = [])
 * @method ExportCdnImagePornScanViolationData exportCdnImagePornScanViolationData($options = [])
 * @method DescribeCdnImagePornStatData describeCdnImagePornStatData($options = [])
 * @method DescribeCdnImagePornScanData describeCdnImagePornScanData($options = [])
 */
class V20170824
{
    use ApiResolverTrait;
}

/**
 * @method string getIds
 * @method self withIds(string $ids)
 * @method string getMarkLabel
 * @method self withMarkLabel(string $markLabel)
 */
class MarkCdnImagePornData extends Rpc
{
    use R;
}

/**
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getDomainNames
 * @method self withDomainNames(string $domainNames)
 */
class ExportCdnImagePornScanViolationData extends Rpc
{
    use R;
}

/**
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getDomainNames
 * @method self withDomainNames(string $domainNames)
 */
class DescribeCdnImagePornStatData extends Rpc
{
    use R;
}

/**
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getDomainNames
 * @method self withDomainNames(string $domainNames)
 * @method string getScanLabel
 * @method self withScanLabel(string $scanLabel)
 * @method string getMarkLabel
 * @method self withMarkLabel(string $markLabel)
 * @method Integer getPageNo
 * @method self withPageNo(Integer $pageNo)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeCdnImagePornScanData extends Rpc
{
    use R;
}
