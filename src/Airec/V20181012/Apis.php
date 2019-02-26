<?php

namespace AlibabaCloud\Airec\V20181012;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method DescribeDashboard describeDashboard($options = [])
 * @method DescribeDataSetReport describeDataSetReport($options = [])
 * @method UpgradeInstance upgradeInstance($options = [])
 * @method ValidateInstance validateInstance($options = [])
 * @method DescribeSchema describeSchema($options = [])
 * @method ListMix listMix($options = [])
 * @method RunInstance runInstance($options = [])
 * @method ModifyMix modifyMix($options = [])
 * @method DeleteMix deleteMix($options = [])
 * @method CreateDiversify createDiversify($options = [])
 * @method DeleteDiversify deleteDiversify($options = [])
 * @method ListDiversify listDiversify($options = [])
 * @method DescribeDiversify describeDiversify($options = [])
 * @method ModifyDiversify modifyDiversify($options = [])
 * @method ListDataSet listDataSet($options = [])
 * @method AttachDataset attachDataset($options = [])
 * @method StopDataSet stopDataSet($options = [])
 * @method DeleteDataSet deleteDataSet($options = [])
 * @method PushIntervention pushIntervention($options = [])
 * @method DescribeQuota describeQuota($options = [])
 * @method ListDataSource listDataSource($options = [])
 * @method DescribeMix describeMix($options = [])
 * @method CreateMix createMix($options = [])
 * @method ModifyInstance modifyInstance($options = [])
 * @method DescribeInstance describeInstance($options = [])
 * @method Recommend recommend($options = [])
 * @method PushDocument pushDocument($options = [])
 * @method CreateInstance createInstance($options = [])
 * @method ModifyDataSource modifyDataSource($options = [])
 * @method DescribeDataSetMessage describeDataSetMessage($options = [])
 * @method ListInstance listInstance($options = [])
 */
class V20181012
{
    use ApiResolverTrait;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getStartDate
 * @method self withStartDate(string $startDate)
 * @method string getEndDate
 * @method self withEndDate(string $endDate)
 */
class DescribeDashboard extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getVersionId
 * @method self withVersionId(string $versionId)
 */
class DescribeDataSetReport extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class UpgradeInstance extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class ValidateInstance extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class DescribeSchema extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class ListMix extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class RunInstance extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getName
 * @method self withName(string $name)
 */
class ModifyMix extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getName
 * @method self withName(string $name)
 */
class DeleteMix extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class CreateDiversify extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getName
 * @method self withName(string $name)
 */
class DeleteDiversify extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class ListDiversify extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getName
 * @method self withName(string $name)
 */
class DescribeDiversify extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getName
 * @method self withName(string $name)
 */
class ModifyDiversify extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class ListDataSet extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getVersionId
 * @method self withVersionId(string $versionId)
 */
class AttachDataset extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getVersionId
 * @method self withVersionId(string $versionId)
 */
class StopDataSet extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getVersionId
 * @method self withVersionId(string $versionId)
 */
class DeleteDataSet extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class PushIntervention extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class DescribeQuota extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class ListDataSource extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getName
 * @method self withName(string $name)
 */
class DescribeMix extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class CreateMix extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class ModifyInstance extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class DescribeInstance extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getSceneId
 * @method self withSceneId(string $sceneId)
 * @method string getUserId
 * @method self withUserId(string $userId)
 * @method string getIp
 * @method self withIp(string $ip)
 * @method string getImei
 * @method self withImei(string $imei)
 * @method Integer getReturnCount
 * @method self withReturnCount(Integer $returnCount)
 */
class Recommend extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getTableName
 * @method self withTableName(string $tableName)
 */
class PushDocument extends Roa
{
    use R;
}

class CreateInstance extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getTableName
 * @method self withTableName(string $tableName)
 */
class ModifyDataSource extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getVersionId
 * @method self withVersionId(string $versionId)
 */
class DescribeDataSetMessage extends Roa
{
    use R;
}

class ListInstance extends Roa
{
    use R;
}
