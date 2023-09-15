<?php

namespace Ksyun\Client\Cdn\V20160901;

use Ksyun\Common\BaseClient;
use Ksyun\Common\Http\HttpOptions;
use Ksyun\Common\Credential;



class CdnClient extends BaseClient
{
    /**
     * @var string
     */
    protected $endpoint = "cdn.api.ksyun.com";

    /**
     * @var string
     */
    protected $service = "cdn";

    /**
     * @var string
     */
    protected $version = "2016-09-01";

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
        $respClass = "Ksyun\Client"."\\".ucfirst("cdn")."\\"."V20160901\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->unserialize($response);
        return $obj;
    }
}
