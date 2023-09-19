<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class TerminateModelsResponse extends BaseModel
{
         /** **/
         public  $DeleteModelResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("DeleteModelResponse",$param) and $param["DeleteModelResponse"] !== null) {
                $this->DeleteModelResponse = $param["DeleteModelResponse"];
            }

        }
}