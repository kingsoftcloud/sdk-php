<?php
namespace  Ksyun\Client\Slb\V20250430\Models;

use Ksyun\Common\BaseModel;

class CreateLoadBalancerResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /**Object 负载均衡的信息**/
         public  $LoadBalancer;

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
            if (array_key_exists("LoadBalancer",$param) and $param["LoadBalancer"] !== null) {
                $this->LoadBalancer = $param["LoadBalancer"];
            }

        }
}