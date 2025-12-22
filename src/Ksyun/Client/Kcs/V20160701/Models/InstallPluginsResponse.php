<?php
namespace  Ksyun\Client\Kcs\V20160701\Models;

use Ksyun\Common\BaseModel;

class InstallPluginsResponse extends BaseModel
{
         /** **/
         public  $RequestId;

         /** **/
         public  $Error;

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
            if (array_key_exists("Error",$param) and $param["Error"] !== null) {
                $this->Error = $param["Error"];
            }

        }
}