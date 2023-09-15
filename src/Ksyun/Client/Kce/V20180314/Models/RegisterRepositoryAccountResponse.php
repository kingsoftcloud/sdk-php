<?php
namespace  Ksyun\Client\Kce\V20180314\Models;

use Ksyun\Common\BaseModel;

class RegisterRepositoryAccountResponse extends BaseModel
{
         /** 请求id**/
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