<?php
namespace  Ksyun\Client\Kscc\V1\Models;

use Ksyun\Common\BaseModel;

class UpdateUserQuotaResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 更新结果**/
         public  $UpdateUserQuotaResult;

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
            if (array_key_exists("UpdateUserQuotaResult",$param) and $param["UpdateUserQuotaResult"] !== null) {
                $this->UpdateUserQuotaResult = $param["UpdateUserQuotaResult"];
            }

        }
}