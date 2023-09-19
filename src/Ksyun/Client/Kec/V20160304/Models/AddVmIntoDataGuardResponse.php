<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class AddVmIntoDataGuardResponse extends BaseModel
{
         /** **/
         public  $AddVmToDataGuardResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("AddVmToDataGuardResponse",$param) and $param["AddVmToDataGuardResponse"] !== null) {
                $this->AddVmToDataGuardResponse = $param["AddVmToDataGuardResponse"];
            }

        }
}