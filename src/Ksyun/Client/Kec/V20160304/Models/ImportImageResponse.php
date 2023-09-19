<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class ImportImageResponse extends BaseModel
{
         /** **/
         public  $ImageImportResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("ImageImportResponse",$param) and $param["ImageImportResponse"] !== null) {
                $this->ImageImportResponse = $param["ImageImportResponse"];
            }

        }
}