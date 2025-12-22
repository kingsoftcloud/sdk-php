<?php
namespace  Ksyun\Client\Trade\V20250220\Models;

use Ksyun\Common\BaseModel;

class DeleteTrialToBuyTaskResponse extends BaseModel
{
         /** **/
         public  $Error;

         /** 本次请求唯一标识**/
         public  $RequestId;

         /** 是否取消定时转正任务。true-成功，false-失败**/
         public  $success;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("Error",$param) and $param["Error"] !== null) {
                $this->Error = $param["Error"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }
            if (array_key_exists("success",$param) and $param["success"] !== null) {
                $this->success = $param["success"];
            }

        }
}