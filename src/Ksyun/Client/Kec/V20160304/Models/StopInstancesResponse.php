<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class StopInstancesResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 关闭实例集合**/
         public  $InstancesSet;

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
            if (array_key_exists("InstancesSet",$param) and $param["InstancesSet"] !== null) {
                $this->InstancesSet = $param["InstancesSet"];
            }

        }
}