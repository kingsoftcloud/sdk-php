<?php
namespace  Ksyun\Client\Kce\V20190806\Models;

use Ksyun\Common\BaseModel;

class CreateNodePoolResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 节点池id**/
         public  $NodePoolId;

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
            if (array_key_exists("NodePoolId",$param) and $param["NodePoolId"] !== null) {
                $this->NodePoolId = $param["NodePoolId"];
            }

        }
}