<?php

namespace Ksyun\Client\Kce\V20230306\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class EnableGrafanaRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "InstanceId" => null,
        /**Boolean**/
        "EnableGrafana" => null,
        /**String**/
        "Password" => null,
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
        if (array_key_exists("InstanceId", $param) and $param["InstanceId"] !== null) {
            if (is_bool($param["InstanceId"])) {
                $this->RequestParams["InstanceId"] = $param["InstanceId"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceId"] = $param["InstanceId"];
            }
        }
        if (array_key_exists("EnableGrafana", $param) and $param["EnableGrafana"] !== null) {
            if (is_bool($param["EnableGrafana"])) {
                $this->RequestParams["EnableGrafana"] = $param["EnableGrafana"] ? "true" : "false";
            } else {
                $this->RequestParams["EnableGrafana"] = $param["EnableGrafana"];
            }
        }
        if (array_key_exists("Password", $param) and $param["Password"] !== null) {
            if (is_bool($param["Password"])) {
                $this->RequestParams["Password"] = $param["Password"] ? "true" : "false";
            } else {
                $this->RequestParams["Password"] = $param["Password"];
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