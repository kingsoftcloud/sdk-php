<?php
namespace  Ksyun\Client\Aicp\V20251212\Models;

use Ksyun\Common\BaseModel;

class ModifyModelResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 模型ID**/
         public  $ModelId;

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
            if (array_key_exists("ModelId",$param) and $param["ModelId"] !== null) {
                $this->ModelId = $param["ModelId"];
            }

        }
}