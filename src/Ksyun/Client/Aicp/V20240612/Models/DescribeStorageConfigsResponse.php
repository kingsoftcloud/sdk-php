<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;

class DescribeStorageConfigsResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 单次调用可返回的最大条目数量**/
         public  $PageSize;

         /** 页码**/
         public  $Page;

         /** 训练任务总数**/
         public  $TotalCount;

         /**Object 存储配置信息**/
         public  $StorageConfigSet;

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
            if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
                $this->PageSize = $param["PageSize"];
            }
            if (array_key_exists("Page",$param) and $param["Page"] !== null) {
                $this->Page = $param["Page"];
            }
            if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
                $this->TotalCount = $param["TotalCount"];
            }
            if (array_key_exists("StorageConfigSet",$param) and $param["StorageConfigSet"] !== null) {
                $this->StorageConfigSet = $param["StorageConfigSet"];
            }

        }
}