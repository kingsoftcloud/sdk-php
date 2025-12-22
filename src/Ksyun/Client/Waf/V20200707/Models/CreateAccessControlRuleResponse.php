<?php
namespace  Ksyun\Client\Waf\V20200707\Models;

use Ksyun\Common\BaseModel;

class CreateAccessControlRuleResponse extends BaseModel
{
         /** **/
         public  $RequestId;

         /** **/
         public  $AccessControlRule;

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
            if (array_key_exists("AccessControlRule",$param) and $param["AccessControlRule"] !== null) {
                $this->AccessControlRule = $param["AccessControlRule"];
            }

        }
}