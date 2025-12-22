<?php
namespace  Ksyun\Client\Ket\V20170101\Models;

use Ksyun\Common\BaseModel;

class DelPresetResponse extends BaseModel
{
         /** **/
         public  $DelPresetResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("DelPresetResponse",$param) and $param["DelPresetResponse"] !== null) {
                $this->DelPresetResponse = $param["DelPresetResponse"];
            }

        }
}