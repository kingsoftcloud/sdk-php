<?php
namespace  Ksyun\Client\Kce\V20230306\Models;

use Ksyun\Common\BaseModel;

class CreatePrometheusInstanceResponse extends BaseModel
{
         /** 请求id**/
         public  $RequestId;

         /** 实例id**/
         public  $InstanceId;

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
            if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
                $this->InstanceId = $param["InstanceId"];
            }

        }
}