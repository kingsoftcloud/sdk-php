<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DisableImageCachingResponse extends BaseModel
{
         /** **/
         public  $WarmUpImageResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("WarmUpImageResponse",$param) and $param["WarmUpImageResponse"] !== null) {
                $this->WarmUpImageResponse = $param["WarmUpImageResponse"];
            }

        }
}