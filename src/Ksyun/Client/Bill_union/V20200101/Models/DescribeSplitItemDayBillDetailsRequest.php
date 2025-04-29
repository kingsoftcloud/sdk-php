<?php

namespace Ksyun\Client\Bill_union\V20200101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeSplitItemDayBillDetailsRequest extends BaseModel
{
    public $RequestParams = [
        /**Int**/
        "CustomerBillMonth" => null,
        /**String**/
        "ProductGroupCode" => null,
        /**Int**/
        "StatisticType" => null,
        /**Int**/
        "PayType" => null,
        /**Int**/
        "SubAccountId" => null,
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
        if (array_key_exists("CustomerBillMonth", $param) and $param["CustomerBillMonth"] !== null) {
            if (is_bool($param["CustomerBillMonth"])) {
                $this->RequestParams["CustomerBillMonth"] = $param["CustomerBillMonth"] ? "true" : "false";
            } else {
                $this->RequestParams["CustomerBillMonth"] = $param["CustomerBillMonth"];
            }
        }
        if (array_key_exists("ProductGroupCode", $param) and $param["ProductGroupCode"] !== null) {
            if (is_bool($param["ProductGroupCode"])) {
                $this->RequestParams["ProductGroupCode"] = $param["ProductGroupCode"] ? "true" : "false";
            } else {
                $this->RequestParams["ProductGroupCode"] = $param["ProductGroupCode"];
            }
        }
        if (array_key_exists("StatisticType", $param) and $param["StatisticType"] !== null) {
            if (is_bool($param["StatisticType"])) {
                $this->RequestParams["StatisticType"] = $param["StatisticType"] ? "true" : "false";
            } else {
                $this->RequestParams["StatisticType"] = $param["StatisticType"];
            }
        }
        if (array_key_exists("PayType", $param) and $param["PayType"] !== null) {
            if (is_bool($param["PayType"])) {
                $this->RequestParams["PayType"] = $param["PayType"] ? "true" : "false";
            } else {
                $this->RequestParams["PayType"] = $param["PayType"];
            }
        }
        if (array_key_exists("SubAccountId", $param) and $param["SubAccountId"] !== null) {
            if (is_bool($param["SubAccountId"])) {
                $this->RequestParams["SubAccountId"] = $param["SubAccountId"] ? "true" : "false";
            } else {
                $this->RequestParams["SubAccountId"] = $param["SubAccountId"];
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