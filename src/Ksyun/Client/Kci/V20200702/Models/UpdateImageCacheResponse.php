<?php
namespace  Ksyun\Client\Kci\V20200702\Models;

use Ksyun\Common\BaseModel;

class UpdateImageCacheResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 镜像缓存ID**/
         public  $ImageCacheId;

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
            if (array_key_exists("ImageCacheId",$param) and $param["ImageCacheId"] !== null) {
                $this->ImageCacheId = $param["ImageCacheId"];
            }

        }
}