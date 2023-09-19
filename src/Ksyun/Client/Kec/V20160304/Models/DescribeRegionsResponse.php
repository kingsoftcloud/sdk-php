<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeRegionsResponse extends BaseModel
{
         /** **/
         public  $RegionResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("RegionResponse",$param) and $param["RegionResponse"] !== null) {
                $this->RegionResponse = $param["RegionResponse"];
            }

        }
}