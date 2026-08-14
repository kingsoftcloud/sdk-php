<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;

class CheckKlogServiceStatusResponse extends BaseModel
{
         /** **/
         public  $RequestId;

         /** 0: 用户状态正常
1: 欠费停服，可以部分使用控制台
2: 欠费关停，无法使用控制台，用户信息删除
3: 当前用用户不存在**/
         public  $UserStatus;

         /** **/
         public  $UserId;

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
            if (array_key_exists("UserStatus",$param) and $param["UserStatus"] !== null) {
                $this->UserStatus = $param["UserStatus"];
            }
            if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
                $this->UserId = $param["UserId"];
            }

        }
}