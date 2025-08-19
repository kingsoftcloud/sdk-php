<?php
namespace  Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;

class DeleteSoImagesResponse extends BaseModel
{
         /**Object **/
         public  $OperationDetails;

         /** 1ded7233-54f8-44d1-a2ea-b6fcc0ca7390**/
         public  $RequestId;

         /** true**/
         public  $Return;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("OperationDetails",$param) and $param["OperationDetails"] !== null) {
                $this->OperationDetails = $param["OperationDetails"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }
            if (array_key_exists("Return",$param) and $param["Return"] !== null) {
                $this->Return = $param["Return"];
            }

        }
}