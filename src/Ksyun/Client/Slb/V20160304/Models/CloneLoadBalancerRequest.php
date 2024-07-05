<?php
namespace  Ksyun\Client\Slb\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CloneLoadBalancerRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "cloneLoadBalancerId" => null,
         /**String**/
        "LoadBalancerName" => null,
         /**String**/
        "Type" => null,
         /**String**/
        "SubnetId" => null,
         /**String**/
        "PrivateIpAddress" => null,
         /**String**/
        "IpVersion" => null,
         /**String**/
        "LbType" => null,
         /**String**/
        "ProjectId" => null,
    ];

     /**特殊参数类型:Filter**/
    public $TagId = [];
 
    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("cloneLoadBalancerId",$param) and $param["cloneLoadBalancerId"] !== null) {
            if(is_bool($param["cloneLoadBalancerId"])){
                $this->RequestParams["cloneLoadBalancerId"] = $param["cloneLoadBalancerId"] ? "true" : "false";
            } else {
                $this->RequestParams["cloneLoadBalancerId"] = $param["cloneLoadBalancerId"];
            }
        }
        if (array_key_exists("LoadBalancerName",$param) and $param["LoadBalancerName"] !== null) {
            if(is_bool($param["LoadBalancerName"])){
                $this->RequestParams["LoadBalancerName"] = $param["LoadBalancerName"] ? "true" : "false";
            } else {
                $this->RequestParams["LoadBalancerName"] = $param["LoadBalancerName"];
            }
        }
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            if(is_bool($param["Type"])){
                $this->RequestParams["Type"] = $param["Type"] ? "true" : "false";
            } else {
                $this->RequestParams["Type"] = $param["Type"];
            }
        }
        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            if(is_bool($param["SubnetId"])){
                $this->RequestParams["SubnetId"] = $param["SubnetId"] ? "true" : "false";
            } else {
                $this->RequestParams["SubnetId"] = $param["SubnetId"];
            }
        }
        if (array_key_exists("PrivateIpAddress",$param) and $param["PrivateIpAddress"] !== null) {
            if(is_bool($param["PrivateIpAddress"])){
                $this->RequestParams["PrivateIpAddress"] = $param["PrivateIpAddress"] ? "true" : "false";
            } else {
                $this->RequestParams["PrivateIpAddress"] = $param["PrivateIpAddress"];
            }
        }
        if (array_key_exists("IpVersion",$param) and $param["IpVersion"] !== null) {
            if(is_bool($param["IpVersion"])){
                $this->RequestParams["IpVersion"] = $param["IpVersion"] ? "true" : "false";
            } else {
                $this->RequestParams["IpVersion"] = $param["IpVersion"];
            }
        }
        if (array_key_exists("LbType",$param) and $param["LbType"] !== null) {
            if(is_bool($param["LbType"])){
                $this->RequestParams["LbType"] = $param["LbType"] ? "true" : "false";
            } else {
                $this->RequestParams["LbType"] = $param["LbType"];
            }
        }
        if (array_key_exists("TagId",$param) and $param["TagId"] !== null) {
            $res = $this->formatFilterParams("TagId",$param["TagId"]);
            $this->_unserialize("TagId",$res);
        }
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            if(is_bool($param["ProjectId"])){
                $this->RequestParams["ProjectId"] = $param["ProjectId"] ? "true" : "false";
            } else {
                $this->RequestParams["ProjectId"] = $param["ProjectId"];
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