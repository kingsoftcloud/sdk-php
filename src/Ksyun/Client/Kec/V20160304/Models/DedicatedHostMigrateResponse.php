<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DedicatedHostMigrateResponse extends BaseModel
{
         /** **/
         public  $DedicatedHostMigrateResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("DedicatedHostMigrateResponse",$param) and $param["DedicatedHostMigrateResponse"] !== null) {
                $this->DedicatedHostMigrateResponse = $param["DedicatedHostMigrateResponse"];
            }

        }
}