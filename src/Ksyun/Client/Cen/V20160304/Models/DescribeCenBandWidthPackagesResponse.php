<?php
namespace  Ksyun\Client\Cen\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeCenBandWidthPackagesResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 获取另一页返回结果的 token.**/
         public  $NextToken;

         /**Object 云企业网带宽包的信息**/
         public  $CenBandWidthPackageSet;

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
            if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
                $this->NextToken = $param["NextToken"];
            }
            if (array_key_exists("CenBandWidthPackageSet",$param) and $param["CenBandWidthPackageSet"] !== null) {
                $this->CenBandWidthPackageSet = $param["CenBandWidthPackageSet"];
            }

        }
}