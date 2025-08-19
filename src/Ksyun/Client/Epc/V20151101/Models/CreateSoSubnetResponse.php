<?php
namespace  Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;

class CreateSoSubnetResponse extends BaseModel
{
         /** 1ded7233-54f8-44d1-a2ea-b6fcc0ca7390**/
         public  $RequestId;

         /** true**/
         public  $Return;

         /** 1ded7233-54f8-44d1-a2ea-b6fcc0ca7390**/
         public  $SubnetId;

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
            if (array_key_exists("Return",$param) and $param["Return"] !== null) {
                $this->Return = $param["Return"];
            }
            if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
                $this->SubnetId = $param["SubnetId"];
            }

        }
}