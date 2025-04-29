<?php

namespace Ksyun\Client\Kingpay\V20240501;

use Ksyun\Common\BaseClient;
use Ksyun\Common\Http\HttpOptions;
use Ksyun\Common\Credential;


class KingpayClient extends BaseClient
{
    /**
     * @var string
     */
    protected $endpoint = "kingpay.api.ksyun.com";

    /**
     * @var string
     */
    protected $service = "kingpay";

    /**
     * @var string
     */
    protected $version = "V1";

    /**
     * @param Credential $credential
     * @param string $region
     * @param HttpOptions|null $profile
     * @throws KsyunSDKException
     */
    function __construct($credential, $region, $profile = null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "Ksyun\Client" . "\\" . ucfirst("kingpay") . "\\" . "V20240501\\Models" . "\\" . ucfirst($action) . "Response";
        $obj = new $respClass();
        $obj->unserialize($response);
        return $obj;
    }
}
