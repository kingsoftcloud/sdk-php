<?php

namespace Ksyun\Client\Bill_union\V20200101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeInstanceSummaryBillsRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "BillMonth" => null,
        /**String**/
        "ProductCode" => null,
        /**Int**/
        "Page" => null,
        /**Int**/
        "Size" => null,
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
        if (array_key_exists("BillMonth", $param) and $param["BillMonth"] !== null) {
            if (is_bool($param["BillMonth"])) {
                $this->RequestParams["BillMonth"] = $param["BillMonth"] ? "true" : "false";
            } else {
                $this->RequestParams["BillMonth"] = $param["BillMonth"];
            }
        }
        if (array_key_exists("ProductCode", $param) and $param["ProductCode"] !== null) {
            if (is_bool($param["ProductCode"])) {
                $this->RequestParams["ProductCode"] = $param["ProductCode"] ? "true" : "false";
            } else {
                $this->RequestParams["ProductCode"] = $param["ProductCode"];
            }
        }
        if (array_key_exists("Page", $param) and $param["Page"] !== null) {
            if (is_bool($param["Page"])) {
                $this->RequestParams["Page"] = $param["Page"] ? "true" : "false";
            } else {
                $this->RequestParams["Page"] = $param["Page"];
            }
        }
        if (array_key_exists("Size", $param) and $param["Size"] !== null) {
            if (is_bool($param["Size"])) {
                $this->RequestParams["Size"] = $param["Size"] ? "true" : "false";
            } else {
                $this->RequestParams["Size"] = $param["Size"];
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