<?php
namespace  Ksyun\Client\Aicp\V20251114\Models;

use Ksyun\Common\BaseModel;

class CreateMemoryCollectionResponse extends BaseModel
{
         /** 创建后生成的记忆库唯一 ID**/
         public  $MemoryCollectionId;

         /** 记忆库状态；可选值：CreateFailed（创建失败）、Ready（可用）**/
         public  $Status;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("MemoryCollectionId",$param) and $param["MemoryCollectionId"] !== null) {
                $this->MemoryCollectionId = $param["MemoryCollectionId"];
            }
            if (array_key_exists("Status",$param) and $param["Status"] !== null) {
                $this->Status = $param["Status"];
            }

        }
}