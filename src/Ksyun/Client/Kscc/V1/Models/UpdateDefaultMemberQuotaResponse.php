<?php
namespace  Ksyun\Client\Kscc\V1\Models;

use Ksyun\Common\BaseModel;

class UpdateDefaultMemberQuotaResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 更新后的全局配置**/
         public  $UpdateDefaultMemberQuotaResult;

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
            if (array_key_exists("UpdateDefaultMemberQuotaResult",$param) and $param["UpdateDefaultMemberQuotaResult"] !== null) {
                $this->UpdateDefaultMemberQuotaResult = $param["UpdateDefaultMemberQuotaResult"];
            }

        }
}