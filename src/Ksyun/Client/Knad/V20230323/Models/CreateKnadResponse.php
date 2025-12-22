<?php
namespace  Ksyun\Client\Knad\V20230323\Models;

use Ksyun\Common\BaseModel;

class CreateKnadResponse extends BaseModel
{
         /** **/
         public  $RequestId;

         /** **/
         public  $kid;

         /** **/
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
            if (array_key_exists("kid",$param) and $param["kid"] !== null) {
                $this->kid = $param["kid"];
            }
            if (array_key_exists("Return",$param) and $param["Return"] !== null) {
                $this->Return = $param["Return"];
            }

        }
}