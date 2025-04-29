<?php

namespace Ksyun\Client\Monitor\V20210101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ListAlarmPolicyRequest extends BaseModel
{
    public $RequestParams = [
        /**Int**/
        "PageIndex" => null,
        /**Int**/
        "PageSize" => null,
    ];


    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/json");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("PageIndex", $param) and $param["PageIndex"] !== null) {
            if (is_bool($param["PageIndex"])) {
                $this->RequestParams["PageIndex"] = $param["PageIndex"] ? "true" : "false";
            } else {
                $this->RequestParams["PageIndex"] = $param["PageIndex"];
            }
        }
        if (array_key_exists("PageSize", $param) and $param["PageSize"] !== null) {
            if (is_bool($param["PageSize"])) {
                $this->RequestParams["PageSize"] = $param["PageSize"] ? "true" : "false";
            } else {
                $this->RequestParams["PageSize"] = $param["PageSize"];
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