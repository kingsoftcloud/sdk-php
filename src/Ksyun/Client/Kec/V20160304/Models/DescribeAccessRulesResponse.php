<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeAccessRulesResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 权限规则的总个数**/
         public  $TotalCount;

         /**Object 权限规则信息集合**/
         public  $AccessRules;

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
            if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
                $this->TotalCount = $param["TotalCount"];
            }
            if (array_key_exists("AccessRules",$param) and $param["AccessRules"] !== null) {
                $this->AccessRules = $param["AccessRules"];
            }

        }
}