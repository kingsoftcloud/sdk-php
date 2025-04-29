<?php

namespace Ksyun\Client\Klog\V20200731;

use Ksyun\Common\BaseClient;
use Ksyun\Common\Http\HttpOptions;
use Ksyun\Common\Credential;


class KlogClient extends BaseClient
{
    /**
     * @var string
     */
    protected $endpoint = "klog.api.ksyun.com";

    /**
     * @var string
     */
    protected $service = "klog";

    /**
     * @var string
     */
    protected $version = "2020-07-31";

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
        $respClass = "Ksyun\Client" . "\\" . ucfirst("klog") . "\\" . "V20200731\\Models" . "\\" . ucfirst($action) . "Response";
        $obj = new $respClass();
        $obj->unserialize($response);
        return $obj;
    }
}
