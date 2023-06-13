<?php
namespace  Ksyun\Client\Slb\V20171210\Models;

use Ksyun\Common\BaseModel;

class DescribeLoadBalancersResponse extends BaseModel
{
         /** 
- 请求ID
- 类型: String
 
**/
         public  $RequestId;

         /** 
- 负载均衡信息的列表
- 类型: [LoadBalancerDescription](https://docs.ksyun.com/documents/1181) list

**/
         public  $LoadBalancerDescriptions;

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
            if (array_key_exists("LoadBalancerDescriptions",$param) and $param["LoadBalancerDescriptions"] !== null) {
                $this->LoadBalancerDescriptions = $param["LoadBalancerDescriptions"];
            }

        }
}