<?php
namespace  Ksyun\Client\Cen\V20160304\Models;

use Ksyun\Common\BaseModel;

class ModifyCenRegionBandwidthResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /**Object 跨地域带宽的信息**/
         public  $CenRegionBandwidth;

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
            if (array_key_exists("CenRegionBandwidth",$param) and $param["CenRegionBandwidth"] !== null) {
                $this->CenRegionBandwidth = $param["CenRegionBandwidth"];
            }

        }
}