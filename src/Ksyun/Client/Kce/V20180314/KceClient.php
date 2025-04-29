<?php

namespace Ksyun\Client\Kce\V20180314;

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
    protected $version = "2018-03-14";

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
        $respClass = "Ksyun\Client" . "\\" . ucfirst("kce") . "\\" . "V20180314\\Models" . "\\" . ucfirst($action) . "Response";
        $obj = new $respClass();
        $obj->unserialize($response);
        return $obj;
    }
}
