<?php

namespace Ksyun\Client\Memcached\V20180627;

use Ksyun\Common\BaseClient;
use Ksyun\Common\Http\HttpOptions;
use Ksyun\Common\Credential;



class MemcachedClient extends BaseClient
{
    /**
     * @var string
     */
    protected $endpoint = "memcached.api.ksyun.com";

    /**
     * @var string
     */
    protected $service = "memcached";

    /**
     * @var string
     */
    protected $version = "2018-06-27";

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
        $respClass = "Ksyun\Client"."\\".ucfirst("memcached")."\\"."V20180627\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->unserialize($response);
        return $obj;
    }
}
