<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;

class GetModelDetailResponse extends BaseModel
{
         /** **/
         public  $ModelApiModelDataWebResp;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("ModelApiModelDataWebResp",$param) and $param["ModelApiModelDataWebResp"] !== null) {
                $this->ModelApiModelDataWebResp = $param["ModelApiModelDataWebResp"];
            }

        }
}