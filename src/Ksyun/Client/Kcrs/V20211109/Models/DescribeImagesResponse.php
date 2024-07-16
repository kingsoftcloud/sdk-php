<?php
namespace  Ksyun\Client\Kcrs\V20211109\Models;

use Ksyun\Common\BaseModel;

class DescribeImagesResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 单次调用所返回的最大实例数目**/
         public  $MaxResults;

         /** 分页标识，单次调用未返回全部实例时，标记下次调用的返回值的起点，默认值是0**/
         public  $Marker;

         /** 镜像数量**/
         public  $TotalCount;

         /** 实体响应类**/
         public  $ImageSet;

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
            if (array_key_exists("ImageSet",$param) and $param["ImageSet"] !== null) {
                $this->ImageSet = $param["ImageSet"];
            }

        }
}