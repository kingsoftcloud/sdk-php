<?php
namespace  Ksyun\Client\Cdn\V3\Models;

use Ksyun\Common\BaseModel;

class SetCertificateResponse extends BaseModel
{
         /** 证书对应的唯一ID**/
         public  $CertificateId;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("CertificateId",$param) and $param["CertificateId"] !== null) {
                $this->CertificateId = $param["CertificateId"];
            }

        }
}