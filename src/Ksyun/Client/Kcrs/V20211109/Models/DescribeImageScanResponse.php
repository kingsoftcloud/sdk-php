<?php
namespace  Ksyun\Client\Kcrs\V20211109\Models;

use Ksyun\Common\BaseModel;

class DescribeImageScanResponse extends BaseModel
{
         /** **/
         public  $RequestId;

         /** **/
         public  $Status;

         /** **/
         public  $TotalCount;

         /** **/
         public  $FinishTime;

         /** **/
         public  $Summary;

         /** **/
         public  $VulnerabilitySet;

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
            if (array_key_exists("Status",$param) and $param["Status"] !== null) {
                $this->Status = $param["Status"];
            }
            if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
                $this->TotalCount = $param["TotalCount"];
            }
            if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
                $this->FinishTime = $param["FinishTime"];
            }
            if (array_key_exists("Summary",$param) and $param["Summary"] !== null) {
                $this->Summary = $param["Summary"];
            }
            if (array_key_exists("VulnerabilitySet",$param) and $param["VulnerabilitySet"] !== null) {
                $this->VulnerabilitySet = $param["VulnerabilitySet"];
            }

        }
}