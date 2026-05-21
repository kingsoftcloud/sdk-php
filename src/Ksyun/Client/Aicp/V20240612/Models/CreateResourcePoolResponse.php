<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;

class CreateResourcePoolResponse extends BaseModel
{
         /** 资源组ID**/
         public  $ResourcePoolId;

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
            if (array_key_exists("ResourcePoolId",$param) and $param["ResourcePoolId"] !== null) {
                $this->ResourcePoolId = $param["ResourcePoolId"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }

        }
}