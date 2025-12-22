<?php

namespace Ksyun\Client\Knad\V20230323;

use Ksyun\Common\BaseClient;
use Ksyun\Common\Http\HttpOptions;
use Ksyun\Common\Credential;



class KnadClient extends BaseClient
{
    /**
     * @var string
     */
    protected $endpoint = "knad.api.ksyun.com";

    /**
     * @var string
     */
    protected $service = "knad";

    /**
     * @var string
     */
    protected $version = "2023-03-23";

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
        $respClass = "Ksyun\Client"."\\".ucfirst("knad")."\\"."V20230323\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->unserialize($response);
        return $obj;
    }
}
