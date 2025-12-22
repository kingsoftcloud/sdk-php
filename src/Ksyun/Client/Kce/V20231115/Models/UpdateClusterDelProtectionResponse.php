<?php
namespace  Ksyun\Client\Kce\V20231115\Models;

use Ksyun\Common\BaseModel;

class UpdateClusterDelProtectionResponse extends BaseModel
{
         /** 请求Id**/
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