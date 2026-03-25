<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;

class EnableEndpointQuotaLimitResponse extends BaseModel
{
         /** **/
         public  $EndpointId;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("EndpointId",$param) and $param["EndpointId"] !== null) {
                $this->EndpointId = $param["EndpointId"];
            }

        }
}