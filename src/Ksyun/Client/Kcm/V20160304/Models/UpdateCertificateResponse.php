<?php
namespace  Ksyun\Client\Kcm\V20160304\Models;

use Ksyun\Common\BaseModel;

class UpdateCertificateResponse extends BaseModel
{
         /** **/
         public  $UpdateCertificateResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("UpdateCertificateResponse",$param) and $param["UpdateCertificateResponse"] !== null) {
                $this->UpdateCertificateResponse = $param["UpdateCertificateResponse"];
            }

        }
}