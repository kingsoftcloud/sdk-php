<?php

namespace Ksyun\Client\Kad\V20161122;

use Ksyun\Common\BaseClient;
use Ksyun\Common\Http\HttpOptions;
use Ksyun\Common\Credential;


class KadClient extends BaseClient
{
    /**
     * @var string
     */
    protected $endpoint = "kad.api.ksyun.com";

    /**
     * @var string
     */
    protected $service = "kad";

    /**
     * @var string
     */
    protected $version = "2016-11-22";

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
        $respClass = "Ksyun\Client" . "\\" . ucfirst("kad") . "\\" . "V20161122\\Models" . "\\" . ucfirst($action) . "Response";
        $obj = new $respClass();
        $obj->unserialize($response);
        return $obj;
    }
}
