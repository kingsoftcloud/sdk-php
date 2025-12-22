<?php
namespace  Ksyun\Client\Mongodb\V20170101\Models;

use Ksyun\Common\BaseModel;

class DescribeSlowLogStatisticsResponse extends BaseModel
{
         /** **/
         public  $RequestId;

         /**Object **/
         public  $data;

         /** **/
         public  $Offset;

         /** **/
         public  $Limit;

         /** **/
         public  $Total;

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
            if (array_key_exists("data",$param) and $param["data"] !== null) {
                $this->data = $param["data"];
            }
            if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
                $this->Offset = $param["Offset"];
            }
            if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
                $this->Limit = $param["Limit"];
            }
            if (array_key_exists("Total",$param) and $param["Total"] !== null) {
                $this->Total = $param["Total"];
            }

        }
}