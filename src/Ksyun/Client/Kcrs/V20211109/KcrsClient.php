<?php

namespace Ksyun\Client\Kcrs\V20211109;

use Ksyun\Common\BaseClient;
use Ksyun\Common\Http\HttpOptions;
use Ksyun\Common\Credential;


class KcrsClient extends BaseClient
{
    /**
     * @var string
     */
    protected $endpoint = "kcrs.api.ksyun.com";

    /**
     * @var string
     */
    protected $service = "kcrs";

    /**
     * @var string
     */
    protected $version = "2021-11-09";

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
        $respClass = "Ksyun\Client" . "\\" . ucfirst("kcrs") . "\\" . "V20211109\\Models" . "\\" . ucfirst($action) . "Response";
        $obj = new $respClass();
        $obj->unserialize($response);
        return $obj;
    }
}
