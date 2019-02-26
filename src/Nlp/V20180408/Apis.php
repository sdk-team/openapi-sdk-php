<?php

namespace AlibabaCloud\Nlp\V20180408;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method IE iE($options = [])
 * @method KWE kWE($options = [])
 * @method TextStructure textStructure($options = [])
 * @method ReviewAnalysis reviewAnalysis($options = [])
 * @method WordSegment wordSegment($options = [])
 * @method Entity entity($options = [])
 * @method WordPos wordPos($options = [])
 * @method Sentiment sentiment($options = [])
 * @method Translate translate($options = [])
 */
class V20180408
{
    use ApiResolverTrait;
}

/**
 * @method string getDomain
 * @method self withDomain(string $domain)
 */
class IE extends Roa
{
    use R;
}

/**
 * @method string getDomain
 * @method self withDomain(string $domain)
 */
class KWE extends Roa
{
    use R;
}

/**
 * @method string getDomain
 * @method self withDomain(string $domain)
 */
class TextStructure extends Roa
{
    use R;
}

/**
 * @method string getDomain
 * @method self withDomain(string $domain)
 */
class ReviewAnalysis extends Roa
{
    use R;
}

/**
 * @method string getDomain
 * @method self withDomain(string $domain)
 */
class WordSegment extends Roa
{
    use R;
}

/**
 * @method string getDomain
 * @method self withDomain(string $domain)
 */
class Entity extends Roa
{
    use R;
}

/**
 * @method string getDomain
 * @method self withDomain(string $domain)
 */
class WordPos extends Roa
{
    use R;
}

/**
 * @method string getDomain
 * @method self withDomain(string $domain)
 */
class Sentiment extends Roa
{
    use R;
}

/**
 * @method string getDomain
 * @method self withDomain(string $domain)
 */
class Translate extends Roa
{
    use R;
}
