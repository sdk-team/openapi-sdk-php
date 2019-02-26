<?php

namespace AlibabaCloud\Saf\V20171001;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RpcRequest as Rpc;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method SetWarnNum setWarnNum($options = [])
 * @method GetUserWarnSetting getUserWarnSetting($options = [])
 */
class V20171001
{
    use ApiResolverTrait;
}

/**
 * @method int getId
 * @method self withId(int $id)
 * @method string getGmtSetting
 * @method self withGmtSetting(string $gmtSetting)
 * @method int getUserId
 * @method self withUserId(int $userId)
 * @method string getBizCode
 * @method self withBizCode(string $bizCode)
 * @method string getProductCode
 * @method self withProductCode(string $productCode)
 * @method int getLimit
 * @method self withLimit(int $limit)
 * @method int getWarnNum
 * @method self withWarnNum(int $warnNum)
 * @method string getOperator
 * @method self withOperator(string $operator)
 * @method string getMemo
 * @method self withMemo(string $memo)
 */
class SetWarnNum extends Rpc
{
    use R;
}

/**
 * @method int getUserId
 * @method self withUserId(int $userId)
 * @method string getProductCode
 * @method self withProductCode(string $productCode)
 * @method string getBizCode
 * @method self withBizCode(string $bizCode)
 */
class GetUserWarnSetting extends Rpc
{
    use R;
}
