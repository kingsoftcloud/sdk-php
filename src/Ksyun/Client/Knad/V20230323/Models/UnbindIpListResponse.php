<?php
namespace  Ksyun\Client\Knad\V20230323\Models;

use Ksyun\Common\BaseModel;

class UnbindIpListResponse extends BaseModel
{
         /** **/
         public  $RequestId;

         /** **/
         public  $EipCount;

         /**Object **/
         public  $EipSet;

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
            if (array_key_exists("EipCount",$param) and $param["EipCount"] !== null) {
                $this->EipCount = $param["EipCount"];
            }
            if (array_key_exists("EipSet",$param) and $param["EipSet"] !== null) {
                $this->EipSet = $param["EipSet"];
            }

        }
}