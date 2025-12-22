<?php
namespace  Ksyun\Client\Knad\V20230323\Models;

use Ksyun\Common\BaseModel;

class GetZoneListResponse extends BaseModel
{
         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }

        }
}