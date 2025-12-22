<?php

namespace Ksyun\Client\Dts\V20180108;

use Ksyun\Common\BaseClient;
use Ksyun\Common\Http\HttpOptions;
use Ksyun\Common\Credential;



class DtsClient extends BaseClient
{
    /**
     * @var string
     */
    protected $endpoint = "dts.api.ksyun.com";

    /**
     * @var string
     */
    protected $service = "dts";

    /**
     * @var string
     */
    protected $version = "2018-01-08";

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
        $respClass = "Ksyun\Client"."\\".ucfirst("dts")."\\"."V20180108\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->unserialize($response);
        return $obj;
    }
}
