<?php

namespace Ksyun\Client\Sqlserver\V20190425;

use Ksyun\Common\BaseClient;
use Ksyun\Common\Http\HttpOptions;
use Ksyun\Common\Credential;



class SqlserverClient extends BaseClient
{
    /**
     * @var string
     */
    protected $endpoint = "sqlserver.api.ksyun.com";

    /**
     * @var string
     */
    protected $service = "sqlserver";

    /**
     * @var string
     */
    protected $version = "2019-04-25";

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
        $respClass = "Ksyun\Client"."\\".ucfirst("sqlserver")."\\"."V20190425\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->unserialize($response);
        return $obj;
    }
}
