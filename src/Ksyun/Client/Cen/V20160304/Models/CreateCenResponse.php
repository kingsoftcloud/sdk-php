<?php
namespace  Ksyun\Client\Cen\V20160304\Models;

use Ksyun\Common\BaseModel;

class CreateCenResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 云企业网的信息**/
         public  $Cen;

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
            if (array_key_exists("Cen",$param) and $param["Cen"] !== null) {
                $this->Cen = $param["Cen"];
            }

        }
}