<?php
namespace  Ksyun\Client\Slb\V20250430\Models;

use Ksyun\Common\BaseModel;

class ModifyBackendServerResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /**Object 服务器组信息**/
         public  $BackendServer;

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
            if (array_key_exists("BackendServer",$param) and $param["BackendServer"] !== null) {
                $this->BackendServer = $param["BackendServer"];
            }

        }
}