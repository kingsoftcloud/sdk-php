<?php
namespace  Ksyun\Client\Kcrs\V20211109\Models;

use Ksyun\Common\BaseModel;

class CreateInstanceResponse extends BaseModel
{
         /** **/
         public  $RequestId;

         /** **/
         public  $InstanceId;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }
            if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
                $this->InstanceId = $param["InstanceId"];
            }

        }
}