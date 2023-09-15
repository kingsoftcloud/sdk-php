<?php
namespace  Ksyun\Client\Slb\V20160304\Models;

use Ksyun\Common\BaseModel;

class ModifyLoadBalancerResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 负载均衡的ID**/
         public  $LoadBalancerId;

         /** 负载均衡的名称**/
         public  $LoadBalancerName;

         /** 负载均衡的类型**/
         public  $Type;

         /** 创建时间**/
         public  $CreateTime;

         /** Vpc的ID**/
         public  $VpcId;

         /** IP地址**/
         public  $PublicIp;

         /** 负载均衡支持的IP版本**/
         public  $IpVersion;

         /** 负载均衡类型**/
         public  $LbType;

         /** 负载均衡开启状态**/
         public  $LoadBalancerState;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }
            if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
                $this->LoadBalancerId = $param["LoadBalancerId"];
            }
            if (array_key_exists("LoadBalancerName",$param) and $param["LoadBalancerName"] !== null) {
                $this->LoadBalancerName = $param["LoadBalancerName"];
            }
            if (array_key_exists("Type",$param) and $param["Type"] !== null) {
                $this->Type = $param["Type"];
            }
            if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
                $this->CreateTime = $param["CreateTime"];
            }
            if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
                $this->VpcId = $param["VpcId"];
            }
            if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
                $this->PublicIp = $param["PublicIp"];
            }
            if (array_key_exists("IpVersion",$param) and $param["IpVersion"] !== null) {
                $this->IpVersion = $param["IpVersion"];
            }
            if (array_key_exists("LbType",$param) and $param["LbType"] !== null) {
                $this->LbType = $param["LbType"];
            }
            if (array_key_exists("LoadBalancerState",$param) and $param["LoadBalancerState"] !== null) {
                $this->LoadBalancerState = $param["LoadBalancerState"];
            }

        }
}