<?php
namespace  Ksyun\Client\Bill_union\V20221222\Models;

use Ksyun\Common\BaseModel;

class QueryInstanceConsumeResponse extends BaseModel
{
         /** **/
         public  $status;

         /** 当前请求的RequestId**/
         public  $requestId;

         /** **/
         public  $data;

         /** **/
         public  $error;

         /** **/
         public  $ok;

         /** **/
         public  $Success;

         /** **/
         public  $RequestId;

         /** **/
         public  $Data;

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
            if (array_key_exists("requestId",$param) and $param["requestId"] !== null) {
                $this->requestId = $param["requestId"];
            }
            if (array_key_exists("data",$param) and $param["data"] !== null) {
                $this->data = $param["data"];
            }
            if (array_key_exists("error",$param) and $param["error"] !== null) {
                $this->error = $param["error"];
            }
            if (array_key_exists("ok",$param) and $param["ok"] !== null) {
                $this->ok = $param["ok"];
            }
            if (array_key_exists("Success",$param) and $param["Success"] !== null) {
                $this->Success = $param["Success"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }
            if (array_key_exists("Data",$param) and $param["Data"] !== null) {
                $this->Data = $param["Data"];
            }

        }
}