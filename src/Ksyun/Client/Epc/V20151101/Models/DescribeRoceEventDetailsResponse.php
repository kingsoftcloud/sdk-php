<?php
namespace  Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;

class DescribeRoceEventDetailsResponse extends BaseModel
{
         /**Object **/
         public  $RoceEventDetailResponseSet;

         /** 请求ID**/
         public  $RequestId;

         /** 总条数**/
         public  $TotalCount;

         /** 下一条**/
         public  $NextToken;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("RoceEventDetailResponseSet",$param) and $param["RoceEventDetailResponseSet"] !== null) {
                $this->RoceEventDetailResponseSet = $param["RoceEventDetailResponseSet"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }
            if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
                $this->TotalCount = $param["TotalCount"];
            }
            if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
                $this->NextToken = $param["NextToken"];
            }

        }
}