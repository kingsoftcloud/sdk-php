<?php
namespace  Ksyun\Client\Memcached\V20180627\Models;

use Ksyun\Common\BaseModel;

class DescribeAvailabilityZonesResponse extends BaseModel
{
         /**Object **/
         public  $AvailabilityZoneSet;

         /** **/
         public  $RequestId;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("AvailabilityZoneSet",$param) and $param["AvailabilityZoneSet"] !== null) {
                $this->AvailabilityZoneSet = $param["AvailabilityZoneSet"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }

        }
}