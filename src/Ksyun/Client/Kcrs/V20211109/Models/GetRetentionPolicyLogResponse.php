<?php
namespace  Ksyun\Client\Kcrs\V20211109\Models;

use Ksyun\Common\BaseModel;

class GetRetentionPolicyLogResponse extends BaseModel
{
         /** 结果字符串**/
         public  $Data;

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

        }
}