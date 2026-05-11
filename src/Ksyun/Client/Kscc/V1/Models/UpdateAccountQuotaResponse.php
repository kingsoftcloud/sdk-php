<?php
namespace  Ksyun\Client\Kscc\V1\Models;

use Ksyun\Common\BaseModel;

class UpdateAccountQuotaResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 更新后的账号配额**/
         public  $UpdateAccountQuotaResult;

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
            if (array_key_exists("UpdateAccountQuotaResult",$param) and $param["UpdateAccountQuotaResult"] !== null) {
                $this->UpdateAccountQuotaResult = $param["UpdateAccountQuotaResult"];
            }

        }
}