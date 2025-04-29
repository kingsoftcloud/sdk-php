<?php

namespace Ksyun\Client\Cen\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateCenRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "CenName" => null,
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
        if (array_key_exists("CenName", $param) and $param["CenName"] !== null) {
            if (is_bool($param["CenName"])) {
                $this->RequestParams["CenName"] = $param["CenName"] ? "true" : "false";
            } else {
                $this->RequestParams["CenName"] = $param["CenName"];
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