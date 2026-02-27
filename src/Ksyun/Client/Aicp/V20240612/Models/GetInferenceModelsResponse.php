<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;

class GetInferenceModelsResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 总数**/
         public  $TotalCount;

         /**Object 内置大模型列表**/
         public  $InferenceModels;

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
            if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
                $this->TotalCount = $param["TotalCount"];
            }
            if (array_key_exists("InferenceModels",$param) and $param["InferenceModels"] !== null) {
                $this->InferenceModels = $param["InferenceModels"];
            }

        }
}