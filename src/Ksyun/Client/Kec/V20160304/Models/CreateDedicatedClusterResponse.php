<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class CreateDedicatedClusterResponse extends BaseModel
{
         /** 

- 请求ID
- 类型：String

**/
         public  $RequestId;

         /** 

- 专属集群id
- 类型: String


**/
         public  $DedicatedClusterId;

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
            if (array_key_exists("DedicatedClusterId",$param) and $param["DedicatedClusterId"] !== null) {
                $this->DedicatedClusterId = $param["DedicatedClusterId"];
            }

        }
}