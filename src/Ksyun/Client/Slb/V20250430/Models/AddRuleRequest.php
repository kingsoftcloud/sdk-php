<?php
namespace  Ksyun\Client\Slb\V20250430\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class AddRuleRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "RuleGroupId" => null,
         /**String**/
        "RuleType" => null,
         /**String**/
        "RuleValue" => null,
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
        if (array_key_exists("RuleGroupId",$param) and $param["RuleGroupId"] !== null) {
            if(is_bool($param["RuleGroupId"])){
                $this->RequestParams["RuleGroupId"] = $param["RuleGroupId"] ? "true" : "false";
            } else {
                $this->RequestParams["RuleGroupId"] = $param["RuleGroupId"];
            }
        }
        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            if(is_bool($param["RuleType"])){
                $this->RequestParams["RuleType"] = $param["RuleType"] ? "true" : "false";
            } else {
                $this->RequestParams["RuleType"] = $param["RuleType"];
            }
        }
        if (array_key_exists("RuleValue",$param) and $param["RuleValue"] !== null) {
            if(is_bool($param["RuleValue"])){
                $this->RequestParams["RuleValue"] = $param["RuleValue"] ? "true" : "false";
            } else {
                $this->RequestParams["RuleValue"] = $param["RuleValue"];
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