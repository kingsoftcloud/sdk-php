<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;

class CreateRouteResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 路由的ID**/
         public  $RouteId;

         /** 是否是系统路由**/
         public  $System;

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
            if (array_key_exists("RouteId",$param) and $param["RouteId"] !== null) {
                $this->RouteId = $param["RouteId"];
            }
            if (array_key_exists("System",$param) and $param["System"] !== null) {
                $this->System = $param["System"];
            }

        }
}