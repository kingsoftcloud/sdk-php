<?php

namespace Ksyun\Client\Slb\V20171210;

use Ksyun\Common\BaseClient;
use Ksyun\Common\Http\HttpOptions;
use Ksyun\Common\Credential;



class SlbClient extends BaseClient
{
    /**
     * @var string
     */
    protected $endpoint = "slb.api.ksyun.com";

    /**
     * @var string
     */
    protected $service = "slb";

    /**
     * @var string
     */
    protected $version = "2017-12-10";

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
        $respClass = "Ksyun\Client"."\\".ucfirst("slb")."\\"."V20171210\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->unserialize($response);
        return $obj;
    }
}
