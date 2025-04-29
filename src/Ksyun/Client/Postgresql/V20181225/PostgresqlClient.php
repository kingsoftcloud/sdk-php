<?php

namespace Ksyun\Client\Postgresql\V20181225;

use Ksyun\Common\BaseClient;
use Ksyun\Common\Http\HttpOptions;
use Ksyun\Common\Credential;


class PostgresqlClient extends BaseClient
{
    /**
     * @var string
     */
    protected $endpoint = "postgresql.api.ksyun.com";

    /**
     * @var string
     */
    protected $service = "postgresql";

    /**
     * @var string
     */
    protected $version = "2018-12-25";

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
        $respClass = "Ksyun\Client" . "\\" . ucfirst("postgresql") . "\\" . "V20181225\\Models" . "\\" . ucfirst($action) . "Response";
        $obj = new $respClass();
        $obj->unserialize($response);
        return $obj;
    }
}
