<?php
namespace  Ksyun\Client\Slb\V20250430\Models;

use Ksyun\Common\BaseModel;

class DescribeRuleGroupsResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 获取另一页返回结果的 token.**/
         public  $NextToken;

         /**Object 转发策略的信息**/
         public  $RuleGroupSet;

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
            if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
                $this->NextToken = $param["NextToken"];
            }
            if (array_key_exists("RuleGroupSet",$param) and $param["RuleGroupSet"] !== null) {
                $this->RuleGroupSet = $param["RuleGroupSet"];
            }

        }
}