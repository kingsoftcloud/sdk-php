<?php
namespace  Ksyun\Client\Aicp\V20260401\Models;

use Ksyun\Common\BaseModel;

class GetImageCacheListResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /**Object 镜像缓存列表**/
         public  $ImageCaches;

         /** 页码**/
         public  $PageNum;

         /** 每页数量**/
         public  $PageSize;

         /** 总条数**/
         public  $TotalCount;

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
            if (array_key_exists("ImageCaches",$param) and $param["ImageCaches"] !== null) {
                $this->ImageCaches = $param["ImageCaches"];
            }
            if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
                $this->PageNum = $param["PageNum"];
            }
            if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
                $this->PageSize = $param["PageSize"];
            }
            if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
                $this->TotalCount = $param["TotalCount"];
            }

        }
}