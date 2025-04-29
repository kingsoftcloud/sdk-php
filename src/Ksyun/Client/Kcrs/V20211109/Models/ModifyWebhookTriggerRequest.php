<?php

namespace Ksyun\Client\Kcrs\V20211109\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyWebhookTriggerRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "InstanceId" => null,
        /**String**/
        "Namespace" => null,
        /**String**/
        "Trigger" => null,
        /**String**/
        "TriggerId" => null,
        /**String**/
        "TriggerName" => null,
        /**String**/
        "TriggerUrl" => null,
        /**String**/
        "Enabled" => null,
        /**String**/
        "Key" => null,
    ];

    /**特殊参数类型:Filter**/
    public $EventType = [];
    /**特殊参数类型:Filter**/
    public $Header = [];
    /**特殊参数类型:Filter**/
    public $Value = [];

    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
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
        if (array_key_exists("Namespace", $param) and $param["Namespace"] !== null) {
            if (is_bool($param["Namespace"])) {
                $this->RequestParams["Namespace"] = $param["Namespace"] ? "true" : "false";
            } else {
                $this->RequestParams["Namespace"] = $param["Namespace"];
            }
        }
        if (array_key_exists("Trigger", $param) and $param["Trigger"] !== null) {
            if (is_bool($param["Trigger"])) {
                $this->RequestParams["Trigger"] = $param["Trigger"] ? "true" : "false";
            } else {
                $this->RequestParams["Trigger"] = $param["Trigger"];
            }
        }
        if (array_key_exists("TriggerId", $param) and $param["TriggerId"] !== null) {
            if (is_bool($param["TriggerId"])) {
                $this->RequestParams["TriggerId"] = $param["TriggerId"] ? "true" : "false";
            } else {
                $this->RequestParams["TriggerId"] = $param["TriggerId"];
            }
        }
        if (array_key_exists("TriggerName", $param) and $param["TriggerName"] !== null) {
            if (is_bool($param["TriggerName"])) {
                $this->RequestParams["TriggerName"] = $param["TriggerName"] ? "true" : "false";
            } else {
                $this->RequestParams["TriggerName"] = $param["TriggerName"];
            }
        }
        if (array_key_exists("EventType", $param) and $param["EventType"] !== null) {
            $res = $this->formatFilterParams("EventType", $param["EventType"]);
            $this->_unserialize("EventType", $res);
        }
        if (array_key_exists("TriggerUrl", $param) and $param["TriggerUrl"] !== null) {
            if (is_bool($param["TriggerUrl"])) {
                $this->RequestParams["TriggerUrl"] = $param["TriggerUrl"] ? "true" : "false";
            } else {
                $this->RequestParams["TriggerUrl"] = $param["TriggerUrl"];
            }
        }
        if (array_key_exists("Header", $param) and $param["Header"] !== null) {
            $res = $this->formatFilterParams("Header", $param["Header"]);
            $this->_unserialize("Header", $res);
        }
        if (array_key_exists("Enabled", $param) and $param["Enabled"] !== null) {
            if (is_bool($param["Enabled"])) {
                $this->RequestParams["Enabled"] = $param["Enabled"] ? "true" : "false";
            } else {
                $this->RequestParams["Enabled"] = $param["Enabled"];
            }
        }
        if (array_key_exists("Key", $param) and $param["Key"] !== null) {
            if (is_bool($param["Key"])) {
                $this->RequestParams["Key"] = $param["Key"] ? "true" : "false";
            } else {
                $this->RequestParams["Key"] = $param["Key"];
            }
        }
        if (array_key_exists("Value", $param) and $param["Value"] !== null) {
            $res = $this->formatFilterParams("Value", $param["Value"]);
            $this->_unserialize("Value", $res);
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