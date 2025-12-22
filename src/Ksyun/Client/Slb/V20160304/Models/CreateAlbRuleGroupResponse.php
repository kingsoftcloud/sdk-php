<?php
namespace  Ksyun\Client\Slb\V20160304\Models;

use Ksyun\Common\BaseModel;

class CreateAlbRuleGroupResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 转发策略的信息**/
         public  $AlbRuleGroup;

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
            if (array_key_exists("AlbRuleGroup",$param) and $param["AlbRuleGroup"] !== null) {
                $this->AlbRuleGroup = $param["AlbRuleGroup"];
            }

        }
}