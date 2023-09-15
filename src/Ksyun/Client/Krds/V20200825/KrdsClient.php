<?php

namespace Ksyun\Client\Krds\V20200825;

use Ksyun\Common\BaseClient;
use Ksyun\Common\Http\HttpOptions;
use Ksyun\Common\Credential;



class KrdsClient extends BaseClient
{
    /**
     * @var string
     */
    protected $endpoint = "krds.api.ksyun.com";

    /**
     * @var string
     */
    protected $service = "krds";

    /**
     * @var string
     */
    protected $version = "2020-08-25";

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
        $respClass = "Ksyun\Client"."\\".ucfirst("krds")."\\"."V20200825\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->unserialize($response);
        return $obj;
    }
}
