<?php
namespace  Ksyun\Client\Tagv2\V20200901\Models;

use Ksyun\Common\BaseModel;

class CreateTagAndAttachResourceResponse extends BaseModel
{
         /** Result**/
         public  $Result;

         /** 请求ID**/
         public  $RequestId;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("Result",$param) and $param["Result"] !== null) {
                $this->Result = $param["Result"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }

        }
}