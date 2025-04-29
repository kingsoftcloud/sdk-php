<?php

namespace Ksyun\Client\Slb\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ConfigureHealthCheckRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "ListenerId" => null,
        /**String**/
        "HealthCheckState" => null,
        /**Int**/
        "HealthCheckConnectPort" => null,
        /**Int**/
        "HealthyThreshold" => null,
        /**Int**/
        "Interval" => null,
        /**Int**/
        "Timeout" => null,
        /**Int**/
        "UnhealthyThreshold" => null,
        /**String**/
        "HealthProtocol" => null,
        /**String**/
        "HttpMethod" => null,
        /**String**/
        "UrlPath" => null,
        /**String**/
        "HostName" => null,
        /**String**/
        "HealthCheckReq" => null,
        /**String**/
        "HealthCheckExp" => null,
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
        if (array_key_exists("ListenerId", $param) and $param["ListenerId"] !== null) {
            if (is_bool($param["ListenerId"])) {
                $this->RequestParams["ListenerId"] = $param["ListenerId"] ? "true" : "false";
            } else {
                $this->RequestParams["ListenerId"] = $param["ListenerId"];
            }
        }
        if (array_key_exists("HealthCheckState", $param) and $param["HealthCheckState"] !== null) {
            if (is_bool($param["HealthCheckState"])) {
                $this->RequestParams["HealthCheckState"] = $param["HealthCheckState"] ? "true" : "false";
            } else {
                $this->RequestParams["HealthCheckState"] = $param["HealthCheckState"];
            }
        }
        if (array_key_exists("HealthCheckConnectPort", $param) and $param["HealthCheckConnectPort"] !== null) {
            if (is_bool($param["HealthCheckConnectPort"])) {
                $this->RequestParams["HealthCheckConnectPort"] = $param["HealthCheckConnectPort"] ? "true" : "false";
            } else {
                $this->RequestParams["HealthCheckConnectPort"] = $param["HealthCheckConnectPort"];
            }
        }
        if (array_key_exists("HealthyThreshold", $param) and $param["HealthyThreshold"] !== null) {
            if (is_bool($param["HealthyThreshold"])) {
                $this->RequestParams["HealthyThreshold"] = $param["HealthyThreshold"] ? "true" : "false";
            } else {
                $this->RequestParams["HealthyThreshold"] = $param["HealthyThreshold"];
            }
        }
        if (array_key_exists("Interval", $param) and $param["Interval"] !== null) {
            if (is_bool($param["Interval"])) {
                $this->RequestParams["Interval"] = $param["Interval"] ? "true" : "false";
            } else {
                $this->RequestParams["Interval"] = $param["Interval"];
            }
        }
        if (array_key_exists("Timeout", $param) and $param["Timeout"] !== null) {
            if (is_bool($param["Timeout"])) {
                $this->RequestParams["Timeout"] = $param["Timeout"] ? "true" : "false";
            } else {
                $this->RequestParams["Timeout"] = $param["Timeout"];
            }
        }
        if (array_key_exists("UnhealthyThreshold", $param) and $param["UnhealthyThreshold"] !== null) {
            if (is_bool($param["UnhealthyThreshold"])) {
                $this->RequestParams["UnhealthyThreshold"] = $param["UnhealthyThreshold"] ? "true" : "false";
            } else {
                $this->RequestParams["UnhealthyThreshold"] = $param["UnhealthyThreshold"];
            }
        }
        if (array_key_exists("HealthProtocol", $param) and $param["HealthProtocol"] !== null) {
            if (is_bool($param["HealthProtocol"])) {
                $this->RequestParams["HealthProtocol"] = $param["HealthProtocol"] ? "true" : "false";
            } else {
                $this->RequestParams["HealthProtocol"] = $param["HealthProtocol"];
            }
        }
        if (array_key_exists("HttpMethod", $param) and $param["HttpMethod"] !== null) {
            if (is_bool($param["HttpMethod"])) {
                $this->RequestParams["HttpMethod"] = $param["HttpMethod"] ? "true" : "false";
            } else {
                $this->RequestParams["HttpMethod"] = $param["HttpMethod"];
            }
        }
        if (array_key_exists("UrlPath", $param) and $param["UrlPath"] !== null) {
            if (is_bool($param["UrlPath"])) {
                $this->RequestParams["UrlPath"] = $param["UrlPath"] ? "true" : "false";
            } else {
                $this->RequestParams["UrlPath"] = $param["UrlPath"];
            }
        }
        if (array_key_exists("HostName", $param) and $param["HostName"] !== null) {
            if (is_bool($param["HostName"])) {
                $this->RequestParams["HostName"] = $param["HostName"] ? "true" : "false";
            } else {
                $this->RequestParams["HostName"] = $param["HostName"];
            }
        }
        if (array_key_exists("HealthCheckReq", $param) and $param["HealthCheckReq"] !== null) {
            if (is_bool($param["HealthCheckReq"])) {
                $this->RequestParams["HealthCheckReq"] = $param["HealthCheckReq"] ? "true" : "false";
            } else {
                $this->RequestParams["HealthCheckReq"] = $param["HealthCheckReq"];
            }
        }
        if (array_key_exists("HealthCheckExp", $param) and $param["HealthCheckExp"] !== null) {
            if (is_bool($param["HealthCheckExp"])) {
                $this->RequestParams["HealthCheckExp"] = $param["HealthCheckExp"] ? "true" : "false";
            } else {
                $this->RequestParams["HealthCheckExp"] = $param["HealthCheckExp"];
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