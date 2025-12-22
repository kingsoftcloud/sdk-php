<?php
namespace  Ksyun\Client\Bws\V20160304\Models;

use Ksyun\Common\BaseModel;

class ModifyBandWidthShareResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 共享带宽的信息**/
         public  $BandWidthShare;

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
            if (array_key_exists("BandWidthShare",$param) and $param["BandWidthShare"] !== null) {
                $this->BandWidthShare = $param["BandWidthShare"];
            }

        }
}