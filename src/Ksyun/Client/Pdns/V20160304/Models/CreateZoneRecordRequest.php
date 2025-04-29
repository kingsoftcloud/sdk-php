<?php

namespace Ksyun\Client\Pdns\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateZoneRecordRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "ZoneId" => null,
        /**String**/
        "RecordName" => null,
        /**String**/
        "Type" => null,
        /**Int**/
        "RecordTtl" => null,
        /**String**/
        "RecordValue" => null,
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
        if (array_key_exists("ZoneId", $param) and $param["ZoneId"] !== null) {
            if (is_bool($param["ZoneId"])) {
                $this->RequestParams["ZoneId"] = $param["ZoneId"] ? "true" : "false";
            } else {
                $this->RequestParams["ZoneId"] = $param["ZoneId"];
            }
        }
        if (array_key_exists("RecordName", $param) and $param["RecordName"] !== null) {
            if (is_bool($param["RecordName"])) {
                $this->RequestParams["RecordName"] = $param["RecordName"] ? "true" : "false";
            } else {
                $this->RequestParams["RecordName"] = $param["RecordName"];
            }
        }
        if (array_key_exists("Type", $param) and $param["Type"] !== null) {
            if (is_bool($param["Type"])) {
                $this->RequestParams["Type"] = $param["Type"] ? "true" : "false";
            } else {
                $this->RequestParams["Type"] = $param["Type"];
            }
        }
        if (array_key_exists("RecordTtl", $param) and $param["RecordTtl"] !== null) {
            if (is_bool($param["RecordTtl"])) {
                $this->RequestParams["RecordTtl"] = $param["RecordTtl"] ? "true" : "false";
            } else {
                $this->RequestParams["RecordTtl"] = $param["RecordTtl"];
            }
        }
        if (array_key_exists("RecordValue", $param) and $param["RecordValue"] !== null) {
            if (is_bool($param["RecordValue"])) {
                $this->RequestParams["RecordValue"] = $param["RecordValue"] ? "true" : "false";
            } else {
                $this->RequestParams["RecordValue"] = $param["RecordValue"];
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