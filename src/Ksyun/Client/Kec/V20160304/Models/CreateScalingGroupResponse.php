<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class CreateScalingGroupResponse extends BaseModel
{
         /** 请求ID-**/
         public  $RequestId;

         /** 返回集合-**/
         public  $ReturnSet;

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
            if (array_key_exists("ReturnSet",$param) and $param["ReturnSet"] !== null) {
                $this->ReturnSet = $param["ReturnSet"];
            }

        }
}