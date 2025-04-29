<?php

namespace Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DedicatedHostMigrateRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "DedicatedClusterId" => null,
    ];

    /**特殊参数类型:Filter**/
    public $DedicatedHostId = [];

    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("DedicatedClusterId", $param) and $param["DedicatedClusterId"] !== null) {
            if (is_bool($param["DedicatedClusterId"])) {
                $this->RequestParams["DedicatedClusterId"] = $param["DedicatedClusterId"] ? "true" : "false";
            } else {
                $this->RequestParams["DedicatedClusterId"] = $param["DedicatedClusterId"];
            }
        }
        if (array_key_exists("DedicatedHostId", $param) and $param["DedicatedHostId"] !== null) {
            $res = $this->formatFilterParams("DedicatedHostId", $param["DedicatedHostId"]);
            $this->_unserialize("DedicatedHostId", $res);
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