<?php
namespace  Ksyun\Client\Trade\V20250220\Models;

use Ksyun\Common\BaseModel;

class AddTrialToBuyTaskResponse extends BaseModel
{
         /** **/
         public  $Error;

         /** 本次请求的唯一标识**/
         public  $RequestId;

         /** 试用转正任务是否添加成功。true-成功，false-失败**/
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