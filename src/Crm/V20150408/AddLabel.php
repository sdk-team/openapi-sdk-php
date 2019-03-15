<?php

namespace AlibabaCloud\Crm\V20150408;

use AlibabaCloud\Rpc;

/**
 * @method string getLabelSeries()
 * @method $this withLabelSeries($value)
 * @method string getOrganization()
 * @method $this withOrganization($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getPK()
 * @method $this withPK($value)
 * @method string getLabelName()
 * @method $this withLabelName($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class AddLabel extends Rpc
{
    public $product = 'Crm';

    public $version = '2015-04-08';

    public $method = 'POST';

    public $serviceCode = 'crm';
}
