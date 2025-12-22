<?php
namespace  Ksyun\Client\Cen\V20160304\Models;

use Ksyun\Common\BaseModel;

class CreateCenBandWidthPackageResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 云企业网带宽包的信息**/
         public  $CenBandWidthPackage;

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
            if (array_key_exists("CenBandWidthPackage",$param) and $param["CenBandWidthPackage"] !== null) {
                $this->CenBandWidthPackage = $param["CenBandWidthPackage"];
            }

        }
}