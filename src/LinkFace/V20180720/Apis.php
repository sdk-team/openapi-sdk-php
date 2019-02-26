<?php

namespace AlibabaCloud\LinkFace\V20180720;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RpcRequest as Rpc;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method DeleteDeviceGroup deleteDeviceGroup($options = [])
 * @method DeleteDeviceAllGroup deleteDeviceAllGroup($options = [])
 * @method SearchFace searchFace($options = [])
 * @method QueryLicenses queryLicenses($options = [])
 * @method QueryAuthentication queryAuthentication($options = [])
 * @method QueryAddUserInfo queryAddUserInfo($options = [])
 * @method UnlinkFace unlinkFace($options = [])
 * @method QueryAllGroups queryAllGroups($options = [])
 * @method SyncFacePictures syncFacePictures($options = [])
 * @method QuerySyncPicSchedule querySyncPicSchedule($options = [])
 * @method QueryGroupUsers queryGroupUsers($options = [])
 * @method QueryFace queryFace($options = [])
 * @method UpdateFace updateFace($options = [])
 * @method DeleteFace deleteFace($options = [])
 * @method RegisterFace registerFace($options = [])
 * @method LinkFace linkFace($options = [])
 * @method DeleteGroup deleteGroup($options = [])
 * @method CreateGroup createGroup($options = [])
 */
class V20180720
{
    use ApiResolverTrait;
}

/**
 * @method string getIotId
 * @method self withIotId(string $iotId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 */
class DeleteDeviceGroup extends Rpc
{
    use R;
}

/**
 * @method string getIotId
 * @method self withIotId(string $iotId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class DeleteDeviceAllGroup extends Rpc
{
    use R;
}

/**
 * @method string getImage
 * @method self withImage(string $image)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 */
class SearchFace extends Rpc
{
    use R;
}

/**
 * @method Integer getLicenseType
 * @method self withLicenseType(Integer $licenseType)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class QueryLicenses extends Rpc
{
    use R;
}

/**
 * @method Integer getLicenseType
 * @method self withLicenseType(Integer $licenseType)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getIotId
 * @method self withIotId(string $iotId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class QueryAuthentication extends Rpc
{
    use R;
}

/**
 * @method string getIotId
 * @method self withIotId(string $iotId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 */
class QueryAddUserInfo extends Rpc
{
    use R;
}

/**
 * @method string getUserId
 * @method self withUserId(string $userId)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 */
class UnlinkFace extends Rpc
{
    use R;
}

/**
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class QueryAllGroups extends Rpc
{
    use R;
}

/**
 * @method string getIotId
 * @method self withIotId(string $iotId)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class SyncFacePictures extends Rpc
{
    use R;
}

/**
 * @method string getIotId
 * @method self withIotId(string $iotId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 */
class QuerySyncPicSchedule extends Rpc
{
    use R;
}

/**
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class QueryGroupUsers extends Rpc
{
    use R;
}

/**
 * @method string getUserId
 * @method self withUserId(string $userId)
 */
class QueryFace extends Rpc
{
    use R;
}

/**
 * @method string getUserId
 * @method self withUserId(string $userId)
 * @method string getImage
 * @method self withImage(string $image)
 * @method string getUserInfo
 * @method self withUserInfo(string $userInfo)
 */
class UpdateFace extends Rpc
{
    use R;
}

/**
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getUserId
 * @method self withUserId(string $userId)
 */
class DeleteFace extends Rpc
{
    use R;
}

/**
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getUserId
 * @method self withUserId(string $userId)
 * @method string getImage
 * @method self withImage(string $image)
 * @method string getUserInfo
 * @method self withUserInfo(string $userInfo)
 */
class RegisterFace extends Rpc
{
    use R;
}

/**
 * @method string getUserId
 * @method self withUserId(string $userId)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 */
class LinkFace extends Rpc
{
    use R;
}

/**
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 */
class DeleteGroup extends Rpc
{
    use R;
}

/**
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 */
class CreateGroup extends Rpc
{
    use R;
}
