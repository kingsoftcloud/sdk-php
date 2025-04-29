<?php

namespace Ksyun\Client\Kce\V20190806;

use Ksyun\Common\BaseClient;
use Ksyun\Common\Http\HttpOptions;
use Ksyun\Common\Credential;


class KceClient extends BaseClient
{
    /**
     * @var string
     */
    protected $endpoint = "kce.api.ksyun.com";

    /**
     * @var string
     */
    protected $service = "kce";

    /**
     * @var string
     */
    protected $version = "2019-08-06";

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
        $respClass = "Ksyun\Client" . "\\" . ucfirst("kce") . "\\" . "V20190806\\Models" . "\\" . ucfirst($action) . "Response";
        $obj = new $respClass();
        $obj->unserialize($response);
        return $obj;
    }
}
