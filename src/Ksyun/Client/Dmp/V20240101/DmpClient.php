<?php

namespace Ksyun\Client\Dmp\V20240101;

use Ksyun\Common\BaseClient;
use Ksyun\Common\Http\HttpOptions;
use Ksyun\Common\Credential;



class DmpClient extends BaseClient
{
    /**
     * @var string
     */
    protected $endpoint = "dmp.api.ksyun.com";

    /**
     * @var string
     */
    protected $service = "dmp";

    /**
     * @var string
     */
    protected $version = "2024-01-01";

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
        $respClass = "Ksyun\Client"."\\".ucfirst("dmp")."\\"."V20240101\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->unserialize($response);
        return $obj;
    }
}
