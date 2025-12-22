<?php
namespace  Ksyun\Client\Kad\V20161122\Models;

use Ksyun\Common\BaseModel;

class DescribeForwardSourceResponse extends BaseModel
{
         /** **/
         public  $DescribeForwardSourceResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("DescribeForwardSourceResponse",$param) and $param["DescribeForwardSourceResponse"] !== null) {
                $this->DescribeForwardSourceResponse = $param["DescribeForwardSourceResponse"];
            }

        }
}