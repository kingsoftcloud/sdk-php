<?php
namespace  Ksyun\Client\Ebs\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeDedicatedBlockStorageClustersResponse extends BaseModel
{
         /** **/
         public  $requestId;

         /**Object **/
         public  $Dbscs;

         /** **/
         public  $TotalCount;

         /** **/
         public  $Marker;

         /** **/
         public  $MaxResults;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("requestId",$param) and $param["requestId"] !== null) {
                $this->requestId = $param["requestId"];
            }
            if (array_key_exists("Dbscs",$param) and $param["Dbscs"] !== null) {
                $this->Dbscs = $param["Dbscs"];
            }
            if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
                $this->TotalCount = $param["TotalCount"];
            }
            if (array_key_exists("Marker",$param) and $param["Marker"] !== null) {
                $this->Marker = $param["Marker"];
            }
            if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
                $this->MaxResults = $param["MaxResults"];
            }

        }
}