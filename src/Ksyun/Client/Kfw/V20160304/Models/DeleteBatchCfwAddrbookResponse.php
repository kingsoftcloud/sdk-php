<?php
namespace  Ksyun\Client\Kfw\V20160304\Models;

use Ksyun\Common\BaseModel;

class DeleteBatchCfwAddrbookResponse extends BaseModel
{
         /** 请求ID，用于标识本次请求**/
         public  $RequestId;

         /** 操作结果，true表示成功，false表示失败**/
         public  $Result;

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
            if (array_key_exists("Result",$param) and $param["Result"] !== null) {
                $this->Result = $param["Result"];
            }

        }
}