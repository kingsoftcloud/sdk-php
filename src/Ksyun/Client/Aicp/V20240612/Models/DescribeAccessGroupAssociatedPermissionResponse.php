<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;

class DescribeAccessGroupAssociatedPermissionResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /**Object 关联权限列表**/
         public  $AssociatedPermissionSet;

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
            if (array_key_exists("AssociatedPermissionSet",$param) and $param["AssociatedPermissionSet"] !== null) {
                $this->AssociatedPermissionSet = $param["AssociatedPermissionSet"];
            }

        }
}