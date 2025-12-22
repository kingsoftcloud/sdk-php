<?php
namespace  Ksyun\Client\Krds\V20160701\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifySecurityGroupRuleRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "SecurityGroupRuleAction" => null,
         /**String**/
        "SecurityGroupId" => null,
         /**String**/
        "SecurityGroupRule.SecurityGroupRuleId.N" => null,
         /**String**/
        "SecurityGroupRule.SecurityGroupRuleName.N" => null,
         /**String**/
        "SecurityGroupRule.SecurityGroupRuleCidr.N" => null,
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
        if (array_key_exists("SecurityGroupRuleAction",$param) and $param["SecurityGroupRuleAction"] !== null) {
            if(is_bool($param["SecurityGroupRuleAction"])){
                $this->RequestParams["SecurityGroupRuleAction"] = $param["SecurityGroupRuleAction"] ? "true" : "false";
            } else {
                $this->RequestParams["SecurityGroupRuleAction"] = $param["SecurityGroupRuleAction"];
            }
        }
        if (array_key_exists("SecurityGroupId",$param) and $param["SecurityGroupId"] !== null) {
            if(is_bool($param["SecurityGroupId"])){
                $this->RequestParams["SecurityGroupId"] = $param["SecurityGroupId"] ? "true" : "false";
            } else {
                $this->RequestParams["SecurityGroupId"] = $param["SecurityGroupId"];
            }
        }
        if (array_key_exists("SecurityGroupRule.SecurityGroupRuleId.N",$param) and $param["SecurityGroupRule.SecurityGroupRuleId.N"] !== null) {
            if(is_bool($param["SecurityGroupRule.SecurityGroupRuleId.N"])){
                $this->RequestParams["SecurityGroupRule.SecurityGroupRuleId.N"] = $param["SecurityGroupRule.SecurityGroupRuleId.N"] ? "true" : "false";
            } else {
                $this->RequestParams["SecurityGroupRule.SecurityGroupRuleId.N"] = $param["SecurityGroupRule.SecurityGroupRuleId.N"];
            }
        }
        if (array_key_exists("SecurityGroupRule.SecurityGroupRuleName.N",$param) and $param["SecurityGroupRule.SecurityGroupRuleName.N"] !== null) {
            if(is_bool($param["SecurityGroupRule.SecurityGroupRuleName.N"])){
                $this->RequestParams["SecurityGroupRule.SecurityGroupRuleName.N"] = $param["SecurityGroupRule.SecurityGroupRuleName.N"] ? "true" : "false";
            } else {
                $this->RequestParams["SecurityGroupRule.SecurityGroupRuleName.N"] = $param["SecurityGroupRule.SecurityGroupRuleName.N"];
            }
        }
        if (array_key_exists("SecurityGroupRule.SecurityGroupRuleCidr.N",$param) and $param["SecurityGroupRule.SecurityGroupRuleCidr.N"] !== null) {
            if(is_bool($param["SecurityGroupRule.SecurityGroupRuleCidr.N"])){
                $this->RequestParams["SecurityGroupRule.SecurityGroupRuleCidr.N"] = $param["SecurityGroupRule.SecurityGroupRuleCidr.N"] ? "true" : "false";
            } else {
                $this->RequestParams["SecurityGroupRule.SecurityGroupRuleCidr.N"] = $param["SecurityGroupRule.SecurityGroupRuleCidr.N"];
            }
        }

    }

    private function _unserialize($name,$params)
    {
        if ($params === null) {
            return;
        }
        foreach ($params as $key => $value){
            $this->$name[$key] = $value;
        }

    }
}