<?php

namespace Ksyun\Client\Clickhouse\V20210101;

use Ksyun\Common\BaseClient;
use Ksyun\Common\Http\HttpOptions;
use Ksyun\Common\Credential;



class ClickhouseClient extends BaseClient
{
    /**
     * @var string
     */
    protected $endpoint = "clickhouse.api.ksyun.com";

    /**
     * @var string
     */
    protected $service = "clickhouse";

    /**
     * @var string
     */
    protected $version = "2021-01-01";

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
        $respClass = "Ksyun\Client"."\\".ucfirst("clickhouse")."\\"."V20210101\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->unserialize($response);
        return $obj;
    }
}
