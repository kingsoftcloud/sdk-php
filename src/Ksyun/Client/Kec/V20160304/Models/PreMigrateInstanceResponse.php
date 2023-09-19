<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class PreMigrateInstanceResponse extends BaseModel
{
         /** **/
         public  $PreMigrateInstanceResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("PreMigrateInstanceResponse",$param) and $param["PreMigrateInstanceResponse"] !== null) {
                $this->PreMigrateInstanceResponse = $param["PreMigrateInstanceResponse"];
            }

        }
}