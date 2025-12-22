<?php
namespace  Ksyun\Client\Mongodb\V20170101\Models;

use Ksyun\Common\BaseModel;

class DescribeInstanceParamsResponse extends BaseModel
{
         /** **/
         public  $RuntimeParams;

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
            if (array_key_exists("RuntimeParams",$param) and $param["RuntimeParams"] !== null) {
                $this->RuntimeParams = $param["RuntimeParams"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }

        }
}