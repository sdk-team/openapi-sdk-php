<?php

namespace AlibabaCloud\Alimt\V20190107;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RpcRequest as Rpc;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method TranslateGeneral translateGeneral($options = [])
 * @method TranslateECommerce translateECommerce($options = [])
 */
class V20190107
{
    use ApiResolverTrait;
}

/**
 * @method string getFormatType
 * @method self withFormatType(string $formatType)
 * @method string getSourceLanguage
 * @method self withSourceLanguage(string $sourceLanguage)
 * @method string getTargetLanguage
 * @method self withTargetLanguage(string $targetLanguage)
 * @method string getSourceText
 * @method self withSourceText(string $sourceText)
 * @method string getScene
 * @method self withScene(string $scene)
 */
class TranslateGeneral extends Rpc
{
    use R;
}

/**
 * @method string getFormatType
 * @method self withFormatType(string $formatType)
 * @method string getTargetLanguage
 * @method self withTargetLanguage(string $targetLanguage)
 * @method string getSourceLanguage
 * @method self withSourceLanguage(string $sourceLanguage)
 * @method string getSourceText
 * @method self withSourceText(string $sourceText)
 * @method string getScene
 * @method self withScene(string $scene)
 */
class TranslateECommerce extends Rpc
{
    use R;
}
