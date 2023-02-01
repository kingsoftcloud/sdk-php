<?php
namespace  Ksyun\Client\Kad\V20161122\Models;

use Ksyun\Common\BaseModel;

class CreateForwardConfResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 四层转发配置信息**/
         public  $ForwardConf;

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
            if (array_key_exists("ForwardConf",$param) and $param["ForwardConf"] !== null) {
                $this->ForwardConf = $param["ForwardConf"];
            }

        }
}