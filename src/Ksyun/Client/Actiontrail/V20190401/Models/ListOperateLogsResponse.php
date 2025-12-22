<?php
namespace  Ksyun\Client\Actiontrail\V20190401\Models;

use Ksyun\Common\BaseModel;

class ListOperateLogsResponse extends BaseModel
{
         /** 返回的总事件数量**/
         public  $Total;

         /**Object 事件列表**/
         public  $Events;

         /** 记录查询结果列表最后一条数据的游标**/
         public  $SearchAfter;

         /** 请求ID**/
         public  $RequestId;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("Total",$param) and $param["Total"] !== null) {
                $this->Total = $param["Total"];
            }
            if (array_key_exists("Events",$param) and $param["Events"] !== null) {
                $this->Events = $param["Events"];
            }
            if (array_key_exists("SearchAfter",$param) and $param["SearchAfter"] !== null) {
                $this->SearchAfter = $param["SearchAfter"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }

        }
}