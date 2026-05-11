<?php
namespace  Ksyun\Client\Kscc\V1\Models;

use Ksyun\Common\BaseModel;

class DeleteDefaultMemberQuotaResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 删除结果**/
         public  $DeleteDefaultMemberQuotaResult;

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
            if (array_key_exists("DeleteDefaultMemberQuotaResult",$param) and $param["DeleteDefaultMemberQuotaResult"] !== null) {
                $this->DeleteDefaultMemberQuotaResult = $param["DeleteDefaultMemberQuotaResult"];
            }

        }
}