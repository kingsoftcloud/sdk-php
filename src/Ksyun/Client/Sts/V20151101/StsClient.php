<?php

namespace Ksyun\Client\Sts\V20151101;

use Ksyun\Common\BaseClient;
use Ksyun\Common\Http\HttpOptions;
use Ksyun\Common\Credential;



class StsClient extends BaseClient
{
    /**
     * @var string
     */
    protected $endpoint = "sts.api.ksyun.com";

    /**
     * @var string
     */
    protected $service = "sts";

    /**
     * @var string
     */
    protected $version = "2015-11-01";

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
        $respClass = "Ksyun\Client"."\\".ucfirst("sts")."\\"."V20151101\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->unserialize($response);
        return $obj;
    }
}
