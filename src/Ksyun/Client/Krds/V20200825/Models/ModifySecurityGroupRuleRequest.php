<?php
namespace  Ksyun\Client\Krds\V20200825\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifySecurityGroupRuleRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "SecurityGroupRuleAction" => null,
         /**String**/
        "SecurityGroupId" => null,
    ];

     /**特殊参数类型:Filter**/
    public $SecurityGroupRule.SecurityGroupRuleId = [];
      /**特殊参数类型:Filter**/
    public $SecurityGroupRule.SecurityGroupRuleName = [];
      /**特殊参数类型:Filter**/
    public $SecurityGroupRule.SecurityGroupRuleCidr = [];
 
    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/json");
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
        if (array_key_exists("SecurityGroupRule.SecurityGroupRuleId",$param) and $param["SecurityGroupRule.SecurityGroupRuleId"] !== null) {
            $res = $this->formatFilterParams("SecurityGroupRule.SecurityGroupRuleId",$param["SecurityGroupRule.SecurityGroupRuleId"]);
            $this->_unserialize("SecurityGroupRule.SecurityGroupRuleId",$res);
        }
        if (array_key_exists("SecurityGroupRule.SecurityGroupRuleName",$param) and $param["SecurityGroupRule.SecurityGroupRuleName"] !== null) {
            $res = $this->formatFilterParams("SecurityGroupRule.SecurityGroupRuleName",$param["SecurityGroupRule.SecurityGroupRuleName"]);
            $this->_unserialize("SecurityGroupRule.SecurityGroupRuleName",$res);
        }
        if (array_key_exists("SecurityGroupRule.SecurityGroupRuleCidr",$param) and $param["SecurityGroupRule.SecurityGroupRuleCidr"] !== null) {
            $res = $this->formatFilterParams("SecurityGroupRule.SecurityGroupRuleCidr",$param["SecurityGroupRule.SecurityGroupRuleCidr"]);
            $this->_unserialize("SecurityGroupRule.SecurityGroupRuleCidr",$res);
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