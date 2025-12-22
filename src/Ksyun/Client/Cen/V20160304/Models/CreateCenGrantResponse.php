<?php
namespace  Ksyun\Client\Cen\V20160304\Models;

use Ksyun\Common\BaseModel;

class CreateCenGrantResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 云企业网授权的信息**/
         public  $CenGrant;

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
            if (array_key_exists("CenGrant",$param) and $param["CenGrant"] !== null) {
                $this->CenGrant = $param["CenGrant"];
            }

        }
}