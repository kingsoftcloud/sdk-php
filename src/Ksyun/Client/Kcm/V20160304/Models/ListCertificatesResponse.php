<?php
namespace  Ksyun\Client\Kcm\V20160304\Models;

use Ksyun\Common\BaseModel;

class ListCertificatesResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /**Object **/
         public  $CertificateSet;

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
            if (array_key_exists("CertificateSet",$param) and $param["CertificateSet"] !== null) {
                $this->CertificateSet = $param["CertificateSet"];
            }

        }
}