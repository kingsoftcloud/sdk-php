<?php
namespace  Ksyun\Client\Mongodb\V20170101\Models;

use Ksyun\Common\BaseModel;

class DeleteClusterNodeResponse extends BaseModel
{
         /** **/
         public  $null;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("null",$param) and $param["null"] !== null) {
                $this->null = $param["null"];
            }

        }
}