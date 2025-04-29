<?php

namespace Ksyun\Client\Pdns\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreatePdnsZoneRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "ZoneName" => null,
        /**Int**/
        "ZoneTtl" => null,
        /**String**/
        "ProjectId" => null,
        /**String**/
        "ChargeType" => null,
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
        if (array_key_exists("ZoneName", $param) and $param["ZoneName"] !== null) {
            if (is_bool($param["ZoneName"])) {
                $this->RequestParams["ZoneName"] = $param["ZoneName"] ? "true" : "false";
            } else {
                $this->RequestParams["ZoneName"] = $param["ZoneName"];
            }
        }
        if (array_key_exists("ZoneTtl", $param) and $param["ZoneTtl"] !== null) {
            if (is_bool($param["ZoneTtl"])) {
                $this->RequestParams["ZoneTtl"] = $param["ZoneTtl"] ? "true" : "false";
            } else {
                $this->RequestParams["ZoneTtl"] = $param["ZoneTtl"];
            }
        }
        if (array_key_exists("ProjectId", $param) and $param["ProjectId"] !== null) {
            if (is_bool($param["ProjectId"])) {
                $this->RequestParams["ProjectId"] = $param["ProjectId"] ? "true" : "false";
            } else {
                $this->RequestParams["ProjectId"] = $param["ProjectId"];
            }
        }
        if (array_key_exists("ChargeType", $param) and $param["ChargeType"] !== null) {
            if (is_bool($param["ChargeType"])) {
                $this->RequestParams["ChargeType"] = $param["ChargeType"] ? "true" : "false";
            } else {
                $this->RequestParams["ChargeType"] = $param["ChargeType"];
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