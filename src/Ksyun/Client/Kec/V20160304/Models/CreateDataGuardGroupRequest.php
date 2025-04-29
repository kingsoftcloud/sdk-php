<?php

namespace Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateDataGuardGroupRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "DataGuardName" => null,
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
        if (array_key_exists("DataGuardName", $param) and $param["DataGuardName"] !== null) {
            if (is_bool($param["DataGuardName"])) {
                $this->RequestParams["DataGuardName"] = $param["DataGuardName"] ? "true" : "false";
            } else {
                $this->RequestParams["DataGuardName"] = $param["DataGuardName"];
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