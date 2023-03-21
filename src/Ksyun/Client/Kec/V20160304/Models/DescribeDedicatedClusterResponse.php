<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeDedicatedClusterResponse extends BaseModel
{
         /** **/
         public  $DescribeDedicatedClusterResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("DescribeDedicatedClusterResponse",$param) and $param["DescribeDedicatedClusterResponse"] !== null) {
                $this->DescribeDedicatedClusterResponse = $param["DescribeDedicatedClusterResponse"];
            }

        }
}