<?php
namespace  Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;

class DescribeUseHotStandbyRecordsResponse extends BaseModel
{
         /** **/
         public  $RequestId;

         /** **/
         public  $NextToken;

         /** **/
         public  $TotalCount;

         /**Object **/
         public  $UseHotStandbyRecordsSet;

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
            if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
                $this->TotalCount = $param["TotalCount"];
            }
            if (array_key_exists("UseHotStandbyRecordsSet",$param) and $param["UseHotStandbyRecordsSet"] !== null) {
                $this->UseHotStandbyRecordsSet = $param["UseHotStandbyRecordsSet"];
            }

        }
}