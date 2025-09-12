<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeIpv6PublicIpAddressesResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 获取另一页返回结果的 token.**/
         public  $NextToken;

         /**Object IPV6公网的信息**/
         public  $Ipv6PublicIpAddressSet;

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
            if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
                $this->NextToken = $param["NextToken"];
            }
            if (array_key_exists("Ipv6PublicIpAddressSet",$param) and $param["Ipv6PublicIpAddressSet"] !== null) {
                $this->Ipv6PublicIpAddressSet = $param["Ipv6PublicIpAddressSet"];
            }

        }
}