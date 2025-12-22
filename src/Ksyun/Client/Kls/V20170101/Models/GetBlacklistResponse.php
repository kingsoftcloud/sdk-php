<?php
namespace  Ksyun\Client\Kls\V20170101\Models;

use Ksyun\Common\BaseModel;

class GetBlacklistResponse extends BaseModel
{
         /** **/
         public  $GetBlacklistResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("GetBlacklistResponse",$param) and $param["GetBlacklistResponse"] !== null) {
                $this->GetBlacklistResponse = $param["GetBlacklistResponse"];
            }

        }
}