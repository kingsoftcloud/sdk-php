<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeModelsResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 实例启动模板集合**/
         public  $ModelSet;

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
            if (array_key_exists("ModelSet",$param) and $param["ModelSet"] !== null) {
                $this->ModelSet = $param["ModelSet"];
            }

        }
}