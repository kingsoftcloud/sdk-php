<?php
namespace  Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;

class CreateEpcResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /**Object 云物理主机信息**/
         public  $Host;

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
            if (array_key_exists("Host",$param) and $param["Host"] !== null) {
                $this->Host = $param["Host"];
            }

        }
}