<?php
namespace  Ksyun\Client\Kscc\V1\Models;

use Ksyun\Common\BaseModel;

class UpdateDeptQuotaResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 更新结果**/
         public  $UpdateDeptQuotaResult;

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
            if (array_key_exists("UpdateDeptQuotaResult",$param) and $param["UpdateDeptQuotaResult"] !== null) {
                $this->UpdateDeptQuotaResult = $param["UpdateDeptQuotaResult"];
            }

        }
}