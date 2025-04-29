<?php

namespace Ksyun\Client\Rabbitmq\V20191017;

use Ksyun\Common\BaseClient;
use Ksyun\Common\Http\HttpOptions;
use Ksyun\Common\Credential;


class RabbitmqClient extends BaseClient
{
    /**
     * @var string
     */
    protected $endpoint = "rabbitmq.api.ksyun.com";

    /**
     * @var string
     */
    protected $service = "rabbitmq";

    /**
     * @var string
     */
    protected $version = "2019-10-17";

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
        $respClass = "Ksyun\Client" . "\\" . ucfirst("rabbitmq") . "\\" . "V20191017\\Models" . "\\" . ucfirst($action) . "Response";
        $obj = new $respClass();
        $obj->unserialize($response);
        return $obj;
    }
}
