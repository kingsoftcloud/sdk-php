<?php
namespace  Ksyun\Client\Kpfs\V20240930\Models;

use Ksyun\Common\BaseModel;

class CreateMigrateRuleResponse extends BaseModel
{
         /** 数据迁移规则ID。**/
         public  $RuleId;

         /** 唯一请求ID，每次请求都会返回。**/
         public  $RequestId;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
                $this->RuleId = $param["RuleId"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }

        }
}