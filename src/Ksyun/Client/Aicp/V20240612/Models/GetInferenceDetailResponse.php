<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;

class GetInferenceDetailResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /**Object 推理服务详情**/
         public  $InferenceDetail;

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
            if (array_key_exists("InferenceDetail",$param) and $param["InferenceDetail"] !== null) {
                $this->InferenceDetail = $param["InferenceDetail"];
            }

        }
}