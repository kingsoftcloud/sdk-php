<?php

namespace Ksyun\Client\Kcf\V20211215;

use Ksyun\Common\BaseClient;
use Ksyun\Common\Http\HttpOptions;
use Ksyun\Common\Credential;



class KcfClient extends BaseClient
{
    /**
     * @var string
     */
    protected $endpoint = "kcf.api.ksyun.com";

    /**
     * @var string
     */
    protected $service = "kcf";

    /**
     * @var string
     */
    protected $version = "2021-12-15";

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
        $respClass = "Ksyun\Client"."\\".ucfirst("kcf")."\\"."V20211215\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->unserialize($response);
        return $obj;
    }
}
