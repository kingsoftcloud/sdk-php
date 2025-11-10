<?php

namespace Ksyun\Client\Aicp\V20240612;

use Ksyun\Common\BaseClient;
use Ksyun\Common\Http\HttpOptions;
use Ksyun\Common\Credential;



class AicpClient extends BaseClient
{
    /**
     * @var string
     */
    protected $endpoint = "aicp.api.ksyun.com";

    /**
     * @var string
     */
    protected $service = "aicp";

    /**
     * @var string
     */
    protected $version = "2024-06-12";

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
        $respClass = "Ksyun\Client"."\\".ucfirst("aicp")."\\"."V20240612\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->unserialize($response);
        return $obj;
    }
}
