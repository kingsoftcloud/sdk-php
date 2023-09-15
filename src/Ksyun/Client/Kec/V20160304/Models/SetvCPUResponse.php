<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class SetvCPUResponse extends BaseModel
{
         /** **/
         public  $SetvCPUResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("SetvCPUResponse",$param) and $param["SetvCPUResponse"] !== null) {
                $this->SetvCPUResponse = $param["SetvCPUResponse"];
            }

        }
}