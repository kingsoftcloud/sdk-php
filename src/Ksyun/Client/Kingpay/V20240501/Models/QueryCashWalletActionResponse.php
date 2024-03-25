<?php
namespace  Ksyun\Client\Kingpay\V20240501\Models;

use Ksyun\Common\BaseModel;

class QueryCashWalletActionResponse extends BaseModel
{
         /** 状态**/
         public  $status;

         /** 请求ID**/
         public  $request_id;

         /** **/
         public  $data;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("status",$param) and $param["status"] !== null) {
                $this->status = $param["status"];
            }
            if (array_key_exists("request_id",$param) and $param["request_id"] !== null) {
                $this->request_id = $param["request_id"];
            }
            if (array_key_exists("data",$param) and $param["data"] !== null) {
                $this->data = $param["data"];
            }

        }
}