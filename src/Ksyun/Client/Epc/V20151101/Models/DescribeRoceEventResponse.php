<?php
namespace  Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;

class DescribeRoceEventResponse extends BaseModel
{
         /**Object **/
         public  $RoceEventResponseSet;

         /** 请求ID**/
         public  $RequestId;

         /** 总条数**/
         public  $TotalCount;

         /** 第几条**/
         public  $NextToken;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("RoceEventResponseSet",$param) and $param["RoceEventResponseSet"] !== null) {
                $this->RoceEventResponseSet = $param["RoceEventResponseSet"];
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