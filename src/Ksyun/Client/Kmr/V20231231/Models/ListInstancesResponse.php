<?php
namespace  Ksyun\Client\Kmr\V20231231\Models;

use Ksyun\Common\BaseModel;

class ListInstancesResponse extends BaseModel
{
         /** 返回码，0表示成功，其他值表示错误**/
         public  $Code;

         /** 返回信息，通常用于描述错误信息**/
         public  $Message;

         /** 请求ID，用于唯一标识一次请求**/
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
            if (array_key_exists("Code",$param) and $param["Code"] !== null) {
                $this->Code = $param["Code"];
            }
            if (array_key_exists("Message",$param) and $param["Message"] !== null) {
                $this->Message = $param["Message"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }
            if (array_key_exists("Data",$param) and $param["Data"] !== null) {
                $this->Data = $param["Data"];
            }

        }
}