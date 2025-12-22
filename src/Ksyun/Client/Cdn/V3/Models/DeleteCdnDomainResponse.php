<?php
namespace  Ksyun\Client\Cdn\V3\Models;

use Ksyun\Common\BaseModel;

class DeleteCdnDomainResponse extends BaseModel
{
         /** DeleteCdnDomainResponse**/
         public  $DeleteCdnDomainResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("DeleteCdnDomainResponse",$param) and $param["DeleteCdnDomainResponse"] !== null) {
                $this->DeleteCdnDomainResponse = $param["DeleteCdnDomainResponse"];
            }

        }
}