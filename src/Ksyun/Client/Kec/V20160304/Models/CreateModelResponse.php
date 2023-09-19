<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class CreateModelResponse extends BaseModel
{
         /** **/
         public  $CreateModelResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("CreateModelResponse",$param) and $param["CreateModelResponse"] !== null) {
                $this->CreateModelResponse = $param["CreateModelResponse"];
            }

        }
}