<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class GetUserResponse extends BaseModel
{
         /** **/
         public  $RequestId;

         /** **/
         public  $GetUserResult;

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
            if (array_key_exists("GetUserResult",$param) and $param["GetUserResult"] !== null) {
                $this->GetUserResult = $param["GetUserResult"];
            }

        }
}