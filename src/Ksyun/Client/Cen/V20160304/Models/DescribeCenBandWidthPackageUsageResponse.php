<?php
namespace  Ksyun\Client\Cen\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeCenBandWidthPackageUsageResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /**Object 云企业网带宽包的使用信息**/
         public  $CenBandWidthPackageUsage;

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
            if (array_key_exists("CenBandWidthPackageUsage",$param) and $param["CenBandWidthPackageUsage"] !== null) {
                $this->CenBandWidthPackageUsage = $param["CenBandWidthPackageUsage"];
            }

        }
}