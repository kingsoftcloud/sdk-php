<?php

namespace Ksyun\Client\Kes\V20201215;

use Ksyun\Common\BaseClient;
use Ksyun\Common\Http\HttpOptions;
use Ksyun\Common\Credential;


class KesClient extends BaseClient
{
    /**
     * @var string
     */
    protected $endpoint = "kes.api.ksyun.com";

    /**
     * @var string
     */
    protected $service = "kes";

    /**
     * @var string
     */
    protected $version = "2020-12-15";

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
        $respClass = "Ksyun\Client" . "\\" . ucfirst("kes") . "\\" . "V20201215\\Models" . "\\" . ucfirst($action) . "Response";
        $obj = new $respClass();
        $obj->unserialize($response);
        return $obj;
    }
}
