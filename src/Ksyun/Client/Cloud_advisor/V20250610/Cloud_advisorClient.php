<?php

namespace Ksyun\Client\Cloud_advisor\V20250610;

use Ksyun\Common\BaseClient;
use Ksyun\Common\Http\HttpOptions;
use Ksyun\Common\Credential;



class Cloud_advisorClient extends BaseClient
{
    /**
     * @var string
     */
    protected $endpoint = "cloud-advisor.api.ksyun.com";

    /**
     * @var string
     */
    protected $service = "cloud-advisor";

    /**
     * @var string
     */
    protected $version = "2025-06-10";

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
        $respClass = "Ksyun\Client"."\\".ucfirst("cloud_advisor")."\\"."V20250610\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->unserialize($response);
        return $obj;
    }
}
