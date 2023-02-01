<?php
namespace  Ksyun\Client\Kad\V20161122\Models;

use Ksyun\Common\BaseModel;

class DescribeForwardConfResponse extends BaseModel
{
         /** **/
         public  $response;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("response",$param) and $param["response"] !== null) {
                $this->response = $param["response"];
            }

        }
}