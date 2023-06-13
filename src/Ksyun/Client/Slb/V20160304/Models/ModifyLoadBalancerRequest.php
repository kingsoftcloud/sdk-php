<?php
namespace  Ksyun\Client\Slb\V20160304\Models;

use Ksyun\Common\BaseModel;

class ModifyLoadBalancerRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "LoadBalancerId" => null,
         /**String**/
        "LoadBalancerName" => null,
         /**String**/
        "LoadBalancerState" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            if(is_bool($param["LoadBalancerId"])){
                $this->RequestParams["LoadBalancerId"] = $param["LoadBalancerId"] ? "true" : "false";
            } else {
                $this->RequestParams["LoadBalancerId"] = $param["LoadBalancerId"];
            }
        }
        if (array_key_exists("LoadBalancerName",$param) and $param["LoadBalancerName"] !== null) {
            if(is_bool($param["LoadBalancerName"])){
                $this->RequestParams["LoadBalancerName"] = $param["LoadBalancerName"] ? "true" : "false";
            } else {
                $this->RequestParams["LoadBalancerName"] = $param["LoadBalancerName"];
            }
        }
        if (array_key_exists("LoadBalancerState",$param) and $param["LoadBalancerState"] !== null) {
            if(is_bool($param["LoadBalancerState"])){
                $this->RequestParams["LoadBalancerState"] = $param["LoadBalancerState"] ? "true" : "false";
            } else {
                $this->RequestParams["LoadBalancerState"] = $param["LoadBalancerState"];
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