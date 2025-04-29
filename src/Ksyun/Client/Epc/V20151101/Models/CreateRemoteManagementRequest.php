<?php

namespace Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateRemoteManagementRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "DynamicCode" => null,
        /**String**/
        "Pin" => null,
        /**String**/
        "PhoneNumber" => null,
        /**String**/
        "Name" => null,
        /**Int**/
        "VersionId" => null,
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
        if (array_key_exists("DynamicCode", $param) and $param["DynamicCode"] !== null) {
            if (is_bool($param["DynamicCode"])) {
                $this->RequestParams["DynamicCode"] = $param["DynamicCode"] ? "true" : "false";
            } else {
                $this->RequestParams["DynamicCode"] = $param["DynamicCode"];
            }
        }
        if (array_key_exists("Pin", $param) and $param["Pin"] !== null) {
            if (is_bool($param["Pin"])) {
                $this->RequestParams["Pin"] = $param["Pin"] ? "true" : "false";
            } else {
                $this->RequestParams["Pin"] = $param["Pin"];
            }
        }
        if (array_key_exists("PhoneNumber", $param) and $param["PhoneNumber"] !== null) {
            if (is_bool($param["PhoneNumber"])) {
                $this->RequestParams["PhoneNumber"] = $param["PhoneNumber"] ? "true" : "false";
            } else {
                $this->RequestParams["PhoneNumber"] = $param["PhoneNumber"];
            }
        }
        if (array_key_exists("Name", $param) and $param["Name"] !== null) {
            if (is_bool($param["Name"])) {
                $this->RequestParams["Name"] = $param["Name"] ? "true" : "false";
            } else {
                $this->RequestParams["Name"] = $param["Name"];
            }
        }
        if (array_key_exists("VersionId", $param) and $param["VersionId"] !== null) {
            if (is_bool($param["VersionId"])) {
                $this->RequestParams["VersionId"] = $param["VersionId"] ? "true" : "false";
            } else {
                $this->RequestParams["VersionId"] = $param["VersionId"];
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