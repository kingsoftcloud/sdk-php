<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeAvailabilityZonesResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /**Object 可用区的信息**/
         public  $AvailabilityZoneInfo;

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
            if (array_key_exists("AvailabilityZoneInfo",$param) and $param["AvailabilityZoneInfo"] !== null) {
                $this->AvailabilityZoneInfo = $param["AvailabilityZoneInfo"];
            }

        }
}