<?php
namespace  Ksyun\Client\Kce\V20190806\Models;

use Ksyun\Common\BaseModel;

class InstallReleaseResponse extends BaseModel
{
         /** 请求 Id**/
         public  $ReuestId;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("ReuestId",$param) and $param["ReuestId"] !== null) {
                $this->ReuestId = $param["ReuestId"];
            }

        }
}