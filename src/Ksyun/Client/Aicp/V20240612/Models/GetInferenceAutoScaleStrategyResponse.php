<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;

class GetInferenceAutoScaleStrategyResponse extends BaseModel
{
         /**Object 自动扩缩容策略**/
         public  $AutoScaleStrategy;

         /** 请求ID**/
         public  $RequestId;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("AutoScaleStrategy",$param) and $param["AutoScaleStrategy"] !== null) {
                $this->AutoScaleStrategy = $param["AutoScaleStrategy"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }

        }
}