<?php

namespace Ksyun\Client\Kcs\V20160701;

use Ksyun\Common\BaseClient;
use Ksyun\Common\Http\HttpOptions;
use Ksyun\Common\Credential;



class KcsClient extends BaseClient
{
    /**
     * @var string
     */
    protected $endpoint = "kcs.api.ksyun.com";

    /**
     * @var string
     */
    protected $service = "kcs";

    /**
     * @var string
     */
    protected $version = "2016-07-01";

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
        $respClass = "Ksyun\Client"."\\".ucfirst("kcs")."\\"."V20160701\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->unserialize($response);
        return $obj;
    }
}
