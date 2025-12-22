<?php
namespace  Ksyun\Client\Pdns\V20160304\Models;

use Ksyun\Common\BaseModel;

class QueryEndPointRegionAZResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /**String 查询转发Zone的可用机房列表**/
         public  $availableAz;

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
            if (array_key_exists("availableAz",$param) and $param["availableAz"] !== null) {
                $this->availableAz = $param["availableAz"];
            }

        }
}