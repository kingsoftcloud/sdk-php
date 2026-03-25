<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;

class GetQueueMemberResponse extends BaseModel
{
         /** **/
         public  $TotalCount;

         /** **/
         public  $Page;

         /** **/
         public  $PageSize;

         /**Object 成员资源占用信息列表**/
         public  $Users;

         /** 接口调用者用户权限Code
admin - 创建者/主账号
global_admin - 全局管理员
writer - 队列管理员
reader - 队列成员**/
         public  $CurrentUserPermission;

         /** 请求ID**/
         public  $RequestId;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
                $this->TotalCount = $param["TotalCount"];
            }
            if (array_key_exists("Page",$param) and $param["Page"] !== null) {
                $this->Page = $param["Page"];
            }
            if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
                $this->PageSize = $param["PageSize"];
            }
            if (array_key_exists("Users",$param) and $param["Users"] !== null) {
                $this->Users = $param["Users"];
            }
            if (array_key_exists("CurrentUserPermission",$param) and $param["CurrentUserPermission"] !== null) {
                $this->CurrentUserPermission = $param["CurrentUserPermission"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }

        }
}