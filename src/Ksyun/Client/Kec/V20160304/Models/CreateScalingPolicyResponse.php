<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class CreateScalingPolicyResponse extends BaseModel
{
         /** **/
         public  $CreateScalingPolicyResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("CreateScalingPolicyResponse",$param) and $param["CreateScalingPolicyResponse"] !== null) {
                $this->CreateScalingPolicyResponse = $param["CreateScalingPolicyResponse"];
            }

        }
}