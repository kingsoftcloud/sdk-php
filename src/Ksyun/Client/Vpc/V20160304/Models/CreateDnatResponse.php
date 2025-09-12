<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;

class CreateDnatResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** Dnat规则的信息**/
         public  $Dnat;

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
            if (array_key_exists("Dnat",$param) and $param["Dnat"] !== null) {
                $this->Dnat = $param["Dnat"];
            }

        }
}