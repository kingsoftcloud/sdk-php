<?php
namespace  Ksyun\Client\Kls\V20170101\Models;

use Ksyun\Common\BaseModel;

class ListStreamDurationsResponse extends BaseModel
{
         /** **/
         public  $ListStreamDurationsResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("ListStreamDurationsResponse",$param) and $param["ListStreamDurationsResponse"] !== null) {
                $this->ListStreamDurationsResponse = $param["ListStreamDurationsResponse"];
            }

        }
}