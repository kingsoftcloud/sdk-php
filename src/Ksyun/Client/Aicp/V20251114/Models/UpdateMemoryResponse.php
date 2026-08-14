<?php
namespace  Ksyun\Client\Aicp\V20251114\Models;

use Ksyun\Common\BaseModel;

class UpdateMemoryResponse extends BaseModel
{
         /** 请求唯一标识**/
         public  $RequestId;

         /** 记忆库ID**/
         public  $MemoryCollectionId;

         /** 记忆ID**/
         public  $MemoryId;

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
            if (array_key_exists("MemoryCollectionId",$param) and $param["MemoryCollectionId"] !== null) {
                $this->MemoryCollectionId = $param["MemoryCollectionId"];
            }
            if (array_key_exists("MemoryId",$param) and $param["MemoryId"] !== null) {
                $this->MemoryId = $param["MemoryId"];
            }

        }
}