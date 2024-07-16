<?php
namespace  Ksyun\Client\Kci\V20200702\Models;

use Ksyun\Common\BaseModel;

class DescribeImageCacheResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 单次请求最大记录数**/
         public  $MaxResults;

         /** 下一次请求记录的起始值，如果是0，表示所有数据已返回，重新开始从第一页获取数据**/
         public  $Marker;

         /** 满足查询条件的总记录数**/
         public  $TotalCount;

         /**Object **/
         public  $ImageCaches;

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
            if (array_key_exists("ImageCaches",$param) and $param["ImageCaches"] !== null) {
                $this->ImageCaches = $param["ImageCaches"];
            }

        }
}