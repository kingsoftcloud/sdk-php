<?php
namespace  Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;

class DescribeModelConfigResponse extends BaseModel
{
         /** 总数**/
         public  $TotalCount;

         /** 获取另一页返回结果的 token.
类型: String
是否必填：否**/
         public  $NextToken;

         /**Object 模型配置集合**/
         public  $ModelConfigSet;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
                $this->TotalCount = $param["TotalCount"];
            }
            if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
                $this->NextToken = $param["NextToken"];
            }
            if (array_key_exists("ModelConfigSet",$param) and $param["ModelConfigSet"] !== null) {
                $this->ModelConfigSet = $param["ModelConfigSet"];
            }

        }
}