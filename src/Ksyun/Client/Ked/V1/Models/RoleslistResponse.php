<?php
namespace  Ksyun\Client\Ked\V1\Models;

use Ksyun\Common\BaseModel;

class RoleslistResponse extends BaseModel
{
         /** **/
         public  $message;

         /** 成功为 200，其他错误码参考 http 状态码 其他错误码单独给出**/
         public  $code;

         /** 请求唯一id错误时候显示到前端界面中**/
         public  $requestId;

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
            if (array_key_exists("message",$param) and $param["message"] !== null) {
                $this->message = $param["message"];
            }
            if (array_key_exists("code",$param) and $param["code"] !== null) {
                $this->code = $param["code"];
            }
            if (array_key_exists("requestId",$param) and $param["requestId"] !== null) {
                $this->requestId = $param["requestId"];
            }
            if (array_key_exists("data",$param) and $param["data"] !== null) {
                $this->data = $param["data"];
            }

        }
}