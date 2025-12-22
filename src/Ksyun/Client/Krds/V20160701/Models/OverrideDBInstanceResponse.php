<?php
namespace  Ksyun\Client\Krds\V20160701\Models;

use Ksyun\Common\BaseModel;

class OverrideDBInstanceResponse extends BaseModel
{
         /** 实例基本信息	
**/
         public  $Data;

         /** 请求id	
**/
         public  $RequestId;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("Data",$param) and $param["Data"] !== null) {
                $this->Data = $param["Data"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }

        }
}