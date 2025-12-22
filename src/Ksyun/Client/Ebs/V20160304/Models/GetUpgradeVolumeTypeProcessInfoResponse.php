<?php
namespace  Ksyun\Client\Ebs\V20160304\Models;

use Ksyun\Common\BaseModel;

class GetUpgradeVolumeTypeProcessInfoResponse extends BaseModel
{
         /** 267168cc-28c6-4991-85d0-e851c5d6c49b**/
         public  $RequestId;

         /**Object **/
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