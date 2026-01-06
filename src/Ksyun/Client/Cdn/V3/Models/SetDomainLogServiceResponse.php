<?php
namespace  Ksyun\Client\Cdn\V3\Models;

use Ksyun\Common\BaseModel;

class SetDomainLogServiceResponse extends BaseModel
{
         /** SetDomainLogService**/
         public  $SetDomainLogService;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("SetDomainLogService",$param) and $param["SetDomainLogService"] !== null) {
                $this->SetDomainLogService = $param["SetDomainLogService"];
            }

        }
}