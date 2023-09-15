<?php
namespace  Ksyun\Client\Krds\V20160701\Models;

use Ksyun\Common\BaseModel;

class GetTableRestorableTimeResponse extends BaseModel
{
         /** 	
**/
         public  $RestorableTime;

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
            if (array_key_exists("RestorableTime",$param) and $param["RestorableTime"] !== null) {
                $this->RestorableTime = $param["RestorableTime"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }

        }
}