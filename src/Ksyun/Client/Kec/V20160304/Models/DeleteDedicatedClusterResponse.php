<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DeleteDedicatedClusterResponse extends BaseModel
{
         /** **/
         public  $DeleteDedicatedClusterResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("DeleteDedicatedClusterResponse",$param) and $param["DeleteDedicatedClusterResponse"] !== null) {
                $this->DeleteDedicatedClusterResponse = $param["DeleteDedicatedClusterResponse"];
            }

        }
}