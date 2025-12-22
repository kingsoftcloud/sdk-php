<?php
namespace  Ksyun\Client\Knad\V20230323\Models;

use Ksyun\Common\BaseModel;

class AssociateIpResponse extends BaseModel
{
         /** **/
         public  $RequestId;

         /** **/
         public  $Return;

         /**String **/
         public  $FailEips;

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
            if (array_key_exists("Return",$param) and $param["Return"] !== null) {
                $this->Return = $param["Return"];
            }
            if (array_key_exists("FailEips",$param) and $param["FailEips"] !== null) {
                $this->FailEips = $param["FailEips"];
            }

        }
}