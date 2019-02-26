<?php

namespace AlibabaCloud\BatchCompute\V20160808;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method ListProjects listProjects($options = [])
 * @method ListObjects listObjects($options = [])
 * @method GetUploadpath getUploadpath($options = [])
 * @method GetProjectQuota getProjectQuota($options = [])
 * @method GetProject getProject($options = [])
 * @method GetObject getObject($options = [])
 * @method DeleteProject deleteProject($options = [])
 * @method DeleteObject deleteObject($options = [])
 * @method CreateProject createProject($options = [])
 * @method CreateObject createObject($options = [])
 */
class V20160808
{
    use ApiResolverTrait;
}

class ListProjects extends Roa
{
    use R;
}

class ListObjects extends Roa
{
    use R;
}

class GetUploadpath extends Roa
{
    use R;
}

class GetProjectQuota extends Roa
{
    use R;
}

class GetProject extends Roa
{
    use R;
}

class GetObject extends Roa
{
    use R;
}

class DeleteProject extends Roa
{
    use R;
}

class DeleteObject extends Roa
{
    use R;
}

class CreateProject extends Roa
{
    use R;
}

class CreateObject extends Roa
{
    use R;
}
