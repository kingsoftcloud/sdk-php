<?php
namespace  Ksyun\Client\Kscc\V1\Models;

use Ksyun\Common\BaseModel;

class DescribeOrganizationTreeResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 组织架构树结果**/
         public  $DescribeOrganizationTreeResult;

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
            if (array_key_exists("DescribeOrganizationTreeResult",$param) and $param["DescribeOrganizationTreeResult"] !== null) {
                $this->DescribeOrganizationTreeResult = $param["DescribeOrganizationTreeResult"];
            }

        }
}