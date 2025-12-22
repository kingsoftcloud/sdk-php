<?php
namespace  Ksyun\Client\Kce2\V20230101\Models;

use Ksyun\Common\BaseModel;

class ModifyNodeResponse extends BaseModel
{
         /** **/
         public  $ClusterId;

         /** **/
         public  $InstanceId;

         /**Object **/
         public  $Components;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
                $this->ClusterId = $param["ClusterId"];
            }
            if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
                $this->InstanceId = $param["InstanceId"];
            }
            if (array_key_exists("Components",$param) and $param["Components"] !== null) {
                $this->Components = $param["Components"];
            }

        }
}