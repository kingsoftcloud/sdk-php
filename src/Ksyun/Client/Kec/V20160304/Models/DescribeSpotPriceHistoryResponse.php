<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeSpotPriceHistoryResponse extends BaseModel
{
         /** **/
         public  $RequestId;

         /** **/
         public  $InstanceType;

         /** **/
         public  $AvailabilityZone;

         /**Object **/
         public  $SpotPrices;

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
            if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
                $this->InstanceType = $param["InstanceType"];
            }
            if (array_key_exists("AvailabilityZone",$param) and $param["AvailabilityZone"] !== null) {
                $this->AvailabilityZone = $param["AvailabilityZone"];
            }
            if (array_key_exists("SpotPrices",$param) and $param["SpotPrices"] !== null) {
                $this->SpotPrices = $param["SpotPrices"];
            }

        }
}