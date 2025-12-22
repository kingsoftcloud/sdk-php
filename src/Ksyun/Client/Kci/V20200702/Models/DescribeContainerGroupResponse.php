<?php
namespace  Ksyun\Client\Kci\V20200702\Models;

use Ksyun\Common\BaseModel;

class DescribeContainerGroupResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 返回最大记录数**/
         public  $MaxResults;

         /** 请求下一页数据起始记录值，如果为0表示全部数据已获取**/
         public  $Marker;

         /** 总记录数**/
         public  $TotalCount;

         /**Object 响应数据体**/
         public  $ContainerGroups;

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
            if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
                $this->MaxResults = $param["MaxResults"];
            }
            if (array_key_exists("Marker",$param) and $param["Marker"] !== null) {
                $this->Marker = $param["Marker"];
            }
            if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
                $this->TotalCount = $param["TotalCount"];
            }
            if (array_key_exists("ContainerGroups",$param) and $param["ContainerGroups"] !== null) {
                $this->ContainerGroups = $param["ContainerGroups"];
            }

        }
}