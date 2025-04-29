<?php

namespace Ksyun\Client\Kkms\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateKeyRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "KeyName" => null,
        /**String**/
        "Description" => null,
        /**String**/
        "KeyUsage" => null,
        /**String**/
        "Origin" => null,
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
        if (array_key_exists("KeyName", $param) and $param["KeyName"] !== null) {
            if (is_bool($param["KeyName"])) {
                $this->RequestParams["KeyName"] = $param["KeyName"] ? "true" : "false";
            } else {
                $this->RequestParams["KeyName"] = $param["KeyName"];
            }
        }
        if (array_key_exists("Description", $param) and $param["Description"] !== null) {
            if (is_bool($param["Description"])) {
                $this->RequestParams["Description"] = $param["Description"] ? "true" : "false";
            } else {
                $this->RequestParams["Description"] = $param["Description"];
            }
        }
        if (array_key_exists("KeyUsage", $param) and $param["KeyUsage"] !== null) {
            if (is_bool($param["KeyUsage"])) {
                $this->RequestParams["KeyUsage"] = $param["KeyUsage"] ? "true" : "false";
            } else {
                $this->RequestParams["KeyUsage"] = $param["KeyUsage"];
            }
        }
        if (array_key_exists("Origin", $param) and $param["Origin"] !== null) {
            if (is_bool($param["Origin"])) {
                $this->RequestParams["Origin"] = $param["Origin"] ? "true" : "false";
            } else {
                $this->RequestParams["Origin"] = $param["Origin"];
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