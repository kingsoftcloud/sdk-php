<?php
namespace  Ksyun\Client\Aicp\V20260401\Models;

use Ksyun\Common\BaseModel;

class CreateImageCacheResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 镜像缓存列表，单镜像返回1元素列表**/
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
            if (array_key_exists("ImageCaches",$param) and $param["ImageCaches"] !== null) {
                $this->ImageCaches = $param["ImageCaches"];
            }

        }
}