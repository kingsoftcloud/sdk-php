<?php
namespace  Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;

class DescribeSoAvailableResourceResponse extends BaseModel
{
         /**Object **/
         public  $AvailableZones;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("AvailableZones",$param) and $param["AvailableZones"] !== null) {
                $this->AvailableZones = $param["AvailableZones"];
            }

        }
}