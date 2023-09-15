<?php
namespace  Ksyun\Client\Slb\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyLoadBalancerAclEntryRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "LoadBalancerAclEntryId" => null,
         /**Int**/
        "RuleNumber" => null,
         /**String**/
        "RuleAction" => null,
         /**String**/
        "Description" => null,
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
        if (array_key_exists("LoadBalancerAclEntryId",$param) and $param["LoadBalancerAclEntryId"] !== null) {
            if(is_bool($param["LoadBalancerAclEntryId"])){
                $this->RequestParams["LoadBalancerAclEntryId"] = $param["LoadBalancerAclEntryId"] ? "true" : "false";
            } else {
                $this->RequestParams["LoadBalancerAclEntryId"] = $param["LoadBalancerAclEntryId"];
            }
        }
        if (array_key_exists("RuleNumber",$param) and $param["RuleNumber"] !== null) {
            if(is_bool($param["RuleNumber"])){
                $this->RequestParams["RuleNumber"] = $param["RuleNumber"] ? "true" : "false";
            } else {
                $this->RequestParams["RuleNumber"] = $param["RuleNumber"];
            }
        }
        if (array_key_exists("RuleAction",$param) and $param["RuleAction"] !== null) {
            if(is_bool($param["RuleAction"])){
                $this->RequestParams["RuleAction"] = $param["RuleAction"] ? "true" : "false";
            } else {
                $this->RequestParams["RuleAction"] = $param["RuleAction"];
            }
        }
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            if(is_bool($param["Description"])){
                $this->RequestParams["Description"] = $param["Description"] ? "true" : "false";
            } else {
                $this->RequestParams["Description"] = $param["Description"];
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