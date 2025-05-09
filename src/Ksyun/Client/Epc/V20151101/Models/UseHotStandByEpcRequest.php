<?php

namespace Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class UseHotStandByEpcRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "HostId" => null,
        /**String**/
        "HotStandByHostId" => null,
        /**String**/
        "RetainInstanceInfo" => null,
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
        if (array_key_exists("HostId", $param) and $param["HostId"] !== null) {
            if (is_bool($param["HostId"])) {
                $this->RequestParams["HostId"] = $param["HostId"] ? "true" : "false";
            } else {
                $this->RequestParams["HostId"] = $param["HostId"];
            }
        }
        if (array_key_exists("HotStandByHostId", $param) and $param["HotStandByHostId"] !== null) {
            if (is_bool($param["HotStandByHostId"])) {
                $this->RequestParams["HotStandByHostId"] = $param["HotStandByHostId"] ? "true" : "false";
            } else {
                $this->RequestParams["HotStandByHostId"] = $param["HotStandByHostId"];
            }
        }
        if (array_key_exists("RetainInstanceInfo", $param) and $param["RetainInstanceInfo"] !== null) {
            if (is_bool($param["RetainInstanceInfo"])) {
                $this->RequestParams["RetainInstanceInfo"] = $param["RetainInstanceInfo"] ? "true" : "false";
            } else {
                $this->RequestParams["RetainInstanceInfo"] = $param["RetainInstanceInfo"];
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