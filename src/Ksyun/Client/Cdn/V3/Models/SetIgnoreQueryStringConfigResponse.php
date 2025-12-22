<?php
namespace  Ksyun\Client\Cdn\V3\Models;

use Ksyun\Common\BaseModel;

class SetIgnoreQueryStringConfigResponse extends BaseModel
{
         /** **/
         public  $SetIgnoreQueryStringConfigResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("SetIgnoreQueryStringConfigResponse",$param) and $param["SetIgnoreQueryStringConfigResponse"] !== null) {
                $this->SetIgnoreQueryStringConfigResponse = $param["SetIgnoreQueryStringConfigResponse"];
            }

        }
}