<?php
namespace  Ksyun\Client\Cdn\V20250503\Models;

use Ksyun\Common\BaseModel;

class AddCdnDomainResponse extends BaseModel
{
         /** **/
         public  $DomainId;

         /** 域名状态**/
         public  $DomainStatus;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
                $this->DomainId = $param["DomainId"];
            }
            if (array_key_exists("DomainStatus",$param) and $param["DomainStatus"] !== null) {
                $this->DomainStatus = $param["DomainStatus"];
            }

        }
}