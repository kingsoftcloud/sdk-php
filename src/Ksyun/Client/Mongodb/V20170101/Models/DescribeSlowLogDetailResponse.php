<?php
namespace  Ksyun\Client\Mongodb\V20170101\Models;

use Ksyun\Common\BaseModel;

class DescribeSlowLogDetailResponse extends BaseModel
{
         /** **/
         public  $RequestId;

         /**Object **/
         public  $data;

         /** **/
         public  $marker;

         /** **/
         public  $maxRecords;

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
            if (array_key_exists("marker",$param) and $param["marker"] !== null) {
                $this->marker = $param["marker"];
            }
            if (array_key_exists("maxRecords",$param) and $param["maxRecords"] !== null) {
                $this->maxRecords = $param["maxRecords"];
            }
            if (array_key_exists("Total",$param) and $param["Total"] !== null) {
                $this->Total = $param["Total"];
            }

        }
}