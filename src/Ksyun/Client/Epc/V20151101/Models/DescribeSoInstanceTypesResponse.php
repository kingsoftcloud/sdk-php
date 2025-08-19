<?php
namespace  Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;

class DescribeSoInstanceTypesResponse extends BaseModel
{
         /**Object **/
         public  $InstanceTypes;

         /** bHpwdXJja2RxemU1eG5sb3NzdGcW1-RCEq********/
         public  $NextToken;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("InstanceTypes",$param) and $param["InstanceTypes"] !== null) {
                $this->InstanceTypes = $param["InstanceTypes"];
            }
            if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
                $this->NextToken = $param["NextToken"];
            }

        }
}