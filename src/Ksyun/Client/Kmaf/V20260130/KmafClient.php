<?php

namespace Ksyun\Client\Kmaf\V20260130;

use Ksyun\Common\BaseClient;
use Ksyun\Common\Http\HttpOptions;
use Ksyun\Common\Credential;



class KmafClient extends BaseClient
{
    /**
     * @var string
     */
    protected $endpoint = "kmaf.api.ksyun.com";

    /**
     * @var string
     */
    protected $service = "kmaf";

    /**
     * @var string
     */
    protected $version = "2026-01-30";

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
        $respClass = "Ksyun\Client"."\\".ucfirst("kmaf")."\\"."V20260130\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->unserialize($response);
        return $obj;
    }
}
