<?php
namespace  Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;

class DescribeSoInstancesResponse extends BaseModel
{
         /**Object **/
         public  $Instances;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("Instances",$param) and $param["Instances"] !== null) {
                $this->Instances = $param["Instances"];
            }

        }
}