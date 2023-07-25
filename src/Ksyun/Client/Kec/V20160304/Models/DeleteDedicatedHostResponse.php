<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DeleteDedicatedHostResponse extends BaseModel
{
         /** 

- 请求ID
- 类型：String

**/
         public  $RequestId;

         /** 

- 专属宿主机ID
- 类型：String


**/
         public  $DedicatedHostId;

         /** 

- 操作是否成功
- 类型：Boolean

**/
         public  $Return;

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
            if (array_key_exists("DedicatedHostId",$param) and $param["DedicatedHostId"] !== null) {
                $this->DedicatedHostId = $param["DedicatedHostId"];
            }
            if (array_key_exists("Return",$param) and $param["Return"] !== null) {
                $this->Return = $param["Return"];
            }

        }
}