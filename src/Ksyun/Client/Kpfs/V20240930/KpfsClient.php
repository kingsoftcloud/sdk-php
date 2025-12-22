<?php

namespace Ksyun\Client\Kpfs\V20240930;

use Ksyun\Common\BaseClient;
use Ksyun\Common\Http\HttpOptions;
use Ksyun\Common\Credential;



class KpfsClient extends BaseClient
{
    /**
     * @var string
     */
    protected $endpoint = "kpfs.api.ksyun.com";

    /**
     * @var string
     */
    protected $service = "kpfs";

    /**
     * @var string
     */
    protected $version = "2024-09-30";

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
        $respClass = "Ksyun\Client"."\\".ucfirst("kpfs")."\\"."V20240930\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->unserialize($response);
        return $obj;
    }
}
