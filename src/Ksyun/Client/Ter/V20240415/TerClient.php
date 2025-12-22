<?php

namespace Ksyun\Client\Ter\V20240415;

use Ksyun\Common\BaseClient;
use Ksyun\Common\Http\HttpOptions;
use Ksyun\Common\Credential;



class TerClient extends BaseClient
{
    /**
     * @var string
     */
    protected $endpoint = "ter.api.ksyun.com";

    /**
     * @var string
     */
    protected $service = "ter";

    /**
     * @var string
     */
    protected $version = "2024-04-15";

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
        $respClass = "Ksyun\Client"."\\".ucfirst("ter")."\\"."V20240415\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->unserialize($response);
        return $obj;
    }
}
