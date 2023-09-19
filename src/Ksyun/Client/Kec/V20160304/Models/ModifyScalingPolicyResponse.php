<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class ModifyScalingPolicyResponse extends BaseModel
{
         /** **/
         public  $ModifyScalingPolicyResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("ModifyScalingPolicyResponse",$param) and $param["ModifyScalingPolicyResponse"] !== null) {
                $this->ModifyScalingPolicyResponse = $param["ModifyScalingPolicyResponse"];
            }

        }
}