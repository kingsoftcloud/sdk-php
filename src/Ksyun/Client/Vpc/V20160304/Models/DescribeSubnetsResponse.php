<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeSubnetsResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 获取另一页返回结果的 token.**/
         public  $NextToken;

         /**Object 子网的信息**/
         public  $SubnetSet;

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
            if (array_key_exists("SubnetSet",$param) and $param["SubnetSet"] !== null) {
                $this->SubnetSet = $param["SubnetSet"];
            }

        }
}