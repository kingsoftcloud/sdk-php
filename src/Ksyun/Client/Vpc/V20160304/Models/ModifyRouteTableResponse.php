<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;

class ModifyRouteTableResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 路由表的名称**/
         public  $RouteTableName;

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
            if (array_key_exists("RouteTableName",$param) and $param["RouteTableName"] !== null) {
                $this->RouteTableName = $param["RouteTableName"];
            }

        }
}