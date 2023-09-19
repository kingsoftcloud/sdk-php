<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DeleteScalingPolicyResponse extends BaseModel
{
         /** **/
         public  $DeleteScalingPolicyResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("DeleteScalingPolicyResponse",$param) and $param["DeleteScalingPolicyResponse"] !== null) {
                $this->DeleteScalingPolicyResponse = $param["DeleteScalingPolicyResponse"];
            }

        }
}