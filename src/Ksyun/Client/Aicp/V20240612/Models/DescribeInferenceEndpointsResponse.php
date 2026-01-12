<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;

class DescribeInferenceEndpointsResponse extends BaseModel
{
         /** uuid**/
         public  $RequestId;

         /** 总数**/
         public  $TotalCount;

         /**Object **/
         public  $Endpoints;

         /** 1**/
         public  $Marker;

         /** 1000**/
         public  $MaxResults;

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
            if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
                $this->TotalCount = $param["TotalCount"];
            }
            if (array_key_exists("Endpoints",$param) and $param["Endpoints"] !== null) {
                $this->Endpoints = $param["Endpoints"];
            }
            if (array_key_exists("Marker",$param) and $param["Marker"] !== null) {
                $this->Marker = $param["Marker"];
            }
            if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
                $this->MaxResults = $param["MaxResults"];
            }

        }
}