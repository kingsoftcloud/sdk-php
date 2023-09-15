<?php
namespace  Ksyun\Client\Slb\V20160304\Models;

use Ksyun\Common\BaseModel;

class ModifyLoadBalancerAclResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /**Object LoadBalancerAcl信息**/
         public  $LoadBalancerAcl;

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
            if (array_key_exists("LoadBalancerAcl",$param) and $param["LoadBalancerAcl"] !== null) {
                $this->LoadBalancerAcl = $param["LoadBalancerAcl"];
            }

        }
}