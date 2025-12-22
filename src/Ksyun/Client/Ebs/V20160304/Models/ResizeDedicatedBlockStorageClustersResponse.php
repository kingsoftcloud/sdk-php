<?php
namespace  Ksyun\Client\Ebs\V20160304\Models;

use Ksyun\Common\BaseModel;

class ResizeDedicatedBlockStorageClustersResponse extends BaseModel
{
         /** **/
         public  $RequestId;

         /** **/
         public  $Result;

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
            if (array_key_exists("Result",$param) and $param["Result"] !== null) {
                $this->Result = $param["Result"];
            }

        }
}