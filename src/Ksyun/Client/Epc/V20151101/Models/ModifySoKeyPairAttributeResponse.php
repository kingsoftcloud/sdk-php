<?php
namespace  Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;

class ModifySoKeyPairAttributeResponse extends BaseModel
{
         /** 3e51192a-9bfc-4788-861c-b0905571b913**/
         public  $RequestId;

         /** 123**/
         public  $KeyPairName;

         /** true**/
         public  $Return;

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
            if (array_key_exists("KeyPairName",$param) and $param["KeyPairName"] !== null) {
                $this->KeyPairName = $param["KeyPairName"];
            }
            if (array_key_exists("Return",$param) and $param["Return"] !== null) {
                $this->Return = $param["Return"];
            }

        }
}