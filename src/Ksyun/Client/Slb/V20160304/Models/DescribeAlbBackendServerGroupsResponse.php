<?php
namespace  Ksyun\Client\Slb\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeAlbBackendServerGroupsResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /**Object 服务器组信息**/
         public  $BackendServerGroupSet;

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
            if (array_key_exists("BackendServerGroupSet",$param) and $param["BackendServerGroupSet"] !== null) {
                $this->BackendServerGroupSet = $param["BackendServerGroupSet"];
            }

        }
}