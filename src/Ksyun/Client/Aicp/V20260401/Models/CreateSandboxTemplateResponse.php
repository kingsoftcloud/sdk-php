<?php
namespace  Ksyun\Client\Aicp\V20260401\Models;

use Ksyun\Common\BaseModel;

class CreateSandboxTemplateResponse extends BaseModel
{
         /** 20260417-123456789-0000000001**/
         public  $RequestId;

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
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }
            if (array_key_exists("Data",$param) and $param["Data"] !== null) {
                $this->Data = $param["Data"];
            }

        }
}