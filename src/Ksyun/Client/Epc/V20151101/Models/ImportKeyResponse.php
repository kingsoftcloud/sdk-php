<?php
namespace  Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;

class ImportKeyResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /**Object 用户的公钥信息**/
         public  $Key;

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
            if (array_key_exists("Key",$param) and $param["Key"] !== null) {
                $this->Key = $param["Key"];
            }

        }
}