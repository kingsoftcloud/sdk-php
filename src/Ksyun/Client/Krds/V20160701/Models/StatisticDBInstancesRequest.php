<?php

namespace Ksyun\Client\Krds\V20160701\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class StatisticDBInstancesRequest extends BaseModel
{
    public $RequestParams = [
        /**Int**/
        "ExpiryDateLessThan" => null,
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
        if (array_key_exists("ExpiryDateLessThan", $param) and $param["ExpiryDateLessThan"] !== null) {
            if (is_bool($param["ExpiryDateLessThan"])) {
                $this->RequestParams["ExpiryDateLessThan"] = $param["ExpiryDateLessThan"] ? "true" : "false";
            } else {
                $this->RequestParams["ExpiryDateLessThan"] = $param["ExpiryDateLessThan"];
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