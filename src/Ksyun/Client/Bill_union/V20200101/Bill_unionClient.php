<?php

namespace Ksyun\Client\Bill_union\V20200101;

use Ksyun\Common\BaseClient;
use Ksyun\Common\Http\HttpOptions;
use Ksyun\Common\Credential;



class Bill_unionClient extends BaseClient
{
    /**
     * @var string
     */
    protected $endpoint = "bill-union.api.ksyun.com";

    /**
     * @var string
     */
    protected $service = "bill-union";

    /**
     * @var string
     */
    protected $version = "2020-01-01";

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
        $respClass = "Ksyun\Client"."\\".ucfirst("bill_union")."\\"."V20200101\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->unserialize($response);
        return $obj;
    }
}
