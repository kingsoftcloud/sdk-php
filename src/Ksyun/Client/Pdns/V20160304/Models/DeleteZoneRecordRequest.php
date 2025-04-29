<?php

namespace Ksyun\Client\Pdns\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DeleteZoneRecordRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "ZoneId" => null,
        /**String**/
        "RecordId" => null,
        /**String**/
        "RecordValue" => null,
        /**String**/
        "Priority" => null,
        /**String**/
        "Weight" => null,
        /**String**/
        "Port" => null,
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
        if (array_key_exists("RecordId", $param) and $param["RecordId"] !== null) {
            if (is_bool($param["RecordId"])) {
                $this->RequestParams["RecordId"] = $param["RecordId"] ? "true" : "false";
            } else {
                $this->RequestParams["RecordId"] = $param["RecordId"];
            }
        }
        if (array_key_exists("RecordValue", $param) and $param["RecordValue"] !== null) {
            if (is_bool($param["RecordValue"])) {
                $this->RequestParams["RecordValue"] = $param["RecordValue"] ? "true" : "false";
            } else {
                $this->RequestParams["RecordValue"] = $param["RecordValue"];
            }
        }
        if (array_key_exists("Priority", $param) and $param["Priority"] !== null) {
            if (is_bool($param["Priority"])) {
                $this->RequestParams["Priority"] = $param["Priority"] ? "true" : "false";
            } else {
                $this->RequestParams["Priority"] = $param["Priority"];
            }
        }
        if (array_key_exists("Weight", $param) and $param["Weight"] !== null) {
            if (is_bool($param["Weight"])) {
                $this->RequestParams["Weight"] = $param["Weight"] ? "true" : "false";
            } else {
                $this->RequestParams["Weight"] = $param["Weight"];
            }
        }
        if (array_key_exists("Port", $param) and $param["Port"] !== null) {
            if (is_bool($param["Port"])) {
                $this->RequestParams["Port"] = $param["Port"] ? "true" : "false";
            } else {
                $this->RequestParams["Port"] = $param["Port"];
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