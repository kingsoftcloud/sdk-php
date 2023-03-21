<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeInstanceKmrResponse extends BaseModel
{
         /** **/
         public  $result;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("result",$param) and $param["result"] !== null) {
                $this->result = $param["result"];
            }

        }
}