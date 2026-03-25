<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;

class EnableKpfsComponentResponse extends BaseModel
{
         /** 请求id**/
         public  $RequestId;

         /** 资源组id**/
         public  $ResourcePoolId;

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
            if (array_key_exists("ResourcePoolId",$param) and $param["ResourcePoolId"] !== null) {
                $this->ResourcePoolId = $param["ResourcePoolId"];
            }

        }
}