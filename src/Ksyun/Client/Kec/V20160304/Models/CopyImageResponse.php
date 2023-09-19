<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class CopyImageResponse extends BaseModel
{
         /** **/
         public  $ImageCopyResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("ImageCopyResponse",$param) and $param["ImageCopyResponse"] !== null) {
                $this->ImageCopyResponse = $param["ImageCopyResponse"];
            }

        }
}