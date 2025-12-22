<?php
namespace  Ksyun\Client\Kce\V20201231\Models;

use Ksyun\Common\BaseModel;

class CreateClusterResponse extends BaseModel
{
         /** 请求id**/
         public  $RequestId;

         /** 集群id**/
         public  $ClusterId;

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
            if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
                $this->ClusterId = $param["ClusterId"];
            }

        }
}