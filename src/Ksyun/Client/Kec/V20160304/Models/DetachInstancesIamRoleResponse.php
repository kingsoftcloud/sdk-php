<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DetachInstancesIamRoleResponse extends BaseModel
{
         /** **/
         public  $InstanceIamRoleResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("InstanceIamRoleResponse",$param) and $param["InstanceIamRoleResponse"] !== null) {
                $this->InstanceIamRoleResponse = $param["InstanceIamRoleResponse"];
            }

        }
}