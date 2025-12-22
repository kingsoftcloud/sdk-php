<?php
namespace  Ksyun\Client\Slb\V20160304\Models;

use Ksyun\Common\BaseModel;

class ModifyAlbBackendServerGroupResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /**Object 服务器组信息**/
         public  $BackendServerGroup;

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
            if (array_key_exists("BackendServerGroup",$param) and $param["BackendServerGroup"] !== null) {
                $this->BackendServerGroup = $param["BackendServerGroup"];
            }

        }
}