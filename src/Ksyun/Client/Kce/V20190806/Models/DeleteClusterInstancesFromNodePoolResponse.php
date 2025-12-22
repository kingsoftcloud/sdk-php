<?php
namespace  Ksyun\Client\Kce\V20190806\Models;

use Ksyun\Common\BaseModel;

class DeleteClusterInstancesFromNodePoolResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /**Object **/
         public  $InstanceSet;

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
            if (array_key_exists("InstanceSet",$param) and $param["InstanceSet"] !== null) {
                $this->InstanceSet = $param["InstanceSet"];
            }

        }
}