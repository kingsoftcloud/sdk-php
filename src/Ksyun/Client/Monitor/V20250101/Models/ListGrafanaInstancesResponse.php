<?php
namespace  Ksyun\Client\Monitor\V20250101\Models;

use Ksyun\Common\BaseModel;

class ListGrafanaInstancesResponse extends BaseModel
{
         /** 请求ID。**/
         public  $RequestID;

         /** **/
         public  $Code;

         /**Object **/
         public  $InstancesSet;

         /** **/
         public  $TotalCount;

         /** **/
         public  $PageIndex;

         /** **/
         public  $PageSize;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("RequestID",$param) and $param["RequestID"] !== null) {
                $this->RequestID = $param["RequestID"];
            }
            if (array_key_exists("Code",$param) and $param["Code"] !== null) {
                $this->Code = $param["Code"];
            }
            if (array_key_exists("InstancesSet",$param) and $param["InstancesSet"] !== null) {
                $this->InstancesSet = $param["InstancesSet"];
            }
            if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
                $this->TotalCount = $param["TotalCount"];
            }
            if (array_key_exists("PageIndex",$param) and $param["PageIndex"] !== null) {
                $this->PageIndex = $param["PageIndex"];
            }
            if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
                $this->PageSize = $param["PageSize"];
            }

        }
}