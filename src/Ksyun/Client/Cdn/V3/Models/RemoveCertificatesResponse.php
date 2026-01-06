<?php
namespace  Ksyun\Client\Cdn\V3\Models;

use Ksyun\Common\BaseModel;

class RemoveCertificatesResponse extends BaseModel
{
         /** RemoveCertificates**/
         public  $RemoveCertificates;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("RemoveCertificates",$param) and $param["RemoveCertificates"] !== null) {
                $this->RemoveCertificates = $param["RemoveCertificates"];
            }

        }
}