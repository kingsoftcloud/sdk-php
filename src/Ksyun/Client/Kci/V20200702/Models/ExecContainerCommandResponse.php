<?php
namespace  Ksyun\Client\Kci\V20200702\Models;

use Ksyun\Common\BaseModel;

class ExecContainerCommandResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** **/
         public  $WebSocketUri;

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
            if (array_key_exists("WebSocketUri",$param) and $param["WebSocketUri"] !== null) {
                $this->WebSocketUri = $param["WebSocketUri"];
            }

        }
}