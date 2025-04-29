<?php

namespace Ksyun\Client\Monitor\V20181114;

use Ksyun\Common\BaseClient;
use Ksyun\Common\Http\HttpOptions;
use Ksyun\Common\Credential;


class MonitorClient extends BaseClient
{
    /**
     * @var string
     */
    protected $endpoint = "monitor.api.ksyun.com";

    /**
     * @var string
     */
    protected $service = "monitor";

    /**
     * @var string
     */
    protected $version = "2018-11-14";

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
        $respClass = "Ksyun\Client" . "\\" . ucfirst("monitor") . "\\" . "V20181114\\Models" . "\\" . ucfirst($action) . "Response";
        $obj = new $respClass();
        $obj->unserialize($response);
        return $obj;
    }
}
