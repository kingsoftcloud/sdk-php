<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class CreateDataGuardGroupResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 容灾分组ID**/
         public  $DataGuardId;

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
            if (array_key_exists("DataGuardId",$param) and $param["DataGuardId"] !== null) {
                $this->DataGuardId = $param["DataGuardId"];
            }

        }
}