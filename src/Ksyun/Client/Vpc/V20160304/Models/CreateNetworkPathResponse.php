<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;

class CreateNetworkPathResponse extends BaseModel
{
         /** **/
         public  $RequestId;

         /** 路径分析ID**/
         public  $PathId;

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
            if (array_key_exists("PathId",$param) and $param["PathId"] !== null) {
                $this->PathId = $param["PathId"];
            }

        }
}