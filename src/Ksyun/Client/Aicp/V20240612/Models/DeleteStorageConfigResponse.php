<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;

class DeleteStorageConfigResponse extends BaseModel
{
         /** 存储配置ID**/
         public  $StorageConfigId;

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
            if (array_key_exists("StorageConfigId",$param) and $param["StorageConfigId"] !== null) {
                $this->StorageConfigId = $param["StorageConfigId"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }

        }
}