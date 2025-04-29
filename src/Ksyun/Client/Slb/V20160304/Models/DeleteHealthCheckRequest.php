<?php

namespace Ksyun\Client\Slb\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DeleteHealthCheckRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "HealthCheckId" => null,
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
        if (array_key_exists("HealthCheckId", $param) and $param["HealthCheckId"] !== null) {
            if (is_bool($param["HealthCheckId"])) {
                $this->RequestParams["HealthCheckId"] = $param["HealthCheckId"] ? "true" : "false";
            } else {
                $this->RequestParams["HealthCheckId"] = $param["HealthCheckId"];
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