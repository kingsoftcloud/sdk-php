<?php
namespace  Ksyun\Client\Kls\V20170101\Models;

use Ksyun\Common\BaseModel;

class CheckBlacklistResponse extends BaseModel
{
         /** **/
         public  $CheckBlacklistResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("CheckBlacklistResponse",$param) and $param["CheckBlacklistResponse"] !== null) {
                $this->CheckBlacklistResponse = $param["CheckBlacklistResponse"];
            }

        }
}