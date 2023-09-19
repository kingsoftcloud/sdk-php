<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class ModifyScalingConfigurationResponse extends BaseModel
{
         /** **/
         public  $ModifyScalingConfigurationResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("ModifyScalingConfigurationResponse",$param) and $param["ModifyScalingConfigurationResponse"] !== null) {
                $this->ModifyScalingConfigurationResponse = $param["ModifyScalingConfigurationResponse"];
            }

        }
}