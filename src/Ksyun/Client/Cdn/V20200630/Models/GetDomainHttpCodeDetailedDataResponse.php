<?php
namespace  Ksyun\Client\Cdn\V20200630\Models;

use Ksyun\Common\BaseModel;

class GetDomainHttpCodeDetailedDataResponse extends BaseModel
{
         /** **/
         public  $StartTime;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
                $this->StartTime = $param["StartTime"];
            }

        }
}