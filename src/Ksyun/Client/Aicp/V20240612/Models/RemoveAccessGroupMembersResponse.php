<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;

class RemoveAccessGroupMembersResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

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
            if (array_key_exists("AccessGroupId",$param) and $param["AccessGroupId"] !== null) {
                $this->AccessGroupId = $param["AccessGroupId"];
            }

        }
}