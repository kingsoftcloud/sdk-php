<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;

class DeleteInferenceEndpointResponse extends BaseModel
{
         /** **/
         public  $RequestId;

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
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }
            if (array_key_exists("EndpointId",$param) and $param["EndpointId"] !== null) {
                $this->EndpointId = $param["EndpointId"];
            }

        }
}