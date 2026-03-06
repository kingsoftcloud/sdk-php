<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class CreateAccessRuleResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /**String 权限组规则ID**/
         public  $AccessRuleIds;

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
            if (array_key_exists("AccessRuleIds",$param) and $param["AccessRuleIds"] !== null) {
                $this->AccessRuleIds = $param["AccessRuleIds"];
            }

        }
}