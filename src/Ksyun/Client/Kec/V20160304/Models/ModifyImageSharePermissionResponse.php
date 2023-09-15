<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class ModifyImageSharePermissionResponse extends BaseModel
{
         /** 请求ID。**/
         public  $RequestId;

         /** 返回结果，当有任一个镜像复制到其他区域出错，即为false，都成功才为true。**/
         public  $Return;

         /** 失败原因。**/
         public  $Message;

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
            if (array_key_exists("Return",$param) and $param["Return"] !== null) {
                $this->Return = $param["Return"];
            }
            if (array_key_exists("Message",$param) and $param["Message"] !== null) {
                $this->Message = $param["Message"];
            }

        }
}