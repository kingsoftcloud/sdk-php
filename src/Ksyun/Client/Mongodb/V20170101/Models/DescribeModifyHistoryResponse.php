<?php
namespace  Ksyun\Client\Mongodb\V20170101\Models;

use Ksyun\Common\BaseModel;

class DescribeModifyHistoryResponse extends BaseModel
{
         /** **/
         public  $TotalCount;

         /**String **/
         public  $HistoryInfo;

         /** **/
         public  $RequestId;

         /** **/
         public  $Offset;

         /** **/
         public  $Limit;

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
            if (array_key_exists("HistoryInfo",$param) and $param["HistoryInfo"] !== null) {
                $this->HistoryInfo = $param["HistoryInfo"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }
            if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
                $this->Offset = $param["Offset"];
            }
            if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
                $this->Limit = $param["Limit"];
            }

        }
}