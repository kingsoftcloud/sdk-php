<?php

namespace Ksyun\Client\Krds\V20200825\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifySecurityGroupRuleNameRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "SecurityGroupId" => null,
        /**String**/
        "SecurityGroupRuleId" => null,
        /**String**/
        "SecurityGroupRuleName" => null,
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
        if (array_key_exists("SecurityGroupId", $param) and $param["SecurityGroupId"] !== null) {
            if (is_bool($param["SecurityGroupId"])) {
                $this->RequestParams["SecurityGroupId"] = $param["SecurityGroupId"] ? "true" : "false";
            } else {
                $this->RequestParams["SecurityGroupId"] = $param["SecurityGroupId"];
            }
        }
        if (array_key_exists("SecurityGroupRuleId", $param) and $param["SecurityGroupRuleId"] !== null) {
            if (is_bool($param["SecurityGroupRuleId"])) {
                $this->RequestParams["SecurityGroupRuleId"] = $param["SecurityGroupRuleId"] ? "true" : "false";
            } else {
                $this->RequestParams["SecurityGroupRuleId"] = $param["SecurityGroupRuleId"];
            }
        }
        if (array_key_exists("SecurityGroupRuleName", $param) and $param["SecurityGroupRuleName"] !== null) {
            if (is_bool($param["SecurityGroupRuleName"])) {
                $this->RequestParams["SecurityGroupRuleName"] = $param["SecurityGroupRuleName"] ? "true" : "false";
            } else {
                $this->RequestParams["SecurityGroupRuleName"] = $param["SecurityGroupRuleName"];
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