<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;

class CreateCustomerGatewayResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 客户网关信息**/
         public  $CustomerGateway;

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
            if (array_key_exists("CustomerGateway",$param) and $param["CustomerGateway"] !== null) {
                $this->CustomerGateway = $param["CustomerGateway"];
            }

        }
}