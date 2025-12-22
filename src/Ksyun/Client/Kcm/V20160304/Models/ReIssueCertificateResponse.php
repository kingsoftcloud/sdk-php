<?php
namespace  Ksyun\Client\Kcm\V20160304\Models;

use Ksyun\Common\BaseModel;

class ReIssueCertificateResponse extends BaseModel
{
         /** **/
         public  $ReIssueCertificateResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("ReIssueCertificateResponse",$param) and $param["ReIssueCertificateResponse"] !== null) {
                $this->ReIssueCertificateResponse = $param["ReIssueCertificateResponse"];
            }

        }
}