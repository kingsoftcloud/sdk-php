<?php
namespace  Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;

class StartSoInstanceResponse extends BaseModel
{
         /**Object **/
         public  $OperationDetails;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("OperationDetails",$param) and $param["OperationDetails"] !== null) {
                $this->OperationDetails = $param["OperationDetails"];
            }

        }
}