<?php
namespace  Ksyun\Client\Knad\V20230323\Models;

use Ksyun\Common\BaseModel;

class GetZoneListResponse extends BaseModel
{
         /** **/
         public  $RequestId;

         /**Object **/
         public  $ZoneSet;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }
            if (array_key_exists("ZoneSet",$param) and $param["ZoneSet"] !== null) {
                $this->ZoneSet = $param["ZoneSet"];
            }

        }
}