<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;

class DescribeTrainJobResponse extends BaseModel
{
         /** 请求id**/
         public  $RequestId;

         /** 总任务数**/
         public  $TotalCount;

         /** 分页参数，从1开始**/
         public  $Marker;

         /** 本页返回任务数量**/
         public  $MaxResults;

         /**Object **/
         public  $TrainJobSet;

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
            if (array_key_exists("Marker",$param) and $param["Marker"] !== null) {
                $this->Marker = $param["Marker"];
            }
            if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
                $this->MaxResults = $param["MaxResults"];
            }
            if (array_key_exists("TrainJobSet",$param) and $param["TrainJobSet"] !== null) {
                $this->TrainJobSet = $param["TrainJobSet"];
            }

        }
}