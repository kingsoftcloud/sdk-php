<?php

namespace Ksyun\Client\Influxdb\V20191010;

use Ksyun\Common\BaseClient;
use Ksyun\Common\Http\HttpOptions;
use Ksyun\Common\Credential;



class InfluxdbClient extends BaseClient
{
    /**
     * @var string
     */
    protected $endpoint = "Influxdb.api.ksyun.com";

    /**
     * @var string
     */
    protected $service = "Influxdb";

    /**
     * @var string
     */
    protected $version = "2019-10-10";

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
        $respClass = "Ksyun\Client"."\\".ucfirst("influxdb")."\\"."V20191010\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->unserialize($response);
        return $obj;
    }
}
