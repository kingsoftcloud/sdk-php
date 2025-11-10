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
         public  $Marker;

         /** 页大小**/
         public  $MaxResults;

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
            if (array_key_exists("Marker",$param) and $param["Marker"] !== null) {
                $this->Marker = $param["Marker"];
            }
            if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
                $this->MaxResults = $param["MaxResults"];
            }

        }
}