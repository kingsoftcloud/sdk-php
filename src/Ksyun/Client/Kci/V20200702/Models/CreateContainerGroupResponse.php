<?php
namespace  Ksyun\Client\Kci\V20200702\Models;

use Ksyun\Common\BaseModel;

class CreateContainerGroupResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 容器实例ID**/
         public  $ContainerGroupId;

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
            if (array_key_exists("ContainerGroupId",$param) and $param["ContainerGroupId"] !== null) {
                $this->ContainerGroupId = $param["ContainerGroupId"];
            }

        }
}