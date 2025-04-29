<?php

namespace Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeVpnsRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "DynamicCode" => null,
        /**String**/
        "Pin" => null,
        /**String**/
        "RemoteManagementId" => null,
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
        if (array_key_exists("RemoteManagementId", $param) and $param["RemoteManagementId"] !== null) {
            if (is_bool($param["RemoteManagementId"])) {
                $this->RequestParams["RemoteManagementId"] = $param["RemoteManagementId"] ? "true" : "false";
            } else {
                $this->RequestParams["RemoteManagementId"] = $param["RemoteManagementId"];
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