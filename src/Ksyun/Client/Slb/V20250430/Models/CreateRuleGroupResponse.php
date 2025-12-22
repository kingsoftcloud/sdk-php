<?php
namespace  Ksyun\Client\Slb\V20250430\Models;

use Ksyun\Common\BaseModel;

class CreateRuleGroupResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /**Object 转发策略的信息**/
         public  $RuleGroup;

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
            if (array_key_exists("RuleGroup",$param) and $param["RuleGroup"] !== null) {
                $this->RuleGroup = $param["RuleGroup"];
            }

        }
}