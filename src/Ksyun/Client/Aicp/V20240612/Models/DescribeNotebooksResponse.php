<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;

class DescribeNotebooksResponse extends BaseModel
{
         /** 93fb4fcf-5adc-4284-b7c1-a355b971c3af**/
         public  $RequestId;

         /**Object 开发任务信息列表**/
         public  $Notebooks;

         /** 总数据条数**/
         public  $TotalCount;

         /** 页码**/
         public  $Page;

         /** 单次调用可返回的最大条目数量**/
         public  $PageSize;

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
            if (array_key_exists("Notebooks",$param) and $param["Notebooks"] !== null) {
                $this->Notebooks = $param["Notebooks"];
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

        }
}