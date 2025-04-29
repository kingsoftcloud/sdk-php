<?php

namespace Ksyun\Client\Bill\V20180601\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class GetMonthBillRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "BillStartMonth" => null,
        /**String**/
        "BillEndMonth" => null,
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
        if (array_key_exists("BillStartMonth", $param) and $param["BillStartMonth"] !== null) {
            if (is_bool($param["BillStartMonth"])) {
                $this->RequestParams["BillStartMonth"] = $param["BillStartMonth"] ? "true" : "false";
            } else {
                $this->RequestParams["BillStartMonth"] = $param["BillStartMonth"];
            }
        }
        if (array_key_exists("BillEndMonth", $param) and $param["BillEndMonth"] !== null) {
            if (is_bool($param["BillEndMonth"])) {
                $this->RequestParams["BillEndMonth"] = $param["BillEndMonth"] ? "true" : "false";
            } else {
                $this->RequestParams["BillEndMonth"] = $param["BillEndMonth"];
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