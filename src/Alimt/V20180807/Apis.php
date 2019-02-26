<?php

namespace AlibabaCloud\Alimt\V20180807;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RpcRequest as Rpc;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method MachineTranslateGeneral machineTranslateGeneral($options = [])
 * @method MachineTranslateECommerce machineTranslateECommerce($options = [])
 */
class V20180807
{
    use ApiResolverTrait;
}

/**
 * @method string getFieldType
 * @method self withFieldType(string $fieldType)
 * @method string getSourceText
 * @method self withSourceText(string $sourceText)
 * @method string getSourceLanguage
 * @method self withSourceLanguage(string $sourceLanguage)
 * @method string getTargetLanguage
 * @method self withTargetLanguage(string $targetLanguage)
 * @method string getContentFormat
 * @method self withContentFormat(string $contentFormat)
 * @method string getAppName
 * @method self withAppName(string $appName)
 */
class MachineTranslateGeneral extends Rpc
{
    use R;
}

/**
 * @method string getFieldType
 * @method self withFieldType(string $fieldType)
 * @method string getSourceText
 * @method self withSourceText(string $sourceText)
 * @method string getSourceLanguage
 * @method self withSourceLanguage(string $sourceLanguage)
 * @method string getTargetLanguage
 * @method self withTargetLanguage(string $targetLanguage)
 * @method string getContentFormat
 * @method self withContentFormat(string $contentFormat)
 * @method string getAppName
 * @method self withAppName(string $appName)
 */
class MachineTranslateECommerce extends Rpc
{
    use R;
}
