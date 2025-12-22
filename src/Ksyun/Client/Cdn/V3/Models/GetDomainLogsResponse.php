<?php
namespace  Ksyun\Client\Cdn\V3\Models;

use Ksyun\Common\BaseModel;

class GetDomainLogsResponse extends BaseModel
{
         /** **/
         public  $GetDomainLogsResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("GetDomainLogsResponse",$param) and $param["GetDomainLogsResponse"] !== null) {
                $this->GetDomainLogsResponse = $param["GetDomainLogsResponse"];
            }

        }
}