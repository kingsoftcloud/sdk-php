<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class CreateModelResponse extends BaseModel
{
         /** **/
         public  $RequestId;

         /** **/
         public  $ModelId;

         /** **/
         public  $ModelName;

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
            if (array_key_exists("ModelId",$param) and $param["ModelId"] !== null) {
                $this->ModelId = $param["ModelId"];
            }
            if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
                $this->ModelName = $param["ModelName"];
            }

        }
}