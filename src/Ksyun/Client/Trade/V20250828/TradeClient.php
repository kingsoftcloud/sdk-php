<?php

namespace Ksyun\Client\Trade\V20250828;

use Ksyun\Common\BaseClient;
use Ksyun\Common\Http\HttpOptions;
use Ksyun\Common\Credential;



class TradeClient extends BaseClient
{
    /**
     * @var string
     */
    protected $endpoint = "trade.api.ksyun.com";

    /**
     * @var string
     */
    protected $service = "trade";

    /**
     * @var string
     */
    protected $version = "2025-08-28";

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
        $respClass = "Ksyun\Client"."\\".ucfirst("trade")."\\"."V20250828\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->unserialize($response);
        return $obj;
    }
}
