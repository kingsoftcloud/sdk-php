<?php
namespace  Ksyun\Client\Cloud_advisor\V20250610\Models;

use Ksyun\Common\BaseModel;

class GetReportResponse extends BaseModel
{
         /** **/
         public  $code;

         /** **/
         public  $msg;

         /** **/
         public  $requestId;

         /**Object **/
         public  $data;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("code",$param) and $param["code"] !== null) {
                $this->code = $param["code"];
            }
            if (array_key_exists("msg",$param) and $param["msg"] !== null) {
                $this->msg = $param["msg"];
            }
            if (array_key_exists("requestId",$param) and $param["requestId"] !== null) {
                $this->requestId = $param["requestId"];
            }
            if (array_key_exists("data",$param) and $param["data"] !== null) {
                $this->data = $param["data"];
            }

        }
}