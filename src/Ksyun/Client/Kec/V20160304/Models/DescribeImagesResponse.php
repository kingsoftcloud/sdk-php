<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeImagesResponse extends BaseModel
{
         /** **/
         public  $RequestId;

         /** **/
         public  $Type;

         /** **/
         public  $AvailabilityZone;

         /**Object **/
         public  $ImagesSet;

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
            if (array_key_exists("Type",$param) and $param["Type"] !== null) {
                $this->Type = $param["Type"];
            }
            if (array_key_exists("AvailabilityZone",$param) and $param["AvailabilityZone"] !== null) {
                $this->AvailabilityZone = $param["AvailabilityZone"];
            }
            if (array_key_exists("ImagesSet",$param) and $param["ImagesSet"] !== null) {
                $this->ImagesSet = $param["ImagesSet"];
            }

        }
}