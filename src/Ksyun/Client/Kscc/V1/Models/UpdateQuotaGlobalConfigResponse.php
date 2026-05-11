<?php
namespace  Ksyun\Client\Kscc\V1\Models;

use Ksyun\Common\BaseModel;

class UpdateQuotaGlobalConfigResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 更新后的全局配置**/
         public  $UpdateQuotaGlobalConfigResult;

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
            if (array_key_exists("UpdateQuotaGlobalConfigResult",$param) and $param["UpdateQuotaGlobalConfigResult"] !== null) {
                $this->UpdateQuotaGlobalConfigResult = $param["UpdateQuotaGlobalConfigResult"];
            }

        }
}