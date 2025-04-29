<?php

namespace Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class SetUserSsoSettingsRequest extends BaseModel
{
    public $RequestParams = [
        /**Int**/
        "Status" => null,
        /**String**/
        "Metadata" => null,
        /**String**/
        "Domain" => null,
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
        if (array_key_exists("Status", $param) and $param["Status"] !== null) {
            if (is_bool($param["Status"])) {
                $this->RequestParams["Status"] = $param["Status"] ? "true" : "false";
            } else {
                $this->RequestParams["Status"] = $param["Status"];
            }
        }
        if (array_key_exists("Metadata", $param) and $param["Metadata"] !== null) {
            if (is_bool($param["Metadata"])) {
                $this->RequestParams["Metadata"] = $param["Metadata"] ? "true" : "false";
            } else {
                $this->RequestParams["Metadata"] = $param["Metadata"];
            }
        }
        if (array_key_exists("Domain", $param) and $param["Domain"] !== null) {
            if (is_bool($param["Domain"])) {
                $this->RequestParams["Domain"] = $param["Domain"] ? "true" : "false";
            } else {
                $this->RequestParams["Domain"] = $param["Domain"];
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