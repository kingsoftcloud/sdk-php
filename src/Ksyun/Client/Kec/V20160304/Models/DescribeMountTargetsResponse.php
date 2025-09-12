<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeMountTargetsResponse extends BaseModel
{
         /** **/
         public  $DescribeMountTargetsResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("DescribeMountTargetsResponse",$param) and $param["DescribeMountTargetsResponse"] !== null) {
                $this->DescribeMountTargetsResponse = $param["DescribeMountTargetsResponse"];
            }

        }
}