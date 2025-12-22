<?php
namespace  Ksyun\Client\Kcs\V20170401\Models;

use Ksyun\Common\BaseModel;

class DeleteCacheSlaveNodeResponse extends BaseModel
{
         /** **/
         public  $RequestId;

         /** **/
         public  $Data;

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
            if (array_key_exists("Data",$param) and $param["Data"] !== null) {
                $this->Data = $param["Data"];
            }

        }
}