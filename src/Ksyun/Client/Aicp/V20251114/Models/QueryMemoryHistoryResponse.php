<?php
namespace  Ksyun\Client\Aicp\V20251114\Models;

use Ksyun\Common\BaseModel;

class QueryMemoryHistoryResponse extends BaseModel
{
         /** 请求唯一标识**/
         public  $RequestId;

         /** 记忆ID**/
         public  $MemoryId;

         /**Object 操作历史记录**/
         public  $HistoryList;

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
            if (array_key_exists("MemoryId",$param) and $param["MemoryId"] !== null) {
                $this->MemoryId = $param["MemoryId"];
            }
            if (array_key_exists("HistoryList",$param) and $param["HistoryList"] !== null) {
                $this->HistoryList = $param["HistoryList"];
            }

        }
}