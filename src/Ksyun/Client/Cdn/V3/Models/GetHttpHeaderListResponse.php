<?php
namespace  Ksyun\Client\Cdn\V3\Models;

use Ksyun\Common\BaseModel;

class GetHttpHeaderListResponse extends BaseModel
{
         /** GetHttpHeaderListResponse**/
         public  $GetHttpHeaderListResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("GetHttpHeaderListResponse",$param) and $param["GetHttpHeaderListResponse"] !== null) {
                $this->GetHttpHeaderListResponse = $param["GetHttpHeaderListResponse"];
            }

        }
}