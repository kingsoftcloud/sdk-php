<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeNatsResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 获取另一页返回结果的 token.**/
         public  $NextToken;

         /**Object Nat的信息**/
         public  $NatSet;

         /** Nat版本**/
         public  $NatVersion;

         /** Nat线路ID**/
         public  $NatLineId;

         /** Nat的数量**/
         public  $TotalCount;

         /**Object 绑定的EIP
> Nat2.0参数**/
         public  $FloatingIpSet;

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
            if (array_key_exists("NatSet",$param) and $param["NatSet"] !== null) {
                $this->NatSet = $param["NatSet"];
            }
            if (array_key_exists("NatVersion",$param) and $param["NatVersion"] !== null) {
                $this->NatVersion = $param["NatVersion"];
            }
            if (array_key_exists("NatLineId",$param) and $param["NatLineId"] !== null) {
                $this->NatLineId = $param["NatLineId"];
            }
            if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
                $this->TotalCount = $param["TotalCount"];
            }
            if (array_key_exists("FloatingIpSet",$param) and $param["FloatingIpSet"] !== null) {
                $this->FloatingIpSet = $param["FloatingIpSet"];
            }

        }
}