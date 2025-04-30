<?php
namespace  Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;

class ConfirmProcessResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 客户确认是否维修完成可恢复业务
有效值：
• Available
• Unavailable**/
         public  $UserConfirmAvailable;

         /** 客户确认的时间**/
         public  $UserConfirmAvailableTime;

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
            if (array_key_exists("UserConfirmAvailable",$param) and $param["UserConfirmAvailable"] !== null) {
                $this->UserConfirmAvailable = $param["UserConfirmAvailable"];
            }
            if (array_key_exists("UserConfirmAvailableTime",$param) and $param["UserConfirmAvailableTime"] !== null) {
                $this->UserConfirmAvailableTime = $param["UserConfirmAvailableTime"];
            }
            if (array_key_exists("Return",$param) and $param["Return"] !== null) {
                $this->Return = $param["Return"];
            }

        }
}