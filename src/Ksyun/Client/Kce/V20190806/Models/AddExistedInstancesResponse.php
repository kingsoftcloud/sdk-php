<?php
namespace  Ksyun\Client\Kce\V20190806\Models;

use Ksyun\Common\BaseModel;

class AddExistedInstancesResponse extends BaseModel
{
         /**Object **/
         public  $InstanceSet;

         /** 请求id**/
         public  $RequestId;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("InstanceSet",$param) and $param["InstanceSet"] !== null) {
                $this->InstanceSet = $param["InstanceSet"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }

        }
}