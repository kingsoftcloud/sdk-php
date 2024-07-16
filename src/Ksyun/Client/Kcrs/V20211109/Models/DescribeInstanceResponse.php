<?php
namespace  Ksyun\Client\Kcrs\V20211109\Models;

use Ksyun\Common\BaseModel;

class DescribeInstanceResponse extends BaseModel
{
         /** 总数**/
         public  $TotalCount;

         /**Object **/
         public  $InstanceSet;

         /** 请求ID**/
         public  $RequestId;

         /** 每个分页的最大条目数**/
         public  $MaxResults;

         /** 当前分页**/
         public  $Marker;

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
            if (array_key_exists("InstanceSet",$param) and $param["InstanceSet"] !== null) {
                $this->InstanceSet = $param["InstanceSet"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }
            if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
                $this->MaxResults = $param["MaxResults"];
            }
            if (array_key_exists("Marker",$param) and $param["Marker"] !== null) {
                $this->Marker = $param["Marker"];
            }

        }
}