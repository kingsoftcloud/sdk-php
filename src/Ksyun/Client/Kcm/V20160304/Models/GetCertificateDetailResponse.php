<?php
namespace  Ksyun\Client\Kcm\V20160304\Models;

use Ksyun\Common\BaseModel;

class GetCertificateDetailResponse extends BaseModel
{
         /** **/
         public  $RequestId;

         /** **/
         public  $Certificate;

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
            if (array_key_exists("Certificate",$param) and $param["Certificate"] !== null) {
                $this->Certificate = $param["Certificate"];
            }

        }
}