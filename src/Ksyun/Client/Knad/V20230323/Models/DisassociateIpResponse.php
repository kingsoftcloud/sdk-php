<?php
namespace  Ksyun\Client\Knad\V20230323\Models;

use Ksyun\Common\BaseModel;

class DisassociateIpResponse extends BaseModel
{
         /** **/
         public  $RequestId;

         /**Object **/
         public  $DeletedEipSet;

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
            if (array_key_exists("DeletedEipSet",$param) and $param["DeletedEipSet"] !== null) {
                $this->DeletedEipSet = $param["DeletedEipSet"];
            }

        }
}