<?php
namespace  Ksyun\Client\Slb\V20160304\Models;

use Ksyun\Common\BaseModel;

class CreateLoadBalancerAclRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "LoadBalancerAclName" => null,
         /**String**/
        "IpVersion" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("LoadBalancerAclName",$param) and $param["LoadBalancerAclName"] !== null) {
            if(is_bool($param["LoadBalancerAclName"])){
                $this->RequestParams["LoadBalancerAclName"] = $param["LoadBalancerAclName"] ? "true" : "false";
            } else {
                $this->RequestParams["LoadBalancerAclName"] = $param["LoadBalancerAclName"];
            }
        }
        if (array_key_exists("IpVersion",$param) and $param["IpVersion"] !== null) {
            if(is_bool($param["IpVersion"])){
                $this->RequestParams["IpVersion"] = $param["IpVersion"] ? "true" : "false";
            } else {
                $this->RequestParams["IpVersion"] = $param["IpVersion"];
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