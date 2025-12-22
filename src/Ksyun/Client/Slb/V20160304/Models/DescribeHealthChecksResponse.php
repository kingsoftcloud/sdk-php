<?php
namespace  Ksyun\Client\Slb\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeHealthChecksResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /**Object 健康检查的信息**/
         public  $HealthCheckSet;

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
            if (array_key_exists("HealthCheckSet",$param) and $param["HealthCheckSet"] !== null) {
                $this->HealthCheckSet = $param["HealthCheckSet"];
            }
            if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
                $this->NextToken = $param["NextToken"];
            }

        }
}