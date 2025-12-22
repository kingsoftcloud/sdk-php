<?php
namespace  Ksyun\Client\Mongodb\V20170101\Models;

use Ksyun\Common\BaseModel;

class DescribeDefaultParamsResponse extends BaseModel
{
         /**Object **/
         public  $DefaultParams;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("DefaultParams",$param) and $param["DefaultParams"] !== null) {
                $this->DefaultParams = $param["DefaultParams"];
            }

        }
}