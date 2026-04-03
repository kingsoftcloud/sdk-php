<?php
namespace  Ksyun\Client\Monitor\V20250101\Models;

use Ksyun\Common\BaseModel;

class PutDefaultEventPolicyResponse extends BaseModel
{
         /** 请求ID。**/
         public  $requestId;

         /** 业务CODE。

> Success: 表示成功。**/
         public  $code;

         /** 业务操作说明。**/
         public  $message;

         /** 当前默认策略名称。**/
         public  $DefaultPolicyName;

         /** 之前默认策略名称。

> 如果之前没有设置过默认策略，则返回空。**/
         public  $PreviousDefaultPolicyName;

         /** 更新时间。

> 格式：Uinxtime**/
         public  $UpdatedAt;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("requestId",$param) and $param["requestId"] !== null) {
                $this->requestId = $param["requestId"];
            }
            if (array_key_exists("code",$param) and $param["code"] !== null) {
                $this->code = $param["code"];
            }
            if (array_key_exists("message",$param) and $param["message"] !== null) {
                $this->message = $param["message"];
            }
            if (array_key_exists("DefaultPolicyName",$param) and $param["DefaultPolicyName"] !== null) {
                $this->DefaultPolicyName = $param["DefaultPolicyName"];
            }
            if (array_key_exists("PreviousDefaultPolicyName",$param) and $param["PreviousDefaultPolicyName"] !== null) {
                $this->PreviousDefaultPolicyName = $param["PreviousDefaultPolicyName"];
            }
            if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
                $this->UpdatedAt = $param["UpdatedAt"];
            }

        }
}