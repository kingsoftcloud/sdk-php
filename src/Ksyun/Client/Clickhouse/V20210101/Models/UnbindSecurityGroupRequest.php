<?php

namespace Ksyun\Client\Clickhouse\V20210101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class UnbindSecurityGroupRequest extends BaseModel
{
    public $RequestParams = [
        /**Int**/
        "ProductType" => null,
        /**String**/
        "SecurityGroupId" => null,
        /**Array**/
        "InstanceIds" => null,
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
        if (array_key_exists("ProductType", $param) and $param["ProductType"] !== null) {
            if (is_bool($param["ProductType"])) {
                $this->RequestParams["ProductType"] = $param["ProductType"] ? "true" : "false";
            } else {
                $this->RequestParams["ProductType"] = $param["ProductType"];
            }
        }
        if (array_key_exists("SecurityGroupId", $param) and $param["SecurityGroupId"] !== null) {
            if (is_bool($param["SecurityGroupId"])) {
                $this->RequestParams["SecurityGroupId"] = $param["SecurityGroupId"] ? "true" : "false";
            } else {
                $this->RequestParams["SecurityGroupId"] = $param["SecurityGroupId"];
            }
        }
        if (array_key_exists("InstanceIds", $param) and $param["InstanceIds"] !== null) {
            if (is_bool($param["InstanceIds"])) {
                $this->RequestParams["InstanceIds"] = $param["InstanceIds"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceIds"] = $param["InstanceIds"];
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