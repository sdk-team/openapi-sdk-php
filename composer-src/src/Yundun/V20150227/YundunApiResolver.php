<?php

namespace AlibabaCloud\Yundun\V20150227;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AllMalwareNum allMalwareNum(array $options = [])
 * @method TodayAllpps todayAllpps(array $options = [])
 * @method TodayqpsByRegion todayqpsByRegion(array $options = [])
 * @method TodayCrackIntercept todayCrackIntercept(array $options = [])
 * @method WebAttackNum webAttackNum(array $options = [])
 * @method TodayMalwareNum todayMalwareNum(array $options = [])
 * @method TodayAegisOnlineRate todayAegisOnlineRate(array $options = [])
 * @method TodayAllkbps todayAllkbps(array $options = [])
 * @method CurrentDdosAttackNum currentDdosAttackNum(array $options = [])
 * @method TodayBackdoor todayBackdoor(array $options = [])
 */
class YundunApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Yundun';

    /** @var string */
    public $version = '2015-02-27';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'yundun';
}

class AllMalwareNum extends Rpc
{
}

class TodayAllpps extends Rpc
{
}

class TodayqpsByRegion extends Rpc
{
}

class TodayCrackIntercept extends Rpc
{
}

class WebAttackNum extends Rpc
{
}

class TodayMalwareNum extends Rpc
{
}

class TodayAegisOnlineRate extends Rpc
{
}

class TodayAllkbps extends Rpc
{
}

class CurrentDdosAttackNum extends Rpc
{
}

class TodayBackdoor extends Rpc
{
}
