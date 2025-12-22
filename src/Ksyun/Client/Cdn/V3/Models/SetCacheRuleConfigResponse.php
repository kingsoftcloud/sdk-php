<?php
namespace  Ksyun\Client\Cdn\V3\Models;

use Ksyun\Common\BaseModel;

class SetCacheRuleConfigResponse extends BaseModel
{
         /** **/
         public  $SetCacheRuleConfigResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("SetCacheRuleConfigResponse",$param) and $param["SetCacheRuleConfigResponse"] !== null) {
                $this->SetCacheRuleConfigResponse = $param["SetCacheRuleConfigResponse"];
            }

        }
}