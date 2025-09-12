<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;

class CreateVpcPeeringConnectionResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 对等连接的信息**/
         public  $VpcPeeringConnection;

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
            if (array_key_exists("VpcPeeringConnection",$param) and $param["VpcPeeringConnection"] !== null) {
                $this->VpcPeeringConnection = $param["VpcPeeringConnection"];
            }

        }
}