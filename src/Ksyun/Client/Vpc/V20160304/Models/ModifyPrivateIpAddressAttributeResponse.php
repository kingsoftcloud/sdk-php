<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;

class ModifyPrivateIpAddressAttributeResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /**Object 私网IP属性信息**/
         public  $PrivateIpAddressAttribute;

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
            if (array_key_exists("PrivateIpAddressAttribute",$param) and $param["PrivateIpAddressAttribute"] !== null) {
                $this->PrivateIpAddressAttribute = $param["PrivateIpAddressAttribute"];
            }

        }
}