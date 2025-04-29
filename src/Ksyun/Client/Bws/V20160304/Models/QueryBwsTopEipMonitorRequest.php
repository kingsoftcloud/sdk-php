<?php

namespace Ksyun\Client\Bws\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class QueryBwsTopEipMonitorRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "BandWidthShareId" => null,
        /**String**/
        "StartTime" => null,
        /**String**/
        "EndTime" => null,
        /**String**/
        "SortType" => null,
        /**String**/
        "PublicIp" => null,
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
        if (array_key_exists("BandWidthShareId", $param) and $param["BandWidthShareId"] !== null) {
            if (is_bool($param["BandWidthShareId"])) {
                $this->RequestParams["BandWidthShareId"] = $param["BandWidthShareId"] ? "true" : "false";
            } else {
                $this->RequestParams["BandWidthShareId"] = $param["BandWidthShareId"];
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
        if (array_key_exists("SortType", $param) and $param["SortType"] !== null) {
            if (is_bool($param["SortType"])) {
                $this->RequestParams["SortType"] = $param["SortType"] ? "true" : "false";
            } else {
                $this->RequestParams["SortType"] = $param["SortType"];
            }
        }
        if (array_key_exists("PublicIp", $param) and $param["PublicIp"] !== null) {
            if (is_bool($param["PublicIp"])) {
                $this->RequestParams["PublicIp"] = $param["PublicIp"] ? "true" : "false";
            } else {
                $this->RequestParams["PublicIp"] = $param["PublicIp"];
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