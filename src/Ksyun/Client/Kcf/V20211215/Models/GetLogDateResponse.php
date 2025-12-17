<?php
namespace  Ksyun\Client\Kcf\V20211215\Models;

use Ksyun\Common\BaseModel;

class GetLogDateResponse extends BaseModel
{
         /** **/
         public  $id;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("id",$param) and $param["id"] !== null) {
                $this->id = $param["id"];
            }

        }
}