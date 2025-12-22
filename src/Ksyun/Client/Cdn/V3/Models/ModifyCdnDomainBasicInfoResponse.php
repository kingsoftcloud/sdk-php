<?php
namespace  Ksyun\Client\Cdn\V3\Models;

use Ksyun\Common\BaseModel;

class ModifyCdnDomainBasicInfoResponse extends BaseModel
{
         /** ModifyCdnDomainBasicInfoResponse**/
         public  $ModifyCdnDomainBasicInfoResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("ModifyCdnDomainBasicInfoResponse",$param) and $param["ModifyCdnDomainBasicInfoResponse"] !== null) {
                $this->ModifyCdnDomainBasicInfoResponse = $param["ModifyCdnDomainBasicInfoResponse"];
            }

        }
}