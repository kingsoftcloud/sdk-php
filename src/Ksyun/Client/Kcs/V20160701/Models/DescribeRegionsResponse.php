<?php
namespace  Ksyun\Client\Kcs\V20160701\Models;

use Ksyun\Common\BaseModel;

class DescribeRegionsResponse extends BaseModel
{
         /**Object **/
         public  $RegionSet;

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
            if (array_key_exists("RegionSet",$param) and $param["RegionSet"] !== null) {
                $this->RegionSet = $param["RegionSet"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }

        }
}