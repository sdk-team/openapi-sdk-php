<?php

namespace AlibabaCloud\LinkFace\V20180608;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RpcRequest as Rpc;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method UpdateFace updateFace($options = [])
 * @method UnLinkFace unLinkFace($options = [])
 * @method SyncFacePictures syncFacePictures($options = [])
 * @method RegisterFace registerFace($options = [])
 * @method QueryUsers queryUsers($options = [])
 * @method QuerySyncPicSchedule querySyncPicSchedule($options = [])
 * @method QueryGroups queryGroups($options = [])
 * @method QueryFace queryFace($options = [])
 * @method LinkFace linkFace($options = [])
 * @method DeleteGroup deleteGroup($options = [])
 * @method DeleteFace deleteFace($options = [])
 * @method CreateGroup createGroup($options = [])
 * @method BuyLicenses buyLicenses($options = [])
 */
class V20180608
{
    use ApiResolverTrait;
}

/**
 * @method string getUserId
 * @method self withUserId(string $userId)
 * @method string getImage
 * @method self withImage(string $image)
 */
class UpdateFace extends Rpc
{
    use R;
}

/**
 * @method string getUserId
 * @method self withUserId(string $userId)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 */
class UnLinkFace extends Rpc
{
    use R;
}

/**
 * @method string getIotId
 * @method self withIotId(string $iotId)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 */
class SyncFacePictures extends Rpc
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
 */
class RegisterFace extends Rpc
{
    use R;
}

/**
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 */
class QueryUsers extends Rpc
{
    use R;
}

/**
 * @method string getIotId
 * @method self withIotId(string $iotId)
 */
class QuerySyncPicSchedule extends Rpc
{
    use R;
}

class QueryGroups extends Rpc
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
 * @method string getUserId
 * @method self withUserId(string $userId)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 */
class DeleteFace extends Rpc
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

/**
 * @method Integer getLicenseType
 * @method self withLicenseType(Integer $licenseType)
 * @method int getQuantity
 * @method self withQuantity(int $quantity)
 */
class BuyLicenses extends Rpc
{
    use R;
}
