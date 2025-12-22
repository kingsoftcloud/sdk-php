<?php
namespace  Ksyun\Client\Kce2\V20230101\Models;

use Ksyun\Common\BaseModel;

class AddEpcNodesResponse extends BaseModel
{
         /** **/
         public  $Data;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("Data",$param) and $param["Data"] !== null) {
                $this->Data = $param["Data"];
            }

        }
}