<?php
namespace  Ksyun\Client\Aicp\V20251114\Models;

use Ksyun\Common\BaseModel;

class CreateMemorySdkResponse extends BaseModel
{
         /** **/
         public  $RequestId;

         /** 200 成功。**/
         public  $Code;

         /** **/
         public  $Message;

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
            if (array_key_exists("Code",$param) and $param["Code"] !== null) {
                $this->Code = $param["Code"];
            }
            if (array_key_exists("Message",$param) and $param["Message"] !== null) {
                $this->Message = $param["Message"];
            }

        }
}