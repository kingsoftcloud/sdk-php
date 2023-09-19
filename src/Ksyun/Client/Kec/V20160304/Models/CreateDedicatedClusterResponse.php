<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class CreateDedicatedClusterResponse extends BaseModel
{
         /** **/
         public  $CreateDedicatedClusterResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("CreateDedicatedClusterResponse",$param) and $param["CreateDedicatedClusterResponse"] !== null) {
                $this->CreateDedicatedClusterResponse = $param["CreateDedicatedClusterResponse"];
            }

        }
}