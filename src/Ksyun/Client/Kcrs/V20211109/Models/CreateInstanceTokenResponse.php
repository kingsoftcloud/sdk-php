<?php
namespace  Ksyun\Client\Kcrs\V20211109\Models;

use Ksyun\Common\BaseModel;

class CreateInstanceTokenResponse extends BaseModel
{
         /** **/
         public  $Username;

         /** **/
         public  $tokenId;

         /** **/
         public  $Token;

         /** **/
         public  $ExpireTime;

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
            if (array_key_exists("Username",$param) and $param["Username"] !== null) {
                $this->Username = $param["Username"];
            }
            if (array_key_exists("tokenId",$param) and $param["tokenId"] !== null) {
                $this->tokenId = $param["tokenId"];
            }
            if (array_key_exists("Token",$param) and $param["Token"] !== null) {
                $this->Token = $param["Token"];
            }
            if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
                $this->ExpireTime = $param["ExpireTime"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }

        }
}