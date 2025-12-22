<?php
namespace  Ksyun\Client\Waf\V20200707\Models;

use Ksyun\Common\BaseModel;

class ModifyStorageTimeResponse extends BaseModel
{
         /** **/
         public  $StorageTime;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("StorageTime",$param) and $param["StorageTime"] !== null) {
                $this->StorageTime = $param["StorageTime"];
            }

        }
}