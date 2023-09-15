<?php
namespace  Ksyun\Client\Ket\V20170101\Models;

use Ksyun\Common\BaseModel;

class GetStreamTranListResponse extends BaseModel
{
         /** **/
         public  $GetStreamTranListResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("GetStreamTranListResponse",$param) and $param["GetStreamTranListResponse"] !== null) {
                $this->GetStreamTranListResponse = $param["GetStreamTranListResponse"];
            }

        }
}