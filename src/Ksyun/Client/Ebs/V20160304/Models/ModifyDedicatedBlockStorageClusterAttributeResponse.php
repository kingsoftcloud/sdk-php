<?php
namespace  Ksyun\Client\Ebs\V20160304\Models;

use Ksyun\Common\BaseModel;

class ModifyDedicatedBlockStorageClusterAttributeResponse extends BaseModel
{
         /** **/
         public  $RequestId;

         /** **/
         public  $DbscId;

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
            if (array_key_exists("DbscId",$param) and $param["DbscId"] !== null) {
                $this->DbscId = $param["DbscId"];
            }

        }
}