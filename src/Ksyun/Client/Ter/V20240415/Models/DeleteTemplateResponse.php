<?php
namespace  Ksyun\Client\Ter\V20240415\Models;

use Ksyun\Common\BaseModel;

class DeleteTemplateResponse extends BaseModel
{
         /** **/
         public  $RequestId;

         /** 结果**/
         public  $Return;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }
            if (array_key_exists("Return",$param) and $param["Return"] !== null) {
                $this->Return = $param["Return"];
            }

        }
}