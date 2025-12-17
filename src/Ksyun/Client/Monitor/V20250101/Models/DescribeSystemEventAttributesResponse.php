<?php
namespace  Ksyun\Client\Monitor\V20250101\Models;

use Ksyun\Common\BaseModel;

class DescribeSystemEventAttributesResponse extends BaseModel
{
         /** 请求ID。**/
         public  $RequestID;

         /**Object 事件内容详情集合。**/
         public  $SystemEvents;

         /** 事件总数。**/
         public  $TotalCount;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("RequestID",$param) and $param["RequestID"] !== null) {
                $this->RequestID = $param["RequestID"];
            }
            if (array_key_exists("SystemEvents",$param) and $param["SystemEvents"] !== null) {
                $this->SystemEvents = $param["SystemEvents"];
            }
            if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
                $this->TotalCount = $param["TotalCount"];
            }

        }
}