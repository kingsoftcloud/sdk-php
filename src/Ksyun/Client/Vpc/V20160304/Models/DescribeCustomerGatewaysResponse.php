<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeCustomerGatewaysResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 获取另一页返回结果的 token.**/
         public  $NextToken;

         /**Object 客户网关的信息**/
         public  $CustomerGatewaySet;

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
            if (array_key_exists("CustomerGatewaySet",$param) and $param["CustomerGatewaySet"] !== null) {
                $this->CustomerGatewaySet = $param["CustomerGatewaySet"];
            }

        }
}