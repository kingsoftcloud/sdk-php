<?php

namespace Ksyun\Client\Slb\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ListPrivateLinkServerRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "PrivateLinkServerId" => null,
    ];

    /**特殊参数类型:Filter**/
    public $Filter = [];

    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("PrivateLinkServerId", $param) and $param["PrivateLinkServerId"] !== null) {
            if (is_bool($param["PrivateLinkServerId"])) {
                $this->RequestParams["PrivateLinkServerId"] = $param["PrivateLinkServerId"] ? "true" : "false";
            } else {
                $this->RequestParams["PrivateLinkServerId"] = $param["PrivateLinkServerId"];
            }
        }
        if (array_key_exists("Filter", $param) and $param["Filter"] !== null) {
            $res = $this->formatFilterParams("Filter", $param["Filter"]);
            $this->_unserialize("Filter", $res);
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