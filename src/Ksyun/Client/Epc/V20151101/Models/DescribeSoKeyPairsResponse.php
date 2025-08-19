<?php
namespace  Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;

class DescribeSoKeyPairsResponse extends BaseModel
{
         /**Object **/
         public  $KeyPairs;

         /** eWR6dWdqemN6b2thazRlOG1ibDQ=**/
         public  $NextToken;

         /** 4b304828-1775-4a5f-bd4a-ce86fa2c04f1**/
         public  $RequestId;

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
            if (array_key_exists("KeyPairs",$param) and $param["KeyPairs"] !== null) {
                $this->KeyPairs = $param["KeyPairs"];
            }
            if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
                $this->NextToken = $param["NextToken"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }
            if (array_key_exists("Return",$param) and $param["Return"] !== null) {
                $this->Return = $param["Return"];
            }

        }
}