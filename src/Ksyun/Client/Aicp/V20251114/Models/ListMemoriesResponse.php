<?php
namespace  Ksyun\Client\Aicp\V20251114\Models;

use Ksyun\Common\BaseModel;

class ListMemoriesResponse extends BaseModel
{
         /** 请求唯一标识**/
         public  $RequestId;

         /** 查询到的数据总条数**/
         public  $Total;

         /**Object 记忆列表**/
         public  $MemoryList;

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
            if (array_key_exists("Total",$param) and $param["Total"] !== null) {
                $this->Total = $param["Total"];
            }
            if (array_key_exists("MemoryList",$param) and $param["MemoryList"] !== null) {
                $this->MemoryList = $param["MemoryList"];
            }

        }
}