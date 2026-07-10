<?php
namespace  Ksyun\Client\Aicp\V20251114\Models;

use Ksyun\Common\BaseModel;

class UpdateMemoryCollectionResponse extends BaseModel
{
         /** 修改的记忆库唯一 ID**/
         public  $MemoryCollectionId;

         /** 记忆库名称（修改接口不支持修改名称，返回原有）**/
         public  $Name;

         /** **/
         public  $LongTermConfiguration;

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
            if (array_key_exists("Name",$param) and $param["Name"] !== null) {
                $this->Name = $param["Name"];
            }
            if (array_key_exists("LongTermConfiguration",$param) and $param["LongTermConfiguration"] !== null) {
                $this->LongTermConfiguration = $param["LongTermConfiguration"];
            }

        }
}