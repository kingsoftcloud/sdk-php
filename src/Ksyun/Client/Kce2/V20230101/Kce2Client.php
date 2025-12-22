<?php

namespace Ksyun\Client\Kce2\V20230101;

use Ksyun\Common\BaseClient;
use Ksyun\Common\Http\HttpOptions;
use Ksyun\Common\Credential;



class Kce2Client extends BaseClient
{
    /**
     * @var string
     */
    protected $endpoint = "kce2.api.ksyun.com";

    /**
     * @var string
     */
    protected $service = "kce2";

    /**
     * @var string
     */
    protected $version = "2023-01-01";

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
        $respClass = "Ksyun\Client"."\\".ucfirst("kce2")."\\"."V20230101\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->unserialize($response);
        return $obj;
    }
}
