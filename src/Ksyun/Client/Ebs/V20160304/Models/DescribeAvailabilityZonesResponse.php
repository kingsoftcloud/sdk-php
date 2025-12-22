<?php
namespace  Ksyun\Client\Ebs\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeAvailabilityZonesResponse extends BaseModel
{
         /** **/
         public  $RequestId;

         /**String **/
         public  $AvailabilityZones;

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
            if (array_key_exists("AvailabilityZones",$param) and $param["AvailabilityZones"] !== null) {
                $this->AvailabilityZones = $param["AvailabilityZones"];
            }

        }
}