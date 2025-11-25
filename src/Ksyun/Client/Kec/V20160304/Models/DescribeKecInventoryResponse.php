<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeKecInventoryResponse extends BaseModel
{
         /** 1**/
         public  $1;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("1",$param) and $param["1"] !== null) {
                $this->1 = $param["1"];
            }

        }
}