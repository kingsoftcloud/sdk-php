<?php
namespace  Ksyun\Client\Cdn\V20200630\Models;

use Ksyun\Common\BaseModel;

class GetEntryRateDataResponse extends BaseModel
{
         /** **/
         public  $EcnEntryRateDataResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("EcnEntryRateDataResponse",$param) and $param["EcnEntryRateDataResponse"] !== null) {
                $this->EcnEntryRateDataResponse = $param["EcnEntryRateDataResponse"];
            }

        }
}