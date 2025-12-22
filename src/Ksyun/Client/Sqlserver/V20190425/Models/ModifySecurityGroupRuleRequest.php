<?php
namespace  Ksyun\Client\Sqlserver\V20190425\Models;

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
        if (array_key_exists("SecurityGroupRule",$param) and $param["SecurityGroupRule"] !== null) {
            $res = $this->formatFilterParams("SecurityGroupRule",$param["SecurityGroupRule"]);
            $this->_unserialize("SecurityGroupRule",$res);
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