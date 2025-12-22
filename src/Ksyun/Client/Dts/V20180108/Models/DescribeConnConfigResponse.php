<?php
namespace  Ksyun\Client\Dts\V20180108\Models;

use Ksyun\Common\BaseModel;

class DescribeConnConfigResponse extends BaseModel
{
         /** **/
         public  $Data;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("Data",$param) and $param["Data"] !== null) {
                $this->Data = $param["Data"];
            }

        }
}