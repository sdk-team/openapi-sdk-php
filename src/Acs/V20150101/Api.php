<?php

namespace AlibabaCloud\Acs\V20150101;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Roa;

/**
 * Resolve Api based on the method name.
 *
 * @method DeleteApi deleteApi(array $options = [])
 * @method PutApiErrorMapping putApiErrorMapping(array $options = [])
 * @method PutApiNew putApiNew(array $options = [])
 * @method PutVersionParameters putVersionParameters(array $options = [])
 * @method PutProduct putProduct(array $options = [])
 * @method GetGlobal getGlobal(array $options = [])
 * @method GetProductDoc getProductDoc(array $options = [])
 * @method GetApi getApi(array $options = [])
 * @method PutVersion putVersion(array $options = [])
 * @method GetVersionDoc getVersionDoc(array $options = [])
 * @method PutApiStatus putApiStatus(array $options = [])
 * @method GetGatedLaunchPolicyByProduct getGatedLaunchPolicyByProduct(array $options = [])
 * @method GetFlowSpecialByProduct getFlowSpecialByProduct(array $options = [])
 * @method DeleteTairCache deleteTairCache(array $options = [])
 * @method GetApiDocument getApiDocument(array $options = [])
 * @method GetApiBackupList getApiBackupList(array $options = [])
 * @method GetApiDocNew getApiDocNew(array $options = [])
 * @method DeleteProduct deleteProduct(array $options = [])
 * @method PutApiRollback putApiRollback(array $options = [])
 * @method PutApiDoc putApiDoc(array $options = [])
 * @method GetVersionWithAllApi getVersionWithAllApi(array $options = [])
 * @method PutApi putApi(array $options = [])
 * @method PutControlPolicy putControlPolicy(array $options = [])
 * @method GetApiWithOffline getApiWithOffline(array $options = [])
 * @method PutProductDoc putProductDoc(array $options = [])
 * @method PutApiResultMapping putApiResultMapping(array $options = [])
 * @method PutPolicy putPolicy(array $options = [])
 * @method GetVersion getVersion(array $options = [])
 * @method DeleteFlowControl deleteFlowControl(array $options = [])
 * @method PutFlowControl putFlowControl(array $options = [])
 * @method GetFlowSpecial getFlowSpecial(array $options = [])
 * @method DeleteVersion deleteVersion(array $options = [])
 * @method GetApiDoc getApiDoc(array $options = [])
 * @method DeletePolicy deletePolicy(array $options = [])
 * @method GetVersionDocNew getVersionDocNew(array $options = [])
 * @method PutAccountBinding putAccountBinding(array $options = [])
 * @method GetTairCache getTairCache(array $options = [])
 * @method DeleteFlowSpecial deleteFlowSpecial(array $options = [])
 * @method PutGlobalErrorMapping putGlobalErrorMapping(array $options = [])
 * @method GetDocTagList getDocTagList(array $options = [])
 * @method PutApiRelease putApiRelease(array $options = [])
 * @method ReleaseApiDoc releaseApiDoc(array $options = [])
 * @method GetConfig getConfig(array $options = [])
 * @method PutApiGatedLaunch putApiGatedLaunch(array $options = [])
 * @method PutApiParameters putApiParameters(array $options = [])
 * @method PutConfig putConfig(array $options = [])
 * @method GetFlowSpecialAPI getFlowSpecialAPI(array $options = [])
 * @method GetSecretKey getSecretKey(array $options = [])
 * @method GetProductDocument getProductDocument(array $options = [])
 * @method PutGatedLaunchPolicy putGatedLaunchPolicy(array $options = [])
 * @method PutApiVisibility putApiVisibility(array $options = [])
 * @method GetVersionDocument getVersionDocument(array $options = [])
 * @method GetGatedLaunchPolicy getGatedLaunchPolicy(array $options = [])
 * @method PutSystemMeta putSystemMeta(array $options = [])
 * @method PutProductDocument putProductDocument(array $options = [])
 * @method GetControlPolicy getControlPolicy(array $options = [])
 * @method PutDocTag putDocTag(array $options = [])
 * @method PutApiDocument putApiDocument(array $options = [])
 * @method PutVersionDoc putVersionDoc(array $options = [])
 * @method GetControlPolicyByProduct getControlPolicyByProduct(array $options = [])
 * @method DeleteControlPolicy deleteControlPolicy(array $options = [])
 * @method PutSecretKey putSecretKey(array $options = [])
 * @method GetProduct getProduct(array $options = [])
 * @method PutVersionErrorMapping putVersionErrorMapping(array $options = [])
 * @method PutFlowSpecial putFlowSpecial(array $options = [])
 * @method GetSystemMeta getSystemMeta(array $options = [])
 * @method DeleteAccountBinding deleteAccountBinding(array $options = [])
 * @method GetFlowSpecialByUserId getFlowSpecialByUserId(array $options = [])
 * @method GetAccountBinding getAccountBinding(array $options = [])
 * @method GetProductDocNew getProductDocNew(array $options = [])
 * @method GetApiNew getApiNew(array $options = [])
 * @method GetApiBackup getApiBackup(array $options = [])
 * @method PutVersionDocument putVersionDocument(array $options = [])
 * @method GetGatedLaunchApi getGatedLaunchApi(array $options = [])
 * @method GetDocTag getDocTag(array $options = [])
 */
class AcsApiResolver
{
    use ApiResolverTrait;
}

class V20150101Roa extends Roa
{
    /** @var string */
    public $product = 'Acs';

    /** @var string */
    public $version = '2015-01-01';
}

/**
 * @method string getApiName()
 * @method $this withApiName($value)
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getVersionName()
 * @method $this withVersionName($value)
 * @method string getAccept()
 */
class DeleteApi extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/Api/[ProductName]/[VersionName]/[ApiName]';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getContentLength()
 * @method string getBodyContent()
 * @method string getApiName()
 * @method $this withApiName($value)
 * @method string getContentMD5()
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getContentType()
 * @method string getVersionName()
 * @method $this withVersionName($value)
 * @method string getAccept()
 */
class PutApiErrorMapping extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/ErrorMapping/[ProductName]/[VersionName]/[ApiName]';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentLength($value)
    {
        $this->data['ContentLength'] = $value;
        $this->options['headers']['Content-Length'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBodyContent($value)
    {
        $this->data['BodyContent'] = $value;
        $this->options['form_params']['BodyContent'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentMD5($value)
    {
        $this->data['ContentMD5'] = $value;
        $this->options['headers']['Content-MD5'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentType($value)
    {
        $this->data['ContentType'] = $value;
        $this->options['headers']['Content-Type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getContentLength()
 * @method string getBodyContent()
 * @method string getApiName()
 * @method $this withApiName($value)
 * @method string getContentMD5()
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getContentType()
 * @method string getVersionName()
 * @method $this withVersionName($value)
 * @method string getAccept()
 */
class PutApiNew extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/[ProductName]/[VersionName]/[ApiName]?new';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentLength($value)
    {
        $this->data['ContentLength'] = $value;
        $this->options['headers']['Content-Length'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBodyContent($value)
    {
        $this->data['BodyContent'] = $value;
        $this->options['form_params']['BodyContent'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentMD5($value)
    {
        $this->data['ContentMD5'] = $value;
        $this->options['headers']['Content-MD5'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentType($value)
    {
        $this->data['ContentType'] = $value;
        $this->options['headers']['Content-Type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getContentLength()
 * @method string getBodyContent()
 * @method string getContentMD5()
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getContentType()
 * @method string getVersionName()
 * @method $this withVersionName($value)
 * @method string getAccept()
 */
class PutVersionParameters extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/Parameters/[ProductName]/[VersionName]';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentLength($value)
    {
        $this->data['ContentLength'] = $value;
        $this->options['headers']['Content-Length'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBodyContent($value)
    {
        $this->data['BodyContent'] = $value;
        $this->options['form_params']['BodyContent'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentMD5($value)
    {
        $this->data['ContentMD5'] = $value;
        $this->options['headers']['Content-MD5'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentType($value)
    {
        $this->data['ContentType'] = $value;
        $this->options['headers']['Content-Type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getContentLength()
 * @method string getBodyContent()
 * @method string getContentMD5()
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getContentType()
 * @method string getAccept()
 */
class PutProduct extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/Product/[ProductName]';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentLength($value)
    {
        $this->data['ContentLength'] = $value;
        $this->options['headers']['Content-Length'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBodyContent($value)
    {
        $this->data['BodyContent'] = $value;
        $this->options['form_params']['BodyContent'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentMD5($value)
    {
        $this->data['ContentMD5'] = $value;
        $this->options['headers']['Content-MD5'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentType($value)
    {
        $this->data['ContentType'] = $value;
        $this->options['headers']['Content-Type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getAccept()
 */
class GetGlobal extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getLanguage()
 * @method $this withLanguage($value)
 * @method string getAccept()
 */
class GetProductDoc extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/ProductDoc/[ProductName]/[Language]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getApiName()
 * @method $this withApiName($value)
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getVersionName()
 * @method $this withVersionName($value)
 * @method string getAccept()
 */
class GetApi extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/Api/[ProductName]/[VersionName]/[ApiName]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getContentLength()
 * @method string getBodyContent()
 * @method string getContentMD5()
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getContentType()
 * @method string getVersionName()
 * @method $this withVersionName($value)
 * @method string getAccept()
 */
class PutVersion extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/Version/[ProductName]/[VersionName]';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentLength($value)
    {
        $this->data['ContentLength'] = $value;
        $this->options['headers']['Content-Length'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBodyContent($value)
    {
        $this->data['BodyContent'] = $value;
        $this->options['form_params']['BodyContent'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentMD5($value)
    {
        $this->data['ContentMD5'] = $value;
        $this->options['headers']['Content-MD5'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentType($value)
    {
        $this->data['ContentType'] = $value;
        $this->options['headers']['Content-Type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getLanguage()
 * @method $this withLanguage($value)
 * @method string getVersionName()
 * @method $this withVersionName($value)
 * @method string getAccept()
 */
class GetVersionDoc extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/VersionDoc/[ProductName]/[VersionName]/[Language]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getContentLength()
 * @method string getApiName()
 * @method $this withApiName($value)
 * @method string getContentMD5()
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getContentType()
 * @method string getVersionName()
 * @method $this withVersionName($value)
 * @method string getAccept()
 * @method string getStatus()
 */
class PutApiStatus extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/Status/[ProductName]/[VersionName]/[ApiName]';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentLength($value)
    {
        $this->data['ContentLength'] = $value;
        $this->options['headers']['Content-Length'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentMD5($value)
    {
        $this->data['ContentMD5'] = $value;
        $this->options['headers']['Content-MD5'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentType($value)
    {
        $this->data['ContentType'] = $value;
        $this->options['headers']['Content-Type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStatus($value)
    {
        $this->data['Status'] = $value;
        $this->options['query']['Status'] = $value;

        return $this;
    }
}

/**
 * @method string getProduct()
 * @method $this withProduct($value)
 * @method string getAccept()
 */
class GetGatedLaunchPolicyByProduct extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/GatedLaunchPolicy/[Product]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getProduct()
 * @method $this withProduct($value)
 * @method string getAccept()
 */
class GetFlowSpecialByProduct extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/FlowSpecial/[Product]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getXacscachekey()
 * @method string getAccept()
 */
class DeleteTairCache extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/TairCache';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withXacscachekey($value)
    {
        $this->data['Xacscachekey'] = $value;
        $this->options['headers']['x-acs-cache-key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getSite()
 * @method $this withSite($value)
 * @method string getApiName()
 * @method $this withApiName($value)
 * @method string getIsDraft()
 * @method $this withIsDraft($value)
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getLanguage()
 * @method $this withLanguage($value)
 * @method string getVersionName()
 * @method $this withVersionName($value)
 * @method string getAccept()
 */
class GetApiDocument extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/ApiDocument/[ProductName]/[VersionName]/[ApiName]/[Language]/[Site]/[IsDraft]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getApiName()
 * @method $this withApiName($value)
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getVersionName()
 * @method $this withVersionName($value)
 * @method string getAccept()
 */
class GetApiBackupList extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/ApiBackUpList/[ProductName]/[VersionName]/[ApiName]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getApiName()
 * @method $this withApiName($value)
 * @method string getIsDraft()
 * @method $this withIsDraft($value)
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getLanguage()
 * @method $this withLanguage($value)
 * @method string getVersionName()
 * @method $this withVersionName($value)
 * @method string getAccept()
 */
class GetApiDocNew extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/ApiDocNew/[ProductName]/[VersionName]/[ApiName]/[Language]/[IsDraft]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getAccept()
 */
class DeleteProduct extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/Product/[ProductName]';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getContentLength()
 * @method string getBodyContent()
 * @method string getApiName()
 * @method $this withApiName($value)
 * @method string getContentMD5()
 * @method string getBackupId()
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getContentType()
 * @method string getVersionName()
 * @method $this withVersionName($value)
 * @method string getAccept()
 */
class PutApiRollback extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/Rollback/[ProductName]/[VersionName]/[ApiName]';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentLength($value)
    {
        $this->data['ContentLength'] = $value;
        $this->options['headers']['Content-Length'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBodyContent($value)
    {
        $this->data['BodyContent'] = $value;
        $this->options['form_params']['BodyContent'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentMD5($value)
    {
        $this->data['ContentMD5'] = $value;
        $this->options['headers']['Content-MD5'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBackupId($value)
    {
        $this->data['BackupId'] = $value;
        $this->options['query']['BackupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentType($value)
    {
        $this->data['ContentType'] = $value;
        $this->options['headers']['Content-Type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getContentLength()
 * @method string getBodyContent()
 * @method string getEnvironment()
 * @method $this withEnvironment($value)
 * @method string getApiName()
 * @method $this withApiName($value)
 * @method string getContentMD5()
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getContentType()
 * @method string getLanguage()
 * @method $this withLanguage($value)
 * @method string getVersionName()
 * @method $this withVersionName($value)
 * @method string getAccept()
 */
class PutApiDoc extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/ApiDoc/[ProductName]/[VersionName]/[ApiName]/[Language]/[Environment]';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentLength($value)
    {
        $this->data['ContentLength'] = $value;
        $this->options['headers']['Content-Length'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBodyContent($value)
    {
        $this->data['BodyContent'] = $value;
        $this->options['form_params']['BodyContent'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentMD5($value)
    {
        $this->data['ContentMD5'] = $value;
        $this->options['headers']['Content-MD5'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentType($value)
    {
        $this->data['ContentType'] = $value;
        $this->options['headers']['Content-Type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getIncludeOfflineApi()
 * @method string getVersionName()
 * @method $this withVersionName($value)
 * @method string getAccept()
 */
class GetVersionWithAllApi extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/VersionWithAllApi/[ProductName]/[VersionName]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIncludeOfflineApi($value)
    {
        $this->data['IncludeOfflineApi'] = $value;
        $this->options['query']['IncludeOfflineApi'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getContentLength()
 * @method string getBodyContent()
 * @method string getApiName()
 * @method $this withApiName($value)
 * @method string getContentMD5()
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getContentType()
 * @method string getVersionName()
 * @method $this withVersionName($value)
 * @method string getAccept()
 */
class PutApi extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/Api/[ProductName]/[VersionName]/[ApiName]';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentLength($value)
    {
        $this->data['ContentLength'] = $value;
        $this->options['headers']['Content-Length'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBodyContent($value)
    {
        $this->data['BodyContent'] = $value;
        $this->options['form_params']['BodyContent'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentMD5($value)
    {
        $this->data['ContentMD5'] = $value;
        $this->options['headers']['Content-MD5'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentType($value)
    {
        $this->data['ContentType'] = $value;
        $this->options['headers']['Content-Type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getContentLength()
 * @method string getBodyContent()
 * @method string getContentMD5()
 * @method string getContentType()
 * @method string getAccept()
 */
class PutControlPolicy extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/ControlPolicy';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentLength($value)
    {
        $this->data['ContentLength'] = $value;
        $this->options['headers']['Content-Length'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBodyContent($value)
    {
        $this->data['BodyContent'] = $value;
        $this->options['form_params']['BodyContent'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentMD5($value)
    {
        $this->data['ContentMD5'] = $value;
        $this->options['headers']['Content-MD5'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentType($value)
    {
        $this->data['ContentType'] = $value;
        $this->options['headers']['Content-Type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getApiName()
 * @method $this withApiName($value)
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getVersionName()
 * @method $this withVersionName($value)
 * @method string getAccept()
 */
class GetApiWithOffline extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/ApiWithOffline/[ProductName]/[VersionName]/[ApiName]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getContentLength()
 * @method string getBodyContent()
 * @method string getContentMD5()
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getContentType()
 * @method string getLanguage()
 * @method $this withLanguage($value)
 * @method string getAccept()
 */
class PutProductDoc extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/ProductDoc/[ProductName]/[Language]';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentLength($value)
    {
        $this->data['ContentLength'] = $value;
        $this->options['headers']['Content-Length'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBodyContent($value)
    {
        $this->data['BodyContent'] = $value;
        $this->options['form_params']['BodyContent'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentMD5($value)
    {
        $this->data['ContentMD5'] = $value;
        $this->options['headers']['Content-MD5'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentType($value)
    {
        $this->data['ContentType'] = $value;
        $this->options['headers']['Content-Type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getContentLength()
 * @method string getBodyContent()
 * @method string getApiName()
 * @method $this withApiName($value)
 * @method string getContentMD5()
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getContentType()
 * @method string getVersionName()
 * @method $this withVersionName($value)
 * @method string getAccept()
 */
class PutApiResultMapping extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/ResultMapping/[ProductName]/[VersionName]/[ApiName]';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentLength($value)
    {
        $this->data['ContentLength'] = $value;
        $this->options['headers']['Content-Length'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBodyContent($value)
    {
        $this->data['BodyContent'] = $value;
        $this->options['form_params']['BodyContent'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentMD5($value)
    {
        $this->data['ContentMD5'] = $value;
        $this->options['headers']['Content-MD5'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentType($value)
    {
        $this->data['ContentType'] = $value;
        $this->options['headers']['Content-Type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getContentLength()
 * @method string getBodyContent()
 * @method string getContentMD5()
 * @method string getContentType()
 * @method string getAccept()
 */
class PutPolicy extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/Policy';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentLength($value)
    {
        $this->data['ContentLength'] = $value;
        $this->options['headers']['Content-Length'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBodyContent($value)
    {
        $this->data['BodyContent'] = $value;
        $this->options['form_params']['BodyContent'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentMD5($value)
    {
        $this->data['ContentMD5'] = $value;
        $this->options['headers']['Content-MD5'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentType($value)
    {
        $this->data['ContentType'] = $value;
        $this->options['headers']['Content-Type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getVersionName()
 * @method $this withVersionName($value)
 * @method string getAccept()
 */
class GetVersion extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/Version/[ProductName]/[VersionName]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getApiName()
 * @method $this withApiName($value)
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getVersionName()
 * @method $this withVersionName($value)
 * @method string getAccept()
 */
class DeleteFlowControl extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/FlowControl/[ProductName]/[VersionName]/[ApiName]';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getBodyContent()
 * @method string getApiName()
 * @method $this withApiName($value)
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getVersionName()
 * @method $this withVersionName($value)
 * @method string getAccept()
 */
class PutFlowControl extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/FlowControl/[ProductName]/[VersionName]/[ApiName]';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBodyContent($value)
    {
        $this->data['BodyContent'] = $value;
        $this->options['form_params']['BodyContent'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getProduct()
 * @method $this withProduct($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getAccept()
 */
class GetFlowSpecial extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/FlowSpecial/[Product]/[Name]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getVersionName()
 * @method $this withVersionName($value)
 * @method string getAccept()
 */
class DeleteVersion extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/Version/[ProductName]/[VersionName]';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getEnvironment()
 * @method $this withEnvironment($value)
 * @method string getApiName()
 * @method $this withApiName($value)
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getLanguage()
 * @method $this withLanguage($value)
 * @method string getVersionName()
 * @method $this withVersionName($value)
 * @method string getForceLoadFromApi()
 * @method string getAccept()
 */
class GetApiDoc extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/ApiDoc/[ProductName]/[VersionName]/[ApiName]/[Language]/[Environment]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withForceLoadFromApi($value)
    {
        $this->data['ForceLoadFromApi'] = $value;
        $this->options['query']['ForceLoadFromApi'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getProduct()
 * @method $this withProduct($value)
 * @method string getControlPolicyName()
 * @method $this withControlPolicyName($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getAccept()
 */
class DeletePolicy extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/Policy/[Product]/[ControlPolicyName]/[UserId]';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getIsDraft()
 * @method $this withIsDraft($value)
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getLanguage()
 * @method $this withLanguage($value)
 * @method string getVersionName()
 * @method $this withVersionName($value)
 * @method string getAccept()
 */
class GetVersionDocNew extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/VersionDocNew/[ProductName]/[VersionName]/[Language]/[IsDraft]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getProduct()
 * @method $this withProduct($value)
 * @method string getAliyunUid()
 * @method $this withAliyunUid($value)
 * @method string getBucEmpId()
 * @method $this withBucEmpId($value)
 * @method string getAccept()
 */
class PutAccountBinding extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/AccountBinding/[Product]/[AliyunUid]/[BucEmpId]';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getXacscachekey()
 * @method string getAccept()
 */
class GetTairCache extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/TairCache';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withXacscachekey($value)
    {
        $this->data['Xacscachekey'] = $value;
        $this->options['headers']['x-acs-cache-key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getProduct()
 * @method $this withProduct($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getAccept()
 */
class DeleteFlowSpecial extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/FlowSpecial/[Product]/[Name]';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getContentLength()
 * @method string getBodyContent()
 * @method string getContentMD5()
 * @method string getContentType()
 * @method string getAccept()
 */
class PutGlobalErrorMapping extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/ErrorMapping';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentLength($value)
    {
        $this->data['ContentLength'] = $value;
        $this->options['headers']['Content-Length'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBodyContent($value)
    {
        $this->data['BodyContent'] = $value;
        $this->options['form_params']['BodyContent'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentMD5($value)
    {
        $this->data['ContentMD5'] = $value;
        $this->options['headers']['Content-MD5'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentType($value)
    {
        $this->data['ContentType'] = $value;
        $this->options['headers']['Content-Type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getAccept()
 */
class GetDocTagList extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/DocTag/[ProductName]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getContentLength()
 * @method string getBodyContent()
 * @method string getApiName()
 * @method $this withApiName($value)
 * @method string getContentMD5()
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getContentType()
 * @method string getVersionName()
 * @method $this withVersionName($value)
 * @method string getAccept()
 */
class PutApiRelease extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/Release/[ProductName]/[VersionName]/[ApiName]';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentLength($value)
    {
        $this->data['ContentLength'] = $value;
        $this->options['headers']['Content-Length'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBodyContent($value)
    {
        $this->data['BodyContent'] = $value;
        $this->options['form_params']['BodyContent'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentMD5($value)
    {
        $this->data['ContentMD5'] = $value;
        $this->options['headers']['Content-MD5'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentType($value)
    {
        $this->data['ContentType'] = $value;
        $this->options['headers']['Content-Type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getApiName()
 * @method $this withApiName($value)
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getLanguage()
 * @method $this withLanguage($value)
 * @method string getVersionName()
 * @method $this withVersionName($value)
 * @method string getAccept()
 */
class ReleaseApiDoc extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/ReleaseApiDoc/[ProductName]/[VersionName]/[ApiName]/[Language]';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getConfigKey()
 * @method $this withConfigKey($value)
 * @method string getAccept()
 */
class GetConfig extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/PopConfig/[ConfigKey]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getApiName()
 * @method $this withApiName($value)
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getVersionName()
 * @method $this withVersionName($value)
 * @method string getAccept()
 */
class PutApiGatedLaunch extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/GatedLaunch/[ProductName]/[VersionName]/[ApiName]';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getContentLength()
 * @method string getBodyContent()
 * @method string getApiName()
 * @method $this withApiName($value)
 * @method string getContentMD5()
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getContentType()
 * @method string getVersionName()
 * @method $this withVersionName($value)
 * @method string getAccept()
 */
class PutApiParameters extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/Parameters/[ProductName]/[VersionName]/[ApiName]';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentLength($value)
    {
        $this->data['ContentLength'] = $value;
        $this->options['headers']['Content-Length'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBodyContent($value)
    {
        $this->data['BodyContent'] = $value;
        $this->options['form_params']['BodyContent'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentMD5($value)
    {
        $this->data['ContentMD5'] = $value;
        $this->options['headers']['Content-MD5'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentType($value)
    {
        $this->data['ContentType'] = $value;
        $this->options['headers']['Content-Type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getContentLength()
 * @method string getBodyContent()
 * @method string getContentMD5()
 * @method string getContentType()
 * @method string getAccept()
 */
class PutConfig extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/PopConfig';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentLength($value)
    {
        $this->data['ContentLength'] = $value;
        $this->options['headers']['Content-Length'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBodyContent($value)
    {
        $this->data['BodyContent'] = $value;
        $this->options['form_params']['BodyContent'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentMD5($value)
    {
        $this->data['ContentMD5'] = $value;
        $this->options['headers']['Content-MD5'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentType($value)
    {
        $this->data['ContentType'] = $value;
        $this->options['headers']['Content-Type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getProduct()
 * @method $this withProduct($value)
 * @method string getName()
 * @method string getAccept()
 */
class GetFlowSpecialAPI extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/GetFlowSpecialAPI/[Product]/[Name]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['query']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getProduct()
 * @method $this withProduct($value)
 * @method string getAccept()
 */
class GetSecretKey extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/SecretKey/[Product]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getSite()
 * @method $this withSite($value)
 * @method string getIsDraft()
 * @method $this withIsDraft($value)
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getLanguage()
 * @method $this withLanguage($value)
 * @method string getAccept()
 */
class GetProductDocument extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/ProductDocument/[ProductName]/[Language]/[Site]/[IsDraft]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getContentLength()
 * @method string getBodyContent()
 * @method string getContentMD5()
 * @method string getContentType()
 * @method string getAccept()
 */
class PutGatedLaunchPolicy extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/GatedLaunchPolicy';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentLength($value)
    {
        $this->data['ContentLength'] = $value;
        $this->options['headers']['Content-Length'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBodyContent($value)
    {
        $this->data['BodyContent'] = $value;
        $this->options['form_params']['BodyContent'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentMD5($value)
    {
        $this->data['ContentMD5'] = $value;
        $this->options['headers']['Content-MD5'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentType($value)
    {
        $this->data['ContentType'] = $value;
        $this->options['headers']['Content-Type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getBodyContent()
 * @method string getApiName()
 * @method $this withApiName($value)
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getVersionName()
 * @method $this withVersionName($value)
 * @method string getAccept()
 */
class PutApiVisibility extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/ApiVisibility/[ProductName]/[VersionName]/[ApiName]';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBodyContent($value)
    {
        $this->data['BodyContent'] = $value;
        $this->options['form_params']['BodyContent'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getSite()
 * @method $this withSite($value)
 * @method string getIsDraft()
 * @method $this withIsDraft($value)
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getLanguage()
 * @method $this withLanguage($value)
 * @method string getVersionName()
 * @method $this withVersionName($value)
 * @method string getAccept()
 */
class GetVersionDocument extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/VersionDocument/[ProductName]/[VersionName]/[Language]/[Site]/[IsDraft]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getPolicyName()
 * @method $this withPolicyName($value)
 * @method string getAccept()
 */
class GetGatedLaunchPolicy extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/GatedLaunchPolicy/[ProductName]/[PolicyName]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getContentLength()
 * @method string getBodyContent()
 * @method string getContentMD5()
 * @method string getContentType()
 * @method string getAccept()
 */
class PutSystemMeta extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/PopSystemMeta';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentLength($value)
    {
        $this->data['ContentLength'] = $value;
        $this->options['headers']['Content-Length'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBodyContent($value)
    {
        $this->data['BodyContent'] = $value;
        $this->options['form_params']['BodyContent'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentMD5($value)
    {
        $this->data['ContentMD5'] = $value;
        $this->options['headers']['Content-MD5'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentType($value)
    {
        $this->data['ContentType'] = $value;
        $this->options['headers']['Content-Type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getContentLength()
 * @method string getBodyContent()
 * @method string getSite()
 * @method $this withSite($value)
 * @method string getContentMD5()
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getContentType()
 * @method string getLanguage()
 * @method $this withLanguage($value)
 * @method string getAccept()
 */
class PutProductDocument extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/ProductDocument/[ProductName]/[Language]/[Site]';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentLength($value)
    {
        $this->data['ContentLength'] = $value;
        $this->options['headers']['Content-Length'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBodyContent($value)
    {
        $this->data['BodyContent'] = $value;
        $this->options['form_params']['BodyContent'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentMD5($value)
    {
        $this->data['ContentMD5'] = $value;
        $this->options['headers']['Content-MD5'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentType($value)
    {
        $this->data['ContentType'] = $value;
        $this->options['headers']['Content-Type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getProduct()
 * @method $this withProduct($value)
 * @method string getControlPolicyName()
 * @method $this withControlPolicyName($value)
 * @method string getAccept()
 */
class GetControlPolicy extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/ControlPolicy/[Product]/[ControlPolicyName]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getContentLength()
 * @method string getProduct()
 * @method $this withProduct($value)
 * @method string getBodyContent()
 * @method string getTagId()
 * @method $this withTagId($value)
 * @method string getContentMD5()
 * @method string getContentType()
 * @method string getLanguage()
 * @method $this withLanguage($value)
 * @method string getAccept()
 */
class PutDocTag extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/DocTag/[Product]/[TagId]/[Language]';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentLength($value)
    {
        $this->data['ContentLength'] = $value;
        $this->options['headers']['Content-Length'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBodyContent($value)
    {
        $this->data['BodyContent'] = $value;
        $this->options['form_params']['BodyContent'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentMD5($value)
    {
        $this->data['ContentMD5'] = $value;
        $this->options['headers']['Content-MD5'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentType($value)
    {
        $this->data['ContentType'] = $value;
        $this->options['headers']['Content-Type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getContentLength()
 * @method string getBodyContent()
 * @method string getSite()
 * @method $this withSite($value)
 * @method string getApiName()
 * @method $this withApiName($value)
 * @method string getContentMD5()
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getContentType()
 * @method string getLanguage()
 * @method $this withLanguage($value)
 * @method string getVersionName()
 * @method $this withVersionName($value)
 * @method string getAccept()
 */
class PutApiDocument extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/ApiDocument/[ProductName]/[VersionName]/[ApiName]/[Language]/[Site]';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentLength($value)
    {
        $this->data['ContentLength'] = $value;
        $this->options['headers']['Content-Length'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBodyContent($value)
    {
        $this->data['BodyContent'] = $value;
        $this->options['form_params']['BodyContent'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentMD5($value)
    {
        $this->data['ContentMD5'] = $value;
        $this->options['headers']['Content-MD5'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentType($value)
    {
        $this->data['ContentType'] = $value;
        $this->options['headers']['Content-Type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getContentLength()
 * @method string getBodyContent()
 * @method string getContentMD5()
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getContentType()
 * @method string getLanguage()
 * @method $this withLanguage($value)
 * @method string getVersionName()
 * @method $this withVersionName($value)
 * @method string getAccept()
 */
class PutVersionDoc extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/VersionDoc/[ProductName]/[VersionName]/[Language]';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentLength($value)
    {
        $this->data['ContentLength'] = $value;
        $this->options['headers']['Content-Length'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBodyContent($value)
    {
        $this->data['BodyContent'] = $value;
        $this->options['form_params']['BodyContent'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentMD5($value)
    {
        $this->data['ContentMD5'] = $value;
        $this->options['headers']['Content-MD5'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentType($value)
    {
        $this->data['ContentType'] = $value;
        $this->options['headers']['Content-Type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getProduct()
 * @method $this withProduct($value)
 * @method string getAccept()
 */
class GetControlPolicyByProduct extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/ControlPolicy/[Product]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getProduct()
 * @method $this withProduct($value)
 * @method string getControlPolicyName()
 * @method $this withControlPolicyName($value)
 * @method string getAccept()
 */
class DeleteControlPolicy extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/ControlPolicy/[Product]/[ControlPolicyName]';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getContentLength()
 * @method string getBodyContent()
 * @method string getContentMD5()
 * @method string getContentType()
 * @method string getAccept()
 */
class PutSecretKey extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/SecretKey';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentLength($value)
    {
        $this->data['ContentLength'] = $value;
        $this->options['headers']['Content-Length'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBodyContent($value)
    {
        $this->data['BodyContent'] = $value;
        $this->options['form_params']['BodyContent'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentMD5($value)
    {
        $this->data['ContentMD5'] = $value;
        $this->options['headers']['Content-MD5'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentType($value)
    {
        $this->data['ContentType'] = $value;
        $this->options['headers']['Content-Type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getAccept()
 */
class GetProduct extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/Product/[ProductName]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getContentLength()
 * @method string getBodyContent()
 * @method string getContentMD5()
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getContentType()
 * @method string getVersionName()
 * @method $this withVersionName($value)
 * @method string getAccept()
 */
class PutVersionErrorMapping extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/ErrorMapping/[ProductName]/[VersionName]';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentLength($value)
    {
        $this->data['ContentLength'] = $value;
        $this->options['headers']['Content-Length'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBodyContent($value)
    {
        $this->data['BodyContent'] = $value;
        $this->options['form_params']['BodyContent'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentMD5($value)
    {
        $this->data['ContentMD5'] = $value;
        $this->options['headers']['Content-MD5'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentType($value)
    {
        $this->data['ContentType'] = $value;
        $this->options['headers']['Content-Type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getContentLength()
 * @method string getBodyContent()
 * @method string getContentMD5()
 * @method string getContentType()
 * @method string getAccept()
 */
class PutFlowSpecial extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/FlowSpecial';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentLength($value)
    {
        $this->data['ContentLength'] = $value;
        $this->options['headers']['Content-Length'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBodyContent($value)
    {
        $this->data['BodyContent'] = $value;
        $this->options['form_params']['BodyContent'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentMD5($value)
    {
        $this->data['ContentMD5'] = $value;
        $this->options['headers']['Content-MD5'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentType($value)
    {
        $this->data['ContentType'] = $value;
        $this->options['headers']['Content-Type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getMetaName()
 * @method $this withMetaName($value)
 * @method string getAccept()
 */
class GetSystemMeta extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/PopSystemMeta/[MetaName]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getProduct()
 * @method $this withProduct($value)
 * @method string getAliyunUid()
 * @method $this withAliyunUid($value)
 * @method string getAccept()
 */
class DeleteAccountBinding extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/AccountBinding/[Product]/[AliyunUid]';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getProduct()
 * @method $this withProduct($value)
 * @method string getAccept()
 * @method string getPopUserId()
 * @method $this withPopUserId($value)
 */
class GetFlowSpecialByUserId extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/GetFlowSpecialByUserId/[Product]/[PopUserId]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getProduct()
 * @method $this withProduct($value)
 * @method string getAliyunUid()
 * @method string getBucEmpId()
 * @method string getAccept()
 */
class GetAccountBinding extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/AccountBinding/[Product]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliyunUid($value)
    {
        $this->data['AliyunUid'] = $value;
        $this->options['query']['AliyunUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBucEmpId($value)
    {
        $this->data['BucEmpId'] = $value;
        $this->options['query']['BucEmpId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getIsDraft()
 * @method $this withIsDraft($value)
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getLanguage()
 * @method $this withLanguage($value)
 * @method string getAccept()
 */
class GetProductDocNew extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/ProductDocNew/[ProductName]/[Language]/[IsDraft]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getApiName()
 * @method $this withApiName($value)
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getVersionName()
 * @method $this withVersionName($value)
 * @method string getAccept()
 */
class GetApiNew extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/[ProductName]/[VersionName]/[ApiName]?new';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getApiName()
 * @method $this withApiName($value)
 * @method string getBackupId()
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getVersionName()
 * @method $this withVersionName($value)
 * @method string getAccept()
 */
class GetApiBackup extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/ApiBackUp/[ProductName]/[VersionName]/[ApiName]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBackupId($value)
    {
        $this->data['BackupId'] = $value;
        $this->options['query']['BackupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getContentLength()
 * @method string getBodyContent()
 * @method string getSite()
 * @method $this withSite($value)
 * @method string getContentMD5()
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getContentType()
 * @method string getLanguage()
 * @method $this withLanguage($value)
 * @method string getVersionName()
 * @method $this withVersionName($value)
 * @method string getAccept()
 */
class PutVersionDocument extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/VersionDocument/[ProductName]/[VersionName]/[Language]/[Site]';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentLength($value)
    {
        $this->data['ContentLength'] = $value;
        $this->options['headers']['Content-Length'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBodyContent($value)
    {
        $this->data['BodyContent'] = $value;
        $this->options['form_params']['BodyContent'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentMD5($value)
    {
        $this->data['ContentMD5'] = $value;
        $this->options['headers']['Content-MD5'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentType($value)
    {
        $this->data['ContentType'] = $value;
        $this->options['headers']['Content-Type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getApiName()
 * @method $this withApiName($value)
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getVersionName()
 * @method $this withVersionName($value)
 * @method string getAccept()
 */
class GetGatedLaunchApi extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/GatedLaunch/[ProductName]/[VersionName]/[ApiName]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}

/**
 * @method string getProduct()
 * @method $this withProduct($value)
 * @method string getTagId()
 * @method $this withTagId($value)
 * @method string getLanguage()
 * @method $this withLanguage($value)
 * @method string getAccept()
 */
class GetDocTag extends V20150101Roa
{
    /** @var string */
    public $pathPattern = '/DocTag/[Product]/[TagId]/[Language]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}
