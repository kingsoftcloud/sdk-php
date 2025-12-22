<?php
namespace  Ksyun\Client\Kcm\V20160304\Models;

use Ksyun\Common\BaseModel;

class CancelTransactionResponse extends BaseModel
{
         /** **/
         public  $CancleTransactionResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("CancleTransactionResponse",$param) and $param["CancleTransactionResponse"] !== null) {
                $this->CancleTransactionResponse = $param["CancleTransactionResponse"];
            }

        }
}