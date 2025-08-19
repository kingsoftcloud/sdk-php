<?php
namespace  Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;

class CreateSoImageResponse extends BaseModel
{
         /** imageId_1e0a602e3e41**/
         public  $ImageId;

         /** requestId_c8e82c4dc8f7**/
         public  $RequestId;

         /** false**/
         public  $Result;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
                $this->ImageId = $param["ImageId"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }
            if (array_key_exists("Result",$param) and $param["Result"] !== null) {
                $this->Result = $param["Result"];
            }

        }
}