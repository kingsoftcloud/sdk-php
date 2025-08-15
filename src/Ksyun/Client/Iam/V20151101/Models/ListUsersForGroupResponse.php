<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class ListUsersForGroupResponse extends BaseModel
{
         /** **/
         public  $ListUsersForGroupResult;

         /** **/
         public  $RequestId;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("ListUsersForGroupResult",$param) and $param["ListUsersForGroupResult"] !== null) {
                $this->ListUsersForGroupResult = $param["ListUsersForGroupResult"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }

        }
}