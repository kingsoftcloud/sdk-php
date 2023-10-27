<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class GetVNCAddressResponse extends BaseModel
{
         /** 可供请求的host和port**/
         public  $VNCAddress;

         /**Object 需要再客户端填入的cookie值**/
         public  $Cookies;

         /** **/
         public  $Domain;

         /** **/
         public  $VNCPort;

         /** **/
         public  $RequestId;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("VNCAddress",$param) and $param["VNCAddress"] !== null) {
                $this->VNCAddress = $param["VNCAddress"];
            }
            if (array_key_exists("Cookies",$param) and $param["Cookies"] !== null) {
                $this->Cookies = $param["Cookies"];
            }
            if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
                $this->Domain = $param["Domain"];
            }
            if (array_key_exists("VNCPort",$param) and $param["VNCPort"] !== null) {
                $this->VNCPort = $param["VNCPort"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }

        }
}