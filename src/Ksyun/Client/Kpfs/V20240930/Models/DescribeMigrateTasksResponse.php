<?php
namespace  Ksyun\Client\Kpfs\V20240930\Models;

use Ksyun\Common\BaseModel;

class DescribeMigrateTasksResponse extends BaseModel
{
         /**Object 数据迁移任务列表。**/
         public  $Data;

         /** 分页大小。**/
         public  $PageSize;

         /** 页码。**/
         public  $PageNum;

         /** 数据迁移任务总数。**/
         public  $TotalCount;

         /** 唯一请求ID，每次请求都会返回。**/
         public  $RequestId;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("Data",$param) and $param["Data"] !== null) {
                $this->Data = $param["Data"];
            }
            if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
                $this->PageSize = $param["PageSize"];
            }
            if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
                $this->PageNum = $param["PageNum"];
            }
            if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
                $this->TotalCount = $param["TotalCount"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }

        }
}