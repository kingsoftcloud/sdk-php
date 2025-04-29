<?php

namespace Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateNatRateLimitRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "NetworkInterfaceId" => null,
        /**Int**/
        "BandwidthLimit" => null,
        /**Int**/
        "inBandwidthLimit" => null,
    ];


    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("NetworkInterfaceId", $param) and $param["NetworkInterfaceId"] !== null) {
            if (is_bool($param["NetworkInterfaceId"])) {
                $this->RequestParams["NetworkInterfaceId"] = $param["NetworkInterfaceId"] ? "true" : "false";
            } else {
                $this->RequestParams["NetworkInterfaceId"] = $param["NetworkInterfaceId"];
            }
        }
        if (array_key_exists("BandwidthLimit", $param) and $param["BandwidthLimit"] !== null) {
            if (is_bool($param["BandwidthLimit"])) {
                $this->RequestParams["BandwidthLimit"] = $param["BandwidthLimit"] ? "true" : "false";
            } else {
                $this->RequestParams["BandwidthLimit"] = $param["BandwidthLimit"];
            }
        }
        if (array_key_exists("inBandwidthLimit", $param) and $param["inBandwidthLimit"] !== null) {
            if (is_bool($param["inBandwidthLimit"])) {
                $this->RequestParams["inBandwidthLimit"] = $param["inBandwidthLimit"] ? "true" : "false";
            } else {
                $this->RequestParams["inBandwidthLimit"] = $param["inBandwidthLimit"];
            }
        }

    }

    private function _unserialize($name, $params)
    {
        if ($params === null) {
            return;
        }
        foreach ($params as $key => $value) {
            $this->$name[$key] = $value;
        }

    }
}