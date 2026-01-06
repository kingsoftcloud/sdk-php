<?php
namespace  Ksyun\Client\Cdn\V3\Models;

use Ksyun\Common\BaseModel;

class ValidateIPResponse extends BaseModel
{
         /** 是否为金山云的CDNIP，如果是，则为true；如果不是，则为false**/
         public  $CdnIp;

         /** 运营商，运营商枚举见[使用须知](https://docs.ksyun.com/documents/196#38)**/
         public  $Isp;

         /** 区域，区域枚举见[使用须知](https://docs.ksyun.com/documents/196#36)**/
         public  $Region;

         /** 省份，省份枚举见[使用须知](https://docs.ksyun.com/documents/196#37)**/
         public  $Province;

         /** 城市**/
         public  $City;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("CdnIp",$param) and $param["CdnIp"] !== null) {
                $this->CdnIp = $param["CdnIp"];
            }
            if (array_key_exists("Isp",$param) and $param["Isp"] !== null) {
                $this->Isp = $param["Isp"];
            }
            if (array_key_exists("Region",$param) and $param["Region"] !== null) {
                $this->Region = $param["Region"];
            }
            if (array_key_exists("Province",$param) and $param["Province"] !== null) {
                $this->Province = $param["Province"];
            }
            if (array_key_exists("City",$param) and $param["City"] !== null) {
                $this->City = $param["City"];
            }

        }
}