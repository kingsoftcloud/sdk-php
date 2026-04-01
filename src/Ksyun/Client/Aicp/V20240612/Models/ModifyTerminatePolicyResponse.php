<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;

class ModifyTerminatePolicyResponse extends BaseModel
{
         /** 关停策略ID**/
         public  $TerminatePolicyId;

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
            if (array_key_exists("TerminatePolicyId",$param) and $param["TerminatePolicyId"] !== null) {
                $this->TerminatePolicyId = $param["TerminatePolicyId"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }

        }
}