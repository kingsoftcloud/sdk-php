<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribePathTasksResponse extends BaseModel
{
         /** **/
         public  $RequestId;

         /**Object **/
         public  $PathTaskSet;

         /** 获取另一页返回结果的 token**/
         public  $NextToken;

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
            if (array_key_exists("PathTaskSet",$param) and $param["PathTaskSet"] !== null) {
                $this->PathTaskSet = $param["PathTaskSet"];
            }
            if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
                $this->NextToken = $param["NextToken"];
            }

        }
}