<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class CreateAccessGroupResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 权限组名称**/
         public  $AccessGroupName;

         /** 权限组ID**/
         public  $AccessGroupId;

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
            if (array_key_exists("AccessGroupName",$param) and $param["AccessGroupName"] !== null) {
                $this->AccessGroupName = $param["AccessGroupName"];
            }
            if (array_key_exists("AccessGroupId",$param) and $param["AccessGroupId"] !== null) {
                $this->AccessGroupId = $param["AccessGroupId"];
            }

        }
}