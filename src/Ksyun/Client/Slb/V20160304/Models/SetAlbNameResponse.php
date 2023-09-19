<?php
namespace  Ksyun\Client\Slb\V20160304\Models;

use Ksyun\Common\BaseModel;

class SetAlbNameResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /**Object 应用型负载均衡的信息**/
         public  $ApplicationLoadBalancer;

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
            if (array_key_exists("ApplicationLoadBalancer",$param) and $param["ApplicationLoadBalancer"] !== null) {
                $this->ApplicationLoadBalancer = $param["ApplicationLoadBalancer"];
            }

        }
}