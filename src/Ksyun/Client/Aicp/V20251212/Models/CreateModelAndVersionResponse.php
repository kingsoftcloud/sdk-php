<?php
namespace  Ksyun\Client\Aicp\V20251212\Models;

use Ksyun\Common\BaseModel;

class CreateModelAndVersionResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 模型ID**/
         public  $ModelId;

         /** 模型版本ID**/
         public  $ModelVersionId;

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
            if (array_key_exists("ModelVersionId",$param) and $param["ModelVersionId"] !== null) {
                $this->ModelVersionId = $param["ModelVersionId"];
            }

        }
}