<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;

class ActivateApiServiceResponse extends BaseModel
{
         /** **/
         public  $RequestId;

         /** 是否开通成功：true 为开通成功，其他情况都是失败。**/
         public  $Success;

         /** 错误信息，非业务成功时有。**/
         public  $Error;

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
            if (array_key_exists("Success",$param) and $param["Success"] !== null) {
                $this->Success = $param["Success"];
            }
            if (array_key_exists("Error",$param) and $param["Error"] !== null) {
                $this->Error = $param["Error"];
            }

        }
}