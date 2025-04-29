<?php

namespace Ksyun\Client\Slb\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class SetLBModificationProtectionRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "LoadBalancerId" => null,
        /**String**/
        "ModificationProtection" => null,
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
        if (array_key_exists("LoadBalancerId", $param) and $param["LoadBalancerId"] !== null) {
            if (is_bool($param["LoadBalancerId"])) {
                $this->RequestParams["LoadBalancerId"] = $param["LoadBalancerId"] ? "true" : "false";
            } else {
                $this->RequestParams["LoadBalancerId"] = $param["LoadBalancerId"];
            }
        }
        if (array_key_exists("ModificationProtection", $param) and $param["ModificationProtection"] !== null) {
            if (is_bool($param["ModificationProtection"])) {
                $this->RequestParams["ModificationProtection"] = $param["ModificationProtection"] ? "true" : "false";
            } else {
                $this->RequestParams["ModificationProtection"] = $param["ModificationProtection"];
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