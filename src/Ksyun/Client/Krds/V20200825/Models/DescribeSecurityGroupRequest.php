<?php

namespace Ksyun\Client\Krds\V20200825\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeSecurityGroupRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "SecurityGroupId.N" => null,
        /**String**/
        "SecurityGroupType" => null,
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
        if (array_key_exists("SecurityGroupId.N", $param) and $param["SecurityGroupId.N"] !== null) {
            if (is_bool($param["SecurityGroupId.N"])) {
                $this->RequestParams["SecurityGroupId.N"] = $param["SecurityGroupId.N"] ? "true" : "false";
            } else {
                $this->RequestParams["SecurityGroupId.N"] = $param["SecurityGroupId.N"];
            }
        }
        if (array_key_exists("SecurityGroupType", $param) and $param["SecurityGroupType"] !== null) {
            if (is_bool($param["SecurityGroupType"])) {
                $this->RequestParams["SecurityGroupType"] = $param["SecurityGroupType"] ? "true" : "false";
            } else {
                $this->RequestParams["SecurityGroupType"] = $param["SecurityGroupType"];
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