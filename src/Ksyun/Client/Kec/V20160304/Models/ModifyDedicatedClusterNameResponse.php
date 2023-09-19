<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class ModifyDedicatedClusterNameResponse extends BaseModel
{
         /** **/
         public  $ModifyDedicatedClusterNameResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("ModifyDedicatedClusterNameResponse",$param) and $param["ModifyDedicatedClusterNameResponse"] !== null) {
                $this->ModifyDedicatedClusterNameResponse = $param["ModifyDedicatedClusterNameResponse"];
            }

        }
}