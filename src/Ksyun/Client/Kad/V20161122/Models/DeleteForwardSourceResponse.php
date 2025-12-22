<?php
namespace  Ksyun\Client\Kad\V20161122\Models;

use Ksyun\Common\BaseModel;

class DeleteForwardSourceResponse extends BaseModel
{
         /** **/
         public  $DeleteForwardSourceResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("DeleteForwardSourceResponse",$param) and $param["DeleteForwardSourceResponse"] !== null) {
                $this->DeleteForwardSourceResponse = $param["DeleteForwardSourceResponse"];
            }

        }
}