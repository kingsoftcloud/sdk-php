<?php
namespace  Ksyun\Client\Ter\V20240415\Models;

use Ksyun\Common\BaseModel;

class DescribeStackOutputsResponse extends BaseModel
{
         /** **/
         public  $RequestId;

         /**Object **/
         public  $Outputs;

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
            if (array_key_exists("Outputs",$param) and $param["Outputs"] !== null) {
                $this->Outputs = $param["Outputs"];
            }

        }
}