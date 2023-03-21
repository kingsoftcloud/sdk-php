<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeMinFlavorCountResponse extends BaseModel
{
         /** **/
         public  $test;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("test",$param) and $param["test"] !== null) {
                $this->test = $param["test"];
            }

        }
}