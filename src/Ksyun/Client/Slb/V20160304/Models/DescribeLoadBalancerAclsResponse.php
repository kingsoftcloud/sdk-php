<?php
namespace  Ksyun\Client\Slb\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeLoadBalancerAclsResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /**Object LoadBalancerAcl的信息**/
         public  $LoadBalancerAclSet;

         /** 获取另一页返回结果的 token.**/
         public  $NextToken;

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
            if (array_key_exists("LoadBalancerAclSet",$param) and $param["LoadBalancerAclSet"] !== null) {
                $this->LoadBalancerAclSet = $param["LoadBalancerAclSet"];
            }
            if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
                $this->NextToken = $param["NextToken"];
            }

        }
}