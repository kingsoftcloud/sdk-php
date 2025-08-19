<?php
namespace  Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;

class BatchCreateProcessResponse extends BaseModel
{
         /** **/
         public  $RequestId;

         /**Object **/
         public  $ProcessInfo;

         /** **/
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
            if (array_key_exists("ProcessInfo",$param) and $param["ProcessInfo"] !== null) {
                $this->ProcessInfo = $param["ProcessInfo"];
            }
            if (array_key_exists("Return",$param) and $param["Return"] !== null) {
                $this->Return = $param["Return"];
            }

        }
}