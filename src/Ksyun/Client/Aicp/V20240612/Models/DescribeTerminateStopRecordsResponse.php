<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;

class DescribeTerminateStopRecordsResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 记录总数**/
         public  $TotalCount;

         /** 页码**/
         public  $Page;

         /** 单次调用可返回的最大条目数量**/
         public  $PageSize;

         /**Object 关停执行记录列表**/
         public  $Records;

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
            if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
                $this->TotalCount = $param["TotalCount"];
            }
            if (array_key_exists("Page",$param) and $param["Page"] !== null) {
                $this->Page = $param["Page"];
            }
            if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
                $this->PageSize = $param["PageSize"];
            }
            if (array_key_exists("Records",$param) and $param["Records"] !== null) {
                $this->Records = $param["Records"];
            }

        }
}