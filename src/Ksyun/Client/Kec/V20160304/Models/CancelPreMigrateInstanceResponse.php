<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class CancelPreMigrateInstanceResponse extends BaseModel
{
         /** **/
         public  $CancelPreMigrateInstanceResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("CancelPreMigrateInstanceResponse",$param) and $param["CancelPreMigrateInstanceResponse"] !== null) {
                $this->CancelPreMigrateInstanceResponse = $param["CancelPreMigrateInstanceResponse"];
            }

        }
}