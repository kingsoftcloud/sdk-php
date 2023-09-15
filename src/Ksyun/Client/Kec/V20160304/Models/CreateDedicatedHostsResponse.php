<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class CreateDedicatedHostsResponse extends BaseModel
{
         /** 

- 请求ID
- 类型: String
- 是否可缺省: 否

**/
         public  $RequestId;

         /** 


- 专属宿主机ID
- 类型：String

**/
         public  $DedicatedHostId;

         /** 

- 专属宿主机名称
- 类型：String



**/
         public  $DedicatedHostName;

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
            if (array_key_exists("DedicatedHostName",$param) and $param["DedicatedHostName"] !== null) {
                $this->DedicatedHostName = $param["DedicatedHostName"];
            }

        }
}