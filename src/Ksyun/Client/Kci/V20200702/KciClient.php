<?php

namespace Ksyun\Client\Kci\V20200702;

use Ksyun\Common\BaseClient;
use Ksyun\Common\Http\HttpOptions;
use Ksyun\Common\Credential;


class KciClient extends BaseClient
{
    /**
     * @var string
     */
    protected $endpoint = "kci.api.ksyun.com";

    /**
     * @var string
     */
    protected $service = "kci";

    /**
     * @var string
     */
    protected $version = "2020-07-02";

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
        $respClass = "Ksyun\Client" . "\\" . ucfirst("kci") . "\\" . "V20200702\\Models" . "\\" . ucfirst($action) . "Response";
        $obj = new $respClass();
        $obj->unserialize($response);
        return $obj;
    }
}
