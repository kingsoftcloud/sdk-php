<?php
namespace  Ksyun\Client\Kkms\V20160304\Models;

use Ksyun\Common\BaseModel;

class EncryptResponse extends BaseModel
{
         /** 
- 请求ID
- 类型: String

#### **/
         public  $RequestId;

         /** 
- 密文数据
- 类型:Base64-encoded binary data object
- 是否可缺省: 否

#### **/
         public  $CiphertextBlob;

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
            if (array_key_exists("CiphertextBlob",$param) and $param["CiphertextBlob"] !== null) {
                $this->CiphertextBlob = $param["CiphertextBlob"];
            }

        }
}