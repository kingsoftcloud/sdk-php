<?php

namespace Ksyun\Client\Cen\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DeleteCenGrantRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "CenGrantId" => null,
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
        if (array_key_exists("CenGrantId", $param) and $param["CenGrantId"] !== null) {
            if (is_bool($param["CenGrantId"])) {
                $this->RequestParams["CenGrantId"] = $param["CenGrantId"] ? "true" : "false";
            } else {
                $this->RequestParams["CenGrantId"] = $param["CenGrantId"];
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