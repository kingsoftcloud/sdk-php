<?php

namespace Ksyun\Client\Bill\V20180601;

use Ksyun\Common\BaseClient;
use Ksyun\Common\Http\HttpOptions;
use Ksyun\Common\Credential;


class BillClient extends BaseClient
{
    /**
     * @var string
     */
    protected $endpoint = "bill.api.ksyun.com";

    /**
     * @var string
     */
    protected $service = "bill";

    /**
     * @var string
     */
    protected $version = "2018-06-01";

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
        $respClass = "Ksyun\Client" . "\\" . ucfirst("bill") . "\\" . "V20180601\\Models" . "\\" . ucfirst($action) . "Response";
        $obj = new $respClass();
        $obj->unserialize($response);
        return $obj;
    }
}
