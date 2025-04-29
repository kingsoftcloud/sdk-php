<?php

namespace Ksyun\Client\Mongodb\V20170101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class SetMongoDBTimingSnapshotRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "InstanceId" => null,
        /**String**/
        "TimingSwitch" => null,
        /**String**/
        "Timezone" => null,
        /**String**/
        "TimeCycle" => null,
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
        if (array_key_exists("InstanceId", $param) and $param["InstanceId"] !== null) {
            if (is_bool($param["InstanceId"])) {
                $this->RequestParams["InstanceId"] = $param["InstanceId"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceId"] = $param["InstanceId"];
            }
        }
        if (array_key_exists("TimingSwitch", $param) and $param["TimingSwitch"] !== null) {
            if (is_bool($param["TimingSwitch"])) {
                $this->RequestParams["TimingSwitch"] = $param["TimingSwitch"] ? "true" : "false";
            } else {
                $this->RequestParams["TimingSwitch"] = $param["TimingSwitch"];
            }
        }
        if (array_key_exists("Timezone", $param) and $param["Timezone"] !== null) {
            if (is_bool($param["Timezone"])) {
                $this->RequestParams["Timezone"] = $param["Timezone"] ? "true" : "false";
            } else {
                $this->RequestParams["Timezone"] = $param["Timezone"];
            }
        }
        if (array_key_exists("TimeCycle", $param) and $param["TimeCycle"] !== null) {
            if (is_bool($param["TimeCycle"])) {
                $this->RequestParams["TimeCycle"] = $param["TimeCycle"] ? "true" : "false";
            } else {
                $this->RequestParams["TimeCycle"] = $param["TimeCycle"];
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