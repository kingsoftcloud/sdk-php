<?php
namespace  Ksyun\Client\Ebs\V20160304\Models;

use Ksyun\Common\BaseModel;

class ValidateAttachInstanceResponse extends BaseModel
{
         /** 请求流水号**/
         public  $RequestId;

         /** true表示可用，False表示挂盘超出限制或其他条件导致不可用**/
         public  $InstanceEnable;

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
            if (array_key_exists("InstanceEnable",$param) and $param["InstanceEnable"] !== null) {
                $this->InstanceEnable = $param["InstanceEnable"];
            }

        }
}