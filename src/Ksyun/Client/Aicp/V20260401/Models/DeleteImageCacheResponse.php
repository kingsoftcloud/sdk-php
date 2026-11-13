<?php
namespace  Ksyun\Client\Aicp\V20260401\Models;

use Ksyun\Common\BaseModel;

class DeleteImageCacheResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 被删除的镜像缓存记录ID**/
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