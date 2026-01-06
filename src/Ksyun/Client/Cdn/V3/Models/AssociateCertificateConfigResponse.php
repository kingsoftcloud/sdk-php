<?php
namespace  Ksyun\Client\Cdn\V3\Models;

use Ksyun\Common\BaseModel;

class AssociateCertificateConfigResponse extends BaseModel
{
         /** ConfigCertificateResponse**/
         public  $ConfigCertificateResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("ConfigCertificateResponse",$param) and $param["ConfigCertificateResponse"] !== null) {
                $this->ConfigCertificateResponse = $param["ConfigCertificateResponse"];
            }

        }
}