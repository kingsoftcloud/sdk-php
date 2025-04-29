<?php

namespace Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyNatIpStatusRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "NatIpId" => null,
        /**Boolean**/
        "Enabled" => null,
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
        if (array_key_exists("NatIpId", $param) and $param["NatIpId"] !== null) {
            if (is_bool($param["NatIpId"])) {
                $this->RequestParams["NatIpId"] = $param["NatIpId"] ? "true" : "false";
            } else {
                $this->RequestParams["NatIpId"] = $param["NatIpId"];
            }
        }
        if (array_key_exists("Enabled", $param) and $param["Enabled"] !== null) {
            if (is_bool($param["Enabled"])) {
                $this->RequestParams["Enabled"] = $param["Enabled"] ? "true" : "false";
            } else {
                $this->RequestParams["Enabled"] = $param["Enabled"];
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