<?php

namespace Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class GetAccountAllProjectsByParamsRequest extends BaseModel
{
    public $RequestParams = [
        /**Int**/
        "Ps" => null,
        /**Int**/
        "Pn" => null,
        /**String**/
        "ParamUserName" => null,
        /**String**/
        "ParamAccessKey" => null,
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
        if (array_key_exists("Ps", $param) and $param["Ps"] !== null) {
            if (is_bool($param["Ps"])) {
                $this->RequestParams["Ps"] = $param["Ps"] ? "true" : "false";
            } else {
                $this->RequestParams["Ps"] = $param["Ps"];
            }
        }
        if (array_key_exists("Pn", $param) and $param["Pn"] !== null) {
            if (is_bool($param["Pn"])) {
                $this->RequestParams["Pn"] = $param["Pn"] ? "true" : "false";
            } else {
                $this->RequestParams["Pn"] = $param["Pn"];
            }
        }
        if (array_key_exists("ParamUserName", $param) and $param["ParamUserName"] !== null) {
            if (is_bool($param["ParamUserName"])) {
                $this->RequestParams["ParamUserName"] = $param["ParamUserName"] ? "true" : "false";
            } else {
                $this->RequestParams["ParamUserName"] = $param["ParamUserName"];
            }
        }
        if (array_key_exists("ParamAccessKey", $param) and $param["ParamAccessKey"] !== null) {
            if (is_bool($param["ParamAccessKey"])) {
                $this->RequestParams["ParamAccessKey"] = $param["ParamAccessKey"] ? "true" : "false";
            } else {
                $this->RequestParams["ParamAccessKey"] = $param["ParamAccessKey"];
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