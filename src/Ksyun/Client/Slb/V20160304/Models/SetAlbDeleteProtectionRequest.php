<?php

namespace Ksyun\Client\Slb\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class SetAlbDeleteProtectionRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "albId" => null,
        /**String**/
        "deleteProtection" => null,
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
        if (array_key_exists("albId", $param) and $param["albId"] !== null) {
            if (is_bool($param["albId"])) {
                $this->RequestParams["albId"] = $param["albId"] ? "true" : "false";
            } else {
                $this->RequestParams["albId"] = $param["albId"];
            }
        }
        if (array_key_exists("deleteProtection", $param) and $param["deleteProtection"] !== null) {
            if (is_bool($param["deleteProtection"])) {
                $this->RequestParams["deleteProtection"] = $param["deleteProtection"] ? "true" : "false";
            } else {
                $this->RequestParams["deleteProtection"] = $param["deleteProtection"];
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