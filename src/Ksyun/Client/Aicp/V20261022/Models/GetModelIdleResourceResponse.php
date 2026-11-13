<?php
namespace  Ksyun\Client\Aicp\V20261022\Models;

use Ksyun\Common\BaseModel;

class GetModelIdleResourceResponse extends BaseModel
{
         /** 请求id**/
         public  $RequestId;

         /** 模型名称**/
         public  $ModelName;

         /** 是否有闲时资源**/
         public  $HasIdle;

         /** 集群预估闲时资源量级，无闲时资源时为0**/
         public  $PredictIdleTpm;

         /**String 提示信息**/
         public  $Notes;

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
            if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
                $this->ModelName = $param["ModelName"];
            }
            if (array_key_exists("HasIdle",$param) and $param["HasIdle"] !== null) {
                $this->HasIdle = $param["HasIdle"];
            }
            if (array_key_exists("PredictIdleTpm",$param) and $param["PredictIdleTpm"] !== null) {
                $this->PredictIdleTpm = $param["PredictIdleTpm"];
            }
            if (array_key_exists("Notes",$param) and $param["Notes"] !== null) {
                $this->Notes = $param["Notes"];
            }

        }
}