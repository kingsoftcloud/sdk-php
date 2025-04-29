<?php

namespace Ksyun\Client\Kmr\V20240814;

use Ksyun\Common\BaseClient;
use Ksyun\Common\Http\HttpOptions;
use Ksyun\Common\Credential;


class KmrClient extends BaseClient
{
    /**
     * @var string
     */
    protected $endpoint = "kmr.api.ksyun.com";

    /**
     * @var string
     */
    protected $service = "kmr";

    /**
     * @var string
     */
    protected $version = "2024-08-14";

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
        $respClass = "Ksyun\Client" . "\\" . ucfirst("kmr") . "\\" . "V20240814\\Models" . "\\" . ucfirst($action) . "Response";
        $obj = new $respClass();
        $obj->unserialize($response);
        return $obj;
    }
}
