<?php
namespace  Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;

class DescribeSoUserDataResponse extends BaseModel
{
         /** 实例ID**/
         public  $InstanceId;

         /** 实例的自定义数据**/
         public  $UserData;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
                $this->InstanceId = $param["InstanceId"];
            }
            if (array_key_exists("UserData",$param) and $param["UserData"] !== null) {
                $this->UserData = $param["UserData"];
            }

        }
}