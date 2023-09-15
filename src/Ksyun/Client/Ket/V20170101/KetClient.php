<?php

namespace Ksyun\Client\Ket\V20170101;

use Ksyun\Common\BaseClient;
use Ksyun\Common\Http\HttpOptions;
use Ksyun\Common\Credential;



class KetClient extends BaseClient
{
    /**
     * @var string
     */
    protected $endpoint = "ket.api.ksyun.com";

    /**
     * @var string
     */
    protected $service = "ket";

    /**
     * @var string
     */
    protected $version = "2017-01-01";

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
        $respClass = "Ksyun\Client"."\\".ucfirst("ket")."\\"."V20170101\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->unserialize($response);
        return $obj;
    }
}
