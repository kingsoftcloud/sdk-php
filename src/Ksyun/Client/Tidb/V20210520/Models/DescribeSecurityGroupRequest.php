<?php
namespace  Ksyun\Client\Tidb\V20210520\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeSecurityGroupRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "SecurityGroupId" => null,
         /**String**/
        "RuleFuzzySearch" => null,
         /**String**/
        "InstanceFuzzySearch" => null,
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
        if (array_key_exists("SecurityGroupId",$param) and $param["SecurityGroupId"] !== null) {
            if(is_bool($param["SecurityGroupId"])){
                $this->RequestParams["SecurityGroupId"] = $param["SecurityGroupId"] ? "true" : "false";
            } else {
                $this->RequestParams["SecurityGroupId"] = $param["SecurityGroupId"];
            }
        }
        if (array_key_exists("RuleFuzzySearch",$param) and $param["RuleFuzzySearch"] !== null) {
            if(is_bool($param["RuleFuzzySearch"])){
                $this->RequestParams["RuleFuzzySearch"] = $param["RuleFuzzySearch"] ? "true" : "false";
            } else {
                $this->RequestParams["RuleFuzzySearch"] = $param["RuleFuzzySearch"];
            }
        }
        if (array_key_exists("InstanceFuzzySearch",$param) and $param["InstanceFuzzySearch"] !== null) {
            if(is_bool($param["InstanceFuzzySearch"])){
                $this->RequestParams["InstanceFuzzySearch"] = $param["InstanceFuzzySearch"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceFuzzySearch"] = $param["InstanceFuzzySearch"];
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