<?php
namespace  Ksyun\Client\Ebs\V20160304\Models;

use Ksyun\Common\BaseModel;

class DetachVolumeResponse extends BaseModel
{
         /** 请求流水号**/
         public  $RequestId;

         /** **/
         public  $Return;

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
            if (array_key_exists("Return",$param) and $param["Return"] !== null) {
                $this->Return = $param["Return"];
            }

        }
}