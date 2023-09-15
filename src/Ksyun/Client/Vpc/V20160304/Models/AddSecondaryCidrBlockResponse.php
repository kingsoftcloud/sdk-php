<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;

class AddSecondaryCidrBlockResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /**Object Vpc信息**/
         public  $Vpc;

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
            if (array_key_exists("Vpc",$param) and $param["Vpc"] !== null) {
                $this->Vpc = $param["Vpc"];
            }

        }
}