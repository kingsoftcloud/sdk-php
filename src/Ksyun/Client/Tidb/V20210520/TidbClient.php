<?php

namespace Ksyun\Client\Tidb\V20210520;

use Ksyun\Common\BaseClient;
use Ksyun\Common\Http\HttpOptions;
use Ksyun\Common\Credential;


class TidbClient extends BaseClient
{
    /**
     * @var string
     */
    protected $endpoint = "tidb.api.ksyun.com";

    /**
     * @var string
     */
    protected $service = "tidb";

    /**
     * @var string
     */
    protected $version = "2021-05-20";

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
        $respClass = "Ksyun\Client" . "\\" . ucfirst("tidb") . "\\" . "V20210520\\Models" . "\\" . ucfirst($action) . "Response";
        $obj = new $respClass();
        $obj->unserialize($response);
        return $obj;
    }
}
