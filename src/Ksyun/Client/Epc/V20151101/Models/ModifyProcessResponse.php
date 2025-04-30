<?php
namespace  Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;

class ModifyProcessResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 确认允许重启的时间
**/
         public  $ConfirmTime;

         /** 修改后的工单状态
有效值：
• InProgress
• Completed
• UserClose**/
         public  $Status;

         /** 操作是否成功**/
         public  $Return;

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
            if (array_key_exists("ConfirmTime",$param) and $param["ConfirmTime"] !== null) {
                $this->ConfirmTime = $param["ConfirmTime"];
            }
            if (array_key_exists("Status",$param) and $param["Status"] !== null) {
                $this->Status = $param["Status"];
            }
            if (array_key_exists("Return",$param) and $param["Return"] !== null) {
                $this->Return = $param["Return"];
            }

        }
}