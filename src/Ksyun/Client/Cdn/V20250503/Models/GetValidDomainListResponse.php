<?php
namespace  Ksyun\Client\Cdn\V20250503\Models;

use Ksyun\Common\BaseModel;

class GetValidDomainListResponse extends BaseModel
{
         /**Object **/
         public  $Domainlist;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("Domainlist",$param) and $param["Domainlist"] !== null) {
                $this->Domainlist = $param["Domainlist"];
            }

        }
}