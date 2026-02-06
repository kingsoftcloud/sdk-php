<?php
namespace  Ksyun\Client\Kcf\V20211215\Models;

use Ksyun\Common\BaseModel;

class CreateOrModifyAutoScalingConfigResponse extends BaseModel
{
         /** **/
         public  $RequestId;

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

        }
}