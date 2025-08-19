<?php
namespace  Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;

class DeleteSoKeyPairsResponse extends BaseModel
{
         /**Object **/
         public  $OperationDetails;

         /** aff0c88b-1832-4f41-995d-5742ad06db7b**/
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