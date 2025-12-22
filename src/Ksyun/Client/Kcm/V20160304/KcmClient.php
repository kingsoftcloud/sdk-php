<?php

namespace Ksyun\Client\Kcm\V20160304;

use Ksyun\Common\BaseClient;
use Ksyun\Common\Http\HttpOptions;
use Ksyun\Common\Credential;



class KcmClient extends BaseClient
{
    /**
     * @var string
     */
    protected $endpoint = "kcm.api.ksyun.com";

    /**
     * @var string
     */
    protected $service = "kcm";

    /**
     * @var string
     */
    protected $version = "2016-03-04";

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
        $respClass = "Ksyun\Client"."\\".ucfirst("kcm")."\\"."V20160304\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->unserialize($response);
        return $obj;
    }
}
