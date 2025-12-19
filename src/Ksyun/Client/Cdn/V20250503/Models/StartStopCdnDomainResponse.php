<?php
namespace  Ksyun\Client\Cdn\V20250503\Models;

use Ksyun\Common\BaseModel;

class StartStopCdnDomainResponse extends BaseModel
{
         /** StartStopCdnDomainResponse**/
         public  $StartStopCdnDomainResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("StartStopCdnDomainResponse",$param) and $param["StartStopCdnDomainResponse"] !== null) {
                $this->StartStopCdnDomainResponse = $param["StartStopCdnDomainResponse"];
            }

        }
}