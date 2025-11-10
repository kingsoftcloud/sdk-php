<?php
namespace  Ksyun\Client\Kmr\V20240814\Models;

use Ksyun\Common\BaseModel;

class ListExecutorResponse extends BaseModel
{
         /** 状态码**/
         public  $status;

         /** **/
         public  $data;

         /** **/
         public  $message;

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
            if (array_key_exists("data",$param) and $param["data"] !== null) {
                $this->data = $param["data"];
            }
            if (array_key_exists("message",$param) and $param["message"] !== null) {
                $this->message = $param["message"];
            }

        }
}