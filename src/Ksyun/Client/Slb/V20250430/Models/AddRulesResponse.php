<?php
namespace  Ksyun\Client\Slb\V20250430\Models;

use Ksyun\Common\BaseModel;

class AddRulesResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /**Object 规则的信息**/
         public  $Rule;

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
            if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
                $this->Rule = $param["Rule"];
            }

        }
}