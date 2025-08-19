<?php
namespace  Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;

class CreateKeyResponse extends BaseModel
{
         /** 请求接口时传递过来的，用户跟踪问题
**/
         public  $RequestId;

         /** 用户的公钥信息
**/
         public  $PrivateKey;

         /** **/
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
            if (array_key_exists("PrivateKey",$param) and $param["PrivateKey"] !== null) {
                $this->PrivateKey = $param["PrivateKey"];
            }
            if (array_key_exists("Key",$param) and $param["Key"] !== null) {
                $this->Key = $param["Key"];
            }

        }
}