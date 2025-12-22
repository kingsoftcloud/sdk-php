<?php
namespace  Ksyun\Client\Cdn\V3\Models;

use Ksyun\Common\BaseModel;

class GetDomainAuthContentResponse extends BaseModel
{
         /** 本次校验的内容，如：cb4b37ef9e0fcbdce5dccf777452683a**/
         public  $Content;

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
            if (array_key_exists("Content",$param) and $param["Content"] !== null) {
                $this->Content = $param["Content"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }

        }
}