<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;

class CreateRouteTableResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /**Object 路由表的信息**/
         public  $RouteTable;

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
            if (array_key_exists("RouteTable",$param) and $param["RouteTable"] !== null) {
                $this->RouteTable = $param["RouteTable"];
            }

        }
}