<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;

class DescribeTerminatePolicyResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /**Object 关停策略列表**/
         public  $TerminatePolices;

         /** 查询最大数**/
         public  $PageSize;

         /** 策略总数**/
         public  $TotalCount;

         /** 页数**/
         public  $Page;

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
            if (array_key_exists("TerminatePolices",$param) and $param["TerminatePolices"] !== null) {
                $this->TerminatePolices = $param["TerminatePolices"];
            }
            if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
                $this->PageSize = $param["PageSize"];
            }
            if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
                $this->TotalCount = $param["TotalCount"];
            }
            if (array_key_exists("Page",$param) and $param["Page"] !== null) {
                $this->Page = $param["Page"];
            }

        }
}