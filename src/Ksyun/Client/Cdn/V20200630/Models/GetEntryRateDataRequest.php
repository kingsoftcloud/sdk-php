<?php

namespace Ksyun\Client\Cdn\V20200630\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class GetEntryRateDataRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "Domains" => null,
        /**String**/
        "StartTime" => null,
        /**String**/
        "EndTime" => null,
        /**String**/
        "Province" => null,
        /**String**/
        "Isp" => null,
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
        if (array_key_exists("Domains", $param) and $param["Domains"] !== null) {
            if (is_bool($param["Domains"])) {
                $this->RequestParams["Domains"] = $param["Domains"] ? "true" : "false";
            } else {
                $this->RequestParams["Domains"] = $param["Domains"];
            }
        }
        if (array_key_exists("StartTime", $param) and $param["StartTime"] !== null) {
            if (is_bool($param["StartTime"])) {
                $this->RequestParams["StartTime"] = $param["StartTime"] ? "true" : "false";
            } else {
                $this->RequestParams["StartTime"] = $param["StartTime"];
            }
        }
        if (array_key_exists("EndTime", $param) and $param["EndTime"] !== null) {
            if (is_bool($param["EndTime"])) {
                $this->RequestParams["EndTime"] = $param["EndTime"] ? "true" : "false";
            } else {
                $this->RequestParams["EndTime"] = $param["EndTime"];
            }
        }
        if (array_key_exists("Province", $param) and $param["Province"] !== null) {
            if (is_bool($param["Province"])) {
                $this->RequestParams["Province"] = $param["Province"] ? "true" : "false";
            } else {
                $this->RequestParams["Province"] = $param["Province"];
            }
        }
        if (array_key_exists("Isp", $param) and $param["Isp"] !== null) {
            if (is_bool($param["Isp"])) {
                $this->RequestParams["Isp"] = $param["Isp"] ? "true" : "false";
            } else {
                $this->RequestParams["Isp"] = $param["Isp"];
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