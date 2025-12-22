<?php
namespace  Ksyun\Client\Bws\V20160304\Models;

use Ksyun\Common\BaseModel;

class CreateBandWidthShareResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 共享带宽的ID**/
         public  $BandWidthShareId;

         /** 共享带宽的带宽**/
         public  $BandWidth;

         /** 共享带宽的名称**/
         public  $BandWidthShareName;

         /** 共享带宽创建时间**/
         public  $CreateTime;

         /** 线路类型的ID**/
         public  $LineId;

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
            if (array_key_exists("BandWidthShareId",$param) and $param["BandWidthShareId"] !== null) {
                $this->BandWidthShareId = $param["BandWidthShareId"];
            }
            if (array_key_exists("BandWidth",$param) and $param["BandWidth"] !== null) {
                $this->BandWidth = $param["BandWidth"];
            }
            if (array_key_exists("BandWidthShareName",$param) and $param["BandWidthShareName"] !== null) {
                $this->BandWidthShareName = $param["BandWidthShareName"];
            }
            if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
                $this->CreateTime = $param["CreateTime"];
            }
            if (array_key_exists("LineId",$param) and $param["LineId"] !== null) {
                $this->LineId = $param["LineId"];
            }

        }
}