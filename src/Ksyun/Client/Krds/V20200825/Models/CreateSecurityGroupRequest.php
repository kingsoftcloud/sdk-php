<?php
namespace  Ksyun\Client\Krds\V20200825\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateSecurityGroupRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "SecurityGroupName" => null,
         /**String**/
        "SecurityGroupDescription" => null,
         /**String**/
        "SecurityGroupType" => null,
         /**String**/
        "SecurityGroupRule.SecurityGroupRuleName.N" => null,
         /**String**/
        "SecurityGroupRule.SecurityGroupRuleCidr.N" => null,
    ];

     /**特殊参数类型:Filter**/
    public $DBInstanceIdentifier = [];
 
    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/json");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("SecurityGroupName",$param) and $param["SecurityGroupName"] !== null) {
            if(is_bool($param["SecurityGroupName"])){
                $this->RequestParams["SecurityGroupName"] = $param["SecurityGroupName"] ? "true" : "false";
            } else {
                $this->RequestParams["SecurityGroupName"] = $param["SecurityGroupName"];
            }
        }
        if (array_key_exists("SecurityGroupDescription",$param) and $param["SecurityGroupDescription"] !== null) {
            if(is_bool($param["SecurityGroupDescription"])){
                $this->RequestParams["SecurityGroupDescription"] = $param["SecurityGroupDescription"] ? "true" : "false";
            } else {
                $this->RequestParams["SecurityGroupDescription"] = $param["SecurityGroupDescription"];
            }
        }
        if (array_key_exists("SecurityGroupType",$param) and $param["SecurityGroupType"] !== null) {
            if(is_bool($param["SecurityGroupType"])){
                $this->RequestParams["SecurityGroupType"] = $param["SecurityGroupType"] ? "true" : "false";
            } else {
                $this->RequestParams["SecurityGroupType"] = $param["SecurityGroupType"];
            }
        }
        if (array_key_exists("DBInstanceIdentifier",$param) and $param["DBInstanceIdentifier"] !== null) {
            $res = $this->formatFilterParams("DBInstanceIdentifier",$param["DBInstanceIdentifier"]);
            $this->_unserialize("DBInstanceIdentifier",$res);
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