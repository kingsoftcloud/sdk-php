<?php

namespace Ksyun\Client\Waf\V20200707;

use Ksyun\Common\BaseClient;
use Ksyun\Common\Http\HttpOptions;
use Ksyun\Common\Credential;



class WafClient extends BaseClient
{
    /**
     * @var string
     */
    protected $endpoint = "waf.api.ksyun.com";

    /**
     * @var string
     */
    protected $service = "waf";

    /**
     * @var string
     */
    protected $version = "2020-07-07";

    /**
     * @param Credential $credential
     * @param string $region
     * @param HttpOptions|null $profile
     * @throws KsyunSDKException
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "Ksyun\Client"."\\".ucfirst("waf")."\\"."V20200707\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->unserialize($response);
        return $obj;
    }
}
