<?php

namespace Ksyun\Client\Postgresql\V20181225\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateSecurityGroupRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "SecurityGroupName" => null,
        /**String**/
        "SecurityGroupDescription" => null,
    ];

    /**特殊参数类型:Filter**/
    public $DBInstanceIdentifier = [];
    /**特殊参数类型:Filter**/
    public $SecurityGroupRule = [];

    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/json");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("SecurityGroupName", $param) and $param["SecurityGroupName"] !== null) {
            if (is_bool($param["SecurityGroupName"])) {
                $this->RequestParams["SecurityGroupName"] = $param["SecurityGroupName"] ? "true" : "false";
            } else {
                $this->RequestParams["SecurityGroupName"] = $param["SecurityGroupName"];
            }
        }
        if (array_key_exists("SecurityGroupDescription", $param) and $param["SecurityGroupDescription"] !== null) {
            if (is_bool($param["SecurityGroupDescription"])) {
                $this->RequestParams["SecurityGroupDescription"] = $param["SecurityGroupDescription"] ? "true" : "false";
            } else {
                $this->RequestParams["SecurityGroupDescription"] = $param["SecurityGroupDescription"];
            }
        }
        if (array_key_exists("DBInstanceIdentifier", $param) and $param["DBInstanceIdentifier"] !== null) {
            $res = $this->formatFilterParams("DBInstanceIdentifier", $param["DBInstanceIdentifier"]);
            $this->_unserialize("DBInstanceIdentifier", $res);
        }
        if (array_key_exists("SecurityGroupRule", $param) and $param["SecurityGroupRule"] !== null) {
            $res = $this->formatFilterParams("SecurityGroupRule", $param["SecurityGroupRule"]);
            $this->_unserialize("SecurityGroupRule", $res);
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